$(document).ready(function(){
    $(".widget-title").on("click",function(){
        $(this).next().toggle("show");

    })

    $(".view-3, .view-5,.view-7").on("click",function(){
        var th = $(this);
        var storage = th.attr("data-id");
        var size = th.attr("data-product");
        th.parent().find(".active-view").removeClass("active-view");
        th.addClass("active-view");
        $("#content").removeClass("large-products").removeClass("small-products").removeClass("medium-products");
        $("#content").addClass(size+"-products");

        localStorage["thumbs"] = storage;
    });

    if(localStorage['thumbs']){

        $(localStorage['thumbs']).click();
        $(".product").show();

    }else{

        $(".view-5").click();
        $(".product").show();
    }
})
