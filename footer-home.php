<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gk-psr.ru_Theme
 */
?>
<footer class="footerHome">
  <div class="container">
     <div class="footerHome-inner">
        <div class="footerHome-aboutAs">
          <div class="footerHome-aboutAs-header">О компании</div>
          <?php wp_nav_menu( [
            'theme_location'  => 'top_menu',     
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth'           => 0,
            'walker'          => '',
                            ] ); ?>
       </div>
       <div class="footerHome-contacts">
         <div class="footerHome-contacts-header">Контакты</div>
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
   
    <div class="footerHome-catalog">
      <h4 class="p1">КАТАЛОГ УСЛУГ</h4>
      <?php wp_nav_menu( [
          'theme_location'  => 'left_menu',
          'echo'            => true,
          'fallback_cb'     => 'wp_page_menu',
          'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          'depth'           => 0,
          'walker'          => '',
                ] ); ?>
    </div>


  </div>
</footer>

<script type="text/javascript">document.addEventListener( 'wpcf7mailsent', function sendMail( event ) {if ( '186' == event.detail.contactFormId ){yaCounter52383079.reachGoal('formPhone');console.log('работает');}}, false );</script>
<script type="text/javascript">document.addEventListener( 'wpcf7mailsent', function sendMail( event ) {if ( '184' == event.detail.contactFormId ){yaCounter52383079.reachGoal('formMail');console.log('работает1');}}, false );</script>
<script type="text/javascript">document.addEventListener( 'wpcf7mailsent', function sendMail( event ) {if ( '138' == event.detail.contactFormId ){yaCounter52383079.reachGoal('formMail');console.log('работает2');}}, false );</script>


</body>
</html>
<?php wp_footer(); ?>