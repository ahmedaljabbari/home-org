<?php
function registerNewApi() {
    register_rest_route('myLife', 'expenses', array(    //register_rest_route('nameSpace', 'route', args)
        'methods' => WP_REST_SERVER::READABLE,          //Better practice than writting 'GET'
        'callback' => 'returnedResults'                 //function name
    ));
}

function returnedResults($data) {
    $requestedPostType = new WP_Query( array(
        'post_type' => 'expense', //can be array of post types
        'posts_per_page' => -1,
        's' => sanitize_text_field( $data['term'] )
    ) );

    $exported_array = array();

    while($requestedPostType->have_posts()){
        $requestedPostType->the_post();
        array_push($exported_array, array(
            'id' => get_the_ID(),
            'title' => get_the_title()
        ));
    }
    return $exported_array;
}

add_action('rest_api_init', 'registerNewApi');