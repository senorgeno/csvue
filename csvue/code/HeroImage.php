<?php
class HeroImage extends DataObject {

	private static $db = array(
		'Title' => 'Varchar',
		'URL'  => 'Varchar'
	);

	private static $has_one = array(
		'Image' => 'Image',
		'Page' => 'Page'
	);

	public function getCMSFields() {
		$fields = new FieldList();
		$fields->push( $heroimage = UploadField::create('Image'));
		$fields->push( TextField::create('Title'));
		$fields->push( TextField::create('URL'));
		$heroimage->getValidator()->setAllowedExtensions(array('jpg', 'jpeg', 'png', 'gif'));

		return $fields;
	}

}



