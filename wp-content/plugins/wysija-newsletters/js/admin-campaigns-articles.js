var query_offset=0,wysappend=0,totalReached=!1,searchRunning=!1,slider=null,colorpicker=null;jQuery(function(e){function t(){e(".submit-box").addClass("counting");var t=parseInt(e(".search_results .checkbox:checked").length,10);0===t?a():c(t+" "+wysijatrans.post_selected)}function a(){e(".submit-box").removeClass("counting"),r()}function i(){e(".post_category").attr("disabled","disabled").hide();var t=e("#post_type").val();e("#post_category_"+t).length>0&&e("#post_category_"+t).removeAttr("disabled").show()}function n(){return query_offset=0,wysappend=0,l(),!1}function s(){if(null===slider){var t=32,a=564,i=Math.min(Math.max(t,parseInt(e("#slider_info span").html())),a);slider=new Control.Slider("slider_handle","image_width_slider",{range:$R(t,a),slideValue:i,axis:"horizontal",onSlide:function(t){var a=parseInt(t,10);e("#slider_info").find("span").html(a),e("#image_width").val(a)},onChange:function(t){var a=parseInt(t,10);e("#slider_info").find("span").html(a),e("#image_width").val(a)}}),slider.setValue(i)}}function l(){var t="";wysappend||e("#results").html(t),wysijaAJAX.task="get_articles",wysijaAJAX.data=e("#articles-form").serializeArray(),wysijaAJAX.query_offset=query_offset,o(wysijatrans.loading_results),wysijaAJAX._wpnonce=e("#wysijax").val(),jQuery.ajax({type:"POST",url:wysijaAJAX.ajaxurl,data:wysijaAJAX,success:f,error:m,dataType:"json"})}function o(t){a(),e(".submit-box").addClass("loading"),c(t)}function c(t){void 0!==t&&e("#loading-message").html(t)}function r(){e("#loading-message").html("")}function d(){e(".submit-box").removeClass("loading"),r(),t()}function u(){e("#title_position_block")["title"===e('input[name="post_content"]:checked').val()?"hide":"show"](),e("#title_tag_list")["title"===e('input[name="post_content"]:checked').val()?"show":"hide"](),e("#advanced:visible").length>0&&(e("#title_tag_list:hidden").length>0&&"list"===e('input[name="title_tag"]:checked').val()&&e('input[name="title_tag"][value="h2"]').attr("checked","checked"),"list"===e('input[name="title_tag"]:checked').val()?h(["image","author","category","readmore","divider","bgcolor"]):p(["image","author","category","readmore","divider","bgcolor"]))}function h(t){e.each(t,function(t,a){e("#"+a+"-block").hide()})}function p(t){e.each(t,function(t,a){e("#"+a+"-block").show()})}function _(){null===colorpicker&&(colorpicker=!0,e("input.color").modcoder_excolor({hue_bar:1,border_color:"#969696",anim_speed:"fast",round_corners:!1,shadow_size:2,shadow_color:"#f0f0f0",background_color:"#ececec",backlight:!1,label_color:"#333333",effect:"fade",show_input:!1,z_index:2e4,callback_on_open:function(){e("html, body").animate({scrollTop:e("#modcoder_colorpicker_wrapper:visible").offset().top},200)}}))}function g(){e("#image_block")[e('input[name="title_tag"][value="list"]:checked').length>0?"hide":"show"]()}function w(){var t=e('input[name="image_alignment"]:checked').val(),a=!0,i=32,n=325;"center"===t?n=564:"none"===t&&(a=!1),a===!0?(e("#image_width_block").show(),s(),slider.range=$R(i,n),slider.setValue(slider.value)):e("#image_width_block").hide()}function f(t){var a="",i=null;t.result.result?(a='<ul class="search_results">',e.each(t.result.posts,function(e,t){i={src:null,alt:"",title:""},null!==t.post_image&&(i.src=t.post_image.src,i.alt=t.post_image.alt,i.title=t.post_title);var n=query_offset+e;a+='<li id="post-'+n+'" class="clearfix">',a+='<div class="checkbox_container">',a+='<input id="post-checkbox-'+n+'" data-post-id="'+n+'" type="checkbox" class="checkbox" value="'+t.ID+'" name="post_selection" />',a+="</div>",null!==i.src?(a+='<div class="thumbnail"><img width="60" title="'+i.title+'" src="'+i.src+'" alt="'+i.alt+'" /></div>',a+='<label class="with_thumbnail" for="post-checkbox-'+n+'">'+t.post_title+"</label>"):a+='<label for="post-checkbox-'+n+'">'+t.post_title+"</label>",a+='<span class="cpt-type">'+t.post_type+" - <small>"+t.post_status+"</small></span>",a+="</li>"}),a+="</ul>"):a=t.result.append?"":'<p class="message"><strong>'+t.result.msg+"</strong></p>",t.result.append?""!==a&&e("#results").append("<hr />"+a):e("#results").html(a),wysappend=0,searchRunning=!1,totalReached=parseInt(t.result.total)===e("ul.search_results li").length?!0:!1,d()}function m(){searchRunning=!1,wysappend=0}function y(){0!==e("#advanced:hidden").length&&searchRunning!==!0&&(searchRunning=!0,query_offset+=10,wysappend=1,l())}e("#toggle-advanced").toggle(function(){return e(this).html(wysijatrans.hide_advanced),e("#advanced").show(),e("#basic").hide(),s(),u(),w(),g(),_(),e(this).blur(),!1},function(){return e(this).html(wysijatrans.show_advanced),e("#basic").show(),e("#advanced").hide(),e(this).blur(),!1}),e("#back-selection").click(function(){return e("#toggle-advanced").trigger("click"),!1}),e("#insert-selection").click(function(){var t=[],a=e('#results input[name="post_selection"]:checked'),i=[],n=["readmore","author_label","category_label"];return 0===a.length?!1:(e.each(a,function(a,i){t.push(e(i).val())}),e("#articles-form").serializeArray().each(function(e){n.include(e.name)&&(e.value=window.parent.Wysija.encodeHtmlValue(e.value)),i.push(e)}),wysijaAJAX.task="insert_articles",wysijaAJAX.post_ids=t.join(","),wysijaAJAX.data=i,wysijaAJAX._wpnonce=e("#wysijax").val(),wysijaAJAX.divider={src:window.parent.$$('.wysija_item[wysija_type="divider"]')[0].readAttribute("wysija_src"),width:window.parent.$$('.wysija_item[wysija_type="divider"]')[0].readAttribute("wysija_width"),height:window.parent.$$('.wysija_item[wysija_type="divider"]')[0].readAttribute("wysija_height")},o(wysijatrans.inserting_selection),jQuery.ajax({type:"POST",url:wysijaAJAX.ajaxurl,data:wysijaAJAX,success:function(e){window.parent.WysijaPopup.success(e.result.posts),d()},error:m,dataType:"json"}),!1)}),e(document).on("click",".search_results .checkbox",function(){e(this).is(":checked")===!0?e("#post-"+e(this).data("post-id")).addClass("selected"):e("#post-"+e(this).data("post-id")).removeClass("selected"),t()}),e(document).on("change","#post_type",function(){i(),n()}),e(".post_category").change(function(){n()}),e("#post_status").change(function(){n()}),e(document).on("click","#search-submit",function(){return l(),!1}),e('input[name="image_alignment"]').click(function(){w()}),e('input[name="post_content"]').click(function(){u(),g(),w()}),e('input[name="title_tag"]').click(function(){u(),g(),w()}),e(function(){i(),l()}),e(window).scroll(function(){totalReached===!1&&e("#results li").length>=10&&!wysappend&&e(window).scrollTop()===e(document).height()-e(window).height()&&y()})});