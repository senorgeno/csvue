<?php
class BlogEntryExtension extends DataExtension {

	static $db  = array(
		'FeaturedPost' => 'Boolean',
		'HeroPost'    => 'Boolean',
		'HomePageSiderBarPost' => 'Boolean'
	);

	static $has_one = array(
		'Image' => 'Image'
	);

	public function updateCMSFields(FieldList $fields) {
		$fields->addFieldToTab('Root.Main', new LiteralField('literal','Add this post to the Media and News Hero Slider (can only contain 1 post)'),'Content');
		$fields->addFieldToTab('Root.Main', new CheckboxField('HeroPost','Hero Post'),'Content');
		$fields->addFieldToTab('Root.Main', new LiteralField('literal','Add this post to the Media and News Featured Posts Section (can only contain 4 posts)'),'Content');
		$fields->addFieldToTab('Root.Main', new CheckboxField('FeaturedPost','Featured Post'),'Content');
		$fields->addFieldToTab('Root.Main', new LiteralField('literal','Add this post to the Media and News Sidebar section'),'Content');
		$fields->addFieldToTab('Root.Main', new CheckboxField('HomePageSiderBarPost','Side Bar'),'Content');
		return $fields;
	}
}