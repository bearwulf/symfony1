<?php

/**
 * notfound actions.
 *
 * @package    project
 * @subpackage notfound
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: actions.class.php 15968 2015-04-08 08:48:10Z wimulkeman $
 */
class notfoundActions extends sfActions
{
  public function executeIndex()
  {
    $this->getResponse()->setStatusCode(404);

    return $this->renderText('404');
  }
}
