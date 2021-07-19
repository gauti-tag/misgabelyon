
<style>
    .field-icon {
        float: right;
        margin-left: -25px;
        margin-top: -42px;
        position: relative;
        z-index: 2;
        opacity: 0.8;
    }
</style>
<!-- Start User Area -->
<section class="user-area-style log-in-area  wow fadeInRight" style="background-color: #f7f7f7; background-image: none; padding-top: 35px; padding-bottom: 18px">
    <div class="container">
        <div class="contact-form-action">
            <div class="account-title">
                <h2>Connexion</h2>
            </div>
          <!--  <div id="msgSubmit" class="livre text-center text-danger">
               <?php
             /*   if($this->session->flashdata('error-connexion')){
                    echo $this->session->flashdata('error-connexion');
                } */
                ?>
            </div>-->
            <div class="text-center">
                <?php if($this->session->flashdata('error')){echo $this->session->flashdata('error');} ?>
            </div>

            <div class="help-block with-errors"></div>
               <form id="loginForm" action="<?php echo site_url('connexion/login/checkStudentSession') ?>" method="post">
                <div class="row">
                    <div class="col-12">
                        <input type="hidden" name="page" value="<?php echo $page ?>">
                        <div class="form-group">
                            <label id="email">Email*</label>
                            <input class="form-control" required id="email" type="email" name="email" value="<?php //echo set_value('email'); ?>">
                            <div class="alert-danger"><?php // echo form_error("email"); ?></div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label>Mot de passe*</label>
                            <input class="form-control" required type="password" name="password" id="password">
                            <span style="font-size: 34px; color: #0131B4" toggle="#password" class="bx bx-hide field-icon toggle-password"></span>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="login-action">

                            <span class="forgot-login">
										<a href="<?=  site_url('connexion/Register') ?>">mot de passe oublié?</a>
									</span>
                        </div>
                    </div>

                    <div class="col-12">
                        <button id="login-btn" class="default-btn btn-block" type="submit"><span>Connectez vous</span></button>
                    </div>

                    <div class="col-12">
                        <p style="color: black">avez vous déjà un compte? <a style="color: #0131B4" href="<?= site_url('inscription'); ?>">inscrivez vous maintenant</a></p>
                    </div>



                    <div class="clearfix"></div>


                </div>
            </form>
        </div>
    </div>
</section>




<!-- End User Area -->