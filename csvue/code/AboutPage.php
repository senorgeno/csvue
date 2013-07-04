<?php

class AboutPage extends Page {

	/** //--// **/

	static $has_many = array (
		'StaffMembers' => 'StaffMember',
	);

	




	public function getGeneratedCMSFields() {
		$fields = parent::getCMSFields();
		$fields->addFieldToTab("Root.StaffMembers", GridField::create('StaffMembers','', $this->StaffMembers(), GridFieldConfig_RecordEditor::create()));

		return $fields;
	}


	/** --//-- **/
	
	public function getCMSFields() {
		$fields = $this->getGeneratedCMSFields();
		return $fields;
	}
	

}

class AboutPage_Controller extends Page_Controller {
	
	/** /-/ **//** -/- **/

}