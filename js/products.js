$(document).ready(function () {
    $('.zoom').magnify();

});


// 


AOS.init({

    // debounceDelay: 50,
    // throttleDelay: 99,


    offset: 300,
    duration: 1000,
    // easing: 'ease',
    // once: false,
    // mirror: false,
    // anchorPlacement: 'top-bottom'
});

 /*-----For Search Bar-----------------------------*/
 $(document).on('click', '.search', function () {
    $('.search-bar').addClass('search-bar-active')
});

$(document).on('click', '.search-cancel', function () {
    $('.search-bar').removeClass('search-bar-active')
});


// products 2 details

console.log('ch jawad');

var productimg=document.getElementById("productimg");
var small_img=document.getElementsByClassName("small_img");

small_img[0].onclick=function()
{
    productimg.src=small_img[0].src;
}
small_img[1].onclick=function()
{
    productimg.src=small_img[1].src;
}
small_img[2].onclick=function()
{
    productimg.src=small_img[2].src;
}
small_img[3].onclick=function()
{
    productimg.src=small_img[3].src;
}


// products 3
// slider plus xoom
$(function(){

    $(".xzoom,.xzoom-gallery").xzoom({
         zommWidth:400,
         tint:"#333",
         Xoffset:15,
    });

});

