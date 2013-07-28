<?php

class CaseStudyCategoriesPage extends Page {


	static $has_one = array (
		'CaseStudyImage' => 'Image',
	);


	public function ImageUrl() {
		return $this->obj('Image')->filename;
	}

	public function CaseStudies() {
		if($this->parent()->className != 'SiteTree'){
			return $this->children();
		} else {
			return CaseStudyPage::get();

		}
	}

	public function getGeneratedCMSFields() {

		$fields = parent::getCMSFields();

		$fields->addFieldToTab("Root.Main", $image = UploadField::create('CaseStudyImage', _t('CaseStudyHolderPage.IMAGE', 'Image')), 'Content');
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

