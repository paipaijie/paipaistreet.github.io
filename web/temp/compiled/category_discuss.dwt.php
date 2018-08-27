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
        	<div class="discuss-warp">
                <div class="discuss-left">
                    <div class="d-title"><h1><?php echo $this->_var['lang']['discuss_user']; ?></h1></div>
                    <div class="review-info" >
                        <div class="review-tabs">
                            <a href="javascript:void(0);" class="dis_type curr" rev="0"><?php echo $this->_var['lang']['all_post']; ?>(<em><?php echo $this->_var['all_count']; ?></em>)<i></i></a>
                            <a href="javascript:void(0);" class="dis_type" rev="4"><?php echo $this->_var['lang']['sunburn_port']; ?>(<em><?php echo $this->_var['s_count']; ?></em>)<i></i></a>
                            <a href="javascript:void(0);" class="dis_type" rev="1"><?php echo $this->_var['lang']['discuss_post']; ?>(<em><?php echo $this->_var['t_count']; ?></em>)<i></i></a>
                            <a href="javascript:void(0);" class="dis_type" rev="2"><?php echo $this->_var['lang']['interlocution_post']; ?>(<em><?php echo $this->_var['w_count']; ?></em>)<i></i></a>
                            <a href="javascript:void(0);" class="dis_type" rev="3"><?php echo $this->_var['lang']['circle_post']; ?>(<em><?php echo $this->_var['q_count']; ?></em>)<i></i></a>
                        </div>
                        <div class="discuss-list" id="discuss_list_ECS_COMMENT">
							<?php echo $this->fetch('library/comments_discuss_list2.lbi'); ?>
                        </div>
                    </div>
					<form method="post" action="single_sun.php" name="dis_theForm" id="theFrom" enctype="multipart/form-data">
                    <div class="review-form" id="doPost" name="doPost">
                        <div class="r-u-name">
                            <div class="u-ico"><img src="<?php if ($this->_var['user_id']): ?><?php if ($this->_var['user_info']['user_picture']): ?><?php echo $this->_var['user_info']['user_picture']; ?><?php else: ?>themes/<?php echo $GLOBALS['_CFG']['template']; ?>/images/touxiang.jpg<?php endif; ?><?php else: ?>themes/<?php echo $GLOBALS['_CFG']['template']; ?>/images/avatar.png<?php endif; ?>"></div>
                            <span><?php echo $this->_var['lang']['publish_top']; ?></span>
                        </div>
                        <div class="item">
                            <div class="item-label item-label2"><em class="red">*</em>&nbsp;<?php echo $this->_var['lang']['types']; ?>：</div>
                            <div class="item-value">
                                <div class="radio-item">
                                    <input type="radio" checked name="referenceType" class="ui-radio" id="referenceType1" value="1" autocomplete="off">
                                    <label for="referenceType1" class="ui-radio-label"><?php echo $this->_var['lang']['discuss_post']; ?></label>
                                </div>
                                <div class="radio-item">
                                    <input type="radio" name="referenceType" class="ui-radio" id="referenceType2" value="2" autocomplete="off">
                                    <label for="referenceType2" class="ui-radio-label"><?php echo $this->_var['lang']['interlocution_post']; ?></label>
                                </div>
                                <div class="radio-item">
                                    <input type="radio" name="referenceType" class="ui-radio" id="referenceType3" value="3" autocomplete="off">
                                    <label for="referenceType3" class="ui-radio-label"><?php echo $this->_var['lang']['circle_post']; ?></label>
                                </div>
                                <div class="radio-item">
                                    <input type="radio" name="referenceType" class="ui-radio" id="referenceType4" value="4" autocomplete="off">
                                    <label for="referenceType4" class="ui-radio-label"><?php echo $this->_var['lang']['sunburn_port']; ?></label>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-label"><em class="red">*</em>&nbsp;<?php echo $this->_var['lang']['message_title']; ?>：</div>
                            <div class="item-value">
                                <input type="text" class="text" id="commentTitle" name="commentTitle">
                                <div class="form_prompt"></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-label"><em class="red">*</em>&nbsp;<?php echo $this->_var['lang']['content']; ?>：</div>
                            <div class="item-value">
                                <textarea class="textarea" id="test_content" name="content"></textarea>
                                <div class="form_prompt"></div>
                            </div>
                        </div>
                        <?php if ($this->_var['enabled_captcha']): ?>
                        <div class="item">
                            <div class="item-label"><?php echo $this->_var['lang']['comment_captcha']; ?>：</div>
                            <div class="item-value">
                            	<div class="captcha_input">
                                    <input type="text" class="text w100" id="captcha" name="captcha">
                                    <img src="captcha_verify.php?captcha=is_common&<?php echo $this->_var['rand']; ?>" alt="captcha" class="captcha_img" onClick="this.src='captcha_verify.php?captcha=is_common&'+Math.random()" data-key="captcha_common" />
                                </div>
								<div class="form_prompt"></div>
                            </div>
                        </div>
                        <?php endif; ?>
                        <div class="item">
                            <div class="item-label">&nbsp;</div>
                            <div class="item-value">
								<input type="hidden" name="act" value="add_discuss" />
								<input type="hidden" name="good_id" value="<?php echo $this->_var['goods_id']; ?>" />
								<input type="hidden" name="user_id" id="user_id" value="<?php echo $this->_var['user_id']; ?>" />							
                                <input type="submit" name="submit" class="btn sc-redBg-btn" ectype="submitBtn" value="<?php echo $this->_var['lang']['publish']; ?>">
                            </div>
                        </div>
                    </div>
					</form>
                </div>
				<?php echo $this->fetch('library/discuss_right.lbi'); ?>
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
   
    <?php echo $this->smarty_insert_scripts(array('files'=>'common.js,cart_common.js,parabola.js,cart_quick_links.js,jquery.validation.min.js')); ?>
    <script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/dsc-common.js"></script>
	<script type="text/javascript" src="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/js/jquery.purebox.js"></script>
	<script type="text/javascript">
	$(function(){
		$("*[ectype='submitBtn']").click(function(){
			var sub_Form = $("form[name='dis_theForm']"),
				user_id = sub_Form.find("input[name='user_id']").val(),
				goods_id = sub_Form.find("input[name='good_id']").val();
			
			//判断用户是否登录
			if(user_id <= 0){
				var back_url = "category_discuss.php?id=" + goods_id;
				$.notLogin("get_ajax_content.php?act=get_login_dialog",back_url);
				return false;
			}else{
				if($("#theFrom").valid()){
					$("#theFrom").submit();
				}
			}
		});
		
		$('#theFrom').validate({
			errorPlacement:function(error, element){
				var error_div = element.parents('div.item-value').find('div.form_prompt');
				error_div.html("").append(error);
			},
			ignore:".ignore",
			rules : {
				commentTitle : {
					required : true,
					minlength: 2,
					maxlength: 50
				},
				content:{
					required : true
				}
				<?php if ($this->_var['enabled_captcha']): ?>
				,captcha:{
					required : true,
					maxlength : 4,
					remote : {
						cache: false,
						async:false,
						type:'POST',
						url:'ajax_dialog.php?act=ajax_captcha&seKey='+$("input[name='captcha']").siblings(".captcha_img").data("key"),
						data:{
							captcha:function(){
								return $("input[name='captcha']").val();
							}
						},
						dataFilter:function(data,type){
							if(data == "false"){
								$("input[name='captcha']").siblings(".captcha_img").click();
							}
							return data;
						}
					}
				}
				<?php endif; ?>
			},
			messages : {
				commentTitle : {
					required : "<i class='iconfont icon-info-sign'></i> <?php echo $this->_var['lang']['commentTitle_not']; ?>",
					minlength: "<i class='iconfont icon-info-sign'></i> <?php echo $this->_var['lang']['commentTitle_xz']; ?>",
					maxlength: "<i class='iconfont icon-info-sign'></i> <?php echo $this->_var['lang']['commentTitle_xz']; ?>"
				},
				content : {
					required : "<i class='iconfont icon-info-sign'></i> <?php echo $this->_var['lang']['content_not']; ?>"
				}
				<?php if ($this->_var['enabled_captcha']): ?>
				,captcha:{
					required : "<i class='iconfont icon-info-sign'></i> " + json_languages.captcha_not,
					maxlength: "<i class='iconfont icon-info-sign'></i> " + json_languages.captcha_xz,
					remote : "<i class='iconfont icon-info-sign'></i> " + json_languages.captcha_cw
				}
				<?php endif; ?>
			},
			success:function(label){
				label.removeClass().addClass("succeed").html("<i></i>");
			},
			onkeyup:function(element,event){
				var name = $(element).attr("name");
				if(name == "captcha"){
					//不可去除，当是验证码输入必须失去焦点才可以验证（错误刷新验证码）
					return true;
				}else{
					$(element).valid();
				}
			}
		});
		
		//晒单贴调整到评论列表
		$("#referenceType4").click(function(){
			location.href = "user.php?act=comment_list";
		});
	});
	</script>	
</body>
</html>