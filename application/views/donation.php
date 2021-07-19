<style>
    label.error{
        color: red;
        font-style: italic;
        font-family: open sans, sans-serif
    }
    input.error{
        border: 1px solid red;
    }
    input.valid{
        border: 1px solid green;
    }
</style>

<?php //foreach ($banner as $row): ?>

<!--<div class="bg-15 banner-display-phone" style="position: relative;
    overflow: hidden;
    padding-top: 70px;
    padding-bottom: 70px;
    text-align: center;
    z-index: 1;
    background-image: url('<?php //echo site_url('assets/banniere/don/'.$row->file_banner_don) ?>');
    background-size: cover;
    background-position: center center;
    height: 500px;">
    <div class="container">
        <div class="page-title-content">


        </div>
    </div>
</div> -->


<?php //endforeach;  ?>

<section class="contact-area ptb-40">

    <div class="container">
        <!--  align-items-center -->
        <form id="donate" method="post" action="<?php echo site_url('Donate/treatment')  ?>">
           <div class="row" style="">
                <div class="col-md-2">
                     <!--   <div class="sidebar-widget tags"> -->
                         <!--   <div class="form-group mt-4"> -->
                            <!--    <h3>Mon Don</h3> -->
                              <!--  <select style="font-family: open sans, sans-serif; font-style: italic" class="form-control" id="montant" name="montant">
                                    <option value="5000">5 000 f CFA</option>
                                    <option value="10000">10 000 f CFA</option>
                                    <option value="15000">15 000 f CFA</option>
                                    <option value="20000">20 000 f CFA</option>
                                    <option value="50000">50 000 f CFA</option>
                                    <option value="100000">100 000 f CFA</option>
                                    <option value="150000">150 000 f CFA</option>
                                    <option value="200000">200 000 f CFA</option>
                                    <option value="250000">250 000 f CFA</option>
                                    <option value="300000">300 000 f CFA</option>
                                    <option value="350000">350 000 f CFA</option>
                                    <option value="400000">400 000 f CFA</option>
                                    <option value="450000">450 000 f CFA</option>
                                    <option value="500000">500 000 f CFA</option>
                                </select>
                                <div class="errors"></div>-->
                         <!--   </div> -->
                             <!--  <div>

                                    <label for="montantLibre">Montant libre (f CFA)<span style="color: red">*</span></label>
                                    <input style="font-family: open sans, sans-serif; font-style: italic" class="form-control input-lg" name="montantLibre" id="montantLibre" placeholder="Taper votre montant ici svp!">
                                    <div class="errors"></div>
                              </div>-->
                     <!--   </div> -->
                    </div>

                <div class="col-md-8">
                    <div class="contacts-form">
                        <div class="text-center">
                            <?php
                            if($this->session->flashdata('success-donate')) {echo $this->session->flashdata('success-donate');
                            }elseif ($this->session->flashdata('error-donate')){echo $this->session->flashdata('error-donate');}
                            ?>
                        </div>

                    <div class="contact-title">
                                 <h3>Mon Don</h3>
                                 <p style="font-family: open sans, sans-serif; font-style: italic"> <span style="color: red">*</span> Champs obligatoires</p>
                                    <div class="row">
                                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                            <div class="form-group">
                                                <label for="monney">Montant libre (f CFA)<span style="color: red">*</span></label>
                                                <input style="font-family: open sans, sans-serif; font-style: italic" type="number" class="form-control input-lg" name="monney" id="monney" placeholder="Taper votre montant en chiffre ici svp!">
                                            </div>
                                        </div>
                                    </div>
                                <h3>Information personnelle</h3>
                            </div>
                            <div class="row" style="font-family: open sans, sans-serif; font-style: italic">
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="civilite">Civilité </label>
                                        <select id="civilite" name="civilite" class="form-control" style="font-family: open sans, sans-serif; font-style: italic">
                                            <option value="">-- --</option>
                                            <option value="Monsieur et Madame">Monsieur et Madame</option>
                                            <option value="Madame">Madame</option>
                                            <option value="Mademoiselle">Mademoiselle</option>
                                            <option value="Monsieur">Monsieur</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="nom">Nom</label>
                                        <input style="font-family: open sans, sans-serif; font-style: italic" type="text" name="nom" id="nom" class="form-control" placeholder="Entrer votre nom svp!">

                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="prenoms">Prénoms</label>
                                        <input  style="font-family: open sans, sans-serif; font-style: italic" type="text" name="prenoms" id="prenoms"  class="form-control" placeholder="Entrer votre prénoms svp!">

                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input  style="font-family: open sans, sans-serif; font-style: italic" type="email" name="email" id="email" class="form-control" placeholder="Entrer votre email svp!">

                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label for="ville">Ville</label>
                                                <input style="font-family: open sans, sans-serif; font-style: italic" type="" class="form-control" name="ville" id="ville">

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="pays">Pays </label>
                                        <select id="pays" name="pays" class="form-control" style="font-family: open sans, sans-serif; font-style: italic">
                                            <?php foreach ($pays as $row):  ?>
                                                <option <?php if($row->alpha2 == "CI"){echo 'selected="selected"';} ?> value="<?= $row->alpha2; ?>"><?= $row->nom_fr_fr; ?></option>
                                            <?php endforeach; ?>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="telephone">Téléphone</label>
                                        <input style="font-family: open sans, sans-serif; font-style: italic" type="text" name="telephone" id="telephone"  class="form-control" placeholder="Ex: 00225 0102000452">

                                    </div>
                                </div>
                                <div class="col-lg-8 col-sm-8">

                                    <div class="form-group">
                                        <label for="dateDeNaissance">Date de naissance</label>
                                        <input style="font-family: open sans, sans-serif; font-style: italic" type="date" name="dateDeNaissance" id="dateDeNaissance"  class="form-control">
                                    </div>
                                 <!--   <div class="form-group">
                                        <label for="telephone">Date de naissance</label>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <select class="form-control" id="jour" name="jour">
                                                    <option value="">--</option>
                                                    <option value="01">01</option>
                                                    <option value="02">02</option>
                                                    <option value="03">03</option>
                                                    <option value="04">04</option>
                                                    <option value="05">05</option>
                                                    <option value="06">06</option>
                                                    <option value="07">07</option>
                                                    <option value="08">08</option>
                                                    <option value="09">09</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                    <option value="31">31</option>
                                                </select>

                                            </div>
                                            <div class="col-md-3">
                                                <select class="form-control" id="mois" name="mois">
                                                    <option value="">--</option>
                                                    <option value="01">01</option>
                                                    <option value="02">02</option>
                                                    <option value="03">03</option>
                                                    <option value="04">04</option>
                                                    <option value="05">05</option>
                                                    <option value="06">06</option>
                                                    <option value="07">07</option>
                                                    <option value="08">08</option>
                                                    <option value="09">09</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                </select>

                                            </div>
                                            <div class="col-md-6">
                                                <select class="form-control" id="annee" name="annee">
                                                    <option value="">----</option>
                                                    <option value="2004">2004</option>
                                                    <option value="2003">2003</option>
                                                    <option value="2002">2002</option>
                                                    <option value="2001">2001</option>
                                                    <option value="2000">2000</option>
                                                    <option value="1999">1999</option>
                                                    <option value="1998">1998</option>
                                                    <option value="1997">1997</option>
                                                    <option value="1996">1996</option>
                                                    <option value="1995">1995</option>
                                                    <option value="1994">1994</option>
                                                    <option value="1993">1993</option>
                                                    <option value="1992">1992</option>
                                                    <option value="1991">1991</option>
                                                    <option value="1990">1990</option>
                                                    <option value="1989">1989</option>
                                                    <option value="1988">1988</option>
                                                    <option value="1987">1987</option>
                                                    <option value="1986">1986</option>
                                                    <option value="1985">1985</option>
                                                    <option value="1984">1984</option>
                                                    <option value="1983">1983</option>
                                                    <option value="1982">1982</option>
                                                    <option value="1981">1981</option>
                                                    <option value="1980">1980</option>
                                                    <option value="1979">1979</option>
                                                    <option value="1978">1978</option>
                                                    <option value="1977">1977</option>
                                                    <option value="1976">1976</option>
                                                    <option value="1975">1975</option>
                                                    <option value="1974">1974</option>
                                                    <option value="1973">1973</option>
                                                    <option value="1972">1972</option>
                                                    <option value="1971">1971</option>
                                                    <option value="1970">1970</option>
                                                    <option value="1969">1969</option>
                                                    <option value="1968">1968</option>
                                                    <option value="1967">1967</option>
                                                    <option value="1966">1966</option>
                                                    <option value="1965">1965</option>
                                                    <option value="1964">1964</option>
                                                    <option value="1963">1963</option>
                                                    <option value="1962">1962</option>
                                                    <option value="1961">1961</option>
                                                    <option value="1960">1960</option>
                                                    <option value="1959">1959</option>
                                                    <option value="1958">1958</option>
                                                    <option value="1957">1957</option>
                                                    <option value="1956">1956</option>
                                                    <option value="1955">1955</option>
                                                    <option value="1954">1954</option>
                                                    <option value="1953">1953</option>
                                                    <option value="1952">1952</option>
                                                    <option value="1951">1951</option>
                                                    <option value="1950">1950</option>
                                                    <option value="1949">1949</option>
                                                    <option value="1948">1948</option>
                                                    <option value="1947">1947</option>
                                                    <option value="1946">1946</option>
                                                    <option value="1945">1945</option>
                                                    <option value="1944">1944</option>
                                                    <option value="1943">1943</option>
                                                    <option value="1942">1942</option>
                                                    <option value="1941">1941</option>
                                                    <option value="1940">1940</option>
                                                    <option value="1939">1939</option>
                                                    <option value="1938">1938</option>
                                                    <option value="1937">1937</option>
                                                    <option value="1936">1936</option>
                                                    <option value="1935">1935</option>
                                                    <option value="1934">1934</option>
                                                    <option value="1933">1933</option>
                                                    <option value="1932">1932</option>
                                                    <option value="1931">1931</option>
                                                    <option value="1930">1930</option>
                                                    <option value="1929">1929</option>
                                                    <option value="1928">1928</option>
                                                    <option value="1927">1927</option>
                                                    <option value="1926">1926</option>
                                                    <option value="1925">1925</option>
                                                    <option value="1924">1924</option>
                                                    <option value="1923">1923</option>
                                                    <option value="1922">1922</option>
                                                    <option value="1921">1921</option>
                                                </select>

                                            </div>

                                        </div>


                                    </div>-->
                                </div>
                                <div class="col-lg-12 col-md-12">

                                    <button id="button-don" type="submit" class="default-btn btn-two btn-block">
                                        <span class="spinner-don spinner-grow spinner-grow-sm" style="display: none" role="status" aria-hidden="true"></span>
                                        <span id="sms-don">Je valide mon don</span>
                                    </button>

                                </div>
                            </div>
                    </div>

                </div>

                <div class="col-md-2">

              <!--      <div class="contacts-form">
                        <h3>Mode de paiement</h3>
                        <div class="radio mt-5 form-control">
                            <label style="font-family: open sans, sans-serif; font-style: italic"><input  type="radio"  class="payment" value="cash" aria-label="cash">je donne en Espèce</label>
                        </div>
                        <div class="radio form-control">
                            <label style="font-family: open sans, sans-serif; font-style: italic"><input type="radio"  class="payment" value="orangeMoney" aria-label="orangeMoney">je donne par Orange Money</label>
                        </div>
                        <div class="radio form-control">
                            <label style="font-family: open sans, sans-serif; font-style: italic"><input type="radio"  class="payment" value="moovMoney" aria-label="moovMoney">je donne par Moov Money</label>
                        </div>
                        <div class="radio form-control">
                            <label style="font-family: open sans, sans-serif; font-style: italic"><input type="radio"  class="payment" value="mtnMoney" aria-label="mtnMoney">je donne par Mtn Money</label>
                        </div>
                        <div class="radio form-control">
                            <label style="font-family: open sans, sans-serif; font-style: italic"><input type="radio"  class="payment" value="creditCard" aria-label="creditCard">je donne par Carte bancaire</label>
                        </div>

                        <div>
                            <input type="hidden" name="paymentOption" id="paymentOption">

                        </div>




                    </div> -->


                </div>

        </div>
        </form>
    </div>
</section>
