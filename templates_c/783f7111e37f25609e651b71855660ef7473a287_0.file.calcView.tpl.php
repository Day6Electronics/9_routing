<?php
/* Smarty version 3.1.39, created on 2021-04-18 15:41:45
  from 'C:\Serwery i inne szmery\xamp\htdocs\projekt9_routing\app\views\calcView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607c3719cfc235_67587450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '783f7111e37f25609e651b71855660ef7473a287' => 
    array (
      0 => 'C:\\Serwery i inne szmery\\xamp\\htdocs\\projekt9_routing\\app\\views\\calcView.tpl',
      1 => 1618753304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_607c3719cfc235_67587450 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_77704822607c3719cf3f22_01215138', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_77704822607c3719cf3f22_01215138 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_77704822607c3719cf3f22_01215138',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


            <style scoped="">
                .button-logout{
                    border-radius: 6px;
                    background: rgb(230, 150, 50);
                    font-size: 100%;
                }
            </style>
                       
    <div class="box">
	<div class="content">
            <a class="button-logout button" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout">Wyloguj</a>
            <span style="float:right;">Użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, Rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</span>
            <h2 class="align-center">Oblicz rezystor</h2>
            <hr />
            <div class="l-box-lrg pure-u-1 pure-u-med-2-5" style="width:40%;margin: 2em auto;">
		<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcCompute" method="post">
                    <fieldset>
		<div class="field half first">
                    <label for="v1">Napięcie zasilania (V):</label>
                    <input name="v1" id="v1" type="text" placeholder="Napięcie zasilania (V)" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->v1;?>
">
		</div>
		<div class="field half">
                    <label for="v2">Napięcie przewodzenia (V):</label>
                    <input name="v2" id="v2" type="text" placeholder="Napięcie przewodzenia (V)" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->v2;?>
">
		</div>
		<div class="field half first">
                    <label for="amp">Prąd przewodzenia (mA):</label>
                    <input name="amp" id="amp" type="text" placeholder="Prąd przewodzenia (mA)" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->amp;?>
">
		</div>
		<ul class="actions align-center">
                    <li><input value="Oblicz wartość rezystora" class="button special" type="submit"></li>
		</ul>
                    </fieldset>
		</form>
	</div>
    </div>
    </div>

<div style="width:90%; margin: 2em auto;">
    
<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ((isset($_smarty_tpl->tpl_vars['resistor']->value->resistor))) {?>
	<h4>Wynik:</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['resistor']->value->resistor;?>
 Ohm
	</p>
<?php }?>
</div>
<?php
}
}
/* {/block 'content'} */
}
