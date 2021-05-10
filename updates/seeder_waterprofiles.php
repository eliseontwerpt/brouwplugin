<?php namespace EliseOntwerpt\Brouwerbouwer\Updates;

use Seeder;
use Db;

class Seeder_eliseontwerpt_brouwerbouwer_waterprofiles extends Seeder
	{
	public function run()
	{
		DB::table('eliseontwerpt_brouwerbouwer_waterprofiles')->insert([
			'id'			=>	"1",
			'name'			=>	"Groningen",
			'description'			=>	"Gemiddelde van drie waterproductie locaties",
			'calcium'			=>	"54",
			'magnesium'			=>	"6",
			'natrium'			=>	"21",
			'chloride'			=>	"37",
			'sulfate'			=>	"16",
			'bicarbonate'			=>	"164",
		]);
		DB::table('eliseontwerpt_brouwerbouwer_waterprofiles')->insert([
			'id'			=>	"2",
			'name'			=>	"Balanced Profile II",
			'description'			=>	"Dit waterprofiel is vergelijkbaar met het Balanced Profile maar met tweemaal zoveel mineralen. Het is geschikt voor donker gouden tot diep amberkleurige bieren. Het hogere ionengehalte maakt het beter geschikt voor sterkere en robuustere stijlen.",
			'calcium'			=>	"150",
			'magnesium'			=>	"10",
			'natrium'			=>	"80",
			'chloride'			=>	"150",
			'sulfate'			=>	"160",
			'bicarbonate'			=>	"220",
		]);
		DB::table('eliseontwerpt_brouwerbouwer_waterprofiles')->insert([
			'id'			=>	"3",
			'name'			=>	"Balanced Profile",
			'description'			=>	"Dit basiswaterprofiel is geschikt voor bieren van donker goudkleurig tot diep amberkleurig. Het doorgaans lage ionengehalte mag de smaak van het bier niet verstoren.",
			'calcium'			=>	"80",
			'magnesium'			=>	"5",
			'natrium'			=>	"25",
			'chloride'			=>	"75",
			'sulfate'			=>	"80",
			'bicarbonate'			=>	"100",
		]);
		DB::table('eliseontwerpt_brouwerbouwer_waterprofiles')->insert([
			'id'			=>	"4",
			'name'			=>	"Light colored and malty",
			'description'			=>	"Lage restalkaliniteit en een sulfaat-tot-chloride-verhouding die in evenwicht is met chloride, maken dit een uitstekende keuze voor lichtgekleurde (2-5 SRM) en moutbieren. Het mineraalgehalte is terughoudend en mag niet doorkomen in de smaak van het bier.",
			'calcium'			=>	"60",
			'magnesium'			=>	"5",
			'natrium'			=>	"10",
			'chloride'			=>	"95",
			'sulfate'			=>	"55",
			'bicarbonate'			=>	"0",
		]);
		DB::table('eliseontwerpt_brouwerbouwer_waterprofiles')->insert([
			'id'			=>	"5",
			'name'			=>	"Light colored and hoppy",
			'description'			=>	"Lage restalkaliteit en een sulfaat-chlorideverhouding in evenwicht met sulfaat, maken dit een uitstekende keuze voor lichtgekleurde (2-5 SRM) en hop forward-bieren. Het mineraalgehalte is terughoudend en mag niet doorkomen in de smaak van het bier.",
			'calcium'			=>	"75",
			'magnesium'			=>	"5",
			'natrium'			=>	"10",
			'chloride'			=>	"50",
			'sulfate'			=>	"150",
			'bicarbonate'			=>	"0",
		]);
		DB::table('eliseontwerpt_brouwerbouwer_waterprofiles')->insert([
			'id'			=>	"6",
			'name'			=>	"Burton on Trent (historic)",
			'description'			=>	"Burton on Trent staat bekend om water met een zeer hoog sulfaatgehalte. Dit profiel is samengesteld op basis van een wateranalyse van Burton bronwater, gepubliceerd in Burton-on-Trent, Its History, Its Waters and Its Breweries uit 1869.",
			'calcium'			=>	"270",
			'magnesium'			=>	"41",
			'natrium'			=>	"113",
			'chloride'			=>	"85",
			'sulfate'			=>	"720",
			'bicarbonate'			=>	"270",
		]);
		DB::table('eliseontwerpt_brouwerbouwer_waterprofiles')->insert([
			'id'			=>	"7",
			'name'			=>	"Burton on Trent (historic and decarbonated)",
			'description'			=>	"Burton on Trent staat bekend om water met een zeer hoog sulfaatgehalte. Dit profiel is opgebouwd uit een historisch waterprofiel na decarbonatie door middel van kokende of gebluste kalk. Door de lage restalkaliteit konden Engelse brouwers bleke bieren brouwen.",
			'calcium'			=>	"187",
			'magnesium'			=>	"41",
			'natrium'			=>	"113",
			'chloride'			=>	"85",
			'sulfate'			=>	"720",
			'bicarbonate'			=>	"20",
		]);
		DB::table('eliseontwerpt_brouwerbouwer_waterprofiles')->insert([
			'id'			=>	"8",
			'name'			=>	"Dortmund (historic)",
			'description'			=>	"Het kenmerkende van het historische Dortmunder brouwwaterprofiel is het hoge calcium- en sulfaatgehalte dat de Dortmunder Export extra bitterheid verleent. Dit waterprofiel is gereconstrueerd op basis van analysegegevens die zijn gegeven in een artikel uit 1953 over residuale alkaliniteit door Kolbach.",
			'calcium'			=>	"250",
			'magnesium'			=>	"20",
			'natrium'			=>	"10",
			'chloride'			=>	"100",
			'sulfate'			=>	"300",
			'bicarbonate'			=>	"340",
		]);
		DB::table('eliseontwerpt_brouwerbouwer_waterprofiles')->insert([
			'id'			=>	"9",
			'name'			=>	"Dortmund (historic and decarbonated)",
			'description'			=>	"Dit is het waterprofiel van Dortmunder water nadat het is ontkoold met gebluste kalk. Dit lijkt op het koolstofarme waterprofiel dat Kolbach in zijn artikel uit 1953 gaf en het was hoogstwaarschijnlijk het waterprofiel dat door de Dortmunder-brouwers werd gebruikt.",
			'calcium'			=>	"155",
			'magnesium'			=>	"23",
			'natrium'			=>	"10",
			'chloride'			=>	"100",
			'sulfate'			=>	"300",
			'bicarbonate'			=>	"53",
		]);
		DB::table('eliseontwerpt_brouwerbouwer_waterprofiles')->insert([
			'id'			=>	"10",
			'name'			=>	"Dublin (Dry Stout)",
			'description'			=>	"Met zijn hoge alkaliteit is Dublin-water zeer geschikt voor stouts en andere donkere ales.",
			'calcium'			=>	"120",
			'magnesium'			=>	"4",
			'natrium'			=>	"12",
			'chloride'			=>	"19",
			'sulfate'			=>	"53",
			'bicarbonate'			=>	"319",
		]);
		DB::table('eliseontwerpt_brouwerbouwer_waterprofiles')->insert([
			'id'			=>	"11",
			'name'			=>	"Edinburgh (Scottish Ale, Malty Ale)",
			'description'			=>	"Een van de historische waterprofielen voor Edinburgh, Schotland. Vanwege zijn geologie hebben Schotse brouwers toegang tot veel verschillende wateren, afhankelijk van waar en hoe diep een put wordt geboord. Dit specifieke profiel is zeer geschikt voor donkere Schotse ales.",
			'calcium'			=>	"100",
			'magnesium'			=>	"18",
			'natrium'			=>	"20",
			'chloride'			=>	"45",
			'sulfate'			=>	"105",
			'bicarbonate'			=>	"235",
		]);
		DB::table('eliseontwerpt_brouwerbouwer_waterprofiles')->insert([
			'id'			=>	"12",
			'name'			=>	"London (Porter, dark ales)",
			'description'			=>	"Met zijn hoge tijdelijke hardheid is het London waterprofiel zeer geschikt voor donkere bieren zoals Porter. Dit profiel is ontleend aan een gemiddeld Londens waterrapport en komt ook overeen met het historische Londense profiel uit verschillende literatuurbronnen.",
			'calcium'			=>	"100",
			'magnesium'			=>	"5",
			'natrium'			=>	"35",
			'chloride'			=>	"60",
			'sulfate'			=>	"50",
			'bicarbonate'			=>	"265",
		]);
		DB::table('eliseontwerpt_brouwerbouwer_waterprofiles')->insert([
			'id'			=>	"13",
			'name'			=>	"Munich (Dark Lager)",
			'description'			=>	"Water uit München heeft een hoge tijdelijke hardheid en is zeer geschikt voor donkere lagers zoals Munich Dunkel, Schwarzbier of Doppelbock. Vanwege de hoge restalkaliteit wordt dit waterprofiel niet aanbevolen voor München Helles of Maibock. De mineraalgehaltes voor deze doelstelling zijn afkomstig uit het waterkwaliteitsrapport 2013 voor München.",
			'calcium'			=>	"82",
			'magnesium'			=>	"20",
			'natrium'			=>	"4",
			'chloride'			=>	"2",
			'sulfate'			=>	"16",
			'bicarbonate'			=>	"320",
		]);
		DB::table('eliseontwerpt_brouwerbouwer_waterprofiles')->insert([
			'id'			=>	"14",
			'name'			=>	"Munich (decarbonated)",
			'description'			=>	"Het waterprofiel van München na behandeling met gebluste kalk en toevoeging van wat calciumchloride en gips. Dat is het soort waterbehandeling dat een brouwer uit München zou kunnen doen om het water geschikter te maken voor lichtere bieren. Goed geschikt voor Märzen en Maibock.",
			'calcium'			=>	"40",
			'magnesium'			=>	"20",
			'natrium'			=>	"4",
			'chloride'			=>	"75",
			'sulfate'			=>	"52",
			'bicarbonate'			=>	"29",
		]);
		DB::table('eliseontwerpt_brouwerbouwer_waterprofiles')->insert([
			'id'			=>	"15",
			'name'			=>	"Düsseldorf (Altbier)",
			'description'			=>	"Het waterprofiel van de stad Düsseldorf (Duitsland) is zeer geschikt voor Altbier en is zeer waarschijnlijk het water dat zonder enige aanpassing door Altbier-brouwerijen in die stad wordt gebruikt. De ionenniveaus zijn ontleend aan een waterkwaliteitsrapport uit 2013.",
			'calcium'			=>	"90",
			'magnesium'			=>	"12",
			'natrium'			=>	"45",
			'chloride'			=>	"82",
			'sulfate'			=>	"65",
			'bicarbonate'			=>	"223",
		]);
		DB::table('eliseontwerpt_brouwerbouwer_waterprofiles')->insert([
			'id'			=>	"16",
			'name'			=>	"Westmalle",
			'calcium'			=>	"41",
			'magnesium'			=>	"8",
			'natrium'			=>	"16",
			'chloride'			=>	"26",
			'sulfate'			=>	"62",
			'bicarbonate'			=>	"91",
		]);
		DB::table('eliseontwerpt_brouwerbouwer_waterprofiles')->insert([
			'id'			=>	"17",
			'name'			=>	"Orval",
			'calcium'			=>	"96",
			'magnesium'			=>	"4",
			'natrium'			=>	"5",
			'chloride'			=>	"13",
			'sulfate'			=>	"25",
			'bicarbonate'			=>	"287",
		]);
		DB::table('eliseontwerpt_brouwerbouwer_waterprofiles')->insert([
			'id'			=>	"18",
			'name'			=>	"Rochefort",
			'calcium'			=>	"82",
			'magnesium'			=>	"10",
			'natrium'			=>	"6",
			'chloride'			=>	"17",
			'sulfate'			=>	"32",
			'bicarbonate'			=>	"240",
		]);
		DB::table('eliseontwerpt_brouwerbouwer_waterprofiles')->insert([
			'id'			=>	"19",
			'name'			=>	"Chimay",
			'calcium'			=>	"70",
			'magnesium'			=>	"7",
			'natrium'			=>	"7",
			'chloride'			=>	"21",
			'sulfate'			=>	"21",
			'bicarbonate'			=>	"216",
		]);
		DB::table('eliseontwerpt_brouwerbouwer_waterprofiles')->insert([
			'id'			=>	"20",
			'name'			=>	"Achel",
			'calcium'			=>	"64",
			'magnesium'			=>	"7",
			'natrium'			=>	"12",
			'chloride'			=>	"24",
			'sulfate'			=>	"28",
			'bicarbonate'			=>	"157",
		]);
		DB::table('eliseontwerpt_brouwerbouwer_waterprofiles')->insert([
			'id'			=>	"21",
			'name'			=>	"Westvleteren",
			'calcium'			=>	"114",
			'magnesium'			=>	"10",
			'natrium'			=>	"125",
			'chloride'			=>	"139",
			'sulfate'			=>	"145",
			'bicarbonate'			=>	"70",
		]);
		DB::table('eliseontwerpt_brouwerbouwer_waterprofiles')->insert([
			'id'			=>	"22",
			'name'			=>	"Gedemineraliseerd water",
			'calcium'			=>	"0",
			'magnesium'			=>	"0",
			'natrium'			=>	"0",
			'chloride'			=>	"0",
			'sulfate'			=>	"0",
			'bicarbonate'			=>	"0",
		]);
		DB::table('eliseontwerpt_brouwerbouwer_waterprofiles')->insert([
			'id'			=>	"23",
			'name'			=>	"Pilsen (Light Lager)",
			'description'			=>	"Dit zeer lage mineraalwater is het traditionele water voor Boheemse pilsbieren. Ondanks het lage calciumgehalte kunnen er geweldige pilsener- en Helles-stijl bieren mee worden gebrouwen.",
			'calcium'			=>	"7",
			'magnesium'			=>	"3",
			'natrium'			=>	"2",
			'chloride'			=>	"5",
			'sulfate'			=>	"5",
			'bicarbonate'			=>	"25",
		]);
		DB::table('eliseontwerpt_brouwerbouwer_waterprofiles')->insert([
			'id'			=>	"24",
			'name'			=>	"Grodziskie",
			'calcium'			=>	"45",
			'magnesium'			=>	"31",
			'natrium'			=>	"32",
			'chloride'			=>	"67",
			'sulfate'			=>	"145",
			'bicarbonate'			=>	"80",
		]);
		DB::table('eliseontwerpt_brouwerbouwer_waterprofiles')->insert([
			'id'			=>	"25",
			'name'			=>	"Hefeweizen",
			'description'			=>	"Waterprofiel voor het maken van een Hefeweizen",
			'calcium'			=>	"54",
			'magnesium'			=>	"0",
			'natrium'			=>	"10",
			'chloride'			=>	"70",
			'sulfate'			=>	"35",
			'bicarbonate'			=>	"21",
		]);
	}
}