<?php
require_once 'db/data.php';
require_once 'function/loginout.php';
require_once 'function/wishlist.php';
require_once 'views/page_top.php';
?>


<div id="loginoutform">

    <?php if ( ! user_is_logged() ) { ?>
    <div id="formdiv">
        <div id="filds">
        <form method="post" name="login">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" value=""/>
            <br>
            <label for="password">Mot de passe:</label>
            <input type="password" name="password" id="password" value=""/>
            <br>
            <input id="btnconnecter" type="submit" name="login_submit" value="Se connecter" />
        </form>
            </div>

    </div>

    <?php }
    else {  ?>
        <div id="formdiv">
            <div id="filds">
                <div class="col-4">
                    <h2>Liste d'envies</h2>
                        <?php foreach ($product as $id  => $item) {
                            foreach ($_SESSION[SESS_WISHLIST] as $idwl => $itemwl) {
                                if($itemwl === (string)$id){ ?>
                                 <p><?= $item[ART_MODEL] ?> <a href=" <?= $_SERVER['PHP_SELF'], '?',  OP_NAME , '=' , OP_RETRAIT, '&' , IDPROD, '=', $id ?>"><span class="grey">X</span>
                                     </a> </p>
                                <?php }} }} ?>
                </div>
             </div>
        </div>

