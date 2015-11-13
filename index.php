<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package rfernand
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<!--my code-->
			<div class="container-fluid">
  <div class="row background-img" class="img-responsive" id="image-1">
  <div id="text">
            <h1>>!--CODER--!<</h1>
            <p>Web Developer who focuses on<br /> writing clean, elegant and efficient<br />
              code, love HTML5, CSS3, and a<br /> touch of jQuery, and Javascript.</p>
          </div>
        </div>
        <div class="row intro" id="founder">
                <div class="col-xs-12 col-sm-5 col-sm-offset-1">
                    <h1>When I started studying at BMCC I thought that I would not be able
                    to earn an "A", now I have been awarded the Dean's List Certificate for the past three
                    semesters. 
                    </h1>
                </div>

                  <div class="col-xs-12 col-sm-5" >
                    <img class="img-responsive" src="wp-content/themes/rfernand/images/Scan.jpg">
                    <p class="text-center">Ruben Fernandez</p>
                </div>
            </div>
             <div class="row background-img" class="img-responsive" id="image-4">
             </div>
         </div>
         <div class="container-fluid">
        <div class="row intro" id="founder">
            <div class="col-xs-12 col-xs-offset-0 col-sm-10 col-sm-offset-1" id="carouselcontainer">
                <h1 class="text-center">COROUSEL IMAGES</h1>
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="6"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="7"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="wp-content/themes/rfernand/images/IMG_6245.jpg" alt="........">
                            <div class="carousel-caption">
                                Me working in my portfolio.
                            </div>
                        </div>
                        <div class="item">
                            <img src="wp-content/themes/rfernand/images/IMG_6256.jpg" alt="........">
                            <div class="carousel-caption">
                               Work as a web developer it is some I want to do as a carrier.
                            </div>
                        </div>
                        
                        <div class="item">
                            <img src="wp-content/themes/rfernand/images/IMG_6316.jpg" alt="........">
                            <div class="carousel-caption">
                                Me in my home office.
                            </div>
                        </div>
                        <div class="item">
                            <img src="wp-content/themes/rfernand/images/IMG_6310.jpg" alt="........">
                            <div class="carousel-caption">
                                Printing a homework.
                            </div>
                        </div>
                        <div class="item">
                            <img src="wp-content/themes/rfernand/images/IMG_6262.jpg" alt="........">
                            <div class="carousel-caption">
                               I really enjoy to create web pages on HTML and CSS. 
                            </div>
                        </div>
                        <div class="item">
                            <img src="wp-content/themes/rfernand/images/IMG_6283.jpg" alt="........">
                            <div class="carousel-caption">
                                Fernandez' Office, lol
                            </div>
                        </div>
                        <div class="item">
                            <img src="wp-content/themes/rfernand/images/IMG_6350.jpg" alt="........">
                            <div class="carousel-caption">
                                I took this picture in the new 7 train station.
                            </div>
                        </div>
                            <div class="item">
                            <img src="wp-content/themes/rfernand/images/html.jpg" alt="........">
                            <div class="carousel-caption">
                               Some of my html codes.
                            </div>

                        </div>

                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
<div>
  </div>
   </div>
 

            <!--end-->

		<!--<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>-->

			<!--<div class="myPost">
					<div class="myPostTitle">
						<?php the_title(); ?>
					</div>
					<div class="myPostContent">
						<?php the_content(); ?>
					</div>
				</div>-->

			<!--<?php endwhile; ?>-->

      <!--<?php rewind_posts(); ?>
      <?php
// $args = array( 'post_type') => 'photos_item', 'posts_per_page' => 10 );
      //$args = array( 'post_type' => 'photos_item', 'posts_per_page' => 10);
//$loop = new WP_Query( $args);
//while ( $loop->have_posts() ) : $loop->the_post();
the_title();
//echo '<div class='entry-content'>';
the_content();
//echo '</div>';
//endwhile;
?>-->

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
