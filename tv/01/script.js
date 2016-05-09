var swiperH = new Swiper('.swiper-container-h', {
    spaceBetween: 30,
    keyboardControl: true,
    slidesPerView: 1.5,
    // centeredSlides: true,
    direction: 'vertical'
});
var swiperV = new Swiper('.swiper-container-v1', {
    slidesPerView: 'auto',
    slidesPerView: 4,
    // centeredSlides: true,
    spaceBetween: 25,
    keyboardControl: true,
});
var swiperV = new Swiper('.swiper-container-v2', {
    slidesPerView: 'auto',
    slidesPerView: 4,
    // centeredSlides: true,
    spaceBetween: 25,
    keyboardControl: true
});
var swiperV = new Swiper('.swiper-container-v3', {
    slidesPerView: 'auto',
    slidesPerView: 4,
    // centeredSlides: true,
    spaceBetween: 25,
    keyboardControl: true
});
var swiperV = new Swiper('.swiper-container-v4', {
    slidesPerView: 'auto',
    slidesPerView: 4,
    // centeredSlides: true,
    spaceBetween: 25,
    keyboardControl: true
});


// Instance
snapper = new Snap({
    element: $("#drawer-left")[0],
    maxPosition: 1,
    minPosition: -1,
    transitionSpeed: 0.1,
    tapToClose: true,
    touchToDrag: true
}),

snapper.on('open', function(){
    $('body').append('<div class="modal-backdrop fade in"></div>');
});

snapper.on('close', function(){
    $(".modal-backdrop").remove();
});

$('body').on('click', '.modal-backdrop', function() {
    snapper.close('left');
});

$('body').on('click', '[data-drawer-close="left"]', function() {
    snapper.close('left');
});
$('body').on('click', '[data-drawer-open="left"]', function() {
    snapper.open('left');
});
$('body').on('click', '[data-drawer-expand="left"]', function() {
    snapper.expand('left');
});
$('body').on('click','[data-drawer-toggle="left"]',function(){
    if( snapper.state().state=="left" ){
        snapper.close();
    } else {
        snapper.open('left');
    }
});



snapper2 = new Snap({
    element: $("#drawer-right")[0],
    maxPosition: 1,
    minPosition: -1,
    transitionSpeed: 0.1,
    tapToClose: true,
    touchToDrag: true
}),

$('body').on('click', '[data-drawer-close="right"]', function() {
    snapper2.close('right');
});
$('body').on('click', '[data-drawer-open="right"]', function() {
    snapper2.open('right');
});
$('body').on('click', '[data-drawer-expand="right"]', function() {
    snapper2.expand('right');
});
$('body').on('click','[data-drawer-toggle="right"]',function(){
    if( snapper2.state().state=="right" ){
        snapper2.close();
    } else {
        snapper2.open('right');
    }
});

$('body').on('click', '[data-dismiss="sheet"]', function() {
    $( ".sheet" ).removeClass("visible"); 
});

$(function() {
    $( ".card" ).click(function() {
        setTimeout( function(){
            $( ".sheet" ).addClass("visible"); 
        }, 12000 );
    });
});


$('body').on('click', '#purchase', function() {
    $( "#success-alert" ).removeClass("out").addClass("in"); 
});



