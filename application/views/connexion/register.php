

<!-- Start User Area -->
<section class="user-area-style ptb-100" style="background-color: #fefaf5; background-image: none">
    <div class="container">
        <div class="contact-form-action">
            <div class="account-title">
                <h2>Inscrivez vous maintenant</h2>
            </div>

            <form method="post" action="<?php echo site_url('connexion/register/registerProcessing') ?>">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label>Nom et prenoms</label>
                            <input class="form-control" type="text" name="name" value="<?= set_value('name') ?>">
                            <div class="alert-danger"><?php echo form_error("name"); ?></div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label>Email </label>
                            <input class="form-control" type="email" name="email" value="<?= set_value('email') ?>">
                            <div class="alert-danger"><?php echo form_error("email"); ?></div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label>Téléphone</label>
                            <input class="form-control" type="text" name="phone" value="<?= set_value('phone') ?>">
                            <div class="alert-danger"><?php echo form_error("phone"); ?></div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label>Mot de passe</label>
                            <input class="form-control" type="password" name="password" value="<?= set_value('password') ?>">
                            <div class="alert-danger"><?php echo form_error("password"); ?></div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label>Confirmer Mot de passe</label>
                            <input class="form-control" type="password" name="confpassword" value="<?= set_value('confpassword') ?>">
                            <div class="alert-danger"><?php echo form_error("confpassword"); ?></div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-sm-6">
                                <button class="default-btn register" type="submit">
                                    <span>Enregister</span>
                                </button>
                            </div>

                            <div class="col-lg-6 col-sm-6">

                             <!--   <div class="show">
                                    <input id="remember-1" type="checkbox">
                                    <label>Show password ?</label>
                                </div>  -->

                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <p>déjâ un compte? <a href="<?= site_url('connexion/login') ?>">Connectez vous maintenant</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- End User Area -->