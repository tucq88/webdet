<?php
class UserController extends BaseController {
    protected $layout = 'layouts.master';
    
    public function index() {
        $this->layout->content = View::make('user/index', array(
        	'var' => 'Sample Variable',
            'var2' => 'Other value'
        ));
    }
}