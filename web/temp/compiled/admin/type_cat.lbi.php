<?php if ($this->_var['type_html'] != 1): ?>
<div id="parent_id<?php echo $this->_var['level']; ?>" data-level="<?php echo $this->_var['level']; ?>" class="imitate_select select_w145" ectype="typeCatSelect">
    <div class="cite"><?php echo $this->_var['lang']['select_cat']; ?></div>
    <ul style="display: block">
        <li><a href="javascript:;" data-value="0" data-level=<?php echo $this->_var['level']; ?> <?php if ($this->_var['typeCat']): ?>data-cat="1"<?php endif; ?> class="ftx-01"><?php echo $this->_var['lang']['select_cat']; ?></a></li>
        <?php $_from = $this->_var['child_cat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
        <li><a href="javascript:;"data-value="<?php echo $this->_var['cat']['cat_id']; ?>" data-text="<?php echo $this->_var['cat']['cat_name']; ?>" data-level="<?php echo $this->_var['cat']['level']; ?>" <?php if ($this->_var['typeCat']): ?>data-cat="1"<?php endif; ?> class="ftx-01"><?php echo $this->_var['cat']['cat_name']; ?></a></li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
    <input name="" type="hidden" value="0" id="parent_id_val<?php echo $this->_var['level']; ?>" ectype="typeCatVal">
</div>
<?php else: ?>
    <li><a href="javascript:<?php if (! $this->_var['typeCat']): ?>getAttrList(<?php echo empty($this->_var['goods']['goods_id']) ? '0' : $this->_var['goods']['goods_id']; ?>)<?php endif; ?>;" <?php if ($this->_var['typeCat']): ?>onclick="changeCat(this)"<?php endif; ?> data-value="0" class="ftx-01"><?php echo $this->_var['lang']['please_select_goods_type']; ?></a></li>
    <?php $_from = $this->_var['goods_type_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'goods_type');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['goods_type']):
?>
    <li><a href="javascript:<?php if (! $this->_var['typeCat']): ?>getAttrList(<?php echo empty($this->_var['goods']['goods_id']) ? '0' : $this->_var['goods']['goods_id']; ?>)<?php endif; ?>;" <?php if ($this->_var['typeCat']): ?>onclick="changeCat(this)"<?php endif; ?> data-value="<?php echo $this->_var['goods_type']['cat_id']; ?>" class="ftx-01"><?php echo $this->_var['goods_type']['cat_name']; ?></a></li>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php endif; ?>