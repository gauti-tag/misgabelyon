
<div class="bg-15 banner-display-phone" style="position: relative;
    overflow: hidden;
    padding-top: 70px;
    padding-bottom: 70px;
    text-align: center;
    z-index: 1;
    background-image: url('<?php echo site_url() ?>assets/img/banner/intention.jpg');
    background-size: cover;
    background-position: center center;
    height: 500px;">
    <div class="container">
        <div class="page-title-content">


        </div>
    </div>
</div>


<!-- Start FAQ Area -->
<section class="faq-area ptb-40">
    <div class="container">
        <div class="section-title">
            <h2>Intentions de prière</h2>
       </div>

        <div class="row align-items-center">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="faq-accordion mb-used">
                    <ul class="accordion">
                        <?php foreach ($allPriereIntention as $row): ?>
                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="bx bx-plus"></i>
                                <?php echo $row->sujet_priere_intention ?>
                            </a>

                            <div class="accordion-content">
                                <p> <?php echo $row->priere_priere_intention  ?> </p>
                        </li>
                        <?php endforeach;  ?>

                   <!--     <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="bx bx-plus"></i>
                                How to became a volunteer in Zambia state ?
                            </a>

                            <div class="accordion-content">
                                <p>Lorem, ipsum dolor sit amet How do you Startup? consectetur adipisicing elit. Accusamus ipsa error, excepturi, obcaecati aliquid veniam blanditiis quas voluptates maxime unde, iste minima dolores dolor perferendis facilis. How do you Startup blanditiis voluptates Lorem, ipsum dolor sit amet How do you Startup amet How do.</p>
                            </div>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="bx bx-plus"></i>
                                How to donate on our site using your form ?
                            </a>

                            <div class="accordion-content">
                                <p>Lorem, ipsum dolor sit amet How do you Startup? consectetur adipisicing elit. Accusamus ipsa error, excepturi, obcaecati aliquid veniam blanditiis quas voluptates maxime unde, iste minima dolores dolor perferendis facilis. How do you Startup blanditiis voluptates Lorem, ipsum dolor sit amet How do you Startup amet How do.</p>
                            </div>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class="bx bx-plus"></i>
                                What and where are the headquarters of your company ?
                            </a>

                            <div class="accordion-content">
                                <p>Lorem, ipsum dolor sit amet How do you Startup? consectetur adipisicing elit. Accusamus ipsa error, excepturi, obcaecati aliquid veniam blanditiis quas voluptates maxime unde, iste minima dolores dolor perferendis facilis. How do you Startup blanditiis voluptates Lorem, ipsum dolor sit amet How do you Startup amet How do.</p>
                            </div>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End FAQ Area -->

<!-- Start Contact Area -->
