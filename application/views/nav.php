<?php
/**
 * Created by PhpStorm.
 * User: Benny
 * Date: 13/06/2015
 * Time: 19:20
 */

?>
<div id="home" class="header">
	<!--logo-->
	<div class="header-top">
	    <div class="container">
		    <!--top-nav-->
			<div class="top-nav">
				<span class="menu"> </span>
				<ul>
					<li><a class="active" href="index.html">Home</a></li>
					<li><a href="404.html">SERVIÇOS</a></li>
                    <li><a href="menu.html">PRODUTOS</a></li>
					<li><a href="portfolio.html">PORTFOLIO</a></li>
					<li class="lost"><a href="contact.html">Contactos</a></li>
					<div class="clearfix"> </div>
				</ul>
			</div>
			<div class="clearfix"> </div>
		        <!-- script-for-menu -->
		        <script>
                   $(document).ready(function(){
                        $("span.menu").click(function(){
                            $(".top-nav ul").slideToggle(200);
                        });
                   });
			    </script>
		    </div>
	        <!--End-top-nav-script-->
		<div class="clearfix"> </div>
	</div>
	<!--/header-->
</div>
