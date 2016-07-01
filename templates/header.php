<header class="banner">
  <div class="container">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button class="navbar-toggle" type='button' data-toggle='collapse' data-target='.navbar-collapse'>
            <span class="sr-only"> Toggle navigation </span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">
            <img alt="Brand" style="height:50px; margin-top: -15px;" src="<?= get_template_directory_uri(); ?>/dist/images/fairmondo_logo.jpg">
          </a>
        </div>
        <div class="collapse navbar-collapse">
          <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav']);
          endif;
          ?>        
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="https://www.facebook.com/fairmarketcoop" target="_blank">
                <i class="fa fa-facebook"></i>
              </a>
            </li>
            <li>
              <a href="https://twitter.com/Fairmondouk" target="_blank">
                <i class="fa fa-twitter"></i>
              </a>
            </li>
            <li>
              <a href="https://www.pinterest.com/theoldmaninrome/fairmarketcoop/" target="_blank">
                <i class="fa fa-pinterest"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
   </div>
</header>
   <!--
    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    <nav class="nav-primary">
    </nav>
    -->

