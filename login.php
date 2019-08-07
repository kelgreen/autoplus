<?php
const PAGE_NAME1 = 'Login';

require_once 'db/data.php';
require_once 'function/wishlist.php';
require_once 'function/loginout.php';
require_once('views/page_top.php');


?>

<main>
    <?php require_once "views/loginout_form.php";?>
</main>

<?php require_once('views/page_bottom.php'); ?>