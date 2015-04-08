<?php

/**
 * User form.
 *
 * @package    form
 * @subpackage User
 * @version    SVN: $Id: UserForm.class.php 15966 2015-04-08 08:45:44Z wimulkeman $
 */
class UserForm extends BaseUserForm
{
  public function configure()
  {
    $profileForm = new ProfileForm($this->object->getProfile());
    unset($profileForm['id'], $profileForm['user_id']);

    $this->embedForm('Profile', $profileForm);
  }
}