$(document).ready(function name(params) {

    $(window).scroll(function name(params) {
        console.log($(this).scrollTop());




        if($(this).scrollTop() > 100){
            $('.text_slide').addClass("text_slide_ani_scroll");
        }




        if($(this).scrollTop() > 350){
            $('.card-img-top').addClass("img_card_ani_scroll");
            $('.card-title').addClass("img_card_ani_scroll");
            $('.card-text').addClass("img_card_ani_scroll");
            $('.form-control').addClass("img_card_ani_scroll");
        }


        if($(this).scrollTop() > 900){
            $(".table,th,td,tr").addClass("img_card_ani_scroll");
        } 

 if($(this).scrollTop() > 1500){
            $(".table,th,td,tr").addClass("img_card_ani_scroll");
        } 
    })
})