<?php
/**
 * Mongo service class
 *
 * PHP version 5
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @author        Wan Qi Chen <kami@kamisama.me>
 * @copyright     Copyright 2012, Wan Qi Chen <kami@kamisama.me>
 * @link          http://resqueboard.kamisama.me
 * @package       resqueboard
 * @subpackage    resqueboard.lib
 * @since         1.0.0
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

namespace ResqueBoard\Lib\Service;

/**
 * Mongo service class
 *
 * @subpackage      resqueboard.lib.service
 * @since            1.0.0
 * @author           Wan Qi Chen <kami@kamisama.me>
 */
class Mongo
{
    public static $instance = null;

    public static function init($settings)
    {
        if (self::$instance === null) {
            // create instance
            self::$instance = new \Mongo($settings['host'] . ':' . $settings['port']);
            return self::$instance;
        } else {
            return self::$instance;
        }
    }
}