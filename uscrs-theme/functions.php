<?php

// Get the page number
function get_page_number() {
    if ( get_query_var('paged') ) {
        print ' | ' . __( 'Page ' , 'uscrs') . get_query_var('paged');
    }
} // end get_page_number

?>
