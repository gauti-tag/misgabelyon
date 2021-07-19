

$(function () {

    $('.date-slide').addClass('hidden');

      $('#slide').change(function () {

          let slide = '';

          slide = $('#slide').val();

          if(slide === '3')
          {
              //console.log('success slide 3');
              $('.date-slide').removeClass('hidden');

          }else{

              $('.date-slide').addClass('hidden');
          }

      })




    // console.log('slide okay');
    // alert('slide okay');

})