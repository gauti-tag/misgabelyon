

<div class="content-wrapper">
    <section class="content-header" style="margin-bottom: 15px">
        <h1>
            <?php echo $titre; ?>
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
            <?php foreach ($menu as $key => $data): ?>
                <li> <?php echo $data ?></li>
            <?php endforeach; ?>
        </ol>
    </section>
    <!-- general form elements -->
    <div class="box box-primary" style=" width: 800px; margin: 0 auto">


        <div class="row bootstrap snippets">

            <div class="col-md-12">
                <!-- DIRECT CHAT PRIMARY -->
                <div class="box box-primary direct-chat direct-chat-primary">

                    <div class="box-header with-border">

                        <h3 class="box-title">Direct Chat</h3>

                        <div class="box-tools pull-right">
                            <span data-toggle="tooltip" title="" class="badge bg-light-blue" data-original-title="3 New Messages"><?php echo $countMessage ?></span>
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <!--  <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle">
                                <i class="fa fa-comments"></i></button> -->
                            <!--<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>-->
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <!-- Conversations are loaded here -->
                        <div class="direct-chat-messages" id="view_chat_admin" style="height: 400px; overflow: auto">

                            <?php  foreach ($commentChat as $row):  ?>
                             <?php   if($row->etat == 1):  ?>
                                <!-- Message. Default to the left CLIENT-->
                            <div class="direct-chat-msg">
                                <div class="direct-chat-info clearfix">
                                    <span class="direct-chat-name pull-left">Client (<?php echo $clientAddress; ?>)</span>
                                    <input type="hidden" name="address_client" id="address_client" value="<?php echo $clientAddress; ?>">
                                    <span class="direct-chat-timestamp pull-right"><?php echo $row->date; ?></span>
                                </div>
                                <!-- /.direct-chat-info -->
                                <img class="direct-chat-img" src="https://bootdey.com/img/Content/user_1.jpg" alt="Message User Image"><!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                    <?php echo $row->message; ?> <!--  Is this template really for free? That's unbelievable! -->
                                </div>
                                <!-- /.direct-chat-text -->
                            </div>
                            <!-- /.direct-chat-msg -->
                                <?php  elseif($row->etat == 0):  ?>
                            <!-- Message to the right ADMIN -->
                            <div class="direct-chat-msg right">
                                <div class="direct-chat-info clearfix">
                                    <span class="direct-chat-name pull-right">Misgabelyon</span>
                                    <span class="direct-chat-timestamp pull-left"><?php echo $row->date; ?></span>
                                </div>
                                <!-- /.direct-chat-info -->
                                <img class="direct-chat-img" src="<?php echo site_url('') ?>assets/img/logo_misgabelyion.jpg" alt="Message User Image"><!-- /.direct-chat-img -->
                                <div class="direct-chat-text">
                                    <?php echo $row->message; ?>  <!-- You better believe it! -->
                                </div>
                                <!-- /.direct-chat-text -->
                            </div>
                            <!-- /.direct-chat-msg -->
                              <?php endif; ?>
                            <?php endforeach; ?>
                              <p id="elementDown"></p>
                        </div>
                        <!--/.direct-chat-messages-->

                        <!-- Contacts are loaded here -->
                    <!--    <div class="direct-chat-contacts">
                            <ul class="contacts-list">
                                <li>
                                    <a href="#">
                                        <img class="contacts-list-img" src="https://bootdey.com/img/Content/user_1.jpg">

                                        <div class="contacts-list-info">
                        <span class="contacts-list-name">
                          Count Dracula
                          <small class="contacts-list-date pull-right">2/28/2015</small>
                        </span>
                                            <span class="contacts-list-msg">How have you been? I was...</span>
                                        </div> -->
                                        <!-- /.contacts-list-info -->
                         <!--           </a>
                                </li> -->
                                <!-- End Contact Item -->
                        <!--    </ul> -->
                            <!-- /.contatcts-list -->
                        </div>
                        <!-- /.direct-chat-pane -->
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <form>
                            <div class="input-group">
                                <input type="text" id="messageAdmin" name="messageAdmin" placeholder="Taper Message ici ..." class="form-control">
                                   <span class="input-group-btn">
                                        <button type="submit" disabled class="btn btn-primary btn-flat"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                                  </span>
                            </div>
                        </form>
                    </div>
                    <!-- /.box-footer-->
                </div>
                <!--/.direct-chat -->
            </div>



        </div>






    </div><!-- /.box -->
</div>










