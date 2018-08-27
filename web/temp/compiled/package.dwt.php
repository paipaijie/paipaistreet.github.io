<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<?php echo $this->fetch('library/js_languages_new.lbi'); ?>
</head>

<body class="package-content">
    <?php echo $this->fetch('library/page_header_common.lbi'); ?>
    <div class="content">
        <div class="w w1200">
            <?php echo $this->fetch('library/ur_here.lbi'); ?>
            <?php if ($this->_var['list']): ?>
            <ul class="package-list clearfix">
                <?php $_from = $this->_var['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');$this->_foreach['package'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['package']['total'] > 0):
    foreach ($_from AS $this->_var['val']):
        $this->_foreach['package']['iteration']++;
?>
                <li class="list-item">
                    <div class="cover">
                        <img src="<?php echo $this->_var['val']['activity_thumb']; ?>" alt="">
                        <span class="intro"><?php echo $this->_var['val']['act_name']; ?></span>
                    </div>
                    <div class="info">
                        <div class="info-p clearfix">
                            <div class="fl"><?php echo $this->_var['lang']['package_number']; ?>：<b class="red"><?php echo empty($this->_var['val']['package_number']) ? '1' : $this->_var['val']['package_number']; ?>件</b></div>
                            <div class="fr"><?php echo $this->_var['lang']['package_time']; ?>：<?php echo $this->_var['val']['start_time']; ?> ～ <?php echo $this->_var['val']['end_time']; ?></div>
                        </div>
                        <div class="info-slide clearfix">
                            <a href="javascript:;" class="prev"></a>
                            <a href="javascript:;" class="next"></a>
                            <div class="bd">
                                <ul>
                                    <?php $_from = $this->_var['val']['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['nogoods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nogoods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['nogoods']['iteration']++;
?>
                                    <li<?php if (($this->_foreach['nogoods']['iteration'] <= 1)): ?> class="g_first"<?php endif; ?><?php if (($this->_foreach['nogoods']['iteration'] == $this->_foreach['nogoods']['total'])): ?> class="g_last"<?php endif; ?>>
                                        <a href="<?php echo $this->_var['goods']['url']; ?>" class="img"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>"></a>
                                        <div class="price"><?php echo $this->_var['goods']['rank_price']; ?> X <?php echo $this->_var['goods']['goods_number']; ?></div>
                                    </li>
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="info-btn-wp">
                            <div class="fl">
                                <span class="price"><?php echo $this->_var['val']['package_price']; ?></span>
                                <del><?php echo $this->_var['val']['package_amounte']; ?></del>
                            </div>
                            <div class="fr">
                                <a href="javascript:addPackageToCart(<?php echo $this->_var['val']['act_id']; ?>)" class="pack-btn"><?php echo $this->_var['lang']['button_buy']; ?> &gt;</a>
                                <span class="red"><?php echo $this->_var['lang']['sheng']; ?><?php echo $this->_var['val']['saving']; ?></span>
                            </div>
                        </div>
                    </div>
                </li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
            <?php else: ?>
                <div class="no_records">
                    <i class="no_icon_two"></i>
                    <div class="no_info">
                        <h3><?php echo $this->_var['lang']['information_null']; ?></h3>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="hidden">
    <input name="confirm_type" id="confirm_type" type="hidden" value="3" />
    <input name="warehouse_id" id="warehouse_id" type="hidden" value="<?php echo $this->_var['region_id']; ?>" />
    <input name="area_id" id="area_id" type="hidden" value="<?php echo $this->_var['area_id']; ?>" />
    </div>
    <?php 
$k = array (
  'name' => 'user_menu_position',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
    <?php echo $this->fetch('library/page_footer.lbi'); ?>
    
    <?php echo $this->smarty_insert_scripts(array('files'=>'jquery.SuperSlide.2.1.1.js,common.js,parabola.js,cart_common.js,cart_quick_links.js')); ?>
    <script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/dsc-common.js"></script>
    <script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/jquery.purebox.js"></script>
    <script type="text/javascript">
	$(function(){
		//礼包商品左右滚动
		$(".package-list .info-slide").slide({effect: "left",vis: 4,scroll: 4,autoPage: true,mainCell: ".bd ul"});
	});	
    </script>
</body>
</html>
