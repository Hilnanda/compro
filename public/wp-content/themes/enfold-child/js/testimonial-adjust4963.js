jQuery(document).ready(function($){
    
    $('.testimonial-slider').parent().css('border-top','none');
    $('.codeblock-testi').parent().parent().parent().parent().parent().css({
        'max-width':'none',
        'padding-left':'0',
        'padding-right':'0',
        'margin-left': '0',
        'margin-right': '0',
        'width': '100%'
    });
    $('.codeblock-testi').parent().parent().parent().parent().parent().parent().css({
        'border-top':'none'
    });
    $('.codeblock-testi').parent().parent().parent().parent().css({
        'padding-top':'0',
        'padding-bottom':'0'
    });
    
})