<?php require "header.php";?>

<!-- ============================
         Top slider
============================== -->

<?php include_once "inc/top_slider.php";?>


<!-- ============================
         search form
============================== -->

<?php include_once "inc/search_form.php";?>


<?php $secteurClass = 'sante';?>


<!-- ============================
         section start
============================== -->

<div class="container <?php echo $secteurClass;?>">
    <div id="main-content">
        <h1 class="page-title">Métiers</h1>
        <h2 class="section-title">Agriculture et la pêche</h2>
        <p class="section-alt-title">Métiers par ordre alphabétique</p>
    </div>
</div>
<div id="banner-fsbo" style="background-image: url('img/img.jpg')">
    <div class="container">
        <div id="text-fsbo">Sponsorisé par la Fondation Sylvia Bongo Ondimba <img src="img/fsbo.png" height="120" alt="Logo FSBO"></div>
    </div>
</div>

<div class="container <?php echo $secteurClass;?>">
    <div id="main-content">
            <h3 class="section-title">En mots</h3>

            <div class="row">
                <div class="col-sm-9">
                    <div class="the-content">
                        <p>Lorem ipsum dolor sit amet, <strong>consectetur adipisicing elit</strong>. Accusantium ad, adipisci alias aliquid amet, architecto asperiores atque aut earum enim, fugiat ipsam magnam minus <strong>quibusdam rerum soluta</strong> velit voluptate voluptatibus!</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <ul>
                            <li>Accusantium ad, adipisci alias aliquid amet</li>
                            <li>Fugiat ipsam magnam minus quibusdam</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur corporis, cum cumque enim facere laudantium maiores nam nemo temporibus vero? <strong>Dolore labore nam nihil officia perferendis qui quidem tempore voluptatum</strong>.</p>
                    </div>

                    <div class="row chart">
                        <div class="col-sm-5">
                            <canvas class="elam-chart" data-value="34" data-color="#73a028" height="58" id="agri-peche"></canvas>
                            <div class="label">Contribution au PIB</div>
                        </div>
                        <div class="col-sm-6">
                            <div class="opportunites" data-toggle="tooltip" title="55%">
                                <img src="img/progress-bar.png" width="100" alt="progress-bar">
                                <span class="progress-value" data-animate="fadeInLeft" style="width: 55%"></span>
                            </div>
                            <div class="label">Opportunités d'emploi</div>
                        </div>
                    </div>
                </div>

                <!--block publicitaire-->
                <div class="col-sm-3 block-pub">
                    <a href="#"><img src="img/pub/1.gif" alt="Pub"/></a>
                </div>
            </div>
        

            <span class="separator"></span>

            <!-- ============================
                     liste des métiers
            ============================== -->

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

                    <div id="section_temoignages">
                        <h3 class="section-title">Les professionnels en parlent</h3>

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

                    <div id="metiers-du-secteur">
                        <h3 class="section-title">Quelques métiers du secteur</h3>

                        <div id="liste_metiers" class="row">
                            <?php for ($i =0; $i < 10; $i++):?>
                                <div class="col-xs-6 col-sm-4"><a href="page-metier.php">Mécanicien(ne) agricole</a></div>
                            <?php endfor;?>
                        </div>

                        <a href="#" class="btn plus">Lire la suite</a>
                    </div>
                </div>

                <!--block publicitaire-->
                <div class="col-sm-3 block-pub">
                    <a href="#"><img src="img/pub/2.png" alt="Pub"/></a>
                    <a href="#"><img src="img/pub/6.gif" alt="Pub"/></a>
                    <a href="#"><img src="img/pub/3.gif" alt="Pub"/></a>
                    <a href="#"><img src="img/pub/4.gif" alt="Pub"/></a>
                </div>
            </div>


        </div>
</div>


<?php require "footer.php";?>
