
<div id="g-slider">
    <div id="g-scroll">
        <div class="silder-panel">
            <ul>
                <?php $_from = $this->_var['ad_child']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'ad');if (count($_from)):
    foreach ($_from AS $this->_var['ad']):
?>
                <li class="silder-item" style="background:<?php echo $this->_var['ad']['link_color']; ?>;"><div class="w1200 w"><a href="<?php echo $this->_var['ad']['ad_link']; ?>" target="_blank"><img src="<?php echo $this->_var['ad']['ad_code']; ?>" width="<?php echo $this->_var['ad']['ad_width']; ?>" height="<?php echo $this->_var['ad']['ad_height']; ?>" /></a></div></li>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </ul>
        </div>
        <div class="num-ctrl"><ul></ul></div>
    </div>
</div>