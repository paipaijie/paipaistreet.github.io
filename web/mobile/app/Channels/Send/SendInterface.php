<?php
//多点乐资源
namespace App\Channels\Send;

interface SendInterface
{
	public function __construct($config);

	public function push($to, $title, $content, $data = array());

	public function getError();
}


?>
