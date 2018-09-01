<<<<<<< HEAD
<?php $_from = $this->_var['ad_child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad_0_56871900_1535422894');$this->_foreach['noad'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['noad']['total'] > 0):
    foreach ($_from AS $this->_var['ad_0_56871900_1535422894']):
        $this->_foreach['noad']['iteration']++;
?>
<div class="home-brand-adv slide_lr_info"><a href="<?php echo $this->_var['ad_0_56871900_1535422894']['ad_link']; ?>" target="_blank"><img src="<?php echo $this->_var['ad_0_56871900_1535422894']['ad_code']; ?>" width="<?php echo $this->_var['ad_0_56871900_1535422894']['ad_width']; ?>" height="<?php echo $this->_var['ad_0_56871900_1535422894']['ad_height']; ?>" class="slide_lr_img"></a></div>
=======
<?php $_from = $this->_var['ad_child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad_0_42285100_1535416338');$this->_foreach['noad'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['noad']['total'] > 0):
    foreach ($_from AS $this->_var['ad_0_42285100_1535416338']):
        $this->_foreach['noad']['iteration']++;
?>
<div class="home-brand-adv slide_lr_info"><a href="<?php echo $this->_var['ad_0_42285100_1535416338']['ad_link']; ?>" target="_blank"><img src="<?php echo $this->_var['ad_0_42285100_1535416338']['ad_code']; ?>" width="<?php echo $this->_var['ad_0_42285100_1535416338']['ad_width']; ?>" height="<?php echo $this->_var['ad_0_42285100_1535416338']['ad_height']; ?>" class="slide_lr_img"></a></div>
>>>>>>> 94191bd925c8b9e84f91a6fed89f388f081bea79
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
