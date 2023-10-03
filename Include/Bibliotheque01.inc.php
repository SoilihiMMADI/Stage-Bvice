<?php

function formSelectDepuisRecordset($LD_label, $LD_nom, $LD_id, $recordset, $TabIndex, $ValeurOpt) {
    $code = '<label for="' . $LD_id . '">' . $LD_label . '</label>' . "\n"
            . '    <select name="' . $LD_nom . '" id="' . $LD_id . '" class="titre" tabindex="' . $TabIndex . '">' . "\n";

    $recordset->setFetchMode(PDO::FETCH_NUM);

    $ligne = $recordset->fetch();
    while ($ligne != false) {
        $code .= '        <option ';
        if ($ligne[0] == $ValeurOpt) {
            $code .= 'selected="selected" ';
        }
        $code .= 'value="' . $ligne[0] . '">' . $ligne[1] . '</option>' . "\n";
        $ligne = $recordset->fetch();
    }
    $code .= '</select>';
    return $code;
}

function formBoutonSubmit($Nom, $Id, $Val, $TabIndex, $class = null) {
    $code = '<input type="submit" class="' . $class . '" name="' . $Nom . '" id="' . $Id . '" value="' . $Val . '" tabindex="' . $TabIndex . '">';
    return $code;
}

function formInputHidden($Nom, $Id, $Val) {
    $code = '<input type="hidden" name="' . $Nom . '" id="' . $Id . '" value="' . $Val . '">';
    return $code;
}

function formTextArea($Label, $Nom, $Id, $Val, $cols, $rows, $MaxLegth, $TabIndex, $LectSeul, $classLab = null, $classTxt = null) {
    $code = '<label for="' . $Id . '" class="' . $classLab . '"> ' . $Label . ' : </label>'
            . '<textarea style="resize: none;" class="' . $classTxt .'" name="' . $Nom . '" id="' . $Id . '" cols="' . $cols . '" rows="' . $rows . '" '
            . 'maxlegth="' . $MaxLegth . '" tabindex="' . $TabIndex . '" ';
    if ($LectSeul == TRUE) {
        $code = $code . 'readonly="readonly" ';
    }
    $code = $code . '> ' . $Val . ' </textarea>';
    return $code;
}

function formInputText($leLabel, $leNom, $id, $valeur, $taille, $longueurMax, $tabIndex, $lectureSeule, $classLab = null, $classText = null,$obligation = null) {
    $codeHTML = '<label for="' . $id . '" class="' . $classLab . '">' . $leLabel . ' </label> '
            . '<input type="text" class="' . $classText . '" name="' . $leNom . '"id="' . $id . '"size="' . $taille . '"'
            . 'maxlength="' . $longueurMax . '"value="' . $valeur . '"tabIndex="' . $tabIndex . '"';

    if ($lectureSeule == true) {
        $codeHTML = $codeHTML . ' readonly="readonly" ';
    }
    if ($obligation == true) {
        $codeHTML = $codeHTML . 'required="required"';
    }
    $codeHTML = $codeHTML . '/>';

    return $codeHTML;
}

function formInputPassword($leLabel, $classLab, $leNom, $id, $valeur, $taille, $longueurMax, $tabIndex, $obligation = null) {
    $codeHTML = '<label for="' . $id . '" class="' . $classLab . '">' . $leLabel . ' : </label> '
            . '<input type="password" name="' . $leNom . '" id="' . $id . '"size="' . $taille . '"'
            . 'maxlength="' . $longueurMax . '"value="' . $valeur . '"tabIndex="' . $tabIndex . '"';

    if ($obligation == true) {
        $codeHTML = $codeHTML . 'required="required"';
    }
    $codeHTML = $codeHTML . '/>';

    return $codeHTML;
}
