<?php 

class View
{
	public $info = array();
	public function load()
	{
		require('./view/inc/header.php');
		require('./view/inc/footer.php');
	}
}