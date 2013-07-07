<?php

class SellingPage extends Page {


	static $db = array (
		'Summary' => 'HTMLText',
	);

	static $has_one =array (
		'Banner' => 'Image',
	);

	Public function BannerUrl() {
		return $this->obj('Banner')->filename;
	}

	public function getCMSFields() {
		$fields = parent::getCMSFields();
		$fields->addFieldToTab("Root.Main", HtmlEditorField::create('Summary', _t('CaseStudyPage.SUMMARY', 'Summary')), 'Content');
		$fields->addFieldToTab("Root.Banner", UploadField::create('Banner','Banner'));
	
		return $fields;
	}	

}

class SellingPage_Controller extends Page_Controller { }

