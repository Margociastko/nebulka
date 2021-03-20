<?php
// Register Custom Post Type: Poem
function post_poem() {

	$labels = array(
		'name'                  => _x( 'Wiersze', 'Post Type General Name', '' ),
		'singular_name'         => _x( 'Wiersz', 'Post Type Singular Name', '' ),
		'menu_name'             => __( 'Poezja', '' ),
		'name_admin_bar'        => __( 'Wiersze', '' ),
		'archives'              => __( 'Wiersze', '' ),
		'attributes'            => __( '', '' ),
		'all_items'             => __( 'Wiersze', '' ),
		'add_new_item'          => __( 'Dodaj nowy wiersz', '' ),
		'add_new'               => __( 'Dodaj nowy wiersz', '' ),
		'new_item'              => __( 'Wiersz', '' ),
		'edit_item'             => __( 'Edytuj wiersz', '' ),
		'update_item'           => __( 'Aktualizuj wiersz', '' ),
		'view_item'             => __( 'Zobacz wiersz', '' ),
		'view_items'            => __( 'Zobacz wiersze', '' ),
		'search_items'          => __( 'Szukaj wierszy', '' ),
		'not_found'             => __( 'Nie znaleziono', '' ),
		'not_found_in_trash'    => __( 'Nie znaleziono w koszu', '' ),
		'featured_image'        => __( 'Obraz ilustrujący wiersz', '' ),
		'set_featured_image'    => __( 'Wybierz obraz który ma ilustrować wiersz', '' ),
		'remove_featured_image' => __( 'Usuń obraz', '' ),
		'use_featured_image'    => __( 'Użyj obrazu', '' ),
		'insert_into_item'      => __( 'Wstaw do wiersza', '' ),
		'uploaded_to_this_item' => __( 'Aktualizuj wiersz', '' ),
		'items_list'            => __( 'Lista wierszy', '' ),
		'items_list_navigation' => __( 'Nawigacja', '' ),
		'filter_items_list'     => __( 'Filtruj wiersze', '' ),
	);
	$args = array(
		'label'                 => __( 'Wiersz', '' ),
		'labels'                => $labels,
    'supports'     	 	=> array( 'title', 'page-attributes', 'editor', 'revisions', 'thumbnail' ),

		'taxonomies'            => array( 'poem_cat', ' post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-quote',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
    'rewrite' => array( 'slug' => 'wiersze' )

	);
	register_post_type( 'poem', $args );

}
add_action( 'init', 'post_poem', 0 );

// Register Custom Taxonomy of poem
function add_poem_category() {

	$labels = array(
		'name'                       => 'Kategorie wiersza',
		'singular_name'              => 'Kategoria wiersza',
		'menu_name'                  => 'Kategorie wierszy',
		'all_items'                  => 'Wszystkie kategorie',
		'parent_item'                => '',
		'parent_item_colon'          => '',
		'new_item_name'              => 'Nowa Kategoria',
		'add_new_item'               => 'Dodaj nową kategorię',
		'edit_item'                  => 'Edytuj kategorię',
		'update_item'                => 'Aktualizuj kategorię',
		'view_item'                  => 'Zobacz kategorię',
		'separate_items_with_commas' => 'Oddziel kategorie przecinkami',
		'add_or_remove_items'        => 'Dodaj lub usuń kategorię',
		'choose_from_most_used'      => 'Wybierz z najczęściej używanych kategorii',
		'popular_items'              => 'Popularne kategorie',
		'search_items'               => 'Szukaj kategorii',
		'not_found'                  => 'Nic nie znaleziono',
		'no_terms'                   => 'Brak wyników',
		'items_list'                 => 'Lista kategorii',
		'items_list_navigation'      => 'Nawigacja listy kategorii',
	);
	$rewrite = array(
		'slug'                       => 'poezja',
		'with_front'                 => true,
		'hierarchical'               => true,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'poem_cat', array( 'poem' ), $args );

}
add_action( 'init', 'add_poem_category', 0 );

// Register Custom Post Type: Poem
function post_events() {

	$labels = array(
		'name'                  => _x( 'Wydarzenia', 'Post Type General Name', '' ),
		'singular_name'         => _x( 'Wydarzenie', 'Post Type Singular Name', '' ),
		'menu_name'             => __( 'Wydarzenia', '' ),
		'name_admin_bar'        => __( 'Wydarzenia', '' ),
		'archives'              => __( 'Wydarzenia', '' ),
		'attributes'            => __( '', '' ),
		'all_items'             => __( 'Wydarzenia', '' ),
		'add_new_item'          => __( 'Dodaj nowe wydarzenie', '' ),
		'add_new'               => __( 'Dodaj nowe wydarzenie', '' ),
		'new_item'              => __( 'Nowe wydarzenie', '' ),
		'edit_item'             => __( 'Edytuj wydarzenie', '' ),
		'update_item'           => __( 'Aktualizuj wydarzenie', '' ),
		'view_item'             => __( 'Zobacz wydarzenie', '' ),
		'view_items'            => __( 'Zobacz wydarzenia', '' ),
		'search_items'          => __( 'Szukaj wydarzenia', '' ),
		'not_found'             => __( 'Nie znaleziono', '' ),
		'not_found_in_trash'    => __( 'Nie znaleziono w koszu', '' ),
		'featured_image'        => __( 'Zdjęcie główne wydarzenia', '' ),
		'set_featured_image'    => __( 'Wybierz zdjęcie wydarzenia', '' ),
		'remove_featured_image' => __( 'Usuń obraz', '' ),
		'use_featured_image'    => __( 'Użyj obrazu', '' ),
		'insert_into_item'      => __( 'Wstaw do wydarzenia', '' ),
		'uploaded_to_this_item' => __( 'Aktualizuj wydarzenie', '' ),
		'items_list'            => __( 'Lista wydarzeń', '' ),
		'items_list_navigation' => __( 'Nawigacja', '' ),
		'filter_items_list'     => __( 'Filtruj wydarzenia', '' ),
	);
	$args = array(
		'label'                 => __( 'Wydarzenie', '' ),
		'labels'                => $labels,
    'supports'     	 	=> array( 'title', 'page-attributes', 'editor', 'revisions', 'thumbnail' ),

		'taxonomies'            => array( 'events_cat', ' post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-calendar-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
    'rewrite' => array( 'slug' => 'wydarzenia' )

	);
	register_post_type( 'events', $args );

}
add_action( 'init', 'post_events', 0 );

// Register Custom Taxonomy of poem
function add_events_category() {

	$labels = array(
		'name'                       => 'Kategorie wydarzeń',
		'singular_name'              => 'Kategoria wydarzenia',
		'menu_name'                  => 'Kategorie wydarzenia',
		'all_items'                  => 'Wszystkie kategorie',
		'parent_item'                => '',
		'parent_item_colon'          => '',
		'new_item_name'              => 'Nowa Kategoria',
		'add_new_item'               => 'Dodaj nową kategorię',
		'edit_item'                  => 'Edytuj kategorię',
		'update_item'                => 'Aktualizuj kategorię',
		'view_item'                  => 'Zobacz kategorię',
		'separate_items_with_commas' => 'Oddziel kategorie przecinkami',
		'add_or_remove_items'        => 'Dodaj lub usuń kategorię',
		'choose_from_most_used'      => 'Wybierz z najczęściej używanych kategorii',
		'popular_items'              => 'Popularne kategorie',
		'search_items'               => 'Szukaj kategorii',
		'not_found'                  => 'Nic nie znaleziono',
		'no_terms'                   => 'Brak wyników',
		'items_list'                 => 'Lista kategorii',
		'items_list_navigation'      => 'Nawigacja listy kategorii',
	);
	$rewrite = array(
		'slug'                       => 'moja-historia',
		'with_front'                 => true,
		'hierarchical'               => true,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'events_cat', array( 'events' ), $args );

}
add_action( 'init', 'add_events_category', 0 );
?>
