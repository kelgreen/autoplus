<?php
const PAGE_NAME = 'Accueil';
require_once 'db/data.php';
require_once 'function/wishlist.php';
require_once 'function/loginout.php';
require_once 'views/page_top.php';

?>


        <div class="container">
            <div class="banner">
                <div class="video-container">
                    <video class="video" muted autoplay loop>
                        <source src="videos/car.mp4" type="video/mp4">
                        <source src="videos/car.webm" type="video/webm">
                    </video>
                    <div class="video-mask"></div>
                </div>
            </div>
        </div>
    <h1>AUTO PLUS</h1>
    <main>

        <p id="pinde">
            Concessionnaire de véhicules d'occasion à  Montréal. Trouvez l'auto qu'il vous faut !
        </p>
            <div class="row produtos1">
                <?php foreach ($category as $id => $item) { ?>
                <div class="col-4">
                    <h2><?= $item[CAT_NAME] ?></h2>
                    <a href="catalogue.php?ART_CAT=<?= $id ?>"><img src="images/<?= $item[CAT_IMG] ?>" alt="categorie"></a>
                    <p> <?= $item[CAT_MSG] ?></p>
                </div>
                <?php } ?>
            </div>
    </main>

<?php require_once 'views/page_bottom.php';