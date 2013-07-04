<?php

class HomePage extends Page {

	/** //--// **/


	static $db = array (
		'HeroCaption' => 'Varchar(255)',
	);


	static $has_one = array (
		'HeroImage' => 'Image',
	);






	public function getGeneratedCMSFields() {
		$fields = parent::getCMSFields();
		$fields->addFieldToTab("Root.HeroImage", $heroimage = UploadField::create('HeroImage', _t('HomePage.HEROIMAGE', 'Hero Image')));
		$fields->addFieldToTab("Root.HeroImage", TextField::create('HeroCaption', _t('HomePage.HEROCAPTION', 'Hero Caption')));
		$heroimage->getValidator()->setAllowedExtensions(array('jpg', 'jpeg', 'png', 'gif'));

		return $fields;
	}


	/** --//-- **/
	
	public function getCMSFields() {
		$fields = $this->getGeneratedCMSFields();
		return $fields;
	}
	

}

class HomePage_Controller extends Page_Controller {
	
	/** /-/ **//** -/- **/

}