<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package EnviroSmartSolutions
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php $logo_location = get_template_directory();?>
						<img src="<?php echo $logo_location. '/assets/images/evs_logo.png'; ?>">
						<h1>Welcome to Enviro Smart Solutions</h1>
						<h3>Focus on water energy and health</h3>
						<p>Our website is currently under construction. For enquiries, please contact us as info@envirosmartsolutions.co.za</p>
					</div>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
