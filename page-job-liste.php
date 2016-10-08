<?php require "header.php";?>

<!-- ============================
         Top slider
============================== -->

<?php include_once "inc/top_slider.php";?>


<!-- ============================
         search form
============================== -->

<?php include_once "inc/search_form.php";?>

<?php $secteurClass = isset($_GET['c']) ? $_GET['c'] : 'elam-blue'; ?>

<!-- ============================
         section start
============================== -->

<div class="container  <?php echo $secteurClass;?>">
    <div id="main-content">
        <h1 class="page-title">Jobs</h1>
        <h2 class="section-title">500 Jobs</h2>

        <div class="row">
            <div id="grande-liste-metiers" class="col-sm-9">
                <?php for($i = 1; $i <= 15; $i++):?>
                    <a href="page-job-detail.php" class="row metier">
                        <div class="col-sm-4" data-animate="fadeInUp">
                            <div class="image">
                                <img src="img/sponsors/2.jpg" class="img-responsive"/>
                            </div>
                        </div>

                        <div class="col-sm-8" data-animate="fadeInUp">
                            <div class="details">
                                <h4 class="the-title">Responsable de plantation <span class="badge">4 postes</span></h4>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <span class="the-employer">Plainfield Precision</span>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="the-location">Port-Gentil</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="the-date">Publié le: 06/10/2016</div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="job-types">
                                            <span class="job-type cdd">CDD</span>
                                            <span class="job-type cdi">CDI</span>
                                            <span class="job-type stage">Stage</span>
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



<?php require "footer.php";?>
