<?php
class Donation extends AppModel {

	var $name = 'Donation';
	var $validate = array(
		'donation_name' => array('notempty'),
		'amount' => array('money'),
		'person_id' => array('notempty')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'Person' => array(
			'className' => 'Person',
			'foreignKey' => 'person_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
?>