

<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
<div class="warpper">
    <div class="title"><?php echo $this->_var['lang']['report_form']; ?> - <?php echo $this->_var['lang']['user_stats']; ?></div>
    <div class="content">
        <div class="tabs_info">
            <ul>
                <li><a href="users_order.php?act=order_num"><?php echo $this->_var['lang']['report_users']; ?></a></li>
                <li class="curr"><a href="guest_stats.php?act=list"><?php echo $this->_var['lang']['report_guest']; ?></a></li>
            </ul>
        </div>
        <div class="explanation" id="explanation">
            <div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
            <ul>
                <li><?php echo $this->_var['lang']['operation_prompt_content']['list']['0']; ?></li>
                <li><?php echo $this->_var['lang']['operation_prompt_content']['list']['1']; ?></li>
            </ul>
        </div>
        <div class="flexilist mt30">
            <div class="common-content">
                <div class="mian-info">
                    <div class="switch_info" style="display: none">
                        <div class="stat_order_search">
                            <div class="search_item">
                                <strong><?php echo $this->_var['lang']['start_end_data']; ?>：</strong>
                                <form name="TimeInterval"  action="javascript:getList()">
                                    <div class="text_time" id="text_time1">
                                        <input type="text" class="text" name="start_date" id="start_date" value='<?php echo $this->_var['start_date']; ?>' autocomplete="off" readonly>
                                    </div>
                                    <span class="bolang">&nbsp;&nbsp;~&nbsp;&nbsp;</span>
                                    <div class="text_time" id="text_time2">
                                        <input type="text" class="text" name="end_date" id="end_date" value="<?php echo $this->_var['end_date']; ?>" autocomplete="off" readonly>
                                    </div>
                                    <a href="javascript:void(0);" onclick="getList()" class="btn btn30 blue_btn" ectype="query"><i class="icon icon-search"></i><?php echo $this->_var['lang']['query']; ?></a>
                                </form>
                            </div>
                        </div>
                        <div class="query_result mt30">
                            <div class="common-head">
                                <div class="fl">
                                    <div class="fbutton m0"><div class="csv" title="<?php echo $this->_var['lang']['export_data']; ?>"><span><i class="icon icon-download-alt"></i><?php echo $this->_var['lang']['export_list']; ?></span></div></div>
                                </div>
                                <div class="refresh">
                                    <div class="refresh_tit" title="<?php echo $this->_var['lang']['refresh_data']; ?>"><i class="icon icon-refresh"></i></div>
                                    <div class="refresh_span"><?php echo $this->_var['lang']['refresh_common']; ?><?php echo $this->_var['record_count']; ?><?php echo $this->_var['lang']['record']; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="switch_info switch_info_nobg" style="display:block;">
                        <div class="common-head">
                            <div class="fl">
                                <div class="fbutton m0"><div class="csv" title="<?php echo $this->_var['lang']['export_data']; ?>"><span><i class="icon icon-download-alt"></i><?php echo $this->_var['lang']['export_list']; ?></span></div></div>
                            </div>
                        </div>
                        <div class="list-div">
                            <table class="table" cellpadding="0" cellspacing="0">
                                <thead>
                                <tr>
                                    <th width="10%"><div class="tDiv tc"><?php echo $this->_var['lang']['user_total_number']; ?></div></th>
                                    <th width="20%"><div class="tDiv tc"><?php echo $this->_var['lang']['is_user_order_number']; ?></div></th>
                                    <th width="20%"><div class="tDiv tc"><?php echo $this->_var['lang']['is_user_order_total_number']; ?></div></th>
                                    <th width="20%"><div class="tDiv tc"><?php echo $this->_var['lang']['user_buy_total']; ?></div></th>
                                    <th width="15%"><div class="tDiv tc"><?php echo $this->_var['lang']['anonymous_user_buy_total']; ?></div></th>
                                    <th width="15%"><div class="tDiv tc"><?php echo $this->_var['lang']['anonymous_user_order_number']; ?></div></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><div class="tDiv tc"><?php echo $this->_var['user_num']; ?></div></td>
                                    <td><div class="tDiv tc"><?php echo $this->_var['have_order_usernum']; ?></div></td>
                                    <td><div class="tDiv tc"><?php echo $this->_var['user_order_turnover']; ?></div></td>
                                    <td><div class="tDiv tc"><?php echo $this->_var['user_all_turnover']; ?></div></td>
                                    <td><div class="tDiv tc"><?php echo $this->_var['guest_all_turnover']; ?></div></td>
                                    <td><div class="tDiv tc"><?php echo $this->_var['guest_order_num']; ?></div></td>
                                </tr>
                                <tr>
                                    <td colspan="6">
                                        <div class="tDiv stat_user_rate">
                                            <div class="stat_rate_item">
                                                <div class="ral ral01">
                                                    <span><?php echo $this->_var['lang']['user_buy_rate']; ?> = </span>
                                                    <span class="fore"><?php echo $this->_var['user_ratio']; ?>%</span>
                                                </div>
                                                <div class="ral ral02">
                                                    <span><?php echo $this->_var['lang']['is_user_order_number']; ?></span>
                                                    <span><?php echo $this->_var['have_order_usernum']; ?></span>
                                                </div>
                                                <div class="ral ral03">
                                                    <span> ÷ <?php echo $this->_var['lang']['user_total_number']; ?></span>
                                                    <span><?php echo $this->_var['user_num']; ?></span>
                                                </div>
                                            </div>
                                            <div class="stat_rate_item">
                                                <div class="ral ral01">
                                                    <span><?php echo $this->_var['lang']['user_order_total_number']; ?> = </span>
                                                    <span class="fore"><?php echo $this->_var['one_user_order_unm']; ?></span>
                                                </div>
                                                <div class="ral ral02">
                                                    <span><?php echo $this->_var['lang']['is_user_order_total_number']; ?></span>
                                                    <span><?php echo $this->_var['user_order_turnover']; ?></span>
                                                </div>
                                                <div class="ral ral03">
                                                    <span> ÷ <?php echo $this->_var['lang']['user_number']; ?></span>
                                                    <span><?php echo $this->_var['user_num']; ?></span>
                                                </div>
                                            </div>
                                            <div class="stat_rate_item">
                                                <div class="ral ral01">
                                                    <span><?php echo $this->_var['lang']['user_buy']; ?> = </span>
                                                    <span class="fore"><?php echo $this->_var['ave_user_turnover']; ?></span>
                                                </div>
                                                <div class="ral ral02">
                                                    <span><?php echo $this->_var['lang']['user_buy_total']; ?></span>
                                                    <span><?php echo $this->_var['user_all_turnover']; ?></span>
                                                </div>
                                                <div class="ral ral03">
                                                    <span> × <?php echo $this->_var['lang']['user_order_number']; ?></span>
                                                    <span><?php echo $this->_var['ave_user_ordernum']; ?></span>
                                                </div>
                                            </div>
                                            <div class="stat_rate_item stat_rate_item_last">
                                                <div class="ral ral01">
                                                    <span><?php echo $this->_var['lang']['anonymous_user_order']; ?> = </span>
                                                    <span class="fore"><?php echo $this->_var['guest_order_amount']; ?></span>
                                                </div>
                                                <div class="ral ral02">
                                                    <span><?php echo $this->_var['lang']['anonymous_user_buy_total']; ?></span>
                                                    <span><?php echo $this->_var['guest_all_turnover']; ?></span>
                                                </div>
                                                <div class="ral ral03">
                                                    <span> ÷ <?php echo $this->_var['lang']['anonymous_user_order_number']; ?></span>
                                                    <span><?php echo $this->_var['guest_order_num']; ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $this->fetch('library/pagefooter.lbi'); ?>
<script type="text/javascript">
    function getList()
    {
        var frm =  document.forms['TimeInterval'];
        listTable.filter['start_date'] = frm.elements['start_date'].value;
        listTable.filter['end_date'] = frm.elements['end_date'].value;
        listTable.filter['page'] = 1;
        listTable.loadList();
        getDownUrl();
    }

    function getDownUrl()
    {
        var aTags = document.getElementsByTagName('A');
        for (var i = 0; i < aTags.length; i++)
        {
            if (aTags[i].href.indexOf('download') >= 0)
            {
                if (listTable.filter['start_date'] == "")
                {
                    var frm =  document.forms['TimeInterval'];
                    listTable.filter['start_date'] = frm.elements['start_date'].value;
                    listTable.filter['end_date'] = frm.elements['end_date'].value;
                }
                aTags[i].href = "users_order.php?act=download&start_date=" + listTable.filter['start_date'] + "&end_date=" + listTable.filter['end_date'];
            }
        }
    }

    //日期选择插件调用start sunle
    var opts1 = {
        'hms':'off',
        'targetId':'start_date',//时间写入对象的id
        'triggerId':['start_date'],//触发事件的对象id
        'alignId':'text_time1',//日历对齐对象
        'format':'-'//时间格式 默认'YYYY-MM-DD HH:MM:SS'
    },opts2 = {
        'hms':'off',
        'targetId':'end_date',
        'triggerId':['end_date'],
        'alignId':'text_time2',
        'format':'-'
    }

    xvDate(opts1);
    xvDate(opts2);
    //日期选择插件调用end sunle

    //导出报表
    $('.fbutton').click(function(){
        var start_date=get_unix_time($('input[name=start_date]').val());
        var end_date=get_unix_time($('input[name=end_date]').val());
        location.href='guest_stats.php?flag=download';
    });
    function get_unix_time(dateStr)
    {
        var newstr = dateStr.replace(/-/g,'/');
        var date =  new Date(newstr);
        var time_str = date.getTime().toString();
        return time_str.substr(0, 10);
    }
</script>
</body>
</html>

