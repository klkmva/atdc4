<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            "title" => "D&eacute;bat sur la situation en Palestine ",
            "subtitle" => "",
            "summary" => "<p>Nous recevrons Pierre Barbancey, grand reporter &agrave; l&apos;Humanit&eacute; et sp&eacute;cialiste de la Palestine, pour un d&eacute;bat sur la situation en Palestine avec Salah Hamouri, jeune avocat franco-palestinien.</p><p>Salah Hamouri a &eacute;t&eacute; la cible de l&apos;acharnement des autorit&eacute;s isra&eacute;liennes depuis plus de 20 ans. D&eacute;tenu pendant 6 ans (entre 2005 et 2011) puis &agrave; plusieurs reprises sous le r&eacute;gime arbitraire de la d&eacute;tention administrative, ce militant des droits humains a &eacute;t&eacute; sorti de prison pour &ecirc;tre expuls&eacute; le 18\\/12\\/22 de sa ville natale, J&eacute;rusalem, vers la France.</p><p>Salah pourra t&eacute;moigner de son exp&eacute;rience, comme citoyen de J&eacute;rusalem, comme prisonnier politique en Isra&euml;l, comme exil&eacute; en France.</p><p>Salah Hamouri sera fait citoyen d&apos;honneur ce m&ecirc;me jour par les municipalit&eacute;s de Billom (matin) et Blanzat (apr&egrave;s-midi).</p>",
            "image" => "/storage/images/books/202306012000.png"
        ]);
        DB::table('books')->insert([
            "title" => "La grande manipulation de Paul Kagame",
            "subtitle" => "",
            "summary" => "<p>Manipulation. Ce mot colle parfaitement &agrave; la trag&eacute;die qui ensanglante depuis 30 ans l&apos;est de la R&eacute;publique d&eacute;mocratique du Congo. Le personnage principal en est Paul Kagame, le ma&icirc;tre du Rwanda. Les &Eacute;tats-Unis de Clinton et la Grande-Bretagne de Blair ont arm&eacute; et financ&eacute; sa prise du pouvoir pendant le g&eacute;nocide rwandais de 1994. Consid&eacute;r&eacute; comme un h&eacute;ros pour y avoir mis fin, il a port&eacute; la guerre chez son voisin congolais dont il occupe, par milices interpos&eacute;es, une partie du territoire. Il en pille les fantastiques ressources mini&egrave;res : or, diamants, coltan, lithium... Tyran dans son pays, il sert les int&eacute;r&ecirc;ts des puissances occidentales et des multinationales en Afrique centrale. Il a fait de son arm&eacute;e une force mercenaire que la France de Macron utilise d&eacute;sormais pour d&eacute;fendre ses int&eacute;r&ecirc;ts, l&agrave; o&ugrave; elle ne peut plus intervenir directement, comme pour Total au Mozambique.</p><p>Les deux auteurs de ce livre ont recherch&eacute; les t&eacute;moins et victimes de cette guerre sans fin.</p>",
            "image" => "/storage/images/books/202306152000.png"
        ]);
        DB::table('books')->insert([
            "title" => "&laquo; Violences polici&egrave;res, le combat des familles &raquo;",
            "subtitle" => "En collaboration avec le Comit&eacute; justice et v&eacute;rit&eacute; pour Wissam et la Ligue des droits de l&apos;homme",
            "summary" => "<p></p><p>Ce documentaire raconte les histoires et les combats de familles touch&eacute;es par les violences polici&egrave;res. Leur fr&egrave;re, leur p&egrave;re, leur proche est mort apr&egrave;s une intervention des forces de l&apos;ordre. Dans ce documentaire, cinq familles retracent les circonstances de ce d&eacute;c&egrave;s et racontent leur combat pour obtenir v&eacute;rit&eacute; et justice. Il est troublant de constater que les histoires de ces d&eacute;funts et de leurs proches pr&eacute;sentent une multitude de similitudes.</p>",
            "image" => "/storage/images/books/202304222000.png"
        ]);
        DB::table('books')->insert([
            "title" => "POLICE : LA LOI DE L'OMERTA",
            "subtitle" => null,
            "summary" => "<p>Six policiers lanceurs d&#039;alerte prennent la parole à visage découvert.</p><p>Racisme, violences, harcèlement, corruption, faux en écriture publique… Pour la première fois, six policiers issus de différents services – stups, mineurs, BAC, CRS, police aux frontières – révèlent à visage découvert ce qui depuis trop longtemps gangrène la police.</p><p>Cette immersion dans leur travail quotidien montre la mécanique froide mise en œuvre par l&#039;administration pour faire taire les policiers : « Soit tu fermes ta gueule, soit tu fermes ta gueule. »</p><p>Dans un milieu où l&#039;omerta règne en maître, ces lanceurs d&#039;alerte font le pari courageux de prendre la parole, moins pour dénoncer des coupables que dans l&#039;espoir de voir évoluer leur institution vers davantage de justice et d&#039;avoir ainsi une police irréprochable.<br></p>",
            "image" => null
        ]);
        DB::table('books')->insert([
            "title" => "&laquo; Notre histoire de France &raquo;",
            "subtitle" => "",
            "summary" => "<p>C&apos;est une histoire fran&ccedil;aise, une histoire d&apos;immigration aussi.</p><p>Comme des dizaines de milliers de Marocains, en 1963 le p&egrave;re de Mariame Tighanimine a &eacute;t&eacute; d&eacute;bauch&eacute; par un agent recruteur, F&eacute;lix Mora, au service des houill&egrave;res du Nord et du Pas de Calais. Il fallait remplir les mines de France. Lahcen Tighanimine est alors envoy&eacute; &agrave; la mine &agrave; Lens. Avec une paie de 250 francs re&ccedil;ue tous les quinze jours en liquide, avec un logement et le charbon gratuit, le quotidien, loin de sa famille et de son pays, est loin d&apos;&ecirc;tre facile. Aucune de ces gueules noires, &agrave; qui on avait appos&eacute; un tampon vert pour rentrer en France comme du b&eacute;tail, n&apos;imagine rester. Une g&eacute;n&eacute;ration plus tard, dans l&apos;hexagone, leurs descendants sont des centaines de milliers.</p><p>Avec force et passion Mariame Tighanimine retrace ce pan de l&apos;histoire encore m&eacute;connu ; cet &laquo; angle mort du r&eacute;cit national &raquo;, comme l&apos;a &eacute;crit la journaliste Ariane Chemin. Elle raconte aussi la venue de sa m&egrave;re, par le regroupement familial, le travail &agrave; l&apos;usine, &agrave; Flins, chez Renault, apr&egrave;s la fermeture des mines de charbon, l&apos;installation de la famille &agrave; Mantes la jolie&hellip; Un destin arrim&eacute; &agrave; la France, o&ugrave; l&apos;autrice, son fr&egrave;re et ses quatre soeurs sont n&eacute;s.</p><p>Notre histoire de France est un r&eacute;cit intime, un portrait familial &eacute;mouvant, qui, au fil des pages, se transforme en un antidote puissant contre les poisons identitaires de notre &eacute;poque.</p>",
            "image" => "/storage/images/books/202305252000.jpeg"
        ]);
        DB::table('books')->insert([
            "title" => "&laquo; F&eacute;minisme et antiracisme &agrave; travers les lunettes de Marx &raquo;",
            "subtitle" => "",
            "summary" => "<p>&Agrave; l&apos;initiative des Amis de l&apos;Huma 63, dans le cadre d&apos;un cycle de conf&eacute;rences sur Karl Marx &agrave; l&apos;occasion des 140 ans de sa mort</p>",
            "image" => "/storage/images/books/202304202000.jpg"
        ]);
        DB::table('books')->insert([
            "title" => "Les ENJEUX des MEDIAS INDEPENDANTS",
            "subtitle" => "avec l&apos;&eacute;quipe des journalistes de M&eacute;diaCoop",
            "summary" => "<p>En France, quelques milliardaires poss&egrave;dent la quasi-totalit&eacute; de l&apos;information. Mais il reste quand m&ecirc;me quelques m&eacute;dias &laquo;&nbsp;pas pareil&nbsp;&raquo;. M&eacute;diacoop fait partie de ces irr&eacute;ductibles canards. Depuis sa cr&eacute;ation en 2015, notre journal est toujours rest&eacute; ind&eacute;pendant afin de montrer un autre visage du journalisme et de l&apos;information. Cela fait huit ans que nous existons. Huit ann&eacute;es au cours desquelles nous avons donn&eacute; de la voix &agrave; ceux qui luttent. Huit ann&eacute;es au cours desquelles nous avons r&eacute;alis&eacute; de nombreux voyages, reportage, articles, enqu&ecirc;tes et des projets avec tout type de populations.</p>Mais aujourd&apos;hui plus que jamais, les m&eacute;dias ind&eacute;pendants sont fragilis&eacute;s par une &eacute;conomie des m&eacute;dias de plus en plus agressive. De plus, &agrave; l&apos;heure du num&eacute;rique, de nouveau enjeux touchent l&apos;information, ses vecteurs et ses consommateurs. Pour c&eacute;l&eacute;brer nos 8 ans, on vous invite &agrave; parler de tout &ccedil;a avec nous le 22 juin &agrave; l&apos;Espace Georges Conchon en compagnie de Nicolas Cheviron, journaliste &agrave; Mediapart et Marc Gachon, fondateur et r&eacute;dacteur en chef du journal La Galipote.",
            "image" => "/storage/images/books/202306222000.png"
        ]);
        DB::table('books')->insert([
            "title" => "Projection du documentaire &laquo; Habit&eacute;s &raquo; de S&eacute;verine Mathieu",
            "subtitle" => "",
            "summary" => "<p>Synopsis : Rencontre avec quatre habitants de Marseille qui vivent entre raison et d&eacute;raison.</p><p>Consid&eacute;r&eacute;s comme &laquo; malades &raquo; par la soci&eacute;t&eacute;, ils habitent n&eacute;anmoins en ville. Entre des p&eacute;riodes d&apos;hospitalisation, ils tentent de s&apos;&eacute;lancer vers le monde commun, de l&apos;habiter, d&apos;y &ecirc;tre pr&eacute;sents, alors qu&apos;ils sont eux-m&ecirc;mes habit&eacute;s, &eacute;trangers, inspir&eacute;s.</p>",
            "image" => "/storage/images/books/202304012000.png"
        ]);
        DB::table('books')->insert([
            "title" => "Histoire Globale de la France coloniale",
            "subtitle" => "",
            "summary" => "Rencontre avec Pascal Blanchard pour une discussion autour de l&apos;ouvrage-somme qu&apos;il a r&eacute;cemment co-dirig&eacute; aux Editions Philippe Rey, pr&eacute;fac&eacute; par Mohamed Mbougar Sarr (prix Goncourt 2021). Un travail colossal, rassemblant des textes de r&eacute;f&eacute;rence &eacute;dit&eacute;s depuis 30 ans par une centaine d&apos;auteurs issus de trois g&eacute;n&eacute;rations, et de trois continents distincts (l&apos;Europe, l&apos;Afrique, les Etats-Unis). Un travail indispensable afin de revenir aux connaissances scientifiques acquises mais trop peu mises en lumi&egrave;re, et surtout &agrave; la n&eacute;cessit&eacute; de transmettre cette histoire, coloniale et postcoloniale qui est aussi &laquo; une histoire d&apos;aujourd&apos;hui &raquo; : &laquo; un s&eacute;isme dont les r&eacute;pliques secouent encore &raquo; (Mohamed Mbougar Sarr). Un travail permettant de comprendre enfin les traces, multiples, et le poids 3de cet h&eacute;ritage dans notre pr&eacute;sent, donnant ainsi mati&egrave;re &agrave; d&eacute;passer les crispations de d&eacute;bats non clos, et peut-&ecirc;tre, les tensions m&eacute;morielles r&eacute;cemment replac&eacute;es sous l&apos;&eacute;clairage m&eacute;diatique.<br>La discussion sera anim&eacute; par Somy (L&apos;un des sp&eacute;cialiste incontournable de la culture Hip Hop et afro-am&eacute;ricaine en France, conf&eacute;rencier depuis 2013 et enseignant l&apos;histoire de celles-ci dans le cadre de la formation professionnelle Passeur Culturel au Centre de formation de danse de Cergy depuis 2021), en partenariat avec le Collect<br>if nous aussi.<br><br><br>",
            "image" => "/storage/images/books/202303241700.jpg"
        ]);
        DB::table('books')->insert([
            "title" => "Que veut dire avoir 20 ans &mdash; une fois, deux fois, trois fois et plus ?",
            "subtitle" => "",
            "summary" => "<p>Comment ne pas se laisser assigner &agrave; sa g&eacute;n&eacute;ration ou sa classe d&apos;&acirc;ge r&eacute;duit &agrave; un nombre ou une lettre ? Comment exister au singulier et au pluriel sans se noyer dans le tout-&agrave;-l&apos;ego, amoureux de son selfie ou dans les cohortes des statisticiens, r&eacute;duit &agrave; une lettre indiciaire ou un point insignifiant sur une courbe ? Comment trouver sa voie entre les attentes des a&icirc;n&eacute;s et les tentations d&apos;une soci&eacute;t&eacute; qui vous cible au final comme consommateur ?</p><p><br></p><p>L&apos;auteur, sans pr&eacute;tendre &agrave; aucune expertise, jouera de ces diff&eacute;rents registres pour t&eacute;moigner de son parcours, depuis ses vingt ans dans les ann&eacute;es 80, &agrave; partir de son r&eacute;cit Dans la for&ecirc;t des nombres.</p><p>En contrepoint, Margaux Mondin, &eacute;tudiante en philosophie et lectrice attentive dira si elle se retrouve dans cette photo d&apos;une &eacute;poque prise par une baby-boomeuse ou dans le portrait-robot de la g&eacute;n&eacute;ration Y.</p>",
            "image" => "/storage/images/books/202303022000.png"
        ]);
        DB::table('books')->insert([
            "title" => "De Marx &agrave; Teilhard de Chardin, pour une politique &laquo; transcendante &raquo;",
            "subtitle" => "",
            "summary" => "La politique n&apos;est pas simple technique d&apos;acc&egrave;s ou de maintien au pouvoir, pas seulement gestion des moyens. La politique qui veut &laquo; changer les choses &raquo;, c&apos;est d&apos;abord rupture avec les d&eacute;rives anciennes, invention des buts nouveaux, changement du sens de l&apos;&eacute;volution humaine. Les individus et les collectifs ont pour cela plus besoin de &laquo; transcendance &raquo; que de d&eacute;terminisme. De Marx &agrave; Teilhard de Chardin, en passant par Jean Jaur&egrave;s ou Ernst Bloch, des penseurs nous invitent &agrave; cet &laquo; orageux p&egrave;lerinage &raquo;, dont Alain Raynaud, des Amis du Temps des Cerises, propose ici, hors de tout contexte &eacute;ditorial ou universitaire, un cheminement particulier, de citoyen, de militant, d&apos;autodidacte.<br><br>Des livres d&apos;actualit&eacute; et de vulgarisation en liaison avec le th&egrave;me de la soir&eacute;e seront propos&eacute;s avec la &laquo; Librairie Les Raconteurs d&apos;Histoires &raquo; de Chamali&egrave;res.",
            "image" => "/storage/images/books/202302162000.jpg"
        ]);
        DB::table('books')->insert([
            "title" => "La cancel culture",
            "subtitle" => "",
            "summary" => "Partant du paradoxe ontologique qui s&apos;exprime dans l&apos;oxymore constituant son nom, tr&egrave;s en phase avec les r&eacute;seaux sociaux, et consid&eacute;rant une volont&eacute; sous-jacente de r&eacute;viser l&apos;histoire, cet ouvrage envisage la cancel culture dans le contexte de l&apos;histoire des &Eacute;tats-Unis. Il propose de revenir sur l&apos;origine afro-am&eacute;ricaine de ce terme et du concept parent, woke, pour en expliquer les stigmates dans la soci&eacute;t&eacute; am&eacute;ricaine et son inclusion dans le d&eacute;bat politique en France.",
            "image" => "/storage/images/books/202302092000.jpg"
        ]);
        DB::table('books')->insert([
            "title" => "La Soci&eacute;t&eacute; schizophr&egrave;ne",
            "subtitle" => "",
            "summary" => "La soci&eacute;t&eacute; dans laquelle nous vivons est en train de conna&icirc;tre des bouleverse-ments majeurs. Parmi ceux-ci, la perte de la coh&eacute;rence d&apos;ensemble appara&icirc;t comme le plus important d&apos;entre eux, au point que l&apos;on peut se demander s&apos;il existe encore &quot; une soci&eacute;t&eacute; &quot;.<br><br>Mais les contradictions insolubles ne traversent pas seulement l&apos;ensemble de la soci&eacute;t&eacute;, elles touchent aussi les individus, jusqu&apos;&agrave; leur faire perdre leur subjectivit&eacute; et leur caract&egrave;re.<br><br>C&apos;est &agrave; cette double m&eacute;tamorphose qu&apos;est consacr&eacute; le pr&eacute;sent essai.",
            "image" => "/storage/images/books/202301192000.jpg"
        ]);
        DB::table('books')->insert([
            "title" => "&laquo;&nbsp;SAFARI ou la chasse aux fran&ccedil;ais&nbsp;&raquo; : un pan de l&apos;histoire du fichage informatique",
            "subtitle" => "",
            "summary" => "En 1970, l&apos;INSEE annonce un projet d&apos;automatisation de son r&eacute;pertoire des personnes physiques. Ce r&eacute;pertoire contient le nom, le ou les pr&eacute;nom(s), la date et le lieu de naissance et un num&eacute;ro &agrave; treize chiffres. Jusque-l&agrave;, le fichier n&apos;existait que sous forme manuscrite dans des grands livres et l&apos;informatiser permettait de g&eacute;n&eacute;raliser la diffusion du num&eacute;ro dans tous les services des administrations qui, &agrave; l&apos;&eacute;poque, passaient &agrave; l&apos;informatique. Si Monsieur Dupont est identifi&eacute; par un num&eacute;ro qui ne repr&eacute;sente que lui dans les fichiers de l&apos;&eacute;tat-civil, de l&apos;Education nationale, du minist&egrave;re du Travail, des Finances, etc. il sera facile de rassembler toutes les informations qui lui seront relatives. C&apos;est un vrai d&eacute;cloisonnement administratif, une simplification des proc&eacute;dures, sources d&apos;&eacute;conomies importantes, etc. Bref, une id&eacute;e simple et g&eacute;niale. Est-ce si s&ucirc;r ?<br><br>Le projet est &agrave; peine termin&eacute; qu&apos;un article du journal Le monde fait &eacute;clater une temp&ecirc;te : &laquo; SAFARI ou la chasse aux Fran&ccedil;ais ? &raquo; est le titre de l&apos;article qui d&eacute;nonce un projet liberticide. D&egrave;s le lendemain, le premier ministre de l&apos;&eacute;poque, Pierre Messmer, stoppe le projet en interdisant les rapprochements de fichiers d&apos;administrations diff&eacute;rentes et nomme une Commission Informatique et Libert&eacute;s. Deux ans plus tard ce sera la loi Informatique et libert&eacute;s de janvier 1978.<br><br>La conf&eacute;rence racontera cette histoire peu banale qui, en fait, remonte &agrave; la p&eacute;riode de Vichy et illustre les conflits entre la technocratie et le pouvoir politique avec des successions de phases o&ugrave; tant&ocirc;t des ing&eacute;nieurs gagnent, tant&ocirc;t les politiques. Devinez qui, &agrave; la fin, va gagner ?",
            "image" => "/storage/images/books/202301122000.jpg"
        ]);
        DB::table('books')->insert([
            "title" => "Pourquoi la gauche a perdu",
            "subtitle" => "et comment elle peut gagner",
            "summary" => "<p>Ce livre propose un &eacute;tat des lieux de la gauche fran&ccedil;aise . Il analyse les raisons qui la placent aujourd&apos;hui dans ses tr&egrave;s basses eaux &eacute;lectorales. Pour cela, il se r&eacute;f&egrave;re &agrave; l&apos;histoire, la plus lointaine comme la plus r&eacute;cente, et il mobilise au maximum les connaissances disponibles (&eacute;tudes, sondages, donn&eacute;es &eacute;lectorales). Il s&apos;agit ici d&apos;une r&eacute;flexion engag&eacute;e, mais non partisane. L&apos;auteur propose une analyse lucide et sans d&eacute;tour de ce qui p&eacute;nalise la gauche, sans conclure &agrave; la fatalit&eacute; du d&eacute;clin.</p><p>Il se veut fid&egrave;le &agrave; la formule proposant de marier le &laquo;&nbsp;pessimisme de l&apos;intelligence&nbsp;&raquo; et &laquo;&nbsp;l&apos;optimisme de la volont&eacute;&nbsp;&raquo; . L&apos;analyse s&apos;accompagne d&apos;annexes historiques et d&apos;un appareil statistique qui permet &agrave; chacun de prolonger librement sa r&eacute;flexion.</p><p>Il s&apos;agit ici d&apos;une r&eacute;flexion engag&eacute;e, mais non partisane. L&apos;auteur propose une analyse lucide et sans d&eacute;tour de ce qui p&eacute;nalise la gauche, sans conclure &agrave; la fatalit&eacute; du d&eacute;clin.</p>",
            "image" => "/storage/images/books/202311162000.jpg"
        ]);
        DB::table('books')->insert([
            "title" => "Roland GORI, une &eacute;poque sans esprit",
            "subtitle" => "",
            "summary" => "<p>Aujourd&apos;hui nous vivons dans un monde o&ugrave; la logique de rentabilit&eacute; s&apos;applique &agrave; tous les domaines. Les lieux d&eacute;di&eacute;s aux m&eacute;tiers du soin, du social, de l&apos;&eacute;ducation, de la culture&hellip; sont g&eacute;r&eacute;s par des managers ou des experts pour qui seuls comptent les chiffres, niant les besoins humains. Le psychanalyste Roland Gori se bat depuis des ann&eacute;es contre le d&eacute;litement de notre soci&eacute;t&eacute;. Ce film est un portrait de sa pens&eacute;e, de son engagement, comme &laquo;&nbsp;L&apos;Appel des appels&nbsp;&raquo;, qu&apos;il avait co-initi&eacute; avec Stefan Chedri, pour nous opposer &agrave; cette casse des m&eacute;tiers et &agrave; la marchandisation de l&apos;existence. Ce film propose un portrait intime de Roland Gori, accompagn&eacute; de t&eacute;moignages de proche.</p><p><br></p><p><br></p>",
            "image" => "/storage/images/books/202309232000.png"
        ]);
        DB::table('books')->insert([
            "title" => "Le petit berger qui devint communiste",
            "subtitle" => "&laquo; M&eacute;moires d&apos;outre Prison &raquo;",
            "summary" => "<p>Ce livre plonge avec vivacit&eacute; dans <strong>l&apos;Histoire postcoloniale du Maroc </strong>et du<strong> mouvement social marocain, un pass&eacute; </strong>qui donne des<strong> &eacute;l&eacute;ments d&apos;explication &agrave; la situation sociale, &eacute;conomique et politique actuelle</strong>. </p><p><strong>C&apos;est un r&eacute;cit engag&eacute;, autobiographique, historique et politique.</strong></p><p>C&apos;est un berger qui lira, plus tard, Marx, Engels, Voltaire, L&eacute;nine, mais aussi Balzac, Zola et Simone de Beauvoir #133; Il adh&eacute;rera au <strong>Parti Communiste Marocain</strong> et deviendra le premier responsable de la jeunesse communiste de la r&eacute;gion de Mekn&egrave;s ; il contribuera &agrave; <strong>la cr&eacute;ation du Mouvement Marxiste-l&eacute;niniste Marocain </strong>et de l&apos;<strong>Organisation Ila Al Amame</strong><em> (en avant) </em>dont il sera membre de sa direction.</p>",
            "image" => "/storage/images/books/202311092000.jpeg"
        ]);
        DB::table('books')->insert([
            "title" => "Le national-capitalisme autoritaire",
            "subtitle" => "",
            "summary" => "&apos;202401112000.&apos;",
            "image" => "/storage/images/books/202401112000."
        ]);
        DB::table('books')->insert([
            "title" => "Guy Debord et la philosophie",
            "subtitle" => "",
            "summary" => "<p>&Agrave; la fin des ann&eacute;es 1950, Guy Debord entreprend de confronter ses th&egrave;ses et intuitions, initialement construites au sein des avant-gardes artistiques, avec la philosophie allemande. Il &eacute;tudie Hegel et Marx, d&eacute;couvre le marxisme &laquo;&nbsp;h&eacute;t&eacute;rodoxe&nbsp;&raquo; (Karl Korsh, Georg Luk&aacute;cs, Anton Pannekoek), discute les th&eacute;oriciens et commentateurs de son temps (Jean Hyppolite, Henri Lefebvre, Lucien Goldmann), et importe certains concepts issus de cette tradition (totalit&eacute;, ali&eacute;nation, marchandise, etc.) au sein de sa propre pens&eacute;e. L&apos;objectif de ce livre est de faire &eacute;merger la singularit&eacute; de Guy Debord dans le champ philosophique, en pla&ccedil;ant notamment la question du temps au c&oelig;ur de cette singularit&eacute;.</p>",
            "image" => "/storage/images/books/202212151900.jpg"
        ]);
        DB::table('books')->insert([
            "title" => "L'&eacute;conomie chinoise dans la tourmente",
            "subtitle" => "",
            "summary" => "<p>La chine se trouve depuis quelques ann&eacute;es dans une nouvelle phase de transition &eacute;conomique apr&egrave;s une p&eacute;riode de forte croissance qui a fait d&apos;elle l&apos;atelier du monde. Des r&eacute;formes structurelles sont indispensables mais le gouvernement doit g&eacute;rer une conjoncture difficile aussi bien au plan interne qu'au plan international. Strat&eacute;gie z&eacute;ro Covid, crise immobili&egrave;re, vieillissement de la population, durcissement des contr&ocirc;les gouvernementaux, sanctions am&eacute;ricaines, les difficult&eacute;s p&egrave;sent sur l&apos;activit&eacute; &eacute;conomique et la Chine peut-elle poursuivre son d&eacute;veloppement dans ce nouveau contexte ?</p><p>Cette conf&eacute;rence propose une analyse des causes des difficult&eacute;s actuelles de l'&eacute;conomie de la Chine et des cons&eacute;quences sur ses relations avec le reste du monde.</p>",
            "image" => "/storage/images/books/202210061800.png"
        ]);
        DB::table('books')->insert([
            "title" => "Chanter le crime : Canards sanglants et complaintes",
            "subtitle" => "",
            "summary" => "<p>La complainte criminelle narrait un fait divers marquant sur un air connu et donnait lieu &agrave; publication d&apos;une feuille volante illustr&eacute;e, ou &laquo;&nbsp;canard sanglant&nbsp;&raquo;. Elle a connu son &acirc;ge d&apos;or de 1870 &agrave; 1940, puis s&apos;est effac&eacute;e derri&egrave;re la radio et la t&eacute;l&eacute;vision. &Eacute;crite par des auteurs le plus souvent anonymes et chant&eacute;e &agrave; voix nue par ses colporteurs, elle exprimait l'horreur des crimes du temps pour mieux la mettre &agrave; distance.</p><p>Il donne &agrave; r&eacute;fl&eacute;chir sur le traitement actuel du fait divers qui envahit les r&eacute;seaux sociaux et n'est plus jamais chant&eacute;...</p>",
            "image" => "/storage/images/books/inlwlncyyndw.png"
        ]);
        DB::table('books')->insert([
            "title" => "D&eacute;connectons-nous",
            "subtitle" => "Retrouvons notre capacit&eacute; et notre libert&eacute; de penser et d&apos;agir",
            "summary" => "<p>L&apos;auteur nous met en garde contre cette soci&eacute;t&eacute; du tout num&eacute;rique qui envahit l&apos;ensemble de notre vie quotidienne.</p><p>Si cette nouvelle technologie consomme de plus en plus d'&eacute;nergie, elle pr&eacute;sente &eacute;galement un rique pour notre sant&eacute; physique et psychologique.</p>",
            "image" => "/storage/images/books/ltvpxtgzxyuy.png"
        ]);
        DB::table('books')->insert([
            "title" => "L&apos;universalisme en proc&egrave;s",
            "subtitle" => "",
            "summary" => "<p>L&apos;auteur s&apos;efforce de d&eacute;fendre un universalisme renouvel&eacute;, c'est &agrave; dire en se fondant sur l&apos;unit&eacute; de l&apos;esp&egrave;ce humaine, un universalisme cosmopolitique, d&eacute;fini indissociablement comme une exigence morale et un horizon politique.</p>",
            "image" => "/storage/images/books/etcgodjuapni.png"
        ]);
        DB::table('books')->insert([
            "title" => "L&apos;urgence de relocaliser",
            "subtitle" => "",
            "summary" => "<p>L&apos;auteur livre sa vision transformatrice, d&eacute;croissante et internationaliste de la relocalisation, ainsi que ses modalit&eacute;s concr&egrave;tes dans cinq domaines strat&eacute;giques : les capitaux (et donc les investissements), la sant&eacute;, l&apos;alimentation, l'&eacute;nergie et l&apos;automobile.</p>",
            "image" => "/storage/images/books/wxtjobmlnouu.png"
        ]);
        DB::table('books')->insert([
            "title" => "L&apos;anarchie au pr&eacute;toire - Vienne, 1er mai 1890",
            "subtitle" => "Une insurrection et ses juges",
            "summary" => "<p>Un proc&egrave;s retentissant &agrave; Grenoble !</p><p>Louise Michel, Alexandre Tennevin, Pierre Martin en t&ecirc;te !</p><p>Cet essai, accompagn&eacute; d&apos;un dossier de textes, t&eacute;moignages, dossier judiciaire et autre archives, retrace le proc&egrave;s de 1890 de ces anarchistes.</p>",
            "image" => "/storage/images/books/202206231800.jpg"
        ]);
        DB::table('books')->insert([
            "title" => "&laquo;&nbsp;Les heures heureuses&nbsp;&raquo;",
            "subtitle" => "Documentaire de Martine Deyres",
            "summary" => "<p>Entre 1939 et 1945, la moiti&eacute; des intern&eacute;s meurent de faim en France.</p><p>L&apos;h&ocirc;pital psychiatrique  de Saint-Alban en Loz&egrave;re &eacute;chappe &agrave; cette h&eacute;catombe.</p><p>Que s&apos;est-il pass&eacute; qui a fait exception ? Archives et paroles de soignants retracent l&apos;histoire de ce haut lieu de la psychiatrie. La r&eacute;ponse montre comment les pratiques d&apos;alors ont chang&eacute; le regard de la m&eacute;decine et de la soci&eacute;t&eacute; sur la folie et ont enrichi la psychiatrie d&apos;aujourd&apos;hui.</p><p>&laquo;&nbsp;<em>Soigner les malades sans soigner l&apos;h&ocirc;pital, c&apos;est de la folie</em>&nbsp;&raquo; d&eacute;clarait Jean Oury. Selon Martine Deyres &laquo;&nbsp;<em>cette affirmation est la base de la psychoth&eacute;rapie institutionnelle qui s&apos;&eacute;labore &agrave; Saint-Alban. Soigner, c&apos;est rep&eacute;rer et d&eacute;samorcer les dispositifs d&apos;ali&eacute;nation sociale et appr&eacute;hender la complexit&eacute; de l&apos;ali&eacute;nation mentale.</em>&nbsp;&raquo;</p><p>La projection sera suivie d&apos;un d&eacute;bat anim&eacute; par Lionel Beteille (cadre de sant&eacute; en p&eacute;dopsychiatrie au CHCM) et Guy Dumoulin (cycle &laquo;&nbsp;La folie &agrave; l&apos;image&nbsp;&raquo;).</p>",
            "image" => "/storage/images/books/202211171900.jpg"
        ]);
        DB::table('books')->insert([
            "title" => "Hommage &agrave; Marcel Trillat",
            "subtitle" => "Projection \\/ d&eacute;bat",
            "summary" => "<p>&Agrave; partir d&apos;extraits de films documentaires et de quelques archives sonores, il sera donc ici tent&eacute; de retracer la carri&egrave;re et de cerner les engagements d&apos;un homme du XXe si&egrave;cle, dont beaucoup appr&eacute;ciaient l'&eacute;thique et l&apos;int&eacute;grit&eacute;. Il sera question de t&eacute;l&eacute;vision publique et de radio ind&eacute;pendante, de censures et de libert&eacute; d&apos;expression, d&apos;information et de cr&eacute;ation documentaire.</p>",
            "image" => "/storage/images/books/202204281800.jpg"
        ]);
        DB::table('books')->insert([
            "title" => "Conf&eacute;rence gesticul&eacute;e - Le travail sans dessous de sens",
            "subtitle" => "",
            "summary" => "Bernard FOUCHER associe anecdotes personnelles et analyses &eacute;conomiques et politiques pour d&eacute;crypter les raisons qui, de plus en plus, nous font rimer travail avec mal &ecirc;tre, souffrance et burn out. Tout en tentant de donner l&apos;envie d&apos;imaginer, de r&eacute;inventer ensemble un futur humain qui redonne du sens &agrave; nos vies. Conf&eacute;rence gesticul&eacute;e organis&eacute;e jeudi 11 avril par Les Amis du Temps des Cerises et l&apos;Union R&eacute;gionales des Scop Auvergne Rh&ocirc;ne-Alpes. Salle Georges Conchon &agrave; Clermont-Ferrand",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Conf&eacute;rence gesticul&eacute;e",
            "subtitle" => "",
            "summary" => "Travail et emploi dans ma vie (petite histoire) et nos soci&eacute;t&eacute;s (grandes histoire) : volontariat et &laquo;&nbsp;green washing&nbsp;&raquo;, invisibilisation du travail des femmes, violences de l&apos;organisation marchandis&eacute;e du travail, entreprises psychopathes, emploi cr&eacute;ateur de ch&ocirc;mage, propositions collectives pour lib&eacute;rer le travail.... www.amistempsdescerises.wordpress.com",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "L'histoire de ta b&ecirc;tise",
            "subtitle" => "",
            "summary" => "S&apos;adressant aux &eacute;l&eacute;cteurs d&apos;Emmanuel Macron, Fran&ccedil;ois B&eacute;gaudeau fait la somme des aveuglements qui le font se prendre pour un progessiste de pointe l&agrave; o&ugrave; il n'est qu'un conservateur de base. &laquo;&nbsp;Tu es un bourgeois. Mais le propre du bourgeois est de ne jamais se reconna&icirc;tre comme tel&nbsp;&raquo;.",
            "image" => "/storage/images/books/xwtvwlhbeoty.png"
        ]);
        DB::table('books')->insert([
            "title" => "Radicalisation express",
            "subtitle" => "Du gaullisme au Black Block",
            "summary" => "Le parcours hors norme de Nicolas Fensch, condamn&eacute; &agrave; 5 ann&eacute;es de prison en 2017. Le 18 mai 2018 cet ing&eacute;nieur informatique de 38 ans ass&egrave;ne 4 coups de barre en plastique &agrave; un agent de police qui vient de sortir de son v&eacute;hicule sur le quai de Valmy. Plus tard il rejoindra les &laquo;&nbsp;black blocks&nbsp;&raquo;.",
            "image" => "/storage/images/books/201911071100.webp"
        ]);
        DB::table('books')->insert([
            "title" => "V&eacute;n&eacute;zuela , chronique d&apos;une d&eacute;stabilisation",
            "subtitle" => "",
            "summary" => "Au coeur de la r&eacute;volution bolivarienne, initi&eacute;e par Hugo Chavez, ce livre narre comment, de vagues de violence insurrectionnelle en d&eacute;stabilisation &eacute;conomique et en lynchage m&eacute;diatique, une guerre non conventionnelle a mis &agrave; genou le pays les premi&egrave;res ressources mondiales de p&eacute;trole.",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "La possibilit&eacute; du fascisme",
            "subtitle" => "",
            "summary" => "La possibilit&eacute; du fascisme s&apos;annonce non comme une possibilit&eacute; abstraite mais comme une possibilit&eacute; concr&egrave;te. Comment la r&eacute;publique fran&ccedil;aise pourrait elle engendrer le monstre fasciste ?",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "D&eacute;sob&eacute;ir , pourquoi, comment ?",
            "subtitle" => "",
            "summary" => "Syndicalise, altermondialiste, &eacute;lu local, d&eacute;fenseur de la ruralit&eacute; et de l&apos;environnement.",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "L&apos;insoutenable productivit&eacute; du travail",
            "subtitle" => "",
            "summary" => "En s&apos;appuyant non seulement sur l&apos;&eacute;conomie, mais aussi l&apos;anthropologie, la psychanalyse et la philosophie, ce livre tente une critique de la centralit&eacute; de l&apos;efficacit&eacute; productive de notre temps. L&apos;urgence politique et &eacute;cologique de notre temps est celle d&apos;un rejet non pas de l&apos;&eacute;conomie n&eacute;olib&eacute;rale, mais de l&apos;&eacute;conomie tout court comme science de l&apos;efficacit&eacute; productive.",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "La guerre culturelle des extr&ecirc;mes droites",
            "subtitle" => "",
            "summary" => "&laquo;&nbsp;Les extr&ecirc;mes droites, dans leur diversit&eacute;, ont d&eacute;velopp&eacute; et th&eacute;oris&eacute; depuis quelques d&eacute;cennies une strat&eacute;gie &laquo;&nbsp;m&eacute;tapolitique&nbsp;&raquo; de &laquo;&nbsp;guerre culturelle&nbsp;&raquo; : l&apos;objectif est d&apos;influencer l&apos;opinion publique non pas en mettant en avant un programme ou des id&eacute;es politiques, mais en cr&eacute;ant un &eacute;tat d&apos;esprit propice et en faisant partager une vision du monde anti-&eacute;galitaire fond&eacute;e sur l&apos;&eacute;motion et la fascination.&nbsp;&raquo;",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Chronique d&apos;une catastrophe annonc&eacute;e ...et peut-&ecirc;tre &eacute;vitable.",
            "subtitle" => "",
            "summary" => "Conf&eacute;rence donn&eacute;e le 12 f&eacute;vrier 2019 &agrave; la Fac des lettres de Clermont-Ferrand, &agrave; l&apos;appel de AFPS, BDSF, Amis Temps Des Cerises, Amis de l&apos;Huma, Amis du Diplo, LDH, UD CGT, Solidaires, ATTAC, FSU. A partir de son livre &laquo;&nbsp;Isra&euml;l, chronique d&apos;une catastrophe annonc&eacute;e... et peut-&ecirc;tre &eacute;vitable&nbsp;&raquo; (Syllepse, 2018), Michel Warschawski a fait un expos&eacute; pr&eacute;cis et d&eacute;taill&eacute; de la situation en Isra&euml;l. Il a expliqu&eacute; qu&apos;Isra&euml;l se d&eacute;finit comme un &laquo;&nbsp;Etat nation du peuple juif&nbsp;&raquo;, ouvert &agrave; tous les Juifs du monde, alors que les Palestiniens autochtones restants sont discrimin&eacute;s, sans droits fondamentaux et que le droit au retour des r&eacute;fugi&eacute;s est ni&eacute;.",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "M&eacute;moire ouvri&egrave;re dans le Puy de D&ocirc;me",
            "subtitle" => "",
            "summary" => "",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Stop Linky",
            "subtitle" => "",
            "summary" => "&laquo;&nbsp;Linky&nbsp;&raquo;, c&apos;est le nouveau compteur &eacute;lectrique qu&apos;ErDF veut imposer dans tous les foyers. Surco&ucirc;t dissimul&eacute;, intrusion dans notre vie priv&eacute;e, r&eacute;el danger pour la sant&eacute; des usagers#133;",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "L&apos;ing&eacute;rence fran&ccedil;aise en C&ocirc;te d&apos;Ivoire",
            "subtitle" => "",
            "summary" => "Derri&egrave;re une neutralit&eacute; affich&eacute;e, La France n&apos;a cess&eacute; d&apos;intervenir dans la vie politique Ivoirienne, d&eacute;fendant aprement ses int&eacute;r&ecirc;ts &eacute;conomique et son influence r&eacute;gionale. De la mort d&apos;Houphou&ecirc;t-Boigny &agrave; la chute de Gbagbo, tout l&apos;arsenal de la Fran&ccedil;afrique s&apos;est d&eacute;ploy&eacute; en C&ocirc;te d&apos;Ivoire.",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Les fran&ccedil;ais et la nature",
            "subtitle" => "",
            "summary" => "Nous sommes les enfants de l&apos;univers mais nous l&apos;avons oubli&eacute;. Au nom de la libert&eacute; et de la raison, nous avons coup&eacute; tous les ponts qui nous liaient au monde. L&apos;homme moderne est devenu une &eacute;nigme de la nature. Pourtant, une nouvelle r&eacute;volution copernicienne est en cours au coeur de notre civilisation occidentale. Partout, au cin&eacute;ma, en litt&eacute;rature, en philosophie, &eacute;merge un nouveau regard sur nos &laquo;&nbsp;compagnons de plan&egrave;te&nbsp;&raquo;.",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Du social au climat",
            "subtitle" => "",
            "summary" => "Apr&egrave;s un parcours militant dense : syndicaliste, altermondialiste, associatif, &eacute;lu local . Fervent d&eacute;fenseur de la ruralit&eacute; et de l&apos;environnement, il s&apos;est engag&eacute; dans de nombreux combats avec un optimisme visc&eacute;ral.",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Histoire des Ducelliers autour du livre de Philippe Munck",
            "subtitle" => "",
            "summary" => "Ce livre d&eacute;crit une aventure humaine, une exp&eacute;rience o&ugrave; l&apos;on d&eacute;couvre le monde du travail au sein de l&apos;entreprise DUCELLIER. L&apos;auteur tire les enseignements d&apos;un conflit qui opposa un patronat archa&iuml;que &agrave; des salari&eacute;s qui refusaient le dictat patronal, et qui voulaient vivre debout.",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "La tour abolie",
            "subtitle" => "",
            "summary" => "La tour Magister : trente-huit &eacute;tages au coeur du quartier de la D&eacute;fense. Au sommet, l &apos;&eacute;tat-major, gouvern&eacute; par la logique du profit. Dans les sous-sols et les parkings, une population de mis&eacute;rables rendus fous par l &apos;exclusion. Deux mondes qui s&apos;ignorent, jusqu&apos;au jour o&ugrave; . . .",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Russie  : Entre peurs et d&eacute;fis",
            "subtitle" => "",
            "summary" => "La Russie fait peur. Un pr&eacute;sident am&eacute;ricain n&apos;h&eacute;sita pas &agrave; parler de l&apos;URSS comme d&apos;un &laquo;&nbsp;empire du mal&nbsp;&raquo; et la crise ukrainienne a remis cette notion au go&ucirc;t du jour &agrave; propos, cette fois-ci, de la Russie. On parle du &laquo;&nbsp;pouvoir de nuisance&nbsp;&raquo; du pays alors que d&apos;autres &eacute;voquent une &laquo;&nbsp;impuissance g&eacute;n&eacute;tique&nbsp;&raquo; des Russes &agrave; la d&eacute;mocratie.",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Eloge de la politique",
            "subtitle" => "",
            "summary" => "Qu&apos;est-ce que la politique ? Que peut-elle nous promettre ? Nos d&eacute;mocraties lib&eacute;rales sont-elles toujours d&eacute;mocratiques ? Ces questions, Alain Badiou y r&eacute;pond avec clart&eacute; et pr&eacute;cision dans ce livre &eacute;labor&eacute; &agrave; partir de ses conf&eacute;rences tenues au th&eacute;&acirc;tre d&apos;Aubervilliers en 2017. Il s&apos;agit de cinq dialogues - ici avec la journaliste Aude Lancelin - qui abordent les sujets qui ont scand&eacute; l&apos;ann&eacute;e 2017 : l&apos;&eacute;lection pr&eacute;sidentielle, la R&eacute;volution d&apos;Octobre, l&apos;&laquo;&nbsp;hypoth&egrave;se communiste&nbsp;&raquo;, la gauche, &laquo;&nbsp;Macron ou le coup d&apos;&eacute;tat d&eacute;mocratique&nbsp;&raquo;. De quoi s&apos;agit-il en fait dans ces pages qui d&eacute;roulent la pens&eacute;e de ce philosophe qui a plac&eacute; la politique au c&oelig;ur de son travail ? D&apos;en faire l&apos;&eacute;loge. Parce que, pour lui, la politique n&apos;est pas que l&apos;art souverain du mensonge, comme le disait Machiavel. &laquo;&nbsp;Elle doit pourtant &ecirc;tre autre chose : la capacit&eacute; d&apos;une soci&eacute;t&eacute; &agrave; s&apos;emparer de son destin, &agrave; inventer un ordre juste et se placer sous l&apos;imp&eacute;ratif du bien commun&nbsp;&raquo;.Qu&apos;est-ce que la politique ? Que peut-elle nous promettre ? Nos d&eacute;mocraties lib&eacute;rales sont-elles toujours d&eacute;mocratiques ? Ces questions, Alain Badiou y r&eacute;pond avec clart&eacute; et pr&eacute;cision dans ce livre &eacute;labor&eacute; &agrave; partir de ses conf&eacute;rences tenues au th&eacute;&acirc;tre d&apos;Aubervilliers en 2017. Il s&apos;agit de cinq dialogues - ici avec la journaliste Aude Lancelin - qui abordent les sujets qui ont scand&eacute; l&apos;ann&eacute;e 2017 : l&apos;&eacute;lection pr&eacute;sidentielle, la R&eacute;volution d&apos;Octobre, l&apos;&laquo;&nbsp;hypoth&egrave;se communiste&nbsp;&raquo;, la gauche, &laquo;&nbsp;Macron ou le coup d&apos;&eacute;tat d&eacute;mocratique&nbsp;&raquo;. De quoi s&apos;agit-il en fait dans ces pages qui d&eacute;roulent la pens&eacute;e de ce philosophe qui a plac&eacute; la politique au c&oelig;ur de son travail ? D&apos;en faire l&apos;&eacute;loge. Parce que, pour lui, la politique n&apos;est pas que l&apos;art souverain du mensonge, comme le disait Machiavel. &laquo;&nbsp;Elle doit pourtant &ecirc;tre autre chose : la capacit&eacute; d&apos;une soci&eacute;t&eacute; &agrave; s&apos;emparer de son destin, &agrave; inventer un ordre juste et se placer sous l&apos;imp&eacute;ratif du bien commun&nbsp;&raquo;.",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "La cultuerie de masse",
            "subtitle" => "",
            "summary" => "&laquo;&nbsp;Nous vivons d&eacute;sormais dans la &laquo;&nbsp;cultuerie&nbsp;&raquo; de masse qui contredit de plus en plus les finalit&eacute;s de l &apos;art et de la culture authentiques. Cette &laquo;&nbsp;cultuerie&nbsp;&raquo;, par le biais des mass m&eacute;dia t&eacute;l&eacute;guide et pr&eacute;cipite les masses dans des &eacute;v&eacute;nements destructeurs, dont les attentats sont un des aspects les plus manifestes.&nbsp;&raquo;",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "La Tiretaine",
            "subtitle" => "",
            "summary" => "Que nous dit-elle de notre pass&eacute; et de notre avenir? La rivi&egrave;re &laquo;&nbsp;ne doit plus &ecirc;tre consid&eacute;r&eacute;e comme un probl&egrave;me permanent, mais comme un atout en devenir&nbsp;&raquo;, il faut r&eacute;fl&eacute;chir sur notre &laquo;&nbsp;rapport &agrave; l&apos;eau&nbsp;&raquo;, peut-on vivre autour d&apos;une rivi&egrave;re en l&apos;ignorant ?",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Quel avenir pour le num&eacute;rique ?",
            "subtitle" => "",
            "summary" => "Le num&eacute;rique est aujourd&apos;hui le principal pourvoyeur de futurs. Seulement, si l&apos;innovation a pu constituer un moteur dans une perspective o&ugrave; les ressources apparaissaient infinies, l&apos;avenir semble opposer un sc&eacute;nario en contradiction avec la plupart des projections.",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Main basse sur l&apos;information",
            "subtitle" => "",
            "summary" => "L&apos;auteur enqu&ecirc;te sur le naufrage des m&eacute;dias fran&ccedil;ais en replongeant dans l&apos;histoire d&apos;une presse libre et ind&eacute;pendante sous la R&eacute;volution jusqu&apos;&agrave; sa mise sous tutelle par les puissances financi&egrave;res ces derni&egrave;res ann&eacute;es. I l plaide pour une refondation de la presse dans le cadre d&apos;une r&eacute;volution d&eacute;mocratique.",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Sociologie des enfants",
            "subtitle" => "",
            "summary" => "Alors que l&apos;&eacute;tude de l&apos;enfance a longtemps relev&eacute; de mani&egrave;re exclusive de la psychologie, cet &acirc;ge de la vie suscite aujourd&apos;hui un grand nombre de recherches en sociologie. Comment les enfants vivent-ils au quotidien dans les soci&eacute;t&eacute;s occidentales ? Quelles normes pr&eacute;sident &agrave; leur &eacute;ducation ? Que font-ils lorsqu&apos;ils se retrouvent entre eux, hors de la pr&eacute;sence des adultes ? Quel r&ocirc;le joue l&apos;enfance dans la reproduction des in&eacute;galit&eacute;s et dans l&apos;apprentissage des rapports de domination, de classe et de genre ? Telles sont quelques-unes des questions que les sociologues se posent &agrave; propos des enfants et auxquelles ils apportent des r&eacute;ponses &agrave; travers de nombreuses enqu&ecirc;tes de terrain.",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Thomas Sankara  - La libert&eacute; contre le destin",
            "subtitle" => "",
            "summary" => "Sp&eacute;cialiste de Thomas Sankara et de la r&eacute;volution burkinab&egrave;, il est notamment l&apos;auteur de la biographie de Thomas Sankara &laquo;&nbsp;La patrie ou la mort#133;&nbsp;&raquo; (L&apos;Harmattan, 2007)",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Pour une autre politique agricole et alimentaire",
            "subtitle" => "",
            "summary" => "Devant les impasses sociales et environnementales actuelles et les interrogations existentielles de l&apos;Union europ&eacute;enne, les paysans mutins d&apos;aujourd&apos;hui sont d&apos;utilit&eacute; publique.",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Les blancs les juifs et nous.",
            "subtitle" => "",
            "summary" => "&laquo;&nbsp;Pourquoi j&apos;&eacute;cris ce livre ? Parce que je partage l&apos;angoisse de Gramsci : &ldquo;le vieux monde se meurt. Le nouveau est long &agrave; appara&icirc;tre et c&apos;est dans ce clair-obscur que surgissent les monstres&rdquo;. Le monstre fasciste, n&eacute; des entrailles de la modernit&eacute; occidentale. D&apos;o&ugrave; ma question : qu&apos;offrir aux Blancs en &eacute;change de leur d&eacute;clin et des guerres qu&apos;il annonce ? Une seule r&eacute;ponse : la paix. Un seul moyen : l&apos;amour r&eacute;volutionnaire.&laquo;&nbsp;",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Le totalitarisme pervers",
            "subtitle" => "",
            "summary" => "Un court essai dans lequel le philosophe met en lumi&egrave;re les processus par lesquels les entreprises multinationales soumettent le pouvoir politique aux lois du march&eacute;, fa&ccedil;onnent les lois et les proc&eacute;dures &agrave; leur avantage gr&acirc;ce au lobbying. Il s&apos;appuie sur le cas de Total, synth&eacute;tisant l&apos;analyse dans &laquo;&nbsp;De quoi Total est-elle la somme ?&raquo;",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Pour en finir avec le trou de la s&eacute;cu",
            "subtitle" => "",
            "summary" => "Pour tous ceux qui veulent trouver les cl&eacute;s de r&eacute;sistance au projet social n&eacute;o-lib&eacute;ral et qui veulent penser &agrave; un mod&egrave;le alternatif de protection sociale, la lecture de ce livre est indispensable car il permet &agrave; tout citoyen, sans connaissance pr&eacute;alable de ce secteur, d&apos;en comprendre les enjeux.",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Universaliser le salaire pour changer le travail",
            "subtitle" => "",
            "summary" => "Face aux discours tant&ocirc;t sur la fin du travail, tant&ocirc;t sur la fin de l&apos;emploi pour justifier, via des comptes (dits) personnalis&eacute;s et un revenu de base, visant la paup&eacute;risation g&eacute;n&eacute;ralis&eacute;e des salari&eacute;s, la casse de la protection sociale et des droits li&eacute;s &agrave; l&apos;emploi, il faut reprendre l&apos;offensive : nous r&eacute;approprier le travail et l&apos;investissement pour ma&icirc;triser la production.",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "L&apos;int&eacute;grisme &eacute;conomique",
            "subtitle" => "",
            "summary" => "Pourquoi continue-t-on de promouvoir les recettes &eacute;conomiques n&eacute;o-lib&eacute;rales alors que pr&egrave;s de 40 ans d&apos;application ont montr&eacute; leurs effets pervers : multiplication des crises financi&egrave;res; explosion des in&eacute;galit&eacute;s combin&eacute;e &agrave; une hausse de la pr&eacute;carit&eacute; et de la pauvret&eacute;, d&eacute;gradations environnementales... Et si, derri&egrave;re cette rh&eacute;torique de fa&ccedil;ade, l&apos;objectif n&apos;&eacute;tait pas de servir l&apos;int&eacute;r&ecirc;t g&eacute;n&eacute;ral mais celui d&apos;une minorit&eacute; ?",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Les luttes et les r&ecirc;ves - Une histoire populaire de la France",
            "subtitle" => "",
            "summary" => "C&apos;est l&apos;histoire de la France &laquo;&nbsp;d&apos;en bas&nbsp;&raquo;, celle des classes populaires et des opprim&eacute;.e.s de tous ordres, que retrace ce livre, l&apos;histoire des multiples v&eacute;cus d&apos;hommes et de femmes, celle de leurs accommodements au quotidien et, parfois, ouvertes ou cach&eacute;es, de leurs r&eacute;sistances &agrave; l&apos;ordre &eacute;tabli et aux pouvoirs dominants, l&apos;histoire de leurs luttes et de leurs r&ecirc;ves.",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Partenariats public - priv&eacute;",
            "subtitle" => "",
            "summary" => "L&apos;int&eacute;r&ecirc;t public livr&eacute; aux int&eacute;r&ecirc;ts priv&eacute;s ? Les PPP l&apos;ont fait. Opaques, bien verrouill&eacute;s, soumis aux pures logiques financi&egrave;res, les partenariats public-priv&eacute; (PPP) confient le financement, la r&eacute;alisation et le fonctionnement d&apos;&eacute;quipements publics (stades, h&ocirc;pitaux, &eacute;coles&hellip;) &agrave; des multinationales, au grand b&eacute;n&eacute;fice d&apos;une oligarchie restreinte domin&eacute;e par Vinci, Bouygues et Eiffage.",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Chronique d&apos;exil et d&apos;hospitalit&eacute;.",
            "subtitle" => "",
            "summary" => "Des &ecirc;tres humains s&apos;exilent pour changer leur destin. D&apos;autres les aident &agrave; accomplir leurs r&ecirc;ves, parce qu&apos;ils croient en l&apos;hospitalit&eacute;&hellip; Les articles qui composent cet ouvrage ont &eacute;t&eacute; r&eacute;dig&eacute;s entre octobre 2013, deux ans avant qu&apos;on ne commence &agrave; parler de la &laquo;&nbsp;crise migratoire&nbsp;&raquo;, et mars 2016, au lendemain du d&eacute;mant&egrave;lement de la zone sud du bidonville de Calais.",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Nous ne sommes plus seuls au monde",
            "subtitle" => "",
            "summary" => "On nous r&eacute;p&egrave;te &agrave; l&apos;envie que le monde serait devenu de plus en plus complexe et ind&eacute;chiffrable. A l&apos;ordre de la Guerre froide aurait succ&eacute;d&eacute; un nouveau d&eacute;sordre g&eacute;opolitique mena&ccedil;ant de sombrer dans le &laquo;&nbsp;chaos&nbsp;&raquo;. Affaiblissement des Etats-Unis, &eacute;mergence de nouveaux g&eacute;ants &eacute;conomiques, irruption des pr&eacute;tendus &laquo;&nbsp;Etats voyous&nbsp;&raquo; et d&apos;organisations terroristes incontr&ocirc;lables...",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Penser la soci&eacute;t&eacute; contemporaine avec Guy Debord",
            "subtitle" => "",
            "summary" => "Expliquer les principaux concepts de la pens&eacute;e de Guy Debord (le spectacle, la d&eacute;rive, la situation, l&apos;ali&eacute;nation etc.) en les confrontant &agrave; des ph&eacute;nom&egrave;nes qui nous sont contemporains en montrant la f&eacute;condit&eacute; de cette critique pour penser des ph&eacute;nom&egrave;nes aussi divers que Google Maps, Pokemon Go, les selfies, Instagram et Tinder..",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "R&eacute;mi Garnier",
            "subtitle" => "",
            "summary" => "Un documentaire r&eacute;alis&eacute; par Mediacoop sur les lanceurs d&apos;alerte &laquo;&nbsp;R&eacute;my Garnier, l&apos;homme qui fit tomber Cahuzac&nbsp;&raquo;, en pr&eacute;sence de l&apos;inspecteur des imp&ocirc;ts qui d&egrave;s 1999, &eacute;pingla Jer&ocirc;me Cahuzac, dans des affaires frauduleuses. Il faudra attendre cependant plus de 10 ans que l&apos;affaire Cahuzac &eacute;clate au grand jour en 2012 et le jugement du TGI de d&eacute;cembre 2016 avec sa condamnation &agrave; 3 ans de prison ferme.Mais pendant toutes ces ann&eacute;es, R&eacute;my Garnier lanceur d&apos;alerte subira pressions, placardisations, d&eacute;pression....",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Je vous &eacute;cris de l&apos;usine",
            "subtitle" => "",
            "summary" => "Pendant dix ans (2005-2015), chaque mois, Jean-Pierre Levaray a anim&eacute; la chronique &laquo;&nbsp;Je vous &eacute;cris de l&apos;usine&nbsp;&raquo; dans le mensuel CQFD. Il a racont&eacute; les heurs et malheurs de la classe ouvri&egrave;re, sa classe. Les luttes et les espoirs, les joies et les peines, les travers et la r&eacute;signation, parfois. Ce texte vient d&apos;en bas. Il en a le go&ucirc;t et l&apos;odeur. Ode &agrave; l&apos;&eacute;criture prol&eacute;tarienne.",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Pour une &eacute;cole de l&apos;exigence intellectuelle",
            "subtitle" => "",
            "summary" => "&laquo;&nbsp;Emancipation d&eacute;mocratique ou barbarie : nous sommes au pied du mur. Sans &eacute;chappatoire. La question scolaire n&apos;&eacute;chappe pas &agrave; ce dilemme&nbsp;&raquo;. Ce livre part d&apos;une conviction : l&apos;urgence d&apos;une &eacute;ducation pour tous de haut niveau qui ne vise pas d&apos;abord &agrave; inculquer des messages, mais &agrave; former des capacit&eacute;s instruites de r&eacute;flexion et d&apos;analyse.",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Une parole juive contre le racisme",
            "subtitle" => "",
            "summary" => "Proposer une parole juive contre le racisme aujourd&apos;hui, c&apos;est prendre le parti de l&apos;universel, contre tous les nationalismes ; de la fraternit&eacute;, contre tous les replis sur soi ; de l&apos;action solidaire en faveur des r&eacute;fugi&eacute;s, des Roms, des peuples en lutte contre l&apos;oppression.",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Rel&egrave;ve-toi",
            "subtitle" => "",
            "summary" => "Ce livre est un cri, ou plus exactement trois cris. C&apos;est un cri d&apos;amour ; amour de la France dans toute sa diversit&eacute;, sa richesse et sa beaut&eacute;. C&apos;est aussi un cri de col&egrave;re ; col&egrave;re de constater ce que des g&eacute;n&eacute;rations de politiciens ambitieux, m&eacute;diocres et soumis &agrave; l&apos;&eacute;tranger ont fait de la France. C&apos;est enfin un cri d&apos;espoir ; espoir dans le peuple fran&ccedil;ais pour qu&apos;une fois de plus il d&eacute;passe ses contradictions, se rassemble afin de r&eacute;tablir notre ind&eacute;pendance nationale et notre souverainet&eacute; populaire.",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Le mythe de la culture num&eacute;rique",
            "subtitle" => "",
            "summary" => "Existe-t-il une culture num&eacute;rique authentique, qui se distingue r&eacute;ellement de la &laquo;&nbsp;culture d&apos;avant&nbsp;&raquo;, celle qu&apos;incarne le livre. A bien y r&eacute;fl&eacute;chir, la r&eacute;ponse ne va pas de soi#133; Il n&apos;est pas certain que ce que l&apos;on appelle banalement la &laquo;&nbsp;culture num&eacute;rique&nbsp;&raquo; soit autre chose que du bricolage num&eacute;rique, ce qui reste &agrave; d&eacute;montrer car la &laquo;&nbsp;culture num&eacute;rique&nbsp;&raquo; ou &laquo;&nbsp;l&apos;entr&eacute;e de l&apos;&eacute;cole dans le monde num&eacute;rique&nbsp;&raquo;, pour ne prendre que ces deux expressions &agrave; succ&egrave;s, semblent surtout#133; impens&eacute;es.",
            "image" => "/storage/images/books/dsmeyugjiukh.jpeg"
        ]);
        DB::table('books')->insert([
            "title" => "Souverainet&eacute;, d&eacute;mocratie, la&iuml;cit&eacute;",
            "subtitle" => "",
            "summary" => "La nation rassembl&eacute;e et l&apos;&eacute;tat d&apos;urgence d&eacute;cr&eacute;t&eacute;, nous vivons un moment souverainiste. Mais &agrave; quel prix, et sous quelles conditions, pouvons-nous vivre ensemble ? Cette question fait clivage. Le souverainisme est ce nouveau spectre qui hante le monde. Rien de plus normal pourtant, car la question de la souverainet&eacute; est fondatrice de la d&eacute;mocratie. Elle fonde la communaut&eacute; politique, ce que l&apos;on appelle le peuple, et d&eacute;finit un ordre politique. Partout en Europe et dans le monde s&apos;exprime la volont&eacute; populaire de retrouver sa souverainet&eacute; qui est la question d&apos;aujourd&apos;hui.",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Chom&apos;actif, 30 ans apr&egrave;s",
            "subtitle" => "",
            "summary" => "Notre soci&eacute;t&eacute; subit de profondes mutations, la mont&eacute;e inexorable du nombre de personnes au ch&ocirc;mage ou en pr&eacute;carit&eacute;, l&apos;automatisation croissante de la production, la peur d&apos;&ecirc;tre d&eacute;class&eacute; .... nous oblige &agrave; &ecirc;tre inventifs pour construire des pistes pour l&apos;avenir. Autour du th&egrave;me &laquo;&nbsp;temps, travail, argent&nbsp;&raquo;, nous nous proposons de rapidement faire le bilan des trente ann&eacute;es pass&eacute;es et d&apos;explorer les pistes pour demain.",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Le changement climatique",
            "subtitle" => "",
            "summary" => "La COP 21 est termin&eacute;e. Le r&eacute;chauffement global et le changement du climat sont une r&eacute;alit&eacute; et une menace pour l&apos;ensemble de la plan&egrave;te. La transition &eacute;nerg&eacute;tique devient plus que jamais une n&eacute;cessit&eacute; pour l&apos;humanit&eacute; mais aussi un enjeu local.",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Le salaire &agrave; vie",
            "subtitle" => "",
            "summary" => "Quelle diff&eacute;rence avec le revenu de base, le salaire des fonctionnaires, la s&eacute;curisation des parcours professionnels? 1945 a vu la cr&eacute;ation d&apos;une part socialis&eacute;e du salaire via les cotisations, alimentant diff&eacute;rentes caisses (retraites, s&eacute;curit&eacute; sociale, etc.). L&apos;extension de ce processus permettrait d&apos;aboutir &agrave; la notion de salaire &agrave; vie, attach&eacute; &agrave; la personne, et non pas &agrave; l&apos;emploi occup&eacute;. Cette id&eacute;e &eacute;mancipatrice est bien diff&eacute;rente du revenu de base, &laquo;&nbsp;roue de secours du capitalisme&nbsp;&raquo; selon l&apos;auteur.",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Demain le syndicalisme",
            "subtitle" => "",
            "summary" => "<p>Face &agrave; la radicalisation du n&eacute;olib&eacute;ralisme, le syndicalisme doit retrouver sa boussole.Pour une r&eacute;novation du syndicalisme qui allie protection sociale et &eacute;mancipation.Un manuel syndical d&apos;alternatives et d&apos;innovation.Le n&eacute;olib&eacute;ralisme ne fait pas myst&egrave;re de sa d&eacute;claration de guerre aux syndicats et du choix qui leur serait laiss&eacute; : se soumettre ou dispara&icirc;tre.</p>",
            "image" => "/storage/images/books/vqnhgmlqzoxj.png"
        ]);
        DB::table('books')->insert([
            "title" => "les droits de la Terre M&egrave;re",
            "subtitle" => "",
            "summary" => "&laquo;&nbsp;Pourrait-on imaginer que la nature se rebelle et se mette &agrave; poursuivre en justice tous ceux qui la d&eacute;truisent ?&raquo; Un sc&eacute;nario de film fantastique devenu r&eacute;alit&eacute; en Equateur avec l&apos;affaire Rio Vilcabamba contre l&apos;Etat de Loja en 2011. Une rivi&egrave;re contre un &eacute;tat. Un cas d&apos;&eacute;cole qui a permis &agrave; ce pays d&apos;appliquer un &laquo;&nbsp;principe de juridiction universelle&nbsp;&raquo;: en effet chacun peut saisir la cour de justice au nom de la nature. Un nouvel ordre juridique qui, en Bolivie, permet aussi de repr&eacute;senter tous les &ecirc;tres pass&eacute;s, pr&eacute;sents et#133;&agrave; venir.&raquo;",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "L&apos;empire de la surveillance",
            "subtitle" => "",
            "summary" => "Les spectaculaires r&eacute;v&eacute;lations du lanceur d&apos;alerte Edward Snowden ont permis au plus grand nombre de d&eacute;couvrir que la protection de notre vie priv&eacute;e est d&eacute;sormais menac&eacute;e par la surveillance de masse &agrave; laquelle nous soumettent les merveilleux outils (smartphones, tablettes, ordinateurs) qui devaient &eacute;largir notre espace de libert&eacute;&hellip; Pourtant, on mesure encore mal &agrave; quel point, et de quelle fa&ccedil;on, nous sommes espionn&eacute;s et donc contr&ocirc;l&eacute;s.",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Vers un Moyen Orient sans armes nucl&eacute;aires",
            "subtitle" => "",
            "summary" => "Si l&apos;on veut vraiment mettre un coup d&apos;arr&ecirc;t &agrave; la prolif&eacute;ration nucl&eacute;aire au Moyen-Orient, il faut sortir du deux poids deux mesures. Pourquoi Isra&euml;l a droit &agrave; la bombe et pas les autres pays&nbsp;? Poser cette question souligne toute l&apos;absurdit&eacute; de l&apos;attitude actuelle, car ce qui alimente la prolif&eacute;ration et le risque d&apos;une guerre nucl&eacute;aire dans cette r&eacute;gion du monde est bien la possession par Isra&euml;l de cette arme de destruction massive.",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Les anarchistes",
            "subtitle" => "",
            "summary" => "Depuis un si&egrave;cle et demi, des pr&eacute;mices de l&apos;anarchie en 1840 aux ann&eacute;es 2000, le mouvement libertaire nourrit l&apos;imaginaire collectif et tient un r&ocirc;le &agrave; part au sein du mouvement social. Syndicalistes, ill&eacute;galistes, communistes libertaires et partisans des &laquo;&nbsp;milieux libres&nbsp;&raquo; n&apos;ont eu de cesse de l&apos;enrichir et de contribuer &agrave; sa richesse ainsi qu&apos;&agrave; sa diversit&eacute;.",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Le nouvel ordre d&eacute;mocratique",
            "subtitle" => "",
            "summary" => "Le syst&egrave;me d&eacute;mocratique fran&ccedil;ais se disloque sous nos yeux. La gauche encha&icirc;ne les d&eacute;routes &eacute;lectorales et la droite s&apos;enferre dans ses impasses. Cet affaissement se traduit dans les bulletins de vote, les mouvements de l&apos;opinion, les mutations id&eacute;ologiques, et m&ecirc;me la r&eacute;cente production litt&eacute;raire. Il lib&egrave;re un espace d&apos;o&ugrave; &eacute;merge un Front national conqu&eacute;rant ...",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Les enfants cach&eacute;s de Pinochet",
            "subtitle" => "",
            "summary" => "Depuis la fin 1998, en Am&eacute;rique latine, des chefs d&apos;Etat de gauche ou de centre gauche occupent le pouvoir. Des coups d&apos;Etat, pronunciamientos et autres tentatives de d&eacute;stabilisation ont affect&eacute; le Venezuela (2002, 2014 et 2015), Ha&iuml;t&iacute; (2004), la Bolivie (2008), le Honduras (2009), l&apos;Equateur (2010) et le Paraguay (2012)...",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Jesus selon Mahomed",
            "subtitle" => "",
            "summary" => "J&eacute;sus occupe dans le Coran une place &eacute;minente. C&apos;est de cette surprise que J&eacute;rome Prieur et G&eacute;rard Mordillat sont partis. Bien que le Livre sacr&eacute; de l&apos;islam soit un texte difficile &agrave; appr&eacute;hender pour les non-musulmans, il existe des points de contacts qui leur en permettent la lecture : une lecture critique &agrave; la fois litt&eacute;raire et historique.",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "N&eacute;olib&eacute;ralisme et crise de la dette",
            "subtitle" => "",
            "summary" => "Lorsque la socialisation des dettes priv&eacute;es &eacute;leva le mur de la dette publique, le capitalisme financiaris&eacute; s&apos;av&eacute;ra, comme pr&eacute;visible, incapable de le franchir. Une sortie de crise v&eacute;ritable implique de d&eacute;mondialiser, ce qui sonne l&apos;heure de la r&eacute;publique sociale et de la repolitisation de la monnaie. Car seul un retour au projet r&eacute;publicain de Jaur&egrave;s va dans le sens de l&apos;Histoire.",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Les 7 la&iuml;cit&eacute;s fran&ccedil;aises",
            "subtitle" => "",
            "summary" => "Fruit d&apos;une longue histoire conflictuelle opposant tout au long du XIXe si&egrave;cle deux visions de la France - celle de ceux qui veulent que la France redevienne &laquo;&nbsp;la fille a&icirc;n&eacute;e de l&apos;&Eacute;glise (catholique)&nbsp;&raquo; et celle de ceux qui pensent que la France moderne doit &ecirc;tre la fille de la R&eacute;volution de 1789 - jusqu&apos;&agrave; la loi de s&eacute;paration qui permet une pacification progressive de ce &laquo;&nbsp;conflit des deux France&nbsp;&raquo; et la construction de ce que j&apos;appelle &laquo;&nbsp;le pacte la&iuml;que&nbsp;&raquo;, la la&iuml;cit&eacute; est, &agrave; la fois, un r&egrave;glement juridique et un art de vivre ensemble.",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "L&apos;&eacute;conomie sociale et solidaire",
            "subtitle" => "",
            "summary" => "En dix le&ccedil;ons magistrales, Herv&eacute; Defalvard d&eacute;construit m&eacute;thodiquement les postulats dominants. Il les replace dans leur contexte historique, celle d&apos;une conception r&eacute;tr&eacute;cie de l&apos;&eacute;conomie &agrave; qui les grands pr&ecirc;tres du n&eacute;olib&eacute;ralisme ont depuis trente ans &ocirc;t&eacute; toute dimension humaine et morale trahissant ainsi, sans oser l&apos;avouer, les p&egrave;res du lib&eacute;ralisme comme Adam Smith et Turgot. Loin de se limiter &agrave; cette critique, cet ouvrage montre que l&apos;&eacute;conomie peut &ecirc;tre &agrave; la fois sociale, solidaire et efficace. Le temps est en effet venu de d&eacute;passer les logiques infirmes du march&eacute;. L&apos;alternative ne consiste pas &agrave; d&eacute;l&eacute;guer &agrave; l&apos;Etat le soin de tout g&eacute;rer, elle est de travailler &agrave; la construction de biens communs qui b&eacute;n&eacute;ficient &agrave; tous.",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Vagabondage d&apos;un faucheur volontaire",
            "subtitle" => "",
            "summary" => "Initiateur du mouvement des Faucheurs Volontaires, qui organise la lutte de la soci&eacute;t&eacute; civile contre la diss&eacute;mination incontr&ocirc;l&eacute;e et irr&eacute;versible des OGM. Aux c&ocirc;t&eacute;s de Jos&eacute; Bov&eacute; notamment, il a particip&eacute; &agrave; de nombreux fauchages et a &eacute;t&eacute; plusieurs fois condamn&eacute;.",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Aux origines du carcan europ&eacute;en",
            "subtitle" => "",
            "summary" => "Seule la r&eacute;cente crise, n&eacute;e d&apos;une &laquo;&nbsp;&eacute;pid&eacute;mie&nbsp;&raquo; financi&egrave;re, aurait fait &laquo;&nbsp;d&eacute;river&nbsp;&raquo; le noble projet europ&eacute;en. &laquo;&nbsp;D&eacute;rive&nbsp;&raquo; r&eacute;cente d&apos;une &laquo;&nbsp;Europe sociale&nbsp;&raquo; ou &laquo;&nbsp;alibi europ&eacute;en&nbsp;&raquo; indispensable &agrave; la maximisation du profit monopoliste. Annie Lacroix-Riz d&eacute;crit, sources &agrave; l&apos;appui, la strat&eacute;gie, depuis le d&eacute;but du xxe si&egrave;cle, d&apos;effacement du grand capital fran&ccedil;ais devant ses deux grands alli&eacute;s-rivaux h&eacute;g&eacute;moniques, l&apos;Allemagne et les &Eacute;tats-Unis.",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "La po&eacute;sie sauvera le monde   ",
            "subtitle" => "",
            "summary" => "Le d&eacute;ni de la po&eacute;sie n&apos;est pas une affaire litt&eacute;raire, il est politique. Lui d&eacute;nier toute dimension socialement transgressive et agissante, c&apos;est qu&apos;on le veuille ou non un choix politique. Se priver de la saisie particuli&egrave;re de la r&eacute;alit&eacute; que la po&eacute;sie op&egrave;re dans le po&egrave;me, c&apos;est amoindrir fondamentalement la compr&eacute;hension collective du monde.",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Mai 68, un pav&eacute; dans leur histoire",
            "subtitle" => "",
            "summary" => "Qui sont celles et ceux qui ont fait Mai 68 ? Pourquoi et comment leurs trajectoires individuelles sont-elles entr&eacute;es dans l&apos;histoire ? En portent-ils encore aujourd&apos;hui les marques ? Quel a &eacute;t&eacute; l&apos;impact de leur militantisme sur leurs enfants ? L&apos;ouvrage vient r&eacute;habiliter une histoire plurielle de Mai 68, largement ensevelie au fil des c&eacute;l&eacute;brations d&eacute;cennales des &eacute;v&egrave;nements.",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Changement de paradigme en g&eacute;opolitique",
            "subtitle" => "",
            "summary" => "La perte d&apos;influence du dollar et la dette abyssale am&eacute;ricaine marquent le d&eacute;clin des Etats-Unis qui auront domin&eacute; le 20&egrave;me si&egrave;cle. La mont&eacute;e en puissance d&apos;organismes tels que les BRICS (Br&eacute;sil, Russie, Inde, Chine, Afrique du Sud) et l&apos;OCS (Organisme de Coop&eacute;ration de Shanga&iuml;) ouvre la voie &agrave; un 21&egrave;me si&egrave;cle multipolaire. Mais la France enferm&eacute;e dans l&apos;Union Europ&eacute;enne (elle-m&ecirc;me colonis&eacute;e par les USA) sera du c&ocirc;t&eacute; des perdants.",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Le pouvoir ill&eacute;gal des &eacute;lites",
            "subtitle" => "",
            "summary" => "Nos d&eacute;mocraties contemporaines et lib&eacute;rales ont progressivement laiss&eacute; la place &agrave; une gouvernance ad&eacute;mocratique, chaotique, et ill&eacute;gale. En exploitant les failles de notre syst&egrave;me &agrave; leur avantage, la classe des dirigeants s&apos;assure un pouvoir supr&ecirc;me, tandis que les citoyens se sacrifient toujours plus. Quelle est l&apos;&eacute;tendue du pouvoir ill&eacute;gal des &eacute;lites ? Et que faire pour changer les choses ?",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "L&apos;Etat fran&ccedil;ais complice de groupes criminels",
            "subtitle" => "",
            "summary" => "Dirigeants politiques et hauts-fonctionnaires de l&apos;&Eacute;tat fran&ccedil;ais, ils collaborent avec des criminels et des terroristes. Hier, ils ont prot&eacute;g&eacute; certains d&apos;entre eux des recherches de l&apos;Organisation internationale de la police criminelle (Interpol). Aujourd&apos;hui, ils en soutiennent d&apos;autres pour renverser le gouvernement syrien. Voici les faits et les preuves de ces affaires d&apos;&Eacute;tat au c&oelig;ur de l&apos;&Eacute;tat&hellip;",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Le groupe Bilderberg",
            "subtitle" => "",
            "summary" => "",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Le sionisme en question",
            "subtitle" => "",
            "summary" => "Le sionisme est &agrave; la fois une fausse r&eacute;ponse &agrave; l&apos;antis&eacute;mitisme, un nationalisme, un colonialisme et une manipulation de l&apos;histoire, de la m&eacute;moire et des identit&eacute;s juives. La question du sionisme est centrale comme l&apos;&eacute;tait celle de l&apos;aparth&eacute;id quand il a fallu imaginer un autre avenir pour l&apos;Afrique du sud...",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Partenariats public priv&eacute;",
            "subtitle" => "",
            "summary" => "Nouvel eldorado des grands groupes financiers, le &nbsp;&raquo;partenariat public-priv&eacute;&quot; confie &agrave; un op&eacute;rateur priv&eacute; la ma&icirc;trise d&apos;ouvrage et l&apos;exploitation d&apos;un &eacute;quipement collectif, contre un loyer de tr&egrave;s longue dur&eacute;e. Derri&egrave;re la nouveaut&eacute; juridique, se cache un outil puissant d&apos;expropriatio des citoyens et de la puissance publique.",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Parlons banque",
            "subtitle" => "",
            "summary" => "Lehman Brothers, Dexia, Royal Bank of Scotland#133; les banques, on s&apos;en souvient, ont &eacute;t&eacute; au cÅ“ur de la crise financi&egrave;re qui s&apos;est ouverte en 2007. Des plans de sauvetage ont &eacute;t&eacute; lanc&eacute;s pour sauver celles jug&eacute;es trop importantes pour faire faillite. Mais comment au juste, fonctionnent les banques ? Comment g&egrave;rent-elles les risques ? Qui les contr&ocirc;le ?",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "La Nakba",
            "subtitle" => "",
            "summary" => "<p>Plusieurs dizaines d&apos;ann&eacute;es apr&egrave;s sa cr&eacute;ation, l&apos;&Eacute;tat d&apos;Isra&euml;l s&apos;est dot&eacute; d&apos;une loi punissant la c&eacute;l&eacute;bration de la Nakba, nom que les Palestiniens donnent &agrave; l&apos;expulsion des trois quarts d&apos;entre eux entre 1947 et 1949. C&apos;est dire combien cet &eacute;v&eacute;nement p&egrave;se dans la m&eacute;moire des deux peuples. En analysant les m&eacute;canismes de refoulement de cette m&eacute;moire, l&apos;&eacute;tude nous plonge au c&oelig;ur de la mentalit&eacute; juive isra&eacute;lienne.</p>",
            "image" => "/storage/images/books/201504301000.jpg"
        ]);
        DB::table('books')->insert([
            "title" => "Les transclasses ou la non reproduction",
            "subtitle" => "",
            "summary" => "<p>La th&eacute;orie de la reproduction sociale admet des exceptions dont il faut rendre compte pour en mesurer la port&eacute;e. Cet ouvrage a pour but de comprendre philosophiquement le passage exceptionnel d&apos;une classe &agrave; l&apos;autre et de forger une m&eacute;thode d&apos;approche des cas particuliers. </p>",
            "image" => "/storage/images/books/201504091000.jpg"
        ]);
        DB::table('books')->insert([
            "title" => "Le football dans Paris et ses banlieues.",
            "subtitle" => "",
            "summary" => "Sport devenu au cours du XXe si&egrave;cle le plus populaire en Europe, le football peine &agrave; trouver dans Paris et ses banlieues le succ&egrave;s et le soutien qu&apos;on lui accorde dans la plupart des capitales europ&eacute;ennes et des grandes m&eacute;tropoles fran&ccedil;aises.",
            "image" => "/storage/images/books/201504021000.webp"
        ]);
        DB::table('books')->insert([
            "title" => "Une histoire de RAP en France",
            "subtitle" => "",
            "summary" => "Comment le rap est-il n&eacute; en France et comment s&apos;est-il d&eacute;velopp&eacute; ? Qui a tir&eacute; profit de la commercialisation de ses chansons ? Pourquoi ce genre musical est-il si &eacute;troitement associ&eacute; aux banlieues ? Qui sont les artistes qui l&apos;ont promu, et en s&apos;appuyant sur quelles ressources ? Pourquoi continue-t-il r&eacute;guli&egrave;rement &agrave; d&eacute;cha&icirc;ner les passions ?",
            "image" => "/storage/images/books/201503261100.gif"
        ]);
        DB::table('books')->insert([
            "title" => "Le communisme d&eacute;sarm&eacute;",
            "subtitle" => "",
            "summary" => "Le communisme a autant &eacute;t&eacute; d&eacute;sarm&eacute; par ses adversaires socialistes et de droite, dans un contexte d&apos;offensive n&eacute;olib&eacute;rale, qu&apos;il s&apos;est d&eacute;sarm&eacute; lui-m&ecirc;me en abandonnant l&apos;ambition de repr&eacute;senter prioritairement les classes populaires. Analyse du d&eacute;clin d&apos;un parti qui avait produit une &eacute;lite politique ouvri&egrave;re, ce livre propose une r&eacute;flexion sur la construction d&apos;un outil de lutte collectif contre l&apos;exclusion politique des classes populaires.",
            "image" => "/storage/images/books/201503191100.webp"
        ]);
        DB::table('books')->insert([
            "title" => "Trait&eacute; Transatlantique",
            "subtitle" => "",
            "summary" => "Aujourd'hui &agrave; Bruxelles et aux Etats-Unis, se joue la signature d&apos;un trait&eacute; qui risque de changer radicalement la vie de centaines de millions de citoyens am&eacute;ricains et europ&eacute;ens",
            "image" => "/storage/images/books/201503051100.jpg"
        ]);
        DB::table('books')->insert([
            "title" => "Le monde romain",
            "subtitle" => "",
            "summary" => "Le monde romain de 70 av. JC &agrave; 73 apr&egrave;s JC.",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "La gauche radicale et ses tabous",
            "subtitle" => "",
            "summary" => "Pour aller au bout de sa logique, le parti de gauche doit pr&ocirc;ner la sortie de l&apos;Union europ&eacute;enne.",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Europe Les Etats d&eacute;sunis",
            "subtitle" => "",
            "summary" => "Epuis&eacute;s par la rigueur &eacute;conomique, de plus en plus d&eacute;fiants vis&agrave; vis de la construction europ&eacute;enne, les peuples europ&eacute;ens ne comptent plus sur leurs dirigeants pour t&acirc;cher d&apos;en infl&eacute;chir le cours...",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "D&eacute;faire le capitalisme, refaire la d&eacute;mocratie",
            "subtitle" => "",
            "summary" => "<p>A l'heure o&ugrave; la critique antisyst&egrave;me nourrit les ennemis de la d&eacute;mocratie, il est temps de passer de la d&eacute;construction &agrave; la reconstruction, de la mise en lumi&egrave;re des dysfonctionnements r&eacute;guliers &agrave; l'&eacute;clairage des fonctionnements alternatifs, de la soumission au d&eacute;sespoir du r&eacute;el &agrave; l&apos;esp&eacute;rance constructive de l&apos;utopie. La t&acirc;che la plus urgente du chercheur est d&apos;ouvrir, &agrave; nouveau, l&apos;espace des possibles.</p>",
            "image" => "/storage/images/books/xnsviikmmclg.png"
        ]);
        DB::table('books')->insert([
            "title" => "&laquo;&nbsp;Habiter le monde&nbsp;&raquo;",
            "subtitle" => "(Parce qu'il en est ainsi de notre condition humaine)",
            "summary" => "<p>&laquo; Habiter le monde\\/aux origines de notre temps&nbsp;&raquo; a pour ambition de revisiter cinq si&egrave;cles de domination occidentale par le prisme des grandes repr&eacute;sentations &eacute;conomiques qui s&apos;y sont succ&eacute;d&eacute;es.</p><p>Cet exercice est retenu comme un pr&eacute;alable essentiel, apr&egrave;s la crise des Subprimes et de la Covid 19 et alors que les canons tonnent tout pr&egrave;s et que le Giec ne cesse de nous alerter, pour comprendre les enjeux de la pr&eacute;sidentielle et nourrir le d&eacute;bat d&eacute;mocratique.</p>",
            "image" => "/storage/images/books/avbbnuinllll.png"
        ]);
        DB::table('books')->insert([
            "title" => "La cryptomonnaie",
            "subtitle" => "",
            "summary" => "<p>Technologie connue seulement par les plus aguerris depuis le d&eacute;but des ann&eacute;es 2010, les cryptomonnaies sont d&eacute;sormais tr&egrave;s populaire au monde. Cette r&eacute;volution du monde mon&eacute;taire et num&eacute;rique s&apos;est vue propuls&eacute;e par la pand&eacute;mie et ses cons&eacute;quences catastrophiques pour les monnaies fiduciaires. La volont&eacute; d&apos;avoir un nouveau syst&egrave;me mon&eacute;taire, 100% d&eacute;centralis&eacute;, a fait grimper le cours du Bitcoin, locomotive de cette nouvelle technologie. Mais alors que leur fonction premi&egrave;re &eacute;tait de servir de nouveaux moyens d&apos;&eacute;change, les sp&eacute;culations ont vite pris le pas et sont d&eacute;sormais, la seule utilit&eacute; de la plupart des cryptomonnaies. C&apos;est alors, logiquement, que la question de la r&eacute;elle utilit&eacute; de cette technologie doit &ecirc;tre pos&eacute;e.</p>",
            "image" => "/storage/images/books/202204071000.png"
        ]);
        DB::table('books')->insert([
            "title" => "&laquo;&nbsp;Comment l'&eacute;tat s&apos;attaque &agrave; nos libert&eacute;s&nbsp;&raquo;",
            "subtitle" => "",
            "summary" => "<p>&laquo; Surveill&eacute;s et punis &raquo; propose de faire le point pour comprendre comment en vingt ans les autorit&eacute;s ont rogn&eacute; nos droits. Pourquoi et comment avons-nous laiss&eacute; faire ? Si un gouvernement x&eacute;nophobe et autoritaire arrivait au pouvoir, quels outils aurait-il &agrave; sa disposition ? Quels garde-fous nous prot&egrave;gent encore ? Cet ouvrage est aussi un appel &agrave; un &eacute;lan citoyen.</p><p>Fallait-il vivre un confinement mondial au printemps 2020 pour se rendre compte que, du karcher sarkoziste &agrave; la &laquo; guerre &raquo; contre la covid en passant par les &eacute;tats d&apos;urgence terroriste, nous avons progressivement renonc&eacute; &agrave; des libert&eacute;s fondamentales.</p>",
            "image" => "/storage/images/books/pjhuwnfouvfd.png"
        ]);
        DB::table('books')->insert([
            "title" => "5G mon amour",
            "subtitle" => "Enqu&ecirc;te sur la face cach&eacute;e des r&eacute;seaux mobiles",
            "summary" => "<p>Comment et par qui les normes, cens&eacute;es nous prot&eacute;ger, ont-elles &eacute;t&eacute; mises en place ? Quels liens entre op&eacute;rateurs t&eacute;l&eacute;phoniques, m&eacute;dias et gouvernements ? Quels sont les effets de cette technologie sur la sant&eacute; humaine et le vivant ?</p>",
            "image" => "/storage/images/books/ueafavtyubeg.png"
        ]);
        DB::table('books')->insert([
            "title" => "Les Grands patrons en France",
            "subtitle" => "du capitalisme d'&eacute;tat &agrave; la financiarisation",
            "summary" => "<p>Qui sont les grands patrons en France ? D&apos;o&ugrave; viennent-ils et comment sont-ils parvenus &agrave; la t&ecirc;te des plus grandes entreprises fran&ccedil;aises ? La crise conduit &agrave; s&apos;interroger sur les &eacute;lites et leur l&eacute;gitimit&eacute; &agrave; exercer le pouvoir &eacute;conomique. Analysant les r&eacute;seaux, les relations d&apos;affaire, origines sociales et parcours de s grands patrons fran&ccedil;ais, les auteurs montrent que cette mutation a &eacute;t&eacute; largement conduite par les anciennes &eacute;lites administratives, qui se sont converties aux vertus du lib&eacute;ralisme et du capitalisme financier.</p>",
            "image" => "/storage/images/books/wzgqyynawptb.png"
        ]);
        DB::table('books')->insert([
            "title" => "Je veux d&eacute;cider du travail jusqu&apos;&agrave; ma mort",
            "subtitle" => "Conf&eacute;rence organis&eacute;e par les Rencontres Philosophiques Clermontoises en partenariat avec Les Amis du Temps des Cerises et la librairie Les Volcans",
            "summary" => "<p>&laquo; N&apos;esp&eacute;rons pas en finir avec l&apos;ind&eacute;cente p&eacute;riode dite d&apos;insertion des jeunes &laquo; avant le travail &raquo; qui condamne les 18-30 ans &agrave; la pauvret&eacute;, ni avec les p&eacute;riodes &laquo; sans travail &raquo; du ch&ocirc;mage, si nous continuons &agrave; accepter qu&apos;existe une p&eacute;riode &laquo; apr&egrave;s le travail &raquo;, la retraite. Soyons &agrave; la hauteur du droit au salaire continu&eacute; des fonctionnaires, &eacute;tendu au priv&eacute; en 1946 dans le r&eacute;gime g&eacute;n&eacute;ral et aussit&ocirc;t r&eacute;cus&eacute; par le patronat qui invente en 1947 l&apos;Agirc, suivi de l&apos;Arrco, et leurs comptes &agrave; points que Macron veut g&eacute;n&eacute;raliser &raquo;. Bernard Friot refuse d&apos;&ecirc;tre confin&eacute; dans un b&eacute;n&eacute;volat qui nie sa contribution &agrave; la production et le marginalise. Il pose la question : pourquoi attendons-nous la retraite pour faire ce que nous d&eacute;sirons faire ? Pourquoi pas nous organiser pour conqu&eacute;rir la souverainet&eacute; sur notre travail ? Et comment faire du salaire un droit politique, de 18 ans &agrave; la mort ?</p>",
            "image" => "/storage/images/books/202112011100.png"
        ]);
        DB::table('books')->insert([
            "title" => "La non &eacute;puration en France de 1943 aux ann&eacute;es 50",
            "subtitle" => "",
            "summary" => "<p>Y a-t-il vraiment eu en France une politique d'&eacute;puration ? L&apos;auteure explore cette question tout au long de son ouvrage dans lequel elle d&eacute;montre que l'&eacute;puration criminalis&eacute;e ayant suivie la Lib&eacute;ration (femmes tondues, cours martiales, ex&eacute;cutions) a cherch&eacute; &agrave; camoufler la non-&eacute;puration, ausi bien de la part des minist&egrave;res de l&apos;int&eacute;rieur et de la justice que de celle des milieux financiers, de la magistrature, des journalistes, des hommes politiques, voire de l'&Eacute;glise.</p><p>De nombreux anciens collaborateurs ont ainsi b&eacute;n&eacute;fici&eacute; de &laquo;&nbsp;grands protecteurs&nbsp;&raquo;.</p>",
            "image" => "/storage/images/books/202110071000.jpeg"
        ]);
        DB::table('books')->insert([
            "title" => "H&eacute;ritage et Fermeture",
            "subtitle" => "Une &eacute;cologie du d&eacute;mant&egrave;lement",
            "summary" => "<p>Nous d&eacute;pendons pour notre subsistance d&apos;un &laquo;monde organis&eacute;&raquo;, tram&eacute; par l&apos;industrie et le management. Ce monde menace aujourd&apos;hui de s&apos;effondrer. Alors que les mouvements progressistes r&ecirc;vent de monde commun, nous h&eacute;ritons contre notre gr&eacute; de communs moins bucoliques, &laquo;n&eacute;gatifs&raquo;, &agrave; l&apos;image des fleuves et sols contamin&eacute;s, des industries polluantes, des cha&icirc;nes logistiques ou encore des technologies num&eacute;riques. Que faire de ce lourd h&eacute;ritage dont d&eacute;pendent &agrave; court terme des milliards de personnes, alors qu&apos;il les condamne &agrave; moyen terme? Nous n&apos;avons pas d&apos;autre choix que d&apos;apprendre, en urgence, &agrave; destaurer, fermer et r&eacute;affecter ce patrimoine. Et ce, sans liquider les enjeux de justice et de d&eacute;mocratie. Contre le front de modernisation et son anthropologie du projet, de l&apos;ouverture et de l&apos;innovation, il reste &agrave; inventer un art de la fermeture et du d&eacute;mant&egrave;lement: une (anti)&eacute;cologie qui met &laquo;les mains dans le cambouis&raquo;.</p>",
            "image" => "/storage/images/books/202109161000.jpg"
        ]);
        DB::table('books')->insert([
            "title" => "&laquo;&nbsp;La guerre sociale en France&nbsp;&raquo;",
            "subtitle" => "Aux sources &eacute;conomiques de la d&eacute;mocratie autoritaire",
            "summary" => "<p>La tentation d&apos;un pouvoir autoritaire dans la France de 2019 trouve ses racines dans le projet &eacute;conomique du candidat Macron.</p><p>Depuis des d&eacute;cennies, la pens&eacute;e n&eacute;olib&eacute;rale m&egrave;ne une guerre larv&eacute;e contre le mod&egrave;le social fran&ccedil;ais de l&apos;apr&egrave;s-guerre. La r&eacute;sistance d&apos;une population refusant des politiques en faveur du capital a abouti &agrave; un mod&egrave;le mixte, int&eacute;grant des &eacute;l&eacute;ments n&eacute;olib&eacute;raux plus mod&eacute;r&eacute;s qu&apos;ailleurs, et au maintien de plus en plus pr&eacute;caire d&apos;un compromis social. &Agrave; partir de la crise de 2008, l&apos;offensive n&eacute;olib&eacute;rale s&apos;est radicalis&eacute;e, dans un rejet complet de tout &eacute;quilibre.</p><p>Emmanuel Macron appara&icirc;t alors comme l&apos;homme de la revanche d&apos;un capitalisme fran&ccedil;ais qui jadis a combattu et vaincu le travail, avec l&apos;appui de l&apos;&Eacute;tat, mais qui a d&ucirc; accepter la m&eacute;diation publique pour &laquo; civiliser &raquo; la lutte de classes. Arriv&eacute; au pouvoir sans disposer d&apos;une adh&eacute;sion majoritaire &agrave; un programme qui renverse cet &eacute;quilibre historique, le Pr&eacute;sident fait face &agrave; des oppositions h&eacute;t&eacute;roclites mais qui toutes rejettent son projet n&eacute;olib&eacute;ral, largement &agrave; contretemps des enjeux de l&apos;&eacute;poque. Le pouvoir n&apos;a ainsi d&apos;autre solution que de durcir la d&eacute;mocratie par un exc&egrave;s d&apos;autorit&eacute;. Selon une m&eacute;thode classique du n&eacute;olib&eacute;ralisme : de l&apos;&eacute;puisement de la soci&eacute;t&eacute; doit provenir son ob&eacute;issance.</p>",
            "image" => "/storage/images/books/yjuphjlwtdlx.png"
        ]);
        DB::table('books')->insert([
            "title" => "Il n&apos;y a que moi que &ccedil;a choque ?",
            "subtitle" => "Huit ans dans la bulle des journalistes politiques",
            "summary" => "<p>Les liens d&apos;interd&eacute;pendance &ndash; on pourrait dire les obligeances r&eacute;ciproques &ndash;, le off et les d&eacute;jeuners avec les politiques, les relations avec les autres journalistes : Rachid La&iuml;reche chronique de l&apos;int&eacute;rieur l&apos;entre-soi et la superficialit&eacute; du journalisme politique. Ayant occup&eacute; la fonction &agrave; Lib&eacute;ration pendant huit ans, il raconte, au fil des pages, son apprentissage des codes et des pratiques, sa progressive mise en conformit&eacute; avec les attendus de ses chefs et son immersion dans le monde social de ses confr&egrave;res et cons&oelig;urs. Puis son malaise et sa prise de distance avec un m&eacute;tier enferm&eacute; dans sa &laquo; bulle &raquo; et qui se limite bien trop souvent &agrave; une &laquo; chronique de la courtisanerie &raquo;. Publier un article bienveillant pour gagner les faveurs d&apos;une source, d&eacute;jeuner avec un pr&eacute;sident de la R&eacute;publique et lui poser des questions futiles, traiter de sujets de fond sans n&apos;y rien conna&icirc;tre&hellip; la succession d&apos;anecdotes dessine ainsi, au fur et &agrave; mesure, un portrait (auto)critique.</p><p>Au fil des pages, il nous entra&icirc;ne dans les coulisses de ses rencontres avec Hollande, M&eacute;lenchon, Duflot, Dray, Taubira, Rousseau ou Jadot. Il d&eacute;crypte les rites de la meute des journalistes politiques, les codes de l&apos;entre-soi, la d&eacute;r&eacute;alisation collective de la bulle.</p><p><br></p><p>Ironique, instructif et &eacute;mouvant, son r&eacute;cit met &agrave; nu la profondeur du mal d&eacute;mocratique.</p><p><br></p><p><br></p>",
            "image" => "/storage/images/books/202401181100.jpeg"
        ]);
        DB::table('books')->insert([
            "title" => "L'&Eacute;tat hors-la-loi",
            "subtitle" => "",
            "summary" => "<p>La multiplication r&eacute;cente des violences polici&egrave;res, des morts et des bless&eacute;s qu'elles ont entra&icirc;n&eacute;s, a rappel&eacute; &agrave; quel point l&apos;usage de la force est corr&eacute;l&eacute; au pouvoir d'&Eacute;tat. Pour autant, ces violences restent largement impens&eacute;es, g&eacute;n&eacute;ralement consid&eacute;r&eacute;es comme la cons&eacute;quence de contradictions internes &agrave; la gestion de l&apos;ordre n&eacute;olib&eacute;ral. Or les violences qui ont conduit &agrave; la mort de Nahel M., &agrave; celle de R&eacute;mi Fraisse, &agrave; celle de C&eacute;dric Chouviat, comme celles qui ont consist&eacute; &agrave; mettre &agrave; genoux les lyc&eacute;ens de Mantes-la-Jolie ou &agrave; mutiler des gilets jaunes n'ont ni les m&ecirc;mes modalit&eacute;s ni les m&ecirc;mes rationalit&eacute;s.</p><p>Fond&eacute; sur l&apos;analyse des dossiers judiciaires auxquels l&apos;auteur a eu acc&egrave;s, ce livre montre que les armes, les techniques, les pratiques et les objectifs, ainsi que les r&eacute;actions politico-m&eacute;diatiques et les traitements judiciaires diff&egrave;rent selon que les violences ciblent une expression politique, l&apos;exercice d&apos;une libert&eacute; de circulation ou la simple appartenance ethno-raciale.</p><p>Discipliner, punir, instaurer ou restaurer un rapport de domination, territorialiser l&apos;espace public, l&apos;espace priv&eacute;, les flux de circulation et, dans les cas les plus extr&ecirc;mes, exprimer une violence pure #150; celle de l&apos;antique pouvoir de vie et de mort #150;, telles sont les diff&eacute;rentes fonctions des violences polici&egrave;res. Cette distinction permet de mieux saisir les rapports de pouvoir qui s&apos;expriment entre l'&Eacute;tat et la population et entre la police et des groupes sociaux d&eacute;termin&eacute;s. Elle offre aussi des prises pour tenter de r&eacute;pondre &agrave; une question plus fondamentale : la violence est-elle constitutive du pouvoir, un moyen de son exercice ou une condition de sa possibilit&eacute; ?</p>",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "On ne peut accueillir toute la mis&egrave;re du monde",
            "subtitle" => "En finir avec une sentence de mort",
            "summary" => "<p><strong>&laquo; On ne peut pas accueillir toute la mis&egrave;re du monde &raquo;</strong> : qui n&apos;a jamais entendu cette phrase au statut presque proverbial, &eacute;nonc&eacute;e toujours pour justifier le repli, la restriction, la fin de non-recevoir et la r&eacute;pression ? Dix mots qui tombent comme un couperet, et qui sont devenus l&apos;horizon ind&eacute;passable de tout d&eacute;bat &laquo; raisonnable &raquo; sur les migrations. Comment y r&eacute;pondre ? C&apos;est toute la question de cet essai incisif, qui propose une lecture critique, mot &agrave; mot, de cette sentence, afin de pointer et r&eacute;futer les sophismes et les contre-v&eacute;rit&eacute;s qui la sous-tendent. Arguments, chiffres et r&eacute;f&eacute;rences &agrave; l&apos;appui, il s&apos;agit en somme de d&eacute;construire et de d&eacute;faire une &laquo; x&eacute;nophobie autoris&eacute;e &raquo;, mais aussi de r&eacute;affirmer la n&eacute;cessit&eacute; de l&apos;hospitalit&eacute;.</p>",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Tous ceux qui tombent",
            "subtitle" => "",
            "summary" => "<p>Fin ao&ucirc;t 1572. &Agrave; Paris, des notaires dressent des inventaires apr&egrave;s d&eacute;c&egrave;s, enregistrent des actes, r&egrave;glent des h&eacute;ritages. Avec minutie, ils transcrivent l&apos;ordinaire des vies au milieu d&apos;une colossale h&eacute;catombe. Mais ils livrent aussi des noms, des adresses, des liens. </p><p> Puisant dans ces archives notariales, J&eacute;r&eacute;mie Foa tisse une micro-histoire de la Saint-Barth&eacute;lemy soucieuse de nommer les anonymes, les obscurs jet&eacute;s au fleuve ou m&ecirc;l&eacute;s &agrave; la fosse, &agrave; jamais engloutis. Pour &eacute;lucider des crimes dont on ignorait jusqu'&agrave; l&apos;existence, il abandonne les palais pour les pav&eacute;s, exhumant les indices d&apos;un massacre de proximit&eacute;, commis par des voisins sur leurs voisins. Car &agrave; descendre dans la rue, on croise ceux qui ont du sang sur les mains, on observe le savoir-faire de la poign&eacute;e d'hommes responsables de la plupart des meurtres. Sans avoir &eacute;t&eacute; pr&eacute;m&eacute;dit&eacute;, le massacre &eacute;tait pr&eacute;par&eacute; de longue date #150; les assassins n'ont pas surgi tout arm&eacute;s dans la folie d&apos;un soir d'&eacute;t&eacute;. </p><p> Au fil de vingt-cinq enqu&ecirc;tes haletantes, l'historien retrouve les victimes et les tueurs, simples passants ou ardents massacreurs, dans leur humaine trivialit&eacute; : &eacute;pingliers, menuisiers, r&ocirc;tisseurs de la Vall&eacute;e de Mis&egrave;re, tanneurs d&apos;Aubusson et taverniers de Maubert, <em>vies minuscules</em> emport&eacute;es par l'&eacute;v&eacute;nement. </p><p> Prix de la Contre-All&eacute;e 2022 </p><p> Prix Lyc&eacute;en du livre d'Histoire de Blois 2022 </p><p> Prix Histoire du Festival Protestant du Livre 2022 </p><p> Prix de l&apos;Acad&eacute;mie des Sciences, Lettres et Arts de Marseille 2022</p>",
            "image" => "/storage/images/books/202405231000.jpg"
        ]);
        DB::table('books')->insert([
            "title" => "L&apos;empire olympique",
            "subtitle" => "Une mystification politique",
            "summary" => "<p>El&eacute;ment cl&eacute; de la mondialisation capitaliste et de la finance internationale, le Comit&eacute; international olympique (CIO) est structur&eacute; comme une multinationale en expansion permanente. Associ&eacute; aux grands trusts affairistes (Coca-Cola, McDonald's, Ali Baba, etc.), aux appareils d&apos;Etats qui violent r&eacute;guli&egrave;rement les droits de l'Homme (Chine, Russie, p&eacute;tromonarchies islamiques, etc.) et aux r&eacute;seaux m&eacute;diatiques transnationaux (WarnerBros, Discovery, NBCUniversal, BeIn Sport, etc.), il propage son id&eacute;ologie de la comp&eacute;tition pour les profits et des profits pour la comp&eacute;tition gr&acirc;ce &agrave; son produit phare : les Jeux olympiques.</p><p>Ce circus maximus quadriennal est structurellement gangren&eacute; par les affaires de corruption, le dopage massif des athl&egrave;tes, les violences de la rage de vaincre et les collusions cyniques avec les r&eacute;gimes totalitaires, dictatoriaux ou militaro-policiers. Cela n'emp&ecirc;che pas le CIO de se pr&eacute;senter comme une institution &laquo; humaniste &raquo;, garante d&apos;une &laquo; philosophie de la vie &raquo; respectant les &laquo; principes &eacute;thiques fondamentaux universels &raquo; et la &laquo; dignit&eacute; humaine &raquo;.</p><p>L&apos;examen critique de l&apos;olympisme, con&ccedil;u par Coubertin comme une religion universelle ou une vision du monde totalisante, implique d&apos;en d&eacute;voiler les mensonges et les illusions et de mettre en question le d&eacute;ni g&eacute;n&eacute;ralis&eacute; de sa nature politique profond&eacute;ment in&eacute;galitaire et anti-d&eacute;mocratique.</p>",
            "image" => "/storage/images/books/202404182000.webp"
        ]);
        DB::table('books')->insert([
            "title" => "L&apos;oeuvre-vie d&apos;Antonio Gramsci",
            "subtitle" => "",
            "summary" => "<p>Antonio Gramsci (1891-1937) reste l&apos;un des penseurs majeurs du marxisme, et l&apos;un des plus convoqu&eacute;s. L'Å’uvre-vie aborde les diff&eacute;rentes phases de son action et de sa pens&eacute;e #150; des ann&eacute;es de formation &agrave; Turin jusqu'&agrave; sa mort &agrave; Rome, en passant par ses activit&eacute;s de militant communiste et ses ann&eacute;es d&apos;incarc&eacute;ration #150; en restituant leurs liens avec les grands &eacute;v&eacute;nements de son temps : la r&eacute;volution russe, les prises de position de l&apos;Internationale communiste, la mont&eacute;e au pouvoir du fascisme en Italie, la situation europ&eacute;enne et mondiale de l&apos;entre-deux-guerres. Gr&acirc;ce aux apports de la recherche italienne la plus actuelle, cette d&eacute;marche historique s&apos;ancre dans une lecture pr&eacute;cise des textes #150; pour partie in&eacute;dits en France #150;, qui permet de saisir le sens profond de ses &eacute;crits et toute l&apos;originalit&eacute; de son approche.</p><p>Analysant en d&eacute;tail la correspondance, les articles militants, puis les Cahiers de prison du r&eacute;volutionnaire, cette biographie intellectuelle rend ainsi compte du processus d'&eacute;laboration de sa r&eacute;flexion politique et philosophique, en soulignant les leitmotive et en restituant &laquo; &nbsp;le rythme de la pens&eacute;e en d&eacute;veloppement &nbsp;&raquo;.</p><p>Au fil de l'&eacute;criture des Cahiers, Gramsci comprend que la &laquo; &nbsp;philosophie de la praxis &nbsp;&raquo; a besoin d&apos;outils conceptuels nouveaux, et les invente : &laquo; &nbsp;h&eacute;g&eacute;monie &nbsp;&raquo;, &laquo; &nbsp;guerre de position &nbsp;&raquo;, &laquo; &nbsp;r&eacute;volution passive &nbsp;&raquo;, &laquo; &nbsp;subalternes &nbsp;&raquo;, etc. Autant de concepts qui demeurent utiles pour penser notre propre &laquo; &nbsp;monde grand et terrible &nbsp;&raquo;.</p>",
            "image" => "/storage/images/books/202404112000.jpeg"
        ]);
        DB::table('books')->insert([
            "title" => "La Retirada",
            "subtitle" => "L&apos;exil de r&eacute;fugi&eacute;s r&eacute;publicains espagnols en 1939",
            "summary" => "<p>La retirada est l&apos;exode des r&eacute;fugi&eacute;s de la guerre d&apos;Espagne. &Agrave; partir de f&eacute;vrier 1939, ce sont pr&egrave;s de 500 000 personnes qui franchissent la fronti&egrave;re franco-espagnole suite &agrave; la prise de Barcelone par les nationalistes du g&eacute;n&eacute;ral Franco.</p><p>Partenaires&nbsp;: Ville de Clermont-Ferrand, Association AMARRES</p>",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Th&eacute;orie d&eacute;lib&eacute;rative des valeurs",
            "subtitle" => "De la valeur travail &agrave; un travail sur les valeurs",
            "summary" => "<p>&laquo; Tout ce qui a son prix est de peu de valeur &raquo;, affirmait Nietzsche. Pourtant, aujourd&apos;hui, tout se passe comme si la valeur &eacute;conomique r&eacute;sumait les valeurs de notre soci&eacute;t&eacute; pour &ecirc;tre la seule mesure du bien-&ecirc;tre. Cette domination nous place devant une triple crise : &eacute;cologique, d&eacute;mocratique et &eacute;conomique. &eacute;cologique car la valeur &eacute;conomique ne permet pas de prendre en compte la complexit&eacute; du vivant. D&eacute;mocratique car les d&eacute;bats politiques sont soumis aux lois de la valeur &eacute;conomique, ce qui oriente le d&eacute;bat, l&eacute;gitime les in&eacute;galit&eacute;s et interdit une remise en cause radicale du mode de vie. &eacute;conomique parce que la cr&eacute;ation de valeur repose, aujourd&apos;hui encore, sur la possibilit&eacute; d&apos;une croissance infinie sur une plan&egrave;te finie. Ainsi, ouvrir le d&eacute;bat sur les valeurs #150; se poser la question &agrave; quoi tenons-nous ? #150; c&apos;est se donner les moyens de penser le monde de demain. Un monde &eacute;cologique n&eacute;cessite de passer de la supr&eacute;matie de la valeur travail &agrave; un travail d&eacute;mocratique sur les valeurs. &agrave; condition cependant de sortir de nos d&eacute;mocraties repr&eacute;sentatives &agrave; bout de souffle pour emprunter la voie de la participation et de la d&eacute;lib&eacute;ration. Dans cette perspective d&eacute;lib&eacute;rative, il n&apos;y a pas de valeur qui &eacute;chappe au d&eacute;bat collectif : ce qui constitue le vivre ensemble est un choix de soci&eacute;t&eacute;. In fine, la valeur &eacute;conomique, comme toutes les valeurs, n&apos;est ni objective ni subjective mais le fruit de choix d&eacute;mocratiques. Il est temps de passer de la valeur travail &agrave; un travail sur les valeurs.</p>",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Le massacre de Thiaroye",
            "subtitle" => "Histoire d&apos;un mensonge d&apos;&Eacute;tat ",
            "summary" => "<p>Morts par la France</p><p>I<sup>er</sup> d&eacute;cembre 1944, camp de Thiaroye, en p&eacute;riph&eacute;rie de Dakar. Des tirailleurs s&eacute;n&eacute;galais, faits prisonniers par les Allemands lors de la guerre et r&eacute;cemment rapatri&eacute;s, r&eacute;clament le paiement de leur solde. Un droit qui leur &eacute;tait promis depuis des mois. La r&eacute;ponse est sanglante et d&apos;une violence inou&iuml;e&nbsp;: des centaines d&apos;entre eux sont rassembl&eacute;s sur une esplanade du camp, froidement mitraill&eacute;s puis jet&eacute;s dans des fosses communes.</p><p>Pourtant, d&egrave;s le lendemain, les autorit&eacute;s coloniales et militaires pr&eacute;texteront une r&eacute;bellion arm&eacute;e des tirailleurs et feront &eacute;tat de trente-cinq morts. Entre mensonge d'&Eacute;tat et fraude scientifique,</p>",
            "image" => "/storage/images/books/202501222000.jpeg"
        ]);
        DB::table('books')->insert([
            "title" => "Parias",
            "subtitle" => " Hannah Arendt et la &laquo; tribu &raquo; en France (1933-1941) ",
            "summary" => "<p>Voici le r&eacute;cit palpitant des huit ann&eacute;es fran&ccedil;aises de Hannah Arendt qui marqueront profond&eacute;ment sa vie et son Å“uvre.</p><p>Fuyant la Gestapo, Hannah Arendt arrive &agrave; Paris en octobre 1933. La jeune femme de 27 ans, promise &agrave; une brillante carri&egrave;re universitaire en Allemagne, doit se faire aux chambres insalubres des h&ocirc;tels garnis, &agrave; la difficult&eacute; de trouver du travail et &agrave; l&apos;hostilit&eacute; d&apos;une partie des Fran&ccedil;ais.</p><p>Mais dans le quartier latin et &agrave; Montparnasse, ceux qui ont fui Hitler parviennent &agrave; faire vivre un autre pays en exil. Elle y croise Heinrich Bl&uuml;cher, faux dandy et vrai r&eacute;volutionnaire, qui deviendra son mari. Tous deux font partie d&apos;une famille d&apos;hurluberlus magnifiques #150; compos&eacute;e, entre autres, d&apos;Erich Cohn-Bendit, Lotte Sempell, Chanan Klenbort, Adrienne Monnier, Fritz Fr&auml;nkel, Minna Flake et Arthur Koestler #150; qui se retrouvent autour du g&eacute;nial Walter Benjamin. Ils forment cette &laquo; tribu &raquo; qui donne &agrave; chacun la force de continuer &agrave; vivre.</p><p>&Agrave; l&apos;approche de la guerre, et face &agrave; l&apos;afflux de r&eacute;fugi&eacute;s, l&apos;administration fran&ccedil;aise interne les &laquo; ind&eacute;sirables &raquo; et les amis sont l&apos;un apr&egrave;s l&apos;autre enferm&eacute;s. Pendant plusieurs semaines, Arendt conna&icirc;t &laquo; l&apos;enfer du camp de Gurs &raquo; et fr&ocirc;le le d&eacute;sespoir. Lorsque les troupes nazies envahissent la France, elle profite du chaos pour fuir le camp#133; Fruit d&apos;une enqu&ecirc;te minutieuse, r&eacute;alis&eacute;e notamment &agrave; partir d&apos;archives et de t&eacute;moignages in&eacute;dits, voici le r&eacute;cit palpitant des huit ann&eacute;es fran&ccedil;aises de Hannah Arendt qui marqueront profond&eacute;ment sa vie et son Å“uvre.</p>",
            "image" => "/storage/images/books/202502122000.jpeg"
        ]);
        DB::table('books')->insert([
            "title" => " La machine &agrave; d&eacute;truire",
            "subtitle" => " Pourquoi il faut en finir avec la finance",
            "summary" => "<p>Les crises financi&egrave;res se succ&egrave;dent et se ressemblent. Chaque fois, pour &eacute;viter le chaos, les &Eacute;tats et les banques centrales interviennent. Mais que sauvent-ils ? Quel rapport cela a-t-il avec l&apos;augmentation rapide des in&eacute;galit&eacute;s et de l&apos;endettement des &Eacute;tats, avec la d&eacute;gradation des services publics, ou encore avec les r&eacute;sistances &agrave; travers le monde&nbsp;?</p><p>La Machine &agrave; d&eacute;truire revient sur ces crises et ce qui les suit, et s&apos;interroge sur la place croissante des banques et de la finance dans nos existences. Suffira-t-il de d&eacute;placer l&apos;argent vers des investissements plus verts&nbsp;? Les solutions financi&egrave;res sont-elles &agrave; la hauteur de leurs promesses&nbsp;? Peut-on se permettre de laisser les banques au centre du syst&egrave;me?</p><p>Loin de nous &eacute;craser avec des notions techniques et lointaines, Aline Fares et J&eacute;r&eacute;my Van Houtte proposent plut&ocirc;t un regard limpide et des analyses dr&ocirc;les et document&eacute;es sur la finance, &agrave; partir d&apos;exp&eacute;riences famili&egrave;res et v&eacute;cues.</p>",
            "image" => "/storage/images/books/202502192000.jpeg"
        ]);
        DB::table('books')->insert([
            "title" => " De Paris &agrave; H&eacute;bron",
            "subtitle" => "",
            "summary" => "<p>Chantal et Anwar. Une Fran&ccedil;aise n&eacute;e dans le Nord de la France, un Palestinien originaire d&apos;H&eacute;bron, au sud de la Palestine ; un couple, form&eacute; en 1980, parents de deux enfants. Lui s&apos;est fait conna&icirc;tre au fil d&apos;un parcours remarquable #150; militant palestinien r&eacute;fugi&eacute; en 1978 en France, o&ugrave; il poursuit des &eacute;tudes de droit, un temps chauffeur de taxi pour gagner sa vie, il se voit proposer, apr&egrave;s les accords d&apos;Oslo de 1993, un poste de professeur de droit civil &agrave; l&apos;universit&eacute; Al-Quds de J&eacute;rusalem-Est. Il deviendra, en 2013-2014, ministre de la Culture de l&apos;Autorit&eacute; palestinienne, et demeure l&apos;une des voix palestiniennes pacifistes majeures sur la sc&egrave;ne internationale.</p><p>Mais que sait-on du parcours de son &eacute;pouse Chantal #150; hormis qu&apos;elle a cofond&eacute; avec lui l&apos;association d&apos;&eacute;changes culturels H&eacute;bron-France #150; et de son quotidien, &agrave; cheval entre deux cultures &agrave; mille lieues l&apos;une de l&apos;autre, entre la paix et la guerre, depuis qu&apos;elle a choisi d&apos;abandonner son confortable quotidien en France pour suivre Anwar et vivre &agrave; H&eacute;bron ?</p><p>&laquo; Depuis leur adolescence, nos enfants, issus de notre couple franco- palestinien, me disent souvent : #147;Comment t&apos;as fait ? Raconte !#148; Vingt- quatre ans apr&egrave;s mon installation en Palestine, mettre en perspective mes exp&eacute;riences &agrave; une &eacute;poque o&ugrave; les questions sur l&apos;identit&eacute;, la la&iuml;cit&eacute;, l&apos;islamisme ou le racisme sont au centre des d&eacute;bats, voil&agrave; ce qui me tient &agrave; coeur depuis de longues ann&eacute;es &raquo;.</p>",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => " Barbarie num&eacute;rique",
            "subtitle" => " une autre histoire du monde connect&eacute;",
            "summary" => "<p>Une enqu&ecirc;te implacable sur la trag&eacute;die que vit le Congo, cÅ“ur des industries num&eacute;riques et objet de toutes les convoitises.</p><p>&Agrave; partir des ann&eacute;es 1990, l&apos;explosion de la production de biens &eacute;lectroniques, caract&eacute;ristique du passage du capitalisme &agrave; son stade num&eacute;rique, d&eacute;clenche une guerre des m&eacute;taux technologiques au Congo (RDC) qui n&apos;a fait que gagner en intensit&eacute;. Cette enqu&ecirc;te fouill&eacute;e montre que la d&eacute;mat&eacute;rialisation est bel et bien un mythe.</p><p>Elle se nourrit d&apos;un extractivisme sans limites dans des r&eacute;gions, comme celle des Grands Lacs en Afrique, qui subissent depuis des si&egrave;cles les ravages de la mondialisation : de la traite n&eacute;gri&egrave;re &agrave; la terreur coloniale du roi belge L&eacute;opold II (pour le &laquo; caoutchouc rouge &raquo; n&eacute;cessaire &agrave; l&apos;industrie automobile) jusqu&apos;aux minerais de sang actuels (dont le coltan, essentiel aux smartphones, et le cobalt, pour la transition &eacute;nerg&eacute;tique).</p><p>La civilisation de l&apos;&eacute;cran est synonyme d&apos;une barbarie num&eacute;rique qui se manifeste au Congo par : une &eacute;conomie militaris&eacute;e et une criminalit&eacute; institutionnalis&eacute;e, un pillage g&eacute;n&eacute;ralis&eacute;, du travail forc&eacute;, le viol comme arme de guerre, la destruction des for&ecirc;ts et l&apos;an&eacute;antissement de la biodiversit&eacute;#133; Autant de catastrophes qui font du Congo l&apos;une des plus grandes trag&eacute;dies de l&apos;histoire contemporaine, le prix fort &agrave; payer pour un monde connect&eacute;.</p>",
            "image" => "/storage/images/books/202504022000.png"
        ]);
        DB::table('books')->insert([
            "title" => " De l&apos;invisibilit&eacute; &agrave; la visibilit&eacute; ",
            "subtitle" => " Visage(s) de l&apos;inconvenant ",
            "summary" => "<p>Le concept de &laquo; visag&eacute;it&eacute; &raquo;, d&eacute;fini par Gilles Deleuze et F&eacute;lix Guattari, est un pr&eacute;alable essentiel &agrave; toute analyse des strat&eacute;gies d&apos;extraction du sujet en dehors des normes. Cette notion a d&apos;ailleurs &eacute;t&eacute; cr&eacute;&eacute;e dans le but pr&eacute;cis de questionner les rapports du sujet au corps et donc &agrave; l&apos;identit&eacute;. Audacieux, &eacute;trange et d&eacute;rangeant, le rapport entre &laquo; inconvenant &raquo; et &laquo; d&eacute;centrement &raquo; souligne combien les litt&eacute;ratures et productions culturelles qui sortent du cadre et de l&apos;ordre &eacute;tabli d&eacute;rangent et bousculent les standards.</p><p>Les travaux r&eacute;unis dans le pr&eacute;sent ouvrage s&apos;attachent &agrave; analyser les strat&eacute;gies de &laquo; remise &agrave; l&apos;ordre &raquo; ou de &laquo; retour au centre &raquo; qui ont &eacute;t&eacute; d&eacute;ploy&eacute;es pour faire rentrer dans le rang du convenu, du convenable et de la visag&eacute;it&eacute;, les cr&eacute;ateurs m&ecirc;mes de l&apos;inconvenant. &laquo; L&apos;invisibilit&eacute; et la visibilit&eacute; &raquo; sont &eacute;tudi&eacute;es au prisme de &laquo; la visag&eacute;it&eacute; de l&apos;inconvenant &raquo; dans le domaine des arts (peinture, cin&eacute;ma, danse), de la litt&eacute;rature, des relations interculturelles et de la ruralit&eacute; et scrutent avec minutie les repr&eacute;sentations prot&eacute;iformes que peut recouvrir l&apos;inconvenant.</p>",
            "image" => "/storage/images/books/202504162000.jpeg"
        ]);
        DB::table('books')->insert([
            "title" => " La machine &agrave; gagner",
            "subtitle" => "R&eacute;v&eacute;lations sur le RN en marche vers l&apos;Elys&eacute;e",
            "summary" => "<p>Cette &laquo; machine &raquo; a longtemps carbur&eacute; au d&eacute;tournement de fonds public : le RN, d&eacute;montre le livre, l&apos;a pratiqu&eacute; &agrave; &eacute;chelle industrielle au d&eacute;triment de l&apos;Etat et de l&apos;Union europ&eacute;enne, pour financer le train de vie excessif de son appareil.</p><p>&Eacute;difiantes sont aussi les pages consacr&eacute;es &agrave; la &laquo; conqu&ecirc;te m&eacute;diatique &raquo; du parti, qui documentent les entraves pos&eacute;es au travail de certains m&eacute;dias, et les pressions exerc&eacute;es sur d&apos;autres pour obtenir un traitement favorable. Non sans r&eacute;sultat, avec par exemple la quasi-disparition au &laquo; Figaro &raquo; de l&apos;expression &laquo; extr&ecirc;me droite &raquo; pour qualifier le RN.</p><p>En coulisses, pendant ce temps, un cercle de conseillers occultes, issus de la haute administration ou du monde de l&apos;entreprise, travaille &agrave; la &laquo; mont&eacute;e en gamme &raquo; du parti : ils forment &laquo; un ensemble bourgeois qui se reconna&icirc;t dans une vision x&eacute;nophobe du monde, le fantasme d&apos;une guerre civilisationnelle &agrave; venir et la volont&eacute; de pr&eacute;server ses int&eacute;r&ecirc;ts &raquo;.</p>",
            "image" => "/storage/images/books/ahxrrxkfnkao.jpeg"
        ]);
        DB::table('books')->insert([
            "title" => "Le d&eacute;fi de la paix",
            "subtitle" => "Remodeler les organisations internationales",
            "summary" => "<p>La multiplication des crises et des conflits bouleverse le cadre g&eacute;n&eacute;ral des relations internationales. Non seulement les rapports entre &Eacute;tats sont modifi&eacute;s et tendus, mais ces derniers contestent de plus en plus les r&egrave;gles, les valeurs et les principes pacifiques et humanistes qui fondent l&apos;ordre mondial depuis 1945. Ce livre a pour vocation d&apos;analyser ce dangereux d&eacute;s&eacute;quilibre, de faire (re)d&eacute;couvrir les organisations internationales et leur matrice, l&apos;ONU, et de rappeler leur raison d&apos;&ecirc;tre, leur naissance exceptionnelle et leur utilit&eacute;. Car loin des projecteurs, elles sont aussi le th&eacute;&acirc;tre de batailles d&apos;influence o&ugrave; se jouent les grands d&eacute;fis globaux : s&eacute;curit&eacute;, droits fondamentaux, environnement, sant&eacute;#133; Comprendre l&apos;enjeu de leur renouvellement est fondamental pour maintenir un dialogue entre &Eacute;tats et esp&eacute;rer pr&eacute;server la paix mondiale. &Eacute;clair&eacute; par des observations de terrain, et fond&eacute; sur des ann&eacute;es de r&eacute;flexions universitaires, cet ouvrage fournit des cl&eacute;s pour comprendre la crise actuelle de l&apos;ordre international, et permet d&apos;en percevoir le sens profond&nbsp;</p>",
            "image" => "/storage/images/books/202506042000.jpeg"
        ]);
        DB::table('books')->insert([
            "title" => "Mobilis&eacute;es !",
            "subtitle" => "Une histoire f&eacute;ministe des contestations populaires",
            "summary" => "<p>Dans toutes les mobilisations sociales de la p&eacute;riode r&eacute;cente, l&apos;implication des femmes est forte et, pourtant, &agrave; chaque fois, elle surprend. Leur pr&eacute;sence est interpr&eacute;t&eacute;e comme le signe d&apos;une contestation exceptionnelle. En r&eacute;alit&eacute;, ce qui m&eacute;rite l&apos;&eacute;tonnement, c&apos;est qu&apos;on oublie leur participation. Car les femmes ont toujours pris la parole et la rue, avec des modalit&eacute;s d&apos;action singuli&egrave;res.De la figure de la &laquo; m&eacute;nag&egrave;re &raquo; des Trente Glorieuses, &agrave; celle des &laquo; Rosies &raquo; dans les r&eacute;centes manifestations contre la r&eacute;forme des retraites, Fanny Gallot revisite le pass&eacute; des luttes sociales depuis 1945. Elle montre comment les modalit&eacute;s d&apos;action et les revendications ont pu &eacute;voluer au fil des d&eacute;cennies, sous l&apos;influence des mouvements f&eacute;ministes et de l&apos;&eacute;cho qu&apos;ils ont rencontr&eacute; aupr&egrave;s des organisations syndicales.La question du &laquo; travail reproductif &raquo; est au cÅ“ur de ces luttes. Que l&apos;on d&eacute;nonce sa &laquo; d&eacute;qualification &raquo; lorsqu&apos;il est exerc&eacute; dans le domaine professionnel ou son &laquo; invisibilisation &raquo; quand il d&eacute;signe les t&acirc;ches domestiques accomplies quotidiennement, il est au centre des d&eacute;bats, des revendications et des actions. En tenir compte, tenter d&apos;en discerner les contours est un puissant levier d&apos;action pour les luttes pass&eacute;es, pr&eacute;sentes et &agrave; venir.&nbsp;</p>",
            "image" => "/storage/images/books/202501082000.jpeg"
        ]);
        DB::table('books')->insert([
            "title" => "Pr&eacute;f&eacute;rer la Libert&eacute; &agrave; la S&eacute;curit&eacute;",
            "subtitle" => "",
            "summary" => "<p>Pr&eacute;f&eacute;rer la Libert&eacute; &agrave; la S&eacute;curit&eacute;, &eacute;ditions Crefad documents,</p>\r\n<p>est un ouvrage collectif &eacute;labor&eacute; par les chercheurs du Centre de Recherche et de Formation &agrave; l&apos;Animation et au D&eacute;veloppement, CREFAD.</p>\r\n<p>Pr&eacute;sentation par les auteurs</p>\r\n<p>En cherchant dans les &eacute;chos de nos &eacute;changes des r&eacute;currences th&eacute;matiques, en identifiant ce qui s&apos;affrontait autour de nous sans tout &agrave; fait se laisser voir, nous avions formul&eacute; ce th&egrave;me, au sein du R&eacute;seau des Crefad&nbsp;: pr&eacute;f&eacute;rer la libert&eacute; &agrave; la s&eacute;curit&eacute;. Comme une affirmation pas une question. Une &eacute;vidence. Et c&apos;&eacute;tait en 2019.</p>\r\n<p>Puis en pr&eacute;parant nos rencontres de r&eacute;seaux annuelles sur cette m&ecirc;me th&eacute;matique au cours du printemps 2020, en plein confinement, nous avons souhait&eacute; en faire un appel &agrave; textes, invitation tant par nous m&ecirc;mes et nos associations &agrave; &eacute;crire que pour des complices, intervenants, auteur dont nous croisons r&eacute;guli&egrave;rement le chemin.</p>\r\n<p>Des textes pour inviter &agrave; penser, &agrave; ne pas penser seuls. Des textes pour faire circuler la pens&eacute;e et les mots. Des textes en esp&eacute;rant qu&apos;ils feront &eacute;chos et r&eacute;actions ici ou l&agrave;, au-del&agrave; de nos sph&egrave;res d&apos;activit&eacute;s. Des textes enfin pour donner &agrave; lire des &eacute;l&eacute;ments de nos r&eacute;alit&eacute;s, tels que nous nous les formulons, tels que nous en avons besoin plut&ocirc;t que de les chercher en vain dans le flot de discours qui nous environne.</p>",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Palestine : un peuple qui ne veut pas mourir",
            "subtitle" => "",
            "summary" => "<p>Ce qui se joue dans la guerre contre Gaza d&eacute;passe largement le cadre &eacute;troit de ce petit territoire qui conna&icirc;t une des guerres les plus destructrices de l&apos;&eacute;poque contemporaine #150; une guerre dont la Cour internationale de justice a soulign&eacute; le &laquo; risque g&eacute;nocidaire &raquo;. Si elle condense d&apos;abord le calvaire centenaire du peuple palestinien, son enjeu d&eacute;borde ces fronti&egrave;res, avec le risque d&apos;un embrasement r&eacute;gional et surtout d&apos;un approfondissement de la fracture entre le reste du monde et l&apos;Occident. Celui-ci, mobilis&eacute; aux c&ocirc;t&eacute;s d&apos;Isra&euml;l, adopte une vision manich&eacute;enne de l&apos;histoire comme d&apos;un affrontement sans cesse recommenc&eacute; entre Barbares et Civilis&eacute;s. Dans cette guerre, le droit international dont se r&eacute;clame l&apos;Europe n&apos;est plus qu&apos;un faux-semblant. Les choix ent&eacute;rin&eacute;s par la France, ont &eacute;largi le foss&eacute; qui la s&eacute;pare du sud de la M&eacute;diterran&eacute;e.</p>",
            "image" => "/storage/images/books/202412082000.jpeg"
        ]);
        DB::table('books')->insert([
            "title" => "L&apos;Exil, toujours recommenc&eacute;",
            "subtitle" => "Chronique de la fronti&egrave;re",
            "summary" => "<p>Fuyant les violences politiques, les pers&eacute;cutions religieuses ou la pauvret&eacute;, des hommes, des femmes, des enfants d&apos;Afghanistan, d&apos;Iran, du Maghreb et d&apos;Afrique subsaharienne, se mettent en route pour des voyages de plusieurs ann&eacute;es au cours desquels ils affrontent les rackets des bandes arm&eacute;es, les brutalit&eacute;s des polices, les camps d&apos;enfermement, les murs de barbel&eacute;s, les rigueurs du d&eacute;sert, les p&eacute;rils de la mer. Beaucoup y perdent la vie.</p>\r\n<p>Cinq ann&eacute;es durant, &eacute;t&eacute; comme hiver, Didier Fassin et Anne-Claire Defossez ont men&eacute; une recherche &agrave; la fronti&egrave;re entre l&apos;Italie et la France, dans les Alpes, aupr&egrave;s de nombre de ces exil&eacute;s, pour reconstituer leur p&eacute;riple en l&apos;inscrivant dans le contexte g&eacute;opolitique des bouleversements du monde. Ils ont pris part aux activit&eacute;s men&eacute;es pour leur porter assistance. Ils ont rencontr&eacute; les multiples acteurs de ce territoire de migrations mill&eacute;naires.</p>",
            "image" => "/storage/images/books/ycnotncsknxd.jpeg"
        ]);
        DB::table('books')->insert([
            "title" => "Universit&eacute;s isra&eacute;liennes, universit&eacute;s palestiniennes",
            "subtitle" => "",
            "summary" => "<p>&nbsp;En Isra&euml;l et dans les territoires palestiniens occup&eacute;s depuis 1967 deux projets politiques s&apos;affrontent, et deux syst&egrave;mes universitaires ont &eacute;t&eacute; construits en cons&eacute;quence, jusqu'&agrave; aboutir &agrave; l&apos;an&eacute;antissement physique des universit&eacute;s et des universitaires gazaou&iuml;s. Je t&acirc;cherai de retracer cette histoire et de la placer dans le contexte mondial d&apos;attaques contre les universit&eacute;s et les libert&eacute;s acad&eacute;miques. </p>",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "D&eacute;coloniser la Kanaky-Nouvelle-Cal&eacute;donie",
            "subtitle" => "",
            "summary" => "<p>Le 13&nbsp;mai 2024, la Kanaky-Nouvelle-Cal&eacute;donie a connu un embrasement sans pr&eacute;c&eacute;dent qui fera date. Les d&eacute;g&acirc;ts humains, mat&eacute;riels et politiques ont &eacute;t&eacute; consid&eacute;rables. Mais surtout, un processus de d&eacute;colonisation unique dans l'histoire a &eacute;t&eacute; brutalement interrompu. Ce livre voudrait fournir les cl&eacute;s pour comprendre un tel bouleversement.</p>\r\n<p>Du peuplement kanak du pays il y a trois mille ans aux colons venus &laquo;&nbsp;blanchir&nbsp;&raquo; le territoire, de la lutte pour l&apos;ind&eacute;pendance aux accords de paix, il revient sur un long chemin d'&eacute;mancipation et examine les mutations survenues ces quarante derni&egrave;res ann&eacute;es, d&apos;un point de vue tant social, qu'&eacute;conomique et politique.</p>\r\n<p>De la sorte, c'est un tableau complet et accessible qui est ici propos&eacute;, avec l&apos;espoir que cet ouvrage puisse &eacute;clairer les consciences et, modestement, aider &agrave; imaginer les voies d&apos;une d&eacute;colonisation r&eacute;ussie &agrave; l&apos;avenir.</p>",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "L&apos;antiracisme trahi",
            "subtitle" => "D&eacute;fense de l&apos;universel",
            "summary" => "<p>&Agrave;&nbsp;gauche, l&apos;antiracisme est consid&eacute;r&eacute; comme un principe fondamental. Pourtant ces derni&egrave;res ann&eacute;es sa d&eacute;finition a vol&eacute; en &eacute;clats. Un antiracisme dit &laquo; politique &raquo; a envahi la sph&egrave;re m&eacute;diatique et acad&eacute;mique, et trouv&eacute; un &eacute;cho important aupr&egrave;s de secteurs militants. Mettant en avant des concepts controvers&eacute;s(&laquo; blanchit&eacute; &raquo;, &laquo;&nbsp;privil&egrave;ge blanc&nbsp;&raquo;#133;), il condamne sans d&eacute;tour ce qui serait un antiracisme universaliste d&eacute;pass&eacute; et d&eacute;connect&eacute; des nouvelles r&eacute;alit&eacute;s. Critique de ces approches, le pr&eacute;sent ouvrage entend proposer une approche de l&apos;antiracisme qui puise ses racines dans l&apos;histoire du mouvement ouvrier, du socialisme, et du r&eacute;publicanisme. Une approche souvent caricatur&eacute;e et m&eacute;connue, et qui offre pourtant une grande richesse d&apos;analyse permettant l&apos;action. Soit un antiracisme qui retrouve v&eacute;ritablement le chemin de l&apos;&eacute;mancipation, loin des diff&eacute;rentialismes de toute sorte.</p>",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Gaza : guerre ou g&eacute;nocide ?",
            "subtitle" => "Que dit le droit international ?",
            "summary" => "<p>L&apos;ann&eacute;e qui a suivi le 7 octobre 2023 t&eacute;moigne d&apos;un basculement assez drastique dans la repr&eacute;sentation du conflit imm&eacute;diat entre Isra&euml;l et les groupes arm&eacute;s palestiniens &agrave; Gaza. Le discours de la &laquo; l&eacute;gitime d&eacute;fense &raquo; contre le &laquo; terrorisme &raquo; a &eacute;t&eacute; boulevers&eacute; par l&apos;emploi de la notion de g&eacute;nocide devant la Cour internationale de justice, saisie par l&apos;Afrique du Sud. Pourtant, les medias occidentaux continuent de d&eacute;crire la situation en utilisant les termes &laquo; Guerre &agrave; Gaza &raquo; ou &laquo; conflit Isra&euml;l\\/Hamas &raquo;, &eacute;dulcorant ainsi la gravit&eacute; de l&apos;attaque que subit le peuple palestinien.</p><p>La conf&eacute;rence examinera pourquoi la cat&eacute;gorie du g&eacute;nocide est adapt&eacute;e pour qualifier le si&egrave;ge et les bombardements qu&apos;Isra&euml;l impose &agrave; Gaza, et en quoi la Convention de 1948 sur le g&eacute;nocide doit conduire &agrave; modifier la perception de ce qui se joue en Palestine.</p><p>Voici quelques articles de la conf&eacute;renci&egrave;re en libre acc&egrave;s :</p><ol><li><a data-mce-href=\"https:\\/\\/orientxxi.info\\/magazine\\/gaza-pour-en-finir-avec-la-guerre-contre-le-terrorisme,8193\" href=\"https:\\/\\/orientxxi.info\\/magazine\\/gaza-pour-en-finir-avec-la-guerre-contre-le-terrorisme,8193\"><em>Gaza. Pour en finir avec \"la guerre contre le terrorisme</em>\"</a>, 12 mai 2025, sur le site d&apos;information en ligne <a data-mce-href=\"https:\\/\\/orientxxi.info\\/magazine\\/gaza-pour-en-finir-avec-la-guerre-contre-le-terrorisme,8193\" href=\"https:\\/\\/orientxxi.info\\/magazine\\/gaza-pour-en-finir-avec-la-guerre-contre-le-terrorisme,8193\">Orient XXI</a></li><li><a data-mce-href=\"https:\\/\\/www.humanite.fr\\/en-debat\\/bande-de-gaza\\/gaza-les-violences-sexuelles-et-reproductives-participent-du-genocide\" href=\"https:\\/\\/www.humanite.fr\\/en-debat\\/bande-de-gaza\\/gaza-les-violences-sexuelles-et-reproductives-participent-du-genocide\"><em>Gaza : les violences sexuelles et reproductives participent du g&eacute;nocide</em></a>, 17 mars 2025. Dans le journal <a data-mce-href=\"https:\\/\\/www.humanite.fr\\/en-debat\\/bande-de-gaza\\/gaza-les-violences-sexuelles-et-reproductives-participent-du-genocide\" href=\"https:\\/\\/www.humanite.fr\\/en-debat\\/bande-de-gaza\\/gaza-les-violences-sexuelles-et-reproductives-participent-du-genocide\">l'Humanit&eacute;.</a>ï»¿</li><li><a data-mce-href=\"https:\\/\\/orientxxi.info\\/magazine\\/france-l-amitie-avec-israel-comme-excuse-de-la-violation-du-droit-international,7851\" href=\"https:\\/\\/orientxxi.info\\/magazine\\/france-l-amitie-avec-israel-comme-excuse-de-la-violation-du-droit-international,7851\"><em>France. L&apos;amiti&eacute; avec Isra&euml;l comme excuse de la violation du droit international</em></a>, 19 d&eacute;cembre 2024, sur le site d&apos;information en ligne <a data-mce-href=\"https:\\/\\/orientxxi.info\\/magazine\\/france-l-amitie-avec-israel-comme-excuse-de-la-violation-du-droit-international,7851\" href=\"https:\\/\\/orientxxi.info\\/magazine\\/france-l-amitie-avec-israel-comme-excuse-de-la-violation-du-droit-international,7851\">Orient XXI</a>.</li><li><a data-mce-href=\"https:\\/\\/orientxxi.info\\/magazine\\/cour-internationale-de-justice-l-imperatif-du-retrait-israelien-des-territoires,7609\" href=\"https:\\/\\/orientxxi.info\\/magazine\\/cour-internationale-de-justice-l-imperatif-du-retrait-israelien-des-territoires,7609\"><em>Cour internationale de justice. L&apos;imp&eacute;ratif du retrait isra&eacute;lien des territoires occup&eacute;s.</em></a> 16 septembre 2024, sur le site d&apos;information en ligne <a data-mce-href=\"https:\\/\\/orientxxi.info\\/magazine\\/cour-internationale-de-justice-l-imperatif-du-retrait-israelien-des-territoires,7609\" href=\"https:\\/\\/orientxxi.info\\/magazine\\/cour-internationale-de-justice-l-imperatif-du-retrait-israelien-des-territoires,7609\">Orient XXI</a>.</li></ol>",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Sociologie politique du sport",
            "subtitle" => "Une vision totalitaire du monde",
            "summary" => "<p>Sociologie politique&nbsp;du sport&nbsp;est une analyse freudo-marxiste du syst&egrave;me sportif, de sa bureaucratie institutionnelle et de son id&eacute;ologie &eacute;litiste. L&apos;idol&acirc;trie du champion, la logique ali&eacute;nante du d&eacute;passement, la d&eacute;multiplication permanente des spectacles sportifs relay&eacute;s par les m&eacute;dias, les agences de publicit&eacute; et les sponsors ont totalement envahi l&apos;espace public et les loisirs. Colonis&eacute; par les multinationales capitalistes et l&apos;affairisme des groupes financiers, le syst&egrave;me sportif, devenu de plus en plus opaque (dopage, corruption, violences sexuelles, racisme), fonctionne comme un appareil id&eacute;ologique d&apos;&Eacute;tat au service des pouvoirs en place, aussi bien dans les oligarchies lib&eacute;rales que dans les r&eacute;gimes totalitaires, les dictatures militaires ou les th&eacute;ocraties islamiques.</p><p>Avec ses effets de diversion massive, de conformisme culturel, de mim&eacute;tisme de foule et d&apos;identification nationaliste, le sport est l&apos;exemple type d&apos;un opium du peuple.&nbsp;<br></p>",
            "image" => "/storage/images/books/yzcopxjhooac.jpeg"
        ]);
        DB::table('books')->insert([
            "title" => "Pop fascisme",
            "subtitle" => "Comment l&apos;extr&ecirc;me droite a gagn&eacute; la bataille culturelle sur Internet",
            "summary" => "<p>Pop fascisme, Comment l&apos;extr&ecirc;me droite a gagn&eacute; la bataille culturelle sur Internet, Pierre Plottu et Jean Mac&eacute;, Ed. Divergences 2024.</p><p>Le constat est sans appel : petit &agrave; petit, ann&eacute;e apr&egrave;s ann&eacute;e, les id&eacute;es de l&apos;extr&ecirc;me-droite s&apos;imposent dans la soci&eacute;t&eacute;. Et ses id&eacute;es qui, longtemps, n&apos;ont pas eu droit de cit&eacute; dans le d&eacute;bat public en France, sont aujourd&apos;hui devenues mainstream. Par quel processus ? Notre invit&eacute; formule une hypoth&egrave;se qui tient en un seul mot : Internet.</p><p>Journaliste sp&eacute;cialiste des mouvances d&apos;extr&ecirc;me-droite, Pierre Plottu est le coauteur d&apos;un essai passionnant, &laquo;&nbsp;Pop-Fascisme, comment l&apos;extr&ecirc;me droite a gagn&eacute; la bataille culturelle sur internet.&nbsp;&raquo;, aux &eacute;ditions Divergences.&nbsp;&nbsp;Une nouvelle forme d&apos;extr&ecirc;me droite, dont l&apos;essor passe essentiellement par internet, s&eacute;duit une partie de la jeunesse &laquo;&nbsp;connect&eacute;e&nbsp;&raquo;. S&apos;enracinant dans la &laquo;&nbsp;dissidence&nbsp;&raquo;, la nouvelle droite ou la pens&eacute;e identitaire, elle r&eacute;pand ses id&eacute;es sur les r&eacute;seaux sociaux, les m&eacute;dias alternatifs et les forums avec une vitalit&eacute;&nbsp;qu'on ne lui connait pas dans la rue. De l&apos;influenceuse lifestyle au dessinateur de BD, de l'humoriste au lanceur d&apos;alerte, elle s&apos;appuie sur des strat&eacute;gies diverses pour s&eacute;duire&nbsp;hors du cadre de la politique traditionnelle. Ce livre propose une enqu&ecirc;te immersive sur ces figures influentes du web, sur leurs moyens de diffusion et de subsistance. L&apos;extr&ecirc;me droite a-t-elle gagn&eacute; la bataille culturelle en ligne&nbsp;? </p>",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "La&iuml;cit&eacute;, discriminations, racisme",
            "subtitle" => "Les professionnels de l'&eacute;ducation &agrave; l'&eacute;preuve",
            "summary" => "<p>Ouvrage collectif &eacute;dit&eacute; par Presse Universitaire de Lyon (PUL) et dirig&eacute; par&nbsp;Fran&ccedil;oise Lantheaume,&nbsp;professeure des universit&eacute;s &eacute;m&eacute;rite en sciences de l&apos;&eacute;ducation et de la formation &agrave; l&apos;Universit&eacute; Lumi&egrave;re Lyon 2 et&nbsp;S&eacute;bastien Urbanski,&nbsp;ma&icirc;tre de conf&eacute;rences en sciences de l&apos;&eacute;ducation et de la formation &agrave; Nantes Universit&eacute;.</p><p>Cet ouvrage est le fruit d&apos;une vaste &eacute;tude men&eacute;e durant pr&egrave;s de cinq ans dans plus d&apos;une centaine d&apos;&eacute;tablissements scolaires, cet ouvrage constitue une analyse des r&eacute;actions des professionnels de l&apos;&eacute;ducation (enseignants, personnel &eacute;ducatifs et de sant&eacute;, direction) aux &eacute;v&eacute;nements du quotidien o&ugrave; s&apos;expriment les tensions li&eacute;es &agrave; la la&iuml;cit&eacute;, aux discriminations ou au racisme.</p><p>Par la diversit&eacute; tant des situations que des institutions &eacute;tudi&eacute;es (coll&egrave;ges et lyc&eacute;es g&eacute;n&eacute;raux et professionnels, enseignement public et priv&eacute; confessionnel), cette observation des logiques d&apos;action collectives et personnelles des professionnels pr&eacute;sente un panorama in&eacute;dit des attitudes face aux embuches relevant de questions socialement vives. En s&apos;appuyant sur une m&eacute;thodologie rigoureuse, elle apporte &eacute;galement une r&eacute;ponse document&eacute;e &agrave; des&nbsp;a priori&nbsp;trop souvent instrumentalis&eacute;s par des discours m&eacute;diatiques ou partisans.</p><p>Si la vari&eacute;t&eacute; du territoire fran&ccedil;ais est bien repr&eacute;sent&eacute;e par la prise en compte de la multiplicit&eacute; des milieux sociaux, des zones rurales et des grandes villes, de l&apos;outremer comme des r&eacute;gions m&eacute;tropolitaines, des recherches men&eacute;es au Br&eacute;sil et en Suisse apportent un contrepoint bienvenu &agrave; celles men&eacute;es en France.&nbsp;<br></p>",
            "image" => "/storage/images/books/qapjpiejxowc.jpeg"
        ]);
        DB::table('books')->insert([
            "title" => "La citoyennet&eacute; qui vient ",
            "subtitle" => "",
            "summary" => "<p>La crise du syst&egrave;me repr&eacute;sentatif &eacute;tait in&eacute;vitable parce que la repr&eacute;sentation politique trahit l&apos;essence m&ecirc;me du politique. La citoyennet&eacute; n&apos;ayant de sens que par la participation directe et personnelle de chaque citoyen aux d&eacute;cisions collectives, le politique ne saurait &ecirc;tre autre chose que l&apos;espace de la discussion entre les citoyens &agrave; la recherche d&apos;un accord sur toute question que la soci&eacute;t&eacute; pose &agrave; l&apos;&Eacute;tat. Le 21e si&egrave;cle sera celui de la citoyennet&eacute; d&eacute;lib&eacute;rative ou il ne sera pas. Id&eacute;e simple, donc, mais non simpliste. Elle ne peut &ecirc;tre fond&eacute;e et justifi&eacute;e que par une pens&eacute;e du politique appel&eacute;e &agrave; r&eacute;investir la querelle des Anciens et des Modernes pour explorer les capabilit&eacute;s citoyennes &agrave; la lumi&egrave;re d&apos;une th&eacute;orie de l&apos;existence et d&apos;une m&eacute;taphysique de l&apos;homme.</p>",
            "image" => "/storage/images/books/knwmbmaacdlf.jpeg"
        ]);
        DB::table('books')->insert([
            "title" => "AVANT LES FAKE NEWS",
            "subtitle" => "L&apos;emprise des extr&ecirc;mes droites sur le Net",
            "summary" => "<p>Au second tour de l&apos;&eacute;lection pr&eacute;sidentielle, Marine Le Pen a obtenu 10,5 millions de voix en 2017 et plus de 13 millions en 2022, alors qu&apos;en 2002 Jean-Marie Le Pen en recevait 5,5 millions.</p>\r\n<p>Cette progression remarquable ne saurait &ecirc;tre analys&eacute;e comme le simple effet de quelque soudaine &laquo;&nbsp;fascisation&nbsp;&raquo; de la soci&eacute;t&eacute; fran&ccedil;aise, ce qui n&eacute;gligerait la strat&eacute;gie de &laquo;&nbsp;guerre culturelle&nbsp;&raquo; mise en Å“uvre entre ces deux &eacute;poques par les extr&ecirc;mes droites.</p>\r\n<p>Au tout d&eacute;but du XXIe&nbsp;si&egrave;cle en effet, les extr&ecirc;mes droites ont su anticiper le d&eacute;veloppement des nouveaux moyens de communication, d&apos;Internet aux r&eacute;seaux sociaux, et bousculer les fa&ccedil;ons de faire de la politique dans un champ d&apos;intervention ainsi d&eacute;multipli&eacute;.</p>\r\n<p>Reprenant la vieille pr&eacute;conisation du th&eacute;oricien d&apos;extr&ecirc;me droite Dominique Venner de &laquo;&nbsp;combattre plus par l&apos;astuce que par la force&nbsp;&raquo;, elles ont d&eacute;velopp&eacute; une strat&eacute;gie d&apos;influence qui n&apos;h&eacute;sitait pas &agrave; faire usage de toutes sortes de manipulations, et pr&eacute;figurait ainsi l&apos;&laquo;&nbsp;&egrave;re des&nbsp;fake news&nbsp;&raquo; actuelle.</p>",
            "image" => "/storage/images/books/mebvntfqvfka.png"
        ]);
        DB::table('books')->insert([
            "title" => "Des h&ocirc;pitaux civils de Thiers rue Mancel Chabot au centre hospitalier quartier du Fau",
            "subtitle" => "",
            "summary" => "<p>Une plong&eacute;e dans les m&eacute;moires captivantes de Guy Pailler, un homme qui a tenu sa promesse de rassembler ses souvenirs des ann&eacute;es pass&eacute;es &agrave; l&apos;h&ocirc;pital de Thiers. Lorsqu&apos;il a pris sa retraite en mai 2011, il a enfin trouv&eacute; le temps n&eacute;cessaire pour donner vie &agrave; son projet d&apos;&eacute;criture. Dans ces pages, Guy Pailler vous offre une vision d&eacute;taill&eacute;e de sa carri&egrave;re.</p>\r\n<p>Pour mener &agrave; bien cette t&acirc;che importante, Guy Pailler a rassembl&eacute; une multitude de documents et d&apos;archives de presse, accumul&eacute;s au fil des ann&eacute;es de son activit&eacute; au sein du syndicat CGT de l&apos;h&ocirc;pital de Thiers. Il a r&eacute;ussi &agrave; construire une narration chronologique en utilisant des articles de presse provenant des journaux #147;La Montagne#148; et #147;La Gazette#148;. Il a &eacute;galement puis&eacute; dans les ressources en ligne et les archives de la F&eacute;d&eacute;ration CGT de la sant&eacute; et de l&apos;action sociale.</p>\r\n<p>Gr&acirc;ce &agrave; tous ces documents, Guy Pailler relate les moments forts de son engagement syndical, o&ugrave;, ses camarades et lui ont d&eacute;fendu les droits des salari&eacute;s, am&eacute;lior&eacute; les conditions de travail et pr&eacute;serv&eacute; l&apos;importance du service public.</p>\r\n<p>Ce livre est bien plus qu&apos;un simple t&eacute;moignage, c&apos;est un v&eacute;ritable voyage &agrave; travers le temps, o&ugrave; chaque page nous plonge dans un h&eacute;ritage pr&eacute;cieux.</p>",
            "image" => "/storage/images/books/xyrpcxaklxyq.jpeg"
        ]);
        DB::table('books')->insert([
            "title" => "Antisionisme, une histoire juive",
            "subtitle" => "",
            "summary" => "<p>Le signe d&apos;&eacute;galit&eacute; plac&eacute; entre les termes&nbsp;&laquo;&nbsp;antisionisme&nbsp;&raquo;&nbsp;et&nbsp;&laquo;&nbsp;antis&eacute;mitisme&nbsp;&raquo;&nbsp;constitue un v&eacute;ritable d&eacute;ni d&apos;histoire, une forme de r&eacute;visionnisme qui veut effacer toute trace de la longue tradition juive, religieuse ou s&eacute;culi&egrave;re, d&apos;opposition &agrave; l&apos;id&eacute;e d&apos;&Eacute;tat-nation juif.</p><p>Les documents publi&eacute;s ici couvrent une p&eacute;riode allant de 1885 &agrave; 2020 et font entendre la diversit&eacute; des voix #150;religieuses ou r&eacute;volutionnaires, lib&eacute;rales ou humanistes #150; qui se sont &eacute;lev&eacute;es contre le sionisme et des espaces o&ugrave; se d&eacute;ploie la pens&eacute;e antisioniste juive : en Occident, au sein du monde arabe ou musulman, en Isra&euml;l m&ecirc;me.</p><p>Lors de la c&eacute;r&eacute;monie officielle comm&eacute;morant le 75e&nbsp; anniversaire de la rafle du V&eacute;l d&apos;Hiv, le pr&eacute;sident fran&ccedil;ais d&eacute;clarait devant le chef du gouvernement isra&eacute;lien, Benyamin Netanyahou: Nous ne c&eacute;derons rien aux messages de haine, nous ne c&eacute;derons rien &agrave; l&apos;antisionisme car il est la forme r&eacute;invent&eacute;e de l&apos;antis&eacute;mitisme.</p><p>Cette affirmation est le point d&apos;orgue d&apos;un processus d&apos;assimilation de toute critique de l&apos;&Eacute;tat d&apos;Isra&euml;l &agrave; l&apos;antis&eacute;mitisme et qui ignore d&eacute;lib&eacute;r&eacute;ment l&apos;opposition d&apos;intellectuel#087;les, de rabbins, de militant#087;es et d&apos;organisations juives au projet puis aux objectifs, faits et m&eacute;faits de l&apos;&Eacute;tat isra&eacute;lien.</p><p>On retrouvera dans ce recueil les prises de position venues de divers horizons intellectuels, toutes contestant, pour des raisons morales ou politiques, la l&eacute;gitimit&eacute;, l&apos;int&eacute;r&ecirc;t et les cons&eacute;quences du projet sioniste.</p><p>Hannah Arendt, Daniel Bensa&iuml;d, Judith Butler, Hilla Dayan, Isaac Deutscher, Henryk Erlich, Karl Kraus, Ilan Papp&eacute;, Maxime Rodinson, Abraham Serfaty, ou encore Michel Warschawski sont quelques-uns des noms qui jalonnent ce recueil de textes courant de 1885 &agrave; 2020 o&ugrave; se fait entendre la diversit&eacute; des voix #150; religieuses ou r&eacute;volutionnaires, lib&eacute;rales ou humanistes #150; qui se sont &eacute;lev&eacute;es contre le sionismeâ€‚en Occident, au sein du monde arabo-musulman et en Isra&euml;l m&ecirc;me. </p>",
            "image" => "/storage/images/books/fejclwwwqpvw.webp"
        ]);
        DB::table('books')->insert([
            "title" => "Velomerica",
            "subtitle" => "De l&apos;Alaska &agrave; la Patagonie, 21 741 kilom&egrave;tres &agrave; v&eacute;lo en famille",
            "summary" => "<p>Une maman p&eacute;dale avec ses enfants et leur papa, du nord au sud des Am&eacute;riques. Elle t&eacute;moigne de leur p&eacute;riple : camper au milieu des grizzlis d&apos;Alaska, affronter le Mexique en proie &agrave; la violence des narcos, parcourir la for&ecirc;t amazonienne, franchir plusieurs fois les Andes, traverser le d&eacute;sert d&apos;Atacama, souffrir du vent infernal de la Patagonie... Elle m&ecirc;le au r&eacute;cit de leurs d&eacute;couvertes et de leurs rencontres, ses r&eacute;flexions de maman sur le retour &agrave; la nature, le d&eacute;veloppement des enfants, le d&eacute;passement de soi ou encore le pillage des ressources naturelles et la violence qu'il engendre.</p>",
            "image" => "/storage/images/books/uyqlnxuxrsev.png"
        ]);
        DB::table('books')->insert([
            "title" => "PALESTINE plus d&apos;un si&egrave;cle de d&eacute;possession",
            "subtitle" => "Histoire abr&eacute;g&eacute;e de la colonisation, du nettoyage ethnique et de l&apos;apartheid",
            "summary" => "<p>Ce livre montre que, depuis 120 ans, l'histoire d&apos;Isra&euml;l\\/Palestine se r&eacute;sume &agrave; une entreprise de colonisation de peuplement. Pour le r&eacute;aliser, le colonisateur a, en toute impunit&eacute;, spoli&eacute;, expuls&eacute; et fragment&eacute; la soci&eacute;t&eacute; palestinienne.</p><p>Critique&nbsp;</p><p><strong>C&eacute;line Brun</strong>,</p><p>chercheuse &agrave; l&apos;universit&eacute; Paris Sorbonne&nbsp;coautrice du livre &laquo;&nbsp;Isra&euml;l, un &eacute;tat d&apos;apartheid&nbsp;?&nbsp;&raquo;:</p><p>La richesse de ce livre r&eacute;side dans les nombreuses citations et documents d&apos;&eacute;poque qui, alli&eacute;s &agrave; une br&egrave;ve analyse historique, permettent au lecteur de&nbsp;comprendre l&apos;essentiel du d&eacute;sastre&nbsp;caus&eacute; en Palestine depuis pr&egrave;s de deux si&egrave;cles par les id&eacute;ologies imp&eacute;rialiste et sioniste.</p><p><strong>Pierre Stambul</strong>,</p><p>Copr&eacute;sident de l&apos;UJFP, auteur de &laquo;&nbsp;Isra&euml;l-Palestine&nbsp;&raquo; et &laquo;&nbsp;Le sionisme en questions&nbsp;&raquo;&nbsp;:</p><p>La propagande sioniste fonctionne sur des id&eacute;es simples&nbsp;:</p><p>&laquo;&nbsp;Nous rentrons apr&egrave;s deux mille ans d&apos;exil&nbsp;&raquo;&nbsp;; la Palestine &eacute;tait &laquo;&nbsp;une terre sans peuple pour un peuple sans terre&nbsp;&raquo;&nbsp;; &laquo;&nbsp;En 1948, Les Arabes sont partis d&apos;eux-m&ecirc;mes&nbsp;&raquo;&nbsp;; &laquo;&nbsp;Apr&egrave;s ce qu&apos;ils ont subi, ils ont bien le droit &agrave; un pays&nbsp;&raquo;#133; Il est indispensable de raconter la v&eacute;rit&eacute; historique. C&apos;est ce que fait ce livre, nombreux documents &agrave; l&apos;appui. </p>",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Domestiquer la Terre.",
            "subtitle" => "Du r&eacute;chauffement climatique &agrave; la destruction de Gaza",
            "summary" => "<p>Descartes proclamait que la science nous rendrait &laquo;&nbsp;comme ma&icirc;tres et possesseurs de la nature&nbsp;&raquo;. Nous sommes aujourd'hui capables de changer le climat, d'&eacute;teindre des esp&egrave;ces vivantes, et de rendre des territoires inhabitables. Cette transformation n'avait rien d&apos;in&eacute;luctable, et est &eacute;troitement li&eacute;e &agrave; des luttes pour le pouvoir. Dans le prolongement de mon livre, je t&acirc;cherai de montrer comment elle a eu lieu, et de d&eacute;crire les enjeux aujourd'hui, en m'appuyant sur deux exemples, la surexploitation des oc&eacute;ans et le remodelage de la Palestine.</p>",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Comment la Palestine fut perdue",
            "subtitle" => "Et pourquoi Isra&euml;l n'a pas gagn&eacute;. Histoire d&apos;un conflit (XIXe-XXIe si&egrave;cle)",
            "summary" => "<p>Si vous estimez conna&icirc;tre assez du conflit isra&eacute;lo-palestinien pour en nourrir des opinions d&eacute;finitives, mieux vaut ne pas ouvrir le dernier livre de JP Filiu. Vous risqueriez d&apos;y apprendre que le sionisme fut tr&egrave;s longtemps chr&eacute;tien avant que d&apos;&ecirc;tre juif. Et que l&apos;&eacute;vang&eacute;lisme anglo-saxon explique beaucoup plus qu&apos;un fantasmatique &laquo; lobby juif &raquo; le soutien d&eacute;terminant de la Grande-Bretagne, puis des &Eacute;tats-Unis &agrave; la colonisation de la Palestine. Vous pourriez aussi d&eacute;couvrir que la soi-disant &laquo; solidarit&eacute; arabe &raquo; avec la Palestine a justifi&eacute; les rivalit&eacute;s entre r&eacute;gimes pour accaparer cette cause symbolique, quitte &agrave; massacrer les Palestiniens qui r&eacute;sistaient &agrave; de telles manoeuvres. Ou que la dynamique factionnelle a, d&egrave;s l&apos;origine, min&eacute; et affaibli le nationalisme palestinien, culminant avec la polarisation actuelle entre le Fatah de Ramallah et le Hamas de Gaza.</p>\r\n<p>La persistance de l&apos;injustice faite au peuple palestinien n&apos;a pas peu contribu&eacute; &agrave; l&apos;ensauvagement du monde actuel, &agrave; la militarisation des relations internationales et au naufrage de l&apos;ONU, paralys&eacute;e par Washington au profit d&apos;Isra&euml;l durant des d&eacute;cennies, bien avant de l&apos;&ecirc;tre par Moscou sur la Syrie, puis sur l&apos;Ukraine. L&apos;illusion qu&apos;un tel d&eacute;ni pouvait perdurer ind&eacute;finiment a vol&eacute; en &eacute;clat dans l&apos;horreur de la confrontation actuelle, d&apos;autant plus tragique qu&apos;aucune solution militaire ne peut &ecirc;tre apport&eacute;e au d&eacute;fi de deux peuples</p>\r\n<p>vivant ensemble sur la m&ecirc;me terre. Comprendre comment la Palestine fut perdue, et pourquoi Isra&euml;l n&apos;a pourtant pas gagn&eacute;, participe d&egrave;s lors d&apos;une r&eacute;flexion ouverte sur l&apos;imp&eacute;ratif d&apos;une paix enfin durable au Moyen-Orient et, donc, sur le devenir de ce nouveau mill&eacute;naire.</p>",
            "image" => "/storage/images/books/phwlhoksbsqo.jpeg"
        ]);
        DB::table('books')->insert([
            "title" => "Ind&eacute;cence urbaine",
            "subtitle" => "",
            "summary" => "<p>Les grandes villes sont responsables des crises majeures de notre temps. Elles imposent des rapports consum&eacute;ristes et productivistes au monde sans offrir en retour une &eacute;cologie &agrave; la hauteur de la d&eacute;vastation orchestr&eacute;e par l&apos;id&eacute;ologie urbaine. L&apos;&eacute;quivalent d&apos;une ville comme New York sort de terre tous les mois dans le monde. Les cent premi&egrave;res villes de France ont trois jours d&apos;autonomie alimentaire. Les m&eacute;tropoles deviennent des fournaises. Et le sentiment de leur invivabilit&eacute; pr&eacute;vaut chaque jour davantage.</p>\r\n<p>Pour enrayer ce mouvement mortif&egrave;re, il ne s&apos;agit pas seulement de changer de civilisation, mais de changer ce qu&apos;est la civilisation, de d&eacute;velopper la recherche d&apos;autonomie comme mode de vie, dans ce qu&apos;elle recr&eacute;e de proximit&eacute; et de solidarit&eacute;s, en faisant le choix d&apos;une autre abondance, celle de la vie. Le monde d&apos;apr&egrave;s est l&agrave;.</p>\r\n<p>Paysanneries revivifiant les ruralit&eacute;s par une agriculture non pr&eacute;datrice, red&eacute;ploiement de l&apos;artisanat, multiplication des lieux d&apos;exp&eacute;rimentation, red&eacute;couverte de savoirs aujourd&apos;hui discr&eacute;dit&eacute;s, r&eacute;appropriation de l&apos;ing&eacute;niosit&eacute; lib&eacute;ratrice des individus et des collectifs : tel est aujourd&apos;hui le fondement r&eacute;volutionnaire d&apos;un nouveau pacte avec le vivant.</p>",
            "image" => "/storage/images/books/moionmezdchw.jpeg"
        ]);
        DB::table('books')->insert([
            "title" => "Ventes d&apos;armes, une honte fran&ccedil;aise",
            "subtitle" => "",
            "summary" => "<p>Silence, on arme !</p>\r\n<p>Depuis plus de cinquante ans, faisant fi de ses engagements au profit de se int&eacute;r&ecirc;ts &eacute;conomiques le &laquo;&nbsp;pays des droits de l'homme&nbsp;&raquo; arme des r&eacute;gimes qui les bafouent ouvertement. Une strat&eacute;gie payante : la France est aujourd'hui le troisi&egrave;me exportateur mondial de mat&eacute;riel militaire.</p>",
            "image" => "/storage/images/books/fwxixlzwrmqy.png"
        ]);
        DB::table('books')->insert([
            "title" => "Ventes d&apos;armes, une honte fran&ccedil;aise",
            "subtitle" => "",
            "summary" => "<p>Silence, on arme !</p>\r\n<p>Depuis plus de cinquante ans, faisant fi de ses engagements au profit de se int&eacute;r&ecirc;ts &eacute;conomiques le &laquo;&nbsp;pays des droits de l'homme&nbsp;&raquo; arme des r&eacute;gimes qui les bafouent ouvertement. Une strat&eacute;gie payante : la France est aujourd'hui le troisi&egrave;me exportateur mondial de mat&eacute;riel militaire.</p>",
            "image" => "/storage/images/books/dukiesbnpbqc.png"
        ]);
        DB::table('books')->insert([
            "title" => "Les bourgeoises",
            "subtitle" => "",
            "summary" => "<p>Les personnages de femmes peuplant le recueil d&apos;Astrid Eliard ont en commun d&apos;appartenir &agrave; une m&ecirc;me classe sociale, la bourgeoisie, n&eacute;o-bobos d&apos;aujourd'hui, de vieille tradition fran&ccedil;aise, ou parvenues r&eacute;centes, tour &agrave; tour ridicules ou attachantes.</p>",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Hommage &agrave; Marcel Trillat",
            "subtitle" => "Projection \\/ d&eacute;bat",
            "summary" => "<p>&Agrave; partir d&apos;extraits de films documentaires et de quelques archives sonores, il sera donc ici tent&eacute; de retracer la carri&egrave;re et de cerner les engagements d&apos;un homme du XXe si&egrave;cle, dont beaucoup appr&eacute;ciaient l'&eacute;thique et l&apos;int&eacute;grit&eacute;. Il sera question de t&eacute;l&eacute;vision publique et de radio ind&eacute;pendante, de censures et de libert&eacute; d&apos;expression, d&apos;information et de cr&eacute;ation documentaire.</p>",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "&laquo; Comment l'&eacute;tat s&apos;attaque &agrave; nos libert&eacute;s &raquo;",
            "subtitle" => "",
            "summary" => "<p>&laquo; Surveill&eacute;s et punis &raquo; propose de faire le point pour comprendre comment en vingt ans les autorit&eacute;s ont rogn&eacute; nos droits. Pourquoi et comment avons-nous laiss&eacute; faire ? Si un gouvernement x&eacute;nophobe et autoritaire arrivait au pouvoir, quels outils aurait-il &agrave; sa disposition ? Quels garde-fous nous prot&egrave;gent encore ? Cet ouvrage est aussi un appel &agrave; un &eacute;lan citoyen.</p>\r\n<p>Fallait-il vivre un confinement mondial au printemps 2020 pour se rendre compte que, du karcher sarkoziste &agrave; la &laquo; guerre &raquo; contre la covid en passant par les &eacute;tats d&apos;urgence terroriste, nous avons progressivement renonc&eacute; &agrave; des libert&eacute;s fondamentales.</p>",
            "image" => "/storage/images/books/fkqllvjwyjbr.png"
        ]);
        DB::table('books')->insert([
            "title" => "&laquo; Habiter le monde &raquo;",
            "subtitle" => "(Parce qu'il en est ainsi de notre condition humaine)",
            "summary" => "<p>&laquo; Habiter le monde\\/aux origines de notre temps&nbsp;&raquo; a pour ambition de revisiter cinq si&egrave;cles de domination occidentale par le prisme des grandes repr&eacute;sentations &eacute;conomiques qui s&apos;y sont succ&eacute;d&eacute;es.</p>\r\n<p>Cet exercice est retenu comme un pr&eacute;alable essentiel, apr&egrave;s la crise des Subprimes et de la Covid 19 et alors que les canons tonnent tout pr&egrave;s et que le Giec ne cesse de nous alerter, pour comprendre les enjeux de la pr&eacute;sidentielle et nourrir le d&eacute;bat d&eacute;mocratique.</p>",
            "image" => "/storage/images/books/mhllgbyojjdi.png"
        ]);
        DB::table('books')->insert([
            "title" => "D&eacute;faire le capitalisme, refaire la d&eacute;mocratie",
            "subtitle" => "",
            "summary" => "<p>A l'heure o&ugrave; la critique antisyst&egrave;me nourrit les ennemis de la d&eacute;mocratie, il est temps de passer de la d&eacute;construction &agrave; la reconstruction, de la mise en lumi&egrave;re des dysfonctionnements r&eacute;guliers &agrave; l'&eacute;clairage des fonctionnements alternatifs, de la soumission au d&eacute;sespoir du r&eacute;el &agrave; l&apos;esp&eacute;rance constructive de l&apos;utopie. La t&acirc;che la plus urgente du chercheur est d&apos;ouvrir, &agrave; nouveau, l&apos;espace des possibles.</p>",
            "image" => "/storage/images/books/bicpoyvckwdd.png"
        ]);
        DB::table('books')->insert([
            "title" => "5G mon amour",
            "subtitle" => "Enqu&ecirc;te sur la face cach&eacute;e des r&eacute;seaux mobiles",
            "summary" => "<p>Comment et par qui les normes, cens&eacute;es nous prot&eacute;ger, ont-elles &eacute;t&eacute; mises en place ? Quels liens entre op&eacute;rateurs t&eacute;l&eacute;phoniques, m&eacute;dias et gouvernements ? Quels sont les effets de cette technologie sur la sant&eacute; humaine et le v</p>",
            "image" => "/storage/images/books/gggvizdllykw.png"
        ]);
        DB::table('books')->insert([
            "title" => "Les Grands patrons en France",
            "subtitle" => "du capitalisme d'&eacute;tat &agrave; la financiarisation",
            "summary" => "<p>Qui sont les grands patrons en France ? D&apos;o&ugrave; viennent-ils et comment sont-ils parvenus &agrave; la t&ecirc;te des plus grandes entreprises fran&ccedil;aises ? La crise conduit &agrave; s&apos;interroger sur les &eacute;lites et leur l&eacute;gitimit&eacute; &agrave; exercer le pouvoir &eacute;conomique. Analysant les r&eacute;seaux, les relations d&apos;affaire, origines sociales et parcours de s grands patrons fran&ccedil;ais, les auteurs montrent que cette mutation a &eacute;t&eacute; largement conduite par les anciennes &eacute;lites administratives, qui se sont converties aux vertus du lib&eacute;ralisme et du capitalisme financier.</p>",
            "image" => "/storage/images/books/ulriouadvypx.png"
        ]);
        DB::table('books')->insert([
            "title" => "La non &eacute;puration en France de 1943 aux ann&eacute;es 50",
            "subtitle" => "",
            "summary" => "<p>Y a-t-il vraiment eu en France une politique d'&eacute;puration ? L&apos;auteure explore cette question tout au long de son ouvrage dans lequel elle d&eacute;montre que l'&eacute;puration criminalis&eacute;e ayant suivie la Lib&eacute;ration (femmes tondues, cours martiales, ex&eacute;cutions) a cherch&eacute; &agrave; camoufler la non-&eacute;puration, ausi bien de la part des minist&egrave;res de l&apos;int&eacute;rieur et de la justice que de celle des milieux financiers, de la magistrature, des journalistes, des hommes politiques, voire de l'&Eacute;glise.</p>\r\n<p>De nombreux anciens collaborateurs ont ainsi b&eacute;n&eacute;fici&eacute; de &laquo;&nbsp;grands protecteurs&nbsp;&raquo;.</p>",
            "image" => "/storage/images/books/mytswcihuocx.png"
        ]);
        DB::table('books')->insert([
            "title" => "H&eacute;ritage et Fermeture",
            "subtitle" => "Une &eacute;cologie du d&eacute;mant&egrave;lement",
            "summary" => "<p>Nous d&eacute;pendons pour notre subsistance d&apos;un &laquo;monde organis&eacute;&raquo;, tram&eacute; par l&apos;industrie et le management. Ce monde menace aujourd&apos;hui de s&apos;effondrer. Alors que les mouvements progressistes r&ecirc;vent de monde commun, nous h&eacute;ritons contre notre gr&eacute; de communs moins bucoliques, &laquo;n&eacute;gatifs&raquo;, &agrave; l&apos;image des fleuves et sols contamin&eacute;s, des industries polluantes, des cha&icirc;nes logistiques ou encore des technologies num&eacute;riques. Que faire de ce lourd h&eacute;ritage dont d&eacute;pendent &agrave; court terme des milliards de personnes, alors qu&apos;il les condamne &agrave; moyen terme? Nous n&apos;avons pas d&apos;autre choix que d&apos;apprendre, en urgence, &agrave; destaurer, fermer et r&eacute;affecter ce patrimoine. Et ce, sans liquider les enjeux de justice et de d&eacute;mocratie. Contre le front de modernisation et son anthropologie du projet, de l&apos;ouverture et de l&apos;innovation, il reste &agrave; inventer un art de la fermeture et du d&eacute;mant&egrave;lement: une (anti)&eacute;cologie qui met &laquo;les mains dans le cambouis&raquo;.</p>",
            "image" => "/storage/images/books/mquldmfzxpyg.png"
        ]);
        DB::table('books')->insert([
            "title" => "L&apos;Europe et Isra&euml;l",
            "subtitle" => "",
            "summary" => "<p>Isra&euml;l est souvent per&ccedil;u comme le 51&egrave;me &eacute;tat des USA. Il serait en passe de devenir membre de l&apos;union europ&eacute;enne. Le journaliste David Cronin examine les liens &eacute;troits tiss&eacute;s par les entreprises du continent avec ce petit &eacute;tat du Moyen-Orient.</p>",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Les lois du capital",
            "subtitle" => "",
            "summary" => "<p>Episode 6 de la s&eacute;rie documentaire sur ARTE : Travail, salaire, profit.</p>",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Le myst&egrave;re Mich&eacute;a (portrait d&apos;un anarchiste conservateur)",
            "subtitle" => "",
            "summary" => "<p>Jean Claude Mich&eacute;a est philosophe et auteur, disciple de Georges Orwell. Critique de la gauche il n'a jamais donn&eacute; de gages &agrave; la droite.</p>",
            "image" => "/storage/images/books/uzedevduztee.png"
        ]);
        DB::table('books')->insert([
            "title" => "L&apos;ing&eacute;rence fran&ccedil;aise en C&ocirc;te d&apos;Ivoire",
            "subtitle" => "",
            "summary" => "<p>Derri&egrave;re une neutralit&eacute; affich&eacute;e, La France n'a cess&eacute; d&apos;intervenir dans la vie politique Ivoirienne, d&eacute;fendant aprement ses int&eacute;r&ecirc;ts &eacute;conomique et son influence r&eacute;gionale. De la mort d'Houphou&ecirc;t-Boigny &agrave; la chute de Gbagbo, tout l&apos;arsenal de la Fran&ccedil;afrique s&apos;est d&eacute;ploy&eacute; en C&ocirc;te d&apos;Ivoire.</p>",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "La civilisation jud&eacute;o-chr&eacute;tienne  Â°Â°Â°  A N N U L &Eacute; E  Â°Â°Â°",
            "subtitle" => "Anatomie d&apos;une imposture",
            "summary" => "<p>Depuis quarante ans, le concept de &laquo; civilisation jud&eacute;ochr&eacute;tienne &raquo; domine les discours politiques et m&eacute;diatiques en Occident, pr&eacute;sent&eacute; comme le socle culturel de l&apos;Europe et de l&apos;Am&eacute;rique du Nord. Mais que cache cette expression devenue une r&eacute;f&eacute;rence h&eacute;g&eacute;monique ?</p><p>R&eacute;cup&eacute;r&eacute; par des acteurs vari&eacute;s #150; &Eacute;tats, mouvements politiques ou nationalismes #150; ce concept est utilis&eacute; de toutes parts pour r&eacute;&eacute;crire l&apos;histoire, servant en Europe &agrave; occulter deux mill&eacute;naires de pers&eacute;cutions antis&eacute;mites, &agrave; nier l&apos;apport de l&apos;Orient dans son pass&eacute; et &agrave; exclure l&apos;islam de ses r&eacute;f&eacute;rences culturelles. Le sionisme puis l&apos;&Eacute;tat d&apos;Isra&euml;l &agrave; partir de sa cr&eacute;ation ont eu besoin d&apos;affirmer leur ancrage exclusif &agrave; l&apos;Occident, se proclamant aujourd&apos;hui comme le &laquo; bastion avanc&eacute; de la civilisation jud&eacute;ochr&eacute;tienne &raquo; face &agrave; &laquo; l&apos;ennemi arabo-musulman &raquo;, tandis que les nationalismes arabes ont vu dans cette expression un instrument commode pour nier la dimension juive de l&apos;histoire de leurs propres pays.</p><p>Sophie Bessis d&eacute;voile comment ce bin&ocirc;me, loin d&apos;&ecirc;tre neutre, est utilis&eacute; partout pour rendre impossibles des convergences culturelles et politiques qui pourraient &ecirc;tre autant de chemins vers la paix. </p>",
            "image" => "/storage/images/books/nzxhbgtwcqnf.jpeg"
        ]);
        DB::table('books')->insert([
            "title" => "Gaza, une guerre coloniale",
            "subtitle" => "",
            "summary" => "<p>La guerre d&eacute;clench&eacute;e &agrave; Gaza apr&egrave;s le 7 octobre 2023 s&apos;inscrit dans une continuit&eacute; qui n'implique pas seulement la bande de Gaza mais &eacute;galement le reste de la Palestine historique ainsi que les soci&eacute;t&eacute;s alentour, de longue date concern&eacute;es par l&apos;actualit&eacute; palestinienne. De quoi la guerre actuelle &agrave; Gaza est-elle le nom ou l&apos;apog&eacute;e ? Quels processus et quelles logiques, pouss&eacute;s &agrave; leur terme, sont-ils &agrave; l&apos;oeuvre dans les massacres en cours ? Un ouvrage pluridisciplinaire, alliant analyse politique, perspectives judiciaires et historiques &agrave; des approches socio-anthropologiques, pour comprendre l'histoire en train de se faire.&nbsp;</p>",
            "image" => "/storage/images/books/udvpniwnquxu.jpeg"
        ]);
        DB::table('books')->insert([
            "title" => "Le monde confisqu&eacute;",
            "subtitle" => "Essai sur le capitalisme de la finitude (XVIe - XXIe si&egrave;cle)",
            "summary" => "<p>La guerre d&eacute;clench&eacute;e &agrave; Gaza apr&egrave;s le 7 octobre 2023 s&apos;inscrit dans une continuit&eacute; qui n'implique pas seulement la bande de Gaza mais &eacute;galement le reste de la Palestine historique ainsi que les soci&eacute;t&eacute;s alentour, de longue date concern&eacute;es par l&apos;actualit&eacute; palestinienne. De quoi la guerre actuelle &agrave; Gaza est-elle le nom ou l&apos;apog&eacute;e ? Quels processus et quelles logiques, pouss&eacute;s &agrave; leur terme, sont-ils &agrave; l&apos;oeuvre dans les massacres en cours ? Un ouvrage pluridisciplinaire, alliant analyse politique, perspectives judiciaires et historiques &agrave; des approches socio-anthropologiques, pour comprendre l'histoire en train de se faire.&nbsp;</p>",
            "image" => "/storage/images/books/mcrdfgsbijnz.jpeg"
        ]);
        DB::table('books')->insert([
            "title" => "7 octobre",
            "subtitle" => "Enqu&ecirc;te sur la journ&eacute;e qui a chang&eacute; le monde",
            "summary" => "<p>R&eacute;sum&eacute;</p><p>Au d&eacute;but, le 7 octobre, c&apos;&eacute;tait tr&egrave;s simple&nbsp;: 40 b&eacute;b&eacute;s d&eacute;capit&eacute;s, viols de masse, festivaliers et kibboutz d&eacute;lib&eacute;r&eacute;ment attaqu&eacute;s pour massacrer le plus possible de civils#133; Et tout cela sans raison&nbsp;: une haine inexplicable des &laquo;&nbsp;terroristes du Hamas&nbsp;&raquo;#133;</p><p>Et puis, une autre version est apparue en#133; Isra&euml;l&nbsp;! &Ccedil;a et l&agrave;, quelques m&eacute;dias y ont publi&eacute; des r&eacute;v&eacute;lations &eacute;tonnantes sur cette journ&eacute;e dramatique. Tr&egrave;s curieusement, les m&eacute;dias fran&ccedil;ais et europ&eacute;ens ont tu ces r&eacute;v&eacute;lations. Pourquoi&nbsp;?</p><p>Aujourd&apos;hui, l&apos;enqu&ecirc;te minutieuse et approfondie de Jean-Pierre Bouch&eacute; et Michel Collon vous surprendra. Elle passionnera tous ceux qui veulent comprendre les conflits en recherchant la v&eacute;rit&eacute; dans les faits, en confrontant les versions, en &eacute;tudiant les causes. Puisque chaque guerre se double d&apos;une guerre des propagandes, il est urgent d&apos;&eacute;couter les t&eacute;moins directs. Et de r&eacute;fl&eacute;chir.</p><p>Il n&apos;y aura pas de paix sans une info correcte.</p><p></p>",
            "image" => "/storage/images/books/zqopepmfeecs.jpeg"
        ]);
        DB::table('books')->insert([
            "title" => "Collaborations",
            "subtitle" => "Enqu&ecirc;te sur l&apos;extr&ecirc;me droite et les milieux d&apos;affaires",
            "summary" => "<p>R&eacute;sum&eacute; :</p><p>Une partie des &eacute;lites &eacute;conomiques fran&ccedil;aises tisse depuis quelques ann&eacute;es des liens avec l&apos;extr&ecirc;me droite, jusqu'&agrave; s&apos;y rallier parfois ouvertement. Depuis la dissolution de l&apos;Assembl&eacute;e en juin 2024, ce mouvement s&apos;acc&eacute;l&egrave;re : des chefs d&apos;entreprise, grands et petits, renoncent au \" barrage r&eacute;publicain \" et se pr&eacute;parent &agrave; collaborer avec le RN et ses alli&eacute;s. Laurent Mauduit l&egrave;ve le voile sur ces complicit&eacute;s qui, discr&egrave;tes hier encore, sont aujourd'hui de plus en plus souvent assum&eacute;es. Rencontres en coulisse, alliances d&apos;int&eacute;r&ecirc;ts, fascination pour le capitalisme autoritaire et libertarien promu par Trump, Musk ou Milei... L&apos;auteur d&eacute;crypte cette dynamique inqui&eacute;tante o&ugrave; les milieux d&apos;affaires trouvent dans l&apos;extr&ecirc;me droite une opportunit&eacute; pour imposer leur agenda. Si les positions de Bernard Arnault, Charles Beigbeder, Vincent Bollor&eacute; ou Pierre-&Eacute;douard St&eacute;rin, sont d&eacute;sormais publiques, nombre d&apos;autres patrons, plus discrets, mus par des int&eacute;r&ecirc;ts purement mercantiles, leur embo&icirc;tent le pas et participent aujourd'hui activement &agrave; la mont&eacute;e d&apos;un projet politique raciste et liberticide. Dans cette enqu&ecirc;te in&eacute;dite, Laurent Mauduit nous entra&icirc;ne des salons feutr&eacute;s de l&apos;Ouest parisien, o&ugrave; &eacute;voluent les grands patrons, jusqu'aux PME de province, d&eacute;voilant un processus en cours qui fait &eacute;cho aux heures les plus sombres de notre histoire. Comment ne pas penser, comme le montre l&apos;auteur, aux ann&eacute;es 1930, lorsque le patronat, d&eacute;j&agrave;, jouait un r&ocirc;le majeur dans l&apos;accession au pouvoir des r&eacute;gimes fascistes et nazi ? Aujourd'hui, alors que le capitalisme traverse une crise prolong&eacute;e, les milieux d&apos;affaires sont &agrave; nouveau des acteurs pleinement engag&eacute;s dans la mont&eacute;e de l&apos;extr&ecirc;me droite.</p>",
            "image" => "/storage/images/books/vdpinuibkiir.jpeg"
        ]);
        DB::table('books')->insert([
            "title" => "La haine des fonctionnaires",
            "subtitle" => "",
            "summary" => "<p>&laquo; Les fonctionnaires, soumis d&eacute;sormais &agrave; des contraintes de rentabilit&eacute;, peinent &agrave; servir leurs missions d&apos;int&eacute;r&ecirc;t g&eacute;n&eacute;ral. Ce livre montre leurs vies, au plus pr&egrave;s de l&apos;accomplissement de leurs t&acirc;ches. &raquo; Tout le monde conna&icirc;t l&apos;&eacute;quation : fonctionnaires = feignasses = pas rentables = emmerdeurs = prot&eacute;g&eacute;s = profiteurs = archa&iuml;ques = inutiles = &agrave; compresser. D&apos;o&ugrave; vient son incroyable puissance d&apos;&eacute;vidence ? Et quels int&eacute;r&ecirc;ts sert-elle ? Pourquoi certains (hauts) fonctionnaires comptent-ils parmi ceux qui la r&eacute;p&egrave;tent le plus ? Pourquoi autant d&apos;insultes contre celles et ceux qui voudraient servir le public en toute &eacute;galit&eacute;, et si peu envers les actionnaires, les employeurs ou les pollueurs ? Pour r&eacute;pondre &agrave; ces questions, ce livre part d&apos;id&eacute;es re&ccedil;ues, de sc&egrave;nes de la vie quotidienne et de st&eacute;r&eacute;otypes. Nous entra&icirc;nant dans les coulisses de la fonction publique, il d&eacute;voile les r&eacute;alit&eacute;s v&eacute;cues par les agents de m&eacute;nage, les ouvriers des voiries, les secr&eacute;taires de mairie, les enseignants, les gardiens de prison et bien d&apos;autres. Le d&eacute;nigrement des fonctionnaires n&apos;est en r&eacute;alit&eacute; qu&apos;un pr&eacute;texte &agrave; la d&eacute;t&eacute;rioration acc&eacute;l&eacute;r&eacute;e des services publics. Ainsi, pour l&apos;ensemble des usagers qui souffrent de leur disparition, pour celles et ceux qui en ont assez qu&apos;on stigmatise ces m&eacute;tiers, il s&apos;agit de ne pas se tromper de cibles et d&apos;organiser la riposte : il en va de notre bien commun.</p><p></p>",
            "image" => "/storage/images/books/nczvgahxmemw.jpeg"
        ]);
        DB::table('books')->insert([
            "title" => "L'&egrave;re de la post-v&eacute;rit&eacute;",
            "subtitle" => "Comment les algorithmes changent notre rapport &agrave; la r&eacute;alit&eacute;",
            "summary" => "<p>&Agrave; une &eacute;poque o&ugrave; tout un chacun se r&eacute;clame de la raison, le monde semble avoir perdu la t&ecirc;te, des &Eacute;tats-Unis &agrave; l&apos;Argentine en passant par l&apos;Europe. Non seulement les individus peinent &agrave; discerner le vrai du faux, mais ils valorisent moins la v&eacute;rit&eacute;. Pr&eacute;f&eacute;rant les opinions pr&eacute;con&ccedil;ues et les fictions &agrave; la science, ils prennent de plus en plus leurs fantasmes et leurs peurs pour des r&eacute;alit&eacute;s. Partout, les soci&eacute;t&eacute;s se polarisent. Fruit de trois ans de recherche pluridisciplinaire, cet ouvrage est le premier &agrave; caract&eacute;riser scientifiquement la post-v&eacute;rit&eacute; et &agrave; en explorer toutes les dimensions, bien au-del&agrave; des \" infox \" auxquelles on la r&eacute;duit abusivement. Dans une approche m&ecirc;lant psychologie, neurosciences et &eacute;conomie des &eacute;motions, il montre les effets d&eacute;vastateurs d&apos;Internet et des r&eacute;seaux sociaux, dont les algorithmes privil&eacute;gient les contenus clivants et anxiog&egrave;nes tout en confortant les croyances pr&eacute;alables. Ainsi se forment de dangereuses \" bulles cognitives \". Le diagnostic est sans appel : ce basculement progressif des mentalit&eacute;s est intimement li&eacute; au capitalisme. Pour g&eacute;n&eacute;rer un maximum de revenus publicitaires, les algorithmes s&apos;adressent &agrave; la part de nous-m&ecirc;me qui souhaite se d&eacute;barrasser de la r&eacute;alit&eacute;. Et s&apos;ils instauraient la plus insidieuse des servitudes volontaires, avec notre complicit&eacute; inconsciente ? Cet essai d&eacute;montre aussi que l&apos;essor mondial des extr&ecirc;mes droites est en grande partie d&ucirc; aux biais d&apos;Internet et des r&eacute;seaux sociaux, qui en favorisent les id&eacute;es. Un livre salutaire qui invite &agrave; un sursaut de lucidit&eacute; face &agrave; un enjeu social majeur de ce si&egrave;cle.</p>",
            "image" => "/storage/images/books/pupypexdonyc.jpeg"
        ]);
        DB::table('books')->insert([
            "title" => "Grands ensemble",
            "subtitle" => "Violence, solidarit&eacute; et ressentiment dans les quartiers populaires",
            "summary" => "<p>&Agrave; rebours des clich&eacute;s, une enqu&ecirc;te patiente men&eacute;e pendant dix ans par Fabien Truong et G&eacute;r&ocirc;me Truc dans la foul&eacute;e des attentats de 2015, &agrave; Grigny, ville \" la plus pauvre de France \" #150; qui est aussi celle du \" terroriste de l'Hyper Cacher \".</p><p>Au plus pr&egrave;s des personnes et des faits, Grands ensemble &eacute;claire d&apos;un nouveau jour le rapport des quartiers populaires aux attentats islamistes et, de l&agrave;, la vie ordinaire de leurs habitantes et habitants, &agrave; l'&eacute;preuve des violences qui p&egrave;sent structurellement sur leur quotidien : celles des trafics et de la police, mais aussi de l&apos;exploitation, de la pauvret&eacute;, du racisme, du virilisme et de la stigmatisation. &Agrave; l'&eacute;preuve aussi des blessures intimes et des combats communs. Comment tient-on dans ces conditions ? Qu'induit le fait de vivre en se sachant scrut&eacute; par les m&eacute;dias, point&eacute; du doigt quand un voisin bascule dans le terrorisme ? Pourquoi les conditions de vie dans ces quartiers ne cessent-elles de se d&eacute;grader, alors qu'une large part de leur population parvient &agrave; trouver sa place dans la soci&eacute;t&eacute; ?</p><p>Les r&eacute;ponses apport&eacute;es ici &eacute;pousent le rythme et les contours de multiples trajectoires entrecrois&eacute;es. Des vies qui rappellent que la pauvret&eacute; et la marginalisation engendrent solidarit&eacute;s mais aussi rivalit&eacute;s, pavant la voie &agrave; un rapport au monde o&ugrave; le ressentiment coexiste avec l&apos;espoir et la joie. </p>",
            "image" => "/storage/images/books/kshvfdzcbqym.jpeg"
        ]);
        DB::table('books')->insert([
            "title" => "Nos quartiers ont de la gueule",
            "subtitle" => "Cin&eacute;-D&eacute;bat ",
            "summary" => "<p><em>Nos quartiers ont de la gueuleâ€¯!</em></p><p>Pr&eacute;sentation</p><p>Cela fait plus de quarante ans que les habitants des quartiers populaires crient haut et fort leur col&egrave;re.</p><p>Ce documentaire, cam&eacute;ra au poing suit la caravane &laquo;â€¯Nos quartiers ont de la gueuleâ€¯!â€¯&raquo; de la Coordination nationale Pas sans Nous qui a sillonn&eacute; la France pendant plus de 4 mois en 2021-2022 &agrave; la rencontre des habitants de 44 villes et 74 quartiers. Il y raconte le quotidien et donne la parole &agrave; celles et ceux que l&apos;on n&apos;entend pas ou que l&apos;on refuse d&apos;&eacute;couter. Qu&apos;ils soient habitants, travailleurs, ch&ocirc;meurs, retrait&eacute;s, militants, toutes et tous t&eacute;moignent sur le vif de leur r&eacute;alit&eacute; et d&eacute;noncent les injustices sociales qu&apos;ils vivent.</p><p>Condens&eacute; des &eacute;tapes de la caravane &agrave; travers 44 villes et 74 quartiers, Nos quartiers ont de la gueule interroge les repr&eacute;sentations n&eacute;gatives sur les quartiers et r&eacute;ussit &agrave; mettre en lumi&egrave;re l&apos;humanit&eacute; et la solidarit&eacute; qui les animent malgr&eacute; les conditions de vies difficiles.</p><p><br></p>",
            "image" => "/storage/images/books/skcvarudpsed.jpeg"
        ]);
        DB::table('books')->insert([
            "title" => "Le Puy du Faux",
            "subtitle" => "Enqu&ecirc;te sur un parc qui d&eacute;forme l'Histoire",
            "summary" => "<p>quatre historiens et historiennes se sont immerg&eacute;#087;es au Puy-du-Fou et ont assist&eacute; &agrave; tout le spectacle, comme le font chaque ann&eacute;e 2,3 millions de visiteurs. Ce livre d&eacute;crypte les images et les r&eacute;cits. Il traque les erreurs historiques, les biais politiques, les r&eacute;alit&eacute;s occult&eacute;es et les simplifications. En r&eacute;pondant &agrave; la question &laquo; Autour de quels messages le r&eacute;cit historique du Puy-du-Fou s&apos;articule-t-il ? &raquo;, cet &eacute;crit nous renvoie aux enjeux de m&eacute;moire et aux nombreux d&eacute;bats et pol&eacute;miques sur l&apos;identit&eacute; de la France. Il est clair que dans ce spectacle l&apos;histoire est romanc&eacute;e et r&eacute;invent&eacute;e. Au profit de qui ? Ce livre est &eacute;clairant, que l&apos;on soit d&eacute;j&agrave; all&eacute; ou non au Puy-du-Fou. Une&nbsp;enqu&ecirc;te minutieuse et pleine d&apos;humour o&ugrave; appara&icirc;t, derri&egrave;re les effets sp&eacute;ciaux et les d&eacute;cors somptueux, un univers rempli d&apos;erreurs et de simplifications, le tout au service d&apos;une propagande diffuse qu&apos;il s&apos;agit de rep&eacute;rer si on veut la combattre. </p>",
            "image" => "/storage/images/books/bjmgpdtyscdq.png"
        ]);
        DB::table('books')->insert([
            "title" => "La concience juive &agrave; l'&eacute;preuve des massacres",
            "subtitle" => "Isra&euml;l-Gaza",
            "summary" => "<p>&laquo;â€¯Ce texte court, que nous avons con&ccedil;u comme un examen de conscience sans concession, replace le choc du 7â€¯octobre 2023 et de ses suites dans l&apos;histoire longue du conflit isra&eacute;lo-palestinien. Il analyse nos doutes, notre situation d&eacute;licate, d&eacute;chir&eacute;s que nous sommes entre les horreurs commises par le Hamas, notre attachement &agrave; l&apos;&eacute;thique juive, notre rejet de la politique isra&eacute;lienne, notre indignation et notre douleur face au massacre commis &agrave; Gaza. Il explique aussi &agrave; quelle d&eacute;ception nous a expos&eacute;s une partie de la gauche radicale par certaines de ses r&eacute;actions. Nous sommes l&apos;un et l&apos;autre, comme universitaires et comme essayistes, des sp&eacute;cialistes reconnus de l&apos;histoire du juda&iuml;sme et des Juifs. Nous connaissons par ailleurs personnellement aussi bien Isra&euml;l que la Palestine comme r&eacute;alit&eacute;s concr&egrave;tes et vivantes. Nous avons soutenu publiquement la cause palestinienne toutes ces ann&eacute;es, et continuons de la soutenir.â€¯&raquo; Esther Benbassa et Jean-Christophe Attias&nbsp;</p>",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Ha&iuml;ti - France, les cha&icirc;nes de la dette",
            "subtitle" => "Le rapport Mackau (1825)",
            "summary" => "<p><em>Ha&iuml;ti - France, les cha&icirc;nes de la dette - Le rapport Mackau (1825), &Eacute;ditions H&eacute;misph&egrave;res et Nouvelles &Eacute;ditions Maisonneuve & Larose, </em>DORIGNY M - THEODAT JM - GAILLARD GK - BRUFFAERTS JC (AE)</p><p>Pr&eacute;sentation de Fritz Jean, &eacute;conomiste, &eacute;crivain et ancien gouverneur de la Banque de la R&eacute;publique d&apos;Ha&iuml;ti.</p><p>Pr&eacute;face de Thomas Piketty, &eacute;conomiste, directeur d&apos;&eacute;tude &agrave; l&apos;EHESS, professeur &agrave; l&apos;&Eacute;cole d&apos;&eacute;conomie de Paris, notamment auteur du Capital au XXIe si&egrave;cle. </p><p>Par une ordonnance du roi Charles X du 17 avril 1825, la France reconna&icirc;t l&apos;ind&eacute;pendance de sa colonie de Saint-Domingue. Cette reconnaissance est soumise au paiement, par la r&eacute;publique d&apos;Ha&iuml;ti, d&apos;une somme de 150 millions de francs-or destin&eacute;e &agrave; indemniser les colons fran&ccedil;ais qui ont fui la colonie entre 1791 et 1804. Un haut dignitaire fran&ccedil;ais, le baron de Mackau, futur ministre des Colonies de Louis-Philippe, est charg&eacute; de remettre cette ordonnance unilat&eacute;rale du roi de France au pr&eacute;sident d&apos;Ha&iuml;ti, Jean-Pierre Boyer. &Agrave; son retour de mission, en septembre 1825, Mackau r&eacute;dige un rapport : c&apos;est ce document exceptionnel, r&eacute;cemment d&eacute;couvert et jusqu&apos;&agrave; pr&eacute;sent in&eacute;dit, qui est au cÅ“ur de l&apos;ouvrage.</p><p>La publication du rapport Mackau apporte un &eacute;clairage de premi&egrave;re importance au long d&eacute;bat, souvent tr&egrave;s pol&eacute;mique, relatif &agrave; la &laquo; dette de l&apos;ind&eacute;pendance &raquo; impos&eacute;e &agrave; Ha&iuml;ti par l&apos;ancienne m&eacute;tropole. Un d&eacute;bat qui a notamment ressurgi &agrave; l&apos;occasion du tragique s&eacute;isme qui a d&eacute;truit Port-au-Prince en janvier 2010 et, plus r&eacute;cemment, dans le contexte de la crise politique actuelle en Ha&iuml;ti, sur fond de corruption et de d&eacute;tournement massif de capitaux. Cette fameuse &laquo; dette de l&apos;ind&eacute;pendance ha&iuml;tienne &raquo; est mise en perspective gr&acirc;ce &agrave; un appareil critique et aux articles que signent les quatre coauteurs de l&apos;ouvrage. </p>",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Ha&iuml;ti - France, les cha&icirc;nes de la dette.",
            "subtitle" => "Le rapport Mackau (1825)",
            "summary" => "<p><em>Ha&iuml;ti - France, les cha&icirc;nes de la dette - Le rapport Mackau (1825), &Eacute;ditions H&eacute;misph&egrave;res et Nouvelles &Eacute;ditions Maisonneuve & Larose, DORIGNY M - THEODAT JM - GAILLARD GK - BRUFFAERTS JC (AE)</em></p><p>Pr&eacute;sentation de <strong>Fritz Jean</strong>, &eacute;conomiste, &eacute;crivain et ancien gouverneur de la Banque de la R&eacute;publique d&apos;Ha&iuml;ti.</p><p>Pr&eacute;face de <strong>Thomas Piketty</strong>, &eacute;conomiste, directeur d&apos;&eacute;tude &agrave; l&apos;EHESS, professeur &agrave; l&apos;&Eacute;cole d&apos;&eacute;conomie de Paris, notamment auteur du Capital au XXIe si&egrave;cle. </p><p>R&eacute;sum&eacute;</p><p>Par une ordonnance du roi Charles X du 17 avril 1825, la France reconna&icirc;t l&apos;ind&eacute;pendance de sa colonie de Saint-Domingue. Cette reconnaissance est soumise au paiement, par la r&eacute;publique d&apos;Ha&iuml;ti, d&apos;une somme de 150 millions de francs-or destin&eacute;e &agrave; indemniser les colons fran&ccedil;ais qui ont fui la colonie entre 1791 et 1804. Un haut dignitaire fran&ccedil;ais, le baron de Mackau, futur ministre des Colonies de Louis-Philippe, est charg&eacute; de remettre cette ordonnance unilat&eacute;rale du roi de France au pr&eacute;sident d&apos;Ha&iuml;ti, Jean-Pierre Boyer. &Agrave; son retour de mission, en septembre 1825, Mackau r&eacute;dige un rapport : c&apos;est ce document exceptionnel, r&eacute;cemment d&eacute;couvert et jusqu&apos;&agrave; pr&eacute;sent in&eacute;dit, qui est au cÅ“ur de l&apos;ouvrage.</p><p>La publication du rapport Mackau apporte un &eacute;clairage de premi&egrave;re importance au long d&eacute;bat, souvent tr&egrave;s pol&eacute;mique, relatif &agrave; la &laquo; dette de l&apos;ind&eacute;pendance &raquo; impos&eacute;e &agrave; Ha&iuml;ti par l&apos;ancienne m&eacute;tropole. Un d&eacute;bat qui a notamment ressurgi &agrave; l&apos;occasion du tragique s&eacute;isme qui a d&eacute;truit Port-au-Prince en janvier 2010 et, plus r&eacute;cemment, dans le contexte de la crise politique actuelle en Ha&iuml;ti, sur fond de corruption et de d&eacute;tournement massif de capitaux. Cette fameuse &laquo; dette de l&apos;ind&eacute;pendance ha&iuml;tienne &raquo; est mise en perspective gr&acirc;ce &agrave; un appareil critique et aux articles que signent les quatre coauteurs de l&apos;ouvrage.</p><p></p><p></p><p></p>",
            "image" => "/storage/images/books/iezermlrozai.jpeg"
        ]);
        DB::table('books')->insert([
            "title" => "D&eacute;couvrir Fanon",
            "subtitle" => "",
            "summary" => "<p>R&eacute;sum&eacute;</p><p>Souvent &eacute;voqu&eacute;e, la figure de Fanon reste mal connue.&nbsp; Les textes ici rassembl&eacute;s montrent la richesse de son Å“uvre mue par une ambition constante : analyser les causes de l&apos;oppression et lutter pour la lib&eacute;ration des peuples. &Agrave; la crois&eacute;e de diff&eacute;rents champs #150; antiracisme, psychiatrie, philosophie, anti-colonialisme #150; son Å“uvre fonde une pens&eacute;e r&eacute;volutionnaire et humaniste. Tout en contextualisant ses grandes analyses #150; l&apos;exp&eacute;rience du racisme, la violence r&eacute;volutionnaire #150; cet ouvrage pr&eacute;sente aussi certains textes moins connus (la psychiatrie en contexte colonial, le d&eacute;voilement des Alg&eacute;riennes par l&apos;arm&eacute;e fran&ccedil;aise#133;). </p>",
            "image" => "/storage/images/books/qqapypowywqy.jpeg"
        ]);
        DB::table('books')->insert([
            "title" => "L&apos;espace public &eacute;clat&eacute;",
            "subtitle" => "",
            "summary" => "<p>R&eacute;sum&eacute;</p><p>Pas de d&eacute;mocratie sans espace public. Ce dernier, dans la Gr&egrave;ce antique, &eacute;tait un espace physique local (l&apos;agora) o&ugrave; se regroupaient les citoyens pour d&eacute;cider ensemble de la vie de la cit&eacute;. C&apos;est, aujourd&apos;hui, un espace symbolique ouvert &agrave; l&apos;international o&ugrave; se confrontent les acteurs politiques, les m&eacute;dias, les r&eacute;seaux sociaux etc., en vue de contribuer &agrave; &eacute;laborer l&apos;opinion publique. Ainsi, comprendre l&apos;espace public, c&apos;est expliquer la soci&eacute;t&eacute; d&eacute;mocratique dans laquelle nous vivons. C&apos;est pourquoi l&apos;objectif de cet ouvrage collectif est d&apos;en cerner les &eacute;volutions r&eacute;centes. Or loin de s&apos;unifier sous la pression technologique, l&apos;espace public se fragmente en raison de logiques sociales et culturelles diverses. Puisse cet &laquo; Essentiel &raquo; permettre aulectorat de prendre ses distances critiques avec les visions simplistes de l&apos;espace public, coeur de nos soci&eacute;t&eacute;s.</p><p>Auteurs : Alain Bussi&egrave;re, Jean Corneloup, &Eacute;ric Dacheux, Nicolas Duracka, Laurent Fraisse, Florine Garlot, Tourya Guaaybess, &Eacute;tienne Tassin, Mihaela Alexandra Tudor, Geoffrey Volat, Dominique Wolton. </p>",
            "image" => "/storage/images/books/zescatnlrpsp.jpeg"
        ]);
        DB::table('books')->insert([
            "title" => "1945 : les Fran&ccedil;ais ont la parole",
            "subtitle" => "Les cahiers de dol&eacute;ances des &Eacute;tats g&eacute;n&eacute;raux de la Renaissance fran&ccedil;aise",
            "summary" => "<p>En d&eacute;cembre 1944, le Conseil national de la R&eacute;sistance d&eacute;cide de la tenue d&apos;&Eacute;tats g&eacute;n&eacute;raux de la Renaissance fran&ccedil;aise &agrave; Paris du 10 au 13 juillet. Les comit&eacute;s d&eacute;partementaux de Lib&eacute;ration doivent pr&eacute;alablement organiser des assembl&eacute;es communales charg&eacute;es d&apos;&eacute;laborer des &laquo; cahiers de dol&eacute;ances &raquo;, empruntant &agrave; 1789. </p><p>Leur objectif : permettre une appropriation collective du programme du CNR, proposer &agrave; leur &eacute;chelle des d&eacute;clinaisons concr&egrave;tes d&apos;une &laquo; v&eacute;ritable d&eacute;mocratie &eacute;conomique et sociale &raquo; et s&apos;attacher aux questions soci&eacute;tales et macro-politiques qui se sont pr&eacute;cis&eacute;es ou ont &eacute;merg&eacute; depuis la Lib&eacute;ration. </p><p>Les synth&egrave;ses d&eacute;partementales et des centaines de cahiers communaux conserv&eacute;s par Louis Saillant, alors pr&eacute;sident du CNR permettent une plong&eacute;e dans la France de 1945 et ses aspirations.&nbsp;</p>",
            "image" => "/storage/images/books/hupdgogpvvtz.jpeg"
        ]);
        DB::table('books')->insert([
            "title" => "Discriminations",
            "subtitle" => "Pourquoi sont elles un d&eacute;fi majeur des soci&eacute;t&eacute;s d&eacute;mocratiques et comment les combattre",
            "summary" => "",
            "image" => ""
        ]);
        DB::table('books')->insert([
            "title" => "Le Proche-Orient miroir du monde",
            "subtitle" => "Comprendre le basculement en cours",
            "summary" => "<p><em>Le Proche-Orient, miroir du monde Comprendre le basculement en cours. </em>Editions La D&eacute;couverte, octobre 2025</p><p><a href=\"https:\\/\\/www.editionsladecouverte.fr\\/le_proche_orient_miroir_du_monde-9782348089732\" data-mce-href=\"https:\\/\\/www.editionsladecouverte.fr\\/le_proche_orient_miroir_du_monde-9782348089732\">https:\\/\\/www.editionsladecouverte.fr\\/le_proche_orient_miroir_du_monde-9782348089732</a></p><p>R&eacute;sum&eacute;</p><p>&Agrave; Gaza, un g&eacute;nocide est en cours, orchestr&eacute; par le gouvernement de Benjamin Netanyahou, qui poursuit parall&egrave;lement une politique de nettoyage ethnique et d&apos;annexion en Cisjordanie, avec le soutien de Donald Trump et la passivit&eacute; complice de la majorit&eacute; des gouvernements europ&eacute;ens. Au Liban, la population est tiraill&eacute;e entre aspirations &agrave; des r&eacute;formes, menaces de nouvelles crises, occupation et attaques isra&eacute;liennes dans le sud du pays. En Syrie, apr&egrave;s quatorze ann&eacute;es de r&eacute;volution, de guerre et d&apos;interventions &eacute;trang&egrave;res, le r&eacute;gime des Assad a &eacute;t&eacute; renvers&eacute;, ouvrant la voie &agrave; une transition marqu&eacute;e par la violence dans un pays morcel&eacute;, ravag&eacute; et amput&eacute; de nouveaux territoires occup&eacute;s par les Isra&eacute;liens. L&apos;Iran, puissance r&eacute;gionale dominante depuis 2003, voit son influence vaciller &agrave; la suite des revers subis par ses alli&eacute;s et d&apos;un affrontement direct avec Isra&euml;l et les &Eacute;tats-Unis. Comment appr&eacute;hender cette brutale acc&eacute;l&eacute;ration de l'histoire ? En quoi les bouleversements du Proche-Orient r&eacute;v&egrave;lent-ils les lignes de fracture d&apos;un ordre mondial en recomposition, o&ugrave; logiques imp&eacute;riales, replis identitaires et h&eacute;ritages coloniaux supplantent les principes universels et les normes juridiques issus de l&apos;apr&egrave;s-1945 ? Cet ouvrage propose des cl&eacute;s de lecture pour comprendre ces transformations. &Agrave; travers l&apos;examen rigoureux de huit moments fondateurs entre 1915 et 2025, il retrace un si&egrave;cle de luttes, d&apos;ing&eacute;rences et de reconfigurations, et rend accessible l'histoire contemporaine d&apos;un Proche-Orient plus que jamais miroir du monde.</p>",
            "image" => "/storage/images/books/vyatiultiwxo.jpeg"
        ]);
        DB::table('books')->insert([
            "title" => "Un historien &agrave; Gaza",
            "subtitle" => "Un t&eacute;moignage de premi&egrave;re main",
            "summary" => "<p><em>Un historien &agrave; Gaza.</em></p><p>Un t&eacute;moignage de premi&egrave;re main.&nbsp;</p><p>&nbsp;&laquo; Vous avez voulu l&apos;enfer, vous aurez l&apos;enfer. &raquo;</p><p>C&apos;est en ces termes que l&apos;arm&eacute;e isra&eacute;lienne a d&eacute;clench&eacute; sa guerre contre la bande de Gaza apr&egrave;s les attentats du 7 octobre 2023. Une guerre qui, malgr&eacute; sa violence, sa dur&eacute;e et ses r&eacute;percussions plan&eacute;taires, se d&eacute;roule &agrave; huis clos. Aucun journaliste ou reporter &eacute;tranger n&apos;a acc&egrave;s &agrave; l&apos;enclave palestinienne. Pourtant, en d&eacute;cembre 2024, Jean-Pierre Filiu a r&eacute;ussi &agrave; se rendre dans la bande de Gaza pour y vivre pendant un peu plus d&apos;un mois. Il conna&icirc;t intimement ce territoire, sa g&eacute;ographie et son peuple, dont il parle la langue. Sur place, l&apos;historien s&apos;est fait enqu&ecirc;teur. Il nous permet de renouer avec les humbles et les sans-grade de ce territoire abandonn&eacute; du monde. Leur combat quotidien pour la survie et pour la dignit&eacute; nous offre une formidable le&ccedil;on d&apos;humanit&eacute;, car ce qui se d&eacute;roule dans cette prison &agrave; ciel ouvert a et aura une valeur universelle. &laquo; Le territoire que j&apos;ai connu et arpent&eacute; n&apos;existe plus. Ce qu&apos;il en reste d&eacute;fie les mots. &raquo; &nbsp; Jean-Pierre Filiu verse l&apos;int&eacute;gralit&eacute; de ses droits sur ce livre &agrave; M&eacute;decins sans fronti&egrave;res (MSF) pour son action &agrave; Gaza.</p>",
            "image" => "/storage/images/books/cjljchospgsd.jpeg"
        ]);
        DB::table('books')->insert([
            "title" => "Pour en finir avec les id&eacute;es fausses sur l'Histoire de France",
            "subtitle" => "&laquo; Le Moyen &Acirc;ge est une &eacute;poque sombre &raquo;, &laquo; Les racines de la France sont chr&eacute;tiennes &raquo;, &laquo; Napol&eacute;on est notre plus grande gloire nationale &raquo;,&nbsp; &laquo; La France n&apos;a pas de responsabilit&eacute; dans le g&eacute;nocide du Rwanda &raquo;, &laquo; Tous collabos ! &raquo;",
            "summary" => "<p>L&apos;histoire est sans doute la discipline la plus instrumentalis&eacute;e. Malmen&eacute;e, d&eacute;tourn&eacute;e, arrang&eacute;e... l&apos;ing&eacute;rence dans le travail des historiens &agrave; des fins politiques est monnaie courante. Julien Th&eacute;ry d&eacute;cortique une vingtaine d&apos;id&eacute;es fausses, l&apos;occasion de revenir sur des moments cl&eacute;s de l&apos;histoire de notre pays, mais aussi de faire un &eacute;tat des lieux de la recherche historiographique sur des questions cruciales, au centre de d&eacute;bats qui m&eacute;ritent des mises au point salutaires.&nbsp;</p>",
            "image" => "/storage/images/books/hkojfoqjxtah.jpeg"
        ]);
        DB::table('books')->insert([
            "title" => "Le probl&egrave;me &agrave; trois corps du capitalisme",
            "subtitle" => "De l&apos;impasse lib&eacute;rale-d&eacute;mocratique &agrave; la fuite en avant autoritaire",
            "summary" => "<p>Le capitalisme est confront&eacute; &agrave; un probl&egrave;me &eacute;quivalent &agrave; celui &agrave; trois corps des astrophysiciens : les crises qui le minent entretiennent des interactions dont la dynamique est impr&eacute;visible, &eacute;vacuant tout espoir d&apos;en ma&icirc;triser les termes. Traiter ces crises s&eacute;par&eacute;ment nous emm&egrave;ne dans le mur ; prendre au s&eacute;rieux leur entrem&ecirc;lement nous poussera vers la seule issue : la sortie.&nbsp;</p>",
            "image" => "/storage/images/books/qvbxfxpoyipd.jpeg"
        ]);
    }
}
