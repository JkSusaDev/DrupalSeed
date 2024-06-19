<?php

declare(strict_types=1);

/**
 * @file
 * Theme settings form for Custom Drupal theme.
 */

use Drupal\Core\Form\FormState;

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function custom_drupal_form_system_theme_settings_alter(array &$form, FormState $form_state): void {

  $form['custom_drupal'] = [
    '#type' => 'details',
    '#title' => t('Custom Drupal'),
    '#open' => TRUE,
  ];

  $form['custom_drupal']['example'] = [
    '#type' => 'textfield',
    '#title' => t('Example'),
    '#default_value' => theme_get_setting('example'),
  ];

}
