<?php

class CaseStudyPage extends Page {

	/** //--// **/


	static $db = array (
		'Photo' => 'Varchar(255)',
		'Logo' => 'Varchar(255)',
		'Summary' => 'Varchar(255)',
	);






	public function getGeneratedCMSFields() {
		$fields = parent::getCMSFields();
		$fields->addFieldToTab("Root.Images", TextField::create('Photo', _t('CaseStudyPage.PHOTO', 'Photo')));
		$fields->addFieldToTab("Root.Images", TextField::create('Logo', _t('CaseStudyPage.LOGO', 'Logo')));
		$fields->addFieldToTab("Root.Main", TextField::create('Summary', _t('CaseStudyPage.SUMMARY', 'Summary')), 'Content');

		return $fields;
	}


	/** --//-- **/
	
	public function getCMSFields() {
		$fields = $this->getGeneratedCMSFields();
		return $fields;
	}
	

}

class CaseStudyPage_Controller extends Page_Controller {
	
	/** /-/ **//** -/- **/

}