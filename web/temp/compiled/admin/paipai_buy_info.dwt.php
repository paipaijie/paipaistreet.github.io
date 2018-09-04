<!doctype html>
<html>

	<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

	<body class="iframe_body">
		<div class="warpper">
			<div class="title">
				<a href="_buy.php?act=list" class="s-back"><?php echo $this->_var['lang']['back']; ?></a><?php echo $this->_var['lang']['promotion']; ?> - <?php echo $this->_var['ur_here']; ?></div>
			<div class="content">

				<!--操作提示start  -->
				<div class="explanation" id="explanation">
					<div class="ex_tit"><i class="sc_icon"></i>
						<h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
					<ul>
						<li><?php echo $this->_var['lang']['operation_prompt_content_common']; ?></li>
						<li><?php echo $this->_var['lang']['operation_prompt_content']['info']['0']; ?></li>
						<li><?php echo $this->_var['lang']['operation_prompt_content']['info']['1']; ?></li>
						<li><?php echo $this->_var['lang']['operation_prompt_content']['info']['2']; ?></li>
					</ul>
				</div>
				<!--操作提示end  -->

				<div class="flexilist">

					<div class="common-content">

						<div class="mian-info">
							
							<form method="post" action="paipai_buy.php?act=insert_update" name="theForm" id="group_buy_form">

								<div class="switch_info">
									<!--产品搜索start  -->
									<?php if (! $this->_var['group_buy']['ppj_staus']): ?>

									<div class="goods_search_div bor_bt_das">

										<div class="search_select">
											<div class="categorySelect">
												<div class="selection">
													<input type="text" name="category_name" id="category_name" class="text w250 valid" value="<?php echo $this->_var['lang']['select_cat']; ?>" autocomplete="off" readonly data-filter="cat_name" />
													<input type="hidden" name="category_id" id="category_id" value="0" data-filter="cat_id" />
												</div>
												<div class="select-container" style="display:none;">
													<?php echo $this->fetch('library/filter_category.lbi'); ?>
												</div>
											</div>
										</div>
										
										

										<div class="search_select">
											<div class="brandSelect">
												<div class="selection">
													<input type="text" name="brand_name" id="brand_name" class="text w120 valid" value="<?php echo $this->_var['lang']['select_barnd']; ?>" autocomplete="off" readonly data-filter="brand_name" />
													<input type="hidden" name="brand_id" id="brand_id" value="0" data-filter="brand_id" />
												</div>
												<div class="brand-select-container" style="display:none;">
													<?php echo $this->fetch('library/filter_brand.lbi'); ?>
												</div>
											</div>
										</div>

										<input type="hidden" name="ru_id" value="<?php echo $this->_var['ru_id']; ?>" />
										
										<input type="text" name="keyword"  class="text w150" placeholder=<?php echo $this->_var['lang']['input_keywords']; ?> data-filter="keyword" autocomplete="off" />
										
	<a href="javascript:void(0);" class="btn btn30" onclick="searchGoods()"><i class="icon icon-search"></i><?php echo $this->_var['lang']['search_word']; ?></a>
									</div>

									<?php endif; ?>
									<!--产品搜索end  -->
									
									
									<!--字段详情start  -->
									<div class="items">
										
										<!--字段1start   -->
										<div class="item">
											<div class="label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['label_goods_name']; ?></div>
											
											<div class="label_value">
												
												<div id="goods_id" class="imitate_select select_w320">
													<div class="cite"><?php if ($this->_var['group_buy']['ppj_id']): ?><?php echo $this->_var['group_buy']['ppj_name']; ?><?php else: ?><?php echo $this->_var['lang']['please_select']; ?><?php endif; ?></div>
													<?php if (! $this->_var['group_buy']['ppj_staus']): ?>
													<ul>
														<li class="li_not"><?php echo $this->_var['lang']['please_search_goods']; ?></li>
													</ul>
													<?php endif; ?>
													<input name="goods_id" type="hidden" value="<?php if ($this->_var['group_buy']['ppj_id']): ?><?php echo $this->_var['group_buy']['goods_id']; ?><?php endif; ?>" id="goods_id_val">
												</div>
												
												<div class="form_prompt"></div>
											</div>
											
										</div>
										<!--字段1end  -->

										<div class="item">
											<div class="label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['label_start_end_date']; ?></div>
											<div class="label_value text_time">
												<input type="text" class="text mr0" name="start_time" <?php if (! $this->_var['group_buy']['ppj_staus']): ?>id="start_time"<?php endif; ?> value="<?php echo $this->_var['group_buy']['start_time']; ?>" autocomplete="off" readonly>
												<span class="bolang">&nbsp;&nbsp;~&nbsp;&nbsp;</span>
												<input type="text" class="text" name="end_time" id="end_time" value="<?php echo $this->_var['group_buy']['end_time']; ?>" autocomplete="off" readonly>
												<div class="notic"><?php echo $this->_var['lang']['notice_start_time']; ?></div>
												<div class="form_prompt"></div>
											</div>
										</div>
										
										<!--<div class="item">
											<div class="label">期数</div>
											<div class="label_value"><input name="ppj_no" type="text" id="ppj_no" value="<?php echo empty($this->_var['group_buy']['ppj_no']) ? '0' : $this->_var['group_buy']['ppj_no']; ?>" class="text" autocomplete="off" <?php if ($this->_var['group_buy']['status']): ?>readonly<?php endif; ?>/>
												<div class="form_prompt"></div>
											</div>
										</div>-->

										<!--{保证金}-->
										<div class="item">
											<div class="label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['label_deposit']; ?></div>   
											<div class="label_value">
												<input name="ppl_margin_fee" type="text" id="ppl_margin_fee" value="<?php echo $this->_var['group_buy']['ppj_margin_fee']; ?>" class="text" autocomplete="off"/>
												<div class="notic"><?php echo $this->_var['lang']['notice_goods_deposit']; ?></div>
												<div class="form_prompt"></div>
											</div>
										</div>
										
										<!-- <div class="item">
											<div class="label"><?php echo $this->_var['lang']['label_deposit']; ?></div>
											<div class="label_value"><input name="ppl_margin_fee" type="text" id="ppl_margin_fee" value="<?php echo empty($this->_var['group_buy']['ppj_margin_fee']) ? '0' : $this->_var['group_buy']['ppj_margin_fee']; ?>" class="text" autocomplete="off" <?php if ($this->_var['group_buy']['staus']): ?>readonly<?php endif; ?>/>
												<div class="notic"><?php echo $this->_var['lang']['notice_restrict_baozhenngjin']; ?></div>
												<div class="form_prompt"></div>
											</div>
										</div> -->

										<div class="item">
											<div class="label"><?php echo $this->_var['lang']['require_field']; ?>起拍价：</div>
											<div class="label_value">
												<input name="ppj_start_fee" type="text" id="ppj_start_fee" value="<?php echo $this->_var['group_buy']['ppj_start_fee']; ?>" class="text" autocomplete="off" <?php if ($this->_var['group_buy']['ppj_staus']): ?>readonly<?php endif; ?>/>
												<?php if ($this->_var['group_buy']['ppj_staus']): ?><div class="notic" style="color:red"><?php echo $this->_var['lang']['deposit_not_edit']; ?></div><?php endif; ?>
												<div class="form_prompt"></div>
											</div>
										</div>

										
										
										<div class="item">
											<div class="label">最低成交价：</div>
											<div class="label_value"><input name="ppj_buy_fee" type="text" id="ppj_buy_fee" value="<?php echo empty($this->_var['group_buy']['ppj_buy_fee']) ? '0' : $this->_var['group_buy']['ppj_buy_fee']; ?>" class="text" autocomplete="off"/>
												<div class="form_prompt"></div>
											</div>
										</div>
										
										<div class="item">
											<div class="label"><?php echo $this->_var['lang']['label_restrict_amount']; ?></div>
											<div class="label_value">
												<input type="text" name="restrict_amount" value="<?php echo empty($this->_var['group_buy']['goods_count']) ? '0' : $this->_var['group_buy']['goods_count']; ?>" class="text" autocomplete="off" />
												<div class="notic"><?php echo $this->_var['lang']['notice_restrict_amount']; ?></div>
												<div class="form_prompt"></div>
											</div>
										</div>
										
										
										<div class="item">
											<div class="label"><?php echo $this->_var['lang']['label_gift_integral']; ?></div>
											
											<div class="label_value">
												<input type="text" name="gift_integral" value="<?php echo empty($this->_var['group_buy']['gift_integral']) ? '0' : $this->_var['group_buy']['gift_integral']; ?>" class="text" autocomplete="off" />
												<div class="form_prompt"></div>
											</div>
										</div>
										
										<div class="item">
											<div class="label">当前价格：</div>
											<div class="label_value">
											<div class="" id="ppj_now_fee"><?php echo empty($this->_var['group_buy']['ppj_now_fee']) ? '0' : $this->_var['group_buy']['ppj_now_fee']; ?></div>									
											<div class="form_prompt">产品当前已拍到的价格</div>
											</div>	
										</div>
										
										<div class="item">
											<div class="label"><?php echo $this->_var['lang']['lab_market_price']; ?></div>
											<div class="label_value" id="market_price"><?php echo empty($this->_var['group_buy']['market_price']) ? '0' : $this->_var['group_buy']['market_price']; ?> 拍拍的价格不得高于此价格</div>	
																					
										</div>
										<div class="item">
										    <div class="label"><?php echo $this->_var['lang']['lab_cost_price']; ?></div>
											<div class="label_value" id="cost_price"><?php echo empty($this->_var['group_buy']['cost_price']) ? '0' : $this->_var['group_buy']['cost_price']; ?> 保证金必须大于批发价</div>	
										</div>
										<!--
                                        	作者：offline
                                        	时间：2018-08-02
                                        	描述：阶梯价格
                                        -->
										<div class="item">
											<div class="label"><?php echo $this->_var['lang']['require_field']; ?><?php echo $this->_var['lang']['label_price_ladder']; ?></div>
											<div class="label_value">
												<table class="table_div table_heng">
													<tr class="first_tr">
														<td class="first_td w70"><?php echo $this->_var['lang']['notice_ladder_amount']; ?></td>
														<?php $_from = $this->_var['group_buy']['price_ladder']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
														<td><input type="text" name="ladder_amount[]" value="<?php echo $this->_var['item']['amount']; ?>" class="text w50" autocomplete="off" /></td>
														<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
														<td class="last_td" rowspan="2">
															<a href="javascript:void(0);" class="addTd" onClick="add_clonetd_two(this,false);"></a>
														</td>
													</tr>
													<tr>
														<td class="first_td"><?php echo $this->_var['lang']['notice_ladder_price']; ?></td>
														<?php $_from = $this->_var['group_buy']['price_ladder']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
														<td><input type="text" name="ladder_price[]" value="<?php echo $this->_var['item']['price']; ?>" ectype="checkedPrice" class="text w50" autocomplete="off" /></td>
														<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
													</tr>
												</table>
											</div>
										</div>
										
										<!---阶梯价格 结束  -->
										
										
										<div class="item">
											<div class="label">交易匹配成功支付时间：</div>
											<div class="label_value">
												<input type="text" name="ppj_startpay_time" value="<?php echo empty($this->_var['group_buy']['ppj_startpay_time']) ? '10' : $this->_var['group_buy']['ppj_startpay_time']; ?>" class="text" autocomplete="off" />
												<div class="notic">分钟为单位</div>
												<div class="form_prompt"></div>
											</div>
										</div>
										
										<div class="item">
											<div class="label">活动结束后支付时间：</div>
											<div class="label_value">
												<input type="text" name="ppj_endtapy_time" value="<?php echo empty($this->_var['group_buy']['ppj_endtapy_time']) ? '10' : $this->_var['group_buy']['ppj_endtapy_time']; ?>" class="text" autocomplete="off" />
												<div class="notic">分钟为单位</div>
												<div class="form_prompt"></div>
											</div>
										</div>
										
										
										<div class="item">
											<div class="label"><?php echo $this->_var['lang']['label_desc']; ?></div>
											<div class="label_value">
												<textarea name="act_desc" cols="40" rows="3" class="textarea"><?php echo $this->_var['group_buy']['act_desc']; ?></textarea>
											</div>
										</div>
										
										
										<?php if ($this->_var['form_action'] == 'update' && $this->_var['group_buy']['user_id'] != 0): ?>
										<div class="item">
											<div class="label"><?php echo $this->_var['lang']['adopt_status']; ?>：</div>
											<div class="label_value">
												<div class="checkbox_items" ectype="general_audit_status">
													<div class="checkbox_item">
														<input name="review_status" type="radio" class="ui-radio" value="1" id="review_status_1" <?php if ($this->_var['group_buy']['groupby_staus'] == 1): ?>checked="checked" <?php endif; ?> />
														<label for="review_status_1" class="ui-radio-label"><?php echo $this->_var['lang']['not_audited']; ?></label>
													</div>
													<div class="checkbox_item">
														<input name="review_status" type="radio" class="ui-radio" value="2" id="review_status_2" <?php if ($this->_var['group_buy']['groupby_staus'] == 2): ?>checked="checked" <?php endif; ?> />
														<label for="review_status_2" class="ui-radio-label"><?php echo $this->_var['lang']['audited_not_adopt']; ?></label>
													</div>
													<div class="checkbox_item">
														<input name="review_status" type="radio" class="ui-radio" value="3" id="review_status_3" <?php if ($this->_var['group_buy']['groupby_staus'] == 3): ?>checked="checked" <?php endif; ?> />
														<label for="review_status_3" class="ui-radio-label"><?php echo $this->_var['lang']['audited_yes_adopt']; ?></label>
													</div>
												</div>
											</div>
										</div>
										
										<div class="item <?php if ($this->_var['group_buy']['ppj_staus'] != 2): ?>hide<?php endif; ?>" id="review_content">
											<div class="label"><?php echo $this->_var['lang']['adopt_reply']; ?>：</div>
											<div class="value">
												<textarea name="review_content" class="textarea h100"><?php echo $this->_var['group_buy']['groupby_review']; ?></textarea>
											</div>
										</div>
										
										<?php endif; ?>
										
										<div class="item">
											<div class="label"><?php echo $this->_var['lang']['new']; ?>：</div>
											<div class="label_value step_goods_service">
												<div class="switch switch_2 <?php if ($this->_var['group_buy']['is_new']): ?>active<?php endif; ?>" title="<?php echo $this->_var['lang']['yes']; ?>">
													<div class="circle"></div>
												</div>
												<input type="hidden" value="<?php echo $this->_var['group_buy']['is_new']; ?>" name="is_new">
											</div>
										</div>
										
										
										<div class="item">
											<div class="label"><?php echo $this->_var['lang']['hot']; ?>：</div>
											<div class="label_value step_goods_service">
												<div class="switch switch_2 <?php if ($this->_var['group_buy']['is_hot']): ?>active<?php endif; ?>" title="<?php echo $this->_var['lang']['yes']; ?>">
													<div class="circle"></div>
												</div>
												<input type="hidden" value="<?php echo $this->_var['group_buy']['is_hot']; ?>" name="is_hot">
											</div>
										</div>
										
										
										<div class="item">
											<div class="label">&nbsp;</div>
											
											<div class="label_value info_btn">
												<?php if ($this->_var['group_buy']['ppj_staus'] == 1 || $this->_var['group_buy']['ppj_staus'] == 0): ?>
												<input name="act_id" type="hidden" id="act_id" value="<?php echo $this->_var['group_buy']['ppj_id']; ?>" id="submitBtn">
												
												<input type="submit" name="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="button" />
												
												<input type="reset" value="<?php echo $this->_var['lang']['button_reset']; ?>" class="button button_reset" /> 
												<?php endif; ?>
												<?php if ($this->_var['group_buy']['ppj_staus'] == 1): ?>
													<input type="submit" name="finish" value="<?php echo $this->_var['lang']['button_finish']; ?>" class="button" onclick="return confirm('<?php echo $this->_var['lang']['notice_finish']; ?>'" id="<?php echo $this->_var['group_buy']['ppj_id']; ?>")" /><!--结束活动--> 
												<?php elseif ($this->_var['group_buy']['ppj_staus'] == 2): ?>
													<input type="submit" name="succeed" value="<?php echo $this->_var['lang']['button_succeed']; ?>" class="button" onclick="return confirm(succeed_confirm)" /><!--活动成功-->
													<label class="fl lh"><?php echo $this->_var['lang']['notice_succeed']; ?></label>
													<input type="submit" name="fail" value="<?php echo $this->_var['lang']['button_fail']; ?>" class="button" onclick="return confirm(fail_confirm)" /><!--活动失败-->
													<div class="notic"><?php echo $this->_var['lang']['notice_fail']; ?></div>
												<?php elseif ($this->_var['group_buy']['ppj_staus'] == 2): ?>
													<input type="submit" name="mail" value="<?php echo $this->_var['lang']['button_succeed']; ?>" class="button" onclick="return confirm('<?php echo $this->_var['lang']['button_succeed']; ?>')" />
												<?php endif; ?>

											</div>
											
										</div>
										
										
									</div>

<!--字段详情end  -->

								</div>

							</form>

						</div>
					</div>
				</div>
			</div>
		</div>
		<?php echo $this->fetch('library/pagefooter.lbi'); ?>
		
		
		<script type="text/javascript">
		
        $(function(){
            //表单验证
            $("#submitBtn").click(function(){
                if($("#group_buy_form").valid()){
                    $("#group_buy_form").submit();
                }
            });
        
            $('#group_buy_form').validate({
                errorPlacement:function(error, element){
                    var error_div = element.parents('div.label_value').find('div.form_prompt');
                    element.parents('div.label_value').find(".notic").hide();
                    error_div.append(error);
                },
				ignore:'.ignore',
                rules:{
                    goods_id :{
                        required : true
                    },
                    ppl_margin_fee:{
<<<<<<< Updated upstream
                        required : true
                    },
                    ppj_start_fee:{
                    	required : true
=======
                        //number : true
                        required : true,
                        min : 1
>>>>>>> Stashed changes
                    },
                    restrict_amount:{
                        digits : true
                    },
                    gift_integral:{
                        digits : true
                    },
					'ladder_amount[]':{
						min : 1
					},
					'ladder_price[]':{
						min : 1
					},
                    start_time :{
                        required : true
                    },
                    end_time :{
                        required : true,
                        compareDate:"#start_time",
                    }
                },
                messages:{
                    goods_id:{
                        required : '<i class="icon icon-exclamation-sign"></i>'+error_goods_null
                    },
<<<<<<< Updated upstream
                    ppl_margin_fee:{
						required : '<i class="icon icon-exclamation-sign"></i>'+error_goods_deposit
                    },
                    ppj_start_fee:{
                    	required : '<i class="icon icon-exclamation-sign"></i>'+goods_start_fee
=======
                    deposit:{
                        //number : '<i class="icon icon-exclamation-sign"></i>'+error_deposit
						required : '<i class="icon icon-exclamation-sign"></i>'+error_goods_null

>>>>>>> Stashed changes
                    },
                    restrict_amount:{
                        digits : '<i class="icon icon-exclamation-sign"></i>'+error_restrict_amount,
                    },
                    gift_integral:{
                        digits : '<i class="icon icon-exclamation-sign"></i>'+error_gift_integral
                    },
					'ladder_amount[]':{
						min : '<i class="icon icon-exclamation-sign"></i>'+error_goods_price
					},
					'ladder_price[]':{
						min : '<i class="icon icon-exclamation-sign"></i>'+error_goods_nunber
					},
                    start_time :{
                        required : '<i class="icon icon-exclamation-sign"></i>'+start_data_notnull
                    },
                    end_time :{
                        required : '<i class="icon icon-exclamation-sign"></i>'+end_data_notnull,
                        compareDate:'<i class="icon icon-exclamation-sign"></i>'+data_invalid_gt
                    }
                },
				onfocusout:function(element,event){
					//实时去除结束时间是否大于开始时间验证
					var name = $(element).attr("name");
					
					if(name == "end_time"){
						var endDate = $(element).val();
						var startDate = $(element).siblings("input[name='start_time']").val();
						
						var date1 = new Date(Date.parse(startDate.replace(/-/g, "/")));
						var date2 = new Date(Date.parse(endDate.replace(/-/g, "/")));
						
						if(date1 > date2){
							$(element).removeClass("error");
							$(element).siblings(".form_prompt").html("");
						}
					}
				}
            });
            
            //团购商品下拉选择
            $.divselect("#goods_id","#goods_id_val",function(obj){
				var value = obj.data("value");
				groupGoods(value);
			});
        });
        
        //团购商品市场价格
        function groupGoods(val){
            var filter = new Object;
            filter.goods_id = val;        
            Ajax.call('group_buy.php?is_ajax=1&act=group_goods', filter, groupGoodsResponse, 'GET', 'JSON');
        }
        
        function groupGoodsResponse(result){
            $('#market_price').html(result.content.marketPrice);
            $('#cost_price').html(result.content.cost_price);
        }
    
        /**
         * 搜索商品
         */
        function searchGoods()
        {
          var form = $("#group_buy_form");
          var filter = new Object;
          filter.cat_id   = form.find("input[name='category_id']").val();
          filter.brand_id = form.find("input[name='brand_id']").val();
          filter.keyword  = form.find("input[name='keyword']").val();
          filter.ru_id = form.find("input[name='ru_id']").val();
        
          Ajax.call('group_buy.php?is_ajax=1&act=search_goods', filter, searchGoodsResponse, 'GET', 'JSON');
        }
        
    
        function searchGoodsResponse(result)
        {
            $("#goods_id ul").find("li").remove();
            
            var goods = result.content;
            if (goods)
            {
                for (i = 0; i < goods.length; i++)
                {
                    $("#goods_id ul").append("<li><i class='sc_icon sc_icon_no'></i><a href='javascript:;' data-value='"+goods[i].goods_id+"' class='ftx-01'>"+goods[i].goods_name+"</a><input type='hidden' name='user_search[]' value='"+goods[i].value+"'></li>")
                }
				$("#goods_id ul").perfectScrollbar("destroy");
				$("#goods_id ul").perfectScrollbar();
                $("#goods_id ul").show();
            }
        }
    
        //日期选择插件调用start sunle
        <?php if (! $this->_var['group_buy']['status']): ?>
        var opts1 = {
            'targetId':'start_time',//时间写入对象的id
            'triggerId':['start_time'],//触发事件的对象id
            'alignId':'start_time',//日历对齐对象
            'format':'-'//时间格式 默认'YYYY-MM-DD HH:MM:SS'
        },opts2 = {
            'targetId':'end_time',
            'triggerId':['end_time'],
            'alignId':'end_time',
            'format':'-'
        }
        xvDate(opts1);
        xvDate(opts2);
        <?php else: ?>
        var opts2 = {
            'targetId':'end_time',
            'triggerId':['end_time'],
            'alignId':'end_time',
            'format':'-'
        }
        xvDate(opts2);
        <?php endif; ?>
        //日期选择插件调用end sunle
        $(document).on("blur","[ectype='checkedPrice']",function(){
            var deposit = parseInt($("input[name='deposit']").val());
            var this_val =  parseInt($(this).val());
            if(deposit > 0){
                if(deposit > this_val){
                    alert(ladder_price_min_notice);
                    $(this).val(deposit);
                }
            }    
        })

    </script>
		
	
	</body>

</html>