<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>
 
<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><?php echo $this->_var['lang']['batch']; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
            <?php echo $this->fetch('library/batch_tab.lbi'); ?>
        	<div class="explanation" id="explanation">
            	<div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
				<?php echo $this->_var['lang']['use_help']; ?>
            </div>
            <div class="flexilist">
                <div class="common-content">
                    <div class="mian-info">
                        <form action="goods_produts_batch.php?act=upload" method="post" enctype="multipart/form-data" id="goods_produts_batch_form" name="theForm">
                            <div class="switch_info">
								<?php if ($this->_var['goods_name']): ?>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['goods_name']; ?></div>
                                    <div class="label_value">
										<?php echo $this->_var['goods_name']; ?>
                                    </div>
                                </div>
								<?php endif; ?>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['file_charset']; ?></div>
                                    <div class="label_value">
										<div id="format" class="imitate_select select_w320">
											<div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
											<ul>
												<li><a href="javascript:;" data-value="0" class="ftx-01"><?php echo $this->_var['lang']['please_select']; ?></a></li>
												<?php $_from = $this->_var['lang_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'data');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['data']):
?>
												<li><a href="javascript:;" data-value="<?php echo $this->_var['key']; ?>" class="ftx-01"><?php echo $this->_var['data']; ?></a></li>
												<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
											</ul>
											<input name="data_cat" type="hidden" value="UTF8" id="format_val">
										</div>										
                                    </div>
                                </div>								
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['csv_file']; ?></div>
                                    <div class="label_value">
                                    	<div class="type-file-box">
                                            <input type="button" name="button" id="button" class="type-file-button" value="">
                                            <input type="file" class="type-file-file" id="file" name="file" size="30" hidefocus="true" data-state="csvfile" value="">
                                            <input type="text" name="textfile" class="type-file-text" id="textfield" autocomplete="off" readonly>
                                        </div>
                                        <div class="form_prompt"></div>
										<p class="bf100 fl red"><?php echo $this->_var['lang']['notice_file']; ?></p>
                                        <div class="fl bf100">
                                        	<?php $_from = $this->_var['download_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('charset', 'download');if (count($_from)):
    foreach ($_from AS $this->_var['charset'] => $this->_var['download']):
?>
												<?php if ($this->_var['charset'] == 'zh_cn'): ?>
                                                	<a onclick="get_produts_batch('<?php echo $this->_var['charset']; ?>', <?php echo $this->_var['goods_id']; ?>, <?php echo $this->_var['model']; ?>, <?php echo $this->_var['warehouse_id']; ?>);" href="javascript:;" class="bule"><?php echo $this->_var['download']; ?></a>
                                                <?php endif; ?>
											<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                                        </div>
                                    </div>
                                </div>													
                                <div class="item">
                                    <div class="label">&nbsp;</div>
                                    <div class="label_value info_btn pl5">
                                    	<input type="hidden" name="goods_id" value="<?php echo empty($this->_var['goods_id']) ? '0' : $this->_var['goods_id']; ?>" />
                                        <input type="hidden" name="model" value="<?php echo empty($this->_var['model']) ? '0' : $this->_var['model']; ?>" />
										<input name="submit" type="submit" id="submitBtn" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="button" />
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
				if($("#goods_produts_batch_form").valid()){
					$("#goods_produts_batch_form").submit();
				}
			});
		
			$('#goods_produts_batch_form').validate({
				errorPlacement:function(error, element){
					var error_div = element.parents('div.label_value').find('div.form_prompt');
					element.parents('div.label_value').find(".notic").hide();
					error_div.append(error);
				},
				rules:{
					textfile:{
						required : true
					}
				},
				messages:{
					textfile:{
						required : '<i class="icon icon-exclamation-sign"></i>'+file_null
					}
				}			
			});
		});
		
		function get_produts_batch(charset, goods_id, model, warehouse_id){
			location.href="goods_produts_batch.php?act=download&charset=" +charset+ "&goods_id=" +goods_id+ "&model=" + model;
		}
	</script>
	
</body>
</html>