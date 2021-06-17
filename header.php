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
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v11.0" nonce="ybNy0SLg"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<div class="relative w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800">
  <div x-data="{ open: false }" class="flex flex-col max-w-screen-xl px-4 py-10 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
    <div class="flex flex-row items-center justify-between p-4">
    <a href="<?php echo site_url() ?>"><img src="<?php echo get_theme_file_uri('/img/millerptologo.jpeg')?>" class="absolute top-0 z-10 p-2 bg-white rounded-lg h-36 filter drop-shadow-xl"></a>
      <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
        <svg fill="green" viewBox="0 0 20 20" class="w-6 h-6">
          <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
          <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
        </svg>
      </button>
    </div>
    <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow hidden pb-4 md:pb-0 md:flex md:justify-end md:flex-row">
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
    </nav>
  </div>
</div>