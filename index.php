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

<div id="pub-carte-elam" data-parallax="scroll" data-image-src="img/image-carte-elam.jpg">
    <div class="container">
        <h3 class="the-title">Carte ELAM</h3>
        <div class="the-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi dolore, dolores eius, explicabo facere hic impedit, maiores natus odio officia repudiandae tempore unde voluptate? Atque dolore eveniet molestiae repellendus sunt.</div>
        <a href="page-carte-elam.php" class="btn plus">Obtenir</a>
    </div>
</div>

<div class="container">
    <div id="main-content">
        <div class="row">
            <div class="col-sm-9">
                <section>
                    <h2 class="page-title">événements</h2>
                    <div style="height: 20px;"></div>
                    <div id="carousel_evenements">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="owl-carousel">
                                    <div class="slide">
                                        <div class="the-date">
                                            <span class="the-day">29</span>
                                            <span class="the-month">Jan</span>
                                        </div>

                                        <div class="the-title">
                                            Lorem ipsum
                                        </div>

                                        <div class="the-content extrait">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing
                                            elit. Corporis cum delectus deserunt dolorem, eveniet expedita hic in labore
                                            neque nostrum porro quibusdam quo, recusandae totam vero vitae voluptate,
                                            voluptatem voluptates.
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="the-date">
                                            <span class="the-day">22</span>
                                            <span class="the-month">Fev</span>
                                        </div>

                                        <div class="the-title">
                                            Lorem ipsum
                                        </div>

                                        <div class="the-content extrait">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing
                                            elit. Corporis cum delectus deserunt dolorem, eveniet expedita hic in labore
                                            neque nostrum porro quibusdam quo, recusandae totam vero vitae voluptate,
                                            voluptatem voluptates.
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="the-date">
                                            <span class="the-day">17</span>
                                            <span class="the-month">Mai</span>
                                        </div>

                                        <div class="the-title">
                                            Lorem ipsum
                                        </div>

                                        <div class="the-content extrait">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing
                                            elit. Corporis cum delectus deserunt dolorem, eveniet expedita hic in labore
                                            neque nostrum porro quibusdam quo, recusandae totam vero vitae voluptate,
                                            voluptatem voluptates.
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="the-date">
                                            <span class="the-day">17</span>
                                            <span class="the-month">Aou</span>
                                        </div>

                                        <div class="the-title">
                                            Lorem ipsum
                                        </div>

                                        <div class="the-content extrait">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing
                                            elit. Corporis cum delectus deserunt dolorem, eveniet expedita hic in labore
                                            neque nostrum porro quibusdam quo, recusandae totam vero vitae voluptate,
                                            voluptatem voluptates.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 hidden-xs slide-controls">
                                <div class="row">
                                    <?php for($i = 4; $i <= 7; $i++):?>
                                    <div class="col-xs-6">
                                        <div class="frame<?php if($i == 4){ echo ' active';}?>">
                                            <img src="img/slides/slide<?php echo $i;?>.jpg" alt="img"/>
                                            <div class="details">
                                                <span class="the-date">29 Jan, 2016</span>
                                                <a href="#" class="the-title">Lorem ipsum</a>
                                                <i class="fa fa-graduation-cap"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endfor;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!--block publicitaire-->
            <div class="col-sm-3 block-pub">
                <a href="#"><img src="img/pub/3.gif" alt="Pub"/></a>
                <a href="#"><img src="img/pub/4.gif" alt="Pub"/></a>
            </div>
        </div>


                <!--fin secteur primaire-->

        <div class="row">
            <div class="col-sm-9">
                <section>
                    <h2 class="page-title">Actualités</h2>
                    <div style="height: 40px;"></div>
                    <div class="row articles">
                        <div class="col-sm-4 article"  data-animate="zoomIn">
                            <div class="the-thumbnail">
                                <a href="#" title="title"><img src="img/slides/slide5.jpg" alt="slide 1" class="img-responsive"/></a>
                                <span class="the-category elam-blue">Concours</span>
                            </div>
                            <a href="#" class="the-title" title="title">Lorem ipsum</a>
                            <div class="the-content extrait">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad beatae commodi, cupiditate doloribus eius eos esse et explicabo harum ipsam, iste magnam minus modi perspiciatis quia quo totam veniam!
                            </div>
                        </div>
                        <div class="col-sm-4 article"  data-animate="zoomIn">
                            <div class="the-thumbnail">
                                <a href="#" title="title"><img src="img/slides/slide6.jpg" alt="slide 1" class="img-responsive"/></a>
                                <span class="the-category elam-blue">Concours</span>
                            </div>
                            <a href="#" class="the-title" title="title">Lorem ipsum</a>
                            <div class="the-content extrait">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad beatae commodi, cupiditate doloribus eius eos esse et explicabo harum ipsam, iste magnam minus modi perspiciatis quia quo totam veniam!
                            </div>
                        </div>
                        <div class="col-sm-4 article"  data-animate="zoomIn">
                            <div class="the-thumbnail">
                                <a href="#" title="title"><img src="img/slides/slide7.jpg" alt="slide 1" class="img-responsive"/></a>
                                <span class="the-category elam-blue">Concours</span>
                            </div>
                            <a href="#" class="the-title" title="title">Lorem ipsum</a>
                            <div class="the-content extrait">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad beatae commodi, cupiditate doloribus eius eos esse et explicabo harum ipsam, iste magnam minus modi perspiciatis quia quo totam veniam!
                            </div>
                        </div>
                        <div>
                        </div>
                    </div>

                    <div class="row articles">
                        <div class="col-sm-4 article"  data-animate="zoomIn">
                            <div class="the-thumbnail">
                                <a href="#" title="title"><img src="img/slides/slide4.jpg" alt="slide 1" class="img-responsive"/></a>
                                <span class="the-category elam-blue">Concours</span>
                            </div>
                            <a href="#" class="the-title" title="title">Lorem ipsum</a>
                            <div class="the-content extrait">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad beatae commodi, cupiditate doloribus eius eos esse et explicabo harum ipsam, iste magnam minus modi perspiciatis quia quo totam veniam!
                            </div>
                        </div>
                        <div class="col-sm-4 article"  data-animate="zoomIn">
                            <div class="the-thumbnail">
                                <a href="#" title="title"><img src="img/slides/slide8.jpg" alt="slide 1" class="img-responsive"/></a>
                                <span class="the-category elam-blue">Concours</span>
                            </div>
                            <a href="#" class="the-title" title="title">Lorem ipsum</a>
                            <div class="the-content extrait">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad beatae commodi, cupiditate doloribus eius eos esse et explicabo harum ipsam, iste magnam minus modi perspiciatis quia quo totam veniam!
                            </div>
                        </div>
                        <div class="col-sm-4 article"  data-animate="zoomIn">
                            <div class="the-thumbnail">
                                <a href="#" title="title"><img src="img/slides/slide9.jpg" alt="slide 1" class="img-responsive"/></a>
                                <span class="the-category elam-blue">Concours</span>
                            </div>
                            <a href="#" class="the-title" title="title">Lorem ipsum</a>
                            <div class="the-content extrait">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad beatae commodi, cupiditate doloribus eius eos esse et explicabo harum ipsam, iste magnam minus modi perspiciatis quia quo totam veniam!
                            </div>
                        </div>
                        <div>
                        </div>
                    </div>
                </section>
            </div>
            <!--block publicitaire-->
            <div class="col-sm-3 block-pub">
                <a href="#"><img src="img/pub/1.gif" alt="Pub"/></a>
                <a href="#"><img src="img/pub/6.gif" alt="Pub"/></a>
            </div>
        </div>
    </div>

<div id="test-connaissances">
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


    <div id="main-content">
        <h2 class="page-title">Sponsors & partenaires</h2>

        <ul id="liste-partenaires">
            <?php for($i = 1; $i <= 6; $i++):?>
                <li><a href="#" title="Nom partenaire"><img src="img/sponsors/<?php echo $i;?>.jpg" alt="logo sponsor"/></a></li>
            <?php endfor; ?>
        </ul>
    </div>
</div>


<?php require "footer.php";?>
