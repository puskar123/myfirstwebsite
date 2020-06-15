<?php

/*
Plugin Name: My First Plugin
Description: This plugin will change your life
*/

add_shortcode('Count', 'countNumber');

function countNumber () {
    return 2+2 ;
}