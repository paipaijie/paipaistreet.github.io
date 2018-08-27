<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<?php if ($this->_var['brand']['brand_desc']): ?>
<meta name="Description" content="<?php echo $this->_var['brand']['brand_desc']; ?>" />
<?php else: ?>
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />
<?php endif; ?>

<title><?php echo $this->_var['page_title']; ?></title>



<link rel="shortcut icon" href="favicon.ico" />
<?php echo $this->fetch('library/js_languages_new.lbi'); ?>
</head>

<body>
    <?php echo $this->fetch('library/page_header_common.lbi'); ?>
    <div class="content">
        <div class="brand-home-top" style="<?php if ($this->_var['brand']['brand_bg']): ?>background:url(data/brandbg/<?php echo $this->_var['brand']['brand_bg']; ?>) center center no-repeat;<?php else: ?>background:url(themes/ecmoban_dsc2017/images/brand_cat_bg.jpg) center center no-repeat;<?php endif; ?>">
        	<div class="w w1200">
                <div class="attention-rate">
                    <div class="brand-logo"><img src="data/brandlogo/<?php echo $this->_var['brand']['brand_logo']; ?>"></div>
                    <div class="follow-info">
                        <span class="follow-sum"><em id="collect_count"><?php echo $this->_var['brand']['collect_count']; ?></em>人&nbsp;&nbsp;<?php echo $this->_var['lang']['follow']; ?></span>
                        <div class="go-follow" data-bid="<?php echo $this->_var['brand_id']; ?>" ectype="coll_brand"><?php if ($this->_var['brand']['is_collect'] > 0): ?><i class="iconfont icon-zan-alts"></i><span ectype="follow_span"><?php echo $this->_var['lang']['follow_yes']; ?></span><?php else: ?><i class="iconfont icon-zan-alt"></i><span ectype="follow_span"><?php echo $this->_var['lang']['follow']; ?></span><?php endif; ?></div>
                    </div>
                </div>
                <div class="brand-cate-info">
                	<div class="title">
                    	<h3><?php echo $this->_var['lang']['brand_desc']; ?></h3>
                    </div>
                    <div class="brand_desc" title="<?php echo $this->_var['brand']['brand_desc']; ?>"><?php if ($this->_var['brand']['brand_desc']): ?><?php echo sub_str($this->_var['brand']['brand_desc'],240); ?><?php else: ?><?php echo $this->_var['lang']['brand_desc_notic']; ?><?php endif; ?></div>
                </div>
            </div>
        </div>
        <div class="brand-main">
            <div class="w w1200" ectype="goodslist">
            	<div class="brand-section">
                    <div class="bl-title"><h2><?php echo $this->_var['lang']['goods_list']; ?><i></i></h2><?php if ($this->_var['cat_id']): ?><a href="category.php?id=<?php echo $this->_var['cat_id']; ?>&brand=<?php echo $this->_var['brand_id']; ?>" class="more ftx-05"><?php echo $this->_var['lang']['see_more']; ?>></a><?php endif; ?></div>
                    <div class="bl-content">
                        <div class="bd">
                            <ul>
                                <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods']['iteration']++;
?>
                                <?php if ($this->_foreach['goods']['iteration'] <= 100): ?>
                                <li>
                                    <div class="p-img"><a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['goods']['goods_thumb']; ?>"></a></div>
                                    <div class="p-price"><?php echo $this->_var['goods']['shop_price']; ?></div>
                                    <div class="p-name"><a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>"><?php echo $this->_var['goods']['goods_name']; ?></a></div>
                                </li>								
                                <?php endif; ?>
                                <?php endforeach; else: ?>
                                <li class="notic">
                                	<div class="no_records no_records_tc">
                                        <i class="no_icon_two"></i>
                                        <div class="no_info">
                                            <h3><?php echo $this->_var['lang']['brand_goods_notic']; ?></h3>
                                        </div>
                                    </div>
                                </li>
                                <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php echo $this->fetch('library/pages.lbi'); ?>
		<input type="hidden" name="user_id" value="<?php echo empty($this->_var['user_id']) ? '0' : $this->_var['user_id']; ?>">
		<input type="hidden" name="brand_id" value="<?php echo empty($this->_var['brand_id']) ? '0' : $this->_var['brand_id']; ?>">
    </div>
	<?php 
$k = array (
  'name' => 'user_menu_position',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
    <?php echo $this->fetch('library/page_footer.lbi'); ?>
    
    <?php echo $this->smarty_insert_scripts(array('files'=>'jquery.SuperSlide.2.1.1.js,parabola.js,cart_common.js,cart_quick_links.js')); ?>
    <script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/dsc-common.js"></script>
    <script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/jquery.purebox.js"></script>
    <script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/asyLoadfloor.js"></script>
	<script type="text/javascript">
	var length = $(".best-list .bd ul").find("li").length;
	if(length>1){
		$(".best-list").slide({mainCell: '.bd ul',titCell: '.hd ul',effect: 'left',pnLoop: false,vis: 5,scroll: 5,autoPage: '<li></li>'});
	}
	</script>
</body>
</html>
