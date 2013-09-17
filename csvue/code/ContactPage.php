<?php

class ContactPage extends Page {


}

class ContactPage_Controller extends Page_Controller {
	private static $allowed_actions = array(
		'ContactForm'
	);

	public function ContactForm() {
		$fields =  new FieldList(array(
			TextField::create('CompanyName','Company Name *' )->setAttribute('required', true)->addExtraClass('fieldadjust'),
			TextField::create('firstName','First Name *' )->setAttribute('required', true)->addExtraClass('fieldadjust'),
			TextField::create('lastName','Last Name *' )->setAttribute('required', true)->addExtraClass('fieldadjust'),
			TextField::create('jobTitle','Job Title *' )->setAttribute('required', true)->addExtraClass('fieldadjust'),
			EmailField::create('Email','E-mail address *')->setAttribute('required', true)->addExtraClass('fieldadjust'),
			TextField::create('Phone','Contact Number *')->setAttribute('required', true)->addExtraClass('fieldadjust'),
			TextField::create('postal1','Postal Address 1')->addExtraClass('fieldadjust'),
			TextField::create('postal2','Postal Address 2')->addExtraClass('fieldadjust'),
			CountryDropdownField::create('Country','Country',null,'NZ')->addExtraClass('fieldadjust'),
			TextareaField::create('Message','Enter your Message *')->setAttribute('required', true)->addExtraClass('fieldadjust'),
			CheckboxField::create('futureInfo','Tick to receive future info')->addExtraClass('fieldadjust'),
			
		));
		$actions = new FieldList(array(
			FormAction::create('doContactForm', 'Contact CS-VUE')->addExtraClass('button rounded')
		));
		$validator = new RequiredFields('CompanyName','firstName','lastName','jobTitle','Email','Phone','Message');
		$form = new Form($this,'ContactForm',$fields, $actions, $validator);
		$protector = SpamProtectorManager::update_form($form);
		return $form;
	}

	public function doContactForm($data, $form) {
		$to = 'support@csvue.com';//SiteConfig::get()->first()->email;
		$country = Zend_Locale::getTranslation($data['Country'], 'Country');
		$futureinfo = $data['futureInfo'] ? 'has signed up for Future Info ' : 'Has not signed up for future info';


		$body = '<h1> ' . $data['CompanyName'] . '</h1>
				 <p> ' . $data['firstName'] . '</p>
				 <p> ' . $data['lastName'] . '</p>
				 <p> ' . $data['jobTitle'] . '</p>
				 <p> ' . $data['Email'] . '</p>
				 <p> ' . $data['Phone'] . '</p>
 				 <p> ' . $data['postal1'] . '</p>
 				 <p> ' . $data['postal2'] . '</p>
 				 <p> ' . $country . 		'</p>
				 <p> ' . $futureinfo . '</p>';


		$email = new Email($to,$to, 'enquiry form the CSVUE Website', $body );
		$email->send();
		$form->sessionMessage('Thanks, we\'ll be in touch', 'good');
		return $this->redirectBack();
	}
}