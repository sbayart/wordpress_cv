<?php /* Template Name: CV */
get_header();?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <?php
                $categories = get_categories( array( 'orderby' => 'name', 'order' => 'ASC' ) );
                foreach( $categories as $category ) {
                    echo '<h2>'.$category->name.'</h2>';
                        $args = array( 'posts_per_page' => -1, 'order'=> 'ASC', 'orderby' => 'title', 'category' => $category->cat_ID );
                        $postslist = get_posts( $args );
                            foreach ( $postslist as $post ) :
                                setup_postdata( $post );
                                // if ( is_user_logged_in() ) {
                                    edit_post_link();
                                // }

                                ?>
                            	<div>
                                    <!-- <?php the_date();?> -->
                                    <?php
                                    if(has_tag('ceci')) {
                                        the_title('<h3 class="red">', '</h3>');
                                    } else {
                                        the_title('<h3>', '</h3>');
                                    }
                                    the_excerpt('<p>', '<p>')?>
                            	</div>
                            <?php
                            endforeach;
                }
                    wp_reset_postdata();
                ?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_sidebar();
get_footer();
