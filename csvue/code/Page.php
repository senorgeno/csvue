<?php
class Page extends SiteTree {

	public static $db = array(
	);

	public static $has_one = array(
	);

	public function Socials() {
		return Social::get();
	}
	public function CaseStudyCategories() {
		return CaseStudyCategories::get();
	}
	public function SellingPage() {
		return SellingPage::get();
	}

}
class Page_Controller extends ContentController {

	/**
	 * An array of actions that can be accessed via a request. Each array element should be an action name, and the
	 * permissions or conditions required to allow the user to access it.
	 *
	 * <code>
	 * array (
	 *     'action', // anyone can access this action
	 *     'action' => true, // same as above
	 *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
	 *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
	 * );
	 * </code>
	 *
	 * @var array
	 */
	public static $allowed_actions = array (
	);

	public function init() {
		parent::init();

		$themedir = ViewableData::ThemeDir();
		Requirements::javascript($themedir."/js/foundation.min.js");
		Requirements::javascript($themedir."/js/vendor/custom.modernizr.js");
	}

}