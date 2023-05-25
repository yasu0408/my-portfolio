    <div class="container">
      <div class="header_logo">
            <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-white.svg" alt="firststep-logo">
            </a>
      </div>
      <div class="header_burger"></div>
      <nav class="header_nav">
        <ul>
          <li class="header_link"><a target="_blank" href="<?php echo esc_url('https://github.com/yasu0408/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/git-white.svg" alt="icon-git"></a></li>
          <li class="header_link"><a class="to_about" href="<?php echo esc_url(home_url('#about')); ?>">About</a></li>
          <li class="header_link"><a class="to_skill" href="<?php echo esc_url(home_url('#skill')); ?>">Skill</a></li>
          <li class="header_link"><a class="to_works" href="<?php echo esc_url(home_url('#works')); ?>">Works</a></li>
          <li class="header_link"><a class="to_strength" href="<?php echo esc_url(home_url('#strength')); ?>">Strength</a></li>
          <li class="header_link"><a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a></li>
        </ul>
      </nav>
    </div>
 