<?php
const PAGE_NAME = 'Catalogue';
require_once 'db/data.php';
require_once 'function/loginout.php';

if ( ! array_key_exists(NB_WISH, $_SESSION)) {
    $_SESSION[NB_WISH] = 0;
    if ( ! array_key_exists(IDPROD, $_SESSION)) {
        $_SESSION[IDPROD] = 0;
    }
}

if ( (array_key_exists(OP_NAME, $_GET)) && ($_GET[OP_NAME] === OP_AJOUT) ) {
    if(!user_is_logged()){
        header("Location: login.php");
    }else{
        $_SESSION[NB_WISH]++;
        $_SESSION[IDPROD] = $_GET[IDPROD];
    }
}
require_once 'function/wishlist.php';
require_once  'views/page_top.php';
require_once 'views/sidemenu.php';


?>


    <h1>Catalogue</h1>
    <main>
        <div class="row produtos2">
                <?php foreach ($product as $id => $item) {
                    if(array_key_exists('ART_CAT', $_GET)){
                        if($_GET['ART_CAT'] === $item[ART_CAT]){ ?>
            <div class="col-4 cat1">
                <h2><?= $item[ART_MODEL] ?></h2>
                <img src="images/<?= $item[ART_IMG] ?>" alt="photo">
                <ul>
                    <li><?= ART_YEAR.$item[ART_YEAR] ?></li>
                    <li><?= ART_KM.$item[ART_KM] ?></li>
                    <li><?= ART_PRICE.$item[ART_PRICE] ?></li>
                </ul>
                <a href="<?= $_SERVER['PHP_SELF'], '?',  OP_NAME , '=' , OP_AJOUT, '&' , IDPROD, '=', $id ?>" class="button">Ajouter à votre liste d'envies</a>
                            </div>
                <?php }
                    }
                    else { ?>
            <div class="col-4 cat1">
                <h2><?= $item[ART_MODEL] ?></h2>
                <img src="images/<?= $item[ART_IMG] ?>" alt="photo">
                <ul>
                    <li><?= ART_YEAR.$item[ART_YEAR] ?></li>
                    <li><?= ART_KM.$item[ART_KM] ?></li>
                    <li><?= ART_PRICE.$item[ART_PRICE]?></li>
                </ul>
                <a href="<?= $_SERVER['PHP_SELF'], '?',  OP_NAME , '=' , OP_AJOUT, '&' , IDPROD, '=', $id ?>" class="button">Ajouter à votre liste d'envies</a>
             </div>
                 <?php  } }?>
        </div>
    </main>

<?php require_once dirname(__FILE__) . "/views/page_bottom.php";