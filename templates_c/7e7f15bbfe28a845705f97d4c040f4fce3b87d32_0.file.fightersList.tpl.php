<?php
/* Smarty version 3.1.39, created on 2021-10-05 01:35:09
  from 'C:\xampp\htdocs\Web2\TpePernia\templates\fightersList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615b8fad127438_74928451',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7e7f15bbfe28a845705f97d4c040f4fce3b87d32' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\TpePernia\\templates\\fightersList.tpl',
      1 => 1633390490,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615b8fad127438_74928451 (Smarty_Internal_Template $_smarty_tpl) {
?><h1 class="title">Peleadores</h1>
<div class="filter">
    <form action="weightclass" method=POST>
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
">[algun boton]</a></td>
        </tr> 
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
    </tbody>
</table>
<?php }
}
