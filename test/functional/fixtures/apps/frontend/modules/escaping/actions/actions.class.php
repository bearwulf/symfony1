<?php

/**
 * escaping actions.
 *
 * @package    project
 * @subpackage escaping
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: actions.class.php 15968 2015-04-08 08:48:10Z wimulkeman $
 */
class escapingActions extends sfActions
{
  public function preExecute()
  {
    $this->var = 'Lorem <strong>ipsum</strong> dolor sit amet.';
    $this->setLayout(false);
    $this->setTemplate('index');
  }

  public function executeOn()
  {
    sfConfig::set('sf_escaping_strategy', true);
  }

  public function executeOff()
  {
    sfConfig::set('sf_escaping_strategy', false);
  }
}
