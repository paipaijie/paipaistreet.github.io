
<?php if ($this->_var['ad_child']): ?>
<?php if ($this->_var['floor_style_tpl'] == 1): ?>
	<?php $_from = $this->_var['ad_child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad_0_32571100_1535710636');$this->_foreach['noad'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['noad']['total'] > 0):
    foreach ($_from AS $this->_var['ad_0_32571100_1535710636']):
        $this->_foreach['noad']['iteration']++;
?>
		<a href="<?php echo $this->_var['ad_0_32571100_1535710636']['ad_link']; ?>" <?php if ($this->_foreach['noad']['iteration'] == 1): ?>class="mr10"<?php endif; ?> target="_blank"><img src="<?php echo $this->_var['ad_0_32571100_1535710636']['ad_code']; ?>" width="232" height="280"></a>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php elseif ($this->_var['floor_style_tpl'] == 2): ?>
	<?php $_from = $this->_var['ad_child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad_0_32571100_1535710636');$this->_foreach['noad'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['noad']['total'] > 0):
    foreach ($_from AS $this->_var['ad_0_32571100_1535710636']):
        $this->_foreach['noad']['iteration']++;
?>
		<a href="<?php echo $this->_var['ad_0_32571100_1535710636']['ad_link']; ?>" <?php if ($this->_foreach['noad']['iteration'] == 1): ?>class="mb10"<?php endif; ?> target="_blank"><img src="<?php echo $this->_var['ad_0_32571100_1535710636']['ad_code']; ?>" width="474" height="280"></a>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php elseif ($this->_var['floor_style_tpl'] == 3): ?>
	<?php $_from = $this->_var['ad_child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad_0_32571100_1535710636');$this->_foreach['noad'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['noad']['total'] > 0):
    foreach ($_from AS $this->_var['ad_0_32571100_1535710636']):
        $this->_foreach['noad']['iteration']++;
?>
		<a href="<?php echo $this->_var['ad_0_32571100_1535710636']['ad_link']; ?>" <?php if ($this->_foreach['noad']['iteration'] == 1): ?>class="mr10"<?php endif; ?> target="_blank"><img src="<?php echo $this->_var['ad_0_32571100_1535710636']['ad_code']; ?>" width="232" height="280"></a>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php else: ?>
	<?php $_from = $this->_var['ad_child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad_0_32571100_1535710636');$this->_foreach['noad'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['noad']['total'] > 0):
    foreach ($_from AS $this->_var['ad_0_32571100_1535710636']):
        $this->_foreach['noad']['iteration']++;
?>
		<a href="<?php echo $this->_var['ad_0_32571100_1535710636']['ad_link']; ?>" <?php if ($this->_foreach['noad']['iteration'] == 1): ?>class="mb10"<?php endif; ?> target="_blank"><img src="<?php echo $this->_var['ad_0_32571100_1535710636']['ad_code']; ?>"  width="232" height="280"></a>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php endif; ?>	
<?php endif; ?>