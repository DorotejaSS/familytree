<?php 

class View
{
	public $info = array();
	public function load($entity, $partial)
	{
		require('./view/inc/header.php');
		require('./view/'.$entity.'/'.$partial.'.php');
		require('./view/inc/footer.php');
	}
}