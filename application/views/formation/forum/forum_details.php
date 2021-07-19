

<!-- Start Blog Details Area -->
<div class="blog-details-area" style="background-color: #fefaf5; padding-top: 10px; padding-bottom: 100px">
    <div class="container">
        <div class="row">
            <?php foreach ($forumAdminDetails as $row): ?>
            <div class="col-lg-12">
                <div class="blog-details-content">

                    <div class="blog-top-content">

                        <h3><span><?php echo $row->auteur_forum_admin;?></span> : <span><?php ?></span><?php echo $row->titre_forum_admin;?></h3>
                        <blockquote>
                            <p style="font-family: open sans, sans-serif; font-style: italic">"<?php echo $row->theme_forum_admin;?>"</p>
                            <i class="bx bxs-quote-alt-left"></i>
                        </blockquote>
                        <p><em>Publié le <span><?php echo $row->created_at_forum_admin;?></span></em> <span class="pull-right btn-adn"><a href="<?php echo site_url('formation/forum')?>">Retour aux sujets</a></a></span></p>
                    </div>

                    <?php endforeach; ?>

                    <!-- === formulaire de reponse  === -->

                    <div class="leave-reply">
                        <h3>Commenter</h3>

                        <form id="forumFormA" method="POST" action="<?php  echo site_url('education_formation/forum/forum_details/addCommentStudents') ?>">
                            <div class="row">
                                <?php foreach ($forumAdminDetails as $row): ?>
                                    <input type="hidden" name="idForum" id="" class="form-control" value="<?php echo $row->id_forum_admin;?>">
                                <?php endforeach; ?>
                                <div class="col-lg-12 col-sm-12">
                                    <div class="">
                                        <input type="text" name="pseudoForumA" id="pseudoForumA" class="form-control requiredField" placeholder="Pseudo" required>
                                        <div style="color: red" class="comments"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="">
                                        <textarea name="messageFormA" class="form-control requiredField" id="messageFormA" rows="3" placeholder="commenter ici" required></textarea>
                                        <div style="color: red" class="comments"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <button id="forumFormA-Btn" type="submit" class="default-btn page-btn">
                                        <span style="color: white">Poster</span>
                                    </button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- === commentaires -->

                    <div class="comments">

                        <h3>Commentaires( <?php echo $countAllMessage ?>)</h3>

                        <ul id="postedCommentAdmin">
                          <?php  foreach ($allMessageForumAdminDetails as $row):   ?>
                                <li>
                                    <div class="row">
                                        <h3 class="livre mx-3" style="font-size: 20px">  <?php echo $row->pseudo_comment_forum_admin  ?> : </h3>
                                        <p style="color: black"> <?php echo  $row->comment_comment_forum_admin  ?>  </p>
                                    </div>
                                        <span style="font-size: 12px"> <?php  echo $row->created_at_comment_forum_admin ?> </span>
                                  </li>
                            <?php endforeach; ?>

                        </ul>
                    </div>




                </div>
            </div>
            <!-- Large modal -->

        </div>
    </div>
</div>


<div class="modal fade" id="repondre" tabindex="-1" aria-labelledby="conditionsLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="border: 5px solid #ffd700;">
            <div class="modal-header">
                <h5 class="modal-title" id="conditionsLabel">  <!--=== ici le sujet ou commentaire à repondre ===-->  </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>  </label>
                    <textarea name="message" class="form-control requiredField" id="messageForm" rows="6"></textarea>
                </div>
                <div align="right" class="">
                <button id="forumForm-Btn" type="submit" class="default-btn page-btn">
                    <span>Envoyer</span>
                </button>
                </div>
            </div>

        </div>
    </div>
</div>