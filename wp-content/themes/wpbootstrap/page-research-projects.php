<?php get_header(); ?>

<div class="row">
    <div class="span8">
        <h1 class="entry"><?php echo get_the_title(); ?></h1>
  
  <?php
    $mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) );
        foreach( $mypages as $page ) {    
            $content = $page->post_content;
            if ( ! $content ) // Check for empty page
            continue;

            $content = apply_filters( 'the_content', $content );
            ?>
            <h2><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a></h2>
            <div class="entry"><?php echo $content; ?></div>
        <?php
        } 
        ?>
  </div>
</div>


<?php get_footer(); ?>