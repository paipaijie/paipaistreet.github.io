<?php if ($this->_var['full_page']): ?>
<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
	<div class="warpper">
    	<div class="title"><a href="javascript:;" ectype="goback" class="s-back"><?php echo $this->_var['lang']['back']; ?></a><?php echo $this->_var['ur_here']; ?></div>
        <div class="content">		
        	<div class="explanation" id="explanation">
            	<div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                	<li><?php echo $this->_var['lang']['operation_prompt_content']['0']; ?></li>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['1']; ?></li>
                </ul>
            </div>
            <div class="flexilist">
                <div class="common-head">
                    <div class="fl">
                    	<a href="attribute.php?act=add&goods_type=<?php echo $this->_var['goods_type']; ?>"><div class="fbutton"><div class="add" title="<?php echo $this->_var['lang']['10_attribute_add']; ?>"><span><i class="icon icon-plus"></i><?php echo $this->_var['lang']['10_attribute_add']; ?></span></div></div></a>
                    </div>				
                    <div class="refresh">
                    	<div class="refresh_tit" title="<?php echo $this->_var['lang']['refresh_data']; ?>"><i class="icon icon-refresh"></i></div>
                    	<div class="refresh_span"><?php echo $this->_var['lang']['refresh_common']; ?><?php echo $this->_var['record_count']; ?><?php echo $this->_var['lang']['record']; ?></div>
                    </div>
                </div>
                <div class="common-content">
					<form method="post" action="attribute.php?act=batch" name="listForm">
                	<div class="list-div" id="listDiv">
						<?php endif; ?>
                    	<table cellpadding="0" cellspacing="0" border="0">
                        	<thead>
                            	<tr>
                                	<th width="3%" class="sign"><div class="tDiv"><input type="checkbox" name="all_list" class="checkbox" id="all_list" /><label for="all_list" class="checkbox_stars"></label></div></th>
                                	<th width="5%"><div class="tDiv"><a href="javascript:listTable.sort('attr_id');"><?php echo $this->_var['lang']['record_id']; ?></a><?php echo $this->_var['sort_attr_id']; ?></div></th>
                                    <th width="12%"><div class="tDiv"><a href="javascript:listTable.sort('attr_name'); "><?php echo $this->_var['lang']['attr_name']; ?></a><?php echo $this->_var['sort_attr_name']; ?></div></th>
                                    <th width="10%"><div class="tDiv"><a href="javascript:listTable.sort('cat_id'); "><?php echo $this->_var['lang']['cat_id']; ?></a><?php echo $this->_var['sort_cat_id']; ?></div></th>
                                    <th width="10%"><div class="tDiv"><?php echo $this->_var['lang']['label_attr_type']; ?></div></th>
                                    <th width="12%"><div class="tDiv"><a href="javascript:listTable.sort('attr_input_type');"><?php echo $this->_var['lang']['attr_input_type']; ?></a></div></th>
                                    <th width="30%"><div class="tDiv"><?php echo $this->_var['lang']['attr_values']; ?></div></th>
                                    <th width="8%"><div class="tDiv"><a href="javascript:listTable.sort('attr_id');"><?php echo $this->_var['lang']['sort_order']; ?></a><?php echo $this->_var['sort_sort_order']; ?></div></th>
									<?php if ($this->_var['attr_set_up'] == 1): ?>
                                    <th width="10%" class="handle"><?php echo $this->_var['lang']['handler']; ?></th>
									<?php endif; ?>
                                </tr>
                            </thead>
                            <tbody>
								<?php $_from = $this->_var['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');if (count($_from)):
    foreach ($_from AS $this->_var['attr']):
?>
                            	<tr>
                                    <td class="sign"><div class="tDiv">
										<input type="checkbox" name="checkboxes[]" value="<?php echo $this->_var['attr']['attr_id']; ?>" class="checkbox" id="checkbox_<?php echo $this->_var['attr']['attr_id']; ?>" />
										<label for="checkbox_<?php echo $this->_var['attr']['attr_id']; ?>" class="checkbox_stars"></label>
									</div></td>
                                    <td><div class="tDiv"><?php echo $this->_var['attr']['attr_id']; ?></div></td>
									<td>
                                        <div class="tDiv">
                                            <?php if ($this->_var['attr_set_up'] == 1): ?>
                                            <span onclick="listTable.edit(this, 'edit_attr_name', <?php echo $this->_var['attr']['attr_id']; ?>)"><?php echo $this->_var['attr']['attr_name']; ?></span>
                                            <?php else: ?>
                                            <?php echo $this->_var['attr']['attr_name']; ?>
                                            <?php endif; ?>  									
                                        </div>
                                    </td>
									<td><div class="tDiv"><?php echo $this->_var['attr']['cat_name']; ?></div></td>
                                    <td>
                                    	<div class="tDiv">
                                        	<?php if ($this->_var['attr']['attr_type'] == 1): ?>
                                        		<?php echo $this->_var['lang']['attr_type_values']['1']; ?>
                                            <?php elseif ($this->_var['attr']['attr_type'] == 2): ?>
                                            	<?php echo $this->_var['lang']['attr_type_values']['2']; ?>
                                            <?php else: ?>
                                            	<?php echo $this->_var['lang']['attr_type_values']['0']; ?>
                                            <?php endif; ?>
                                        </div>
                                    </td>
									<td><div class="tDiv"><?php echo $this->_var['attr']['attr_input_type_desc']; ?></div></td>
									<td><div class="tDiv"><?php echo $this->_var['attr']['attr_values']; ?></div></td>
									<td>
                                        <div class="tDiv">
                                            <?php if ($this->_var['attr_set_up'] == 1): ?>
                                            <span onclick="listTable.edit(this, 'edit_sort_order', <?php echo $this->_var['attr']['attr_id']; ?>)"><?php echo $this->_var['attr']['sort_order']; ?></span>
                                            <?php else: ?>
                                            <?php echo $this->_var['attr']['sort_order']; ?>
                                            <?php endif; ?>									
                                        </div>
                                    </td>
									<?php if ($this->_var['attr_set_up'] == 1): ?>
                                    <td class="handle">
                                        <div class="tDiv a2 tl">
                                        	<?php if ($this->_var['attr']['attr_cat_type'] == 1): ?>
                                        	<a href="attribute.php?act=set_gcolor&attr_id=<?php echo $this->_var['attr']['attr_id']; ?>" class="btn_edit mr0"><i class="icon icon-edit"></i><?php echo $this->_var['lang']['add_attribute_color']; ?></a>
                                            <?php endif; ?>
                                            <a href="attribute.php?act=edit&amp;attr_id=<?php echo $this->_var['attr']['attr_id']; ?>" class="btn_edit"><i class="icon icon-edit"></i><?php echo $this->_var['lang']['edit']; ?></a>
                                            <a href="javascript:;" onclick="removeRow(<?php echo $this->_var['attr']['attr_id']; ?>)" class="btn_trash"><i class="icon icon-trash"></i><?php echo $this->_var['lang']['drop']; ?></a>										
                                        </div>
                                    </td>
									<?php endif; ?>
                                </tr>
								<?php endforeach; else: ?>
								<tr><td class="no-records"  colspan="20"><?php echo $this->_var['lang']['no_records']; ?></td></tr>								
								<?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
                            </tbody>
                            <tfoot>
                            	<tr>
									<td colspan="12">
                                        <div class="tDiv">
                                            <?php if ($this->_var['attr_set_up'] == 1): ?>
                                            <div class="tfoot_btninfo">
                                                <div class="shenhe">
                                                    <input type="submit" id="btnSubmit" value="<?php echo $this->_var['lang']['drop']; ?>" class="btn btn_disabled" disabled="true" ectype="btnSubmit" />
                                                </div>										
                                            </div>
                                            <?php endif; ?>
                                            <div class="list-page">
                                               <?php echo $this->fetch('library/page.lbi'); ?>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
						<?php if ($this->_var['full_page']): ?>
                    </div>
					</form>
                </div>
            </div>
		</div>
	</div>
	<?php echo $this->fetch('library/pagefooter.lbi'); ?>
	<script type="text/javascript">
	  listTable.recordCount = <?php echo empty($this->_var['record_count']) ? '0' : $this->_var['record_count']; ?>;
	  listTable.pageCount = <?php echo empty($this->_var['page_count']) ? '1' : $this->_var['page_count']; ?>;

	  <?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
	  listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
	  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	  

	  /**
	   * 查询商品属性
	   */
	  function searchAttr(goodsType)
	  {
		listTable.filter.goods_type = goodsType;
		listTable.filter.page = 1;
		listTable.loadList();
	  }

	  function removeRow(attr_id)
	  {
		Ajax.call('attribute.php?act=get_attr_num&attr_id=' + attr_id, '', removeRowResponse, 'GET', 'JSON');
	  }

	  function removeRowResponse(result)
	  {
		if (result.message.length > 0)
		{
		  alert(result.message);
		}

		if (result.error == 0)
		{
		  listTable.remove(result.content.attr_id, result.content.drop_confirm);
		}
	  }
	  
	</script>
</body>
</html>
<?php endif; ?>
