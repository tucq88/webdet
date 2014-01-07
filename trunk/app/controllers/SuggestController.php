<?php
class SuggestController extends BaseController {
    public function postRequest() {
        sleep(1);
        $result = array(
            'title' => 'Request Title',
        	'content' => 'Request Content Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat dolorem sequi eaque voluptatem vitae quam soluta debitis sit facere delectus saepe impedit voluptates aliquid est dolores corrupti dignissimos fugit modi.',
        );
        return json_encode($result);
    }
    
    public function getDetail() {
        $result = array(
            'title' => 'Request Title',
            'content' => 'Request Content Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat dolorem sequi eaque voluptatem vitae quam soluta debitis sit facere delectus saepe impedit voluptates aliquid est dolores corrupti dignissimos fugit modi.',
        );
        return json_encode($result);
    }
}