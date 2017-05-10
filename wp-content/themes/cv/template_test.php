<?php /* Template Name: test */
get_header();?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <?php
                // $categories = get_categories( array( 'orderby' => 'name', 'order' => 'ASC' ) );
                // foreach( $categories as $category ) {
                    echo '<h2>Diplômes</h2>';
                        $args = array( 'posts_per_page' => -1, 'order'=> 'ASC', 'orderby' => 'title', 'category_name' => 'diplomes' );
                        $postslist = get_posts( $args );
                            foreach ( $postslist as $post ) :
                                setup_postdata( $post );
                                // if ( is_user_logged_in() ) {
                                    edit_post_link();
                                // }

                                ?>
                            	<div>
                                    <!-- <?php the_date();?> -->
                                    <?php the_title('<h3>', '</h3>');
                                    the_excerpt('<p>', '<p>')?>
                            	</div>
                            <?php
                            endforeach;
                // }
                    wp_reset_postdata();
                ?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_sidebar();
get_footer();
