<?php

namespace App\Filament\Clusters\Books\Pages;

use Filament\Forms\Components\TextInput;
use Filament\Pages\Page;
use Filament\Schemas\Components\Form;
use Filament\Schemas\Schema;
use BackedEnum;
use App\Filament\Clusters\Books\BooksCluster;

class BnfQuery extends Page
{
    protected static ?string $cluster = BooksCluster::class;
    protected string $view = 'filament.pages.bnf-query';
    protected static ?string $navigationLabel = 'Recherche BNF';

    protected static ?int $navigationSort = 2;

    protected static string|BackedEnum|null $navigationIcon = 'admin-bnf';

    protected static ?string $title = 'Recherche d\'un ouvrage dans la base de la BNF';

    /**
     * @var string | null
     */
    public ?string $booktitle;

    /**
     * @var string | null
     */
    public ?string $bookauthor;

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Form::make([
                    TextInput::make('booktitle')
                        ->required()
                        ->label('Titre')
                        ->autofocus()
                        ->columnSpan(1),
                    TextInput::make('bookauthor')
                        ->label('Auteur')
                        ->columnSpan(1),
                ])
                ->extraAttributes(['formname' => 'bnfform'])
                ->columns(2)
                ->footer([
                    //
                ])
            ]);
    }

    public function result(): void
    {
        $data = $this->form->getState();
        $url = htmlspecialchars_decode('https://catalogue.bnf.fr/api/SRU?version=1.2&operation=searchRetrieve&query=(bib.title%20all%20"' . rawurlencode($data['booktitle']) . '")%20and%20(bib.doctype%20any%20"a")%20and%20(bib.language%20any%20"fre")');
        if ($data['bookauthor'])
            $url = $url . '%20and%20(bib.author%20any%20"' . rawurlencode($data['bookauthor']) . '")';
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $xml_result = curl_exec($ch);
        $records = $this->scan('mxc:record', $xml_result);
        if (\count($records) > 0) {
            for ($i = 0; $i < \count($records); $i++) {
                $records[$i]['fields'] = $this->scan('mxc:datafield', $records[$i]['content']);
                if (\count($records[$i]['fields']) > 1) {
                    for ($j = 0; $j < \count($records[$i]['fields']); $j++) {
                        $records[$i]['fields'][$j]['subfields'] = $this->scan('mxc:subfield', $records[$i]['fields'][$j]['content']);
                    }
                }
            }
        }
    }

    public function scan(string $tag, string $subject): array
    {
        $return = [];
        $result = [];
        $pattern = '/<' . $tag . ' (.*?)>(?ms)(.*?)<\/' . $tag . '>/';
        preg_match_all($pattern, $subject, $result);
        if (\count($result) > 1) {
            for ($i = 0; $i < \count($result[1]); $i++) {
                $return[$i]['content'] = $result[2][$i];
                $attributes = $result[1][$i];
                $attr = [];
                preg_match_all('/(\w+?)="(.*?)"/', $attributes, $attr);
                if (\count($attr) > 1) {
                    for ($j = 0; $j < \count($attr[1]); $j++) {
                        $return[$i]['attributes'][$attr[1][$j]] = $attr[2][$j];
                    }
                }
            }
        }
        return $return;
    }
}
