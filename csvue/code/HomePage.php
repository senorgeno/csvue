<?php

class HomePage extends Page {

	private static $db = array(
		'CaseStudiesIntro' => 'Text'
	);

//	static $has_many = array (
//		'HeroImages' => 'HeroImage',
//	);


	public function getGeneratedCMSFields() {

		$fields = parent::getCMSFields();
		$fields->addFieldToTab('Root.Main',TextField::create('CaseStudiesIntro', 'Case Studies Intro'),'Content');
		//$gf = new GridField('HeroImages','HeroImages',$this->HeroImages(), GridFieldConfig_RecordEditor::create());
		//$fields->addFieldsToTab('Root.HeroImages', $gf);

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