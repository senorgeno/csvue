<?php

class NominationFormPage extends Page {


}

class NominationFormPage_Controller extends Page_Controller {
	private  $dropDown = array(
		0 => 'Please Select',
		1 => 'Local Government Environmental Manager of the Year 2014',
		2 => 'Sustainable Agriculture Environmental Manager of the Year 2014',
		3 => 'Young Environmental Manager of the Year 2014',
		4 => 'Corporate Leadership in Environmental Technology & Information Systems Award 2014'
	);

	static $allowed_actions = array(
		'NominationForm'
	);

	public function NominationForm() {
		$fields =  new FieldList(array(
			TextField::create('Name','Your Name' )->setAttribute('required', true)->addExtraClass('fieldadjust'),
			TextField::create('Organisation')->setAttribute('required', true)->addExtraClass('fieldadjust'),
			TextareaField::create('ContactDetails','ContactDetails')->setAttribute('required', true)->addExtraClass('fieldadjust'),
			TextField::create('Organisation')->setAttribute('required', true)->addExtraClass('fieldadjust'),
			TextField::create('PersonNominating','Person you are nominating')->setAttribute('required', true)->addExtraClass('fieldadjust'),
			TextareaField::create('NominatingContact','nominated persons contact details')->setAttribute('required', true)->addExtraClass('fieldadjust'),
			DropdownField::create('category', 'Award Category', $this->dropDown)->setAttribute('required', true)->addExtraClass('fieldadjust'),
			TextareaField::create('Summary', 'Brief summary of why they deserve an award')->setAttribute('required', true)->addExtraClass('fieldadjust')
		));


		$actions = new FieldList(array(
			FormAction::create('doNominationForm', 'Submit')->addExtraClass('button rounded')
		));
		$validator = new RequiredFields('Name','Organisation','ContactDetails','Organisation','PersonNominating','NominatingContact','category');

		return new Form($this,'ContactForm',$fields, $actions, $validator);
	}

	public function doNominationForm($data, $form) {
		$to = SiteConfig::get()->first()->email;
		$body = '<h1> ' . $data['Name'] . '</h1>
				 <p> ' . $data['Email'] . '</p>
				 <p> ' . $data['Message'] . '</p>
				 <p> ' . $data['Message'] . '</p>
				 <p> ' . $data['Message'] . '</p>';


		$email = new Email($data['Email'],$to, 'enquiry form the CSVUE Website', $body );
		$email->send();
		$form->sessionMessage('Thanks, we\'ll be in touch', 'good');
		return $this->redirectBack();
	}
}