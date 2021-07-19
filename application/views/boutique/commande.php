
<style>


    label.error{
        color: red;
        font-style: italic;
        font-family: open sans, sans-serif
    }
    input.error{
        border: 1px solid red;
    }
    input.valid{

        border: 1px solid green;

    }


</style>

<section style="margin-top: 40px; margin-bottom: 100px">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3>Finalisation de la commande</h3>
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="contacts-form" style="border: 1px solid #DDAF01">
                            <div class="contact-title">
                                <h4>Informations client</h4>
                            </div>
                            <hr>
                            <form id="command" action="<?php echo site_url('boutique/Boutique/treatmentCommand') ?>" method="POST">
                                <input type="hidden" name="idClient" value="<?php if($this->session->userdata('id_client_session')){ echo $this->session->userdata('id_client_session');} ?>">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <div class="form-group">
                                            <label for="nom_command">Nom<span style="color: red">*</span></label>
                                            <input type="text" name="nom_command" id="nom_command" class="form-control" placeholder="Entrer votre nom svp!" value="<?php if($this->session->userdata('id_client_session')){echo $this->session->userdata('nom_client_session');} ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                        <div class="form-group">
                                            <label for="prenoms_command">Prénoms<span style="color: red">*</span></label>
                                            <input type="text" name="prenoms_command" id="prenoms_command" class="form-control"  placeholder="Entrer votre prénoms svp!" value="<?php if($this->session->userdata('id_client_session')){echo $this->session->userdata('prenoms_client_session');} ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="numero_command">Numéro de téléphone mobile<span style="color: red">*</span></label>
                                            <input type="text" name="numero_command" id="numero_command" class="form-control" value="<?php if($this->session->userdata('id_client_session')){echo $this->session->userdata('telephone_client_session');} ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="email_command">Email<span style="color: red">*</span></label>
                                            <input type="text" name="email_command" id="email_command" class="form-control" placeholder="Entrer votre email svp!" value="<?php if($this->session->userdata('id_client_session')){echo $this->session->userdata('email_client_session');} ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-12">

                                        <div class="contact-title">
                                            <h4>addresse de livraison</h4>
                                        </div>
                                        <hr>

                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="pays">Pays<span style="color: red">*</span></label>
                                            <select id="country" name="country" class="form-control">
                                                <?php foreach ($pays as $row):  ?>
                                                    <option <?php if($row->alpha2 == "CI"){echo 'selected="selected"';} ?> value="<?= $row->alpha2; ?>"><?= $row->nom_fr_fr; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="ville">Ville<span style="color: red">*</span></label>
                                            <input type="text" name="ville" id="ville"  placeholder="Entrer votre ville de résidence svp!" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="adresse">Adresse<span style="color: red">*</span></label>
                                            <input  type="text" name="adresse" id="adresse"  class="form-control" placeholder="Rue / Appartement / Suite / Bloc / Bâtiment">
                                        </div>
                                    </div>

                                <!--    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="lieu_livraison">Souhaitez vous faire livrer ?</label>
                                            <input type="text" name="lieu_livraison" id="lieu_livraison"  placeholder="Entrer le lieu de livraison svp!" class="form-control">
                                        </div>
                                    </div>  -->
                                    <div class="col-lg-12 col-md-12">
                                           <a href="#">
                                            <button class="default-btn btn-two btn-block" type="submit">
                                                <span>Commander</span>
                                            </button>
                                           </a>


                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>

            <div class="col-md-4">

                <h3>Résumé</h3>

                <div class="contacts-form" style="border: 1px solid black;">
                        <div class="row">
                            <div class="col-md-12">
                                VOTRE COMMANDE <span><< <?php echo $recapTotalItems ?><!--2-->  article(s) >></span>
                            </div>
                        </div>
                    <hr style="border: 1px solid #707070;opacity: 0.6">

                    <table style="border-collapse: separate; border-spacing: 2px 13px">
                        <?php foreach ($recapView as $row):  ?>
                        <tr style="">
                            <td>
                                <img style="padding: 10px; width: 70px" src="<?php  echo site_url('assets/boutique/articles/img/'.$row['image']) ?>">
                            </td>

                            <td>
                                <table style="width: 100%">
                                    <tr>
                                        <td style="font-size: 10px; font-weight: bold"><?php echo $row['name'] ?><!--Panneau LED--></td>
                                    </tr>
                                   <!-- <tr>
                                        <td>Encastré 600 * 1200 mm</td>
                                    </tr>-->
                                    <tr>
                                        <td><?php echo number_format($row['subtotal'])  ?> CFA <!--125 000 CFA--></td>
                                    </tr>
                                    <tr>
                                        <td>Qté :<span><?php echo $row['qty']  ?></span> </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <?php endforeach;  ?>

                        <!-- =========== second row ====== ---->

                  <!--      <tr>
                            <td>
                                <img style="padding: 10px; width: 100px" src="<?php // echo site_url() ?>assets/img/livres/Tactique.jpg">
                            </td>

                            <td>
                                <table style="width: 100%">
                                    <tr>
                                        <td style="font-size: 20px">Panneau LED</td>
                                    </tr>
                                    <tr>
                                        <td>Encastré 600 * 1200 mm</td>
                                    </tr>
                                    <tr>
                                        <td>125 000 CFA</td>
                                    </tr>
                                    <tr>
                                        <td>Qté :<span>1</span> </td>
                                    </tr>
                                </table>
                            </td>
                        </tr> -->

                    </table>

                    <hr style="border: 1px solid #707070;opacity: 0.6">


                    <div class="row">

                   <!--     <div class="col-md-6">
                            SOUS-TOTAL :
                        </div>
                        <div class="col-md-6">
                            375 000CFA
                        </div>   -->

                        <!-- ====     ===--->

                        <!--    <div class="col-md-6 mt-3">
                                Frais de livraison et droit de timbre :
                            </div>
                            <div class="col-md-6 mt-3">
                              1000 CFA
                            </div>  -->


                        <!-- ====     ===--->

                        <div class="col-md-6 mt-3" style="font-weight: bold">
                            TOTAL :
                        </div>
                        <div class="col-md-6 mt-3" style="font-weight: bold">
                           <span><?php echo number_format($recapTotal,2,',',' '); ?></span> CFA
                        </div>

                    </div>

                    <hr style="border: 1px solid #707070;opacity: 0.6">

                    <div class="row">
                        <div class="col-md-12 text-center">
                            <a href="<?php echo site_url('boutique/Boutique/card') ?>">RETOUR AU PANIER</a>
                        </div>
                    </div>


                </div>


            </div>

        </div>

    </div>

</section>
<!--<section style="margin-top: 30px">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="contacts-form" style="border: 1px solid #DDAF01">
                            <div class="contact-title">
                                <h4>2. Mode de livraison</h4>
                            </div>
                            <hr>
                            <form id="contactForm">
                                <div class="row">

                                    <div class="col-md-12">
                                        <p style="margin-left: 20px">Comment voulez-vous que votre commande soit livrée ?</p>
                                    </div>


                                    <table style="border-collapse: separate; border-spacing: 25px 2px">

                                        <tr>
                                            <td><input type="radio" name="paymentOption" checked></td> <td> Points Relais</td>
                                        </tr>
                                        <tr>
                                            <td></td><td>Disponible entre jeudi 4 mars et vendredi 5 mars avec des frais d'expédition moins élevés</td>
                                        </tr>
                                        <tr>
                                            <td></td><td style="font-size: 15px">Choissez un point relais</td>
                                        </tr>

                                        <tr>
                                            <td></td><td></td>
                                        </tr>

                                        <tr>
                                            <td><input type="radio" name="paymentOption" checked></td> <td> Livraison à Domicile</td>
                                        </tr>
                                        <tr>
                                            <td></td><td>Livré entre jeudi 4 mars et vendredi 5 mars pour 1000 FCFA</td>
                                        </tr>
                                        <tr>
                                            <td></td><td style="font-size: 15px">Choissez un point relais</td>
                                        </tr>

                                    </table>

                                    <div class="col-md-12">
                                        <div class="radio mt-1">

                                            <label style="font-family: open sans, sans-serif; font-style: italic">

                                            </label>
                                            <div class="row">

                                                <div class="col-md-12 ml-4" style="opacity: 0.6">

                                                </div>

                                                <p class="ml-5"><a href="#"></a></p>

                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn btn-two btn-block">
                                            <span>Continuer</span>
                                        </button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>

            <div class="col-md-3">

            </div>

        </div>

    </div>

</section>-->