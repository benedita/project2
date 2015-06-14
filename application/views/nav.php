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
					<li><a id="home" class="active" href="index.php">Home</a></li>
					<li><a id="servicos" href="404">SERVIÇOS</a></li>
                    <li><a id="produtos" href="menu">PRODUTOS</a></li>
					<li><a id="portefolio" href="portefolio">PORTFOLIO</a></li>
					<li class="lost"><a id="contactos"href="contact">Contactos</a></li>
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
