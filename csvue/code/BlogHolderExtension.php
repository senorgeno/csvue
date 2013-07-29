<?php
class BlogHolderExtension extends DataExtension {


	public function PaginatedPosts() {
		$children =  BlogEntry::get()->filter('ParentID',$this->owner->ID);
		//Debug::show($this->owner);


		$pag = PaginatedList::create($children,Controller::curr()->request)->setLimitItems(2);

		return $pag;
	}
	public function updateCMSFields(FieldList $fields) {
		//$fields->addFieldToTab('Root.Main', new CheckboxField('FeaturedTopic'));

		return $fields;
	}
}