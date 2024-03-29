<?php
/**
 * Flexible Returns Authorization (RMA)
 *
 * @copyright Copyright 2009-2019 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: config.ra.php 3.1 7/15/2012 C Jones $
 */

// Return Authorization


if (!defined('IS_ADMIN_FLAG')) {
  die('Illegal Access');
} 




$autoLoadConfig[999][] = array(
  'autoType' => 'init_script',
  'loadFile' => 'init_ra_config.php'
);

// uncomment the following line to perform a uninstall
// $uninstall = 'uninstall';
