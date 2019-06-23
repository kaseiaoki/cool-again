<?php
/**
 * Created by PhpStorm.
 * User: s1321
 * Date: 2019/06/23
 * Time: 23:23
 */

if ( !defined( 'ABSPATH' ) ) exit;
    global $post, $term;
    $str = '';
    $parsed_url =  parse_url($_SERVER['REQUEST_URI']);
    if ( ! is_home() && ! is_admin() ) {
        $wp_obj = $wp_obj ?? get_queried_object(); // wp object
        $str .= '<nav class="breadcrumb" aria-label="breadcrumbs">';
        $str .= '<ul >';
        $str .= '<li><a href="' . home_url() . '"> HOME</a></li>';
        switch (true) {
            case is_category():
                $str .= '<li class = ""><a href="' . home_url() . '/column"></a></li>';
                $category = get_the_category($post->ID);
                $cat = $category[0];
                $str .= '<li class = "">' . $cat->name . '</li>';
                break; /* is_category() is break */
            case is_archive():

            case is_page():

            case is_single():
                $post_id = $wp_obj->ID;
                $post_type = $wp_obj->post_type;
                $post_title = $wp_obj->post_title;
                $str .= '<li class = ""><a href="' . home_url() . '"></a></li>';
                $terms = get_the_terms($post_id, $taxonomy);
                if (!is_null($terms)) {
                    $term = $terms[0];
                    $str .= '<li class = ""><a href="' . home_url() . '/qa/' . $term->slug . '">' . $term->name . '</a></li>';
                }
                $str .= '<li class = " is-active" aria-current="page"> ' . $post_title . '</li>';
                break; /*  is_single() is break */
            case is_search():
                $str .= '<li>Search Results for' . get_search_query() . '</li>';
                break;
            case is_404():
                $str .= '<li class = "is-active" aria-current="page"> not found</li>';
                break;
            default:
                $str .= '<li class = "is-active" aria-current="page"> not found</li>';
                break;
        }
        $str .= '</ul></nav>';
        echo $str;
    }
