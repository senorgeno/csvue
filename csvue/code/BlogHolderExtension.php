<?php
class BlogHolderExtension extends DataExtension {

	public function updateCMSFields(FieldList $fields) {
		//$fields->addFieldToTab('Root.Main', new CheckboxField('FeaturedTopic'));

		return $fields;
	}
}