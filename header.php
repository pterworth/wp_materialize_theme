<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>TPM</title>
  <?php wp_head(); ?>
</head>

<body>
  <header>
    <nav>
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo">Logo</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <?php wp_nav_menu(array('theme_location'=>'primary', 'menu_class'=>'right hide-on-med-and-down')); ?>
      </div>
    </nav>
    <?php wp_nav_menu(array('theme_location'=>'primary', 'menu_class'=>'sidenav', 'menu_id'=>'mobile-demo')); ?>
  </header>