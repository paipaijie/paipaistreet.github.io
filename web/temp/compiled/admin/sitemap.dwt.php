<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><?php echo $this->_var['lang']['11_system']; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
        	<div class="explanation" id="explanation">
            	<div class="ex_tit">
					<i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span>
                    <?php if ($this->_var['open'] == 1): ?>
                    <div class="view-case">
                    	<div class="view-case-tit"><i></i><?php echo $this->_var['lang']['view_tutorials']; ?></div>
                        <div class="view-case-info">
                        	<a href="http://help.ecmoban.com/article-6897.html" target="_blank"><?php echo $this->_var['lang']['tutorials_bonus_list_one']; ?></a>
                        </div>
                    </div>			
                    <?php endif; ?>	
				</div>
                <ul>
                	<li><?php echo $this->_var['lang']['operation_prompt_content']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['1']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
                <div class="common-content">
                    <div class="mian-info">
                        <form method="POST" action="" name="theForm">
                            <div class="switch_info">
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['homepage_changefreq']; ?>：</div>
                                    <div class="label_value">
										<div id="" class="imitate_select select_w120">
											<div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
											<ul>
												<?php $_from = $this->_var['arr_changefreq']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'data');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['data']):
?>
												<li><a href="javascript:;" data-value="<?php echo $this->_var['data']; ?>" class="ftx-01"><?php echo $this->_var['data']; ?></a></li>
												<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
											</ul>
											<input name="homepage_priority" type="hidden" value="<?php echo $this->_var['config']['homepage_priority']; ?>" id="">
										</div>
										<div id="" class="imitate_select select_w120">
											<div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
											<ul>
												<?php $_from = $this->_var['lang']['priority']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'data');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['data']):
?>
												<li><a href="javascript:;" data-value="<?php echo $this->_var['key']; ?>" class="ftx-01"><?php echo $this->_var['data']; ?></a></li>
												<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
											</ul>
											<input name="homepage_changefreq" type="hidden" value="<?php echo $this->_var['config']['homepage_changefreq']; ?>" id="">
										</div>										
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['category_changefreq']; ?>：</div>
                                    <div class="label_value">
										<div id="" class="imitate_select select_w120">
											<div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
											<ul>
												<?php $_from = $this->_var['arr_changefreq']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'data');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['data']):
?>
												<li><a href="javascript:;" data-value="<?php echo $this->_var['data']; ?>" class="ftx-01"><?php echo $this->_var['data']; ?></a></li>
												<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
											</ul>
											<input name="category_priority" type="hidden" value="<?php echo $this->_var['config']['category_priority']; ?>" id="">
										</div>
										<div id="" class="imitate_select select_w120">
											<div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
											<ul>
												<?php $_from = $this->_var['lang']['priority']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'data');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['data']):
?>
												<li><a href="javascript:;" data-value="<?php echo $this->_var['key']; ?>" class="ftx-01"><?php echo $this->_var['data']; ?></a></li>
												<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
											</ul>
											<input name="category_changefreq" type="hidden" value="<?php echo $this->_var['config']['category_changefreq']; ?>" id="">
										</div>	
                                    </div>
                                </div>								
                                <div class="item">
                                    <div class="label"><?php echo $this->_var['lang']['content_changefreq']; ?>：</div>
                                    <div class="label_value">
										<div id="" class="imitate_select select_w120">
											<div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
											<ul>
												<?php $_from = $this->_var['arr_changefreq']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'data');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['data']):
?>
												<li><a href="javascript:;" data-value="<?php echo $this->_var['data']; ?>" class="ftx-01"><?php echo $this->_var['data']; ?></a></li>
												<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
											</ul>
											<input name="content_priority" type="hidden" value="<?php echo $this->_var['config']['content_priority']; ?>" id="">
										</div>
										<div id="" class="imitate_select select_w120">
											<div class="cite"><?php echo $this->_var['lang']['please_select']; ?></div>
											<ul>
												<?php $_from = $this->_var['lang']['priority']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'data');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['data']):
?>
												<li><a href="javascript:;" data-value="<?php echo $this->_var['key']; ?>" class="ftx-01"><?php echo $this->_var['data']; ?></a></li>
												<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
											</ul>
											<input name="content_changefreq" type="hidden" value="<?php echo $this->_var['config']['content_changefreq']; ?>" id="">
										</div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="label">&nbsp;</div>
                                    <div class="label_value info_btn">
										<input type="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="button" />
										<input type="reset" value="<?php echo $this->_var['lang']['button_reset']; ?>" class="button button_reset" />
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
</body>
</html>
