var canScroll = false;
var isMobile = false; //initiate as false
// device detection
if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent)
    || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) {
    isMobile = true;
}
jQuery(document).ready(function($){
  if ($('.projectsWrap').length) {
    $('.projectsWrap').css('opacity', '0');
  }

  // Open/Close Functionality for mobile navigation menu
    $(".mobEXT").click(function() {
      $(".navOptions").toggleClass('extend');
    });

    $(".close_button").click(function() {
      $(".navOptions").removeClass('extend');
    });

    $(window).on('scroll', function() {
      var $current_season = $('.seasonalContentBlock.mPS2id-target');
      if ( $current_season.length ) {
        $('.precipTextNum').text($current_season.data('precipitation') + '"');
        $('.precipTextNum2').html($current_season.data('temp') + "&#176;");

        var temp_svg = $('.percimp.temp svg');
        var precipitation_svg = $('.percimp.precipitation svg');

        updateTemp($current_season.data('temp'), temp_svg );
        updatePrecipitation($current_season.data('precipitation'), precipitation_svg );
      }
    });
// Search Section AJAX Pull
    $menuPosts =  $("#search-section");
    $('.getResults').on("click", function(e) {
      canScroll = false;

      $.getJSON('https://olsonoutdoors.com/wp-json/wp/v2/project?search=' + $(this).prop("value"), posts => {

        $menuPosts.html(`
          ${posts.map(item => `
            <div class="projectFeaturedImage" style="background-image:url(${item.fimg_url});"></div>

            <p class="projectTitle">${item.title.rendered}</p>

            <div class="projectDescription">
              <div class="projectDescription__top">
                <div class="projectDescription__title">
                  <p>project profile</p>
                  <img src="https://olsonoutdoors.com/wp-content/themes/olson/resources/images/logoGreenSmall.png">
                  <p>form o.l. 1298_1</p>
                </div><!-- projectDescription__title close -->

                <div class="projectDetails">
                  <div class="projectDetail">
                  <p class="projectDetail__title">Title</p>
                  <p class="projectDetail__content">${item.title.rendered}</p>
                  </div>
                  <div class="projectDetail">
                  <p class="projectDetail__title">Acreage</p>
                  <p class="projectDetail__content">${item.acreage}</p>
                  </div>
                  <div class="projectDetail">
                  <p class="projectDetail__title">Completed</p>
                  <p class="projectDetail__content">${item.completed}</p>
                  </div>
                  <div class="projectDetail">
                  <p class="projectDetail__title">Days of Sun</p>
                  <p class="projectDetail__content">${item.days_sun}</p>
                  </div>
                </div>

                <div class="projectContent">
                  <p class="projectDetail__title">Project Notes</p>
                  <ul>${item.content.rendered}</ul>
                </div>

              </div>
              <div class="projectDescription__bottom">scroll for more <img src="https://olsonoutdoors.com/wp-content/themes/olson/resources/images/arrowUp.png"></div>
            </div>

            <div class="projectFeaturedImage projectGallery" style="background-image:url(${item.photo});"></div>
            <div class="projectFeaturedImage projectGallery" style="background-image:url(${item.photo2});"></div>
            <div class="projectFeaturedImage projectGallery" style="background-image:url(${item.photo3});"></div>
            <div class="projectFeaturedImage projectGallery" style="background-image:url(${item.photo4});"></div>
            <div class="projectFeaturedImage projectGallery" style="background-image:url(${item.photo5});"></div>
            <div class="projectFeaturedImage projectGallery" style="background-image:url(${item.photo6});"></div>
            <div class="projectFeaturedImage projectGallery" style="background-image:url(${item.photo7});"></div>
            <div class="projectFeaturedImage projectGallery" style="background-image:url(${item.photo8});"></div>
            <div class="projectFeaturedImage projectGallery" style="background-image:url(${item.photo9});"></div>
            <div class="projectFeaturedImage projectGallery" style="background-image:url(${item.photo10});"></div>
            <div class="projectEnd"><p>the end</p></div>

          `).join('')}
        `);

        setTimeout(function(){
          $('.projectsWrap')
            .animate({scrollLeft: 100}, 1000, function() {
              canScroll = true;
            });
        }, 1000);
      });
    }); //json request close

// opening Projects Page ogden st. pull
jQuery(window).on("load", function(){
  canScroll = false;

  $.getJSON('https://olsonoutdoors.com/wp-json/wp/v2/project?search=Schiff', posts => {

    $menuPosts.html(`
      ${posts.map(item => `
        <div class="projectFeaturedImage" style="background-image:url(${item.fimg_url});"></div>

        <p class="projectTitle">${item.title.rendered}</p>

        <div class="projectDescription">
          <div class="projectDescription__top">
            <div class="projectDescription__title">
              <p>project profile</p>
              <img src="https://olsonoutdoors.com/wp-content/themes/olson/resources/images/logoGreenSmall.png">
              <p>form o.l. 1298_1</p>
            </div><!-- projectDescription__title close -->

            <div class="projectDetails">
              <div class="projectDetail">
              <p class="projectDetail__title">Title</p>
              <p class="projectDetail__content">${item.title.rendered}</p>
              </div>
              <div class="projectDetail">
              <p class="projectDetail__title">Acreage</p>
              <p class="projectDetail__content">${item.acreage}</p>
              </div>
              <div class="projectDetail">
              <p class="projectDetail__title">Completed</p>
              <p class="projectDetail__content">${item.completed}</p>
              </div>
              <div class="projectDetail">
              <p class="projectDetail__title">Days of Sun</p>
              <p class="projectDetail__content">${item.days_sun}</p>
              </div>
            </div>

            <div class="projectContent">
              <p class="projectDetail__title">Project Notes</p>
              <ul>${item.content.rendered}</ul>
            </div>

          </div>
          <div class="projectDescription__bottom">scroll for more <img src="https://olsonoutdoors.com/wp-content/themes/olson/resources/images/arrowUp.png"></div>
        </div>

        <div class="projectFeaturedImage projectGallery" style="background-image:url(${item.photo});"></div>
        <div class="projectFeaturedImage projectGallery" style="background-image:url(${item.photo2});"></div>
        <div class="projectFeaturedImage projectGallery" style="background-image:url(${item.photo3});"></div>
        <div class="projectFeaturedImage projectGallery" style="background-image:url(${item.photo4});"></div>
        <div class="projectFeaturedImage projectGallery" style="background-image:url(${item.photo5});"></div>
        <div class="projectFeaturedImage projectGallery" style="background-image:url(${item.photo6});"></div>
        <div class="projectFeaturedImage projectGallery" style="background-image:url(${item.photo7});"></div>
        <div class="projectFeaturedImage projectGallery" style="background-image:url(${item.photo8});"></div>
        <div class="projectFeaturedImage projectGallery" style="background-image:url(${item.photo9});"></div>
        <div class="projectFeaturedImage projectGallery" style="background-image:url(${item.photo10});"></div>
        <div class="projectEnd"><p>the end</p></div>

      `).join('')}
    `);

      if ($('.projectsWrap').length) {
        $('.projectsWrap').animate({opacity: 1}, 600);
      }

      setTimeout(function(){
        $('.projectsWrap')
          .animate({scrollLeft: 100}, 1000, function() {
            canScroll = true;
          });
      }, 1000);
  });
});

$('body, html').mousewheel(function (e, delta) {
  if (! canScroll || $('.projectsWrap').length == 0) {
    return;
  }

  if ('webkitDirectionInvertedFromDevice' in e.originalEvent) {
      return;
  } else {
    $('.projectsWrap').scrollLeft($('.projectsWrap').scrollLeft() - delta * e.deltaFactor);
  }
});

  function updateTemp( temp, svg ) {
    var min_height_y = 94;
    var max_height_y = 5;
    var min_temp = 32;
    var max_temp = 100;

    var range_size = min_height_y - max_height_y;
    var range_temp = max_temp - min_temp;
    var step = range_size / range_temp;
    var new_value = ( temp - min_temp ) * step;
    var new_y = max_height_y + ( range_size - ( temp - min_temp ) );

    $('#temp-bar').attr('y', new_y);
    $('#temp-bar').attr('height', new_value );
  }

  function updatePrecipitation( value, svg ) {
    var min_height_y = 121;
    var max_height_y = 1;
    var min_value = 0.3;
    var max_value = 2;
    var range_size = min_height_y - max_height_y;
    var range_temp = max_value - min_value;
    var step = range_size / range_temp;
    var new_value = ( value - min_value ) * step;
    var new_y = min_height_y - new_value;

    $('#precipitation-bar').attr('y', new_y);
    $('#precipitation-bar').attr('height', new_value );

    $('.separator').each(function(){
      var separator_height = $(this).attr('y');
      if ( separator_height > new_y ) {
        $(this).attr('fill', '#ECDCCC');
      } else {
        $(this).attr('fill', '#252525');
      }
    });
  }

jQuery(document).on('gform_page_loaded', function(event, form_id, current_page){
  $('.serviceAdd input').change(function(event) {
    var label = $(this).next('label');

    if ($(this).is(':checked')) {
      label.text('Service Added');
    } else {
      label.text('Add Service');
    }
  })
});

//get started form

$(window).on('scroll', function() {
  console.log( $(this).scrollTop() );
});


    //page 1 label link
  $(".gchoice_3_19_1 label").html('I have read and agree to the <a href="https://olsonoutdoors.com/wp-content/uploads/2023/03/Olson-Terms-and-Services-2023.docx.pdf" name="terms" target="_blank">terms and conditions*</a>');


    //page2 navigation on click and scroll effect

    jQuery(document).on('gform_page_loaded', function(event, form_id, current_page){
      $('.get_started_nav a').on('click', function() {
        var elLeftPosition        = $(this).position().left;
        var currentScrollPosition = $('.get_started_nav').scrollLeft();
        var innerElPaddings       = 40;
        var newScrollPosition     = elLeftPosition + currentScrollPosition - innerElPaddings;

        $('.get_started_nav').animate({scrollLeft: newScrollPosition}, 600);
      })
    });

    if ($(window).width() > 767) {

      //weekly mowing
      var topofDiv = $("#form_item1").offset().top;
      var height = $("#form_item1").outerHeight();

      $(window).scroll(function(){
          if($(window).scrollTop() > (topofDiv + height)){
            $('.form_item1').addClass('navActive');
            $('.form_item2').removeClass('navActive');
            $('.form_item3').removeClass('navActive');
            $('.form_item4').removeClass('navActive');
            $('.form_item5').removeClass('navActive');
            $('.form_item6').removeClass('navActive');
            $('.form_item7').removeClass('navActive');
            $('.form_item8').removeClass('navActive');
            $('.form_item9').removeClass('navActive');
            $('.form_item10').removeClass('navActive');
          }
      });

      //aeration
      var topofDiv2 = $("#form_item2").offset().top + 735;
      var height2 = $("#form_item2").outerHeight();

      $(window).scroll(function(){
          if($(window).scrollTop() > (topofDiv2 + height2)){
            $('.form_item1').removeClass('navActive');
            $('.form_item2').addClass('navActive');
            $('.form_item3').removeClass('navActive');
            $('.form_item4').removeClass('navActive');
            $('.form_item5').removeClass('navActive');
            $('.form_item6').removeClass('navActive');
            $('.form_item7').removeClass('navActive');
            $('.form_item8').removeClass('navActive');
            $('.form_item9').removeClass('navActive');
            $('.form_item10').removeClass('navActive');
          }
      });

      //fertilization
      var topofDiv3 = $("#form_item3").offset().top + 1881;
      var height3 = $("#form_item3").outerHeight();

      $(window).scroll(function(){
          if($(window).scrollTop() > (topofDiv3 + height3)){
            $('.form_item1').removeClass('navActive');
            $('.form_item2').removeClass('navActive');
            $('.form_item3').addClass('navActive');
            $('.form_item4').removeClass('navActive');
            $('.form_item5').removeClass('navActive');
            $('.form_item6').removeClass('navActive');
            $('.form_item7').removeClass('navActive');
            $('.form_item8').removeClass('navActive');
            $('.form_item9').removeClass('navActive');
            $('.form_item10').removeClass('navActive');
          }
      });

      //weed control
      var topofDiv4 = $("#form_item4").offset().top + 3435;
      var height4 = $("#form_item4").outerHeight();

      $(window).scroll(function(){
          if($(window).scrollTop() > (topofDiv4 + height4)){
            $('.form_item1').removeClass('navActive');
            $('.form_item2').removeClass('navActive');
            $('.form_item3').removeClass('navActive');
            $('.form_item4').addClass('navActive');
            $('.form_item5').removeClass('navActive');
            $('.form_item6').removeClass('navActive');
            $('.form_item7').removeClass('navActive');
            $('.form_item8').removeClass('navActive');
            $('.form_item9').removeClass('navActive');
            $('.form_item10').removeClass('navActive');
          }
      });

      //drought control
      var topofDiv5 = $("#form_item5").offset().top + 4570;
      var height5 = $("#form_item5").outerHeight();

      $(window).scroll(function(){
          if($(window).scrollTop() > (topofDiv5 + height5)){
            $('.form_item1').removeClass('navActive');
            $('.form_item2').removeClass('navActive');
            $('.form_item3').removeClass('navActive');
            $('.form_item4').removeClass('navActive');
            $('.form_item5').addClass('navActive');
            $('.form_item6').removeClass('navActive');
            $('.form_item7').removeClass('navActive');
            $('.form_item8').removeClass('navActive');
            $('.form_item9').removeClass('navActive');
            $('.form_item10').removeClass('navActive');
          }
      });

      //Overseeding
      var topofDiv6 = $("#form_item6").offset().top + 5320;
      var height6 = $("#form_item6").outerHeight();

      $(window).scroll(function(){
          if($(window).scrollTop() > (topofDiv6 + height6)){
            $('.form_item1').removeClass('navActive');
            $('.form_item2').removeClass('navActive');
            $('.form_item3').removeClass('navActive');
            $('.form_item4').removeClass('navActive');
            $('.form_item5').removeClass('navActive');
            $('.form_item6').addClass('navActive');
            $('.form_item7').removeClass('navActive');
            $('.form_item8').removeClass('navActive');
            $('.form_item9').removeClass('navActive');
            $('.form_item10').removeClass('navActive');
          }
      });

      //fungicide
      var topofDiv7 = $("#form_item7").offset().top + 6445;
      var height7 = $("#form_item7").outerHeight();

      $(window).scroll(function(){
          if($(window).scrollTop() > (topofDiv7 + height7)){
            $('.form_item1').removeClass('navActive');
            $('.form_item2').removeClass('navActive');
            $('.form_item3').removeClass('navActive');
            $('.form_item4').removeClass('navActive');
            $('.form_item5').removeClass('navActive');
            $('.form_item6').removeClass('navActive');
            $('.form_item7').addClass('navActive');
            $('.form_item8').removeClass('navActive');
            $('.form_item9').removeClass('navActive');
            $('.form_item10').removeClass('navActive');
          }
      });

      //sprinkler
      var topofDiv8 = $("#form_item8").offset().top + 7065;
      var height8 = $("#form_item8").outerHeight();

      $(window).scroll(function(){
          if($(window).scrollTop() > (topofDiv8 + height8)){
            $('.form_item1').removeClass('navActive');
            $('.form_item2').removeClass('navActive');
            $('.form_item3').removeClass('navActive');
            $('.form_item4').removeClass('navActive');
            $('.form_item5').removeClass('navActive');
            $('.form_item6').removeClass('navActive');
            $('.form_item7').removeClass('navActive');
            $('.form_item8').addClass('navActive');
            $('.form_item9').removeClass('navActive');
            $('.form_item10').removeClass('navActive');
          }
      });

      //YCU
      var topofDiv9 = $("#form_item9").offset().top + 10360;
      var height9 = $("#form_item9").outerHeight();

      $(window).scroll(function(){
          if($(window).scrollTop() > (topofDiv9 + height9)){
            $('.form_item1').removeClass('navActive');
            $('.form_item2').removeClass('navActive');
            $('.form_item3').removeClass('navActive');
            $('.form_item4').removeClass('navActive');
            $('.form_item5').removeClass('navActive');
            $('.form_item6').removeClass('navActive');
            $('.form_item7').removeClass('navActive');
            $('.form_item8').removeClass('navActive');
            $('.form_item9').addClass('navActive');
            $('.form_item10').removeClass('navActive');
          }
      });

      //Power Raking
      var topofDiv10 = $("#form_item10").offset().top + 12685;
      var height10 = $("#form_item10").outerHeight();

      $(window).scroll(function(){
          if($(window).scrollTop() > (topofDiv10 + height10)){
            $('.form_item1').removeClass('navActive');
            $('.form_item2').removeClass('navActive');
            $('.form_item3').removeClass('navActive');
            $('.form_item4').removeClass('navActive');
            $('.form_item5').removeClass('navActive');
            $('.form_item6').removeClass('navActive');
            $('.form_item7').removeClass('navActive');
            $('.form_item8').removeClass('navActive');
            $('.form_item9').removeClass('navActive');
            $('.form_item10').addClass('navActive');
          }
      });
    } else {

      //weekly lawn mowing
      var topofDiv = $("#form_item1").offset().top;
      var height = $("#form_item1").outerHeight();

      $(window).scroll(function(){
          if($(window).scrollTop() > (topofDiv + height)){
            $('.form_item1').addClass('navActive');
            $('.form_item2').removeClass('navActive');
            $('.form_item3').removeClass('navActive');
            $('.form_item4').removeClass('navActive');
            $('.form_item5').removeClass('navActive');
            $('.form_item6').removeClass('navActive');
            $('.form_item7').removeClass('navActive');
            $('.form_item8').removeClass('navActive');
            $('.form_item9').removeClass('navActive');
            $('.form_item10').removeClass('navActive');
          }
      });

      //aeration
      var topofDiv2 = $("#form_item2").offset().top + 1105;
      var height2 = $("#form_item2").outerHeight();

      $(window).scroll(function(){
          if($(window).scrollTop() > (topofDiv2 + height2)){
            $('.form_item1').removeClass('navActive');
            $('.form_item2').addClass('navActive');
            $('.form_item3').removeClass('navActive');
            $('.form_item4').removeClass('navActive');
            $('.form_item5').removeClass('navActive');
            $('.form_item6').removeClass('navActive');
            $('.form_item7').removeClass('navActive');
            $('.form_item8').removeClass('navActive');
            $('.form_item9').removeClass('navActive');
            $('.form_item10').removeClass('navActive');
          }
      });

      //fertilization
      var topofDiv3 = $("#form_item3").offset().top + 2405;
      var height3 = $("#form_item3").outerHeight();

      $(window).scroll(function(){
          if($(window).scrollTop() > (topofDiv3 + height3)){
            $('.form_item1').removeClass('navActive');
            $('.form_item2').removeClass('navActive');
            $('.form_item3').addClass('navActive');
            $('.form_item4').removeClass('navActive');
            $('.form_item5').removeClass('navActive');
            $('.form_item6').removeClass('navActive');
            $('.form_item7').removeClass('navActive');
            $('.form_item8').removeClass('navActive');
            $('.form_item9').removeClass('navActive');
            $('.form_item10').removeClass('navActive');
          }
      });

      //Weed Control
      var topofDiv4 = $("#form_item4").offset().top + 4110;
      var height4 = $("#form_item4").outerHeight();

      $(window).scroll(function(){
          if($(window).scrollTop() > (topofDiv4 + height4)){
            $('.form_item1').removeClass('navActive');
            $('.form_item2').removeClass('navActive');
            $('.form_item3').removeClass('navActive');
            $('.form_item4').addClass('navActive');
            $('.form_item5').removeClass('navActive');
            $('.form_item6').removeClass('navActive');
            $('.form_item7').removeClass('navActive');
            $('.form_item8').removeClass('navActive');
            $('.form_item9').removeClass('navActive');
            $('.form_item10').removeClass('navActive');
          }
      });

      //Drought Control
      var topofDiv5 = $("#form_item5").offset().top + 5420;
      var height5 = $("#form_item5").outerHeight();

      $(window).scroll(function(){
          if($(window).scrollTop() > (topofDiv5 + height5)){
            $('.form_item1').removeClass('navActive');
            $('.form_item2').removeClass('navActive');
            $('.form_item3').removeClass('navActive');
            $('.form_item4').removeClass('navActive');
            $('.form_item5').addClass('navActive');
            $('.form_item6').removeClass('navActive');
            $('.form_item7').removeClass('navActive');
            $('.form_item8').removeClass('navActive');
            $('.form_item9').removeClass('navActive');
            $('.form_item10').removeClass('navActive');
          }
      });

      //Overseeding
      var topofDiv6 = $("#form_item6").offset().top + 6235;
      var height6 = $("#form_item6").outerHeight();

      $(window).scroll(function(){
          if($(window).scrollTop() > (topofDiv6 + height6)){
            $('.form_item1').removeClass('navActive');
            $('.form_item2').removeClass('navActive');
            $('.form_item3').removeClass('navActive');
            $('.form_item4').removeClass('navActive');
            $('.form_item5').removeClass('navActive');
            $('.form_item6').addClass('navActive');
            $('.form_item7').removeClass('navActive');
            $('.form_item8').removeClass('navActive');
            $('.form_item9').removeClass('navActive');
            $('.form_item10').removeClass('navActive');
          }
      });

      //Fungicide
      var topofDiv7 = $("#form_item7").offset().top + 7630;
      var height7 = $("#form_item7").outerHeight();

      $(window).scroll(function(){
          if($(window).scrollTop() > (topofDiv7 + height7)){
            $('.form_item1').removeClass('navActive');
            $('.form_item2').removeClass('navActive');
            $('.form_item3').removeClass('navActive');
            $('.form_item4').removeClass('navActive');
            $('.form_item5').removeClass('navActive');
            $('.form_item6').removeClass('navActive');
            $('.form_item7').addClass('navActive');
            $('.form_item8').removeClass('navActive');
            $('.form_item9').removeClass('navActive');
            $('.form_item10').removeClass('navActive');
          }
      });

      //Sprinkler
      var topofDiv8 = $("#form_item8").offset().top + 8315;
      var height8 = $("#form_item8").outerHeight();

      $(window).scroll(function(){
          if($(window).scrollTop() > (topofDiv8 + height8)){
            $('.form_item1').removeClass('navActive');
            $('.form_item2').removeClass('navActive');
            $('.form_item3').removeClass('navActive');
            $('.form_item4').removeClass('navActive');
            $('.form_item5').removeClass('navActive');
            $('.form_item6').removeClass('navActive');
            $('.form_item7').removeClass('navActive');
            $('.form_item8').addClass('navActive');
            $('.form_item9').removeClass('navActive');
            $('.form_item10').removeClass('navActive');
          }
      });

      //YCU
      var topofDiv9 = $("#form_item9").offset().top + 12060;
      var height9 = $("#form_item9").outerHeight();

      $(window).scroll(function(){
          if($(window).scrollTop() > (topofDiv9 + height9)){
            $('.form_item1').removeClass('navActive');
            $('.form_item2').removeClass('navActive');
            $('.form_item3').removeClass('navActive');
            $('.form_item4').removeClass('navActive');
            $('.form_item5').removeClass('navActive');
            $('.form_item6').removeClass('navActive');
            $('.form_item7').removeClass('navActive');
            $('.form_item8').removeClass('navActive');
            $('.form_item9').addClass('navActive');
            $('.form_item10').removeClass('navActive');
          }
      });

      //Power Raking
      var topofDiv10 = $("#form_item10").offset().top + 15025;
      var height10 = $("#form_item10").outerHeight();

      $(window).scroll(function(){
          if($(window).scrollTop() > (topofDiv10 + height10)){
            $('.form_item1').removeClass('navActive');
            $('.form_item2').removeClass('navActive');
            $('.form_item3').removeClass('navActive');
            $('.form_item4').removeClass('navActive');
            $('.form_item5').removeClass('navActive');
            $('.form_item6').removeClass('navActive');
            $('.form_item7').removeClass('navActive');
            $('.form_item8').removeClass('navActive');
            $('.form_item9').removeClass('navActive');
            $('.form_item10').addClass('navActive');
          }
      });

    }

}); //document ready function close
