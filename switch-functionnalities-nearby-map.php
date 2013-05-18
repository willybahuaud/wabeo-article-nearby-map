//utiliser google map pour trouver des coordonnées GPS (plus précis :-/)
add_filter( 'nbm_try_to_find_with_openstreetmap', '__return_false' );

//enlever les blos de détail
add_filter( 'nbm_need_more', '__return_false' );

//supprimer l'itinéraire
add_filter( 'nbm_need_route', '__return_false' );

//supprimer le lien vers les page des détail des lieux
add_filter( 'nbm_places_link', '__return_false' );