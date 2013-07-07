<?php

class Categories extends modelAdmin {

	public static $managed_models = array(
	    'CaseStudyCategories'

	);

	static $url_segment = 'categories';
	static $menu_title = 'Categories';
}
class casestudyCategory_Controller extends Controller {

	static $allowed_actions = array(
		'casestudy'
	);

	public function casestudy(SS_HTTPRequest $request) {
		//Debug::show($arguments);
		$CaseStudyCategoriesUrl = $request->param('Name');
		Debug::show($CaseStudyCategoriesUrl);
		if($CaseStudyCategoriesUrl) {
			$caseStudies = CaseStudyPage::get();
			$caseStudies = $caseStudies->CaseStudyCategory();
			Debug::show($caseStudies);
			//array('CaseStudyCategory.url' => $CaseStudyCategoriesUrl


			return $this->renderWith('CaseStudyCategories', array('CaseStudies' => $caseStudies));
		} else {
			//return $this->redirectBack();
		}

	}

}
