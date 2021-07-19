
/*$(document).ready(function () {



    filter_data();

    function filter_data() {

        $('#filter_data').html("<div id='loading'></div>");

        var categories = get_filter('categories');


        $.ajax({

            url: sUrl + "boutique/Mp3/fetch_data",
            method: "POST",
            dataType: 'JSON',
            data: {categories: categories},
            success: function (data) {

                console.log(data);


            }

        });

    }




      function get_filter(class_name)
        {
            var filter = [];

            $('.'+class_name+':checked').each(function (){
                filter.push($(this).val());
            })

            return filter;
        }


})*/

/* $('.filter').change(function () {

     $('.result').each(function () {

      var category = $(this).data('category');

      var visible = $('input.filter[data-category="'+category+'"]:checked').length > 0;

      if(visible)
      {
          $(this).show();

      }else{

          $(this).hide();
      }


      if($('input.filter:checked').length === 0)
      {
          $('.result').show();
      }


      }

  })*/





  $(document).ready(function () {

      //alert('okay');

      $('.filter').change(function () {

          //  let filter = $(this).val();
          //  console.log(filter);
           article()
      })
  })



  function article()
  {
      let category = $('.category').val();

      $.ajax({

          url: sUrl + 'boutique/Mp3/load_articles_mp3',
          method: 'POST',
          data: 'category ='+ category,
          success: function (data)
          {
              console.log(data);
           //  $('#articles').html(data);

          }


      })
  }