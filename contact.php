<?php
define('CHECKED_ATTR',          'checked="checked"');
define('SELECTED_ATTR',          'selected="selected"');
const PAGE_NAME = 'Contact';
require_once 'db/data.php';
require_once 'function/wishlist.php';
require_once 'function/loginout.php';
require_once('views/page_top.php');

$en_post = $_SERVER ['REQUEST_METHOD'] === 'POST';
$validation = array(
    'firstname' => array(
        'is_valid' => false,
        'value' => null,
        'err_msg' => 'Le prenom doit contenir au moins 2 caractères',
    ),
    'lastname' => array(
        'is_valid' => false,
        'value' => null,
        'err_msg' => 'Le nom doit contenir au moins 2 caractères',
    ),
    'email' => array(
        'is_valid' => false,
        'value' => null,
        'err_msg' => 'L\'adresse courriel n\'est pas valide',
    ),
    'radio' => array(
        'is_valid' => false,
        'value' => null,
        'err_msg' => 'choisir un lang',
    ),
    'store' => array(
        'is_valid' => false,
        'value' => null,
        'err_msg' => 'choisir une succursale',
    ),
    'message' => array(
        'is_valid' => false,
        'value' => null,
        'err_msg' => 'Le message doit contenir au moins 10 caractères',
    ),

);

if ($en_post) {

    $validation['firstname']['value'] = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
    $validation['firstname']['is_valid'] = strlen($validation['firstname']['value']) >= 2;


    $validation['lastname']['value'] = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
    $validation['lastname']['is_valid'] = strlen($validation['lastname']['value']) >= 2;


    $validation['email']['value'] = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $validation['email']['is_valid'] = (false !== $validation['email']['value']);

    $validation['radio']['is_valid']= array_key_exists('radio',$_POST);

    $validation['store']['is_valid']= array_key_exists('store',$_POST);

    $validation['message']['value'] = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);
    $validation['message']['is_valid'] = strlen($validation['message']['value']) >= 10;


    $form_valid = $validation['firstname']['is_valid']
        && $validation['lastname']['is_valid']
        && $validation['email']['is_valid']
        && $validation['radio']['is_valid']
        && $validation['store']['is_valid']
        && $validation['message']['is_valid'];

    if ($form_valid) {
        header('Location: emailreceived.php?msg=' . urlencode('Merci, vous êtes inscrits sur le site'));
        exit;
    }


}


?>
    <h1>Nous joindre</h1>
        <main>
        <div itemscope itemtype="http://schema.org/Store" id="wrapcontact" class="row">
            <div id="formdiv">
                <form method="post">
                    <div id="filds">
                        <fieldset>
                            <div>
                                <label for="firstname">Prénom</label><?php
                                if ($en_post && !$validation['firstname']['is_valid']) {
                                    echo '<span id="errmsg">', $validation['firstname']['err_msg'], '</span>';
                                }
                                ?>
                                <input type="text" name="firstname" id="firstname" placeholder="Philip"
                                       class="<?= $en_post && !$validation['firstname']['is_valid'] ? 'invalid' : '' ?>"
                                       value="<?= $en_post ? $validation['firstname']['value'] : '' ?>"
                                />

                            </div>
                            <div>
                                <label for="lastname">Nom</label><?php
                                if ($en_post && !$validation['lastname']['is_valid']) {
                                    echo '<span id="errmsg">', $validation['lastname']['err_msg'], '</span>';
                                }
                                ?>
                                <input type="text" name="lastname" id="lastname" placeholder="Green"
                                       class="<?= $en_post && !$validation['lastname']['is_valid'] ? 'invalid' : '' ?>"
                                       value="<?= $en_post ? $validation['lastname']['value'] : '' ?>"
                                />
                                <br>

                            </div>
                            <div>
                                <label for="email">Courriel</label><?php
                                if ($en_post && !$validation['email']['is_valid']) {
                                    echo '<span id="errmsg">', $validation['email']['err_msg'], '</span>';
                                }
                                ?>
                                <input type="text" name="email" id="email" placeholder="exemple@exemple.com"
                                       class="<?= $en_post && !$validation['email']['is_valid'] ? 'invalid' : '' ?>"
                                       value="<?= $en_post ? $validation['email']['value'] : '' ?>"
                                />
                                <br>

                            </div>
                            <div>
                                <label for="store">Sélectionnez votre magasin: </label> <?php
                                if ($en_post && !$validation['store']['value']) {
                                    echo '<span id="errmsg">', $validation['store']['err_msg'], '</span>';
                                }
                                ?>

                                <select type="text" name="store" id="options-store">
                                    <option value="-1"
                                        <?= array_key_exists('store', $_POST)&& $_POST['store']=== '' ? SELECTED_ATTR:''  ?>
                                    ></option>
                                    <option value="Montreal Downtown"
                                        <?= array_key_exists('store', $_POST)&& $_POST['store']=== 'Montreal downtown, QC' ? SELECTED_ATTR:''  ?>
                                    >Montreal downtown, QC</option>
                                    <option value="St. Leonard"
                                        <?= array_key_exists('store', $_POST)&& $_POST['store']=== 'St. Leonard, QC' ? SELECTED_ATTR:''  ?>
                                    >St. Leonard, QC</option>
                                    <option value="Marche Central"
                                        <?= array_key_exists('store', $_POST)&& $_POST['store']=== 'Marche Central, QC' ? SELECTED_ATTR:''  ?>
                                    >Marche Central, QC</option>
                                    <option value="Verdum"
                                        <?= array_key_exists('store', $_POST)&& $_POST['store']=== 'Verdum, QC' ? SELECTED_ATTR:''  ?>
                                    >Verdum, QC</option>
                                </select>
                            </div>
                        </fieldset>
                        <fieldset id="field2">
                            <label>Langue: </label>
                            <?php
                            if ($en_post && !$validation['radio']['is_valid']) {
                                echo '<span id="errmsg">', $validation['radio']['err_msg'], '</span>';
                            }
                            ?>
                            <div class="clearfix labpad">
                                <label class="radioform">Français
                                    <input type="radio" id="radio_1" name="radio" value="fr"
                                        <?= array_key_exists('radio', $_POST) && $_POST['radio'] === 'fr' ? CHECKED_ATTR : '' ?>
                                    />
                                    <span class="radiocheckmark"></span>
                                </label>
                                <label class="radioform">Anglais
                                    <input type="radio" id="radio_2" name="radio" value="en"
                                        <?= array_key_exists('radio', $_POST) && $_POST['radio'] === 'en' ? CHECKED_ATTR : '' ?>
                                    />
                                    <span class="radiocheckmark"></span>
                                </label>
                            </div>
                            <label>Votre message: </label><?php
                            if ($en_post && ! $validation['message']['is_valid'] ) {
                                echo "<<span id=\"errmsg\">>",$validation['message']['err_msg'],"</span>";
                            }
                            ?>
                            <div class="labpad">
									<textarea name="message" rows="5" cols="35" placeholder="">

                                    </textarea>
                            </div>
                            <div id="checkform">
                                <label class="checkboxes">Je souhaite recevoir courriel de confirmation.
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                </label>
                        </fieldset>
                    </div>
                    <input type="submit" name="submit" value="Soumettre"/>
                </form>
            </div>
        </div>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2794.30255662757!2d-73.6428947850151!3d45.54423883612114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc918e0c061b07f%3A0x647a6b6d7cb681a7!2sISI%2C+l&#39;Institut+sup%C3%A9rieur+d&#39;informatique!5e0!3m2!1sfr!2sca!4v1513800444286"
                width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </main>

<?php require_once('views/page_bottom.php'); ?>