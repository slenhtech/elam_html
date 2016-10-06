<?php require "header.php";?>

<!-- ============================
         Top slider
============================== -->

<?php include_once "inc/top_slider.php";?>


<!-- ============================
         search form
============================== -->

<?php include_once "inc/search_form.php";?>



<!-- ============================
         section start
============================== -->

<div class="container">
    <div id="main-content">
        <h1 class="page-title">Métiers</h1>
        <section>
            <h2 class="section-title">Secteur primaire</h2>
            <p class="section-alt-title">Exploitation directe de ressources naturelles</p>
            <div class="row">
                <div class="col-sm-9">
                    <?php
                            $secteur_primaire = array(
                                "mines" => array("Les mines", 46, "#703629", 2),
                                "agri-peche" => array("Agriculture et la pêche", 63, "#73a028", 3),
                                "petro-gaz" => array("Le pétrole et le gaz", 53, "#324f69", 1)
                            );

                            $i = 0;
                            foreach ($secteur_primaire as $class => $activite):
                                $push = (bool)( $i % 2 ) ? ' col-md-push-7 ' : '';
                                $pull = (bool)( $i % 2 ) ? ' col-md-pull-5 ' : '';
                                ?>
                                <div class="row articles secteur-activite <?php echo $class;?>">
                                    <div class="col-md-5 <?php echo $push;?>text">
                                        <h3 class="the-title"><?php echo $activite[0];?></h3>
                                        <div class="description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda dignissimos ex odio odit tempore vel? Aliquam aspernatur consequatur cupiditate ex minus mollitia officia optio perspiciatis, sint sunt ullam unde voluptatum.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit:</p>
                                            <ul>
                                                <li>Lorem ipsum dolor sit amet</li>
                                                <li>consectetur adipisicing elit</li>
                                            </ul>

                                            <p>At blanditiis consequuntur culpa dolor eaque ipsum itaque iure necessitatibus non obcaecati optio qui reiciendis repellat saepe sapiente similique, voluptate! Laboriosam, reiciendis?</p>
                                        </div>
                                    </div>
                                    <div class="col-md-7 <?php echo $pull;?>images">
                                        <div class="row">
                                            <div class="vert-carousel">
                                                <div class="col-md-8">
                                                    <div class="main-carousel owl-carousel owl-theme">
                                                        <div class="slide"
                                                             style="background-image: url('img/metier3.jpg')"></div>
                                                        <div class="slide"
                                                             style="background-image: url('img/metier.jpg')"></div>
                                                        <div class="slide"
                                                             style="background-image: url('img/metier4.jpg')"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 hidden-xs hidden-sm thumbnails">
                                                    <span class="control prev fa fa-angle-up"></span>
                                                    <ul class="thumbs">
                                                        <li class="thumb"
                                                            style="background-image: url('img/metier3.jpg')"></li>
                                                        <li class="thumb"
                                                            style="background-image: url('img/metier.jpg')"></li>
                                                        <li class="thumb"
                                                            style="background-image: url('img/metier4.jpg')"></li>
                                                    </ul>
                                                    <span class="control next fa fa-angle-down"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row chart">
                                    <div class="col-xs-6 col-md-4">
                                        <div class="diagram">
                                            <canvas class="elam-chart" data-value="<?php echo $activite[1]; ?>"
                                                    data-color="<?php echo $activite[2]; ?>" height="70"
                                                    id="<?php echo $class; ?>"></canvas>
                                        </div>

                                        <div class="label">Contribution au PIB</div>
                                    </div>
                                    <div class="col-xs-6 col-md-4  <?php echo $class; ?>">
                                        <div class="diagram">
                                            <div class="opportunites" data-toggle="tooltip"
                                                 title="<?php echo opportunite($activite[3], 1); ?>">
                                                <img src="img/progress-bar-2.png" width="90" alt="progress-bar">
                                            <span class="progress-value" data-animate="fadeInLeft"
                                                  style="width: <?php echo $activite[3] * 30; ?>px"></span>
                                            </div>
                                        </div>
                                        <div class="label">Croissance du secteur</div>
                                    </div>
                                    <div class="col-xs-6 col-md-4  <?php echo $class; ?>">
                                        <div class="diagram">
                                            <div class="opportunites" data-toggle="tooltip"
                                                 title="<?php echo opportunite($activite[3]); ?>">
                                                <img src="img/progress-bar.png" width="90" alt="progress-bar">
                                            <span class="progress-value" data-animate="fadeInLeft"
                                                  style="width: <?php echo $activite[3] * 30; ?>px"></span>
                                            </div>
                                        </div>

                                        <div class="label">Opportunités d'emploi</div>
                                    </div>
                                    <div class="col-xs-12">
                                        <a href="page-secteurs_details.php" class="btn plus <?php echo $class;?>">En savoir plus</a>
                                    </div>
                                </div>

                                <?php $i++;
                            endforeach;?>
                        </div>
                <!--block publicitaire-->
                <div class="col-sm-3 block-pub">
                    <a href="#"><img src="img/pub/1.gif" alt="Pub"/></a>
                    <a href="#"><img src="img/pub/2.png" alt="Pub"/></a>
                    <a href="#"><img src="img/pub/3.gif" alt="Pub"/></a>
                    <a href="#"><img src="img/pub/4.gif" alt="Pub"/></a>
                    <a href="#"><img src="img/pub/5.gif" alt="Pub"/></a>
                    <a href="#"><img src="img/pub/6.gif" alt="Pub"/></a>
                    <a href="#"><img src="img/pub/3.gif" alt="Pub"/></a>
                </div>
            </div>
        </section>
    </div>
</div>


<?php require "footer.php";?>
