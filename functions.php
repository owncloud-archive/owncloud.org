<?php

// define('WP_SCSS_ALWAYS_RECOMPILE', true);

function add_theme_scripts() {
    wp_deregister_script('jquery');

    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', false, null, true);
    wp_enqueue_script('jquery');

    wp_register_script( 'jquery-easings', get_template_directory_uri() . '/js/vendor/jquery.easings.js', array('jquery'), null, true );
    wp_enqueue_script( 'jquery-easings' );

    wp_register_script( 'bootstrap-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'bootstrap-popper' );

    wp_register_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js', array('bootstrap-popper'), null, true );
    wp_enqueue_script( 'bootstrap' );

    wp_register_script( 'stickykit', get_template_directory_uri() . '/js/vendor/stickykit.1.1.2.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'stickykit' );

    wp_register_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery'), null, true );
    wp_localize_script('main', 'ajax_params', array(
      'url' => admin_url('admin-ajax.php'),
      'nonce' => wp_create_nonce('owncloud-nonce'),
      'template_path' => get_template_directory_uri()
    ));
    wp_enqueue_script( 'main' );

    wp_register_script( 'slickslider', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'slickslider' );

    wp_register_script( 'isotope', get_template_directory_uri() . '/js/vendor/isotope.3.0.4.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'isotope' );

    wp_register_script( 'isotope-packery', get_template_directory_uri() . '/js/vendor/isotope.packery.min.js', array('isotope'), null, true );
    wp_enqueue_script( 'isotope-packery' );

    wp_register_script( 'isotope-imagesloaded', get_template_directory_uri() . '/js/vendor/isotope.imagesLoaded.min.js#async', array('isotope'), null, true );
    wp_enqueue_script( 'isotope-imagesloaded' );

    wp_register_script('js-cookie', 'https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js', array(), null, true);
    wp_enqueue_script('js-cookie');

    // wp_enqueue_style( 'reboot', get_template_directory_uri() . '/assets/bootstrap-reboot.css', false, '1', 'all');
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap.min.css', false, '4.0.0', 'all');
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/font-awesome.min.css', false, '1', 'all');

    if (is_page_template()) {

        $page_template = get_page_template_slug( get_queried_object_id() );
        $page_template = preg_replace('/\\.[^.\\s]{3,4}$/', '', $page_template);

        if (file_exists(__DIR__ . '/js/' . $page_template . '.js')) {
            wp_register_script( $page_template . '-script', get_template_directory_uri() . '/js/' . $page_template . '.js#async', array('jquery'), null, true );
            wp_localize_script( $page_template . '-script', 'ajax_params', array(
              'url' => admin_url( 'admin-ajax.php' ),
              'nonce' => wp_create_nonce( 'owncloud-nonce' ),
              'template_path' => get_template_directory_uri()
            ) );
            wp_enqueue_script( $page_template . '-script' );
        }
    }

    if (is_single()) {
        $postType = get_post_type();

        if (file_exists(__DIR__ . '/js/single-' . $postType . '.js')) {

            wp_register_script( 'single-' . $postType, get_template_directory_uri() . '/js/single-' . $postType . '.js#async', array('jquery'), null, true );

            wp_localize_script( 'single-' . $postType, 'ajax_params', array(
                'url' => admin_url('admin-ajax.php'),
                'nonce' => wp_create_nonce('owncloud-nonce'),
                'template_path' => get_template_directory_uri()
            ));

            wp_enqueue_script( 'single-' . $postType );
        }

        if ($postType === 'post') {

            // just register for now, we will enqueue it below
            wp_register_script( 'ajax_comment', get_stylesheet_directory_uri() . '/js/ajax-comment.js', array('jquery') );

            // let's pass ajaxurl here, you can do it directly in JavaScript but sometimes it can cause problems, so better is PHP
            wp_localize_script( 'ajax_comment', 'misha_ajax_comment_params', array(
                'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php'
            ) );

            wp_enqueue_script( 'ajax_comment' );
        }
    }

    wp_register_script( 'google-captcha', 'https://www.google.com/recaptcha/api.js#async', array(''), null, true );
    wp_enqueue_script( 'google-captcha' );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }

    if(is_post_type_archive()) {
      $postType = get_post_type();
      if (file_exists(__DIR__ . '/js/archive-' . $postType . '.js')) {
        wp_register_script( 'archive-' . $postType, get_template_directory_uri() . '/js/archive-' . $postType . '.js#async', array('jquery'), null, true );
        wp_enqueue_script( 'archive-' . $postType );
      }
    }

    if(is_home()) {
      wp_register_script( 'home', get_template_directory_uri() . '/js/home.js#async', array('jquery'), null, true );
      wp_localize_script( 'home', 'ajax_params', array(
        'url' => admin_url( 'admin-ajax.php' ),
        'nonce' => wp_create_nonce( 'owncloud-nonce' )
      ) );
      wp_enqueue_script( 'home' );
    }
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

add_filter( 'acf/settings/remove_wp_meta_box', '__return_false' );

function oc_async_scripts($url)
{
    if ( strpos( $url, '#async') === false )
        return $url;
    else if ( is_admin() )
        return str_replace( '#async', '', $url );
    else
    return str_replace( '#async', '', $url )."' async='async";
}
add_filter( 'clean_url', 'oc_async_scripts', 11, 1 );

function setup() {
    /* Add support for custom menus */
    add_theme_support( 'menus' );

    /* Add support for thumbnails (must be called before init hook) */
    add_theme_support( 'post-thumbnails' ); // for all post formats

    /* Add support for custom background image and color (option to set default arguments) */
    add_theme_support( 'custom-background' );

    /* Add support for custom header image (option to set default arguments) */
    add_theme_support( 'custom-header' );

    /* Add support post excerpts */
    add_post_type_support( 'page', 'excerpt' );

    /* add title tag */
    add_theme_support( 'title-tag' );

    // remove admin bar
    // show_admin_bar(false);



    // add_editor_style(get_template_directory_uri() . '/assets/custom-editor.css');
}

add_action( 'after_setup_theme', 'setup' );


//require authentication for all API requests
add_filter( 'rest_authentication_errors', function( $result ) {
    if ( ! empty( $result ) ) {
        return $result;
    }
    if ( ! is_user_logged_in() ) {
        return new WP_Error( 'rest_not_logged_in', 'You are not currently logged in.', array( 'status' => 401 ) );
    }
    return $result;
});

// Remove URL field from comments section
add_filter('comment_form_default_fields', 'website_remove');
function website_remove($fields)
{
	if(isset($fields['url']))
	unset($fields['url']);
	return $fields;
}


function oc_widgets_init() {
    register_sidebar(array(
    'name'          => 'Recent Tweets',
    'id'            => 'recent_tweets',
    'description'   => '',
    'before_widget' => '<div class="recent_tweet">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
    ) );
}
add_action( 'widgets_init', 'oc_widgets_init' );

// Add files types to allow uploads
function custom_upload_mimes ( $existing_mimes=array() ) {
  // Add *.EPS files to Media upload
  $existing_mimes['eps'] = 'application/postscript';

  // Add *.AI files to Media upload
  $existing_mimes['ai'] = 'application/postscript';

  return $existing_mimes;
}
add_filter('upload_mimes', 'custom_upload_mimes');

/* OWNCLOUD CUSTOM SHORTCODES */
function meta_execute( $atts, $content ) {
    return '<div class="row">' . do_shortcode($content) . '</div>';
}
add_shortcode( 'oc-meta', 'meta_execute' );

function metabox_execute( $atts, $content ) {
    ob_start();
    require(__DIR__ . '/template-parts/metabox.php');
    return ob_get_clean();
}
add_shortcode( 'oc-metabox', 'metabox_execute' );

function ocbutton_execute( $atts, $content ) {

    if (isset($atts['style']))
        $class = ' ' . $atts['style'];
    else
        $class = '';

    if (isset($atts['pageid'])) {
        $atts['link'] = get_page_link($atts['pageid']);
    }

    if (isset($atts['icon'])) {
        $icon = '<i class="fa ' . $atts['icon'] . '"></i>';
    } else {
        $icon = '';
    }

    if (!isset($atts['target'])) {
        $atts['target'] = '';
    }

    return '<a class="button-oc' . $class . '" href="' . $atts['link'] . '" target="' . $atts['target'] . '">' . $content . $icon . '</a>';
}
add_shortcode( 'oc-button', 'ocbutton_execute' );

function hostingproviders_execute(  ) {
    ob_start();
    require(__DIR__ . '/template-parts/hosting-providers.php');
    return ob_get_clean();
}
add_shortcode( 'hosting-providers', 'hostingproviders_execute' );

function ocInclude_execute( $atts ) {
    // returns a custom field of a page
    // include with [oc-include field="<acf field name>" page="<page id>"]
    return get_field($atts['field'], $atts['page']);
}
add_shortcode( 'oc-include', 'ocInclude_execute' );

/*
$atts array:
    id: internal DB field identifier
    url: url of the content to fetch (e.g. https://raw.githubusercontent.com/owncloud/core/stable10/CHANGELOG.md)
*/
function loadGithub_execute( $atts ) {
    global $post;
    $text = '';

    $interval = 3600; // how often content should be fetched

    $optionName = 'oc-githubload-' . $atts['id'];
    $lastFetch = get_option( 'oc-githubload-' . $atts['id']);

    if ($lastFetch === '') {
        add_option( $optionName, time());
        $lastFetch = time() - $interval - 1; // trigger first fetch
        $text .= 'initial|';
    }

    if ((time() - $lastFetch) > $interval) {
        $text .= 'fetching, interval fulfilled; last fetch: ' . $lastFetch . '; now: ' . time() . '; interval: ' . $interval . '|';
        require_once(__DIR__ . '/assets/parsedown/Parsedown.php');
        $Parsedown = new Parsedown();
        if (!empty(get_post_meta($post->ID, 'cached-content'))) {
            $text .= 'post meta was not empty|';
            update_post_meta($post->ID, 'cached-content', $Parsedown->text(file_get_contents($atts['url'])));
            update_option( $optionName, time() );
        } else {
            add_post_meta($post->ID, 'cached-content', $Parsedown->text(file_get_contents($atts['url'])));
            $text .= 'post meta was emtpy|';
        }
        // wp_mail( 'florian@owncloud.com', 'WP new cached content', 'Fetched new content from ' . $atts['url'] . " ----- " . $text);
    }

    return get_post_meta($post->ID, 'cached-content')[0];
}
add_shortcode( 'load-github', 'loadGithub_execute' );
/* ------------ */

function syndicationUpdate () {
    wp_mail( 'florian@owncloud.com', 'Syndication Update', 'Automatic scheduled email from WordPress to test cron');
    // file_get_contents('https://dev2.owncloud.org?update_feedwordpress=1');
}

add_action( 'syndication-update', 'syndicationUpdate' );


function mainLoop( $query ) {
    if ( $query->is_home() && $query->is_main_query() ) {
        if (isset($_GET['tag']))
            $query->set( 'tag', $_GET['tag'] );
    }
}
add_action( 'pre_get_posts', 'mainLoop' );

require_once( get_template_directory() .'/functions/better-comments.php' );

if(defined('WP_CRON_CUSTOM_HTTP_BASIC_USERNAME') && defined('WP_CRON_CUSTOM_HTTP_BASIC_PASSWORD')) {
    function http_basic_cron_request($cron_request) {
        $headers = array('Authorization' => sprintf('Basic %s', base64_encode(WP_CRON_CUSTOM_HTTP_BASIC_USERNAME . ':' . WP_CRON_CUSTOM_HTTP_BASIC_PASSWORD)));
        $cron_request['args']['headers'] = isset($cron_request['args']['headers']) ? array_merge($cron_request['args']['headers'], $headers) : $headers;
        return $cron_request;
    }
    add_filter('cron_request', 'http_basic_cron_request');
}

/* ADD MARKETO OPTIONS PAGE */
if( function_exists('acf_add_options_page') ) {

  acf_add_options_page(array(
        'page_title'    => 'Marketo Settings',
        'menu_title'    => 'Marketo Settings',
        'menu_slug'     => 'marketo-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

}

/* AJAX CALLS */
add_action( 'wp_ajax_load_posts', 'load_posts' );
add_action( 'wp_ajax_nopriv_load_posts', 'load_posts' );

function load_posts() {
    global $wpdb; // this is how you get access to the database

  $args = array(
      'numberposts' => 10,
      'orderby' => 'post_date',
      'order' => 'DESC',
      'post_type' => 'post',
      'post_status' => 'publish',
      'offset' => $_POST['offset'],
      'suppress_filters' => true
  );

  $recent = new WP_Query( $args );
  $posts = array();

  if ( $recent->have_posts() ) :
    while ( $recent->have_posts() ) :
        $recent->the_post();

        $posttags = get_the_tags();
        $tags = '';
        if ($posttags) {
            foreach($posttags as $tag) {
              $tags .= '<a href="' . get_tag_link($tag->term_id) . '" class="post-tag button-oc primary small">' . $tag->name . '</a>';
            }
        }

        $comments = '';
        if (get_comments_number() > 0) {
            $comments = '| <i class="fa fa-comments" aria-hidden="true"></i> ' . get_comments_number_text();

        }

        $posts[] = array(
          'link' => get_the_permalink(),
          'thumbnail' => get_the_post_thumbnail_url(null, 'post-preview'),
          'title' => get_the_title(),
          'excerpt' => get_the_excerpt(),
          'date' => get_the_date('d.m.Y'),
          'dateUnix' => get_the_time('U'),
          'author' => get_the_author_meta('first_name') . ' ' . get_the_author_meta('last_name'),
          'tags' => $tags,
          'comments' => $comments
        );

    endwhile;
  endif;
  echo json_encode(array('posts' => $posts));
    wp_die(); // this is required to terminate immediately and return a proper response
}


add_action( 'wp_ajax_marketo', 'marketo' );
add_action( 'wp_ajax_nopriv_marketo', 'marketo' );

function marketo() {

    require 'php/marketo-client/marketo-client.php';

    $Marketo = new Marketo(get_field('marketo-api-url', 'option'), get_field('marketo-client-id', 'option'), get_field('marketo-client-secret', 'option'));

    switch($_POST['data']['action']) {
        case 'setProgramStatus':
            $result = $Marketo->setProgramStatus($_POST['data']['lead']['id'], $_POST['data']['programId'], $_POST['data']['status']);

            switch($result['status']) {
                case 'skipped':
                    echo json_encode(array('success' => 0));
                    break;

            default:
                echo json_encode(array('success' => 1));
                break;
            }
      break;

    case 'newsletter-submission':
        $_POST['data']['lead']['unsubscribed'] = false;
        $_POST['data']['lead']['leadSource'] = 'Newsletter owncloud.org';

        $Marketo->pushLead($_POST['data']['lead'], 'Newsletter Program');
        echo json_encode(array('success' => 1));
        break;

    case 'conference-signup':
        if ($_POST['data']['lead']['newsletter'] == 'true') {
            unset($_POST['data']['lead']['newsletter']);

            $_POST['data']['lead']['unsubscribed'] = false;
            $_POST['data']['lead']['leadSource'] = 'Newsletter owncloud.org';
            $Newsletter = new Marketo(get_field('marketo-api-url', 'option'), get_field('marketo-client-id', 'option'), get_field('marketo-client-secret', 'option'));
            $Newsletter->pushLead($_POST['data']['lead'], 'Newsletter Program');
        }
        unset($_POST['data']['lead']['newsletter']);
        unset($_POST['data']['lead']['unsubscribed']);

        $_POST['data']['lead']['leadSource'] = 'ocCon 18 Registration';
        $result = $Marketo->pushLead($_POST['data']['lead'], 'ocCon 18');

        $result = $Marketo->setProgramStatus($result['result']['id'], 1527, 'RSVP');

        echo json_encode(array('success' => $result['success']));
        break;
    }

    wp_die();
}


/* COMMENT SECTION */
add_action( 'wp_ajax_ajaxcomments', 'misha_submit_ajax_comment' ); // wp_ajax_{action} for registered user
add_action( 'wp_ajax_nopriv_ajaxcomments', 'misha_submit_ajax_comment' ); // wp_ajax_nopriv_{action} for not registered users

function misha_submit_ajax_comment(){
    /*
     * Wow, this cool function appeared in WordPress 4.4.0, before that my code was muuuuch mooore longer
     *
     * @since 4.4.0
     */
    $comment = wp_handle_comment_submission( wp_unslash( $_POST ) );
    if ( is_wp_error( $comment ) ) {
        $error_data = intval( $comment->get_error_data() );
        if ( ! empty( $error_data ) ) {
            wp_die( '<p>' . $comment->get_error_message() . '</p>', __( 'Comment Submission Failure' ), array( 'response' => $error_data, 'back_link' => true ) );
        } else {
            wp_die( 'Unknown error' );
        }
    }

    /*
     * Set Cookies
     */
    $user = wp_get_current_user();
    do_action('set_comment_cookies', $comment, $user);

    /*
     * If you do not like this loop, pass the comment depth from JavaScript code
     */
    $comment_depth = 1;
    $comment_parent = $comment->comment_parent;
    while( $comment_parent ){
        $comment_depth++;
        $parent_comment = get_comment( $comment_parent );
        $comment_parent = $parent_comment->comment_parent;
    }

    /*
     * Set the globals, so our comment functions below will work correctly
     */
    $GLOBALS['comment'] = $comment;
    $GLOBALS['comment_depth'] = $comment_depth;

    /*
     * Here is the comment template, you can configure it for your website
     * or you can try to find a ready function in your theme files
     */
    $comment_html = '<li ' . comment_class('', null, null, false ) . ' id="comment-' . get_comment_ID() . '">
        <article class="comment-body" id="div-comment-' . get_comment_ID() . '">
            <footer class="comment-meta">
                <div class="comment-author vcard">
                    ' . get_avatar( $comment, 100 ) . '
                    <b class="fn">' . get_comment_author_link() . '</b> <span class="says">says:</span>
                </div>
                <div class="comment-metadata">
                    <a href="' . esc_url( get_comment_link( $comment->comment_ID ) ) . '">' . sprintf('%1$s at %2$s', get_comment_date(),  get_comment_time() ) . '</a>';

                    if( $edit_link = get_edit_comment_link() )
                        $comment_html .= '<span class="edit-link"><a class="comment-edit-link" href="' . $edit_link . '">Edit</a></span>';

                $comment_html .= '</div>';
                if ( $comment->comment_approved == '0' )
                    $comment_html .= '<p class="comment-awaiting-moderation">Your comment is awaiting moderation.</p>';

            $comment_html .= '</footer>
            <div class="comment-content">' . apply_filters( 'comment_text', get_comment_text( $comment ), $comment ) . '</div>
        </article>
    </li>';
    echo $comment_html;

    die();

}


// Extend Pubic preview time: https://wordpress.org/plugins/public-post-preview/
add_filter( 'ppp_nonce_life', 'my_nonce_life' );
function my_nonce_life() {
    return 60 * 60 * 24 * 5; // 5 days
}
