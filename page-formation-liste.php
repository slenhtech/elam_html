<?php require "header.php"; ?>

<!-- ============================
         Top slider
============================== -->

<?php include_once "inc/top_slider.php"; ?>


<!-- ============================
         search form
============================== -->

<?php include_once "inc/search_form.php"; ?>

<?php $secteurClass = isset($_GET['c']) ? $_GET['c'] : 'elam-blue'; ?>

<!-- ============================
         section start
============================== -->

<div class="container  <?php echo $secteurClass; ?>">
    <div id="main-content">
        <h1 class="page-title">Formations</h1>
        <h2 class="section-title">500 formations</h2>

        <div class="row">
            <div id="grande-liste-metiers" class="col-sm-9">
                <?php for ($i = 1; $i <= 15; $i++): ?>
                    <a href="page-formation.php" class="row metier">
                        <div class="col-sm-4" data-animate="fadeInUp">
                            <div class="image">
                                <img src="img/sponsors/logo-afram.png" class="img-responsive"/>
                            </div>
                        </div>

                        <div class="col-sm-8" data-animate="fadeInUp">
                            <div class="details">
                                <h4 class="the-title">Bachelor en Administration des affaires</h4>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <span class="the-school">Académie Fraco-Américaine de Management</span>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="the-location">Libreville</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="job-types">
                                            <span class="job-type cdd">Etablissement privé</span>
                                            <span class="job-type cdi">Etablissement public</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endfor; ?>
            </div>


            <!--block publicitaire-->
            <div class="col-sm-3 block-pub">
                <a href="#"><img src="img/pub/1.gif" alt="Pub"/></a>
                <a href="#"><img src="img/pub/2.png" alt="Pub"/></a>
            </div>
        </div>
    </div>
</div>


<?php require "footer.php"; ?>
