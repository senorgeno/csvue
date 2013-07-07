<?php

class CaseStudyCategories extends DataObject {


	static $db = array (
		'Title' => 'Varchar',
		'url'  => 'Varchar'
	);


	static $has_one = array (
		'Image' => 'Image',
	);

	static $belongs_many_many = array (
		'CaseStudys' => 'CaseStudyPage'
	);

	public function ImageUrl() {
		return $this->obj('Image')->filename;
	}
	public function Link() {
		return 'category/casestudy/'.$this->url;
	}


	public function getGeneratedCMSFields() {

		$fields = $this->scaffoldFormFields();

		//$fields->addFieldToTab("Root.Main", $image = UploadField::create('Image', _t('CaseStudyHolderPage.IMAGE', 'Image')), 'Content');
		//$image->getValidator()->setAllowedExtensions(array('jpg', 'jpeg', 'png', 'gif'));



		return $fields;
	}

	/** --//-- **/
	
	public function getCMSFields() {
		$fields = $this->getGeneratedCMSFields();
		return $fields;
	}

}

