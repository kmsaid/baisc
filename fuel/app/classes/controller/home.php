<?php
/**
* 
*/
class Controller_Home extends Controller_template
{
	public function Action_index()
	{
		$data = array();
        $this->template->title = 'Example Page';
        $this->template->content = View::forge('home/index', $data);
	}
}
?>