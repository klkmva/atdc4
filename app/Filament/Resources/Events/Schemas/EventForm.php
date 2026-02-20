<?php

namespace App\Filament\Resources\Events\Schemas;

use App\Models\Book;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\FieldSet;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Components\Utilities\Get;
use App\Filament\Forms\Components\ImageInput;
use Filament\Actions\Action;
use App\Filament\Resources\Locations\Schemas\LocationForm;
use App\Filament\Resources\Books\Schemas\BookForm;
use App\Filament\Resources\Speakers\Schemas\SpeakerForm;
use App\Filament\Resources\Partners\Schemas\PartnerForm;
use App\Models\Date;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;

class EventForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('tabs')
                ->tabs([
                    Tab::make('Propriétés')
                        ->schema([
                            Section::make()
                                ->columns(6)
                                ->schema([
                                    DatePicker::make('date')
                                        ->label('date')
                                        ->closeOnDateSelection(true)
                                        ->required()
                                        ->displayFormat('ddd d/m/Y')
                                        ->locale('fr')
                                        ->datalist(fn() => Date::where('status', '<', 3)->pluck('date'))
                                        ->columnSpan(1),
                                    TimePicker::make('time')
                                        ->label('Heure de début')
                                        ->default('19:00')
                                        ->closeOnDateSelection(true)
                                        ->seconds(false)
                                        ->columnSpan(1),
                                    Select::make('location_id')
                                        ->label('Lieu')
                                        ->relationship('location', 'name')
                                        ->placeholder('Sélectionner un lieu')
                                        ->createOptionForm([
                                            Grid::make([2])
                                                ->schema(LocationForm::configure(new Schema())->getComponents())
                                        ])
                                        ->columnSpan(2),
                                    Select::make('book_id')
                                        ->label('Ouvrage associé')
                                        ->relationship('book', 'title')
                                        ->columnSpan(2)
                                        ->placeholder('Sélectionner un ouvrage')
                                        ->searchable('title')
                                        ->searchingMessage('Recherche un ouvrage...')
                                        ->preload()
                                        ->reactive()
                                        ->afterStateUpdated(function (string|null $state, Get $get, Set $set) {
                                            if (!$state) return;
                                            $book = Book::where('id', $state)->first();
                                            if ($book) {
                                                if (!filled($get('title'))) {
                                                    $set('title', $book->title);
                                                }
                                                if (!filled($get('subtitle'))) {
                                                    $set('subtitle', $book->subtitle);
                                                }
                                                if (!filled($get('info'))) {
                                                    $set('info', $book->summary);
                                                }
                                            }
                                        })
                                        ->createOptionForm([
                                            Grid::make([4])
                                                ->schema(BookForm::configure(new Schema())->getComponents())
                                        ]),
                                ])
                                ->columnSpan(4),

                            Section::make()
                                ->schema([
                                    TextInput::make('title')
                                        ->label('Titre')
                                        ->placeholder('Titre de l\'événement'),
                                    TextInput::make('subtitle')
                                        ->label('Sous-titre')
                                        ->placeholder('Sous-titre de l\'événement'),
                                ])->columnSpan(3),

                            Section::make('Image')
                                ->columns(1)
                                ->afterHeader(
                                    [
                                        Action::make('removeImage')
                                            ->label('')
                                            ->color('danger')
                                            ->icon('heroicon-o-trash')
                                            ->action(function ($record, $form) {
                                                $record->image = null;
                                                $record->save();
                                                $form->fill([
                                                    'image' => null,
                                                ]);
                                            })
                                            ->hidden(fn($record) => !$record || !$record->image),
                                    ]
                                )
                                ->schema([
                                    ImageInput::make('image')
                                        ->hiddenLabel()
                                        ->size('100px')
                                        ->live()
                                        ->reactive()
                                ])->columnSpan(1),

                            RichEditor::make('info')
                                ->label('Description')
                                ->placeholder('Desciption de l\'événement...')
                                ->columnSpan(4),

                            Select::make('speakers')
                                ->label('Intervenants')
                                ->multiple()
                                ->relationship('speakers', 'full_name')
                                ->searchable(['first_name', 'last_name'])
                                ->searchingMessage('Recherche des intervenants...')
                                ->preload()
                                ->createOptionForm([
                                    Grid::make([4])
                                        ->schema(SpeakerForm::configure(new Schema())->getComponents())
                                ])
                                ->columnSpan(2),

                            Select::make('partners')
                                ->label('Partenaires')
                                ->multiple()
                                ->relationship('partners', 'name')
                                ->searchable('name')
                                ->searchingMessage('Recherche un partenaire...')
                                ->preload()
                                ->createOptionForm([
                                    Grid::make([2])
                                        ->schema(PartnerForm::configure(new Schema())->getComponents())
                                ])
                                ->columnSpan(2),

                            FieldSet::make('Statut de l\'événement')
                                ->columns(2)
                                ->schema([
                                    Checkbox::make('published')
                                        ->label('Publié'),
                                    Checkbox::make('canceled')
                                        ->label('Annulé'),
                                ])->columnSpan(1),
                        ])->columns(4),
                    Tab::make('Bilan')
                        ->schema([
                            TextInput::make('spectators_counter')
                                ->label('Nombre de spectateurs')
                                ->columnSpanFull(),
                            Section::make('Coûts')
                                ->columns(3)
                                ->schema([
                                    TextInput::make('travel_cost')
                                        ->label('Voyage'),
                                    TextInput::make('hotel_cost')
                                        ->label('Hébergement'),
                                    TextInput::make('meal_cost')
                                        ->label('Repas'),
                                ]),
                        ])
                ])->columnSpanFull()
        ]);
    }
}
