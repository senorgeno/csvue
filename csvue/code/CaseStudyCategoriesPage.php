<?php

class CaseStudyCategoriesPage extends Page {


	static $has_one = array (
		'Image' => 'Image',
	);


	public function ImageUrl() {
		return $this->obj('Image')->filename;
	}



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
class CaseStudyCategoriesPage_Controller extends Page_Controller {}

