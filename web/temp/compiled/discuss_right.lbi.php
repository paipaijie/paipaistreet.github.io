
<div class="discuss-right">
	<div class="d-main d-goods">
		<div class="d-tit"><?php echo $this->_var['lang']['goods_info']; ?></div>
		<div class="d-g-info">
			<div class="p-img"><a href="<?php echo $this->_var['goodsInfo']['goods_url']; ?>" target="_blank"><img src="<?php echo $this->_var['goodsInfo']['goods_thumb']; ?>"></a></div>
			<div class="p-price"><?php echo $this->_var['goodsInfo']['goods_price']; ?></div>
			<div class="p-name"><a href="<?php echo $this->_var['goodsInfo']['goods_url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['goodsInfo']['goods_name']); ?>"><?php echo htmlspecialchars($this->_var['goodsInfo']['goods_name']); ?></a> <?php if ($this->_var['is_presale']): ?><span class='red'><?php echo $this->_var['lang']['yu']; ?></span><?php endif; ?></div>
			<div class="p-lie"><?php echo $this->_var['lang']['cumulative_comment']; ?><b><?php echo $this->_var['comment_all']['allmen']; ?></b></div>
			<div class="tc">
				<?php if ($this->_var['is_presale']): ?>
				<a href="<?php echo $this->_var['goodsInfo']['goods_url']; ?>" rev="<?php echo $this->_var['goodsInfo']['goods_thumb']; ?>" class="btn"><?php echo $this->_var['lang']['btn_add_to_cart']; ?></a>
				<?php else: ?>
				<a href="javascript:void(0);" onClick="addToCart(<?php echo $this->_var['goodsInfo']['goods_id']; ?>,0,event,this,'flyItem');" rev="<?php echo $this->_var['goodsInfo']['goods_thumb']; ?>" class="btn"><?php echo $this->_var['lang']['btn_add_to_cart']; ?></a>
				<?php endif; ?>
				
            </div>
		</div>
	</div>
	<?php if ($this->_var['act'] != 'discuss_show'): ?>
	<div class="my-post">
		<a href="#doPost" class="btn sc-redBg-btn"><i class="iconfont icon-edit"></i><?php echo $this->_var['lang']['my_dispost_post']; ?></a>
	</div>
	<?php endif; ?>
	<?php if ($this->_var['hot_list']['list']): ?>
	<div class="d-main d-hot">
		<div class="d-tit"><?php echo $this->_var['lang']['hot_dispost_post']; ?></div>
		<div class="d-info">
			<ul>
				<?php $_from = $this->_var['hot_list']['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
				<li>
					<i class="icon icon-tie <?php if ($this->_var['list']['dis_type'] == 1): ?>icon-tao<?php elseif ($this->_var['list']['dis_type'] == 2): ?>icon-wen<?php elseif ($this->_var['list']['dis_type'] == 3): ?>icon-quan<?php elseif ($this->_var['list']['dis_type'] == 4): ?>icon-shai<?php else: ?><?php endif; ?>"></i>
					<a href="single_sun.php?act=discuss_show&did=<?php echo $this->_var['list']['dis_id']; ?>" target="_blank"><?php echo $this->_var['list']['dis_title']; ?></a>
				</li>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</ul>
		</div>
	</div>
	<?php endif; ?>
</div>
<div id="flyItem" class="fly_item"><img src="" width="40" height="40"></div>