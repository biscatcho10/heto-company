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

  if (scrollY >= 700) {
    navbarDesctop.addClass('mt0');
  }
  window.addEventListener('scroll', function () {

    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos >= currentScrollPos) {


      if (scrollY >= 700) {

        navbarDesctop.addClass('navShow');
    
        navbarDesctop.addClass('affix');
        
        bar.css({background : '#fff'})
        
      }else {
        
        navbarDesctop.removeClass('navShow');

        setTimeout(e => {
          navbarDesctop.removeClass('mt0');
          navbarDesctop.removeClass('affix');
        },500)

        bar.css({background : '#3a4f73'})
      }
      
    } else {
      if (scrollY < 700) {
        
        if (!document.querySelector('.phone.active')) {
          
          setTimeout(e => {
            navbarDesctop.removeClass('affix');
          },500)
      
          bar.css({background : '#3a4f73'})

        }

      }else{

        navbarDesctop.removeClass('navShow');
        navbarDesctop.addClass('mt0');

        if (document.querySelector('.phone.active')) {
          navbarDesctop.addClass('navShow');
          setTimeout(e => {
            navbarDesctop.addClass('affix');
          },500)
          bar.css({background : '#fff'})
        }

      }
       
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
