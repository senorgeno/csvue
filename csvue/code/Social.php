<?php

class Social extends DataObject {
	
	/** //--// **/


	static $db = array (
		'Link' => 'Varchar(255)',
		'Name' => 'Varchar(255)',
	);


	static $has_one = array (
		'Icon' => 'Image',
		'SiteConfig' => 'SiteConfig',
	);


	public function getGeneratedCMSFields() {
		$fields = FieldList::create(TabSet::create("Root"));
		$fields->addFieldToTab("Root.Main", $icon = UploadField::create('Icon', _t('Social.ICON', 'Icon')));
		$fields->addFieldToTab("Root.Main", TextField::create('Link', _t('Social.LINK', 'Link')));
		$fields->addFieldToTab("Root.Main", TextField::create('Name', _t('Social.NAME', 'Name')));
		$icon->getValidator()->setAllowedExtensions(array('jpg', 'jpeg', 'png', 'gif'));

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