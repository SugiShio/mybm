<?php
    add_theme_support('menus');

    function shortenUrl($url) {
        return preg_replace('/https?:\/\//', '', $url);
    }

    //予約投稿機能を無効化
    add_action('save_post', 'setSchedule', 99);
    add_action('edit_post', 'setSchedule', 99);
    function setSchedule() {
        global $wpdb;
        if (is_category('schedule')) {
            $sql = 'UPDATE `'.$wpdb->prefix.'posts` ';
            $sql .= 'SET post_status = "publish" ';
            $sql .= 'WHERE post_status = "future"';
            $wpdb->get_results($sql);
        }
    }

    // 日付の近いものから表示
    add_action('pre_get_posts', 'my_pre_get_posts');
    function my_pre_get_posts($query) {
        if (is_category('schedule')) {
            $query->set('order', 'ASC');
        }
    }
?>