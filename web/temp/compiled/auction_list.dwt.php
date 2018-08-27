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

<body>
    <?php echo $this->fetch('library/page_header_common.lbi'); ?>
    <div class="content">
        <div class="act-banner"><?php 
$k = array (
  'name' => 'get_adv_child',
  'ad_arr' => $this->_var['activity_top_banner'],
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></div>
        <div class="auction-cate">
            <div class="w w1200">
                <a href="auction.php?cat_top_id=0" <?php if ($this->_var['cat_top_id'] == 0): ?>class="curr"<?php endif; ?>><?php echo $this->_var['lang']['all_auction']; ?></a>
                <?php $_from = $this->_var['cat_top_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
                <a href="auction.php?cat_top_id=<?php echo $this->_var['cat']['cat_id']; ?>" <?php if ($this->_var['cat_top_id'] == $this->_var['cat']['cat_id']): ?>class="curr"<?php endif; ?>><?php echo $this->_var['cat']['cat_name']; ?></a>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </div>
        </div>
        <div class="auction-main">
            <div class="w w1200">
                <div class="mod-list-sort">
                    <div class="sort-t"><?php echo $this->_var['lang']['sort']; ?>：</div>
                    <div class="sort-l">
                        <a href="auction.php?sort=act_id&order=<?php if ($this->_var['pager']['search']['sort'] == 'act_id' && $this->_var['pager']['search']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>" class="sort-item <?php if ($this->_var['pager']['search']['sort'] == 'act_id'): ?>curr<?php endif; ?>"><?php echo $this->_var['lang']['default']; ?><i class="iconfont <?php if ($this->_var['pager']['search']['sort'] == 'act_id' && $this->_var['pager']['search']['order'] == 'DESC'): ?>icon-down1<?php else: ?>icon-up1<?php endif; ?>"></i></a>
                        <a href="auction.php?sort=start_time&order=<?php if ($this->_var['pager']['search']['sort'] == 'start_time' && $this->_var['pager']['search']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>" class="sort-item <?php if ($this->_var['pager']['search']['sort'] == 'start_time'): ?>curr<?php endif; ?>"><?php echo $this->_var['lang']['start_time']; ?><i class="iconfont <?php if ($this->_var['pager']['search']['sort'] == 'start_time' && $this->_var['pager']['search']['order'] == 'DESC'): ?>icon-down1<?php else: ?>icon-up1<?php endif; ?>"></i></a>
                        <a href="auction.php?sort=end_time&order=<?php if ($this->_var['pager']['search']['sort'] == 'end_time' && $this->_var['pager']['search']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>" class="sort-item <?php if ($this->_var['pager']['search']['sort'] == 'end_time'): ?>curr<?php endif; ?>"><?php echo $this->_var['lang']['coming_end']; ?><i class="iconfont <?php if ($this->_var['pager']['search']['sort'] == 'end_time' && $this->_var['pager']['search']['order'] == 'DESC'): ?>icon-down1<?php else: ?>icon-up1<?php endif; ?>"></i></a>
                    </div>
                    <form method="GET" class="sort" name="listform">
                        <div class="f-search">
                            <input name="keywords" type="text" class="text" value="<?php echo $this->_var['pager']['search']['keywords']; ?>" placeholder="<?php echo $this->_var['lang']['goods_name']; ?>" />
                            <a href="javascript:void(0);" class="btn sc-redBg-btn ui-btn-submit"><?php echo $this->_var['lang']['assign']; ?></a>
                        </div>
                        <input type="hidden" name="page" value="<?php echo $this->_var['pager']['page']; ?>" />
                        <input type="hidden" name="sort" value="<?php echo $this->_var['pager']['search']['sort']; ?>" />
                        <input type="hidden" name="order" value="<?php echo $this->_var['pager']['search']['order']; ?>" />
                    </form>
                </div>
                <div class="auction-list">
                <?php if ($this->_var['auction_list']): ?>
                    <ul class="clearfix" ectype="items">
                        <?php $_from = $this->_var['auction_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'auction');if (count($_from)):
    foreach ($_from AS $this->_var['auction']):
?>
                        <li>
                            <a href="<?php echo $this->_var['auction']['url']; ?>" class="img" target="_blank"><img src="<?php echo $this->_var['auction']['goods_thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['auction']['act_name']); ?>" title="<?php echo htmlspecialchars($this->_var['auction']['act_name']); ?>"></a>
                            <div class="info">
                                <a href="<?php echo $this->_var['auction']['url']; ?>" class="name" target="_blank" title="<?php echo htmlspecialchars($this->_var['auction']['goods_name']); ?>"><?php echo htmlspecialchars($this->_var['auction']['act_name']); ?></a>
                                <div class="desc">
                                    <p>
                                        <span><?php echo $this->_var['lang']['rz_shopName']; ?>：</span>
                                        <?php echo $this->_var['auction']['rz_shopName']; ?>
                                    </p>
                                    <p>
                                        <span class="fr red"><?php echo $this->_var['auction']['count']; ?><?php echo $this->_var['lang']['au_number']; ?></span>
                                        <span><?php echo $this->_var['lang']['residual_time']; ?>：</span>
                                        <span class="<?php if ($this->_var['auction']['status_no'] == 1): ?>lefttime<?php endif; ?>" data-time="<?php echo $this->_var['auction']['end_time']; ?>">
                                            <span class="days">00</span>
                                            <em>:</em>
                                            <span class="hours">00</span>
                                            <em>:</em>
                                            <span class="minutes">00</span>
                                            <em>:</em>
                                            <span class="seconds">00</span>
                                        </span>
                                    </p>
                                    <div class="timebar"><i style="width: 80%;"></i></div>
                                </div>
                                <div class="btn-wp">
                                    <div class="price"><?php echo $this->_var['auction']['formated_start_price']; ?></div>
                                    <?php if ($this->_var['auction']['status_no'] == 1): ?>
                                    <a href="<?php echo $this->_var['auction']['url']; ?>" target="_blank" class="au-btn"><em></em><?php echo $this->_var['lang']['me_bid']; ?><s></s></a>
                                    <?php elseif ($this->_var['auction']['status_no'] == 2): ?>
                                        <?php if ($this->_var['auction']['is_winner']): ?>
                                            <a href="<?php echo $this->_var['auction']['url']; ?>" target="_blank" class="au-btn bid_wait"><em></em><?php echo $this->_var['lang']['button_buy']; ?><s></s></a>
                                        <?php else: ?>
                                            <a href="<?php echo $this->_var['auction']['url']; ?>" target="_blank" class="au-btn bid_end"><em></em><?php echo $this->_var['lang']['au_end']; ?><s></s></a>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                           </div>
                        </li> 
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </ul>
                    
                    <?php if ($this->_var['category_load_type']): ?>
                    <div class="floor-loading goods-floor-loading" ectype="floor-loading"><div class="floor-loading-warp"><img src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/images/load/loading.gif"></div></div>
                    <?php else: ?>
                	
                	<?php echo $this->fetch('library/pages.lbi'); ?>
                    
                    <?php endif; ?>
                <?php else: ?>
                    <div class="no_records no_records_tc">
                        <i class="no_icon_two"></i>
                        <div class="no_info">
                            <h3><?php echo $this->_var['lang']['information_null']; ?></h3>
                        </div>
                    </div>
                <?php endif; ?>
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
    
    <?php echo $this->smarty_insert_scripts(array('files'=>'jquery.yomi.js,cart_common.js,cart_quick_links.js')); ?>
    <script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/dsc-common.js"></script>
    <script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/jquery.purebox.js"></script>
    <?php if ($this->_var['category_load_type']): ?><script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/asyLoadfloor.js"></script><?php endif; ?>
    <script type="text/javascript">
	$(function(){
		//倒计时
		$(".lefttime").each(function(){
			$(this).yomi();
		});
		
		<?php if ($this->_var['category_load_type']): ?>
		var query_string = '<?php echo $this->_var['query_string']; ?>';
		$.itemLoad('.auction-list','','',query_string,0);
		<?php endif; ?>
	});
    </script>
</body>
</html>
