/*$(function() {

    // Smooth scroll for anchors
    $('a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({ scrollTop: $(this.hash).offset().top }, 500);
    });

    // Slideshows
    $(".main-slideshow").responsiveSlides({
        pauseControls: false,
        speed: 1000, // Integer: Speed of the transition, in milliseconds
        timeout: 5000, // Integer: Time between slide transitions, in milliseconds
    });

    // Modals
    $('.open-tutorial').on('click', function() {
        $('.modal.modal-tutorial').modal('show');
    });

    $('.modal.modal-tutorial').on('hide.bs.modal', function(e) {
        $(e.currentTarget).find('iframe')[0].contentWindow.postMessage('{ "method": "pause" }', '*');
    });
});
*/
