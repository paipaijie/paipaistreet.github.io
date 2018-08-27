<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<?php echo $this->fetch('library/js_languages_new.lbi'); ?>
<link rel="stylesheet" type="text/css" href="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/css/other/presale.css" />
</head>

<body class="show">
<?php echo $this->fetch('library/page_header_presale.lbi'); ?>
<?php 
$k = array (
  'name' => 'get_adv_child',
  'ad_arr' => $this->_var['presale_banner_category'],
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>

<div class="preSale-filter">
    <div id="filter">
        <div class="filter-section-wrapper mb-component mt-component w1200 mt20 w">
            <div class="component-filter component-filter-category">
                <div class="filter-label-list">
                    <div class="label"><?php echo $this->_var['lang']['category']; ?>：</div>

                    <div class="filter-quanbu <?php if ($this->_var['pager']['cat_id'] == 0): ?> selected <?php endif; ?>"><a href="presale.php?act=category&cat_id=0&status=<?php echo $this->_var['pager']['status']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&sort=shop_price&order=<?php echo $this->_var['pager']['order']; ?>"><?php echo $this->_var['lang']['all_attribute']; ?></a></div>
                    <ul class="inline-block-list">
                    <?php $_from = $this->_var['pre_category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'category');if (count($_from)):
    foreach ($_from AS $this->_var['category']):
?>
                        <li <?php if ($this->_var['pager']['cat_id'] == $this->_var['category']['cat_id']): ?>class="selected"<?php endif; ?>><a href="presale.php?act=category&cat_id=<?php echo $this->_var['category']['cat_id']; ?>&status=<?php echo $this->_var['pager']['status']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&sort=<?php echo $this->_var['pager']['sort']; ?>&order=<?php echo $this->_var['pager']['order']; ?>"><?php echo $this->_var['category']['cat_name']; ?></a></li>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </ul>
                </div>
                <div class="filter-label-list">
                    <div class="label"><?php echo $this->_var['lang']['array_order']; ?>：</div>
                    <div class="filter-quanbu <?php if ($this->_var['pager']['sort'] == 'act_id'): ?>selected<?php endif; ?>"><a href="presale.php?act=category&cat_id=<?php echo $this->_var['pager']['cat_id']; ?>&status=<?php echo $this->_var['pager']['status']; ?>&price_min=<?php echo $this->_var['pager']['price_min']; ?>&price_max=<?php echo $this->_var['pager']['price_max']; ?>&order=<?php echo $this->_var['pager']['order']; ?>"><?php echo $this->_var['lang']['default']; ?></a></div>
                    <ul class="inline-block-list">
                        <li <?php if ($this->_var['pager']['sort'] == 'shop_price'): ?>class="selected"<?php endif; ?>><a href="presale.php?act=category&cat_id=<?php echo $this->_var['pager']['cat_id']; ?>&status=<?php echo $this->_var['pager']['status']; ?>&price_min=<?php echo $this->_var['pager']['price_min']; ?>&price_max=<?php echo $this->_var['pager']['price_max']; ?>&sort=shop_price&order=<?php echo $this->_var['pager']['order']; ?>"><?php echo $this->_var['lang']['price']; ?></a></li>
                        <li <?php if ($this->_var['pager']['sort'] == 'start_time'): ?>class="selected"<?php endif; ?>><a href="presale.php?act=category&cat_id=<?php echo $this->_var['pager']['cat_id']; ?>&status=<?php echo $this->_var['pager']['status']; ?>&price_min=<?php echo $this->_var['pager']['price_min']; ?>&price_max=<?php echo $this->_var['pager']['price_max']; ?>&sort=start_time&order=<?php echo $this->_var['pager']['order']; ?>"><?php echo $this->_var['lang']['is_new']; ?></a></li>
                    </ul>
                </div>
                <div class="filter-label-list">
                    <div class="label"><?php echo $this->_var['lang']['au_bid_status']; ?>：</div>
                    <div class="filter-quanbu <?php if ($this->_var['pager']['status'] == 0): ?>selected<?php endif; ?>"><a href="presale.php?act=category&cat_id=<?php echo $this->_var['pager']['cat_id']; ?>&status=0&price_min=<?php echo $this->_var['pager']['price_min']; ?>&price_max=<?php echo $this->_var['pager']['price_max']; ?>&sort=<?php echo $this->_var['pager']['sort']; ?>&order=<?php echo $this->_var['pager']['order']; ?>"><?php echo $this->_var['lang']['all_attribute']; ?></a></div>
                    <ul class="inline-block-list">
                        <li <?php if ($this->_var['pager']['status'] == 1): ?>class="selected"<?php endif; ?>><a href="presale.php?act=category&cat_id=<?php echo $this->_var['pager']['cat_id']; ?>&status=1&price_min=<?php echo $this->_var['pager']['price_min']; ?>&price_max=<?php echo $this->_var['pager']['price_max']; ?>&sort=<?php echo $this->_var['pager']['sort']; ?>&order=<?php echo $this->_var['pager']['order']; ?>"><?php echo $this->_var['lang']['begin_minute']; ?></a></li>
                        <li <?php if ($this->_var['pager']['status'] == 2): ?>class="selected"<?php endif; ?>><a href="presale.php?act=category&cat_id=<?php echo $this->_var['pager']['cat_id']; ?>&status=2&price_min=<?php echo $this->_var['pager']['price_min']; ?>&price_max=<?php echo $this->_var['pager']['price_max']; ?>&sort=<?php echo $this->_var['pager']['sort']; ?>&order=<?php echo $this->_var['pager']['order']; ?>"><?php echo $this->_var['lang']['Appointment']; ?></a></li>
                        <li <?php if ($this->_var['pager']['status'] == 3): ?>class="selected"<?php endif; ?>><a href="presale.php?act=category&cat_id=<?php echo $this->_var['pager']['cat_id']; ?>&status=3&price_min=<?php echo $this->_var['pager']['price_min']; ?>&price_max=<?php echo $this->_var['pager']['price_max']; ?>&sort=<?php echo $this->_var['pager']['sort']; ?>&order=<?php echo $this->_var['pager']['order']; ?>"><?php echo $this->_var['lang']['has_ended']; ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="content">
    <div class="w1200 pb40 w">
        <div class="special-item">
            <div class="special-product">
                <?php if ($this->_var['goods']): ?>
                <ul>
					<?php $_from = $this->_var['goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_23103600_1534991341');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_23103600_1534991341']):
?>
                    <li>
                        <div class="s-warp">
                            <div class="p-img"><a href="<?php echo $this->_var['goods_0_23103600_1534991341']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['goods_0_23103600_1534991341']['thumb']; ?>" width="255" height="255"/></a></div>
                            <div class="p-price">
                                <span><em>￥</em><?php echo $this->_var['goods_0_23103600_1534991341']['shop_price']; ?></span>
                                <del><em>￥</em><?php echo $this->_var['goods_0_23103600_1534991341']['market_price']; ?></del>
                            </div>
                            <div class="p-name"><a href="<?php echo $this->_var['goods_0_23103600_1534991341']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_23103600_1534991341']['goods_name']); ?>" target="_blank"><?php echo $this->_var['goods_0_23103600_1534991341']['goods_name']; ?></a></div>
                            <div class="p-info">
                                <div class="p-left">
                                    <?php if ($this->_var['goods_0_23103600_1534991341']['no_start']): ?>
                                        <div class="time" data-time="<?php echo $this->_var['goods_0_23103600_1534991341']['start_time_date']; ?>">
                                            <?php echo $this->_var['lang']['Start_from']; ?><span class="days">00</span><?php echo $this->_var['lang']['day']; ?>&nbsp;<span class="hours">01</span>:<span class="minutes">56</span>:<span class="seconds">23</span>
                                        </div>
                                    <?php else: ?>
                                        <div class="time" data-time="<?php echo $this->_var['goods_0_23103600_1534991341']['end_time_date']; ?>">
                                            <?php echo $this->_var['lang']['Count_down']; ?><span class="days">00</span><?php echo $this->_var['lang']['day']; ?>&nbsp;<span class="hours">01</span>:<span class="minutes">56</span>:<span class="seconds">23</span>
                                        </div>
                                    <?php endif; ?>
                                    <span class="appointment"><?php echo $this->_var['lang']['existing']; ?><em><?php echo $this->_var['goods_0_23103600_1534991341']['sales_volume']; ?></em><?php echo $this->_var['lang']['subscribe_p']; ?></span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                </ul>
                <?php else: ?>
                <div class="no_records no_records_tc">
                    <i class="no_icon_two"></i>
                    <div class="no_info no_info_line">
                        <h3><?php echo $this->_var['lang']['information_null']; ?></h3>
                        <div class="no_btn">
                            <a href="index.php" class="btn sc-redBg-btn"><?php echo $this->_var['lang']['back_home']; ?></a>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.SuperSlide.2.1.1.js,jquery.yomi.js')); ?>
<script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/dsc-common.js"></script>
<script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/jquery.purebox.js"></script>
<script type="text/javascript">
	var length = $(".pre-banner .bd ul").find("li").length;
	if(length>1){
		$(".pre-banner").slide({titCell:".hd ul",mainCell:".bd ul",effect:"top",interTime:3500,delayTime:500,autoPlay:true,autoPage:true});
	}else{
		$(".pre-banner .hd ul").hide();
	}
	
	//倒计时JS
	$(".time").each(function(){
		$(this).yomi();
	});
</script>
</body>
</html>
