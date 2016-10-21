<?php
function opportunite($valeur = 1, $digamname = null)
{
    if ($valeur == 1) {
        $return = isset($digamname) ? 'Faible' : 'Faibles';
    } elseif ($valeur == 2) {
        $return = isset($digamname) ? 'Moyenne' : 'Moyennes';
    } elseif ($valeur == 3) {
        $return = isset($digamname) ? 'Forte' : 'Fortes';
    } else {
        $return = isset($digamname) ? 'Forte' : 'Fortes';
    }

    return $return;
}

function elam_years()
{
    $currentYear = (int)date('Y');
    $minAge = 10;
    $maxAge = 60;

    $minYear = $currentYear - $minAge;
    $maxYear = $currentYear - $maxAge;

    $output = null;
    for ($year = $minYear; $year >= $maxYear; $year--) {
        $output .= '<option value="' . $year . '"> ' . $year . ' </option>';
    }
    return $output;
}