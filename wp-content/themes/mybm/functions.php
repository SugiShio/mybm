<?php
    add_theme_support('menus');

    function shortenUrl($url) {
        return preg_replace('/https?:\/\//', '', $url);
    }
 ?>