<?php

class NominationFormPage extends Page {

	static $db = array('FormTitle'=> 'Varchar');

	public function getCMSFields() {
		$fields = parent::getCMSFields();
		$fields->addFieldToTab('Root.Main',new TextField('FormTitle','Title above the Form'),'Content');
		return $fields;
	}

}

class NominationFormPage_Controller extends Page_Controller {
	private  $dropDown = array(
		0 => 'Please Select',
		1 => 'Local Government Environmental Manager of the Year 2014',
		2 => 'Sustainable Agriculture Environmental Manager of the Year 2014',
		3 => 'Young Environmental Manager of the Year 2014',
		4 => 'Consulting Environmental Manager of the Year 2014',
		5 => 'Corporate Leadership in Environmental Technology & Information Systems Award 2014',
		6 => 'Supreme Award: CS-VUE New Zealand Environmental Manager of the Year 2014'
	);

	static $allowed_actions = array(
		'NominationForm'
	);

	public function NominationForm() {
		$fields =  new FieldList(array(
			TextField::create('Name','Your Name' )->setAttribute('required', true)->addExtraClass('fieldadjust'),
			TextField::create('Organisation')->setAttribute('required', true)->addExtraClass('fieldadjust'),
			TextareaField::create('ContactDetails','Contact Details')->setAttribute('required', true)->addExtraClass('fieldadjust'),
			TextField::create('PersonNominating','Person you are Nominating')->setAttribute('required', true)->addExtraClass('fieldadjust'),
			TextareaField::create('NominatingContact','Nominated Persons Contact Details')->setAttribute('required', true)->addExtraClass('fieldadjust'),
			DropdownField::create('category', 'Award Category', $this->dropDown)->setAttribute('required', true)->addExtraClass('fieldadjust'),
			TextareaField::create('Summary', 'Brief Summary of why they Deserve an Award')->setAttribute('required', true)->addExtraClass('fieldadjust')
		));


		$actions = new FieldList(array(
			FormAction::create('doNominationForm', 'Submit')->addExtraClass('button rounded')
		));
		$validator = new RequiredFields('Name','Organisation','ContactDetails','PersonNominating','NominatingContact','category');

		return new Form($this,'NominationForm',$fields, $actions, $validator);
	}

	public function doNominationForm($data, $form) {
		$to = SiteConfig::get()->first()->email;
		$body = '<h1> ' . $data['Name'] . '</h1>
				 <p> ' . $data['Organisation'] . '</p>
				 <p> ' . $data['ContactDetails'] . '</p>
				 <p> ' . $data['PersonNominating'] . '</p>
				 <p> ' . $data['NominatingContact'] . '</p>
				<p> ' . $this->dropDown[$data['category']] . '</p>
				<p> ' . $data['Summary'] . '</p>';
		//Debug::show($to);
		//Debug::show($body);
		$email = new Email($to,$to, 'CSVUE Award Nomination', $body );
		$email->send();
		$form->sessionMessage('Thanks, we\'ll be in touch', 'good');
		return $this->redirectBack();
	}
}