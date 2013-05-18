add_filter( 'nbm_post_type', 'function_for_alter' );
function function_for_alter() {
    return 'posts'; //mon CPT
}