<div class="marBanner">
    <?php $_from = $this->_var['ad_child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child_0_55957000_1535356131');if (count($_from)):
    foreach ($_from AS $this->_var['child_0_55957000_1535356131']):
?>
        <a href="<?php echo $this->_var['child_0_55957000_1535356131']['ad_link']; ?>" target="_blank"><img src="<?php echo $this->_var['child_0_55957000_1535356131']['ad_code']; ?>" width="<?php echo $this->_var['child_0_55957000_1535356131']['ad_width']; ?>" height="<?php echo $this->_var['child_0_55957000_1535356131']['ad_height']; ?>" alt="" /></a>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>                             	
</div>
