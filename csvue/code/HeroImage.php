<?php
class HeroImage extends Image {

	public static $db = array(
		'Title' => 'Varchar',
		'Link'  => 'Varchar'
	);

	public static $has_one = array(
		'Image' => 'Image',
		'HomePage' => 'HomePage'
	);

	public function getCMSFields() {
		$fields = new FieldList();
		$fields->push( $heroimage = UploadField::create('Image'));
		$fields->push( TextField::create('Title'));
		$fields->push( TextField::create('Link'));
		$heroimage->getValidator()->setAllowedExtensions(array('jpg', 'jpeg', 'png', 'gif'));

		return $fields;
	}

}



