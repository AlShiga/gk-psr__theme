<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package gk-psr.ru_Theme
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
<div class="content-wrap">
        <div class="p1">
           Ошибка 404
        </div>
        <div class="p2">
           Запрашиваемая страница не найдена 
        </div>
        
            <p>
                <a class="p4" href="<?php echo get_home_url(); ?>">Вернуться на главную страницу</a>
            </p>
           
 </div>


				
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
