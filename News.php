<?php
/*
Template Name: Шаблон новостей
*/
?>
<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gk-psr.ru_Theme
 */

get_header();
?>
 <article>
 	<h1 class="entry-title">Новости</h1>
    <div class="news">
         <?php // Display blog posts on any page @ http://m0n.co/l
        $temp = $wp_query; $wp_query= null;
        $wp_query = new WP_Query(); $wp_query->query('cat=4&nopaging=1&showposts=10&paged='.$paged);
        while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
        <div class="news__inner">
             <h2 class="new-news"><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></h2>
             <?php the_excerpt(); ?>
             <a class="news__read" href="<?php the_permalink(); ?>" title="Read more">Читать далее →</a>
        </div>
        
        <?php endwhile; ?>
 
        <?php if ($paged > 1) { ?>
            
        <nav id="nav-posts">
            <div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
            <div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>

        </nav>
        <?php } else { ?>
 
        <nav id="nav-posts">
            <div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
        </nav>
 
        <?php } ?>
 
        <?php wp_reset_postdata(); ?>
 
    </div>
       
    </article>

		
<?php
get_footer();
