

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MISGAB’ELYÔN, L’AMOUR MISERICORDIEUX | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?= site_url() ?>assets/backoffice/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= site_url() ?>assets/backoffice/dist/css/AdminLTE.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= site_url() ?>assets/backoffice/plugins/iCheck/square/blue.css">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo site_url(); ?>assets/img/favicon.png">


    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="hold-transition login-page" style="font-weight: 900; background-image: url('<?php echo site_url()?>assets/backoffice/dist/img/pexels-background.jpg'); background-size: cover; background-position: center center">
<div class="login-box">
    <div class="login-logo">
        <a href="#"><img src="<?php echo site_url(); ?>assets/img/logo_misgabelyion.png"></img></a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Connectez votre session svp!</p>

        <form action="<?php echo site_url('backoffice/Admin/checkLogin'); ?>" method="post">

            <div class="form-group has-feedback">

                <input type="email" class="form-control" placeholder="Email" name="email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

            </div>

            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Mot de passe" name="password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>

            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                        <!-- <input type="checkbox"> Remember Me  -->
                        </label>
                    </div>
                </div><!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Connecter</button>
                </div><!-- /.col -->

            </div>
            <div class="alert-danger" role="alert" style="text-align: center">
                <?php
                if($this->session->flashdata('error'))
                {
                    echo $this->session->flashdata('error');
                }
                ?>
            </div>

        </form>

    </div><!-- /.social-auth-links -->

    <!--   <a href="#">I forgot my password</a><br>
       <a href="#" class="text-center">Register a new membership</a>  -->

</div><!-- /.login-box-body -->
</div><!-- /.login-box -->

<!-- jQuery 2.1.4 -->
<script src="<?= site_url() ?>assets/backoffice/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="<?= site_url() ?>assets/backoffice/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?= site_url() ?>assets/backoffice/plugins/iCheck/icheck.min.js"></script>
<script>
    $(function () {

        $('input').iCheck({

            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional

        });
    });
</script>
</body>
</html>

