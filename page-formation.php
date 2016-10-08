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

<div id="jumbo-details" class="elam-green">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-sm-push-6">
                <div class="details elam-blue">
                    <h2 class="the-title">Academie Franco-Américaine de Management (AFRAM)</h2>

                    <div class="meta employer">Lorem ipsum dolor sit amet</div>
                    <div class="meta location">Lorem ipsum dolor, sit amet</div>

                    <a href="#" class="btn plus">S'inscrire</a>
                </div>
            </div>
            <div class="col-sm-6 col-sm-pull-6">
                <div class="image" style="background-image: url('img/misc/afram.jpg')"></div>
            </div>
        </div>
    </div>
</div>


<div class="container elam-green">
    <h1 class="page-title">Formation</h1>

    <div id="main-content">
        <div class="row">
            <div class="col-sm-9 job-details">
                <h2 class="section-title job-title">Bachelor en administration des affaires</h2>

                <div class="detail-field job-detail">
                    <div class="row">
                        <div class="col-sm-8">
                            <h3 class="field-title">Diplôme</h3>
                            <span class="li">Diplôme National</span>
                            <span class="li">Diplôme International</span>
                        </div>
                        <div class="col-sm-4 text-center">
                            <img src="img/sponsors/logo-afram.png" alt="logo" class="img-responsive">
                        </div>
                    </div>
                </div>

                <div class="detail-field job-detail">
                    <h3 class="field-title">Durée formation</h3>
                    <span class="li">2 ans</span>
                </div>

                <div class="detail-field job-detail">
                    <h3 class="field-title">Admission</h3>

                    <div class="the-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, alias blanditiis eaque,
                            eum illo laboriosam molestias officiis, optio perferendis possimus quidem recusandae rem
                            sapiente sequi suscipit veritatis voluptatem! Eum, modi.</p>
                        <p>Sed malesuada est et mauris feugiat, ut eleifend felis eleifend.Quisque tincidunt justo et
                            risus posuere, non tempor dui pulvinar. Curabitur lectus erat, cursus sed leo ut, feugiat
                            efficitur sem. In interdum mi sit amet velit varius dignissim. Sed arcu quam, cursus sit
                            amet sagittis vitae, dignissim id erat.Nunc ut tempor enim. Nunc feugiat lacus at hendrerit
                            rutrum.Integer dapibus, est et sollicitudin tristique, ex erat consequat eros, in tempus
                            nunc turpis vel tellus. Aliquam id enim ullamcorper, convallis velit vitae, dictum
                            odio.Mauris ullamcorper sem vitae felis pharetra tincidunt.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, alias blanditiis eaque,
                            eum illo laboriosam molestias officiis, optio perferendis possimus quidem recusandae rem
                            sapiente sequi suscipit veritatis voluptatem! Eum, modi.</p>
                    </div>
                </div>

                <div class="detail-field job-detail">
                    <h3 class="field-title">Scolarité</h3>
                    <span class="li">N/A</span>
                </div>

                <div class="detail-field job-detail">
                    <h3 class="field-title">Programme</h3>
                    <ul>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    </ul>
                </div>

                <div class="detail-field job-detail">
                    <h3 class="field-title">Métiers / Débouchés</h3>
                    <ul>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                        <li>Etc.</li>
                    </ul>
                    <p>Curabitur lectus erat, cursus sed leo ut, feugiat
                        efficitur sem. In interdum mi sit amet velit varius dignissim.</p>
                </div>

                <div class="elam-banner elam-green">
                    <h4 class="the-title">Soyez le premier, juste un clic</h4>
                    <a href="#" class="btn plus">S'inscrire</a>
                </div>

                <div class="detail-field job-detail">
                    <h3 class="field-title">Etablissements similaires</h3>

                    <div id="liste_metiers">
                        <div class="row">
                            <?php for ($i = 0; $i < 10; $i++): ?>
                                <div class="col-xs-6 col-sm-4"><a href="page-formation.php">Lorem ipsum dolor sit
                                        amet</a>
                                </div>
                            <?php endfor; ?>
                        </div>
                        <div id="liste_suite" class="row collapse">
                            <?php for ($i = 0; $i < 20; $i++): ?>
                                <div class="col-xs-6 col-sm-4"><a href="page-formation.php">Lorem ipsum dolor sit
                                        amet</a>
                                </div>
                            <?php endfor; ?>
                        </div>
                        <button data-toggle="collapse"
                                data-parent="#liste_metiers"
                                href="#liste_suite"
                                class="btn plus">
                            Lire la suite
                        </button>
                    </div>
                </div>
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
