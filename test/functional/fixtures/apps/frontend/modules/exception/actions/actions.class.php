<?php

/**
 * exception actions.
 *
 * @package    project
 * @subpackage exception
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: actions.class.php 15968 2015-04-08 08:48:10Z wimulkeman $
 */
class exceptionActions extends sfActions
{
  public function executeNoException()
  {
    return $this->renderText('foo');
  }

  public function executeThrowsException()
  {
    throw new Exception('Exception message');
  }

  public function executeThrowsSfException()
  {
    throw new sfException('sfException message');
  }
}
