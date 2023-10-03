<?php
require_once './Include/Bibliotheque01.inc.php';

/* ----------------------------------------------PREMIER TEST CONNEXION--------------------------------------------- */
if (!$sessionOuverte && $actionN == 1) {
    ?>
    <div class="container">
        <form class="d-flex justify-content-center m-5" name="frmIdentification" id="frmIdentification" method="post" action="index.php">
            <fieldset>
                <legend class="d-flex justify-content-center">Identifiez-vous</legend>
                <div class="form-group">
                    <input type="text" class="form-control-lg" name="txtUti" id="txtUti" placeholder="Pseudo" aria-label="Pseudo">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control-lg" name="pwMDP" id="pwMDP" placeholder="Mot de passe" aria-label="Mot de passe">
                </div>
                <div class="form-group d-flex justify-content-center">
                    <?php
                    echo formBoutonSubmit("btnSubmit", "btnSubmit", "Valider", 30, "btn btn-primary");
                    echo formInputHidden('action', 'action', 2);
                    ?>
                </div>
            </fieldset>
        </form>
    </div><?php
} else {
    /* ---------------------------------------CONNEXION VALIDE/INVALIDE------------------------------------------- */
    switch ($actionN) {

        case 2:/* -----------------------------------INFOS CONNEXION VALIDE----------------------------------------- */
            if ($compteExistant) {
                header('Location: ./index.php?action=5');
                $ouvrirSession;
                exit();
            } else {/* ------------------------------INFOS CONNEXION INVALIDE--------------------------------------- */
                require_once './Include/entete.inc.php';
                ?>
                <div class="container">
                    <form class="d-flex justify-content-center m-5" name="frmIdentification" id="frmIdentification" method="post" action="index.php">
                        <fieldset>
                            <legend class="d-flex justify-content-center">Identifiez-vous</legend>
                            <div class="col">
                                <input type="text" class="form-control-lg" name="txtUti" id="txtUti" placeholder="Pseudo" aria-label="Pseudo">
                            </div><br/>
                            <div class="col">
                                <input type="password" class="form-control-lg" name="pwMDP" id="pwMDP" placeholder="Mot de passe" aria-label="Mot de passe">
                            </div><br/>
                            <?php
                            echo '<div class="col d-flex justify-content-center">' . formBoutonSubmit("btnSubmit", "btnSubmit", "Valider", 30, "btn btn-primary") . '</div><br/>';
                            echo formInputHidden('action', 'action', 2);
                            ?>
                        </fieldset>
                    </form>
                </div>
                <div class="alert alert-danger" role="alert"> Utilisateur et/ou mot de passe invalide(s)</div>
                <?php
            }
            break;
        case 3 : /* ----------------------------------------DECONNEXION-------------------------------------------- */
            if ($sessionOuverte) {
                $deconnexion;
                header('Location: ./index.php?action=5');
                exit();
            } else {
                header('Location: ./index.php?action=5');
                exit();
            }
            break;
    }
}


