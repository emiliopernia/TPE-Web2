<?php
/* Smarty version 3.1.39, created on 2021-10-14 13:57:05
  from 'C:\xampp\htdocs\Web2\TpePernia\templates\editFighterForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61681b11595707_46485014',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b2f625553257f2de3c71aea2d1516b891aea6e7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\TpePernia\\templates\\editFighterForm.tpl',
      1 => 1634209641,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61681b11595707_46485014 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="formEdit">
    <form action="editFighter/<?php echo $_smarty_tpl->tpl_vars['fighter']->value->id_fighter;?>
" method=POST>
        <h2>Agregar Peleadores</h2>
        <label>Nombre y Apellido</label>
        <input name="name" type="text" value=<?php echo $_smarty_tpl->tpl_vars['fighter']->value->name;?>
 required>
        <label>Apodo</label>
        <input name="nickname" type="text" value=<?php echo $_smarty_tpl->tpl_vars['fighter']->value->nickname;?>
 required>
        <label>Nacionalidad</label>
        <input name="nationality" type="text" value=<?php echo $_smarty_tpl->tpl_vars['fighter']->value->nationality;?>
 required>
        <label>Edad</label>
        <input name="age" type="number" value=<?php echo $_smarty_tpl->tpl_vars['fighter']->value->age;?>
 required>
        <label>Record</label>
        <input name="record" type="text" value=<?php echo $_smarty_tpl->tpl_vars['fighter']->value->record;?>
 required>
        <label>Altura</label>
        <input name="height" type="number" value=<?php echo $_smarty_tpl->tpl_vars['fighter']->value->height;?>
 required>
        <label>Peso</label>
        <input name="weight" type="number" value=<?php echo $_smarty_tpl->tpl_vars['fighter']->value->weight;?>
 required>
        <label>Categoria</label>
        <select name= "weightclass">
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
        <label>Ranking</label>
        <input name="rank" type="number" value=<?php echo $_smarty_tpl->tpl_vars['fighter']->value->weightClassRank;?>
 required>
    
        <button>CARGAR</button>        
    </form>   
    
</div><?php }
}
