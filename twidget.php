<?php
/*
Plugin Name: Twitter Feed Widget
Plugin URI: https://orcafinweb.com/twitter-feed-widget
Description: A WordPress widget plugin to display Twitter feeds.
Author: Robbie Carragher
Author URI: https://orcafinweb.com
Version: 1.0.0
*/

class Twitter_Feed_Widget extends WP_Widget {
    function __construct() {
        parent::__construct('twitter_feed', 'Twitter Feed');
    }
    function widget($args, $instance) {
        $username = apply_filters('widget_title', $instance['username']);
        echo $args['before_widget'];
        echo $args['before_title'] . $username . $args['after_title'];
        ?>
        <div class="twitter-feed">
            <a class="twitter-timeline" href="https://twitter.com/<?php echo $username; ?>?ref_src=twsrc%5Etfw">Tweets by <?php echo $username; ?></a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
        <?php
        echo $args['after_widget'];
    }
    function form($instance) {
        $username = !empty($instance['username']) ? $instance['username'] : '';
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('username'); ?>">Twitter Username:</label>
            <input class="widefat" id="<?php echo $this->get_field_id('username'); ?>" name="<?php echo $this->get_field_name('username'); ?>" type="text" value="<?php echo esc_attr($username); ?>">
        </p>
        <?php
    }
}
function register_twitter_feed_widget() {
    register_widget('Twitter_Feed_Widget');
}
add_action('widgets_init', 'register_twitter_feed_widget');
