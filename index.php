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

<div class="container">
	<div class="row">
		<div class="col-sm-4">
		
			<div class="card" style="width: 18rem;">
			  <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkLNR3N1ChDAGfRRPhpbvgfEyPkiodj022TyKiiVTMtvU9iaFG" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title">Water Treatment</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <a href="#" class="btn btn-primary">Go somewhere</a>
			  </div>
			</div>

		</div>

		<div class="col-sm-4">
		
			<div class="card" style="width: 18rem;">
			  <img class="card-img-top" src="https://img1.cookinglight.timeinc.net/sites/default/files/styles/medium_2x/public/1502826406/1708w-getty-fruit-closeup-CarstenSchanter-EyeEm.jpg?itok=jPv5UkUK" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title">Food Cleaning</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <a href="#" class="btn btn-primary">Go somewhere</a>
			  </div>
			</div>

		</div>

		<div class="col-sm-4">
		
			<div class="card" style="width: 18rem;">
			  <img class="card-img-top" src="https://www.znbc.co.zm/wp-content/uploads/2018/11/trees.jpg" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title">Outdoor solutions</h5>
			    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
			    <a href="#" class="btn btn-primary">Go somewhere</a>
			  </div>
			</div>

		</div>

	</div>
	


</div>

<?php
get_footer();