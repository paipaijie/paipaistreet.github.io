<?php
//多点乐资源
namespace App\Custom\Site\Controllers;

class Index extends \App\Http\Site\Controllers\Index
{
	public function actionAbout()
	{
		$this->display();
	}

	public function actionPhpinfo()
	{
	}
}

?>
