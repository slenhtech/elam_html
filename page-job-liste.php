<?php require "header.php";?>

<!-- ============================
         Top slider
============================== -->

<?php include_once "inc/top_slider.php";?>


<!-- ============================
         search form
============================== -->

<?php include_once "inc/search_form.php";?>

<?php $secteurClass = isset($_GET['c']) ? $_GET['c'] :'fonction-pub';?>

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
                        <div class="col-sm-3" data-animate="fadeInUp">
                            <div class="image">
                                <img src="img/farmer.jpg"image" class="img-responsive"/>
                            </div>
                        </div>

                        <div class="col-sm-9" data-animate="fadeInUp">
                            <div class="details">
                                <h4 class="the-title">Responsable de plantation</h4>
                                <span class="the-category">L'agriculture et la pêche</span>
                                <div class="the-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
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
