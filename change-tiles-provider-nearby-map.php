add_filter( 'maps_datas', 'function_for_alter' );
function function_for_alter( $maps_datas ){
    //tiles = URL du provider (liste dans la FAQ)
    $maps_datas['tiles'] = "http://{s}.mqcdn.com/tiles/1.0.0/map/{z}/{x}/{y}.jpg";

    //le copyright
    $maps_datas['attribution'] = "attribution I want/use to show";

    //les sous domaines de tuiles (si besoin)
    $maps_datas['subdomains'] = array('otile1','otile2','otile3','otile4');

    return $maps_datas;
}