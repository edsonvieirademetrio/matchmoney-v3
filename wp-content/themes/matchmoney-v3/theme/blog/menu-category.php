<div class="row">

    <?php

    $categories = get_categories( array(
        'orderby' => 'name',
        'parent'  => 0
    ) );
    
    foreach ( $categories as $category ) {
        printf( '<a href="%1$s" class="item menu-category blog">%2$s</a><br />',
            esc_url( get_category_link( $category->term_id ) ),
            esc_html( $category->name )
        );
    }

    ?>
    
</div>