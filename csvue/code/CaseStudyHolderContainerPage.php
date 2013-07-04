<?php

class CaseStudyHolderContainerPage extends Page {

	/** //--// **/





	static $allowed_children = array (
		'CaseStudyHolderPage',
	);


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

class CaseStudyHolderContainerPage_Controller extends Page_Controller {
	
	/** /-/ **//** -/- **/

}