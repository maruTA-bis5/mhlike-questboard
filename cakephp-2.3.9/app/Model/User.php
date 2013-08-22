<?php
App::uses('AuthComponent', 'Controller/Component');
class User extends AppModel 
{
	public $useTable = 'user';

	public function beforeSave($options = array())
	{
		if (isset($this->data[$this->alias]['password']))
			$this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
	}
	
}
