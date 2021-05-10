<?php namespace Hjp\Brouwerbouwer\Updates;

use Seeder;
use Db;

class Seeder_hjp_brouwerbouwer_bjcp_categories extends Seeder
	{
	public function run()
	{
		DB::table('hjp_brouwerbouwer_bjcp_categories')->insert([
			'bjcp_id'			=>	"1",
			'categorie'			=>	"STANDARD AMERICAN BEER",
			'description'			=>	"This category describes everyday American beers that have a wide public appeal. Containing both ales and lagers, the beers of this  category are not typically complex, and have smooth, accessible flavors. The ales tend to have lager-like qualities, or are designed to  appeal to mass-market lager drinkers as crossover beers. Mass-market beers with a more international appeal or origin are  described in the International Lager category. ",
		]);
		DB::table('hjp_brouwerbouwer_bjcp_categories')->insert([
			'bjcp_id'			=>	"2",
			'categorie'			=>	"INTERNATIONAL LAGER",
			'description'			=>	"International lagers are the premium mass-market lagers produced in most countries in the world. Whether developed from  American or European styles, they all tend to have a fairly uniform character and are heavily marketed. Loosely derived from  original Pilsner-type lagers, with colored variations having additional malt flavors while retaining a broad appeal to most palates.  In many countries, the styles will be referred to by their local country names. The use of the term “international” doesn’t mean that  any beers are actually labeled as such",
		]);
		DB::table('hjp_brouwerbouwer_bjcp_categories')->insert([
			'bjcp_id'			=>	"3",
			'categorie'			=>	"CZECH LAGER",
			'description'			=>	"lagers are generally divided by gravity class (draft, lager, special) and color (pale, amber, dark). The Czech names for these  categories are světlé (pale), polotmavé (amber), and tmavé (dark). The gravity classes are výčepní (draft, 7–10 °P), ležák (lager, 11–12  °P), and speciální (special, 13 °P+). Pivo is of course the Czech word for beer. The division into gravity classes is similar to the German  groupings of schankbier, vollbier, and starkbier, although at different gravity ranges. Czech beers within the classes are often simply  referenced by their gravity. There are often variations within the gravity-color groupings, particularly within the speciální class. The  style guidelines combine some of these classes, while other beers in the Czech market are not described (such as the strong Czech  Porter). This is not to imply that the categories below are the full coverage of Czech beers, simply a way of grouping some of the more  commonly found types for judging purposes. Czech lagers in general are differentiated from German and other Western lagers in that German lagers are almost always fully  attenuated, while Czech lagers can have a slight amount of unfermented extract remaining in the finished beer. This helps provide a  slightly higher finishing gravity (and thus slightly lower apparent attenuation), slightly fuller body and mouthfeel, and a richer,  slightly more complex flavor profile in equivalent color and strength beers. German lagers tend to have a cleaner fermentation  profile, while Czech lagers are often fermented cooler (7–10 °C) and for a longer time, and can have a light, barely noticeable (near  threshold) amount of diacetyl that often is perceived more as a rounded body than overtly in aroma and flavor [significant buttery  diacetyl is a flaw]. Czech lager yeast strains are not always as clean and attenuative as German strains, which helps achieve the  higher finishing gravity (along with the mashing methods and cooler fermentation). Czech lagers are traditionally made with  decoction mashes (often double decoction), even with modern malts, while most modern German lagers are made with infusion or  step infusion mashes. These differences characterize the richness, mouthfeel, and flavor profile that distinguishes Czech lagers. ",
		]);
		DB::table('hjp_brouwerbouwer_bjcp_categories')->insert([
			'bjcp_id'			=>	"4",
			'categorie'			=>	"PALE MALTY EUROPEAN LAGER",
			'description'			=>	"This style category contains malty, pale, Pilsner malt-driven German lagers of vollbier to starkbier strength. While malty, they are  still well-attenuated, clean lagers, as are most German beers.  ",
		]);
		DB::table('hjp_brouwerbouwer_bjcp_categories')->insert([
			'bjcp_id'			=>	"5",
			'categorie'			=>	"PALE BITTER EUROPEAN BEER",
			'description'			=>	"This category describes German-origin beers that are pale and have an even to bitter balance with a mild to moderately strong hoppy  character featuring classic German hops. They are generally bottom-fermented or are lagered to provide a smooth profile, and are  well-attenuated as are most German beers. ",
		]);
		DB::table('hjp_brouwerbouwer_bjcp_categories')->insert([
			'bjcp_id'			=>	"6",
			'categorie'			=>	"AMBER MALTY EUROPEAN LAGER",
			'description'			=>	"This category groups amber-colored, German-origin, bottom-fermented lagerbiers that have a malty balance and are vollbier to  starkbier in strength. ",
		]);
		DB::table('hjp_brouwerbouwer_bjcp_categories')->insert([
			'bjcp_id'			=>	"7",
			'categorie'			=>	"AMBER BITTER EUROPEAN BEER",
			'description'			=>	"This category groups amber-colored, evenly balanced to bitter balanced beers of German or Austrian origin. ",
		]);
		DB::table('hjp_brouwerbouwer_bjcp_categories')->insert([
			'bjcp_id'			=>	"8",
			'categorie'			=>	"DARK EUROPEAN LAGER",
			'description'			=>	"This category contains German vollbier lagers darker than amber-brown color. ",
		]);
		DB::table('hjp_brouwerbouwer_bjcp_categories')->insert([
			'bjcp_id'			=>	"9",
			'categorie'			=>	"STRONG EUROPEAN BEER",
			'description'			=>	"This category contains more strongly flavored and higher alcohol lagers from Germany and the Baltic region. Most are dark, but  some pale versions are known. ",
		]);
		DB::table('hjp_brouwerbouwer_bjcp_categories')->insert([
			'bjcp_id'			=>	"10",
			'categorie'			=>	"GERMAN WHEAT BEER",
			'description'			=>	"This category contains vollbier- and starkbier-strength German wheat beers without sourness, in light and dark colors. ",
		]);
		DB::table('hjp_brouwerbouwer_bjcp_categories')->insert([
			'bjcp_id'			=>	"11",
			'categorie'			=>	"BRITISH BITTER",
			'description'			=>	"The family of British bitters grew out of English pale ales as a draught product in the late 1800s. The use of crystal malts in bitters  became more widespread after WWI. Traditionally served very fresh under no pressure (gravity or hand pump only) at cellar  temperatures (i.e., “real ale”). Most bottled or kegged versions of UK-produced bitters are often higher-alcohol and more highly  carbonated versions of cask products produced for export, and have a different character and balance than their draught  counterparts in Britain (often being sweeter and less hoppy than the cask versions). These guidelines reflect the “real ale” version of  the style, not the export formulations of commercial products.  Several regional variations of bitter exist, ranging from darker, sweeter versions served with nearly no head to brighter, hoppier,  paler versions with large foam stands, and everything in between. Judges should not over-emphasize the caramel component of these styles. Exported bitters can be oxidized, which increases caramellike flavors (as well as more negative flavors). Do not assume that oxidation-derived flavors are traditional or required for the style.  ",
		]);
		DB::table('hjp_brouwerbouwer_bjcp_categories')->insert([
			'bjcp_id'			=>	"12",
			'categorie'			=>	"PALE COMMONWEALTH BEER",
			'description'			=>	"This category contains pale, moderately-strong, hop-forward, bitter ales from countries within the former British Empire. ",
		]);
		DB::table('hjp_brouwerbouwer_bjcp_categories')->insert([
			'bjcp_id'			=>	"13",
			'categorie'			=>	"BROWN BRITISH BEER",
			'description'			=>	"While Dark Mild, Brown Ale, and English Porter may have long and storied histories, these guidelines describe the modern versions.  They are grouped together for judging purposes only since they often have similar flavors and balance, not because of any implied  common ancestry. The similar characteristics are low to moderate strength, dark color, generally malty balance, and British  ancestry. These styles have no historic relationship to each other",
		]);
		DB::table('hjp_brouwerbouwer_bjcp_categories')->insert([
			'bjcp_id'			=>	"14",
			'categorie'			=>	"SCOTTISH ALE",
			'description'			=>	"The original meaning of ‘schilling’ (/-) ales have been described incorrectly for years. A single style of beer was never designated as a  60/-, 70/- or 80/-. The schillings only referring to the cost of the barrel of beer. Meaning there were 54/- Stouts and 86/- IPAs and so  on. The Scottish Ales in question were termed Light, Heavy and Export which cover the spectrum of costs from around 60/- to 90/- and simply dark, malt-focused ales. The larger 120/- ales fall outside of this purview as well as the strongest Scotch ales (aka Wee  Heavy).The Scottish Light, Heavy and Export guidelines read nearly the same for each style of beers. As the gravity increases, so does  the character of the beers in question. Historically, the three types of beer were parti-gyled to different strengths, and represented an  adaptation of English pale ales but with reduced strengths and hopping rates, and darker colors (often from added caramel). More  modern versions (post-WWII, at least), tended to use more complex grists. ",
		]);
		DB::table('hjp_brouwerbouwer_bjcp_categories')->insert([
			'bjcp_id'			=>	"15",
			'categorie'			=>	"IRISH BEER",
			'description'			=>	"The traditional beers of Ireland contained in this category are amber to dark, top-fermented beers of moderate to slightly strong  strength, and are often widely misunderstood due to differences in export versions, or overly focusing on the specific attributes of beer produced by high-volume, well-known breweries. Each of the styles in this grouping has a wider range than is commonly believed. ",
		]);
		DB::table('hjp_brouwerbouwer_bjcp_categories')->insert([
			'bjcp_id'			=>	"16",
			'categorie'			=>	"DARK BRITISH BEER",
			'description'			=>	"This category contains average to strong, bitter to sweet, modern British and Irish stouts that originated in England even if some are  now more widely associated with Ireland. In this case, “British” means the broader British Isles not Great Britain.  ",
		]);
		DB::table('hjp_brouwerbouwer_bjcp_categories')->insert([
			'bjcp_id'			=>	"17",
			'categorie'			=>	"STRONG BRITISH ALE",
			'description'			=>	"This category contains the stronger, non-roasty beers of the British Isles. ",
		]);
		DB::table('hjp_brouwerbouwer_bjcp_categories')->insert([
			'bjcp_id'			=>	"18",
			'categorie'			=>	"PALE AMERICAN ALE",
			'description'			=>	"ALE This category contains modern American ales of average strength and light color that are moderately malty to moderately bitter. ",
		]);
		DB::table('hjp_brouwerbouwer_bjcp_categories')->insert([
			'bjcp_id'			=>	"19",
			'categorie'			=>	"AMBER AND BROWN AMERICAN BEER",
			'description'			=>	"This category contains modern American amber and brown warm-fermented beers of standard strength that can be balanced to  bitter. ",
		]);
		DB::table('hjp_brouwerbouwer_bjcp_categories')->insert([
			'bjcp_id'			=>	"20",
			'categorie'			=>	"AMERICAN PORTER AND STOUT",
			'description'			=>	"These beers all evolved from their English namesakes to be wholly transformed by American craft brewers. Generally, these styles  are bigger, stronger, more roast-forward, and more hop-centric than their Anglo cousins. These styles are grouped together due to a  similar shared history and flavor profile. ",
		]);
		DB::table('hjp_brouwerbouwer_bjcp_categories')->insert([
			'bjcp_id'			=>	"21",
			'categorie'			=>	"IPA",
			'description'			=>	"The IPA category is for modern American IPAs and their derivatives. This does not imply that English IPAs aren’t proper IPAs or that  there isn’t a relationship between them. This is simply a method of grouping similar styles for competition purposes. English IPAs are  grouped with other English-derived beers, and the stronger Double IPA is grouped with stronger American beers. The term “IPA” is  intentionally not spelled out as “India Pale Ale” since none of these beers historically went to India, and many aren’t pale. However,  the term IPA has come to be a balance-defined style in modern craft beer. ",
		]);
		DB::table('hjp_brouwerbouwer_bjcp_categories')->insert([
			'bjcp_id'			=>	"22",
			'categorie'			=>	"STRONG AMERICAN ALE",
			'description'			=>	"This category includes modern American strong ales with a varying balance of malt and hops. The category is defined mostly by alcohol strength and a lack of roast. ",
		]);
		DB::table('hjp_brouwerbouwer_bjcp_categories')->insert([
			'bjcp_id'			=>	"23",
			'categorie'			=>	"EUROPEAN SOUR ALE",
			'description'			=>	"This category contains the traditional sour beer styles of Europe that are still produced, many (but not all) with a wheat component.  Most have low bitterness, with the sourness of the beer providing the balance that hop bitterness would otherwise contribute. Some  are sweetened or flavored, whether at the brewery or upon consumption. ",
		]);
		DB::table('hjp_brouwerbouwer_bjcp_categories')->insert([
			'bjcp_id'			=>	"24",
			'categorie'			=>	"BELGIAN ALE",
			'description'			=>	"This category contains the maltier to balanced, more highly flavored Belgian and French ales. ",
		]);
		DB::table('hjp_brouwerbouwer_bjcp_categories')->insert([
			'bjcp_id'			=>	"25",
			'categorie'			=>	"STRONG BELGIAN ALE",
			'description'			=>	"This category contains the pale, well-attenuated, balanced to bitter beers, often more driven by yeast character than malt flavors,  with generally higher alcohol (although a range exists within styles). ",
		]);
		DB::table('hjp_brouwerbouwer_bjcp_categories')->insert([
			'bjcp_id'			=>	"26",
			'categorie'			=>	"TRAPPIST ALE",
			'description'			=>	"Trappist is a protected legal appellation, and cannot be used commercially except by genuine Trappist monasteries that brew their  own beer. However, we can use it to describe the type or styles of beer produced by those breweries and those who make beers of a  similar style. Trappist type beers are all characterized by very high attenuation, high carbonation through bottle conditioning, and  interesting (and often aggressive) yeast character. ",
		]);
		DB::table('hjp_brouwerbouwer_bjcp_categories')->insert([
			'bjcp_id'			=>	"27",
			'categorie'			=>	"HISTORICAL BEER",
			'description'			=>	"The Historical Beer category contains styles that either have all but died out in modern times, or that were much more popular in  past times and are known only through recreations. This category can also be used for traditional or indigenous beers of cultural  importance within certain countries. Placing a beer in the historical category does not imply that it is not currently being produced,  just that it is a very minor style or perhaps is in the process of rediscovery by craft brewers. Entry Instructions: The entrant must either specify a style with a BJCP-supplied description from the list below, or specify a  different historical beer style that is not described elsewhere in these guidelines. In the case of a style that has changed substantially  over the years (such as Porter or Stout), the entrant may specify an existing BJCP style as well as an era (e.g., 1820 English Porter).  When the entrant specifies any style not on the BJCP-supplied list, the entrant must provide a description of the style for the judges in  sufficient detail to allow the beer to be judged. If a beer is entered with just a style name and no description, it is very unlikely that  judges will understand how to judge it. Currently defined examples: Gose, Piwo Grodziskie, Lichtenhainer, Roggenbier, Sahti,  Kentucky Common, Pre-Prohibition Lager, Pre-Prohibition Porter, London Brown Ale. Historical Beer: Gose Overall Impression: A highly-carbonated, tart and fruity  wheat ale with a restrained coriander and salt character and  low bitterness. Very refreshing, with bright flavors and high  attenuation. Aroma: Light to moderately fruity aroma of pome fruit. Light  sourness, slightly sharp. Noticeable coriander, which can have  an aromatic lemony quality, and an intensity up to moderate.  Light bready, doughy, yeasty character like uncooked  sourdough bread. The acidity and coriander can give a bright,  lively impression. The salt may be perceived as a very light,  clean sea breeze character or just a general freshness, if  noticeable at all. Appearance: Unfiltered, with a moderate to full haze.  Moderate to tall sized white head with tight bubbles and good  retention. Effervescent. Medium yellow color. Flavor: Moderate to restrained but noticeable sourness, like a  squeeze of lemon in iced tea. Moderate bready/doughy malt  flavor. Light to moderate fruity character of pome fruit, stone  fruit, or lemons. Light to moderate salt character, up to the  threshold of taste",
		]);
		DB::table('hjp_brouwerbouwer_bjcp_categories')->insert([
			'bjcp_id'			=>	"28",
			'categorie'			=>	"AMERICAN WILD ALE",
			'description'			=>	"The name American Wild Ale is in common use by craft brewers and homebrewers. However, the word Wild does not imply that  these beers are necessarily spontaneously-fermented",
		]);
		DB::table('hjp_brouwerbouwer_bjcp_categories')->insert([
			'bjcp_id'			=>	"29",
			'categorie'			=>	"FRUIT BEER",
			'description'			=>	"The Fruit Beer category is for beer made with any fruit or combination of fruit under the definitions of this category. The culinary,  not botanical, definition of fruit is used here – fleshy, seed-associated structures of plants that are sweet or sour, and edible in the  raw state. Examples include pome fruit (apple, pear, quince), stone fruit (cherry, plum, peach, apricot, mango, etc.), berries (any fruit  with the word ‘berry’ in it), currants, citrus fruit, dried fruit (dates, prunes, raisins, etc.), tropical fruit (banana, pineapple, guava,  papaya, etc.), figs, pomegranate, prickly pear, and so on. It does not mean spices, herbs, or vegetables as defined in Category 30,  especially botanical fruit treated as culinary vegetables. Basically, if you have to justify a fruit using the word “technically” as part of  the description, then that’s not what we mean. ",
		]);
		DB::table('hjp_brouwerbouwer_bjcp_categories')->insert([
			'bjcp_id'			=>	"30",
			'categorie'			=>	"SPICED BEER",
			'description'			=>	"We use the common or culinary definitions of spices, herbs, and vegetables, not botanical or scientific ones. In general, spices are the  dried seeds, seed pods, fruit, roots, bark, etc. of plants used for flavoring food. Herbs are leafy plants or parts of plants (leaves,  flowers, petals, stalks) used for flavoring foods. Vegetables are savory or less sweet edible plant products, used primarily for cooking  or sometimes eating raw. Vegetables can include some botanical fruit. This category explicitly includes all culinary spices, herbs, and  vegetables, as well as nuts (anything with ‘nut’ in the name, including coconut), chile peppers, coffee, chocolate, spruce tips, rose hips,  hibiscus, fruit peels/zest (but not juice), rhubarb, and the like. It does not include culinary fruit or grains. Flavorful fermentable  sugars and syrups (agave nectar, maple syrup, molasses, sorghum, treacle, honey, etc.) can be included only in combination with  other allowable ingredients, and should not have a dominant character. Any combination of allowable ingredients may also be  entered. See Category 29 for a definition and examples of fruit. ",
		]);
		DB::table('hjp_brouwerbouwer_bjcp_categories')->insert([
			'bjcp_id'			=>	"31",
			'categorie'			=>	"ALTERNATIVE FERMENTABLES BEER",
			'description'			=>	"This category contains specialty beers that have some additional ingredient (grain or sugar) that adds a distinctive character. ",
		]);
		DB::table('hjp_brouwerbouwer_bjcp_categories')->insert([
			'bjcp_id'			=>	"32",
			'categorie'			=>	"SMOKED BEER",
			'description'			=>	"This category contains specialty beers that have a smoke character. ",
		]);
		DB::table('hjp_brouwerbouwer_bjcp_categories')->insert([
			'bjcp_id'			=>	"33",
			'categorie'			=>	"WOOD BEER",
			'description'			=>	"This category contains specialty beers with a wood-aged character, with or without added alcohol character. ",
		]);
		DB::table('hjp_brouwerbouwer_bjcp_categories')->insert([
			'bjcp_id'			=>	"34",
			'categorie'			=>	"SPECIALTY BEER",
		]);
	}
}