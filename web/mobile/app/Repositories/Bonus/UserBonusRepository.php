<?php
//zend by 多点乐  禁止倒卖 一经发现停止任何服务
namespace App\Repositories\Bonus;

class UserBonusRepository
{
	public function getUserBonusCount($userId)
	{
		return \App\Models\UserBonus::where('user_id', $userId)->count();
	}
}


?>
