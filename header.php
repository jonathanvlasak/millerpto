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
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v11.0" nonce="9MYdd7aM"></script>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v11.0&appId=1854952818008205&autoLogAppEvents=1" nonce="uEt9t8JM"></script>

<nav class="relative flex flex-wrap items-center justify-between py-10">
  <a href="<?php echo site_url() ?>"><img src="<?php echo get_theme_file_uri('/img/millerptologo.jpeg')?>" class="absolute top-0 z-10 p-2 bg-white rounded-lg h-36 left-10 filter drop-shadow-xl"></a>
  <div class="container flex flex-wrap items-center justify-between mx-auto">
    <div class="relative flex justify-between w-full md:w-auto md:static md:block md:justify-start">
      <button class="block px-3 py-1 text-xl leading-none bg-transparent border border-transparent border-solid rounded outline-none cursor-pointer md:hidden focus:outline-none" type="button">
        <span class="relative block w-6 h-px bg-white rounded-sm"></span>
        <span class="relative block w-6 h-px mt-1 bg-white rounded-sm"></span>
        <span class="relative block w-6 h-px mt-1 bg-white rounded-sm"></span>
      </button>
    </div>
    <div class="items-center flex-grow md:flex" id="example-navbar-warning">
      <ul class="flex flex-col ml-auto list-none md:flex-row">
            <li <?php if (is_page('about') or wp_get_post_parent_id(0) == 2) echo 'class="test"'?> class="nav-item">
            <a class="flex items-center px-3 py-2 text-sm font-bold leading-snug uppercase text-green-850 hover:opacity-75" href="<?php echo site_url('/about') ?>">
              About
            </a>
          </li>
            <li class="nav-item">
            <a class="flex items-center px-3 py-2 text-sm font-bold leading-snug uppercase text-green-850 hover:opacity-75" href="<?php echo site_url('/volunteer') ?>">
              Volunteer
            </a>
          </li>
          <li class="nav-item">
            <a class="flex items-center px-3 py-2 text-sm font-bold leading-snug uppercase text-green-850 hover:opacity-75" href="<?php echo site_url('/fundraising') ?>">
              Fundraising
            </a>
          </li>
          <li class="nav-item">
            <a class="flex items-center px-3 py-2 text-sm font-bold leading-snug uppercase text-green-850 hover:opacity-75" href="<?php echo site_url('/calendar') ?>">
              Events Calendar
            </a>
          </li>
          <li class="nav-item">
            <a class="flex items-center px-3 py-2 text-sm font-bold leading-snug uppercase text-green-850 hover:opacity-75" href="<?php echo site_url('/contact') ?>">
              Contact
            </a>
          </li>
          <li class="nav-item">
            <a class="flex items-center p-2 ml-5 mr-3 text-sm font-bold rounded-full bg-blue-550" href="mailto:communications@millerpto.org">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="white">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg> 
            </a>
          </li>
          <li class="nav-item">
            <a class="flex items-center p-2 text-sm font-bold rounded-full bg-blue-550" href="https://www.facebook.com/wemillerpto">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="white" viewBox="0 0 24 24" stroke="none">
                <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/>           
              </svg> 
            </a>
          </li>

      </ul> 
    <!-- <?php wp_nav_menu(array(
        'theme_location' => 'headerMenuLocation',        
    ));?> -->
    </div>
  </div>
</nav>