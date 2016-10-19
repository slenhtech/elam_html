<?php require "header.php"; ?>

<!-- ============================
         section start
============================== -->

<div class="container">
    <div id="main-content">
        <h1 class="page-title">Lorem ipsum dolor sit amet</h1>

        <div class="row">
            <div class="col-sm-9">
                <div id="carousel_evenements">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="owl-carousel">
                                <a href="#" class="slide">
                                    <div class="the-date">
                                        <span class="the-day">29</span>
                                        <span class="the-month">Jan</span>
                                    </div>

                                    <div class="the-title">Lorem ipsum</div>

                                    <div class="the-content extrait">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Corporis cum delectus deserunt dolorem, eveniet expedita hic in labore
                                        neque nostrum porro quibusdam quo, recusandae totam vero vitae voluptate,
                                        voluptatem voluptates.
                                    </div>
                                </a>
                                <a href="#" class="slide">
                                    <div class="the-date">
                                        <span class="the-day">22</span>
                                        <span class="the-month">Fev</span>
                                    </div>

                                    <div class="the-title">
                                        Lorem ipsum
                                    </div>

                                    <div class="the-content extrait">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Corporis cum delectus deserunt dolorem, eveniet expedita hic in labore
                                        neque nostrum porro quibusdam quo, recusandae totam vero vitae voluptate,
                                        voluptatem voluptates.
                                    </div>
                                </a>
                                <a href="#" class="slide">
                                    <div class="the-date">
                                        <span class="the-day">17</span>
                                        <span class="the-month">Mai</span>
                                    </div>

                                    <div class="the-title">
                                        Lorem ipsum
                                    </div>

                                    <div class="the-content extrait">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Corporis cum delectus deserunt dolorem, eveniet expedita hic in labore
                                        neque nostrum porro quibusdam quo, recusandae totam vero vitae voluptate,
                                        voluptatem voluptates.
                                    </div>
                                </a>
                                <a href="#" class="slide">
                                    <div class="the-date">
                                        <span class="the-day">17</span>
                                        <span class="the-month">Aou</span>
                                    </div>

                                    <div class="the-title">
                                        Lorem ipsum
                                    </div>

                                    <div class="the-content extrait">Lorem ipsum dolor sit amet, consectetur adipisicing
                                        elit. Corporis cum delectus deserunt dolorem, eveniet expedita hic in labore
                                        neque nostrum porro quibusdam quo, recusandae totam vero vitae voluptate,
                                        voluptatem voluptates.
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-7 hidden-xs slide-controls">
                            <div class="row">
                                <?php for ($i = 4; $i <= 7; $i++): ?>
                                    <div class="col-xs-6">
                                        <div class="frame<?php if ($i == 4) {
                                            echo ' active';
                                        } ?>">
                                            <img src="img/slides/slide<?php echo $i; ?>.jpg" alt="img"/>
                                            <div class="details">
                                                <span class="the-date">29 Jan, 2016</span>
                                                <a href="#" class="the-title">Lorem ipsum</a>
                                                <i class="fa fa-graduation-cap"></i>
                                            </div>
                                        </div>
                                    </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="articles article-large row">
                    <div class="col-sm-5 article" data-animate="zoomIn">
                        <div class="the-thumbnail">
                            <a href="page-article.php">
                                <img src="img/5.jpg" alt="Image" class="img-responsive">
                            </a>
                            <span class="the-category elam-secondary">Category</span>
                        </div>

                    </div>
                    <div class="col-sm-7 article">
                        <div class="content">
                            <a href="page-article.php"><h4 class="the-title">The title</h4></a>
                            <div class="the-content extrait">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Aspernatur atque autem consequuntur cumque cupiditate excepturi fuga impedit, iure
                                mollitia nam numquam placeat quam quis reiciendis similique suscipit unde. Autem, saepe?
                            </div>
                            <a href="page-article.php" class="the-btn plus">Lire plus</a>
                            <div class="the-metadata">
                                <div class="the-date">20 Sep 2016</div>
                                <div class="the-author">John Doe</div>
                                <a href="page-article.php" class="the-comments">0 commentaires</a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="row articles">
                    <div class="col-sm-4 article" data-animate="zoomIn">
                        <div class="the-thumbnail">
                            <a href="page-article.php" title="title"><img src="img/img.jpg" alt="slide 1"
                                                                          class="img-responsive"/></a>
                            <span class="the-category elam-secondary">Agri/pêche</span>
                        </div>
                        <a href="page-article.php" class="the-title" title="title">Lorem ipsum dolor sit
                            amet</a>
                        <div class="the-metadata">
                            <span class="the-date">20 Sept 2016</span>
                            <span class="the-author">The author</span>
                        </div>
                        <div class="the-content extrait">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Accusamus ad beatae commodi, cupiditate doloribus eius eos esse et explicabo harum ipsam,
                            iste magnam minus modi perspiciatis quia quo totam veniam!
                        </div>
                    </div>
                    <div class="col-sm-4 article" data-animate="zoomIn">
                        <div class="the-thumbnail">
                            <a href="page-article.php" title="title"><img src="img/2.jpg" alt="slide 1"
                                                                          class="img-responsive"/></a>
                            <span class="the-category elam-primary">Agri/pêche</span>
                        </div>
                        <a href="page-article.php" class="the-title" title="title">Lorem ipsum dolor sit
                            amet</a>
                        <div class="the-metadata">
                            <span class="the-date">20 Sept 2016</span>
                            <span class="the-author">The author</span>
                        </div>
                        <div class="the-content extrait">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Accusamus ad beatae commodi, cupiditate doloribus eius eos esse et explicabo harum ipsam,
                            iste magnam minus modi perspiciatis quia quo totam veniam!
                        </div>
                    </div>
                    <div class="col-sm-4 article" data-animate="zoomIn">
                        <div class="the-thumbnail">
                            <a href="page-article.php" title="title"><img src="img/3.jpg" alt="slide 1"
                                                                          class="img-responsive"/></a>
                            <span class="the-category elam-tertiary">Agri/pêche</span>
                        </div>
                        <a href="page-article.php" class="the-title" title="title">Lorem ipsum dolor sit
                            amet</a>
                        <div class="the-metadata">
                            <span class="the-date">20 Sept 2016</span>
                            <span class="the-author">The author</span>
                        </div>
                        <div class="the-content extrait">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Accusamus ad beatae commodi, cupiditate doloribus eius eos esse et explicabo harum ipsam,
                            iste magnam minus modi perspiciatis quia quo totam veniam!
                        </div>
                    </div>
                </div>
                <div class="row articles">
                    <div class="col-sm-4 article" data-animate="zoomIn">
                        <div class="the-thumbnail">
                            <a href="page-article.php" title="title"><img src="img/img.jpg" alt="slide 1"
                                                                          class="img-responsive"/></a>
                            <span class="the-category elam-secondary">Agri/pêche</span>
                        </div>
                        <a href="page-article.php" class="the-title" title="title">Lorem ipsum dolor sit
                            amet</a>
                        <div class="the-metadata">
                            <span class="the-date">20 Sept 2016</span>
                            <span class="the-author">The author</span>
                        </div>
                        <div class="the-content extrait">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Aspernatur atque autem consequuntur cumque cupiditate excepturi fuga impedit, iure mollitia
                            nam numquam placeat quam quis reiciendis similique suscipit unde. Autem, saepe?
                        </div>
                    </div>
                    <div class="col-sm-4 article" data-animate="zoomIn">
                        <div class="the-thumbnail">
                            <a href="page-article.php" title="title"><img src="img/2.jpg" alt="slide 1"
                                                                          class="img-responsive"/></a>
                            <span class="the-category elam-primary">Agri/pêche</span>
                        </div>
                        <a href="page-article.php" class="the-title" title="title">Lorem ipsum dolor sit
                            amet</a>
                        <div class="the-metadata">
                            <span class="the-date">20 Sept 2016</span>
                            <span class="the-author">The author</span>
                        </div>
                        <div class="the-content extrait">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad beatae commodi,
                            cupiditate doloribus eius eos esse et explicabo harum ipsam, iste magnam minus modi
                            perspiciatis quia quo totam veniam!
                        </div>
                    </div>
                    <div class="col-sm-4 article" data-animate="zoomIn">
                        <div class="the-thumbnail">
                            <a href="page-article.php" title="title"><img src="img/3.jpg" alt="slide 1"
                                                                          class="img-responsive"/></a>
                            <span class="the-category elam-tertiary">Agri/pêche</span>
                        </div>
                        <a href="page-article.php" class="the-title" title="title">Lorem ipsum dolor sit
                            amet</a>
                        <div class="the-metadata">
                            <span class="the-date">20 Sept 2016</span>
                            <span class="the-author">The author</span>
                        </div>
                        <div class="the-content extrait">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad beatae commodi,
                            cupiditate doloribus eius eos esse et explicabo harum ipsam, iste magnam minus modi
                            perspiciatis quia quo totam veniam!
                        </div>
                    </div>
                </div>

                <div class="row articles">
                    <div class="col-sm-4 article" data-animate="zoomIn">
                        <div class="the-thumbnail">
                            <a href="page-article.php" title="title"><img src="img/img.jpg" alt="slide 1"
                                                                          class="img-responsive"/></a>
                            <span class="the-category elam-secondary">Agri/pêche</span>
                        </div>
                        <a href="page-article.php" class="the-title" title="title">Lorem ipsum dolor sit
                            amet</a>
                        <div class="the-metadata">
                            <span class="the-date">20 Sept 2016</span>
                            <span class="the-author">The author</span>
                        </div>
                        <div class="the-content extrait">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad beatae commodi,
                            cupiditate doloribus eius eos esse et explicabo harum ipsam, iste magnam minus modi
                            perspiciatis quia quo totam veniam!
                        </div>
                    </div>
                    <div class="col-sm-4 article" data-animate="zoomIn">
                        <div class="the-thumbnail">
                            <a href="page-article.php" title="title"><img src="img/2.jpg" alt="slide 1"
                                                                          class="img-responsive"/></a>
                            <span class="the-category elam-primary">Agri/pêche</span>
                        </div>
                        <a href="page-article.php" class="the-title" title="title">Lorem ipsum dolor sit
                            amet</a>
                        <div class="the-metadata">
                            <span class="the-date">20 Sept 2016</span>
                            <span class="the-author">The author</span>
                        </div>
                        <div class="the-content extrait">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad beatae commodi,
                            cupiditate doloribus eius eos esse et explicabo harum ipsam, iste magnam minus modi
                            perspiciatis quia quo totam veniam!
                        </div>
                    </div>
                    <div class="col-sm-4 article" data-animate="zoomIn">
                        <div class="the-thumbnail">
                            <a href="page-article.php" title="title"><img src="img/3.jpg" alt="slide 1"
                                                                          class="img-responsive"/></a>
                            <span class="the-category elam-tertiary">Agri/pêche</span>
                        </div>
                        <a href="page-article.php" class="the-title" title="title">Lorem ipsum dolor sit
                            amet</a>
                        <div class="the-metadata">
                            <span class="the-date">20 Sept 2016</span>
                            <span class="the-author">The author</span>
                        </div>
                        <div class="the-content extrait">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad beatae commodi,
                            cupiditate doloribus eius eos esse et explicabo harum ipsam, iste magnam minus modi
                            perspiciatis quia quo totam veniam!
                        </div>
                    </div>
                </div>

                <ul class="elam-pagination elam-secondary">
                    <li><a href="#" class="prev" title="Précédent"><i class="fa fa-chevron-left"></i></a></li>
                    <li><a href="#" class="active">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">6</a></li>
                    <li><span class="page-dots">...</span></li>
                    <li><a href="#" class="next" title="Suivant"><i class="fa fa-chevron-right"></i></a></li>
                </ul>
            </div>


            <!--block publicitaire-->
            <div class="col-sm-3  elam-secondary sidebar">
                <div class="widget">
                    <div class="search_bar">
                        <form action="#" method="get">
                            <input class="input-field" type="search" placeholder="Recherche"/>
                            <button class="submit-btn" type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>

                <div class="widget">
                    <h4 class="section-title">Archives</h4>
                    <select class="select-widget" name="#" id="archives">
                        <option class="default">Rechercher dans les archives</option>
                        <option value="#">Septembre 2016</option>
                        <option value="#">Aout 2016</option>
                        <option value="#">Juillet 2016</option>
                        <option value="#">Juin 2016</option>
                        <option value="#">Mai 2016</option>
                        <option value="#">Avril 2016</option>
                        <option value="#">Mars 2016</option>
                        <option value="#">Février 2016</option>
                        <option value="#">Janvier 2016</option>
                    </select>
                </div>

                <div class="widget">
                    <h4 class="section-title">Posts</h4>
                    <div class="posts-widget articles">
                        <div class="tabs row">
                            <div class="tab col-xs-4">Populaires</div>
                            <div class="tab col-xs-4 active">Récents</div>
                            <div class="tab col-xs-4"><i class="fa fa-comments"></i></div>
                        </div>
                        <div class="owl-carousel">
                            <div class="slide tab-1">
                                <div class="article">
                                    <div class="row">
                                        <a href="#" class="col-xs-4 image">
                                            <img src="img/3.jpg" alt="image" class="img-responsive"/>
                                        </a>
                                        <a href="#" class="col-xs-8 the-title">Lorem ipsum dolor sit amet</a>
                                    </div>

                                    <div class="the-metadata">
                                        <span class="the-date">20 Sept 2016</span>
                                        <span class="the-author">The author</span>
                                    </div>
                                </div>
                            </div>

                            <!--end of tab 1-->

                            <div class="slide tab-2">
                                <div class="article">
                                    <div class="row">
                                        <a href="#" class="col-xs-4 image">
                                            <img src="img/4.jpg" alt="image" class="img-responsive"/>
                                        </a>
                                        <a href="#" class="col-xs-8 the-title">Lorem ipsum dolor sit amet</a>
                                    </div>

                                    <div class="the-metadata">
                                        <span class="the-date">20 Sept 2016</span>
                                        <span class="the-author">The author</span>
                                    </div>
                                </div>
                            </div>

                            <!--end of tab 2-->

                            <div class="slide tab-3">
                                <div class="article">
                                    <div class="row">
                                        <a href="#" class="col-xs-4 image">
                                            <img src="img/5.jpg" alt="image" class="img-responsive"/>
                                        </a>
                                        <a href="#" class="col-xs-8 the-title">Lorem ipsum dolor sit amet</a>
                                    </div>

                                    <div class="the-metadata">
                                        <span class="the-date">20 Sept 2016</span>
                                        <span class="the-author">The author</span>
                                    </div>
                                </div>
                            </div>


                            <!--enf of tab 3-->
                        </div>
                        <a href="#" class="btn plus">Vour tous les posts</a>
                    </div>
                </div>

                <div class="widget">
                    <h4 class="section-title">Catégories</h4>
                    <select class="select-widget" name="#" id="categories">
                        <option class="default">Selectionnez une catégorie</option>
                    </select>
                </div>

                <div class="widget">
                    <h4 class="section-title">Tweets à la une</h4>
                </div>

                <div class="widget">
                    <div class="liens-rs">
                        <ul>
                            <li><a href="#" class="facebook"></a></li>
                            <li><a href="#" class="twitter"></a></li>
                            <li><a href="#" class="google-plus"></a></li>
                            <li><a href="#" class="rss"></a></li>
                        </ul>
                    </div>
                </div>

                <a class="pub" href="#"><img src="img/pub/1.gif" alt="Pub"/></a>
                <a class="pub" href="#"><img src="img/pub/2.png" alt="Pub"/></a>
            </div>
        </div>
    </div>
</div>


<?php require "footer.php"; ?>
