<?php
/*
Template Name: Шаблон контактов
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
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "url": "https://gk-psr.ru/",
  "contactPoint": [
    { "@type": "ContactPoint",
      "telephone": "8(3812)47-50-03",
      "contactType": "customer service"
    }
  ]
}
</script>
<div class="cont-wrap">
<div class="content-wrap" style="width: 100%; display: flex;"> 
    <div class="left"> 
      <div class="contacts" itemscope itemtype="http://schema.org/Organization"> 
        <h1 class="p1">Контакты</h1>
       
      <div class="contacts-inner" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
         <div class="">
            <div class="">
              <div class="p2">Телефон:</div>
              <div class="logoK_Wrap">
                <div class="logoK logoK_T"></div>
                <div class="">
                  <div class="phone"><a onclick=yaCounter52383079.reachGoal('phone') itemprop="telephone" class="phone" href="tel:<?php echo get_option('site_telephone_back'); ?>"><?php echo get_option('site_telephone'); ?></a></div>
                  <div class="phone"><a onclick=yaCounter52383079.reachGoal('phone') class="phone" href="tel:<?php echo get_option('site_telephone_back2'); ?>"><?php echo get_option('site_telephone2'); ?></a></div>  
                </div>
              </div>     
            </div>
      
            <div class="">
               <div class="p2">E-mail:</div>
               <div class="logoK_Wrap">
                 <div class="logoK logoK_M"></div>
                 <div class="">
                    <div class="mail" itemprop="email"><a class="mail" href="mailto:<?php echo get_option('site_email'); ?>"><?php echo get_option('site_email'); ?></a></div  >
                    <div class="mail"><a class="mail" href="mailto:<?php echo get_option('site_email2'); ?>"><?php echo get_option('site_email2'); ?></a></div>
                 </div>
               </div>
            </div>
       </div>
       <div class="">
              <div class="">
                <div class="p2">Адрес:</div>
                  <div class="logoK_Wrap">
                  <div class="logoK logoK_L"></div>
                    <div class="">
                      <div class="location" itemprop="streetAddress"> <?php echo get_option('site_adress'); ?></div>
                    </div>
                </div>
              </div>  
            
              <div class="">
                <div class="p2">Время работы:</div>
                  <div class="logoK_Wrap">
                  <div class="logoK logoK_W"></div>
                    <div class="">
                      <div class="location" itemprop="openingHours"
 datetime="Mo-Fr 9:00−18:00"> <?php echo get_option('site_timeWork'); ?></div> 
                    </div>
                  </div>
              </div>
          </div>
        </div>
      </div>  
 
   </div>
   <div class="form formC" action="/Contacts.php" method="POST"> 
      <div class="p1" style="width: 210px;">Задать вопрос</div>
     <?echo do_shortcode('[contact-form-7 id="184" title="форма на главной"]');?>
   </div>
</div>
<div class="Ymaps"><script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A9e163720ddf802236772bde5fca3c39471959039f373a41f96e11606d014d6c1&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=note"></script>
</div></div>

<?php
get_footer();


