<?php
require_once './Include/Bibliotheque01.inc.php';

foreach ($listeArticle as $value) {
    ?>
    <section class="page-section">
        <div class="container">
            <div class="Actu-Article">
                <div class="product-item-description d-flex mr-auto">
                    <div class="bg-faded p-5 rounded">
                        <form name="Article" class="Article" method="post" action="index.php" onsubmit="return confirmation()"><?php
                            echo '<h2>' . htmlspecialchars($value[1]) . '</h2><br/>';
                            echo '<p class="txtArticle">' . htmlspecialchars($value[2]) . '</p><br/>';
                            echo '<p>Le ' . htmlspecialchars($value[3]) . '</p><br/>';
                            echo '<p>Auteur : ' . htmlspecialchars($value[4]) . '</p><br/>';
                            echo formInputHidden("idArticle", "idArticle", $value[0]);
                            if ($sessionAdmin) {
                                echo formBoutonSubmit("btnSuppArticle", "btnSuppArticle", "Supprimer Article", 1, "btn btn-danger");
                                echo formInputHidden('action', 'action', 33);
                            }
                            ?>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><?php
}



