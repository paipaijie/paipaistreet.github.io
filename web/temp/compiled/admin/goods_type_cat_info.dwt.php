<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><a href="<?php echo $this->_var['action_link']['href']; ?>" class="s-back"><?php echo $this->_var['lang']['back']; ?></a><?php echo $this->_var['lang']['goods_alt']; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
        	<div class="explanation" id="explanation">
            	<div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['cat_info']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content_common']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
                <div class="common-content">
                    <div class="mian-info">
                        <form action="goods_type.php" method="post" name="theForm" enctype="multipart/form-data" id="goods_type_form">
                            <div class="switch_info">
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['require_field']; ?>&nbsp;<?php echo $this->_var['lang']['cat_name']; ?>：</div>
                                    <div class="label_value">
                                        <?php if ($this->_var['form_act'] == 'cat_update'): ?>
                                        <input type="text" name="cat_name" value="<?php echo htmlspecialchars($this->_var['type_cat']['cat_name']); ?>" size="40" class="text" autocomplete="off" />
										<?php else: ?>
										<input type="text" name="cat_name" value="" size="40" class="text" autocomplete="off" />
										<?php endif; ?>
                                        <div class="form_prompt"></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['parent_lev']; ?>：</div>
                                    <div class="label_value" ectype="type_cat">
                                        <div id="parent_id1" class="imitate_select select_w145" ectype="typeCatSelect">
                                            <div class="cite"><?php echo $this->_var['lang']['top_level']; ?></div>
                                            <ul>
                                                <li><a href="javascript:;" data-value="<?php if ($this->_var['parent'] && $this->_var['act'] == 'insert'): ?><?php echo $this->_var['type_cat']['cat_id']; ?><?php else: ?>0<?php endif; ?>" data-level='1' class="ftx-01"><?php if ($this->_var['parent'] && $this->_var['act'] == 'insert'): ?><?php echo $this->_var['parent']; ?><?php else: ?><?php echo $this->_var['lang']['top_level']; ?><?php endif; ?></a></li>

                                                <?php $_from = $this->_var['cat_level']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
                                                <?php if ($this->_var['type_cat']['cat_name'] != $this->_var['cat']['cat_name']): ?>
                                                <li><a href="javascript:;" data-value="<?php echo $this->_var['cat']['cat_id']; ?>" data-level=<?php echo $this->_var['cat']['level']; ?> class="ftx-01"><?php echo $this->_var['cat']['cat_name']; ?></a></li>
                                                <?php endif; ?>
                                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                            </ul>
                                            <input type="hidden" value="<?php echo empty($this->_var['type_cat']['cat_id']) ? '0' : $this->_var['type_cat']['cat_id']; ?>" id="parent_id_val1" ectype="typeCatVal">
                                        </div>
                                        <?php if ($this->_var['cat_tree1']['arr']): ?>
                                        <div id="parent_id2" class="imitate_select select_w145" ectype="typeCatSelect">
                                            <div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
                                            <ul>
                                                <li><a href="javascript:;" data-value="0" data-level='2' class="ftx-01"><?php echo $this->_var['lang']['please_select']; ?></a></li>
                                                <?php $_from = $this->_var['cat_tree1']['arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
                                                <li><a href="javascript:;" data-value="<?php echo $this->_var['cat']['cat_id']; ?>" data-level=<?php echo $this->_var['cat']['level']; ?> class="ftx-01"><?php echo $this->_var['cat']['cat_name']; ?></a></li>
                                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                            </ul>
                                            <input type="hidden" value="<?php echo empty($this->_var['type_cat']['parent_id']) ? '0' : $this->_var['type_cat']['parent_id']; ?>" id="parent_id_val2" ectype="typeCatVal">
                                        </div>
                                        <?php endif; ?>
                                        <?php if ($this->_var['cat_tree']['arr']): ?>
                                        <div id="parent_id2" class="imitate_select select_w145" ectype="typeCatSelect">
                                            <div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
                                            <ul>
                                                <li><a href="javascript:;" data-value="0" data-level='2' class="ftx-01"><?php echo $this->_var['lang']['please_select']; ?></a></li>
                                                <?php $_from = $this->_var['cat_tree']['arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
                                                <li><a href="javascript:;" data-value="<?php echo $this->_var['cat']['cat_id']; ?>" data-level=<?php echo $this->_var['cat']['level']; ?> class="ftx-01"><?php echo $this->_var['cat']['cat_name']; ?></a></li>
                                                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                            </ul>
                                            <input type="hidden" value="<?php echo empty($this->_var['type_cat']['parent_id']) ? '0' : $this->_var['type_cat']['parent_id']; ?>" id="parent_id_val2" ectype="typeCatVal">
                                        </div>
                                        <?php endif; ?>
                                        <input name="attr_parent_id" type="hidden" value="<?php echo empty($this->_var['type_cat']['cat_id']) ? '0' : $this->_var['type_cat']['cat_id']; ?>">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['sort_order']; ?>：</div>
                                    <div class="label_value">
                                        <input type="text" name="sort_order" value="<?php echo empty($this->_var['type_cat']['sort_order']) ? '50' : $this->_var['type_cat']['sort_order']; ?>" size="40" class="text" autocomplete="off" />
                                        <div class="form_prompt"></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label">&nbsp;</div>
                                    <div class="label_value info_btn">
                                        <input type="hidden" name="cat_id" value="<?php echo $this->_var['type_cat']['cat_id']; ?>" />
                                        <input type="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="button" id="submitBtn" />
                                        <input type="reset" value="<?php echo $this->_var['lang']['button_reset']; ?>" class="button button_reset" />
                                        <input type="hidden" name="act" value="<?php echo $this->_var['form_act']; ?>" />
                                    </div>
                                </div>								
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
			if($("#goods_type_form").valid()){
				$("#goods_type_form").submit();
			}
		});
	
		$('#goods_type_form').validate({
			errorPlacement:function(error, element){
				var error_div = element.parents('div.label_value').find('div.form_prompt');
				element.parents('div.label_value').find(".notic").hide();
				error_div.append(error);
			},
			rules:{
				cat_name:{
					required : true
				}
			},
			messages:{
				cat_name:{
					required : '<i class="icon icon-exclamation-sign"></i>'+type_cat_empty
				}
			}			
		});
	});	
	
	//分类层级顶级
	$.divselect("*[ectype='typeCatSelect']","*[ectype='typeCatVal']",function(obj){
		var level = obj.data('level'),
			val = obj.data("value");
			
		if(level == 1){
			get_childcat(obj,0,<?php echo $this->_var['type_cat']['cat_id']; ?>);
		}else{
			if(val == 0){
				val = obj.parents(".imitate_select").prev(".imitate_select").find("[ectype='typeCatVal']").val();
			}
			$("input[name='attr_parent_id']").val(val);
		}
	});
	</script>
</body>
</html>
