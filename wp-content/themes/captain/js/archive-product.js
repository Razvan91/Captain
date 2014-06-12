$(document).ready(function(){
    $(".widget-title").on("click",function(){
        $(this).next().toggle("show");

    })

    $(".view-3").on("click",function(){
        if(($(".product").find("a").find("img").hasClass("small")) ||($(".product").find("a").find("img").hasClass("medium")) || ($(".product").find("a").find("img").hasClass("large"))){
            $(".product").find("a").find("img").attr("class","");
            $(".product").find("a").find("img").addClass("small");
        }
        else{
            $(".product").find("a").find("img").addClass("small");
        }
        $(".product-attr").css({"margin-left": "20px"});
        $(".product-title").css({"margin-left": "20px"});
        $(".product-price").css({"margin-left": "20px"});
        $(".product-options").css({"margin-left": "20px"});
        $(".product").css({"width":"100px"});

        localStorage["thumbs"] = ".view-3";
    })
    $(".view-5").on("click",function(){
        if(($(".product").find("a").find("img").hasClass("small")) ||($(".product").find("a").find("img").hasClass("medium")) || ($(".product").find("a").find("img").hasClass("large"))){
            $(".product").find("a").find("img").attr("class","");
            $(".product").find("a").find("img").addClass("medium");
        }
        else{
            $(".product").find("a").find("img").addClass("medium");
        }
        $(".product-attr").css({"margin-left": "0px"});
        $(".product-title").css({"margin-left": "0px"});
        $(".product-price").css({"margin-left": "0px"});
        $(".product-options").css({"margin-left": "0px"});
        $(".product").css({"width":"223.8px"});
        localStorage["thumbs"] = ".view-5";
    })
    $(".view-7").on("click",function(){
        if(($(".product").find("a").find("img").hasClass("small")) ||($(".product").find("a").find("img").hasClass("medium")) || ($(".product").find("a").find("img").hasClass("large"))){
            $(".product").find("a").find("img").attr("class","");
            $(".product").find("a").find("img").addClass("large");
        }
        else{
            $(".product").find("a").find("img").addClass("large");
        }
        $(".product-attr").css({"margin-left": "0px"});
        $(".product-title").css({"margin-left": "0px"});
        $(".product-price").css({"margin-left": "0px"});
        $(".product-options").css({"margin-left": "0px"});
        $(".product").css({"width":"300px"});
        localStorage["thumbs"] = ".view-7";
    })

    if(localStorage['thumbs']){

        $(localStorage['thumbs']).click();
        $(".product").show();

    }else{

        $(".view-5").click();
        $(".product").show();
    }
})
