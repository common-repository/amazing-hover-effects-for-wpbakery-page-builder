<?php

vc_map( 

array(
    "name" => __( "Hover Effects", "ahevc" ),
    "base" => "ahevc_hover",
    "class" => "",
    "icon"        => "asvc_hover_effects_icon",
    "category" => __( "Amazing Hover", "ahevc"),
    "description" => __( "", "ahevc"),
    "params" => array(
    
    array(
        "type"              => "dropdown",
        "heading"           => __( "Select Effect", "ahevc" ),
        "param_name"        => "effects",
        "value"             => array(
            __( 'Effect 1', "ahevc" )        => "effect1",
            __( 'Effect 2', "ahevc" )        => "effect2",
            __( 'Effect 3', "ahevc" )        => "effect3",
            __( 'Effect 4', "ahevc" )        => "effect4",
            __( 'Effect 5', "ahevc" )        => "effect5",
            __( 'Effect 6', "ahevc" )        => "effect6",
            __( 'Effect 7', "ahevc" )        => "effect7",
            __( 'Effect 8', "ahevc" )        => "effect8",
            __( 'Effect 9', "ahevc" )        => "effect9",
            __( 'Effect 10', "ahevc" )        => "effect10",
            __( 'Effect 11', "ahevc" )        => "effect11",
            __( 'Effect 12', "ahevc" )        => "effect12",
            __( 'Effect 13', "ahevc" )        => "effect13",
            __( 'Effect 14', "ahevc" )        => "effect14",
            __( 'Effect 15', "ahevc" )        => "effect15",
            __( 'Effect 16', "ahevc" )        => "effect16",
            __( 'Effect 17', "ahevc" )        => "effect17",
            __( 'Effect 18', "ahevc" )        => "effect18",
            __( 'Effect 19', "ahevc" )        => "effect19",
            __( 'Effect 20', "ahevc" )        => "effect20",
            __( 'Effect 21', "ahevc" )        => "effect21",
            __( 'Effect 22', "ahevc" )        => "effect22",
            __( 'Effect 23', "ahevc" )        => "effect23",
            __( 'Effect 24', "ahevc" )        => "effect24",
            __( 'Effect 25', "ahevc" )        => "effect25",
            __( 'Effect 26', "ahevc" )        => "effect26",
            __( 'Effect 27', "ahevc" )        => "effect27",
            __( 'Effect 28', "ahevc" )        => "effect28",
            __( 'Effect 29', "ahevc" )        => "effect29",
            __( 'Effect 30', "ahevc" )        => "effect30",
            __( 'Effect 31', "ahevc" )        => "effect31",
            __( 'Effect 32', "ahevc" )        => "effect32",
            __( 'Effect 33', "ahevc" )        => "effect33",
            __( 'Effect 34', "ahevc" )        => "effect34",
            __( 'Effect 35', "ahevc" )        => "effect35",
            __( 'Effect 36', "ahevc" )        => "effect36",
            __( 'Effect 37', "ahevc" )        => "effect37",
            __( 'Effect 38', "ahevc" )        => "effect38",
            __( 'Effect 39', "ahevc" )        => "effect39",
            __( 'Effect 40', "ahevc" )        => "effect40",
            __( 'Effect 41', "ahevc" )        => "effect41",
            __( 'Effect 42', "ahevc" )        => "effect42",
            __( 'Effect 43', "ahevc" )        => "effect43",
            __( 'Effect 44', "ahevc" )        => "effect44",
            __( 'Effect 45', "ahevc" )        => "effect45",
            __( 'Effect 46', "ahevc" )        => "effect46",
            __( 'Effect 47', "ahevc" )        => "effect47",
            __( 'Effect 48', "ahevc" )        => "effect48",
            __( 'Effect 49', "ahevc" )        => "effect49",
            __( 'Effect 50', "ahevc" )        => "effect50",


        ),
        "admin_label"        => true,
    ),                      
    
    array(
        "type" => "attach_image",
        "heading" => __("Image", "ahevc"),
        "param_name" => "image",
        "value" => "",
        "description" => __("select image for hover", "ahevc")
    ),            
        
    array(
        "type" => "textfield",
        "heading" => __("Heading", "ahevc"),
        "param_name" => "title",
        "value" => "Heading Goes Here",
    ), 
                    
    array(
        "type" => "textarea_html",
        "heading" => __("Description", "ahevc"),
        "param_name" => "content",
        "value" => "<p>Description goes here</p>",
        "dependency"        => array( 'element' => "effects", 'value' => array('effect2', 'effect3','effect4','effect6','effect7','effect11','effect12','effect14','effect14','effect15','effect16','effect17','effect19','effect20','effect21','effect22','effect23','effect24','effect26','effect28','effect29','effect30','effect31','effect32','effect33','effect34','effect35','effect36','effect37','effect38','effect39','effect40','effect41','effect42','effect43','effect44','effect45','effect46','effect47','effect48','effect49','effect50') ),
    ), 
    array(
        "type" => "textfield",
        "heading" => __("Read More Button Text", "ahevc"),
        "param_name" => "readmore",
        "value" => "Read More",
        'description' => __( 'Make sure, you enabled Custom Link to Yes for button link', 'js_composer' ),
        "dependency" => array( 'element' => "effects", 'value' => array('effect14','effect30','effect35','effect36','effect37','effect39','effect40','effect41') ),
    ),    
    array(
        'type' => 'iconpicker',
        'heading' => __( 'Icon', 'js_composer' ),
        'param_name' => 'icon_fontawesome',
        'value' => 'fa fa-plus', // default value to backend editor admin_label
        'settings' => array(
            'emptyIcon' => false, // default true, display an "EMPTY" icon?
            'iconsPerPage' => 100, // default 100, how many icons per/page to display, we use (big number) to display all icons in single page
        ),
        "dependency" => array( 'element' => "effects", 'value' => array('effect5', 'effect23') ),
        'description' => __( 'Select icon from library.', 'js_composer' ),
    ),    
    
    array(
        "type"              => "dropdown",
        "heading"           => __( "Custom Link", "ahevc" ),
        "param_name"        => "custom_link",
        "value"             => array(
            __( 'No', "ahevc" )        => "no",
            __( 'Yes', "ahevc" )    => "yes",

        ),
    ),
    array(
        "type" => "vc_link",
        "heading" => __("Link", "ahevc"),
        "param_name" => "link",
        "description" => __("keep blank if you don't want", "ahevc"),
        "dependency"  => array( 'element' => "custom_link", 'value' => array('yes') ),
        
    ), 
    
    
   
    // Group Settings 
    array(
        "type"              => "dropdown",
        "heading"           => __( "Custom Font", "ahevc" ),
        "param_name"        => "font",
        "value"             => array(
            "ABeeZee" => "ABeeZee",
            "Abel" => "Abel",
            "Abril Fatface" => "Abril+Fatface",
            "Aclonica" => "Aclonica",
            "Acme" => "Acme",
            "Actor" => "Actor",
            "Adamina" => "Adamina",
            "Advent Pro" => "Advent+Pro",
            "Aguafina Script" => "Aguafina+Script",
            "Akronim" => "Akronim",
            "Aladin" => "Aladin",
            "Aldrich" => "Aldrich",
            "Alegreya" => "Alegreya",
            "Alegreya SC" => "Alegreya+SC",
            "Alex Brush" => "Alex+Brush",
            "Alfa Slab One" => "Alfa+Slab+One",
            "Alice" => "Alice",
            "Alike" => "Alike",
            "Alike Angular" => "Alike+Angular",
            "Allan" => "Allan",
            "Allerta" => "Allerta",
            "Allerta Stencil" => "Allerta+Stencil",
            "Allura" => "Allura",
            "Almendra" => "Almendra",
            "Almendra Display" => "Almendra+Display",
            "Almendra SC" => "Almendra+SC",
            "Amarante" => "Amarante",
            "Amaranth" => "Amaranth",
            "Amatic SC" => "Amatic+SC",
            "Amethysta" => "Amethysta",
            "Anaheim" => "Anaheim",
            "Andada" => "Andada",
            "Andika" => "Andika",
            "Angkor" => "Angkor",
            "Annie Use Your Telescope" => "Annie+Use+Your+Telescope",
            "Anonymous Pro" => "Anonymous+Pro",
            "Antic" => "Antic",
            "Antic Didone" => "Antic+Didone",
            "Antic Slab" => "Antic+Slab",
            "Anton" => "Anton",
            "Arapey" => "Arapey",
            "Arbutus" => "Arbutus",
            "Arbutus Slab" => "Arbutus+Slab",
            "Architects Daughter" => "Architects+Daughter",
            "Archivo Black" => "Archivo+Black",
            "Archivo Narrow" => "Archivo+Narrow",
            "Arimo" => "Arimo",
            "Arizonia" => "Arizonia",
            "Armata" => "Armata",
            "Artifika" => "Artifika",
            "Arvo" => "Arvo",
            "Asap" => "Asap",
            "Asset" => "Asset",
            "Astloch" => "Astloch",
            "Asul" => "Asul",
            "Atomic Age" => "Atomic+Age",
            "Aubrey" => "Aubrey",
            "Audiowide" => "Audiowide",
            "Autour One" => "Autour+One",
            "Average" => "Average",
            "Average Sans" => "Average+Sans",
            "Averia Gruesa Libre" => "Averia+Gruesa+Libre",
            "Averia Libre" => "Averia+Libre",
            "Averia Sans Libre" => "Averia+Sans+Libre",
            "Averia Serif Libre" => "Averia+Serif+Libre",
            "Bad Script" => "Bad+Script",
            "Balthazar" => "Balthazar",
            "Bangers" => "Bangers",
            "Basic" => "Basic",
            "Battambang" => "Battambang",
            "Baumans" => "Baumans",
            "Bayon" => "Bayon",
            "Belgrano" => "Belgrano",
            "Belleza" => "Belleza",
            "BenchNine" => "BenchNine",
            "Bentham" => "Bentham",
            "Berkshire Swash" => "Berkshire+Swash",
            "Bevan" => "Bevan",
            "Bigelow Rules" => "Bigelow+Rules",
            "Bigshot One" => "Bigshot+One",
            "Bilbo" => "Bilbo",
            "Bilbo Swash Caps" => "Bilbo+Swash+Caps",
            "Bitter" => "Bitter",
            "Black Ops One" => "Black+Ops+One",
            "Bokor" => "Bokor",
            "Bonbon" => "Bonbon",
            "Boogaloo" => "Boogaloo",
            "Bowlby One" => "Bowlby+One",
            "Bowlby One SC" => "Bowlby+One+SC",
            "Brawler" => "Brawler",
            "Bree Serif" => "Bree+Serif",
            "Bubblegum Sans" => "Bubblegum+Sans",
            "Bubbler One" => "Bubbler+One",
            "Buda" => "Buda",
            "Buenard" => "Buenard",
            "Butcherman" => "Butcherman",
            "Butterfly Kids" => "Butterfly+Kids",
            "Cabin" => "Cabin",
            "Cabin Condensed" => "Cabin+Condensed",
            "Cabin Sketch" => "Cabin+Sketch",
            "Caesar Dressing" => "Caesar+Dressing",
            "Cagliostro" => "Cagliostro",
            "Calligraffitti" => "Calligraffitti",
            "Cambo" => "Cambo",
            "Candal" => "Candal",
            "Cantarell" => "Cantarell",
            "Cantata One" => "Cantata+One",
            "Cantora One" => "Cantora+One",
            "Capriola" => "Capriola",
            "Cardo" => "Cardo",
            "Carme" => "Carme",
            "Carrois Gothic" => "Carrois+Gothic",
            "Carrois Gothic SC" => "Carrois+Gothic+SC",
            "Carter One" => "Carter+One",
            "Caudex" => "Caudex",
            "Cedarville Cursive" => "Cedarville+Cursive",
            "Ceviche One" => "Ceviche+One",
            "Changa One" => "Changa+One",
            "Chango" => "Chango",
            "Chau Philomene One" => "Chau+Philomene+One",
            "Chela One" => "Chela+One",
            "Chelsea Market" => "Chelsea+Market",
            "Chenla" => "Chenla",
            "Cherry Cream Soda" => "Cherry+Cream+Soda",
            "Cherry Swash" => "Cherry+Swash",
            "Chewy" => "Chewy",
            "Chicle" => "Chicle",
            "Chivo" => "Chivo",
            "Cinzel" => "Cinzel",
            "Cinzel Decorative" => "Cinzel+Decorative",
            "Clicker Script" => "Clicker+Script",
            "Coda" => "Coda",
            "Coda Caption" => "Coda+Caption",
            "Codystar" => "Codystar",
            "Combo" => "Combo",
            "Comfortaa" => "Comfortaa",
            "Coming Soon" => "Coming+Soon",
            "Concert One" => "Concert+One",
            "Condiment" => "Condiment",
            "Content" => "Content",
            "Contrail One" => "Contrail+One",
            "Convergence" => "Convergence",
            "Cookie" => "Cookie",
            "Copse" => "Copse",
            "Corben" => "Corben",
            "Courgette" => "Courgette",
            "Cousine" => "Cousine",
            "Coustard" => "Coustard",
            "Covered By Your Grace" => "Covered+By+Your+Grace",
            "Crafty Girls" => "Crafty+Girls",
            "Creepster" => "Creepster",
            "Crete Round" => "Crete+Round",
            "Crimson Text" => "Crimson+Text",
            "Croissant One" => "Croissant+One",
            "Crushed" => "Crushed",
            "Cuprum" => "Cuprum",
            "Cutive" => "Cutive",
            "Cutive Mono" => "Cutive+Mono",
            "Damion" => "Damion",
            "Dancing Script" => "Dancing+Script",
            "Dangrek" => "Dangrek",
            "Dawning of a New Day" => "Dawning+of+a+New+Day",
            "Days One" => "Days+One",
            "Delius" => "Delius",
            "Delius Swash Caps" => "Delius+Swash+Caps",
            "Delius Unicase" => "Delius+Unicase",
            "Della Respira" => "Della+Respira",
            "Denk One" => "Denk+One",
            "Devonshire" => "Devonshire",
            "Didact Gothic" => "Didact+Gothic",
            "Diplomata" => "Diplomata",
            "Diplomata SC" => "Diplomata+SC",
            "Domine" => "Domine",
            "Donegal One" => "Donegal+One",
            "Doppio One" => "Doppio+One",
            "Dorsa" => "Dorsa",
            "Dosis" => "Dosis",
            "Dr Sugiyama" => "Dr+Sugiyama",
            "Droid Sans" => "Droid+Sans",
            "Droid Sans Mono" => "Droid+Sans+Mono",
            "Droid Serif" => "Droid+Serif",
            "Duru Sans" => "Duru+Sans",
            "Dynalight" => "Dynalight",
            "EB Garamond" => "EB+Garamond",
            "Eagle Lake" => "Eagle+Lake",
            "Eater" => "Eater",
            "Economica" => "Economica",
            "Electrolize" => "Electrolize",
            "Elsie" => "Elsie",
            "Elsie Swash Caps" => "Elsie+Swash+Caps",
            "Emblema One" => "Emblema+One",
            "Emilys Candy" => "Emilys+Candy",
            "Engagement" => "Engagement",
            "Englebert" => "Englebert",
            "Enriqueta" => "Enriqueta",
            "Erica One" => "Erica+One",
            "Esteban" => "Esteban",
            "Euphoria Script" => "Euphoria+Script",
            "Ewert" => "Ewert",
            "Exo" => "Exo",
            "Expletus Sans" => "Expletus+Sans",
            "Fanwood Text" => "Fanwood+Text",
            "Fascinate" => "Fascinate",
            "Fascinate Inline" => "Fascinate+Inline",
            "Faster One" => "Faster+One",
            "Fasthand" => "Fasthand",
            "Federant" => "Federant",
            "Federo" => "Federo",
            "Felipa" => "Felipa",
            "Fenix" => "Fenix",
            "Finger Paint" => "Finger+Paint",
            "Fjalla One" => "Fjalla+One",
            "Fjord One" => "Fjord+One",
            "Flamenco" => "Flamenco",
            "Flavors" => "Flavors",
            "Fondamento" => "Fondamento",
            "Fontdiner Swanky" => "Fontdiner+Swanky",
            "Forum" => "Forum",
            "Francois One" => "Francois+One",
            "Freckle Face" => "Freckle+Face",
            "Fredericka the Great" => "Fredericka+the+Great",
            "Fredoka One" => "Fredoka+One",
            "Freehand" => "Freehand",
            "Fresca" => "Fresca",
            "Frijole" => "Frijole",
            "Fruktur" => "Fruktur",
            "Fugaz One" => "Fugaz+One",
            "GFS Didot" => "GFS+Didot",
            "GFS Neohellenic" => "GFS+Neohellenic",
            "Gabriela" => "Gabriela",
            "Gafata" => "Gafata",
            "Galdeano" => "Galdeano",
            "Galindo" => "Galindo",
            "Gentium Basic" => "Gentium+Basic",
            "Gentium Book Basic" => "Gentium+Book+Basic",
            "Geo" => "Geo",
            "Geostar" => "Geostar",
            "Geostar Fill" => "Geostar+Fill",
            "Germania One" => "Germania+One",
            "Gilda Display" => "Gilda+Display",
            "Give You Glory" => "Give+You+Glory",
            "Glass Antiqua" => "Glass+Antiqua",
            "Glegoo" => "Glegoo",
            "Gloria Hallelujah" => "Gloria+Hallelujah",
            "Goblin One" => "Goblin+One",
            "Gochi Hand" => "Gochi+Hand",
            "Gorditas" => "Gorditas",
            "Goudy Bookletter 1911" => "Goudy+Bookletter+1911",
            "Graduate" => "Graduate",
            "Grand Hotel" => "Grand+Hotel",
            "Gravitas One" => "Gravitas+One",
            "Great Vibes" => "Great+Vibes",
            "Griffy" => "Griffy",
            "Gruppo" => "Gruppo",
            "Gudea" => "Gudea",
            "Habibi" => "Habibi",
            "Hammersmith One" => "Hammersmith+One",
            "Hanalei" => "Hanalei",
            "Hanalei Fill" => "Hanalei+Fill",
            "Handlee" => "Handlee",
            "Hanuman" => "Hanuman",
            "Happy Monkey" => "Happy+Monkey",
            "Headland One" => "Headland+One",
            "Henny Penny" => "Henny+Penny",
            "Herr Von Muellerhoff" => "Herr+Von+Muellerhoff",
            "Holtwood One SC" => "Holtwood+One+SC",
            "Homemade Apple" => "Homemade+Apple",
            "Homenaje" => "Homenaje",
            "IM Fell DW Pica" => "IM+Fell+DW+Pica",
            "IM Fell DW Pica SC" => "IM+Fell+DW+Pica+SC",
            "IM Fell Double Pica" => "IM+Fell+Double+Pica",
            "IM Fell Double Pica SC" => "IM+Fell+Double+Pica+SC",
            "IM Fell English" => "IM+Fell+English",
            "IM Fell English SC" => "IM+Fell+English+SC",
            "IM Fell French Canon" => "IM+Fell+French+Canon",
            "IM Fell French Canon SC" => "IM+Fell+French+Canon+SC",
            "IM Fell Great Primer" => "IM+Fell+Great+Primer",
            "IM Fell Great Primer SC" => "IM+Fell+Great+Primer+SC",
            "Iceberg" => "Iceberg",
            "Iceland" => "Iceland",
            "Imprima" => "Imprima",
            "Inconsolata" => "Inconsolata",
            "Inder" => "Inder",
            "Indie Flower" => "Indie+Flower",
            "Inika" => "Inika",
            "Irish Grover" => "Irish+Grover",
            "Istok Web" => "Istok+Web",
            "Italiana" => "Italiana",
            "Italianno" => "Italianno",
            "Jacques Francois" => "Jacques+Francois",
            "Jacques Francois Shadow" => "Jacques+Francois+Shadow",
            "Jim Nightshade" => "Jim+Nightshade",
            "Jockey One" => "Jockey+One",
            "Jolly Lodger" => "Jolly+Lodger",
            "Josefin Sans" => "Josefin+Sans",
            "Josefin Slab" => "Josefin+Slab",
            "Joti One" => "Joti+One",
            "Judson" => "Judson",
            "Julee" => "Julee",
            "Julius Sans One" => "Julius+Sans+One",
            "Junge" => "Junge",
            "Jura" => "Jura",
            "Just Another Hand" => "Just+Another+Hand",
            "Just Me Again Down Here" => "Just+Me+Again+Down+Here",
            "Kameron" => "Kameron",
            "Karla" => "Karla",
            "Kaushan Script" => "Kaushan+Script",
            "Kavoon" => "Kavoon",
            "Keania One" => "Keania+One",
            "Kelly Slab" => "Kelly+Slab",
            "Kenia" => "Kenia",
            "Khmer" => "Khmer",
            "Kite One" => "Kite+One",
            "Knewave" => "Knewave",
            "Kotta One" => "Kotta+One",
            "Koulen" => "Koulen",
            "Kranky" => "Kranky",
            "Kreon" => "Kreon",
            "Kristi" => "Kristi",
            "Krona One" => "Krona+One",
            "La Belle Aurore" => "La+Belle+Aurore",
            "Lancelot" => "Lancelot",
            "Lato" => "Lato",
            "League Script" => "League+Script",
            "Leckerli One" => "Leckerli+One",
            "Ledger" => "Ledger",
            "Lekton" => "Lekton",
            "Lemon" => "Lemon",
            "Libre Baskerville" => "Libre+Baskerville",
            "Life Savers" => "Life+Savers",
            "Lilita One" => "Lilita+One",
            "Limelight" => "Limelight",
            "Linden Hill" => "Linden+Hill",
            "Lobster" => "Lobster",
            "Lobster Two" => "Lobster+Two",
            "Londrina Outline" => "Londrina+Outline",
            "Londrina Shadow" => "Londrina+Shadow",
            "Londrina Sketch" => "Londrina+Sketch",
            "Londrina Solid" => "Londrina+Solid",
            "Lora" => "Lora",
            "Love Ya Like A Sister" => "Love+Ya+Like+A+Sister",
            "Loved by the King" => "Loved+by+the+King",
            "Lovers Quarrel" => "Lovers+Quarrel",
            "Luckiest Guy" => "Luckiest+Guy",
            "Lusitana" => "Lusitana",
            "Lustria" => "Lustria",
            "Macondo" => "Macondo",
            "Macondo Swash Caps" => "Macondo+Swash+Caps",
            "Magra" => "Magra",
            "Maiden Orange" => "Maiden+Orange",
            "Mako" => "Mako",
            "Marcellus" => "Marcellus",
            "Marcellus SC" => "Marcellus+SC",
            "Marck Script" => "Marck+Script",
            "Margarine" => "Margarine",
            "Marko One" => "Marko+One",
            "Marmelad" => "Marmelad",
            "Marvel" => "Marvel",
            "Mate" => "Mate",
            "Mate SC" => "Mate+SC",
            "Maven Pro" => "Maven+Pro",
            "McLaren" => "McLaren",
            "Meddon" => "Meddon",
            "MedievalSharp" => "MedievalSharp",
            "Medula One" => "Medula+One",
            "Megrim" => "Megrim",
            "Meie Script" => "Meie+Script",
            "Merienda" => "Merienda",
            "Merienda One" => "Merienda+One",
            "Merriweather" => "Merriweather",
            "Merriweather Sans" => "Merriweather+Sans",
            "Metal" => "Metal",
            "Metal Mania" => "Metal+Mania",
            "Metamorphous" => "Metamorphous",
            "Metrophobic" => "Metrophobic",
            "Michroma" => "Michroma",
            "Milonga" => "Milonga",
            "Miltonian" => "Miltonian",
            "Miltonian Tattoo" => "Miltonian+Tattoo",
            "Miniver" => "Miniver",
            "Miss Fajardose" => "Miss+Fajardose",
            "Modern Antiqua" => "Modern+Antiqua",
            "Molengo" => "Molengo",
            "Molle" => "Molle",
            "Monda" => "Monda",
            "Monofett" => "Monofett",
            "Monoton" => "Monoton",
            "Monsieur La Doulaise" => "Monsieur+La+Doulaise",
            "Montaga" => "Montaga",
            "Montez" => "Montez",
            "Montserrat" => "Montserrat",
            "Montserrat Alternates" => "Montserrat+Alternates",
            "Montserrat Subrayada" => "Montserrat+Subrayada",
            "Moul" => "Moul",
            "Moulpali" => "Moulpali",
            "Mountains of Christmas" => "Mountains+of+Christmas",
            "Mouse Memoirs" => "Mouse+Memoirs",
            "Mr Bedfort" => "Mr+Bedfort",
            "Mr Dafoe" => "Mr+Dafoe",
            "Mr De Haviland" => "Mr+De+Haviland",
            "Mrs Saint Delafield" => "Mrs+Saint+Delafield",
            "Mrs Sheppards" => "Mrs+Sheppards",
            "Muli" => "Muli",
            "Mystery Quest" => "Mystery+Quest",
            "Neucha" => "Neucha",
            "Neuton" => "Neuton",
            "New Rocker" => "New+Rocker",
            "News Cycle" => "News+Cycle",
            "Niconne" => "Niconne",
            "Nixie One" => "Nixie+One",
            "Nobile" => "Nobile",
            "Nokora" => "Nokora",
            "Norican" => "Norican",
            "Nosifer" => "Nosifer",
            "Nothing You Could Do" => "Nothing+You+Could+Do",
            "Noticia Text" => "Noticia+Text",
            "Nova Cut" => "Nova+Cut",
            "Nova Flat" => "Nova+Flat",
            "Nova Mono" => "Nova+Mono",
            "Nova Oval" => "Nova+Oval",
            "Nova Round" => "Nova+Round",
            "Nova Script" => "Nova+Script",
            "Nova Slim" => "Nova+Slim",
            "Nova Square" => "Nova+Square",
            "Numans" => "Numans",
            "Nunito" => "Nunito",
            "Odor Mean Chey" => "Odor+Mean+Chey",
            "Offside" => "Offside",
            "Old Standard TT" => "Old+Standard+TT",
            "Oldenburg" => "Oldenburg",
            "Oleo Script" => "Oleo+Script",
            "Oleo Script Swash Caps" => "Oleo+Script+Swash+Caps",
            "Open Sans" => "Open+Sans",
            "Open Sans Condensed" => "Open+Sans+Condensed",
            "Oranienbaum" => "Oranienbaum",
            "Orbitron" => "Orbitron",
            "Oregano" => "Oregano",
            "Orienta" => "Orienta",
            "Original Surfer" => "Original+Surfer",
            "Oswald" => "Oswald",
            "Over the Rainbow" => "Over+the+Rainbow",
            "Overlock" => "Overlock",
            "Overlock SC" => "Overlock+SC",
            "Ovo" => "Ovo",
            "Oxygen" => "Oxygen",
            "Oxygen Mono" => "Oxygen+Mono",
            "PT Mono" => "PT+Mono",
            "PT Sans" => "PT+Sans",
            "PT Sans Caption" => "PT+Sans+Caption",
            "PT Sans Narrow" => "PT+Sans+Narrow",
            "PT Serif" => "PT+Serif",
            "PT Serif Caption" => "PT+Serif+Caption",
            "Pacifico" => "Pacifico",
            "Paprika" => "Paprika",
            "Parisienne" => "Parisienne",
            "Passero One" => "Passero+One",
            "Passion One" => "Passion+One",
            "Patrick Hand" => "Patrick+Hand",
            "Patrick Hand SC" => "Patrick+Hand+SC",
            "Patua One" => "Patua+One",
            "Paytone One" => "Paytone+One",
            "Peralta" => "Peralta",
            "Permanent Marker" => "Permanent+Marker",
            "Petit Formal Script" => "Petit+Formal+Script",
            "Petrona" => "Petrona",
            "Philosopher" => "Philosopher",
            "Piedra" => "Piedra",
            "Pinyon Script" => "Pinyon+Script",
            "Pirata One" => "Pirata+One",
            "Plaster" => "Plaster",
            "Play" => "Play",
            "Playball" => "Playball",
            "Playfair Display" => "Playfair+Display",
            "Playfair Display SC" => "Playfair+Display+SC",
            "Podkova" => "Podkova",
            "Poiret One" => "Poiret+One",
            "Poller One" => "Poller+One",
            "Poly" => "Poly",
            "Pompiere" => "Pompiere",
            "Pontano Sans" => "Pontano+Sans",
            "Port Lligat Sans" => "Port+Lligat+Sans",
            "Port Lligat Slab" => "Port+Lligat+Slab",
            "Prata" => "Prata",
            "Preahvihear" => "Preahvihear",
            "Press Start 2P" => "Press+Start+2P",
            "Princess Sofia" => "Princess+Sofia",
            "Prociono" => "Prociono",
            "Prosto One" => "Prosto+One",
            "Puritan" => "Puritan",
            "Purple Purse" => "Purple+Purse",
            "Quando" => "Quando",
            "Quantico" => "Quantico",
            "Quattrocento" => "Quattrocento",
            "Quattrocento Sans" => "Quattrocento+Sans",
            "Questrial" => "Questrial",
            "Quicksand" => "Quicksand",
            "Quintessential" => "Quintessential",
            "Qwigley" => "Qwigley",
            "Racing Sans One" => "Racing+Sans+One",
            "Radley" => "Radley",
            "Raleway" => "Raleway",
            "Raleway Dots" => "Raleway+Dots",
            "Rambla" => "Rambla",
            "Rammetto One" => "Rammetto+One",
            "Ranchers" => "Ranchers",
            "Rancho" => "Rancho",
            "Rationale" => "Rationale",
            "Redressed" => "Redressed",
            "Reenie Beanie" => "Reenie+Beanie",
            "Revalia" => "Revalia",
            "Ribeye" => "Ribeye",
            "Ribeye Marrow" => "Ribeye+Marrow",
            "Righteous" => "Righteous",
            "Risque" => "Risque",
            "Roboto" => "Roboto",
            "Roboto Condensed" => "Roboto+Condensed",
            "Rochester" => "Rochester",
            "Rock Salt" => "Rock+Salt",
            "Rokkitt" => "Rokkitt",
            "Romanesco" => "Romanesco",
            "Ropa Sans" => "Ropa+Sans",
            "Rosario" => "Rosario",
            "Rosarivo" => "Rosarivo",
            "Rouge Script" => "Rouge+Script",
            "Ruda" => "Ruda",
            "Rufina" => "Rufina",
            "Ruge Boogie" => "Ruge+Boogie",
            "Ruluko" => "Ruluko",
            "Rum Raisin" => "Rum+Raisin",
            "Ruslan Display" => "Ruslan+Display",
            "Russo One" => "Russo+One",
            "Ruthie" => "Ruthie",
            "Rye" => "Rye",
            "Sacramento" => "Sacramento",
            "Sail" => "Sail",
            "Salsa" => "Salsa",
            "Sanchez" => "Sanchez",
            "Sancreek" => "Sancreek",
            "Sansita One" => "Sansita+One",
            "Sarina" => "Sarina",
            "Satisfy" => "Satisfy",
            "Scada" => "Scada",
            "Schoolbell" => "Schoolbell",
            "Seaweed Script" => "Seaweed+Script",
            "Sevillana" => "Sevillana",
            "Seymour One" => "Seymour+One",
            "Shadows Into Light" => "Shadows+Into+Light",
            "Shadows Into Light Two" => "Shadows+Into+Light+Two",
            "Shanti" => "Shanti",
            "Share" => "Share",
            "Share Tech" => "Share+Tech",
            "Share Tech Mono" => "Share+Tech+Mono",
            "Shojumaru" => "Shojumaru",
            "Short Stack" => "Short+Stack",
            "Siemreap" => "Siemreap",
            "Sigmar One" => "Sigmar+One",
            "Signika" => "Signika",
            "Signika Negative" => "Signika+Negative",
            "Simonetta" => "Simonetta",
            "Sintony" => "Sintony",
            "Sirin Stencil" => "Sirin+Stencil",
            "Six Caps" => "Six+Caps",
            "Skranji" => "Skranji",
            "Slackey" => "Slackey",
            "Smokum" => "Smokum",
            "Smythe" => "Smythe",
            "Sniglet" => "Sniglet",
            "Snippet" => "Snippet",
            "Snowburst One" => "Snowburst+One",
            "Sofadi One" => "Sofadi+One",
            "Sofia" => "Sofia",
            "Sonsie One" => "Sonsie+One",
            "Sorts Mill Goudy" => "Sorts+Mill+Goudy",
            "Source Code Pro" => "Source+Code+Pro",
            "Source Sans Pro" => "Source+Sans+Pro",
            "Special Elite" => "Special+Elite",
            "Spicy Rice" => "Spicy+Rice",
            "Spinnaker" => "Spinnaker",
            "Spirax" => "Spirax",
            "Squada One" => "Squada+One",
            "Stalemate" => "Stalemate",
            "Stalinist One" => "Stalinist+One",
            "Stardos Stencil" => "Stardos+Stencil",
            "Stint Ultra Condensed" => "Stint+Ultra+Condensed",
            "Stint Ultra Expanded" => "Stint+Ultra+Expanded",
            "Stoke" => "Stoke",
            "Strait" => "Strait",
            "Sue Ellen Francisco" => "Sue+Ellen+Francisco",
            "Sunshiney" => "Sunshiney",
            "Supermercado One" => "Supermercado+One",
            "Suwannaphum" => "Suwannaphum",
            "Swanky and Moo Moo" => "Swanky+and+Moo+Moo",
            "Syncopate" => "Syncopate",
            "Tangerine" => "Tangerine",
            "Taprom" => "Taprom",
            "Tauri" => "Tauri",
            "Telex" => "Telex",
            "Tenor Sans" => "Tenor+Sans",
            "Text Me One" => "Text+Me+One",
            "The Girl Next Door" => "The+Girl+Next+Door",
            "Tienne" => "Tienne",
            "Tinos" => "Tinos",
            "Titan One" => "Titan+One",
            "Titillium Web" => "Titillium+Web",
            "Trade Winds" => "Trade+Winds",
            "Trocchi" => "Trocchi",
            "Trochut" => "Trochut",
            "Trykker" => "Trykker",
            "Tulpen One" => "Tulpen+One",
            "Ubuntu" => "Ubuntu",
            "Ubuntu Condensed" => "Ubuntu+Condensed",
            "Ubuntu Mono" => "Ubuntu+Mono",
            "Ultra" => "Ultra",
            "Uncial Antiqua" => "Uncial+Antiqua",
            "Underdog" => "Underdog",
            "Unica One" => "Unica+One",
            "UnifrakturCook" => "UnifrakturCook",
            "UnifrakturMaguntia" => "UnifrakturMaguntia",
            "Unkempt" => "Unkempt",
            "Unlock" => "Unlock",
            "Unna" => "Unna",
            "VT323" => "VT323",
            "Vampiro One" => "Vampiro+One",
            "Varela" => "Varela",
            "Varela Round" => "Varela+Round",
            "Vast Shadow" => "Vast+Shadow",
            "Vibur" => "Vibur",
            "Vidaloka" => "Vidaloka",
            "Viga" => "Viga",
            "Voces" => "Voces",
            "Volkhov" => "Volkhov",
            "Vollkorn" => "Vollkorn",
            "Voltaire" => "Voltaire",
            "Waiting for the Sunrise" => "Waiting+for+the+Sunrise",
            "Wallpoet" => "Wallpoet",
            "Walter Turncoat" => "Walter+Turncoat",
            "Warnes" => "Warnes",
            "Wellfleet" => "Wellfleet",
            "Wendy One" => "Wendy+One",
            "Wire One" => "Wire+One",
            "Yanone Kaffeesatz" => "Yanone+Kaffeesatz",
            "Yellowtail" => "Yellowtail",
            "Yeseva One" => "Yeseva+One",
            "Yesteryear" => "Yesteryear",
            "Zeyada" => "Zeyada",                    

        ),
        "group"             => "Settings",
        //"description"       => __( "default font is Open Sans.", "ahevc" ),
        //"dependency"        => array( 'element' => "style", 'value' => array('flipboard') ),
    ),            
    
         
    array(
        "type"              => "textfield",
        "heading"           => __( "Heading Font Size", "ahevc" ),
        "param_name"        => "heading_font_size",
        "value"             => '16',
        "description" => __("default value is 16px", "ahevc"),
        "group"             => "Settings",
    ), 
    array(
        "type"              => "colorpicker",
        "heading"           => __( "Heading Color", "ahevc" ),
        "param_name"        => "heading_color",
        "value"             => '',
        //"description" => __("default color is #ffffff", "ahevc"),
        "group"             => "Settings",
    ), 
    array(
        "type"              => "dropdown",
        "heading"           => __( "Title to be <em>italic</em>", "ahevc" ),
        "param_name"        => "italic",
        "value"             => array(
            __( 'No', "ahevc" )   => "no",
            __( 'Yes', "ahevc" )  => "italic",

        ),
        "group"             => "Settings",
    ),               
    
    array(
        "type"              => "textfield",
        "heading"           => __( "Custom CSS Class", "ahevc" ),
        "param_name"        => "css_class",
        "value"             => '',
        "description" => __("using custom class you can customize styles.", "ahevc"),
        "group"             => "Settings",
    ),            
    
    
                    
        
    )
) 

);



function ahevc_hover_effects_shortcode( $atts, $content = null, $tag ) {
    extract(shortcode_atts(array(
    
            "effects" => 'effect1',
            "image" => '',
            "title" => 'Title Goes Here',
            //"description" => '',
            "readmore" => 'Read More',
            "link" => '',
            "custom_link" => '',
            "font" => 'Open+Sans',
            "icon_fontawesome" => 'fa fa-plus',
            "heading_font_size" => '',
            "heading_color" => '',
            "italic" => 'no',
            "color" => '',
            "css_class" => '',
            
    ), $atts));
        
        
        
    wp_register_style('ahevc_hover', plugins_url( 'css/hover-effects.css' , __FILE__ ) );
    wp_enqueue_style( 'ahevc_hover' );
    wp_register_style( 'font-awesome', plugins_url( '/css/font-awesome.min.css',  __FILE__) );
    wp_enqueue_style( 'font-awesome' );    
                 

    $image = wp_get_attachment_image_src( $image, 'full' ); 
    $link   = vc_build_link( $link );
    $output ='';
    $output .= '<style>@import url(https://fonts.googleapis.com/css?family='.$font.');</style>';
    
    if ( $effects=='effect1' ){  
                          
        $output .='<figure class="style-one '.$css_class.'">';
        $output .='<img src="'.$image[0].'" alt="'.$title.'" />';
        $output .='<figcaption>
                    <h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';font-style: '.$italic.';">'.$title.'</h3>
                </figcaption>';
            
        if ( !empty($custom_link) ) {
            $output .='<a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '"></a>';
        }
        $output .='</figure>';                
    }
    
    
    if ( $effects=='effect2' ){
            
        $output .='<figure class="style-two '.$css_class.'">';
        if ( !empty($custom_link) ) {
            $output .='<a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">';
        }
        $output .='<img src="'.$image[0].'" alt="'.$title.'" />
            <figcaption>
              <h2 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';font-style: '.$italic.';">'.$title.'</h2>
              <p style="font-family: '.$font.';">'.$content.'</p>
            </figcaption></a>
           </figure>';
    }     
    
    if ( $effects=='effect3' ){
            
        $output .='<figure class="style-three '.$css_class.'">';
        if ( !empty($custom_link) ) {
            $output .='<a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">';
        }
        $output .='<img src="'.$image[0].'" alt="'.$title.'" />
            <figcaption>
                <h2 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';font-style: '.$italic.';">'.$title.'</h2>
                <p style="font-family: '.$font.';">'.$content.'</p>
            </figcaption></a>
            </figure>';

    }     


    if ( $effects=='effect4' ){  
                          
        $output .='<figure class="style-four '.$css_class.'">';
        $output .='<img src="'.$image[0].'" alt="'.$title.'" />';
        $output .='<figcaption>
                    <h2 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';font-style: '.$italic.';">'.$title.'</h2>
                    <h4 style="font-family: '.$font.';">'.$content.'</h4>
                </figcaption>';
            
        if ( !empty($custom_link) ) {
            $output .='<a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '"></a>';
        }
        $output .='</figure>';                
    }    
    
    if ( $effects=='effect5' ){  
                          
        $output .='<figure class="style-five '.$css_class.'">';
        $output .='<img src="'.$image[0].'" alt="'.$title.'" />';
        $output .='<figcaption>
                    <h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';font-style: '.$italic.';">'.$title.'</h3>
                </figcaption><i style="color:'.$heading_color.'; " class="'.$icon_fontawesome.'"></i>';
            
        if ( !empty($custom_link) ) {
            $output .='<a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '"></a>';
        }
        $output .='</figure>';                
    }        


    if ( $effects=='effect6' ){  
                          
        $output .='<figure class="style-six '.$css_class.'">';
        $output .='<img src="'.$image[0].'" alt="'.$title.'" />';
        $output .='<figcaption>
                    <h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';font-style: '.$italic.';">'.$title.'</h3>
                    <p style="font-family: '.$font.';">'.$content.'</p>
                </figcaption>';
            
        if ( !empty($custom_link) ) {
            $output .='<a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '"></a>';
        }
        $output .='</figure>';                
    }
    
    if ( $effects=='effect7' ){  
                          
        $output .='<figure class="style-seven '.$css_class.'">';
        $output .='<img src="'.$image[0].'" alt="'.$title.'" />';
        $output .='<figcaption>
                    <h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';font-style: '.$italic.';">'.$title.'</h3>
                    <p style="font-family: '.$font.';">'.$content.'</p>
                </figcaption>';
            
        if ( !empty($custom_link) ) {
            $output .='<a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '"></a>';
        }
        $output .='</figure>';                
    }
        
    if ( $effects=='effect8' ){  
                          
        $output .='<figure class="style-eight '.$css_class.'">';
        $output .='<div class="image"><img src="'.$image[0].'" alt="'.$title.'" /></div>';
        $output .='<figcaption>
                    <h4 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';font-style: '.$italic.';">'.$title.'</h4>

                </figcaption>';
            
        if ( !empty($custom_link) ) {
            $output .='<a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '"></a>';
        }
        $output .='</figure>';                
    }    

    if ( $effects=='effect9' ){  
                          
        $output .='<figure class="style-nine '.$css_class.'">';
        $output .='<img src="'.$image[0].'" alt="'.$title.'" />';
        $output .='<figcaption>
                    <h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';font-style: '.$italic.';">'.$title.'</h3>

                </figcaption>';
            
        if ( !empty($custom_link) ) {
            $output .='<a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '"></a>';
        }
        $output .='</figure>';                
    }

    if ( $effects=='effect10' ){  
                          
        $output .='<figure class="style-ten '.$css_class.'">';
        $output .='<img src="'.$image[0].'" alt="'.$title.'" />';
        $output .='<figcaption>
                    <h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';font-style: '.$italic.';">'.$title.'</h3>

                </figcaption>';
            
        if ( !empty($custom_link) ) {
            $output .='<a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '"></a>';
        }
        $output .='</figure>';                
    }



    if ( $effects=='effect11' ){
            
        $output .='<figure class="style-eleven '.$css_class.'">';
        if ( !empty($custom_link) ) {
            $output .='<a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">';
        }
        $output .='<img src="'.$image[0].'" alt="'.$title.'" />
            <figcaption>
              <h2 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';font-style: '.$italic.';">'.$title.'</h2>
              <p style="font-family: '.$font.';">'.$content.'</p>
            </figcaption></a>
           </figure>';
    }

    if ( $effects=='effect12' ){  
                          
        $output .='<figure class="style-twelve '.$css_class.'">';
        $output .='<img src="'.$image[0].'" alt="'.$title.'" />';
        $output .='<figcaption>
                    <h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';font-style: '.$italic.';">'.$title.'</h3>

                </figcaption>';
            
        if ( !empty($custom_link) ) {
            $output .='<a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '"></a>';
        }
        $output .='</figure>';                
    }

    if ( $effects=='effect13' ){  
                          
        $output .='<figure class="style-Thirteen '.$css_class.'">';
        $output .='<img src="'.$image[0].'" alt="'.$title.'" />';
        $output .='<figcaption>
                    <h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';font-style: '.$italic.';">'.$title.'</h3>

                </figcaption>';
            
        if ( !empty($custom_link) ) {
            $output .='<a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '"></a>';
        }
        $output .='</figure>';                
    }        

    if ( $effects=='effect14' ){  
                          
        $output .='<figure class="style-fourteen '.$css_class.'">';
        $output .='<img src="'.$image[0].'" alt="'.$title.'" />';
        $output .='<figcaption>
                    <h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';font-style: '.$italic.';">'.$title.'</h3>
                    <p style="font-family: '.$font.';">'.$content.'</p>';
        $output .='<a class="read-more" href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">'.$readmore.'</a>';
                             
        $output .='</figcaption>';
            

        $output .='</figure>';                
    }

    if ( $effects=='effect15' ){  
                          
        $output .='<figure class="style-fiveten '.$css_class.'">';
        $output .='<figcaption>
                    <h2 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';font-style: '.$italic.';">'.$title.'</h2>
                    <p style="font-family: '.$font.';">'.$content.'</p>
                </figcaption>';
            
        if ( !empty($custom_link) ) {
            $output .='<a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '"></a>';
        }
        $output .='<img src="'.$image[0].'" alt="'.$title.'" />';
        $output .='</figure>';                
    }

    if ( $effects=='effect16' ){  
                          
        $output .='<figure class="style-sixteen '.$css_class.'">';
        $output .='<img src="'.$image[0].'" alt="'.$title.'" />';
        $output .='<figcaption>
                <div>
                    <h3 style="font-family: '.$font.';">'.$content.'</h3>
                </div>
                <div>
                    <h2 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';font-style: '.$italic.';">'.$title.'</h2>
                </div>                
                </figcaption>';
            
        if ( !empty($custom_link) ) {
            $output .='<a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '"></a>';
        }
        $output .='</figure>';                
    }

    if ( $effects=='effect17' ){  
                          
        $output .='<figure class="style-seventeen '.$css_class.'">';
        $output .='<img src="'.$image[0].'" alt="'.$title.'" />';
        $output .='<figcaption>
                <div>
                    <h3 style="font-family: '.$font.';">'.$content.'</h3>
                </div>
                <div>
                    <h2 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';font-style: '.$italic.';">'.$title.'</h2>
                </div>                
                </figcaption>';
            
        if ( !empty($custom_link) ) {
            $output .='<a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '"></a>';
        }
        $output .='</figure>';                
    }

    if ( $effects=='effect18' ){  
                          
        $output .='<figure class="style-eightteen '.$css_class.'">';
        $output .='<img src="'.$image[0].'" alt="'.$title.'" />';
        $output .='<figcaption>
                    <h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';font-style: '.$italic.';">'.$title.'</h3>

                </figcaption>';
            
        if ( !empty($custom_link) ) {
            $output .='<a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '"></a>';
        }
        $output .='</figure>';                
    }

    if ( $effects=='effect19' ){  
                          
        $output .='<figure class="style-nineteen '.$css_class.'">';
        $output .='<figcaption>
                    <h2 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';font-style: '.$italic.';">'.$title.'</h2>
                    <p style="font-family: '.$font.';">'.$content.'</p>
                </figcaption>';
            
        if ( !empty($custom_link) ) {
            $output .='<a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '"></a>';
        }
        $output .='<img src="'.$image[0].'" alt="'.$title.'" />';
        $output .='</figure>';                
    }

    if ( $effects=='effect20' ){  
                          
        $output .='<figure class="style-twenty '.$css_class.'">';
        $output .='<img src="'.$image[0].'" alt="'.$title.'" />';        
        $output .='<figcaption><div>
                    <h2 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';font-style: '.$italic.';">'.$title.'</h2>
                    <h4 style="font-family: '.$font.';">'.$content.'</h4></div>
                </figcaption>';
            
        if ( !empty($custom_link) ) {
            $output .='<a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '"></a>';
        }
        
        $output .='</figure>';                
    }


    if ( $effects=='effect21' ){  
                          
        $output .='<figure class="twostyle-one '.$css_class.'">';
        $output .='<img src="'.$image[0].'" alt="'.$title.'" />';
        $output .='<figcaption>
                    <h2 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';font-style: '.$italic.';">'.$title.'</h2>
                    <p style="font-family: '.$font.';">'.$content.'</p>
                </figcaption>';
            
        if ( !empty($custom_link) ) {
            $output .='<a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '"></a>';
        }
        $output .='</figure>';                
    }

    if ( $effects=='effect22' ){  
                          
        $output .='<figure class="twostyle-two '.$css_class.'">';
        $output .='<img src="'.$image[0].'" alt="'.$title.'" />';
        $output .='<figcaption>
                    <h2 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';font-style: '.$italic.';">'.$title.'</h2>
                    <p style="font-family: '.$font.';">'.$content.'</p>
                </figcaption>';
            
        if ( !empty($custom_link) ) {
            $output .='<a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '"></a>';
        }
        $output .='</figure>';                
    }

    if ( $effects=='effect23' ){  
                          
        $output .='<figure class="twostyle-four '.$css_class.'">';
        $output .='<img src="'.$image[0].'" alt="'.$title.'" />';
        $output .='<figcaption>
                    <h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';font-style: '.$italic.';">'.$title.'</h3>
                    <p style="font-family: '.$font.';">'.$content.'</p>
                </figcaption><i style="color:'.$heading_color.'; " class="'.$icon_fontawesome.'"></i>';
            
        if ( !empty($custom_link) ) {
            $output .='<a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '"></a>';
        }
        $output .='</figure>';                
    }


    if ( $effects=='effect24' ){
            
        $output .='<figure class="twostyle-nine '.$css_class.'">';
        if ( !empty($custom_link) ) {
            $output .='<a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">';
        }
        $output .='<img src="'.$image[0].'" alt="'.$title.'" />
            <figcaption>
              <h2 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';font-style: '.$italic.';">'.$title.'</h2>
              <p style="font-family: '.$font.';">'.$content.'</p>
            </figcaption></a>
           </figure>';
    }

    if ( $effects=='effect25' ){  
                          
        $output .='<figure class="twostyle-ten '.$css_class.'">';
        $output .='<img src="'.$image[0].'" alt="'.$title.'" />';
        $output .='<figcaption>
                    <h2 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';font-style: '.$italic.';">'.$title.'</h2>
                </figcaption>';
            
        if ( !empty($custom_link) ) {
            $output .='<a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '"></a>';
        }
        $output .='</figure>';                
    }

    if ( $effects=='effect26' ){  
                          
        $output .='<figure class="twostyle-eleven '.$css_class.'">';
        $output .='<img src="'.$image[0].'" alt="'.$title.'" />';
        $output .='<figcaption>
                    <h2 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';font-style: '.$italic.';">'.$title.'</h2>
                    <p style="font-family: '.$font.';">'.$content.'</p>
                </figcaption>';
            
        if ( !empty($custom_link) ) {
            $output .='<a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '"></a>';
        }
        $output .='</figure>';                
    }

    if ( $effects=='effect27' ){  
                          
        $output .='<figure class="twostyle-Thirteen '.$css_class.'">';
        $output .='<img src="'.$image[0].'" alt="'.$title.'" />';
        $output .='<figcaption>
                    <h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';font-style: '.$italic.';">'.$title.'</h3>
                </figcaption><i style="color:'.$heading_color.'; " class="'.$icon_fontawesome.'"></i>';
            
        if ( !empty($custom_link) ) {
            $output .='<a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '"></a>';
        }
        $output .='</figure>';                
    }
    
    
    if ( $effects=='effect28' ){  
                          
        $output .='<figure class="twostyle-fourteen '.$css_class.'">';
        $output .='<img src="'.$image[0].'" alt="'.$title.'" />';
        $output .='<div class="title">
            <div>
            <h2 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';font-style: '.$italic.';">'.$title.'</h2>
            </div>
            </div>';
        
        $output .='<figcaption>
                    <p style="font-family: '.$font.';">'.$content.'</p>
                </figcaption>';
            
        if ( !empty($custom_link) ) {
            $output .='<a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '"></a>';
        }
        $output .='</figure>';                
    }    
    
    if ( $effects=='effect29' ){  
                          
        $output .='<figure class="twostyle-Fiveteen '.$css_class.'">';
        $output .='<img src="'.$image[0].'" alt="'.$title.'" />';
        $output .='<div class="title">
            <div>
            <h2 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';font-style: '.$italic.';">'.$title.'</h2>
            </div>
            </div>';
        
        $output .='<figcaption>
                    <p style="font-family: '.$font.';">'.$content.'</p>
                </figcaption>';
            
        if ( !empty($custom_link) ) {
            $output .='<a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '"></a>';
        }
        $output .='</figure>';                
    }    
    
    if ( $effects=='effect30' ){  
                          
        $output .='<figure class="twostyle-sixteen '.$css_class.'">';
        $output .='<img src="'.$image[0].'" alt="'.$title.'" />';
        $output .='<figcaption>
                    <h3 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';font-style: '.$italic.';">'.$title.'</h3>
                    <p style="font-family: '.$font.';">'.$content.'</p>';
        $output .='<a class="read-more" href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">'.$readmore.'</a>';
                             
        $output .='</figcaption>';
        $output .='</figure>';                
    }    
    
    if ( $effects=='effect31' ){  
                          
        $output .='<figure class="twostyle-seventeen '.$css_class.'">';
        $output .='<img src="'.$image[0].'" alt="'.$title.'" />';
        $output .='<figcaption><i style="color:'.$heading_color.'; " class="'.$icon_fontawesome.'"></i>
                    <h2 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';font-style: '.$italic.';">'.$title.'</h2>
                    <h4 style="font-family: '.$font.';">'.$content.'</h4>
                </figcaption>';
            
        if ( !empty($custom_link) ) {
            $output .='<a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '"></a>';
        }
        $output .='</figure>';                
    }
    
    if ( $effects=='effect32' ){  
                          
        $output .='<figure class="twostyle-eightteen '.$css_class.'">';
        $output .='<img src="'.$image[0].'" alt="'.$title.'" />';
        $output .='<figcaption>
                    <h2 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';font-style: '.$italic.';">'.$title.'</h2>
                    <p style="font-family: '.$font.';">'.$content.'</p>
                </figcaption>';
            
        if ( !empty($custom_link) ) {
            $output .='<a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '"></a>';
        }
        $output .='<img src="'.$image[0].'" alt="'.$title.'" />';
        $output .='</figure>';                
    }    
    
    if ( $effects=='effect33' ){  
                          
        $output .='<figure class="twostyle-twenty '.$css_class.'">';
        $output .='<img src="'.$image[0].'" alt="'.$title.'" />';
        $output .='<figcaption>
                    <h2 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';font-style: '.$italic.';">'.$title.'</h2>
                    <p style="font-family: '.$font.';">'.$content.'</p>
                </figcaption>';
            
        if ( !empty($custom_link) ) {
            $output .='<a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '"></a>';
        }
        $output .='</figure>';                
    }    
    
    if ( $effects=='effect34' ){  
        
        if ( !empty($custom_link) ) {                  
            $output .='<a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">';
        }
        $output .='<div class="single-hover-effect '.$css_class.'">
            <div class="tile">
            <img src="'.$image[0].'"/>
            <div class="details">
            <span class="title" style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';font-style: '.$italic.';">'.$title.'</span>
            <span class="info" style="font-family: '.$font.';">'.$content.'</span>
            </div>
            </div>
            </div></a>';                
    }    
    
    
    if ( $effects=='effect35' ){  
                          
        $output .='<div class="single-hover-effect-2 '.$css_class.'">';
        $output .='<img src="'.$image[0].'" alt="'.$title.'" />';
        $output .='<div class="overlay">
                    <h2 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';font-style: '.$italic.';">'.$title.'</h2>
                    <p style="font-family: '.$font.';">'.$content.'</p>';
            
        if ( !empty($custom_link) ) {
            $output .='<a class="info" href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">'.$readmore.'</a>';
        }
        $output .='</div></div>';                
    }
    
    if ( $effects=='effect36' ){  
                          
        $output .='<div class="single-hover-effect-3 '.$css_class.'">';
        $output .='<img src="'.$image[0].'" alt="'.$title.'" />';
        $output .='<div class="overlay">
                    <h2 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';font-style: '.$italic.';">'.$title.'</h2>
                    <p style="font-family: '.$font.';">'.$content.'</p>';
            
        if ( !empty($custom_link) ) {
            $output .='<a class="info" href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">'.$readmore.'</a>';
        }
        $output .='</div></div>';                
    }    
    
    
    if ( $effects=='effect37' ){  
                          
        $output .='<div class="single-hover-effect-4 '.$css_class.'">';
        $output .='<img src="'.$image[0].'" alt="'.$title.'" />';
        $output .='<div class="overlay">
                    <h2 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';font-style: '.$italic.';">'.$title.'</h2>
                    <p style="font-family: '.$font.';">'.$content.'</p>';
            
        if ( !empty($custom_link) ) {
            $output .='<a class="info" href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">'.$readmore.'</a>';
        }
        $output .='</div></div>';                
    }        
      
    if ( $effects=='effect38' ){ 
         
        if ( !empty($custom_link) ) {                  
            $output .='<a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">';
        }                  
        $output .='<div class="single-hover-effect-5 '.$css_class.'">';
        $output .='<img src="'.$image[0].'" alt="'.$title.'" />';
        $output .='<div class="details">
                    <h2 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';font-style: '.$italic.';">'.$title.'</h2>
                    <p style="font-family: '.$font.';">'.$content.'</p>';
                    
        $output .='</div></div></a>';                
    }    
    

    if ( $effects=='effect39' ){  
                          
        $output .='<div class="single-hover-effect-8 '.$css_class.'">';
        $output .='<img src="'.$image[0].'" alt="'.$title.'" />';
        $output .='<div class="content">
                    <h2 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';font-style: '.$italic.';">'.$title.'</h2>
                    <p style="font-family: '.$font.';">'.$content.'</p>';
            
        if ( !empty($custom_link) ) {
            $output .='<a class="readmore" href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">'.$readmore.'</a>';
        }
        $output .='</div></div>';                
    }

    if ( $effects=='effect40' ){  
                          
        $output .='<div class="single-hover-effect-9 '.$css_class.'">';
        $output .='<img src="'.$image[0].'" alt="'.$title.'" />';
        $output .='<div class="content">
                    <h2 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';font-style: '.$italic.';">'.$title.'</h2>
                    <p style="font-family: '.$font.';">'.$content.'</p>';
            
        if ( !empty($custom_link) ) {
            $output .='<a class="readmore" href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">'.$readmore.'</a>';
        }
        $output .='</div></div>';                
    }    

    if ( $effects=='effect41' ){  
                          
        $output .='<div class="single-hover-effect-10 '.$css_class.'">';
        if ( !empty($custom_link) ) {
            $output .='<a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">';
        }
        
        $output .='<div class="thumb">';
        $output .='<img src="'.$image[0].'" alt="'.$title.'" />';
        $output .='<div class="content">            
            <h2 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';font-style: '.$italic.';">'.$title.'</h2>
            <p style="font-family: '.$font.';">'.$content.'</p>';
                    
        $output .='</div></div></a></div>';                
    }

    if ( $effects=='effect42' ){  
                          
        $output .='<div class="single-hover-effect-11 '.$css_class.'">';
        $output .='<img src="'.$image[0].'" alt="'.$title.'" />';
        $output .='<div class="content">
                    <h2 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';font-style: '.$italic.';">'.$title.'</h2>
                    <p style="font-family: '.$font.';">'.$content.'</p>';
            
        if ( !empty($custom_link) ) {
            $output .='<a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '"></a>';
        }
        $output .='</div></div>';                
    }
    
    if ( $effects=='effect43' ){ 
         
        if ( !empty($custom_link) ) {                  
            $output .='<a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">';
        }                  
        $output .='<div class="single-hover-effect-12 '.$css_class.'">';
        $output .='<img src="'.$image[0].'" alt="'.$title.'" />';
        $output .='<div class="content">
                    <h1 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';font-style: '.$italic.';">'.$title.'</h1>
                    <p style="font-family: '.$font.';">'.$content.'</p>';
                    
        $output .='</div></div></a>';                
    }    
    
    if ( $effects=='effect44' ){  
                          
        $output .='<div class="single-hover-effect-13 '.$css_class.'">';
        $output .='<img src="'.$image[0].'" alt="'.$title.'" />';
        $output .='<div class="content">
                    <h2 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';font-style: '.$italic.';">'.$title.'</h2>
                    <p style="font-family: '.$font.';">'.$content.'</p>';
            
        if ( !empty($custom_link) ) {
            $output .='<a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '"></a>';
        }
        $output .='</div></div>';                
    }    

    if ( $effects=='effect45' ){  
                          
        $output .='<div class="single-hover-effect-14 '.$css_class.'">';
        $output .='<img src="'.$image[0].'" alt="'.$title.'" />';
        $output .='<div class="content">
                    <h2 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';font-style: '.$italic.';">'.$title.'</h2>
                    <p style="font-family: '.$font.';">'.$content.'</p>';
            
        if ( !empty($custom_link) ) {
            $output .='<a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '"></a>';
        }
        $output .='</div></div>';                
    }
     
    if ( $effects=='effect46' ){  
                          
        $output .='<div class="single-hover-effect-15 '.$css_class.'">';
        $output .='<img src="'.$image[0].'" alt="'.$title.'" />';
        $output .='<div class="content">
                    <div class="top-part"><h2 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';font-style: '.$italic.';">'.$title.'</h2></div>
                    <div class="bottom-part"><p style="font-family: '.$font.';">'.$content.'</p></div>';
            
        if ( !empty($custom_link) ) {
            $output .='<a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '"></a>';
        }
        $output .='</div></div>';                
    }      

    if ( $effects=='effect47' ){ 
         
        if ( !empty($custom_link) ) {                  
            $output .='<a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">';
        }                  
        $output .='<div class="single-hover-effect-17 '.$css_class.'">';
        $output .='<img src="'.$image[0].'" alt="'.$title.'" />';
        $output .='<div class="content">
                    <h2 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';font-style: '.$italic.';">'.$title.'</h2>
                    <div><p style="font-family: '.$font.';">'.$content.'</p>';
                    
        $output .='</div></div></a>';                
    }

    if ( $effects=='effect48' ){  
                          
        $output .='<div class="single-hover-effect-18 '.$css_class.'">';
        $output .='<img src="'.$image[0].'" alt="'.$title.'" />';
        $output .='<div class="content">
                    <div><h2 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';font-style: '.$italic.';">'.$title.'</h2></div>
                    <div><p style="font-family: '.$font.';">'.$content.'</p><div class="curl"></div></div>';
            
        if ( !empty($custom_link) ) {
            $output .='<a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '"></a>';
        }
        $output .='</div></div>';                
    }
    
    if ( $effects=='effect49' ){  
        
        if ( !empty($custom_link) ) {                  
            $output .='<a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">';
        }                  
        $output .='<div class="single-hover-effect-19 '.$css_class.'">';
        $output .='<img src="'.$image[0].'" alt="'.$title.'" />';
        $output .='<div class="content">
                    <h2 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.';font-style: '.$italic.';">'.$title.'</h2>
                    <p style="font-family: '.$font.';">'.$content.'</p>';
        $output .='</div></div></a>';                
    }

    if ( $effects=='effect50' ){  
                          
        $output .='<div class="single-hover-effect-20 '.$css_class.'">';
        $output .='<img src="'.$image[0].'" alt="'.$title.'" />';
        $output .='<div class="content">
                    <div><h2 style="font-family: '.$font.'; font-size: '.$heading_font_size.'px; color:'.$heading_color.'; font-style: '.$italic.';">'.$title.'</h2></div>
                    <div><p style="font-family: '.$font.';">'.$content.'</p><div class="curl"></div></div>';
            
        if ( !empty($custom_link) ) {
            $output .='<a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '"></a>';
        }
        $output .='</div></div>';                
    }


    
    return $output;
}

add_shortcode('ahevc_hover', 'ahevc_hover_effects_shortcode');