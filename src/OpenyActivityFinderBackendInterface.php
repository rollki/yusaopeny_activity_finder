<?php

namespace Drupal\openy_activity_finder;

/**
 * Interface for the backend.
 */
interface OpenyActivityFinderBackendInterface {

  /**
   * Run Programs search.
   *
   * @param $parameters
   *   GET parameters for the search.
   * @param $log_id
   *   Id of the Search Log needed for tracking Register / Details actions.
   */
  public function runProgramSearch($parameters, $log_id);

  /**
   * Get list of all locations for filters.
   */
  public function getLocations();

  /**
   * Get list of all sort options.
   */
  public function getSortOptions();

  /**
   * Get the relevance sort option.
   */
  public function getRelevanceSort();

  /**
   * Get ages from configuration.
   */
  public function getAges();

  /**
   * Get the days of week.
   */
  public function getDaysOfWeek();

  /**
   * Get list of parts of day.
   */
  public function getPartsOfDay();

  /**
   * Get list of days with parts of day.
   */
  public function getDaysTimes();

  /**
   * Get list of start session month.
   */
  public function getStartMonths();

  /**
   * Get list of durations.
   */
  public function getDurations();

}
