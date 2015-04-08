<?php

/*
 * This file is part of the symfony package.
 * (c) Fabien Potencier <fabien.potencier@symfony-project.com>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require_once 'PEAR/REST/11.php';

/**
 * sfPearRest10 interacts with a PEAR channel that supports REST 1.1.
 *
 * @package    symfony
 * @subpackage plugin
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: sfPearRest11.class.php 15966 2015-04-08 08:45:44Z wimulkeman $
 */
class sfPearRest11 extends PEAR_REST_11
{
  /**
   * @see PEAR_REST_11
   */
  public function __construct($config, $options = array())
  {
    $class = isset($options['base_class']) ? $options['base_class'] : 'sfPearRest';

    $this->_rest = new $class($config, $options);
  }
}
