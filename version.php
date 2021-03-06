<?php
/**
 * Ilios category assignment tool.
 *
 * @package tool_ilioscategoryassignment
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version = 2020012800;
$plugin->requires = 2016112900;
$plugin->component = 'tool_ilioscategoryassignment';
$plugin->maturity = MATURITY_STABLE;
$plugin->release = '2.0.1';
$plugin->dependencies = array(
    'local_iliosapiclient' => 2017071700,
);
