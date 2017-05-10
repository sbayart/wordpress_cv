<?php /* Template Name: Form */
get_header();?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <form method="post">
                <label> Your Email (required) </label><input type="email" name="email" value="" placeholder="your mail">
                <button type="submit" name="button">Submit</button></form>

    <?php
    if (isset($_POST['email'])) {

        $wpdb->insert( 'wp_email',  array(   'email' => $_POST['email'])
                                            // 'datetime' => the_date())
                                );
    } ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_sidebar();
get_footer();
