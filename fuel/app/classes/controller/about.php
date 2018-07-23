<?php
/**
* 
*/
class Controller_About extends Controller_template
{
	public function Action_index()
	{
		$data = array();
        $this->template->title = 'About Page';
        $this->template->content = View::forge('about/index', $data);
	}
}
?>