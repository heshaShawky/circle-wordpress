<?php
/*
@package circle


*/
function excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
    } else {
        $excerpt = implode(" ",$excerpt);
    }
    $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
    return $excerpt;
}

function content($limit, $text) {
    $content = explode(' ', $text, $limit);
    if (count($content)>=$limit) {
        array_pop($content);
        $content = implode(" ",$content).'...';
    } else {
        $content = implode(" ",$content);
    }
    $content = preg_replace('/\[.+\]/','', $content);
    $content = apply_filters($text, $content);
    $content = str_replace(']]>', ']]&gt;', $content);
    return $content;
}

function wpb_set_post_views($postID) {
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
//To keep the count accurate, lets get rid of prefetching
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);


function wpb_track_post_views ($post_id) {
    if ( !is_single() ) return;
    if ( empty ( $post_id) ) {
        global $post;
        $post_id = $post->ID;
    }
    wpb_set_post_views($post_id);
}
add_action( 'wp_head', 'wpb_track_post_views');


class My_taps_widget extends WP_Widget {

    // setup the widget name, description, etc
    public function __construct() {
        $widget_ops = array(
            'calssname'     => 'my-widget',
            'description'   => 'Custom circle Widget'
        );
        parent::__construct( 'circle_taps', 'Circle Taps', $widget_ops );
    }

    // Back end display of widget
    public function form() {

    }

    // Fron end display of widget
    public function widget( $args, $instance ) {
        echo $args['before_widget'];


        ?>

        <div class="taps">
            <div class="panel with-nav-tabs panel-default">
                <div class="panel-heading">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab1default" data-toggle="tab">popular</a></li>
                            <li><a href="#tab2default" data-toggle="tab">recent</a></li>
                            <li><a href="#tab3default" data-toggle="tab">comments</a></li>
                        </ul>
                </div>
                <div class="panel-body">
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1default">

                            <?php

                            $popularpost = new WP_Query( array( 'posts_per_page' => 4, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
                            while ( $popularpost->have_posts() ) : $popularpost->the_post(); ?>

                            <div class="recent-posts-side">
                                <p class="date text-uppercase"><?php the_time('F j,Y') ?>  |  <span class="user">By <?php the_author(); ?></span></p>
                                <?php the_title( '<h5 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h5>' ); ?>
                                <p>

                                </p>
                                <hr />
                            </div>




                            <?php endwhile;
                            ?>

                        </div>
                        <div class="tab-pane fade" id="tab2default">
                            <?php
                            $recent_posts = wp_get_recent_posts(array('numberposts' => '5'));
                            foreach ($recent_posts as $recent): ?>


                                    <?php if ($recent['post_status'] == 'publish'): ?>
                                        <div class="recent-posts-side">
                                            <p class="date text-uppercase">
                                                <?php echo $recent["post_date"]; ?>  |
                                                <span class="user">by
                                                    <?php echo get_userdata(intval($recent['post_author']))->user_login; ?>
                                                </span>
                                            </p>
                                            <?php
                                                echo "<h5><a href='".get_permalink($recent["ID"])."'>{$recent['post_title']}</a></h5>";
                                            ?>
                                            <p class="short-desc">
                                                <?php echo excerpt( 13, $recent['post_content'] ); ?>
                                            </p>
                                            <hr />
                                        </div>
                                    <?php endif; ?>


                            <?php endforeach; wp_reset_query(); ?>
                        </div>
                        <div class="tab-pane fade" id="tab3default">
                            <?php global $wpdb;
                            $number = 5;
                            $comments = $wpdb->get_results(
                                "SELECT *
                                FROM $wpdb->comments
                                WHERE comment_approved = '1'
                                ORDER BY comment_date_gmt DESC
                                LIMIT $number"
                            );

                            ?>

                            <?php if ($comments): ?>
                                <?php foreach ( (array) $comments as $comment) :?>
                                    <div class="comment">
                                        <p>
                                            <span>@<?php echo $comment->comment_author ?> </span>
                                            <?php echo excerpt(10, $comment->comment_content); ?>
                                             at <a href=<?php echo get_comment_link($comment->comment_ID) ?>>
                                                <?php echo get_the_title($comment->comment_post_ID) ?>
                                            </a>
                                        </p>
                                        <hr />
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
        echo $args['after_widget'];
    }



}
add_action( 'widgets_init', function () {
    register_widget( 'My_taps_widget' );
});
