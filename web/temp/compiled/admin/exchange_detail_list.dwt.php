<?php if ($this->_var['full_page']): ?>
<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>


<body class="iframe_body">
    <div class="warpper">
        <div class="title"><?php echo $this->_var['lang']['report_form']; ?> - <?php echo $this->_var['lang']['integral_detail']; ?></div>
        <div class="content">
            <div class="tabs_info">
                <ul>
                    <li <?php if ($this->_var['menu_select']['current'] == 'exchange_count'): ?>class="curr"<?php endif; ?>><a href="exchange_detail.php?act=detail"><?php echo $this->_var['lang']['exchange_count']; ?></a></li>
                </ul>
            </div>
            <div class="explanation" id="explanation">
                <div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
                <ul>
                    <li><?php echo $this->_var['lang']['operation_prompt_content']['list']['0']; ?></li>
                </ul>
            </div>
            <div class="flexilist mt30">
            	<div class="query_result">
                    <div class="common-head">
                        <div class="fl">
                            <div class="fbutton m0" id="fbutton_1"><a href="javascript:void(0);"><div class="csv" title="<?php echo $this->_var['lang']['export_list']; ?>"><span><i class="icon icon-download-alt"></i><?php echo $this->_var['lang']['export_list']; ?></span></div></a></div>
                        </div>
                        <div class="refresh">
                            <div class="refresh_tit" onclick="getList(this)" title="<?php echo $this->_var['lang']['refresh_data']; ?>"><i class="icon icon-refresh"></i></div>
                        	<div class="refresh_span"><?php echo $this->_var['lang']['refresh_common']; ?><?php echo $this->_var['record_count']; ?><?php echo $this->_var['lang']['record']; ?></div>
                        </div>
                    </div>
                    <div class="common-content">
                        <div class="list-div" id="listDiv">
                            <?php endif; ?>
                            <table cellpadding="0" cellspacing="0" border="0">
                                <thead>
                                <tr>
                                    <th width="25%"><div class="tDiv"><?php echo $this->_var['lang']['goods_steps_name']; ?></div></th>
                                    <th width="25%"><div class="tDiv"><?php echo $this->_var['lang']['gift_consumption_score']; ?></div></th>
                                    <th width="25%"><div class="tDiv"><?php echo $this->_var['lang']['gift_grade_integral']; ?></div></th>
                                    <th width="25%" class="handle"><?php echo $this->_var['lang']['handler']; ?></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $_from = $this->_var['detail']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'vo');if (count($_from)):
    foreach ($_from AS $this->_var['vo']):
?>
                                <tr>
                                    <td><div class="tDiv"><?php echo $this->_var['vo']['shop_name']; ?></div></td>
                                    <td><div class="tDiv"><?php echo empty($this->_var['vo']['give_integral']) ? '0' : $this->_var['vo']['give_integral']; ?></div></td>
                                    <td><div class="tDiv"><?php echo empty($this->_var['vo']['rank_integral']) ? '0' : $this->_var['vo']['rank_integral']; ?></div></td>
                                    <td class="handle">
                                        <div class="tDiv">
                                            <a href="exchange_detail.php?act=exchange_goods&user_id=<?php echo $this->_var['vo']['user_id']; ?>" class="btn_see"><i class="sc_icon sc_icon_see"></i><?php echo $this->_var['lang']['view_goods']; ?></a>
                                            <a href="exchange_detail.php?act=order_view&user_id=<?php echo $this->_var['vo']['user_id']; ?>" class="btn_see"><i class="sc_icon sc_icon_see"></i><?php echo $this->_var['lang']['view_order']; ?></a>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; else: ?>
                                <tr>
                                    <td colspan="12" class="no_record"><div class="tDiv"><?php echo $this->_var['lang']['no_records']; ?></div></td>
                                </tr>
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
    </div>
	<?php echo $this->fetch('library/pagefooter.lbi'); ?>
	<script type="text/javascript">
        //分页传值
        listTable.recordCount = <?php echo empty($this->_var['record_count']) ? '0' : $this->_var['record_count']; ?>;
        listTable.pageCount = <?php echo empty($this->_var['page_count']) ? '1' : $this->_var['page_count']; ?>;
        listTable.url = "exchange_detail.php?is_ajax=1";
        listTable.query = "detail_query";
    
        <?php $_from = $this->_var['filter']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
        listTable.filter.<?php echo $this->_var['key']; ?> = '<?php echo $this->_var['item']; ?>';
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        
        function getList()
        {
            var act = 'detail_query';
            $.ajax({
                url:"exchange_detail.php?is_ajax=1",
                dataType:"json",
                type:'post',
                data:{
                    "act" : act,
                },
                success:function(data){
                    $('.list-div').eq(0).html(data.content);
                }
            })
        }
    
        //导出报表(销售明细)
        $('#fbutton_1').click(function(){
            location.href='exchange_detail.php?act=download';
        })
    </script>
</body>
</html>
<?php endif; ?>