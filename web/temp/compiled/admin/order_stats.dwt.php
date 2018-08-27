<!doctype html>
<html>
<head><?php echo $this->fetch('library/admin_html_head.lbi'); ?></head>

<body class="iframe_body">
<div class="warpper">
    <div class="title"><?php echo $this->_var['lang']['report_form']; ?> - <?php echo $this->_var['lang']['report_order']; ?></div>
    <div class="content">
        <div class="explanation" id="explanation">
            <div class="ex_tit"><i class="sc_icon"></i><h4><?php echo $this->_var['lang']['operating_hints']; ?></h4><span id="explanationZoom" title="<?php echo $this->_var['lang']['fold_tips']; ?>"></span></div>
            <ul>
                <li><?php echo $this->_var['lang']['operation_prompt_content']['stats']['0']; ?></li>
                <li><?php echo $this->_var['lang']['operation_prompt_content']['stats']['1']; ?></li>
            </ul>
        </div>
        <div class="flexilist mt30">
            <div class="common-head">
                <div class="fl">
                    <div class="fbutton"><div class="csv" title="<?php echo $this->_var['lang']['export_list']; ?>"><span><i class="icon icon-download-alt"></i><?php echo $this->_var['lang']['export_list']; ?></span></div></div>
                </div>
                <div class="total_items">
                    <ul>
                        <li><?php echo $this->_var['lang']['order_stats_01']; ?>：<b><?php echo $this->_var['order_total']; ?></b></li>
                        <li><?php echo $this->_var['lang']['order_stats_02']; ?>：<b><?php echo $this->_var['total_turnover']; ?></b></li>
                        <li><?php echo $this->_var['lang']['order_stats_03']; ?>：<b><?php echo $this->_var['click_count']; ?></b></li>
                        <li><?php echo $this->_var['lang']['order_stats_04']; ?>：<b><?php echo $this->_var['click_ordernum']; ?></b></li>
                        <li><?php echo $this->_var['lang']['order_stats_05']; ?>：<b><?php echo $this->_var['click_turnover']; ?></b></li>
                    </ul>
                </div>
            </div>
            <div class="common-content">
                <div class="mian-info">
                    <div class="switch_info">
                        <div class="stat_order_search">
                            <div class="search_item">
                                <form action="" method="post" id="selectForm" name="selectForm">
                                    <strong><?php echo $this->_var['lang']['start_end_data']; ?>：</strong>
                                    <div class="text_time" id="text_time_start">
                                        <input type="text" class="text" name="start_date" value="<?php echo $this->_var['start_date']; ?>" id="start_date" value="" autocomplete="off" readonly>
                                    </div>
                                    <span class="bolang">&nbsp;&nbsp;~&nbsp;&nbsp;</span>
                                    <div class="text_time" id="text_time_end">
                                        <input type="text" class="text" name="end_date" value="<?php echo $this->_var['end_date']; ?>" id="end_date" value="" autocomplete="off" readonly>
                                    </div>
                                    <a href="javascript:void(0);" onclick="$('#selectForm').submit()" class="btn btn30 blue_btn" ectype="query"><i class="icon icon-search"></i><?php echo $this->_var['lang']['query']; ?></a>
                                </form>
                            </div>   
                            <div class="search_item">
                                <strong><?php echo $this->_var['lang']['query_years']; ?>：</strong>
                                <form method="post" id="selectForm_2" name="selectForm_2">
                                    <!--<?php $_from = $this->_var['start_date_arr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('k', 'start_date_0_83610700_1535070554');if (count($_from)):
    foreach ($_from AS $this->_var['k'] => $this->_var['start_date_0_83610700_1535070554']):
?>-->
                                    <?php if ($this->_var['k'] > 0): ?>
                                    <span class="bolang">&nbsp;&nbsp;+&nbsp;&nbsp;</span>
                                    <?php endif; ?>
                                    <div class="text_time" id="text_time_start">
                                        <input type="text" class="text" name="year_month[]" id="year_month_<?php echo $this->_var['k']; ?>" value="<?php echo $this->_var['start_date_0_83610700_1535070554']; ?>" autocomplete="off" readonly>
                                    </div>
                                    <!--<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>-->
                                    <input type="hidden" name="is_multi" value="1" />
                                	<a href="javascript:;" onclick="$('#selectForm_2').submit()" class="btn btn30 blue_btn" ectype="query"><i class="icon icon-search"></i><?php echo $this->_var['lang']['query']; ?></a>
                                </form>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="stat_order_warp">
                            <div class="stat_order_tabs">
                                <ul>
                                    <li class="current"><?php echo $this->_var['lang']['order_survey']; ?></li>
                                    <li><?php echo $this->_var['lang']['distribution_mode']; ?></li>
                                    <li><?php echo $this->_var['lang']['payment_method']; ?></li>
                                    <li><?php echo $this->_var['lang']['distribution_area']; ?></li>
                                </ul>
                            </div>
                            <div class="stat_order_content">
                            	<div class="stat_order_item">
                                	<div id="order_main" style="height:378px;"></div>
                                    <div id="order_main_price" style="height:378px;"></div>
                                </div>
                                <div class="stat_order_item">
                                	<div id="ship_main" style="width:970px; height:500px; margin:0 auto;"></div>
                                </div>
                                <div class="stat_order_item">
                                	<div id="pay_main" style="width:970px; height:500px; margin:0 auto;"></div>
                                </div>
                                <div class="stat_order_item">
                                	<div id="area_main" style="width:970px; height:500px; margin:0 auto;"></div>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $this->fetch('library/pagefooter.lbi'); ?>
<script type="text/javascript" src="js/region.js"></script>
<script type="text/javascript" src="../js/echarts-all.js"></script>
<script type="text/javascript" src="../js/jquery.SuperSlide.2.1.1.js"></script>
<script type="text/javascript">
	//统计数据 start
	var is_multi = <?php if ($this->_var['is_multi']): ?>true<?php else: ?>false<?php endif; ?>;
	var order_data = <?php if ($this->_var['order_data']): ?><?php echo $this->_var['order_data']; ?><?php else: ?>''<?php endif; ?>;
	var sale_data = <?php if ($this->_var['sale_data']): ?><?php echo $this->_var['sale_data']; ?><?php else: ?>''<?php endif; ?>;
	var ship_data = <?php if ($this->_var['ship_data']): ?><?php echo $this->_var['ship_data']; ?><?php else: ?>''<?php endif; ?>;
	var pay_data = <?php if ($this->_var['pay_data']): ?><?php echo $this->_var['pay_data']; ?><?php else: ?>''<?php endif; ?>;
	var area_data = <?php if ($this->_var['area_data']): ?><?php echo $this->_var['area_data']; ?><?php else: ?>''<?php endif; ?>;

	var myChart_order = echarts.init(document.getElementById("order_main"));
	var myChart_ship = echarts.init(document.getElementById("ship_main"));
	var myChart_pay = echarts.init(document.getElementById("pay_main"));
	var myChart_area = echarts.init(document.getElementById("area_main"));
	var myChart_price = echarts.init(document.getElementById("order_main_price"));
	
	if(is_multi){
		//订单概况
		var option_order = {
			title : {
				text: '<?php echo $this->_var['lang']['order_survey']; ?>',
				subtext: ''
			},
			tooltip : {
				trigger: 'axis'
			},
			legend: {
				data:['<?php echo $this->_var['lang']['order_state_01']; ?>','<?php echo $this->_var['lang']['order_state_02']; ?>',"<?php echo $this->_var['lang']['order_state_03']; ?>","<?php echo $this->_var['lang']['order_state_04']; ?>"]
			},
			toolbox: {
				show : true,
				feature : {
					magicType : {show: true, type: ['line', 'bar']},
					restore : {show: true},
					saveAsImage : {show: true}
				}
			},
			calculable : true,
			xAxis : [
				{
					type : 'category',
					data : order_data[0]
				}
			],
			yAxis : [
				{
					type : 'value'
				}
			],
			series : [
				{
					name:'<?php echo $this->_var['lang']['order_state_01']; ?>',
					type:'bar',
					data:order_data[1],
					markPoint : {
						data : [
							{type : 'max', name: '<?php echo $this->_var['lang']['max_value']; ?>'},
							{type : 'min', name: '<?php echo $this->_var['lang']['min_value']; ?>'}
						]
					},
					markLine : {
						data : [
							{type : 'average', name: '<?php echo $this->_var['lang']['average_value']; ?>'}
						]
					}
				},
				{
					name:'<?php echo $this->_var['lang']['order_state_02']; ?>',
					type:'bar',
					data:order_data[2],
					markPoint : {
						data : [
							{type : 'max', name: '<?php echo $this->_var['lang']['max_value']; ?>'},
							{type : 'min', name: '<?php echo $this->_var['lang']['min_value']; ?>'}
						]
					},
					markLine : {
						data : [
							{type : 'average', name : '<?php echo $this->_var['lang']['average_value']; ?>'}
						]
					}
				},
				{
					name:'<?php echo $this->_var['lang']['order_state_03']; ?>',
					type:'bar',
					data:order_data[3],
					markPoint : {
						data : [
							{type : 'max', name: '<?php echo $this->_var['lang']['max_value']; ?>'},
							{type : 'min', name: '<?php echo $this->_var['lang']['min_value']; ?>'}
						]
					},
					markLine : {
						data : [
							{type : 'average', name : '<?php echo $this->_var['lang']['average_value']; ?>'}
						]
					}
				},
				{
					name:'<?php echo $this->_var['lang']['order_state_04']; ?>',
					type:'bar',
					data:order_data[4],
					markPoint : {
						data : [
							{type : 'max', name: '<?php echo $this->_var['lang']['max_value']; ?>'},
							{type : 'min', name: '<?php echo $this->_var['lang']['min_value']; ?>'}
						]
					},
					markLine : {
						data : [
							{type : 'average', name : '<?php echo $this->_var['lang']['average_value']; ?>'}
						]
					}
				}
			]
		};

		//订单概况
		var option_sale = {
			title : {
				text: '<?php echo $this->_var['lang']['sale_survey']; ?>',
				subtext: ''
			},
			tooltip : {
				trigger: 'axis'
			},
			legend: {
				data:['<?php echo $this->_var['lang']['order_state_01']; ?>','<?php echo $this->_var['lang']['order_state_02']; ?>',"<?php echo $this->_var['lang']['order_state_03']; ?>","<?php echo $this->_var['lang']['order_state_04']; ?>"]
			},
			toolbox: {
				show : true,
				feature : {
					magicType : {show: true, type: ['line', 'bar']},
					restore : {show: true},
					saveAsImage : {show: true}
				}
			},
			calculable : true,
			xAxis : [
				{
					type : 'category',
					data : sale_data[0]
				}
			],
			yAxis : [
				{
					type : 'value'
				}
			],
			series : [
				{
					name:'<?php echo $this->_var['lang']['order_state_01']; ?>',
					type:'bar',
					data:sale_data[1],
					markPoint : {
						data : [
							{type : 'max', name: '<?php echo $this->_var['lang']['max_value']; ?>'},
							{type : 'min', name: '<?php echo $this->_var['lang']['min_value']; ?>'}
						]
					},
					markLine : {
						data : [
							{type : 'average', name: '<?php echo $this->_var['lang']['average_value']; ?>'}
						]
					}
				},
				{
					name:'<?php echo $this->_var['lang']['order_state_02']; ?>',
					type:'bar',
					data:sale_data[2],
					markPoint : {
						data : [
							{type : 'max', name: '<?php echo $this->_var['lang']['max_value']; ?>'},
							{type : 'min', name: '<?php echo $this->_var['lang']['min_value']; ?>'}
						]
					},
					markLine : {
						data : [
							{type : 'average', name : '<?php echo $this->_var['lang']['average_value']; ?>'}
						]
					}
				},
				{
					name:'<?php echo $this->_var['lang']['order_state_03']; ?>',
					type:'bar',
					data:sale_data[3],
					markPoint : {
						data : [
							{type : 'max', name: '<?php echo $this->_var['lang']['max_value']; ?>'},
							{type : 'min', name: '<?php echo $this->_var['lang']['min_value']; ?>'}
						]
					},
					markLine : {
						data : [
							{type : 'average', name : '<?php echo $this->_var['lang']['average_value']; ?>'}
						]
					}
				},
				{
					name:'<?php echo $this->_var['lang']['order_state_04']; ?>',
					type:'bar',
					data:sale_data[4],
					markPoint : {
						data : [
							{type : 'max', name: '<?php echo $this->_var['lang']['max_value']; ?>'},
							{type : 'min', name: '<?php echo $this->_var['lang']['min_value']; ?>'}
						]
					},
					markLine : {
						data : [
							{type : 'average', name : '<?php echo $this->_var['lang']['average_value']; ?>'}
						]
					}
				}
			]
		};
	}else{
	}
	
	//配送方式
	option_ship = {
		title : {
			text: '<?php echo $this->_var['lang']['distribution_mode']; ?>',
			subtext: '',
		},
		tooltip : {
			trigger: 'item',
			formatter: "{a} <br/>{b} : {c} ({d}%)"
		},
		legend: {
			data: ship_data[0]
		},
		series : [
			{
				name: '<?php echo $this->_var['lang']['access_source']; ?>',
				type: 'pie',
				radius : '55%',
				center: ['50%', '60%'],
				data: ship_data[1],
				itemStyle: {
					emphasis: {
						shadowBlur: 10,
						shadowOffsetX: 0,
						shadowColor: 'rgba(0, 0, 0, 0.5)'
					}
				}
			}
		]
	};
	
	//支付方式
	option_pay = {
		title : {
			text: '<?php echo $this->_var['lang']['payment_method']; ?>',
			subtext: '',
		},
		tooltip : {
			trigger: 'item',
			formatter: "{a} <br/>{b} : {c} ({d}%)"
		},
		legend: {
			data: pay_data[0]
		},
		series : [
			{
				name: '<?php echo $this->_var['lang']['access_source']; ?>',
				type: 'pie',
				radius : '55%',
				center: ['50%', '60%'],
				data: pay_data[1],
				itemStyle: {
					emphasis: {
						shadowBlur: 10,
						shadowOffsetX: 0,
						shadowColor: 'rgba(0, 0, 0, 0.5)'
					}
				}
			}
		]
	};

	//配送地区
	option_area = {
		title : {
			text: '<?php echo $this->_var['lang']['distribution_area']; ?>',
			subtext: '',
		},
		tooltip : {
			trigger: 'item',
			formatter: "{a} <br/>{b} : {c} ({d}%)"
		},
		legend: {
			data: area_data[0]
		},
		series : [
			{
				name: '<?php echo $this->_var['lang']['access_source']; ?>',
				type: 'pie',
				radius : '55%',
				center: ['50%', '60%'],
				data: area_data[1],
				itemStyle: {
					emphasis: {
						shadowBlur: 10,
						shadowOffsetX: 0,
						shadowColor: 'rgba(0, 0, 0, 0.5)'
					}
				}
			}
		]
	};
	
	if(is_multi){
		//订单概况
		myChart_order.setOption(option_order);
		myChart_price.setOption(option_sale);
	}else{
		//订单概况
		myChart_order.setOption(order_data['order']);
		myChart_price.setOption(order_data['sale']);
	}
	//配送方式
	myChart_ship.setOption(option_ship);
	//支付方式
	myChart_pay.setOption(option_pay);
	//配送地区
	myChart_area.setOption(option_area);	
	//统计数据 end
	
	$(".stat_order_warp").slide({titCell:".stat_order_tabs ul li",mainCell:".stat_order_content",trigger:"click",titOnClassName:"current",});
	
    //地区三级联动调用
    $.levelLink();
	
    //时间选择1
    var opts1 = {
        'targetId':'start_date',
        'triggerId':['start_date'],
        'alignId':'text_time_start',
        'format':'-',
        'hms':'off'
    },opts2 = {
        'targetId':'end_date',
        'triggerId':['end_date'],
        'alignId':'text_time_end',
        'format':'-',
        'hms':'off'
    },
    opts3 = {
        'targetId':'year_month_0',
        'triggerId':['year_month_0'],
        'alignId':'year_month_0',
        'format':'-',
        'hms':'off'
    },opts4 = {
        'targetId':'year_month_1',
        'triggerId':['year_month_1'],
        'alignId':'year_month_1',
        'format':'-',
        'hms':'off'
    },opts5 = {
        'targetId':'year_month_2',
        'triggerId':['year_month_2'],
        'alignId':'year_month_2',
        'format':'-',
        'hms':'off'
    },opts6 = {
        'targetId':'year_month_3',
        'triggerId':['year_month_3'],
        'alignId':'year_month_3',
        'format':'-',
        'hms':'off'
    },opts7 = {
        'targetId':'year_month_4',
        'triggerId':['year_month_4'],
        'alignId':'year_month_4',
        'format':'-',
        'hms':'off'
    }

    xvDate(opts3);
    xvDate(opts4);
    xvDate(opts5);
    xvDate(opts6);
    xvDate(opts7);
    xvDate(opts1);
    xvDate(opts2);

    //导出报表
    $('.fbutton').click(function(){
        var start_date=get_unix_time($('input[name=start_date]').val());
        var end_date=get_unix_time($('input[name=end_date]').val());
        location.href='order_stats.php?act=download&start_date='+start_date+'&end_date='+end_date+'&filename='+start_date+'_'+end_date;
    });
    function get_unix_time(dateStr)
    {
        var newstr = dateStr.replace(/-/g,'/');
        var date =  new Date(newstr);
        var time_str = date.getTime().toString();
        return time_str.substr(0, 10);
    }
	
	function get_country(){
        var countries = $('#countries').val();
        var provinces = $('#provinces').val();
        Ajax.call('order_stats.php?act=area', "country="+countries+"&province="+provinces, get_Response, "POST", "TEXT");
    }
    function get_Response(res){
        $('#area_value').val('&dataXML=' + res);
        <?php if ($this->_var['is_multi'] == '0'): ?>
        var str = '<embed id="embed" src="images/charts/pie3d.swf?chartWidth=650&chartHeight=400" FlashVars="&dataXML=' + res + '"quality="high" bgcolor="#FFFFFF"  width="650" height="400" name="FCColumn2" wmode="opaque" align="middle" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer">';
        <?php else: ?>
        var str = '<embed id="embed" src="images/charts/MSColumn3D.swf?chartWidth=650&chartHeight=400" FlashVars="&dataXML=' + res + '"quality="high" bgcolor="#FFFFFF"  width="650" height="400" name="FCColumn2" wmode="opaque" align="middle" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer">';
        <?php endif; ?>
        $(str).replaceAll("#embed");
    }
</script>
</body>
</html>
