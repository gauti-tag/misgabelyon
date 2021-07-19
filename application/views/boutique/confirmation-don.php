



<div class="alert alert-success hidden-md message-confirmation-don-phone" role="alert">


  <p> <span style="font-size: 2rem; border: 5px solid green; border-radius: 50%; color: green" class="bx bx-check bx-pull-left"></span> <span class="pull-right" style="color: black">Don N°: <span style="font-weight: bolder"><?php echo $order_id ?></span> </span> </p>
    <p style="font-weight: bold">Confirmation</p>
    <p>Félicitations! Votre don a été prise en compte avec succès. Une confirmation vous sera envoyée par mail. Vous pouvez également recevoir un SMS ou un appel de la part de notre Administration.</p>



</div>



<section class="mt-0 mx-auto message-confirmation-don-desktop" style="background-image: url('<?php echo site_url('assets/img/services-bg.jpg') ?>'); padding: 5%">

    <div class="container mx-auto">

        <div class="row">
            <div class="text-center">
                <?php if($this->session->flashdata('success')){echo $this->session->flashdata('success');} ?>
            </div>

            <div class="col-md-2">
                <span style="font-size: 8rem; border: 5px solid green; border-radius: 50%; color: green" class="bx bx-check bx-pull-right"></span>
            </div>

            <div class="col-md-10">

                <div class="row">

                    <div class="col-md-12">

                        <span style="font-weight: bold; font-size: 50px"> MERCI</span>

                    </div>

                    <div class="col-md-12">
                        <div style="border: 1px solid #ffd700;border-radius: 10px;opacity: 1; width: 540px; text-align: center; font-size: 25px">
                            DON : <span style="font-weight: bold"><?php echo $order_id ?></span>
                        </div>

                    </div>

                </div>

            </div>

        </div>




        <div class="row ml-5 mt-5 p-3" style="width: 700px; border-radius: 10px; border: 1px solid #ffd700">
            <p>ÉTAPES SUIVANTES</p>

            <div class="col-md-12 ">

                <p style="font-weight: bold">Confirmation</p>
                <p>Félicitations! Votre don a été prise en compte avec succès. Une confirmation vous sera envoyée par mail. Vous pouvez également recevoir un SMS ou un appel de la part de notre Administration.</p>

            </div>
           <!--  <div class="col-md-12 mt-3">

                <p style="font-weight: bold">2. Expédition</p>
                <p>Votre commande sera expédiée et livrée dans le lieu choisi lors de votre passation de commande et dans les délais en vigueur sur Ma boutique MISGABELYON.</p>

            </div> -->
            <div class="col-md-12 mt-3">

                <!--  <p style="font-weight: bold">3. Mon compte</p>
                  <p>Vous pouvez suivre le statut de votre commande sur Ma boutique CIE en cliquant sur la rubrique "Mes commandes" de votre compte.</p>-->

            </div>

        </div>

        <!--   <div class="row ml-5 mt-5 p-3" style="width: 700px; border-radius: 10px; border: 1px solid #ffd700">
            <p>SUIVRE VOTRE COMMANDE</p>

            <div class="col-md-12">

                <div class="container">
                    <div class="stepwizard">
                        <div class="stepwizard-row setup-panel">
                            <div class="stepwizard-step col-xs-3">
                                <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                                <p><small>Commande passée</small></p>
                            </div>
                            <div class="stepwizard-step col-xs-3">
                                <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                                <p><small>Préparation</small></p>
                            </div>
                            <div class="stepwizard-step col-xs-3">
                                <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                                <p><small>Expédition</small></p>
                            </div>
                            <div class="stepwizard-step col-xs-3">
                                <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                                <p><small>Livraison</small></p>
                            </div>
                            <div class="stepwizard-step col-xs-3">
                                <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
                                <p><small>Commande livrée</small></p>
                            </div>
                        </div>
                    </div>

                    <form role="form">
                        <div class="panel panel-primary setup-content text-center" id="step-1">

                            <p>Vous pouvez suivre votre commande dans</p>
                            <p>Mon compte <span style="font-size: 20px; margin: 12px"><</span> <span>Vos commandes</span></p>
                            <a href="<?php echo '#' //site_url('boutique/Boutique/confirm') ?>">
                                <button class="default-btn btn-two btn-block">
                                    <span>VOIR VOS COMMANDES</span>
                                </button>
                            </a>
                            <div class="panel-heading">
                                <h3 class="panel-title">Shipper</h3>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label class="control-label">First Name</label>
                                    <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter First Name" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Last Name</label>
                                    <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Last Name" />
                                </div>
                                <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                            </div> -->
    </div>

    <!--     <div class="panel panel-primary setup-content" id="step-2">
             <div class="panel-heading">
                 <h3 class="panel-title">Destination</h3>
             </div>
             <div class="panel-body">
                 <div class="form-group">
                     <label class="control-label">Company Name</label>
                     <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Name" />
                 </div>
                 <div class="form-group">
                     <label class="control-label">Company Address</label>
                     <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Address" />
                 </div>
                 <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
             </div>
         </div> -->

    <!--     <div class="panel panel-primary setup-content" id="step-3">
             <div class="panel-heading">
                 <h3 class="panel-title">Schedule</h3>
             </div>
             <div class="panel-body">
                 <div class="form-group">
                     <label class="control-label">Company Name</label>
                     <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Name" />
                 </div>
                 <div class="form-group">
                     <label class="control-label">Company Address</label>
                     <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Address" />
                 </div>
                 <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
             </div>
         </div>  -->

    <!--   <div class="panel panel-primary setup-content" id="step-4">
           <div class="panel-heading">
               <h3 class="panel-title">Cargo</h3>
           </div>
           <div class="panel-body">
               <div class="form-group">
                   <label class="control-label">Company Name</label>
                   <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Name" />
               </div>
               <div class="form-group">
                   <label class="control-label">Company Address</label>
                   <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Address" />
               </div>
               <button class="btn btn-success pull-right" type="submit">Finish!</button>
           </div>
       </div> -->
    </form>
    </div>




    </div>


    </div>
    <div>

    </div>

    </div>

</section>