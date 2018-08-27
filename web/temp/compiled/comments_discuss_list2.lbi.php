<div class="discuss-list" style="display:;">
    <?php $_from = $this->_var['discuss_list']['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'list');if (count($_from)):
    foreach ($_from AS $this->_var['list']):
?>
    <div class="discuss-item">
        <div class="u-ico"><img src="<?php if ($this->_var['list']['user_picture']): ?><?php echo $this->_var['list']['user_picture']; ?><?php else: ?>themes/<?php echo $GLOBALS['_CFG']['template']; ?>/images/touxiang.jpg<?php endif; ?>"></div>
        <div class="ud-right d-i-info">
            <div class="d-i-name">
                <?php if ($this->_var['list']['dis_type'] == 1): ?>
                <i class="icon icon-tie icon-tao"></i>
                <?php elseif ($this->_var['list']['dis_type'] == 2): ?>
                <i class="icon icon-tie icon-wen"></i>
                <?php elseif ($this->_var['list']['dis_type'] == 3): ?>
                <i class="icon icon-tie icon-quan"></i>
                <?php elseif ($this->_var['list']['dis_type'] == 4): ?>
                <i class="icon icon-tie icon-shai"></i>
                <?php endif; ?>
                <?php if ($this->_var['list']['dis_type'] == 4): ?>
                <a href="single_sun.php?act=discuss_show&did=<?php echo $this->_var['list']['dis_id']; ?>&dis_type=4" target="_blank"><?php echo $this->_var['list']['dis_title']; ?></a>
                <?php else: ?>
                <a href="single_sun.php?act=discuss_show&did=<?php echo $this->_var['list']['dis_id']; ?>" target="_blank"><?php echo $this->_var['list']['dis_title']; ?></a>
                <?php endif; ?>
            </div>
            <div class="d-i-lie">
                <div class="fl">
                    <div class="user-name"><?php echo $this->_var['list']['user_name']; ?></div>
                    <div class="time"><?php echo $this->_var['list']['add_time']; ?></div>
                </div>
                <div class="fr">
                    <span class="browse"><i class="iconfont icon-eye-open"></i> <?php echo $this->_var['list']['dis_browse_num']; ?></span>
                    <span class="comment"><i class="iconfont icon-comment"></i> <?php echo $this->_var['list']['reply_num']; ?></span>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; else: ?>
    <div class="no_records">
        <i class="no_icon_two"></i>
        <div class="no_info">
            <h3><?php echo $this->_var['lang']['information_null']; ?></h3>
        </div>
    </div>
    <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>	
    <div class="pages26">
        <div class="pages">
            <div class="pages-it">
                <?php echo $this->_var['discuss_list']['pager']; ?>
            </div>
        </div>
    </div>
</div>