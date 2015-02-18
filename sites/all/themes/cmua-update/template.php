<?php

/**
 * Implements template_preprocess_html().
 *
 */
//function CMUA_preprocess_html(&$variables) {
//  // Add conditional CSS for IE. To use uncomment below and add IE css file
//  drupal_add_css(path_to_theme() . '/css/ie.css', array('weight' => CSS_THEME, 'browsers' => array('!IE' => FALSE), 'preprocess' => FALSE));
//
//  // Need legacy support for IE downgrade to Foundation 2 or use JS file below
//  // drupal_add_js('http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE7.js', 'external');
//}

/**
 * Implements template_preprocess_page
 *
 */
//function CMUA_preprocess_page(&$variables) {
//}

/**
 * Implements template_preprocess_node
 *
 */
function CMUA_preprocess_node(&$variables) {

// Let's get that read more link out of the generated links variable!
  unset($variables['content']['links']['node']['#links']['node-readmore']);

// Now let's put it back as it's own variable! So it's actually versatile!
    $variables['newreadmore'] = t('<a href="!title" class="button tiny">Read More</a>',
      array(
        '!title' => $variables['node_url'],
      )
);

}