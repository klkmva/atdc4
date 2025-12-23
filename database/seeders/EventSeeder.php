<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('events')->insert([

            "created_at" => "2024-05-27 11:01:00",
            "published" => "1",
            "date" => "2023-06-01",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "D&eacute;bat sur la situation en Palestine ",
            "subtitle" => "",
            "info" => "<p>Nous recevrons Pierre Barbancey, grand reporter &agrave; l&rsquo;Humanit&eacute; et sp&eacute;cialiste de la Palestine, pour un d&eacute;bat sur la situation en Palestine avec Salah Hamouri, jeune avocat franco-palestinien.<\/p><p>Salah Hamouri a &eacute;t&eacute; la cible de l&rsquo;acharnement des autorit&eacute;s isra&eacute;liennes depuis plus de 20 ans. D&eacute;tenu pendant 6 ans (entre 2005 et 2011) puis &agrave; plusieurs reprises sous le r&eacute;gime arbitraire de la d&eacute;tention administrative, ce militant des droits humains a &eacute;t&eacute; sorti de prison pour &ecirc;tre expuls&eacute; le 18\/12\/22 de sa ville natale, J&eacute;rusalem, vers la France.<\/p><p>Salah pourra t&eacute;moigner de son exp&eacute;rience, comme citoyen de J&eacute;rusalem, comme prisonnier politique en Isra&euml;l, comme exil&eacute; en France.<\/p><p>Salah Hamouri sera fait citoyen d&rsquo;honneur ce m&ecirc;me jour par les municipalit&eacute;s de Billom (matin) et Blanzat (apr&egrave;s-midi).<\/p>",
            "image" => "202306012000.png",

            "video" => "2kwipR0g0iU",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 16:41:00",
            "published" => "1",
            "date" => "2023-06-15",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "La grande manipulation de Paul Kagame",
            "subtitle" => "",
            "info" => "<p>Manipulation. Ce mot colle parfaitement &egrave; la trag&eacute;die qui ensanglante depuis 30 ans l&rsquo;est de la R&eacute;publique d&eacute;mocratique du Congo. Le personnage principal en est Paul Kagame, le ma&icirc;tre du Rwanda. Les &Eacute;tats-Unis de Clinton et la Grande-Bretagne de Blair ont arm&eacute; et financ&eacute; sa prise du pouvoir pendant le g&eacute;nocide rwandais de 1994. Consid&eacute;r&eacute; comme un h&eacute;ros pour y avoir mis fin, il a port&eacute; la guerre chez son voisin congolais dont il occupe, par milices interpos&eacute;es, une partie du territoire. Il en pille les fantastiques ressources mini&egrave;res : or, diamants, coltan, lithium... Tyran dans son pays, il sert les int&eacute;r&ecirc;ts des puissances occidentales et des multinationales en Afrique centrale. Il a fait de son arm&eacute;e une force mercenaire que la France de Macron utilise d&eacute;sormais pour d&eacute;fendre ses int&eacute;r&ecirc;ts, l&egrave; o&ograve; elle ne peut plus intervenir directement, comme pour Total au Mozambique.<\/p><p>Les deux auteurs de ce livre ont recherch&eacute; les t&eacute;moins et victimes de cette guerre sans fin.<\/p>",
            "image" => "202306152000.png",

            "video" => "D9aqCYLGHvw",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-10-23 21:22:00",
            "published" => "1",
            "date" => "2023-04-22",
            "time" => "20:00",
            "location_id" => "2",
            "title" => "&laquo; Violences polici&egrave;res, le combat des familles &raquo;",
            "subtitle" => "En collaboration avec le Comit&eacute; justice et v&eacute;rit&eacute; pour Wissam et la Ligue des droits de l&rsquo;homme",
            "info" => "<p><\/p><p>Ce documentaire raconte les histoires et les combats de familles touch&eacute;es par les violences polici&egrave;res. Leur fr&egrave;re, leur p&egrave;re, leur proche est mort apr&egrave;s une intervention des forces de l&rsquo;ordre. Dans ce documentaire, cinq familles retracent les circonstances de ce d&eacute;c&egrave;s et racontent leur combat pour obtenir v&eacute;rit&eacute; et justice. Il est troublant de constater que les histoires de ces d&eacute;funts et de leurs proches pr&eacute;sentent une multitude de similitudes.<\/p>",
            "image" => "202304222000.png",

            "video" => "",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-05-04 00:00:00",
            "published" => "1",
            "date" => "2023-05-04",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "POLICE : LA LOI DE L&#039;OMERTA",
            "subtitle" => null,
            "info" => "<p>Six policiers lanceurs d&rsquo;alerte prennent la parole &agrave; visage d&eacute;couvert.<\/p><p>Racisme, violences, harc&egrave;lement, corruption, faux en &eacute;criture publique&hellip; Pour la premi&egrave;re fois, six policiers issus de diff&eacute;rents services &ndash; stups, mineurs, BAC, CRS, police aux fronti&egrave;res &ndash; r&eacute;v&egrave;lent &agrave; visage d&eacute;couvert ce qui depuis trop longtemps gangr&egrave;ne la police.<\/p><p>Cette immersion dans leur travail quotidien montre la m&eacute;canique froide mise en &oelig;uvre par l&rsquo;administration pour faire taire les policiers : &laquo; Soit tu fermes ta gueule, soit tu fermes ta gueule. &raquo;<\/p><p>Dans un milieu o&ugrave; l&rsquo;omerta r&egrave;gne en ma&icirc;tre, ces lanceurs d&rsquo;alerte font le pari courageux de prendre la parole, moins pour d&eacute;noncer des coupables que dans l&rsquo;espoir de voir &eacute;voluer leur institution vers davantage de justice et d&rsquo;avoir ainsi une police irr&eacute;prochable.<br><\/p>",
            "image" => "202305042000.png",

            "video" => "BSyWs1xWerw",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-05-25 00:00:00",
            "published" => "1",
            "date" => "2023-05-25",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "&laquo; Notre histoire de France &raquo;",
            "subtitle" => "",
            "info" => "<p>C&rsquo;est une histoire fran&ccedil;aise, une histoire d&rsquo;immigration aussi.<\/p><p>Comme des dizaines de milliers de Marocains, en 1963 le p&egrave;re de Mariame Tighanimine a &eacute;t&eacute; d&eacute;bauch&eacute; par un agent recruteur, F&eacute;lix Mora, au service des houill&egrave;res du Nord et du Pas de Calais. Il fallait remplir les mines de France. Lahcen Tighanimine est alors envoy&eacute; &agrave; la mine &agrave; Lens. Avec une paie de 250 francs re&ccedil;ue tous les quinze jours en liquide, avec un logement et le charbon gratuit, le quotidien, loin de sa famille et de son pays, est loin d&rsquo;&ecirc;tre facile. Aucune de ces gueules noires, &agrave; qui on avait appos&eacute; un tampon vert pour rentrer en France comme du b&eacute;tail, n&rsquo;imagine rester. Une g&eacute;n&eacute;ration plus tard, dans l&rsquo;hexagone, leurs descendants sont des centaines de milliers.<\/p><p>Avec force et passion Mariame Tighanimine retrace ce pan de l&rsquo;histoire encore m&eacute;connu ; cet &laquo; angle mort du r&eacute;cit national &raquo;, comme l&rsquo;a &eacute;crit la journaliste Ariane Chemin. Elle raconte aussi la venue de sa m&egrave;re, par le regroupement familial, le travail &agrave; l&rsquo;usine, &agrave; Flins, chez Renault, apr&egrave;s la fermeture des mines de charbon, l&rsquo;installation de la famille &agrave; Mantes la jolie&hellip; Un destin arrim&eacute; &agrave; la France, o&ugrave; l&rsquo;autrice, son fr&egrave;re et ses quatre soeurs sont n&eacute;s.<\/p><p>Notre histoire de France est un r&eacute;cit intime, un portrait familial &eacute;mouvant, qui, au fil des pages, se transforme en un antidote puissant contre les poisons identitaires de notre &eacute;poque.<\/p>",
            "image" => "202305252000.jpeg",

            "video" => "jagt3dbmV2s",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2024-05-27 17:08:00",
            "published" => "1",
            "date" => "2023-04-20",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "&laquo; F&eacute;minisme et antiracisme &agrave; travers les lunettes de Marx &raquo;",
            "subtitle" => "",
            "info" => "<p>&Agrave; l&rsquo;initiative des Amis de l&rsquo;Huma 63, dans le cadre d&rsquo;un cycle de conf&eacute;rences sur Karl Marx &agrave; l&rsquo;occasion des 140 ans de sa mort<\/p>",
            "image" => "202304202000.jpg",

            "video" => "",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2024-05-27 17:01:00",
            "published" => "1",
            "date" => "2023-06-22",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Les ENJEUX des MEDIAS INDEPENDANTS",
            "subtitle" => "avec l&#039;&eacute;quipe des journalistes de M&eacute;diaCoop",
            "info" => "<p>En France, quelques milliardaires poss&egrave;dent la quasi-totalit&eacute; de l&#039;information. Mais il reste quand m&ecirc;me quelques m&eacute;dias &laquo;&nbsp;pas pareil&nbsp;&raquo;. M&eacute;diacoop fait partie de ces irr&eacute;ductibles canards. Depuis sa cr&eacute;ation en 2015, notre journal est toujours rest&eacute; ind&eacute;pendant afin de montrer un autre visage du journalisme et de l&#039;information. Cela fait huit ans que nous existons. Huit ann&eacute;es au cours desquelles nous avons donn&eacute; de la voix &agrave; ceux qui luttent. Huit ann&eacute;es au cours desquelles nous avons r&eacute;alis&eacute; de nombreux voyages, reportage, articles, enqu&ecirc;tes et des projets avec tout type de populations.<\/p>Mais aujourd&#039;hui plus que jamais, les m&eacute;dias ind&eacute;pendants sont fragilis&eacute;s par une &eacute;conomie des m&eacute;dias de plus en plus agressive. De plus, &agrave; l&#039;heure du num&eacute;rique, de nouveau enjeux touchent l&#039;information, ses vecteurs et ses consommateurs. Pour c&eacute;l&eacute;brer nos 8 ans, on vous invite &agrave; parler de tout &ccedil;a avec nous le 22 juin &agrave; l&#039;Espace Georges Conchon en compagnie de Nicolas Cheviron, journaliste &agrave; Mediapart et Marc Gachon, fondateur et r&eacute;dacteur en chef du journal La Galipote.",
            "image" => "202306222000.png",

            "video" => "XMpDbqz088w",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2024-05-27 17:32:00",
            "published" => "1",
            "date" => "2023-04-01",
            "time" => "20:00",
            "location_id" => "2",
            "title" => "Projection du documentaire &laquo; Habit&eacute;s &raquo; de S&eacute;verine Mathieu",
            "subtitle" => "",
            "info" => "<p>Synopsis : Rencontre avec quatre habitants de Marseille qui vivent entre raison et d&eacute;raison.<\/p><p>Consid&eacute;r&eacute;s comme &laquo; malades &raquo; par la soci&eacute;t&eacute;, ils habitent n&eacute;anmoins en ville. Entre des p&eacute;riodes d&rsquo;hospitalisation, ils tentent de s&rsquo;&eacute;lancer vers le monde commun, de l&rsquo;habiter, d&rsquo;y &ecirc;tre pr&eacute;sents, alors qu&rsquo;ils sont eux-m&ecirc;mes habit&eacute;s, &eacute;trangers, inspir&eacute;s.<\/p>",
            "image" => "202304012000.png",

            "video" => "",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 21:39:00",
            "published" => "1",
            "date" => "2023-03-24",
            "time" => "17:00",
            "location_id" => "3",
            "title" => "Histoire Globale de la France coloniale",
            "subtitle" => "",
            "info" => "Rencontre avec Pascal Blanchard pour une discussion autour de l&rsquo;ouvrage-somme qu&rsquo;il a r&eacute;cemment co-dirig&eacute; aux Editions Philippe Rey, pr&eacute;fac&eacute; par Mohamed Mbougar Sarr (prix Goncourt 2021). Un travail colossal, rassemblant des textes de r&eacute;f&eacute;rence &eacute;dit&eacute;s depuis 30 ans par une centaine d&rsquo;auteurs issus de trois g&eacute;n&eacute;rations, et de trois continents distincts (l&rsquo;Europe, l&rsquo;Afrique, les Etats-Unis). Un travail indispensable afin de revenir aux connaissances scientifiques acquises mais trop peu mises en lumi&egrave;re, et surtout &agrave; la n&eacute;cessit&eacute; de transmettre cette histoire, coloniale et postcoloniale qui est aussi &laquo; une histoire d&rsquo;aujourd&rsquo;hui &raquo; : &laquo; un s&eacute;isme dont les r&eacute;pliques secouent encore &raquo; (Mohamed Mbougar Sarr). Un travail permettant de comprendre enfin les traces, multiples, et le poids 3de cet h&eacute;ritage dans notre pr&eacute;sent, donnant ainsi mati&egrave;re &agrave; d&eacute;passer les crispations de d&eacute;bats non clos, et peut-&ecirc;tre, les tensions m&eacute;morielles r&eacute;cemment replac&eacute;es sous l&rsquo;&eacute;clairage m&eacute;diatique.<br>La discussion sera anim&eacute; par Somy (L&rsquo;un des sp&eacute;cialiste incontournable de la culture Hip Hop et afro-am&eacute;ricaine en France, conf&eacute;rencier depuis 2013 et enseignant l&#039;histoire de celles-ci dans le cadre de la formation professionnelle Passeur Culturel au Centre de formation de danse de Cergy depuis 2021), en partenariat avec le Collect<br>if nous aussi.<br><br><br>",
            "image" => "202303241700.jpg",

            "video" => "",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 21:59:00",
            "published" => "1",
            "date" => "2023-03-02",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Que veut dire avoir 20 ans &mdash; une fois, deux fois, trois fois et plus ?",
            "subtitle" => "",
            "info" => "<p>Comment ne pas se laisser assigner &agrave; sa g&eacute;n&eacute;ration ou sa classe d&rsquo;&acirc;ge r&eacute;duit &agrave; un nombre ou une lettre ? Comment exister au singulier et au pluriel sans se noyer dans le tout-&agrave;-l&rsquo;ego, amoureux de son selfie ou dans les cohortes des statisticiens, r&eacute;duit &agrave; une lettre indiciaire ou un point insignifiant sur une courbe ? Comment trouver sa voie entre les attentes des a&icirc;n&eacute;s et les tentations d&rsquo;une soci&eacute;t&eacute; qui vous cible au final comme consommateur ?<\/p><p><br><\/p><p>L&rsquo;auteur, sans pr&eacute;tendre &agrave; aucune expertise, jouera de ces diff&eacute;rents registres pour t&eacute;moigner de son parcours, depuis ses vingt ans dans les ann&eacute;es 80, &agrave; partir de son r&eacute;cit Dans la for&ecirc;t des nombres.<\/p><p>En contrepoint, Margaux Mondin, &eacute;tudiante en philosophie et lectrice attentive dira si elle se retrouve dans cette photo d&rsquo;une &eacute;poque prise par une baby-boomeuse ou dans le portrait-robot de la g&eacute;n&eacute;ration Y.<\/p>",
            "image" => "202303022000.png",

            "video" => "J3Hlam-kJNA",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2024-12-24 13:21:00",
            "published" => "1",
            "date" => "2023-02-16",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "De Marx &egrave; Teilhard de Chardin, pour une politique &#171; transcendante &#187;",
            "subtitle" => "",
            "info" => "La politique n&apos;est pas simple technique d&apos;acc&egrave;s ou de maintien au pouvoir, pas seulement gestion des moyens. La politique qui veut &#171; changer les choses &#187;, c&apos;est d&apos;abord rupture avec les d&eacute;rives anciennes, invention des buts nouveaux, changement du sens de l&apos;&eacute;volution humaine. Les individus et les collectifs ont pour cela plus besoin de &#171; transcendance &#187; que de d&eacute;terminisme. De Marx &egrave; Teilhard de Chardin, en passant par Jean Jaur&egrave;s ou Ernst Bloch, des penseurs nous invitent &egrave; cet &#171; orageux p&egrave;lerinage &#187;, dont Alain Raynaud, des Amis du Temps des Cerises, propose ici, hors de tout contexte &eacute;ditorial ou universitaire, un cheminement particulier, de citoyen, de militant, d&apos;autodidacte.<br><br>Des livres d&apos;actualit&eacute; et de vulgarisation en liaison avec le th&egrave;me de la soir&eacute;e seront propos&eacute;s avec la &#171; Librairie Les Raconteurs d&apos;Histoires &#187; de Chamali&egrave;res.",
            "image" => "202302162000.jpg",

            "video" => "liAPvbgnWbs",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2024-12-20 15:51:00",
            "published" => "1",
            "date" => "2023-02-09",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "La cancel culture",
            "subtitle" => "",
            "info" => "Partant du paradoxe ontologique qui s&apos;exprime dans l&apos;oxymore constituant son nom, tr&egrave;s en phase avec les r&eacute;seaux sociaux, et consid&eacute;rant une volont&eacute; sous-jacente de r&eacute;viser l&apos;histoire, cet ouvrage envisage la cancel culture dans le contexte de l&apos;histoire des &Eacute;tats-Unis. Il propose de revenir sur l&apos;origine afro-am&eacute;ricaine de ce terme et du concept parent, woke, pour en expliquer les stigmates dans la soci&eacute;t&eacute; am&eacute;ricaine et son inclusion dans le d&eacute;bat politique en France.",
            "image" => "202302092000.jpg",

            "video" => "bWi5MpLZsXQ",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-09-11 13:32:00",
            "published" => "1",
            "date" => "2023-01-19",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "La Soci&eacute;t&eacute; schizophr&egrave;ne",
            "subtitle" => "",
            "info" => "La soci&eacute;t&eacute; dans laquelle nous vivons est en train de conna&icirc;tre des bouleverse-ments majeurs. Parmi ceux-ci, la perte de la coh&eacute;rence d&#039;ensemble appara&icirc;t comme le plus important d&#039;entre eux, au point que l&#039;on peut se demander s&#039;il existe encore &quot; une soci&eacute;t&eacute; &quot;.<br><br>Mais les contradictions insolubles ne traversent pas seulement l&#039;ensemble de la soci&eacute;t&eacute;, elles touchent aussi les individus, jusqu&#039;&agrave; leur faire perdre leur subjectivit&eacute; et leur caract&egrave;re.<br><br>C&#039;est &agrave; cette double m&eacute;tamorphose qu&#039;est consacr&eacute; le pr&eacute;sent essai.",
            "image" => "202301192000.jpg",

            "video" => "t3whVm2MDkI",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 21:59:00",
            "published" => "1",
            "date" => "2023-01-12",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "&laquo;&nbsp;SAFARI ou la chasse aux fran&ccedil;ais&nbsp;&raquo; : un pan de l&#039;histoire du fichage informatique",
            "subtitle" => "",
            "info" => "En 1970, l&rsquo;INSEE annonce un projet d&rsquo;automatisation de son r&eacute;pertoire des personnes physiques. Ce r&eacute;pertoire contient le nom, le ou les pr&eacute;nom(s), la date et le lieu de naissance et un num&eacute;ro &agrave; treize chiffres. Jusque-l&agrave;, le fichier n&rsquo;existait que sous forme manuscrite dans des grands livres et l&rsquo;informatiser permettait de g&eacute;n&eacute;raliser la diffusion du num&eacute;ro dans tous les services des administrations qui, &agrave; l&rsquo;&eacute;poque, passaient &agrave; l&rsquo;informatique. Si Monsieur Dupont est identifi&eacute; par un num&eacute;ro qui ne repr&eacute;sente que lui dans les fichiers de l&rsquo;&eacute;tat-civil, de l&rsquo;Education nationale, du minist&egrave;re du Travail, des Finances, etc. il sera facile de rassembler toutes les informations qui lui seront relatives. C&rsquo;est un vrai d&eacute;cloisonnement administratif, une simplification des proc&eacute;dures, sources d&rsquo;&eacute;conomies importantes, etc. Bref, une id&eacute;e simple et g&eacute;niale. Est-ce si s&ucirc;r ?<br><br>Le projet est &agrave; peine termin&eacute; qu&rsquo;un article du journal Le monde fait &eacute;clater une temp&ecirc;te : &laquo; SAFARI ou la chasse aux Fran&ccedil;ais ? &raquo; est le titre de l&rsquo;article qui d&eacute;nonce un projet liberticide. D&egrave;s le lendemain, le premier ministre de l&rsquo;&eacute;poque, Pierre Messmer, stoppe le projet en interdisant les rapprochements de fichiers d&rsquo;administrations diff&eacute;rentes et nomme une Commission Informatique et Libert&eacute;s. Deux ans plus tard ce sera la loi Informatique et libert&eacute;s de janvier 1978.<br><br>La conf&eacute;rence racontera cette histoire peu banale qui, en fait, remonte &agrave; la p&eacute;riode de Vichy et illustre les conflits entre la technocratie et le pouvoir politique avec des successions de phases o&ugrave; tant&ocirc;t des ing&eacute;nieurs gagnent, tant&ocirc;t les politiques. Devinez qui, &agrave; la fin, va gagner ?",
            "image" => "202301122000.jpg",

            "video" => "jmmoKwncgYw",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 21:40:00",
            "published" => "1",
            "date" => "2023-11-16",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Pourquoi la gauche a perdu",
            "subtitle" => "et comment elle peut gagner",
            "info" => "<p>Ce livre propose un &eacute;tat des lieux de la gauche fran&ccedil;aise . Il analyse les raisons qui la placent aujourd&#039;hui dans ses tr&egrave;s basses eaux &eacute;lectorales. Pour cela, il se r&eacute;f&egrave;re &agrave; l&#039;histoire, la plus lointaine comme la plus r&eacute;cente, et il mobilise au maximum les connaissances disponibles (&eacute;tudes, sondages, donn&eacute;es &eacute;lectorales). Il s&#039;agit ici d&#039;une r&eacute;flexion engag&eacute;e, mais non partisane. L&#039;auteur propose une analyse lucide et sans d&eacute;tour de ce qui p&eacute;nalise la gauche, sans conclure &agrave; la fatalit&eacute; du d&eacute;clin.<\/p><p>Il se veut fid&egrave;le &agrave; la formule proposant de marier le &laquo;&nbsp;pessimisme de l&#039;intelligence&nbsp;&raquo; et &laquo;&nbsp;l&#039;optimisme de la volont&eacute;&nbsp;&raquo; . L&#039;analyse s&#039;accompagne d&#039;annexes historiques et d&#039;un appareil statistique qui permet &agrave; chacun de prolonger librement sa r&eacute;flexion.<\/p><p>Il s&#039;agit ici d&#039;une r&eacute;flexion engag&eacute;e, mais non partisane. L&#039;auteur propose une analyse lucide et sans d&eacute;tour de ce qui p&eacute;nalise la gauche, sans conclure &agrave; la fatalit&eacute; du d&eacute;clin.<\/p>",
            "image" => "202311162000.jpg",

            "video" => "",
            "canceled" => "1"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 21:57:00",
            "published" => "1",
            "date" => "2023-09-21",
            "time" => "20:00",
            "location_id" => "2",
            "title" => "Roland GORI, une &eacute;poque sans esprit",
            "subtitle" => "",
            "info" => "<p>Aujourd&rsquo;hui nous vivons dans un monde o&ugrave; la logique de rentabilit&eacute; s&rsquo;applique &agrave; tous les domaines. Les lieux d&eacute;di&eacute;s aux m&eacute;tiers du soin, du social, de l&rsquo;&eacute;ducation, de la culture&hellip; sont g&eacute;r&eacute;s par des managers ou des experts pour qui seuls comptent les chiffres, niant les besoins humains. Le psychanalyste Roland Gori se bat depuis des ann&eacute;es contre le d&eacute;litement de notre soci&eacute;t&eacute;. Ce film est un portrait de sa pens&eacute;e, de son engagement, comme &laquo;&nbsp;L&rsquo;Appel des appels&nbsp;&raquo;, qu&rsquo;il avait co-initi&eacute; avec Stefan Chedri, pour nous opposer &agrave; cette casse des m&eacute;tiers et &agrave; la marchandisation de l&rsquo;existence. Ce film propose un portrait intime de Roland Gori, accompagn&eacute; de t&eacute;moignages de proche.<\/p><p><br><\/p><p><br><\/p>",
            "image" => "202309232000.png",

            "video" => "G034pMhzXuc",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2024-12-24 10:15:00",
            "published" => "1",
            "date" => "2023-11-09",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Le petit berger qui devint communiste",
            "subtitle" => "&#171; M&eacute;moires d&apos;outre Prison &#187;",
            "info" => "<p>Ce livre plonge avec vivacit&eacute; dans <strong>l&apos;Histoire postcoloniale du Maroc <\/strong>et du<strong> mouvement social marocain, un pass&eacute; <\/strong>qui donne des<strong> &eacute;l&eacute;ments d&apos;explication &egrave; la situation sociale, &eacute;conomique et politique actuelle<\/strong>. <\/p><p><strong>C&apos;est un r&eacute;cit engag&eacute;, autobiographique, historique et politique.<\/strong><\/p><p><span class=&#171;&nbsp;ql-cursor&nbsp;&#187;>ï»¿<\/span>C&apos;est un berger qui lira, plus tard, Marx, Engels, Voltaire, L&eacute;nine, mais aussi Balzac, Zola et Simone de Beauvoir &#133; Il adh&eacute;rera au <strong>Parti Communiste Marocain<\/strong> et deviendra le premier responsable de la jeunesse communiste de la r&eacute;gion de Mekn&egrave;s ; il contribuera &egrave; <strong>la cr&eacute;ation du Mouvement Marxiste-l&eacute;niniste Marocain <\/strong>et de l&apos;<strong>Organisation Ila Al Amame<\/strong><em> (en avant) <\/em>dont il sera membre de sa direction.<\/p>",
            "image" => "202311092000.jpeg",

            "video" => "EzXUIhqMpDs",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2024-12-23 14:25:00",
            "published" => "1",
            "date" => "2024-01-11",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Le national-capitalisme autoritaire",
            "subtitle" => "",
            "info" => "&apos;202401112000.&apos;",
            "image" => "202401112000.",

            "video" => "gaG9hGrnAKQ",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 21:59:00",
            "published" => "1",
            "date" => "2022-12-15",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Guy Debord et la philosophie",
            "subtitle" => "",
            "info" => "<p>&Agrave; la fin des ann&eacute;es 1950, Guy Debord entreprend de confronter ses th&egrave;ses et intuitions, initialement construites au sein des avant-gardes artistiques, avec la philosophie allemande. Il &eacute;tudie Hegel et Marx, d&eacute;couvre le marxisme &laquo;&nbsp;h&eacute;t&eacute;rodoxe&nbsp;&raquo; (Karl Korsh, Georg Luk&aacute;cs, Anton Pannekoek), discute les th&eacute;oriciens et commentateurs de son temps (Jean Hyppolite, Henri Lefebvre, Lucien Goldmann), et importe certains concepts issus de cette tradition (totalit&eacute;, ali&eacute;nation, marchandise, etc.) au sein de sa propre pens&eacute;e. L&#039;objectif de ce livre est de faire &eacute;merger la singularit&eacute; de Guy Debord dans le champ philosophique, en pla&ccedil;ant notamment la question du temps au c&oelig;ur de cette singularit&eacute;.<\/p>",
            "image" => "202212151900.jpg",

            "video" => "",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-19 22:31:00",
            "published" => "1",
            "date" => "2023-06-08",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "L&rsquo;&eacute;conomie chinoise dans la tourmente",
            "subtitle" => "",
            "info" => "<p>La chine se trouve depuis quelques ann&eacute;es dans une nouvelle phase de transition &eacute;conomique apr&egrave;s une p&eacute;riode de forte croissance qui a fait d&rsquo;elle l&rsquo;atelier du monde. Des r&eacute;formes structurelles sont indispensables mais le gouvernement doit g&eacute;rer une conjoncture difficile aussi bien au plan interne qu&rsquo;au plan international. Strat&eacute;gie z&eacute;ro Covid, crise immobili&egrave;re, vieillissement de la population, durcissement des contr&ocirc;les gouvernementaux, sanctions am&eacute;ricaines, les difficult&eacute;s p&egrave;sent sur l&rsquo;activit&eacute; &eacute;conomique et la Chine peut-elle poursuivre son d&eacute;veloppement dans ce nouveau contexte ?<\/p><p>Cette conf&eacute;rence propose une analyse des causes des difficult&eacute;s actuelles de l&rsquo;&eacute;conomie de la Chine et des cons&eacute;quences sur ses relations avec le reste du monde.<\/p>",
            "image" => "202210061800.png",

            "video" => "",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-19 22:32:00",
            "published" => "1",
            "date" => "2023-06-08",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Chanter le crime : Canards sanglants et complaintes",
            "subtitle" => "",
            "info" => "<p>La complainte criminelle narrait un fait divers marquant sur un air connu et donnait lieu &egrave; publication d&rsquo;une feuille volante illustr&eacute;e, ou &#171;&nbsp;canard sanglant&nbsp;&#187;. Elle a connu son &acirc;ge d&rsquo;or de 1870 &egrave; 1940, puis s&rsquo;est effac&eacute;e derri&egrave;re la radio et la t&eacute;l&eacute;vision. &Eacute;crite par des auteurs le plus souvent anonymes et chant&eacute;e &egrave; voix nue par ses colporteurs, elle exprimait l&rsquo;horreur des crimes du temps pour mieux la mettre &egrave; distance.<\/p><p>Il donne &egrave; r&eacute;fl&eacute;chir sur le traitement actuel du fait divers qui envahit les r&eacute;seaux sociaux et n&rsquo;est plus jamais chant&eacute;...<\/p>",
            "image" => "inlwlncyyndw.png",

            "video" => "",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 16:55:00",
            "published" => "1",
            "date" => "2022-05-12",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "D&eacute;connectons-nous",
            "subtitle" => "Retrouvons notre capacit&eacute; et notre libert&eacute; de penser et d&rsquo;agir",
            "info" => "<p>L&rsquo;auteur nous met en garde contre cette soci&eacute;t&eacute; du tout num&eacute;rique qui envahit l&rsquo;ensemble de notre vie quotidienne.<\/p><p>Si cette nouvelle technologie consomme de plus en plus d&rsquo;&eacute;nergie, elle pr&eacute;sente &eacute;galement un rique pour notre sant&eacute; physique et psychologique.<\/p>",
            "image" => "ltvpxtgzxyuy.png",

            "video" => "",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 16:56:00",
            "published" => "1",
            "date" => "2022-05-19",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "L&rsquo;universalisme en proc&egrave;s",
            "subtitle" => "",
            "info" => "<p>L&rsquo;auteur s&rsquo;efforce de d&eacute;fendre un universalisme renouvel&eacute;, c&rsquo;est &egrave; dire en se fondant sur l&rsquo;unit&eacute; de l&rsquo;esp&egrave;ce humaine, un universalisme cosmopolitique, d&eacute;fini indissociablement comme une exigence morale et un horizon politique.<\/p>",
            "image" => "etcgodjuapni.png",

            "video" => "oyG8z8Jj4A8",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 16:49:00",
            "published" => "1",
            "date" => "2022-06-09",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "L&rsquo;urgence de relocaliser",
            "subtitle" => "",
            "info" => "<p>L&rsquo;auteur livre sa vision transformatrice, d&eacute;croissante et internationaliste de la relocalisation, ainsi que ses modalit&eacute;s concr&egrave;tes dans cinq domaines strat&eacute;giques : les capitaux (et donc les investissements), la sant&eacute;, l&rsquo;alimentation, l&rsquo;&eacute;nergie et l&rsquo;automobile.<\/p>",
            "image" => "wxtjobmlnouu.png",

            "video" => "vMvpHXtYsWM",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 16:51:00",
            "published" => "1",
            "date" => "2022-06-16",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "L&rsquo;anarchie au pr&eacute;toire - Vienne, 1er mai 1890",
            "subtitle" => "Une insurrection et ses juges",
            "info" => "<p>Un proc&egrave;s retentissant &egrave; Grenoble !<\/p><p>Louise Michel, Alexandre Tennevin, Pierre Martin en t&ecirc;te !<\/p><p>Cet essai, accompagn&eacute; d&rsquo;un dossier de textes, t&eacute;moignages, dossier judiciaire et autre archives, retrace le proc&egrave;s de 1890 de ces anarchistes.<\/p>",
            "image" => "202206231800.jpg",

            "video" => "",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 21:59:00",
            "published" => "1",
            "date" => "2022-11-17",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "&laquo;&nbsp;Les heures heureuses&nbsp;&raquo;",
            "subtitle" => "Documentaire de Martine Deyres",
            "info" => "<p>Entre 1939 et 1945, la moiti&eacute; des intern&eacute;s meurent de faim en France.<\/p><p>L&#039;h&ocirc;pital psychiatrique  de Saint-Alban en Loz&egrave;re &eacute;chappe &agrave; cette h&eacute;catombe.<\/p><p>Que s&#039;est-il pass&eacute; qui a fait exception ? Archives et paroles de soignants retracent l&#039;histoire de ce haut lieu de la psychiatrie. La r&eacute;ponse montre comment les pratiques d&#039;alors ont chang&eacute; le regard de la m&eacute;decine et de la soci&eacute;t&eacute; sur la folie et ont enrichi la psychiatrie d&#039;aujourd&#039;hui.<\/p><p>&laquo;&nbsp;<em>Soigner les malades sans soigner l&#039;h&ocirc;pital, c&#039;est de la folie<\/em>&nbsp;&raquo; d&eacute;clarait Jean Oury. Selon Martine Deyres &laquo;&nbsp;<em>cette affirmation est la base de la psychoth&eacute;rapie institutionnelle qui s&#039;&eacute;labore &agrave; Saint-Alban. Soigner, c&#039;est rep&eacute;rer et d&eacute;samorcer les dispositifs d&#039;ali&eacute;nation sociale et appr&eacute;hender la complexit&eacute; de l&#039;ali&eacute;nation mentale.<\/em>&nbsp;&raquo;<\/p><p>La projection sera suivie d&#039;un d&eacute;bat anim&eacute; par Lionel Beteille (cadre de sant&eacute; en p&eacute;dopsychiatrie au CHCM) et Guy Dumoulin (cycle &laquo;&nbsp;La folie &agrave; l&#039;image&nbsp;&raquo;).<\/p>",
            "image" => "202211171900.jpg",

            "video" => "",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-19 22:35:00",
            "published" => "1",
            "date" => "2022-06-16",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Hommage &egrave; Marcel Trillat",
            "subtitle" => "Projection \/ d&eacute;bat",
            "info" => "<p>&Agrave; partir d&rsquo;extraits de films documentaires et de quelques archives sonores, il sera donc ici tent&eacute; de retracer la carri&egrave;re et de cerner les engagements d&rsquo;un homme du XXe si&egrave;cle, dont beaucoup appr&eacute;ciaient l&rsquo;&eacute;thique et l&rsquo;int&eacute;grit&eacute;. Il sera question de t&eacute;l&eacute;vision publique et de radio ind&eacute;pendante, de censures et de libert&eacute; d&rsquo;expression, d&rsquo;information et de cr&eacute;ation documentaire.<\/p>",
            "image" => "202204281800.jpg",

            "video" => "",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 10:50:00",
            "published" => "1",
            "date" => "2019-05-09",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Conf&eacute;rence gesticul&eacute;e - Le travail sans dessous de sens",
            "subtitle" => "",
            "info" => "Bernard FOUCHER associe anecdotes personnelles et analyses &eacute;conomiques et politiques pour d&eacute;crypter les raisons qui, de plus en plus, nous font rimer travail avec mal &ecirc;tre, souffrance et burn out. Tout en tentant de donner l&rsquo;envie d&rsquo;imaginer, de r&eacute;inventer ensemble un futur humain qui redonne du sens &agrave; nos vies. Conf&eacute;rence gesticul&eacute;e organis&eacute;e jeudi 11 avril par Les Amis du Temps des Cerises et l&#039;Union R&eacute;gionales des Scop Auvergne Rh&ocirc;ne-Alpes. Salle Georges Conchon &agrave; Clermont-Ferrand",
            "image" => "",

            "video" => "w27Ns5VBLfk",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 10:50:00",
            "published" => "1",
            "date" => "2019-11-21",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Conf&eacute;rence gesticul&eacute;e",
            "subtitle" => "",
            "info" => "Travail et emploi dans ma vie (petite histoire) et nos soci&eacute;t&eacute;s (grandes histoire) : volontariat et &laquo;&nbsp;green washing&nbsp;&raquo;, invisibilisation du travail des femmes, violences de l&#039;organisation marchandis&eacute;e du travail, entreprises psychopathes, emploi cr&eacute;ateur de ch&ocirc;mage, propositions collectives pour lib&eacute;rer le travail.... www.amistempsdescerises.wordpress.com",
            "image" => "",

            "video" => "qv64-vmMWAQ",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 19:31:00",
            "published" => "1",
            "date" => "2019-11-14",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "L&rsquo;histoire de ta beÌ‚tise",
            "subtitle" => "",
            "info" => "S&rsquo;adressant aux &eacute;l&eacute;cteurs d&rsquo;Emmanuel Macron, Fran&ccdil;ois B&eacute;gaudeau fait la somme des aveuglements qui le font se prendre pour un progessiste de pointe l&egrave; o&ograve; il n&rsquo;est qu&rsquo;un conservateur de base. &#171;&nbsp;Tu es un bourgeois. Mais le propre du bourgeois est de ne jamais se reconna&icirc;tre comme tel&nbsp;&#187;.",
            "image" => "xwtvwlhbeoty.png",

            "video" => "qB1MygRMYJY",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-12-04 16:09:00",
            "published" => "1",
            "date" => "2019-11-07",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Radicalisation express",
            "subtitle" => "Du gaullisme au Black Block",
            "info" => "Le parcours hors norme de Nicolas Fensch, condamn&eacute; &agrave; 5 ann&eacute;es de prison en 2017. Le 18 mai 2018 cet ing&eacute;nieur informatique de 38 ans ass&egrave;ne 4 coups de barre en plastique &agrave; un agent de police qui vient de sortir de son v&eacute;hicule sur le quai de Valmy. Plus tard il rejoindra les &laquo;&nbsp;black blocks&nbsp;&raquo;.",
            "image" => "201911071100.webp",

            "video" => "wyDFxFgCSJg",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 19:40:00",
            "published" => "1",
            "date" => "2019-10-10",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "VeÌneÌzuela , chronique d&rsquo;une d&eacute;stabilisation",
            "subtitle" => "",
            "info" => "Au coeur de la r&eacute;volution bolivarienne, initi&eacute;e par Hugo Chavez, ce livre narre comment, de vagues de violence insurrectionnelle en d&eacute;stabilisation &eacute;conomique et en lynchage m&eacute;diatique, une guerre non conventionnelle a mis &egrave; genou le pays les premi&egrave;res ressources mondiales de p&eacute;trole.",
            "image" => "",

            "video" => "2HuVtEL8zGE",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 10:50:00",
            "published" => "1",
            "date" => "2019-10-03",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "La possibiliteÌ du fascisme",
            "subtitle" => "",
            "info" => "La possibilit&eacute; du fascisme s&#039;annonce non comme une possibilit&eacute; abstraite mais comme une possibilit&eacute; concr&egrave;te. Comment la r&eacute;publique fran&ccedil;aise pourrait elle engendrer le monstre fasciste ?",
            "image" => "",

            "video" => "i7HOTa1Kt-M",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 10:50:00",
            "published" => "1",
            "date" => "2019-09-26",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "DeÌsobeÌir , pourquoi, comment ?",
            "subtitle" => "",
            "info" => "Syndicalise, altermondialiste, &eacute;lu local, d&eacute;fenseur de la ruralit&eacute; et de l&#039;environnement.",
            "image" => "",

            "video" => "5WFQp0BbcpQ",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 10:50:00",
            "published" => "1",
            "date" => "2019-02-21",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "L&#039;insoutenable productiviteÌ du travail",
            "subtitle" => "",
            "info" => "En s&rsquo;appuyant non seulement sur l&rsquo;&eacute;conomie, mais aussi l&rsquo;anthropologie, la psychanalyse et la philosophie, ce livre tente une critique de la centralit&eacute; de l&rsquo;efficacit&eacute; productive de notre temps. L&rsquo;urgence politique et &eacute;cologique de notre temps est celle d&rsquo;un rejet non pas de l&rsquo;&eacute;conomie n&eacute;olib&eacute;rale, mais de l&rsquo;&eacute;conomie tout court comme science de l&rsquo;efficacit&eacute; productive.",
            "image" => "",

            "video" => "FJtjTLHPBUc",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 10:50:00",
            "published" => "1",
            "date" => "2019-02-14",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "La guerre culturelle des extreÌ‚mes droites",
            "subtitle" => "",
            "info" => "&laquo;&nbsp;Les extr&ecirc;mes droites, dans leur diversit&eacute;, ont d&eacute;velopp&eacute; et th&eacute;oris&eacute; depuis quelques d&eacute;cennies une strat&eacute;gie &laquo;&nbsp;m&eacute;tapolitique&nbsp;&raquo; de &laquo;&nbsp;guerre culturelle&nbsp;&raquo; : l&rsquo;objectif est d&rsquo;influencer l&rsquo;opinion publique non pas en mettant en avant un programme ou des id&eacute;es politiques, mais en cr&eacute;ant un &eacute;tat d&rsquo;esprit propice et en faisant partager une vision du monde anti-&eacute;galitaire fond&eacute;e sur l&rsquo;&eacute;motion et la fascination.&nbsp;&raquo;",
            "image" => "",

            "video" => "pKM1B3yj5JM",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 19:41:00",
            "published" => "1",
            "date" => "2019-02-14",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Chronique d&rsquo;une catastrophe annonc&eacute;e ...et peut-&ecirc;tre &eacute;vitable.",
            "subtitle" => "",
            "info" => "Conf&eacute;rence donn&eacute;e le 12 f&eacute;vrier 2019 &egrave; la Fac des lettres de Clermont-Ferrand, &egrave; l&apos;appel de AFPS, BDSF, Amis Temps Des Cerises, Amis de l&apos;Huma, Amis du Diplo, LDH, UD CGT, Solidaires, ATTAC, FSU. A partir de son livre &#171;&nbsp;Isra&euml;l, chronique d&apos;une catastrophe annonc&eacute;e... et peut-&ecirc;tre &eacute;vitable&nbsp;&#187; (Syllepse, 2018), Michel Warschawski a fait un expos&eacute; pr&eacute;cis et d&eacute;taill&eacute; de la situation en Isra&euml;l. Il a expliqu&eacute; qu&apos;Isra&euml;l se d&eacute;finit comme un &#171;&nbsp;Etat nation du peuple juif&nbsp;&#187;, ouvert &egrave; tous les Juifs du monde, alors que les Palestiniens autochtones restants sont discrimin&eacute;s, sans droits fondamentaux et que le droit au retour des r&eacute;fugi&eacute;s est ni&eacute;.",
            "image" => "",

            "video" => "OqXvYfetFqI",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 19:27:00",
            "published" => "1",
            "date" => "2019-01-17",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "MeÌmoire ouvrieÌ€re dans le Puy de D&ocirc;me",
            "subtitle" => "",
            "info" => "",
            "image" => "",

            "video" => "iwh7AYq3to8",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 19:27:00",
            "published" => "1",
            "date" => "2018-11-22",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Stop Linky",
            "subtitle" => "",
            "info" => "&#171;&nbsp;Linky&nbsp;&#187;, c&apos;est le nouveau compteur &eacute;lectrique qu&apos;ErDF veut imposer dans tous les foyers. Surco&ucirc;t dissimul&eacute;, intrusion dans notre vie priv&eacute;e, r&eacute;el danger pour la sant&eacute; des usagers&#133;",
            "image" => "",

            "video" => "NvPOkNd39bQ",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 10:50:00",
            "published" => "1",
            "date" => "2018-11-22",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "L&#039;ingeÌrence francÌ§aise en CoÌ‚te d&#039;Ivoire",
            "subtitle" => "",
            "info" => "Derri&egrave;re une neutralit&eacute; affich&eacute;e, La France n&#039;a cess&eacute; d&#039;intervenir dans la vie politique Ivoirienne, d&eacute;fendant aprement ses int&eacute;r&ecirc;ts &eacute;conomique et son influence r&eacute;gionale. De la mort d&#039;Houphou&ecirc;t-Boigny &agrave; la chute de Gbagbo, tout l&#039;arsenal de la Fran&ccedil;afrique s&#039;est d&eacute;ploy&eacute; en C&ocirc;te d&#039;Ivoire.",
            "image" => "",

            "video" => "vIABExBpRbo",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 19:35:00",
            "published" => "1",
            "date" => "2018-06-14",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Les francÌ§ais et la nature",
            "subtitle" => "",
            "info" => "Nous sommes les enfants de l&apos;univers mais nous l&apos;avons oubli&eacute;. Au nom de la libert&eacute; et de la raison, nous avons coup&eacute; tous les ponts qui nous liaient au monde. L&apos;homme moderne est devenu une &eacute;nigme de la nature. Pourtant, une nouvelle r&eacute;volution copernicienne est en cours au coeur de notre civilisation occidentale. Partout, au cin&eacute;ma, en litt&eacute;rature, en philosophie, &eacute;merge un nouveau regard sur nos &#171;&nbsp;compagnons de plan&egrave;te&nbsp;&#187;.",
            "image" => "",

            "video" => "YWAjBdE_NLs",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 10:50:00",
            "published" => "1",
            "date" => "2018-06-07",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Du social au climat",
            "subtitle" => "",
            "info" => "Apr&egrave;s un parcours militant dense : syndicaliste, altermondialiste, associatif, &eacute;lu local . Fervent d&eacute;fenseur de la ruralit&eacute; et de l&rsquo;environnement, il s&rsquo;est engag&eacute; dans de nombreux combats avec un optimisme visc&eacute;ral.",
            "image" => "",

            "video" => "yekowbpRPhk",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 10:50:00",
            "published" => "1",
            "date" => "2018-05-03",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Histoire des Ducelliers autour du livre de Philippe Munck",
            "subtitle" => "",
            "info" => "Ce livre d&eacute;crit une aventure humaine, une exp&eacute;rience o&ugrave; l&rsquo;on d&eacute;couvre le monde du travail au sein de l&#039;entreprise DUCELLIER. L&rsquo;auteur tire les enseignements d&rsquo;un conflit qui opposa un patronat archa&iuml;que &agrave; des salari&eacute;s qui refusaient le dictat patronal, et qui voulaient vivre debout.",
            "image" => "",

            "video" => "NmPL-v1-6Z0",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 19:38:00",
            "published" => "1",
            "date" => "2018-04-26",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "La tour abolie",
            "subtitle" => "",
            "info" => "La tour Magister : trente-huit &eacute;tages au coeur du quartier de la D&eacute;fense. Au sommet, l &apos;&eacute;tat-major, gouvern&eacute; par la logique du profit. Dans les sous-sols et les parkings, une population de mis&eacute;rables rendus fous par l &apos;exclusion. Deux mondes qui s&apos;ignorent, jusqu&apos;au jour o&ograve; . . .",
            "image" => "",

            "video" => "yub6N0SEbmE",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 10:50:00",
            "published" => "1",
            "date" => "2018-04-05",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Russie  : Entre peurs et d&eacute;fis",
            "subtitle" => "",
            "info" => "La Russie fait peur. Un pr&eacute;sident am&eacute;ricain n&rsquo;h&eacute;sita pas &agrave; parler de l&rsquo;URSS comme d&rsquo;un &laquo;&nbsp;empire du mal&nbsp;&raquo; et la crise ukrainienne a remis cette notion au go&ucirc;t du jour &agrave; propos, cette fois-ci, de la Russie. On parle du &laquo;&nbsp;pouvoir de nuisance&nbsp;&raquo; du pays alors que d&rsquo;autres &eacute;voquent une &laquo;&nbsp;impuissance g&eacute;n&eacute;tique&nbsp;&raquo; des Russes &agrave; la d&eacute;mocratie.",
            "image" => "",

            "video" => "RusCSNoQHJM",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 10:50:00",
            "published" => "1",
            "date" => "2018-03-01",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Eloge de la politique",
            "subtitle" => "",
            "info" => "Qu&rsquo;est-ce que la politique ? Que peut-elle nous promettre ? Nos d&eacute;mocraties lib&eacute;rales sont-elles toujours d&eacute;mocratiques ? Ces questions, Alain Badiou y r&eacute;pond avec clart&eacute; et pr&eacute;cision dans ce livre &eacute;labor&eacute; &agrave; partir de ses conf&eacute;rences tenues au th&eacute;&acirc;tre d&rsquo;Aubervilliers en 2017. Il s&rsquo;agit de cinq dialogues - ici avec la journaliste Aude Lancelin - qui abordent les sujets qui ont scand&eacute; l&rsquo;ann&eacute;e 2017 : l&rsquo;&eacute;lection pr&eacute;sidentielle, la R&eacute;volution d&rsquo;Octobre, l&rsquo;&laquo;&nbsp;hypoth&egrave;se communiste&nbsp;&raquo;, la gauche, &laquo;&nbsp;Macron ou le coup d&rsquo;&eacute;tat d&eacute;mocratique&nbsp;&raquo;. De quoi s&rsquo;agit-il en fait dans ces pages qui d&eacute;roulent la pens&eacute;e de ce philosophe qui a plac&eacute; la politique au c&oelig;ur de son travail ? D&rsquo;en faire l&rsquo;&eacute;loge. Parce que, pour lui, la politique n&rsquo;est pas que l&rsquo;art souverain du mensonge, comme le disait Machiavel. &laquo;&nbsp;Elle doit pourtant &ecirc;tre autre chose : la capacit&eacute; d&rsquo;une soci&eacute;t&eacute; &agrave; s&rsquo;emparer de son destin, &agrave; inventer un ordre juste et se placer sous l&rsquo;imp&eacute;ratif du bien commun&nbsp;&raquo;.Qu&rsquo;est-ce que la politique ? Que peut-elle nous promettre ? Nos d&eacute;mocraties lib&eacute;rales sont-elles toujours d&eacute;mocratiques ? Ces questions, Alain Badiou y r&eacute;pond avec clart&eacute; et pr&eacute;cision dans ce livre &eacute;labor&eacute; &agrave; partir de ses conf&eacute;rences tenues au th&eacute;&acirc;tre d&rsquo;Aubervilliers en 2017. Il s&rsquo;agit de cinq dialogues - ici avec la journaliste Aude Lancelin - qui abordent les sujets qui ont scand&eacute; l&rsquo;ann&eacute;e 2017 : l&rsquo;&eacute;lection pr&eacute;sidentielle, la R&eacute;volution d&rsquo;Octobre, l&rsquo;&laquo;&nbsp;hypoth&egrave;se communiste&nbsp;&raquo;, la gauche, &laquo;&nbsp;Macron ou le coup d&rsquo;&eacute;tat d&eacute;mocratique&nbsp;&raquo;. De quoi s&rsquo;agit-il en fait dans ces pages qui d&eacute;roulent la pens&eacute;e de ce philosophe qui a plac&eacute; la politique au c&oelig;ur de son travail ? D&rsquo;en faire l&rsquo;&eacute;loge. Parce que, pour lui, la politique n&rsquo;est pas que l&rsquo;art souverain du mensonge, comme le disait Machiavel. &laquo;&nbsp;Elle doit pourtant &ecirc;tre autre chose : la capacit&eacute; d&rsquo;une soci&eacute;t&eacute; &agrave; s&rsquo;emparer de son destin, &agrave; inventer un ordre juste et se placer sous l&rsquo;imp&eacute;ratif du bien commun&nbsp;&raquo;.",
            "image" => "",

            "video" => "yTddGEMJsw0",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 19:48:00",
            "published" => "1",
            "date" => "2018-02-22",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "La cultuerie de masse",
            "subtitle" => "",
            "info" => "&#171;&nbsp;Nous vivons d&eacute;sormais dans la &#171;&nbsp;cultuerie&nbsp;&#187; de masse qui contredit de plus en plus les finalit&eacute;s de l &apos;art et de la culture authentiques. Cette &#171;&nbsp;cultuerie&nbsp;&#187;, par le biais des mass m&eacute;dia t&eacute;l&eacute;guide et pr&eacute;cipite les masses dans des &eacute;v&eacute;nements destructeurs, dont les attentats sont un des aspects les plus manifestes.&nbsp;&#187;",
            "image" => "",

            "video" => "j6tSQEZrgeM",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 10:50:00",
            "published" => "1",
            "date" => "2018-02-15",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "La Tiretaine",
            "subtitle" => "",
            "info" => "Que nous dit-elle de notre pass&eacute; et de notre avenir? La rivi&egrave;re &laquo;&nbsp;ne doit plus &ecirc;tre consid&eacute;r&eacute;e comme un probl&egrave;me permanent, mais comme un atout en devenir&nbsp;&raquo;, il faut r&eacute;fl&eacute;chir sur notre &laquo;&nbsp;rapport &agrave; l&rsquo;eau&nbsp;&raquo;, peut-on vivre autour d&rsquo;une rivi&egrave;re en l&rsquo;ignorant ?",
            "image" => "",

            "video" => "NdD3P6WILVY",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 10:50:00",
            "published" => "1",
            "date" => "2018-01-18",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Quel avenir pour le numeÌrique ?",
            "subtitle" => "",
            "info" => "Le num&eacute;rique est aujourd&rsquo;hui le principal pourvoyeur de futurs. Seulement, si l&rsquo;innovation a pu constituer un moteur dans une perspective o&ugrave; les ressources apparaissaient infinies, l&rsquo;avenir semble opposer un sc&eacute;nario en contradiction avec la plupart des projections.",
            "image" => "",

            "video" => "7eyoen69daQ",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 10:50:00",
            "published" => "1",
            "date" => "2018-01-11",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Main basse sur l&#039;information",
            "subtitle" => "",
            "info" => "L&rsquo;auteur enqu&ecirc;te sur le naufrage des m&eacute;dias fran&ccedil;ais en replongeant dans l&rsquo;histoire d&rsquo;une presse libre et ind&eacute;pendante sous la R&eacute;volution jusqu&rsquo;&agrave; sa mise sous tutelle par les puissances financi&egrave;res ces derni&egrave;res ann&eacute;es. I l plaide pour une refondation de la presse dans le cadre d&rsquo;une r&eacute;volution d&eacute;mocratique.",
            "image" => "",

            "video" => "cwUKB9152KA",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 10:50:00",
            "published" => "1",
            "date" => "2017-12-07",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Sociologie des enfants",
            "subtitle" => "",
            "info" => "Alors que l&rsquo;&eacute;tude de l&rsquo;enfance a longtemps relev&eacute; de mani&egrave;re exclusive de la psychologie, cet &acirc;ge de la vie suscite aujourd&rsquo;hui un grand nombre de recherches en sociologie. Comment les enfants vivent-ils au quotidien dans les soci&eacute;t&eacute;s occidentales ? Quelles normes pr&eacute;sident &agrave; leur &eacute;ducation ? Que font-ils lorsqu&rsquo;ils se retrouvent entre eux, hors de la pr&eacute;sence des adultes ? Quel r&ocirc;le joue l&rsquo;enfance dans la reproduction des in&eacute;galit&eacute;s et dans l&rsquo;apprentissage des rapports de domination, de classe et de genre ? Telles sont quelques-unes des questions que les sociologues se posent &agrave; propos des enfants et auxquelles ils apportent des r&eacute;ponses &agrave; travers de nombreuses enqu&ecirc;tes de terrain.",
            "image" => "",

            "video" => "yKm2Qhhv1zw",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 19:36:00",
            "published" => "1",
            "date" => "2017-11-09",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Thomas Sankara  - La libert&eacute; contre le destin",
            "subtitle" => "",
            "info" => "Sp&eacute;cialiste de Thomas Sankara et de la r&eacute;volution burkinab&egrave;, il est notamment l&apos;auteur de la biographie de Thomas Sankara &#171;&nbsp;La patrie ou la mort&#133;&nbsp;&#187; (L&apos;Harmattan, 2007)",
            "image" => "",

            "video" => "f3AAMSnL0LI",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 19:33:00",
            "published" => "1",
            "date" => "2017-11-02",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Pour une autre politique agricole et alimentaire",
            "subtitle" => "",
            "info" => "Devant les impasses sociales et environnementales actuelles et les interrogations existentielles de l&apos;Union europ&eacute;enne, les paysans mutins d&apos;aujourd&apos;hui sont d&apos;utilit&eacute; publique.",
            "image" => "",

            "video" => "xNTBQNa6ibs",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 10:50:00",
            "published" => "1",
            "date" => "2017-09-21",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Les blancs les juifs et nous.",
            "subtitle" => "",
            "info" => "&laquo;&nbsp;Pourquoi j&rsquo;&eacute;cris ce livre ? Parce que je partage l&rsquo;angoisse de Gramsci : &ldquo;le vieux monde se meurt. Le nouveau est long &agrave; appara&icirc;tre et c&rsquo;est dans ce clair-obscur que surgissent les monstres&rdquo;. Le monstre fasciste, n&eacute; des entrailles de la modernit&eacute; occidentale. D&rsquo;o&ugrave; ma question : qu&rsquo;offrir aux Blancs en &eacute;change de leur d&eacute;clin et des guerres qu&rsquo;il annonce ? Une seule r&eacute;ponse : la paix. Un seul moyen : l&rsquo;amour r&eacute;volutionnaire.&laquo;&nbsp;",
            "image" => "",

            "video" => "qcM-iT5JSEs",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 10:50:00",
            "published" => "1",
            "date" => "2017-09-14",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Le totalitarisme pervers",
            "subtitle" => "",
            "info" => "Un court essai dans lequel le philosophe met en lumi&egrave;re les processus par lesquels les entreprises multinationales soumettent le pouvoir politique aux lois du march&eacute;, fa&ccedil;onnent les lois et les proc&eacute;dures &agrave; leur avantage gr&acirc;ce au lobbying. Il s&rsquo;appuie sur le cas de Total, synth&eacute;tisant l&rsquo;analyse dans &laquo;&nbsp;De quoi Total est-elle la somme ?&raquo;",
            "image" => "",

            "video" => "osl8AjdiruE",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 18:36:00",
            "published" => "1",
            "date" => "2017-06-01",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Pour en finir avec le trou de la seÌcu",
            "subtitle" => "",
            "info" => "Pour tous ceux qui veulent trouver les cl&eacute;s de r&eacute;sistance au projet social n&eacute;o-lib&eacute;ral et qui veulent penser &egrave; un mod&egrave;le alternatif de protection sociale, la lecture de ce livre est indispensable car il permet &egrave; tout citoyen, sans connaissance pr&eacute;alable de ce secteur, d&apos;en comprendre les enjeux.",
            "image" => "",

            "video" => "bMu9mdAWfxE",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 10:50:00",
            "published" => "1",
            "date" => "2017-05-18",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Universaliser le salaire pour changer le travail",
            "subtitle" => "",
            "info" => "Face aux discours tant&ocirc;t sur la fin du travail, tant&ocirc;t sur la fin de l&rsquo;emploi pour justifier, via des comptes (dits) personnalis&eacute;s et un revenu de base, visant la paup&eacute;risation g&eacute;n&eacute;ralis&eacute;e des salari&eacute;s, la casse de la protection sociale et des droits li&eacute;s &agrave; l&rsquo;emploi, il faut reprendre l&rsquo;offensive : nous r&eacute;approprier le travail et l&rsquo;investissement pour ma&icirc;triser la production.",
            "image" => "",

            "video" => "sBBunMhnpHU",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 10:50:00",
            "published" => "1",
            "date" => "2017-05-11",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "L&#039;inteÌgrisme eÌconomique",
            "subtitle" => "",
            "info" => "Pourquoi continue-t-on de promouvoir les recettes &eacute;conomiques n&eacute;o-lib&eacute;rales alors que pr&egrave;s de 40 ans d&rsquo;application ont montr&eacute; leurs effets pervers : multiplication des crises financi&egrave;res; explosion des in&eacute;galit&eacute;s combin&eacute;e &agrave; une hausse de la pr&eacute;carit&eacute; et de la pauvret&eacute;, d&eacute;gradations environnementales... Et si, derri&egrave;re cette rh&eacute;torique de fa&ccedil;ade, l&rsquo;objectif n&rsquo;&eacute;tait pas de servir l&rsquo;int&eacute;r&ecirc;t g&eacute;n&eacute;ral mais celui d&rsquo;une minorit&eacute; ?",
            "image" => "",

            "video" => "3A69t1ldU4E",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 10:50:00",
            "published" => "1",
            "date" => "2017-04-20",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Les luttes et les reÌ‚ves - Une histoire populaire de la France",
            "subtitle" => "",
            "info" => "C&rsquo;est l&rsquo;histoire de la France &laquo;&nbsp;d&rsquo;en bas&nbsp;&raquo;, celle des classes populaires et des opprim&eacute;.e.s de tous ordres, que retrace ce livre, l&rsquo;histoire des multiples v&eacute;cus d&rsquo;hommes et de femmes, celle de leurs accommodements au quotidien et, parfois, ouvertes ou cach&eacute;es, de leurs r&eacute;sistances &agrave; l&rsquo;ordre &eacute;tabli et aux pouvoirs dominants, l&rsquo;histoire de leurs luttes et de leurs r&ecirc;ves.",
            "image" => "",

            "video" => "Gh8Mw7MkrMI",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 10:50:00",
            "published" => "1",
            "date" => "2017-04-13",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Partenariats public - priv&eacute;",
            "subtitle" => "",
            "info" => "L&rsquo;int&eacute;r&ecirc;t public livr&eacute; aux int&eacute;r&ecirc;ts priv&eacute;s ? Les PPP l&rsquo;ont fait. Opaques, bien verrouill&eacute;s, soumis aux pures logiques financi&egrave;res, les partenariats public-priv&eacute; (PPP) confient le financement, la r&eacute;alisation et le fonctionnement d&rsquo;&eacute;quipements publics (stades, h&ocirc;pitaux, &eacute;coles&hellip;) &agrave; des multinationales, au grand b&eacute;n&eacute;fice d&rsquo;une oligarchie restreinte domin&eacute;e par Vinci, Bouygues et Eiffage.",
            "image" => "",

            "video" => "ra0CQ_e2XUA",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 10:50:00",
            "published" => "1",
            "date" => "2017-04-06",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Chronique d&#039;exil et d&#039;hospitalit&eacute;.",
            "subtitle" => "",
            "info" => "Des &ecirc;tres humains s&rsquo;exilent pour changer leur destin. D&rsquo;autres les aident &agrave; accomplir leurs r&ecirc;ves, parce qu&rsquo;ils croient en l&rsquo;hospitalit&eacute;&hellip; Les articles qui composent cet ouvrage ont &eacute;t&eacute; r&eacute;dig&eacute;s entre octobre 2013, deux ans avant qu&rsquo;on ne commence &agrave; parler de la &laquo;&nbsp;crise migratoire&nbsp;&raquo;, et mars 2016, au lendemain du d&eacute;mant&egrave;lement de la zone sud du bidonville de Calais.",
            "image" => "",

            "video" => "Wsk8QNyzHuM",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 10:50:00",
            "published" => "1",
            "date" => "2017-03-30",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Nous ne sommes plus seuls au monde",
            "subtitle" => "",
            "info" => "On nous r&eacute;p&egrave;te &agrave; l&rsquo;envie que le monde serait devenu de plus en plus complexe et ind&eacute;chiffrable. A l&rsquo;ordre de la Guerre froide aurait succ&eacute;d&eacute; un nouveau d&eacute;sordre g&eacute;opolitique mena&ccedil;ant de sombrer dans le &laquo;&nbsp;chaos&nbsp;&raquo;. Affaiblissement des Etats-Unis, &eacute;mergence de nouveaux g&eacute;ants &eacute;conomiques, irruption des pr&eacute;tendus &laquo;&nbsp;Etats voyous&nbsp;&raquo; et d&rsquo;organisations terroristes incontr&ocirc;lables...",
            "image" => "",

            "video" => "uSmrBEUkD0E",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 10:50:00",
            "published" => "1",
            "date" => "2017-03-09",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Penser la soci&eacute;t&eacute; contemporaine avec Guy Debord",
            "subtitle" => "",
            "info" => "Expliquer les principaux concepts de la pens&eacute;e de Guy Debord (le spectacle, la d&eacute;rive, la situation, l&rsquo;ali&eacute;nation etc.) en les confrontant &agrave; des ph&eacute;nom&egrave;nes qui nous sont contemporains en montrant la f&eacute;condit&eacute; de cette critique pour penser des ph&eacute;nom&egrave;nes aussi divers que Google Maps, Pokemon Go, les selfies, Instagram et Tinder..",
            "image" => "",

            "video" => "PSuoLZ51Vnw",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 19:50:00",
            "published" => "1",
            "date" => "2017-01-19",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "ReÌmi Garnier",
            "subtitle" => "",
            "info" => "Un documentaire r&eacute;alis&eacute; par Mediacoop sur les lanceurs d&apos;alerte &#171;&nbsp;R&eacute;my Garnier, l&apos;homme qui fit tomber Cahuzac&nbsp;&#187;, en pr&eacute;sence de l&apos;inspecteur des imp&ocirc;ts qui d&egrave;s 1999, &eacute;pingla Jer&ocirc;me Cahuzac, dans des affaires frauduleuses. Il faudra attendre cependant plus de 10 ans que l&apos;affaire Cahuzac &eacute;clate au grand jour en 2012 et le jugement du TGI de d&eacute;cembre 2016 avec sa condamnation &egrave; 3 ans de prison ferme.Mais pendant toutes ces ann&eacute;es, R&eacute;my Garnier lanceur d&apos;alerte subira pressions, placardisations, d&eacute;pression....",
            "image" => "",

            "video" => "3OHjgH0ni2g",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2024-05-29 18:39:00",
            "published" => "1",
            "date" => "2016-12-08",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Je vous eÌcris de l&#039;usine",
            "subtitle" => "",
            "info" => "Pendant dix ans (2005-2015), chaque mois, Jean-Pierre Levaray a anim&eacute; la chronique &laquo;&nbsp;Je vous &eacute;cris de l&rsquo;usine&nbsp;&raquo; dans le mensuel CQFD. Il a racont&eacute; les heurs et malheurs de la classe ouvri&egrave;re, sa classe. Les luttes et les espoirs, les joies et les peines, les travers et la r&eacute;signation, parfois. Ce texte vient d&rsquo;en bas. Il en a le go&ucirc;t et l&rsquo;odeur. Ode &agrave; l&rsquo;&eacute;criture prol&eacute;tarienne.",
            "image" => "",

            "video" => "YFjk1yMBuag",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 10:50:00",
            "published" => "1",
            "date" => "2016-12-01",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Pour une &eacute;cole de l&#039;exigence intellectuelle",
            "subtitle" => "",
            "info" => "&laquo;&nbsp;Emancipation d&eacute;mocratique ou barbarie : nous sommes au pied du mur. Sans &eacute;chappatoire. La question scolaire n&rsquo;&eacute;chappe pas &agrave; ce dilemme&nbsp;&raquo;. Ce livre part d&rsquo;une conviction : l&rsquo;urgence d&rsquo;une &eacute;ducation pour tous de haut niveau qui ne vise pas d&rsquo;abord &agrave; inculquer des messages, mais &agrave; former des capacit&eacute;s instruites de r&eacute;flexion et d&rsquo;analyse.",
            "image" => "",

            "video" => "CQfphKAPS4w",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 10:50:00",
            "published" => "1",
            "date" => "2016-11-17",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Une parole juive contre le racisme",
            "subtitle" => "",
            "info" => "Proposer une parole juive contre le racisme aujourd&rsquo;hui, c&rsquo;est prendre le parti de l&rsquo;universel, contre tous les nationalismes ; de la fraternit&eacute;, contre tous les replis sur soi ; de l&rsquo;action solidaire en faveur des r&eacute;fugi&eacute;s, des Roms, des peuples en lutte contre l&rsquo;oppression.",
            "image" => "",

            "video" => "1_BoixwVawg",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 10:50:00",
            "published" => "1",
            "date" => "2016-10-20",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "ReleÌ€ve-toi",
            "subtitle" => "",
            "info" => "Ce livre est un cri, ou plus exactement trois cris. C&rsquo;est un cri d&rsquo;amour ; amour de la France dans toute sa diversit&eacute;, sa richesse et sa beaut&eacute;. C&rsquo;est aussi un cri de col&egrave;re ; col&egrave;re de constater ce que des g&eacute;n&eacute;rations de politiciens ambitieux, m&eacute;diocres et soumis &agrave; l&rsquo;&eacute;tranger ont fait de la France. C&rsquo;est enfin un cri d&rsquo;espoir ; espoir dans le peuple fran&ccedil;ais pour qu&rsquo;une fois de plus il d&eacute;passe ses contradictions, se rassemble afin de r&eacute;tablir notre ind&eacute;pendance nationale et notre souverainet&eacute; populaire.",
            "image" => "",

            "video" => "uu_x9VlMk7E",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 19:52:00",
            "published" => "1",
            "date" => "2016-09-22",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Le mythe de la culture numeÌrique",
            "subtitle" => "",
            "info" => "Existe-t-il une culture num&eacute;rique authentique, qui se distingue r&eacute;ellement de la &#171;&nbsp;culture d&apos;avant&nbsp;&#187;, celle qu&apos;incarne le livre. A bien y r&eacute;fl&eacute;chir, la r&eacute;ponse ne va pas de soi&#133; Il n&apos;est pas certain que ce que l&apos;on appelle banalement la &#171;&nbsp;culture num&eacute;rique&nbsp;&#187; soit autre chose que du bricolage num&eacute;rique, ce qui reste &egrave; d&eacute;montrer car la &#171;&nbsp;culture num&eacute;rique&nbsp;&#187; ou &#171;&nbsp;l&apos;entr&eacute;e de l&apos;&eacute;cole dans le monde num&eacute;rique&nbsp;&#187;, pour ne prendre que ces deux expressions &egrave; succ&egrave;s, semblent surtout&#133; impens&eacute;es.",
            "image" => "dsmeyugjiukh.jpeg",

            "video" => "QE5AzdurzaU",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 10:50:00",
            "published" => "1",
            "date" => "2016-06-16",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "SouveraineteÌ, deÌmocratie, laiÌˆciteÌ",
            "subtitle" => "",
            "info" => "La nation rassembl&eacute;e et l&rsquo;&eacute;tat d&rsquo;urgence d&eacute;cr&eacute;t&eacute;, nous vivons un moment souverainiste. Mais &agrave; quel prix, et sous quelles conditions, pouvons-nous vivre ensemble ? Cette question fait clivage. Le souverainisme est ce nouveau spectre qui hante le monde. Rien de plus normal pourtant, car la question de la souverainet&eacute; est fondatrice de la d&eacute;mocratie. Elle fonde la communaut&eacute; politique, ce que l&rsquo;on appelle le peuple, et d&eacute;finit un ordre politique. Partout en Europe et dans le monde s&rsquo;exprime la volont&eacute; populaire de retrouver sa souverainet&eacute; qui est la question d&rsquo;aujourd&rsquo;hui.",
            "image" => "",

            "video" => "Lxy2A7oTkmo",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 10:50:00",
            "published" => "1",
            "date" => "2016-05-19",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Chom&#039;actif, 30 ans apreÌ€s",
            "subtitle" => "",
            "info" => "Notre soci&eacute;t&eacute; subit de profondes mutations, la mont&eacute;e inexorable du nombre de personnes au ch&ocirc;mage ou en pr&eacute;carit&eacute;, l&rsquo;automatisation croissante de la production, la peur d&rsquo;&ecirc;tre d&eacute;class&eacute; .... nous oblige &agrave; &ecirc;tre inventifs pour construire des pistes pour l&rsquo;avenir. Autour du th&egrave;me &laquo;&nbsp;temps, travail, argent&nbsp;&raquo;, nous nous proposons de rapidement faire le bilan des trente ann&eacute;es pass&eacute;es et d&rsquo;explorer les pistes pour demain.",
            "image" => "",

            "video" => "XuouAvYEfvs",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 19:53:00",
            "published" => "1",
            "date" => "2016-05-12",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Le changement climatique",
            "subtitle" => "",
            "info" => "La COP 21 est termin&eacute;e. Le r&eacute;chauffement global et le changement du climat sont une r&eacute;alit&eacute; et une menace pour l&apos;ensemble de la plan&egrave;te. La transition &eacute;nerg&eacute;tique devient plus que jamais une n&eacute;cessit&eacute; pour l&apos;humanit&eacute; mais aussi un enjeu local.",
            "image" => "",

            "video" => "MAJt3eptZRM",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 10:50:00",
            "published" => "1",
            "date" => "2016-04-28",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Le salaire aÌ€ vie",
            "subtitle" => "",
            "info" => "Quelle diff&eacute;rence avec le revenu de base, le salaire des fonctionnaires, la s&eacute;curisation des parcours professionnels? 1945 a vu la cr&eacute;ation d&rsquo;une part socialis&eacute;e du salaire via les cotisations, alimentant diff&eacute;rentes caisses (retraites, s&eacute;curit&eacute; sociale, etc.). L&rsquo;extension de ce processus permettrait d&rsquo;aboutir &agrave; la notion de salaire &agrave; vie, attach&eacute; &agrave; la personne, et non pas &agrave; l&rsquo;emploi occup&eacute;. Cette id&eacute;e &eacute;mancipatrice est bien diff&eacute;rente du revenu de base, &laquo;&nbsp;roue de secours du capitalisme&nbsp;&raquo; selon l&rsquo;auteur.",
            "image" => "",

            "video" => "KyaYIjkTk4c",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 20:00:00",
            "published" => "1",
            "date" => "2016-04-21",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Demain le syndicalisme",
            "subtitle" => "",
            "info" => "<p>Face &egrave; la radicalisation du n&eacute;olib&eacute;ralisme, le syndicalisme doit retrouver sa boussole.Pour une r&eacute;novation du syndicalisme qui allie protection sociale et &eacute;mancipation.Un manuel syndical d&rsquo;alternatives et d&rsquo;innovation.Le n&eacute;olib&eacute;ralisme ne fait pas myst&egrave;re de sa d&eacute;claration de guerre aux syndicats et du choix qui leur serait laiss&eacute; : se soumettre ou dispara&icirc;tre.<\/p>",
            "image" => "vqnhgmlqzoxj.png",

            "video" => "Hus7uvZyExw",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 20:01:00",
            "published" => "1",
            "date" => "2016-04-14",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "les droits de la Terre MeÌ€re",
            "subtitle" => "",
            "info" => "&#171;&nbsp;Pourrait-on imaginer que la nature se rebelle et se mette &egrave; poursuivre en justice tous ceux qui la d&eacute;truisent ?&#187; Un sc&eacute;nario de film fantastique devenu r&eacute;alit&eacute; en Equateur avec l&apos;affaire Rio Vilcabamba contre l&apos;Etat de Loja en 2011. Une rivi&egrave;re contre un &eacute;tat. Un cas d&apos;&eacute;cole qui a permis &egrave; ce pays d&apos;appliquer un &#171;&nbsp;principe de juridiction universelle&nbsp;&#187;: en effet chacun peut saisir la cour de justice au nom de la nature. Un nouvel ordre juridique qui, en Bolivie, permet aussi de repr&eacute;senter tous les &ecirc;tres pass&eacute;s, pr&eacute;sents et&#133;&egrave; venir.&#187;",
            "image" => "",

            "video" => "T-ZnXT03bZk",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 10:50:00",
            "published" => "1",
            "date" => "2016-04-14",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "L&#039;empire de la surveillance",
            "subtitle" => "",
            "info" => "Les spectaculaires r&eacute;v&eacute;lations du lanceur d&rsquo;alerte Edward Snowden ont permis au plus grand nombre de d&eacute;couvrir que la protection de notre vie priv&eacute;e est d&eacute;sormais menac&eacute;e par la surveillance de masse &agrave; laquelle nous soumettent les merveilleux outils (smartphones, tablettes, ordinateurs) qui devaient &eacute;largir notre espace de libert&eacute;&hellip; Pourtant, on mesure encore mal &agrave; quel point, et de quelle fa&ccedil;on, nous sommes espionn&eacute;s et donc contr&ocirc;l&eacute;s.",
            "image" => "",

            "video" => "Y7q21UmOR3c",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 10:50:00",
            "published" => "1",
            "date" => "2016-03-31",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Vers un Moyen Orient sans armes nucleÌaires",
            "subtitle" => "",
            "info" => "Si l&rsquo;on veut vraiment mettre un coup d&rsquo;arr&ecirc;t &agrave; la prolif&eacute;ration nucl&eacute;aire au Moyen-Orient, il faut sortir du deux poids deux mesures. Pourquoi Isra&euml;l a droit &agrave; la bombe et pas les autres pays&nbsp;? Poser cette question souligne toute l&rsquo;absurdit&eacute; de l&rsquo;attitude actuelle, car ce qui alimente la prolif&eacute;ration et le risque d&rsquo;une guerre nucl&eacute;aire dans cette r&eacute;gion du monde est bien la possession par Isra&euml;l de cette arme de destruction massive.",
            "image" => "",

            "video" => "TS_48u-WeKw",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 10:50:00",
            "published" => "1",
            "date" => "2016-03-10",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Les anarchistes",
            "subtitle" => "",
            "info" => "Depuis un si&egrave;cle et demi, des pr&eacute;mices de l&rsquo;anarchie en 1840 aux ann&eacute;es 2000, le mouvement libertaire nourrit l&rsquo;imaginaire collectif et tient un r&ocirc;le &agrave; part au sein du mouvement social. Syndicalistes, ill&eacute;galistes, communistes libertaires et partisans des &laquo;&nbsp;milieux libres&nbsp;&raquo; n&rsquo;ont eu de cesse de l&rsquo;enrichir et de contribuer &agrave; sa richesse ainsi qu&rsquo;&agrave; sa diversit&eacute;.",
            "image" => "",

            "video" => "EqSWCB74SHg",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 20:01:00",
            "published" => "1",
            "date" => "2016-03-03",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Le nouvel ordre deÌmocratique",
            "subtitle" => "",
            "info" => "Le syst&egrave;me d&eacute;mocratique fran&ccdil;ais se disloque sous nos yeux. La gauche encha&icirc;ne les d&eacute;routes &eacute;lectorales et la droite s&apos;enferre dans ses impasses. Cet affaissement se traduit dans les bulletins de vote, les mouvements de l&apos;opinion, les mutations id&eacute;ologiques, et m&ecirc;me la r&eacute;cente production litt&eacute;raire. Il lib&egrave;re un espace d&apos;o&ograve; &eacute;merge un Front national conqu&eacute;rant ...",
            "image" => "",

            "video" => "FSp6tRgko20",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 10:50:00",
            "published" => "1",
            "date" => "2016-02-25",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Les enfants cacheÌs de Pinochet",
            "subtitle" => "",
            "info" => "Depuis la fin 1998, en Am&eacute;rique latine, des chefs d&rsquo;Etat de gauche ou de centre gauche occupent le pouvoir. Des coups d&rsquo;Etat, pronunciamientos et autres tentatives de d&eacute;stabilisation ont affect&eacute; le Venezuela (2002, 2014 et 2015), Ha&iuml;t&iacute; (2004), la Bolivie (2008), le Honduras (2009), l&rsquo;Equateur (2010) et le Paraguay (2012)...",
            "image" => "",

            "video" => "wXstgHYmwOo",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 10:50:00",
            "published" => "1",
            "date" => "2016-02-18",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Jesus selon Mahomed",
            "subtitle" => "",
            "info" => "J&eacute;sus occupe dans le Coran une place &eacute;minente. C&rsquo;est de cette surprise que J&eacute;rome Prieur et G&eacute;rard Mordillat sont partis. Bien que le Livre sacr&eacute; de l&rsquo;islam soit un texte difficile &agrave; appr&eacute;hender pour les non-musulmans, il existe des points de contacts qui leur en permettent la lecture : une lecture critique &agrave; la fois litt&eacute;raire et historique.",
            "image" => "",

            "video" => "lFq-YwC4P7Q",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 19:10:00",
            "published" => "1",
            "date" => "2016-02-04",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "N&eacute;olib&eacute;ralisme et crise de la dette",
            "subtitle" => "",
            "info" => "Lorsque la socialisation des dettes priv&eacute;es &eacute;leva le mur de la dette publique, le capitalisme financiaris&eacute; s&apos;av&eacute;ra, comme pr&eacute;visible, incapable de le franchir. Une sortie de crise v&eacute;ritable implique de d&eacute;mondialiser, ce qui sonne l&apos;heure de la r&eacute;publique sociale et de la repolitisation de la monnaie. Car seul un retour au projet r&eacute;publicain de Jaur&egrave;s va dans le sens de l&apos;Histoire.",
            "image" => "",

            "video" => "zOcJgz5BeN4",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 20:02:00",
            "published" => "1",
            "date" => "2016-01-21",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Les 7 laiÌˆciteÌs francÌ§aises",
            "subtitle" => "",
            "info" => "Fruit d&apos;une longue histoire conflictuelle opposant tout au long du XIXe si&egrave;cle deux visions de la France - celle de ceux qui veulent que la France redevienne &#171;&nbsp;la fille a&icirc;n&eacute;e de l&apos;&Eacute;glise (catholique)&nbsp;&#187; et celle de ceux qui pensent que la France moderne doit &ecirc;tre la fille de la R&eacute;volution de 1789 - jusqu&apos;&egrave; la loi de s&eacute;paration qui permet une pacification progressive de ce &#171;&nbsp;conflit des deux France&nbsp;&#187; et la construction de ce que j&apos;appelle &#171;&nbsp;le pacte la&iuml;que&nbsp;&#187;, la la&iuml;cit&eacute; est, &egrave; la fois, un r&egrave;glement juridique et un art de vivre ensemble.",
            "image" => "",

            "video" => "lgQ92B_4CW8",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 10:50:00",
            "published" => "1",
            "date" => "2016-01-14",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "L&#039;eÌconomie sociale et solidaire",
            "subtitle" => "",
            "info" => "En dix le&ccedil;ons magistrales, Herv&eacute; Defalvard d&eacute;construit m&eacute;thodiquement les postulats dominants. Il les replace dans leur contexte historique, celle d&rsquo;une conception r&eacute;tr&eacute;cie de l&rsquo;&eacute;conomie &agrave; qui les grands pr&ecirc;tres du n&eacute;olib&eacute;ralisme ont depuis trente ans &ocirc;t&eacute; toute dimension humaine et morale trahissant ainsi, sans oser l&rsquo;avouer, les p&egrave;res du lib&eacute;ralisme comme Adam Smith et Turgot. Loin de se limiter &agrave; cette critique, cet ouvrage montre que l&rsquo;&eacute;conomie peut &ecirc;tre &agrave; la fois sociale, solidaire et efficace. Le temps est en effet venu de d&eacute;passer les logiques infirmes du march&eacute;. L&rsquo;alternative ne consiste pas &agrave; d&eacute;l&eacute;guer &agrave; l&rsquo;Etat le soin de tout g&eacute;rer, elle est de travailler &agrave; la construction de biens communs qui b&eacute;n&eacute;ficient &agrave; tous.",
            "image" => "",

            "video" => "-e_UbXmkF9k",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 10:50:00",
            "published" => "1",
            "date" => "2015-12-17",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Vagabondage d&#039;un faucheur volontaire",
            "subtitle" => "",
            "info" => "Initiateur du mouvement des Faucheurs Volontaires, qui organise la lutte de la soci&eacute;t&eacute; civile contre la diss&eacute;mination incontr&ocirc;l&eacute;e et irr&eacute;versible des OGM. Aux c&ocirc;t&eacute;s de Jos&eacute; Bov&eacute; notamment, il a particip&eacute; &agrave; de nombreux fauchages et a &eacute;t&eacute; plusieurs fois condamn&eacute;.",
            "image" => "",

            "video" => "gD1R_c6zsWs",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 10:50:00",
            "published" => "1",
            "date" => "2015-12-10",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Aux origines du carcan europeÌen",
            "subtitle" => "",
            "info" => "Seule la r&eacute;cente crise, n&eacute;e d&rsquo;une &laquo;&nbsp;&eacute;pid&eacute;mie&nbsp;&raquo; financi&egrave;re, aurait fait &laquo;&nbsp;d&eacute;river&nbsp;&raquo; le noble projet europ&eacute;en. &laquo;&nbsp;D&eacute;rive&nbsp;&raquo; r&eacute;cente d&rsquo;une &laquo;&nbsp;Europe sociale&nbsp;&raquo; ou &laquo;&nbsp;alibi europ&eacute;en&nbsp;&raquo; indispensable &agrave; la maximisation du profit monopoliste. Annie Lacroix-Riz d&eacute;crit, sources &agrave; l&rsquo;appui, la strat&eacute;gie, depuis le d&eacute;but du xxe si&egrave;cle, d&rsquo;effacement du grand capital fran&ccedil;ais devant ses deux grands alli&eacute;s-rivaux h&eacute;g&eacute;moniques, l&rsquo;Allemagne et les &Eacute;tats-Unis.",
            "image" => "",

            "video" => "EyzcW-bpsp0",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 20:03:00",
            "published" => "1",
            "date" => "2015-12-03",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "La poeÌsie sauvera le monde   ",
            "subtitle" => "",
            "info" => "Le d&eacute;ni de la po&eacute;sie n&apos;est pas une affaire litt&eacute;raire, il est politique. Lui d&eacute;nier toute dimension socialement transgressive et agissante, c&apos;est qu&apos;on le veuille ou non un choix politique. Se priver de la saisie particuli&egrave;re de la r&eacute;alit&eacute; que la po&eacute;sie op&egrave;re dans le po&egrave;me, c&apos;est amoindrir fondamentalement la compr&eacute;hension collective du monde.",
            "image" => "",

            "video" => "gsaHiDgIMDo",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 10:50:00",
            "published" => "1",
            "date" => "2015-11-12",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Mai 68, un paveÌ dans leur histoire",
            "subtitle" => "",
            "info" => "Qui sont celles et ceux qui ont fait Mai 68 ? Pourquoi et comment leurs trajectoires individuelles sont-elles entr&eacute;es dans l&rsquo;histoire ? En portent-ils encore aujourd&rsquo;hui les marques ? Quel a &eacute;t&eacute; l&rsquo;impact de leur militantisme sur leurs enfants ? L&rsquo;ouvrage vient r&eacute;habiliter une histoire plurielle de Mai 68, largement ensevelie au fil des c&eacute;l&eacute;brations d&eacute;cennales des &eacute;v&egrave;nements.",
            "image" => "",

            "video" => "RdxhoxduB_k",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 20:03:00",
            "published" => "1",
            "date" => "2015-10-15",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Changement de paradigme en geÌopolitique",
            "subtitle" => "",
            "info" => "La perte d&apos;influence du dollar et la dette abyssale am&eacute;ricaine marquent le d&eacute;clin des Etats-Unis qui auront domin&eacute; le 20&egrave;me si&egrave;cle. La mont&eacute;e en puissance d&apos;organismes tels que les BRICS (Br&eacute;sil, Russie, Inde, Chine, Afrique du Sud) et l&apos;OCS (Organisme de Coop&eacute;ration de Shanga&iuml;) ouvre la voie &egrave; un 21&egrave;me si&egrave;cle multipolaire. Mais la France enferm&eacute;e dans l&apos;Union Europ&eacute;enne (elle-m&ecirc;me colonis&eacute;e par les USA) sera du c&ocirc;t&eacute; des perdants.",
            "image" => "",

            "video" => "CHh_VeChGBg",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 10:50:00",
            "published" => "1",
            "date" => "2015-10-08",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Le pouvoir illeÌgal des eÌlites",
            "subtitle" => "",
            "info" => "Nos d&eacute;mocraties contemporaines et lib&eacute;rales ont progressivement laiss&eacute; la place &agrave; une gouvernance ad&eacute;mocratique, chaotique, et ill&eacute;gale. En exploitant les failles de notre syst&egrave;me &agrave; leur avantage, la classe des dirigeants s&rsquo;assure un pouvoir supr&ecirc;me, tandis que les citoyens se sacrifient toujours plus. Quelle est l&rsquo;&eacute;tendue du pouvoir ill&eacute;gal des &eacute;lites ? Et que faire pour changer les choses ?",
            "image" => "",

            "video" => "QC57I9iBPeE",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 10:50:00",
            "published" => "1",
            "date" => "2015-10-01",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "L&#039;Etat francÌ§ais complice de groupes criminels",
            "subtitle" => "",
            "info" => "Dirigeants politiques et hauts-fonctionnaires de l&rsquo;&Eacute;tat fran&ccedil;ais, ils collaborent avec des criminels et des terroristes. Hier, ils ont prot&eacute;g&eacute; certains d&rsquo;entre eux des recherches de l&rsquo;Organisation internationale de la police criminelle (Interpol). Aujourd&rsquo;hui, ils en soutiennent d&rsquo;autres pour renverser le gouvernement syrien. Voici les faits et les preuves de ces affaires d&rsquo;&Eacute;tat au c&oelig;ur de l&rsquo;&Eacute;tat&hellip;",
            "image" => "",

            "video" => "dyGgxOxbVT0",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 10:50:00",
            "published" => "1",
            "date" => "2015-09-17",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Le groupe Bilderberg",
            "subtitle" => "",
            "info" => "",
            "image" => "",

            "video" => "UUdSjY_oRvU",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 10:50:00",
            "published" => "1",
            "date" => "2015-06-11",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Le sionisme en question",
            "subtitle" => "",
            "info" => "Le sionisme est &agrave; la fois une fausse r&eacute;ponse &agrave; l&#039;antis&eacute;mitisme, un nationalisme, un colonialisme et une manipulation de l&#039;histoire, de la m&eacute;moire et des identit&eacute;s juives. La question du sionisme est centrale comme l&#039;&eacute;tait celle de l&#039;aparth&eacute;id quand il a fallu imaginer un autre avenir pour l&#039;Afrique du sud...",
            "image" => "",

            "video" => "enF72p6ARCE",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 10:50:00",
            "published" => "1",
            "date" => "2015-06-04",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Partenariats public priveÌ",
            "subtitle" => "",
            "info" => "Nouvel eldorado des grands groupes financiers, le &nbsp;&raquo;partenariat public-priv&eacute;&quot; confie &agrave; un op&eacute;rateur priv&eacute; la ma&icirc;trise d&#039;ouvrage et l&#039;exploitation d&#039;un &eacute;quipement collectif, contre un loyer de tr&egrave;s longue dur&eacute;e. Derri&egrave;re la nouveaut&eacute; juridique, se cache un outil puissant d&#039;expropriatio des citoyens et de la puissance publique.",
            "image" => "",

            "video" => "zJw8fjEYE38",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 20:04:00",
            "published" => "1",
            "date" => "2015-05-07",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Parlons banque",
            "subtitle" => "",
            "info" => "Lehman Brothers, Dexia, Royal Bank of Scotland&#133; les banques, on s&apos;en souvient, ont &eacute;t&eacute; au cÅ“ur de la crise financi&egrave;re qui s&apos;est ouverte en 2007. Des plans de sauvetage ont &eacute;t&eacute; lanc&eacute;s pour sauver celles jug&eacute;es trop importantes pour faire faillite. Mais comment au juste, fonctionnent les banques ? Comment g&egrave;rent-elles les risques ? Qui les contr&ocirc;le ?",
            "image" => "",

            "video" => "8e9NN2kO2fY",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-12-04 15:15:00",
            "published" => "1",
            "date" => "2015-04-30",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "La Nakba",
            "subtitle" => "",
            "info" => "<p>Plusieurs dizaines d&rsquo;ann&eacute;es apr&egrave;s sa cr&eacute;ation, l&rsquo;&Eacute;tat d&rsquo;Isra&euml;l s&rsquo;est dot&eacute; d&rsquo;une loi punissant la c&eacute;l&eacute;bration de la Nakba, nom que les Palestiniens donnent &agrave; l&rsquo;expulsion des trois quarts d&rsquo;entre eux entre 1947 et 1949. C&rsquo;est dire combien cet &eacute;v&eacute;nement p&egrave;se dans la m&eacute;moire des deux peuples. En analysant les m&eacute;canismes de refoulement de cette m&eacute;moire, l&rsquo;&eacute;tude nous plonge au c&oelig;ur de la mentalit&eacute; juive isra&eacute;lienne.<\/p>",
            "image" => "201504301000.jpg",

            "video" => "lGuKvYEU3Lk",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-12-04 15:19:00",
            "published" => "1",
            "date" => "2015-04-09",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Les transclasses ou la non reproduction",
            "subtitle" => "",
            "info" => "<p>La th&eacute;orie de la reproduction sociale admet des exceptions dont il faut rendre compte pour en mesurer la port&eacute;e. Cet ouvrage a pour but de comprendre philosophiquement le passage exceptionnel d&#039;une classe &agrave; l&#039;autre et de forger une m&eacute;thode d&#039;approche des cas particuliers. <\/p>",
            "image" => "201504091000.jpg",

            "video" => "VB6U-gwEzkA",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-12-04 15:23:00",
            "published" => "1",
            "date" => "2015-04-02",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Le football dans Paris et ses banlieues.",
            "subtitle" => "",
            "info" => "Sport devenu au cours du XXe si&egrave;cle le plus populaire en Europe, le football peine &agrave; trouver dans Paris et ses banlieues le succ&egrave;s et le soutien qu&rsquo;on lui accorde dans la plupart des capitales europ&eacute;ennes et des grandes m&eacute;tropoles fran&ccedil;aises.",
            "image" => "201504021000.webp",

            "video" => "hTxVYr6UKMs",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-12-04 15:26:00",
            "published" => "1",
            "date" => "2015-03-26",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Une histoire de RAP en France",
            "subtitle" => "",
            "info" => "Comment le rap est-il n&eacute; en France et comment s&rsquo;est-il d&eacute;velopp&eacute; ? Qui a tir&eacute; profit de la commercialisation de ses chansons ? Pourquoi ce genre musical est-il si &eacute;troitement associ&eacute; aux banlieues ? Qui sont les artistes qui l&rsquo;ont promu, et en s&rsquo;appuyant sur quelles ressources ? Pourquoi continue-t-il r&eacute;guli&egrave;rement &agrave; d&eacute;cha&icirc;ner les passions ?",
            "image" => "201503261100.gif",

            "video" => "Xrz5L4eLsLw",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-12-04 15:27:00",
            "published" => "1",
            "date" => "2015-03-19",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Le communisme deÌsarmeÌ",
            "subtitle" => "",
            "info" => "Le communisme a autant &eacute;t&eacute; d&eacute;sarm&eacute; par ses adversaires socialistes et de droite, dans un contexte d&rsquo;offensive n&eacute;olib&eacute;rale, qu&rsquo;il s&rsquo;est d&eacute;sarm&eacute; lui-m&ecirc;me en abandonnant l&rsquo;ambition de repr&eacute;senter prioritairement les classes populaires. Analyse du d&eacute;clin d&rsquo;un parti qui avait produit une &eacute;lite politique ouvri&egrave;re, ce livre propose une r&eacute;flexion sur la construction d&rsquo;un outil de lutte collectif contre l&rsquo;exclusion politique des classes populaires.",
            "image" => "201503191100.webp",

            "video" => "UmlRHy4mckw",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 20:04:00",
            "published" => "1",
            "date" => "2015-03-05",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "TraiteÌ Transatlantique",
            "subtitle" => "",
            "info" => "Aujourd&rsquo;hui &egrave; Bruxelles et aux Etats-Unis, se joue la signature d&rsquo;un trait&eacute; qui risque de changer radicalement la vie de centaines de millions de citoyens am&eacute;ricains et europ&eacute;ens",
            "image" => "201503051100.jpg",

            "video" => "kcs-jq3qRKw",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 10:50:00",
            "published" => "1",
            "date" => "2015-02-26",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Le monde romain",
            "subtitle" => "",
            "info" => "Le monde romain de 70 av. JC &agrave; 73 apr&egrave;s JC.",
            "image" => "",

            "video" => "K8Seh5CNX00",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 20:04:00",
            "published" => "1",
            "date" => "2015-01-29",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "La gauche radicale et ses tabous",
            "subtitle" => "",
            "info" => "Pour aller au bout de sa logique, le parti de gauche doit pr&ocirc;ner la sortie de l&rsquo;Union europ&eacute;enne.",
            "image" => "",

            "video" => "i15w8ngORMU",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-27 10:50:00",
            "published" => "1",
            "date" => "2015-01-22",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Europe Les Etats deÌsunis",
            "subtitle" => "",
            "info" => "Epuis&eacute;s par la rigueur &eacute;conomique, de plus en plus d&eacute;fiants vis&agrave; vis de la construction europ&eacute;enne, les peuples europ&eacute;ens ne comptent plus sur leurs dirigeants pour t&acirc;cher d&#039;en infl&eacute;chir le cours...",
            "image" => "",

            "video" => "iSz5CgWiOyo",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-19 22:38:00",
            "published" => "1",
            "date" => "2022-06-16",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "D&eacute;faire le capitalisme, refaire la d&eacute;mocratie",
            "subtitle" => "",
            "info" => "<p>A l&rsquo;heure o&ograve; la critique antisyst&egrave;me nourrit les ennemis de la d&eacute;mocratie, il est temps de passer de la d&eacute;construction &egrave; la reconstruction, de la mise en lumi&egrave;re des dysfonctionnements r&eacute;guliers &egrave; l&rsquo;&eacute;clairage des fonctionnements alternatifs, de la soumission au d&eacute;sespoir du r&eacute;el &egrave; l&rsquo;esp&eacute;rance constructive de l&rsquo;utopie. La t&acirc;che la plus urgente du chercheur est d&rsquo;ouvrir, &egrave; nouveau, l&rsquo;espace des possibles.<\/p>",
            "image" => "xnsviikmmclg.png",

            "video" => "",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-19 22:38:00",
            "published" => "1",
            "date" => "2022-06-16",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "&#171;&nbsp;Habiter le monde&nbsp;&#187;",
            "subtitle" => "(Parce qu&rsquo;il en est ainsi de notre condition humaine)",
            "info" => "<p>&#171; Habiter le monde\/aux origines de notre temps&nbsp;&#187; a pour ambition de revisiter cinq si&egrave;cles de domination occidentale par le prisme des grandes repr&eacute;sentations &eacute;conomiques qui s&apos;y sont succ&eacute;d&eacute;es.<\/p><p>Cet exercice est retenu comme un pr&eacute;alable essentiel, apr&egrave;s la crise des Subprimes et de la Covid 19 et alors que les canons tonnent tout pr&egrave;s et que le Giec ne cesse de nous alerter, pour comprendre les enjeux de la pr&eacute;sidentielle et nourrir le d&eacute;bat d&eacute;mocratique.<\/p>",
            "image" => "avbbnuinllll.png",

            "video" => "",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-28 14:53:00",
            "published" => "1",
            "date" => "2022-04-07",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "La cryptomonnaie",
            "subtitle" => "",
            "info" => "<p>Technologie connue seulement par les plus aguerris depuis le d&eacute;but des ann&eacute;es 2010, les cryptomonnaies sont d&eacute;sormais tr&egrave;s populaire au monde. Cette r&eacute;volution du monde mon&eacute;taire et num&eacute;rique s&rsquo;est vue propuls&eacute;e par la pand&eacute;mie et ses cons&eacute;quences catastrophiques pour les monnaies fiduciaires. La volont&eacute; d&rsquo;avoir un nouveau syst&egrave;me mon&eacute;taire, 100% d&eacute;centralis&eacute;, a fait grimper le cours du Bitcoin, locomotive de cette nouvelle technologie. Mais alors que leur fonction premi&egrave;re &eacute;tait de servir de nouveaux moyens d&rsquo;&eacute;change, les sp&eacute;culations ont vite pris le pas et sont d&eacute;sormais, la seule utilit&eacute; de la plupart des cryptomonnaies. C&rsquo;est alors, logiquement, que la question de la r&eacute;elle utilit&eacute; de cette technologie doit &ecirc;tre pos&eacute;e.<\/p>",
            "image" => "202204071000.png",

            "video" => "",
            "canceled" => "1"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-19 22:38:00",
            "published" => "1",
            "date" => "2022-06-16",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "&#171;&nbsp;Comment l&rsquo;&eacute;tat s&rsquo;attaque &egrave; nos libert&eacute;s&nbsp;&#187;",
            "subtitle" => "",
            "info" => "<p>&#171; Surveill&eacute;s et punis &#187; propose de faire le point pour comprendre comment en vingt ans les autorit&eacute;s ont rogn&eacute; nos droits. Pourquoi et comment avons-nous laiss&eacute; faire ? Si un gouvernement x&eacute;nophobe et autoritaire arrivait au pouvoir, quels outils aurait-il &egrave; sa disposition ? Quels garde-fous nous prot&egrave;gent encore ? Cet ouvrage est aussi un appel &egrave; un &eacute;lan citoyen.<\/p><p>Fallait-il vivre un confinement mondial au printemps 2020 pour se rendre compte que, du karcher sarkoziste &egrave; la &#171; guerre &#187; contre la covid en passant par les &eacute;tats d&apos;urgence terroriste, nous avons progressivement renonc&eacute; &egrave; des libert&eacute;s fondamentales.<\/p>",
            "image" => "pjhuwnfouvfd.png",

            "video" => "",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-19 22:39:00",
            "published" => "1",
            "date" => "2022-06-16",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "5G mon amour",
            "subtitle" => "Enqu&ecirc;te sur la face cach&eacute;e des r&eacute;seaux mobiles",
            "info" => "<p>Comment et par qui les normes, cens&eacute;es nous prot&eacute;ger, ont-elles &eacute;t&eacute; mises en place ? Quels liens entre op&eacute;rateurs t&eacute;l&eacute;phoniques, m&eacute;dias et gouvernements ? Quels sont les effets de cette technologie sur la sant&eacute; humaine et le vivant ?<\/p>",
            "image" => "ueafavtyubeg.png",

            "video" => "",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-19 22:39:00",
            "published" => "1",
            "date" => "2022-06-16",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Les Grands patrons en France",
            "subtitle" => "du capitalisme d&rsquo;&eacute;tat &egrave; la financiarisation",
            "info" => "<p>Qui sont les grands patrons en France ? D&rsquo;o&ograve; viennent-ils et comment sont-ils parvenus &egrave; la t&ecirc;te des plus grandes entreprises fran&ccdil;aises ? La crise conduit &egrave; s&rsquo;interroger sur les &eacute;lites et leur l&eacute;gitimit&eacute; &egrave; exercer le pouvoir &eacute;conomique. Analysant les r&eacute;seaux, les relations d&rsquo;affaire, origines sociales et parcours de s grands patrons fran&ccdil;ais, les auteurs montrent que cette mutation a &eacute;t&eacute; largement conduite par les anciennes &eacute;lites administratives, qui se sont converties aux vertus du lib&eacute;ralisme et du capitalisme financier.<\/p>",
            "image" => "wzgqyynawptb.png",

            "video" => "",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2023-11-28 15:20:00",
            "published" => "1",
            "date" => "2021-12-01",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Je veux d&eacute;cider du travail jusqu&#039;&agrave; ma mort",
            "subtitle" => "Conf&eacute;rence organis&eacute;e par les Rencontres Philosophiques Clermontoises en partenariat avec Les Amis du Temps des Cerises et la librairie Les Volcans",
            "info" => "<p>&laquo; N&rsquo;esp&eacute;rons pas en finir avec l&rsquo;ind&eacute;cente p&eacute;riode dite d&rsquo;insertion des jeunes &laquo; avant le travail &raquo; qui condamne les 18-30 ans &agrave; la pauvret&eacute;, ni avec les p&eacute;riodes &laquo; sans travail &raquo; du ch&ocirc;mage, si nous continuons &agrave; accepter qu&rsquo;existe une p&eacute;riode &laquo; apr&egrave;s le travail &raquo;, la retraite. Soyons &agrave; la hauteur du droit au salaire continu&eacute; des fonctionnaires, &eacute;tendu au priv&eacute; en 1946 dans le r&eacute;gime g&eacute;n&eacute;ral et aussit&ocirc;t r&eacute;cus&eacute; par le patronat qui invente en 1947 l&rsquo;Agirc, suivi de l&rsquo;Arrco, et leurs comptes &agrave; points que Macron veut g&eacute;n&eacute;raliser &raquo;. Bernard Friot refuse d&rsquo;&ecirc;tre confin&eacute; dans un b&eacute;n&eacute;volat qui nie sa contribution &agrave; la production et le marginalise. Il pose la question : pourquoi attendons-nous la retraite pour faire ce que nous d&eacute;sirons faire ? Pourquoi pas nous organiser pour conqu&eacute;rir la souverainet&eacute; sur notre travail ? Et comment faire du salaire un droit politique, de 18 ans &agrave; la mort ?<\/p>",
            "image" => "202112011100.png",

            "video" => "",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-19 22:40:00",
            "published" => "1",
            "date" => "2022-06-16",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "La non &eacute;puration en France de 1943 aux ann&eacute;es 50",
            "subtitle" => "",
            "info" => "<p>Y a-t-il vraiment eu en France une politique d&rsquo;&eacute;puration ? L&rsquo;auteure explore cette question tout au long de son ouvrage dans lequel elle d&eacute;montre que l&rsquo;&eacute;puration criminalis&eacute;e ayant suivie la Lib&eacute;ration (femmes tondues, cours martiales, ex&eacute;cutions) a cherch&eacute; &egrave; camoufler la non-&eacute;puration, ausi bien de la part des minist&egrave;res de l&rsquo;int&eacute;rieur et de la justice que de celle des milieux financiers, de la magistrature, des journalistes, des hommes politiques, voire de l&rsquo;&Eacute;glise.<\/p><p>De nombreux anciens collaborateurs ont ainsi b&eacute;n&eacute;fici&eacute; de &#171;&nbsp;grands protecteurs&nbsp;&#187;.<\/p>",
            "image" => "202110071000.jpeg",

            "video" => "",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-19 22:40:00",
            "published" => "1",
            "date" => "2022-06-16",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "H&eacute;ritage et Fermeture",
            "subtitle" => "Une &eacute;cologie du d&eacute;mant&egrave;lement",
            "info" => "<p>Nous d&eacute;pendons pour notre subsistance d&apos;un &#171;monde organis&eacute;&#187;, tram&eacute; par l&apos;industrie et le management. Ce monde menace aujourd&apos;hui de s&apos;effondrer. Alors que les mouvements progressistes r&ecirc;vent de monde commun, nous h&eacute;ritons contre notre gr&eacute; de communs moins bucoliques, &#171;n&eacute;gatifs&#187;, &egrave; l&apos;image des fleuves et sols contamin&eacute;s, des industries polluantes, des cha&icirc;nes logistiques ou encore des technologies num&eacute;riques. Que faire de ce lourd h&eacute;ritage dont d&eacute;pendent &egrave; court terme des milliards de personnes, alors qu&apos;il les condamne &egrave; moyen terme? Nous n&apos;avons pas d&apos;autre choix que d&apos;apprendre, en urgence, &egrave; destaurer, fermer et r&eacute;affecter ce patrimoine. Et ce, sans liquider les enjeux de justice et de d&eacute;mocratie. Contre le front de modernisation et son anthropologie du projet, de l&apos;ouverture et de l&apos;innovation, il reste &egrave; inventer un art de la fermeture et du d&eacute;mant&egrave;lement: une (anti)&eacute;cologie qui met &#171;les mains dans le cambouis&#187;.<\/p>",
            "image" => "202109161000.jpg",

            "video" => "",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 19:29:00",
            "published" => "1",
            "date" => "2020-03-12",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "&#171;&nbsp;La guerre sociale en France&nbsp;&#187;",
            "subtitle" => "Aux sources &eacute;conomiques de la d&eacute;mocratie autoritaire",
            "info" => "<p>La tentation d&apos;un pouvoir autoritaire dans la France de 2019 trouve ses racines dans le projet &eacute;conomique du candidat Macron.<\/p><p>Depuis des d&eacute;cennies, la pens&eacute;e n&eacute;olib&eacute;rale m&egrave;ne une guerre larv&eacute;e contre le mod&egrave;le social fran&ccdil;ais de l&apos;apr&egrave;s-guerre. La r&eacute;sistance d&apos;une population refusant des politiques en faveur du capital a abouti &egrave; un mod&egrave;le mixte, int&eacute;grant des &eacute;l&eacute;ments n&eacute;olib&eacute;raux plus mod&eacute;r&eacute;s qu&apos;ailleurs, et au maintien de plus en plus pr&eacute;caire d&apos;un compromis social. &Agrave; partir de la crise de 2008, l&apos;offensive n&eacute;olib&eacute;rale s&apos;est radicalis&eacute;e, dans un rejet complet de tout &eacute;quilibre.<\/p><p>Emmanuel Macron appara&icirc;t alors comme l&apos;homme de la revanche d&apos;un capitalisme fran&ccdil;ais qui jadis a combattu et vaincu le travail, avec l&apos;appui de l&apos;&Eacute;tat, mais qui a d&ucirc; accepter la m&eacute;diation publique pour &#171; civiliser &#187; la lutte de classes. Arriv&eacute; au pouvoir sans disposer d&apos;une adh&eacute;sion majoritaire &egrave; un programme qui renverse cet &eacute;quilibre historique, le Pr&eacute;sident fait face &egrave; des oppositions h&eacute;t&eacute;roclites mais qui toutes rejettent son projet n&eacute;olib&eacute;ral, largement &egrave; contretemps des enjeux de l&apos;&eacute;poque. Le pouvoir n&apos;a ainsi d&apos;autre solution que de durcir la d&eacute;mocratie par un exc&egrave;s d&apos;autorit&eacute;. Selon une m&eacute;thode classique du n&eacute;olib&eacute;ralisme : de l&apos;&eacute;puisement de la soci&eacute;t&eacute; doit provenir son ob&eacute;issance.<\/p>",
            "image" => "yjuphjlwtdlx.png",

            "video" => "",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2024-01-16 11:51:00",
            "published" => "1",
            "date" => "2024-01-18",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Il n&rsquo;y a que moi que &ccedil;a choque ?",
            "subtitle" => "Huit ans dans la bulle des journalistes politiques",
            "info" => "<p>Les liens d&rsquo;interd&eacute;pendance &ndash; on pourrait dire les obligeances r&eacute;ciproques &ndash;, le off et les d&eacute;jeuners avec les politiques, les relations avec les autres journalistes : Rachid La&iuml;reche chronique de l&rsquo;int&eacute;rieur l&rsquo;entre-soi et la superficialit&eacute; du journalisme politique. Ayant occup&eacute; la fonction &agrave; Lib&eacute;ration pendant huit ans, il raconte, au fil des pages, son apprentissage des codes et des pratiques, sa progressive mise en conformit&eacute; avec les attendus de ses chefs et son immersion dans le monde social de ses confr&egrave;res et cons&oelig;urs. Puis son malaise et sa prise de distance avec un m&eacute;tier enferm&eacute; dans sa &laquo; bulle &raquo; et qui se limite bien trop souvent &agrave; une &laquo; chronique de la courtisanerie &raquo;. Publier un article bienveillant pour gagner les faveurs d&rsquo;une source, d&eacute;jeuner avec un pr&eacute;sident de la R&eacute;publique et lui poser des questions futiles, traiter de sujets de fond sans n&rsquo;y rien conna&icirc;tre&hellip; la succession d&rsquo;anecdotes dessine ainsi, au fur et &agrave; mesure, un portrait (auto)critique.<\/p><p>Au fil des pages, il nous entra&icirc;ne dans les coulisses de ses rencontres avec Hollande, M&eacute;lenchon, Duflot, Dray, Taubira, Rousseau ou Jadot. Il d&eacute;crypte les rites de la meute des journalistes politiques, les codes de l&rsquo;entre-soi, la d&eacute;r&eacute;alisation collective de la bulle.<\/p><p><br><\/p><p>Ironique, instructif et &eacute;mouvant, son r&eacute;cit met &agrave; nu la profondeur du mal d&eacute;mocratique.<\/p><p><br><\/p><p><br><\/p>",
            "image" => "202401181100.jpeg",

            "video" => "ebysAYIhR78",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2024-12-23 23:22:00",
            "published" => "1",
            "date" => "2024-02-15",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "L&rsquo;&Eacute;tat hors-la-loi",
            "subtitle" => "",
            "info" => "<p>La multiplication r&eacute;cente des violences polici&egrave;res, des morts et des bless&eacute;s qu&rsquo;elles ont entra&icirc;n&eacute;s, a rappel&eacute; &egrave; quel point l&rsquo;usage de la force est corr&eacute;l&eacute; au pouvoir d&rsquo;&Eacute;tat. Pour autant, ces violences restent largement impens&eacute;es, g&eacute;n&eacute;ralement consid&eacute;r&eacute;es comme la cons&eacute;quence de contradictions internes &egrave; la gestion de l&rsquo;ordre n&eacute;olib&eacute;ral. Or les violences qui ont conduit &egrave; la mort de Nahel M., &egrave; celle de R&eacute;mi Fraisse, &egrave; celle de C&eacute;dric Chouviat, comme celles qui ont consist&eacute; &egrave; mettre &egrave; genoux les lyc&eacute;ens de Mantes-la-Jolie ou &egrave; mutiler des gilets jaunes n&rsquo;ont ni les m&ecirc;mes modalit&eacute;s ni les m&ecirc;mes rationalit&eacute;s.<\/p><p>Fond&eacute; sur l&rsquo;analyse des dossiers judiciaires auxquels l&rsquo;auteur a eu acc&egrave;s, ce livre montre que les armes, les techniques, les pratiques et les objectifs, ainsi que les r&eacute;actions politico-m&eacute;diatiques et les traitements judiciaires diff&egrave;rent selon que les violences ciblent une expression politique, l&rsquo;exercice d&rsquo;une libert&eacute; de circulation ou la simple appartenance ethno-raciale.<\/p><p>Discipliner, punir, instaurer ou restaurer un rapport de domination, territorialiser l&rsquo;espace public, l&rsquo;espace priv&eacute;, les flux de circulation et, dans les cas les plus extr&ecirc;mes, exprimer une violence pure &#150; celle de l&rsquo;antique pouvoir de vie et de mort &#150;, telles sont les diff&eacute;rentes fonctions des violences polici&egrave;res. Cette distinction permet de mieux saisir les rapports de pouvoir qui s&rsquo;expriment entre l&rsquo;&Eacute;tat et la population et entre la police et des groupes sociaux d&eacute;termin&eacute;s. Elle offre aussi des prises pour tenter de r&eacute;pondre &egrave; une question plus fondamentale : la violence est-elle constitutive du pouvoir, un moyen de son exercice ou une condition de sa possibilit&eacute; ?<\/p>",
            "image" => "",

            "video" => "wcIan1au6hE",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2024-12-23 23:16:00",
            "published" => "1",
            "date" => "2024-03-07",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "On ne peut accueillir toute la mis&egrave;re du monde",
            "subtitle" => "En finir avec une sentence de mort",
            "info" => "<p><strong>&#171; On ne peut pas accueillir toute la mis&egrave;re du monde &#187;<\/strong> : qui n&apos;a jamais entendu cette phrase au statut presque proverbial, &eacute;nonc&eacute;e toujours pour justifier le repli, la restriction, la fin de non-recevoir et la r&eacute;pression ? Dix mots qui tombent comme un couperet, et qui sont devenus l&apos;horizon ind&eacute;passable de tout d&eacute;bat &#171; raisonnable &#187; sur les migrations. Comment y r&eacute;pondre ? C&apos;est toute la question de cet essai incisif, qui propose une lecture critique, mot &egrave; mot, de cette sentence, afin de pointer et r&eacute;futer les sophismes et les contre-v&eacute;rit&eacute;s qui la sous-tendent. Arguments, chiffres et r&eacute;f&eacute;rences &egrave; l&apos;appui, il s&apos;agit en somme de d&eacute;construire et de d&eacute;faire une &#171; x&eacute;nophobie autoris&eacute;e &#187;, mais aussi de r&eacute;affirmer la n&eacute;cessit&eacute; de l&apos;hospitalit&eacute;.<\/p>",
            "image" => "",

            "video" => "P_bSwmhxC3U",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-01-10 23:25:00",
            "published" => "1",
            "date" => "2024-05-23",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Tous ceux qui tombent",
            "subtitle" => "",
            "info" => "<p>Fin ao&ucirc;t 1572. &Agrave; Paris, des notaires dressent des inventaires apr&egrave;s d&eacute;c&egrave;s, enregistrent des actes, r&egrave;glent des h&eacute;ritages. Avec minutie, ils transcrivent l&rsquo;ordinaire des vies au milieu d&rsquo;une colossale h&eacute;catombe. Mais ils livrent aussi des noms, des adresses, des liens. <\/p><p> Puisant dans ces archives notariales, J&eacute;r&eacute;mie Foa tisse une micro-histoire de la Saint-Barth&eacute;lemy soucieuse de nommer les anonymes, les obscurs jet&eacute;s au fleuve ou m&ecirc;l&eacute;s &egrave; la fosse, &egrave; jamais engloutis. Pour &eacute;lucider des crimes dont on ignorait jusqu&rsquo;&egrave; l&rsquo;existence, il abandonne les palais pour les pav&eacute;s, exhumant les indices d&rsquo;un massacre de proximit&eacute;, commis par des voisins sur leurs voisins. Car &egrave; descendre dans la rue, on croise ceux qui ont du sang sur les mains, on observe le savoir-faire de la poign&eacute;e d&rsquo;hommes responsables de la plupart des meurtres. Sans avoir &eacute;t&eacute; pr&eacute;m&eacute;dit&eacute;, le massacre &eacute;tait pr&eacute;par&eacute; de longue date &#150; les assassins n&rsquo;ont pas surgi tout arm&eacute;s dans la folie d&rsquo;un soir d&rsquo;&eacute;t&eacute;. <\/p><p> Au fil de vingt-cinq enqu&ecirc;tes haletantes, l&rsquo;historien retrouve les victimes et les tueurs, simples passants ou ardents massacreurs, dans leur humaine trivialit&eacute; : &eacute;pingliers, menuisiers, r&ocirc;tisseurs de la Vall&eacute;e de Mis&egrave;re, tanneurs d&rsquo;Aubusson et taverniers de Maubert, <em>vies minuscules<\/em> emport&eacute;es par l&rsquo;&eacute;v&eacute;nement. <\/p><p> Prix de la Contre-All&eacute;e 2022 <\/p><p> Prix Lyc&eacute;en du livre d&rsquo;Histoire de Blois 2022 <\/p><p> Prix Histoire du Festival Protestant du Livre 2022 <\/p><p> Prix de l&rsquo;Acad&eacute;mie des Sciences, Lettres et Arts de Marseille 2022<\/p>",
            "image" => "202405231000.jpg",

            "video" => "VOKVbI_2SQM",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-01-12 18:24:00",
            "published" => "1",
            "date" => "2024-04-18",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "L&rsquo;empire olympique",
            "subtitle" => "Une mystification politique",
            "info" => "<p>El&eacute;ment cl&eacute; de la mondialisation capitaliste et de la finance internationale, le Comit&eacute; international olympique (CIO) est structur&eacute; comme une multinationale en expansion permanente. Associ&eacute; aux grands trusts affairistes (Coca-Cola, McDonald&rsquo;s, Ali Baba, etc.), aux appareils d&rsquo;Etats qui violent r&eacute;guli&egrave;rement les droits de l&rsquo;Homme (Chine, Russie, p&eacute;tromonarchies islamiques, etc.) et aux r&eacute;seaux m&eacute;diatiques transnationaux (WarnerBros, Discovery, NBCUniversal, BeIn Sport, etc.), il propage son id&eacute;ologie de la comp&eacute;tition pour les profits et des profits pour la comp&eacute;tition gr&acirc;ce &egrave; son produit phare : les Jeux olympiques.<\/p><p>Ce circus maximus quadriennal est structurellement gangren&eacute; par les affaires de corruption, le dopage massif des athl&egrave;tes, les violences de la rage de vaincre et les collusions cyniques avec les r&eacute;gimes totalitaires, dictatoriaux ou militaro-policiers. Cela n&rsquo;emp&ecirc;che pas le CIO de se pr&eacute;senter comme une institution &#171; humaniste &#187;, garante d&rsquo;une &#171; philosophie de la vie &#187; respectant les &#171; principes &eacute;thiques fondamentaux universels &#187; et la &#171; dignit&eacute; humaine &#187;.<\/p><p>L&rsquo;examen critique de l&rsquo;olympisme, con&ccdil;u par Coubertin comme une religion universelle ou une vision du monde totalisante, implique d&rsquo;en d&eacute;voiler les mensonges et les illusions et de mettre en question le d&eacute;ni g&eacute;n&eacute;ralis&eacute; de sa nature politique profond&eacute;ment in&eacute;galitaire et anti-d&eacute;mocratique.<\/p>",
            "image" => "202404182000.webp",

            "video" => "a0L-l03p8BI",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2024-12-29 14:54:00",
            "published" => "1",
            "date" => "2024-04-11",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "L&rsquo;oeuvre-vie d&rsquo;Antonio Gramsci",
            "subtitle" => "",
            "info" => "<p>Antonio Gramsci (1891-1937) reste l&rsquo;un des penseurs majeurs du marxisme, et l&rsquo;un des plus convoqu&eacute;s. L&rsquo;Å’uvre-vie aborde les diff&eacute;rentes phases de son action et de sa pens&eacute;e &#150; des ann&eacute;es de formation &egrave; Turin jusqu&rsquo;&egrave; sa mort &egrave; Rome, en passant par ses activit&eacute;s de militant communiste et ses ann&eacute;es d&rsquo;incarc&eacute;ration &#150; en restituant leurs liens avec les grands &eacute;v&eacute;nements de son temps : la r&eacute;volution russe, les prises de position de l&rsquo;Internationale communiste, la mont&eacute;e au pouvoir du fascisme en Italie, la situation europ&eacute;enne et mondiale de l&rsquo;entre-deux-guerres. Gr&acirc;ce aux apports de la recherche italienne la plus actuelle, cette d&eacute;marche historique s&rsquo;ancre dans une lecture pr&eacute;cise des textes &#150; pour partie in&eacute;dits en France &#150;, qui permet de saisir le sens profond de ses &eacute;crits et toute l&rsquo;originalit&eacute; de son approche.<\/p><p>Analysant en d&eacute;tail la correspondance, les articles militants, puis les Cahiers de prison du r&eacute;volutionnaire, cette biographie intellectuelle rend ainsi compte du processus d&rsquo;&eacute;laboration de sa r&eacute;flexion politique et philosophique, en soulignant les leitmotive et en restituant &#171; &nbsp;le rythme de la pens&eacute;e en d&eacute;veloppement &nbsp;&#187;.<\/p><p>Au fil de l&rsquo;&eacute;criture des Cahiers, Gramsci comprend que la &#171; &nbsp;philosophie de la praxis &nbsp;&#187; a besoin d&rsquo;outils conceptuels nouveaux, et les invente : &#171; &nbsp;h&eacute;g&eacute;monie &nbsp;&#187;, &#171; &nbsp;guerre de position &nbsp;&#187;, &#171; &nbsp;r&eacute;volution passive &nbsp;&#187;, &#171; &nbsp;subalternes &nbsp;&#187;, etc. Autant de concepts qui demeurent utiles pour penser notre propre &#171; &nbsp;monde grand et terrible &nbsp;&#187;.<\/p>",
            "image" => "202404112000.jpeg",

            "video" => "WpQkiEOt3VA",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-25 12:40:00",
            "published" => "1",
            "date" => "2024-11-20",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "La Retirada",
            "subtitle" => "L&rsquo;exil de r&eacute;fugi&eacute;s r&eacute;publicains espagnols en 1939",
            "info" => "<p>La retirada est l&apos;exode des r&eacute;fugi&eacute;s de la guerre d&apos;Espagne. &Agrave; partir de f&eacute;vrier 1939, ce sont pr&egrave;s de 500 000 personnes qui franchissent la fronti&egrave;re franco-espagnole suite &egrave; la prise de Barcelone par les nationalistes du g&eacute;n&eacute;ral Franco.<\/p><p>Partenaires&nbsp;: Ville de Clermont-Ferrand, Association AMARRES<\/p>",
            "image" => "",

            "video" => "lR35zFZ1ssw",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-01-13 12:28:00",
            "published" => "1",
            "date" => "2025-01-16",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Th&eacute;orie d&eacute;lib&eacute;rative des valeurs",
            "subtitle" => "De la valeur travail &egrave; un travail sur les valeurs",
            "info" => "<p>&#171; Tout ce qui a son prix est de peu de valeur &#187;, affirmait Nietzsche. Pourtant, aujourd&apos;hui, tout se passe comme si la valeur &eacute;conomique r&eacute;sumait les valeurs de notre soci&eacute;t&eacute; pour eÌ‚tre la seule mesure du bien-&ecirc;tre. Cette domination nous place devant une triple crise : &eacute;cologique, d&eacute;mocratique et &eacute;conomique. EÌcologique car la valeur &eacute;conomique ne permet pas de prendre en compte la complexit&eacute; du vivant. D&eacute;mocratique car les d&eacute;bats politiques sont soumis aux lois de la valeur &eacute;conomique, ce qui oriente le d&eacute;bat, l&eacute;gitime les in&eacute;galit&eacute;s et interdit une remise en cause radicale du mode de vie. EÌconomique parce que la cr&eacute;ation de valeur repose, aujourd&apos;hui encore, sur la possibilit&eacute; d&apos;une croissance infinie sur une plan&egrave;te finie. Ainsi, ouvrir le d&eacute;bat sur les valeurs &#150; se poser la question &egrave; quoi tenons-nous ? &#150; c&apos;est se donner les moyens de penser le monde de demain. Un monde &eacute;cologique n&eacute;cessite de passer de la supr&eacute;matie de la valeur travail &egrave; un travail d&eacute;mocratique sur les valeurs. AÌ€ condition cependant de sortir de nos d&eacute;mocraties repr&eacute;sentatives aÌ€ bout de souffle pour emprunter la voie de la participation et de la deÌlib&eacute;ration. Dans cette perspective deÌlib&eacute;rative, il n&apos;y a pas de valeur qui &eacute;chappe au d&eacute;bat collectif : ce qui constitue le vivre ensemble est un choix de soci&eacute;t&eacute;. In fine, la valeur &eacute;conomique, comme toutes les valeurs, n&apos;est ni objective ni subjective mais le fruit de choix d&eacute;mocratiques. Il est temps de passer de la valeur travail &egrave; un travail sur les valeurs.<\/p>",
            "image" => "",

            "video" => null,
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-01-13 12:25:00",
            "published" => "1",
            "date" => "2025-01-23",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Le massacre de Thiaroye",
            "subtitle" => "Histoire d&apos;un mensonge d&apos;&Eacute;tat ",
            "info" => "<p>Morts par la France<\/p><p>I<sup>er<\/sup> d&eacute;cembre 1944, camp de Thiaroye, en p&eacute;riph&eacute;rie de Dakar. Des tirailleurs s&eacute;n&eacute;galais, faits prisonniers par les Allemands lors de la guerre et r&eacute;cemment rapatri&eacute;s, r&eacute;clament le paiement de leur solde. Un droit qui leur &eacute;tait promis depuis des mois. La r&eacute;ponse est sanglante et d&rsquo;une violence inou&iuml;e&nbsp;: des centaines d&rsquo;entre eux sont rassembl&eacute;s sur une esplanade du camp, froidement mitraill&eacute;s puis jet&eacute;s dans des fosses communes.<\/p><p>Pourtant, d&egrave;s le lendemain, les autorit&eacute;s coloniales et militaires pr&eacute;texteront une r&eacute;bellion arm&eacute;e des tirailleurs et feront &eacute;tat de trente-cinq morts. Entre mensonge d&rsquo;&Eacute;tat et fraude scientifique,<\/p>",
            "image" => "202501222000.jpeg",

            "video" => "3bNk_j6L7ng",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-01-13 12:46:00",
            "published" => "1",
            "date" => "2025-02-13",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Parias",
            "subtitle" => " Hannah Arendt et la &#171; tribu &#187; en France (1933-1941) ",
            "info" => "<p>Voici le r&eacute;cit palpitant des huit ann&eacute;es fran&ccdil;aises de Hannah Arendt qui marqueront profond&eacute;ment sa vie et son Å“uvre.<\/p><p>Fuyant la Gestapo, Hannah Arendt arrive &egrave; Paris en octobre 1933. La jeune femme de 27 ans, promise &egrave; une brillante carri&egrave;re universitaire en Allemagne, doit se faire aux chambres insalubres des h&ocirc;tels garnis, &egrave; la difficult&eacute; de trouver du travail et &egrave; l&apos;hostilit&eacute; d&apos;une partie des Fran&ccdil;ais.<\/p><p>Mais dans le quartier latin et &egrave; Montparnasse, ceux qui ont fui Hitler parviennent &egrave; faire vivre un autre pays en exil. Elle y croise Heinrich Bl&auml;cher, faux dandy et vrai r&eacute;volutionnaire, qui deviendra son mari. Tous deux font partie d&apos;une famille d&apos;hurluberlus magnifiques &#150; compos&eacute;e, entre autres, d&apos;Erich Cohn-Bendit, Lotte Sempell, Chanan Klenbort, Adrienne Monnier, Fritz Fr&auml;nkel, Minna Flake et Arthur Koestler &#150; qui se retrouvent autour du g&eacute;nial Walter Benjamin. Ils forment cette &#171; tribu &#187; qui donne &egrave; chacun la force de continuer &egrave; vivre.<\/p><p>&Agrave; l&apos;approche de la guerre, et face &egrave; l&apos;afflux de r&eacute;fugi&eacute;s, l&apos;administration fran&ccdil;aise interne les &#171; ind&eacute;sirables &#187; et les amis sont l&apos;un apr&egrave;s l&apos;autre enferm&eacute;s. Pendant plusieurs semaines, Arendt conna&icirc;t &#171; l&apos;enfer du camp de Gurs &#187; et fr&ocirc;le le d&eacute;sespoir. Lorsque les troupes nazies envahissent la France, elle profite du chaos pour fuir le camp&#133; Fruit d&apos;une enqu&ecirc;te minutieuse, r&eacute;alis&eacute;e notamment &egrave; partir d&apos;archives et de t&eacute;moignages in&eacute;dits, voici le r&eacute;cit palpitant des huit ann&eacute;es fran&ccdil;aises de Hannah Arendt qui marqueront profond&eacute;ment sa vie et son Å“uvre.<\/p>",
            "image" => "202502122000.jpeg",

            "video" => "sMdZzIX0Yd0",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-01-13 12:35:00",
            "published" => "1",
            "date" => "2025-02-20",
            "time" => "20:00",
            "location_id" => "1",
            "title" => " La machine &egrave; d&eacute;truire",
            "subtitle" => " Pourquoi il faut en finir avec la finance",
            "info" => "<p>Les crises financi&egrave;res se succ&egrave;dent et se ressemblent. Chaque fois, pour &eacute;viter le chaos, les &Eacute;tats et les banques centrales interviennent. Mais que sauvent-ils ? Quel rapport cela a-t-il avec l&apos;augmentation rapide des in&eacute;galit&eacute;s et de l&apos;endettement des &Eacute;tats, avec la d&eacute;gradation des services publics, ou encore avec les r&eacute;sistances &egrave; travers le monde ?<\/p><p>La Machine &egrave; d&eacute;truire revient sur ces crises et ce qui les suit, et s&apos;interroge sur la place croissante des banques et de la finance dans nos existences. Suffira-t-il de d&eacute;placer l&apos;argent vers des investissements plus verts ? Les solutions financi&egrave;res sont-elles &egrave; la hauteur de leurs promesses ? Peut-on se permettre de laisser les banques au centre du syst&egrave;me?<\/p><p>Loin de nous &eacute;craser avec des notions techniques et lointaines, Aline Fares et J&eacute;r&eacute;my Van Houtte proposent plut&ocirc;t un regard limpide et des analyses dr&ocirc;les et document&eacute;es sur la finance, &egrave; partir d&apos;exp&eacute;riences famili&egrave;res et v&eacute;cues.<\/p>",
            "image" => "202502192000.jpeg",

            "video" => null,
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-01-13 12:42:00",
            "published" => "1",
            "date" => "2025-03-31",
            "time" => "20:00",
            "location_id" => "1",
            "title" => " De Paris &egrave; H&eacute;bron",
            "subtitle" => "",
            "info" => "<p>Chantal et Anwar. Une Fran&ccdil;aise n&eacute;e dans le Nord de la France, un Palestinien originaire d&apos;H&eacute;bron, au sud de la Palestine ; un couple, form&eacute; en 1980, parents de deux enfants. Lui s&apos;est fait conna&icirc;tre au fil d&apos;un parcours remarquable &#150; militant palestinien r&eacute;fugi&eacute; en 1978 en France, o&ograve; il poursuit des &eacute;tudes de droit, un temps chauffeur de taxi pour gagner sa vie, il se voit proposer, apr&egrave;s les accords d&apos;Oslo de 1993, un poste de professeur de droit civil &egrave; l&apos;universit&eacute; Al-Quds de J&eacute;rusalem-Est. Il deviendra, en 2013-2014, ministre de la Culture de l&apos;Autorit&eacute; palestinienne, et demeure l&apos;une des voix palestiniennes pacifistes majeures sur la sc&egrave;ne internationale.<\/p><p>Mais que sait-on du parcours de son &eacute;pouse Chantal &#150; hormis qu&apos;elle a cofond&eacute; avec lui l&apos;association d&apos;&eacute;changes culturels H&eacute;bron-France &#150; et de son quotidien, &egrave; cheval entre deux cultures &egrave; mille lieues l&apos;une de l&apos;autre, entre la paix et la guerre, depuis qu&apos;elle a choisi d&apos;abandonner son confortable quotidien en France pour suivre Anwar et vivre &egrave; H&eacute;bron ?<\/p><p>&#171; Depuis leur adolescence, nos enfants, issus de notre couple franco- palestinien, me disent souvent : &#147;Comment t&apos;as fait ? Raconte !&#148; Vingt- quatre ans apr&egrave;s mon installation en Palestine, mettre en perspective mes exp&eacute;riences &egrave; une &eacute;poque o&ograve; les questions sur l&apos;identit&eacute;, la la&iuml;cit&eacute;, l&apos;islamisme ou le racisme sont au centre des d&eacute;bats, voil&egrave; ce qui me tient &egrave; coeur depuis de longues ann&eacute;es &#187;.<\/p>",
            "image" => "",

            "video" => null,
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-01-13 12:44:00",
            "published" => "1",
            "date" => "2025-04-03",
            "time" => "20:00",
            "location_id" => "1",
            "title" => " Barbarie num&eacute;rique",
            "subtitle" => " une autre histoire du monde connect&eacute;",
            "info" => "<p>Une enqu&ecirc;te implacable sur la trag&eacute;die que vit le Congo, cÅ“ur des industries num&eacute;riques et objet de toutes les convoitises.<\/p><p>&Agrave; partir des ann&eacute;es 1990, l&apos;explosion de la production de biens &eacute;lectroniques, caract&eacute;ristique du passage du capitalisme &egrave; son stade num&eacute;rique, d&eacute;clenche une guerre des m&eacute;taux technologiques au Congo (RDC) qui n&apos;a fait que gagner en intensit&eacute;. Cette enqu&ecirc;te fouill&eacute;e montre que la d&eacute;mat&eacute;rialisation est bel et bien un mythe.<\/p><p>Elle se nourrit d&apos;un extractivisme sans limites dans des r&eacute;gions, comme celle des Grands Lacs en Afrique, qui subissent depuis des si&egrave;cles les ravages de la mondialisation : de la traite n&eacute;gri&egrave;re &egrave; la terreur coloniale du roi belge L&eacute;opold II (pour le &#171; caoutchouc rouge &#187; n&eacute;cessaire &egrave; l&apos;industrie automobile) jusqu&apos;aux minerais de sang actuels (dont le coltan, essentiel aux smartphones, et le cobalt, pour la transition &eacute;nerg&eacute;tique).<\/p><p>La civilisation de l&apos;&eacute;cran est synonyme d&apos;une barbarie num&eacute;rique qui se manifeste au Congo par : une &eacute;conomie militaris&eacute;e et une criminalit&eacute; institutionnalis&eacute;e, un pillage g&eacute;n&eacute;ralis&eacute;, du travail forc&eacute;, le viol comme arme de guerre, la destruction des for&ecirc;ts et l&apos;an&eacute;antissement de la biodiversit&eacute;&#133; Autant de catastrophes qui font du Congo l&apos;une des plus grandes trag&eacute;dies de l&apos;histoire contemporaine, le prix fort &egrave; payer pour un monde connect&eacute;.<\/p>",
            "image" => "202504022000.png",

            "video" => null,
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-03-21 12:48:00",
            "published" => "1",
            "date" => "2025-04-17",
            "time" => "20:00",
            "location_id" => "1",
            "title" => " De l&apos;invisibilit&eacute; &egrave; la visibilit&eacute; ",
            "subtitle" => " Visage(s) de l&apos;inconvenant ",
            "info" => "<p>Le concept de &#171; visag&eacute;it&eacute; &#187;, d&eacute;fini par Gilles Deleuze et F&eacute;lix Guattari, est un pr&eacute;alable essentiel &egrave; toute analyse des strat&eacute;gies d&apos;extraction du sujet en dehors des normes. Cette notion a d&apos;ailleurs &eacute;t&eacute; cr&eacute;&eacute;e dans le but pr&eacute;cis de questionner les rapports du sujet au corps et donc &egrave; l&apos;identit&eacute;. Audacieux, &eacute;trange et d&eacute;rangeant, le rapport entre &#171; inconvenant &#187; et &#171; d&eacute;centrement &#187; souligne combien les litt&eacute;ratures et productions culturelles qui sortent du cadre et de l&apos;ordre &eacute;tabli d&eacute;rangent et bousculent les standards.<\/p><p>Les travaux r&eacute;unis dans le pr&eacute;sent ouvrage s&apos;attachent &egrave; analyser les strat&eacute;gies de &#171; remise &egrave; l&apos;ordre &#187; ou de &#171; retour au centre &#187; qui ont &eacute;t&eacute; d&eacute;ploy&eacute;es pour faire rentrer dans le rang du convenu, du convenable et de la visag&eacute;it&eacute;, les cr&eacute;ateurs m&ecirc;mes de l&apos;inconvenant. &#171; L&apos;invisibilit&eacute; et la visibilit&eacute; &#187; sont &eacute;tudi&eacute;es au prisme de &#171; la visag&eacute;it&eacute; de l&apos;inconvenant &#187; dans le domaine des arts (peinture, cin&eacute;ma, danse), de la litt&eacute;rature, des relations interculturelles et de la ruralit&eacute; et scrutent avec minutie les repr&eacute;sentations prot&eacute;iformes que peut recouvrir l&apos;inconvenant.<\/p>",
            "image" => "202504162000.jpeg",

            "video" => "LrXvlCiBtnE",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-06-06 18:14:00",
            "published" => "1",
            "date" => "2025-05-15",
            "time" => "20:00",
            "location_id" => "1",
            "title" => " La machine &egrave; gagner",
            "subtitle" => "R&eacute;v&eacute;lations sur le RN en marche vers l&apos;Elys&eacute;e",
            "info" => "<p>Cette &#171; machine &#187; a longtemps carbur&eacute; au d&eacute;tournement de fonds public : le RN, d&eacute;montre le livre, l&apos;a pratiqu&eacute; &egrave; &eacute;chelle industrielle au d&eacute;triment de l&apos;Etat et de l&apos;Union europ&eacute;enne, pour financer le train de vie excessif de son appareil.<\/p><p>&Eacute;difiantes sont aussi les pages consacr&eacute;es &egrave; la &#171; conqu&ecirc;te m&eacute;diatique &#187; du parti, qui documentent les entraves pos&eacute;es au travail de certains m&eacute;dias, et les pressions exerc&eacute;es sur d&apos;autres pour obtenir un traitement favorable. Non sans r&eacute;sultat, avec par exemple la quasi-disparition au &#171; Figaro &#187; de l&apos;expression &#171; extr&ecirc;me droite &#187; pour qualifier le RN.<\/p><p>En coulisses, pendant ce temps, un cercle de conseillers occultes, issus de la haute administration ou du monde de l&apos;entreprise, travaille &egrave; la &#171; mont&eacute;e en gamme &#187; du parti : ils forment &#171; un ensemble bourgeois qui se reconna&icirc;t dans une vision x&eacute;nophobe du monde, le fantasme d&apos;une guerre civilisationnelle &egrave; venir et la volont&eacute; de pr&eacute;server ses int&eacute;r&ecirc;ts &#187;.<\/p>",
            "image" => "ahxrrxkfnkao.jpeg",

            "video" => "W353ZulgMAI",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-01-13 15:49:32",
            "published" => "1",
            "date" => "2025-06-05",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Le d&eacute;fi de la paix",
            "subtitle" => "Remodeler les organisations internationales",
            "info" => "<p>La multiplication des crises et des conflits bouleverse le cadre g&eacute;n&eacute;ral des relations internationales. Non seulement les rapports entre &Eacute;tats sont modifi&eacute;s et tendus, mais ces derniers contestent de plus en plus les r&egrave;gles, les valeurs et les principes pacifiques et humanistes qui fondent l&apos;ordre mondial depuis 1945. Ce livre a pour vocation d&apos;analyser ce dangereux d&eacute;s&eacute;quilibre, de faire (re)d&eacute;couvrir les organisations internationales et leur matrice, l&apos;ONU, et de rappeler leur raison d&apos;&ecirc;tre, leur naissance exceptionnelle et leur utilit&eacute;. Car loin des projecteurs, elles sont aussi le th&eacute;&acirc;tre de batailles d&apos;influence o&ograve; se jouent les grands d&eacute;fis globaux : s&eacute;curit&eacute;, droits fondamentaux, environnement, sant&eacute;&#133; Comprendre l&apos;enjeu de leur renouvellement est fondamental pour maintenir un dialogue entre &Eacute;tats et esp&eacute;rer pr&eacute;server la paix mondiale. &Eacute;clair&eacute; par des observations de terrain, et fond&eacute; sur des ann&eacute;es de r&eacute;flexions universitaires, cet ouvrage fournit des cl&eacute;s pour comprendre la crise actuelle de l&apos;ordre international, et permet d&apos;en percevoir le sens profond&nbsp;<\/p>",
            "image" => "202506042000.jpeg",

            "video" => null,
            "canceled" => "1"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-01-14 16:56:00",
            "published" => "1",
            "date" => "2025-01-09",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Mobilis&eacute;es !",
            "subtitle" => "Une histoire f&eacute;ministe des contestations populaires",
            "info" => "<p>Dans toutes les mobilisations sociales de la p&eacute;riode r&eacute;cente, l&apos;implication des femmes est forte et, pourtant, &egrave; chaque fois, elle surprend. Leur pr&eacute;sence est interpr&eacute;t&eacute;e comme le signe d&apos;une contestation exceptionnelle. En r&eacute;alit&eacute;, ce qui m&eacute;rite l&apos;&eacute;tonnement, c&apos;est qu&apos;on oublie leur participation. Car les femmes ont toujours pris la parole et la rue, avec des modalit&eacute;s d&apos;action singuli&egrave;res.De la figure de la &#171; m&eacute;nag&egrave;re &#187; des Trente Glorieuses, &egrave; celle des &#171; Rosies &#187; dans les r&eacute;centes manifestations contre la r&eacute;forme des retraites, Fanny Gallot revisite le pass&eacute; des luttes sociales depuis 1945. Elle montre comment les modalit&eacute;s d&apos;action et les revendications ont pu &eacute;voluer au fil des d&eacute;cennies, sous l&apos;influence des mouvements f&eacute;ministes et de l&apos;&eacute;cho qu&apos;ils ont rencontr&eacute; aupr&egrave;s des organisations syndicales.La question du &#171; travail reproductif &#187; est au cÅ“ur de ces luttes. Que l&apos;on d&eacute;nonce sa &#171; d&eacute;qualification &#187; lorsqu&apos;il est exerc&eacute; dans le domaine professionnel ou son &#171; invisibilisation &#187; quand il d&eacute;signe les t&acirc;ches domestiques accomplies quotidiennement, il est au centre des d&eacute;bats, des revendications et des actions. En tenir compte, tenter d&apos;en discerner les contours est un puissant levier d&apos;action pour les luttes pass&eacute;es, pr&eacute;sentes et &egrave; venir.&nbsp;<\/p>",
            "image" => "202501082000.jpeg",

            "video" => "HDtkXxNbbwc",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-01-14 17:47:00",
            "published" => "1",
            "date" => "2024-12-19",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Pr&eacute;f&eacute;rer la Libert&eacute; &egrave; la S&eacute;curit&eacute;",
            "subtitle" => "",
            "info" => "<p>Pr&eacute;f&eacute;rer la Libert&eacute; &egrave; la S&eacute;curit&eacute;, &eacute;ditions Crefad documents,<\/p>\r\n<p>est un ouvrage collectif &eacute;labor&eacute; par les chercheurs du Centre de Recherche et de Formation &egrave; l&rsquo;Animation et au D&eacute;veloppement, CREFAD.<\/p>\r\n<p>Pr&eacute;sentation par les auteurs<\/p>\r\n<p>En cherchant dans les &eacute;chos de nos &eacute;changes des r&eacute;currences th&eacute;matiques, en identifiant ce qui s&apos;affrontait autour de nous sans tout &egrave; fait se laisser voir, nous avions formul&eacute; ce th&egrave;me, au sein du R&eacute;seau des Crefad&nbsp;: pr&eacute;f&eacute;rer la libert&eacute; &egrave; la s&eacute;curit&eacute;. Comme une affirmation pas une question. Une &eacute;vidence. Et c&apos;&eacute;tait en 2019.<\/p>\r\n<p>Puis en pr&eacute;parant nos rencontres de r&eacute;seaux annuelles sur cette m&ecirc;me th&eacute;matique au cours du printemps 2020, en plein confinement, nous avons souhait&eacute; en faire un appel &egrave; textes, invitation tant par nous m&ecirc;mes et nos associations &egrave; &eacute;crire que pour des complices, intervenants, auteur dont nous croisons r&eacute;guli&egrave;rement le chemin.<\/p>\r\n<p>Des textes pour inviter &egrave; penser, &egrave; ne pas penser seuls. Des textes pour faire circuler la pens&eacute;e et les mots. Des textes en esp&eacute;rant qu&apos;ils feront &eacute;chos et r&eacute;actions ici ou l&egrave;, au-del&egrave; de nos sph&egrave;res d&apos;activit&eacute;s. Des textes enfin pour donner &egrave; lire des &eacute;l&eacute;ments de nos r&eacute;alit&eacute;s, tels que nous nous les formulons, tels que nous en avons besoin plut&ocirc;t que de les chercher en vain dans le flot de discours qui nous environne.<\/p>",
            "image" => "",

            "video" => null,
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-01-14 18:00:00",
            "published" => "1",
            "date" => "2024-12-09",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Palestine : un peuple qui ne veut pas mourir",
            "subtitle" => "",
            "info" => "<p>Ce qui se joue dans la guerre contre Gaza d&eacute;passe largement le cadre &eacute;troit de ce petit territoire qui conna&icirc;t une des guerres les plus destructrices de l&apos;&eacute;poque contemporaine &#150; une guerre dont la Cour internationale de justice a soulign&eacute; le &#171; risque g&eacute;nocidaire &#187;. Si elle condense d&apos;abord le calvaire centenaire du peuple palestinien, son enjeu d&eacute;borde ces fronti&egrave;res, avec le risque d&apos;un embrasement r&eacute;gional et surtout d&apos;un approfondissement de la fracture entre le reste du monde et l&apos;Occident. Celui-ci, mobilis&eacute; aux c&ocirc;t&eacute;s d&apos;Isra&euml;l, adopte une vision manich&eacute;enne de l&apos;histoire comme d&apos;un affrontement sans cesse recommenc&eacute; entre Barbares et Civilis&eacute;s. Dans cette guerre, le droit international dont se r&eacute;clame l&apos;Europe n&apos;est plus qu&apos;un faux-semblant. Les choix ent&eacute;rin&eacute;s par la France, ont &eacute;largi le foss&eacute; qui la s&eacute;pare du sud de la M&eacute;diterran&eacute;e.<\/p>",
            "image" => "202412082000.jpeg",

            "video" => "kmp2Rws7vcs",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-10-31 08:44:00",
            "published" => "1",
            "date" => "2025-12-18",
            "time" => "19:00",
            "location_id" => "1",
            "title" => "L&rsquo;Exil, toujours recommenc&eacute;",
            "subtitle" => "Chronique de la fronti&egrave;re",
            "info" => "<p>Fuyant les violences politiques, les pers&eacute;cutions religieuses ou la pauvret&eacute;, des hommes, des femmes, des enfants d&apos;Afghanistan, d&apos;Iran, du Maghreb et d&apos;Afrique subsaharienne, se mettent en route pour des voyages de plusieurs ann&eacute;es au cours desquels ils affrontent les rackets des bandes arm&eacute;es, les brutalit&eacute;s des polices, les camps d&apos;enfermement, les murs de barbel&eacute;s, les rigueurs du d&eacute;sert, les p&eacute;rils de la mer. Beaucoup y perdent la vie.<\/p>\r\n<p>Cinq ann&eacute;es durant, &eacute;t&eacute; comme hiver, Didier Fassin et Anne-Claire Defossez ont men&eacute; une recherche &egrave; la fronti&egrave;re entre l&apos;Italie et la France, dans les Alpes, aupr&egrave;s de nombre de ces exil&eacute;s, pour reconstituer leur p&eacute;riple en l&apos;inscrivant dans le contexte g&eacute;opolitique des bouleversements du monde. Ils ont pris part aux activit&eacute;s men&eacute;es pour leur porter assistance. Ils ont rencontr&eacute; les multiples acteurs de ce territoire de migrations mill&eacute;naires.<\/p>",
            "image" => "ycnotncsknxd.jpeg",

            "video" => null,
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-10-06 07:33:00",
            "published" => "1",
            "date" => "2025-05-22",
            "time" => "19:00",
            "location_id" => "1",
            "title" => "Universit&eacute;s isra&eacute;liennes, universit&eacute;s palestiniennes",
            "subtitle" => "",
            "info" => "<p>&nbsp;En Isra&euml;l et dans les territoires palestiniens occup&eacute;s depuis 1967 deux projets politiques s&rsquo;affrontent, et deux syst&egrave;mes universitaires ont &eacute;t&eacute; construits en cons&eacute;quence, jusqu&rsquo;&egrave; aboutir &egrave; l&rsquo;an&eacute;antissement physique des universit&eacute;s et des universitaires gazaou&iuml;s. Je t&acirc;cherai de retracer cette histoire et de la placer dans le contexte mondial d&rsquo;attaques contre les universit&eacute;s et les libert&eacute;s acad&eacute;miques. <\/p>",
            "image" => "",

            "video" => "htWtZN91y3U",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-16 01:52:51",
            "published" => "1",
            "date" => "2025-06-05",
            "time" => "19:00",
            "location_id" => "1",
            "title" => "D&eacute;coloniser la Kanaky-Nouvelle-Cal&eacute;donie",
            "subtitle" => "",
            "info" => "<p>Le 13&nbsp;mai 2024, la Kanaky-Nouvelle-Cal&eacute;donie a connu un embrasement sans pr&eacute;c&eacute;dent qui fera date. Les d&eacute;g&acirc;ts humains, mat&eacute;riels et politiques ont &eacute;t&eacute; consid&eacute;rables. Mais surtout, un processus de d&eacute;colonisation unique dans l&rsquo;histoire a &eacute;t&eacute; brutalement interrompu. Ce livre voudrait fournir les cl&eacute;s pour comprendre un tel bouleversement.<\/p>\r\n<p>Du peuplement kanak du pays il y a trois mille ans aux colons venus &#171;&nbsp;blanchir&nbsp;&#187; le territoire, de la lutte pour l&rsquo;ind&eacute;pendance aux accords de paix, il revient sur un long chemin d&rsquo;&eacute;mancipation et examine les mutations survenues ces quarante derni&egrave;res ann&eacute;es, d&rsquo;un point de vue tant social, qu&rsquo;&eacute;conomique et politique.<\/p>\r\n<p>De la sorte, c&rsquo;est un tableau complet et accessible qui est ici propos&eacute;, avec l&rsquo;espoir que cet ouvrage puisse &eacute;clairer les consciences et, modestement, aider &egrave; imaginer les voies d&rsquo;une d&eacute;colonisation r&eacute;ussie &egrave; l&rsquo;avenir.<\/p>",
            "image" => "",

            "video" => null,
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-16 01:54:18",
            "published" => "1",
            "date" => "2025-06-12",
            "time" => "19:00",
            "location_id" => "1",
            "title" => "L&rsquo;antiracisme trahi",
            "subtitle" => "D&eacute;fense de l&rsquo;universel",
            "info" => "<p>&Agrave;&nbsp;gauche, l&apos;antiracisme est consid&eacute;r&eacute; comme un principe fondamental. Pourtant ces derni&egrave;res ann&eacute;es sa d&eacute;finition a vol&eacute; en &eacute;clats. Un antiracisme dit &#171; politique &#187; a envahi la sph&egrave;re m&eacute;diatique et acad&eacute;mique, et trouv&eacute; un &eacute;cho important aupr&egrave;s de secteurs militants. Mettant en avant des concepts controvers&eacute;s(&#171; blanchit&eacute; &#187;, &#171;&nbsp;privil&egrave;ge blanc&nbsp;&#187;&#133;), il condamne sans d&eacute;tour ce qui serait un antiracisme universaliste d&eacute;pass&eacute; et d&eacute;connect&eacute; des nouvelles r&eacute;alit&eacute;s. Critique de ces approches, le pr&eacute;sent ouvrage entend proposer une approche de l&apos;antiracisme qui puise ses racines dans l&apos;histoire du mouvement ouvrier, du socialisme, et du r&eacute;publicanisme. Une approche souvent caricatur&eacute;e et m&eacute;connue, et qui offre pourtant une grande richesse d&apos;analyse permettant l&apos;action. Soit un antiracisme qui retrouve v&eacute;ritablement le chemin de l&apos;&eacute;mancipation, loin des diff&eacute;rentialismes de toute sorte.<\/p>",
            "image" => "",

            "video" => "6gQB0G6reMU",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-06-12 07:32:00",
            "published" => "1",
            "date" => "2025-06-19",
            "time" => "19:00",
            "location_id" => "1",
            "title" => "Gaza : guerre ou g&eacute;nocide ?",
            "subtitle" => "Que dit le droit international ?",
            "info" => "<p>L&apos;ann&eacute;e qui a suivi le 7 octobre 2023 t&eacute;moigne d&apos;un basculement assez drastique dans la repr&eacute;sentation du conflit imm&eacute;diat entre Isra&euml;l et les groupes arm&eacute;s palestiniens &egrave; Gaza. Le discours de la &#171; l&eacute;gitime d&eacute;fense &#187; contre le &#171; terrorisme &#187; a &eacute;t&eacute; boulevers&eacute; par l&apos;emploi de la notion de g&eacute;nocide devant la Cour internationale de justice, saisie par l&apos;Afrique du Sud. Pourtant, les medias occidentaux continuent de d&eacute;crire la situation en utilisant les termes &#171; Guerre &egrave; Gaza &#187; ou &#171; conflit Isra&euml;l\/Hamas &#187;, &eacute;dulcorant ainsi la gravit&eacute; de l&apos;attaque que subit le peuple palestinien.<\/p><p>La conf&eacute;rence examinera pourquoi la cat&eacute;gorie du g&eacute;nocide est adapt&eacute;e pour qualifier le si&egrave;ge et les bombardements qu&apos;Isra&euml;l impose &egrave; Gaza, et en quoi la Convention de 1948 sur le g&eacute;nocide doit conduire &egrave; modifier la perception de ce qui se joue en Palestine.<\/p><p>Voici quelques articles de la conf&eacute;renci&egrave;re en libre acc&egrave;s :<\/p><ol><li><a data-mce-href=\"https:\/\/orientxxi.info\/magazine\/gaza-pour-en-finir-avec-la-guerre-contre-le-terrorisme,8193\" href=\"https:\/\/orientxxi.info\/magazine\/gaza-pour-en-finir-avec-la-guerre-contre-le-terrorisme,8193\"><em>Gaza. Pour en finir avec \"la guerre contre le terrorisme<\/em>\"<\/a>, 12 mai 2025, sur le site d&rsquo;information en ligne <a data-mce-href=\"https:\/\/orientxxi.info\/magazine\/gaza-pour-en-finir-avec-la-guerre-contre-le-terrorisme,8193\" href=\"https:\/\/orientxxi.info\/magazine\/gaza-pour-en-finir-avec-la-guerre-contre-le-terrorisme,8193\">Orient XXI<\/a><\/li><li><a data-mce-href=\"https:\/\/www.humanite.fr\/en-debat\/bande-de-gaza\/gaza-les-violences-sexuelles-et-reproductives-participent-du-genocide\" href=\"https:\/\/www.humanite.fr\/en-debat\/bande-de-gaza\/gaza-les-violences-sexuelles-et-reproductives-participent-du-genocide\"><em>Gaza : les violences sexuelles et reproductives participent du g&eacute;nocide<\/em><\/a>, 17 mars 2025. Dans le journal <a data-mce-href=\"https:\/\/www.humanite.fr\/en-debat\/bande-de-gaza\/gaza-les-violences-sexuelles-et-reproductives-participent-du-genocide\" href=\"https:\/\/www.humanite.fr\/en-debat\/bande-de-gaza\/gaza-les-violences-sexuelles-et-reproductives-participent-du-genocide\">l&rsquo;Humanit&eacute;.<\/a>ï»¿<\/li><li><a data-mce-href=\"https:\/\/orientxxi.info\/magazine\/france-l-amitie-avec-israel-comme-excuse-de-la-violation-du-droit-international,7851\" href=\"https:\/\/orientxxi.info\/magazine\/france-l-amitie-avec-israel-comme-excuse-de-la-violation-du-droit-international,7851\"><em>France. L&rsquo;amiti&eacute; avec Isra&euml;l comme excuse de la violation du droit international<\/em><\/a>, 19 d&eacute;cembre 2024, sur le site d&rsquo;information en ligne <a data-mce-href=\"https:\/\/orientxxi.info\/magazine\/france-l-amitie-avec-israel-comme-excuse-de-la-violation-du-droit-international,7851\" href=\"https:\/\/orientxxi.info\/magazine\/france-l-amitie-avec-israel-comme-excuse-de-la-violation-du-droit-international,7851\">Orient XXI<\/a>.<\/li><li><a data-mce-href=\"https:\/\/orientxxi.info\/magazine\/cour-internationale-de-justice-l-imperatif-du-retrait-israelien-des-territoires,7609\" href=\"https:\/\/orientxxi.info\/magazine\/cour-internationale-de-justice-l-imperatif-du-retrait-israelien-des-territoires,7609\"><em>Cour internationale de justice. L&rsquo;imp&eacute;ratif du retrait isra&eacute;lien des territoires occup&eacute;s.<\/em><\/a> 16 septembre 2024, sur le site d&rsquo;information en ligne <a data-mce-href=\"https:\/\/orientxxi.info\/magazine\/cour-internationale-de-justice-l-imperatif-du-retrait-israelien-des-territoires,7609\" href=\"https:\/\/orientxxi.info\/magazine\/cour-internationale-de-justice-l-imperatif-du-retrait-israelien-des-territoires,7609\">Orient XXI<\/a>.<\/li><\/ol>",
            "image" => "",

            "video" => "ICcuSKJANOI",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-09-12 16:48:00",
            "published" => "1",
            "date" => "2025-10-02",
            "time" => "19:00",
            "location_id" => "1",
            "title" => "Sociologie politique du sport",
            "subtitle" => "Une vision totalitaire du monde",
            "info" => "<p>Sociologie politique&nbsp;du sport&nbsp;est une analyse freudo-marxiste du syst&egrave;me sportif, de sa bureaucratie institutionnelle et de son id&eacute;ologie &eacute;litiste. L&apos;idol&acirc;trie du champion, la logique ali&eacute;nante du d&eacute;passement, la d&eacute;multiplication permanente des spectacles sportifs relay&eacute;s par les m&eacute;dias, les agences de publicit&eacute; et les sponsors ont totalement envahi l&apos;espace public et les loisirs. Colonis&eacute; par les multinationales capitalistes et l&apos;affairisme des groupes financiers, le syst&egrave;me sportif, devenu de plus en plus opaque (dopage, corruption, violences sexuelles, racisme), fonctionne comme un appareil id&eacute;ologique d&apos;&Eacute;tat au service des pouvoirs en place, aussi bien dans les oligarchies lib&eacute;rales que dans les r&eacute;gimes totalitaires, les dictatures militaires ou les th&eacute;ocraties islamiques.<\/p><p>Avec ses effets de diversion massive, de conformisme culturel, de mim&eacute;tisme de foule et d&apos;identification nationaliste, le sport est l&apos;exemple type d&apos;un opium du peuple.&nbsp;<br><\/p>",
            "image" => "yzcopxjhooac.jpeg",

            "video" => null,
            "canceled" => "1"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 00:02:50",
            "published" => "1",
            "date" => "2025-04-10",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Pop fascisme",
            "subtitle" => "Comment l&rsquo;extr&ecirc;me droite a gagn&eacute; la bataille culturelle sur Internet",
            "info" => "<p>Pop fascisme, Comment l&rsquo;extr&ecirc;me droite a gagn&eacute; la bataille culturelle sur Internet, Pierre Plottu et Jean Mac&eacute;, Ed. Divergences 2024.<\/p><p>Le constat est sans appel : petit &egrave; petit, ann&eacute;e apr&egrave;s ann&eacute;e, les id&eacute;es de l&rsquo;extr&ecirc;me-droite s&apos;imposent dans la soci&eacute;t&eacute;. Et ses id&eacute;es qui, longtemps, n&apos;ont pas eu droit de cit&eacute; dans le d&eacute;bat public en France, sont aujourd&apos;hui devenues mainstream. Par quel processus ? Notre invit&eacute; formule une hypoth&egrave;se qui tient en un seul mot : Internet.<\/p><p>Journaliste sp&eacute;cialiste des mouvances d&rsquo;extr&ecirc;me-droite, Pierre Plottu est le coauteur d&rsquo;un essai passionnant, &#171;&nbsp;Pop-Fascisme, comment l&apos;extr&ecirc;me droite a gagn&eacute; la bataille culturelle sur internet.&nbsp;&#187;, aux &eacute;ditions Divergences.&nbsp;&nbsp;Une nouvelle forme d&rsquo;extr&ecirc;me droite, dont l&rsquo;essor passe essentiellement par internet, s&eacute;duit une partie de la jeunesse &#171;&nbsp;connect&eacute;e&nbsp;&#187;. S&rsquo;enracinant dans la &#171;&nbsp;dissidence&nbsp;&#187;, la nouvelle droite ou la pens&eacute;e identitaire, elle r&eacute;pand ses id&eacute;es sur les r&eacute;seaux sociaux, les m&eacute;dias alternatifs et les forums avec une vitalit&eacute;&nbsp;qu&rsquo;on ne lui connait pas dans la rue. De l&rsquo;influenceuse lifestyle au dessinateur de BD, de l&rsquo;humoriste au lanceur d&rsquo;alerte, elle s&rsquo;appuie sur des strat&eacute;gies diverses pour s&eacute;duire&nbsp;hors du cadre de la politique traditionnelle. Ce livre propose une enqu&ecirc;te immersive sur ces figures influentes du web, sur leurs moyens de diffusion et de subsistance. L&rsquo;extr&ecirc;me droite a-t-elle gagn&eacute; la bataille culturelle en ligne&nbsp;? <\/p>",
            "image" => "",

            "video" => "AlW__8nypiE",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 00:08:21",
            "published" => "1",
            "date" => "2024-10-17",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "La&iuml;cit&eacute;, discriminations, racisme",
            "subtitle" => "Les professionnels de l&rsquo;&eacute;ducation &egrave; l&rsquo;&eacute;preuve",
            "info" => "<p>Ouvrage collectif &eacute;dit&eacute; par Presse Universitaire de Lyon (PUL) et dirig&eacute; par&nbsp;Fran&ccdil;oise Lantheaume,&nbsp;professeure des universit&eacute;s &eacute;m&eacute;rite en sciences de l&apos;&eacute;ducation et de la formation &egrave; l&apos;Universit&eacute; Lumi&egrave;re Lyon 2 et&nbsp;S&eacute;bastien Urbanski,&nbsp;ma&icirc;tre de conf&eacute;rences en sciences de l&apos;&eacute;ducation et de la formation &egrave; Nantes Universit&eacute;.<\/p><p>Cet ouvrage est le fruit d&apos;une vaste &eacute;tude men&eacute;e durant pr&egrave;s de cinq ans dans plus d&apos;une centaine d&apos;&eacute;tablissements scolaires, cet ouvrage constitue une analyse des r&eacute;actions des professionnels de l&apos;&eacute;ducation (enseignants, personnel &eacute;ducatifs et de sant&eacute;, direction) aux &eacute;v&eacute;nements du quotidien o&ograve; s&apos;expriment les tensions li&eacute;es &egrave; la la&iuml;cit&eacute;, aux discriminations ou au racisme.<\/p><p>Par la diversit&eacute; tant des situations que des institutions &eacute;tudi&eacute;es (coll&egrave;ges et lyc&eacute;es g&eacute;n&eacute;raux et professionnels, enseignement public et priv&eacute; confessionnel), cette observation des logiques d&apos;action collectives et personnelles des professionnels pr&eacute;sente un panorama in&eacute;dit des attitudes face aux embuches relevant de questions socialement vives. En s&rsquo;appuyant sur une m&eacute;thodologie rigoureuse, elle apporte &eacute;galement une r&eacute;ponse document&eacute;e &egrave; des&nbsp;a priori&nbsp;trop souvent instrumentalis&eacute;s par des discours m&eacute;diatiques ou partisans.<\/p><p>Si la vari&eacute;t&eacute; du territoire fran&ccdil;ais est bien repr&eacute;sent&eacute;e par la prise en compte de la multiplicit&eacute; des milieux sociaux, des zones rurales et des grandes villes, de l&apos;outremer comme des r&eacute;gions m&eacute;tropolitaines, des recherches men&eacute;es au Br&eacute;sil et en Suisse apportent un contrepoint bienvenu &egrave; celles men&eacute;es en France.&nbsp;<br><\/p>",
            "image" => "qapjpiejxowc.jpeg",

            "video" => "kudPIfORjE0",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 19:18:00",
            "published" => "1",
            "date" => "2024-09-27",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "La citoyennet&eacute; qui vient ",
            "subtitle" => "",
            "info" => "<p>La crise du syst&egrave;me repr&eacute;sentatif &eacute;tait in&eacute;vitable parce que la repr&eacute;sentation politique trahit l&apos;essence m&ecirc;me du politique. La citoyennet&eacute; n&apos;ayant de sens que par la participation directe et personnelle de chaque citoyen aux d&eacute;cisions collectives, le politique ne saurait &ecirc;tre autre chose que l&apos;espace de la discussion entre les citoyens &egrave; la recherche d&apos;un accord sur toute question que la soci&eacute;t&eacute; pose &egrave; l&apos;&Eacute;tat. Le 21e si&egrave;cle sera celui de la citoyennet&eacute; d&eacute;lib&eacute;rative ou il ne sera pas. Id&eacute;e simple, donc, mais non simpliste. Elle ne peut &ecirc;tre fond&eacute;e et justifi&eacute;e que par une pens&eacute;e du politique appel&eacute;e &egrave; r&eacute;investir la querelle des Anciens et des Modernes pour explorer les capabilit&eacute;s citoyennes &egrave; la lumi&egrave;re d&apos;une th&eacute;orie de l&apos;existence et d&apos;une m&eacute;taphysique de l&apos;homme.<\/p>",
            "image" => "knwmbmaacdlf.jpeg",

            "video" => null,
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 00:16:30",
            "published" => "1",
            "date" => "2024-09-19",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "AVANT LES FAKE NEWS",
            "subtitle" => "L&apos;emprise des extr&ecirc;mes droites sur le Net",
            "info" => "<p>Au second tour de l&apos;&eacute;lection pr&eacute;sidentielle, Marine Le Pen a obtenu 10,5 millions de voix en 2017 et plus de 13 millions en 2022, alors qu&apos;en 2002 Jean-Marie Le Pen en recevait 5,5 millions.<\/p>\r\n<p>Cette progression remarquable ne saurait &ecirc;tre analys&eacute;e comme le simple effet de quelque soudaine &#171;&nbsp;fascisation&nbsp;&#187; de la soci&eacute;t&eacute; fran&ccdil;aise, ce qui n&eacute;gligerait la strat&eacute;gie de &#171;&nbsp;guerre culturelle&nbsp;&#187; mise en Å“uvre entre ces deux &eacute;poques par les extr&ecirc;mes droites.<\/p>\r\n<p>Au tout d&eacute;but du XXIe&nbsp;si&egrave;cle en effet, les extr&ecirc;mes droites ont su anticiper le d&eacute;veloppement des nouveaux moyens de communication, d&apos;Internet aux r&eacute;seaux sociaux, et bousculer les fa&ccdil;ons de faire de la politique dans un champ d&apos;intervention ainsi d&eacute;multipli&eacute;.<\/p>\r\n<p>Reprenant la vieille pr&eacute;conisation du th&eacute;oricien d&apos;extr&ecirc;me droite Dominique Venner de &#171;&nbsp;combattre plus par l&apos;astuce que par la force&nbsp;&#187;, elles ont d&eacute;velopp&eacute; une strat&eacute;gie d&apos;influence qui n&apos;h&eacute;sitait pas &egrave; faire usage de toutes sortes de manipulations, et pr&eacute;figurait ainsi l&apos;&#171;&nbsp;&egrave;re des&nbsp;fake news&nbsp;&#187; actuelle.<\/p>",
            "image" => "mebvntfqvfka.png",

            "video" => "19zVU-jBPR8",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 00:19:35",
            "published" => "1",
            "date" => "2024-06-20",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Des h&ocirc;pitaux civils de Thiers rue Mancel Chabot au centre hospitalier quartier du Fau",
            "subtitle" => "",
            "info" => "<p>Une plong&eacute;e dans les m&eacute;moires captivantes de Guy Pailler, un homme qui a tenu sa promesse de rassembler ses souvenirs des ann&eacute;es pass&eacute;es &egrave; l&apos;h&ocirc;pital de Thiers. Lorsqu&apos;il a pris sa retraite en mai 2011, il a enfin trouv&eacute; le temps n&eacute;cessaire pour donner vie &egrave; son projet d&apos;&eacute;criture. Dans ces pages, Guy Pailler vous offre une vision d&eacute;taill&eacute;e de sa carri&egrave;re.<\/p>\r\n<p>Pour mener &egrave; bien cette t&acirc;che importante, Guy Pailler a rassembl&eacute; une multitude de documents et d&apos;archives de presse, accumul&eacute;s au fil des ann&eacute;es de son activit&eacute; au sein du syndicat CGT de l&apos;h&ocirc;pital de Thiers. Il a r&eacute;ussi &egrave; construire une narration chronologique en utilisant des articles de presse provenant des journaux &#147;La Montagne&#147; et &#147;La Gazette&#147;. Il a &eacute;galement puis&eacute; dans les ressources en ligne et les archives de la F&eacute;d&eacute;ration CGT de la sant&eacute; et de l&apos;action sociale.<\/p>\r\n<p>Gr&acirc;ce &egrave; tous ces documents, Guy Pailler relate les moments forts de son engagement syndical, o&ograve;, ses camarades et lui ont d&eacute;fendu les droits des salari&eacute;s, am&eacute;lior&eacute; les conditions de travail et pr&eacute;serv&eacute; l&apos;importance du service public.<\/p>\r\n<p>Ce livre est bien plus qu&apos;un simple t&eacute;moignage, c&apos;est un v&eacute;ritable voyage &egrave; travers le temps, o&ograve; chaque page nous plonge dans un h&eacute;ritage pr&eacute;cieux.<\/p>",
            "image" => "xyrpcxaklxyq.jpeg",

            "video" => "c5J9DKd4krM",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 00:21:50",
            "published" => "1",
            "date" => "2024-06-13",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Antisionisme, une histoire juive",
            "subtitle" => "",
            "info" => "<p>Le signe d&apos;&eacute;galit&eacute; plac&eacute; entre les termes&nbsp;&#171;&nbsp;antisionisme&nbsp;&#187;&nbsp;et&nbsp;&#171;&nbsp;antis&eacute;mitisme&nbsp;&#187;&nbsp;constitue un v&eacute;ritable d&eacute;ni d&apos;histoire, une forme de r&eacute;visionnisme qui veut effacer toute trace de la longue tradition juive, religieuse ou s&eacute;culi&egrave;re, d&apos;opposition &egrave; l&apos;id&eacute;e d&apos;&Eacute;tat-nation juif.<\/p><p>Les documents publi&eacute;s ici couvrent une p&eacute;riode allant de 1885 &egrave; 2020 et font entendre la diversit&eacute; des voix &#150;religieuses ou r&eacute;volutionnaires, lib&eacute;rales ou humanistes &#150; qui se sont &eacute;lev&eacute;es contre le sionisme et des espaces o&ograve; se d&eacute;ploie la pens&eacute;e antisioniste juive : en Occident, au sein du monde arabe ou musulman, en Isra&euml;l m&ecirc;me.<\/p><p>Lors de la c&eacute;r&eacute;monie officielle comm&eacute;morant le 75ème anniversaire de la rafle du V&eacute;l d&apos;Hiv, le pr&eacute;sident ­fran&ccdil;ais d&eacute;clarait devant le chef du gouvernement isra&eacute;lien, Benyamin Netanyahou: Nous ne c&eacute;derons rien aux messages de haine, nous ne c&eacute;derons rien &egrave; l&apos;antisionisme car il est la forme r&eacute;invent&eacute;e de l&apos;antis&eacute;mitisme.<\/p><p>Cette affirmation est le point d&apos;orgue d&apos;un processus d&apos;assimilation de toute critique de l&apos;&Eacute;tat d&apos;Isra&euml;l &egrave; l&apos;antis&eacute;mitisme et qui ignore d&eacute;lib&eacute;r&eacute;ment l&apos;opposition d&apos;intellectuel.les, de rabbins, de militant.es et d&apos;organisations juives au projet puis aux objectifs, faits et m&eacute;faits de l&apos;&Eacute;tat isra&eacute;lien.<\/p><p>On retrouvera dans ce recueil les prises de position venues de divers horizons intellectuels, toutes contestant, pour des raisons morales ou politiques, la l&eacute;gitimit&eacute;, l&apos;int&eacute;r&ecirc;t et les cons&eacute;quences du projet sioniste.<\/p><p>Hannah Arendt, Daniel Bensa&iuml;d, Judith Butler, Hilla Dayan, Isaac Deutscher, Henryk Erlich, Karl Kraus, Ilan Papp&eacute;, Maxime Rodinson, Abraham Serfaty, ou encore Michel Warschawski sont quelques-uns des noms qui jalonnent ce recueil de textes courant de 1885 &egrave; 2020 o&ograve; se fait entendre la diversit&eacute; des voix &#150; religieuses ou r&eacute;volutionnaires, lib&eacute;rales ou humanistes &#150; qui se sont &eacute;lev&eacute;es contre le sionisme‚en Occident, au sein du monde arabo-musulman et en Isra&euml;l m&ecirc;me. <\/p>",
            "image" => "fejclwwwqpvw.webp",

            "video" => "TiV0NfmsF3c",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 00:22:53",
            "published" => "1",
            "date" => "2024-06-06",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Velomerica",
            "subtitle" => "De l&rsquo;Alaska &egrave; la Patagonie, 21 741 kilom&egrave;tres &egrave; v&eacute;lo en famille",
            "info" => "<p>Une maman p&eacute;dale avec ses enfants et leur papa, du nord au sud des Am&eacute;riques. Elle t&eacute;moigne de leur p&eacute;riple : camper au milieu des grizzlis d&rsquo;Alaska, affronter le Mexique en proie &egrave; la violence des narcos, parcourir la for&ecirc;t amazonienne, franchir plusieurs fois les Andes, traverser le d&eacute;sert d&rsquo;Atacama, souffrir du vent infernal de la Patagonie... Elle m&ecirc;le au r&eacute;cit de leurs d&eacute;couvertes et de leurs rencontres, ses r&eacute;flexions de maman sur le retour &egrave; la nature, le d&eacute;veloppement des enfants, le d&eacute;passement de soi ou encore le pillage des ressources naturelles et la violence qu&rsquo;il engendre.<\/p>",
            "image" => "uyqlnxuxrsev.png",

            "video" => "pPlDSoiX75s",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 00:24:54",
            "published" => "1",
            "date" => "2024-05-30",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "PALESTINE plus d&apos;un si&egrave;cle de d&eacute;possession",
            "subtitle" => "Histoire abr&eacute;g&eacute;e de la colonisation, du nettoyage ethnique et de l&apos;apartheid",
            "info" => "<p>Ce livre montre que, depuis 120 ans, l&rsquo;histoire d&rsquo;Isra&euml;l\/Palestine se r&eacute;sume &egrave; une entreprise de colonisation de peuplement. Pour le r&eacute;aliser, le colonisateur a, en toute impunit&eacute;, spoli&eacute;, expuls&eacute; et fragment&eacute; la soci&eacute;t&eacute; palestinienne.<\/p><p>Critique&nbsp;<\/p><p><strong>C&eacute;line Brun<\/strong>,<\/p><p>chercheuse &egrave; l&apos;universit&eacute; Paris Sorbonne&nbsp;coautrice du livre &#171;&nbsp;Isra&euml;l, un &eacute;tat d&apos;apartheid&nbsp;?&nbsp;&#187;:<\/p><p>La richesse de ce livre r&eacute;side dans les nombreuses citations et documents d&apos;&eacute;poque qui, alli&eacute;s &egrave; une br&egrave;ve analyse historique, permettent au lecteur de&nbsp;comprendre l&apos;essentiel du d&eacute;sastre&nbsp;caus&eacute; en Palestine depuis pr&egrave;s de deux si&egrave;cles par les id&eacute;ologies imp&eacute;rialiste et sioniste.<\/p><p><strong>Pierre Stambul<\/strong>,<\/p><p>Copr&eacute;sident de l&apos;UJFP, auteur de &#171;&nbsp;Isra&euml;l-Palestine&nbsp;&#187; et &#171;&nbsp;Le sionisme en questions&nbsp;&#187;&nbsp;:<\/p><p>La propagande sioniste fonctionne sur des id&eacute;es simples&nbsp;:<\/p><p>&#171;&nbsp;Nous rentrons apr&egrave;s deux mille ans d&apos;exil&nbsp;&#187;&nbsp;; la Palestine &eacute;tait &#171;&nbsp;une terre sans peuple pour un peuple sans terre&nbsp;&#187;&nbsp;; &#171;&nbsp;En 1948, Les Arabes sont partis d&apos;eux-m&ecirc;mes&nbsp;&#187;&nbsp;; &#171;&nbsp;Apr&egrave;s ce qu&apos;ils ont subi, ils ont bien le droit &egrave; un pays&nbsp;&#187;&#133; Il est indispensable de raconter la v&eacute;rit&eacute; historique. C&apos;est ce que fait ce livre, nombreux documents &egrave; l&apos;appui. <\/p>",
            "image" => "",

            "video" => "2msdFh7bMsg",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 00:26:40",
            "published" => "1",
            "date" => "2024-05-02",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Domestiquer la Terre.",
            "subtitle" => "Du r&eacute;chauffement climatique &egrave; la destruction de Gaza",
            "info" => "<p>Descartes proclamait que la science nous rendrait &#171;&nbsp;comme ma&icirc;tres et possesseurs de la nature&nbsp;&#187;. Nous sommes aujourd&rsquo;hui capables de changer le climat, d&rsquo;&eacute;teindre des esp&egrave;ces vivantes, et de rendre des territoires inhabitables. Cette transformation n&rsquo;avait rien d&rsquo;in&eacute;luctable, et est &eacute;troitement li&eacute;e &egrave; des luttes pour le pouvoir. Dans le prolongement de mon livre, je t&acirc;cherai de montrer comment elle a eu lieu, et de d&eacute;crire les enjeux aujourd&rsquo;hui, en m&rsquo;appuyant sur deux exemples, la surexploitation des oc&eacute;ans et le remodelage de la Palestine.<\/p>",
            "image" => "",

            "video" => "gnpHeYcc7dg",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 00:28:12",
            "published" => "1",
            "date" => "2024-04-19",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Comment la Palestine fut perdue",
            "subtitle" => "Et pourquoi Isra&euml;l n&rsquo;a pas gagn&eacute;. Histoire d&rsquo;un conflit (XIXe-XXIe si&egrave;cle)",
            "info" => "<p>Si vous estimez conna&icirc;tre assez du conflit isra&eacute;lo-palestinien pour en nourrir des opinions d&eacute;finitives, mieux vaut ne pas ouvrir le dernier livre de JP Filiu. Vous risqueriez d&apos;y apprendre que le sionisme fut tr&egrave;s longtemps chr&eacute;tien avant que d&apos;&ecirc;tre juif. Et que l&apos;&eacute;vang&eacute;lisme anglo-saxon explique beaucoup plus qu&apos;un fantasmatique &#171; lobby juif &#187; le soutien d&eacute;terminant de la Grande-Bretagne, puis des &Eacute;tats-Unis &egrave; la colonisation de la Palestine. Vous pourriez aussi d&eacute;couvrir que la soi-disant &#171; solidarit&eacute; arabe &#187; avec la Palestine a justifi&eacute; les rivalit&eacute;s entre r&eacute;gimes pour accaparer cette cause symbolique, quitte &egrave; massacrer les Palestiniens qui r&eacute;sistaient &egrave; de telles manoeuvres. Ou que la dynamique factionnelle a, d&egrave;s l&apos;origine, min&eacute; et affaibli le nationalisme palestinien, culminant avec la polarisation actuelle entre le Fatah de Ramallah et le Hamas de Gaza.<\/p>\r\n<p>La persistance de l&apos;injustice faite au peuple palestinien n&apos;a pas peu contribu&eacute; &egrave; l&apos;ensauvagement du monde actuel, &egrave; la militarisation des relations internationales et au naufrage de l&apos;ONU, paralys&eacute;e par Washington au profit d&apos;Isra&euml;l durant des d&eacute;cennies, bien avant de l&apos;&ecirc;tre par Moscou sur la Syrie, puis sur l&apos;Ukraine. L&apos;illusion qu&apos;un tel d&eacute;ni pouvait perdurer ind&eacute;finiment a vol&eacute; en &eacute;clat dans l&apos;horreur de la confrontation actuelle, d&apos;autant plus tragique qu&apos;aucune solution militaire ne peut &ecirc;tre apport&eacute;e au d&eacute;fi de deux peuples<\/p>\r\n<p>vivant ensemble sur la m&ecirc;me terre. Comprendre comment la Palestine fut perdue, et pourquoi Isra&euml;l n&apos;a pourtant pas gagn&eacute;, participe d&egrave;s lors d&apos;une r&eacute;flexion ouverte sur l&apos;imp&eacute;ratif d&apos;une paix enfin durable au Moyen-Orient et, donc, sur le devenir de ce nouveau mill&eacute;naire.<\/p>",
            "image" => "phwlhoksbsqo.jpeg",

            "video" => null,
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 00:30:16",
            "published" => "1",
            "date" => "2023-06-08",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Ind&eacute;cence urbaine",
            "subtitle" => "",
            "info" => "<p>Les grandes villes sont responsables des crises majeures de notre temps. Elles imposent des rapports consum&eacute;ristes et productivistes au monde sans offrir en retour une &eacute;cologie &egrave; la hauteur de la d&eacute;vastation orchestr&eacute;e par l&apos;id&eacute;ologie urbaine. L&apos;&eacute;quivalent d&apos;une ville comme New York sort de terre tous les mois dans le monde. Les cent premi&egrave;res villes de France ont trois jours d&apos;autonomie alimentaire. Les m&eacute;tropoles deviennent des fournaises. Et le sentiment de leur invivabilit&eacute; pr&eacute;vaut chaque jour davantage.<\/p>\r\n<p>Pour enrayer ce mouvement mortif&egrave;re, il ne s&apos;agit pas seulement de changer de civilisation, mais de changer ce qu&apos;est la civilisation, de d&eacute;velopper la recherche d&apos;autonomie comme mode de vie, dans ce qu&apos;elle recr&eacute;e de proximit&eacute; et de solidarit&eacute;s, en faisant le choix d&apos;une autre abondance, celle de la vie. Le monde d&apos;apr&egrave;s est l&egrave;.<\/p>\r\n<p>Paysanneries revivifiant les ruralit&eacute;s par une agriculture non pr&eacute;datrice, red&eacute;ploiement de l&apos;artisanat, multiplication des lieux d&apos;exp&eacute;rimentation, red&eacute;couverte de savoirs aujourd&apos;hui discr&eacute;dit&eacute;s, r&eacute;appropriation de l&apos;ing&eacute;niosit&eacute; lib&eacute;ratrice des individus et des collectifs : tel est aujourd&apos;hui le fondement r&eacute;volutionnaire d&apos;un nouveau pacte avec le vivant.<\/p>",
            "image" => "moionmezdchw.jpeg",

            "video" => "_DUfQIVCK28",
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 00:33:39",
            "published" => "1",
            "date" => "2022-06-16",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Ventes d&rsquo;armes, une honte fran&ccdil;aise",
            "subtitle" => "",
            "info" => "<p>Silence, on arme !<\/p>\r\n<p>Depuis plus de cinquante ans, faisant fi de ses engagements au profit de se int&eacute;r&ecirc;ts &eacute;conomiques le &#171;&nbsp;pays des droits de l&rsquo;homme&nbsp;&#187; arme des r&eacute;gimes qui les bafouent ouvertement. Une strat&eacute;gie payante : la France est aujourd&rsquo;hui le troisi&egrave;me exportateur mondial de mat&eacute;riel militaire.<\/p>",
            "image" => "fwxixlzwrmqy.png",

            "video" => null,
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 18:45:34",
            "published" => "1",
            "date" => "2022-06-16",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Ventes d&rsquo;armes, une honte fran&ccdil;aise",
            "subtitle" => "",
            "info" => "<p>Silence, on arme !<\/p>\r\n<p>Depuis plus de cinquante ans, faisant fi de ses engagements au profit de se int&eacute;r&ecirc;ts &eacute;conomiques le &#171;&nbsp;pays des droits de l&rsquo;homme&nbsp;&#187; arme des r&eacute;gimes qui les bafouent ouvertement. Une strat&eacute;gie payante : la France est aujourd&rsquo;hui le troisi&egrave;me exportateur mondial de mat&eacute;riel militaire.<\/p>",
            "image" => "dukiesbnpbqc.png",

            "video" => null,
            "canceled" => "1"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 18:48:26",
            "published" => "1",
            "date" => "2022-06-02",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Les bourgeoises",
            "subtitle" => "",
            "info" => "<p>Les personnages de femmes peuplant le recueil d&rsquo;Astrid Eliard ont en commun d&rsquo;appartenir &egrave; une m&ecirc;me classe sociale, la bourgeoisie, n&eacute;o-bobos d&rsquo;aujourd&rsquo;hui, de vieille tradition fran&ccdil;aise, ou parvenues r&eacute;centes, tour &egrave; tour ridicules ou attachantes.<\/p>",
            "image" => "",

            "video" => null,
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 18:57:10",
            "published" => "1",
            "date" => "2022-04-28",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Hommage &egrave; Marcel Trillat",
            "subtitle" => "Projection \/ d&eacute;bat",
            "info" => "<p>&Agrave; partir d&rsquo;extraits de films documentaires et de quelques archives sonores, il sera donc ici tent&eacute; de retracer la carri&egrave;re et de cerner les engagements d&rsquo;un homme du XXe si&egrave;cle, dont beaucoup appr&eacute;ciaient l&rsquo;&eacute;thique et l&rsquo;int&eacute;grit&eacute;. Il sera question de t&eacute;l&eacute;vision publique et de radio ind&eacute;pendante, de censures et de libert&eacute; d&rsquo;expression, d&rsquo;information et de cr&eacute;ation documentaire.<\/p>",
            "image" => "",

            "video" => null,
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 20:18:45",
            "published" => "1",
            "date" => "2022-04-14",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "&#171; Comment l&rsquo;&eacute;tat s&rsquo;attaque &egrave; nos libert&eacute;s &#187;",
            "subtitle" => "",
            "info" => "<p>&#171; Surveill&eacute;s et punis &#187; propose de faire le point pour comprendre comment en vingt ans les autorit&eacute;s ont rogn&eacute; nos droits. Pourquoi et comment avons-nous laiss&eacute; faire ? Si un gouvernement x&eacute;nophobe et autoritaire arrivait au pouvoir, quels outils aurait-il &egrave; sa disposition ? Quels garde-fous nous prot&egrave;gent encore ? Cet ouvrage est aussi un appel &egrave; un &eacute;lan citoyen.<\/p>\r\n<p>Fallait-il vivre un confinement mondial au printemps 2020 pour se rendre compte que, du karcher sarkoziste &egrave; la &#171; guerre &#187; contre la covid en passant par les &eacute;tats d&apos;urgence terroriste, nous avons progressivement renonc&eacute; &egrave; des libert&eacute;s fondamentales.<\/p>",
            "image" => "fkqllvjwyjbr.png",

            "video" => null,
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 20:21:57",
            "published" => "1",
            "date" => "2022-03-10",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "&#171; Habiter le monde &#187;",
            "subtitle" => "(Parce qu&rsquo;il en est ainsi de notre condition humaine)",
            "info" => "<p>&#171; Habiter le monde\/aux origines de notre temps&nbsp;&#187; a pour ambition de revisiter cinq si&egrave;cles de domination occidentale par le prisme des grandes repr&eacute;sentations &eacute;conomiques qui s&apos;y sont succ&eacute;d&eacute;es.<\/p>\r\n<p>Cet exercice est retenu comme un pr&eacute;alable essentiel, apr&egrave;s la crise des Subprimes et de la Covid 19 et alors que les canons tonnent tout pr&egrave;s et que le Giec ne cesse de nous alerter, pour comprendre les enjeux de la pr&eacute;sidentielle et nourrir le d&eacute;bat d&eacute;mocratique.<\/p>",
            "image" => "mhllgbyojjdi.png",

            "video" => null,
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 20:22:46",
            "published" => "1",
            "date" => "2022-02-10",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "D&eacute;faire le capitalisme, refaire la d&eacute;mocratie",
            "subtitle" => "",
            "info" => "<p>A l&rsquo;heure o&ograve; la critique antisyst&egrave;me nourrit les ennemis de la d&eacute;mocratie, il est temps de passer de la d&eacute;construction &egrave; la reconstruction, de la mise en lumi&egrave;re des dysfonctionnements r&eacute;guliers &egrave; l&rsquo;&eacute;clairage des fonctionnements alternatifs, de la soumission au d&eacute;sespoir du r&eacute;el &egrave; l&rsquo;esp&eacute;rance constructive de l&rsquo;utopie. La t&acirc;che la plus urgente du chercheur est d&rsquo;ouvrir, &egrave; nouveau, l&rsquo;espace des possibles.<\/p>",
            "image" => "bicpoyvckwdd.png",

            "video" => null,
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 20:23:46",
            "published" => "1",
            "date" => "2022-01-20",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "5G mon amour",
            "subtitle" => "Enqu&ecirc;te sur la face cach&eacute;e des r&eacute;seaux mobiles",
            "info" => "<p>Comment et par qui les normes, cens&eacute;es nous prot&eacute;ger, ont-elles &eacute;t&eacute; mises en place ? Quels liens entre op&eacute;rateurs t&eacute;l&eacute;phoniques, m&eacute;dias et gouvernements ? Quels sont les effets de cette technologie sur la sant&eacute; humaine et le v<\/p>",
            "image" => "gggvizdllykw.png",

            "video" => null,
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 20:24:45",
            "published" => "1",
            "date" => "2021-12-09",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Les Grands patrons en France",
            "subtitle" => "du capitalisme d&rsquo;&eacute;tat &egrave; la financiarisation",
            "info" => "<p>Qui sont les grands patrons en France ? D&rsquo;o&ograve; viennent-ils et comment sont-ils parvenus &egrave; la t&ecirc;te des plus grandes entreprises fran&ccdil;aises ? La crise conduit &egrave; s&rsquo;interroger sur les &eacute;lites et leur l&eacute;gitimit&eacute; &egrave; exercer le pouvoir &eacute;conomique. Analysant les r&eacute;seaux, les relations d&rsquo;affaire, origines sociales et parcours de s grands patrons fran&ccdil;ais, les auteurs montrent que cette mutation a &eacute;t&eacute; largement conduite par les anciennes &eacute;lites administratives, qui se sont converties aux vertus du lib&eacute;ralisme et du capitalisme financier.<\/p>",
            "image" => "ulriouadvypx.png",

            "video" => null,
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 20:25:37",
            "published" => "1",
            "date" => "2021-10-07",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "La non &eacute;puration en France de 1943 aux ann&eacute;es 50",
            "subtitle" => "",
            "info" => "<p>Y a-t-il vraiment eu en France une politique d&rsquo;&eacute;puration ? L&rsquo;auteure explore cette question tout au long de son ouvrage dans lequel elle d&eacute;montre que l&rsquo;&eacute;puration criminalis&eacute;e ayant suivie la Lib&eacute;ration (femmes tondues, cours martiales, ex&eacute;cutions) a cherch&eacute; &egrave; camoufler la non-&eacute;puration, ausi bien de la part des minist&egrave;res de l&rsquo;int&eacute;rieur et de la justice que de celle des milieux financiers, de la magistrature, des journalistes, des hommes politiques, voire de l&rsquo;&Eacute;glise.<\/p>\r\n<p>De nombreux anciens collaborateurs ont ainsi b&eacute;n&eacute;fici&eacute; de &#171;&nbsp;grands protecteurs&nbsp;&#187;.<\/p>",
            "image" => "mytswcihuocx.png",

            "video" => null,
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 20:26:46",
            "published" => "1",
            "date" => "2021-09-16",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "H&eacute;ritage et Fermeture",
            "subtitle" => "Une &eacute;cologie du d&eacute;mant&egrave;lement",
            "info" => "<p>Nous d&eacute;pendons pour notre subsistance d&apos;un &#171;monde organis&eacute;&#187;, tram&eacute; par l&apos;industrie et le management. Ce monde menace aujourd&apos;hui de s&apos;effondrer. Alors que les mouvements progressistes r&ecirc;vent de monde commun, nous h&eacute;ritons contre notre gr&eacute; de communs moins bucoliques, &#171;n&eacute;gatifs&#187;, &egrave; l&apos;image des fleuves et sols contamin&eacute;s, des industries polluantes, des cha&icirc;nes logistiques ou encore des technologies num&eacute;riques. Que faire de ce lourd h&eacute;ritage dont d&eacute;pendent &egrave; court terme des milliards de personnes, alors qu&apos;il les condamne &egrave; moyen terme? Nous n&apos;avons pas d&apos;autre choix que d&apos;apprendre, en urgence, &egrave; destaurer, fermer et r&eacute;affecter ce patrimoine. Et ce, sans liquider les enjeux de justice et de d&eacute;mocratie. Contre le front de modernisation et son anthropologie du projet, de l&apos;ouverture et de l&apos;innovation, il reste &egrave; inventer un art de la fermeture et du d&eacute;mant&egrave;lement: une (anti)&eacute;cologie qui met &#171;les mains dans le cambouis&#187;.<\/p>",
            "image" => "mquldmfzxpyg.png",

            "video" => null,
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 20:28:28",
            "published" => "1",
            "date" => "2020-02-20",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "L&rsquo;Europe et IsraeÌˆl",
            "subtitle" => "",
            "info" => "<p>Isra&euml;l est souvent per&ccdil;u comme le 51&egrave;me &eacute;tat des USA. Il serait en passe de devenir membre de l&rsquo;union europ&eacute;enne. Le journaliste David Cronin examine les liens &eacute;troits tiss&eacute;s par les entreprises du continent avec ce petit &eacute;tat du Moyen-Orient.<\/p>",
            "image" => "",

            "video" => null,
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 20:29:09",
            "published" => "1",
            "date" => "2020-01-23",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Les lois du capital",
            "subtitle" => "",
            "info" => "<p>Episode 6 de la s&eacute;rie documentaire sur ARTE : Travail, salaire, profit.<\/p>",
            "image" => "",

            "video" => null,
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 19:39:00",
            "published" => "1",
            "date" => "2020-01-16",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "Le mysteÌ€re MicheÌa (portrait d&rsquo;un anarchiste conservateur)",
            "subtitle" => "",
            "info" => "<p>Jean Claude Mich&eacute;a est philosophe et auteur, disciple de Georges Orwell. Critique de la gauche il n&rsquo;a jamais donn&eacute; de gages &egrave; la droite.<\/p>",
            "image" => "uzedevduztee.png",

            "video" => null,
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-05-20 21:47:12",
            "published" => "1",
            "date" => "2018-11-15",
            "time" => "20:00",
            "location_id" => "1",
            "title" => "L&rsquo;ingeÌrence francÌ§aise en CoÌ‚te d&rsquo;Ivoire",
            "subtitle" => "",
            "info" => "<p>Derri&egrave;re une neutralit&eacute; affich&eacute;e, La France n&rsquo;a cess&eacute; d&rsquo;intervenir dans la vie politique Ivoirienne, d&eacute;fendant aprement ses int&eacute;r&ecirc;ts &eacute;conomique et son influence r&eacute;gionale. De la mort d&rsquo;Houphou&ecirc;t-Boigny &egrave; la chute de Gbagbo, tout l&rsquo;arsenal de la Fran&ccdil;afrique s&rsquo;est d&eacute;ploy&eacute; en C&ocirc;te d&rsquo;Ivoire.<\/p>",
            "image" => "",

            "video" => null,
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-11-07 21:01:00",
            "published" => "1",
            "date" => "2025-11-20",
            "time" => "19:00",
            "location_id" => "1",
            "title" => "La civilisation jud&eacute;o-chr&eacute;tienne",
            "subtitle" => "Anatomie d&rsquo;une imposture",
            "info" => "<p>Depuis quarante ans, le concept de &#171; civilisation jud&eacute;ochr&eacute;tienne &#187; domine les discours politiques et m&eacute;diatiques en Occident, pr&eacute;sent&eacute; comme le socle culturel de l&apos;Europe et de l&apos;Am&eacute;rique du Nord. Mais que cache cette expression devenue une r&eacute;f&eacute;rence h&eacute;g&eacute;monique ?<\/p><p>R&eacute;cup&eacute;r&eacute; par des acteurs vari&eacute;s &#150; &Eacute;tats, mouvements politiques ou nationalismes &#150; ce concept est utilis&eacute; de toutes parts pour r&eacute;&eacute;crire l&apos;histoire, servant en Europe &egrave; occulter deux mill&eacute;naires de pers&eacute;cutions antis&eacute;mites, &egrave; nier l&apos;apport de l&apos;Orient dans son pass&eacute; et &egrave; exclure l&apos;islam de ses r&eacute;f&eacute;rences culturelles. Le sionisme puis l&apos;&Eacute;tat d&apos;Isra&euml;l &egrave; partir de sa cr&eacute;ation ont eu besoin d&apos;affirmer leur ancrage exclusif &egrave; l&apos;Occident, se proclamant aujourd&apos;hui comme le &#171; bastion avanc&eacute; de la civilisation jud&eacute;ochr&eacute;tienne &#187; face &egrave; &#171; l&apos;ennemi arabo-musulman &#187;, tandis que les nationalismes arabes ont vu dans cette expression un instrument commode pour nier la dimension juive de l&apos;histoire de leurs propres pays.<\/p><p>Sophie Bessis d&eacute;voile comment ce bin&ocirc;me, loin d&apos;&ecirc;tre neutre, est utilis&eacute; partout pour rendre impossibles des convergences culturelles et politiques qui pourraient &ecirc;tre autant de chemins vers la paix. <\/p>",
            "image" => "nzxhbgtwcqnf.jpeg",

            "video" => null,
            "canceled" => "1"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-12-19 14:45:00",
            "published" => "1",
            "date" => "2026-01-22",
            "time" => "19:00",
            "location_id" => "1",
            "title" => "Gaza, une guerre coloniale",
            "subtitle" => "",
            "info" => "<p>La guerre d&eacute;clench&eacute;e &egrave; Gaza apr&egrave;s le 7 octobre 2023 s&rsquo;inscrit dans une continuit&eacute; qui n&rsquo;implique pas seulement la bande de Gaza mais &eacute;galement le reste de la Palestine historique ainsi que les soci&eacute;t&eacute;s alentour, de longue date concern&eacute;es par l&rsquo;actualit&eacute; palestinienne. De quoi la guerre actuelle &egrave; Gaza est-elle le nom ou l&rsquo;apog&eacute;e ? Quels processus et quelles logiques, pouss&eacute;s &egrave; leur terme, sont-ils &egrave; l&rsquo;oeuvre dans les massacres en cours ? Un ouvrage pluridisciplinaire, alliant analyse politique, perspectives judiciaires et historiques &egrave; des approches socio-anthropologiques, pour comprendre l&rsquo;histoire en train de se faire.&nbsp;<\/p>",
            "image" => "udvpniwnquxu.jpeg",

            "video" => null,
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-09-16 14:14:00",
            "published" => "1",
            "date" => "2026-03-23",
            "time" => "19:00",
            "location_id" => "1",
            "title" => "Le monde confisqu&eacute;",
            "subtitle" => "Essai sur le capitalisme de la finitude (XVIe - XXIe si&egrave;cle)",
            "info" => "<p>La guerre d&eacute;clench&eacute;e &egrave; Gaza apr&egrave;s le 7 octobre 2023 s&rsquo;inscrit dans une continuit&eacute; qui n&rsquo;implique pas seulement la bande de Gaza mais &eacute;galement le reste de la Palestine historique ainsi que les soci&eacute;t&eacute;s alentour, de longue date concern&eacute;es par l&rsquo;actualit&eacute; palestinienne. De quoi la guerre actuelle &egrave; Gaza est-elle le nom ou l&rsquo;apog&eacute;e ? Quels processus et quelles logiques, pouss&eacute;s &egrave; leur terme, sont-ils &egrave; l&rsquo;oeuvre dans les massacres en cours ? Un ouvrage pluridisciplinaire, alliant analyse politique, perspectives judiciaires et historiques &egrave; des approches socio-anthropologiques, pour comprendre l&rsquo;histoire en train de se faire.&nbsp;<\/p>",
            "image" => "mcrdfgsbijnz.jpeg",

            "video" => null,
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-09-21 07:03:00",
            "published" => "1",
            "date" => "2025-10-02",
            "time" => "19:00",
            "location_id" => "1",
            "title" => "7 octobre",
            "subtitle" => "Enqu&ecirc;te sur la journ&eacute;e qui a chang&eacute; le monde",
            "info" => "<p>R&eacute;sum&eacute;<\/p><p>Au d&eacute;but, le 7 octobre, c&apos;&eacute;tait tr&egrave;s simple&nbsp;: 40 b&eacute;b&eacute;s d&eacute;capit&eacute;s, viols de masse, festivaliers et kibboutz d&eacute;lib&eacute;r&eacute;ment attaqu&eacute;s pour massacrer le plus possible de civils&#133; Et tout cela sans raison&nbsp;: une haine inexplicable des &#171;&nbsp;terroristes du Hamas&nbsp;&#187;&#133;<\/p><p>Et puis, une autre version est apparue en&#133; Isra&euml;l&nbsp;! &Ccdil;a et l&egrave;, quelques m&eacute;dias y ont publi&eacute; des r&eacute;v&eacute;lations &eacute;tonnantes sur cette journ&eacute;e dramatique. Tr&egrave;s curieusement, les m&eacute;dias fran&ccdil;ais et europ&eacute;ens ont tu ces r&eacute;v&eacute;lations. Pourquoi&nbsp;?<\/p><p>Aujourd&apos;hui, l&apos;enqu&ecirc;te minutieuse et approfondie de Jean-Pierre Bouch&eacute; et Michel Collon vous surprendra. Elle passionnera tous ceux qui veulent comprendre les conflits en recherchant la v&eacute;rit&eacute; dans les faits, en confrontant les versions, en &eacute;tudiant les causes. Puisque chaque guerre se double d&apos;une guerre des propagandes, il est urgent d&apos;&eacute;couter les t&eacute;moins directs. Et de r&eacute;fl&eacute;chir.<\/p><p>Il n&apos;y aura pas de paix sans une info correcte.<\/p><p><\/p>",
            "image" => "zqopepmfeecs.jpeg",

            "video" => null,
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-11-07 20:55:00",
            "published" => "1",
            "date" => "2025-11-13",
            "time" => "19:00",
            "location_id" => "1",
            "title" => "Collaborations",
            "subtitle" => "Enqu&ecirc;te sur l&rsquo;extr&ecirc;me droite et les milieux d&rsquo;affaires",
            "info" => "<p>R&eacute;sum&eacute; :<\/p><p>Une partie des &eacute;lites &eacute;conomiques fran&ccdil;aises tisse depuis quelques ann&eacute;es des liens avec l&rsquo;extr&ecirc;me droite, jusqu&rsquo;&egrave; s&rsquo;y rallier parfois ouvertement. Depuis la dissolution de l&rsquo;Assembl&eacute;e en juin 2024, ce mouvement s&rsquo;acc&eacute;l&egrave;re : des chefs d&rsquo;entreprise, grands et petits, renoncent au \" barrage r&eacute;publicain \" et se pr&eacute;parent &egrave; collaborer avec le RN et ses alli&eacute;s. Laurent Mauduit l&egrave;ve le voile sur ces complicit&eacute;s qui, discr&egrave;tes hier encore, sont aujourd&rsquo;hui de plus en plus souvent assum&eacute;es. Rencontres en coulisse, alliances d&rsquo;int&eacute;r&ecirc;ts, fascination pour le capitalisme autoritaire et libertarien promu par Trump, Musk ou Milei... L&rsquo;auteur d&eacute;crypte cette dynamique inqui&eacute;tante o&ograve; les milieux d&rsquo;affaires trouvent dans l&rsquo;extr&ecirc;me droite une opportunit&eacute; pour imposer leur agenda. Si les positions de Bernard Arnault, Charles Beigbeder, Vincent Bollor&eacute; ou Pierre-&Eacute;douard St&eacute;rin, sont d&eacute;sormais publiques, nombre d&rsquo;autres patrons, plus discrets, mus par des int&eacute;r&ecirc;ts purement mercantiles, leur embo&icirc;tent le pas et participent aujourd&rsquo;hui activement &egrave; la mont&eacute;e d&rsquo;un projet politique raciste et liberticide. Dans cette enqu&ecirc;te in&eacute;dite, Laurent Mauduit nous entra&icirc;ne des salons feutr&eacute;s de l&rsquo;Ouest parisien, o&ograve; &eacute;voluent les grands patrons, jusqu&rsquo;aux PME de province, d&eacute;voilant un processus en cours qui fait &eacute;cho aux heures les plus sombres de notre histoire. Comment ne pas penser, comme le montre l&rsquo;auteur, aux ann&eacute;es 1930, lorsque le patronat, d&eacute;j&egrave;, jouait un r&ocirc;le majeur dans l&rsquo;accession au pouvoir des r&eacute;gimes fascistes et nazi ? Aujourd&rsquo;hui, alors que le capitalisme traverse une crise prolong&eacute;e, les milieux d&rsquo;affaires sont &egrave; nouveau des acteurs pleinement engag&eacute;s dans la mont&eacute;e de l&rsquo;extr&ecirc;me droite.<\/p>",
            "image" => "vdpinuibkiir.jpeg",

            "video" => null,
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-10-14 17:16:00",
            "published" => "1",
            "date" => "2026-04-16",
            "time" => "19:00",
            "location_id" => "1",
            "title" => "La haine des fonctionnaires",
            "subtitle" => "",
            "info" => "<p>&#171; Les fonctionnaires, soumis d&eacute;sormais &egrave; des contraintes de rentabilit&eacute;, peinent &egrave; servir leurs missions d&apos;int&eacute;r&ecirc;t g&eacute;n&eacute;ral. Ce livre montre leurs vies, au plus pr&egrave;s de l&apos;accomplissement de leurs t&acirc;ches. &#187; Tout le monde conna&icirc;t l&apos;&eacute;quation : fonctionnaires = feignasses = pas rentables = emmerdeurs = prot&eacute;g&eacute;s = profiteurs = archa&iuml;ques = inutiles = &egrave; compresser. D&apos;o&ograve; vient son incroyable puissance d&apos;&eacute;vidence ? Et quels int&eacute;r&ecirc;ts sert-elle ? Pourquoi certains (hauts) fonctionnaires comptent-ils parmi ceux qui la r&eacute;p&egrave;tent le plus ? Pourquoi autant d&apos;insultes contre celles et ceux qui voudraient servir le public en toute &eacute;galit&eacute;, et si peu envers les actionnaires, les employeurs ou les pollueurs ? Pour r&eacute;pondre &egrave; ces questions, ce livre part d&apos;id&eacute;es re&ccdil;ues, de sc&egrave;nes de la vie quotidienne et de st&eacute;r&eacute;otypes. Nous entra&icirc;nant dans les coulisses de la fonction publique, il d&eacute;voile les r&eacute;alit&eacute;s v&eacute;cues par les agents de m&eacute;nage, les ouvriers des voiries, les secr&eacute;taires de mairie, les enseignants, les gardiens de prison et bien d&apos;autres. Le d&eacute;nigrement des fonctionnaires n&apos;est en r&eacute;alit&eacute; qu&apos;un pr&eacute;texte &egrave; la d&eacute;t&eacute;rioration acc&eacute;l&eacute;r&eacute;e des services publics. Ainsi, pour l&apos;ensemble des usagers qui souffrent de leur disparition, pour celles et ceux qui en ont assez qu&apos;on stigmatise ces m&eacute;tiers, il s&apos;agit de ne pas se tromper de cibles et d&apos;organiser la riposte : il en va de notre bien commun.<\/p><p><\/p>",
            "image" => "nczvgahxmemw.jpeg",

            "video" => null,
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-09-16 17:19:29",
            "published" => "1",
            "date" => "2025-12-11",
            "time" => "19:00",
            "location_id" => "1",
            "title" => "L&rsquo;&egrave;re de la post-v&eacute;rit&eacute;",
            "subtitle" => "Comment les algorithmes changent notre rapport &egrave; la r&eacute;alit&eacute;",
            "info" => "<p>&Agrave; une &eacute;poque o&ograve; tout un chacun se r&eacute;clame de la raison, le monde semble avoir perdu la t&ecirc;te, des &Eacute;tats-Unis &egrave; l&rsquo;Argentine en passant par l&rsquo;Europe. Non seulement les individus peinent &egrave; discerner le vrai du faux, mais ils valorisent moins la v&eacute;rit&eacute;. Pr&eacute;f&eacute;rant les opinions pr&eacute;con&ccdil;ues et les fictions &egrave; la science, ils prennent de plus en plus leurs fantasmes et leurs peurs pour des r&eacute;alit&eacute;s. Partout, les soci&eacute;t&eacute;s se polarisent. Fruit de trois ans de recherche pluridisciplinaire, cet ouvrage est le premier &egrave; caract&eacute;riser scientifiquement la post-v&eacute;rit&eacute; et &egrave; en explorer toutes les dimensions, bien au-del&egrave; des \" infox \" auxquelles on la r&eacute;duit abusivement. Dans une approche m&ecirc;lant psychologie, neurosciences et &eacute;conomie des &eacute;motions, il montre les effets d&eacute;vastateurs d&rsquo;Internet et des r&eacute;seaux sociaux, dont les algorithmes privil&eacute;gient les contenus clivants et anxiog&egrave;nes tout en confortant les croyances pr&eacute;alables. Ainsi se forment de dangereuses \" bulles cognitives \". Le diagnostic est sans appel : ce basculement progressif des mentalit&eacute;s est intimement li&eacute; au capitalisme. Pour g&eacute;n&eacute;rer un maximum de revenus publicitaires, les algorithmes s&rsquo;adressent &egrave; la part de nous-m&ecirc;me qui souhaite se d&eacute;barrasser de la r&eacute;alit&eacute;. Et s&rsquo;ils instauraient la plus insidieuse des servitudes volontaires, avec notre complicit&eacute; inconsciente ? Cet essai d&eacute;montre aussi que l&rsquo;essor mondial des extr&ecirc;mes droites est en grande partie d&ucirc; aux biais d&rsquo;Internet et des r&eacute;seaux sociaux, qui en favorisent les id&eacute;es. Un livre salutaire qui invite &egrave; un sursaut de lucidit&eacute; face &egrave; un enjeu social majeur de ce si&egrave;cle.<\/p>",
            "image" => "pupypexdonyc.jpeg",

            "video" => null,
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-10-15 20:43:00",
            "published" => "1",
            "date" => "2026-03-26",
            "time" => "19:00",
            "location_id" => "1",
            "title" => "Grands ensemble",
            "subtitle" => "Violence, solidarit&eacute; et ressentiment dans les quartiers populaires",
            "info" => "<p>&Agrave; rebours des clich&eacute;s, une enqu&ecirc;te patiente men&eacute;e pendant dix ans par Fabien Truong et G&eacute;r&ocirc;me Truc dans la foul&eacute;e des attentats de 2015, &egrave; Grigny, ville \" la plus pauvre de France \" &#150; qui est aussi celle du \" terroriste de l&rsquo;Hyper Cacher \".<\/p><p>Au plus pr&egrave;s des personnes et des faits, Grands ensemble &eacute;claire d&rsquo;un nouveau jour le rapport des quartiers populaires aux attentats islamistes et, de l&egrave;, la vie ordinaire de leurs habitantes et habitants, &egrave; l&rsquo;&eacute;preuve des violences qui p&egrave;sent structurellement sur leur quotidien : celles des trafics et de la police, mais aussi de l&rsquo;exploitation, de la pauvret&eacute;, du racisme, du virilisme et de la stigmatisation. &Agrave; l&rsquo;&eacute;preuve aussi des blessures intimes et des combats communs. Comment tient-on dans ces conditions ? Qu&rsquo;induit le fait de vivre en se sachant scrut&eacute; par les m&eacute;dias, point&eacute; du doigt quand un voisin bascule dans le terrorisme ? Pourquoi les conditions de vie dans ces quartiers ne cessent-elles de se d&eacute;grader, alors qu&rsquo;une large part de leur population parvient &egrave; trouver sa place dans la soci&eacute;t&eacute; ?<\/p><p>Les r&eacute;ponses apport&eacute;es ici &eacute;pousent le rythme et les contours de multiples trajectoires entrecrois&eacute;es. Des vies qui rappellent que la pauvret&eacute; et la marginalisation engendrent solidarit&eacute;s mais aussi rivalit&eacute;s, pavant la voie &egrave; un rapport au monde o&ograve; le ressentiment coexiste avec l&rsquo;espoir et la joie. <\/p>",
            "image" => "kshvfdzcbqym.jpeg",

            "video" => null,
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-11-24 08:25:00",
            "published" => "1",
            "date" => "2025-12-04",
            "time" => "19:00",
            "location_id" => "1",
            "title" => "Nos quartiers ont de la gueule",
            "subtitle" => "Cin&eacute;-D&eacute;bat ",
            "info" => "<p><em>Nos quartiers ont de la gueule&nbsp;!<\/em><\/p><p>Pr&eacute;sentation<\/p><p>Cela fait plus de quarante ans que les habitants des quartiers populaires crient haut et fort leur col&egrave;re.<\/p><p>Ce documentaire, cam&eacute;ra au poing suit la caravane &#171;&nbsp;Nos quartiers ont de la gueule&nbsp;!&nbsp;&#187; de la Coordination nationale Pas sans Nous qui a sillonn&eacute; la France pendant plus de 4 mois en 2021-2022 &egrave; la rencontre des habitants de 44 villes et 74 quartiers. Il y raconte le quotidien et donne la parole &egrave; celles et ceux que l&apos;on n&apos;entend pas ou que l&apos;on refuse d&apos;&eacute;couter. Qu&apos;ils soient habitants, travailleurs, ch&ocirc;meurs, retrait&eacute;s, militants, toutes et tous t&eacute;moignent sur le vif de leur r&eacute;alit&eacute; et d&eacute;noncent les injustices sociales qu&apos;ils vivent.<\/p><p>Condens&eacute; des &eacute;tapes de la caravane &egrave; travers 44 villes et 74 quartiers, Nos quartiers ont de la gueule interroge les repr&eacute;sentations n&eacute;gatives sur les quartiers et r&eacute;ussit &egrave; mettre en lumi&egrave;re l&apos;humanit&eacute; et la solidarit&eacute; qui les animent malgr&eacute; les conditions de vies difficiles.<\/p><p><br><\/p>",
            "image" => "skcvarudpsed.jpeg",

            "video" => null,
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-10-31 21:30:00",
            "published" => "1",
            "date" => "2026-04-09",
            "time" => "19:00",
            "location_id" => "1",
            "title" => "Le Puy du Faux",
            "subtitle" => "Enqu&ecirc;te sur un parc qui d&eacute;forme l&rsquo;Histoire",
            "info" => "<p>quatre historiens et historiennes se sont immerg&eacute;&#183;es au Puy-du-Fou et ont assist&eacute; &egrave; tout le spectacle, comme le font chaque ann&eacute;e 2,3 millions de visiteurs. Ce livre d&eacute;crypte les images et les r&eacute;cits. Il traque les erreurs historiques, les biais politiques, les r&eacute;alit&eacute;s occult&eacute;es et les simplifications. En r&eacute;pondant &egrave; la question &#171; Autour de quels messages le r&eacute;cit historique du Puy-du-Fou s&apos;articule-t-il ? &#187;, cet &eacute;crit nous renvoie aux enjeux de m&eacute;moire et aux nombreux d&eacute;bats et pol&eacute;miques sur l&apos;identit&eacute; de la France. Il est clair que dans ce spectacle l&apos;histoire est romanc&eacute;e et r&eacute;invent&eacute;e. Au profit de qui ? Ce livre est &eacute;clairant, que l&apos;on soit d&eacute;j&egrave; all&eacute; ou non au Puy-du-Fou. Une&nbsp;enqu&ecirc;te minutieuse et pleine d&apos;humour o&ograve; appara&icirc;t, derri&egrave;re les effets sp&eacute;ciaux et les d&eacute;cors somptueux, un univers rempli d&apos;erreurs et de simplifications, le tout au service d&apos;une propagande diffuse qu&apos;il s&apos;agit de rep&eacute;rer si on veut la combattre. <\/p>",
            "image" => "bjmgpdtyscdq.png",

            "video" => null,
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-10-27 10:02:44",
            "published" => "1",
            "date" => "2026-05-21",
            "time" => "19:00",
            "location_id" => "1",
            "title" => "La concience juive &egrave; l&rsquo;&eacute;preuve des massacres",
            "subtitle" => "Isra&euml;l-Gaza",
            "info" => "<p>&#171;&nbsp;Ce texte court, que nous avons con&ccdil;u comme un examen de conscience sans concession, replace le choc du 7&nbsp;octobre 2023 et de ses suites dans l&apos;histoire longue du conflit isra&eacute;lo-palestinien. Il analyse nos doutes, notre situation d&eacute;licate, d&eacute;chir&eacute;s que nous sommes entre les horreurs commises par le Hamas, notre attachement &egrave; l&apos;&eacute;thique juive, notre rejet de la politique isra&eacute;lienne, notre indignation et notre douleur face au massacre commis &egrave; Gaza. Il explique aussi &egrave; quelle d&eacute;ception nous a expos&eacute;s une partie de la gauche radicale par certaines de ses r&eacute;actions. Nous sommes l&apos;un et l&apos;autre, comme universitaires et comme essayistes, des sp&eacute;cialistes reconnus de l&apos;histoire du juda&iuml;sme et des Juifs. Nous connaissons par ailleurs personnellement aussi bien Isra&euml;l que la Palestine comme r&eacute;alit&eacute;s concr&egrave;tes et vivantes. Nous avons soutenu publiquement la cause palestinienne toutes ces ann&eacute;es, et continuons de la soutenir.&nbsp;&#187; Esther Benbassa et Jean-Christophe Attias&nbsp;<\/p>",
            "image" => "",

            "video" => null,
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-10-29 09:29:45",
            "published" => "1",
            "date" => "2025-03-05",
            "time" => "19:00",
            "location_id" => "1",
            "title" => "Ha&iuml;ti - France, les cha&icirc;nes de la dette",
            "subtitle" => "Le rapport Mackau (1825)",
            "info" => "<p><em>Ha&iuml;ti - France, les cha&icirc;nes de la dette - Le rapport Mackau (1825), &Eacute;ditions H&eacute;misph&egrave;res et Nouvelles &Eacute;ditions Maisonneuve & Larose, <\/em>DORIGNY M - THEODAT JM - GAILLARD GK - BRUFFAERTS JC (AE)<\/p><p>Pr&eacute;sentation de Fritz Jean, &eacute;conomiste, &eacute;crivain et ancien gouverneur de la Banque de la R&eacute;publique d&apos;Ha&iuml;ti.<\/p><p>Pr&eacute;face de Thomas Piketty, &eacute;conomiste, directeur d&apos;&eacute;tude &egrave; l&apos;EHESS, professeur &egrave; l&apos;&Eacute;cole d&apos;&eacute;conomie de Paris, notamment auteur du Capital au XXIe si&egrave;cle. <\/p><p>Par une ordonnance du roi Charles X du 17 avril 1825, la France reconna&icirc;t l&apos;ind&eacute;pendance de sa colonie de Saint-Domingue. Cette reconnaissance est soumise au paiement, par la r&eacute;publique d&apos;Ha&iuml;ti, d&apos;une somme de 150 millions de francs-or destin&eacute;e &egrave; indemniser les colons fran&ccdil;ais qui ont fui la colonie entre 1791 et 1804. Un haut dignitaire fran&ccdil;ais, le baron de Mackau, futur ministre des Colonies de Louis-Philippe, est charg&eacute; de remettre cette ordonnance unilat&eacute;rale du roi de France au pr&eacute;sident d&apos;Ha&iuml;ti, Jean-Pierre Boyer. &Agrave; son retour de mission, en septembre 1825, Mackau r&eacute;dige un rapport : c&apos;est ce document exceptionnel, r&eacute;cemment d&eacute;couvert et jusqu&apos;&egrave; pr&eacute;sent in&eacute;dit, qui est au cÅ“ur de l&apos;ouvrage.<\/p><p>La publication du rapport Mackau apporte un &eacute;clairage de premi&egrave;re importance au long d&eacute;bat, souvent tr&egrave;s pol&eacute;mique, relatif &egrave; la &#171; dette de l&apos;ind&eacute;pendance &#187; impos&eacute;e &egrave; Ha&iuml;ti par l&apos;ancienne m&eacute;tropole. Un d&eacute;bat qui a notamment ressurgi &egrave; l&apos;occasion du tragique s&eacute;isme qui a d&eacute;truit Port-au-Prince en janvier 2010 et, plus r&eacute;cemment, dans le contexte de la crise politique actuelle en Ha&iuml;ti, sur fond de corruption et de d&eacute;tournement massif de capitaux. Cette fameuse &#171; dette de l&apos;ind&eacute;pendance ha&iuml;tienne &#187; est mise en perspective gr&acirc;ce &egrave; un appareil critique et aux articles que signent les quatre coauteurs de l&apos;ouvrage. <\/p>",
            "image" => "",

            "video" => null,
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-10-29 08:48:00",
            "published" => "1",
            "date" => "2026-03-05",
            "time" => "19:00",
            "location_id" => "1",
            "title" => "Ha&iuml;ti - France, les cha&icirc;nes de la dette.",
            "subtitle" => "Le rapport Mackau (1825)",
            "info" => "<p><em>Ha&iuml;ti - France, les cha&icirc;nes de la dette - Le rapport Mackau (1825), &Eacute;ditions H&eacute;misph&egrave;res et Nouvelles &Eacute;ditions Maisonneuve & Larose, DORIGNY M - THEODAT JM - GAILLARD GK - BRUFFAERTS JC (AE)<\/em><\/p><p>Pr&eacute;sentation de <strong>Fritz Jean<\/strong>, &eacute;conomiste, &eacute;crivain et ancien gouverneur de la Banque de la R&eacute;publique d&apos;Ha&iuml;ti.<\/p><p>Pr&eacute;face de <strong>Thomas Piketty<\/strong>, &eacute;conomiste, directeur d&apos;&eacute;tude &egrave; l&apos;EHESS, professeur &egrave; l&apos;&Eacute;cole d&apos;&eacute;conomie de Paris, notamment auteur du Capital au XXIe si&egrave;cle. <\/p><p>R&eacute;sum&eacute;<\/p><p>Par une ordonnance du roi Charles X du 17 avril 1825, la France reconna&icirc;t l&apos;ind&eacute;pendance de sa colonie de Saint-Domingue. Cette reconnaissance est soumise au paiement, par la r&eacute;publique d&apos;Ha&iuml;ti, d&apos;une somme de 150 millions de francs-or destin&eacute;e &egrave; indemniser les colons fran&ccdil;ais qui ont fui la colonie entre 1791 et 1804. Un haut dignitaire fran&ccdil;ais, le baron de Mackau, futur ministre des Colonies de Louis-Philippe, est charg&eacute; de remettre cette ordonnance unilat&eacute;rale du roi de France au pr&eacute;sident d&apos;Ha&iuml;ti, Jean-Pierre Boyer. &Agrave; son retour de mission, en septembre 1825, Mackau r&eacute;dige un rapport : c&apos;est ce document exceptionnel, r&eacute;cemment d&eacute;couvert et jusqu&apos;&egrave; pr&eacute;sent in&eacute;dit, qui est au cÅ“ur de l&apos;ouvrage.<\/p><p>La publication du rapport Mackau apporte un &eacute;clairage de premi&egrave;re importance au long d&eacute;bat, souvent tr&egrave;s pol&eacute;mique, relatif &egrave; la &#171; dette de l&apos;ind&eacute;pendance &#187; impos&eacute;e &egrave; Ha&iuml;ti par l&apos;ancienne m&eacute;tropole. Un d&eacute;bat qui a notamment ressurgi &egrave; l&apos;occasion du tragique s&eacute;isme qui a d&eacute;truit Port-au-Prince en janvier 2010 et, plus r&eacute;cemment, dans le contexte de la crise politique actuelle en Ha&iuml;ti, sur fond de corruption et de d&eacute;tournement massif de capitaux. Cette fameuse &#171; dette de l&apos;ind&eacute;pendance ha&iuml;tienne &#187; est mise en perspective gr&acirc;ce &egrave; un appareil critique et aux articles que signent les quatre coauteurs de l&apos;ouvrage.<\/p><p><\/p><p><\/p><p><\/p>",
            "image" => "iezermlrozai.jpeg",

            "video" => null,
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-12-01 13:16:00",
            "published" => "1",
            "date" => "2026-01-09",
            "time" => "19:00",
            "location_id" => "1",
            "title" => "D&eacute;couvrir Fanon",
            "subtitle" => "",
            "info" => "<p>R&eacute;sum&eacute;<\/p><p>Souvent &eacute;voqu&eacute;e, la figure de Fanon reste mal connue.&nbsp; Les textes ici rassembl&eacute;s montrent la richesse de son Å“uvre mue par une ambition constante : analyser les causes de l&apos;oppression et lutter pour la lib&eacute;ration des peuples. &Agrave; la crois&eacute;e de diff&eacute;rents champs &#150; antiracisme, psychiatrie, philosophie, anti-colonialisme &#150; son Å“uvre fonde une pens&eacute;e r&eacute;volutionnaire et humaniste. Tout en contextualisant ses grandes analyses &#150; l&apos;exp&eacute;rience du racisme, la violence r&eacute;volutionnaire &#150; cet ouvrage pr&eacute;sente aussi certains textes moins connus (la psychiatrie en contexte colonial, le d&eacute;voilement des Alg&eacute;riennes par l&apos;arm&eacute;e fran&ccdil;aise&#133;). <\/p>",
            "image" => "qqapypowywqy.jpeg",

            "video" => null,
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-11-07 08:01:00",
            "published" => "1",
            "date" => "2025-11-20",
            "time" => "19:00",
            "location_id" => "1",
            "title" => "L&rsquo;espace public &eacute;clat&eacute;",
            "subtitle" => "",
            "info" => "<p>R&eacute;sum&eacute;<\/p><p>Pas de d&eacute;mocratie sans espace public. Ce dernier, dans la Gr&egrave;ce antique, &eacute;tait un espace physique local (l&apos;agora) o&ograve; se regroupaient les citoyens pour d&eacute;cider ensemble de la vie de la cit&eacute;. C&apos;est, aujourd&apos;hui, un espace symbolique ouvert &egrave; l&apos;international o&ograve; se confrontent les acteurs politiques, les m&eacute;dias, les r&eacute;seaux sociaux etc., en vue de contribuer &egrave; &eacute;laborer l&apos;opinion publique. Ainsi, comprendre l&apos;espace public, c&apos;est expliquer la soci&eacute;t&eacute; d&eacute;mocratique dans laquelle nous vivons. C&apos;est pourquoi l&apos;objectif de cet ouvrage collectif est d&apos;en cerner les &eacute;volutions r&eacute;centes. Or loin de s&apos;unifier sous la pression technologique, l&apos;espace public se fragmente en raison de logiques sociales et culturelles diverses. Puisse cet &#171; Essentiel &#187; permettre aulectorat de prendre ses distances critiques avec les visions simplistes de l&apos;espace public, coeur de nos soci&eacute;t&eacute;s.<\/p><p>Auteurs : Alain Bussi&egrave;re, Jean Corneloup, &Eacute;ric Dacheux, Nicolas Duracka, Laurent Fraisse, Florine Garlot, Tourya Guaaybess, &Eacute;tienne Tassin, Mihaela Alexandra Tudor, Geoffrey Volat, Dominique Wolton. <\/p>",
            "image" => "zescatnlrpsp.jpeg",

            "video" => null,
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-12-08 11:21:00",
            "published" => "1",
            "date" => "2026-01-15",
            "time" => "19:00",
            "location_id" => "1",
            "title" => "1945 : les Fran&ccdil;ais ont la parole",
            "subtitle" => "Les cahiers de dol&eacute;ances des &Eacute;tats g&eacute;n&eacute;raux de la Renaissance fran&ccdil;aise",
            "info" => "<p>En d&eacute;cembre 1944, le Conseil national de la R&eacute;sistance d&eacute;cide de la tenue d&apos;&Eacute;tats g&eacute;n&eacute;raux de la Renaissance fran&ccdil;aise &egrave; Paris du 10 au 13 juillet. Les comit&eacute;s d&eacute;partementaux de Lib&eacute;ration doivent pr&eacute;alablement organiser des assembl&eacute;es communales charg&eacute;es d&apos;&eacute;laborer des &#171; cahiers de dol&eacute;ances &#187;, empruntant &egrave; 1789. <\/p><p>Leur objectif : permettre une appropriation collective du programme du CNR, proposer &egrave; leur &eacute;chelle des d&eacute;clinaisons concr&egrave;tes d&apos;une &#171; v&eacute;ritable d&eacute;mocratie &eacute;conomique et sociale &#187; et s&apos;attacher aux questions soci&eacute;tales et macro-politiques qui se sont pr&eacute;cis&eacute;es ou ont &eacute;merg&eacute; depuis la Lib&eacute;ration. <\/p><p>Les synth&egrave;ses d&eacute;partementales et des centaines de cahiers communaux conserv&eacute;s par Louis Saillant, alors pr&eacute;sident du CNR permettent une plong&eacute;e dans la France de 1945 et ses aspirations.&nbsp;<\/p>",
            "image" => "hupdgogpvvtz.jpeg",

            "video" => null,
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-11-07 10:42:00",
            "published" => "1",
            "date" => "2026-02-12",
            "time" => "19:00",
            "location_id" => "1",
            "title" => "Discriminations",
            "subtitle" => "Pourquoi sont elles un d&eacute;fi majeur des soci&eacute;t&eacute;s d&eacute;mocratiques et comment les combattre",
            "info" => "",
            "image" => "",

            "video" => null,
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-11-10 12:14:00",
            "published" => "1",
            "date" => "2026-05-28",
            "time" => "19:00",
            "location_id" => "1",
            "title" => "Le Proche-Orient miroir du monde",
            "subtitle" => "Comprendre le basculement en cours",
            "info" => "<p><em>Le Proche-Orient, miroir du monde Comprendre le basculement en cours. <\/em>Editions La D&eacute;couverte, octobre 2025<\/p><p><a href=\"https:\/\/www.editionsladecouverte.fr\/le_proche_orient_miroir_du_monde-9782348089732\" data-mce-href=\"https:\/\/www.editionsladecouverte.fr\/le_proche_orient_miroir_du_monde-9782348089732\">https:\/\/www.editionsladecouverte.fr\/le_proche_orient_miroir_du_monde-9782348089732<\/a><\/p><p>R&eacute;sum&eacute;<\/p><p>&Agrave; Gaza, un g&eacute;nocide est en cours, orchestr&eacute; par le gouvernement de Benjamin Netanyahou, qui poursuit parall&egrave;lement une politique de nettoyage ethnique et d&rsquo;annexion en Cisjordanie, avec le soutien de Donald Trump et la passivit&eacute; complice de la majorit&eacute; des gouvernements europ&eacute;ens. Au Liban, la population est tiraill&eacute;e entre aspirations &egrave; des r&eacute;formes, menaces de nouvelles crises, occupation et attaques isra&eacute;liennes dans le sud du pays. En Syrie, apr&egrave;s quatorze ann&eacute;es de r&eacute;volution, de guerre et d&rsquo;interventions &eacute;trang&egrave;res, le r&eacute;gime des Assad a &eacute;t&eacute; renvers&eacute;, ouvrant la voie &egrave; une transition marqu&eacute;e par la violence dans un pays morcel&eacute;, ravag&eacute; et amput&eacute; de nouveaux territoires occup&eacute;s par les Isra&eacute;liens. L&rsquo;Iran, puissance r&eacute;gionale dominante depuis 2003, voit son influence vaciller &egrave; la suite des revers subis par ses alli&eacute;s et d&rsquo;un affrontement direct avec Isra&euml;l et les &Eacute;tats-Unis. Comment appr&eacute;hender cette brutale acc&eacute;l&eacute;ration de l&rsquo;histoire ? En quoi les bouleversements du Proche-Orient r&eacute;v&egrave;lent-ils les lignes de fracture d&rsquo;un ordre mondial en recomposition, o&ograve; logiques imp&eacute;riales, replis identitaires et h&eacute;ritages coloniaux supplantent les principes universels et les normes juridiques issus de l&rsquo;apr&egrave;s-1945 ? Cet ouvrage propose des cl&eacute;s de lecture pour comprendre ces transformations. &Agrave; travers l&rsquo;examen rigoureux de huit moments fondateurs entre 1915 et 2025, il retrace un si&egrave;cle de luttes, d&rsquo;ing&eacute;rences et de reconfigurations, et rend accessible l&rsquo;histoire contemporaine d&rsquo;un Proche-Orient plus que jamais miroir du monde.<\/p>",
            "image" => "vyatiultiwxo.jpeg",

            "video" => null,
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-12-09 18:25:00",
            "published" => "1",
            "date" => "2026-05-07",
            "time" => "19:00",
            "location_id" => "1",
            "title" => "Un historien &egrave; Gaza",
            "subtitle" => "Un t&eacute;moignage de premi&egrave;re main",
            "info" => "<p><em>Un historien &egrave; Gaza.<\/em><\/p><p>Un t&eacute;moignage de premi&egrave;re main.&nbsp;<\/p><p>&nbsp;&#171; Vous avez voulu l&apos;enfer, vous aurez l&apos;enfer. &#187;<\/p><p>C&apos;est en ces termes que l&apos;arm&eacute;e isra&eacute;lienne a d&eacute;clench&eacute; sa guerre contre la bande de Gaza apr&egrave;s les attentats du 7 octobre 2023. Une guerre qui, malgr&eacute; sa violence, sa dur&eacute;e et ses r&eacute;percussions plan&eacute;taires, se d&eacute;roule &egrave; huis clos. Aucun journaliste ou reporter &eacute;tranger n&apos;a acc&egrave;s &egrave; l&apos;enclave palestinienne. Pourtant, en d&eacute;cembre 2024, Jean-Pierre Filiu a r&eacute;ussi &egrave; se rendre dans la bande de Gaza pour y vivre pendant un peu plus d&apos;un mois. Il conna&icirc;t intimement ce territoire, sa g&eacute;ographie et son peuple, dont il parle la langue. Sur place, l&apos;historien s&apos;est fait enqu&ecirc;teur. Il nous permet de renouer avec les humbles et les sans-grade de ce territoire abandonn&eacute; du monde. Leur combat quotidien pour la survie et pour la dignit&eacute; nous offre une formidable le&ccdil;on d&apos;humanit&eacute;, car ce qui se d&eacute;roule dans cette prison &egrave; ciel ouvert a et aura une valeur universelle. &#171; Le territoire que j&apos;ai connu et arpent&eacute; n&apos;existe plus. Ce qu&apos;il en reste d&eacute;fie les mots. &#187; &nbsp; Jean-Pierre Filiu verse l&apos;int&eacute;gralit&eacute; de ses droits sur ce livre &egrave; M&eacute;decins sans fronti&egrave;res (MSF) pour son action &egrave; Gaza.<\/p>",
            "image" => "cjljchospgsd.jpeg",

            "video" => null,
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-12-18 12:00:11",
            "published" => "1",
            "date" => "2026-06-04",
            "time" => "19:00",
            "location_id" => "1",
            "title" => "Pour en finir avec les id&eacute;es fausses sur l&rsquo;Histoire de France",
            "subtitle" => "&#171; Le Moyen &Acirc;ge est une &eacute;poque sombre &#187;, &#171; Les racines de la France sont chr&eacute;tiennes &#187;, &#171; La colonisation a eu beaucoup d&apos;aspects positifs &#187;,&nbsp; &#171; La France n&apos;a pas de responsabilit&eacute; dans le g&eacute;nocide du Rwanda &#187;, &#171; Tous collabos ! &#187;",
            "info" => "<p>L&apos;histoire est sans doute la discipline la plus instrumentalis&eacute;e. Malmen&eacute;e, d&eacute;tourn&eacute;e, arrang&eacute;e... l&apos;ing&eacute;rence dans le travail des historiens &egrave; des fins politiques est monnaie courante. Julien Th&eacute;ry d&eacute;cortique une vingtaine d&apos;id&eacute;es fausses, l&apos;occasion de revenir sur des moments cl&eacute;s de l&apos;histoire de notre pays, mais aussi de faire un &eacute;tat des lieux de la recherche historiographique sur des questions cruciales, au centre de d&eacute;bats qui m&eacute;ritent des mises au point salutaires.&nbsp;<\/p>",
            "image" => "hkojfoqjxtah.jpeg",

            "video" => null,
            "canceled" => "0"
        ]);
        DB::table('events')->insert([

            "created_at" => "2025-12-19 14:27:00",
            "published" => "1",
            "date" => "2026-02-19",
            "time" => "19:00",
            "location_id" => "1",
            "title" => "Le probl&egrave;me &egrave; trois corps du capitalisme",
            "subtitle" => "De l&rsquo;impasse lib&eacute;rale-d&eacute;mocratique &egrave; la fuite en avant autoritaire",
            "info" => "<p>Le capitalisme est confront&eacute; &egrave; un probl&egrave;me &eacute;quivalent &egrave; celui &egrave; trois corps des astrophysiciens : les crises qui le minent entretiennent des interactions dont la dynamique est impr&eacute;visible, &eacute;vacuant tout espoir d&rsquo;en ma&icirc;triser les termes. Traiter ces crises s&eacute;par&eacute;ment nous emm&egrave;ne dans le mur ; prendre au s&eacute;rieux leur entrem&ecirc;lement nous poussera vers la seule issue : la sortie.&nbsp;<\/p>",
            "image" => "qvbxfxpoyipd.jpeg",

            "video" => null,
            "canceled" => "0"
        ]);
    }
}
