var menu = $('.wrapper__navbar'),
pos = menu.offset();

$(window).scroll(function(){
    if($(this).scrollTop() > menu.height()){
        $('.wrapper__navbar').addClass('active');
    } else if($(this).scrollTop() <= menu.height()){
        $('.wrapper__navbar').removeClass('active');
    }
});
$("#copy").on("click", function(){
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val($("#resultKode").text()).select();
    document.execCommand("copy");
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        onOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })
      Toast.fire({
        icon: 'success',
        title: "Kode berhasil disalin."
      })
    $temp.remove();
  });

$(".wrapper__slick-customer").slick({
    arrows: false,
    dots: false,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    arrows: true,
    prevArrow:$('.wrapper__arrows .left'),
    nextArrow:$('.wrapper__arrows .right'),
    responsive: [
        {
            breakpoint: 769,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
            },
        },
        {
            breakpoint: 577,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            },
        },
    ],
});

$('.wrapper__accordion .head').click(function () {
    $(this).toggleClass('active');
});

$("a[href^='#click-']").on("click", function (e) {
    e.preventDefault();
    $("html, body").animate(
      {
        scrollTop: $($(this).attr("href")).offset().top,
      },
      1000
      );
    });
    