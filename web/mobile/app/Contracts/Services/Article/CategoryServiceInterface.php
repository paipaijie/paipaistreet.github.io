<?php
//zend by 多点乐  禁止倒卖 一经发现停止任何服务
namespace App\Contracts\Services\Article;

interface CategoryServiceInterface
{
	public function category($id);

	public function detail($id);
}


?>
