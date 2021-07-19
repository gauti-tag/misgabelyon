

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aplayer/1.10.1/APlayer.min.css"/>

        <style>
                  .img-poster{

                      width: 100%;
                      max-height: 200px;

                  }
                  .col-lg-3{

                      padding-bottom: 40px;
                  }

                  .album-poster{
                      position: relative;
                      display: block;
                      border-radius: 7px;
                      overflow: hidden;
                      box-shadow: 0 15px 30px #3d2173a1;
                      transition: all ease 0.4s;
                  }

                  .album-poster:hover{

                      box-shadow: none;
                      transform: scale(0.98) translateY(5px);

                  }
                  .sous-titre{

                      text-align: center;

                  }
                  .back-shape
                  {

                     color: #0131B4;
                      text-align: left;
                  }
               /*   #aplayer{

                      position: fixed;
                      bottom: 554px;
                      bottom: 554px;
                      left: 0;
                      width: 100%;
                      margin: 0;
                      box-shadow: 0 -2px 2px #dadada;
                      background-color: #fff;
                      transition: all ease 0.5s;

                  }*/


        </style>

    </head>
    <body>

    <!-- Start Causes Area -->
    <section class="causes-area pt-100 pb-70" style="background-color: #f7f7f7; background-image: none">
        <div class="container">
            <div class="section-title">
                <span></span>
                <h2>Livre numérique</h2>
                <p> </p>
            </div>

            <div class="row">

                <div class="col-lg-3 col-md-4">
                    <div class="single-causes-box">
                          <a href="#()" class="album-poster" data-switch="0">
                              <img class="img-poster" src="<?php echo site_url(); ?>assets/img/sons/son1.jpg" alt="Image">
                          </a>
                        <div class="back-shape">
                            <h3>
                                title
                            </h3>
                            <p class="sous-titre"></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="single-causes-box">
                        <a href="#" class="album-poster" data-switch="1">
                            <img class="img-poster" src="<?php echo site_url(); ?>assets/img/sons/son2.jpg" alt="Image"></a>
                        <div class="back-shape">
                            <h3>
                                title
                            </h3>
                            <p class="sous-titre"></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="single-causes-box">
                        <a href="#" class="album-poster" data-switch="2">
                            <img class="img-poster" src="<?php echo site_url(); ?>assets/img/sons/son3.jpg" alt="Image">
                        </a>
                        <div class="back-shape">
                            <h3>
                                title
                            </h3>
                            <p class="sous-titre"></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="single-causes-box">
                        <a href="#" class="album-poster" data-switch="3">
                            <img class="img-poster" src="<?php echo site_url(); ?>assets/img/sons/pexels6.jpg" alt="Image">
                        </a>
                        <div class="back-shape">
                            <h3>
                                title
                            </h3>
                            <p class="sous-titre"></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div id="aplayer">


        </div>

    </section>
    <!-- End Causes Area -->



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aplayer/1.10.1/APlayer.min.js"></script>


    <script>


            //when I click to have song ID

        $('.album-poster').on('click', function (){

            var dataSwitchId = $(this).attr('data-switch');
            console.log(dataSwitchId);

            // I use aplayer switch list function see
            ap.list.switch(dataSwitchId);

            // aplayer play function when i click to play the song

            ap.play();
            // click to slideUp player see
            $('#aplayer').addClass('showPlayer');



        });

        const ap = new APlayer({

            container: document.getElementById('aplayer'),
            listFolded: true,
            fixed: true,
            theme: '#FADFA3',
            audio: [{
                name: 'test',
                artist: 'test_artist',
                url: 'http://127.0.0.1/ngser-misgabelyon/assets/sons/gova.mp3',
                cover: 'http://127.0.0.1/ngser-misgabelyon/assets/img/sons/son1.jpg'
            },
                {
                name: 'test2',
                artist: 'test_artist2',
                url: 'http://127.0.0.1/ngser-misgabelyon/assets/sons/yori.mp3',
                cover: 'http://127.0.0.1/ngser-misgabelyon/assets/img/sons/son2.jpg'
            },
                {
                    name: 'test3',
                    artist: 'test_artist3',
                    url: 'http://127.0.0.1/ngser-misgabelyon/assets/sons/yori.mp3',
                    cover: 'http://127.0.0.1/ngser-misgabelyon/assets/img/sons/son3.jpg'
                },
                    {
                        name: 'test6',
                        artist: 'test_artist6',
                        url: 'http://127.0.0.1/ngser-misgabelyon/assets/sons/yori.mp3',
                        cover: 'http://127.0.0.1/ngser-misgabelyon/assets/img/sons/pexels6.jpg'
                    }



            ]
        });



    </script>

    </body>
    </html>





