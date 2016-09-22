<?php require "header.php";?>

<!-- ============================
         Top slider
============================== -->

<?php include_once "inc/top_slider.php";?>


<!-- ============================
         search form
============================== -->

<?php include_once "inc/search_form.php";?>


<?php $secteurClass = 'fonction-pub';?>


<!-- ============================
         section start
============================== -->

<div class="container <?php echo $secteurClass;?>">
    <div id="main-content">
                <h1 class="page-title">Chef(fe) d'équipe agricole</h1>
                <h2 class="section-title">Agriculture et la pêche</h2>
                <p class="section-alt-title">Exploitation de cultures</p>
            </div>
</div>
<div id="banner-fsbo" style="background-image: url('img/img.jpg')">
    <div class="container">
        <div id="text-fsbo">Sponsorisé par la Fondation Sylvia Bongo Ondimba <img src="img/fsbo.png" height="120" alt="Logo FSBO"></div>
    </div>
</div>

<div class="container <?php echo $secteurClass;?>">
    <div id="main-content">
            <div class="row">
                <div class="col-sm-9">
                    <h3 class="section-title">Description</h3>
                    <div class="row" id="description-table">

                        <div class="col-sm-4 col-sm-push-8">
                            <div class="frame">
                                <img src="img/3.jpg" alt="Photo metier">
                            </div>
                        </div>
                        <div class="col-sm-8 col-sm-pull-4">
                            <div class="row">
                                <div class="col-sm-6 tlabel">Niveau d'études minimal</div>
                                <div class="col-sm-6 data">Niveau pré-Bac jusqu'à Bac +3</div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 tlabel">Bac conseillé</div>
                                <div class="col-sm-6 data">Pas de diplôme obligatoire</div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 tlabel">Selectivité des études</div>
                                <div class="col-sm-6 data">Non</div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 tlabel">Insertion professionnelle</div>
                                <div class="col-sm-6 data">N/A</div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 tlabel">Salaire débutant</div>
                                <div class="col-sm-6 data">Entre 200 000 et 400 000 FCFA</div>
                            </div>
                        </div>
                    </div>
                    <div class="the-content">
                        <p>Lorem ipsum dolor sit amet, <strong>consectetur adipisicing elit</strong>. Accusantium ad, adipisci alias aliquid amet, architecto asperiores atque aut earum enim, fugiat ipsam magnam minus <strong>quibusdam rerum soluta</strong> velit voluptate voluptatibus!</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <ul>
                            <li>Accusantium ad, adipisci alias aliquid amet</li>
                            <li>Fugiat ipsam magnam minus quibusdam</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur corporis, cum cumque enim facere laudantium maiores nam nemo temporibus vero? <strong>Dolore labore nam nihil officia perferendis qui quidem tempore voluptatum</strong>.</p>
                    </div>
                </div>
                
                
                <!--block publicitaire-->
                <div class="col-sm-3 block-pub">
                    <a href="#"><img src="img/pub/1.gif" alt="Pub"/></a>
                    <a href="#"><img src="img/pub/2.png" alt="Pub"/></a>
                </div>
            </div>


            <span class="separator"></span>

            <!-- ============================
                     liste des métiers
            ============================== -->
            <h3 class="section-title">Formations liées</h3>

            <div class="row">
                <div class="col-sm-9">
                    <div id="carousel_metiers">
                        <div class="carousel-controls">
                            <span class="control prev fa fa-angle-left"></span>
                            <span class="control next fa fa-angle-right"></span>
                        </div>
                        <div class="owl-carousel owl-theme">
                            <?php for($i = 2; $i <=8; $i++):?>
                                <div class="slide">
                                    <img  class="lazyOwl" data-src="img/<?php echo $i;?>.jpg" src="img/<?php echo $i;?>.jpg" alt="Image">

                                    <span class="the-title">Ingénieur agricole</span>
                                    <span class="search-icon" title="En savoir plus"></span>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>

                    <div id="metiers-du-secteur">
                        <h3 class="section-title">Autres metiers liés</h3>

                        <div id="liste_metiers" class="row">
                            <?php for ($i =0; $i < 10; $i++):?>
                                <div class="col-xs-6 col-sm-4"><a href="page-metier-par-secteur.php">Mécanicien(ne) agricole</a></div>
                            <?php endfor;?>
                        </div>

                        <a href="page-metier-par-secteur.php" class="btn plus">Lire la suite</a>
                    </div>

                    <div id="section_temoignages">
                        <h3 class="section-title">Témoignages</h3>

                        <div class="owl-carousel owl-theme">
                            <?php for($i = 0; $i <=8; $i++):?>
                                <div class="slide">
                                    <div class="the-picture-thumbnail">
                                        <img class="lazyOwl" src="img/slides/slide2.jpg" data-src="img/slides/slide2.jpg" alt="Image">
                                    </div>
                                    <div class="the-details">
                                        <strong>John Doe,</strong>  Company Inc.
                                    </div>
                                    <div class="the-content">
                                        "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda maxime nobis nulla vel? Accusamus, animi culpa deserunt impedit in iure laboriosam, laudantium natus nostrum quam quasi quis repudiandae veniam voluptate. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam corporis eum itaque nesciunt temporibus! A accusamus accusantium consequatur, esse ex facere nesciunt pariatur praesentium rem saepe similique, sint sit voluptatum."
                                    </div>
                                </div>
                            <?php endfor; ?>
                        </div>
                        <div class="carousel-controls">
                            <span class="control prev fa fa-angle-left"></span>
                            <span class="control next fa fa-angle-right"></span>
                        </div>
                    </div>
                </div>

                <!--block publicitaire-->
                <div class="col-sm-3 block-pub">
                    <a href="#"><img src="img/pub/3.gif" alt="Pub"/></a>
                    <a href="#"><img src="img/pub/4.gif" alt="Pub"/></a>
                    <a href="#"><img src="img/pub/5.gif" alt="Pub"/></a>
                    <a href="#"><img src="img/pub/6.gif" alt="Pub"/></a>
                    <a href="#"><img src="img/pub/7.gif" alt="Pub"/></a>
                    <a href="#"><img src="img/pub/1.gif" alt="Pub"/></a>
                </div>
            </div>


        </div>
</div>

<div id="test-connaissances">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 title">
                <span>Tester vos connaissances</span>
            </div>
            <div class="col-sm-2 button">
                <a href="#" class="fa fa-play-circle-o"></a>
            </div>
            <div class="col-sm-5 description">
                <p>Aut deleniti dolorum eaque enim est explicabo illum inventore iste itaque labore</p>
            </div>
        </div>
    </div>
</div>


<div class="container <?php echo $secteurClass;?>">
    <div id="main-content">
            <h3 class="section-title">Sponsors & partenaires</h3>

            <ul id="liste-partenaires">
                <?php for($i = 1; $i <= 6; $i++):?>
                <li><a href="#" title="Nom partenaire"><img src="img/sponsors/<?php echo $i;?>.jpg" alt="logo sponsor"/></a></li>
                <?php endfor; ?>
            </ul>
        </div>
</div>



<?php require "footer.php";?>
