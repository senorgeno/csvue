<?php

class SiteConfigDecorator extends DataExtension
{

	private static $db = array (
		'Address' => 'HTMLText',
		'Phone' => 'HTMLText',
		'email' => 'Varchar(255)',
		'copyright' => 'Varchar(255)',
		'GoogleAnalyticsID' => 'Varchar(255)',
	);


	private static $has_many = array (
		'Socials' => 'Social'
	);

	public function updateGeneratedCMSFields(FieldList $fields) {
		$fields->addFieldToTab("Root.Main", TextField::create('GoogleAnalyticsID', _t('SiteConfig.GoogleAnalyticsID', 'Google Analytics ID')));
		$fields->addFieldToTab("Root.Main", HtmlEditorField::create('Address', _t('SiteConfig.ADDRESS', 'Address')));
		$fields->addFieldToTab("Root.Main", HtmlEditorField::create('Phone', _t('SiteConfig.PHONE', 'Phone')));
		$fields->addFieldToTab("Root.Main", TextField::create('email', _t('SiteConfig.EMAIL', 'email')));
		$fields->addFieldToTab("Root.Main", TextField::create('copyright', _t('SiteConfig.COPYRIGHT', 'copyright')));
		$fields->addFieldToTab("Root.Socials", GridField::create('Social','', $this->owner->Socials(), GridFieldConfig_RecordEditor::create()));

		return $fields;
	}


	/** --//-- **/

	public function updateCMSFields(FieldList $fields) {
		$this->updateGeneratedCMSFields($fields);		
	}

	
	
}

Object::add_extension("SiteConfig", "SiteConfigDecorator");