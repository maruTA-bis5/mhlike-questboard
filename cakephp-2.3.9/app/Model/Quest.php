<?php

class Quest extends AppModel
{
	public $useTable = 'quest';

	public $belongsTo = array(
		'Owner' => array(
			'className'		=> 'User',
			'foreignKey'	=> 'owner',
		),
		'Worker' => array(
			'className'		=> 'User',
			'foreignKey'	=> 'worker',
		),
		'Type' => array(
			'className'		=> 'QType',
			'foreignKey'	=> 'type',
		),
		'Status' => array(
			'className'		=> 'Status',
			'foreignKey'	=> 'status',
		),
	);
}
