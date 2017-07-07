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