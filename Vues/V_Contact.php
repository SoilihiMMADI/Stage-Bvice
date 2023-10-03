<?php require_once './Include/Bibliotheque01.inc.php'; ?>

<section class="page-section cta">
    <div class="container clearfix">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner text-center rounded mb-5">
                    <h2 class="section-heading mb-5">
                        <span class="section-heading-upper">Horaires</span>
                        <span class="section-heading-lower">nous sommes ouverts</span>
                    </h2>
                    <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Dimanche
                            <span class="ml-auto">Fermé</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Lundi
                            <span class="ml-auto">8:00 AM à 6:30 PM</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Mardi
                            <span class="ml-auto">8:00 AM à 6:30 PM</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Mercredi
                            <span class="ml-auto">8:00 AM à 6:30 PM</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Jeudi
                            <span class="ml-auto">8:00 AM à 6:30 PM</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Vendredi
                            <span class="ml-auto">8:00 AM à 6:30 PM</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            Samedi
                            <span class="ml-auto">Fermé</span>
                        </li>
                    </ul>
                    <p class="address mb-5">
                        <em>
                            <strong>99 boulevard de la Savine</strong>
                            <br>
                            13015 MARSEILLE
                        </em>
                    </p>
                    <p class="mb-0">
                        <small>
                            <em>numéro fixe</em>
                        </small>
                        <br>
                        04-91-09-08-84<br>
                        <small>
                            <em>numéro faxe</em>
                        </small>
                        <br>
                        04-91-51-71-26<br>
                        <small>
                            <em>adresse e-mail</em>
                        </small>
                        <br>
                        2b.vice@gmail.com
                    </p>
                </div>
            </div>
        </div>
    <!--envoi de message direct
        <div class="cta-inner grid_12 mb-5 rounded">
            <div class="wrap p-3">
                <div class="block-5">
                    <h3 class="p5">Trouvez-nous</h3>
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11601.59515514335!2d5.360786630975817!3d43.36868496483672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12c9ea976cef5e5f%3A0x6b2c0acedf35c024!2sLa%20Savine%2C%2013015%20Marseille!5e0!3m2!1sfr!2sfr!4v1612370149822!5m2!1sfr!2sfr" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <dl>
                        <dt>99 boulevard de la Savine<br>Marseille 13015</dt>
                    </dl>
                </div>
                <!--<div class="block-6">
                    <h3>Entrer en contact</h3>
                    <?php /*if(isset($_POST['txtNom']) and isset($_POST['txtEmail']) and isset($_POST['txtSujet']) and isset($_POST['txtMessage']))
{
  $destinataire = '2b.vice@gmail.com';
  $email = htmlentities($_POST['txtEmail']);
        if(preg_match('#^(([a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+\.?)*[a-z0-9!\#$%&\\\'*+/=?^_`{|}~-]+)@(([a-z0-9-_]+\.?)*[a-z0-9-_]+)\.[a-z]{2,}$#i',str_replace('&amp;','&',$email)))
        {
                $sujet = "Contact: ".stripslashes($_POST['txtSujet']);
                $message = "De: ".stripslashes($_POST['txtNom'])."\n";
                $message .= stripslashes($_POST['txtMessage'])."\n";
                $message .= "Numéro de téléphone: ".$_POST['numéro'];
                $headers = "From: <".$email.">\n";
                $headers .= "Reply-To: ".$email."\n";
                $headers .= "Content-Type: text/plain; charset=\"iso-8859-1\"";
                if(mail($destinataire,$sujet,$message,$headers))
                {
                        echo "<strong>Votre message a bien &eacute;t&eacute; envoy&eacute;.</strong>";
                }
                else
                {
                        echo "<strong style=\"color:#ff0000;\">Une erreur c'est produite lors de l'envois du message.</strong>";
                }
        }
        else
        {
                echo "<strong style=\"color:#ff0000;\">L'email que vous avez entr&eacute; est invalide.</strong>";
        }
}
else
{*/
?>
                    <form id="form" method="post" action="index.php">
                        <fieldset>
                            <input type="text" class="form-control-lg" name="txtNom" id="txtNom" placeholder="Nom" aria-label="Nom" required="required" tabindex="10">
                            <input type="text" class="form-control-lg" name="txtEmail" id="txtEmail" placeholder="Email" aria-label="Email"required="required" tabindex="20">
                            <input type="number" class="form-control-lg" name="numéro" id="numéro" placeholder="Numéro" aria-label="Numéro" maxlength="10" tabindex="30">
                            <input type="text" class="form-control-lg" name="txtSujet" id="txtSujet" placeholder="Sujet" aria-label="Sujet" required="required" tabindex="40">
                            <textarea name="txtMessage" id="txtMessage" placeholder="Message" aria-label="Message" required="required" tabindex="50"></textarea>                
                                <?php /*echo formBoutonSubmit('btnEnvoyer', 'btnEnvoyer', 'Envoyer Email', 10,'btn btn-success');
                                echo formInputHidden('action', 'action', 50);*/
                                ?>
                                <input type="reset" name="btnReset" id="btnReset" value="Réinitialiser" class="btn btn-danger"> 
                        </fieldset>
                    </form>
                </div>
<?php/*}*/?>
            </div>
        </div>-->
    </div>
</section>
