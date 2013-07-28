<?php

class CaseStudyPage extends Page {


	static $db = array (

		'Summary' => 'HTMLText',
		'VideoURL'   => 'Text'
	);

	static $has_one =array (
		'ExcerptPhoto' => 'Image',
		'SideBarPhoto' => 'Image',
		'Logo' => 'Image',
	);

	
	public function ExcerptPhotoUrl() {
		return $this->obj('ExcerptPhoto')->filename;
	}
	
	public function LogoUrl() {
		return $this->obj('Logo')->filename;
	}

	public function getCMSFields() {
		$fields = parent::getCMSFields();
		$fields->addFieldToTab("Root.Images", UploadField::create('ExcerptPhoto','Excerpt Photo'));
		$fields->addFieldToTab("Root.Images", UploadField::create('SideBarPhoto','SideBar Photo'));
		$fields->addFieldToTab("Root.Images", UploadField::create('Logo', _t('CaseStudyPage.LOGO', 'Logo')));
		$fields->addFieldToTab("Root.Main", HtmlEditorField::create('Summary', _t('CaseStudyPage.SUMMARY', 'Summary')), 'Content');
		$fields->addFieldToTab('Root.Main', new LiteralField('Literal','Insert Vimeo Video number Here,for example , if the Video URl is https://vimeo.com/52796210, then insert the Number "52796210" below'),'Content');

		$fields->addFieldToTab('Root.Main', TextField::create('VideoURL'),'Content');

		return $fields;
	}

	

}

class CaseStudyPage_Controller extends Page_Controller {


}