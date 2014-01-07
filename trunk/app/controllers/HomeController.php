<?php

class HomeController extends BaseController {
	public function index() {
		$this->layout->content = View::make('home/index', array(
        	'var' => 'Sample Variable',
            'var2' => 'Other value'
        ));
	}
}