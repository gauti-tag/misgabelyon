<!--<section class="text-center mt-2">
    <input type="hidden" name="user_id" value="">
      <h3 class="welcome">Bienvenue</h3>
</section>-->
<section class="my-4" id="1">
     <div class="container-fluid">
         <div class="row">


             <div class="col-md-3 mt-4">
                 <!--<div class="sidebar-widget search">
                     <form class="search-form">
                         <input class="form-control" name="search" placeholder="Recherche" type="text">
                         <button class="search-button" type="submit">
                             <i class="bx bx-search"></i>
                         </button>
                     </form>
                 </div>-->

                <!--  -->
                 <div class="sidebar-widget categories">
                     <h3 style="text-align: center">Categories</h3>
                     <ul> <!-- style="list-style: none" -->
                         <?php // foreach ($categories as $row_category):  ?>
                         <li>
                             <a href="#<?php //echo $row_category->id; ?>"><?php //echo $row_category->name; ?> <!--<span>(<?php //if($row_category->id == 1){ echo $cle;}elseif($row_category->id == 2){ echo $cd;}elseif ($row_category->id == 3){ echo $mp3;}  ?>)</span>--></a>
                         </li>
                         <?php //endforeach;  ?>

                         <li><i class="bx bx-usb"></i><a href="#1"> Clé USB </a></li>
                         <li><i class="bx bx-disc"></i><a href="#2"> CD </a></li>
                         <li><i class="bx bx-music"></i><a href="#3"> MP3 </a></li>
                         <li><i class="bx bx-book"></i><a href="#4"> LIVRES </a></li>

                     </ul>
                 </div>
             </div>
             <div class="col-md-6">
                 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                     <ol class="carousel-indicators">
                         <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                         <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                         <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                         <?php foreach ($carousel as $row_carousel):  ?>
                         <div class="carousel-item slide">
                             <img  src="<?php echo site_url('assets/boutique/carousel/'.$row_carousel->file_boutique_carousel)  ?>" style="height: 370px" class="w-100" alt="...">
                         </div>
                         <?php endforeach;  ?>
                      <!-- <div class="carousel-item slide">
                             <img  src="<?php // echo site_url()  ?>assets/img/boutique/pexels-ron-lach-6865916.jpg" style="height: 370px" class="w-100" alt="...">
                         </div>
                         <div class="carousel-item slide">
                             <img  src="<?php //echo site_url()  ?>assets/img/boutique/pexels-ron-lach-6865916.jpg" style="height: 370px" class="w-100" alt="...">
                         </div> -->
                     </div>
                     <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                         <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                         <span class="carousel-control-next-icon" aria-hidden="true"></span>
                         <span class="sr-only">Next</span>
                     </a>
                 </div>
             </div>



             <div class="col-md-3 mt-4">

                 <div class="sidebar-widget categories">
                     <ul>
                            <!--<li><i class="bx bx-phone-call"></i>   Centre d'assistance <br>  +225 01 40 44 00 00 /<br> +33 6 44 86 69 30</li>-->
                            <li><i class="bx bx-phone-outgoing"></i>  Commandez par appel  <br> <?php foreach ($number as $row){ echo $row->number; } ?> <!--+225 01 40 44 00 00--> </li>
                     </ul>
                 </div>
             </div>
         </div>

     </div>

</section>

<section id="2">

        <div class="container">


            <span style="font-size: medium">Clé USB</span> <span style="position: absolute; right: 70px"><a href="<?php echo site_url('boutique/Boutique/products/1') ?>">Voir plus</a></span>
            <hr style="height: 2px; color: #0131B4; background-color: #0131B4; width: 100%; border: none;">
            <hr style="height: 4px; color: #0131B4; background-color: #0131B4; width: 12%; border: none; position: absolute; margin-top: 39px">

            <div class="row px-2" style="margin-bottom: 80px">

                <?php foreach ($articlesUSB as $row):  ?>

                <div class="col-md-3 col-sm-6 col-xs-12">

                    <div style="background: #FFFFFF 0% 0% no-repeat padding-box; box-shadow: 1px 1px 6px #00000036; border-radius: 10px;opacity: 1;">

                        <span style="background: #ffd700 0% 0% no-repeat padding-box;box-shadow: 6px 6px 12px #00000069;opacity: 1; position: absolute; padding: 4px 4px 2px 2px; top: 32px; left: 0.5px; border-radius: 0 3px 3px 0"><?php echo number_format($row->new_price_articles); ?><!--12 000 --> CFA</span>

                               <div style="border: 3px solid #E87F00;opacity: 1; margin-right: 20px; margin-left: 20px; margin-top: 20px">

                                  <span style="right: 22px; top: 35px; text-decoration: line-through;font: normal normal 300 10px/14px Open Sans;letter-spacing: 0px;color: #5A5A5A;opacity: 1; position: absolute; background-color: white; border-radius: 5px; font-size: 15px; padding: 2px 2px 2px 2px"><?php echo number_format($row->old_price_articles); ?><!--10 000 --> CFA</span>
                             <!-- <span style="text-align: left; font: normal normal 600 15px/20px Open Sans; letter-spacing: 0px; color: #0131B4;opacity: 0.6; position: absolute; right: 40px ; background-color: whitesmoke; border-radius: 5px; top: 140px">-30%</span>-->
                                  <a href="<?php echo site_url('boutique/Boutique/product/'.$row->id_articles) ?>"><img style="width: 100%"  src="<?php echo site_url('assets/boutique/articles/img/'.$row->file_articles)  ?>"></a>

                               </div>

                               <div class="text-center mt-2" style="font-size: 11px; font-weight: bold; padding: 7px">
                                  <?php echo $row->name_articles; ?>  <!--LA BIBLE-->
                               </div>

                                <div class="text-justify" style="margin: 10px; height: 80px">
                                  <?php echo substr($row->describe_articles,0,-170) ?>...  <!--Lorem Ipsum is simply dummy text of the printing and typesetting industry since the 1500s, when an unknown printer-->
                                </div>


                                  <div style="text-align: center; top: 20px">
                                          <button data-image="<?php echo $row->file_articles ?>" data-id="<?php echo $row->id_articles ?>" data-name="<?php echo $row->name_articles ?>" data-qty="1" data-price="<?php echo $row->new_price_articles; ?>" class="default-btn add-product" type="button">
                                              <span><i class="bx bx-basket mr-2"></i>Ajouter au panier</span>
                                          </button>
                                  </div>



                    </div>

                </div>

                <?php endforeach; ?>

              <!--  <div class="col-md-3 col-sm-6 col-xs-12">

                    <div style="background: #FFFFFF 0% 0% no-repeat padding-box; box-shadow: 1px 1px 6px #00000036; border-radius: 10px;opacity: 1;">

                        <span style="background: #ffd700 0% 0% no-repeat padding-box;box-shadow: 6px 6px 12px #00000069;opacity: 1; position: absolute; padding: 4px 4px 2px 2px; top: 32px; left: 0.5px; border-radius: 0 3px 3px 0">12 000 CFA</span>

                        <div style="border: 3px solid #E87F00;opacity: 1; margin-right: 20px; margin-left: 20px; margin-top: 20px">

                            <span style="right: 22px; top: 35px; text-decoration: line-through;font: normal normal 300 10px/14px Open Sans;letter-spacing: 0px;color: #5A5A5A;opacity: 1; position: absolute; background-color: white; border-radius: 5px; font-size: 15px; padding: 2px 2px 2px 2px">10 000 CFA</span>
                            <span style="text-align: left; font: normal normal 600 15px/20px Open Sans; letter-spacing: 0px; color: #0131B4;opacity: 0.6; position: absolute; right: 40px ; background-color: whitesmoke; border-radius: 5px; top: 140px">-30%</span>
                            <a href="#"><img style="width: 100%"  src="<?php echo site_url('') ?>assets/img/livres/gens.jpg"></a>

                        </div>

                        <div class="text-center mt-2">
                            LA BIBLE
                        </div>

                        <div class="text-justify" style="margin: 20px">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry since the 1500s, when an unknown printer
                        </div>


                        <div style="text-align: center; top: 20px">
                            <button  class="default-btn" type="submit">
                                <span><i class="bx bx-basket mr-2"></i>Ajouter au panier</span>
                            </button>
                        </div>



                    </div>

                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">

                    <div style="background: #FFFFFF 0% 0% no-repeat padding-box; box-shadow: 1px 1px 6px #00000036; border-radius: 10px;opacity: 1;">

                        <span style="background: #ffd700 0% 0% no-repeat padding-box;box-shadow: 6px 6px 12px #00000069;opacity: 1; position: absolute; padding: 4px 4px 2px 2px; top: 32px; left: 0.5px; border-radius: 0 3px 3px 0">12 000 CFA</span>

                        <div style="border: 3px solid #E87F00;opacity: 1; margin-right: 20px; margin-left: 20px; margin-top: 20px">

                            <span style="right: 22px; top: 35px; text-decoration: line-through;font: normal normal 300 10px/14px Open Sans;letter-spacing: 0px;color: #5A5A5A;opacity: 1; position: absolute; background-color: white; border-radius: 5px; font-size: 15px; padding: 2px 2px 2px 2px">10 000 CFA</span>
                            <span style="text-align: left; font: normal normal 600 15px/20px Open Sans; letter-spacing: 0px; color: #0131B4;opacity: 0.6; position: absolute; right: 40px ; background-color: whitesmoke; border-radius: 5px; top: 140px">-30%</span>
                            <a href="#"><img style="width: 100%"  src="<?php echo site_url('') ?>/assets/img/livres/jesus1.jpg"></a>

                        </div>

                        <div class="text-center mt-2">
                            LA BIBLE
                        </div>

                        <div class="text-justify" style="margin: 20px">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry since the 1500s, when an unknown printer
                        </div>


                        <div style="text-align: center; top: 20px">
                            <button  class="default-btn" type="submit">
                                <span><i class="bx bx-basket mr-2"></i>Ajouter au panier</span>
                            </button>
                        </div>



                    </div>

                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">

                    <div style="background: #FFFFFF 0% 0% no-repeat padding-box; box-shadow: 1px 1px 6px #00000036; border-radius: 10px;opacity: 1;">

                        <span style="background: #ffd700 0% 0% no-repeat padding-box;box-shadow: 6px 6px 12px #00000069;opacity: 1; position: absolute; padding: 4px 4px 2px 2px; top: 32px; left: 0.5px; border-radius: 0 3px 3px 0">12 000 CFA</span>

                        <div style="border: 3px solid #E87F00;opacity: 1; margin-right: 20px; margin-left: 20px; margin-top: 20px">
                            <span style="right: 22px; top: 35px; text-decoration: line-through;font: normal normal 300 10px/14px Open Sans;letter-spacing: 0px;color: #5A5A5A;opacity: 1; position: absolute; background-color: white; border-radius: 5px; font-size: 15px; padding: 2px 2px 2px 2px">10 000 CFA</span>
                           <span style="text-align: left; font: normal normal 600 15px/20px Open Sans; letter-spacing: 0px; color: #0131B4;opacity: 0.6; position: absolute; right: 40px ; background-color: whitesmoke; border-radius: 5px; top: 140px">-30%</span>
                            <a href="#"><img style="width: 100%"  src="<?php echo site_url('') ?>assets/img/livres/lewis.jpg"></a>
                        </div>
                        <div class="text-center mt-2">
                            LA BIBLE
                        </div>
                        <div class="text-justify" style="margin: 20px">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry since the 1500s, when an unknown printer
                        </div>
                        <div style="text-align: center; top: 20px">
                            <button  class="default-btn" type="submit">
                                <span><i class="bx bx-basket mr-2"></i>Ajouter au panier</span>
                            </button>
                        </div>

                    </div>

                </div> -->

            </div>


            <!-- =====  CD   ====--->


            <span style="font-size: medium">CD</span> <span style="position: absolute; right: 70px;"><a href="<?php echo site_url('boutique/Boutique/products/2') ?>">Voir plus</a></span>
            <hr style="height: 2px; color: #0131B4; background-color: #0131B4; width: 100%; border: none;">
            <hr style="height: 4px; color: #0131B4; background-color: #0131B4; width: 12%; border: none; position: absolute; margin-top: 39px">

            <div class="row px-2" style="margin-bottom: 80px">

                <?php foreach ($articlesCD as $row):  ?>

                    <div class="col-md-3 col-sm-6 col-xs-12">

                        <div style="background: #FFFFFF 0% 0% no-repeat padding-box; box-shadow: 1px 1px 6px #00000036; border-radius: 10px;opacity: 1;">

                            <span style="background: #ffd700 0% 0% no-repeat padding-box;box-shadow: 6px 6px 12px #00000069;opacity: 1; position: absolute; padding: 4px 4px 2px 2px; top: 32px; left: 0.5px; border-radius: 0 3px 3px 0"><?php echo number_format($row->new_price_articles); ?><!--12 000 --> CFA</span>

                            <div style="border: 3px solid #E87F00;opacity: 1; margin-right: 20px; margin-left: 20px; margin-top: 20px">

                                <span style="right: 22px; top: 35px; text-decoration: line-through;font: normal normal 300 10px/14px Open Sans;letter-spacing: 0px;color: #5A5A5A;opacity: 1; position: absolute; background-color: white; border-radius: 5px; font-size: 15px; padding: 2px 2px 2px 2px"><?php echo number_format($row->old_price_articles) ; ?><!--10 000 --> CFA</span>
                                <!-- <span style="text-align: left; font: normal normal 600 15px/20px Open Sans; letter-spacing: 0px; color: #0131B4;opacity: 0.6; position: absolute; right: 40px ; background-color: whitesmoke; border-radius: 5px; top: 140px">-30%</span>-->
                                <a href="<?php echo site_url('boutique/Boutique/product/'.$row->id_articles) ?>"><img style="width: 100%"  src="<?php echo site_url('assets/boutique/articles/img/'.$row->file_articles)  ?>"></a>

                            </div>

                            <div class="text-center mt-2" style="font-size: 11px; font-weight: bold; padding: 7px">
                                <?php echo $row->name_articles; ?>  <!--LA BIBLE-->
                            </div>

                            <div class="text-justify" style="margin: 10px; height: 80px">
                                <?php echo substr($row->describe_articles,0,-170) ?>...  <!--Lorem Ipsum is simply dummy text of the printing and typesetting industry since the 1500s, when an unknown printer-->
                            </div>


                            <div style="text-align: center; top: 20px">
                                <button data-image="<?php echo $row->file_articles ?>" data-id="<?php echo $row->id_articles ?>" data-name="<?php echo $row->name_articles ?>" data-qty="1" data-price="<?php echo $row->new_price_articles; ?>" class="default-btn add-product" type="button">
                                    <span><i class="bx bx-basket mr-2"></i>Ajouter au panier</span>
                                </button>
                            </div>



                        </div>

                    </div>

                <?php endforeach; ?>

             <!--   <div class="col-md-3 col-sm-6 col-xs-12">

                    <div style="background: #FFFFFF 0% 0% no-repeat padding-box; box-shadow: 1px 1px 6px #00000036; border-radius: 10px;opacity: 1;">

                        <span style="background: #ffd700 0% 0% no-repeat padding-box;box-shadow: 6px 6px 12px #00000069;opacity: 1; position: absolute; padding: 4px 4px 2px 2px; top: 32px; left: 0.5px; border-radius: 0 3px 3px 0">12 000 CFA</span>

                        <div style="border: 3px solid #E87F00;opacity: 1; margin-right: 20px; margin-left: 20px; margin-top: 20px">

                            <span style="right: 22px; top: 35px; text-decoration: line-through;font: normal normal 300 10px/14px Open Sans;letter-spacing: 0px;color: #5A5A5A;opacity: 1; position: absolute; background-color: white; border-radius: 5px; font-size: 15px; padding: 2px 2px 2px 2px">10 000 CFA</span>
                            <span style="text-align: left; font: normal normal 600 15px/20px Open Sans; letter-spacing: 0px; color: #0131B4;opacity: 0.6; position: absolute; right: 40px ; background-color: whitesmoke; border-radius: 5px; top: 140px">-30%</span>
                            <a href="#"><img style="width: 100%"  src="<?php //echo site_url('') ?>/assets/img/livres/la_croix_et_le_poignard.jpg"></a>

                        </div>

                        <div class="text-center mt-2">
                            LA BIBLE
                        </div>

                        <div class="text-justify" style="margin: 20px">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry since the 1500s, when an unknown printer
                        </div>


                        <div style="text-align: center; top: 20px">
                            <button  class="default-btn" type="submit">
                                <span><i class="bx bx-basket mr-2"></i>Ajouter au panier</span>
                            </button>
                        </div>



                    </div>

                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">

                    <div style="background: #FFFFFF 0% 0% no-repeat padding-box; box-shadow: 1px 1px 6px #00000036; border-radius: 10px;opacity: 1;">

                        <span style="background: #ffd700 0% 0% no-repeat padding-box;box-shadow: 6px 6px 12px #00000069;opacity: 1; position: absolute; padding: 4px 4px 2px 2px; top: 32px; left: 0.5px; border-radius: 0 3px 3px 0">12 000 CFA</span>

                        <div style="border: 3px solid #E87F00;opacity: 1; margin-right: 20px; margin-left: 20px; margin-top: 20px">

                            <span style="right: 22px; top: 35px; text-decoration: line-through;font: normal normal 300 10px/14px Open Sans;letter-spacing: 0px;color: #5A5A5A;opacity: 1; position: absolute; background-color: white; border-radius: 5px; font-size: 15px; padding: 2px 2px 2px 2px">10 000 CFA</span>
                            <span style="text-align: left; font: normal normal 600 15px/20px Open Sans; letter-spacing: 0px; color: #0131B4;opacity: 0.6; position: absolute; right: 40px ; background-color: whitesmoke; border-radius: 5px; top: 140px">-30%</span>
                            <a href="#"><img style="width: 100%"  src="<?php echo site_url('') ?>/assets/img/livres/Tactique.jpg"></a>

                        </div>

                        <div class="text-center mt-2">
                            LA BIBLE
                        </div>

                        <div class="text-justify" style="margin: 20px">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry since the 1500s, when an unknown printer
                        </div>


                        <div style="text-align: center; top: 20px">
                            <button  class="default-btn" type="submit">
                                <span><i class="bx bx-basket mr-2"></i>Ajouter au panier</span>
                            </button>
                        </div>



                    </div>

                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">

                    <div style="background: #FFFFFF 0% 0% no-repeat padding-box; box-shadow: 1px 1px 6px #00000036; border-radius: 10px;opacity: 1;">

                        <span style="background: #ffd700 0% 0% no-repeat padding-box;box-shadow: 6px 6px 12px #00000069;opacity: 1; position: absolute; padding: 4px 4px 2px 2px; top: 32px; left: 0.5px; border-radius: 0 3px 3px 0">12 000 CFA</span>

                        <div style="border: 3px solid #E87F00;opacity: 1; margin-right: 20px; margin-left: 20px; margin-top: 20px">

                            <span style="right: 22px; top: 35px; text-decoration: line-through;font: normal normal 300 10px/14px Open Sans;letter-spacing: 0px;color: #5A5A5A;opacity: 1; position: absolute; background-color: white; border-radius: 5px; font-size: 15px; padding: 2px 2px 2px 2px">10 000 CFA</span>
                            <span style="text-align: left; font: normal normal 600 15px/20px Open Sans; letter-spacing: 0px; color: #0131B4;opacity: 0.6; position: absolute; right: 40px ; background-color: whitesmoke; border-radius: 5px; top: 140px">-30%</span>
                            <a href="#"><img style="width: 100%"  src="<?php echo site_url('') ?>/assets/img/livres/que-ferait-jesus.jpg"></a>

                        </div>

                        <div class="text-center mt-2">
                            LA BIBLE
                        </div>

                        <div class="text-justify" style="margin: 20px">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry since the 1500s, when an unknown printer
                        </div>


                        <div style="text-align: center; top: 20px">
                            <button  class="default-btn" type="submit">
                                <span><i class="bx bx-basket mr-2"></i>Ajouter au panier</span>
                            </button>
                        </div>



                    </div>

                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">

                    <div style="background: #FFFFFF 0% 0% no-repeat padding-box; box-shadow: 1px 1px 6px #00000036; border-radius: 10px;opacity: 1;">

                        <span style="background: #ffd700 0% 0% no-repeat padding-box;box-shadow: 6px 6px 12px #00000069;opacity: 1; position: absolute; padding: 4px 4px 2px 2px; top: 32px; left: 0.5px; border-radius: 0 3px 3px 0">12 000 CFA</span>

                        <div style="border: 3px solid #E87F00;opacity: 1; margin-right: 20px; margin-left: 20px; margin-top: 20px">

                            <span style="right: 22px; top: 35px; text-decoration: line-through;font: normal normal 300 10px/14px Open Sans;letter-spacing: 0px;color: #5A5A5A;opacity: 1; position: absolute; background-color: white; border-radius: 5px; font-size: 15px; padding: 2px 2px 2px 2px">10 000 CFA</span>
                            <span style="text-align: left; font: normal normal 600 15px/20px Open Sans; letter-spacing: 0px; color: #0131B4;opacity: 0.6; position: absolute; right: 40px ; background-color: whitesmoke; border-radius: 5px; top: 140px">-30%</span>
                            <a href="#"><img style="width: 100%"  src="<?php echo site_url('') ?>assets/img/livres/une-vie-motivee.jpg"></a>

                        </div>

                        <div class="text-center mt-2">
                            LA BIBLE
                        </div>

                        <div class="text-justify" style="margin: 20px">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry since the 1500s, when an unknown printer
                        </div>


                        <div style="text-align: center; top: 20px">
                            <button  class="default-btn" type="submit">
                                <span><i class="bx bx-basket mr-2"></i>Ajouter au panier</span>
                            </button>
                        </div>



                    </div>

                </div> -->

            </div>


            <!-- =====  MP3   ====--->


            <span style="font-size: medium">Mp3</span> <span style="position: absolute; right: 70px;"><a href="<?php echo site_url('boutique/Boutique/products/3') ?>">Voir plus</a></span>
            <hr style="height: 2px; color: #0131B4; background-color: #0131B4; width: 100%; border: none;">
            <hr style="height: 4px; color: #0131B4; background-color: #0131B4; width: 12%; border: none; position: absolute; margin-top: 39px">

            <div class="row px-2" style="margin-bottom: 80px">

                <?php foreach ($articlesMP3 as $row):  ?>

                    <div class="col-md-3 col-sm-6 col-xs-12">

                        <div style="background: #FFFFFF 0% 0% no-repeat padding-box; box-shadow: 1px 1px 6px #00000036; border-radius: 10px;opacity: 1;">

                            <span style="background: #ffd700 0% 0% no-repeat padding-box;box-shadow: 6px 6px 12px #00000069;opacity: 1; position: absolute; padding: 4px 4px 2px 2px; top: 32px; left: 0.5px; border-radius: 0 3px 3px 0"><?php echo number_format($row->new_price_articles); ?><!--12 000 --> CFA</span>

                            <div style="border: 3px solid #E87F00;opacity: 1; margin-right: 20px; margin-left: 20px; margin-top: 20px">

                                <span style="right: 22px; top: 35px; text-decoration: line-through;font: normal normal 300 10px/14px Open Sans;letter-spacing: 0px;color: #5A5A5A;opacity: 1; position: absolute; background-color: white; border-radius: 5px; font-size: 15px; padding: 2px 2px 2px 2px"><?php echo number_format($row->old_price_articles); ?><!--10 000 --> CFA</span>
                                <!-- <span style="text-align: left; font: normal normal 600 15px/20px Open Sans; letter-spacing: 0px; color: #0131B4;opacity: 0.6; position: absolute; right: 40px ; background-color: whitesmoke; border-radius: 5px; top: 140px">-30%</span>-->
                                <a href="<?php echo site_url('boutique/Boutique/product/'.$row->id_articles) ?>"><img style="width: 100%"  src="<?php echo site_url('assets/boutique/articles/img/'.$row->file_articles)  ?>"></a>

                            </div>

                            <div class="text-center mt-2" style="font-size: 11px; font-weight: bold; padding: 7px">
                                <?php echo $row->name_articles; ?>  <!--LA BIBLE-->
                            </div>

                            <div class="text-justify" style="margin: 10px; height: 80px">
                                <?php echo substr($row->describe_articles,0,-170) ?>...  <!--Lorem Ipsum is simply dummy text of the printing and typesetting industry since the 1500s, when an unknown printer-->
                            </div>


                            <div style="text-align: center; top: 20px">
                                <button data-image="<?php echo $row->file_articles ?>" data-id="<?php echo $row->id_articles ?>" data-name="<?php echo $row->name_articles ?>" data-qty="1" data-price="<?php echo $row->new_price_articles; ?>" class="default-btn add-product" type="button">
                                    <span><i class="bx bx-basket mr-2"></i>Ajouter au panier</span>
                                </button>
                            </div>



                        </div>

                    </div>

                <?php endforeach; ?>

            <!--    <div class="col-md-3 col-sm-6 col-xs-12">

                    <div style="background: #FFFFFF 0% 0% no-repeat padding-box; box-shadow: 1px 1px 6px #00000036; border-radius: 10px;opacity: 1;">

                        <span style="background: #ffd700 0% 0% no-repeat padding-box;box-shadow: 6px 6px 12px #00000069;opacity: 1; position: absolute; padding: 4px 4px 2px 2px; top: 32px; left: 0.5px; border-radius: 0 3px 3px 0">12 000 CFA</span>

                        <div style="border: 3px solid #E87F00;opacity: 1; margin-right: 20px; margin-left: 20px; margin-top: 20px">

                            <span style="right: 22px; top: 35px; text-decoration: line-through;font: normal normal 300 10px/14px Open Sans;letter-spacing: 0px;color: #5A5A5A;opacity: 1; position: absolute; background-color: white; border-radius: 5px; font-size: 15px; padding: 2px 2px 2px 2px">10 000 CFA</span>
                            <span style="text-align: left; font: normal normal 600 15px/20px Open Sans; letter-spacing: 0px; color: #0131B4;opacity: 0.6; position: absolute; right: 40px ; background-color: whitesmoke; border-radius: 5px; top: 140px">-30%</span>
                            <a href="#"><img style="width: 100%"  src="<?php //echo site_url('') ?>/assets/img/livres/la_croix_et_le_poignard.jpg"></a>

                        </div>

                        <div class="text-center mt-2">
                            LA BIBLE
                        </div>

                        <div class="text-justify" style="margin: 20px">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry since the 1500s, when an unknown printer
                        </div>


                        <div style="text-align: center; top: 20px">
                            <button  class="default-btn" type="submit">
                                <span><i class="bx bx-basket mr-2"></i>Ajouter au panier</span>
                            </button>
                        </div>



                    </div>

                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">

                    <div style="background: #FFFFFF 0% 0% no-repeat padding-box; box-shadow: 1px 1px 6px #00000036; border-radius: 10px;opacity: 1;">

                        <span style="background: #ffd700 0% 0% no-repeat padding-box;box-shadow: 6px 6px 12px #00000069;opacity: 1; position: absolute; padding: 4px 4px 2px 2px; top: 32px; left: 0.5px; border-radius: 0 3px 3px 0">12 000 CFA</span>

                        <div style="border: 3px solid #E87F00;opacity: 1; margin-right: 20px; margin-left: 20px; margin-top: 20px">

                            <span style="right: 22px; top: 35px; text-decoration: line-through;font: normal normal 300 10px/14px Open Sans;letter-spacing: 0px;color: #5A5A5A;opacity: 1; position: absolute; background-color: white; border-radius: 5px; font-size: 15px; padding: 2px 2px 2px 2px">10 000 CFA</span>
                            <span style="text-align: left; font: normal normal 600 15px/20px Open Sans; letter-spacing: 0px; color: #0131B4;opacity: 0.6; position: absolute; right: 40px ; background-color: whitesmoke; border-radius: 5px; top: 140px">-30%</span>
                            <a href="#"><img style="width: 100%"  src="<?php echo site_url('') ?>/assets/img/livres/Tactique.jpg"></a>

                        </div>

                        <div class="text-center mt-2">
                            LA BIBLE
                        </div>

                        <div class="text-justify" style="margin: 20px">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry since the 1500s, when an unknown printer
                        </div>


                        <div style="text-align: center; top: 20px">
                            <button  class="default-btn" type="submit">
                                <span><i class="bx bx-basket mr-2"></i>Ajouter au panier</span>
                            </button>
                        </div>



                    </div>

                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">

                    <div style="background: #FFFFFF 0% 0% no-repeat padding-box; box-shadow: 1px 1px 6px #00000036; border-radius: 10px;opacity: 1;">

                        <span style="background: #ffd700 0% 0% no-repeat padding-box;box-shadow: 6px 6px 12px #00000069;opacity: 1; position: absolute; padding: 4px 4px 2px 2px; top: 32px; left: 0.5px; border-radius: 0 3px 3px 0">12 000 CFA</span>

                        <div style="border: 3px solid #E87F00;opacity: 1; margin-right: 20px; margin-left: 20px; margin-top: 20px">

                            <span style="right: 22px; top: 35px; text-decoration: line-through;font: normal normal 300 10px/14px Open Sans;letter-spacing: 0px;color: #5A5A5A;opacity: 1; position: absolute; background-color: white; border-radius: 5px; font-size: 15px; padding: 2px 2px 2px 2px">10 000 CFA</span>
                            <span style="text-align: left; font: normal normal 600 15px/20px Open Sans; letter-spacing: 0px; color: #0131B4;opacity: 0.6; position: absolute; right: 40px ; background-color: whitesmoke; border-radius: 5px; top: 140px">-30%</span>
                            <a href="#"><img style="width: 100%"  src="<?php echo site_url('') ?>/assets/img/livres/que-ferait-jesus.jpg"></a>

                        </div>

                        <div class="text-center mt-2">
                            LA BIBLE
                        </div>

                        <div class="text-justify" style="margin: 20px">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry since the 1500s, when an unknown printer
                        </div>


                        <div style="text-align: center; top: 20px">
                            <button  class="default-btn" type="submit">
                                <span><i class="bx bx-basket mr-2"></i>Ajouter au panier</span>
                            </button>
                        </div>



                    </div>

                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">

                    <div style="background: #FFFFFF 0% 0% no-repeat padding-box; box-shadow: 1px 1px 6px #00000036; border-radius: 10px;opacity: 1;">

                        <span style="background: #ffd700 0% 0% no-repeat padding-box;box-shadow: 6px 6px 12px #00000069;opacity: 1; position: absolute; padding: 4px 4px 2px 2px; top: 32px; left: 0.5px; border-radius: 0 3px 3px 0">12 000 CFA</span>

                        <div style="border: 3px solid #E87F00;opacity: 1; margin-right: 20px; margin-left: 20px; margin-top: 20px">

                            <span style="right: 22px; top: 35px; text-decoration: line-through;font: normal normal 300 10px/14px Open Sans;letter-spacing: 0px;color: #5A5A5A;opacity: 1; position: absolute; background-color: white; border-radius: 5px; font-size: 15px; padding: 2px 2px 2px 2px">10 000 CFA</span>
                            <span style="text-align: left; font: normal normal 600 15px/20px Open Sans; letter-spacing: 0px; color: #0131B4;opacity: 0.6; position: absolute; right: 40px ; background-color: whitesmoke; border-radius: 5px; top: 140px">-30%</span>
                            <a href="#"><img style="width: 100%"  src="<?php echo site_url('') ?>assets/img/livres/une-vie-motivee.jpg"></a>

                        </div>

                        <div class="text-center mt-2">
                            LA BIBLE
                        </div>

                        <div class="text-justify" style="margin: 20px">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry since the 1500s, when an unknown printer
                        </div>


                        <div style="text-align: center; top: 20px">
                            <button  class="default-btn" type="submit">
                                <span><i class="bx bx-basket mr-2"></i>Ajouter au panier</span>
                            </button>
                        </div>



                    </div>

                </div> -->

            </div>


            <!-- =====  LIVRE   ====--->


            <span style="font-size: medium">LIVRES</span> <span style="position: absolute; right: 70px;"><a href="<?php echo site_url('boutique/Boutique/products/4') ?>">Voir plus</a></span>
            <hr style="height: 2px; color: #0131B4; background-color: #0131B4; width: 100%; border: none;">
            <hr style="height: 4px; color: #0131B4; background-color: #0131B4; width: 12%; border: none; position: absolute; margin-top: 39px">

            <div class="row px-2" style="margin-bottom: 80px">

                <?php foreach ($articlesBook as $row):  ?>

                    <div class="col-md-3 col-sm-6 col-xs-12">

                        <div style="background: #FFFFFF 0% 0% no-repeat padding-box; box-shadow: 1px 1px 6px #00000036; border-radius: 10px;opacity: 1;">

                            <span style="background: #ffd700 0% 0% no-repeat padding-box;box-shadow: 6px 6px 12px #00000069;opacity: 1; position: absolute; padding: 4px 4px 2px 2px; top: 32px; left: 0.5px; border-radius: 0 3px 3px 0"><?php echo number_format($row->new_price_articles); ?><!--12 000 --> CFA</span>

                            <div style="border: 3px solid #E87F00;opacity: 1; margin-right: 20px; margin-left: 20px; margin-top: 20px">

                                <span style="right: 22px; top: 35px; text-decoration: line-through;font: normal normal 300 10px/14px Open Sans;letter-spacing: 0px;color: #5A5A5A;opacity: 1; position: absolute; background-color: white; border-radius: 5px; font-size: 15px; padding: 2px 2px 2px 2px"><?php echo number_format($row->old_price_articles); ?><!--10 000 --> CFA</span>
                                <!-- <span style="text-align: left; font: normal normal 600 15px/20px Open Sans; letter-spacing: 0px; color: #0131B4;opacity: 0.6; position: absolute; right: 40px ; background-color: whitesmoke; border-radius: 5px; top: 140px">-30%</span>-->
                                <a href="<?php echo site_url('boutique/Boutique/product/'.$row->id_articles) ?>"><img style="width: 100%"  src="<?php echo site_url('assets/boutique/articles/img/'.$row->file_articles)  ?>"></a>

                            </div>

                            <div class="text-center mt-2" style="font-size: 11px; font-weight: bold; padding: 7px">
                                <?php echo $row->name_articles; ?>  <!--LA BIBLE-->
                            </div>

                            <div class="text-justify" style="margin: 10px; height: 80px">
                                <?php echo substr($row->describe_articles,0,-170) ?>...  <!--Lorem Ipsum is simply dummy text of the printing and typesetting industry since the 1500s, when an unknown printer-->
                            </div>


                            <div style="text-align: center; top: 20px">
                                <button data-image="<?php echo $row->file_articles ?>" data-id="<?php echo $row->id_articles ?>" data-name="<?php echo $row->name_articles ?>" data-qty="1" data-price="<?php echo $row->new_price_articles; ?>" class="default-btn add-product" type="button">
                                    <span><i class="bx bx-basket mr-2"></i>Ajouter au panier</span>
                                </button>
                            </div>



                        </div>

                    </div>

                <?php endforeach; ?>

                <!--    <div class="col-md-3 col-sm-6 col-xs-12">

                    <div style="background: #FFFFFF 0% 0% no-repeat padding-box; box-shadow: 1px 1px 6px #00000036; border-radius: 10px;opacity: 1;">

                        <span style="background: #ffd700 0% 0% no-repeat padding-box;box-shadow: 6px 6px 12px #00000069;opacity: 1; position: absolute; padding: 4px 4px 2px 2px; top: 32px; left: 0.5px; border-radius: 0 3px 3px 0">12 000 CFA</span>

                        <div style="border: 3px solid #E87F00;opacity: 1; margin-right: 20px; margin-left: 20px; margin-top: 20px">

                            <span style="right: 22px; top: 35px; text-decoration: line-through;font: normal normal 300 10px/14px Open Sans;letter-spacing: 0px;color: #5A5A5A;opacity: 1; position: absolute; background-color: white; border-radius: 5px; font-size: 15px; padding: 2px 2px 2px 2px">10 000 CFA</span>
                            <span style="text-align: left; font: normal normal 600 15px/20px Open Sans; letter-spacing: 0px; color: #0131B4;opacity: 0.6; position: absolute; right: 40px ; background-color: whitesmoke; border-radius: 5px; top: 140px">-30%</span>
                            <a href="#"><img style="width: 100%"  src="<?php //echo site_url('') ?>/assets/img/livres/la_croix_et_le_poignard.jpg"></a>

                        </div>

                        <div class="text-center mt-2">
                            LA BIBLE
                        </div>

                        <div class="text-justify" style="margin: 20px">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry since the 1500s, when an unknown printer
                        </div>


                        <div style="text-align: center; top: 20px">
                            <button  class="default-btn" type="submit">
                                <span><i class="bx bx-basket mr-2"></i>Ajouter au panier</span>
                            </button>
                        </div>



                    </div>

                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">

                    <div style="background: #FFFFFF 0% 0% no-repeat padding-box; box-shadow: 1px 1px 6px #00000036; border-radius: 10px;opacity: 1;">

                        <span style="background: #ffd700 0% 0% no-repeat padding-box;box-shadow: 6px 6px 12px #00000069;opacity: 1; position: absolute; padding: 4px 4px 2px 2px; top: 32px; left: 0.5px; border-radius: 0 3px 3px 0">12 000 CFA</span>

                        <div style="border: 3px solid #E87F00;opacity: 1; margin-right: 20px; margin-left: 20px; margin-top: 20px">

                            <span style="right: 22px; top: 35px; text-decoration: line-through;font: normal normal 300 10px/14px Open Sans;letter-spacing: 0px;color: #5A5A5A;opacity: 1; position: absolute; background-color: white; border-radius: 5px; font-size: 15px; padding: 2px 2px 2px 2px">10 000 CFA</span>
                            <span style="text-align: left; font: normal normal 600 15px/20px Open Sans; letter-spacing: 0px; color: #0131B4;opacity: 0.6; position: absolute; right: 40px ; background-color: whitesmoke; border-radius: 5px; top: 140px">-30%</span>
                            <a href="#"><img style="width: 100%"  src="<?php echo site_url('') ?>/assets/img/livres/Tactique.jpg"></a>

                        </div>

                        <div class="text-center mt-2">
                            LA BIBLE
                        </div>

                        <div class="text-justify" style="margin: 20px">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry since the 1500s, when an unknown printer
                        </div>


                        <div style="text-align: center; top: 20px">
                            <button  class="default-btn" type="submit">
                                <span><i class="bx bx-basket mr-2"></i>Ajouter au panier</span>
                            </button>
                        </div>



                    </div>

                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">

                    <div style="background: #FFFFFF 0% 0% no-repeat padding-box; box-shadow: 1px 1px 6px #00000036; border-radius: 10px;opacity: 1;">

                        <span style="background: #ffd700 0% 0% no-repeat padding-box;box-shadow: 6px 6px 12px #00000069;opacity: 1; position: absolute; padding: 4px 4px 2px 2px; top: 32px; left: 0.5px; border-radius: 0 3px 3px 0">12 000 CFA</span>

                        <div style="border: 3px solid #E87F00;opacity: 1; margin-right: 20px; margin-left: 20px; margin-top: 20px">

                            <span style="right: 22px; top: 35px; text-decoration: line-through;font: normal normal 300 10px/14px Open Sans;letter-spacing: 0px;color: #5A5A5A;opacity: 1; position: absolute; background-color: white; border-radius: 5px; font-size: 15px; padding: 2px 2px 2px 2px">10 000 CFA</span>
                            <span style="text-align: left; font: normal normal 600 15px/20px Open Sans; letter-spacing: 0px; color: #0131B4;opacity: 0.6; position: absolute; right: 40px ; background-color: whitesmoke; border-radius: 5px; top: 140px">-30%</span>
                            <a href="#"><img style="width: 100%"  src="<?php echo site_url('') ?>/assets/img/livres/que-ferait-jesus.jpg"></a>

                        </div>

                        <div class="text-center mt-2">
                            LA BIBLE
                        </div>

                        <div class="text-justify" style="margin: 20px">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry since the 1500s, when an unknown printer
                        </div>


                        <div style="text-align: center; top: 20px">
                            <button  class="default-btn" type="submit">
                                <span><i class="bx bx-basket mr-2"></i>Ajouter au panier</span>
                            </button>
                        </div>



                    </div>

                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">

                    <div style="background: #FFFFFF 0% 0% no-repeat padding-box; box-shadow: 1px 1px 6px #00000036; border-radius: 10px;opacity: 1;">

                        <span style="background: #ffd700 0% 0% no-repeat padding-box;box-shadow: 6px 6px 12px #00000069;opacity: 1; position: absolute; padding: 4px 4px 2px 2px; top: 32px; left: 0.5px; border-radius: 0 3px 3px 0">12 000 CFA</span>

                        <div style="border: 3px solid #E87F00;opacity: 1; margin-right: 20px; margin-left: 20px; margin-top: 20px">

                            <span style="right: 22px; top: 35px; text-decoration: line-through;font: normal normal 300 10px/14px Open Sans;letter-spacing: 0px;color: #5A5A5A;opacity: 1; position: absolute; background-color: white; border-radius: 5px; font-size: 15px; padding: 2px 2px 2px 2px">10 000 CFA</span>
                            <span style="text-align: left; font: normal normal 600 15px/20px Open Sans; letter-spacing: 0px; color: #0131B4;opacity: 0.6; position: absolute; right: 40px ; background-color: whitesmoke; border-radius: 5px; top: 140px">-30%</span>
                            <a href="#"><img style="width: 100%"  src="<?php echo site_url('') ?>assets/img/livres/une-vie-motivee.jpg"></a>

                        </div>

                        <div class="text-center mt-2">
                            LA BIBLE
                        </div>

                        <div class="text-justify" style="margin: 20px">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry since the 1500s, when an unknown printer
                        </div>


                        <div style="text-align: center; top: 20px">
                            <button  class="default-btn" type="submit">
                                <span><i class="bx bx-basket mr-2"></i>Ajouter au panier</span>
                            </button>
                        </div>



                    </div>

                </div> -->

            </div>


        </div>



</section>

    <!--====================================== Modal ========================================================-->


<!--<div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Panier</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="show-cart table">

                </table>
                <div>Total prix: <span class="total-cart"></span> f CFA</div>
            </div>
            <div class="modal-footer">
                <button type="button" style="background-color: #ffd700" class="default-btn clear-cart" data-dismiss="modal"><span>Vider</span></button>
                <button type="button" class="default-btn submit-command"><span>Commander</span></button>
            </div>
        </div>
    </div>
</div> -->

<!--<div class="modal fade" id="conditions" tabindex="-1" aria-labelledby="conditionsLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="border: 5px solid #ffd700;">
            <div class="modal-header">
                <h3 class="modal-title" id="conditionsLabel">« Sous le figuier »: Conditions de participation et mentions </h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">



            </div>

        </div>
    </div>
</div> -->