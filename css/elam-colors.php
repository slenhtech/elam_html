<?php
header("content-type: text/css; charset: UTF-8");

$elam_secteurs_activite = array(
    "mines"             => "brown",
    "agri-peche"        => "green",
    "petro-gaz"         => "marine_blue",
    "bois"              => "wood",
    "construction"      => "yellow",
    "eau-electro"       => "turquoise",
    "industrie-manu"    => "orange",
    "banque"            => "dark_blue",
    "education"         => "pink_alt",
    "fonction-pub"      => "dark_red",
    "logistique"        => "purple_alt",
    "sante"             => "light_purple",
    "telecom"           => "dark_purple",
    "tourisme"          => "dark_green",
    "support" => "blue_alt",
    "elam-primary"      => "elam_primary",
    "elam-secondary"    => "elam_secondary",
    "elam-tertiary"     => "elam_tertiary",
    "elam-green" => "elam_green",
    "elam-blue"         => "elam_blue"
);
function elam_getColor($colorName = null){
    $elam_colors_code = array(
        "pink"          => "231, 55, 139",
        "pink_alt"      => "127, 1, 80",
        "purple"        => "122, 30, 127",
        "dark_purple"   => "84, 66, 127",
        "purple_alt"    => "117, 65, 110",
        "light_purple"  => "190, 90, 160",
        "orange"        => "208, 106, 36",
        "green"         => "115, 160, 40",
        "dark_green"    => "63, 103, 69",
        "brown"         => "112, 54, 41",
        "dark_red"      => "157, 0, 44",
        "marine_blue"   => "50, 79, 105",
        "dark_blue"     => "18, 50, 114",
        "blue"          => "12, 120, 193",
        "blue_alt" => "11, 119, 193",
        "wood"          => "170, 122, 95",
        "turquoise"     => "0, 173, 167",
        "yellow"        => "215, 156, 28",
        "grey"          => "166, 166, 166",
        "dark_grey"     => "110, 110, 110",
        "elam_primary"  => "231, 55, 139",
        "elam_blue"     => "5, 139, 255",
        "nav_hover"     => "181, 12, 117",
        "elam_secondary"    => "122, 30, 127",
        "elam_tertiary" => "250, 75, 12",
        "elam_green" => "3, 186, 0"
    );
    if(array_key_exists($colorName, $elam_colors_code)){
        return $elam_colors_code[$colorName];
    }
    else{
        return $elam_colors_code['elam_primary'];
    }
}

function hex2rgb($colour)
{
    if ($colour[0] == '#') {
        $colour = substr($colour, 1);
    }
    if (strlen($colour) == 6) {
        list($r, $g, $b) = array($colour[0] . $colour[1], $colour[2] . $colour[3], $colour[4] . $colour[5]);
    } elseif (strlen($colour) == 3) {
        list($r, $g, $b) = array($colour[0] . $colour[0], $colour[1] . $colour[1], $colour[2] . $colour[2]);
    } else {
        return false;
    }
    $r = hexdec($r);
    $g = hexdec($g);
    $b = hexdec($b);
    //return array( 'red' => $r, 'green' => $g, 'blue' => $b );
    return $r . ', ' . $g . ', ' . $b;
}
?>
<?php foreach ($elam_secteurs_activite as $className => $colorName):?>
/***** <?php echo $className;?> *****/

.the-category.<?php echo $className;?>{
    background-color: rgb(<?php echo elam_getColor($colorName);?>);}
.secteur-activite.<?php echo $className;?> .the-title{
    box-shadow: -8px 0 rgb(<?php echo elam_getColor($colorName);?>);
    padding-left: 20px;}
.btn.<?php echo $className;?>{
    background-color: rgb(<?php echo elam_getColor($colorName);?>);}
    .<?php echo $className; ?> .owl-pagination .owl-page span{
    background-color: rgb(<?php echo elam_getColor($colorName); ?>) !important;}
.<?php echo $className;?> .page-title {
    border-left: solid 10px rgb(<?php echo elam_getColor($colorName);?>); }
.<?php echo $className;?> .section-title {
    box-shadow: -8px 0 rgb(<?php echo elam_getColor($colorName);?>), -12px 0 #fff, -14px 0 rgb(<?php echo elam_getColor($colorName);?>); }
    .<?php echo $className; ?> .sub-section-title {
    box-shadow: -8px 0 rgb(<?php echo elam_getColor($colorName); ?>), -12px 0 #fff, -14px 0 rgb(<?php echo elam_getColor($colorName); ?>); }
.<?php echo $className;?> .btn.plus {
    background-color: rgb(<?php echo elam_getColor($colorName);?>); }
.<?php echo $className;?> strong {
    color: rgb(<?php echo elam_getColor($colorName);?>); }
.<?php echo $className;?> #carousel_metiers .slide .search-icon {
    background-color: rgb(<?php echo elam_getColor($colorName);?>); }
.<?php echo $className;?> #carousel_metiers .slide:after {
    background-color: rgba(<?php echo elam_getColor($colorName);?>, 0.5); }
.<?php echo $className;?> #carousel_metiers .slide:before {
    border-bottom: solid 10px rgb(<?php echo elam_getColor($colorName);?>);
    border-left: solid 10px rgb(<?php echo elam_getColor($colorName);?>); }
.<?php echo $className;?> #carousel_metiers .carousel-controls .control {
    background-color: rgb(<?php echo elam_getColor($colorName);?>); }
.<?php echo $className;?> #section_temoignages .slide .the-content {
    background-color: rgb(<?php echo elam_getColor($colorName);?>); }
.<?php echo $className;?> #section_temoignages .slide .the-content:before {
    border-bottom: solid 25px rgb(<?php echo elam_getColor($colorName);?>); }
    .<?php echo $className; ?> #liste_metiers a:before {
    color: rgb(<?php echo elam_getColor($colorName);?>); }
.<?php echo $className;?> #description-table .row {
    border-bottom: solid 3px rgba(<?php echo elam_getColor($colorName);?>, 0.5); }
.<?php echo $className;?> #description-table .frame {
    border: solid 4px rgb(<?php echo elam_getColor($colorName);?>); }
.<?php echo $className;?> .opportunites .progress-value {
    background-color: rgb(<?php echo elam_getColor($colorName);?>); }
    #grande-liste-metiers .<?php echo $className; ?>.metier .image:after {
    background-color: rgb(<?php echo elam_getColor($colorName);?>); }
    #grande-liste-metiers .<?php echo $className; ?>.metier .details .the-category {
    border-bottom-color: rgb(<?php echo elam_getColor($colorName);?>); }
.<?php echo $className;?> .job-detail .field-title:before {
    background-color: rgb(<?php echo elam_getColor($colorName);?>); }
    .<?php echo $className; ?> li:before,
    .<?php echo $className; ?> .li:before {
    color: rgb(<?php echo elam_getColor($colorName);?>); }
    .<?php echo $className; ?>.envie-de-devenir .the-title{
    color: rgb(<?php echo elam_getColor($colorName); ?>);}
    .<?php echo $className; ?>#jumbo-details .details {background-color: rgb(<?php echo elam_getColor($colorName); ?>);}
    .<?php echo $className; ?>#jumbo-details .details .btn.plus {color: rgb(<?php echo elam_getColor($colorName); ?>); }
    .<?php echo $className; ?>#jumbo-details .details:before {background-color: rgb(<?php echo elam_getColor($colorName); ?>);}
    .<?php echo $className; ?>.elam-banner .btn.plus {color: rgb(<?php echo elam_getColor($colorName); ?>);}
    .<?php echo $className; ?>.elam-banner {background-color: rgb(<?php echo elam_getColor($colorName); ?>);}
    .<?php echo $className; ?> #block-googlemap map-details ul li:before { color: rgb(<?php echo elam_getColor($colorName); ?>);}
    
<?php endforeach;?>