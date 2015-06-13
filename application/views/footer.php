<?php
/**
 * Created by PhpStorm.
 * User: Benny
 * Date: 13/06/2015
 * Time: 19:52
 */

?>
<!--/start-footer-->
<div class= "footer">
    <div class="container">
        <div class="col-md-3 footer-grid">
            <div class="logo two">
                <a href="index.html"><h3>Flower<span>House</span></h3></a>
            </div>
        </div>
        <div class=" col-md-3 footer-grid footer-grid2">
            <div class="bottom-nav">
                <h4>+</h4>
                <ul>
                    <li><a class="active" href="index.html">Home</a></li>
                    <li><a href="menu.html">PRODUTOS</a></li>
                    <li><a href="404.html">SERVICES</a></li>
                    <li><a href="portfolio.html">PORTFOLIO</a></li>
                    <li><a href="contact.html">Contactos</a></li>
                    <div class="clearfix"> </div>
                </ul>
            </div>
        </div>
        <div class=" col-md-3 footer-grid">
            <div class="Office Address">
                <h4>ENDEREÇOS</h4>
                <ul class="bottom-icons">
                    <li><a class="home" href="#"><span> </span></a>Lorem ipsy street,Newyork</li>
                    <li><a class="mail" href="mailto:info@example.com"><span> </span>123 int@example.com</a></li>
                    <li><a class="mbl" href="#"><span> </span></a>+91 000 00 00 00 0</li>
                    <div class="clearfix"> </div>
                </ul>
            </div>
        </div>
        <div class="col-md-3 footer-grid">
            <h4>SUBESCREVER</h4>
            <div class="support">
                <input type="text" class="text" value="Introduza aqui o seu email" onfocus="this.value = '';" onblur="if (this.value == 'Enter email to reset it') {this.value = 'Enter email to reset it';}">
                <input type="submit" value="SUBMIT" class="botton">
                <p>Para receber notificações sobre as nossas novidades e promoções subescreva a nossa newsletter.</p>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<div class="copy-right">
    <div class="container">
        <p>Copyright &copy; 2015 All Rights Reserved </p>
    </div>
</div>
<!--start-smoth-scrolling-->
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!--start-smooth-scrolling-->
<script type="text/javascript">
    $(document).ready(function() {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear'
         };
         */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>