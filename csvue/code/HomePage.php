<?php

class HomePage extends Page {

	static $db = array(
		'CaseStudiesIntro' => 'Text'
	);

	static $has_many = array (
		'HeroImages' => 'HeroImage',
	);


	public function getGeneratedCMSFields() {

		$fields = parent::getCMSFields();
		$fields->addFieldToTab('Root.Main',TextField::create('CaseStudiesIntro', 'Case Studies Intro'),'Content');
		$gf = new GridField('HeroImages','HeroImages',$this->HeroImages(), GridFieldConfig_RelationEditor::create());
		$fields->addFieldsToTab('Root.HeroImages', $gf);

		return $fields;
	}


	/** --//-- **/
	
	public function getCMSFields() {
		$fields = $this->getGeneratedCMSFields();
		return $fields;
	}
	

}

class HomePage_Controller extends Page_Controller {
	
	/** /-/ **//** -/- **/

}