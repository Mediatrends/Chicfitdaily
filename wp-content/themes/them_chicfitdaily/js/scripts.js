function updateViewportDimensions(){var e=window,t=document,n=t.documentElement,r=t.getElementsByTagName("body")[0],i=e.innerWidth||n.clientWidth||r.clientWidth,s=e.innerHeight||n.clientHeight||r.clientHeight;return{width:i,height:s}}function loadGravatars(){viewport=updateViewportDimensions();if(viewport.width>=768){jQuery(".comment img[data-gravatar]").each(function(){jQuery(this).attr("src",jQuery(this).attr("data-gravatar"))})}}function LimpiaEspacios(e){var t=e.value;var n=t.replace(/^\s+|\s+$/g,"");if(n==""){e.value="";e.focus();return true}else{return false}}function valida_form(){if(LimpiaEspacios(document.frm.s)){jQuery("#search_input").css("border","#F99 solid 1px").attr("placeholder","Busca algo en nuestro blog");return false}return true}var viewport=updateViewportDimensions();var waitForFinalEvent=function(){var e={};return function(t,n,r){if(!r){r="Don't call this twice without a uniqueId"}if(e[r]){clearTimeout(e[r])}e[r]=setTimeout(t,n)}}();var timeToWaitForLast=100;var feed=new Instafeed({get:"user",userId:1021323093,accessToken:"641827348.467ede5.82e872aed9ed4959a3ee985d62781c51",clientId:"cd33a91424cc4cf8a6aaac7db1f6e955",template:'<a href="{{link}}" target="_blank"><div class="cont_igfeed"><img src="{{image}}" alt="" /></div></a>',limit:6});feed.run();jQuery(document).ready(function(e){e("a.nav_prev, a.nav_next, .more a, a.sidebar_a, .tags li a, .logo a, a.post-link, .nav li a").click(function(){e("main, footer").fadeOut(function(){e(".spinner").fadeIn()})});e(window).scroll(function(){if(e(this).scrollTop()>100){e(".scrollToTop").fadeIn()}else{e(".scrollToTop").fadeOut()}});e(".scrollToTop").click(function(){e("html, body").animate({scrollTop:0},800);return false});loadGravatars();e("#slide ul").responsiveSlides({nav:true,prevText:"",nextText:""});var t=responsiveNav(".cont_menu",{label:" "});e(".view_comments .btn_comment").toggle(function(){e(".entry-content .content_posts").fadeOut(function(){e(".comments").fadeIn();e(".btn_comment").prepend('<span class="add_close">Cerrar</span>')})},function(){e(".comments").fadeOut(function(){e(".entry-content .content_posts").fadeIn();e(".add_close").hide()})});e(".ad01, .ad02").fixTo("body")})