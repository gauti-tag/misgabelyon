
<!-- Start Recover Password Area -->
<section class="user-area-style recover-password-area wow fadeInDown" style="background-color: #f7f7f7; background-image: none; padding-top: 10px; padding-bottom: 200px">
    <div class="container">
        <div class="contact-form-action recover">
            <div class="form-heading text-center">
                <h4 class="form-title">Renouvellez vôtre mot de passe !</h4>
            </div>
            <div class="text-center">
                <?php if($this->session->flashdata('error-recover-pass')){echo $this->session->flashdata('error-recover-pass');}elseif ($this->session->flashdata('success-recover-pass')){echo $this->session->flashdata('success-recover-pass');} ?>
            </div>
            <form method="post" action="<?php echo site_url('connexion/RecoverPass/processingPassword'); ?>">
                <div class="row">
                    <input type="hidden" name="id" value="<?php echo $id;  ?>">
                    <input type="hidden" name="link" value="<?php echo $link;  ?>">
                    <div class="col-12">
                        <div class="form-group">
                            <input class="form-control" type="password" name="password1" placeholder="Entrer votre nouveau mot de passe svp!" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <input class="form-control" type="password" name="password2" placeholder="Comfirmer votre mot de passe svp!" required>
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
