
<!-- Start Recover Password Area -->
<section class="user-area-style recover-password-area wow fadeInDown" style="background-color: #f7f7f7; background-image: none; padding-top: 10px; padding-bottom: 200px">
    <div class="container">
        <div class="contact-form-action recover">
            <div class="form-heading text-center">
                <h4 class="form-title">Renouvellez votre mot de passe!</h4>
            </div>
            <div class="text-center">
                <?php if($this->session->flashdata('error-email')){echo $this->session->flashdata('error-email');}elseif ($this->session->flashdata('-email')){echo $this->session->flashdata('success-email');} ?>
            </div>
            <form method="post" action="<?php echo site_url('connexion/Register/checkEmail'); ?>">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <input class="form-control" type="email" name="email" placeholder="Entrer votre addresse email svp!" required>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-lg-6 col-sm-6">
                        <a class="now-log-in font-q" href="<?php echo site_url('connexion/login');  ?>">Connectez vous</a>
                    </div>

                    <div class="col-lg-6 col-sm-6 text-right">
                        <a class="now-log-in font-q pull-right" href="<?php echo site_url('Inscription'); ?>">Inscrivez vous</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <button  class="default-btn btn-block" type="submit">
                            <span>Envoyer</span>
                        </button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
        </div>
        </form>
    </div>
    </div>
</section>
<!-- End Recover Password Area -->