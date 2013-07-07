<?php

class CaseStudyPage extends Page {


	static $db = array (

		'Summary' => 'HTMLText',
	);

	static $has_one =array (
		'ExcerptPhoto' => 'Image',
		'SideBarPhoto' => 'Image',
		'Logo' => 'Image',
	);

	static $many_many = array (
		'CaseStudyCategory' => 'CaseStudyCategories'
	);



	public function getCMSFields() {
		$fields = parent::getCMSFields();
		$fields->addFieldToTab("Root.Images", UploadField::create('ExcerptPhoto','Excerpt Photo'));
		$fields->addFieldToTab("Root.Images", UploadField::create('SideBarPhoto','SideBar Photo'));
		$fields->addFieldToTab("Root.Images", UploadField::create('Logo', _t('CaseStudyPage.LOGO', 'Logo')));
		$fields->addFieldToTab("Root.Main", HtmlEditorField::create('Summary', _t('CaseStudyPage.SUMMARY', 'Summary')), 'Content');

		$gf = new GridField('CaseStudyCategory','CaseStudyCategory', $this->CaseStudyCategory(), GridFieldConfig_RelationEditor::create());
		$fields->addFieldToTab('Root.Categores',$gf);
		return $fields;
	}

	

}

class CaseStudyPage_Controller extends Page_Controller {


}