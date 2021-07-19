

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
    .field-icon {
        float: right;
        margin-left: -25px;
        margin-top: -42px;
        position: relative;
        z-index: 2;
        opacity: 0.8;
    }

</style>

<div class="container-fluid ptb-40 create-register" style="background-image: url('<?php echo site_url() ?>assets/img/team/team-bg.jpg')">

    <div class="row">

        <div class="col-md-6" id="border-create-register">
            <!-- Start User Area -->
            <section class="user-area-style log-in-area">
                <div class="container">
                    <div class="contact-form-action">
                        <div class="text-center">
                            <?php if($this->session->flashdata('connect')){echo $this->session->flashdata('connect');} ?>
                        </div>
                        <div class="account-title">
                            <h2>Se connecter</h2>
                        </div>

                        <form method="post" id="connect" action="<?php echo site_url('boutique/Registration/connect') ?>">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="email_connect">Email</label>
                                        <input class="form-control" type="email" name="email_connect">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="password_connect">Mot de passe</label>
                                        <input class="form-control" type="password" name="password_connect" id="password_connect">
                                        <span style="font-size: 34px; color: #0131B4" toggle="#password_connect" class="bx bx-hide field-icon toggle-password"></span>
                                    </div>
                                </div>

                                <!-- bx-hide / bx-show-alt -->

                                <div class="col-12">
                                    <div class="login-action">
								    <!--<span class="log-rem">
										<input id="remember" type="checkbox">
										<label for="remember">Remember me!</label>
									</span> -->
                                        <span class="forgot-login">
										<a href="#">Mot de passe oublié ?</a>
									</span>
                                    </div>
                                </div>

                                <div class="col-12 mx-auto text-center">
                                    <div class="mx-auto">
                                        <button class="default-btn" type="submit">
                                            <span>SE CONNECTER</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>

        <div class="col-md-6">


            <!-- Start User Area -->
            <section class="user-area-style">
                <div class="container">
                    <div class="contact-form-action">
                        <div class="text-center">
                            <?php if($this->session->flashdata('register')){echo $this->session->flashdata('register');} ?>
                        </div>
                        <div class="account-title">
                            <h2>Créer un compte client</h2>
                        </div>
                        <form method="post" id="register" action="<?php echo site_url('boutique/Registration') ?>">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="lastName">Nom</label>
                                        <input class="form-control" type="text" name="lastName" id="lastName">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="firstName">Prénoms</label>
                                        <input class="form-control" type="text" name="firstName" id="firstName">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input class="form-control" type="email" name="email" id="email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="telephone">Numéro de téléphone</label>
                                        <input class="form-control" type="text" name="telephone" id="telephone">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="password">Mot de passe</label>
                                        <input class="form-control" type="password" name="password" id="password" minlength="5">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="passwordConfirm">Confirmer le mot de passe</label>
                                        <input class="form-control" type="password" name="passwordConfirm" id="passwordConfirm" minlength="5">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 col-sm-6 mx-auto">
                                            <button class="default-btn" type="submit">
                                                <span>CRÉER VOTRE COMPTE</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <!-- End User Area -->


        </div>


    </div>

</div>