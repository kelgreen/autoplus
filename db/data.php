<?php

define('ART_MODEL','Modèle: ');
define('ART_CAT','Catégorie: ');
define('ART_IMG','img');
define('ART_KM','KM: ');
define('ART_YEAR','Année: ');
define('ART_PRICE','Prix: ');
define('CAT_NAME','catname');
define('CAT_IMG','catimg');
define('CAT_MSG','catmsg');
define('CAT_IMG2','catimg2');
define('CART_OP','cartop');
define('CART_OP_ADD','cartopadd');
define('OP_NAME', 'op');
define('OP_AJOUT', 'add');
define('OP_RETRAIT', 'suppr');
define('OP_MAZ', 'reset');
define('NB_WISH', 'Total');
define('IDPROD', 'Produit');

$category = array(
    '1' => array(
        CAT_NAME => 'Berline',
        CAT_IMG => 'berline.jpg',
        CAT_MSG => 'Les 5 meilleures berlines familiales.',
        CAT_IMG2 => 'berline.png',
    ),
    '2' => array(
        CAT_NAME => 'Hatchback',
        CAT_IMG => 'v-hatchback.jpg',
        CAT_MSG => 'Découvrez nos différents modèles.',
        CAT_IMG2 => 'hatchback.png',
    ),
    '3'  => array(
        CAT_NAME => 'SUV',
        CAT_IMG => 'v-vus.jpg',
        CAT_MSG => 'Top 5 des SUV les plus populaires au Québec.',
        CAT_IMG2 => 'suv.png',
    ),
);

$product = array(
    '11' => array(
        ART_MODEL => "Honda",
        ART_CAT => '1',
        ART_IMG => "accord.jpg",
        ART_KM => '140.000',
        ART_YEAR => '2014',
        ART_PRICE => '20900$',
    ),

    '12' => array(
        ART_MODEL => "Mercedes",
        ART_CAT => '1',
        ART_IMG => "c203.jpg",
        ART_KM => '100.000',
        ART_YEAR => '2010',
        ART_PRICE => '19900$',
    ),
    '13' => array(
        ART_MODEL => "Toyota Corola",
        ART_CAT => '1',
        ART_IMG => "corola.jpg",
        ART_KM => '100.000',
        ART_YEAR => '2010',
        ART_PRICE => '19900$',
    ),
    '14' => array(
        ART_MODEL => "Hyunday Elentra",
        ART_CAT => '1',
        ART_IMG => "elentra.jpg",
        ART_KM => '100.000',
        ART_YEAR => '2008',
        ART_PRICE => '9900$',
    ),
    '15' => array(
        ART_MODEL => "Kia Forte",
        ART_CAT => '1',
        ART_IMG => "forte.jpg",
        ART_KM => '101.000',
        ART_YEAR => '2013',
        ART_PRICE => '23900$',
    ),

    '112' => array(
        ART_MODEL => "Honda Civic",
        ART_CAT => '2',
        ART_IMG => "civic.jpg",
        ART_KM => '115.000',
        ART_YEAR => '2011',
        ART_PRICE => '10900$',
    ),
    '122' => array(
        ART_MODEL => "Mercedes Class A",
        ART_CAT => '2',
        ART_IMG => "classa.jpg",
        ART_KM => '125.000',
        ART_YEAR => '2013',
        ART_PRICE => '24900$',
    ),
    '132' => array(
        ART_MODEL => "Toyota Auris",
        ART_CAT => '2',
        ART_IMG => "auris.jpg",
        ART_KM => '140.000',
        ART_YEAR => '2009',
        ART_PRICE => '10900$',
    ),
    '142' => array(
        ART_MODEL => "Hyunday Accent",
        ART_CAT => '2',
        ART_IMG => "accent.jpg",
        ART_KM => '118.000',
        ART_YEAR => '2008',
        ART_PRICE => '7400$',
    ),
    '152' => array(
        ART_MODEL => " Kia Rio",
        ART_CAT => '2',
        ART_IMG => "rio.jpg",
        ART_KM => '112.000',
        ART_YEAR => '2008',
        ART_PRICE => '6900$',
    ),
    '113' => array(
        ART_MODEL => "Honda CRV",
        ART_CAT => '3',
        ART_IMG => "crv.jpg",
        ART_KM => '135.000',
        ART_YEAR => '2013',
        ART_PRICE => '13900$',

    ),
    '123' => array(
        ART_MODEL => "Mercedes GLK",
        ART_CAT => '3',
        ART_IMG => "glk.jpg",
        ART_KM => '125.000',
        ART_YEAR => '2015',
        ART_PRICE => '29900$',
    ),
    '133' => array(
        ART_MODEL => "Toyota Rav4",
        ART_CAT => '3',
        ART_IMG => "rav4.jpg",
        ART_KM => '160.000',
        ART_YEAR => '2009',
        ART_PRICE => '14900$',
    ),
    '143' => array(
        ART_MODEL => "Hyunday Tucson",
        ART_CAT => '3',
        ART_IMG => "tucson.jpg",
        ART_KM => '110.000',
        ART_YEAR => '2012',
        ART_PRICE => '11900$',
    ),
    '153' => array(
        ART_MODEL => "Kia Sol",
        ART_CAT => '3',
        ART_IMG => "soul.jpg",
        ART_KM => '119.000',
        ART_YEAR => '2011',
        ART_PRICE => '11900$',
    )
);
?>



