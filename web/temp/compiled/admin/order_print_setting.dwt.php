<?php if ($this->_var['full_page']): ?>
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
				</div>
                <ul>
                	<li><?php echo $this->_var['lang']['operation_prompt_content']['setting']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['setting']['1']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
            	<div class="common-head">
                   	<?php if ($this->_var['action_link']): ?>
                    <div class="fl">
                        <a href="<?php echo $this->_var['action_link']['href']; ?>"><div class="fbutton"><div class="add" title="<?php echo $this->_var['action_link']['text']; ?>"><span><i class="icon icon-plus"></i><?php echo $this->_var['action_link']['text']; ?></span></div></div></a>
                    </div>
                    <?php endif; ?>
                    <div class="refresh<?php if (! $this->_var['action_link']): ?> ml0<?php endif; ?>">
                    	<div class="refresh_tit" title="<?php echo $this->_var['lang']['refresh_data']; ?>"><i class="icon icon-refresh"></i></div>
                    	<div class="refresh_span"><?php echo $this->_var['lang']['refresh_common']; ?><?php echo $this->_var['record_count']; ?><?php echo $this->_var['lang']['record']; ?></div>
                    </div>                   
                    <div class="search">
                    	<form action="javascript:;" name="searchForm" onSubmit="searchGoodsname(this);">
                        <div class="input">
                            <input type="text" name="keyword" class="text nofocus" placeholder="<?php echo $this->_var['lang']['keyword']; ?>" autocomplete="off" />
                            <input type="submit" class="btn" name="secrch_btn" ectype="secrch_btn" value="" />
                        </div>
                        </form>
                    </div>
                </div>
                <div class="common-content">
                	<div class="list-div"  id="listDiv">
                        <?php endif; ?>
                    	<table cellpadding="0" cellspacing="0" border="0">
                        	<thead>
                            	<tr>
                                    <th width="5%"><div class="tDiv"><?php echo $this->_var['lang']['record_id']; ?></div></th>
                                    <th width="15%"><div class="tDiv"><?php echo $this->_var['lang']['spec']; ?></div></th>
                                    <th width="20%"><div class="tDiv"><?php echo $this->_var['lang']['printer']; ?></div></th>
                                    <th width="20%"><div class="tDiv"><?php echo $this->_var['lang']['width']; ?>(mm)</div></th>
                                    <th width="15%"><div class="tDiv"><?php echo $this->_var['lang']['sort_order']; ?></div></th>
									<th width="15%"><div class="tDiv"><?php echo $this->_var['lang']['set_default']; ?></div></th>
                                    <th width="10%" class="handle"><?php echo $this->_var['lang']['handler']; ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $_from = $this->_var['print_setting']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
                            	<tr>
                                    <td><div class="tDiv"><?php echo $this->_var['list']['id']; ?></div></td>
                                    <td><div class="tDiv"><?php echo $this->_var['list']['specification']; ?></div></td>
                                    <td><div class="tDiv"><input name="printer" class="text w120" value="<?php echo $this->_var['list']['printer']; ?>" onkeyup="listTable.editInput(this, 'edit_order_printer',<?php echo $this->_var['list']['id']; ?>)" type="text"></div></td>
									<td><div class="tDiv"><input name="width" class="text w120" value="<?php echo $this->_var['list']['width']; ?>" onkeyup="listTable.editInput(this, 'edit_print_width',<?php echo $this->_var['list']['id']; ?>)" type="text"></div></td>
                                    <td><div class="tDiv"><input name="sort_order" class="text w50" value="<?php echo $this->_var['list']['sort_order']; ?>" onkeyup="listTable.editInput(this, 'edit_sort_order',<?php echo $this->_var['list']['id']; ?>)" type="text"></div></td>
                                    <td><div class="tDiv">
										<div class="switch <?php if ($this->_var['list']['is_default'] == 1): ?>active<?php endif; ?>" title="<?php if ($this->_var['list']['is_default'] == 1): ?><?php echo $this->_var['lang']['yes']; ?><?php else: ?><?php echo $this->_var['lang']['no']; ?><?php endif; ?>" data-type="only" onclick="listTable.switchBt(this, 'toggle_order_is_default', <?php echo $this->_var['list']['id']; ?>)">
											<div class="circle"></div>
										</div>
										<input type="hidden" value="<?php echo $this->_var['list']['is_default']; ?>" name="">								
									</div></td>
                                    <td class="handle">
                                        <div class="tDiv a3">
                                            <a href="tp_api.php?act=order_print_setting_edit&id=<?php echo $this->_var['list']['id']; ?>" title="<?php echo $this->_var['lang']['edit']; ?>" class="btn_edit"><i class="icon icon-edit"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                            <a href="javascript:;" onclick="listTable.remove(<?php echo $this->_var['list']['id']; ?>, '<?php echo $this->_var['lang']['drop_confirm']; ?>', 'order_print_setting_remove')" title="<?php echo $this->_var['lang']['remove']; ?>" class="btn_trash"><i class="icon icon-trash"></i><?php echo $this->_var['lang']['drop']; ?></a>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; else: ?>
                                    <tr><td class="no-records" colspan="12"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
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
            </div>
        </div>
    </div>
 	<?php echo $this->fetch('library/pagefooter.lbi'); ?>
    <script type="text/javascript">
		listTable.recordCount = <?php echo empty($this->_var['record_count']) ? '0' : $this->_var['record_count']; ?>;
		listTable.pageCount = <?php echo empty($this->_var['page_count']) ? '1' : $this->_var['page_count']; ?>;
		listTable.query = 'order_print_setting_query';
		
		<?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
		listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </script>
</body>
</html>
<?php endif; ?>
