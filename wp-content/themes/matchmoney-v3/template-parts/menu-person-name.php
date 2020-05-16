<?php
  $current_user = wp_get_current_user();
  $link_logout = wp_logout_url( home_url() );
  if ( 0 == $current_user->ID ) {
      // Not logged in.
  } else {
    	echo '<div class="btn-group">
          <button class="btn btn-sm dropdown-toggle rounded-8" type="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">';
      $firstNameSplit = $current_user->display_name;
      $firstName = explode(" ", $current_user->display_name);

    	echo 'Olá, ' . $firstName[0] . '
    	</button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="/minha-conta">Minha Conta</a>
            <a class="dropdown-item" href="'. $link_logout .'">Sair</a>            
          </div>
        </div>';
  }
