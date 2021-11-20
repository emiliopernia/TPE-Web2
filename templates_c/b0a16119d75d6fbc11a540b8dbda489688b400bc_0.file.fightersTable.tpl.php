<?php
/* Smarty version 3.1.39, created on 2021-11-20 12:24:58
  from 'C:\xampp\htdocs\Web2\TpePernia\templates\fightersTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6198db0a60ed42_80067459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0a16119d75d6fbc11a540b8dbda489688b400bc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\TpePernia\\templates\\fightersTable.tpl',
      1 => 1637406813,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6198db0a60ed42_80067459 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="fighters-title">Peleadores</h1>
<div class="filter">
    <form action="showFightersByWeightclass" method=POST>
        <select name= "input_weightclass">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['weightclasses']->value, 'weightclass');
$_smarty_tpl->tpl_vars['weightclass']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['weightclass']->value) {
$_smarty_tpl->tpl_vars['weightclass']->do_else = false;
?>
                <option value='<?php echo $_smarty_tpl->tpl_vars['weightclass']->value->weightClass_id;?>
'><?php echo $_smarty_tpl->tpl_vars['weightclass']->value->weightClassName;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <button type="submit"> Ver categoria seleccionada</button>
        <button><a href='fighters'>Ver todos </a></button>
    </form>
</div>

<table class="table">
    <thead>
        <th>Nombre</th>
        <th>Apodo</th>
        <th>Categoria</th>
        <th>Estadisticas</th>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fighters']->value, 'fighter');
$_smarty_tpl->tpl_vars['fighter']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fighter']->value) {
$_smarty_tpl->tpl_vars['fighter']->do_else = false;
?>    
            <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['fighter']->value->name;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['fighter']->value->nickname;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['fighter']->value->weightClassName;?>
</td>
            <td><a href="showFighter/<?php echo $_smarty_tpl->tpl_vars['fighter']->value->id_fighter;?>
"><img src="images/boton.png" alt="Ver mas"></a></td>
        </tr> 
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
    </tbody>
</table>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
