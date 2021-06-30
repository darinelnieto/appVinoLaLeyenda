$(window).on('scroll', function(){
    if($(window).scrollTop() > 30){
        $('header').css({
            'position':'fixed',
            'width':'100%',
            'background':'#4b0c14',
            'box-shadow':'0 1px 10px -1px'
        });
    }else{
        $('header').css({
            'position':'absolute',
            'background':'transparent',
            'box-shadow':'none'
        });
    }
});