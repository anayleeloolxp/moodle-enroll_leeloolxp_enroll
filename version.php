<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Admin settings and defaults
 *
 * @package enrol_leeloolxp_enroll
 * @copyright  2020 Leeloo LXP (https://leeloolxp.com)
 * @author Leeloo LXP <info@leeloolxp.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die();
$plugin->version = 2017111701;
$plugin->requires = 2016120504;
$plugin->component = 'enrol_leeloolxp_enroll';
$plugin->maturity = MATURITY_STABLE;
$plugin->release = '1.0';
$plugin->cron = 30;
$plugin->dependencies = array(
    'auth_leeloolxp_tracking_sso' => 2020092601,
    'tool_leeloolxp_sync' => 2019062701
);