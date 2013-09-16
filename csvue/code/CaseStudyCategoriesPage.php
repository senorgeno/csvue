<?php

class CaseStudyCategoriesPage extends Page {


	private static $has_one = array (
		'Image' => 'Image',
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

		$fields->addFieldToTab("Root.Main", UploadField::create('Image','Case Study Image'), 'Content');

		return $fields;
	}

	/** --//-- **/
	
	public function getCMSFields() {
		$fields = $this->getGeneratedCMSFields();
		return $fields;
	}

}
class CaseStudyCategoriesPage_Controller extends Page_Controller {}

