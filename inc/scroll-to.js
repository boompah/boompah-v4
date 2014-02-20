// Scroll-to

  $( '.searchbychar' ).on('click', function(event) {
    event.preventDefault();
    var target = "#" + $(this).data('target');
    $('html, body').animate({
        scrollTop: $(target).offset().top
    }, 2000);
  });

// Example: <a href="#" class="searchbychar" data-target="a" onclick="return false">Top of page <i class="icon-arrow-up"></i></a>