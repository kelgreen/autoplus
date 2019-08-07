<?php
?>

<footer>
    <div id="divfoot">
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="catalogue.php">Catalogue</a></li>
                <li><a href="contact.php">Contactez-nous</a></li>
            </ul>
        </nav>
        <div id="socialmediafoot" class="row">
            <ul>
                <li>
                    <a href="http://twitter.com">
                        <img src="images/twitter2.png" alt="twitter icom"/>
                    </a>
                </li>
                <li>
                    <a href="http://facebook.com">
                        <img src="images/facebook2.png" alt="facebook icom"/>
                    </a>
                </li>
                <li>
                    <a href="http://youtube.com">
                        <img src="images/youtube2.png" alt="youtube icom"/>
                    </a>
                </li>
            </ul>
        </div>
        <p><span class="rouge">Tel.:</span> 514 842-2426<br>
            <span class="rouge">Fax:</span> 514 842-2426<br>
            <span class="rouge">Email:</span> info@isi-mtl.com<br>
            <span class="rouge">Adresse:</span> 255 Cremazie Blvd. East, suite 100, Montreal (Quebec) H2M 1M2</span><br><br>
            <small>Auto plus &copy; 2018<br>*ce projet est realiser pour fin d'études*</small></p>

        <button onclick="topFunction()" id="myBtn" title="Go to top"><img src="images/go-to-the-top.png" alt="back to top button"></button>
    </div>
</footer>

<script>
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("myBtn").style.display = "block";
        } else {
            document.getElementById("myBtn").style.display = "none";
        }
    }
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
</body>
</html>