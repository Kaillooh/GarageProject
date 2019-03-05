<?php
/* Smarty version 3.1.33, created on 2019-02-24 19:08:59
  from '/home/kaillooh/Documents/GarageProject/Prestashop/modules/welcome/views/templates/tooltip.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c72ddbb31b6f2_94776494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f835be17c0274b1e0568dce81567d807ce0471a7' => 
    array (
      0 => '/home/kaillooh/Documents/GarageProject/Prestashop/modules/welcome/views/templates/tooltip.tpl',
      1 => 1551031431,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c72ddbb31b6f2_94776494 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl ) );?>
</button>
</div>
<?php }
}
