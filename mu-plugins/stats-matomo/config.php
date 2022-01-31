<?php
/**
 * The base configuration for Matomo
 *
 * This file contains the following configurations:
 *
 * * Matomo tracker URL
 * * Matomo site ID
 * * Matomo auth token
 *
 */

/** Matomo base URL, for example http://example.org/matomo/ Must be set */
define( 'STATS_MATOMO_STATS_TRACKER_URL', '' );

/** Specify the site ID to track */
define( 'STATS_MATOMO_STATS_SITE_ID', 1 );

/**
 * Specify an API token with at least Write permission, so the Visitor IP address can be recorded
 * Learn more about token_auth: https://matomo.org/faq/general/faq_114/
 */
define( 'STATS_MATOMO_STATS_AUTH_TOKEN', '' );
