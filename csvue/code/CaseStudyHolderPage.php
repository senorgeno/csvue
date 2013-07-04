<?php

class CaseStudyHolderPage extends Page {

	/** //--// **/


	static $db = array (
	);


	static $has_one = array (
		'Image' => 'Image',
	);






	static $allowed_children = array (
		'CaseStudyPage',
	);


	public function getGeneratedCMSFields() {
		$fields = parent::getCMSFields();
		$fields->addFieldToTab("Root.Main", $image = UploadField::create('Image', _t('CaseStudyHolderPage.IMAGE', 'Image')), 'Content');
		$image->getValidator()->setAllowedExtensions(array('jpg', 'jpeg', 'png', 'gif'));

		return $fields;
	}


	/** --//-- **/
	
	public function getCMSFields() {
		$fields = $this->getGeneratedCMSFields();
		return $fields;
	}
	

}

class CaseStudyHolderPage_Controller extends Page_Controller {
	
	/** /-/ **//** -/- **/

}