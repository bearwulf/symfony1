<?php

/*
 * This file is part of the symfony package.
 * (c) Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * sfServiceParameter represents a parameter reference.
 *
 * @package    symfony
 * @subpackage service
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: sfServiceParameter.class.php 15966 2015-04-08 08:45:44Z wimulkeman $
 */
class sfServiceParameter
{
  protected
    $id = null;

  /**
   * Constructor.
   *
   * @param string $id The parameter key
   */
  public function __construct($id)
  {
    $this->id = $id;
  }

  /**
   * __toString.
   *
   * @return string The parameter key
   */
  public function __toString()
  {
    return (string) $this->id;
  }
}
