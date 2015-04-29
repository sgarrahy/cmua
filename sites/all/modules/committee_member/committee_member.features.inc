<?php
/**
 * @file
 * committee_member.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function committee_member_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_node_info().
 */
function committee_member_node_info() {
  $items = array(
    'committee_member' => array(
      'name' => t('Committee Member'),
      'base' => 'node_content',
      'description' => t('A profile of a CMUA committee memeber'),
      'has_title' => '1',
      'title_label' => t('Name'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
