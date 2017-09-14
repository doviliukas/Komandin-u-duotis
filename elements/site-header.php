<header class="header">

    <div class="header-inner">

        <div class="header-body">
            
            <?php 
            wp_nav_menu(array(
            'containers' => 'ul',
            'menu-class' => 'homelogo',
            'theme-location' => 'primary-navigation',
            'menu' => 'primary-navigation'
            ));
            ?>
            
            <div>
            <a style="position:absolute;top:50%;left:50%;margin-right:-50%;transform:translate(-50%, -50%)"; href="<?php echo home_url(); ?>"><img src="<?php echo wp_logout_url(ASSETS_URL . '/assets/pictures/logo.png'); ?>"></a>
            </div>
<!--
           <ul>

                <li><a href="#portfolio" >Portfolio</a></li>
                <li><a href="#about" >About</a></li>
                <li class="homelogo"><a href="<?php echo home_url(); ?>"><img src="<?php echo wp_logout_url(ASSETS_URL . '/assets/pictures/logo.png'); ?>"></a></li>
                <li><a href="http://www.blogas.lt/" target="_blank" rel="nofollow">Blog</a></li>
                <li><a href="#getintouch">Get in touch</a></li>

            </ul>
-->
            
        </div>

    </div>

</header>
