<?php
	
	/**
	 * @package MobileDetection
	 */

 	/*
	Plugin Name: Mobile Detection
	Plugin URI: http://rpow.nl/gitmob
	Description: A plugin with functions to detect a users mobile os, browser and or device
	Version: 1.0
	Author: RocketPower 
	Author URI: http://www.RocketPower.nu
	License: GPLv2 or later
	*/

	/*
	 *   This program is free software; you can redistribute it and/or modify
	 *   it under the terms of the GNU General Public License as published by
	 *   the Free Software Foundation; either version 2 of the License, or
	 *   (at your option) any later version.
	 *
	 *   This program is distributed in the hope that it will be useful,
	 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
	 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
	 *   GNU General Public License for more details.
	 *
	 *   You should have received a copy of the GNU General Public License
	 *   along with this program; if not, write to the
	 *   Free Software Foundation, Inc.,
	 *   59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
	 */

	// include the detection class
	include_once('mobiledetection.php');
	// initialize class
	$mobile_detection = new MobileDetection();
	// And that's the whole shebang!
	