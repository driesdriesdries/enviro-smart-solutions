<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package EnviroSmartSolutions
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container single_container">
				<!-- her and  -->
				<body>
    <div class="container">
        <div class="card-columns">
           
                <div class="card">
                    <div class="card-header">
                        Card Header
                    </div>
                    <img class="card-img-top" src="https://source.unsplash.com/daily" alt="Card image top">
                    <div class="card-body">
                        <h3 class="card-title">Each Card body can have a title</h3>
                        <h4 class="card-subtitle">And a subtitle</h4>
                        <p class="card-text">This is a card body 1</p>
                    </div>


                    <div class="card-body">
                        <h3 class="card-title">Card body 2 title</h3>
                        <h4 class="card-subtitle">And subtitle</h4>
                        <p class="card-text">You can also add a second body or even more</p>
                    </div>
                    <img class="card-img-bottom" src="https://source.unsplash.com/daily" alt="Card image bottom">
                    <div class="card-footer">
                        Card Footer
                    </div>
                </div>
          
          
                <div class="card">

                    <img class="card-img-top" src="https://source.unsplash.com/daily?nature" alt="Card image top">
                    <div class="card-img-overlay">
                        <h3 class="card-title">Card title</h3>
                        <h4 class="card-subtitle">Card subtitle</h4>
                        <p class="card-text">You can use the cap image as an overlay for the body</p>
                    </div>
                </div>

                <div class="card">

                    <img class="card-img-top" src="https://source.unsplash.com/daily?rock" alt="Card image top">
                    <div class="card-img-overlay white">
                        <h3 class="card-title">Card title</h3>
                        <h4 class="card-subtitle">Card subtitle</h4>
                        <p class="card-text">You can add links to card body</p>
                        <a href="#" class="card-link">Link 1</a>
                        <a href="#" class="card-link">Link 2</a>
                    </div>
                </div>
    
                <div class="card  card-primary p-3 text-center">
                    <ul class="list-group">
                        <li class="list-group-item">Item 1</li>
                        <li class="list-group-item">Item 2</li>
                        <li class="list-group-item">Item 3</li>
                    </ul>

                </div>

                <div class="card text-white border-danger bg-danger p-1 text-center">

                    <div class="card-body">
                        <h2 class="card-title"> My Card</h2>
                        <p class="card-text"> This is a simple centered text </p>
                    </div>

                </div>
 
                <div class="card text-primary border-primary">

                    <div class="card-body">
                        <h2 class="card-title"> My List</h2>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Item 1</li>
                            <li class="list-group-item">Item 2</li>
                            <li class="list-group-item">Item 3</li>
                        </ul>
                    </div>

                </div>

                <div class="card border-danger text-primary">
                    <img class="card-img-top" src="https://source.unsplash.com/daily?rock" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Card text</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Item 1</li>
                        <li class="list-group-item">Item 2</li>
                        <li class="list-group-item">Item 3</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Link 1</a>
                        <a href="#" class="card-link">Link 2</a>
                    </div>
                </div>
            
                <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Tab 1</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Tab 2</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Tab 3</a>
                            </li>
                        </ul>
                    </div>
                    <img class="card-img-top" src="https://source.unsplash.com/daily?rock" alt="Card image top">
                    <div class="card-body">
                        <h3 class="card-title">Card title</h3>
                        <h4 class="card-subtitle">Card subtitle</h4>
                        <p class="card-text">You can add navigation (navigation and pills) to card header</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <ul class="nav  nav-pills card-header-pill">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Pill 1</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Pill 2</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Pill 3</a>
                            </li>
                        </ul>
                    </div>
                    <img class="card-img-top" src="https://source.unsplash.com/daily?wood" alt="Card image top">
                    <div class="card-body">
                        <h3 class="card-title">Card title</h3>
                        <h4 class="card-subtitle">Card subtitle</h4>
                        <p class="card-text">You can add navigation (navigation and pills) to card header</p>
                    </div>
                </div>

                <div class="card text-white bg-dark mt-5">
                    <div class="card-header">This is a Header</div>
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a text </p>
                    </div>
                </div>
            
        </div>

    </div>
</body>

</html>
				<!-- here -->
				<div class="row">
					<div class="col-sm-3 sidebar">
						<?php get_sidebar(); ?>
					</div>
					<div class="col-sm-9">
						<?php
						while ( have_posts() ) :
							the_post();

							get_template_part( 'template-parts/content', get_post_type() );

							the_post_navigation();

						endwhile; // End of the loop.
						?>	
					</div>
				</div>
			</div>	
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
