<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<?php echo $this->fetch('library/js_languages_new.lbi'); ?>
<link rel="stylesheet" type="text/css" href="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/css/other/coupons.css" />
</head>

<body>
<?php echo $this->fetch('library/page_header_coupons.lbi'); ?>
<?php 
$k = array (
  'name' => 'get_adv_child',
  'ad_arr' => $this->_var['coupons_index'],
  'id' => '0',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
<div id="content" class="quan_content">
    <div class="quan-main">
        <div class="gray-wrap">
            <div class="w1200 w">
                <div class="quan-seckill">
                    <div class="mt">
                        <h3><b class="seckill-icon"></b><?php echo $this->_var['lang']['Coupon_kill']; ?></h3>
                    </div>
                    <div class="mc cou-seckill">
                        <div class="ui-switchable-panel-main">
                            <div class="ui-switchable-panel">
                                <div class="seckill-list">
                                    <?php $_from = $this->_var['seckill']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'vo');if (count($_from)):
    foreach ($_from AS $this->_var['vo']):
?>
                                    <div class="quan-sk-item<?php if ($this->_var['vo']['cou_surplus'] == 0): ?> quan-gray-sk-item<?php endif; ?>">
                                        <div class="sk-img"><img width="130px" height="130px" src="<?php echo $this->_var['vo']['cou_goods_name']['0']['goods_thumb']; ?>" alt="<?php echo $this->_var['lang']['pic_kill_goods']; ?>"></div>
                                        <div class="q-type">
                                            <div class="q-price">
                                                <em>￥</em>
                                                <strong class="num"><?php echo $this->_var['vo']['cou_money']; ?></strong>
                                                <div class="txt"><div class="typ-txt"><?php echo $this->_var['vo']['cou_type_name']; ?></div></div>
                                            </div>
                                            <div class="limit"><span class="quota"><?php if ($this->_var['vo']['cou_man'] > 0): ?><?php echo $this->_var['lang']['full']; ?><?php echo $this->_var['vo']['cou_man']; ?><?php echo $this->_var['lang']['available_full']; ?><?php else: ?><?php echo $this->_var['lang']['unlimited']; ?><?php endif; ?></span></div>
                                            <div class="q-range">
                                                <div class="range-item" title="<?php echo $this->_var['vo']['cou_title']; ?>">
                                                    <?php echo $this->_var['vo']['cou_title']; ?>
                                                </div>
                                                <div class="range-item"><?php echo $this->_var['vo']['store_name']; ?></div>
                                            </div>
                                        </div>
                                        <div class="q-opbtns">
                                            <b class="semi-circle"></b>
                                            <?php if ($this->_var['vo']['cou_surplus'] == 0): ?>
                                            <div class="btn-state btn-getend"></div>
                                            <a href="javascript:void(0);" class="q-btn"><span class="txt"><?php echo $this->_var['lang']['Activities_end']; ?></span><b></b></a>
                                            <?php else: ?>
                                            <div class="canvas-qcode-box">
                                                <div class="canvas-box">
                                                	<div class="canvas" data-per="<?php echo $this->_var['vo']['cou_surplus']; ?>">
														<?php if (! empty ( $_SESSION['user_id'] ) && $this->_var['vo']['cou_is_receive'] == 1): ?>
														<div class="btn-state btn-geted"><?php echo $this->_var['lang']['receive_hove']; ?></div>
														<?php else: ?>
                                                        <div class="canvas_wrap">
                                                            <div class="circle">
                                                                <div class="circle_item circle_left"></div>
                                                                <div class="circle_item circle_right wth0"></div>
                                                            </div>
                                                            <div class="canvas_num"><span><?php echo $this->_var['lang']['remaining']; ?><br /><i><?php echo $this->_var['vo']['cou_surplus']; ?></i>%</span></div>
                                                        </div>
														<?php endif; ?>
                                                    </div>
                                                    <a href="<?php if ($this->_var['vo']['cou_is_receive'] == 1): ?>search.php?cou_id=<?php echo $this->_var['vo']['cou_id']; ?><?php else: ?>javascript:void(0);<?php endif; ?>" class="q-btn <?php if (! empty ( $_SESSION['user_id'] ) && $this->_var['vo']['cou_is_receive'] == 1): ?><?php else: ?>get-coupon<?php endif; ?>" cou_id="<?php echo $this->_var['vo']['cou_id']; ?>"><span class="txt"><?php if ($this->_var['vo']['cou_is_receive'] == 1): ?><?php echo $this->_var['lang']['Immediate_use']; ?><?php else: ?><?php echo $this->_var['lang']['receive_now']; ?><?php endif; ?></span><b></b></a>
                                                    <a href="#none" class="qcode-btn"><b></b></a>
                                                </div>
                                            </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w1200 w">
            <div class="quan-mod quan-task">
                <div class="mt">
                    <h3><b class="task-icon"></b><?php echo $this->_var['lang']['redemption_task']; ?></h3>
                    <div class="slogan s1"><?php echo $this->_var['lang']['coupons_prompt']; ?></div>
                    <div class="extra-r"><a target="_blank" href="coupons.php?act=coupons_goods" class="more"><?php echo $this->_var['lang']['more']; ?> &gt;</a></div>
                    <div class="line"></div>
                </div>
                <div class="mc">
                    <div class="task-list">
                        <?php $_from = $this->_var['cou_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'vo');if (count($_from)):
    foreach ($_from AS $this->_var['vo']):
?>
                        <div class="quan-task-item task-doing">
                            <div class="p-img">
                                <a href="search.php?cou_id=<?php echo $this->_var['vo']['cou_id']; ?>" target="_blank"><img src="<?php echo $this->_var['vo']['cou_ok_goods_name']['0']['goods_thumb']; ?>" width="240" height="240" alt="<?php echo $this->_var['vo']['cou_name']; ?>"></a>
                            </div>
                            <div class="task-rcol">
                                <div class="p-name"><a href="search.php?cou_id=<?php echo $this->_var['vo']['cou_id']; ?>" target="_blank"><?php echo $this->_var['vo']['cou_name']; ?></a></div>
								<div class="range-item"><?php echo $this->_var['vo']['store_name']; ?></div>
                                <div class="p-ad"><i class="i1"></i><i class="i2"></i><?php echo $this->_var['lang']['Top_up_coupons']; ?></div>
                                <div class="p-price">
                                    <em>￥</em>
                                    <strong class="num"><?php echo $this->_var['vo']['cou_money']; ?></strong>
                                </div>
                                <div class="task-time">
                                    <b class="fl_b"></b>
                                    <div class="cd-time fl" ectype="time" data-time="<?php echo $this->_var['vo']['cou_end_time_format']; ?>">
                                        <span><?php echo $this->_var['lang']['remaining']; ?></span><span class="days">00</span><span class="split"><?php echo $this->_var['lang']['day']; ?></span><span class="hours"></span><span class="split"><?php echo $this->_var['lang']['hour_two']; ?></span><span class="minutes"></span><span class="split"><?php echo $this->_var['lang']['minute']; ?></span><span class="seconds"></span><span class="split"><?php echo $this->_var['lang']['seconds']; ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </div>
                </div>
            </div>
            <div class="quan-mod">
                <div class="mt">
                    <h3><b class="find-icon"></b><?php echo $this->_var['lang']['Good_coupon_market']; ?></h3>
                    <div class="slogan s2"><?php echo $this->_var['lang']['always_you']; ?></div>
                    <div class="extra-r"><a target="_blank" href="coupons.php?act=coupons_list" class="more"><?php echo $this->_var['lang']['more']; ?> &gt;</a></div>
                    <div class="line"></div>
                </div>
                <div class="mc cou-data">
                    <div class="quan-list">
                        <?php $_from = $this->_var['cou_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'vo');if (count($_from)):
    foreach ($_from AS $this->_var['vo']):
?>
                        <div class="quan-item quan-d-item quan-item-acoupon<?php if ($this->_var['vo']['cou_surplus'] == 0): ?> quan-gray-item<?php endif; ?>">
                        
                            <div class="q-type">
                                    <div class="q-price">
                                        <em>￥</em>
                                        <strong class="num"><?php echo $this->_var['vo']['cou_money']; ?></strong>
                                        <div class="txt" style="float: none;"><div class="typ-txt"><?php echo $this->_var['vo']['cou_type_name']; ?></div></div>
                                        <div class="txt">
                                            <div class="limit"><span class="ftx-06"><?php if ($this->_var['vo']['cou_man'] > 0): ?><?php echo $this->_var['lang']['full']; ?><?php echo $this->_var['vo']['cou_man']; ?><?php echo $this->_var['lang']['available_full']; ?><?php else: ?><?php echo $this->_var['lang']['unlimited']; ?><?php endif; ?></span></div>
                                        </div>
                                    </div>
                                <div class="q-range">
                                    <div class="range-item"><p title="<?php if ($this->_var['vo']['cou_goods']): ?><p><?php echo $this->_var['lang']['permissions_buy']; ?></p><?php else: ?><p><?php echo $this->_var['lang']['category']; ?></p><?php endif; ?>">
                                        <?php echo $this->_var['vo']['cou_title']; ?>
                                    </p></div>
                                    <div class="range-item"><?php echo $this->_var['vo']['store_name']; ?></div>
                                    <div class="range-item"><?php echo $this->_var['vo']['cou_start_time_format']; ?>-<?php echo $this->_var['vo']['cou_end_time_format']; ?></div>
                                </div>
                            </div>
                            <?php if (! empty ( $_SESSION['user_id'] ) && $this->_var['vo']['cou_is_receive']): ?>
                                <?php if ($this->_var['vo']['is_use'] == 0): ?>
                                    <?php if ($this->_var['vo']['cou_surplus'] == 0): ?>
                                        <div class="q-opbtns"><a href="javascript:;" class="" cou_id="<?php echo $this->_var['vo']['cou_id']; ?>"><b class="semi-circle"></b><?php echo $this->_var['lang']['Take_up']; ?></a></div>
                                    <?php else: ?>
                                        <div class="q-opbtns"><a href="search.php?cou_id=<?php echo $this->_var['vo']['cou_id']; ?>" target="_blank"><b class="semi-circle"></b><?php echo $this->_var['lang']['Immediate_use']; ?></a></div>
                                        <div class="q-state"><div class="btn-state btn-geted"><?php echo $this->_var['lang']['receive_hove']; ?></div></div>
                                    <?php endif; ?>

                                <?php else: ?>
                                    <?php if ($this->_var['vo']['cou_surplus'] == 0): ?>
                                    <div class="q-opbtns"><a href="javascript:;" class="" cou_id="<?php echo $this->_var['vo']['cou_id']; ?>"><b class="semi-circle"></b><?php echo $this->_var['lang']['Take_up']; ?></a></div>
                                    <?php else: ?>
                                    <div class="q-opbtns"><a href="javascript:;" class="q-btn get-coupon" cou_id="<?php echo $this->_var['vo']['cou_id']; ?>"><b class="semi-circle"></b><?php echo $this->_var['lang']['receive_now']; ?></a></div>
                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php else: ?>
                                <?php if ($this->_var['vo']['cou_surplus'] == 0): ?>
                                <div class="q-opbtns"><a href="javascript:;" class="" cou_id="<?php echo $this->_var['vo']['cou_id']; ?>"><b class="semi-circle"></b><?php echo $this->_var['lang']['Take_up']; ?></a></div>
                                <?php else: ?>
                                <div class="q-opbtns"><a href="javascript:;" class="q-btn get-coupon" cou_id="<?php echo $this->_var['vo']['cou_id']; ?>"><b class="semi-circle"></b><?php echo $this->_var['lang']['receive_now']; ?></a></div>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </div>
                </div>
            </div>
            <div class="quan-mod">
                <div class="mt">
                    <h3><b class="find-icon"></b><?php echo $this->_var['lang']['free_shen_pay']; ?></h3>
                    <div class="slogan s2"><?php echo $this->_var['lang']['always_you']; ?></div>
                    <div class="extra-r"><a target="_blank" href="coupons.php?act=coupons_list&type=shipping" class="more"><?php echo $this->_var['lang']['more']; ?> &gt;</a></div>
                    <div class="line"></div>
                </div>
                <div class="mc cou_shipping">
                    <div class="quan-list">
                        <?php $_from = $this->_var['cou_shipping']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'vo');if (count($_from)):
    foreach ($_from AS $this->_var['vo']):
?>
                        <div class="quan-item quan-d-item quan-item-acoupon<?php if ($this->_var['vo']['cou_surplus'] == 0): ?> quan-gray-item<?php endif; ?>">
                            <div class="q-type">
                                <div class="q-price">
                                    <i class="icon-my"></i>
                                    <div class="txt" style="float: none;"><div class="typ-txt"><?php echo $this->_var['vo']['cou_type_name']; ?></div></div>
                                    <div class="txt">
                                        <div class="limit"><span class="ftx-06"><?php if ($this->_var['vo']['cou_man'] > 0): ?><?php echo $this->_var['lang']['full']; ?><?php echo $this->_var['vo']['cou_man']; ?><?php echo $this->_var['lang']['available_full']; ?><?php else: ?><?php echo $this->_var['lang']['unlimited']; ?><?php endif; ?></span></div>
                                    </div>
                                </div>
                                <div class="q-range">
                                    <div class="range-item"><p title="<?php if ($this->_var['vo']['cou_goods']): ?><p><?php echo $this->_var['lang']['permissions_buy']; ?></p><?php else: ?><p><?php echo $this->_var['lang']['category']; ?></p><?php endif; ?>">
                                        <?php echo $this->_var['vo']['cou_title']; ?>
                                    </p></div>
                                    <div class="range-item"><?php echo $this->_var['vo']['store_name']; ?></div>
                                    <div class="range-item"><?php echo $this->_var['vo']['cou_start_time_format']; ?>-<?php echo $this->_var['vo']['cou_end_time_format']; ?></div>
                                </div>
                            </div>
                            <?php if (! empty ( $_SESSION['user_id'] ) && $this->_var['vo']['cou_is_receive']): ?>
                                <?php if ($this->_var['vo']['is_use'] == 0): ?>
                                    <?php if ($this->_var['vo']['cou_surplus'] == 0): ?>
                                        <div class="q-opbtns"><a href="javascript:;" class="" cou_id="<?php echo $this->_var['vo']['cou_id']; ?>"><b class="semi-circle"></b><?php echo $this->_var['lang']['Take_up']; ?></a></div>
                                    <?php else: ?>
                                        <div class="q-opbtns"><a href="search.php?cou_id=<?php echo $this->_var['vo']['cou_id']; ?>" target="_blank"><b class="semi-circle"></b><?php echo $this->_var['lang']['Immediate_use']; ?></a></div>
                                        <div class="q-state"><div class="btn-state btn-geted"><?php echo $this->_var['lang']['receive_hove']; ?></div></div>
                                    <?php endif; ?>

                                <?php else: ?>
                                    <?php if ($this->_var['vo']['cou_surplus'] == 0): ?>
                                    <div class="q-opbtns"><a href="javascript:;" class="" cou_id="<?php echo $this->_var['vo']['cou_id']; ?>"><b class="semi-circle"></b><?php echo $this->_var['lang']['Take_up']; ?></a></div>
                                    <?php else: ?>
                                    <div class="q-opbtns"><a href="javascript:;" class="q-btn get-coupon" cou_id="<?php echo $this->_var['vo']['cou_id']; ?>"><b class="semi-circle"></b><?php echo $this->_var['lang']['receive_now']; ?></a></div>
                                    <?php endif; ?>
                                <?php endif; ?>
                            <?php else: ?>
                                <?php if ($this->_var['vo']['cou_surplus'] == 0): ?>
                                <div class="q-opbtns"><a href="javascript:;" class="" cou_id="<?php echo $this->_var['vo']['cou_id']; ?>"><b class="semi-circle"></b><?php echo $this->_var['lang']['Take_up']; ?></a></div>
                                <?php else: ?>
                                <div class="q-opbtns"><a href="javascript:;" class="q-btn get-coupon" cou_id="<?php echo $this->_var['vo']['cou_id']; ?>"><b class="semi-circle"></b><?php echo $this->_var['lang']['receive_now']; ?></a></div>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
$k = array (
  'name' => 'user_menu_position',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'jquery.SuperSlide.2.1.1.js,jquery.yomi.js,parabola.js,cart_common.js,cart_quick_links.js')); ?>
<script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/dsc-common.js"></script>
<script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/jquery.purebox.js"></script>
<script type="text/javascript">
	//首页轮播广告
	var length = $(".silder-panel ul").find("li").length;
	if(length > 1){
		$("#g-scroll").slide({titCell:".num-ctrl ul",mainCell:".silder-panel ul",effect:"left",autoPlay:true,autoPage:true,interTime:3500,delayTime:500});
	}

	//优惠券秒杀切换
	$(".seckill-tab li").hover(function(){
		$(this).addClass("curr").siblings().removeClass("curr");
		var index = $(this).index();

		$(".ui-switchable-panel-main").find(".ui-switchable-panel").eq(index).show().siblings().hide();
	});
	
	$(".canvas").each(function(){
		var per = 100 - $(this).data("per");
		if(per>50){
			$(this).find('.circle').addClass('clip-auto');
			$(this).find('.circle_right').removeClass('wth0');
		}
		$(this).find(".circle_left").css("-webkit-transform","rotate("+(18/5)*per+"deg)");
	});

	$(".cd-time").each(function(){
		$(this).yomi();
	});
</script>
</body>
</html>