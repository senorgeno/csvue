<?php

class ContactPage extends Page {

	/** //--// **/





	public function getGeneratedCMSFields() {
		$fields = parent::getCMSFields();

		return $fields;
	}


	/** --//-- **/
	
	public function getCMSFields() {
		$fields = $this->getGeneratedCMSFields();
		return $fields;
	}
	

}

class ContactPage_Controller extends Page_Controller {
	
	/** /-/ **//** -/- **/

}