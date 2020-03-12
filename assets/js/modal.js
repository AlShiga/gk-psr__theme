jQuery(function($){

// Модальное окно
// Телефон
// открыть по кнопке
$('.js-button-campaign-tel').click(function() { 
  
  $('.js-overlay-campaign-tel').fadeIn();
  $('.js-overlay-campaign-tel').addClass('disabled');
});

// закрыть на крестик
$('.js-close-campaign-tel').click(function() { 
  $('.js-overlay-campaign-tel').fadeOut();
  
});

// закрыть по клику вне окна
$(document).mouseup(function (e) { 
  var popup = $('.js-popup-campaign-tel');
  if (e.target!=popup[0]&&popup.has(e.target).length === 0){
    $('.js-overlay-campaign-tel').fadeOut();
    
  }
});

// Меню
// открыть по кнопке
$('.js-button-campaign-menu').click(function() { 
  
  $('.js-overlay-campaign-menu').fadeIn();
  $('.js-overlay-campaign-menu').addClass('disabled');
});

// закрыть на крестик
$('.js-close-campaign-menu').click(function() { 
  $('.js-overlay-campaign-menu').fadeOut();
  
});

// закрыть по клику вне окна
$(document).mouseup(function (e) { 
  var popup = $('.js-popup-campaign-menu');
  if (e.target!=popup[0]&&popup.has(e.target).length === 0){
    $('.js-overlay-campaign-menu').fadeOut();
    
  }
});

});
