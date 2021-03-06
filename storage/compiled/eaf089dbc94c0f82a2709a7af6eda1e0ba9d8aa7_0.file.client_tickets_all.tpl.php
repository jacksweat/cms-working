<?php
/* Smarty version 3.1.32, created on 2018-06-18 11:01:22
  from '/Users/razib/Dropbox/valet/stackb/ui/theme/default/client_tickets_all.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b27c9427e3b30_58280213',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eaf089dbc94c0f82a2709a7af6eda1e0ba9d8aa7' => 
    array (
      0 => '/Users/razib/Dropbox/valet/stackb/ui/theme/default/client_tickets_all.tpl',
      1 => 1529334077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b27c9427e3b30_58280213 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4007914225b27c9427d36a9_45741062', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['layouts_client']->value));
}
/* {block "content"} */
class Block_4007914225b27c9427d36a9_45741062 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4007914225b27c9427d36a9_45741062',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="row">
        <div class="col-md-12">
            <div class="ibox">
                <div class="ibox-title">
                    <h5>List Tickets</h5>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/tickets/new/" class="btn btn-xs pull-right btn-primary"><i class="icon-mail"></i> Open New Ticket</a>
                </div>
                <div class="ibox-content">
                    <table class="table table-hover table-vcenter">
                        <tbody>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ds']->value, 'd');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
?>
                            <tr>
                                <td class="text-center" style="width: 140px;"><a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/tickets/view/<?php echo $_smarty_tpl->tpl_vars['d']->value['tid'];?>
/">#<?php echo $_smarty_tpl->tpl_vars['d']->value['tid'];?>
</a></td>
                                <td class="hidden-xs hidden-sm hidden-md text-center" style="width: 100px;">
                                    <span class="label label-success"><?php echo $_smarty_tpl->tpl_vars['d']->value['status'];?>
</span>
                                </td>
                                <td>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
client/tickets/view/<?php echo $_smarty_tpl->tpl_vars['d']->value['tid'];?>
/"><?php echo $_smarty_tpl->tpl_vars['d']->value['subject'];?>
</a>
                                    <div class="text-muted">
                                        <em>Updated </em> <em class="mmnt"><?php echo strtotime($_smarty_tpl->tpl_vars['d']->value['updated_at']);?>
</em> by <a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
tickets/client/view/<?php echo $_smarty_tpl->tpl_vars['d']->value['tid'];?>
/"><?php echo $_smarty_tpl->tpl_vars['d']->value['last_reply'];?>
</a>
                                    </div>
                                </td>


                            </tr>

                            <?php
}
} else {
?>
                            <tr><td align="center" style="border-top: none">You do not have any Tickets</td></tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>




<?php
}
}
/* {/block "content"} */
}
