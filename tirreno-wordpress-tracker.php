<?php
/**
 * Plugin Name: tirreno security framework
 */

defined('ABSPATH') || exit;

require_once __DIR__ . '/lib/TirrenoTracker.php';
require_once __DIR__ . '/src/TirrenoTracker.php';

\TirrenoWordPressTracker\TirrenoTracker::boot();
