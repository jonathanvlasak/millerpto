<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php wp_head(); ?>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
</head>
<body <?php body_class(); ?>>
<nav class="relative flex flex-wrap items-center justify-between py-3 bg-teal-800">
  <div class="container flex flex-wrap items-center justify-between mx-auto">
    <div class="relative flex justify-between w-full md:w-auto md:static md:block md:justify-start">
      <a class="inline-block py-2 mr-4 text-sm font-bold leading-relaxed text-white uppercase whitespace-nowrap" href="<?php echo site_url() ?>">
        Miller PTO
      </a>
      <button class="block px-3 py-1 text-xl leading-none bg-transparent border border-transparent border-solid rounded outline-none cursor-pointer md:hidden focus:outline-none" type="button">
        <span class="relative block w-6 h-px bg-white rounded-sm"></span>
        <span class="relative block w-6 h-px mt-1 bg-white rounded-sm"></span>
        <span class="relative block w-6 h-px mt-1 bg-white rounded-sm"></span>
      </button>
    </div>
    <div class="items-center flex-grow md:flex" id="example-navbar-warning">
      <ul class="flex flex-col ml-auto list-none md:flex-row">
            <li <?php if (is_page('about-us') or wp_get_post_parent_id(0) == 2) echo 'class="test"'?> class="nav-item">
            <a class="flex items-center px-3 py-2 text-xs font-bold leading-snug text-white uppercase hover:opacity-75" href="<?php echo site_url('/about-us') ?>">
              About
            </a>
          </li>
            <li class="nav-item">
            <a class="flex items-center px-3 py-2 text-xs font-bold leading-snug text-white uppercase hover:opacity-75" href="<?php echo site_url('/about-us') ?>">
              Volunteer
            </a>
          </li>
          <li class="nav-item">
            <a class="flex items-center px-3 py-2 text-xs font-bold leading-snug text-white uppercase hover:opacity-75" href="<?php echo site_url('/about-us') ?>">
              Fundraising
            </a>
          </li>
          <li class="nav-item">
            <a class="flex items-center px-3 py-2 text-xs font-bold leading-snug text-white uppercase hover:opacity-75" href="<?php echo site_url('/about-us') ?>">
              Calendar
            </a>
          </li>
          <li class="nav-item">
            <a class="flex items-center px-3 py-2 text-xs font-bold leading-snug text-white uppercase hover:opacity-75" href="<?php echo site_url('/news') ?>">
              News
            </a>
          </li>

      </ul> 
    <!-- <?php wp_nav_menu(array(
        'theme_location' => 'headerMenuLocation',        
    ));?> -->
    </div>
  </div>
</nav>