export default () => {


    let scrollDown = $(".scroll-down");

    let scrollDownHash = scrollDown.attr('href').substring(1);

    scrollDown.parent().next().attr('id', scrollDownHash);

    scrollDown.on('click', function (event) {

        if (this.hash !== "") {

            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top,
            }, 800);

        }

    });
}