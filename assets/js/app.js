$(function () {
  $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
          $('.navbar').addClass('navbar-dark');
      } else {
          $('.navbar').removeClass('navbar-dark');
      }
  });
});

var cur = location.href;
if($(".actives a[href='"+cur+"']").attr('href') == cur){
    $(".actives a[href='"+cur+"']").addClass('active');
    var parent = $(".actives a[href='"+cur+"']").parent();
    parent.addClass('active');
}

$('.open-share').click(function(e){
  e.preventDefault();
  $(this).parents('.social-container').children('.btn-social').toggleClass('right-normal');
});

$('.btn-social-close').click(function(e){
  e.preventDefault();
  $(this).parents('.btn-social').toggleClass('right-normal');
});

jQuery(document).ready(function($) {
  var forms = new Kajax();
  forms.sendFormFile('#form-image-upload');
});

wow = new WOW().init();

$(function() {
  $('#blueimp-gallery').on('opened', function (event) {
      $('.slides img').okzoom({
        width: 250,
        height: 250,
        round: true,
        background: "#fff",
        backgroundRepeat: "repeat",
        border: "2px solid #ddd"
      });
  });
});

$(function () {

  $(".progress").fadeOut();
  $('[data-toggle="tooltip"]').tooltip();
  // init typed
  var type = $(".welcome").text();
  $(".welcome").typed({
    strings: [type],
    typeSpeed: 50,
    contentType: 'html',
    cursorChar: "",
  });

  $(".social-actions [data-action]").click(function(e) {
    e.preventDefault();
    var clickthis = $(this);
    $.get($(this).data('action'), function(data) {
      if(data['message'] === 'success'){
          new PNotify({title: 'Ok!',text: 'Gracias por el Like',type: 'success',styling: 'fontawesome'});
          var numlikes = clickthis.parents('.social-actions').children('.likes');
          numlikes.text(Number(numlikes.text())+1);

      }else{
        new PNotify({title: 'Info',text: 'Al parecer ya indicó que le gusta esta Foto',type: 'info',styling: 'fontawesome'});
      }
    });
  });

 var $K = $('.isotope-content');
  $K.imagesLoaded(function () {
    $K.masonry({itemSelector:'.item', isAnimated:true,layoutMode: 'masonry'});
  });

})
