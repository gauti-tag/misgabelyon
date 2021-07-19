<!-- Start Page Title Area -->
<!--<div class="page-title-area bg-15">
  <div class="container">
    <div class="page-title-content">
       <h2>FICHE D’INSCRIPTION « SOUS LE FIGUIER »</h2>
      <ul>
        <li>
          <a href="#">
            Accueil
          </a>
        </li>
        <li class="active">Education/Formation</li>
      </ul>
    </div>
  </div>
</div>-->

<section class="services-area services-area-page ptb-40 our_causes wow flipInX">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-4">
        <div class="single-blog-post">
          <div class="blog-img">
            <a href="#">
              <img src="<?php echo site_url('assets/img/Inscrivez-vous1.png'); ?>" alt="Image">
            </a>
          </div>
        </div>
      </div>

      <div class="col-lg-9">
        <div class="contacts-form">
          <div class="contact-title">
            <h2>Fiche D'inscription Gratuite et Obligatoire </h2>
            <span style="font-style: italic; font-family: open sans, sans-serif" class="red-txt">* Tous les champs sont obligatoires</span>
              <div id="error_info" class="alert-danger livre" role="alert" style="text-align: center">
                  <div id="msgSubmit" class="h3 text-center livre">
                      <?php
                      if($this->session->flashdata('success-inscription')) {echo $this->session->flashdata('success-inscription');
                      }elseif ($this->session->flashdata('error-inscription')){echo $this->session->flashdata('error-inscription');}
                      ?>

                  </div>

              </div>
          </div>
          <form method="POST" role="form" action="<?php echo site_url('Formation/processing'); ?>" enctype="multipart/form-data">
            <div class="row text-justify">
              <div class="col-lg-12 col-sm-12 col-md-6">
                <div class="form-group row">
                    <label style="font-style: italic; font-family: open sans, sans-serif" for="name" class="col-sm-4 col-form-label">Nom <span style="color: red; font-weight: bold">*</span> :</label>
                  <div class="col-sm-8">
                    <input type="text" style="font-style: italic; font-family: open sans, sans-serif" name="name" id="name" class="form-control" placeholder="" required>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 col-sm-12 col-md-6">
                <div class="form-group row">
                  <label style="font-style: italic; font-family: open sans, sans-serif" for="prenoms" class="col-sm-4 col-form-label">Prénom (s) <span style="color: red; font-weight: bold">*</span> : </label>
                  <div class="col-sm-8">
                    <input type="text" style="font-style: italic; font-family: open sans, sans-serif" name="prenoms" id="prenoms" class="form-control" placeholder="" required>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 col-sm-12 col-md-6">
                <div class="form-group row">
                  <label style="font-style: italic; font-family: open sans, sans-serif" for="mobile" class="col-sm-4 col-form-label">Numéro de téléphone mobile <span style="color: red; font-weight: bold">*</span> :</label>
                  <div class="col-sm-8">
                    <input type="text" style="font-style: italic; font-family: open sans, sans-serif" name="mobile" id="mobile" class="form-control"  required>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 col-sm-12 col-md-6">
                <div class="form-group row">
                  <label style="font-style: italic; font-family: open sans, sans-serif" for="email" class="col-sm-4 col-form-label">Adresse E-mail <span style="color: red; font-weight: bold">*</span> :</label>
                  <div class="col-sm-8">
                    <input style="font-style: italic; font-family: open sans, sans-serif" type="email" name="email" id="email" class="form-control" required>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>
                <div class="col-lg-12 col-sm-12 col-md-6">
                    <div class="form-group row">
                        <label style="font-style: italic; font-family: open sans, sans-serif" for="password" class="col-sm-4 col-form-label">Mot de passe <span style="color: red; font-weight: bold">*</span> :</label>
                        <div class="col-sm-8">
                            <input type="password" name="password" id="password" class="form-control" placeholder="" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
              <div class="col-lg-12 col-sm-12 col-md-6">
                <div class="form-group row">
                  <label style="font-style: italic; font-family: open sans, sans-serif" for="pays" class="col-sm-4 col-form-label">Pays de résidence <span style="color: red; font-weight: bold">*</span> :</label>
                  <div class="col-sm-8">
                      <select style="font-style: italic; font-family: open sans, sans-serif" name="pays" class="form-control" required>
                          <?php //foreach ($pays as $row):  ?>
                             <?php  //var_dump($row); die();  ?>
                    <!--      <option value="<?php //echo $row->alpha2; ?>"><?php //echo $row->nom_fr_fr;?></option> -->
                          <?php //endforeach; ?>
                          <option value="CA">Canada</option>
                          <option value="AF">Afghanistan</option>
                          <option value="ZA">Afrique du sud</option>
                          <option value="AX">Åland, îles</option>
                          <option value="AL">Albanie</option>
                          <option value="DZ">Algérie</option>
                          <option value="DE">Allemagne</option>
                          <option value="AD">Andorre</option>
                          <option value="AO">Angola</option>
                          <option value="AI">Anguilla</option>
                          <option value="AQ">Antarctique</option>
                          <option value="AG">Antigua et barbuda</option>
                          <option value="SA">Arabie saoudite</option>
                          <option value="AR">Argentine</option>
                          <option value="AM">Arménie</option>
                          <option value="AW">Aruba</option>
                          <option value="AU">Australie</option>
                          <option value="AT">Autriche</option>
                          <option value="AZ">Azerbaïdjan</option>
                          <option value="BS">Bahamas</option>
                          <option value="BH">Bahreïn</option>
                          <option value="BD">Bangladesh</option>
                          <option value="BB">Barbade</option>
                          <option value="BY">Bélarus</option>
                          <option value="BE">Belgique</option>
                          <option value="BZ">Belize</option>
                          <option value="BJ">Bénin</option>
                          <option value="BM">Bermudes</option>
                          <option value="BT">Bhoutan</option>
                          <option value="BO">Bolivie, l'état plurinational de</option>
                          <option value="BQ">Bonaire, saint eustache et saba</option>
                          <option value="BA">Bosnie herzégovine</option>
                          <option value="BW">Botswana</option>
                          <option value="BV">Bouvet, île</option>
                          <option value="BR">Brésil</option>
                          <option value="BN">Brunei darussalam</option>
                          <option value="BG">Bulgarie</option>
                          <option value="BF">Burkina faso</option>
                          <option value="BI">Burundi</option>
                          <option value="KY">Caïmans, îles</option>
                          <option value="KH">Cambodge</option>
                          <option value="CM">Cameroun</option>
                          <option value="CV">Cap vert</option>
                          <option value="CF">Centrafricaine, république</option>
                          <option value="CL">Chili</option>
                          <option value="CN">Chine</option>
                          <option value="CX">Christmas, île</option>
                          <option value="CY">Chypre</option>
                          <option value="CC">Cocos (keeling), îles</option>
                          <option value="CO">Colombie</option>
                          <option value="KM">Comores</option>
                          <option value="CG">Congo</option>
                          <option value="CD">Congo, la république démocratique du</option>
                          <option value="CK">Cook, îles</option>
                          <option value="KR">Corée, république de</option>
                          <option value="KP">Corée, république populaire démocratique de</option>
                          <option value="CR">Costa rica</option>
                          <option selected="selected" value="CI">Côte d'ivoire</option>
                          <option value="HR">Croatie</option>
                          <option value="CU">Cuba</option>
                          <option value="CW">Curaçao</option>
                          <option value="DK">Danemark</option>
                          <option value="DJ">Djibouti</option>
                          <option value="DO">Dominicaine, république</option>
                          <option value="DM">Dominique</option>
                          <option value="EG">Égypte</option>
                          <option value="SV">El salvador</option>
                          <option value="AE">Émirats arabes unis</option>
                          <option value="EC">Équateur</option>
                          <option value="ER">Érythrée</option>
                          <option value="ES">Espagne</option>
                          <option value="EE">Estonie</option>
                          <option value="US">États unis</option>
                          <option value="ET">Éthiopie</option>
                          <option value="FK">Falkland, îles (malvinas)</option>
                          <option value="FO">Féroé, îles</option>
                          <option value="FJ">Fidji</option>
                          <option value="FI">Finlande</option>
                          <option value="FR">France</option>
                          <option value="GA">Gabon</option>
                          <option value="GM">Gambie</option>
                          <option value="GE">Géorgie</option>
                          <option value="GS">Géorgie du sud et les îles sandwich du sud</option>
                          <option value="GH">Ghana</option>
                          <option value="GI">Gibraltar</option>
                          <option value="GR">Grèce</option>
                          <option value="GD">Grenade</option>
                          <option value="GL">Groenland</option>
                          <option value="GP">Guadeloupe</option>
                          <option value="GU">Guam</option>
                          <option value="GT">Guatemala</option>
                          <option value="GG">Guernesey</option>
                          <option value="GN">Guinée</option>
                          <option value="GW">Guinée bissau</option>
                          <option value="GQ">Guinée équatoriale</option>
                          <option value="GY">Guyana</option>
                          <option value="GF">Guyane française</option>
                          <option value="HT">Haïti</option>
                          <option value="HM">Heard et îles macdonald, île</option>
                          <option value="HN">Honduras</option>
                          <option value="HK">Hong kong</option>
                          <option value="HU">Hongrie</option>
                          <option value="IM">Île de man</option>
                          <option value="UM">Îles mineures éloignées des états unis</option>
                          <option value="VG">Îles vierges britanniques</option>
                          <option value="VI">Îles vierges des états unis</option>
                          <option value="IN">Inde</option>
                          <option value="ID">Indonésie</option>
                          <option value="IR">Iran, république islamique d'</option>
                          <option value="IQ">Iraq</option>
                          <option value="IE">Irlande</option>
                          <option value="IS">Islande</option>
                          <option value="IL">Israël</option>
                          <option value="IT">Italie</option>
                          <option value="JM">Jamaïque</option>
                          <option value="JP">Japon</option>
                          <option value="JE">Jersey</option>
                          <option value="JO">Jordanie</option>
                          <option value="KZ">Kazakhstan</option>
                          <option value="KE">Kenya</option>
                          <option value="KG">Kirghizistan</option>
                          <option value="KI">Kiribati</option>
                          <option value="KW">Koweït</option>
                          <option value="LA">Lao, république démocratique populaire</option>
                          <option value="LS">Lesotho</option>
                          <option value="LV">Lettonie</option>
                          <option value="LB">Liban</option>
                          <option value="LR">Libéria</option>
                          <option value="LY">Libye</option>
                          <option value="LI">Liechtenstein</option>
                          <option value="LT">Lituanie</option>
                          <option value="LU">Luxembourg</option>
                          <option value="MO">Macao</option>
                          <option value="MK">Macédoine, l'ex république yougoslave de</option>
                          <option value="MG">Madagascar</option>
                          <option value="MY">Malaisie</option>
                          <option value="MW">Malawi</option>
                          <option value="MV">Maldives</option>
                          <option value="ML">Mali</option>
                          <option value="MT">Malte</option>
                          <option value="MP">Mariannes du nord, îles</option>
                          <option value="MA">Maroc</option>
                          <option value="MH">Marshall, îles</option>
                          <option value="MQ">Martinique</option>
                          <option value="MU">Maurice</option>
                          <option value="MR">Mauritanie</option>
                          <option value="YT">Mayotte</option>
                          <option value="MX">Mexique</option>
                          <option value="FM">Micronésie, états fédérés de</option>
                          <option value="MD">Moldova, république de</option>
                          <option value="MC">Monaco</option>
                          <option value="MN">Mongolie</option>
                          <option value="ME">Monténégro</option>
                          <option value="MS">Montserrat</option>
                          <option value="MZ">Mozambique</option>
                          <option value="MM">Myanmar</option>
                          <option value="NA">Namibie</option>
                          <option value="NR">Nauru</option>
                          <option value="NP">Népal</option>
                          <option value="NI">Nicaragua</option>
                          <option value="NE">Niger</option>
                          <option value="NG">Nigéria</option>
                          <option value="NU">Niué</option>
                          <option value="NF">Norfolk, île</option>
                          <option value="NO">Norvège</option>
                          <option value="NC">Nouvelle calédonie</option>
                          <option value="NZ">Nouvelle zélande</option>
                          <option value="IO">Océan indien, territoire britannique de l'</option>
                          <option value="OM">Oman</option>
                          <option value="UG">Ouganda</option>
                          <option value="UZ">Ouzbékistan</option>
                          <option value="PK">Pakistan</option>
                          <option value="PW">Palaos</option>
                          <option value="PS">Palestinien occupé, territoire</option>
                          <option value="PA">Panama</option>
                          <option value="PG">Papouasie nouvelle guinée</option>
                          <option value="PY">Paraguay</option>
                          <option value="NL">Pays bas</option>
                          <option value="PE">Pérou</option>
                          <option value="PH">Philippines</option>
                          <option value="PN">Pitcairn</option>
                          <option value="PL">Pologne</option>
                          <option value="PF">Polynésie française</option>
                          <option value="PR">Porto rico</option>
                          <option value="PT">Portugal</option>
                          <option value="QA">Qatar</option>
                          <option value="RE">Réunion</option>
                          <option value="RO">Roumanie</option>
                          <option value="GB">Royaume uni</option>
                          <option value="RU">Russie, fédération de</option>
                          <option value="RW">Rwanda</option>
                          <option value="EH">Sahara occidental</option>
                          <option value="BL">Saint barthélemy</option>
                          <option value="SH">Sainte hélène, ascension et tristan da cunha</option>
                          <option value="LC">Sainte lucie</option>
                          <option value="KN">Saint kitts et nevis</option>
                          <option value="SM">Saint marin</option>
                          <option value="MF">Saint martin(partie française)</option>
                          <option value="SX">Saint martin (partie néerlandaise)</option>
                          <option value="PM">Saint pierre et miquelon</option>
                          <option value="VA">Saint siège (état de la cité du vatican)</option>
                          <option value="VC">Saint vincent et les grenadines</option>
                          <option value="SB">Salomon, îles</option>
                          <option value="WS">Samoa</option>
                          <option value="AS">Samoa américaines</option>
                          <option value="ST">Sao tomé et principe</option>
                          <option value="SN">Sénégal</option>
                          <option value="RS">Serbie</option>
                          <option value="SC">Seychelles</option>
                          <option value="SL">Sierra leone</option>
                          <option value="SG">Singapour</option>
                          <option value="SK">Slovaquie</option>
                          <option value="SI">Slovénie</option>
                          <option value="SO">Somalie</option>
                          <option value="SD">Soudan</option>
                          <option value="SS">Soudan du sud</option>
                          <option value="LK">Sri lanka</option>
                          <option value="SE">Suède</option>
                          <option value="CH">Suisse</option>
                          <option value="SR">Suriname</option>
                          <option value="SJ">Svalbard et île jan mayen</option>
                          <option value="SZ">Swaziland</option>
                          <option value="SY">Syrienne, république arabe</option>
                          <option value="TJ">Tadjikistan</option>
                          <option value="TW">Taïwan, province de chine</option>
                          <option value="TZ">Tanzanie, république unie de</option>
                          <option value="TD">Tchad</option>
                          <option value="CZ">Tchèque, république</option>
                          <option value="TF">Terres australes françaises</option>
                          <option value="TH">Thaïlande</option>
                          <option value="TL">Timor leste</option>
                          <option value="TG">Togo</option>
                          <option value="TK">Tokelau</option>
                          <option value="TO">Tonga</option>
                          <option value="TT">Trinité et tobago</option>
                          <option value="TN">Tunisie</option>
                          <option value="TM">Turkménistan</option>
                          <option value="TC">Turks et caïcos, îles</option>
                          <option value="TR">Turquie</option>
                          <option value="TV">Tuvalu</option>
                          <option value="UA">Ukraine</option>
                          <option value="UY">Uruguay</option>
                          <option value="VU">Vanuatu</option>
                          <option value="VE">Venezuela, république bolivarienne du</option>
                          <option value="VN">Viet nam</option>
                          <option value="WF">Wallis et futuna</option>
                          <option value="YE">Yémen</option>
                          <option value="ZM">Zambie</option>
                          <option value="ZW">Zimbabwe</option>
                      </select>
                  </div>
                </div>
              </div>

                <div class="col-lg-12 col-sm-12 col-md-6">

                    <div class="" style="text-align: justify">     <!--  single-blog-post -->

                        <h3>Les conditions de participation</h3>

                    </div>
                    <div class="" style="text-align: justify; font-family: open sans, sans-serif; font-style: italic">

                        <p>
                            Chers Étudiants-es, <br>
                            En vous inscrivant à la présente formation. vous vous engagez au respect :
                        </p>
                        <ul>
                            <li>Du droit à l'image de l'intervenante et des autres participants;</li>
                            <li>Du caractère privé des enseignements dispensés et des échanges.</li>
                        </ul>
                                     Il vous est par conséquent strictement interdit :
                        <ul>
                            <li>De capturer et de diffuser les images de l'intervenante et des participants quel que soit le support y compris internet et les réseaux sociaux.</li>
                            <li>D'enregistrer les enseignements dispensés et échanges,</li>
                        </ul>

                        <p>Vous notez que toute violation de ces interdictions entraînera des poursuites judiciaires.</p> <br>

                    </div>

                </div>

              <div class="col-12 text-left">
                <div class="form-group checkboxs">
                  <input class="col-form-label" type="checkbox" id="chb2" name="approved" required>
                  <label id="chb2" style="font-family: open sans, sans-serif; font-style: italic">Je reconnais avoir lu et accepté les <a href="#" data-toggle="modal" data-target="#conditions" title="">conditions de participation et metions</a></label>
                  <p>
                  </p>
                </div>
              </div>
              <div class="col-lg-12 col-md-12">
                  <button  class="default-btn btn-block" type="submit">
                      <span>S'inscrire</span>
                  </button>

            <!--    <input type="submit" class="btn btn-primary btn-two btn-block" value=""> -->

              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

</section>


<div class="modal fade" id="conditions" tabindex="-1" aria-labelledby="conditionsLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" style="border: 5px solid #ffd700;">
      <div class="modal-header">
        <h3 class="modal-title" id="conditionsLabel">« Sous le figuier »: Conditions de participation et mentions </h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p style="font-style: italic; font-family: open sans, sans-serif">Conformément aux dispositions du règlement (UE) général sur la protection des données 2016/679 du Parlement européen et du Conseil du 27 avril 2016 et à l’article 32 de la loi « Informatique et libertés » du 6 janvier 1978 modifiée par la loi n°2018-493 du 20 juin 2018, en remplissant ce formulaire et en y apposant ma signature, j’accepte expressément que l’association RIRE prise en la personne de Christelle Aman-Koffi dûment habilitée à collecter et utiliser mes données personnelles que j’ai renseignées, dans le cadre d’un traitement informatique, en vue de me contacter et me tenir régulièrement informé(e) des activités de « SOUS LE FIGUIER ». <br>
              Je suis informé(e) que le destinataire des données et responsable de leur traitement est l’association RIRE représentée en la personne de Christelle Aman-Koffi demeurant à Abidjan Côte d’Ivoire Tél+225 0101000119, E-mail : camankoffi@gmail.com<br>
                Ces données seront conservées pendant 5 ans.<br>
            Je suis informé(e) de mon droit d’accès, de rectification, d’effacement de mes données personnelles, que je peux demander au responsable de leur traitement, soit Christelle Aman-Koffi.
            Je bénéficie également du doit de demander une limitation du traitement de mes données personnelles, du droit de m’opposer au traitement de ces données et du droit à la portabilité de mes données personnelles.
            Je suis informé(e) que je peux retirer mon consentement au traitement de mes données personnelles à tout moment en écrivant au responsable du traitement, soit… <br>
            Je peux introduire une réclamation auprès de la CNIL si j’estime que la protection de mes données personnelles n’a pas été assurée par le responsable du traitement.</p>
      </div>

    </div>
  </div>
</div>
