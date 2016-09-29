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