<?php

/*
 * This file is part of the symfony package.
 * (c) 2004-2006 Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * sfServiceContainerDumperInterface is the interface implemented by service container dumper classes.
 *
 * @package    symfony
 * @subpackage dependency_injection
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: sfServiceContainerDumperInterface.class.php 15966 2015-04-08 08:45:44Z wimulkeman $
 */
interface sfServiceContainerDumperInterface
{
  function dump(array $options = array());
}
