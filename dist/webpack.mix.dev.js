"use strict";

var mix = require('laravel-mix');

var tailwindcss = require('tailwindcss');

mix.postCss('./theme-style.css', './style.css', tailwindcss('./tailwind.config.js'));