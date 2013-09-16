<?php
class Page extends SiteTree {

	private static $db = array(
		'CallToActionText' => 'Varchar',
		'CallToActionButtonText' => 'Varchar',
		'CallToActionLink'  => 'Varchar'
	);

	private static $has_one = array(
		'PageImage' => 'Image'
	);
	
	private static $has_many = array (
		'HeroImages' => 'HeroImage',
	);

	public function getCMSFields() {
		$fields = parent::getCMSFields();

		$gf = new GridField('HeroImages','HeroImages',$this->HeroImages(), GridFieldConfig_RecordEditor::create());
		$fields->addFieldToTab('Root.HeroImages', $gf);
		$fields->addFieldToTab('Root.CallToAction', new TextField('CallToActionText', 'Call to Action Text'));
		$fields->addFieldToTab('Root.CallToAction', new TextField('CallToActionButtonText','Button Text '));
		$fields->addFieldToTab('Root.CallToAction', new TextField('CallToActionLink', 'Link that the button goes to'));
		return $fields;

		$fields->addFieldToTab('Root.Images',new UploadField('PageImage','This Image is displayed on the side of the page, if no image is uploaded then the page\'s text will be full width. The dimensions are 380 * 450 px'));
		return $fields;
	}
	
	public function Socials() {
		return Social::get();
	}
	public function CaseStudyCategories() {
		$cs = CaseStudyCategoriesPage::get();
		$al = new ArrayList();
		foreach ($cs as $caseStudy) {
			if($caseStudy->parent()->className != 'SiteTree') {
				$al->push($caseStudy);
			}
		}
		return $al;
	}
	public function SellingPage() {
		return SellingPage::get();
	}
	// Blog getter template functions
	public function HeroPost() {
		return BlogEntry::get()->filter('HeroPost',1)->last();
	}

	public function FeaturedPosts() {
		return BlogEntry::get()->filter('FeaturedPost',1);
	}

	public function HomePageSiderBarPost() {
		return BlogEntry::get()->filter('HomePageSiderBarPost',1);
	}

	public function AllPosts() {
		return BlogEntry::get();
	}

	public function LatestBlogPosts()  {
		return BlogEntry::get()->sort('ID','DESC')->limit(5);
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
	private static $allowed_actions = array (
	);

	public function init() {
		parent::init();

		$themedir = ViewableData::ThemeDir();
		//Requirements::javascript($themedir."/js/foundation.min.js");
		//Requirements::javascript($themedir."/js/vendor/custom.modernizr.js");
	}

}