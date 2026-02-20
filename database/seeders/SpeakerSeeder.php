<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Speaker;

class SpeakerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('speakers')->insert([
            'id' => 1,
            'first_name' => "Pierre",
            'last_name' => "Barbancey",
            'info' => "<p>Pierre Barbancey est grand reporter au journal L&apos;Humanit&eacute;&period;<&sol;p>",
            'image' => "/images/speakers/interv1.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 2,
            'first_name' => "Guillaume",
            'last_name' => "Faburel",
            'info' => "<p>Guillaume Faburel est professeur &agrave; l&apos;Universit&eacute; Lyon 2, et enseignant dans les Instituts d&apos;Etudes Politiques de Lyon et de Rennes.</p>",
            'image' => "/images/speakers/pydlktrayqbb.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 3,
            'first_name' => "Fran&ccedil;oise",
            'last_name' => "Germain-Robin",
            'info' => "<p>Fran&ccedil;oise Germain-Robin, ex-grand reporter &agrave; l'Humanit&eacute;.</p>",
            'image' => "/images/speakers/qqdfgpdplazg.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 5,
            'first_name' => "Agn&egrave;s",
            'last_name' => "Naudin",
            'info' => "<p>Capitaine de police&comma; <strong>Agn&egrave;s Naudin<&sol;strong> est porte-parole de la FSU Int&eacute;rieur&period; Elle est l&apos;auteur de plusieurs ouvrages sur les dysfonctionnements de la police&comma; dont <em>Affaires de famille<&sol;em> &lpar;le cherche midi&comma; 2018&rpar;&comma; <em>Affaires d&apos;ados<&sol;em> &lpar;le cherche midi&comma; 2019&rpar;&comma; <em>Enfance en danger <&sol;em>&lpar;Robert Laffont&comma; 2021&rpar;&comma; <em>Avis de recherche<&sol;em> &lpar;avec Bernard Valezy&comma; Massot &eacute;ditions&comma; 2021&rpar;&period;<&sol;p>",
            'image' => "/images/speakers/interv5.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 6,
            'first_name' => "Mariame",
            'last_name' => "Tighanimine",
            'info' => "Mariame Tighanimine est sociologue&period; Co-autrice avec Ariane Chemin du documentaire La Vie devant nous&comma; r&eacute;alis&eacute; par Fr&eacute;d&eacute;ric Laffont qui raconte le quotidien des mineurs marocains recrut&eacute;s dans les ann&eacute;es 1960-1970&comma; elle est aussi l&apos;autrice de deux essais &colon; Diff&eacute;rente comme tout le monde &lpar;Le Passeur&comma; 2017&rpar; et D&eacute;voilons-nous&period; Manifeste antiraciste et f&eacute;ministe &lpar;&Eacute;ditions de l&apos;Olivier&comma; 2020&rpar;&period;",
            'image' => "/images/speakers/interv6.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 10,
            'first_name' => "Pascal",
            'last_name' => "Blanchard",
            'info' => "Historien&comma; codirecteur du Groupe de recherche Achac &lpar;collectif interdisciplinaire de chercheurs&period;euses travaillant sur les discours&comma; repr&eacute;sentations et imaginaires coloniaux et post-coloniaux&rpar;&comma; chercheur associ&eacute; au Centre d&apos;histoire internationale et d&apos;&eacute;tudes politiques de la mondialisation &agrave; l&apos;Universit&eacute; de Lausanne",
            'image' => "/images/speakers/interv10.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 11,
            'first_name' => "Jo&euml;lle",
            'last_name' => "BASSO",
            'info' => "Auteure d&apos;une poign&eacute;e de livres en po&eacute;sie ou en prose, a pratiqu&eacute; comme enseignant-chercheur en\r\n\r\nsociologie, militante et &eacute;lue municipale, psychanalyste.",
            'image' => "/images/speakers/ebowfytsennz.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 12,
            'first_name' => "Alain",
            'last_name' => "Raynaud",
            'info' => "<p> </p>",
            'image' => "/images/speakers/bdnrbozrzese.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 13,
            'first_name' => "Julie",
            'last_name' => "Assouly",
            'info' => "Ma&icirc;tre de conf&eacute;rences en civilisation am&eacute;ricaine &agrave; l&apos;UFR Lettres et Arts de l&apos;universit&eacute; d&apos;Artois&comma; Co-directrice de l&apos;&eacute;quipe Praxis et Esth&eacute;tique des Arts&comma; auteure de nombreux ouvrages sur&comma; notamment&comma; le cin&eacute;ma am&eacute;ricain&period;",
            'image' => "/images/speakers/interv13.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 14,
            'first_name' => "Christian",
            'last_name' => "GODIN",
            'info' => "Christian Godin est ma&icirc;tre de conf&eacute;rences de philosophie &agrave; l&apos;universit&eacute; Blaise-Pascal de Clermont-Ferrand et collabore &agrave; diff&eacute;rents journaux ou p&eacute;riodiques (Marianne, Le Magazine litt&eacute;raire, Sciences et avenir, etc.). Il est &eacute;galement connu pour ses multiples ouvrages p&eacute;dagogiques.",
            'image' => "/images/speakers/interv14.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 15,
            'first_name' => "Claude",
            'last_name' => "Poulain",
            'info' => "Claude Poulain est statisticien, il a fait toute sa carri&egrave;re &agrave; l'Insee o&ograve; il a travaill&eacute; &agrave; l'informatique, &agrave; la coordination statistique et &agrave; la s&eacute;curit&eacute; des fichiers. Il a aussi assur&eacute; des enseignements de l'informatique &agrave; l'ENSAE (&Eacute;cole Nationale de la Statistique et de l'Administration &Eacute;conomique), l'&eacute;cole de l'INSEE.",
            'image' => "/images/speakers/interv15.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 16,
            'first_name' => "Roger",
            'last_name' => "MARTELLI",
            'info' => "<p>Roger Martelli est agr&eacute;g&eacute; d&apos;histoire et a men&eacute; une carri&egrave;re d&apos;enseignant&period; Il a particip&eacute; aux mutations de l&apos;historiographie du communisme Fran&ccedil;ais au travers de tr&egrave;s nombreux articles et ouvrages&period; Il a copr&eacute;sid&eacute; la fondation Copernic jusqu&apos;en 20009 &comma; fait partie du Conseil scientifique de la fondation Gabriel P&eacute;ri et est codirecteur du Magazine Regards&period;<&sol;p>",
            'image' => "/images/speakers/interv16.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 17,
            'first_name' => "Xavier",
            'last_name' => "Gayan",
            'info' => "<p>Cin&eacute;aste attentif, Xavier Gayan s'attache &agrave; travers ses films &agrave; redonner un espace sensible &agrave; la parole&nbsp;</p>",
            'image' => "/images/speakers/nimediifcxfg.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 18,
            'first_name' => "&Eacute;ric",
            'last_name' => "Dacheux",
            'info' => "<p>Professeur en sciences de l&apos;information et de la communication &agrave; l&apos;Universit&eacute; Clermont-Auvergne, p&eacute;dagogue hors pair, &Eacute;ric Dacheux a dirig&eacute; de nombreux ouvrages. Il m&egrave;ne actuellement des recherches sur le partage des savoirs et la construction des d&eacute;saccords f&eacute;conds.</p>",
            'image' => "/images/speakers/speaker18.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 19,
            'first_name' => "Ali",
            'last_name' => "Fkir",
            'info' => "<p><strong>Ali Fkir</strong> ex prisonnier politique, militant infatigable, est un descendant d&apos;une famille de militants, v&eacute;ritables &laquo; guerriers irr&eacute;ductibles&nbsp;&raquo; qui ont r&eacute;sist&eacute; contre la colonisation et contre le Makhzen.&nbsp;</p>",
            'image' => "/images/speakers/interv19.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 20,
            'first_name' => "Ahmet",
            'last_name' => "Insel",
            'info' => "<p><strong>Ahmet Insel est &eacute;conomiste et politologue turc. Il a &eacute;t&eacute; vice-pr&eacute;sident de l&apos;Universit&eacute; Panth&eacute;on-Sorbonne-Paris I.</strong></p>",
            'image' => "/images/speakers/interv20.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 21,
            'first_name' => "Bernard",
            'last_name' => "Foucher",
            'info' => "<p>Bernard, 42 ans entre travail, ch&ocirc;mage et formation &agrave; la recherche de sens#133;, la suite de sa vie pour d&eacute;crypter les raisons qui, de plus en plus, nous font rimer travail avec mal &ecirc;tre souffrance et burn out. &Eacute;cole et travail pourrait-il se conjuguer avec plaisir ?</p><p>Pourrait-on financer de l&apos;activit&eacute; plut&ocirc;t que le traitement du ch&ocirc;mage ? Y aurait il complot pour maintenir un ch&ocirc;mage de masse ? Serait-il possible de d&eacute;terminer ensemble nos besoins et d&apos;imaginer des organisations de soci&eacute;t&eacute; permettant &agrave; chacun-e de trouver sa place ?</p>",
            'image' => "/images/speakers/krhgrwtytyvk.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 22,
            'first_name' => "David",
            'last_name' => "Cronin",
            'info' => "<p>David Cronin, journaliste irlandais pour le site <em>The Electronic Intifada</em>.</p>",
            'image' => "/images/speakers/mabkrkbirmty.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 23,
            'first_name' => "G&eacute;rard",
            'last_name' => "Mordillat",
            'info' => "<p>G&eacute;rard Mordillat, n&eacute; le 5 octobre 1949 [1] &agrave; Paris, est un romancier, po&egrave;te, et cin&eacute;aste fran&ccedil;ais. Il a, entre autres, publi&eacute; : Vive la Sociale !, L'Attraction universelle, Rue des Rigoles.</p>",
            'image' => "/images/speakers/rnxlvqsaaynn.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 24,
            'first_name' => "Kevin",
            'last_name' => "Boucaud-Victoire",
            'info' => "<p>Kevin Boucaud-Victoire est journaliste-&eacute;conomiste, cofondateur de la revue le Comptoir, auteur de La guerre des gauches (Cerf, 2017), George Orwell, &eacute;crivain des gens ordinaires (Premi&egrave;re partie, 2018) et Myst&egrave;re Mich&eacute;a : Portrait d'un anarchiste conservateur (L'escargot, 2019)&nbsp;</p>",
            'image' => "/images/speakers/wjwqprollwul.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 25,
            'first_name' => "Alexis",
            'last_name' => "Lecointe",
            'info' => "<p>Apr&egrave;s une formation d'ing&eacute;nieur, de l'humanitaire d'urgence, puis des green-technologies comme entrepreneur et salari&eacute;, Alexis Lecointe se recentre pour chercher sa voie. Il s'essaie &agrave; differentes activit&eacute;s comme la photographie, le cirque et les th&eacute;rapies alternatives. Finalement, apr&egrave;s une formation &laquo;&nbsp;monte ta conf&nbsp;&raquo; avec la scop du Vent Debout, il cr&eacute;e une conf&eacute;rence gesticul&eacute;e, spectacle vivant politique et participatif qui raconte ses experiences profesionnnelles et aborde des grandes questions de soci&eacute;t&eacute;.</p><p>Il choisit maintenant de regrouper l'ensemble de ses activit&eacute;s sous une seule identit&eacute;, les volets jaunes et cie.</p>",
            'image' => "/images/speakers/.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 26,
            'first_name' => "Fran&ccedil;ois",
            'last_name' => "B&eacute;gaudeau",
            'info' => "<p>Fran&ccedil;ois B&eacute;gaudeau est un &eacute;crivain fran&ccedil;ais, auteur de romans, essais et sc&eacute;narios, engag&eacute; &agrave; l'extr&ecirc;me gauche. Il est connu pour son roman Entre les murs, adapt&eacute; au cin&eacute;ma par lui-m&ecirc;me et prim&eacute; &agrave; Cannes, et pour ses critiques de la d&eacute;mocratie et du vote&nbsp;</p>",
            'image' => "/images/speakers/dcwazsjmzyoy.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 27,
            'first_name' => "Nicolas",
            'last_name' => "Fensch",
            'info' => "<p>La vie en prison, Nicolas Fensch l'a bien connue. Il a &eacute;t&eacute; condamn&eacute; &agrave; 5 ans de prison dont 2 avec sursis dans l'affaire dite du &laquo; quai de Valmy &raquo; durant le mouvement contre la loi travail en 2016&nbsp;</p>",
            'image' => "/images/speakers/ufcvfzthaefd.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 28,
            'first_name' => "Maurice",
            'last_name' => "Lemoine",
            'info' => "<p>Maurice Lemoine est un journaliste et auteur fran&ccedil;ais, sp&eacute;cialiste de l'Am&eacute;rique latine. Il a publi&eacute; des articles, des livres et des cartes sur des sujets vari&eacute;s, comme la Colombie, le Venezuela, la drogue, la d&eacute;mocratie ou la surveillance.</p>",
            'image' => "/images/speakers/llcgqdwljmnh.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 29,
            'first_name' => "Ugo",
            'last_name' => "Palheta",
            'info' => "<p>Ugo Palheta est ma&icirc;tre de conf&eacute;rences en sciences de l'&eacute;ducation &agrave; l'universit&eacute; de Lille-3 et chercheur associ&eacute; au GRESCO. Il a publi&eacute; plusieurs articles et un ouvrage sur l'enseignement professionnel, la violence symbolique, les luttes de classes et les transitions scolaires&nbsp;</p>",
            'image' => "/images/speakers/qajpynykdsfn.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 30,
            'first_name' => "Jacky",
            'last_name' => "Chabrol",
            'info' => "<p>Jacky Chabrol (J.M.C) a eu un parcours militant dense, syndicaliste, altermondialiste, associatif, &eacute;lu local. Fervent d&eacute;fenseur de la ruralit&eacute; et de l'environnement, il s'est engag&eacute; dans de nombreux combats avec un optimisme visc&eacute;ral et une envie de vivre communicative.</p>",
            'image' => "/images/speakers/lduqmbdtgfta.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 31,
            'first_name' => "Mireille",
            'last_name' => "Bruyere",
            'info' => "<p>Mireille Bruy&egrave;re est Ma&icirc;tresse de Conf&eacute;rences en Sciences Economiques &agrave; l'Universit&eacute; de Toulouse Jean Jaures (France), et membre du CERTOP (Centre de Recherche sur le Travail, l'Organisation, le Pouvoir), UMR-CNRS 5044&nbsp;</p>",
            'image' => "/images/speakers/pgchlwdlfnxn.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 32,
            'first_name' => "Alain",
            'last_name' => "Chevarin",
            'info' => "<p>Ancien enseignant, <strong>Alain Chevarin</strong> est l&apos;auteur de<em> Fascinant fascisant, une esth&eacute;tique d&apos;extr&ecirc;me droite</em> (L&apos;Harmattan, 2013) ainsi que de nombreux articles sur les extr&ecirc;mes droites.</p>",
            'image' => "/images/speakers/qzwolzctnvhl.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 33,
            'first_name' => "Michel",
            'last_name' => "Warschawski",
            'info' => "<p>Michel Warschawski est un journaliste et militant d'extr&ecirc;me gauche isra&eacute;lien, cofondateur et pr&eacute;sident du Centre d'information alternative de J&eacute;rusalem et ancien pr&eacute;sident de la Ligue Communiste R&eacute;volutionnaire Marxiste isra&eacute;lienne. Il se pr&eacute;sente &agrave; la fois comme un pacifiste et un anti-sioniste, et souhaite le remplacement de l'&Eacute;tat juif par un &Eacute;tat binational.</p>",
            'image' => "/images/speakers/usgftybcoopx.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 34,
            'first_name' => "Eric",
            'last_name' => "Panthou",
            'info' => "<p>Chercheur associ&eacute; au Centre d&apos;Histoire Espaces et Cultures, Universit&eacute; Clermont Auvergne. Auteur de plusieurs &eacute;tudes sur l&apos;histoire sociale du Puy-de-D&ocirc;me et d&apos;un ouvrage paru en 2013, &laquo; Les Plantations Michelin au Vi&ecirc;t-nam : une histoire sociale : 1924-1939 &raquo;. Coordinateur au niveau des quatre d&eacute;partements de l&apos;Auvergne, du Dictionnaire des Fusill&eacute;s. Membre du bureau de l&apos;Institut d&apos;Histoire Sociale de la CGT du Puy-de-D&ocirc;me (IHS CGT 63).&nbsp; Responsable du groupe M&eacute;moire ouvri&egrave;res &agrave; l&apos;Universit&eacute; Populaire et Citoyenne du Puy-de-D&ocirc;me.</p>",
            'image' => "/images/speakers/bvzhlxfavurw.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 35,
            'first_name' => "Nicolas",
            'last_name' => "B&eacute;rard",
            'info' => "<p>Nicolas B&eacute;rard est journaliste. Apr&egrave;s avoir particip&eacute; &agrave; la cr&eacute;ation de plusieurs m&eacute;dias ind&eacute;pendants, il collabore depuis 2013 au mensuel L&apos;&acirc;ge de faire, journal ind&eacute;pendant appartenant &agrave; ses salari&eacute;#183;es et fonctionnant sans publicit&eacute;. Il enqu&ecirc;te depuis plusieurs ann&eacute;es sur les questions de l'&eacute;nergie, des ondes et de la smart city. En 2017, il a publi&eacute; Sexy, Linky ? qui d&eacute;nonce les effets n&eacute;fastes de ce compteur dit-intelligent. Il vit et travaille en Provence.</p>",
            'image' => "/images/speakers/czawrwjgxnyd.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 36,
            'first_name' => "David",
            'last_name' => "Mauger",
            'info' => "<p>David Mauger est membre de l&apos;association Survie, une association qui s&apos;attache depuis de nombreuses ann&eacute;es &agrave; d&eacute;monter les liens criminels existant entre la France, ses politiques et ses entreprises d&apos;une part, et les dirigeants africains d&apos;autre part.</p>",
            'image' => "/images/speakers/uxbyiosrnsnd.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 37,
            'first_name' => "Val&eacute;rie",
            'last_name' => "Chamsigaud",
            'info' => "<p>Historienne des sciences et de l&apos;environnement fran&ccedil;aise. Ses travaux portent sur la perception de la nature par l'&ecirc;tre humain.</p>",
            'image' => "/images/speakers/qwjvjxuqydcl.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 39,
            'first_name' => "Philippe",
            'last_name' => "Munck",
            'info' => "<p>Son s&eacute;jour en Haute-Loire l'amena &agrave; &eacute;crire une &eacute;tude aussi volumineuse que riche et solide sur Ducellier. Politiquement, Philippe MUNCK &eacute;tait membre du PCF depuis 1953. Il est d&eacute;c&eacute;d&eacute; le 1 er Mai 2014 &agrave; l'&acirc;ge de 89 ans &agrave; Ivry-sur-Seine, l&agrave; o&ograve; il vivait.</p>",
            'image' => "/images/speakers/interv1.jpg"
        ]);
        DB::table('speakers')->insert([
            'id' => 41,
            'first_name' => "Jean",
            'last_name' => "Radvanyi",
            'info' => "<p>Jean Radvanyi (n&eacute; en 1949) est un g&eacute;ographe fran&ccedil;ais agr&eacute;g&eacute;, professeur &eacute;m&eacute;rite de g&eacute;ographie de la Russie &agrave; l'Institut national des langues et civilisations orientales (Inalco) au sein du Centre de Recherches Europes-Eurasie (CREE &acirc; EA4513), sp&eacute;cialiste du Caucase, de la Russie et de l'espace post-sovi&eacute;tique&nbsp;</p>",
            'image' => "/images/speakers/hbmyfvaixwnx.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 42,
            'first_name' => "Alain",
            'last_name' => "Badiou",
            'info' => "<p>N&eacute; en 1937 &agrave; Rabat, ancien &eacute;l&egrave;ve de l'&Eacute;cole normale sup&eacute;rieure, le philosophe fran&ccedil;ais <strong>Alain Badiou</strong> a &eacute;t&eacute; influenc&eacute; durant ses ann&eacute;es de formation par les #156uvres de Sartre, d'Althusser et de Lacan. L'exp&eacute;rience des luttes r&eacute;volutionnaires des ann&eacute;es 1960-1970 et la m&eacute;ditation des math&eacute;matiques contemporaines ont &eacute;galement jou&eacute; un r&ocirc;le d&eacute;cisif dans l'&eacute;laboration de son #156uvre. Romancier, dramaturge, militant dans le sillage du maoÃ¯sme, professeur &agrave; l'universit&eacute; de Paris-VIII, au Coll&egrave;ge international de philosophie et &agrave; l'&Eacute;cole normale sup&eacute;rieure, <strong>Alain Badiou</strong> continue d&apos;intervenir r&eacute;guli&egrave;rement dans le d&eacute;bat politique. Il est reconnu comme l'auteur d'une #156uvre majeure, &agrave; la fois fid&egrave;le &agrave; l'id&eacute;al de la philosophie comme syst&egrave;me et engag&eacute;e dans une confrontation parfois vive avec les h&eacute;ritiers de Wittgenstein, de Heidegger et de Deleuze.</p>",
            'image' => "/images/speakers/zsioqqyqayed.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 43,
            'first_name' => "Martine",
            'last_name' => "Chifflot",
            'info' => "<p>Martine Chifflot est docteure, habilit&eacute;e &agrave; diriger des recherches, en philosophie. Professeure agr&eacute;g&eacute;e honoraire de l'universit&eacute; Lyon 1, elle a enseign&eacute; l'&eacute;thique et la philosophie de l'&eacute;ducation&nbsp;</p>",
            'image' => "/images/speakers/knmzhgegnaqz.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 44,
            'first_name' => "Jean",
            'last_name' => "Michel Delaveau",
            'info' => "<p>Ing&eacute;nieur g&eacute;ographe, et sp&eacute;cialiste de la Tiretaine, Jean-Michel Delaveau conna&icirc;t tout de la rivi&egrave;re&nbsp;</p>",
            'image' => "/images/speakers/xivztvmwtjwk.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 45,
            'first_name' => "Alexandre",
            'last_name' => "Monnin",
            'info' => "<p><strong>Alexandre Monnin</strong> est Professeur &agrave; l&apos;ESC Clermont Business School en redirection &eacute;cologique et design, Directeur du MSc &laquo; Strategy & Design for the Anthropocene &raquo; (ESC Clermont BS x Strate Ecole de Design Lyon) et Directeur scientifique d&apos;Origens Media Lab. Docteur en philosophie de l&apos;Universit&eacute; Paris 1 Panth&eacute;on-Sorbonne, sa th&egrave;se a port&eacute; sur la philosophie du Web. Il est aussi membre du r&eacute;seau d&apos;experts de la mission Etalab, du GDS Ecoinfo (CNRS), du Conseil Scientifique du Centre national de la Musique (CNM), de CY Ecole de Design, membre du Conseil d&apos;Administration de la 27e R&eacute;gion et du Conseil d&apos;Orientation des Chemins de la Transition au Qu&eacute;bec.&nbsp;Avant cela, il fut chercheur chez Inria, architecte de la plateforme num&eacute;rique de Lafayette Anticipations et Responsable recherche Web &agrave; l&apos;IRI du Centre Pompidou. Il a &eacute;galement collabor&eacute; avec l&apos;UNESCO ou encore le Shift project (co-auteur du rapport Pour une sobri&eacute;t&eacute; num&eacute;rique en 2018).</p>",
            'image' => "/images/speakers/ipoqbzfptiuz.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 46,
            'first_name' => "Laurent",
            'last_name' => "Mauduit",
            'info' => "<p>Laurent Mauduit est un &eacute;crivain et journaliste d'investigation fran&ccedil;ais sp&eacute;cialis&eacute; dans les affaires &eacute;conomiques, et la politique &eacute;conomique et sociale. Il travaille pour le journal en ligne Mediapart, dont il est l'un des cofondateurs.</p>",
            'image' => "/images/speakers/uhpmeuxcgcgv.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 47,
            'first_name' => "Martine",
            'last_name' => "Court",
            'info' => "<p>Martine Court est ma&icirc;tresse de conf&eacute;rences en sociologie &agrave; l'universit&eacute; Clermont-Auvergne. Elle a publi&eacute; plusieurs articles et ouvrages sur la socialisation des enfants, la sexualit&eacute;, les in&eacute;galit&eacute;s sociales et le genre&nbsp;</p>",
            'image' => "/images/speakers/ohltakyhcmce.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 48,
            'first_name' => "Bruno",
            'last_name' => "Jaffr&eacute;",
            'info' => "<p>Bruno Jaffr&eacute;, actuellement retrait&eacute; est un ancien ing&eacute;nieur de recherche chez Orange.</p><p>Il s'est passionn&eacute; pour l'histoire moderne du Burkina, notamment la p&eacute;riode r&eacute;volutionnaire de 1983 &agrave; 1987. Il est auteur d'une biographie du Pr&eacute;sident Thomas Sankara.</p><p>Il fut aussi le pr&eacute;sident fondateur de l'ONG fran&ccedil;aise Coop&eacute;ration Solidarit&eacute; D&eacute;veloppement dans les Postes et T&eacute;l&eacute;communications cr&eacute;&eacute; en 1988 dont il a quitt&eacute; la Pr&eacute;sidence en 2005.</p>",
            'image' => "/images/speakers/eaofabqplcaa.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 49,
            'first_name' => "G&eacute;rard",
            'last_name' => "Choplin",
            'info' => "<p>G&eacute;rard Choplin, agronome de formation, a jou&eacute; un r&ocirc;le moteur dans la construction, le d&eacute;veloppement et l'animation de la Coordination Paysanne Europ&eacute;enne de 1982 &agrave; 2008. Il est aujourd'hui analyste-r&eacute;dacteur ind&eacute;pendant sur les politiques agricoles, commerciales et alimentaires. Il r&eacute;side &agrave; Bruxelles.</p>",
            'image' => "/images/speakers/cxryqxriazdz.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 50,
            'first_name' => "Houria",
            'last_name' => "Bouteldja",
            'info' => "<p>Houria Bouteldja est une essayiste et une militante politique d&eacute;coloniale, franco-alg&eacute;rienne n&eacute;e le 5 janvier 1973 &agrave; Constantine en Alg&eacute;rie. Elle est l'autrice des livres Les Blancs, les Juifs et nous : vers une politique de l'amour r&eacute;volutionnaire (2016) et Beaufs et barbares, Le pari du nous (2023)&nbsp;</p>",
            'image' => "/images/speakers/eimadbvnappd.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 51,
            'first_name' => "Alain",
            'last_name' => "Deneault",
            'info' => "<p><strong>Alain Deneault</strong> est docteur en philosophie de l&apos;universit&eacute; Paris-VIII et directeur de programme au Coll&egrave;ge international de philosophie &agrave; Paris.</p><p>Il est notamment l&apos;auteur de <em>Noir Canada</em> (&Eacute;cosoci&eacute;t&eacute;), <em>Offshore </em>(La Fabrique/&Eacute;cosoci&eacute;t&eacute;), <em>Paradis sous terre</em> (Rue de l&apos;&eacute;chiquier/&Eacute;cosoci&eacute;t&eacute;) et <em>La M&eacute;diocratie</em> (Lux &eacute;diteur). Il a r&eacute;cemment publi&eacute; De quoi Total est-elle la somme ? (Rue de l&apos;&eacute;chiquier/&Eacute;cosoci&eacute;t&eacute;).</p>",
            'image' => "/images/speakers/cthhvwvpksvk.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 52,
            'first_name' => "Olivier",
            'last_name' => "Nobile",
            'info' => "<p>D&eacute;l&eacute;gu&eacute; national aux questions sociales et familiales de l'UFAL, cadre dirigeant du R&eacute;gime G&eacute;n&eacute;ral de S&eacute;curit&eacute; sociale, enseignant &agrave; Sciences Po Strasbourg et auteur de l'ouvrage : &laquo; Pour en finir avec le Trou de la S&eacute;cu &raquo; &eacute;d. Eric Jammet.</p>",
            'image' => "/images/speakers/interv1.jpg"
        ]);
        DB::table('speakers')->insert([
            'id' => 54,
            'first_name' => "Eric",
            'last_name' => "Berr",
            'info' => "<p>Eric Berr est ma&icirc;tre de conf&eacute;rences en &eacute;conomie &agrave; l&apos;universit&eacute; de Bordeaux et docteur en &eacute;conomie. Ses recherches portent sur les questions de dette, et plus g&eacute;n&eacute;ralement de financement des &eacute;conomies, ainsi que sur les politiques macro&eacute;conomiques et sur la soutenabilit&eacute; des mod&egrave;les de d&eacute;veloppement.</p>",
            'image' => "/images/speakers/ngbczrezqvyt.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 55,
            'first_name' => "Michelle",
            'last_name' => "Zancarini",
            'info' => "<p>Michelle Zancarini-Fournel est professeure &eacute;m&eacute;rite en histoire des femmes et du genre, de l'universit&eacute; Lyon 1, et membre du Laboratoire de recherche historique Rh&ocirc;ne-Alpes. Elle fait &eacute;galement partie du comit&eacute; de r&eacute;daction de la revue CLIO, Femmes genre histoire.</p>",
            'image' => "/images/speakers/shcvtfprfreg.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 56,
            'first_name' => "Nicolas",
            'last_name' => "de la Casini&egrave;re",
            'info' => "<p>Nicolas de La Casini&egrave;re est un journaliste correspondant de plusieurs journaux tels que Lib&eacute;ration, L'Express, Ouest-France, Bretagne Magazine ou encore au journal satirique La Lettre &agrave; Lulu. Il est &eacute;galement r&eacute;dacteur en chef de la revue en ligne de l'Observatoire g&eacute;opolitique des criminalit&eacute;s.</p>",
            'image' => "/images/speakers/czokocohfxql.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 57,
            'first_name' => "Olivier",
            'last_name' => "Favier",
            'info' => "<p>Olivier Favier, n&eacute; en 1972, est historien de formation, traducteur et interpr&egrave;te de l'italien, reporter ind&eacute;pendant. En 2010, il a cr&eacute;&eacute; le site dormirajamais.org pour ne pas avoir &agrave; choisir entre toutes les choses qui le tiennent r&eacute;veill&eacute; : des passions, des col&egrave;res, des rencontres et des &eacute;merveillements.</p>",
            'image' => "/images/speakers/irqqramftstt.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 58,
            'first_name' => "Bertrand",
            'last_name' => "Badie",
            'info' => "<p>Bertrand Badie est un universitaire et politiste fran&ccedil;ais sp&eacute;cialiste des relations internationales. Il a publi&eacute; plusieurs ouvrages, dont Nous ne sommes plus seuls au monde, et a dirig&eacute; l'ouvrage annuel L'&eacute;tat du monde.</p>",
            'image' => "/images/speakers/uobhybplfvvm.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 59,
            'first_name' => "Bertrand",
            'last_name' => "Cochard",
            'info' => "<p>Bertrand Cochard est agr&eacute;g&eacute; et docteur en philosophie. Il a r&eacute;cemment publi&eacute;, aux &eacute;ditions Hermann (2021), Guy Debord et la philosophie, avec une pr&eacute;face d'&Eacute;tienne Balibar&nbsp;</p>",
            'image' => "/images/speakers/vbkusxysgjwj.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 61,
            'first_name' => "Jean-Pierre",
            'last_name' => "Levaray",
            'info' => "<p>Jean-Pierre Levaray est un ouvrier syndicaliste &agrave; la Conf&eacute;d&eacute;ration g&eacute;n&eacute;rale du travail, &eacute;crivain libertaire fran&ccedil;ais et militant &agrave; la F&eacute;d&eacute;ration anarchiste.</p>",
            'image' => "/images/speakers/interv61.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 62,
            'first_name' => "Jean-Pierre",
            'last_name' => "Terrail",
            'info' => "<p>Sociologue, professeur &eacute;m&eacute;rite, Terrail est l'un des co-fondateurs du GRDS, Groupe de recherche sur la d&eacute;mocratisation scolaire dont le nom t&eacute;moigne du projet : en finir avec les in&eacute;galit&eacute;s scolaires, rendre la r&eacute;ussite scolaire accessible &agrave; tous les enfants sans condition&nbsp;</p>",
            'image' => "/images/speakers/hyrtbfhsvuwr.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 63,
            'first_name' => "Andr&eacute;",
            'last_name' => "Rosev&egrave;gue",
            'info' => "<p>N&eacute; en 1945 d&apos;un p&egrave;re polonais et d&apos;une m&egrave;re roumaine, tous deux juifs et communistes, <strong>Andr&eacute; Rosev&egrave;gue</strong> tente depuis quelques ann&eacute;es de reconstituer le puzzle du pass&eacute; familial. Il conserve pr&eacute;cieusement des documents jaunis par le temps dans une pochette o&ograve;, en vrac, se trouvent des &eacute;tats-civils d&apos;apr&egrave;s-guerre, des documents du Parti Communiste Fran&ccedil;ais (PCF), mais aussi des odes &agrave; la r&eacute;sistance : &laquo; <em>Paysans fran&ccedil;ais, face aux tra&icirc;tres de Vichy, battez-vous pour vos 500 grammes de pain !</em> &raquo;. Des drames v&eacute;cus par sa famille, il semble tirer une &eacute;nergie inalt&eacute;rable et milite aujourd&apos;hui au sein de plusieurs organisations. Andr&eacute; l&apos;avoue : s&apos;il a longtemps pr&eacute;f&eacute;r&eacute; parler d&apos;une &laquo; origine familiale juive &raquo;, il est n&eacute;anmoins devenu ces derni&egrave;res ann&eacute;es une &laquo; voix juive pour la paix &raquo;, presque par n&eacute;cessit&eacute;.</p>",
            'image' => "/images/speakers/yqpzklzsmklm.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 64,
            'first_name' => "R&eacute;gis",
            'last_name' => "Chamagne",
            'info' => "<p>R&eacute;gis Chamagne est un colonel de l'aviation fran&ccedil;aise, il fut commandant de l'escadron Mirage F1C &agrave; Cambrai, puis commandant de l'escadron de reconnaissance au Mirage F1C &agrave; Strasbourg. Chevalier de la L&eacute;gion d'Honneur, chevalier de l'ordre National du m&eacute;rite.</p>",
            'image' => "/images/speakers/uaoevcdppguo.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 66,
            'first_name' => "Jacques",
            'last_name' => "Sapir",
            'info' => "<p>Il enseigne &agrave; l'universit&eacute; Paris-Nanterre, avant de devenir ma&icirc;tre de conf&eacute;rences puis directeur d'&eacute;tudes &agrave; l'EHESS, directeur du Centre d'&eacute;tudes des modes d'industrialisation (CEMI-EHESS) et responsable de formation doctorale. Il est &eacute;lu membre (&agrave; titre &eacute;tranger) de l'Acad&eacute;mie des sciences de Russie en octobre 2016.</p><p>Sp&eacute;cialiste de l'&eacute;conomie russe et des questions strat&eacute;giques, ainsi que th&eacute;oricien de l'&eacute;conomie, il se fait conna&icirc;tre par ses positions h&eacute;t&eacute;rodoxes tr&egrave;s marqu&eacute;es sur divers sujets et son engagement politique. D'abord situ&eacute; &agrave; gauche pour sa critique du n&eacute;o-lib&eacute;ralisme, il en vient &agrave; pr&ocirc;ner des rapprochement vers la droite et l'extr&ecirc;me droite par ses th&egrave;ses int&eacute;ressant la mouvance souverainiste.</p><p>Promoteur de la Russie de Vladimir Poutine et actif dans des m&eacute;dias d'&Eacute;tat russes, il soutient la ligne officielle du r&eacute;gime de Vladimir Poutine dont il partage les analyses et la propagande.</p>",
            'image' => "/images/speakers/gqpazpvwqzsw.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 67,
            'first_name' => "Yves",
            'last_name' => "Gu&eacute;don",
            'info' => "<p>Pr&eacute;sident de Chom'Actif<br data-mce-bogus=\"1\"></p>",
            'image' => "/images/speakers/ufvmvhgdjuzb.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 68,
            'first_name' => "Jean",
            'last_name' => "Fran&ccedil;ois Mezeix",
            'info' => "<p>Ancien physicien de l'atmosph&egrave;re, Jean-Fran&ccedil;ois Mezeix pr&eacute;sente les r&eacute;alit&eacute;s du changement climatique, les rapports du GIEC et les pistes pour agir.</p>",
            'image' => "/images/speakers/jkcaqskwmmkg.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 69,
            'first_name' => "Bernard",
            'last_name' => "Friot",
            'info' => "<p>Bernard Friot est un sociologue et &eacute;conomiste fran&ccedil;ais n&eacute; le 16 juin 1946 &agrave; Neufch&acirc;teau (Vosges), professeur &eacute;m&eacute;rite &agrave; l'universit&eacute; Paris-Nanterre (Paris X)1.</p><p>Il th&eacute;orise la notion de &laquo; salaire &agrave; vie &raquo; avec l'association d'&eacute;ducation populaire R&eacute;seau Salariat. Ses travaux s'appuient sur une relecture de l'histoire &eacute;conomique fran&ccedil;aise et de ses institutions, dont notamment le r&eacute;gime g&eacute;n&eacute;ral de la s&eacute;curit&eacute; sociale et la cotisation sociale. </p>",
            'image' => "/images/speakers/qynoasikadnd.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 71,
            'first_name' => "Di&eacute;go",
            'last_name' => "Landivar",
            'info' => "<p>Diego Landivar est Docteur en Sciences Economique et ancien &eacute;l&egrave;ve Normalien &agrave; l&apos;Universit&eacute; Paris-Saclay. Ses travaux portent sur les reconfigurations ontologiques.&nbsp; Ses publications portent sur le droit de la nature et des non-humains, le statut des objets techniques, les controverses, l&apos;anthropoc&egrave;ne ou encore les ontologies territoriales. Il est co-fondateur et directeur du laboratoire Origens Medialab.&nbsp; Il conseille diff&eacute;rents territoires et pouvoirs publics en qu&ecirc;te de singularit&eacute; identitaire et d&apos;alternatives &eacute;cologiques. Il est &eacute;galement co-fondateur du Programme PEOPLE.</p>",
            'image' => "/images/speakers/lygwhapaples.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 72,
            'first_name' => "Ignacio",
            'last_name' => "Ramonet",
            'info' => "",
            'image' => "/images/speakers/ntdkybjzblhb.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 73,
            'first_name' => "Patrice",
            'last_name' => "Bouveret",
            'info' => "<p>Cofondateur et pr&eacute;sident de l&apos;Observatoire des armements/Centre de documentation et de recherche sur la paix et les conflits, Lyon.</p>",
            'image' => "/images/speakers/qdgfgrjwukba.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 74,
            'first_name' => "Julien",
            'last_name' => "Lucchini",
            'info' => "<p>Responsable &eacute;ditorial histoire aux &Eacute;ditions de l'Atelier.</p>",
            'image' => "/images/speakers/ylalxcakbmqs.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 75,
            'first_name' => "J&eacute;r&ocirc;me",
            'last_name' => "Sainte Marie",
            'info' => "",
            'image' => "/images/speakers/ezyzybwwfxva.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 78,
            'first_name' => "Bernard",
            'last_name' => "Teper",
            'info' => "<p>&nbsp;Bernard Teper, ing&eacute;nieur &eacute;conomiste &agrave; la retraite, membre du conseil scientifique d'Atta. </p>",
            'image' => "/images/speakers/agndnxunvapb.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 79,
            'first_name' => "Jean",
            'last_name' => "Baub&eacute;rot",
            'info' => "<p>Marqu&eacute; par son engagement politique, cet historien a &eacute;tudi&eacute; le protestantisme avant de renouveler le cadre conceptuel de la laÃ¯cit&eacute;. En rejetant toujours la parole dominante.</p>",
            'image' => "/images/speakers/whgyiomzmnkr.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 80,
            'first_name' => "Herv&eacute;",
            'last_name' => "Defalvard",
            'info' => "<p> Ma&icirc;tre de conf&eacute;rences en &eacute;conomie, UPEM, Chaire ESS-UGE (&Eacute;conomie sociale et solidaire - universit&eacute; Gustave Eiffel), &Eacute;rudite (&Eacute;quipe de recherche sur l'utilisation des donn&eacute;es individuelles en lien avec la th&eacute;orie &eacute;conomique, EA 437). </p>",
            'image' => "/images/speakers/hphcrkeyjspa.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 81,
            'first_name' => "Jean",
            'last_name' => "Baptiste Libouban",
            'info' => "<p>Jean-Baptiste Libouban, n&eacute; &agrave; Paris le 24 f&eacute;vrier 1935 et mort le 14 juin 2021 &agrave; Besan&ccedil;on, a &eacute;t&eacute; membre des Communaut&eacute;s de l'Arche, dont il a &eacute;t&eacute; le principal responsable de 1990 &agrave; 2005 et fut l'initiateur du mouvement des &laquo; Faucheurs volontaires &raquo;</p>",
            'image' => "/images/speakers/tzuiixpgbdyw.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 82,
            'first_name' => "Annie",
            'last_name' => "Lacroix Riz",
            'info' => "<p>Professeur d&apos;histoire contemporaine, universit&eacute; Paris-VII, auteure des essais <em>Le Vatican, l&apos;Europe et le Reich 1914-1944</em> et <em>Le Choix de la d&eacute;faite : les &eacute;lites fran&ccedil;aises dans les ann&eacute;es 1930</em>, Armand Colin, Paris, 1996 et 2006.</p>",
            'image' => "/images/speakers/rnxkgpapwmuw.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 83,
            'first_name' => "Jean",
            'last_name' => "Pierre Sim&eacute;on",
            'info' => "<p>Jean-Pierre Sim&eacute;on est un po&egrave;te, romancier, critique et dramaturge fran&ccedil;ais n&eacute; en 1950. Il a dirig&eacute; la collection Po&eacute;sie / Gallimard et le Printemps des Po&egrave;tes, et a re&ccedil;u le Prix Apollinaire en 1994.</p>",
            'image' => "/images/speakers/dnzmyybcmfne.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 84,
            'first_name' => "Julie",
            'last_name' => "Pagis",
            'info' => "<p>Julie Pagis &eacute;tudie les cons&eacute;quences biographiques du militantisme en Mai 68 et les perceptions enfantines de l'ordre social et politique. Elle est charg&eacute;e de recherche au CNRS, co-responsable du s&eacute;minaire \"Sciences sociales de l'enfance\" et co-directrice de la revue Gen&egrave;ses.</p>",
            'image' => "/images/speakers/qhafcjliflzz.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 86,
            'first_name' => "Thierry",
            'last_name' => "Brugvin",
            'info' => "<p>&nbsp;Docteur en sociologie, Thierry Brugvin est enseignant en psycho-sociologie &agrave; l'Universit&eacute; de Besan&ccedil;on et psychoth&eacute;rapeute. Ses th&egrave;mes de recherche sont :</p><p>L'action des mouvements sociaux transnationaux dans la r&eacute;gulation d&eacute;mocratique du travail, du commerce &eacute;thique, &eacute;quitable et la d&eacute;croissance.</p><p>La dimension ill&eacute;gale et ad&eacute;mocratique des &eacute;lites &eacute;conomiques et politiques internationales.</p><p>Il est l&apos;auteur de plusieurs ouvrages collectifs et de quatre ouvrages individuels.&nbsp;</p>",
            'image' => "/images/speakers/rwpqbtxeojlv.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 87,
            'first_name' => "Jean-Loup",
            'last_name' => "Izambert",
            'info' => "<p>Jean-Loup Izambert est un journaliste et &eacute;crivain fran&ccedil;ais. Issu de l&apos;enseignement agricole, dipl&ocirc;m&eacute; de l&apos;&Eacute;cole des Hautes &Eacute;tudes Internationales (HEI), de l'&Eacute;cole des Hautes &Eacute;tudes Sociales (HES) et de l&apos;&Eacute;cole sup&eacute;rieure de journalisme (ESJ), il a, depuis 1972, &eacute;t&eacute; successivement r&eacute;dacteur, maquettiste, reporter, r&eacute;dacteur en chef dans la presse r&eacute;gionale, sp&eacute;cialis&eacute;e et nationale fran&ccedil;aise. Il s&apos;int&eacute;resse aux questions &eacute;conomiques, politiques et sociales et exerce son m&eacute;tier en ind&eacute;pendant &agrave; partir de 1987. Il collabore r&eacute;guli&egrave;rement (1987 &agrave; 1995) &agrave; l&apos;hebdomadaire VSD, au mensuel &eacute;conomique et financier du groupe \"Les &Eacute;chos\" et &agrave; \"L&apos;Humanit&eacute;\".</p>",
            'image' => "/images/speakers/xlakkscojrrm.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 88,
            'first_name' => "Bernard",
            'last_name' => "Genet",
            'info' => "",
            'image' => "/images/speakers/ufcipdonjzxh.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 89,
            'first_name' => "Pierre",
            'last_name' => "Stambul",
            'info' => "<p>Pierre Stambul, professeur de math&eacute;matiques et militant du BDS, se pr&eacute;sente comme un juif engag&eacute; pour la paix au Proche-Orient. Il d&eacute;nonce l'impunit&eacute; d'Isra&euml;l, le boycott comme arme l&eacute;gitime de r&eacute;sistance et la discrimination contre les Palestiniens.</p>",
            'image' => "/images/speakers/kduhhwhfojtc.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 90,
            'first_name' => "Mathilde",
            'last_name' => "Moracchini",
            'info' => "<p>Dipl&ocirc;m&eacute;e de management public international. - Travaille dans l'accompagnement des populations pr&eacute;caires (en 2014). - Membre du secteur \"&eacute;tudes et arguments\" du Parti de gauche (en 2014).</p>",
            'image' => "/images/speakers/interv1.jpg"
        ]);
        DB::table('speakers')->insert([
            'id' => 91,
            'first_name' => "J&eacute;zabel",
            'last_name' => "Couppey",
            'info' => "<p>&nbsp;&eacute;conomiste, ma&icirc;tresse de conf&eacute;rences &agrave; l&apos;Universit&eacute; Paris 1 Panth&eacute;on-Sorbonne o&ograve; elle enseigne l&apos;&eacute;conomie mon&eacute;taire et financi&egrave;re et dirige une formation de master professionnel en alternance d&eacute;di&eacute;e au contr&ocirc;le des risques bancaires et &agrave; la conformit&eacute;. Mes travaux portent sur les banques, l&apos;instabilit&eacute; et la r&eacute;gulation financi&egrave;res </p>",
            'image' => "/images/speakers/pllrdrkknqnw.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 92,
            'first_name' => "Thomas",
            'last_name' => "Vescovi",
            'info' => "<p>Thomas Vescovi est chercheur ind&eacute;pendant en histoire contemporaine. Dipl&ocirc;m&eacute; de l&apos;universit&eacute; Paris-8, il collabore &agrave; diff&eacute;rents m&eacute;dias (Middle East Eye, Le Monde diplomatique, Moyen-Orient). Il est l&apos;auteur de La M&eacute;moire de la Nakba en Isra&euml;l (L&apos;Harmattan, 2015).</p>",
            'image' => "/images/speakers/cvolnhozfhpq.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 93,
            'first_name' => "Chantal",
            'last_name' => "Jaquet",
            'info' => "<p>Chantal Jaquet, n&eacute;e en 1956, est une historienne de la philosophie et une philosophe fran&ccedil;aise contemporaine. Sp&eacute;cialiste de Spinoza, de l'histoire de la philosophie moderne, de la philosophie du corps et de la philosophie sociale, elle a dirig&eacute; le Centre d'histoire des philosophies modernes de la Sorbonne de 2018 &agrave; 2021.</p>",
            'image' => "/images/speakers/kgatadyfpluy.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 94,
            'first_name' => "Julien",
            'last_name' => "Sorez",
            'info' => "<p>Julien Sorez est agr&eacute;g&eacute; d&apos;histoire et ma&icirc;tre de conf&eacute;rences &agrave; l&apos;UFR Staps de l&apos;Universit&eacute; Paris Nanterre. Apr&egrave;s avoir soutenu un doctorat d&apos;histoire sur le football dans Paris et ses banlieues &agrave; Sciences Po, il m&egrave;ne actuellement des recherches sur l&apos;histoire sociale du sport en France.</p>",
            'image' => "/images/speakers/yspgxihztnhg.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 95,
            'first_name' => "Karim",
            'last_name' => "Hammou",
            'info' => "<p>Sociologue, charg&eacute; de recherche au CNRS</p>",
            'image' => "/images/speakers/slmylystxptg.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 96,
            'first_name' => "Julian",
            'last_name' => "Mischi",
            'info' => "<p>&nbsp;Julian Mischi est un universitaire fran&ccedil;ais n&eacute; en 1974, sociologue et politiste, chercheur &agrave; l'Institut national de recherche pour l'agriculture, l'alimentation et l'environnement (INRAE), membre de l'IRISSO de l'Universit&eacute; Paris-Dauphine-PSL </p>",
            'image' => "/images/speakers/jsmwasevtlsh.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 97,
            'first_name' => "Fr&eacute;d&eacute;ric",
            'last_name' => "Farah",
            'info' => "<p>Professeur de lyc&eacute;e en sciences &eacute;conomiques et sociales, charg&eacute; de cours &agrave; l&apos;universit&eacute; Paris-I. Coauteur de Tafta. L&apos;accord du plus fort, Max Milo, 2014.</p>",
            'image' => "/images/speakers/uvpyutuvnxqp.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 98,
            'first_name' => "Laurent",
            'last_name' => "Lamoine",
            'info' => "<p>Ma&icirc;tre de conf&eacute;rences en histoire romaine, Laurent Lamoine est sp&eacute;cialiste de la Gaule celtique et romaine sous la R&eacute;publique et l&apos;Empire, plus particuli&egrave;rement des &eacute;lites locales et des institutions municipales dans les provinces gauloises. Il s&apos;int&eacute;resse &agrave; l&apos;&eacute;pigraphie romaine et &agrave; la repr&eacute;sentation des Gaulois aux XIXe-XXe si&egrave;cles. Il est membre du programme Poder, guerra y diplomacia en el Occidente antiguo (2019-2023) dont le responsable est Eduardo SÃ¡nchez Moreno (UAM) et chercheur associ&eacute;, au sein de l&apos;UMR 8210 ANHIMA (CNRS, Paris I, IV et EPHE)</p>",
            'image' => "/images/speakers/dawzcfhlyhhx.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 99,
            'first_name' => "Aur&eacute;lien",
            'last_name' => "Bernier",
            'info' => "<p><strong>Aur&eacute;lien Bernier</strong> est un auteur et militant, sp&eacute;cialiste des politiques environnementales et se revendiquant du courant de la d&eacute;mondialisation.</p><p>Il est charg&eacute; de mission dans l&apos;environnement. Il a travaill&eacute; pendant dix ans pour l&apos;Agence de l&apos;environnement et de la ma&icirc;trise de l&apos;&eacute;nergie (Ademe). Ancien membre d&apos;Attac France, il est pr&eacute;sident de l&apos;association Inf&apos;OGM (www.infogm.org) et collabore au Monde diplomatique.</p>",
            'image' => "/images/speakers/interv99.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 100,
            'first_name' => "Coralie",
            'last_name' => "Delaume",
            'info' => "<p> Essayiste, Coralie Delaume anime notamment le blog 'l&apos;Ar&egrave;ne nue'.</p><p>Elle a publi&eacute; avec David Cayla 'La fin de l&apos;Union europ&eacute;enne' (Michalon, 2017) et '10 + 1 questions sur l'Union europ&eacute;enne' (Michalon, 2019).</p><p>Officier de l&apos;arm&eacute;e de terre, elle voulait, disait-elle sans pr&eacute;tention aucune, &laquo; &ecirc;tre une intellectuelle &raquo;. Elle s&apos;&eacute;tait trouv&eacute; un nom d&apos;emprunt pour cela : Laura &eacute;tait devenue Coralie, Blanc s&apos;&eacute;tait chang&eacute; en Delaume.&nbsp;</p>",
            'image' => "/images/speakers/twkxplezyjin.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 101,
            'first_name' => "Salah",
            'last_name' => "HAMOURI",
            'info' => "Avocat franco-palestinien.",
            'image' => "/images/speakers/interv101.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 103,
            'first_name' => "Fabien",
            'last_name' => "Bilheran",
            'info' => "Fabien Bilheran &eacute;tait officier de police judiciaire sp&eacute;cialis&eacute; dans le trafic de stup&eacute;fiant&period; Il est engag&eacute; dans le rapprochement police-population et la pr&eacute;vention du suicide chez les policiers&period;",
            'image' => "/images/speakers/interv103.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 109,
            'first_name' => "J&eacute;r&eacute;mie",
            'last_name' => "Foa",
            'info' => "<p>J&eacute;r&eacute;mie Foa est ma&icirc;tre de conf&eacute;rences HDR en histoire moderne &agrave; Aix-Marseille universit&eacute;, laboratoire TELEMMe. Il a publi&eacute; plusieurs ouvrages dont Sacr&eacute;es guerres. De Catherine de M&eacute;dicis &agrave; Henri IV avec Pochep Ed.La D&eacute;couverte.</p>",
            'image' => "/images/speakers/interv109.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 110,
            'first_name' => "Jean-Claude",
            'last_name' => "Zancarini",
            'info' => "<p>Jean-Claude Zancarini anime depuis une dizaine d'ann&eacute;es un s&eacute;minaire sur les Cahiers de prison &agrave; l'&Eacute;cole normale sup&eacute;rieure de Lyon. Il a dirig&eacute; avec Romain Descendre La France d'Antonio Gramsci (ENS &eacute;ditions, Lyon, 2021).</p>",
            'image' => "/images/speakers/interv110.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 111,
            'first_name' => "Pierre",
            'last_name' => "Tevanian",
            'info' => "<p>Pierre Tevanian est philosophe, enseignant, co-animateur du site Les mots sont importants (https://lmsi.net/), engag&eacute; contre le racisme, le sexisme et l&#039;homophobie &ndash; et au-del&agrave; pour l&#039;&eacute;galit&eacute; sociale et pour les luttes d&#039;&eacute;mancipation.Il a publi&eacute; un grand nombres d&apos;ouvrages dont La M&eacute;canique raciste &mdash; qui est selon l&#039;historienne am&eacute;ricaine Joan Scott, &laquo; une dissection sans piti&eacute; du ph&eacute;nom&egrave;ne raciste, un trait&eacute; th&eacute;orique pour un public large &raquo;.Pierre Tevanian anime un combat quotidien contre le racisme. Il m&egrave;ne une r&eacute;flexion sur les fondements de la violence politique en situation coloniale, post-coloniale et dans le champ de l&apos;immigration, mais aussi sur les politiques de la m&eacute;moire.</p>",
            'image' => "/images/speakers/interv111.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 112,
            'first_name' => "Ari&eacute;",
            'last_name' => "Alimi",
            'info' => "<p>Ari&eacute; Alimi est avocat, membre du bureau national de la Ligue des droits de l'Homme et d&eacute;fend des victimes de violences polici&egrave;res depuis vingt ans. Il d&eacute;fend notamment le p&egrave;re de R&eacute;mi Fraisse, J&eacute;rome Rodrigues, Manuel Coisne, la famille de C&eacute;dric Chouviat et un grand nombre de victimes et de familles de victimes dans leur combat quotidien pour obtenir la v&eacute;rit&eacute; et la justice.</p>",
            'image' => "/images/speakers/.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 113,
            'first_name' => "Rachid",
            'last_name' => "La&iuml;reche",
            'info' => "<p>Rachid La&iuml;reche a &eacute;t&eacute; charg&eacute; pendant huit ans de suivre les partis de gauche pour Lib&eacute;ration. Il raconte comment il a &eacute;t&eacute; happ&eacute; dans la bulle jusqu&apos;&agrave; s&apos;y perdre.</p>",
            'image' => "/images/speakers/interv113.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 117,
            'first_name' => "Marc",
            'last_name' => "Gachon",
            'info' => "<p>&nbsp;Fondateur et r&eacute;dacteur en chef du journal La Galipote.</p>",
            'image' => "/images/speakers/interv117.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 118,
            'first_name' => "Nicolas",
            'last_name' => "Cheviron",
            'info' => "<p>Nicolas Cheviron est journaliste &agrave; Mediapart</p>",
            'image' => "/images/speakers/interv118.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 119,
            'first_name' => "Saliha",
            'last_name' => "Boussedra",
            'info' => "<p>Saliha Boussedra est docteur en philosophie et enseignante</p>",
            'image' => "/images/speakers/interv119.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 120,
            'first_name' => "Florian",
            'last_name' => "Gulli",
            'info' => "<p>Florian Gulli est professeur agr&eacute;g&eacute; de philosophie&nbsp;</p>",
            'image' => "/images/speakers/interv120.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 121,
            'first_name' => "S&eacute;verine",
            'last_name' => "Mathieu",
            'info' => "<p>S&eacute;verine Mathieu (&eacute;tudes de cin&eacute;ma et de lettres modernes), a travaill&eacute; pour la t&eacute;l&eacute;vision puis a r&eacute;alis&eacute; des films documentaires. Install&eacute;e &agrave; Marseille en 2004, elle cr&eacute;e l&apos;association dis-FORMES et soutient les ateliers cin&eacute;ma en milieu psychiatrique.</p>",
            'image' => "/images/speakers/interv121.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 122,
            'first_name' => "Alain",
            'last_name' => "Frobert",
            'info' => "<p>Alain Frobert, cadre de sant&eacute; retrait&eacute;, infirmier de secteur psychiatrique et formateur en psychiatrie et sciences humaines &agrave; l&apos;IFSI de Vichy.</p>",
            'image' => "/images/speakers/"
        ]);
        DB::table('speakers')->insert([
            'id' => 123,
            'first_name' => "Georges",
            'last_name' => "Planas",
            'info' => "<p>Pr&eacute;sident de l&#039;association AMARRES</p>",
            'image' => "/images/speakers/"
        ]);
        DB::table('speakers')->insert([
            'id' => 124,
            'first_name' => "Ulysse",
            'last_name' => "Cabezuelo",
            'info' => "<p>Secr&eacute;taire de l'association AMARRES</p>",
            'image' => "/images/speakers/"
        ]);
        DB::table('speakers')->insert([
            'id' => 152,
            'first_name' => "Marie",
            'last_name' => "Roche",
            'info' => "<p>acmkn zem ,r&nbsp;<br data-mce-bogus=\"1\"></p>",
            'image' => "/images/speakers/"
        ]);
        DB::table('speakers')->insert([
            'id' => 153,
            'first_name' => "Armelle",
            'last_name' => "Mabon",
            'info' => "<p>Armelle MABON est enseignante-chercheuse, ma&icirc;tresse de conf&eacute;rence en histoire contemporaine &agrave; l&apos;universit&eacute; de Bretagne Sud.</p><p>Elle s&apos;est sp&eacute;cialis&eacute;e dans les &eacute;tudes coloniales et a beaucoup travaill&eacute; autour des tirailleurs s&eacute;n&eacute;galais pendant la seconde guerre mondiale.</p><p>Dans son dernier livre, r&eacute;sultat de 20 ans de recherche, elle s&apos;attache &agrave; d&eacute;montrer que le massacre de Thiaroye, survenu en d&eacute;cembre 1944 en p&eacute;riph&eacute;rie de Dakar, a &eacute;t&eacute; un mensonge d&apos;&Eacute;tat dont elle d&eacute;monte les rouages .</p><p>Cet &eacute;pisode est revenu dans notre actualit&eacute; avec la r&eacute;cente d&eacute;cision d&apos;octroyer la qualit&eacute; de &laquo; mort pour la France &raquo; &agrave; six d&apos;entre eux et les d&eacute;bats et pol&eacute;miques qui s&apos;en sont suivi.</p><p>Le massacre de Thiaroye : Histoire d&apos;un mensonge D&apos;&Eacute;tat, &eacute;ditions le Passager clandestin, novembre 2024.</p>",
            'image' => "/images/speakers/speaker153.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 154,
            'first_name' => "Marina",
            'last_name' => "Touilliez",
            'info' => "<p>Marina Touilliez est dipl&ocirc;m&eacute;e en sciences politiques, elle travaille depuis vingt ans en tant que journaliste, p&eacute;dagogue et conf&eacute;renci&egrave;re sur les ann&eacute;es 1930 et 1940 ainsi que sur l&apos;histoire du racisme et de l&apos;antis&eacute;mitisme en France et en Allemagne.<br></p>",
            'image' => "/images/speakers/xdfpspkymlip.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 155,
            'first_name' => "Aline",
            'last_name' => "Far&egrave;s",
            'info' => "<p>Aline Far&egrave;s est auteure et militante. Ancienne du groupe Dexia &agrave; Luxembourg puis &agrave; Bruxelles, elle a quitt&eacute; le milieu bancaire fin 2011 apr&egrave;s y avoir pass&eacute; pr&egrave;s d&apos;une dizaine d&apos;ann&eacute;es.</p><p>Elle a rejoint l&apos;ONG Finance Watch quelques mois plus tard, o&ograve; elle a fait un travail d&apos;analyse et de plaidoyer pour une r&eacute;gulation de la finance post-crise, jusqu&apos;en 2016.</p><p>Elle vient de publier La BD La Machine &agrave; d&eacute;truire, , &eacute;ditions Le Seuil, juin 2024 illustr&eacute;e par : J&eacute;r&eacute;my Van Houtte</p><p>A partir de sa derni&egrave;re BD, elle a cr&eacute;&eacute;e une conf&eacute;rence gesticul&eacute;e qui est en train de faire le tour des r&eacute;gions fran&ccedil;aises.</p><p>En 2017, elle a cr&eacute;&eacute; une conf&eacute;rence gesticul&eacute;e &laquo; Chroniques d&apos;une ex-banqui&egrave;re &raquo; qui a &eacute;t&eacute; pr&eacute;sent&eacute;e plus de 70 fois en France et en Belgique, et lanc&eacute; un blog &laquo; pour se d&eacute;fendre contre la financiarisation du monde &raquo;, alinefares.net (2019).</p><p>Elle a co-fond&eacute; le laboratoire de recherches exp&eacute;rimentales #147;D&eacute;sorceler la finance#148; (2017),</p><p>Elle a aussi contribu&eacute; &agrave; l&apos;&eacute;criture de la pi&egrave;ce &laquo; Etudes: the elephant in the room &raquo; aupr&egrave;s de Fran&ccedil;oise Bloch et de Zoo Th&eacute;&acirc;tre (2016).</p>",
            'image' => "/images/speakers/speaker155.webp"
        ]);
        DB::table('speakers')->insert([
            'id' => 156,
            'first_name' => "Chantal",
            'last_name' => "Abu Eisheh",
            'info' => "<p>Epouse du ministre de la Culture de l'Autorit&eacute; palestinienne, l'auteure, cofondatrice avec ce dernier de l'association d'&eacute;changes culturels H&eacute;bron-France, &eacute;voque ses exp&eacute;riences et son quotidien &agrave; cheval entre deux cultures au fil de vingt-quatre ann&eacute;es de r&eacute;sidence et d'engagement dans cette ville de Cisjordanie.<br></p>",
            'image' => "/images/speakers/zhbvycavlhdu.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 157,
            'first_name' => "Fabien",
            'last_name' => "Lebrun",
            'info' => "<p>Fabien Lebrun est chercheur et membre de la revue Illusio. Il travaille sur les impacts &eacute;cologiques et g&eacute;opolitiques des nouvelles technologies ainsi que sur les enjeux &eacute;ducatifs et &eacute;thiques du num&eacute;rique.Il est l&apos;auteur de</p><p>Barbarie num&eacute;rique, une autre histoire du monde connect&eacute;, Ed. L&apos;Echapp&eacute;e, octobre 2024</p><p>On ach&egrave;ve bien les enfants, &Eacute;crans et barbarie num&eacute;rique, &eacute;d. Le Bord de l&apos;eau, 2020.</p>",
            'image' => "/images/speakers/speaker0.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 158,
            'first_name' => "Anne",
            'last_name' => "Garrait-Bourrier",
            'info' => "<p>Anne Garrait-Bourrier est professeur des &eacute;tudes culturelles am&eacute;ricaines, litt&eacute;ratures am&eacute;ricaines des XIXe et XXe si&egrave;cles &agrave; l'Universit&eacute; Clermont Auvergne.</p><p>Elle a publi&eacute; et dirig&eacute; plusieurs ouvrages dont r&eacute;cemment,</p><p>-De l&apos;invisibilit&eacute; &agrave; la visibilit&eacute;. Visage(s) de l&apos;inconvenant, Clermont-Ferrand, PUBP, novembre 2024, avec Christine Dual&eacute;</p><p>-&Eacute;cocritique(s) et catastrophes naturelles : perspectives transdisciplinaires /Ecocriticism(s) and Natural Catastrophes: Transdisciplinary Perspectives, Fabula- Les colloques en ligne, 2022. https://www.fabula.org/colloques/sommaire7756.php avec Chlo&eacute; Chaudet, Lila Lamrous et Ga&euml;lle Loisel</p><p>-&Eacute;critures minoritaires de la m&eacute;moire dans les Am&eacute;riques, Toulon, Universit&eacute; de Toulon, &eacute;diteur Babel, avec Christine Dual&eacute;, 2020-T&eacute;moignages de la marge. Cultures de r&eacute;sistance, Paris, &Eacute;ditions KIM&Eacute;, avec Philippe Mesnard</p>",
            'image' => "/images/speakers/speaker158.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 159,
            'first_name' => "Tristan",
            'last_name' => "BERTELOOT",
            'info' => "<p>Enqu&ecirc;teur et reporter exp&eacute;riment&eacute;, sp&eacute;cialiste en politique fran&ccedil;aise et extr&ecirc;me droite, ayant de fortes comp&eacute;tences professionnelles en &eacute;criture, enqu&ecirc;te et journalisme politique. Enseignant en journalisme avec une exp&eacute;rience d&eacute;montr&eacute;e dans l'enseignement sup&eacute;rieur.</p>",
            'image' => "/images/speakers/speaker159.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 160,
            'first_name' => "Anne-C&eacute;cile",
            'last_name' => "Robert",
            'info' => "<p>Anne-C&eacute;cile Robert est journaliste, directrice adjointe du Monde diplomatique et professeure &agrave; l'Institut de relations internationales et strat&eacute;giques (IRIS). Elle est sp&eacute;cialiste des institutions europ&eacute;ennes (doctorat en droit europ&eacute;en) et de la g&eacute;opolitique africaine. Elle s'int&eacute;resse particuli&egrave;rement &agrave; la d&eacute;mocratie, ses limites et ses fonctionnements, aux syst&egrave;mes politiques et institutionnels, et aux organisations internationales. Elle a &eacute;crit plusieurs livres et prononce de nombreuses conf&eacute;rences avec p&eacute;dagogie et clart&eacute;, en France et &agrave; l'&eacute;tranger.<br></p><p> Anne-C&eacute;cile Robert est journaliste, directrice adjointe du Monde diplomatique et professeure &agrave; l'Institut de relations internationales et strat&eacute;giques (IRIS). Elle est sp&eacute;cialiste des institutions europ&eacute;ennes (doctorat en droit europ&eacute;en) et de la g&eacute;opolitique africaine. Elle s'int&eacute;resse particuli&egrave;rement &agrave; la d&eacute;mocratie, ses limites et ses fonctionnements, aux syst&egrave;mes politiques et institutionnels, et aux organisations internationales. Elle a &eacute;crit plusieurs livres et prononce de nombreuses conf&eacute;rences avec p&eacute;dagogie et clart&eacute;, en France et &agrave; l'&eacute;tranger. </p>",
            'image' => "/images/speakers/stqevoviqcqm.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 161,
            'first_name' => "Fanny",
            'last_name' => "Gallot",
            'info' => "<p> Fanny GALLOTest une historienne fran&ccedil;aise, ma&icirc;tresse de conf&eacute;rence en histoire contemporaine, sp&eacute;cialis&eacute;e dans les in&eacute;galit&eacute;s de genre et les mouvements sociaux.Elle a publi&eacute; plusieurs ouvrages dontMobilis&eacute;es ! Une histoire f&eacute;ministe des contestations populaires&raquo;, &eacute;ditions le Seuil, 2024et En d&eacute;coudre. Comment les ouvri&egrave;res ont r&eacute;volutionn&eacute; le travail et la soci&eacute;t&eacute;, La D&eacute;couverte, 2015. </p>",
            'image' => "/images/speakers/speaker161.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 162,
            'first_name' => "Christophe",
            'last_name' => "Chigot",
            'info' => "",
            'image' => "/images/speakers/"
        ]);
        DB::table('speakers')->insert([
            'id' => 163,
            'first_name' => "Christian",
            'last_name' => "Lamy",
            'info' => "",
            'image' => "/images/speakers/"
        ]);
        DB::table('speakers')->insert([
            'id' => 164,
            'first_name' => "J&eacute;r&eacute;mie",
            'last_name' => "Lefranc",
            'info' => "",
            'image' => "/images/speakers/"
        ]);
        DB::table('speakers')->insert([
            'id' => 165,
            'first_name' => "Alain",
            'last_name' => "Gresh",
            'info' => "<p>Alain Gresh est historien et journaliste, sp&eacute;cialiste reconnu du Proche-Orient et du monde arabe, directeur du journal en ligne Orient XXI (https://orientxxi.info/ ) et ancien r&eacute;dacteur en chef du Monde diplomatique. Il est l'auteur de plusieurs ouvrages, dont</p><ul><li>&laquo; Palestine : un peuple qui ne veut pas mourir&nbsp;&raquo;. <em>Ed.Les liens qui lib&egrave;rent, mai 2024</em></li><li>&laquo; Isra&euml;l, Palestine : V&eacute;rit&eacute;s sur un conflit&nbsp;&raquo; (&Eacute;dition actualis&eacute;e apr&egrave;s le 7 octobre 2023).<em> Ed. Fayard, f&eacute;vrier 2024</em></li><li>&laquo; Un chant d&apos;amour. Isra&euml;l-Palestine, une histoire fran&ccedil;aise.&nbsp;&raquo; <em>Ed. Libertalia 2023</em></li><li>&nbsp;Ed. Actes Sud, 2012 </li></ul>",
            'image' => "/images/speakers/speaker165.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 166,
            'first_name' => "Hadrien",
            'last_name' => "Toucel",
            'info' => "<p>doctorant (sociologie &eacute;conomique) dans un laboratoire CNRS, charg&eacute; de conf&eacute;rences &agrave; l&apos;universit&eacute;, est co-pr&eacute;sident de la commission Europe et membre du secteur &laquo; &eacute;tudes et arguments &raquo; du Parti de Gauche.</p>",
            'image' => "/images/speakers/"
        ]);
        DB::table('speakers')->insert([
            'id' => 167,
            'first_name' => "Jean-Paul",
            'last_name' => "Baratin",
            'info' => "<p>Membre de Chom'Actif<br data-mce-bogus=\"1\"></p>",
            'image' => "/images/speakers/xcndypygwoyw.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 168,
            'first_name' => "Francis",
            'last_name' => "Vergne",
            'info' => "<p>Francis Vergne&nbsp;est psychologue de l&apos;&eacute;ducation et, comme Christian Laval, chercheur associ&eacute; &agrave; l&apos;Institut de recherches de la FSU. Outre leurs ouvrages respectifs, ils ont notamment publi&eacute; ensemble&nbsp;La Nouvelle &Eacute;cole capitaliste&nbsp;(La D&eacute;couverte, 2011).</p>",
            'image' => "/images/speakers/ljfmtmwtgqzf.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 169,
            'first_name' => "Franck",
            'last_name' => "Lebas",
            'info' => "<p>Universit&eacute; Clermont Auvergne Laboratoire de Recherche sur le Langage.&nbsp;</p>",
            'image' => "/images/speakers/"
        ]);
        DB::table('speakers')->insert([
            'id' => 170,
            'first_name' => "Mathieu",
            'last_name' => "Magne",
            'info' => "",
            'image' => "/images/speakers/"
        ]);
        DB::table('speakers')->insert([
            'id' => 171,
            'first_name' => "ReÌmi",
            'last_name' => "Garnier",
            'info' => "<p>R&eacute;my Garnier, n&eacute; en 1950, est un inspecteur des finances publiques fran&ccedil;ais de 1968 &agrave; 2010, v&eacute;rificateur des imp&ocirc;ts &agrave; Agen &agrave; partir de 1979. Il est connu pour avoir enqu&ecirc;t&eacute; sur le patrimoine de J&eacute;r&ocirc;me Cahuzac, ministre d&eacute;l&eacute;gu&eacute; au Budget de la France de mai 2012 &agrave; mars 2013&nbsp;</p>",
            'image' => "/images/speakers/cygdnfyvshbv.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 173,
            'first_name' => "Philippe",
            'last_name' => "Godard",
            'info' => "<p>Philippe Godard est un &eacute;crivain et essayiste fran&ccedil;ais, n&eacute; en 1959, qui &eacute;crit des ouvrages documentaires pour la jeunesse et des essais pour les adultes. Il traite de sujets de soci&eacute;t&eacute;, d'histoire, d'&eacute;cologie, de politique et de culture dans ses livres et ses interventions&nbsp;</p>",
            'image' => "/images/speakers/vndznbzkvmxb.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 174,
            'first_name' => "Jean",
            'last_name' => "Marc Duclos",
            'info' => "",
            'image' => "/images/speakers/"
        ]);
        DB::table('speakers')->insert([
            'id' => 175,
            'first_name' => "Romaric",
            'last_name' => "GODIN",
            'info' => "<p>Romaric Godin est journaliste &agrave; Mediapart, o&ograve; il couvre notamment l'&eacute;conomie fran&ccedil;aise. Il codirige &agrave; La D&eacute;couverte, avec C&eacute;dric Durand, la collection &laquo; &Eacute;conomie politique &raquo;. Il a &eacute;crit &laquo; La guerre sociale en France &raquo; (2019, 2022) aux &eacute;ditions La D&eacute;couverte </p>",
            'image' => "/images/speakers/jmzpkhtvuwxu.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 176,
            'first_name' => "S&eacute;bastien",
            'last_name' => "Fontenelle",
            'info' => "<p>S&eacute;bastien Fontenelle est un journaliste et auteur fran&ccedil;ais. Il &eacute;crit chaque semaine une tribune intitul&eacute;e \"De bonne humeur\" dans \"Politis\" et, chaque mois, dans \"CQFD\", une chronique intitul&eacute; \"Rage dedans\". Il tient &eacute;galement un blog h&eacute;berg&eacute; sur le site de Politis et intitul&eacute; \"Vive le feu\"&nbsp;</p>",
            'image' => "/images/speakers/aelmaqtxugvh.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 177,
            'first_name' => "Claude",
            'last_name' => "R&eacute;tat",
            'info' => "<p>Claude R&eacute;tat est directrice de recherche au CNRS, UMR 8599-CELLF (Centre d'&Eacute;tude de la Langue et des Litt&eacute;ratures Fran&ccedil;aises, CNRS / Paris Sorbonne)&nbsp;</p>",
            'image' => "/images/speakers/agyvngbllbts.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 178,
            'first_name' => "Astrid",
            'last_name' => "Eliard",
            'info' => "<p>Astrid Eliard est journaliste. Son premier recueil de nouvelles, &laquo;&nbsp;Nuits de noces&nbsp;&raquo;, est sorti en 2010 aux &Eacute;ditions du Mercure de France.</p><p>Elle est aujourd'hui enseignante. Elle a re&ccedil;u le prix de la SGDL pour &laquo; Nuits de noces &raquo; et le prix Marcel Pagnol pour &laquo; Danser &raquo;.&nbsp;</p>",
            'image' => "/images/speakers/ztfuvbggpsmd.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 179,
            'first_name' => "Alain",
            'last_name' => "Policar",
            'info' => "<p>Agr&eacute;g&eacute; de sciences sociales, docteur en science politique (IEP de Paris), Alain Policard a accompli l'essentiel de sa carri&egrave;re &agrave; la facult&eacute; de droit et des sciences &eacute;conomiques de Limoges. Il est actuellement chercheur associ&eacute; au Centre de recherche politique de Sciences Po (Cevipof)&nbsp;</p>",
            'image' => "/images/speakers/ozbsywsyywld.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 180,
            'first_name' => "Tangui",
            'last_name' => "Perron",
            'info' => "<p>&nbsp;Charg&eacute; du patrimoine audiovisuel &agrave; P&eacute;riph&eacute;rie. Historien, sp&eacute;cialiste des rapports entre mouvement ouvrier et cin&eacute;ma. Chercheur associ&eacute; au Centre d'histoire sociale, auteur de plusieurs ouvrages dont le dernier, &laquo; Rose Zehner et Willy Ronis &raquo;, qu'il pr&eacute;sentera &agrave; la librairie des Volcans le m&ecirc;me jour. </p>",
            'image' => "/images/speakers/rshtlpepqfii.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 181,
            'first_name' => "Anne-Sophie",
            'last_name' => "Simpere",
            'info' => "<p>Charg&eacute;e de plaidoyer pour Amnesty International</p>",
            'image' => "/images/speakers/exrgwjuedldv.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 182,
            'first_name' => "Marc",
            'last_name' => "Chovin",
            'info' => "<p>Marc Chovin &acirc; Professeur d&apos;&eacute;conomie en master pr&eacute;parant aux &eacute;tudes de l&apos;expertise comptable et au commissariat aux comptes.&nbsp;</p>",
            'image' => "/images/speakers/wkwixtbmpohn.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 183,
            'first_name' => "Fran&ccedil;ois",
            'last_name' => "Xavier Dudouet",
            'info' => "<p>Fran&ccedil;ois Xavier Dudouet, chercheur au CNRS rattach&eacute; &agrave; l'IRISSO (Universit&eacute; Paris Dauphine), est sp&eacute;cialiste des &eacute;lites &eacute;conomiques et de la gouvernance d'entreprise&nbsp;</p>",
            'image' => "/images/speakers/rghxxpfiwcgd.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 184,
            'first_name' => "Emmanuel",
            'last_name' => "Bonnet",
            'info' => "<p>Emmanuel Bonnet est enseignant-chercheur &agrave; Clermont School of Business, membre du CLeRMa et du collectif de recherche Origens MediaLab&nbsp;</p>",
            'image' => "/images/speakers/dpvhcjjgndxm.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 185,
            'first_name' => "D&eacute;o",
            'last_name' => "Namujimbo",
            'info' => "<p>D&eacute;o Namujimbo, n&eacute; en avril 1959, est un journaliste, &eacute;crivain et conf&eacute;rencier franco-congolais. Il a exerc&eacute; dans plusieurs m&eacute;dias en R&eacute;publique d&eacute;mocratique du Congo, jusqu'&agrave; l'assassinat de son fr&egrave;re, Didace Namujimbo, en novembre 2008&nbsp;</p>",
            'image' => "/images/speakers/ymmkgmehvqfl.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 186,
            'first_name' => "In&egrave;s",
            'last_name' => "Belgacem",
            'info' => "<p>Journaliste et r&eacute;datrice en chef adjointe de StreetPress<br data-mce-bogus=\"1\"></p>",
            'image' => "/images/speakers/rwntdnogkdkh.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 187,
            'first_name' => "Lionel",
            'last_name' => "Beteille",
            'info' => "<p>Lionel BETEILLE est cadre de sant&eacute; en p&eacute;dopsychiatrie au CH Sainte Marie. Il fait partie du collectif qui organise le colloque infirmier du CH Sainte Marie Clermont. Il est &eacute;galement formateur &agrave; l&apos;Institut de Formation en Soins Infirmiers, o&ograve; il intervient plus sp&eacute;cifiquement sur les notions d&apos;accueil, d&apos;institution et de collectif&nbsp;</p>",
            'image' => "/images/speakers/"
        ]);
        DB::table('speakers')->insert([
            'id' => 188,
            'first_name' => "Guy",
            'last_name' => "Dumoulin",
            'info' => "",
            'image' => "/images/speakers/"
        ]);
        DB::table('speakers')->insert([
            'id' => 189,
            'first_name' => "Mary-Fran&ccedil;oise",
            'last_name' => "Renard",
            'info' => "<p>Mary-Francoise RENARD Professeure d'Universit&eacute;, Agr&eacute;g&eacute;e des Facult&eacute;s de Sciences Economiques Responsable de l'IDREC, Institut de Recherche sur l'Economie de la Chine</p>",
            'image' => "/images/speakers/jiyxjargfjmc.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 190,
            'first_name' => "Jean-Fran&ccedil;ois",
            'last_name' => "Heintzen",
            'info' => "<p> Professeur agr&eacute;g&eacute; de math&eacute;matiques en lyc&eacute;e, J-F Heintzen est titulaire du C.A. de professeur de musique, sp&eacute;cialit&eacute; musique traditionnelle. Il a soutenu en 2007 une th&egrave;se de doctorat d'histoire : &laquo; Musiques discr&egrave;tes et soci&eacute;t&eacute;. Les pratiques musicales des milieux populaires &agrave; travers le regard de l'autorit&eacute; dans les provinces du centre de la France, XVIIIe-XIXe si&egrave;cles &raquo;, sous la direction de Bernard Dompnier (Universit&eacute; Blaise Pascal, Clermont-Ferrand, CHEC </p>",
            'image' => "/images/speakers/sglmfyixnfqf.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 191,
            'first_name' => "Guy",
            'last_name' => "Pailler",
            'info' => "<p>Guy Pailler militant syndicaliste &agrave; la CGT et membre du Parti Communiste revient sur l'histoire de l'H&ocirc;pital de Thiers, les luttes syndicales et livre son analyse sur l'affaiblissement du PCF et de la conscience politique aujourd'hui. Un regard lucide et revigorant en ces temps d'abandon des valeurs premi&egrave;res de la gauche&nbsp;</p>",
            'image' => "/images/speakers/opribhnqjdjm.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 192,
            'first_name' => "Sonia",
            'last_name' => "Fayman",
            'info' => "<p>Sonia Fayman a &eacute;t&eacute; membre de la coordination nationale de &laquo; l&apos;Union juive fran&ccedil;aise pour la paix &raquo; elle a repr&eacute;sent&eacute;e l'UJFP aupr&egrave;s de l&apos;European Coordination of Comittees and Associations for Palestine.&nbsp;</p>",
            'image' => "/images/speakers/sqyclkyguveg.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 193,
            'first_name' => "Marilyne",
            'last_name' => "Griffon",
            'info' => "",
            'image' => "/images/speakers/spqnufsavosg.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 194,
            'first_name' => "Jean-Pierre",
            'last_name' => "Bouch&eacute;",
            'info' => "<p>Jean-Pierre Bouch&eacute;, est chercher retrait&eacute; du CNRS. Il est engag&eacute; pour la Palestine depuis la r&eacute;-invasion des villes palestiniennes en 2002.</p><p>Il a publi&eacute; plusieurs ouvrages&nbsp;:</p><p>-Palestine : plus d'un si&egrave;cle de d&eacute;possession : histoire abr&eacute;g&eacute;e de la colonisation, du nettoyage ethnique et de l'apartheid. &Eacute;diteur(s) : Scribest, 2024</p><p>et avec Michel Collon</p><p>-Isra&euml;l, les cents pires citations, Editions Invest&apos;Action, 2023</p><p>-7 octobre, une enqu&ecirc;te sur la journ&eacute;e qui a chang&eacute; le monde. Editions Invest&apos;Action, 2024</p><p>Il a aussi coordonn&eacute; la traduction fran&ccedil;aise du livre de Ben White, &ecirc;tre palestinien en Isra&euml;l (La Guillotine, 2015)</p>",
            'image' => "/images/speakers/qkdcoujpjijm.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 195,
            'first_name' => "Ivar",
            'last_name' => "Ekeland",
            'info' => "<p>Ivar Ekeland, n&eacute; le 2 juillet 1944 &agrave; Paris, est un math&eacute;maticien fran&ccedil;ais. Ancien &eacute;l&egrave;ve du lyc&eacute;e priv&eacute; Sainte-Genevi&egrave;ve puis de l' &Eacute;cole normale sup&eacute;rieure (1963-1967) et charg&eacute; de recherches au CNRS, il est docteur &egrave;s-sciences en 1970&nbsp;</p>",
            'image' => "/images/speakers/paykvzvhxdhh.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 196,
            'first_name' => "Jean-Pierre",
            'last_name' => "Filiu",
            'info' => "<p> Jean-Pierre Filiu est professeur des universit&eacute;s en histoire du Moyen-Orient contemporain &agrave; Sciences Po (Paris). Ses travaux sur le monde arabo-musulman ont &eacute;t&eacute; publi&eacute;s dans une quinzaine de langues. Il est l'auteur de nombreux ouvrages, dont Les Arabes, leur destin et le n&ocirc;tre, et G&eacute;n&eacute;raux, gangsters et jihadistes (La D&eacute;couverte, 2015), Le Milieu des mondes. Une histoire laÃ¯que du Moyen-Orient de 395 &agrave; nos jours (Seuil, 2021 ; &laquo; Points Histoire &raquo;, 2023) et Stup&eacute;fiant Moyen-Orient. Une histoire de drogue, de pouvoir et de soci&eacute;t&eacute; (Seuil, 2023) </p>",
            'image' => "/images/speakers/orcjsjbqcoxw.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 197,
            'first_name' => "Christophe",
            'last_name' => "DEJOURS",
            'info' => "<p>Christophe Dejours, est un psychiatre, psychanalyste, m&eacute;decin du travail1, ergonome et professeur de psychologie fran&ccedil;ais nomm&eacute; professeur au CNAM, sp&eacute;cialiste en psychodynamique du travail et en psychosomatique.&nbsp;</p>",
            'image' => "/images/speakers/cvlztqrecchk.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 198,
            'first_name' => "No&euml;lle",
            'last_name' => "Monin",
            'info' => "<p>No&euml;lle Monin est ma&icirc;tresse de conf&eacute;rences, habilit&eacute;e &agrave; diriger des recherches, en sciences de l'&eacute;ducation, universit&eacute; Lyon1 INSPE et chercheuse au laboratoire &Eacute;ducation, Cultures, Politiques Lyon2&nbsp;</p>",
            'image' => "/images/speakers/ohiivoyqmotr.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 199,
            'first_name' => "Michel",
            'last_name' => "Dias",
            'info' => "<p>Michel Dias, professeur de philosophie &agrave; Aubusson et auteur de &laquo; La citoyennet&eacute; confisqu&eacute;e &raquo;, ouvrage de philosophie politique.&nbsp;</p>",
            'image' => "/images/speakers/"
        ]);
        DB::table('speakers')->insert([
            'id' => 200,
            'first_name' => "Anne-Claire",
            'last_name' => "Defossez",
            'info' => "<p>Anne-Claire Defossez est sociologue. Elle est actuellement chercheure &agrave; l&apos;Institute for Advanced Study, &agrave; Princeton aux USA o&ograve; elle m&egrave;ne une recherche sur les femmes et la politique en France.</p><p>Elle a &eacute;t&eacute; chercheure &agrave; l&apos;Institut des hautes &eacute;tudes d&apos;Am&eacute;rique latine, o&ograve; elle a travaill&eacute; sur les enfants des rues en Colombie dans et sur la sant&eacute; des femmes en &Eacute;quateur.</p><p>Elle a &eacute;crit et dirig&eacute; nombre d&apos;articles et d&apos;ouvrages d&apos;antropologie sociale sur les soci&eacute;t&eacute;s de l&apos;Am&eacute;rique latine dont l&apos;ouvrage Mujeres de los Andes, Femmes des Andes, conditions de vie et sant&eacute; publication de, Institut fran&ccedil;ais d`&eacute;tudes andines 5 Janvier 2016</p><p>Elle a conseill&eacute; l&apos;union europ&eacute;enne, des minist&egrave;res fran&ccedil;ais et des collectivit&eacute;s territoriales sur les politiques sociales, sur l&apos;&eacute;ducation et sur les politiques culturelles&nbsp;</p>",
            'image' => "/images/speakers/hiwcczfddwbf.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 201,
            'first_name' => "Benoit",
            'last_name' => "Tr&eacute;pied",
            'info' => "<p>Beno&icirc;t Tr&eacute;pied est un anthropologue, charg&eacute; de recherche au CNRS, sp&eacute;cialiste du droit kanak et de la Nouvelle-Cal&eacute;donie, membre du Centre de recherche et de documentation sur l&apos;Oc&eacute;anie, qui travaille sur &laquo; les relations interraciales &raquo; et &laquo; le processus actuel de d&eacute;colonisation &raquo;</p>\r\n<p>Il a &eacute;crit plusieurs livres et articles sur la nouvelle Cal&eacute;donie</p>",
            'image' => "/images/speakers/zvxpaupbsabk.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 202,
            'first_name' => "Rafa&euml;lle",
            'last_name' => "Maison",
            'info' => "<p>Agr&eacute;g&eacute;e des facult&eacute;s de droit, Rafa&euml;lle Maison est professeur de droit public &agrave; l&apos;universit&eacute; Paris Sud. Ses travaux portent sur la responsabilit&eacute; et la justice p&eacute;nale internationales. Elle a publi&eacute;&nbsp;La responsabilit&eacute; individuelle pour crime d&apos;Etat en droit international public, Bruxelles, Bruylant, 2004&nbsp;;&nbsp;Coupable de r&eacute;sistance. Naser Oric, d&eacute;fenseur de Srebrenica, devant la justice internationale, Paris, Armand Colin, 2010&nbsp;; et, en rapport avec le g&eacute;nocide des Tutsi au Rwanda, &laquo;&nbsp;L&apos;op&eacute;ration &apos;Turquoise&apos;, une mise en #156uvre de la responsabilit&eacute; de prot&eacute;ger&nbsp;?&nbsp;&raquo; in&nbsp;La responsabilit&eacute; de prot&eacute;ger, Paris, Pedone, 2008&nbsp;; &laquo;&nbsp;Que disent les archives de l&apos;&Eacute;lys&eacute;e&nbsp;?&nbsp;&raquo; in&nbsp;Esprit, mai 2010, p. 135-159&nbsp;; &laquo;&nbsp;Coup d&apos;&Eacute;tat et g&eacute;nocide&nbsp;: l&apos;affaire Bagosora&nbsp;&raquo; in&nbsp;Les Temps Modernes, 2014, p. 213-237&nbsp;; avec G&eacute;raud de La Pradelle, &laquo;&nbsp;L&apos;ordonnance du juge Brugui&egrave;re comme objet n&eacute;gationniste&nbsp;&raquo; in&nbsp;Cit&eacute;s, 2014, p. 79-90.</p>",
            'image' => "/images/speakers/iqpuyezzbelc.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 203,
            'first_name' => "Jean-Marie",
            'last_name' => "Brohm",
            'info' => "<p>Jean-Marie Brohm est un sociologue, anthropologue et philosophe qui d&eacute;veloppe une critique radicale et salutaire du sport</p><p>Il a &eacute;t&eacute; professeur d'&eacute;ducation physique au lyc&eacute;e Condorcet, Paris (en 1975), puis professeur &agrave; l'Universit&eacute; de Caen. Il est professeur de sociologie &agrave; l&apos;universit&eacute; Paul Val&eacute;ry de Montpellier et membre de l&apos;Institut d&apos;esth&eacute;tique des arts et technologies (CNRS/Panth&eacute;on-Sorbonne).</p><p>En 1975, il a fond&eacute; la revue Quel corps, une revue de d&eacute;mystification de l'id&eacute;ologie sportive et olympique qu'il a dirig&eacute; jusqu'en 1997.</p><p>Jean-Marie Brohm est l&apos;auteur de plusieurs ouvrages concernant les rapports entre le sport et la politique, notamment : Critiques du sport, Sociologie politique du sport (sa th&egrave;se d'&Eacute;tat soutenue en 1976), Le Mythe olympique, La Tyrannie sportive, Pierre de Coubertin, le seigneur des anneaux...</p><p>Depuis 2002, il dirige la revue Pr&eacute;tentaine.</p>",
            'image' => "/images/speakers/wwkaoouwglao.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 204,
            'first_name' => "Pierre",
            'last_name' => "Plottu",
            'info' => "<p>Pierre Plottu&nbsp;Journaliste sp&eacute;cialis&eacute; dans la couverture de l&apos;extr&ecirc;me droite (Lib&eacute;ration)</p>",
            'image' => "/images/speakers/xpewouqhizip.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 205,
            'first_name' => "Maxime",
            'last_name' => "Mac&eacute;",
            'info' => "<p>Journaliste sp&eacute;cialis&eacute; dans la couverture de l'extr&egrave;me droite (Lib&eacute;ration)</p>",
            'image' => "/images/speakers/yxzcyswyasub.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 207,
            'first_name' => "Sophie",
            'last_name' => "Bessis",
            'info' => "<p>Sophie Bessis est historienne et journaliste, ancienne r&eacute;dactrice en chef de l'hebdomadaire Jeune Afrique, elle est, en 2015, chercheuse associ&eacute;e &agrave; L&apos;institur des relations internationales et strat&eacute;giques de Paris et secr&eacute;taire g&eacute;n&eacute;rale adjointe de la F&eacute;d&eacute;ration internationale pour les droits humains (FIDH).</p><p>Elle a enseign&eacute; l&apos;&eacute;conomie politique du d&eacute;veloppement au d&eacute;partement de science politique de la Sorbonne et &agrave; l'Institut national des langues et civilisations orientales (INALCO). Consultante pour l'UNESCO et l&apos;UNICEF, elle a men&eacute; de nombreuses missions en Afrique.</p><p>Elle est l'auteure d&apos;un grand nombre d&apos;ouvrage dont r&eacute;cemment</p><p>Histoire de la Tunisie&nbsp;: de Carthage &agrave; nos jours, Paris, &Eacute;ditions Tallandier, 2019.</p><p>Je vous &eacute;cris d'une autre rive&nbsp;: lettre &agrave; Hannah Arendt, Tunis, &Eacute;ditions Elyzad, 2021.</p><p>La Civilisation jud&eacute;o-chr&eacute;tienne&nbsp;: anatomie d'une imposture, Paris, Les Liens qui lib&egrave;rent, 2025. </p>",
            'image' => "/images/speakers/keuymldgcziv.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 208,
            'first_name' => "St&eacute;phanie",
            'last_name' => "Latte Abdallah ",
            'info' => "<p>St&eacute;phanie Latte Abdallah est historienne et politologue. Elle est directrice de recherche au CNRS, M&eacute;daille de bronze du CNRS en 2008. Elle est chercheuse au Centre d'&eacute;tudes en sciences sociales du religieux (CESOR) de L&apos;Ecole des hautes &eacute;tudes en sciences sociales (EHESS)&nbsp;</p>",
            'image' => "/images/speakers/gfwsedscuesb.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 209,
            'first_name' => "V&eacute;ronique",
            'last_name' => "Bontemps",
            'info' => "<p>V&eacute;ronique Bontemps est anthropologue, charg&eacute; de recherche au CNRS et responsable du s&eacute;minaire &laquo; Palestine &raquo; de l&apos;EHESS.&nbsp;</p>",
            'image' => "/images/speakers/xahfwgusbghv.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 210,
            'first_name' => "Arnaud",
            'last_name' => "Orain",
            'info' => "<p>Arnaud Orain, &eacute;conomiste et historien, est directeur d&apos;&eacute;tudes &agrave; l&apos;&Eacute;cole des Hautes &Eacute;tudes en Sciences Sociales (EHESS, Centre de Recherches Historiques &acirc; UMR CNRS 8558). Il est l&apos;auteur de nombreux ouvrages, dont r&eacute;cemment Les savoirs perdus de l&apos;&eacute;conomie. Contribution &agrave; l&apos;&eacute;quilibre du vivant (Gallimard 2023).&nbsp;</p>",
            'image' => "/images/speakers/tpeowxpxaljh.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 211,
            'first_name' => "Julie",
            'last_name' => "Gervais",
            'info' => "<p>Julie Gervais est politiste (Universit&eacute; Paris 1 Panth&eacute;on-Sorbonne), sp&eacute;cialiste de la haute fonction publique et des cabinets de conseil. Elle a notamment publi&eacute; L&apos;Imp&eacute;ratif manag&eacute;rial (Presses universitaires du Septentrion, 2019) et, avec Claire Lemercier et Willy Pelletier, La Valeur du service public (La D&eacute;couverte, 2021).&nbsp;</p>",
            'image' => "/images/speakers/mblbhsukszpf.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 212,
            'first_name' => "Claire",
            'last_name' => "Lemercier",
            'info' => "<p>Claire Lemercier est historienne (CNRS), sp&eacute;cialiste des relations entre &Eacute;tat et entreprises. Elle est notamment l&apos;autrice, avec Pierre Fran&ccedil;ois, de Sociologie historique du capitalisme (La D&eacute;couverte, 2021), et, avec Julie Gervais et Willy Pelletier, de La Valeur du service public (La D&eacute;couverte, 2021).&nbsp;</p>",
            'image' => "/images/speakers/eblnipqloqug.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 213,
            'first_name' => "Willy",
            'last_name' => "Pelletier",
            'info' => "<p>Willy Pelletier est sociologue (Universit&eacute; de Picardie). Il a codirig&eacute; Pourquoi tant de votes RN dans les classes populaires ? (Le Croquant, 2023) et Manuel Indocile de sciences sociales (La D&eacute;couverte, 2019). Il est l&apos;auteur, avec Julie Gervais et Claire Lemercier, de La Valeur du service public (La D&eacute;couverte, 2021).&nbsp;</p>",
            'image' => "/images/speakers/segtcctcpgcc.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 218,
            'first_name' => "Willy",
            'last_name' => "Pelletier",
            'info' => "<p>Willy Pelletier est sociologue (Universit&eacute; de Picardie). Il a codirig&eacute; Pourquoi tant de votes RN dans les classes populaires ? (Le Croquant, 2023) et Manuel Indocile de sciences sociales (La D&eacute;couverte, 2019). Il est l&apos;auteur, avec Julie Gervais et Claire Lemercier, de La Valeur du service public (La D&eacute;couverte, 2021).&nbsp;</p>",
            'image' => "/images/speakers/zioqxcxdvwyl.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 219,
            'first_name' => "Micha&euml;l",
            'last_name' => "Lain&eacute;",
            'info' => "<p>Micha&euml;l Lain&eacute; est ma&icirc;tre de conf&eacute;rences en &eacute;conomie &agrave; l'universit&eacute; Paris-8. Ses recherches pluridisciplinaires portent sur les intuitions, &eacute;motions et croyances, ainsi que sur l'&eacute;conomie &eacute;cologique. Il est l'auteur de plusieurs ouvrages et de nombreux articles scientifiques dans des revues internationales.</p>",
            'image' => "/images/speakers/emnwfcegxoat.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 226,
            'first_name' => "G&eacute;r&ocirc;me",
            'last_name' => "Truc",
            'info' => "<p>sociologue et chercheur au CNRS, membre de l'Institut des sciences sociales du politique. </p><p>Il a notamment publi&eacute; Sid&eacute;rations. Une sociologie des attentats (PUF, 2016), Face aux attentats (codirig&eacute; avec Florence Faucher, PUF, 2020) et Les M&eacute;moriaux du 13 novembre (codirig&eacute; avec Sarah Gensburger, EHESS, 2020).&nbsp;</p>",
            'image' => "/images/speakers/umzccjucdmsl.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 227,
            'first_name' => "Fabien",
            'last_name' => "Truong",
            'info' => "<p>sociologue, &eacute;crivain et enseignant &agrave; l'universit&eacute; Paris-8. Sp&eacute;cialiste des quartiers populaires et de la jeunesse, il a notamment publi&eacute; Des capuches et des hommes (Buchet-Chastel, 2013), Jeunesses fran&ccedil;aises (La D&eacute;couverte, 2015, 2022), et Loyaut&eacute;s radicales (La D&eacute;couverte, 2017, 2025).&nbsp;</p>",
            'image' => "/images/speakers/okckvinkfovk.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 228,
            'first_name' => "Didier",
            'last_name' => "Fassin",
            'info' => "",
            'image' => "/images/speakers/ftlemhjhudks.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 229,
            'first_name' => "Jaoued",
            'last_name' => "Doudouh ",
            'info' => "<p>Porte-parole du collectif \"Pas sans nous\"</p>",
            'image' => "/images/speakers/ajnsiewhdpnv.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 230,
            'first_name' => "Florian",
            'last_name' => "Besson",
            'info' => "<p><br></p><p>Florian Besson</p><p>Docteur en histoire m&eacute;di&eacute;vale de l'universit&eacute; Paris-Sorbonne (d&eacute;cembre 2017). M&eacute;di&eacute;viste, professeur d'histoire-g&eacute;ographie dans le secondaire et directeur d'ouvrage au Livre Scolaire.&nbsp;</p><p>Cofondateur et pilote du blog Actuel Moyen Ã‚ge. https://actuelmoyenage.wordpress.com/&nbsp;</p>",
            'image' => "/images/speakers/efjqleeosmgh.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 231,
            'first_name' => "Pauline",
            'last_name' => "Ducret",
            'info' => "<p>&nbsp;Pauline Ducret enseigne l&apos;histoire de la Rome antique &agrave; l&apos;universit&eacute; de La R&eacute;union. Elle travaille sur les repr&eacute;sentations contemporaines de l&apos;Antiquit&eacute;, notamment dans la BD, les s&eacute;ries et le cin&eacute;ma. </p>",
            'image' => "/images/speakers/dcjruceaympw.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 232,
            'first_name' => "Guillaume",
            'last_name' => "Lancereau",
            'info' => "<p>Guillaume Lancereau enseigne l&apos;histoire contemporaine &agrave; Sciences Po Toulouse. Historien de la R&eacute;volution fran&ccedil;aise et de son historiographie, il co-anime le blog d&apos;histoire du XVIIIe si&egrave;cle &Eacute;chos des Lumi&egrave;res. </p>",
            'image' => "/images/speakers/mcaloynqwkzt.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 233,
            'first_name' => "Mathilde",
            'last_name' => "Larr&egrave;re",
            'info' => "<p>Mathilde Larr&egrave;re est en seignante-chercheuse &agrave; l&apos;universit&eacute; Gustave-Eiffel &agrave; Marne-la-Vall&eacute;e. Sp&eacute;cialiste de l&apos;histoire du XIXe si&egrave;cle, elle tient une chronique historique sur le site Arr&ecirc;t sur images.&nbsp;</p>",
            'image' => "/images/speakers/vmlquvnlvjmj.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 234,
            'first_name' => "Jean-Christophe",
            'last_name' => "Attias",
            'info' => "<p>Jean-Christophe Attias est directeur d&apos;&eacute;tudes &agrave; la Section des sciences reli gieuses de EHESS, o&ograve; il occupe la chaire de Pens&eacute;e juive m&eacute;di&eacute;vale (VIe-XVIIe si&egrave;cles). Agr&eacute;g&eacute; d&apos;h&eacute;breu moderne (1987) et docteur en &eacute;tudes h&eacute;braÃ¯ques (universit&eacute; Paris-VIII, 1990), il a &eacute;t&eacute; chercheur au CNRS (1991-1998) avant d&apos;&ecirc;tre &eacute;lu directeur d&apos;&eacute;tudes &agrave; l&apos;EPHE en 1998. Il dirige le Centre Alberto-Benveniste d&apos;&eacute;tudes s&eacute;pharades et d&apos;histoire socioculturelle des Juifs, et si&egrave;ge depuis 2016 &agrave; la Commission scientifique de la Section des sciences religieuses de l&apos;EPHE. Sp&eacute;cialiste reconnu du judaÃ¯sme, il est l&apos;auteur de nombreux ouvrages, parmi lesquels : Penser le judaÃ¯sme (CNRS, 2010 ; 2013), Juifs et musulmans, retissons les liens ! (CNRS, 2015, avec E. Benbassa), MoÃ¯se fragile (Alma, 2015, prix Goncourt de la biographie), Nouvelles rel&eacute;gations territoriales (CNRS, 2017, avec E. Benbassa), Dieu n&apos;a pas cr&eacute;&eacute; la nature (Cerf, 2023), La Conscience juive &agrave; l&apos;&eacute;preuve des massacres, Isra&euml;l-Gaza (Textuel, 2024, avec E. Benbassa). </p>",
            'image' => "/images/speakers/dslmbhlqdsip.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 235,
            'first_name' => "Esther",
            'last_name' => "Benbassa",
            'info' => "<p>Esther Benbassa a &eacute;t&eacute; s&eacute;natrice du Val-de-Marne puis de Paris entre 2011 et 2023. Elle est directrice d&apos;&eacute;tudes &eacute;m&eacute;rite &agrave; l&apos;&Eacute;cole pratique des hautes &eacute;tudes (Universit&eacute; PSL), o&ograve; elle a occup&eacute; la chaire d&apos;histoire du judaÃ¯sme moderne de 2000 &agrave; 2018. Elle est notamment l&apos;auteure de Histoire des Juifs de France (2000), &ecirc;tre juif apr&egrave;s Gaza (2009), La Souffrance comme identit&eacute; (2010) et Histoire des Juifs s&eacute;pharades. De Tol&egrave;de &agrave; Salonique (avec Aron Rodrigue, 2011). Elle a dirig&eacute; Isra&euml;l-Palestine. Les enjeux d&apos;un conflit (2010). Avec Jean-Christophe Attias Isra&euml;l, la terre et le sacr&eacute; (2001) et du Dictionnaire des mondes juifs (2008). Ils ont codirig&eacute; Juifs et musulmans. Retissons les liens ! (2015). </p>",
            'image' => "/images/speakers/bplhgghjzkwo.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 236,
            'first_name' => "Jean-Marie",
            'last_name' => "Th&eacute;odat",
            'info' => "<p>Jean-Marie Th&eacute;odat, g&eacute;ographe (Institut de g&eacute;ographie, Universit&eacute; de Paris 1), ancien enseignant-chercheur &agrave; l&apos;Universit&eacute; d&apos;&Eacute;tat de HaÃ¯ti, ancien recteur de l&apos;Universit&eacute; de Limonade.&nbsp;</p>",
            'image' => "/images/speakers/egxkbnyfbysg.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 237,
            'first_name' => "Marcel",
            'last_name' => "Dorigny",
            'info' => "<p>Marcel Dorigny, historien, professeur honoraire de l&apos;Universit&eacute; de Paris 8, ancien directeur (2005 &agrave; 2013) de la revue Dix-Huiti&egrave;me Si&egrave;cle, actuel membre du comit&eacute; scientifique de la Fondation pour la m&eacute;moire de l&apos;esclavage, auteur de nombreux travaux sur l&apos;abolition de l&apos;esclavage et les origines d&apos;HaÃ¯ti.&nbsp;</p>",
            'image' => "/images/speakers/yrqtkrxviata.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 238,
            'first_name' => "Gusti-Klara",
            'last_name' => "Gaillard",
            'info' => "<p>Gusti-Klara Gaillard enseigne &agrave; l&apos;&Eacute;cole normale sup&eacute;rieure et &agrave; l&apos;Universit&eacute; d&apos;&Eacute;tat d&apos;HaÃ¯ti ; historienne et sp&eacute;cialiste des relations financi&egrave;res franco-haÃ¯tiennes au XIXe si&egrave;cle.&nbsp;</p>",
            'image' => "/images/speakers/jksnxetazfhd.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 239,
            'first_name' => "Jean-Claude",
            'last_name' => "Bruffaerts",
            'info' => "<p>Jean-Claude Bruffaerts, sp&eacute;cialiste des questions financi&egrave;res et membre de l&apos;Association HaÃ¯ti Futur, organisatrice du salon annuel du Livre haÃ¯tien &agrave; Paris.&nbsp;</p>",
            'image' => "/images/speakers/drhtkbfknion.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 240,
            'first_name' => "Jean-Marie",
            'last_name' => "Th&eacute;odat",
            'info' => "<p>Jean-Marie Th&eacute;odat, g&eacute;ographe (Institut de g&eacute;ographie, Universit&eacute; de Paris 1), ancien enseignant-chercheur &agrave; l&apos;Universit&eacute; d&apos;&Eacute;tat de HaÃ¯ti, ancien recteur de l&apos;Universit&eacute; de Limonade.&nbsp;</p>",
            'image' => "/images/speakers/dbesdurcpphz.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 241,
            'first_name' => "Marcel",
            'last_name' => "Dorigny",
            'info' => "<p>Marcel Dorigny, historien, professeur honoraire de l&apos;Universit&eacute; de Paris 8, ancien directeur (2005 &agrave; 2013) de la revue Dix-Huiti&egrave;me Si&egrave;cle, actuel membre du comit&eacute; scientifique de la Fondation pour la m&eacute;moire de l&apos;esclavage, auteur de nombreux travaux sur l&apos;abolition de l&apos;esclavage et les origines d&apos;HaÃ¯ti.</p>",
            'image' => "/images/speakers/wbmpmllnhdte.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 242,
            'first_name' => "Marouane",
            'last_name' => "Essadek",
            'info' => "<p>Marouane Essadek est professeur de philosophie</p>",
            'image' => "/images/speakers/ztnzgascfveg.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 243,
            'first_name' => "Danielle",
            'last_name' => "Tartakowsky",
            'info' => "<p>professeur &eacute;m&eacute;rite d&apos;histoire contemporaine &agrave; l&apos;universit&eacute; Paris 8. </p><p>Sp&eacute;cialiste de l&apos;histoire sociale et politique en France au XXáµ‰ si&egrave;cle. </p><p>Elle est chercheur associ&eacute; au Centre d&apos;histoire sociale des mondes contemporains (Paris I).&nbsp;</p>",
            'image' => "/images/speakers/txlaeiqicobu.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 244,
            'first_name' => "Mirna",
            'last_name' => "Safi",
            'info' => "<p>Mirna Safi est est professeure &agrave; Sciences po Paris, elle est sociologue, chercheuse &agrave; l&apos;Observatoire sociologique du changement (OSC) (Sciences Po-CNRS). Elle est aussi membre du Laboratoire de sociologie quantitative (Centre de recherche en &eacute;conomie et statistique [CREST], Groupe des &eacute;coles nationales d&apos;&eacute;conomie et de statistique [GENES]).</p><p>Mirna Safi s'int&eacute;resse aux questions li&eacute;es &agrave; l'immigration, aux in&eacute;galit&eacute;s ethniques et raciales, &agrave; la discrimination et &agrave; la s&eacute;gr&eacute;gation. Ses recherches actuelles portent sur les effets de l'immigration sur la stratification ethnoraciale dans la soci&eacute;t&eacute; fran&ccedil;aise, les politiques antidiscriminatoires sur le lieu de travail, les minorit&eacute;s ethniques, ainsi que la mobilit&eacute; et les choix de localisation r&eacute;sidentielles.</p><p>Elle a publi&eacute; un grand nombre d&apos;articles et d&apos;ouvrages dont r&eacute;cemment</p><p>Discriminations, Pourquoi sont-elles un d&eacute;fi majeur des soci&eacute;t&eacute;s d&eacute;mocratiques et comment les combattre ? Ed. PUF, 14/05/2025 </p>",
            'image' => "/images/speakers/aoycmbqhzjhy.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 245,
            'first_name' => "Ziad",
            'last_name' => "Majed",
            'info' => "<p>Ziad Majed est un politiste franco-libanais. Il est professeur &agrave; l'Universit&eacute; am&eacute;ricaine de Paris o&ograve; il dirige le programme des &eacute;tudes du Moyen-Orient, et l'auteur, chez Actes Sud, de Syrie, la r&eacute;volution orpheline (2014) et Dans la t&ecirc;te de Bachar Al-Assad (avec S. Hadidi et F. Mardam Bey, 2018 et 2025).&nbsp;</p>",
            'image' => "/images/speakers/rpclgkzlitgs.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 246,
            'first_name' => "Jean-Pierre",
            'last_name' => "Filiu",
            'info' => "<p>Jean-Pierre Filiu est professeur des universit&eacute;s en histoire du Moyen-Orient &agrave; Sciences Po Paris, o&ograve; il donne depuis des ann&eacute;es un cours d&apos;introduction &agrave; la question palestinienne. Depuis 1980, il s&eacute;journe r&eacute;guli&egrave;rement dans la bande de Gaza, ainsi qu&apos;en Isra&euml;l. Il a publi&eacute; plus d&apos;une vingtaine de livres, traduits dans une quinzaine de langues. Sa chronique hebdomadaire &laquo;&nbsp;Un si proche Orient&nbsp;&raquo;, publi&eacute;e depuis 2015 sur le site du Monde, a d&eacute;j&agrave; attir&eacute; des millions de lecteurs.&nbsp;</p>",
            'image' => "/images/speakers/rhzuzckdvaei.jpeg"
        ]);
        DB::table('speakers')->insert([
            'id' => 247,
            'first_name' => "Julien",
            'last_name' => "Th&eacute;ry",
            'info' => "<p>Julien Th&eacute;ry est professeur d'histoire &agrave;l'universit&eacute; Lumi&egrave;re de Lyon, chercheur au CIHAM (Histoire, arch&eacute;ologie,litt&eacute;rature des mondes chr&eacute;tiens et musulmans m&eacute;di&eacute;vaux). M&eacute;di&eacute;viste, il a publi&eacute; notamment Le Livre des sentences de l'Inquisiteur Bernard Gui (CNRS &eacute;ditions, 2022). Il anime l'&eacute;mission La Grande H (Le M&eacute;dia).&nbsp;</p>",
            'image' => "/images/speakers/qjdjlwkgbpom.png"
        ]);
        DB::table('speakers')->insert([
            'id' => 248,
            'first_name' => "Romaric",
            'last_name' => "Godin",
            'info' => "<p>Romaric Godin est journaliste &agrave; Mediapart, o&ograve; il couvre notamment l'&eacute;c onomie fran&ccedil;aise. Il codirige &agrave; La D&eacute;couverte, avec C&eacute;dric Durand, la collection &laquo; &Eacute;conomie politique &raquo;.</p><p>Il a &eacute;crit r&eacute;cemment&nbsp;: -. De l'impasse lib&eacute;rale-d&eacute;mocratique &agrave; la fuite en avant autoritaire, aux &eacute;ditions La D&eacute;couverte, &agrave; para&icirc;tre 5 f&eacute;vrier 2026. -La monnaie pourra-t-elle changer le monde ? Vers une &eacute;conomie &eacute;cologique et solidaire, aux &eacute;ditions La D&eacute;couverte, mars 2022</p><p>-La guerre sociale en France (2019, 2022) aux &eacute;ditions La D&eacute;couverte. </p>",
            'image' => "/images/speakers/zuabzjmmcaoi.jpeg"
        ]);
    }
}
