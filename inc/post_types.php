<?php

/*
	========================
		CUSTOM POST TYPE AND TAXONOMY
	========================
*/



 /*  Register  - PHOTOGRAPHY Post Type nowy rodzaj postów*/

add_action('init', 'wiolip_init_posttypes');
 function wiolip_init_posttypes(){

  $args = array(
            'labels' => array(
                'name' => 'Fotografia',
                'singular_name' => 'Fotografia',
                'all_items' => 'Wszystkie wpisy foto',
                'add_new' => 'Dodaj nowy wpis',
                'add_new_item' => 'Dodaj nowy wpis',
                'edit_item' => 'Edytuj wpis',
                'new_item' => 'Nowy wpis',
                'view_item' => 'Zobacz wpis',
                'search_items' => 'Szukaj we wpisach foto',
                'not_found' =>  'Nie znaleziono żadnych wpisów',
                'not_found_in_trash' => 'Nie znaleziono żadnych wpisów w koszu',
                'parent_item_colon' => ''
            ),
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,  /* elementy w kokpit*/
            'query_var' => true,
            'rewrite' => true,
            'capability_type' => 'post',
            'hierarchical' => false, /* nie ma hierarchii jak strony */
            'menu_position' => 5, /* pozycja w kikpicue w panelu pod postem */
            'menu_icon' => 'dashicons-camera',
            'supports' => array(
                'title','editor','author','thumbnail','excerpt','comments','custom-fields'
            ),
            'has_archive' => true
        );

     register_post_type('fotografia', $args);
    }




    /* rejestruje taksonioemjeie KATEGORIE w panelu menu dla fotografia*/

    function wiolip_init_taxonomies(){

        register_taxonomy('kategorie', array('fotografia'),
        array(
            'hierarchical' => true,
            'labels' => array(
            'name' => 'Kategorie',
            'singular_name' => 'Kategoria',
            'search_items' =>  'Wyszukaj kategorie',
            'popular_items' => 'Najpopularniejsze kategorie',
            'all_items' => 'Wszystkie kategorie',
            'most_used_items' => null,
            'parent_item' => null,
            'parent_item_colon' => null,
            'edit_item' => 'Edytuj kategorie',
            'update_item' => 'Aktualizuj kategorie',
            'add_new_item' => 'Dodaj nowa kategorie',
            'new_item_name' => 'Nazwa nowej kategorii',
            'separate_items_with_commas' => 'Oddziel kategorie przecinkiem',
            'add_or_remove_items' => 'Dodaj lub usuń kategorie',
            'choose_from_most_used' => 'Wybierz spośród najczęścież używanych kategorii',
            'menu_name' => 'Kategorie',
            ),

            'show_ui' => true,
            'update_count_callback' => '_update_post_term_count',
            'query_var' => true,
            'rewrite' => array('slug' => 'kategorie')
        ));

    }
    add_action('init', 'wiolip_init_taxonomies');