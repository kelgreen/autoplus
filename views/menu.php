<?php
require_once (dirname(__FILE__) . '/../defines.php');

?>

<div id="wrapmenu">
    <nav id="main-menu">
        <ul>
            <li>
                <a class="accueil" href="index.php" >Accueil</a>
            </li>
            <li>
                <a class="catalogue" href="catalogue.php" >Catalogue</a>
            </li>
            <li>
                <a class="contact" href="contact.php" >Contactez-nous</a>
            </li>
        </ul>
    </nav>
    <div id="starlogo"">
        <a href="wishlist.php" id="logo"><img src="images/favorite.png" alt="favorite"/><span class="grey"><?= count($_SESSION[SESS_WISHLIST])  ?></span></a>
        <a href="login.php" id="logo"><img src="images/loginicon.png" alt="se connecter"/></a>
    </div>
</div>