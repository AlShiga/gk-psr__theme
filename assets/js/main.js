jQuery(function($){
var $jq = jQuery.noConflict();
      $jq('.slider').slick({
        autoplay: true,
        autoplaySpeed: 4000,
      });
  $jq('.menu-trigger').click(function() {
    $jq('nav ul').slideToggle(500);
  });//end slide toggle
  $jq(window).resize(function() {		
		if (  $jq(window).width() > 500 ) {			
			$jq('nav ul').removeAttr('style');
		 }
	});//end resize


$jq('.sliderComp').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  responsive: [
    {
      breakpoint: 1068,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '10px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 880,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '10px',
        slidesToShow: 2
      }
    },
    {
      breakpoint:500,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '10px',
        slidesToShow: 1
      }
    }
  ]
  
});


$('.l1').hover(
      function(){
         n = 1; 
       // console.log( n );
        return n;
      });
    $('.l2').hover(
      function(){
         n = 2; 
        //console.log( n );
        return n;
      });
    $('.l3').hover(
      function(){
         n = 3; 
        //console.log( n );
        return n;
      });
    $('.l4').hover(
      function(){
         n = 4; 
        //console.log( n );
        return n;
      });
    $('.l1, .l2, .l3, .l4').hover(
      function(){
      //  console.log( n );
         if ( n == 1){
           $('.l1 a').css('color','#cf573e');
           $('.l2 a, .l3 a, .l4 a').css('color','#194f90');

           $('.product-img1').css('border-color','#cf573e');
           $('.product-img2, .product-img3, .product-img4').css('border-color','#194f90');

           $('.l1 a').css('color','#cf573e');
           $('.l2 a, .l3 a, .l4 a').css('color','#194f90');

           $(".product-img").removeClass("p-i1 p-i1or p-i2 p-i2or p-i3 p-i3or p-i4 p-i4or"); //удаляем класс во всех вкладках
           $(".product-img1 ").addClass("p-i1or"); //добавляем класс текущей (нажатой)
           $(".product-img2 ").addClass("p-i2"); //добавляем класс текущей (нажатой)
           $(".product-img3 ").addClass("p-i3"); //добавляем класс текущей (нажатой)
           $(".product-img4 ").addClass("p-i4"); //добавляем класс текущей (нажатой)
           
           $('.r1, .r2 , .r3 , .r4 ').css('display','none'); 
           $('.r1').css('display','block');
         }
         else if ( n == 2){
           $('.l2 a').css('color','#cf573e');
           $('.l1 a, .l3 a, .l4 a').css('color','#194f90');

           $('.product-img2').css('border-color','#cf573e');
           $('.product-img1, .product-img3, .product-img4').css('border-color','#194f90');

            $(".product-img").removeClass("p-i1 p-i1or p-i2 p-i2or p-i3 p-i3or p-i4 p-i4or"); //удаляем класс во всех вкладках
            $(".product-img1 ").addClass("p-i1"); //добавляем класс текущей (нажатой)
            $(".product-img2 ").addClass("p-i2or"); //добавляем класс текущей (нажатой)
            $(".product-img3 ").addClass("p-i3"); //добавляем класс текущей (нажатой)
            $(".product-img4 ").addClass("p-i4"); //добавляем класс текущей (нажатой)

           $('.r1, .r2 , .r3 , .r4 ').css('display','none'); 
           $('.r2').css('display','block');
         } 
         else if ( n == 3){
           $('.l3 a').css('color','#cf573e');
           $('.l1 a,.l2 a,.l4 a').css('color','#194f90');

           $('.product-img3 ').css('border-color','#cf573e');
           $('.product-img1, .product-img2, .product-img4').css('border-color','#194f90');

           $(".product-img").removeClass("p-i1 p-i1or p-i2 p-i2or p-i3 p-i3or p-i4 p-i4or"); //удаляем класс во всех вкладках
           $(".product-img1 ").addClass("p-i1"); //добавляем класс текущей (нажатой)
           $(".product-img2 ").addClass("p-i2"); //добавляем класс текущей (нажатой)
           $(".product-img3 ").addClass("p-i3or"); //добавляем класс текущей (нажатой)
           $(".product-img4 ").addClass("p-i4"); //добавляем класс текущей (нажатой)

           $('.r1, .r2 , .r3 , .r4 ').css('display','none'); 
           $('.r3').css('display','block');
           
         } 
         else if ( n == 4){
           $('.l4 a').css('color','#cf573e');
           $('.l1 a,.l2 a,.l3 a').css('color','#194f90');

           $('.product-img4').css('border-color','#cf573e');
           $('.product-img1,.product-img2,.product-img3').css('border-color','#194f90');

           $(".product-img").removeClass("p-i1 p-i1or p-i2 p-i2or p-i3 p-i3or p-i4 p-i4or"); //удаляем класс во всех вкладках
           $(".product-img1 ").addClass("p-i1"); //добавляем класс текущей (нажатой)
           $(".product-img2 ").addClass("p-i2"); //добавляем класс текущей (нажатой)
           $(".product-img3 ").addClass("p-i3"); //добавляем класс текущей (нажатой)
           $(".product-img4 ").addClass("p-i4or"); //добавляем класс текущей (нажатой)

           $('.r1, .r2 , .r3 , .r4 ').css('display','none'); 
           $('.r4').css('display','block');
 
         } 
         else {
           $('.l1 a').css('color','#cf573e');
           $('.l2 a, .l3 a, .l4 a').css('color','#194f90');

           $('.product-img1').css('border-color','#cf573e');
           $('.product-img2, .product-img3, .product-img4').css('border-color','#194f90');

           $(".product-img").removeClass("p-i1 p-i1or p-i2 p-i2or p-i3 p-i3or p-i4 p-i4or"); //удаляем класс во всех вкладках
           $(".product-img1 ").addClass("p-i1or"); //добавляем класс текущей (нажатой)
           $(".product-img2 ").addClass("p-i2"); //добавляем класс текущей (нажатой)
           $(".product-img3 ").addClass("p-i3"); //добавляем класс текущей (нажатой)
           $(".product-img4 ").addClass("p-i4"); //добавляем класс текущей (нажатой)

           $('.r1, .r2 , .r3 , .r4 ').css('display','none'); 
           $('.r1').css('display','block');
           
         }     
      });

});