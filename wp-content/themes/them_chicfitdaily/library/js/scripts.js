/*
 * Bones Scripts File
 * Author: Eddie Machado
 *
 * This file should contain any js scripts you want to add to the site.
 * Instead of calling it in the header or throwing it inside wp_head()
 * this file will be called automatically in the footer so as not to
 * slow the page load.
 *
 * There are a lot of example functions and tools in here. If you don't
 * need any of it, just remove it. They are meant to be helpers and are
 * not required. It's your world baby, you can do whatever you want.
*/


/*
 * Get Viewport Dimensions
 * returns object with viewport dimensions to match css in width and height properties
 * ( source: http://andylangton.co.uk/blog/development/get-viewport-size-width-and-height-javascript )
*/
function updateViewportDimensions() {
	var w=window,d=document,e=d.documentElement,g=d.getElementsByTagName('body')[0],x=w.innerWidth||e.clientWidth||g.clientWidth,y=w.innerHeight||e.clientHeight||g.clientHeight;
	return { width:x,height:y }
}
// setting the viewport width
var viewport = updateViewportDimensions();


/*
 * Throttle Resize-triggered Events
 * Wrap your actions in this function to throttle the frequency of firing them off, for better performance, esp. on mobile.
 * ( source: http://stackoverflow.com/questions/2854407/javascript-jquery-window-resize-how-to-fire-after-the-resize-is-completed )
*/
var waitForFinalEvent = (function () {
	var timers = {};
	return function (callback, ms, uniqueId) {
		if (!uniqueId) { uniqueId = "Don't call this twice without a uniqueId"; }
		if (timers[uniqueId]) { clearTimeout (timers[uniqueId]); }
		timers[uniqueId] = setTimeout(callback, ms);
	};
})();

// how long to wait before deciding the resize has stopped, in ms. Around 50-100 should work ok.
var timeToWaitForLast = 100;


/*
 * Here's an example so you can see how we're using the above function
 *
 * This is commented out so it won't work, but you can copy it and
 * remove the comments.
 *
 *
 *
 * If we want to only do it on a certain page, we can setup checks so we do it
 * as efficient as possible.
 *
 * if( typeof is_home === "undefined" ) var is_home = $('body').hasClass('home');
 *
 * This once checks to see if you're on the home page based on the body class
 * We can then use that check to perform actions on the home page only
 *
 * When the window is resized, we perform this function
 * $(window).resize(function () {
 *
 *    // if we're on the home page, we wait the set amount (in function above) then fire the function
 *    if( is_home ) { waitForFinalEvent( function() {
 *
 *      // if we're above or equal to 768 fire this off
 *      if( viewport.width >= 768 ) {
 *        console.log('On home page and window sized to 768 width or more.');
 *      } else {
 *        // otherwise, let's do this instead
 *        console.log('Not on home page, or window sized to less than 768.');
 *      }
 *
 *    }, timeToWaitForLast, "your-function-identifier-string"); }
 * });
 *
 * Pretty cool huh? You can create functions like this to conditionally load
 * content and other stuff dependent on the viewport.
 * Remember that mobile devices and javascript aren't the best of friends.
 * Keep it light and always make sure the larger viewports are doing the heavy lifting.
 *
*/

/*
 * We're going to swap out the gravatars.
 * In the functions.php file, you can see we're not loading the gravatar
 * images on mobile to save bandwidth. Once we hit an acceptable viewport
 * then we can swap out those images since they are located in a data attribute.
*/
function loadGravatars() {
  // set the viewport using the function above
  viewport = updateViewportDimensions();
  // if the viewport is tablet or larger, we load in the gravatars
  if (viewport.width >= 768) {
  jQuery('.comment img[data-gravatar]').each(function(){
    jQuery(this).attr('src',jQuery(this).attr('data-gravatar'));
  });
	}
} // end function

//validacion formulario de busqueda
function LimpiaEspacios(Obj){
  var texto = Obj.value;
  //limpiamos de espacios en blanco el texto
  var texto_limpio = texto.replace(/^\s+|\s+$/g,"");
  if (texto_limpio==""){
  Obj.value = "";
  Obj.focus();
  return true;
}
  else
  {
  return false;
  }
}

function valida_form(){
  if (LimpiaEspacios(document.frm.s)){
    jQuery('#search_input').css('border','#F99 solid 1px').attr("placeholder", "Busca algo en nuestro blog");
  return false;
  }
  return true;
}
 //FEED INSTAGRAM
 var feed = new Instafeed({
    get: 'user',
    userId:20355835,
    accessToken:'641827348.467ede5.82e872aed9ed4959a3ee985d62781c51',
    clientId: 'cd33a91424cc4cf8a6aaac7db1f6e955',
    template:'<a href="{{link}}" target="_blank"><div class="cont_igfeed"><img src="{{image}}" alt="" /></div></a>',
    limit:6
});
feed.run();
/*
 * Put all your regular jQuery in here.
*/
jQuery(document).ready(function($) {

  /*$(window).load(function(){
    $('.spinner').fadeOut(500,function(){
       $('main, footer').fadeIn();
    });
  });*/
  $('a.nav_prev, a.nav_next, .more a, a.sidebar_a, .tags li a, .logo a, a.post-link, .nav li a').click(function(){
    $('main, footer').fadeOut(function(){
      $('.spinner').fadeIn();
    });
  });

  $(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
      $('.scrollToTop').fadeIn();
    } else {
      $('.scrollToTop').fadeOut();
    }
  });
  
  //Click event to scroll to top
  $('.scrollToTop').click(function(){
    $('html, body').animate({scrollTop : 0},800);
    return false;
  });
  /*
   * Let's fire off the gravatar function
   * You can remove this if you don't need it
  */
  loadGravatars();

  $("#slide ul").responsiveSlides({
    nav: true,
    prevText: "",
    nextText: ""
  });

  /*$('#slide').mouseover(function(){
        $('#slide .next').animate({
            right: '73px'
        }, 500);
        $('#slide .prev').animate({
            left: '73px'
        }, 500);
    });
  $('#slide').mouseleave(function(){
      $('#slide .next').animate({
          right: '-73px'
      }, 500);
      $('#slide .prev').animate({
          left: '-73px'
      }, 500);
  });*/

  var nav = responsiveNav(".cont_menu", {
    label: " "
  });

  $('.view_comments .btn_comment').toggle(function(){
      $('.entry-content .content_posts').fadeOut(function(){
        $('.comments').fadeIn();
        $('.btn_comment').prepend('<span class="add_close">Cerrar</span>');
      });
  }, function() {
    $('.comments').fadeOut(function(){
      $('.entry-content .content_posts').fadeIn();
      $('.add_close').hide();
    });
  });

  $('.ad_fix').fixTo('#container');
  $('.ad_fix2').fixTo('#container');
}); /* end of as page load scripts */
