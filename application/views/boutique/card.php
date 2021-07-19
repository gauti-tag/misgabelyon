

<section class="mt-30">
     <div class="container">

         <table style="margin-left: auto; margin-right: auto; /*border-collapse: separate; border-spacing: 10px 1px;*/">

             <?php  if($views):  ?>

             <?php  foreach ($views as $row):  ?>

             <?php  //var_dump($row);  ?>

             <tr class="mb-30" style="background: #FFFFFF 0% 0% no-repeat padding-box;box-shadow: 0px 0px 3px #00000029;border: 1px solid #DDAF01;border-radius: 10px;opacity: 1;">

                 <td class="image-programme-display-phone" style="border: 1px solid #DDAF01;border-radius: 10px;opacity: 1;">
                     <table>
                         <tr>
                             <td>
                                 <img style="padding: 5px; width: 100px" src="<?php echo site_url('assets/boutique/articles/img/'.$row['image']) ?>">
                             </td>
                         </tr>
                     </table>
                 </td>

                 <td style="border: 1px solid #DDAF01;border-radius: 10px;opacity: 1;padding: 20px">
                     <table>
                         <tr>
                             <td> <div class="mb-3" style="font-size: 13px; font-weight: bold"><?php echo $row['name'] ?></div></td>
                         </tr>
                         <tr>
                            <!-- <td> <div style="margin: 5px">
                                     <a href="#">
                                         <span style="color: white"><i style="font-size: 20px; color: white" class="bx bx-heart mr-1"></i>Mettre de côté</span>
                                     </a>
                                 </div>
                             </td> -->
                             <td>
                                 <div style="margin: 5px">
                                  <!--   <a class="remove_item" "> -->
                                         <button type="button" class="remove_item btn btn-adn" id="<?php echo $row['rowid'] ?>">
                                             <span><i style="font-size: 20px" class="bx bx-trash mr-1"></i>Supprimer</span>
                                         </button>

                                 <!--     </a> -->
                                 </div>
                             </td>
                         </tr>
                     </table>
                    <!-- <div style="display: flex; flex-direction: row">
                     </div> -->
                 </td>
                 <td style="border: 1px solid #DDAF01;border-radius: 10px;opacity: 1; text-align: center">

                     <table class="mx-auto">
                         <tr>
                             <td><div class="mb-3" style="font-size: 20px">Quantité </div></td>

                         </tr>
                         <tr>
                             <td>
                                 <div class="qty mt-1 mx-auto" style="text-align: center">
                                    <!-- <span style="display: none" class="minus bg-light">-</span>-->
                                         <input type="text" class="count" name="qty" value="<?php echo $row['qty']  ?>">
                                    <!-- <span style="display: none" class="plus bg-light">+</span>-->
                                 </div>
                             </td>
                         </tr>
                     </table>

                 </td>

                 <td style="border: 1px solid #DDAF01;border-radius: 10px;opacity: 1; text-align: center; padding: 20px">

                     <table>
                         <tr>
                             <td>
                                 <div class="mb-1" style="font-size: 20px">Prix unitaire</div>
                             </td>
                         </tr>
                         <tr>
                             <td>
                                 <div style="border: 1px solid #5A5A5A;border-radius: 5px;opacity: 1; padding: 5px"><?php echo number_format($row['price']) ?> CFA</div>
                             </td>
                         </tr>
                         <tr>
                             <td style="color: white">
                                 <div class="mt-2" style="text-decoration: line-through">12 000 CFA</div>
                             </td>
                         </tr>
                     </table>


                 </td>

                 <td style="border: 1px solid #DDAF01;border-radius: 10px;opacity: 1; text-align: center; padding: 20px">

                     <table>
                         <tr>
                             <td>
                                 <div class="mb-3" style="font-size: 20px">
                                     Sous-total
                                 </div>
                             </td>
                         </tr>
                         <tr>
                             <td>
                                 <div>
                                     <span style="font-size: 20px; font-weight: bold"><?php echo number_format($row['subtotal']) ?><!--10 000--> CFA</span>
                                 </div>
                             </td>
                         </tr>
                     </table>




                 </td>
             </tr>

             <?php endforeach; ?>

             <?php else:  ?>

               <tr> <td style="font-weight: bold; font-size: large">Aucun article dans la panier</td> </tr>

             <?php endif;  ?>


         <!--    <tr style="background: #FFFFFF 0% 0% no-repeat padding-box;box-shadow: 0px 0px 3px #00000029;border: 1px solid #DDAF01;border-radius: 10px;opacity: 1;">

                 <td style="border: 1px solid #DDAF01;border-radius: 10px;opacity: 1;">
                     <table>
                         <tr>
                             <td>
                                 <img style="padding: 10px; width: 170px" src="<?php  //echo site_url() ?>assets/img/livres/Tactique.jpg">
                             </td>
                         </tr>
                     </table>
                 </td>

                 <td style="border: 1px solid #DDAF01;border-radius: 10px;opacity: 1;padding: 20px">
                     <table>
                         <tr>
                             <td> <div class="mb-3" style="font-size: 20px">LA BIBLE</div></td>
                         </tr>
                         <tr>
                             <td> <div style="margin: 5px">
                                     <a href="<?php  //echo site_url('boutique/Boutique/card')  ?>">
                                         <span><i style="font-size: 20px" class="bx bx-heart mr-1"></i>Mettre de côté</span>
                                     </a>
                                 </div>
                             </td>
                             <td>
                                 <div style="margin: 5px">
                                     <a href="<?php // echo site_url('boutique/Boutique/card')  ?>">
                                         <span><i style="font-size: 20px" class="bx bx-trash mr-1"></i>Mettre de côté</span>
                                     </a>
                                 </div>
                             </td>
                         </tr>
                     </table>

                     <div style="display: flex; flex-direction: row">

                      </div>


                 </td>
                 <td style="border: 1px solid #DDAF01;border-radius: 10px;opacity: 1; text-align: center">

                     <table>
                         <tr>
                             <td><div class="mb-3" style="font-size: 20px">Quantité </div></td>
                         </tr>
                         <tr>
                             <td>
                                 <div class="qty mt-1">
                                     <span class="minus bg-light">-</span>
                                     <input type="number" class="count" name="qty" value="1">
                                     <span class="plus bg-light">+</span>
                                 </div>
                             </td>
                         </tr>
                     </table>

                 </td>

                 <td style="border: 1px solid #DDAF01;border-radius: 10px;opacity: 1; text-align: center; padding: 20px">

                     <table>
                         <tr>
                             <td>
                                 <div class="mb-1" style="font-size: 20px">Prix unitaire</div>
                             </td>
                         </tr>
                         <tr>
                             <td>
                                 <div style="border: 1px solid #5A5A5A;border-radius: 5px;opacity: 1; padding: 5px">10 000 CFA</div>
                             </td>
                         </tr>
                         <tr>
                             <td>
                                 <div class="mt-2" style="text-decoration: line-through">12 000 CFA</div>
                             </td>
                         </tr>
                     </table>


                 </td>

                 <td style="border: 1px solid #DDAF01;border-radius: 10px;opacity: 1; text-align: center; padding: 20px">

                     <table>
                         <tr>
                             <td>
                                 <div class="mb-3" style="font-size: 20px">
                                     Sous-total
                                 </div>
                             </td>
                         </tr>
                         <tr>
                             <td>
                                 <div>
                                     <span style="font-size: 20px; font-weight: bold">10 000 CFA</span>
                                 </div>
                             </td>
                         </tr>
                     </table>




                 </td>
             </tr> -->

         </table>

         <br>
         <br>

         <div class="row">

             <div class="col-md-8 hidden-xs">

             </div>

             <div class="col-md-4 totalcenter" style="font-size: 25px">
                 <span> TOTAL : </span><?php echo number_format($total,2,',',' ');  ?>  CFA
             </div>


         </div>

         <div class="row">

             <div class="col-md-8">

             </div>

             <div class="col-md-4">
             <!--    Frais de livraison non inclus pour le moment -->
             </div>

         </div>
         <br>
         <div class="row head-button-submit-cart">
             <div class="col-md-7 hidden-xs"></div>
             <div class="col-md-2 col-xs-12 button-submit-cart">
                 <a href="<?php echo site_url('boutique'); ?>">
                     <button  class="default-btn" type="submit">
                         <span>Poursuivre vos achats</span>
                     </button>
                 </a>
             </div>
             <input type="hidden" id="actionButton" value="<?php echo $totalItems ?>">
             <div class="col-md-2 col-xs-12 button-submit-cart">
                 <a id="btn-command"  href="<?php echo site_url('boutique/informations-supplementaires');  ?>">
                     <button class="default-btn" type="submit">
                         <span>Finalisez la commande</span>
                     </button>
                 </a>

             </div>
             <div class="col-md-1 hidden-xs">

             </div>
         </div>

     </div>

</section>

<input type="hidden" id="items" value="<?php echo $totalItems ?>">

<section class="mt-30">

    <div class="container">


        <span style="font-size: medium">Vos articles vus récemment</span> <!--<span style="position: absolute; right: 70px"><a href="#">Voir plus</a></span>-->
        <hr style="height: 2px; color: #0131B4; background-color: #0131B4; width: 100%; border: none;">
        <hr style="height: 4px; color: #0131B4; background-color: #0131B4; width: 12%; border: none; position: absolute; margin-top: 39px">

        <div class="row px-2" style="margin-bottom: 80px">

            <?php foreach ($recentArticleView as $row):  ?>

                <div class="col-md-3 col-sm-6 col-xs-12">

                    <div style="background: #FFFFFF 0% 0% no-repeat padding-box; box-shadow: 1px 1px 6px #00000036; border-radius: 10px;opacity: 1;">

                        <span style="background: #ffd700 0% 0% no-repeat padding-box;box-shadow: 6px 6px 12px #00000069;opacity: 1; position: absolute; padding: 4px 4px 2px 2px; top: 32px; left: 0.5px; border-radius: 0 3px 3px 0"><?php echo $row->new_price_articles; ?><!--12 000 --> CFA</span>

                        <div style="border: 3px solid #E87F00;opacity: 1; margin-right: 20px; margin-left: 20px; margin-top: 20px">

                            <span style="right: 22px; top: 35px; text-decoration: line-through;font: normal normal 300 10px/14px Open Sans;letter-spacing: 0px;color: #5A5A5A;opacity: 1; position: absolute; background-color: white; border-radius: 5px; font-size: 15px; padding: 2px 2px 2px 2px"><?php echo $row->old_price_articles; ?><!--10 000 --> CFA</span>
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
                        <a href="<?php echo site_url('boutique/Boutique/product')  ?>"><img style="width: 100%"  src="<?php echo site_url('') ?>/assets/img/livres/la_croix_et_le_poignard.jpg"></a>

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
                        <a href="#"><img style="width: 100%"  src="<?php echo site_url('') ?>/assets/img/livres/une-vie-motivee.jpg"></a>

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

            </div>-->

        </div>

    </div>



</section>
