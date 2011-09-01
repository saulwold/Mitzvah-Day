<?php 
/* SVN FILE: $Id$ */
/* Donation Test cases generated on: 2010-01-07 10:53:54 : 1262890434*/
App::import('Model', 'Donation');

class DonationTestCase extends CakeTestCase {
	var $Donation = null;
	var $fixtures = array('app.donation', 'app.person');

	function startTest() {
		$this->Donation =& ClassRegistry::init('Donation');
	}

	function testDonationInstance() {
		$this->assertTrue(is_a($this->Donation, 'Donation'));
	}

	function testDonationFind() {
		$this->Donation->recursive = -1;
		$results = $this->Donation->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Donation' => array(
			'id'  => 1,
			'donation_name'  => 'Lorem ipsum dolor sit amet',
			'amount'  => 'Lorem ipsum dolor sit amet',
			'reason'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'items'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'person_id'  => 'Lorem ipsum dolor sit amet',
			'created'  => '2010-01-07 10:53:53',
			'modified'  => '2010-01-07 10:53:53'
		));
		$this->assertEqual($results, $expected);
	}
}
?>