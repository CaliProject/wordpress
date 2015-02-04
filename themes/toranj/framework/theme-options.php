<?php

add_action( 'ot_after_theme_options_save','owlab_update_permalinks' );
function owlab_update_permalinks(){
  flush_rewrite_rules();
}


global $google_fonts;

$google_fonts = array(
  array('label' => 'use theme default','value' => 'none'),
  array('label' => 'Abel','value' => 'Abel'),
  array('label' => 'Abril Fatface','value' => 'Abril+Fatface'),
  array('label' => 'Aclonica','value' => 'Aclonica'),
  array('label' => 'Actor','value' => 'Actor'),
  array('label' => 'Adamina','value' => 'Adamina'),
  array('label' => 'Aguafina Script','value' => 'Aguafina+Script'),
  array('label' => 'Aladin','value' => 'Aladin'),
  array('label' => 'Aldrich','value' => 'Aldrich'),
  array('label' => 'Alice','value' => 'Alice'),
  array('label' => 'Alike Angular','value' => 'Alike+Angular'),
  array('label' => 'Alike','value' => 'Alike'),
  array('label' => 'Allan','value' => 'Allan'),
  array('label' => 'Allerta Stencil','value' => 'Allerta+Stencil'),
  array('label' => 'Allerta','value' => 'Allerta'),
  array('label' => 'Amaranth','value' => 'Amaranth'),
  array('label' => 'Amatic SC','value' => 'Amatic+SC'),
  array('label' => 'Andada','value' => 'Andada'),
  array('label' => 'Andika','value' => 'Andika'),
  array('label' => 'Annie Use Your Telescope','value' => 'Annie+Use+Your+Telescope'),
  array('label' => 'Anonymous Pro','value' => 'Anonymous+Pro'),
  array('label' => 'Antic','value' => 'Antic'),
  array('label' => 'Anton','value' => 'Anton'),
  array('label' => 'Arapey','value' => 'Arapey'),
  array('label' => 'Architects Daughter','value' => 'Architects+Daughter'),
  array('label' => 'Arimo','value' => 'Arimo'),
  array('label' => 'Artifika','value' => 'Artifika'),
  array('label' => 'Arvo','value' => 'Arvo'),
  array('label' => 'Asset','value' => 'Asset'),
  array('label' => 'Astloch','value' => 'Astloch'),
  array('label' => 'Atomic Age','value' => 'Atomic+Age'),
  array('label' => 'Aubrey','value' => 'Aubrey'),
  array('label' => 'Bangers','value' => 'Bangers'),
  array('label' => 'Bentham','value' => 'Bentham'),
  array('label' => 'Bevan','value' => 'Bevan'),
  array('label' => 'Bigshot One','value' => 'Bigshot+One'),
  array('label' => 'Bitter','value' => 'Bitter'),
  array('label' => 'Black Ops One','value' => 'Black+Ops+One'),
  array('label' => 'Bowlby One SC','value' => 'Bowlby+One+SC'),
  array('label' => 'Bowlby One','value' => 'Bowlby+One'),
  array('label' => 'Brawler','value' => 'Brawler'),
  array('label' => 'Bubblegum Sans','value' => 'Bubblegum+Sans'),
  array('label' => 'Buda','value' => 'Buda'),
  array('label' => 'Butcherman Caps','value' => 'Butcherman+Caps'),
  array('label' => 'Cabin Condensed','value' => 'Cabin+Condensed'),
  array('label' => 'Cabin Sketch','value' => 'Cabin+Sketch'),
  array('label' => 'Cabin','value' => 'Cabin'),
  array('label' => 'Cagliostro','value' => 'Cagliostro'),
  array('label' => 'Calligraffitti','value' => 'Calligraffitti'),
  array('label' => 'Candal','value' => 'Candal'),
  array('label' => 'Cantarell','value' => 'Cantarell'),
  array('label' => 'Cardo','value' => 'Cardo'),
  array('label' => 'Carme','value' => 'Carme'),
  array('label' => 'Carter One','value' => 'Carter+One'),
  array('label' => 'Caudex','value' => 'Caudex'),
  array('label' => 'Cedarville Cursive','value' => 'Cedarville+Cursive'),
  array('label' => 'Changa One','value' => 'Changa+One'),
  array('label' => 'Cherry Cream Soda','value' => 'Cherry+Cream+Soda'),
  array('label' => 'Chewy','value' => 'Chewy'),
  array('label' => 'Chicle','value' => 'Chicle'),
  array('label' => 'Chivo','value' => 'Chivo'),
  array('label' => 'Coda Caption','value' => 'Coda+Caption'),
  array('label' => 'Coda','value' => 'Coda'),
  array('label' => 'Comfortaa','value' => 'Comfortaa'),
  array('label' => 'Coming Soon','value' => 'Coming+Soon'),
  array('label' => 'Contrail One','value' => 'Contrail+One'),
  array('label' => 'Convergence','value' => 'Convergence'),
  array('label' => 'Cookie','value' => 'Cookie'),
  array('label' => 'Copse','value' => 'Copse'),
  array('label' => 'Corben','value' => 'Corben'),
  array('label' => 'Cousine','value' => 'Cousine'),
  array('label' => 'Coustard','value' => 'Coustard'),
  array('label' => 'Covered By Your Grace','value' => 'Covered+By+Your+Grace'),
  array('label' => 'Crafty Girls','value' => 'Crafty+Girls'),
  array('label' => 'Creepster Caps','value' => 'Creepster+Caps'),
  array('label' => 'Crimson Text','value' => 'Crimson+Text'),
  array('label' => 'Crushed','value' => 'Crushed'),
  array('label' => 'Cuprum','value' => 'Cuprum'),
  array('label' => 'Damion','value' => 'Damion'),
  array('label' => 'Dancing Script','value' => 'Dancing+Script'),
  array('label' => 'Dawning of a New Day','value' => 'Dawning+of+a+New+Day'),
  array('label' => 'Days One','value' => 'Days+One'),
  array('label' => 'Delius Swash Caps','value' => 'Delius+Swash+Caps'),
  array('label' => 'Delius Unicase','value' => 'Delius+Unicase'),
  array('label' => 'Delius','value' => 'Delius'),
  array('label' => 'Devonshire','value' => 'Devonshire'),
  array('label' => 'Didact Gothic','value' => 'Didact+Gothic'),
  array('label' => 'Dorsa','value' => 'Dorsa'),
  array('label' => 'Dr Sugiyama','value' => 'Dr+Sugiyama'),
  array('label' => 'Droid Sans Mono','value' => 'Droid+Sans+Mono'),
  array('label' => 'Droid Sans','value' => 'Droid+Sans'),
  array('label' => 'Droid Serif','value' => 'Droid+Serif'),
  array('label' => 'EB Garamond','value' => 'EB+Garamond'),
  array('label' => 'Eater Caps','value' => 'Eater+Caps'),
  array('label' => 'Expletus Sans','value' => 'Expletus+Sans'),
  array('label' => 'Fanwood Text','value' => 'Fanwood+Text'),
  array('label' => 'Federant','value' => 'Federant'),
  array('label' => 'Federo','value' => 'Federo'),
  array('label' => 'Fjord One','value' => 'Fjord+One'),
  array('label' => 'Fondamento','value' => 'Fondamento'),
  array('label' => 'Fontdiner Swanky','value' => 'Fontdiner+Swanky'),
  array('label' => 'Forum','value' => 'Forum'),
  array('label' => 'Francois One','value' => 'Francois+One'),
  array('label' => 'Gentium Basic','value' => 'Gentium+Basic'),
  array('label' => 'Gentium Book Basic','value' => 'Gentium+Book+Basic'),
  array('label' => 'Geo','value' => 'Geo'),
  array('label' => 'Geostar Fill','value' => 'Geostar+Fill'),
  array('label' => 'Geostar','value' => 'Geostar'),
  array('label' => 'Give You Glory','value' => 'Give+You+Glory'),
  array('label' => 'Gloria Hallelujah','value' => 'Gloria+Hallelujah'),
  array('label' => 'Goblin One','value' => 'Goblin+One'),
  array('label' => 'Gochi Hand','value' => 'Gochi+Hand'),
  array('label' => 'Goudy Bookletter 1911','value' => 'Goudy+Bookletter+1911'),
  array('label' => 'Gravitas One','value' => 'Gravitas+One'),
  array('label' => 'Gruppo','value' => 'Gruppo'),
  array('label' => 'Hammersmith One','value' => 'Hammersmith+One'),
  array('label' => 'Herr Von Muellerhoff','value' => 'Herr+Von+Muellerhoff'),
  array('label' => 'Holtwood One SC','value' => 'Holtwood+One+SC'),
  array('label' => 'Homemade Apple','value' => 'Homemade+Apple'),
  array('label' => 'IM Fell DW Pica SC','value' => 'IM+Fell+DW+Pica+SC'),
  array('label' => 'IM Fell DW Pica','value' => 'IM+Fell+DW+Pica'),
  array('label' => 'IM Fell Double Pica SC','value' => 'IM+Fell+Double+Pica+SC'),
  array('label' => 'IM Fell Double Pica','value' => 'IM+Fell+Double+Pica'),
  array('label' => 'IM Fell English SC','value' => 'IM+Fell+English+SC'),
  array('label' => 'IM Fell English','value' => 'IM+Fell+English'),
  array('label' => 'IM Fell French Canon SC','value' => 'IM+Fell+French+Canon+SC'),
  array('label' => 'IM Fell French Canon','value' => 'IM+Fell+French+Canon'),
  array('label' => 'IM Fell Great Primer SC','value' => 'IM+Fell+Great+Primer+SC'),
  array('label' => 'IM Fell Great Primer','value' => 'IM+Fell+Great+Primer'),
  array('label' => 'Iceland','value' => 'Iceland'),
  array('label' => 'Inconsolata','value' => 'Inconsolata'),
  array('label' => 'Indie Flower','value' => 'Indie+Flower'),
  array('label' => 'Irish Grover','value' => 'Irish+Grover'),
  array('label' => 'Istok Web','value' => 'Istok+Web'),
  array('label' => 'Jockey One','value' => 'Jockey+One'),
  array('label' => 'Josefin Sans','value' => 'Josefin+Sans'),
  array('label' => 'Josefin Slab','value' => 'Josefin+Slab'),
  array('label' => 'Judson','value' => 'Judson'),
  array('label' => 'Julee','value' => 'Julee'),
  array('label' => 'Jura','value' => 'Jura'),
  array('label' => 'Just Another Hand','value' => 'Just+Another+Hand'),
  array('label' => 'Just Me Again Down Here','value' => 'Just+Me+Again+Down+Here'),
  array('label' => 'Kameron','value' => 'Kameron'),
  array('label' => 'Kelly Slab','value' => 'Kelly+Slab'),
  array('label' => 'Kenia','value' => 'Kenia'),
  array('label' => 'Knewave','value' => 'Knewave'),
  array('label' => 'Kranky','value' => 'Kranky'),
  array('label' => 'Kreon','value' => 'Kreon'),
  array('label' => 'Kristi','value' => 'Kristi'),
  array('label' => 'La Belle Aurore','value' => 'La+Belle+Aurore'),
  array('label' => 'Lancelot','value' => 'Lancelot'),
  array('label' => 'Lato','value' => 'Lato'),
  array('label' => 'League Script','value' => 'League+Script'),
  array('label' => 'Leckerli One','value' => 'Leckerli+One'),
  array('label' => 'Lekton','value' => 'Lekton'),
  array('label' => 'Lemon','value' => 'Lemon'),
  array('label' => 'Limelight','value' => 'Limelight'),
  array('label' => 'Linden Hill', 'value' => 'Linden+Hill'),
  array('label' => 'Lobster Two','value' => 'Lobster+Two'),
  array('label' => 'Lobster','value' => 'Lobster'),
  array('label' => 'Lora','value' => 'Lora'),
  array('label' => 'Love Ya Like A Sister','value' => 'Love+Ya+Like+A+Sister'),
  array('label' => 'Loved by the King','value' => 'Loved+by+the+King'),
  array('label' => 'Luckiest Guy','value' => 'Luckiest+Guy'),
  array('label' => 'Maiden Orange','value' => 'Maiden+Orange'),
  array('label' => 'Mako','value' => 'Mako'),
  array('label' => 'Marck Script','value' => 'Marck+Script'),
  array('label' => 'Marvel','value' => 'Marvel'),
  array('label' => 'Mate SC','value' => 'Mate+SC'),
  array('label' => 'Mate','value' => 'Mate'),
  array('label' => 'Maven Pro','value' => 'Maven+Pro'),
  array('label' => 'Meddon','value' => 'Meddon'),
  array('label' => 'MedievalSharp','value' => 'MedievalSharp'),
  array('label' => 'Megrim','value' => 'Megrim'),
  array('label' => 'Merienda One','value' => 'Merienda+One'),
  array('label' => 'Merriweather','value' => 'Merriweather'),
  array('label' => 'Metrophobic','value' => 'Metrophobic'),
  array('label' => 'Michroma','value' => 'Michroma'),
  array('label' => 'Miltonian Tattoo','value' => 'Miltonian+Tattoo'),
  array('label' => 'Miltonian','value' => 'Miltonian'),
  array('label' => 'Miss Fajardose','value' => 'Miss+Fajardose'),
  array('label' => 'Miss Saint Delafield','value' => 'Miss+Saint+Delafield'),
  array('label' => 'Modern Antiqua','value' => 'Modern+Antiqua'),
  array('label' => 'Molengo','value' => 'Molengo'),
  array('label' => 'Monofett','value' => 'Monofett'),
  array('label' => 'Monoton','value' => 'Monoton'),
  array('label' => 'Monsieur La Doulaise','value' => 'Monsieur+La+Doulaise'),
  array('label' => 'Montez','value' => 'Montez'),
  array('label' => 'Mountains of Christmas','value' => 'Mountains+of+Christmas'),
  array('label' => 'Mr Bedford','value' => 'Mr+Bedford'),
  array('label' => 'Mr Dafoe','value' => 'Mr+Dafoe'),
  array('label' => 'Mr De Haviland','value' => 'Mr+De+Haviland'),
  array('label' => 'Mrs Sheppards','value' => 'Mrs+Sheppards'),
  array('label' => 'Muli','value' => 'Muli'),
  array('label' => 'Neucha','value' => 'Neucha'),
  array('label' => 'Neuton','value' => 'Neuton'),
  array('label' => 'News Cycle','value' => 'News+Cycle'),
  array('label' => 'Niconne','value' => 'Niconne'),
  array('label' => 'Nixie One','value' => 'Nixie+One'),
  array('label' => 'Nobile','value' => 'Nobile'),
  array('label' => 'Nosifer Caps','value' => 'Nosifer+Caps'),
  array('label' => 'Nothing You Could Do','value' => 'Nothing+You+Could+Do'),
  array('label' => 'Nova Cut','value' => 'Nova+Cut'),
  array('label' => 'Nova Flat','value' => 'Nova+Flat'),
  array('label' => 'Nova Mono','value' => 'Nova+Mono'),
  array('label' => 'Nova Oval','value' => 'Nova+Oval'),
  array('label' => 'Nova Round','value' => 'Nova+Round'),
  array('label' => 'Nova Script','value' => 'Nova+Script'),
  array('label' => 'Nova Slim','value' => 'Nova+Slim'),
  array('label' => 'Nova Square','value' => 'Nova+Square'),
  array('label' => 'Numans','value' => 'Numans'),
  array('label' => 'Nunito','value' => 'Nunito'),
  array('label' => 'Old Standard TT','value' => 'Old+Standard+TT'),
  array('label' => 'Open Sans Condensed','value' => 'Open+Sans+Condensed'),
  array('label' => 'Open Sans','value' => 'Open+Sans'),
  array('label' => 'Orbitron','value' => 'Orbitron'),
  array('label' => 'Oswald','value' => 'Oswald'),
  array('label' => 'Over the Rainbow','value' => 'Over+the+Rainbow'),
  array('label' => 'Ovo','value' => 'Ovo'),
  array('label' => 'PT Sans Caption','value' => 'PT+Sans+Caption'),
  array('label' => 'PT Sans Narrow','value' => 'PT+Sans+Narrow'),
  array('label' => 'PT Sans','value' => 'PT+Sans'),
  array('label' => 'PT Serif Caption','value' => 'PT+Serif+Caption'),
  array('label' => 'PT Serif','value' => 'PT+Serif'),
  array('label' => 'Pacifico','value' => 'Pacifico'),
  array('label' => 'Passero One','value' => 'Passero+One'),
  array('label' => 'Patrick Hand','value' => 'Patrick+Hand'),
  array('label' => 'Paytone One','value' => 'Paytone+One'),
  array('label' => 'Permanent Marker','value' => 'Permanent+Marker'),
  array('label' => 'Petrona','value' => 'Petrona'),
  array('label' => 'Philosopher','value' => 'Philosopher'),
  array('label' => 'Piedra','value' => 'Piedra'),
  array('label' => 'Pinyon Script','value' => 'Pinyon+Script'),
  array('label' => 'Play','value' => 'Play'),
  array('label' => 'Playfair Display','value' => 'Playfair+Display'),
  array('label' => 'Podkova','value' => 'Podkova'),
  array('label' => 'Poller One','value' => 'Poller+One'),
  array('label' => 'Poly','value' => 'Poly'),
  array('label' => 'Pompiere','value' => 'Pompiere'),
  array('label' => 'Prata','value' => 'Prata'),
  array('label' => 'Prociono','value' => 'Prociono'),
  array('label' => 'Puritan','value' => 'Puritan'),
  array('label' => 'Quattrocento Sans','value' => 'Quattrocento+Sans'),
  array('label' => 'Quattrocento','value' => 'Quattrocento'),
  array('label' => 'Questrial','value' => 'Questrial'),
  array('label' => 'Quicksand','value' => 'Quicksand'),
  array('label' => 'Radley','value' => 'Radley'),
  array('label' => 'Raleway','value' => 'Raleway'),
  array('label' => 'Rammetto One','value' => 'Rammetto+One'),
  array('label' => 'Rancho','value' => 'Rancho'),
  array('label' => 'Rationale','value' => 'Rationale'),
  array('label' => 'Redressed','value' => 'Redressed'),
  array('label' => 'Reenie Beanie','value' => 'Reenie+Beanie'),
  array('label' => 'Ribeye Marrow','value' => 'Ribeye+Marrow'),
  array('label' => 'Ribeye','value' => 'Ribeye'),
  array('label' => 'Righteous','value' => 'Righteous'),
  array('label' => 'Rochester','value' => 'Rochester'),
  array('label' => 'Rock Salt','value' => 'Rock+Salt'),
  array('label' => 'Rokkitt','value' => 'Rokkitt'),
  array('label' => 'Rosario','value' => 'Rosario'),
  array('label' => 'Ruslan Display','value' => 'Ruslan+Display'),
  array('label' => 'Salsa','value' => 'Salsa'),
  array('label' => 'Sancreek','value' => 'Sancreek'),
  array('label' => 'Sansita One','value' => 'Sansita+One'),
  array('label' => 'Satisfy','value' => 'Satisfy'),
  array('label' => 'Schoolbell','value' => 'Schoolbell'),
  array('label' => 'Shadows Into Light','value' => 'Shadows+Into+Light'),
  array('label' => 'Shanti','value' => 'Shanti'),
  array('label' => 'Short Stack','value' => 'Short+Stack'),
  array('label' => 'Sigmar One','value' => 'Sigmar+One'),
  array('label' => 'Signika Negative','value' => 'Signika+Negative'),
  array('label' => 'Signika','value' => 'Signika'),
  array('label' => 'Six Caps','value' => 'Six+Caps'),
  array('label' => 'Slackey','value' => 'Slackey'),
  array('label' => 'Smokum','value' => 'Smokum'),
  array('label' => 'Smythe','value' => 'Smythe'),
  array('label' => 'Sniglet','value' => 'Sniglet'),
  array('label' => 'Snippet','value' => 'Snippet'),
  array('label' => 'Sorts Mill Goudy','value' => 'Sorts+Mill+Goudy'),
  array('label' => 'Special Elite',/* */'value' => 'Special+Elite'),
  array('label' => 'Spinnaker','value' => 'Spinnaker'),
  array('label' => 'Spirax','value' => 'Spirax'),
  array('label' => 'Stardos Stencil',/* */'value' => 'Stardos+Stencil'),
  array('label' => 'Sue Ellen Francisco',/* */'value' => 'Sue+Ellen+Francisco'),
  array('label' => 'Sunshiney','value' => 'Sunshiney'),
  array('label' => 'Supermercado One','value' => 'Supermercado+One'),
  array('label' => 'Swanky and Moo Moo','value' => 'Swanky+and+Moo+Moo'),
  array('label' => 'Syncopate','value' => 'Syncopate'),
  array('label' => 'Tangerine','value' => 'Tangerine'),
  array('label' => 'Tenor Sans','value' => 'Tenor+Sans'),
  array('label' => 'Terminal Dosis','value' => 'Terminal+Dosis'),
  array('label' => 'The Girl Next Door','value' => 'The+Girl+Next+Door'),
  array('label' => 'Tienne','value' => 'Tienne'),
  array('label' => 'Tinos','value' => 'Tinos'),
  array('label' => 'Tulpen One','value' => 'Tulpen+One'),
  array('label' => 'Ubuntu Condensed','value' => 'Ubuntu+Condensed'),
  array('label' => 'Ubuntu Mono','value' => 'Ubuntu+Mono'),
  array('label' => 'Ubuntu','value' => 'Ubuntu'),
  array('label' => 'Ultra','value' => 'Ultra'),
  array('label' => 'UnifrakturCook','value' => 'UnifrakturCook'),
  array('label' => 'UnifrakturMaguntia','value' => 'UnifrakturMaguntia'),
  array('label' => 'Unkempt','value' => 'Unkempt'),
  array('label' => 'Unlock','value' => 'Unlock'),
  array('label' => 'Unna','value' => 'Unna'),
  array('label' => 'VT323','value' => 'VT323'),
  array('label' => 'Varela Round','value' => 'Varela+Round'),
  array('label' => 'Varela','value' => 'Varela'),
  array('label' => 'Vast Shadow','value' => 'Vast+Shadow'),
  array('label' => 'Vibur','value' => 'Vibur'),
  array('label' => 'Vidaloka','value' => 'Vidaloka'),
  array('label' => 'Volkhov','value' => 'Volkhov'),
  array('label' => 'Vollkorn','value' => 'Vollkorn'),
  array('label' => 'Voltaire','value' => 'Voltaire'),
  array('label' => 'Waiting for the Sunrise','value' => 'Waiting+for+the+Sunrise'),
  array('label' => 'Wallpoet','value' => 'Wallpoet'),
  array('label' => 'Walter Turncoat','value' => 'Walter+Turncoat'),
  array('label' => 'Wire One','value' => 'Wire+One'),
  array('label' => 'Yanone Kaffeesatz','value' => 'Yanone+Kaffeesatz'),
  array('label' => 'Yellowtail','value' => 'Yellowtail'),
  array('label' => 'Yeseva One','value' => 'Yeseva+One'),
  array('label' => 'Zeyada','value' => 'Zeyada')
);

/**
 * Initialize the custom theme options.
 */
add_action( 'admin_init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 */
function custom_theme_options() {
  
  global $google_fonts;

  /* OptionTree is not loaded yet */
  if ( ! function_exists( 'ot_settings_id' ) )
    return false;
    
  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( ot_settings_id(), array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'sections'        => array( 
      array(
        'id'          => 'general',
        'title'       => __('General','toranj')
      ),
      array(
        'id'          => 'contact',
        'title'       => __('Contacts','toranj')
      ),
       array(
        'id'          => 'social_icons',
        'title'       => __('Social icons','toranj')
      ),
      array(
        'id'          => 'appearance',
        'title'       => __('Appearance','toranj')
      ),
      array(
        'id'          => 'blog_settings',
        'title'       => __('Blog Settings','toranj')
      ),
      array(
        'id'          => 'portfolio_single',
        'title'       => __('Portfolio Single page','toranj')
      ),
      array(
        'id'          => 'portfolio_list_page',
        'title'       => __('Portfolio list page','toranj')
      ),
      array(
        'id'          => 'portfolio_grid',
        'title'       => __('Portfolio Grid','toranj')
      ),
     
      
      array(
        'id'          => 'gallery',
        'title'       => __('Gallery','toranj')
      ),
      array(
        'id'          => 'bulk_gallery',
        'title'       => __('Bulk Gallery','toranj')
      ),
      array(
        'id'          => 'woocommerce',
        'title'       => __('WooCommerce','toranj')
      ),
      array(
        'id'          => 'sidebars',
        'title'       => __('Sidebars','toranj')
      ),
      array(
        'id'          => 'slugs',
        'title'       => __('Post type Slugs','toranj')
      ),
      array(
        'id'          => 'social_sharing',
        'title'       => __('Social Sharing','toranj')
      )
    ),
    'settings'        => array(
      /**
       * ----------------------------------------------------------------------------------------
       * social_sharing
       * ----------------------------------------------------------------------------------------
       */
      array(
        'id'          => 'metaboxes_text',
        'label'       => __('About Social Sharing','toranj'),
        'desc'        => __('You can enable sharing bottom on you website globally here, it will add a button on galleries to share your content.','toranj'),
        'std'         => '',
        'type'        => 'textblock',
        'section'     => 'social_sharing',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'enable_social_sharing',
        'label'       => __('Enable Social Sharing?','toranj'),
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'social_sharing',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'sharing_social_medias',
        'label'       => __('Sharing social media list','toranj'),
        'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'social_sharing',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'enable_social_sharing:is(on)',
        'operator'    => 'and',
        'settings'    => array( 
          array(
            'id'          => 'sharing_websites',
            'label'       => __('Select social sharing media','toranj'),
            'desc'        => '',
            'std'         => '',
            'type'        => 'select',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and',
            'choices'     => array( 
              array(
                'value'       => 'facebook',
                'label'       => __('facebook','toranj'),
                'src'         => ''
              ),
              array(
                'value'       => 'twitter',
                'label'       => __('twitter','toranj'),
                'src'         => ''
              ),
              array(
                'value'       => 'google-plus',
                'label'       => __('google plus','toranj'),
                'src'         => ''
              ),
              array(
                'value'       => 'digg',
                'label'       => __('Digg','toranj'),
                'src'         => ''
              ),
              array(
                'value'       => 'linkedin',
                'label'       => __('linkedin','toranj'),
                'src'         => ''
              ),
              array(
                'value'       => 'pinterest',
                'label'       => __('pinterest','toranj'),
                'src'         => ''
              ),
              array(
                'value'       => 'buffer',
                'label'       => __('Buffer','toranj'),
                'src'         => ''
              ),
              array(
                'value'       => 'tumblr',
                'label'       => __('Tumblr','toranj'),
                'src'         => ''
              ),
              array(
                'value'       => 'reddit',
                'label'       => __('Reddit','toranj'),
                'src'         => ''
              ),
              array(
                'value'       => 'stumbleUpon',
                'label'       => __('StumbleUpon','toranj'),
                'src'         => ''
              ),
              array(
                'value'       => 'delicious',
                'label'       => __('delicious','toranj'),
                'src'         => ''
              )
            )
          )
        )
      ),
      /**
       * ----------------------------------------------------------------------------------------
       * slugs
       * ----------------------------------------------------------------------------------------
       */
      array(
        'id'          => 'metaboxes_text',
        'label'       => __('About Slugs','toranj'),
        'desc'        => __('Here you can set the slug of the custom post types of the theme.<br>If you do not know what this means leave them as they are.','toranj'),
        'std'         => '',
        'type'        => 'textblock',
        'section'     => 'slugs',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'portfolio_slug',
        'label'       => __('Portfolio slug','toranj'),
        'desc'        => __('Default value is <code>portfolio</code>, user lowercase url friendly characters and <strong>no space</strong>.','toranj'),
        'std'         => 'portfolio',
        'type'        => 'text',
        'section'     => 'slugs',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'portfolio_group_slug',
        'label'       => __('Portfolio Groups slug','toranj'),
        'desc'        => __('Default value is <code>portfoliogroup</code>, user lowercase url friendly characters and <strong>no space</strong>.','toranj'),
        'std'         => 'portfoliogroup',
        'type'        => 'text',
        'section'     => 'slugs',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'gallery_slug',
        'label'       => __('Gallery slug','toranj'),
        'desc'        => __('Default value is <code>gallery</code>, user lowercase url friendly characters and <strong>no space</strong>.','toranj'),
        'std'         => 'gallery',
        'type'        => 'text',
        'section'     => 'slugs',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'gallery_tax_slug',
        'label'       => __('Gallery Album slug','toranj'),
        'desc'        => __('Default value is <code>album</code>, user lowercase url friendly characters and <strong>no space</strong>.','toranj'),
        'std'         => 'album',
        'type'        => 'text',
        'section'     => 'slugs',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'bulk_gallery_slug',
        'label'       => __('Bulk Gallery slug','toranj'),
        'desc'        => __('Default value is <code>bulk-gallery</code>, user lowercase url friendly characters and <strong>no space</strong>.','toranj'),
        'std'         => 'bulk-gallery',
        'type'        => 'text',
        'section'     => 'slugs',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      /**
       * ----------------------------------------------------------------------------------------
       * General
       * ----------------------------------------------------------------------------------------
       */
      array(
        'id'          => 'site_logo',
        'label'       => __('Logo','toranj'),
        'desc'        => __('Upload or select your main logo image. This image will be shown in top of sidebar.', 'toranj'),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'show_small_logo',
        'label'       => __('Show small logo?','toranj'),
        'desc'        => __('Select whether or not you want to have a small logo in collapsed sidebar', 'toranj'),
        'std'         => 'on',
        'type'        => 'on-off',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'small_logo',
        'label'       => __('Small logo image','toranj'),
        'desc'        => '',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'show_small_logo:is(on)',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'copyright',
        'label'       => __('Copyright','toranj'),
        'desc'        => __('Copyright text which will be shown in bottom of sidebar', 'toranj'),
        'std'         => '@owwwlab',
        'type'        => 'textarea',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'etc_analytics_code',
        'label'       => __('Analytics script','toranj'),
        'desc'        => __('Paste your Google analytics ( or other services ) code here','toranj'),
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'etc_fav_icon',
        'label'       => __('Site favicon','toranj'),
        'desc'        => __('Upload a 16x16 or 32x32 .png or .ico file','toranj'),
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      /**
       * ----------------------------------------------------------------------------------------
       * contact
       * ----------------------------------------------------------------------------------------
       */
      array(
        'id'          => 'contact_contact',
        'label'       => __('Contacts','toranj'),
        'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'contact',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'settings'    => array( 
          array(
            'id'          => 'contact',
            'label'       => __('Contact','toranj'),
            'desc'        => __('Contact can be email, url, simple text, phone number, fax number, etc', 'toranj'),
            'std'         => '012345',
            'type'        => 'text',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          ),
          array(
            'id'          => 'icon',
            'label'       => __('Icon','toranj'),
            'desc'        => __('The icon to be shown beside the contact in the list, find your icon here: <a href="http://fontawesome.io/icons/" target="_blank">http://fontawesome.io/icons/</a> and input them like <code>fa-envelope</code>', 'toranj'),
            'std'         => 'fa-envelope',
            'type'        => 'text',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          )
        )
      ),
      array(
        'id'          => 'contact_location',
        'label'       => __('Location','toranj'),
        'desc'        => __('input your location(s)', 'toranj'),
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'contact',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'contact_address',
        'label'       => __('Address','toranj'),
        'desc'        => '',
        'std'         => 'Footscray VIC 3011 Australia',
        'type'        => 'text',
        'section'     => 'contact',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),



      /**
       * ----------------------------------------------------------------------------------------
       * social icons
       * ----------------------------------------------------------------------------------------
       */
      array(
        'id'          => 'social_icons',
        'label'       => __('Side bar social icons','toranj'),
        'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'social_icons',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'settings'    => array( 
          array(
            'id'          => 'si_icon',
            'label'       => __('Select icon','toranj'),
            'desc'        => '',
            'std'         => '',
            'type'        => 'select',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and',
            'choices'     => array( 
              array(
                'value'       => 'facebook',
                'label'       => __('facebook','toranj'),
                'src'         => ''
              ),
              array(
                'value'       => 'twitter',
                'label'       => __('twitter','toranj'),
                'src'         => ''
              ),
              array(
                'value'       => 'instagram',
                'label'       => __('instagram','toranj'),
                'src'         => ''
              ),
              array(
                'value'       => 'flickr',
                'label'       => __('flickr','toranj'),
                'src'         => ''
              ),
              array(
                'value'       => 'youtube',
                'label'       => __('youtube','toranj'),
                'src'         => ''
              ),
              array(
                'value'       => 'google-plus',
                'label'       => __('google plus','toranj'),
                'src'         => ''
              ),
              array(
                'value'       => 'behance',
                'label'       => __('behance','toranj'),
                'src'         => ''
              ),
              array(
                'value'       => 'digg',
                'label'       => __('Digg','toranj'),
                'src'         => ''
              ),
              array(
                'value'       => 'dribble',
                'label'       => __('Dribble','toranj'),
                'src'         => ''
              ),
              array(
                'value'       => 'dropbox',
                'label'       => __('Dropbox','toranj'),
                'src'         => ''
              ),
              array(
                'value'       => 'flickr',
                'label'       => __('Flickr','toranj'),
                'src'         => ''
              ),
              array(
                'value'       => 'github',
                'label'       => __('github','toranj'),
                'src'         => ''
              ),
              array(
                'value'       => 'linkedin',
                'label'       => __('linkedin','toranj'),
                'src'         => ''
              ),
              array(
                'value'       => 'pinterest',
                'label'       => __('pinterest','toranj'),
                'src'         => ''
              ),
              array(
                'value'       => 'qq',
                'label'       => __('qq','toranj'),
                'src'         => ''
              ),
              array(
                'value'       => 'wechat',
                'label'       => __('wechat','toranj'),
                'src'         => ''
              ),
              array(
                'value'       => 'weibo',
                'label'       => __('weibo','toranj'),
                'src'         => ''
              ),
              array(
                'value'       => 'soundcloud',
                'label'       => __('soundcloud','toranj'),
                'src'         => ''
              ),
              array(
                'value'       => 'spotify',
                'label'       => __('spotify','toranj'),
                'src'         => ''
              ),
              array(
                'value'       => 'stack-overflow',
                'label'       => __('stackoverflow','toranj'),
                'src'         => ''
              ),
              array(
                'value'       => 'vine',
                'label'       => __('vine','toranj'),
                'src'         => ''
              ),
              array(
                'value'       => 'vimeo-square',
                'label'       => __('Vimeo','toranj'),
                'src'         => ''
              )
            )
          ),
          array(
            'id'          => 'si_url',
            'label'       => __('URL','toranj'),
            'desc'        => '',
            'std'         => '#',
            'type'        => 'text',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          )
        )
      ),

      /**
       * ----------------------------------------------------------------------------------------
       * appearance
       * ----------------------------------------------------------------------------------------
       */
      // array(
      //   'id'          => 'enable_lazyloud',
      //   'label'       => __('Enable lazyload on images?','toranj'),
      //   'std'         => 'on',
      //   'type'        => 'on-off',
      //   'section'     => 'appearance',
      //   'rows'        => '',
      //   'post_type'   => '',
      //   'taxonomy'    => '',
      //   'min_max_step'=> '',
      //   'class'       => '',
      //   'condition'   => '',
      //   'operator'    => 'and'
      // ),
      array(
        'id'          => 'fixed_sidebar',
        'label'       => __('Fixed sidebar','toranj'),
        'desc'        => __('Setting this to be On, will fix the sidebar to be shown all the time', 'toranj'),
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'appearance',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'dark_sidebar',
        'label'       => __('Dark sidebar','toranj'),
        'desc'        => __('This will use an alternative color scheme for the sidebar.', 'toranj'),
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'appearance',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'color_accent',
        'label'       => __('Accent color','toranj'),
        'std'         => '#dc971f',
        'type'        => 'colorpicker',
        'section'     => 'appearance',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'color_accent_2',
        'label'       => __('Accent color alt','toranj'),
        'desc'        => __('used as hover color','toranj'),
        'std'         => '#dc971f',
        'type'        => 'colorpicker',
        'section'     => 'appearance',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'light_page_bcolor',
        'label'       => __('Light pages background color','toranj'),
        'std'         => '#fdfdfd',
        'type'        => 'colorpicker',
        'section'     => 'appearance',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'dark_page_bcolor',
        'label'       => __('Dark pages background color','toranj'),
        'std'         => '#232323',
        'type'        => 'colorpicker',
        'section'     => 'appearance',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'side_bar_bcolor',
        'label'       => __('Main sidebar background color','toranj'),
        'std'         => '#fafaf5',
        'type'        => 'colorpicker',
        'section'     => 'appearance',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'inner_bar_bcolor',
        'label'       => __('Closed menu-bar background color','toranj'),
        'std'         => '#fafaf5',
        'type'        => 'colorpicker',
        'section'     => 'appearance',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
       array(
        'id'          => 'dark_sidebar_bcolor',
        'label'       => __('Background color of dark sidebar in gallery and portfolio pages ','toranj'),
        'desc'        =>__('The background color of dark sidebar in gallery and portfolio pages '),
        'std'         => '#232323',
        'type'        => 'colorpicker',
        'section'     => 'appearance',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
         array(
        'id'          => 'dark_main_bcolor',
        'label'       => __('Background color of main area in gallery and portfolio pages','toranj'),
        'desc'        =>__('The background color of main content area in gallery and portfolio pages '),
        'std'         => '#232323',
        'type'        => 'colorpicker',
        'section'     => 'appearance',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'label'       => __('Body font','toranj'),
        'id'          => 'toranj_body_font',
        'desc'        => __('Choose font for body ( Default is Raleway).','toranj'),
        'std'         => '',
        'type'        => 'select',
        'section'     => 'appearance',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'choices'     => $google_fonts
        ),

      array(
        'label'       => 'Body font size',
        'id'          => __('toranj_body_font_size','toranj'),
        'type'        => 'measurement',
        'desc'        => __('Set font-size for texts','toranj'),
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'appearance'
        ),
      
      /**
       * ----------------------------------------------------------------------------------------
       * blog
       * ----------------------------------------------------------------------------------------
       */
      array(
        'id'          => 'blog_index_layout',
        'label'       => __('Blog Index Layout','toranj'),
        'desc'        => __('Choose the layout you want for your blog index', 'toranj'),
        'std'         => 'grid',
        'type'        => 'radio',
        'section'     => 'blog_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'grid',
            'label'       => __('Grid','toranj'),
            'src'         => ''
          ),
          array(
            'value'       => 'simple_list',
            'label'       => __('Simple list','toranj'),
            'src'         => ''
          ),
          array(
            'value'       => 'list_with_sidebar',
            'label'       => __('List with Sidebar','toranj'),
            'src'         => ''
          ),
          array(
            'value'       => 'minimal',
            'label'       => __('Minimal','toranj'),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'grid_blog_sidebar_content',
        'label'       => __('Grid blog sidebar content','toranj'),
        'desc'        => __('If you want some contents at the sidebar of the blog grid, put them here. Make sure you don\'t put so much content here, just a little bit of text or HTML as a description to your blog.', 'toranj'),
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'blog_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'blog_index_layout:is(grid)',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'single_blog_post_layout',
        'label'       => __('Single Blog Post Layout','toranj'),
        'desc'        => __('Choose the layout of your single blog post', 'toranj'),
        'std'         => 'full_cover_no_sidebar',
        'type'        => 'radio',
        'section'     => 'blog_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'conv_with_side',
            'label'       => __('conventional layout with sidebar','toranj'),
            'src'         => ''
          ),
          array(
            'value'       => 'conv_without_side',
            'label'       => __('Conventional Layout without sidebar','toranj'),
            'src'         => ''
          ),
          array(
            'value'       => 'full_cover_no_sidebar',
            'label'       => __('Full Cover Image','toranj'),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'blog_read_more_button',
        'label'       => __('Blog Read More button','toranj'),
        'desc'        => __('Turn the blog list read more on or off - will not affect the minimal blog list layout', 'toranj'),
        'std'         => 'on',
        'type'        => 'on-off',
        'section'     => 'blog_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'blog_read_more_button_style',
        'label'       => __('Blog Read more button style','toranj'),
        'desc'        => __('Select the style of your blog more button', 'toranj'),
        'std'         => 'btn-toranj',
        'type'        => 'radio',
        'section'     => 'blog_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'blog_read_more_button:is(on)',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'btn-toranj',
            'label'       => __('Default ( accent color )','toranj'),
            'src'         => ''
          ),
          array(
            'value'       => 'btn-toranj alt',
            'label'       => __('Default reverse','toranj'),
            'src'         => ''
          ),
          array(
            'value'       => 'btn-default',
            'label'       => __('Light','toranj'),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'blog_read_more_button_size',
        'label'       => __('Blog Read More button size','toranj'),
        'desc'        => __('The size of your blog read more button', 'toranj'),
        'std'         => 'btn-lg',
        'type'        => 'radio',
        'section'     => 'blog_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'blog_read_more_button:is(on)',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'btn-lg',
            'label'       => __('Large','toranj'),
            'src'         => ''
          ),
          array(
            'value'       => 'medium',
            'label'       => __('Medium','toranj'),
            'src'         => ''
          ),
          array(
            'value'       => 'btn-sm',
            'label'       => __('Small','toranj'),
            'src'         => ''
          ),
          array(
            'value'       => 'btn-xs',
            'label'       => __('Extera Small','toranj'),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'single_blog_post_layout',
        'label'       => __('Single Blog Post Layout','toranj'),
        'desc'        => __('Select how you want to show your blog posts', 'toranj'),
        'std'         => 'full',
        'type'        => 'radio',
        'section'     => 'blog_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'full',
            'label'       => __('Full width cover','toranj'),
            'src'         => ''
          ),
          array(
            'value'       => 'regular',
            'label'       => __('Regular','toranj'),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'show_author_bio',
        'label'       => __('Show author biography','toranj'),
        'desc'        => __('Do you want to show the bio of the author at the end of each blog post?', 'toranj'),
        'std'         => 'on',
        'type'        => 'on-off',
        'section'     => 'blog_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'show_related_posts',
        'label'       => __('Show Related Posts','toranj'),
        'desc'        => __('If you want to show the related posts of the same category turn this on.', 'toranj'),
        'std'         => 'on',
        'type'        => 'on-off',
        'section'     => 'blog_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'related_post_limit',
        'label'       => __('How many post to show?','toranj'),
        'desc'        => '',
        'std'         => '4',
        'type'        => 'numeric-slider',
        'section'     => 'blog_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '2,10,1',
        'class'       => '',
        'condition'   => 'show_related_posts:is(on)',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'related_posts_gather_data_based_on',
        'label'       => __('Gather data based on','toranj'),
        'desc'        => '',
        'std'         => 'category',
        'type'        => 'radio',
        'section'     => 'blog_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'show_related_posts:is(on)',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'category',
            'label'       => __('Category','toranj'),
            'src'         => ''
          ),
          array(
            'value'       => 'tags',
            'label'       => __('Tags','toranj'),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'show_prev_next',
        'label'       => __('Show Prev and Next links at single post','toranj'),
        'desc'        => '',
        'std'         => 'on',
        'type'        => 'on-off',
        'section'     => 'blog_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'show_sharings',
        'label'       => __('Show Sharings','toranj'),
        'desc'        => '',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'blog_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'sharings',
        'label'       => __('Sharings','toranj'),
        'desc'        => __('Witch social media sharing buttons do you want to show?', 'toranj'),
        'std'         => '',
        'type'        => 'checkbox',
        'section'     => 'blog_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'show_sharings:is(on)',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'sharing_facebook',
            'label'       => __('Facebook','toranj'),
            'src'         => ''
          ),
          array(
            'value'       => 'sharing_twitter',
            'label'       => __('Twitter','toranj'),
            'src'         => ''
          ),
          array(
            'value'       => 'sharing_google_plus',
            'label'       => __('Google+','toranj'),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'sharing_title',
        'label'       => __('Sharing Title','toranj'),
        'desc'        => __('The Title of the Sharing section', 'toranj'),
        'std'         => 'Share',
        'type'        => 'text',
        'section'     => 'blog_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'show_sharings:is(on)',
        'operator'    => 'and'
      ),

      /**
       * ----------------------------------------------------------------------------------------
       * portfolio single
       * ----------------------------------------------------------------------------------------
       */
      array(
        'id'          => 'metaboxes_text',
        'label'       => __('About sidebars','toranj'),
        'desc'        => __('Create additional fields for your portfolio items.', 'toranj'),
        'std'         => '',
        'type'        => 'textblock',
        'section'     => 'portfolio_single',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'label'       => __('Create Portfolio fields','toranj'),
        'id'          => 'incr_portfolio_fields',
        'type'        => 'list-item',
        'desc'        => __('Choose a unique title for each filed', 'toranj'),
        'section'     => 'portfolio_single',
        'settings'    => array(
          array(
            'label'       => __('ID','toranj'),
            'id'          => 'id',
            'type'        => 'text',
            'desc'        => __('Write a lowercase single world as ID (or number), without any spaces', 'toranj'),
            'std'         => '',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          )
        )
      ),
      array(
        'id'          => 'portfolio_show_date',
        'label'       => __('Show date','toranj'),
        'desc'        => '',
        'std'         => 'on',
        'type'        => 'on-off',
        'section'     => 'portfolio_single',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      
      array(
        'id'          => 'portfolio_show_groups',
        'label'       => __('Show Groups list ( categories )','toranj'),
        'desc'        => '',
        'std'         => 'on',
        'type'        => 'on-off',
        'section'     => 'portfolio_single',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'portfolio_show_tags',
        'label'       => __('Show tags','toranj'),
        'desc'        => '',
        'std'         => 'on',
        'type'        => 'on-off',
        'section'     => 'portfolio_single',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      /**
       * ----------------------------------------------------------------------------------------
       * portfolio_list_page
       * ----------------------------------------------------------------------------------------
       */
      array(
        'id'          => 'owlabUseAjax',
        'label'       => __('Enable Ajax for portfolio pages?','toranj'),
        'std'         => 'on',
        'type'        => 'on-off',
        'section'     => 'portfolio_list_page',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'portfolio_index_layout',
        'label'       => __('Layout type','toranj'),
        'desc'        => __('Settings for:','toranj').'<a target="_blank" href="'.get_site_url().'/portfolio">'.get_site_url().'/portfolio</a>',
        'std'         => 'horizontal',
        'type'        => 'select',
        'section'     => 'portfolio_list_page',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'grid',
            'label'       => __('Grid Layout','toranj'),
            'src'         => ''
          ),
          array(
            'value'       => 'vertical',
            'label'       => __('Vertical Covers Scroll Horizontal','toranj'),
            'src'         => ''
          ),
          array(
            'value'       => 'horizontal',
            'label'       => __('Horizontal Covers, Scroll Vertical','toranj'),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'portfolio_horizontal_animate',
        'label'       => __('Animation on scroll','toranj'),
        'desc'        => '',
        'std'         => 'on',
        'type'        => 'on-off',
        'section'     => 'portfolio_list_page',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'portfolio_index_layout:is(horizontal)',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'portfolio_title_1',
        'label'       => __('Title ( Part one )','toranj'),
        'desc'        => __('first part of the title, leave blank in case you don\'t want it', 'toranj'),
        'std'         => 'Browse our',
        'type'        => 'text',
        'section'     => 'portfolio_list_page',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'portfolio_title_2',
        'label'       => __('Title ( Part Two )','toranj'),
        'desc'        => __('Second and bolder part of the title', 'toranj'),
        'std'         => 'Portfolio',
        'type'        => 'text',
        'section'     => 'portfolio_list_page',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'portfolio_side_content',
        'label'       => __('Side content','toranj'),
        'desc'        => __('This content will be displayed under the title at sidebar<br /> <strong>Note:</strong> keep it short','toranj'),
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'portfolio_list_page',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),


      /**
       * ----------------------------------------------------------------------------------------
       * portfolio_grid
       * ----------------------------------------------------------------------------------------
       */
      array(
        'id'          => 'portfolio_grid_show_filters',
        'label'       => __('Show filters for Grid layout','toranj'),
        'desc'        => __('Do you want to show filters ( filter by group ) for Grid layout? <br> Note: We don\'t recommend to use both filters and side-content at the same time, use both on your own risk.','toranj'),
        'std'         => 'on',
        'type'        => 'on-off',
        'section'     => 'portfolio_grid',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'filter_title',
        'label'       => __('Filter title','toranj'),
        'desc'        => '',
        'std'         => 'Groups',
        'type'        => 'text',
        'section'     => 'portfolio_grid',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'portfolio_grid_show_sidebar',
        'label'       => __('Show sidebar?','toranj'),
        'std'         => 'on',
        'type'        => 'on-off',
        'section'     => 'portfolio_grid',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'portfolio_grid_same_ratio',
        'label'       => __('Same Ratio Thumbs','toranj'),
        'desc'        => __('If all your thumbnails are at the same ratio turn this on, for example if you want all your thumbs to be at the same size, or even if you have two different same ratio images. If you want to use images with variable heightes leave this to be off.', 'toranj'),
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'portfolio_grid',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'portfolio_grid_hover',
        'label'       => __('Portfolio Grid Hover style','toranj'),
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'portfolio_grid',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'tj-hover-1',
            'label'       => __('Style #1','toranj'),
            'src'         => ''
          ),
          array(
            'value'       => 'tj-hover-2',
            'label'       => __('style #2','toranj'),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'portfolio_grid_nopadding',
        'label'       => __('Remove spaces between images ( no padding )','toranj'),
        'desc'        => '',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'portfolio_grid',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'portfolio_grid_larg_screen_column_count',
        'label'       => __('Portfolio Grid Larg Screen column count','toranj'),
        'desc'        => __('Number of grid columns at large screens', 'toranj'),
        'std'         => '5',
        'type'        => 'numeric-slider',
        'section'     => 'portfolio_grid',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '1,6',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'portfolio_grid_medium_column_count',
        'label'       => __('Portfolio Grid Medium Column Count','toranj'),
        'desc'        => __('For medium devices', 'toranj'),
        'std'         => '3',
        'type'        => 'numeric-slider',
        'section'     => 'portfolio_grid',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '1,10',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'portfolio_grid_small_column_count',
        'label'       => __('Portfolio Grid Small Column Count','toranj'),
        'desc'        => __('For small display devices', 'toranj'),
        'std'         => '1',
        'type'        => 'numeric-slider',
        'section'     => 'portfolio_grid',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '1,3',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      
      /**
       * ----------------------------------------------------------------------------------------
       * gallery
       * ----------------------------------------------------------------------------------------
       */
      array(
        'id'          => 'gallery_index_layout',
        'label'       => __('Gallery Index Layout','toranj'),
        'desc'        => __('choose how you want to show the index page of the gallery ( the page that will list all your images )', 'toranj'),
        'std'         => 'grid',
        'type'        => 'radio',
        'section'     => 'gallery',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'grid',
            'label'       => __('grid','toranj'),
            'src'         => ''
          ),
          array(
            'value'       => 'horizontal',
            'label'       => __('horizontal scrolling','toranj'),
            'src'         => ''
          ),
          array(
            'value'       => 'inpage',
            'label'       => __('inpage','toranj'),
            'src'         => ''
          ),
          array(
            'value'       => 'minimal',
            'label'       => __('minimal','toranj'),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'gallery_title_1',
        'label'       => __('Gallery title line1','toranj'),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'gallery',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'gallery_title_2',
        'label'       => __('Gallery title line2','toranj'),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'gallery',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'gallery_side_content',
        'label'       => __('Gallery side content','toranj'),
        'desc'        => '',
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'gallery',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'gallery_index_overlay_type',
        'label'       => __('Gallery index - Image Hover type','toranj'),
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'gallery',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'simple-icon',
            'label'       => __('simple-icon','toranj'),
            'src'         => ''
          ),
          array(
            'value'       => 'circle',
            'label'       => __('circle','toranj'),
            'src'         => ''
          ),
          array(
            'value'       => 'plus-light',
            'label'       => __('plus-light','toranj'),
            'src'         => ''
          ),
          array(
            'value'       => 'plus-dark',
            'label'       => __('plus-dark','toranj'),
            'src'         => ''
          ),
          array(
            'value'       => 'plus-color',
            'label'       => __('plus-color','toranj'),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'gallery_grid___layout_type',
        'label'       => __('Gallery Grid - Layout Type','toranj'),
        'desc'        => __('choose between Layouts', 'toranj'),
        'std'         => '',
        'type'        => 'select',
        'section'     => 'gallery',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'gallery_index_layout:is(grid)',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'with-sidebar',
            'label'       => __('With sidebar','toranj'),
            'src'         => ''
          ),
          array(
            'value'       => 'full',
            'label'       => __('Full - No sidebar','toranj'),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'gallery_grid_show_filters',
        'label'       => __('Gallery Grid - Show filters?','toranj'),
        'desc'        => __('Do you want to show filters ( filter by group ) for Grid layout?  Note: We don\'t recommend to use both filters and side-content at the same time, use both on your own risk.','toranj'),
        'std'         => 'on',
        'type'        => 'on-off',
        'section'     => 'gallery',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'gallery_index_layout:is(grid)',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'gallery_grid___filter_title',
        'label'       => __('Gallery Grid - Filter title','toranj'),
        'desc'        => '',
        'std'         => 'Filter',
        'type'        => 'text',
        'section'     => 'gallery',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'gallery_index_layout:is(grid)',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'gallery_grid___same_ratio_thumbs',
        'label'       => __('Gallery Grid - Same Ratio Thumbs?','toranj'),
        'desc'        => __('If all your thumbnails are at the same ratio turn this on, for example if you want all your thumbs to be at the same size, or even if you have two different same ratio images. If you want to use images with variable heightes leave this to be off.', 'toranj'),
        'std'         => '',
        'type'        => 'on-off',
        'section'     => 'gallery',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'gallery_index_layout:is(grid)',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'gallery_grid___remove_spaces_between_images',
        'label'       => __('Gallery Grid - Remove spaces between images?','toranj'),
        'desc'        => '',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'gallery',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'gallery_index_layout:is(grid)',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'gallery_grid___larg_screen_column_count',
        'label'       => __('Gallery Grid - Larg Screen column count','toranj'),
        'desc'        => __('Number of grid columns at large screens', 'toranj'),
        'std'         => '4',
        'type'        => 'numeric-slider',
        'section'     => 'gallery',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '1,6',
        'class'       => '',
        'condition'   => 'gallery_index_layout:is(grid)',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'gallery_grid___medium_screen_column_count',
        'label'       => __('Gallery Grid - Medium Screen Column Count','toranj'),
        'desc'        => __('For medium devices', 'toranj'),
        'std'         => '3',
        'type'        => 'numeric-slider',
        'section'     => 'gallery',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '1,10',
        'class'       => '',
        'condition'   => 'gallery_index_layout:is(grid)',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'gallery_grid___small_column_count',
        'label'       => __('Gallery Grid - Small Column Count','toranj'),
        'desc'        => __('For small display devices', 'toranj'),
        'std'         => '1',
        'type'        => 'numeric-slider',
        'section'     => 'gallery',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '1,3',
        'class'       => '',
        'condition'   => 'gallery_index_layout:is(grid)',
        'operator'    => 'and'
      ),

      /**
       * ----------------------------------------------------------------------------------------
       * Bulk gallery
       * ----------------------------------------------------------------------------------------
       */
      array(
        'id'          => 'bulk_gallery_index_layout',
        'label'       => __('Bulk Gallery Index Layout','toranj'),
        'desc'        => __('choose how you want to show the index page of the bulk gallery ( the page that will list all your bulk galleries )', 'toranj'),
        'std'         => 'horizontal-scroll',
        'type'        => 'radio',
        'section'     => 'bulk_gallery',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          
          array(
            'value'       => 'horizontal-scroll',
            'label'       => __('horizontal scrolling','toranj'),
            'src'         => ''
          ),
          array(
            'value'       => 'grid',
            'label'       => __('grid','toranj'),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'bulk_gallery_title_1',
        'label'       => __('Gallery title line1','toranj'),
        'desc'        => '',
        'std'         => 'Browse our',
        'type'        => 'text',
        'section'     => 'bulk_gallery',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'bulk_gallery_title_2',
        'label'       => __('Gallery title line2','toranj'),
        'desc'        => '',
        'std'         => 'Gallery',
        'type'        => 'text',
        'section'     => 'bulk_gallery',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'bulk_gallery_side_content',
        'label'       => __('Gallery side content','toranj'),
        'desc'        => '',
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'bulk_gallery',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),

      array(
        'id'          => 'bulk_gallery_grid___layout_type',
        'label'       => __('Gallery Grid - Layout Type','toranj'),
        'desc'        => __('choose between Layouts', 'toranj'),
        'std'         => '',
        'type'        => 'select',
        'section'     => 'bulk_gallery',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'bulk_gallery_index_layout:is(grid)',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'with-sidebar',
            'label'       => __('With sidebar','toranj'),
            'src'         => ''
          ),
          array(
            'value'       => 'full',
            'label'       => __('Full - No sidebar','toranj'),
            'src'         => ''
          )
        )
      ),

      array(
        'id'          => 'bulk_gallery_grid_hover',
        'label'       => __('Grid Hover style','toranj'),
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'section'     => 'bulk_gallery',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'bulk_gallery_index_layout:is(grid)',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'tj-hover-1',
            'label'       => __('Style #1','toranj'),
            'src'         => ''
          ),
          array(
            'value'       => 'tj-hover-2',
            'label'       => __('style #2','toranj'),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'bulk_gallery_grid___same_ratio_thumbs',
        'label'       => __('Bulk Gallery Grid - Same Ratio Thumbs?','toranj'),
        'desc'        => __('If all your thumbnails are at the same ratio turn this on, for example if you want all your thumbs to be at the same size, or even if you have two different same ratio images. If you want to use images with variable heightes leave this to be off.', 'toranj'),
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'bulk_gallery',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'bulk_gallery_index_layout:is(grid)',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'bulk_gallery_grid___remove_spaces_between_images',
        'label'       => __('Bulk Gallery Grid - Remove spaces between images?','toranj'),
        'desc'        => '',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'bulk_gallery',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'bulk_gallery_index_layout:is(grid)',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'bulk_gallery_grid___larg_screen_column_count',
        'label'       => __('Gallery Grid - Larg Screen column count','toranj'),
        'desc'        => __('Number of grid columns at large screens', 'toranj'),
        'std'         => '4',
        'type'        => 'numeric-slider',
        'section'     => 'bulk_gallery',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '1,6',
        'class'       => '',
        'condition'   => 'bulk_gallery_index_layout:is(grid)',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'bulk_gallery_grid___medium_screen_column_count',
        'label'       => __('Gallery Grid - Medium Screen Column Count','toranj'),
        'desc'        => __('For medium devices', 'toranj'),
        'std'         => '3',
        'type'        => 'numeric-slider',
        'section'     => 'bulk_gallery',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '1,10',
        'class'       => '',
        'condition'   => 'bulk_gallery_index_layout:is(grid)',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'bulk_gallery_grid___small_column_count',
        'label'       => __('Gallery Grid - Small Column Count','toranj'),
        'desc'        => __('For small display devices', 'toranj'),
        'std'         => '2',
        'type'        => 'numeric-slider',
        'section'     => 'bulk_gallery',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '1,3',
        'class'       => '',
        'condition'   => 'bulk_gallery_index_layout:is(grid)',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'bulk_gallery_grid___xs_column_count',
        'label'       => __('Gallery Grid - Mobile Screen Column Count','toranj'),
        'desc'        => __('For Mobile display devices', 'toranj'),
        'std'         => '1',
        'type'        => 'numeric-slider',
        'section'     => 'bulk_gallery',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '1,3',
        'class'       => '',
        'condition'   => 'bulk_gallery_index_layout:is(grid)',
        'operator'    => 'and'
      ),
      /**
       * ----------------------------------------------------------------------------------------
       * woocommerce
       * ----------------------------------------------------------------------------------------
       */
      array(
        'id'          => 'woocommerce_side_position',
        'label'       => __('woocommerce Sidebar','toranj'),
        'desc'        => '',
        'std'         => 'left',
        'type'        => 'select',
        'section'     => 'woocommerce',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'left',
            'label'       => __('Left','toranj'),
            'src'         => ''
          ),
          array(
            'value'       => 'right',
            'label'       => __('Right','toranj'),
            'src'         => ''
          ),
          array(
            'value'       => 'no-sidebar',
            'label'       => __('No sidebar','toranj'),
            'src'         => ''
          )
        )
      ),
      array(
        'id'          => 'shop_column_number',
        'label'       => __('How many columns to show?','toranj'),
        'desc'        => '',
        'std'         => '3',
        'type'        => 'numeric-slider',
        'section'     => 'woocommerce',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '2,4,1',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      /**
       * ----------------------------------------------------------------------------------------
       * sidebars
       * ----------------------------------------------------------------------------------------
       */
      array(
        'id'          => 'sidebars_text',
        'label'       => __('About sidebars','toranj'),
        'desc'        => __('Create any sidebar then go to Appearance &gt; Widgets and add widgets to them, and then you can choose them for specific pages or posts using visual composer', 'toranj'),
        'std'         => '',
        'type'        => 'textblock',
        'section'     => 'sidebars',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'label'       => __('Create Sidebars','toranj'),
        'id'          => 'incr_sidebars',
        'type'        => 'list-item',
        'desc'        => __('Choose a unique title for each sidebar', 'toranj'),
        'section'     => 'sidebars',
        'settings'    => array(
          array(
            'label'       => __('ID','toranj'),
            'id'          => 'id',
            'type'        => 'text',
            'desc'        => __('Write a lowercase single world as ID (or number), without any spaces', 'toranj'),
            'std'         => '',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          )
        )
      ),
    )
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( ot_settings_id(), $custom_settings ); 
  }
  
  /* Lets OptionTree know the UI Builder is being overridden */
  global $ot_has_custom_theme_options;
  $ot_has_custom_theme_options = true;
  
}