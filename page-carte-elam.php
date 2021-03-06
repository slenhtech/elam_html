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

<div id="pub-carte-elam" data-parallax="scroll" data-image-src="img/image-carte-elam.jpg">
    <div class="container">
        <h3 class="the-title">Carte ELAM</h3>
        <div class="the-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi dolore, dolores eius,
            explicabo facere hic impedit, maiores natus odio officia repudiandae tempore unde voluptate? Atque dolore
            eveniet molestiae repellendus sunt.
        </div>
    </div>
</div>


<div class="container elam-blue">
    <h1 class="page-title">Titre de la page</h1>

    <div id="main-content">
        <div class="row">
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-sm-9">
                        <form action="page-carte-elam-2.php" class="elam-form" enctype="multipart/form-data">
                            <div class="section">
                                <h2 class="section-title">Informations personnelles</h2>
                                <div class="row">
                                    <div class="col-sm-3 form-label"><label for="prenom" class="required">Prénom</label>
                                    </div>
                                    <div class="col-sm-9"><input class="input-field" type="text" required name="prenom"
                                                                 id="prenom"/></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 form-label"><label for="nom" class="required">Nom</label></div>
                                    <div class="col-sm-9"><input class="input-field" type="text" required name="nom"
                                                                 id="nom"/></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 form-label"><label for="ecole" class="required">Ecole /
                                            Université</label></div>
                                    <div class="col-sm-9"><input class="input-field" type="text" required name="ecole"
                                                                 id="ecole"/></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 form-label"><label for="dob_jour" class="required">Date de
                                            naissance</label></div>
                                    <div class="col-sm-9">
                                        <select name="dob_jour" class="input-field inline" id="dob_jour">
                                            <?php for ($j = 1; $j <= 31; $j++): ?>
                                                <?php $j = $j < 10 ? '0' . $j : $j; ?>
                                                <option value="<?php echo $j; ?>"><?php echo $j; ?></option>
                                            <?php endfor; ?>
                                        </select>
                                        <select name="dob_mois" class="input-field inline" id="dob_mois">
                                            <option value="01">Janvier</option>
                                            <option value="02">Février</option>
                                            <option value="03">Mars</option>
                                            <option value="04">Avril</option>
                                            <option value="05">Mai</option>
                                            <option value="06">Juin</option>
                                            <option value="07">Juillet</option>
                                            <option value="08">Aout</option>
                                            <option value="09">Septembre</option>
                                            <option value="10">Octobre</option>
                                            <option value="11">Novembre</option>
                                            <option value="12">Décembre</option>
                                        </select>
                                        <select name="dob_annee" required class="input-field inline" id="dob_annee">
                                            <?php echo elam_years(); ?>
                                        </select>
                                    <span class="form-tooltip" data-toggle="tooltip"
                                          title="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aspernatur consequatur">?</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 form-label"><label for="telephone" class="required">Numéro de
                                            téléphone</label></div>
                                    <div class="col-sm-9"><input class="input-field" type="text" required
                                                                 name="telephone"
                                                                 id="telephone"/></div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 form-label"><span class="required">Genre</span></div>
                                    <div class="col-sm-9">
                                        <label class="elam-radio homme checked"><input type="radio" checked
                                                                                       name="genre"/>Homme</label>
                                        <label class="elam-radio femme"><input type="radio" name="genre"/>Femme</label>
                                    </div>
                                </div>
                            </div>
                            <div class="section">
                                <h2 class="section-title">Documents</h2>
                                <div class="row">
                                    <div class="col-sm-4 form-label">
                                        <label for="certificat" class="required">Certificat de scolarité</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input class="input-field" type="file" required name="certificat"
                                               id="certificat"/>
                                    </div>
                                </div>
                            </div>
                            <div class="submit-buttons">
                                <button class="btn plus pull-right" type="submit">Etape suivante</button>
                                <a href="page-carte-elam-2.php" class="btn btn-danger pull-left" type="submit"><i
                                        class="fa fa-warning"></i> Sauter cette étape (demo only)</a>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-3">
                        <form action="#" enctype="multipart/form-data" class="elam-form image-form">
                            <label class="frame">
                                <img src="img/default-profile-pic.png" class="img-responsive"
                                     alt="Default picture"/>
                                <input type="file" name="photo" id="photo">
                            </label>
                            <button class="btn submit-btn" type="submit">Télécharger</button>
                        </form>
                    </div>
                </div>
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
