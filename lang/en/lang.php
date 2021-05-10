<?php return [
    'plugin' => [
        'name' => 'BrewerBuilder',
        'description' => 'Brewerbuilder is a plugin that supports homebrewers with building and maintaining there own brew recipes.',
    ],
    'component' =>[
        'name' => 'BrewerComponent',
        'description' => 'Component for managing brew recipes and brewdays.',
        'recipes' => [
            'name' => 'Brewing Recipes',
            'description' => 'Overview of all recipes',
        ],
        'styles' => [
            'name' => 'Beerstyles',
            'description' => 'Overview of all beerstyles categorized by the BJCP',
        ],
        'hops' => [
            'name' => 'List of Hops',
            'description' => 'Overview of all listed hops.',
        ],
        'brewday' => [
            'name' => 'Brewday',
            'description' => 'List of all batches per recipe.',
        ],
    ],
    'og' => [
        'name' => 'Original Gravity',
        'description' => '',
    ],
    'size' => [
        'name' => 'Batch size',
        'description' => '',
    ],
    'ibu' => [
        'name' => 'Bitterness (IBU)',
        'description' => '',
    ],
    'ebc' => [
        'name' => 'Color (EBC)',
        'description' => '',
    ],
    'boil_time' => [
        'name' => 'Boil Time (Minutes)',
        'description' => '',
    ],
    'malts' => [
        'name' => 'Fermentables',
        'description' => '',
    ],
    'hops' => [
        'name' => 'Hops',
        'description' => '',
    ],
    'percentage' => [
        'name' => 'Percentage',
        'description' => '',
    ],
    'name' => [
        'name' => 'Name',
        'description' => '',
    ],
    'mass' => [
        'name' => 'Mass',
        'description' => '',
    ],
    'efficiency' => [
        'name' => 'Brewhouse efficiency (%)',
        'description' => '',
    ],
    'evaporation' => [
        'name' => 'Evaporation (ml/min)',
        'description' => '',
    ],
    'gear' => [
        'name' => 'Brewing Gear',
        'description' => '',
    ],
    'alpha-acid' => [
        'name' => 'Alpha Acid (%)',
        'description' => '',
    ],
    'time' => [
        'name' => 'Time (minutes)',
        'description' => '',
    ],
    'total-percentage' => [
        'name' => 'Total ingredients',
        'description' => 'Total percentage of Malts or adjuncts found currently in the recipe.',
    ],
    'mashscheme' => [
        'name' => 'Mash scheme',
        'description' => 'Scheme for mashing in when brewing all grain recipe.',
    ],
    'mash-in' => [
        'name' => 'Add ingredient to mash?',
        'description' => '',
    ],
    'mash' => [
        'name' => 'Mashing',
        'description' => '',
    ],
    'abv-min' => [
        'name' => 'Minimum ABV',
        'description' => '',
    ],
    'abv-max' => [
        'name' => 'Maximum ABV',
        'description' => '',
    ],
    'ibu-min' => [
        'name' => 'Minimum IBU',
        'description' => '',
    ],
    'ibu-max' => [
        'name' => 'Maximum IBU',
        'description' => '',
    ],
    'ebc-min' => [
        'name' => 'Minimum Color (EBC)',
        'description' => '',
    ],
    'ebc-max' => [
        'name' => 'Maximum Color (EBC)',
        'description' => '',
    ],
    'og-min' => [
        'name' => 'Minimum Original Gravity',
        'description' => '',
    ],
    'og-max' => [
        'name' => 'Maximum Original Gravity',
        'description' => '',
    ],
    'og-masch' => [
        'name' => 'Original Gravity after Mash',
        'description' => '',
    ],
    'fg-min' => [
        'name' => 'Minimum Final Gravity',
        'description' => '',
    ],
    'fg-max' => [
        'name' => 'Maximum Final Gravity',
        'description' => '',
    ],
    'bjcp-tab-numbers' => [
        'name' => 'Style by the numbers',
        'description' => '',
    ],
    'substitution' => [
        'name' => 'Substitution',
        'description' => '',
    ],
    'description' => [
        'name' => 'Description',
        'description' => '',
    ],
    'aroma' => [
        'name' => 'Aroma',
        'description' => '',
    ],
    'variety' => [
        'name' => 'Variety',
        'description' => '',
    ],
    'beerstyles' => [
        'name' => 'Beer styles',
        'description' => '',
    ],
    'calcium' => [
        'name' => 'Calcium',
        'description' => '',
    ],
    'magnesium' => [
        'name' => 'Magnesium',
        'description' => '',
    ],
    'natrium' => [
        'name' => 'Sodium',
        'description' => '',
    ],
    'chloride' => [
        'name' => 'Chloride',
        'description' => '',
    ],
    'sulfate' => [
        'name' => 'Sulfate',
        'description' => '',
    ],
    'bicarbonate' => [
        'name' => 'Bicarbonate',
        'description' => '',
    ],
    'dryhop' => [
        'name' => 'Dryhop',
        'description' => 'Hopping technique where hops are added during 3rd or 4th day of fermentation.',
    ],
    'brewday' => [
        'name' => 'Brewday',
        'description' => 'Brewing of a recipe. With adjustments and comments',
    ],
    'recipes' => [
        'name' => 'Recipes',
        'description' => '',
    ],
    'date_brewday' => [
        'name' => 'Brewday date',
        'description' => '',
    ],
    'score' => [
        'name' => 'Score',
        'description' => '',
    ],
    'category' => [
        'name' => 'Category',
        'description' => '',
    ],
    'preperations' => [
        'name' => 'Preperations',
        'description' => '',
    ],
    'boiling' => [
        'name' => 'Boil',
        'description' => '',
    ],
    'comment' => [
        'name' => 'Comment',
        'description' => '',
    ],
    'fermentation' => [
        'name' => 'Fermentation',
        'description' => '',
    ],
    'yeast' => [
        'name' => 'Yeast',
        'description' => '',
    ],
    'abv' => [
        'name' => 'Alcohol by volume (ABV)',
        'description' => '',
    ],
    'hoptype' => [
        'name' => 'Type of Hop',
        'description' => 'Hop Flowers of Hop pellets? This has influence on the amount of hops needed.',
    ],
    'overall_impression' => [
        'name' => 'Overall',
        'description' => 'Overall Impression',
    ],
    'appearance' => [
        'name' => 'Appearance',
        'description' => 'Overall appearance of the beerstyle',
    ],
    'flavor' => [
        'name' => 'Flavor',
        'description' => 'Overall flavor of the beerstyle',
    ],
    'mouthfeel' => [
        'name' => 'Mouthfeel',
        'description' => 'Overall flavor of the beerstyle',
    ],
    'comments' => [
        'name' => 'Comments',
        'description' => 'Overall comments of the beerstyle',
    ],
    'history' => [
        'name' => 'History',
        'description' => 'History of the origins of the beerstyle',
    ],
    'characteristic_ingredients' => [
        'name' => 'Ingredients',
        'description' => 'Characteristic ingredients of the beerstyle',
    ],
    'style_comparison' => [
        'name' => 'Style Comparison',
        'description' => 'Characteristic ingredients of the beerstyle',
    ],
    'commercial_examples' => [
        'name' => 'Commercial Examples',
        'description' => 'Characteristic ingredients of the beerstyle',
    ],
    'notes' => [
        'name' => 'Notes',
        'description' => 'Characteristic ingredients of the beerstyle',
    ],
];