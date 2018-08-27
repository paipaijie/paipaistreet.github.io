<?php if ($this->_var['full_page']): ?>
<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><?php echo $this->_var['lang']['goods_alt']; ?> - <?php echo $this->_var['ur_here']; ?></div>
        <div class="content">
            <?php echo $this->fetch('library/common_tabs_info.lbi'); ?>
        	<div class="explanation m10" id="explanation">
            	<div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                	<li><?php echo $this->_var['lang']['operation_prompt_content']['list']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['list']['1']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['list']['2']; ?></li>
                </ul>
            </div>            
			<div class="tabs_info">
            	<ul>
                    <li <?php if ($this->_var['act_type'] == 'manage'): ?>class="curr"<?php endif; ?>><a href="<?php echo $this->_var['action_link2']['href']; ?><?php echo $this->_var['seller_list']; ?>"><?php echo $this->_var['action_link2']['text']; ?></a></li>
                    <li <?php if ($this->_var['act_type'] == 'cat_list'): ?>class="curr"<?php endif; ?>><a href="<?php echo $this->_var['action_link1']['href']; ?><?php echo $this->_var['seller_list']; ?>"><?php echo $this->_var['action_link1']['text']; ?></a></li>
                </ul>
            </div>	
            <div class="flexilist">
                <div class="common-head">
                    <div class="fl">
                    	<a href="<?php echo $this->_var['action_link']['href']; ?>"><div class="fbutton"><div class="add" title="<?php echo $this->_var['action_link']['text']; ?>"><span><i class="icon icon-plus"></i><?php echo $this->_var['action_link']['text']; ?></span></div></div></a>
                    </div>				
                    <div class="refresh">
                    	<div class="refresh_tit" title="<?php echo $this->_var['lang']['refresh_data']; ?>"><i class="icon icon-refresh"></i></div>
                    	<div class="refresh_span"><?php echo $this->_var['lang']['refresh_common']; ?><?php echo $this->_var['record_count']; ?><?php echo $this->_var['lang']['record']; ?></div>
                    </div>
                    <div class="search">
                    	<form action="javascript:;" name="searchForm" onSubmit="searchGoodsname(this);">
                            <div class="input">
                                <input type="text" name="keywords" class="text nofocus w140" placeholder="<?php echo $this->_var['lang']['cat_name']; ?>" autocomplete="off">
                                <input type="submit" class="btn" name="secrch_btn" ectype="secrch_btn" value="" />
                            </div>
                        </form>
                    </div>
                </div>
                <div class="common-content">
                    <div class="list-div" id="listDiv">
                        <?php endif; ?>
                        <table cellpadding="0" cellspacing="0" border="0">
                            <thead>
                                <tr>
                                    <?php if ($this->_var['level'] < 3): ?>
                                    <th width="8%"><div class="tDiv"><?php echo $this->_var['lang']['level_alt']; ?>(<?php echo $this->_var['lang']['cat_level'][$this->_var['level']]; ?>)</div></th>
                                    <?php endif; ?>
                                    <th width="8%"><div class="tDiv"><?php echo $this->_var['lang']['goods_steps_name']; ?></div></th>
									<th width="20%"><div class="tDiv"><?php echo $this->_var['lang']['cat_name']; ?></div></th>
                                    <?php if ($this->_var['level'] > 1): ?>
                                    <th width="20%"><div class="tDiv"><?php echo $this->_var['lang']['fu_cat']; ?></div></th>
                                    <?php endif; ?>
                                    <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['type_number']; ?></div></th>
                                    <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['sort_order']; ?></div></th>
                                    <th width="12%" class="handle"><?php echo $this->_var['lang']['handler']; ?></th>
                            	</tr>
                            </thead>
                            <tbody>
                                <?php $_from = $this->_var['goods_type_arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
                                <tr>
                                    <?php if ($this->_var['level'] < 3): ?>
                                    <td>
                                        <div class="tDiv first_setup">
                                            <div class="setup_span">
                                                <em><i class="icon icon-cog"></i><?php echo $this->_var['lang']['setup']; ?><i class="arrow"></i></em>
                                                <ul>
                                                    <li><a href="goods_type.php?act=cat_add&cat_id=<?php echo $this->_var['cat']['cat_id']; ?>"><?php echo $this->_var['lang']['add_next_level']; ?></a></li>
                                                    <li><a href="goods_type.php?act=cat_list&parent_id=<?php echo $this->_var['cat']['cat_id']; ?>&level=<?php echo $this->_var['cat']['level']; ?>&seller_list=<?php echo $this->_var['filter']['seller_list']; ?>"><?php echo $this->_var['lang']['view_next_level']; ?></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                    <?php endif; ?>
                                    <td>
                                        <div class="tDiv">
                                            <?php if ($this->_var['cat']['user_name']): ?><font class="red"><?php echo $this->_var['cat']['user_name']; ?></font><?php else: ?><font class="blue3"><?php echo $this->_var['lang']['self']; ?></font><?php endif; ?>
                                        </div>
                                    </td>
                                    <td><div class="tDiv"><a href="goods_type.php?act=manage&cat_id=<?php echo $this->_var['cat']['cat_id']; ?>" class="ftx-01"><?php echo $this->_var['cat']['cat_name']; ?></a></div></td>
									<?php if ($this->_var['level'] > 1): ?>
                                    <td><div class="tDiv"><?php echo $this->_var['cat']['parent_name']; ?></div></td>
                                    <?php endif; ?>
                                    <td><div class="tDiv"><?php echo $this->_var['cat']['type_num']; ?></div></td>
                                    <td><div class="tDiv"><input type="text" name="sort_order" class="text w40" value="<?php echo $this->_var['cat']['sort_order']; ?>" onkeyup="listTable.editInput(this, 'edit_sort_order', <?php echo $this->_var['cat']['cat_id']; ?>)"/></div></td>
                                    <td class="handle">
                                        <div class="tDiv a2">
                                            <a href="goods_type.php?act=cat_edit&amp;cat_id=<?php echo $this->_var['cat']['cat_id']; ?>" class="btn_edit"><i class="icon icon-edit"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                            <a href="javascript:;" onclick="listTable.remove(<?php echo $this->_var['cat']['cat_id']; ?>, '<?php echo $this->_var['lang']['drop_confirm']; ?>','remove_cat')" title="<?php echo $this->_var['lang']['remove']; ?>" class="btn_trash"><i class="icon icon-trash"></i><?php echo $this->_var['lang']['drop']; ?></a>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; else: ?>
                                <tr><td class="no-records" colspan="10"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
                                <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </tbody>    
                            <tfoot>
                            	<tr>
                                    <td colspan="12">
                                    	<div class="list-page">
                                           <?php echo $this->fetch('library/page.lbi'); ?>
                                        </div>
                                    </td>
                                </tr>
                            </tfoot>
                        </table> 
                        <?php if ($this->_var['full_page']): ?>
                    </div>
                </div>
                <!--商品列表end-->
            </div>
		</div>
	</div>
 	<?php echo $this->fetch('library/pagefooter.lbi'); ?>
	<script type="text/javascript">
	listTable.recordCount = <?php echo empty($this->_var['record_count']) ? '0' : $this->_var['record_count']; ?>;
	listTable.pageCount = <?php echo empty($this->_var['page_count']) ? '1' : $this->_var['page_count']; ?>;
	listTable.query = 'cat_list_query';
	
	<?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
	listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</script>
</body>
</html>
<?php endif; ?>
