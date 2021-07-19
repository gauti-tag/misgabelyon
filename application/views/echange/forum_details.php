

<!-- Start Blog Details Area -->
<div class="blog-details-area" style="background-color: #fefaf5; padding-top: 10px; padding-bottom: 100px">
    <div class="container">
        <div class="row">
            <?php foreach ($echangeForumDetails as $row): ?>
            <div class="col-lg-12">
                <div class="blog-details-content">

                    <div class="blog-top-content">

                        <h3><span><?php echo $row->auteur_echange_forum;?></span> : <span><?php ?></span><?php echo $row->titre_echange_forum;?></h3>
                        <blockquote>
                            <p style="font-family: open sans, sans-serif; font-style: italic">"<?php echo $row->theme_echange_forum;?>"</p>
                            <i class="bx bxs-quote-alt-left"></i>
                        </blockquote>
                        <p><em>Publié le <span><?php echo $row->created_at_echange_forum;?></span></em>
                            <span class="pull-right btn-adn"><a href="<?php echo site_url('echange-forum')?>">Retour aux sujets</a></a></span>
                        </p>
                    </div>
                    <?php endforeach; ?>


                    <!--- ====  formulaire de commentaires ===== ---->
                    <div class="leave-reply">
                        <h3>Commenter</h3>

                        <form id="echangeForum" method="POST" action="<?php echo site_url('echange/Forum/addCommentForum') ?>">
                            <div class="row">
                                <?php foreach ($echangeForumDetails as $row): ?>
                                    <input type="hidden" name="idForum" id="" class="form-control" value="<?php echo $row->id_echange_forum ;?>">
                                <?php endforeach; ?>
                                <div class="col-lg-12 col-sm-12">
                                    <div class="">
                                        <input type="text" name="pseudoForumEchange" id="pseudoForumEchange" class="form-control requiredField" placeholder="Pseudo" required>
                                        <div style="color: red" class="comments"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="">
                                        <textarea name="messageFormEchange" class="form-control requiredField" id="messageFormEchange" rows="3" placeholder="commenter ici" required></textarea>
                                        <div style="color: red" class="comments"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <button id="echangeForum-Btn" type="submit" class="default-btn page-btn">
                                        <span style="color: white">Poster</span>
                                    </button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>


                    <div class="comments">

                        <h3>Commentaires( <?php echo $countAllMessage ?>)</h3>

                        <ul id="postedCommentAdminEchange">
                            <?php  foreach ($allMessageEchangeForumDetails as $row):   ?>
                                <li>
                                    <div class="row">
                                     <h3 class="livre mx-3" style="font-size: 20px">  <?php echo $row->pseudo_comment_echange_forum  ?>:</h3>
                                        <p><span style="color: black"><?php echo  $row->comment_comment_echange_forum  ?></span> </p>
                                    </div>
                                    <span style="font-size: 12px"> <?php  echo $row->created_at_comment_echange_forum ?> </span>
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
