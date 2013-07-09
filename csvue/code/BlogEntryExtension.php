<?php
class BlogEntryExtension extends DataExtension {

	static $db  = array(
		'FeaturedPost' => 'Boolean',
		'HeroPost'    => 'Boolean'
	);
	static $has_one = array(
		'Image' => 'Image'
	);

	public function updateCMSFields(FieldList $fields) {
		$fields->addFieldToTab('Root.Main', new CheckboxField('FeaturedPost'));
		$fields->addFieldToTab('Root.Main', new CheckboxField('HeroPost'));
		$fields->addFieldToTab('Root.Images',new UploadField('Image'));
		return $fields;
	}
}