/// <reference path="../typings/globals/jquery/index.d.ts" />
$(document).ready(function(){
   
      var sd=document.getElementsByClassName("btns");
      
      
      for(var a = 0 ; a < sd.length ; a++){
        sd[a].onclick=function name(params) {
            var a=0;
            var now=this;
            for(a = 0 ; now=now.previousElementSibling;a++){}
            for(var i = 0 ; i < $(".one_slide").length;i++){
                $(".one_slide").eq(i).removeClass("Goleft1");
                $(".one_slide").eq(i).removeClass("Goleft2");
                $(".one_slide").eq(i).removeClass("run");
                $(".one_slide").eq(i).removeClass("Goright1");
                $(".one_slide").eq(i).removeClass("Goright2");
            
            }
            $(".one_slide").eq(a).addClass("run");
            
        }
      }
      
$("#btn2").click(function name(params) {
 
    var stt =0 ;
    if($(this).html()==$("#btn2").html()){
        var now_slide= $(".one_slide.run");
        
    for( var  i = 0 ; i < $(".one_slide").length ;i ++){

        if(now_slide.html()==$(".one_slide").eq(i).html()){
            stt=i;
        }
    }    
  console.log(stt);

  for(var i = 0 ; i < $(".one_slide").length;i++){
    $(".one_slide").eq(i).removeClass("Goleft1");
    $(".one_slide").eq(i).removeClass("Goleft2");
    $(".one_slide").eq(i).removeClass("run");
    $(".one_slide").eq(i).removeClass("Goright1");
    $(".one_slide").eq(i).removeClass("Goright2");

}
if(stt==2){
    $(".one_slide").eq(stt).addClass("Goleft1");
    $(".one_slide").eq(0).addClass("Goleft2");
    
}
else{
    
    $(".one_slide").eq(stt).addClass("Goleft1");

$(".one_slide").eq(stt+1).addClass("Goleft2");
$(".one_slide.Goleft2").addClass("run");
}


    }
})
$("#btn1").click(function name(params) {
 
    var stt =0 ;
    if($(this).html()==$("#btn1").html()){
        var now_slide= $(".one_slide.run");
        
    for( var  i = 0 ; i < $(".one_slide").length ;i ++){

        if(now_slide.html()==$(".one_slide").eq(i).html()){
            stt=i;
        }
    }    
  console.log(stt);
  for(var i = 0 ; i < $(".one_slide").length;i++){
    $(".one_slide").eq(i).removeClass("Goleft1");
    $(".one_slide").eq(i).removeClass("Goleft2");
    $(".one_slide").eq(i).removeClass("run");
    $(".one_slide").eq(i).removeClass("Goright1");
    $(".one_slide").eq(i).removeClass("Goright2");

}
if(stt==0){
    $(".one_slide").eq(stt).addClass("Goright2");
    $(".one_slide").eq(2).addClass("Goright1");
}
$(".one_slide").eq(stt).addClass("Goright2");

$(".one_slide").eq(stt-1).addClass("Goright1");
$(".one_slide.Goright1").addClass("run");

    }
})
})
