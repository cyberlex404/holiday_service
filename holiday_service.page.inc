<?php

/**
 * @file
 * Contains holiday_service.page.inc.
 *
 * Page callback for Service entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Service templates.
 *
 * Default template: holiday_service.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_holiday_service(array &$variables) {
  // Fetch HolidayService Entity Object.
  $holiday_service = $variables['elements']['#holiday_service'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
