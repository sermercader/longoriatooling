        <!--top bar-->
        <div class="top-bar gray-bg visible-md visible-lg">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-6">
                        <ul class="top-link pull-left">
                            <!--<li><i class="fa fa-clock-o"></i> Mon - Sat: 7:00 - 17:00</li>-->
                            <li><i class="fa fa-phone"></i> (477) 763 03 47</li>
                            <li><i class="fa fa-envelope-o"></i> ventas@longoriatm.com.mx </li>
                        </ul>
                    </div>
                    <div class="col-md-4">

                        <nav id="primary_nav_wrap">
                            <ul class="pull-right text-uppercase">
                                <li><a href="#">Idioma <i class="fa fa-angle-down"></i></a>
                                    <ul>
                                        <li><a href="#">Español</a></li>
                                        <li><a href="#">Inglés</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Divisiones <i class="fa fa-angle-down"></i></a>
                                    <ul>
                                        <li><a href="#">Maquinado</a></li>
                                        <li><a href="#">Hule</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>

                    </div>
                    <div class="col-md-2">
                        <!--<ul class="top-link pull-right text-uppercase">
                            <li><a href="#">Sign In</a>
                            </li>
                            <li><a href="#">Register</a>
                            </li>
                        </ul>-->
                        <div class="top-social-link pull-right">
                            <a href="https://www.facebook.com/Longoria-Tooling-106080630813523" target="_blank">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="https://www.youtube.com/channel/UCf-i1KnVmrcceIJPZI8scyg/" target="_blank">
                                <i class="fa fa-youtube"></i>
                            </a>
                            <a href="https://wa.me/5214774324177?text=%C2%A1Buen%20día!%20Me%20interesa%20contactarlos" target="_blank">
                                <i class="fa fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--top bar-->
        
        
        <!--header start-->
        <header class="l-header">
            <div class="l-navbar l-navbar_expand l-navbar_t-light js-navbar-sticky">
                <div class="container">
                    <nav class="menuzord js-primary-navigation" role="navigation" aria-label="Primary Navigation">

                        <!--logo start-->
                        <a href="index.php" class="logo-brand">
                            <img class="retina" src="assets/img/logo.png" alt="" />
                        </a>
                        <!--logo end-->

                        <!--mega menu start-->
                        <ul class="menuzord-menu menuzord-right c-nav_s-standard c-nav_s-outline">
                            <?php
    	                		if($n == 1){
        	              			$o = 'active';
            	        		}else{
                	      			$o = '';
                    			}
                  			?>                            
                            <li class="<?php echo $o; ?>"><a href="index.php">Inicio</a></li>
                            <?php
    	                		if($n == 2){
        	              			$o = 'active';
            	        		}else{
                	      			$o = '';
                    			}
                  			?>
                            <li class="<?php echo $o; ?>"><a href="nosotros.php">Nosotros</a></li>
                            <?php
    	                		if($n == 3){
        	              			$o = 'active';
            	        		}else{
                	      			$o = '';
                    			}
                  			?>
                            <li class="<?php echo $o; ?>"><a href="hacemos.php">¿Qué Hacemos?</a></li>
                            <?php
    	                		if($n == 4){
        	              			$o = 'active';
            	        		}else{
                	      			$o = '';
                    			}
                  			?>
                            <li class="<?php echo $o; ?>"><a href="calidad.php">Metodologías de calidad</a></li>
                            <?php
    	                		if($n == 5){
        	              			$o = 'active';
            	        		}else{
                	      			$o = '';
                    			}
                  			?>
                            <li class="<?php echo $o; ?>"><a href="contacto.php">Contacto</a></li>
                        </ul>
                        <!--mega menu end-->

                    </nav>
                </div>
            </div>
        </header>
        <!--header end-->