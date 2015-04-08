<?php

/**
 * format actions.
 *
 * @package    project
 * @subpackage format
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: actions.class.php 15968 2015-04-08 08:48:10Z wimulkeman $
 */
class formatActions extends sfActions
{
  public function executeIndex($request)
  {
    if ('xml' == $request->getRequestFormat())
    {
      $this->setLayout('layout');
    }
  }

  public function executeForTheIPhone($request)
  {
    $this->setTemplate('index');
  }

  public function executeJs($request)
  {
    $request->setRequestFormat('js');
  }

  public function executeJsWithAccept()
  {
    $this->setTemplate('index');
  }

  public function executeThrowsException()
  {
    throw new Exception('Descriptive message');
  }

  public function executeThrowsNonDebugException()
  {
    sfConfig::set('sf_debug', false);
    throw new Exception('Descriptive message');
  }
}
