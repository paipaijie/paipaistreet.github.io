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
    <div class="full-main-n">
        <div class="w w1200 relative">
            <?php echo $this->fetch('library/ur_here.lbi'); ?>
			<?php echo $this->fetch('library/goods_merchants_top.lbi'); ?>
        </div>
    </div>
	<div class="container">
    	<div class="w w1200">
        	<div class="product-info mt20">
            	<?php echo $this->fetch('library/goods_gallery.lbi'); ?>
                <div class="product-wrap">
                <form action="exchange.php?act=buy" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" onsubmit="return get_exchange();" >
                	<div class="name"><?php echo $this->_var['goods']['goods_style_name']; ?></div>
                    <?php if ($this->_var['goods']['goods_brief']): ?>
                    <div class="newp"><?php echo $this->_var['goods']['goods_brief']; ?></div>
                    <?php endif; ?>
                    <div class="activity-title">
                    	<div class="activity-type"><?php echo $this->_var['lang']['exchange_name']; ?></div>
                    </div>
                    <div class="summary">
                    	<div class="summary-price-wrap">
                        	<div class="s-p-w-wrap">
                                <div class="summary-item si-shop-price">
                                    <div class="si-tit"><?php echo $this->_var['lang']['integral']; ?></div>
                                    <div class="si-warp">
                                        <strong class="shop-price"><?php echo $this->_var['goods']['exchange_integral']; ?></strong>
                                    </div>
                                </div>
                                <div class="summary-item si-market-price">
                                    <div class="si-tit"><?php echo $this->_var['lang']['market_price']; ?></div>
                                    <div class="si-warp">
                                    	<?php if ($this->_var['goods']['market_integral']): ?>
                                    		<?php echo $this->_var['goods']['market_integral']; ?>&nbsp;<?php echo $this->_var['lang']['integral']; ?>
                                        <?php else: ?>
                                        	<?php echo $this->_var['goods']['market_price']; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="si-info">
                                    <div class="si-cumulative"><?php echo $this->_var['lang']['evaluate_count']; ?><em><?php echo $this->_var['goods']['comments_number']; ?></em></div>
                                    <div class="si-cumulative"><?php echo $this->_var['lang']['Sales_count']; ?><em><?php echo empty($this->_var['goods']['volume']) ? '0' : $this->_var['goods']['volume']; ?></em></div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="summary-basic-info">
                        	<div class="summary-item is-stock">
                                <div class="si-tit"><?php echo $this->_var['lang']['distribution_tit']; ?></div>
                                <div class="si-warp">
                                    <span class="initial-area">
                                        <?php if ($this->_var['adress']['city']): ?>
                                            <?php echo $this->_var['adress']['city']; ?>
                                        <?php else: ?>
                                            <?php echo $this->_var['basic_info']['city']; ?>
                                        <?php endif; ?> 
                                    </span>
                                    <span><?php echo $this->_var['lang']['zhi']; ?></span>
                                    <div class="store-selector">
                                        <div class="text-select" id="area_address" ectype="areaSelect"></div>
                                    </div>
                                    <div class="store-warehouse">
                                        <div class="store-prompt" id="isHas_warehouse_num"><?php echo $this->_var['lang']['isHas_warehouse_num']; ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="summary-item is-service">
                                <div class="si-tit"><?php echo $this->_var['lang']['service']; ?></div>
                                <div class="si-warp">
                                    <div class="fl"> 
                                    <?php if ($this->_var['goods']['user_id'] > 0): ?>
                                        <?php echo $this->_var['lang']['you']; ?> <a href="<?php echo $this->_var['goods']['store_url']; ?>" class="link-red" target="_blank"><?php echo $this->_var['goods']['rz_shopName']; ?></a> <?php echo $this->_var['lang']['After_sale_service']; ?>
                                    <?php else: ?>
                                        <?php echo $this->_var['lang']['you']; ?> <a href="javascript:void(0)" class="link-red"><?php echo $this->_var['goods']['rz_shopName']; ?></a> <?php echo $this->_var['lang']['After_sale_service']; ?>
                                    <?php endif; ?>
                                    </div>
                                    <div class="fl pl10" id="user_area_shipping"></div>
                                </div>
                            </div>
                            <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');if (count($_from)):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
?>
                            <?php if ($this->_var['spec']['values']): ?>
                            <div class="summary-item is-attr goods_info_attr" ectype="is-attr" data-type="<?php if ($this->_var['spec']['attr_type'] == 1): ?>radio<?php else: ?>checkeck<?php endif; ?>">
                                <div class="si-tit"><?php echo $this->_var['spec']['name']; ?></div>
                                <?php if ($this->_var['cfg']['goodsattr_style'] == 1): ?>
                                <div class="si-warp">
                                    <ul>
                                    <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');$this->_foreach['attrvalues'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['attrvalues']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
        $this->_foreach['attrvalues']['iteration']++;
?>  
                                    <?php if ($this->_var['spec']['is_checked'] > 0): ?>
                                    <li class="item <?php if ($this->_var['value']['checked'] == 1): ?> selected<?php endif; ?>" date-rev="<?php echo $this->_var['value']['img_site']; ?>" data-name="<?php echo $this->_var['value']['id']; ?>">
                                        <b></b>
                                        <a href="javascript:void(0);">
                                            <?php if ($this->_var['value']['img_flie']): ?>
                                            <img src="<?php echo $this->_var['value']['img_flie']; ?>" width="24" height="24" />
                                            <?php endif; ?>
                                            <i><?php echo $this->_var['value']['label']; ?></i>
                                            <input id="spec_value_<?php echo $this->_var['value']['id']; ?>" type="<?php if ($this->_var['spec']['attr_type'] == 2): ?>checkbox<?php else: ?>radio<?php endif; ?>" data-attrtype="<?php if ($this->_var['spec']['attr_type'] == 2): ?>2<?php else: ?>1<?php endif; ?>" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" autocomplete="off" class="hide" />
                                            <?php if ($this->_var['value']['checked'] == 1): ?>
                                            <script type="text/javascript">
                                                $(function(){
                                                    $("#spec_value_<?php echo $this->_var['value']['id']; ?>").prop("checked", true);
                                                });
                                            </script>
                                            <?php endif; ?>
                                        </a>
                                    </li>
                                    <?php else: ?>
                                    <li class="item <?php if ($this->_var['key'] == 0): ?> selected<?php endif; ?>">
                                        <b></b>
                                        <a href="javascript:void(0);" name="<?php echo $this->_var['value']['id']; ?>" class="noimg">
                                            <i><?php echo $this->_var['value']['label']; ?></i>
                                            <input id="spec_value_<?php echo $this->_var['value']['id']; ?>" type="<?php if ($this->_var['spec']['attr_type'] == 2): ?>checkbox<?php else: ?>radio<?php endif; ?>" data-attrtype="<?php if ($this->_var['spec']['attr_type'] == 2): ?>2<?php else: ?>1<?php endif; ?>" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" autocomplete="off" class="hide" /></a> 
                                            <?php if ($this->_var['key'] == 0): ?>
                                            <script type="text/javascript">
                                                $(function(){
                                                    $("#spec_value_<?php echo $this->_var['value']['id']; ?>").prop("checked", true);
                                                });
                                            </script>
                                            <?php endif; ?>                                           
                                        </a>
                                    </li>                                   
                                    <?php endif; ?>
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </ul>
                                </div>
                                <?php else: ?>
                                ...
                                <?php endif; ?>
                            </div>
                            <?php endif; ?>
                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            <div class="summary-item is-number">
                                <div class="si-tit"><?php echo $this->_var['lang']['number_to']; ?></div>
                                <div class="si-warp">
                                    <div class="amount-warp">
                                        <input class="text buy-num" id="quantity" ectype="quantity" value="1" name="number" defaultnumber="1">
                                        <div class="a-btn">
                                            <a href="javascript:void(0);" class="btn-add" ectype="btnAdd"><i class="iconfont icon-up"></i></a>
                                            <a href="javascript:void(0);" class="btn-reduce btn-disabled" ectype="btnReduce"><i class="iconfont icon-down"></i></a>
                                            <input type="hidden" name="perNumber" id="perNumber" ectype="perNumber" value="0">
                                            <input type="hidden" name="perMinNumber" id="perMinNumber" ectype="perMinNumber" value="1">
                                        </div>
                                    </div>
                                    <span><?php echo $this->_var['lang']['goods_inventory']; ?>&nbsp;<em id="goods_attr_num" ectype="goods_attr_num"></em>&nbsp;<?php if ($this->_var['goods']['goods_unit']): ?><?php echo $this->_var['goods']['goods_unit']; ?><?php else: ?><?php echo $this->_var['goods']['measure_unit']; ?><?php endif; ?></span>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="choose-btns ml60 clearfix">
                             <input type="hidden" value="<?php echo $this->_var['goods_id']; ?>" id="good_id" name="goods_id"/>
                             <input type="hidden" value="<?php echo $this->_var['user_id']; ?>" id="user_id" name="user_id"/>
                             <input type="hidden" value="<?php echo $this->_var['user']['payPoints']; ?>" name="payPoints" ectype="payPoints" />
                             <input type="hidden" value="<?php echo $this->_var['goods']['exchange_integral']; ?>" name="integral" ectype="exchange_integral" />
                             <input type="hidden" value="" name="goods_spec"/>
                             <input type="hidden" value="<?php echo $this->_var['cfg']['add_shop_price']; ?>" name="add_shop_price" ectype="add_shop_price" />
                             <input type="submit" value="<?php echo $this->_var['lang']['like_exchange']; ?>" class="button btn-append"/>
                        </div>
                    </div>
                </form>
                </div>
                <?php if ($this->_var['look_top']): ?>
                <div class="track">
                	<div class="track_warp">
                    	<div class="track-tit"><h3><?php echo $this->_var['lang']['look_and_see']; ?></h3><span></span></div>
                        <div class="track-con">
                            <ul>
                                <?php $_from = $this->_var['look_top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'look_top_0_70189400_1535056435');$this->_foreach['looktop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['looktop']['total'] > 0):
    foreach ($_from AS $this->_var['look_top_0_70189400_1535056435']):
        $this->_foreach['looktop']['iteration']++;
?>
                                <li>
                                    <a href="exchange.php?act=view&id=<?php echo $this->_var['look_top_0_70189400_1535056435']['goods_id']; ?>" target="_blank" title="<?php echo $this->_var['look_top_0_70189400_1535056435']['goods_name']; ?>"><img src="<?php echo $this->_var['look_top_0_70189400_1535056435']['goods_thumb']; ?>" width="140" height="140"><p class="price"><?php echo sub_str($this->_var['look_top_0_70189400_1535056435']['goods_name'],10); ?></p></a>
                                </li>
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </ul>
                        </div>
                        <div class="track-more">
                        	<a href="javascript:void(0);" class="sprite-up"><i class="iconfont icon-up"></i></a>
                            <a href="javascript:void(0);" class="sprite-down"><i class="iconfont icon-down"></i></a>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <div class="clear"></div>
            </div>
            <div class="goods-main-layout">
            	<div class="g-m-left">
                	<?php echo $this->fetch('library/goods_merchants.lbi'); ?>
                    <div class="g-main g-rank">
                        <div class="mc">
                        	<ul class="mc-tab">
                            	<li class="curr"><?php echo $this->_var['lang']['is_new']; ?></li>
                                <li><?php echo $this->_var['lang']['Recommend']; ?></li>
                                <li><?php echo $this->_var['lang']['Selling']; ?></li>
                            </ul>
                        	<div class="mc-content">
                                
                                <?php echo $this->fetch('library/recommend_new_goods.lbi'); ?>
                                

                                
                                <?php echo $this->fetch('library/recommend_best_goods.lbi'); ?>
                                

                                
                                <?php echo $this->fetch('library/recommend_hot_goods.lbi'); ?>
                                
                            </div>
                        </div>
                    </div>
                    <?php if ($this->_var['related_goods']): ?>
                    <div class="g-main g-history">
                    	<div class="mt">
                        	<h3><?php echo $this->_var['lang']['user_love']; ?></h3>
                        </div>
                        <div class="mc">
                        	<div class="mc-warp">
                            	<ul>
                                	<?php $_from = $this->_var['related_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_70189400_1535056435');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_70189400_1535056435']):
?>
                                    <li>
                                    	<div class="p-img"><a href="<?php echo $this->_var['goods_0_70189400_1535056435']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['goods_0_70189400_1535056435']['goods_thumb']; ?>" width="170" height="170"></a></div>
                                        <div class="p-lie">
                                        	<div class="p-price">
                                            <?php if ($this->_var['goods_0_70189400_1535056435']['promote_price'] != ''): ?>
                                                <?php echo $this->_var['goods_0_70189400_1535056435']['formated_promote_price']; ?>
                                            <?php else: ?>
                                                <?php echo $this->_var['goods_0_70189400_1535056435']['shop_price']; ?>
                                            <?php endif; ?>
                                            </div>
                                            <div class="p-comm"><i class="iconfont icon-comment"></i><div class="p-c-comm">4</div></div>
                                        </div>
                                    </li>
                                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="g-m-detail">
                	<div class="gm-tabbox" ectype="gm-tabs">
                    	<ul class="gm-tab">
                        	<li class="curr" ectype="gm-tab-item"><?php echo $this->_var['lang']['Product_details']; ?></li>
                            <?php if ($this->_var['properties']): ?><li ectype="gm-tab-item-spec"><?php echo $this->_var['lang']['specification']; ?></li><?php endif; ?>
                            <li ectype="gm-tab-item"><?php echo $this->_var['lang']['user_comment']; ?>（<em class="ReviewsCount"><?php echo $this->_var['comment_all']['allmen']; ?></em>）</li>
                            <li ectype="gm-tab-item"><?php echo $this->_var['lang']['discuss_user']; ?></li>
                        </ul>
                        <div class="extra"></div>
                        <div class="gm-tab-qp-bort" ectype="qp-bort"></div>
                    </div>
                    <div class="gm-floors" ectype="gm-floors">
                        <div class="gm-f-item gm-f-details" ectype="gm-item">
                            <div class="gm-title">
                                <h3><?php echo $this->_var['lang']['Product_details']; ?></h3>
                            </div>
                            <?php echo $this->_var['goods']['goods_desc']; ?>
                        </div>
                        <?php if ($this->_var['properties']): ?>
                        <div class="gm-f-item gm-f-parameter" ectype="gm-item" id="product-detail" style="display:none;">
                            <div class="gm-title">
                                <h3><?php echo $this->_var['lang']['specification']; ?></h3>
                            </div>
                            <div class="Ptable">
                                <?php $_from = $this->_var['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'property_group');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['property_group']):
?>
                                <div class="Ptable-item">
                                    <h3><?php echo $this->_var['key']; ?></h3>
                                    <dl>
                                        <?php $_from = $this->_var['property_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'property');if (count($_from)):
    foreach ($_from AS $this->_var['property']):
?>
                                        <dt><?php echo htmlspecialchars($this->_var['property']['name']); ?></dt>
                                        <dd title="<?php echo $this->_var['property']['value']; ?>"><?php echo $this->_var['property']['value']; ?></dd>
                                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                    </dl>
                                </div>
                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </div>
                        </div>
                        <?php endif; ?>
                        <div class="gm-f-item gm-f-comment" ectype="gm-item">
                            <div class="gm-title">
                                <h3><?php echo $this->_var['lang']['comment_sunburn']; ?></h3>
                                <?php 
$k = array (
  'name' => 'goods_comment_title',
  'goods_id' => $this->_var['goods']['goods_id'],
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
                            </div>
                            <div class="gm-warp">
                                <div class="praise-rate-warp">
                                    <div class="rate">
                                        <strong><?php echo $this->_var['comment_all']['goodReview']; ?></strong>
                                        <span class="rate-span">
                                            <span class="tit"><?php echo $this->_var['lang']['Rate_praise']; ?></span>
                                            <span class="bf">%</span>
                                        </span>
                                    </div>
                                    <div class="actor-new">
                                        <dl>
                                            <?php $_from = $this->_var['goods']['impression_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'tag');if (count($_from)):
    foreach ($_from AS $this->_var['tag']):
?>
                                            <dd><?php echo $this->_var['tag']['txt']; ?>(<?php echo $this->_var['tag']['num']; ?>)</dd>
                                            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                        </dl>
                                    </div>
                                </div>
                                <div class="com-list-main">
                                <?php echo $this->fetch('library/comments.lbi'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="gm-f-item gm-f-tiezi" ectype="gm-item">
                            <?php 
$k = array (
  'name' => 'goods_discuss_title',
  'goods_id' => $this->_var['goods']['goods_id'],
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
                            <div class="table" id='discuss_list_ECS_COMMENT'>
                                <?php echo $this->fetch('library/comments_discuss_list1.lbi'); ?>
                            </div>
                            <input type="hidden" value="<?php echo $this->_var['goods_id']; ?>" id="good_id" name="good_id">
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="rection">
                	<div class="ftit"><h3><?php echo $this->_var['lang']['Recent_browse']; ?></h3></div>
                    <ul>
                    <?php $_from = $this->_var['history_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_70189400_1535056435');$this->_foreach['his_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['his_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_70189400_1535056435']):
        $this->_foreach['his_goods']['iteration']++;
?>
                    <?php if ($this->_foreach['his_goods']['iteration'] <= 5): ?>
                    	<li>
                        	<div class="p-img"><a href="<?php echo $this->_var['goods_0_70189400_1535056435']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['goods_0_70189400_1535056435']['goods_thumb']; ?>" width="232" height="232"></a></div>
                            <div class="p-name"><a href="<?php echo $this->_var['goods_0_70189400_1535056435']['url']; ?>" target="_blank"><?php echo $this->_var['goods_0_70189400_1535056435']['short_name']; ?></a></div>
                            <div class="p-price">
                            <?php if ($this->_var['releated_goods_data']['promote_price'] != ''): ?>
                              <?php echo $this->_var['goods_0_70189400_1535056435']['formated_promote_price']; ?>
                          <?php else: ?>
                              <?php echo $this->_var['goods_0_70189400_1535056435']['shop_price']; ?>
                          <?php endif; ?>
                            </div>
                        </li>
                    <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </ul>
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
    
    <?php echo $this->smarty_insert_scripts(array('files'=>'jquery.SuperSlide.2.1.1.js,common.js,magiczoomplus.js,cart_common.js,cart_quick_links.js')); ?>
    <script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/dsc-common.js"></script>
    <script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/jquery.purebox.js"></script>
    <script type="text/javascript">
		//商品详情悬浮框
		goods_desc_floor();
		
		//右侧看了又看上下滚动
		$(".track_warp").slide({mainCell:".track-con ul",effect:"top",pnLoop:false,autoPlay:false,autoPage:true,prevCell:".sprite-up",nextCell:".sprite-down",vis:3});
		
		//左侧新品 热销 推荐排行切换
		$(".g-rank").slide({titCell:".mc-tab li",mainCell:".mc-content",titOnClassName:"curr"});
		
		//积分商品js
        var goodsId = <?php echo $this->_var['goods']['goods_id']; ?>;
        var goods_id = <?php echo $this->_var['goods']['goods_id']; ?>;
		var isReturn = false;
        
		var add_shop_price = $("*[ectype='add_shop_price']").val();
		
        /**
         * 点选可选属性或改变数量时修改商品价格的函数
         */
        function changePrice(onload){
			var qty = $("*[ectype='quantity']").val();
			var goods_attr_id = '';
			var goods_attr = '';
			var attr_id = '';
			var attr = '';
			var region_id = $(":input[name='region_id']").val();
		  	var area_id = $(":input[name='area_id']").val();
			
			if(!region_id){
			   region_id = <?php echo empty($this->_var['region_id']) ? '0' : $this->_var['region_id']; ?>;
		    }
		   
		    if(!area_id){
			   area_id = <?php echo empty($this->_var['area_id']) ? '0' : $this->_var['area_id']; ?>;
		    }
		  
			goods_attr_id = getSelectedAttributes(document.forms['ECS_FORMBUY']);
			
			if(onload != 'onload'){
				if(add_shop_price == 0){
					attr_id = getSelectedAttributesGroup(document.forms['ECS_FORMBUY']);
					goods_attr = '&goods_attr=' + attr_id;
				}
				Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + goods_attr_id + goods_attr + '&number=' + qty + '&warehouse_id=' + region_id + '&area_id=' + area_id, changePriceResponse, 'GET', 'JSON');
			}else{
				attr = '&attr=' + goods_attr_id;
				Ajax.call('goods.php', 'act=price&id=' + goodsId + attr + '&number=' + qty + '&warehouse_id=' + region_id + '&area_id=' + area_id + '&onload=' + onload, changePriceResponse, 'GET', 'JSON');
			}
		}
        /**
         * 接收返回的信息
         */
        function changePriceResponse(res)
        {
          if (res.err_msg.length > 0)
          {
            var message = res.err_msg;
			
			pbDialog(message,"",0);
          }
          else
          {
            
            document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;

            //ecmoban模板堂 --zhuo satrt
            if (document.getElementById('goods_attr_num')){
			  	$("*[ectype='goods_attr_num']").html(res.attr_number);
		  		$("*[ectype='perNumber']").val(res.attr_number);
            }
            
            if(res.err_no == 2){
                $('#isHas_warehouse_num').html(shiping_prompt);
            }else{
                if (document.getElementById('isHas_warehouse_num')){
                  var isHas;
                  if(res.attr_number > 0){
                      $('#sold_out').remove();
					  $('input.btn-append').show();
                      isHas = '<strong>'+json_languages.Have_goods+'</strong><i style="font-size:12px; font-weight:normal">，'+json_languages.Deliver_back_order+'</i>';
                  }else{
                      isHas = '<strong>'+json_languages.No_goods+'</strong>，'+json_languages.goods_over;
                        $('input.btn-append').hide();
                        if(!document.getElementById('sold_out')){
                            $('.choose-btns').append('<a id="sold_out" class="btn-invalid" href="javascript:;">暂时缺货</a>')
                        }
                        
                        <?php if ($this->_var['goods']['review_status'] >= 3): ?>
                            if(!document.getElementById('quehuo')){
                                $('div#compareLink').before('<a id="quehuo" href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>);"></a>');
                            }
                        <?php endif; ?>
                  }
                  document.getElementById('isHas_warehouse_num').innerHTML = isHas;  
                }
            }
            //ecmoban模板堂 --zhuo end         
          }
		  if(res.onload == "onload"){
			quantity();
		  }
        }
    </script>
    <?php 
$k = array (
  'name' => 'goods_delivery_area_js',
  'area' => $this->_var['area'],
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
</body>
</html>
