<?php

namespace Drupal\holiday_service\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Service entities.
 *
 * @ingroup holiday_service
 */
interface HolidayServiceInterface extends  ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Service name.
   *
   * @return string
   *   Name of the Service.
   */
  public function getName();

  /**
   * Sets the Service name.
   *
   * @param string $name
   *   The Service name.
   *
   * @return \Drupal\holiday_service\Entity\HolidayServiceInterface
   *   The called Service entity.
   */
  public function setName($name);

  /**
   * Gets the Service creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Service.
   */
  public function getCreatedTime();

  /**
   * Sets the Service creation timestamp.
   *
   * @param int $timestamp
   *   The Service creation timestamp.
   *
   * @return \Drupal\holiday_service\Entity\HolidayServiceInterface
   *   The called Service entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Service published status indicator.
   *
   * Unpublished Service are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Service is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Service.
   *
   * @param bool $published
   *   TRUE to set this Service to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\holiday_service\Entity\HolidayServiceInterface
   *   The called Service entity.
   */
  public function setPublished($published);

}
