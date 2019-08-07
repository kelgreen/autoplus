<?php
const PAGE_NAME = 'Produit';
require_once('views/page_top.php');
?>
    <h1>Detail du Produit</h1>
    <main>
        <div class="dprod">
            <div class="img-detail">
                <img  src="images/mb-detail.png" alt="page-detail">
                <table>
                    <thead>
                    <tr>
                        <th>Sommaire</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <td>Total</td>
                        <td>x$</td>
                    </tr>
                    </tfoot>
                    <tbody>
                    <tr>
                        <td class="bordertd">2018  Mercedes </td>
                        <td class="bordertd">25000$</td>
                    </tr>
                    <tr>
                        <td>Options sélectionnées:</td>
                        <td><a href="catalogue.html">Changez</a></td>
                    </tr>
                    <tr>
                        <td>Sieges chaufants</td>
                        <td>x$</td>
                    </tr>
                    <tr>
                        <td>Air conditioner</td>
                        <td>x$</td>
                    </tr>
                    <tr>
                        <td>Vitres electriques</td>
                        <td>x$</td>
                    </tr>
                    <tr>
                        <td>Tansmission: AWD</td>
                        <td>x$</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

<?php require_once('views/page_bottom.php'); ?>