/*
 * @Plugin Timeline Express
 * @Author Code Parrots
 * @Site https://www.wp-timelineexpress.com
 * @Version 1.4.1
 * @Build 03-23-2017
 */
jQuery(document).ready(function(){jQuery("html").addClass("cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions");var a=jQuery(".cd-timeline-block");a.each(function(){timeline_express_data.animation_disabled||jQuery(this).offset().top>jQuery(window).scrollTop()+.75*jQuery(window).height()&&jQuery(this).find(".cd-timeline-img, .cd-timeline-content").addClass("is-hidden")}),timeline_express_data.animation_disabled||jQuery(window).on("scroll",function(){a.each(function(){jQuery(this).offset().top<=jQuery(window).scrollTop()+.75*jQuery(window).height()&&jQuery(this).find(".cd-timeline-img").hasClass("is-hidden")&&jQuery(this).find(".cd-timeline-img, .cd-timeline-content").removeClass("is-hidden").addClass("bounce-in")})})});