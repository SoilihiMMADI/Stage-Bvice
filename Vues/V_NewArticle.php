<?php
require_once './Include/Bibliotheque01.inc.php';
?>
<script>
    function confirmation() {
        return confirm('Ajouter l\'article ?');
    }
</script>
<section class="page-section">
    <form class="d-flex justify-content-center" name="frmAddArticle" id="frmAddArticle" method="post" onsubmit="return confirmation()" action="index.php">
        <fieldset>
            <div class="form-group d-flex justify-content-center">
                <input type="text" class="form-control-lg" name="txtTitre" id="txtTitre" placeholder="Titre" aria-label="Titre" tabindex="10">
            </div>
            <div class="form-group d-flex justify-content-center">
                <textarea style="resize: none;" class="form-control" name="txtContenu" id="txtContenu" placeholder="contenu de l'article/actualité" aria-label="contenu article" cols="50" rows="10" maxlength="900" tabindex="20"></textarea>
            </div>
            <div class="form-group d-flex justify-content-center">
                <?php
                echo formBoutonSubmit("btnSubmit", "btnSubmit", "Valider", 30, "btn btn-primary");
                echo formInputHidden('action', 'action', 32);
                ?> 
            </div>
        </fieldset>
    </form>
</section>





