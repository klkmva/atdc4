<?php

namespace App\Filament\Resources\Events\Schemas;

use App\Models\Book;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\DatePicker;
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
use App\Filament\Clusters\Books\Resources\Books\Schemas\BookForm;
use App\Filament\Resources\Speakers\Schemas\SpeakerForm;
use App\Filament\Resources\Partners\Schemas\PartnerForm;
use App\Models\Date;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Closure;

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
                                            ->label('Date')
                                            ->native(false)
                                            ->required()
                                            ->closeOnDateSelection(true)
                                            ->locale('fr')
                                            ->disabled(fn($operation, $rawState) => ($operation != 'create' && $rawState < \now()))
                                            ->displayFormat('D d/m/Y')
                                            ->columnSpan(1)
                                            ->rules([
                                                fn ($operation): Closure => function ($attribute, $value, Closure $fail) use ($operation) {
                                                    if ($operation == 'create') {
                                                        $date = Date::where('date', $value)->first();
                                                        if (!$date) {
                                                            $fail('Cette date n`\'est pas disponible');
                                                        }
                                                    }
                                                }
                                            ]),
                                        TimePicker::make('time')
                                            ->label('Heure')
                                            ->required()
                                            ->default('19:00')
                                            ->columnSpan(1)
                                            ->seconds(false),
                                        Select::make('location_id')
                                            ->label('Lieu')
                                            ->relationship('location', 'name')
                                            ->placeholder('Sélectionner un lieu')
                                            ->default(1)
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
                                            ->searchable()
                                            ->getSearchResultsUsing(fn(string $search): array => Book::query()
                                                ->where('title', 'like', "%{$search}%")
                                                ->orWhere('subtitle', 'like', "%{$search}%")
                                                ->limit(50)
                                                ->pluck('title', 'id')
                                                ->all())
                                            ->searchingMessage('Recherche un ouvrage...')
                                            ->preload()
                                            ->reactive()
                                            ->afterStateUpdated(function (string|null $state, Get $get, Set $set) {
                                                if (!$state) return;
                                                $book = Book::find($state);
                                                if ($book) {
                                                    if ($get('title') == '') {
                                                        $set('title', $book->title);
                                                    }
                                                    if ($get('subtitle') == '') {
                                                        $set('subtitle', $book->subtitle);
                                                    }
                                                    if ($get('info') == '') {
                                                        $set('info', $book->summary);
                                                    }
                                                    if ($get('image') == null) {
                                                        $set('image', $book->image);
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

                                Section::make()
                                    ->columns(1)
                                    ->schema([
                                        ImageInput::make('image')
                                            ->hiddenLabel()
                                            ->size('150px')
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
                                    ->searchingMessage('Recherche un intervenant...')
                                    ->preload()
                                    ->reactive()
                                    ->createOptionForm([
                                        Grid::make([4])
                                            ->schema(SpeakerForm::configure(new Schema())->getComponents())
                                    ])
                                    ->columnSpan(2),

                                Select::make('partners')
                                    ->label('Partenaires')
                                    ->multiple()
                                    ->relationship('partners', 'name')
                                    ->searchable(['name', 'short_name'])
                                    ->searchingMessage('Recherche un partenaire...')
                                    ->preload()
                                    ->reactive()
                                    ->createOptionForm([
                                        Grid::make([2])
                                            ->schema(PartnerForm::configure(new Schema())->getComponents())
                                    ])
                                    ->columnSpan(2),

                                Section::make('Statut de l\'événement')
                                    ->columns(2)
                                    ->schema([
                                        Checkbox::make('published')
                                            ->label('Publié'),
                                        Checkbox::make('canceled')
                                            ->label('Annulé'),
                                    ])->columnSpan(1),
                            ])->columns(4),
                        Tab::make('Bilan')
                            ->extraAttributes(fn(Get $get) => $get('date') > today() ? ['disabled' => true] : [])
                            ->schema([
                                Grid::make(6)
                                    ->schema([
                                        Section::make('Spectateurs')
                                            ->columns(1)
                                            ->schema([
                                                TextInput::make('spectators_counter')
                                                    ->label('Nombre')
                                                    ->columnSpan(1),
                                            ])->columnSpan(1),
                                        Section::make('Vidéo')
                                            ->columns(2)
                                            ->schema([
                                                TextInput::make('youtube_id')
                                                    ->label('ID Youtube'),
                                                TextInput::make('dailymotion_id')
                                                    ->label('ID Dailymotion'),
                                            ])->columnSpan(2),
                                        Section::make('Coûts')
                                            ->columns(3)
                                            ->schema([
                                                TextInput::make('travel_cost')
                                                    ->label('Voyage'),
                                                TextInput::make('hotel_cost')
                                                    ->label('Hébergement'),
                                                TextInput::make('meal_cost')
                                                    ->label('Repas'),
                                            ])->columnSpan(3),
                                    ])
                            ]),
                    ])->columnSpanFull()
        ]);
    }
}
