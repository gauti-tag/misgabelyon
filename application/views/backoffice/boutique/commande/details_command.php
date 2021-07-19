

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

    <section class="invoice">

    <div class="row">
        <div class="col-xs-12 col-sm-12">
            <h2 class="page-header">
             <!-- <i class="fa fa-globe"></i> ---><!--AdminLTE, Inc.--> <img alt="logo misgabelyon" src="<?php echo site_url('') ?>assets/img/logo_misgabelyion.png" />
                <small class="pull-right">Date: <?php echo $date; ?> <!--2/10/2014--></small>
            </h2>
        </div>
    </div>

    <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
            <!--From-->
            <address>
                <strong>MISGABELYON </strong><br>
                Abidjan, Cocody <br>
                <strong>Telephone: </strong>  +(225) 01 40 44 00 00 / <br>
                           +(33) 6 44 86 69 30<br>
               <strong>Email: </strong> contact@misgabelyon-amour-misericordieux.org
            </address>
        </div>
        <div class="col-sm-4 invoice-col">
            <b>Facture N°: <?php echo $codeCommand[0]['code']; ?></b><br>
            <br>
            <!--<b>Order ID:</b> 4F3S8J<br>
            <b>Payment Due:</b> 2/22/2014<br>
            <b>Account:</b> 968-34567-->
        </div>
        <div class="col-sm-4 invoice-col">
          <!--  To   -->
            <address>
                <strong><?php echo $infoClient[0]['nom'] ?><!--John Doe--></strong><br>
                <?php foreach ($lastAdress as $row_last_adress):  ?>
                <!--795 Folsom Ave, Suite 600--><?php echo $row_last_adress->pays ?> <span><?php echo $row_last_adress->ville ?></span> <br>
               <!-- San Francisco, CA 94107--><?php  echo $row_last_adress->addresse_physique ?><br>
                Téléphone: <?php echo $row_last_adress->phone ?><!--(555) 539-1037--><br>
                Email: <?php echo $infoClient[0]['email']  ?><!--john.doe@example.com-->
                <?php endforeach; ?>
            </address>
        </div>

    </div>


    <div class="row">
        <div class="col-xs-12 table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>

                    <th>Article(s)</th>
                    <th>Quantité</th>
               <!--<th>Serial #</th>
                    <th>Description</th> -->
                    <th>Total</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($infoItems as $row):  ?>
                <tr>



                    <td><?php echo $row->nom_article;  ?></td>
                    <td><?php echo $row->qty_article;  ?></td>
                <!--    <td>455-981-221</td>
                    <td>El snort testosterone trophy driving gloves handsome</td> -->
                    <td><?php echo number_format($row->prix_article);  ?>f CFA</td>

                </tr>
                <?php endforeach;  ?>
          <!--      <tr>
                    <td>1</td>
                    <td>Need for Speed IV</td>
                    <td>247-925-726</td>
                    <td>Wes Anderson umami biodiesel</td>
                    <td>$50.00</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Monsters DVD</td>
                    <td>735-845-642</td>
                    <td>Terry Richardson helvetica tousled street art master</td>
                    <td>$10.70</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Grown Ups Blue Ray</td>
                    <td>422-568-642</td>
                    <td>Tousled lomo letterpress</td>
                    <td>$25.99</td>
                </tr> -->
                </tbody>
            </table>
        </div>
    </div>

    <div class="row">

        <div class="col-xs-8">
         <!--   <p class="lead">Payment Methods:</p>
            <img src="../../dist/img/credit/visa.png" alt="Visa">
            <img src="../../dist/img/credit/mastercard.png" alt="Mastercard">
            <img src="../../dist/img/credit/american-express.png" alt="American Express">
            <img src="../../dist/img/credit/paypal2.png" alt="Paypal">
            <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
            </p> -->
        </div>
        <div class="col-xs-4">
           <!-- <p class="lead">Amount Due 2/22/2014</p> -->
            <div class="table-responsive">
                <table class="table">
                   <!--<tr>
                        <th style="width:50%">Subtotal:</th>
                        <td>$250.30</td>
                    </tr>
                    <tr>
                        <th>Tax (9.3%)</th>
                        <td>$10.34</td>
                    </tr>
                    <tr>
                        <th>Shipping:</th>
                        <td>$5.80</td>
                    </tr>-->
                    <tr>
                        <th style="font-size: 20px">Total:</th>
                        <td><strong style="font-size: 20px"><?php foreach ($total_amount as $row_montant){ echo number_format($row_montant->montant); } ?>f CFA</strong></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>


    <div class="row no-print">
        <div class="col-xs-12">
            <a href="#" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Imprimer </a>
          <!--  <button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment</button>-->
            <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Générer un PDF</button>
        </div>
    </div>
</section>


</div>