
<style>

    audio{

        width:  1000px;
    }

    @media only screen and (min-width: 1000px) and (max-width: 1200px)
    {
        audio{

            width: 800px;

        }
    }

    @media only screen and (min-width: 800px) and (max-width: 1000px)
    {
        audio{

             width: 450px;

           }
    }

    @media only screen and (min-width: 300px) and (max-width: 800px)
    {
        audio{

            width: 300px;

        }
    }

</style>

       <!-- Start Contact Area -->
        <section class="contact-area" style="background-color: white; padding-top: 5px; padding-bottom: 100px">

                  <div class="container">


                                         <div class="row">
                                             <div class="contact-title col-lg-12" style="text-align: center; padding: 50PX">
                                                 <h2>Espace Radio</h2>
                                             </div>
                                             <?php // var_dump($allRadio); die(); ?>
                                                <div class="col-lg-12">
                                                    <ul class="contact-info" style="background-color: whitesmoke">
                                                <?php foreach ($allRadio as $row):  ?>
                                                        <li class="location">

                                                            <i class="bx bx-music"></i>
                                                            <audio  src="<?php echo site_url('/assets/radio/'.$row->file_evangelisation_radio)  ?>" controls="controls" style="/*width: 1000px; position: absolute; margin-top: -20px*/"></audio>
                                                            <h3 style="color: #0131B4"><?php echo $row->titre_evangelisation_radio  ?></h3>
                                                            <div style="color: #0131B4"> <?php echo $row->description_evangelisation_radio  ?>

                                                        </li>

                                                        <?php endforeach;  ?>
                                                <!--        <li>
                                                            <i class="bx bx-envelope"></i>
                                                            <h3>Phone Number</h3>
                                                            <a href="mailto:hello@tians.com">hello@tians.com</a>
                                                            <a href="mailto:info@tians.com">info@tians.com</a>
                                                        </li>

                                                        <li>
                                                            <i class="bx bx-phone-call"></i>
                                                            <h3>Our Email Address</h3>
                                                            <a href="tel:+1-(123)-456-7899">+1 (123) 456-7899</a>
                                                            <a href="tel:+1-(514)-312-6688">+1 (514) 312-6688</a>
                                                        </li>  -->

                                                    </ul>
                                                </div>
                                         </div>

                  </div>
        </section>
<!-- End Contact Area -->
