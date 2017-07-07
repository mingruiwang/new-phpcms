// 导航背景

if($(window).scrollTop()>0){

    $(".nav-box").addClass("nav-box-active");

}else{

    $(".nav-box").removeClass("nav-box-active");

}

$(window).scroll(function() {

    if($(window).scrollTop()>0){

        $(".nav-box").addClass("nav-box-active");

    }else{

        $(".nav-box").removeClass("nav-box-active");

    }

});

// 商桥

$(".call-xixun").hover(function(){

    var imgstr = $(this).attr("data");

    $(this).find("img").attr("src",imgstr+"online_icon_Click@2x.png");

    $(this).find("p").css({"opacity":"1"});

    $(this).find("img").css({"width":"35px"});

},function(){

    var imgstr = $(this).attr("data");

    $(this).find("img").attr("src",imgstr+"online_icon_unClick@2x.png");

    $(this).find("p").css({"opacity":"0"});

    $(this).find("img").css({"width":"28px"});

})

$(".call-telnumber").hover(function(){

    var imgstr = $(this).attr("data");

    $(this).find("img").attr("src",imgstr+"phone_icon_Click@2x.png");

    $(this).find("p").css({"opacity":"1"});

    $(this).find("img").css({"width":"32px"});

},function(){

    var imgstr = $(this).attr("data");

    $(this).find("img").attr("src",imgstr+"phone_icon_unClick@2x.png");

    $(this).find("p").css({"opacity":"0"});

    $(this).find("img").css({"width":"25px"});

})

$(".goto-top").hover(function(){

    var imgstr = $(this).attr("data");

    $(this).find("img").attr("src",imgstr+"top_icon_Click@2x.png");

    $(this).find("p").animate({"opacity":"0.8"});

},function(){

    var imgstr = $(this).attr("data");

    $(this).find("img").attr("src",imgstr+"top_icon_unClick@2x.png");

    $(this).find("p").animate({"opacity":"0"});

})

$(".goto-top").on("click",function(){

    $('html, body').animate({scrollTop:0}, 'slow');

})

toTop();

function toTop(){

    var scroll_top = $(document).scrollTop(); 

    if(scroll_top != 0){

        $(".goto-tot-bg").animate({"opacity":"0.8"});

    }else{

        $(".goto-tot-bg").animate({"opacity":"0"});

    }

}

$(document).scroll(function(){

    toTop();

})