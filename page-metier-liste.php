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

<div class="container">
    <div id="main-content">
        <h1 class="page-title">Métiers</h1>
        <h2 class="section-title">500 Métiers</h2>

        <div class="search-filter">
            <span class="the-label">Trier par :</span>
            <div class="dropdown">
                <button type="button" class="btn-block" id="dropdownMenu1" data-toggle="dropdown">Sélectionnez</button>
                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                    <li>
                        <a class="filtre asc" href="#">Par parametre 1</a>
                    </li>
                    <li>
                        <a class="filtre dsc" href="#">Par parametre 1</a>
                    </li>
                    <li>
                        <a class="filtre asc" href="#">Par parametre 2</a>
                    </li>
                    <li>
                        <a class="filtre dsc" href="#">Par parametre 2</a>
                    </li>
                    <li>
                        <a class="filtre asc" href="#">Par parametre 3</a>
                    </li>
                    <li>
                        <a class="filtre dsc" href="#">Par parametre 3</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div id="grande-liste-metiers" class="col-sm-9">
                <?php
                $elam_secteurs_activite = array(
                    "mines",
                    "agri-peche",
                    "petro-gaz",
                    "bois",
                    "construction",
                    "eau-electro",
                    "industrie-manu",
                    "banque",
                    "education",
                    "fonction-pub",
                    "logistique",
                    "sante",
                    "telecom",
                    "tourisme",
                    "support",
                    "elam-primary",
                    "elam-secondary",
                    "elam-tertiary",
                    "elam-green",
                    "elam-blue"
                );
                foreach ($elam_secteurs_activite as $secteurClass):?>
                    <a href="page-metier.php" class="row <?php echo $secteurClass; ?> metier">
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
                <?php endforeach; ?>
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
