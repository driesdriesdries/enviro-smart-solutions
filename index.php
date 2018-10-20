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

<!-- background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),url('<?php echo get_template_directory_uri().'/assets/images/header.jpg'; ?>'); background-position: center; background-size: cover;  -->

<div class="row hero text-center" style="background-color: white;">
	

	


		<div class="col-md-12">
			<img id="logo" src="<?php echo get_template_directory_uri().'/assets/images/evs_logo.png'; ?>"> 
			<h1>Enviro Smart Solutions</h1>
			<h3>Water | Energy | Health</h3>
			<p>Our website is currently under construction.</p> 
			<p>For enquiries, please contact us at: <br/><a href="mailto:info@envirosmartsolutions.co.za">info@envirosmartsolutions.co.za</a></p>
		</div>
	
</div>

<?php
get_footer();