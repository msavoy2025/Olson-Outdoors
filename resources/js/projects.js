jQuery(document).ready(function($){
    $('.currentProjects').on('click', 'input', function() {
        $('.projectsWrap').css('opacity', '0');

        setTimeout(function(){
            $('.projectsWrap')
                .scrollLeft(0)
                .animate({opacity: 1}, 1000);
        }, 600);
    })

  // project search-section mobile click functionality (MOVE TO SEPARATE JS FILE)
  if($(window).width() > 1025) {
  $(".plus__check1").addClass('bgSwap');
} // window width > 1025 close if statement
  $(".projectClick1").click(function() {
    $(".1").toggleClass('openProject');
    $(".plus__check1").toggleClass('bgSwap');
    $(".plus__check2").removeClass('bgSwap');
    $(".plus__check3").removeClass('bgSwap');
    $(".plus__check4").removeClass('bgSwap');
    $(".plus__check5").removeClass('bgSwap');
    $(".plus__check6").removeClass('bgSwap');
    $(".plus__check7").removeClass('bgSwap');
    $(".plus__check8").removeClass('bgSwap');
    $(".plus__check9").removeClass('bgSwap');
    $(".plus__check10").removeClass('bgSwap');
    $(".plus__check11").removeClass('bgSwap');
    $(".plus__check12").removeClass('bgSwap');
    $(".plus__check13").removeClass('bgSwap');
    $(".plus__check14").removeClass('bgSwap');
    $(".plus__check15").removeClass('bgSwap');
    $(".plus__check16").removeClass('bgSwap');
  });

  $(".projectClick2").click(function() {
    $(".2").toggleClass('openProject');
    $(".plus__check2").toggleClass('bgSwap');
    $(".plus__check1").removeClass('bgSwap');
    $(".plus__check3").removeClass('bgSwap');
    $(".plus__check4").removeClass('bgSwap');
    $(".plus__check5").removeClass('bgSwap');
    $(".plus__check6").removeClass('bgSwap');
    $(".plus__check7").removeClass('bgSwap');
    $(".plus__check8").removeClass('bgSwap');
    $(".plus__check9").removeClass('bgSwap');
    $(".plus__check10").removeClass('bgSwap');
    $(".plus__check11").removeClass('bgSwap');
    $(".plus__check12").removeClass('bgSwap');
    $(".plus__check13").removeClass('bgSwap');
    $(".plus__check14").removeClass('bgSwap');
    $(".plus__check15").removeClass('bgSwap');
    $(".plus__check16").removeClass('bgSwap');
  });

  $(".projectClick3").click(function() {
    $(".3").toggleClass('openProject');
    $(".plus__check3").toggleClass('bgSwap');
    $(".plus__check2").removeClass('bgSwap');
    $(".plus__check1").removeClass('bgSwap');
    $(".plus__check4").removeClass('bgSwap');
    $(".plus__check5").removeClass('bgSwap');
    $(".plus__check6").removeClass('bgSwap');
    $(".plus__check7").removeClass('bgSwap');
    $(".plus__check8").removeClass('bgSwap');
    $(".plus__check9").removeClass('bgSwap');
    $(".plus__check10").removeClass('bgSwap');
    $(".plus__check11").removeClass('bgSwap');
    $(".plus__check12").removeClass('bgSwap');
    $(".plus__check13").removeClass('bgSwap');
    $(".plus__check14").removeClass('bgSwap');
    $(".plus__check15").removeClass('bgSwap');
    $(".plus__check16").removeClass('bgSwap');
  });

  $(".projectClick4").click(function() {
    $(".4").toggleClass('openProject');
    $(".plus__check4").toggleClass('bgSwap');
    $(".plus__check2").removeClass('bgSwap');
    $(".plus__check1").removeClass('bgSwap');
    $(".plus__check3").removeClass('bgSwap');
    $(".plus__check5").removeClass('bgSwap');
    $(".plus__check6").removeClass('bgSwap');
    $(".plus__check7").removeClass('bgSwap');
    $(".plus__check8").removeClass('bgSwap');
    $(".plus__check9").removeClass('bgSwap');
    $(".plus__check10").removeClass('bgSwap');
    $(".plus__check11").removeClass('bgSwap');
    $(".plus__check12").removeClass('bgSwap');
    $(".plus__check13").removeClass('bgSwap');
    $(".plus__check14").removeClass('bgSwap');
    $(".plus__check15").removeClass('bgSwap');
    $(".plus__check16").removeClass('bgSwap');
  });

  $(".projectClick5").click(function() {
    $(".5").toggleClass('openProject');
    $(".plus__check5").toggleClass('bgSwap');
    $(".plus__check2").removeClass('bgSwap');
    $(".plus__check1").removeClass('bgSwap');
    $(".plus__check3").removeClass('bgSwap');
    $(".plus__check4").removeClass('bgSwap');
    $(".plus__check6").removeClass('bgSwap');
    $(".plus__check7").removeClass('bgSwap');
    $(".plus__check8").removeClass('bgSwap');
    $(".plus__check9").removeClass('bgSwap');
    $(".plus__check10").removeClass('bgSwap');
    $(".plus__check11").removeClass('bgSwap');
    $(".plus__check12").removeClass('bgSwap');
    $(".plus__check13").removeClass('bgSwap');
    $(".plus__check14").removeClass('bgSwap');
    $(".plus__check15").removeClass('bgSwap');
    $(".plus__check16").removeClass('bgSwap');
  });

  $(".projectClick6").click(function() {
    $(".6").toggleClass('openProject');
    $(".plus__check6").toggleClass('bgSwap');
    $(".plus__check2").removeClass('bgSwap');
    $(".plus__check1").removeClass('bgSwap');
    $(".plus__check3").removeClass('bgSwap');
    $(".plus__check4").removeClass('bgSwap');
    $(".plus__check5").removeClass('bgSwap');
    $(".plus__check7").removeClass('bgSwap');
    $(".plus__check8").removeClass('bgSwap');
    $(".plus__check9").removeClass('bgSwap');
    $(".plus__check10").removeClass('bgSwap');
    $(".plus__check11").removeClass('bgSwap');
    $(".plus__check12").removeClass('bgSwap');
    $(".plus__check13").removeClass('bgSwap');
    $(".plus__check14").removeClass('bgSwap');
    $(".plus__check15").removeClass('bgSwap');
    $(".plus__check16").removeClass('bgSwap');
  });

  $(".projectClick7").click(function() {
    $(".7").toggleClass('openProject');
    $(".plus__check7").toggleClass('bgSwap');
    $(".plus__check2").removeClass('bgSwap');
    $(".plus__check1").removeClass('bgSwap');
    $(".plus__check3").removeClass('bgSwap');
    $(".plus__check4").removeClass('bgSwap');
    $(".plus__check5").removeClass('bgSwap');
    $(".plus__check6").removeClass('bgSwap');
    $(".plus__check8").removeClass('bgSwap');
    $(".plus__check9").removeClass('bgSwap');
    $(".plus__check10").removeClass('bgSwap');
    $(".plus__check11").removeClass('bgSwap');
    $(".plus__check12").removeClass('bgSwap');
    $(".plus__check13").removeClass('bgSwap');
    $(".plus__check14").removeClass('bgSwap');
    $(".plus__check15").removeClass('bgSwap');
    $(".plus__check16").removeClass('bgSwap');
  });

  $(".projectClick8").click(function() {
    $(".8").toggleClass('openProject');
    $(".plus__check8").toggleClass('bgSwap');
    $(".plus__check2").removeClass('bgSwap');
    $(".plus__check1").removeClass('bgSwap');
    $(".plus__check3").removeClass('bgSwap');
    $(".plus__check4").removeClass('bgSwap');
    $(".plus__check5").removeClass('bgSwap');
    $(".plus__check6").removeClass('bgSwap');
    $(".plus__check7").removeClass('bgSwap');
    $(".plus__check9").removeClass('bgSwap');
    $(".plus__check10").removeClass('bgSwap');
    $(".plus__check11").removeClass('bgSwap');
    $(".plus__check12").removeClass('bgSwap');
    $(".plus__check13").removeClass('bgSwap');
    $(".plus__check14").removeClass('bgSwap');
    $(".plus__check15").removeClass('bgSwap');
    $(".plus__check16").removeClass('bgSwap');
  });

  $(".projectClick9").click(function() {
    $(".9").toggleClass('openProject');
    $(".plus__check9").toggleClass('bgSwap');
    $(".plus__check2").removeClass('bgSwap');
    $(".plus__check1").removeClass('bgSwap');
    $(".plus__check3").removeClass('bgSwap');
    $(".plus__check4").removeClass('bgSwap');
    $(".plus__check5").removeClass('bgSwap');
    $(".plus__check6").removeClass('bgSwap');
    $(".plus__check7").removeClass('bgSwap');
    $(".plus__check8").removeClass('bgSwap');
    $(".plus__check10").removeClass('bgSwap');
    $(".plus__check11").removeClass('bgSwap');
    $(".plus__check12").removeClass('bgSwap');
    $(".plus__check13").removeClass('bgSwap');
    $(".plus__check14").removeClass('bgSwap');
    $(".plus__check15").removeClass('bgSwap');
    $(".plus__check16").removeClass('bgSwap');
  });

  $(".projectClick10").click(function() {
    $(".10").toggleClass('openProject');
    $(".plus__check10").toggleClass('bgSwap');
    $(".plus__check2").removeClass('bgSwap');
    $(".plus__check1").removeClass('bgSwap');
    $(".plus__check3").removeClass('bgSwap');
    $(".plus__check4").removeClass('bgSwap');
    $(".plus__check5").removeClass('bgSwap');
    $(".plus__check6").removeClass('bgSwap');
    $(".plus__check7").removeClass('bgSwap');
    $(".plus__check8").removeClass('bgSwap');
    $(".plus__check9").removeClass('bgSwap');
    $(".plus__check11").removeClass('bgSwap');
    $(".plus__check12").removeClass('bgSwap');
    $(".plus__check13").removeClass('bgSwap');
    $(".plus__check14").removeClass('bgSwap');
    $(".plus__check15").removeClass('bgSwap');
    $(".plus__check16").removeClass('bgSwap');
  });

  $(".projectClick11").click(function() {
    $(".11").toggleClass('openProject');
    $(".plus__check11").toggleClass('bgSwap');
    $(".plus__check2").removeClass('bgSwap');
    $(".plus__check1").removeClass('bgSwap');
    $(".plus__check3").removeClass('bgSwap');
    $(".plus__check4").removeClass('bgSwap');
    $(".plus__check5").removeClass('bgSwap');
    $(".plus__check6").removeClass('bgSwap');
    $(".plus__check7").removeClass('bgSwap');
    $(".plus__check8").removeClass('bgSwap');
    $(".plus__check9").removeClass('bgSwap');
    $(".plus__check10").removeClass('bgSwap');
    $(".plus__check12").removeClass('bgSwap');
    $(".plus__check13").removeClass('bgSwap');
    $(".plus__check14").removeClass('bgSwap');
    $(".plus__check15").removeClass('bgSwap');
    $(".plus__check16").removeClass('bgSwap');
  });

  $(".projectClick12").click(function() {
    $(".12").toggleClass('openProject');
    $(".plus__check12").toggleClass('bgSwap');
    $(".plus__check2").removeClass('bgSwap');
    $(".plus__check1").removeClass('bgSwap');
    $(".plus__check3").removeClass('bgSwap');
    $(".plus__check4").removeClass('bgSwap');
    $(".plus__check5").removeClass('bgSwap');
    $(".plus__check6").removeClass('bgSwap');
    $(".plus__check7").removeClass('bgSwap');
    $(".plus__check8").removeClass('bgSwap');
    $(".plus__check9").removeClass('bgSwap');
    $(".plus__check10").removeClass('bgSwap');
    $(".plus__check11").removeClass('bgSwap');
    $(".plus__check13").removeClass('bgSwap');
    $(".plus__check14").removeClass('bgSwap');
    $(".plus__check15").removeClass('bgSwap');
    $(".plus__check16").removeClass('bgSwap');
  });

  $(".projectClick13").click(function() {
    $(".13").toggleClass('openProject');
    $(".plus__check13").toggleClass('bgSwap');
    $(".plus__check2").removeClass('bgSwap');
    $(".plus__check1").removeClass('bgSwap');
    $(".plus__check3").removeClass('bgSwap');
    $(".plus__check4").removeClass('bgSwap');
    $(".plus__check5").removeClass('bgSwap');
    $(".plus__check6").removeClass('bgSwap');
    $(".plus__check7").removeClass('bgSwap');
    $(".plus__check8").removeClass('bgSwap');
    $(".plus__check9").removeClass('bgSwap');
    $(".plus__check10").removeClass('bgSwap');
    $(".plus__check11").removeClass('bgSwap');
    $(".plus__check12").removeClass('bgSwap');
    $(".plus__check14").removeClass('bgSwap');
    $(".plus__check15").removeClass('bgSwap');
    $(".plus__check16").removeClass('bgSwap');
  });

  $(".projectClick14").click(function() {
    $(".14").toggleClass('openProject');
    $(".plus__check14").toggleClass('bgSwap');
    $(".plus__check2").removeClass('bgSwap');
    $(".plus__check1").removeClass('bgSwap');
    $(".plus__check3").removeClass('bgSwap');
    $(".plus__check4").removeClass('bgSwap');
    $(".plus__check5").removeClass('bgSwap');
    $(".plus__check6").removeClass('bgSwap');
    $(".plus__check7").removeClass('bgSwap');
    $(".plus__check8").removeClass('bgSwap');
    $(".plus__check9").removeClass('bgSwap');
    $(".plus__check10").removeClass('bgSwap');
    $(".plus__check11").removeClass('bgSwap');
    $(".plus__check12").removeClass('bgSwap');
    $(".plus__check13").removeClass('bgSwap');
    $(".plus__check15").removeClass('bgSwap');
    $(".plus__check16").removeClass('bgSwap');
  });

  $(".projectClick15").click(function() {
    $(".15").toggleClass('openProject');
    $(".plus__check15").toggleClass('bgSwap');
    $(".plus__check2").removeClass('bgSwap');
    $(".plus__check1").removeClass('bgSwap');
    $(".plus__check3").removeClass('bgSwap');
    $(".plus__check4").removeClass('bgSwap');
    $(".plus__check5").removeClass('bgSwap');
    $(".plus__check6").removeClass('bgSwap');
    $(".plus__check7").removeClass('bgSwap');
    $(".plus__check8").removeClass('bgSwap');
    $(".plus__check9").removeClass('bgSwap');
    $(".plus__check10").removeClass('bgSwap');
    $(".plus__check11").removeClass('bgSwap');
    $(".plus__check12").removeClass('bgSwap');
    $(".plus__check13").removeClass('bgSwap');
    $(".plus__check14").removeClass('bgSwap');
    $(".plus__check16").removeClass('bgSwap');
  });

  $(".projectClick16").click(function() {
    $(".16").toggleClass('openProject');
    $(".plus__check16").toggleClass('bgSwap');
    $(".plus__check2").removeClass('bgSwap');
    $(".plus__check1").removeClass('bgSwap');
    $(".plus__check3").removeClass('bgSwap');
    $(".plus__check4").removeClass('bgSwap');
    $(".plus__check5").removeClass('bgSwap');
    $(".plus__check6").removeClass('bgSwap');
    $(".plus__check7").removeClass('bgSwap');
    $(".plus__check8").removeClass('bgSwap');
    $(".plus__check9").removeClass('bgSwap');
    $(".plus__check10").removeClass('bgSwap');
    $(".plus__check11").removeClass('bgSwap');
    $(".plus__check12").removeClass('bgSwap');
    $(".plus__check13").removeClass('bgSwap');
    $(".plus__check14").removeClass('bgSwap');
    $(".plus__check15").removeClass('bgSwap');
  });


}); //document ready function close
