<?php

class StaffMember extends DataObject {
	
	/** //--// **/


	static $db = array (
		'Name' => 'Varchar(255)',
		'JobTitle' => 'Varchar(255)',
		'Info' => 'Varchar(255)',
	);


	static $has_one = array (
		'Photo' => 'Image',
		'AboutPage' => 'AboutPage',
	);


	public function getGeneratedCMSFields() {
		$fields = FieldList::create(TabSet::create("Root"));
		$fields->addFieldToTab("Root.Main", TextField::create('Name', _t('StaffMember.NAME', 'Name')));
		$fields->addFieldToTab("Root.Main", TextField::create('JobTitle', _t('StaffMember.JOBTITLE', 'Job Title')));
		$fields->addFieldToTab("Root.Main", $photo = UploadField::create('Photo', _t('StaffMember.PHOTO', 'Photo')));
		$fields->addFieldToTab("Root.Main", TextField::create('Info', _t('StaffMember.INFO', 'Info')));
		$photo->getValidator()->setAllowedExtensions(array('jpg', 'jpeg', 'png', 'gif'));

		return $fields;
	}


	/** --//-- **/

	public function getCMSFields() {
		$fields = $this->getGeneratedCMSFields();
		return $fields;
	}

	public function canCreate($member = null) { return true; }
	
	public function canView($member = null) { return true; }
	
	public function canEdit($member = null) { return true; }

	public function canDelete($member = null) { return true; }
	
	
	
}