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
                <h2 class="section-title">Métiers par secteur</h2>
                <p class="section-alt-title">Métiers par ordre alphabétique</p>
            </div>
</div>

<div class="container">
    <div id="main-content">
            <div class="row">
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-xs-6">
                            <ul class="liste-alphabetique">
                                <li class="liste-label">A</li>
                                <li><a href="page-metier-liste.php?c=agri-peche">Agriculture, pêche</a></li>
                            </ul>

                            <ul class="liste-alphabetique">
                                <li class="liste-label">B</li>
                                <li><a href="page-metier-liste.php?c=banque">Banque, assurance</a></li>
                                <li><a href="page-metier-liste.php?c=bois">Bois</a></li>
                            </ul>

                            <ul class="liste-alphabetique">
                                <li class="liste-label">C</li>
                                <li><a href="page-metier-liste.php?c=construction">Construction</a></li>
                            </ul>

                            <ul class="liste-alphabetique">
                                <li class="liste-label">E</li>
                                <li><a href="page-metier-liste.php?c=eau-electro">Eau, électricité, environnement</a></li>
                                <li><a href="page-metier-liste.php?c=education">Education</a></li>
                            </ul>

                            <ul class="liste-alphabetique">
                                <li class="liste-label">F</li>
                                <li><a href="page-metier-liste.php?c=fonction-pub">Fonction publique</a></li>
                            </ul>

                            <ul class="liste-alphabetique">
                                <li class="liste-label">I</li>
                                <li><a href="page-metier-liste.php?c=industrie-manu">Industries manufacturières</a></li>
                            </ul>
                        </div>


                        <div class="col-xs-6">
                            <ul class="liste-alphabetique">
                                <li class="liste-label">L</li>
                                <li><a href="page-metier-liste.php?c=logistique">Logistique, transport</a></li>
                            </ul>

                            <ul class="liste-alphabetique">
                                <li class="liste-label">M</li>
                                <li><a href="page-metier-liste.php?c=mines">Mines</a></li>
                            </ul>

                            <ul class="liste-alphabetique">
                                <li class="liste-label">P</li>
                                <li><a href="page-metier-liste.php?c=petro-gaz">Pétrole, gaz</a></li>
                            </ul>

                            <ul class="liste-alphabetique">
                                <li class="liste-label">S</li>
                                <li><a href="page-metier-liste.php?c=sante">Santé</a></li>
                            </ul>

                            <ul class="liste-alphabetique">
                                <li class="liste-label">T</li>
                                <li><a href="page-metier-liste.php?c=telecom">Télécommunication</a></li>
                                <li><a href="page-metier-liste.php?c=tourisme">Tourisme, commerce</a></li>
                            </ul>
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



<?php require "footer.php";?>
