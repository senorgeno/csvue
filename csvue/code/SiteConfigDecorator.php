<?php

class SiteConfigDecorator extends DataExtension
{
	/** //--// **/


	static $db = array (
		'Address' => 'Varchar(255)',
		'Phone' => 'Varchar(255)',
		'email' => 'Varchar(255)',
		'copyright' => 'Varchar(255)',
	);


	static $has_many = array (
		'Socials' => 'Social',
	);

	




	public function updateGeneratedCMSFields(FieldList $fields) {
		$fields->addFieldToTab("Root.Main", TextField::create('Address', _t('SiteConfig.ADDRESS', 'Address')));
		$fields->addFieldToTab("Root.Main", TextField::create('Phone', _t('SiteConfig.PHONE', 'Phone')));
		$fields->addFieldToTab("Root.Main", TextField::create('email', _t('SiteConfig.EMAIL', 'email')));
		$fields->addFieldToTab("Root.Main", TextField::create('copyright', _t('SiteConfig.COPYRIGHT', 'copyright')));
		$fields->addFieldToTab("Root.Socials", GridField::create('Socials','', $this->owner->Socials(), GridFieldConfig_RecordEditor::create()));

		return $fields;
	}


	/** --//-- **/

	public function updateCMSFields(FieldList $fields) {
		$this->updateGeneratedCMSFields($fields);		
	}

	
	
}

Object::add_extension("SiteConfig", "SiteConfigDecorator");