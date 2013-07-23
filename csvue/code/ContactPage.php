<?php

class ContactPage extends Page {


}

class ContactPage_Controller extends Page_Controller {
	static $allowed_actions = array(
		'ContactForm'
	);

	public function ContactForm() {
		$fields =  new FieldList(array(
			TextField::create('Name','Your Name' )->setAttribute('required', true),
			EmailField::create('Email')->setAttribute('required', true),
			TextField::create('Phone', 'Phone (optional)'),
			TextareaField::create('Message')->setAttribute('required', true)
		));
		$actions = new FieldList(array(
			FormAction::create('doContactForm', 'Contact CS-VUE')->addExtraClass('button rounded')
		));
		$validator = new RequiredFields('Name','Email','Message');
		return new Form($this,'ContactForm',$fields, $actions, $validator);
	}

	public function doContactForm($data, $form) {
		$to = SiteConfig::get()->first()->email;
		$body = '<h1> ' . $data['Name'] . '</h1>
				 <p> ' . $data['Email'] . '</p>
				 <p> ' . $data['Message'] . '</p>';
		if($data['Phone']) {
			$body .= '<p>' .$data['Phone']  . '</p>';
		}

		$email = new Email($data['Email'],$to, 'enquiry form the CSVUE Website', $body );
		$email->send();
		$form->sessionMessage('Thanks, we\'ll be in touch', 'good');
		return $this->redirectBack();
	}
}