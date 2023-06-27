$('.modal-btn').on('click', (event) => {
    $('.modal-popup').fadeIn('slow')
    $('.popup-overlay').fadeIn('slow')
});
$('.popup-close').on('click', (event) =>{
    $('.modal-popup').fadeOut('slow')
    $('.popup-overlay').fadeOut('slow')
});
$('.popup-overlay').click(function ()  {
    $('.modal-popup').fadeOut('slow')
    $('.popup-overlay').fadeOut('slow')
});