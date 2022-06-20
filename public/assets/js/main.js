AOS.init({
	offset: 150, //Default Values
	duration:900, //this
	easing:'ease-out', //this
	delay:0, //this
	once:false // and this
});

(function($) {
  let navbarDesctop = $('.navbar-desctop'),
      prevScrollpos = window.pageYOffset,
      bar = $('.menu-icon .bar'),
      navLink = $(".options")

  window.addEventListener('scroll', function () {

    if (scrollY >= 700) {
      navbarDesctop.css({marginTop : '0'});

      navbarDesctop.addClass('affix');

      bar.css({background : '#fff'})

    }else{
      navbarDesctop.css({marginTop : '-135px'});

      setTimeout(e => {
        navbarDesctop.removeClass('affix');
        navbarDesctop.css({marginTop : '0'});
      },400)

      bar.css({background : '#3a4f73'})
    }

    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos >= currentScrollPos) {
      navbarDesctop.css({top : '0'});
    } else {
      navbarDesctop.css({top : '-125px'});
    }
    prevScrollpos = currentScrollPos;
  })

  // show and hidden menu list to Mobile
  $('.menu-icon').on('click', function () {
    $('.phone').toggleClass('active')
    $(this).toggleClass('opened');
    if (document.querySelector('.menu-icon.opened')){
      setTimeout(e => {
        navLink.addClass('actives')
      },300)
    }else{
      navLink.removeClass('actives')
    }
  })

})(jQuery);
