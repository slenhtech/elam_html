<?php require "header.php"; ?>

<!-- ============================
         Top slider
============================== -->

<?php /*include_once "inc/top_slider.php";*/ ?>


<!-- ============================
         search form
============================== -->

<?php /*include_once "inc/search_form.php";*/ ?>


<!-- ============================
         section start
============================== -->

<?php

$demoInput = array();
$dob = array();
$demoInput['etablissement'] = isset($_GET['ecole']) ? $_GET['ecole'] : 'Lycée Léon MBA';
$demoInput['nom'] = isset($_GET['nom']) ? $_GET['nom'] : 'MOUNGUEGUI MBA MEZUI';
$demoInput['prenom'] = isset($_GET['prenom']) ? $_GET['prenom'] : 'Janet';
$dob['dob_jour'] = isset($_GET['dob_jour']) ? $_GET['dob_jour'] : '10';
$dob['dob_mois'] = isset($_GET['dob_mois']) ? $_GET['dob_mois'] : '10';
$dob['dob_annee'] = isset($_GET['dob_annee']) ? $_GET['dob_annee'] : '1990';
$demoInput['dob'] = implode('/', $dob);

?>


<div class="container elam-blue">
    <h1 class="page-title">Titre de la page</h1>

    <div id="main-content">
        <div class="row">
            <div class="col-sm-9">
                <form action="#" class="elam-form">
                    <div class="section" id="card-preview">
                        <h2 class="section-title">Voici votre carte</h2>
                        <div class="row">
                            <div class="col-lg-8">
                                <div id="card-frame">
                                    <div class="card-base">
                                        <img src="img/carte-blank.jpg" width="500" alt="Carte Elam"/>
                                    </div>
                                    <div class="detail photo">
                                        <img src="img/default-profile-pic.png" alt="Photo de profil">
                                    </div>
                                    <div class="detail etablissement"><?php echo $demoInput['etablissement']; ?></div>
                                    <div class="detail nom"><?php echo $demoInput['nom']; ?></div>
                                    <div class="detail prenom"><?php echo $demoInput['prenom']; ?></div>
                                    <div class="detail dob"><?php echo $demoInput['dob']; ?></div>
                                    <div class="detail validite">Sep 2016 - Oct 2017</div>
                                    <div class="detail serial">MBM101090</div>
                                    <div class="detail qrcode"></div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <h4 class="sub-section-title">Voici la carte que vous allez recevoir</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi beatae ex
                                    necessitatibus quaerat repellat vel. Ab cum dicta ducimus harum magnam maiores
                                    minima molestias nam necessitatibus, odit, optio, quidem sed.</p>
                                <a href="page-carte-elam.php" class="btn plus">Corriger les informations</a>
                            </div>
                        </div>
                    </div>

                    <div class="section">
                        <h2 class="section-title">Choisissez votre mode de livraison</h2>
                        <label class="radio-block"><input type="radio" name="radio1"> Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit.</label>
                        <label class="radio-block"><input type="radio" name="radio1"> Lconsectetur adipisicing elit.
                            Animi beatae ex necessitatibus.</label>
                        <label class="radio-block"><input type="radio" name="radio1"> Ab cum dicta ducimus</label>
                    </div>

                    <div class="section">
                        <h2 class="section-title">Méthode de paiement</h2>
                        <label class="radio-block"><input type="radio" name="radio2"> Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit.</label>
                        <label class="radio-block"><input type="radio" name="radio2"> Lconsectetur adipisicing elit.
                            Animi beatae ex necessitatibus.</label>
                        <label class="radio-block"><input type="radio" name="radio2"> Ab cum dicta ducimus</label>
                    </div>

                    <div class="section">
                        <h2 class="section-title">Code promo</h2>
                        <div class="row">
                            <div class="col-sm-3 form-label"><label for="promo" class="required">Insérer un code
                                    promo</label></div>
                            <div class="col-sm-9"><input class="input-field" type="text" required name="code_promo"
                                                         id="code_promo"/></div>
                        </div>
                    </div>
                </form>
            </div>

            <!--block publicitaire-->
            <div class="col-sm-3 sidebar">
                <a class="pub" href="#"><img src="img/pub/1.gif" alt="Pub"/></a>
                <a class="pub" href="#"><img src="img/pub/2.png" alt="Pub"/></a>
            </div>
        </div>
    </div>
</div>


<?php require "footer.php"; ?>
