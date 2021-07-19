<?php foreach ($bannerPresentation as $row): ?>
<div class="bg-15 banner-display-phone" style="position: relative;
    overflow: hidden;
    padding-top: 70px;
    padding-bottom: 70px;
    text-align: center;
    z-index: 1;

    background-image: url('<?php echo site_url('assets/banniere/presentation/'.$row->file_banner_presentation )?>');
    background-size: cover;
    background-position: center center;
    height: 500px;">
    <div class="container">
        <div class="page-title-content">



        </div>
    </div>
</div>
<?php  endforeach; ?>


  <?php foreach ($allPresentation as $row): ?>

   <section class="about-area about-area-two pt-100 pb-70">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="about-content text-justify">

              <h2><?php echo $row->titre_interface_bienvenue ?></h2>
              <p><?php echo $row->texte1_interface_bienvenue ?></p>
              <p><?php echo $row->texteZ_interface_bienvenue ?></p>
              <p><?php echo $row->texte3_interface_bienvenue ?></p>
              <p><?php echo $row->texte4_interface_bienvenue ?></p>
              <p><?php echo $row->texte5_interface_bienvenue ?></p>
              <!--<p>En 2014, après plus de 20 ans de vie communautaire, les autorités de la Communauté Catholique Mère du Divin Amour, reconnaissent en une de leurs religieuses, Sœur Annick Marie-Antoine de l’Amour Miséricordieux, un appel particulier, un ministère de prophète. Elle reçoit ainsi de ses supérieurs, un mandat missionnaire et une dispense de vie commune afin de pouvoir vivre et déployer pleinement cet appel. A cet effet, elle a également la latitude d’avoir une organisation propre.</p>
            <p>Vint ensuite le temps de la maturation suivi de la naissance en Décembre 2015, de la Citadelle de l’Amour Miséricordieux, œuvre de compassion, d’édification et d’évangélisation, le jour-même de l’ouverture de la Porte Sainte et de l’entrée dans l’année jubilaire de la Miséricorde Divine. </p>
            <p>Torrent d’Amour et de Grâce est le ministère du Saint Esprit dans la vie de Sœur Annick Marie Antoine de l’Amour Miséricordieux depuis sa conversion. Ce ministère de compassion, d’édification, de coaching, d’accompagnement, de soutien et d’évangélisation lui a été reconnu en 1997 par un mandat de prophète donné par sa Communauté. </p>
            <p>Torrent d’Amour et de Grâce et La Citadelle de l’Amour Miséricordieux sont l’expression d’un appel dans l’appel.</p>
            <p>Sœur Annick Marie Antoine de l’Amour Miséricordieux est soutenue dans ce ministère particulier par un prêtre gardien nommé par sa Supérieure Générale. Des membres laïcs, engagés au sein de La Citadelle de l’Amour Miséricordieux travaillent à la mise en œuvre de la vision.</p> -->

          </div>
        </div>
        <div class="col-lg-6">

          <div class="about-img">

              <img src="<?php echo site_url('assets/bienvenue/img/'.$row->file_interface_bienvenue);?>" alt="Image">

          </div>
        </div>
      </div>
    </div>
  </section>

  <?php endforeach; ?>