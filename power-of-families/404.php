<?php
/**
 * Genesis Framework.
 *
 * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
 * Please do all modifications in the form of a child theme.
 *
 * @package Genesis\Templates
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    http://my.studiopress.com/themes/genesis/
 */

//* Remove default loop
remove_action( 'genesis_loop', 'genesis_do_loop' );

add_action( 'genesis_loop', 'genesis_404' );
/**
 * This function outputs a 404 "Not Found" error message
 *
 * @since 1.6
 */
function genesis_404() {

    echo genesis_html5() ? '<article class="entry">' : '<div class="post hentry">';

    printf( '<h1 class="entry-title">%s</h1>', __( 'Not found, error 404', 'genesis' ) );
    echo '<div class="entry-content">';

    if ( genesis_html5() ) :

        echo '<p>' . __( 'The page you are looking for no longer exists. Perhaps you can:</p>' );
        echo '<ul>';
        if ( !is_user_logged_in() ) {
            echo '<li>Try logging in where it says "Log In/Register" above to see a page from your programs</li>';
        }
        echo sprintf( __( '<li>Return back to the site\'s <a href="%s">homepage</a> and see if you can find what you are looking for</li>', 'genesis' ), home_url() );
        echo '<li>Or, you can try finding it by using the search form below.</li>';
        echo '</ul>';
        echo '<p>' . get_search_form() . '</p>';

    else :
        ?>

        <p><?php printf( __( 'The page you are looking for no longer exists. Perhaps you can return back to the site\'s <a href="%s">homepage</a> and see if you can find what you are looking for. Or, you can try finding it with the information below.', 'genesis' ), home_url() ); ?></p>

        <h4><?php _e( 'Pages:', 'genesis' ); ?></h4>
        <ul>
            <?php wp_list_pages( 'title_li=' ); ?>
        </ul>

        <h4><?php _e( 'Categories:', 'genesis' ); ?></h4>
        <ul>
            <?php wp_list_categories( 'sort_column=name&title_li=' ); ?>
        </ul>

        <h4><?php _e( 'Authors:', 'genesis' ); ?></h4>
        <ul>
            <?php wp_list_authors( 'exclude_admin=0&optioncount=1' ); ?>
        </ul>

        <h4><?php _e( 'Monthly:', 'genesis' ); ?></h4>
        <ul>
            <?php wp_get_archives( 'type=monthly' ); ?>
        </ul>

        <h4><?php _e( 'Recent Posts:', 'genesis' ); ?></h4>
        <ul>
            <?php wp_get_archives( 'type=postbypost&limit=100' ); ?>
        </ul>

    <?php
    endif;

    echo '</div>';

    echo genesis_html5() ? '</article>' : '</div>';

}

genesis();
