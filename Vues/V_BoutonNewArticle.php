<?php
require_once './Include/Bibliotheque01.inc.php';
/* --------------------------------------------PARTIE AJOUTER ARTICLE------------------------------------------------- */
if ($sessionAdmin) {
    ?>  
    <form name="newArticle" id="newArticle" method="post" action="index.php">
        <?php
        echo formBoutonSubmit("btnSubmit", "btnSubmit", "Créer Article", 20, "m-2 btn btn-success");
        echo formInputHidden('action', 'action', 31);
        ?>
    </form>
    <?php
}

