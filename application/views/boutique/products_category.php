
<div class="page-title-area bg-15" style="background-image: url('<?php echo site_url() ?>assets/img/team/team-bg.jpg')">
    <div class="container">
        <div class="page-title-content">
            <h2 style="color: #ffd700"><?php  echo $session  ?><!--Blog Column Two--></h2>
            <ul>
                <li>
                    <a style="color: #0131B4" href="<?php echo site_url('boutique/Boutique')?> ">
                        Boutique <i class="bx bx-log-out icon-arrow"></i>    /
                    </a>
                </li>
                <li class="active" style="color: #ffd700"><?php  echo $session  ?><!--Blog Column Two--></li>
            </ul>
        </div>
      <!--  <div class="sidebar-widget search w-25 mx-auto mt-3" style="margin-bottom: -40px">
            <form class="search-form">
                <input class="form-control" name="search" placeholder="Recherche" type="text">
                <button class="search-button" type="submit">
                    <i class="bx bx-search"></i>
                </button>
            </form>
        </div>-->
    </div>
</div>

<section>

    <div class="container">

        <div class="row px-2" style="margin-bottom: 80px">

            <?php foreach ($all as $row):  ?>

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



        </div>

    </div>

</section>

