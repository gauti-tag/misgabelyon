

<!-- Start Contact Area -->
<section class="contact-area ptb-100">
    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-7">

                <div class="contacts-form">
                    <div class="text-center">
                        <?php if($this->session->flashdata('error')){echo $this->session->flashdata('error');}elseif ($this->session->flashdata('success')){echo $this->session->flashdata('success');} ?>
                    </div>
                    <div class="contact-title">
                        <h2>Contactez nous</h2>
                    </div>
                    <form method="POST" action="<?php echo site_url('Contact/process'); ?>">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" required placeholder="Nom">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" required  placeholder="Email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="msg_subject" id="msg_subject" class="form-control" placeholder="Sujet">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="phone_number" id="phone_number" required class="form-control" placeholder="Téléphone">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="6" required  placeholder="Message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn btn-two">
                                    <span>Envoyer</span>
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
            <div class="col-lg-5">
                <ul class="contact-info">
                    <li class="location">
                        <i class="bx bx-location-plus"></i>
                        <h3>Localisation</h3>
                        Abidjan, Côte d'ivoire
                    </li>
                    <li>
                        <i class="bx bx-envelope"></i>
                        <h3>Adressse email</h3>
                        <a href="mailto:contact@misgabelyon-amour-misericordieux.org">contact@misgabelyon-amour-misericordieux.org</a>
                    </li>
                    <li>
                        <i class="bx bx-phone-call"></i>
                        <h3>Numéro de télephone</h3>
                        <a href="#">+ (33) 6 44 86 69 30</a>
                        <a href="#">+ (255) 01 40 44 00 00</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Area -->
<!-- Start Map Area -->
    <!--<div class="map-area">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96573.31103674119!2d-73.91097366523668!3d40.85176866829554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c28b553a697cb1%3A0x556e43a78ff15c77!2sThe%20Bronx%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1599153418461!5m2!1sen!2sbd"></iframe>
    </div>  -->
<!-- End Map Area -->
