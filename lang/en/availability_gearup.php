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
 * Language file.
 *
 * @package    availability_gearup
 * @copyright  2023 Frédéric Massart
 * @author     Frédéric Massart <fred@branchup.tech>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievements'] = 'Achievements';
$string['description'] = 'Access based on the state of quests or achievements.';
$string['hasstarted'] = 'has started';
$string['hascompleted'] = 'has been completed';
$string['isassigned'] = 'is assigned';
$string['iscompleted'] = 'is completed';
$string['isended'] = 'is finished';
$string['isrecruit'] = 'has been recruited for';
$string['isstarted'] = 'is ongoing';
$string['mission'] = 'Mission';
$string['missionxhasstarted'] = '{$a} has started';
$string['missionxhascompleted'] = '{$a} has been completed';
$string['missionxisassigned'] = '{$a} is assigned';
$string['missionxiscompleted'] = '{$a} is completed';
$string['missionxisended'] = '{$a} is finished';
$string['missionxisrecruit'] = 'Is recruited for {$a}';
$string['missionxisstarted'] = '{$a} is ongoing';
$string['missionxnothasstarted'] = '{$a} has not started';
$string['missionxnothascompleted'] = '{$a} has not been completed';
$string['missionxnotisassigned'] = '{$a} is not assigned';
$string['missionxnotiscompleted'] = '{$a} is not completed';
$string['missionxnotisended'] = '{$a} is not finished';
$string['missionxnotisrecruit'] = 'Is not recruited for {$a}';
$string['missionxnotisstarted'] = '{$a} is not ongoing';
$string['pleaseselectone'] = 'Please select one';
$string['pluginname'] = 'Level Up Quest Availability';
$string['privacy:metadata'] = 'The plugin does not store any personal data.';
$string['quests'] = 'Quests';
$string['setuphelp'] = 'Here is what the various states mean:

- Has been recruited for: will match as long as the user is a recruit, regardless of the state.
- Has started: the mission must have started, but can be in any subsequent state.
- Has completed: the mission must have completed, but can be in any subsequent state.
- Is assigned: the recruit has only been assigned, the mission has not started yet.
- Is ongoing: the mission has started and is ongoing.
- Is completed: the mission is completed, but not yet finished.
- Is finished: the mission has been finished.

With achievements, please use "has started" or "has completed".';
$string['title'] = 'Level Up Quest';
