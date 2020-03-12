<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gk-psr.ru_Theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php wp_head(); ?>
  <!-- Yandex.Metrika counter --> <script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(52383079, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/52383079" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
</head>

<body>   
 <header class="header container">
    <div class="header-top">
      <div class="logo-wrap">
        <div class="btn-menu js-button-campaign-menu">
          <div class="burg-line burg-line1"></div>
          <div class="burg-line burg-line2"></div>
          <div class="burg-line burg-line3"></div>
        </div>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><div class="logo"></div></a>
      </div>
     <div class="contacts">
        <div class="callMe js-button-campaign-tel">Заказать звонок</div>
        <div class="phone-wrap">
            <div class="logoP"></div>
            <div class="textP">
              <div class="phone"><a onclick=yaCounter52383079.reachGoal('phone') class="phone" href="tel:<?php echo get_option('site_telephone_back'); ?>"><?php echo get_option('site_telephone'); ?></a></div>
              <div class="phone"><a onclick=yaCounter52383079.reachGoal('phone') class="phone" href="tel:<?php echo get_option('site_telephone_back2'); ?>"><?php echo get_option('site_telephone2'); ?></a></div>
            </div>
          </div>
        <div class="mail-wrap">
            <div class="logoM"></div>
            <div class="textM">  
              <div class="mail"><a class="mail" href="mailto:<?php echo get_option('site_email'); ?>"><?php echo get_option('site_email'); ?></a></div>
              <div class="mail"><a class="mail" href="mailto:<?php echo get_option('site_email2'); ?>"><?php echo get_option('site_email2'); ?></a></div>
            </div>  
          </div>
      </div>
    </div>
    <div class="wrapper">
        <input class="checkbox" type="checkbox" id="check-menu">
        <label class="check-menu" for="check-menu">МЕНЮ</label>
        <div class="burger-line first"></div>
        <div class="burger-line second"></div>
        <div class="burger-line third"></div>
        <div class="burger-line fourth"></div>
        <nav class="main-menu"> 
             <?php wp_nav_menu( [
                        'theme_location'  => 'top_menu',     
                        'menu'            => '', 
                        'container'       => '', 
                        'container_class' => '', 
                        'container_id'    => '',
                        'menu_class'      => 'menu', 
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => '',
                                  
                                        ] ); ?>
        </nav>
    </div>
  
    <div class="slider">
          <div class="slider-wrap">
            <div class="slide slide1">
              <div class="text">
                <div class="p1">Видеонаблюдение</div>
                <div class="p2">контроль безопасности!</div>
              </div>
            </div>    
          </div>
          <div class="slider-wrap">
            <div class="slide slide2">
              <div class="text">
                <div class="p1">ПОЖАРНАЯ СИГНАЛИЦАЦИЯ</div>
                <div class="p2">БЕЗОПАСНОСТЬ - ЗАЛОГ УДАЧНОГО БИЗНЕСА!</div>
              </div>
            </div>    
          </div>
          <div class="slider-wrap">
            <div class="slide slide3">
              <div class="text">
                <div class="p1">Противопожарное водоснабжение</div>
                <div class="p2">ЗАЛОГ 
                ПРОМЫШЛЕННОЙ БЕЗОПАСНОСТИ!</div>
              </div>
            </div>    
          </div>
          <div class="slider-wrap">
            <div class="slide slide4">
              <div class="text">
                <div class="p1">АВТОМАТИЗАЦИЯ</div>
                <div class="p2">ВЫСОКОТЕХНОЛОГИЧЕСКИЙ КОНТРОЛЬ!</div>
              </div>      
            </div>    
          </div>
    </div>
    <div class="text1">
            Монтаж<br>
            Наладка<br>
            Обслуживание
    </div>
  </header>
  <div class="overlay js-overlay-campaign-tel">
        <div class="popup-tel js-popup-campaign-tel">
          <p class="popup-tel-header">Заполните форму, и мы обязательно свяжемся с вами или позвоните по номеру 
          </p>
          <a class="phone" onclick=yaCounter52383079.reachGoal('phone') href="tel:<?php echo get_option('site_telephone_back'); ?>"><?php echo get_option('site_telephone'); ?></a>
          <?echo do_shortcode('[contact-form-7 id="186" title="Форма заказать звонок"]');?>
          <div class="close-popup js-close-campaign-tel"></div>
        </div>
  </div>    
  <div class="overlay js-overlay-campaign-menu">
        <div class="popup-menu js-popup-campaign-menu">
          <div class="container">
          <div class="">
             <div class="menu-aboutAs">
            <div class="menu-aboutAs-header">О компании</div>
               <?php wp_nav_menu( [
                 'theme_location'  => 'top_menu',     
                 'echo'            => true,
                 'fallback_cb'     => 'wp_page_menu',
                 'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                 'depth'           => 0,
                 'walker'          => '',
                                 ] ); ?>
           </div>
           <div class="menu-contacts">
             <div class="menu-contacts-header">Контакты</div>
             <div class="phone-wrap">
               <div class="logoP"></div>
               <div class="textP">
                 <a class="" onclick=yaCounter52383079.reachGoal('phone') href="tel:<?php echo get_option('site_telephone_back'); ?>"><?php echo get_option('site_telephone'); ?></a>
                 <a class="" onclick=yaCounter52383079.reachGoal('phone') href="tel:<?php echo get_option('site_telephone_back2'); ?>"><?php echo get_option('site_telephone2'); ?></a>
               </div>
             </div>
             <div class="mail-wrap">
               <div class="logoM"></div>
               <div class="textM">
                 <a class="" href="mailto:<?php echo get_option('site_email'); ?>"><?php echo get_option('site_email'); ?></a>
                 <a class="" href="mailto:<?php echo get_option('site_email2'); ?>"><?php echo get_option('site_email2'); ?></a>
               </div>  
             </div>
             <div class="location-wrap">
               <div class="logoL"></div>
               <div class="textL">
                 <div class=""> <?php echo get_option('site_adress'); ?></div>
               </div>  
             </div>
             <div class="workTime-wrap">
               <div class="logoT"></div>
               <div class="textT">
                 <div class=""> <?php echo get_option('site_timeWork'); ?></div>
               </div>  
             </div>
           </div> 
          </div>
          
           <div class="menu-catalog">
             <h4 class="menu-catalog-header">КАТАЛОГ УСЛУГ</h4>
             <?php wp_nav_menu( [
                 'theme_location'  => 'left_menu',
                 'echo'            => true,
                 'fallback_cb'     => 'wp_page_menu',
                 'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                 'depth'           => 0,
                 'walker'          => '',
                       ] ); ?>
           </div>
            <div class="menu-contact">
             <div class="menu-contact-header">Задать вопрос</div>
             <?echo do_shortcode('[contact-form-7 id="184" title="форма на главной"]');?>
           </div>
            <div class="close-popup js-close-campaign-menu"></div>
         </div>
         
        </div>
  </div>  
  
  
  <section class="one container">
  	<div class="menu-left">
      <div class="p1">КАТАЛОГ УСЛУГ</div>
  	    <?php wp_nav_menu( [
                                  'theme_location'  => 'left_menu',
                                  'echo'            => true,
                                  'fallback_cb'     => 'wp_page_menu',
                                  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                  'depth'           => 0,
                                  'walker'          => '',
                                        ] ); ?>
    </div>
    
  