<?php
/* Smarty version 3.1.39, created on 2021-04-18 14:25:25
  from 'C:\Serwery i inne szmery\xamp\htdocs\projekt9_routing\app\views\loginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607c2535afdf24_16284056',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f308a4904f8838c74dfcf6f59c51c66e69c6e18f' => 
    array (
      0 => 'C:\\Serwery i inne szmery\\xamp\\htdocs\\projekt9_routing\\app\\views\\loginView.tpl',
      1 => 1618748135,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_607c2535afdf24_16284056 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130171636607c2535af6c60_55040637', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_130171636607c2535af6c60_55040637 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_130171636607c2535af6c60_55040637',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <div class="box">
	<div class="content">
            <h2 class="align-center">Logowanie</h2>
            <hr />
            <div class="l-box-lrg pure-u-1 pure-u-med-2-5" style="width:30%;margin: 2em auto;">
		<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post">
                    <fieldset>
		<div class="field half first">
                    <label for="id_login">Login:</label>
                    <input name="login" id="id_login" type="text" placeholder="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
">
		</div>
		<div class="field half">
                    <label for="id_pass">Hasło:</label>
                    <input name="pass" id="id_pass" type="password" placeholder="hasło" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->pass;?>
">
		</div>
		<ul class="actions align-center">
                    <li><input value="Zaloguj" class="button special" type="submit"></li>
		</ul>
                    </fieldset>
		</form>
	</div>
    </div>
    </div>

<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'content'} */
}
