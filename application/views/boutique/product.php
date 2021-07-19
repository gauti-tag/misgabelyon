

<?php foreach ($current_article as $row):   ?>
<section style="margin-bottom: 100px; margin-top: 60px">

      <div class="container">

            <div class="row">

                  <div class="col-md-4">
                      <div style="background: transparent 0% 0% no-repeat padding-box;border: 2px solid #ffd700;border-radius: 10px;opacity: 1;">
              <!--       <span style="right: 20px; position: absolute; background: #e2d680 0% 0% no-repeat padding-box;border-radius: 5px;opacity: 0.5;">-30%</span> -->
                         <img style="width: 100%" src="<?php echo site_url('assets/boutique/articles/img/'.$row->file_articles) ?>">
                      </div>
                  </div>
                  <div class="col-md-5">

                      <div style="font-weight: bold"><?php echo $row->name_articles ?><!--LA BIBLE--></div>
                      <hr>
                      <div>
                          <span style="border: 1px solid #5A5A5A;border-radius: 5px;opacity: 1; padding: 10px"><?php echo number_format($row->new_price_articles) ?><!--10 000 --> CFA</span>
                          <span style="position: absolute; right: 20px; text-decoration: line-through"><?php echo number_format($row->old_price_articles) ?><!--12 000 --> CFA</span>
                      </div>
                      <hr>
                      <br>
                      <p><a href="#">Selectionner une option</a></p>
                      <div style="">
                          <button data-image="<?php echo $row->file_articles ?>" data-id="<?php echo $row->id_articles ?>" data-name="<?php echo $row->name_articles ?>" data-qty="1" data-price="<?php echo $row->new_price_articles; ?>" class="default-btn btn-block add-product" type="button">
                              <span><i class="bx bx-cart-alt mr-2"></i>Ajouter au panier</span>
                          </button>
                      </div>

                      <hr>
                      <div style="font-weight: bold"><?php echo $row->name_articles ?><!--LA BIBLE--></div>
                      <div class="row">
                         <div class="col-md-12 mt-30">

                             <?php echo $row->describe_articles ?>

                         </div>
                          <!-- <div class="col-md-2"><i style="font-size: 50px" class="bx bx-money"></i></div>
                          <div class="col-md-10">
                          <div style="margin-top: 18px">Payez moins de frais en choisissant la livraison dans nos agences.</div>
                          </div>-->

                      </div>

                  </div>
                  <div class="col-md-3">

                      <div style="background: #FFFFFF 0% 0% no-repeat padding-box;box-shadow: 0px 0px 3px #00000029;border-radius: 10px;opacity: 1;">

                            <h3 style="text-align: center">Livraisons et retours</h3>
                            <hr>
                            <p>Choisir le lieu</p>
                            <hr>

                          <div style="text-align: center; margin-right: 0px">
                              <select class="form-control">
                                  <option>Abidjan-plateau</option>
                              </select>
                          </div>

                          <br>
                          <div class="row">
                              <div class="col-md-2">
                                  <i class="bx bxs-truck" style="font-size: 50px"></i>
                              </div>
                              <div class="col-md-9">
                                  <h6 style="text-align: left">Livraison à domicile</h6>
                                  <div style="text-align: justify">Prêt pour réception entre 5 Mar et 8 Mar si vous commandez d'ici 14hrs 33mins.</div>
                              </div>

                          </div>

                          <hr>

                          <div class="row">
                              <div class="col-md-2">
                                  <i class="bx bxs-hand-up" style="font-size: 50px"></i>
                              </div>
                              <div class="col-md-9">
                                  <h6 style="text-align: left">Point relais</h6>
                                  <div style="text-align: justify">Prêt pour réception entre 5 Mar et 8 Mar si vous commandez d'ici 14hrs 33mins.</div>
                              </div>
                          </div>



                      </div>

                  </div>

            </div>

      </div>

</section>

<?php endforeach;  ?>