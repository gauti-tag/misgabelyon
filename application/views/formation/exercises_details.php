


<!-- Start Services Details Area -->

<section class="services-details-area" style="background-color: #f7f7f7; background-image: none; padding-top: 10px; padding-bottom: 100px">

    <div class="container">

        <div class="services-details-content">

         <!--   <div class="services-details-img">

                <img src="<?php // site_url() ?>assets/img/services-details/services-details-1.jpg" alt="Image">
            </div>  -->
            <?php foreach ($allExercicesDetails as $row): ?>
            <div class="single-content">

                <h3> <?php echo $row->titre_exercice ?></h3>
                <p style="font-family: open sans, sans-serif; font-style: italic">
                    <?php echo $row->description_exercice ?>
                </p>

                <!-- =========================== QUESTION POSTED =========================-->  <hr>
                <h3>Questions</h3>

                <p>  <?php echo $row->questions_exercice ?>  </p>
            </div>
            <?php endforeach; ?>

                <!-- =========================== MESSAGE POSTED =========================-->  <hr>

        <!--    <div class="comments">

                <h3 class="livre">Commentaires (<?php //echo $count_display ?>)</h3>

                <ul id="commentStudentPosted">

                   <?php // foreach ($display as $row): ?>

                    <li>
                        <h3 style="font-size: 20px" class="livre"> <?php // echo $row->pseudo_comment  ?></h3>
                        <span style="color: black"> <?php //echo $row->message_comment ?></span>
                        <p style="font-size: 12px"> <?php //echo $row->date_comment  ?> </p>
                    </li>

                    <?php //endforeach; ?>

                </ul>
            </div> -->


            <!-- =========================== POST MESSAGE FORM =========================-->

        <!--    <div class="leave-reply">

                <form id="exerciseDetailsForm" method="POST" action="<?php // echo site_url('education_formation/forum/forum_details/addExerciseCommentStudent') ?>">

                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <?php  //foreach ($allExercicesDetails as $row): ?>
                            <input type="hidden" name="idCommentExercise" id="idCommentExercise" value="<?php //echo $row->id_exercice ?>">
                            <?php// endforeach; ?>
                            <div class="form-group">
                                <label>Pseudo<span class="star">*</span></label>
                                <input type="text" name="pseudoExercise" id="pseudoExercise" class="form-control requiredField">
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label>Commentaire</label>
                                <textarea name="messageExercise" class="form-control requiredField" id="messageExercise" rows="6"></textarea>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <button id="exerciseDetailsForm-btn" type="submit" class="default-btn page-btn">
                                <span>Commenter</span>
                            </button>
                        </div>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>

                    </div>
                </form>
            </div> -->

        </div>

    </div>
</section>


