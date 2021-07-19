
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

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <table style="padding: 20px;" id="student_table" class="table table-bordered table-responsive" role="grid" aria-describedby="example1_info">
                            <thead>
                            <tr>
                                <th>Ip address</th>
                                <th>Date</th>
                                <th style="text-align: center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($sujets as $row):?>
                                <tr>
                                    <td> <?php echo $row->email ?></td>
                                    <td><?php echo $row->date ?></td>
                                    <td style="text-align: center"><a class="btn btn-primary" href="<?php echo site_url('backoffice/admin/chat/'.$row->email); ?>">Commenter</a></td>
                              <!--  <td style="text-align: center"><a class="btn btn-adn delChat" href="javascript:void(0)" data-id="<?php // echo $row->email;?>" data-text="<?php  //echo $this->encryption->encrypt($row->email); ?>">Suprimer</a></td>-->
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->

</div>

