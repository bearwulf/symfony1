<?php

/*
 * This file is part of the symfony package.
 * (c) Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * sfServiceReference represents a service reference.
 *
 * @package    symfony
 * @subpackage service
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: sfServiceReference.class.php 15966 2015-04-08 08:45:44Z wimulkeman $
 */
class sfServiceReference
{
  protected
    $id = null;

  /**
   * Constructor.
   *
   * @param string $id The service identifier
   */
  public function __construct($id)
  {
    $this->id = $id;
  }

  /**
   * __toString.
   *
   * @return string The service identifier
   */
  public function __toString()
  {
    return (string) $this->id;
  }
}
