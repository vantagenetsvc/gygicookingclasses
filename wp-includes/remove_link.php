<?php
/**
 * Created by PhpStorm.
 * User: Ted
 * Date: 4/1/15
 * Time: 8:51 AM
 */
// Change links for event, venue and organizer websites so
// that they read 'Visit website' rather than exposing the
// actual URL itself

function modify_event_link($link) {
    return replace_link_text($link, 'Visit website');
}

function replace_link_text($link, $replacement_text) {
    if ( empty( $link ) ) return $replacement_text;

    $inner_starts = strpos($link, '>') + 1;
    $inner_ends = strpos($link, '<', $inner_starts);

    if ( false === $inner_starts || false === $inner_ends ) return $replacement_text;
    return substr_replace($link, $replacement_text, $inner_starts, $inner_ends - $inner_starts);
}

add_filter('tribe_get_event_website_link', 'modify_event_link');
add_filter('tribe_get_organizer_website_link', 'modify_event_link');
add_filter('tribe_get_venue_website_link', 'modify_event_link');