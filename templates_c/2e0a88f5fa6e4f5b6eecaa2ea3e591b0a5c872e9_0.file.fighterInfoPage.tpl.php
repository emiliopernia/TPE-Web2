<?php
/* Smarty version 3.1.39, created on 2021-10-13 22:48:01
  from 'C:\xampp\htdocs\Web2\TpePernia\templates\fighterInfoPage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61674601c1b7c4_69324397',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e0a88f5fa6e4f5b6eecaa2ea3e591b0a5c872e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\TpePernia\\templates\\fighterInfoPage.tpl',
      1 => 1634158080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61674601c1b7c4_69324397 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="fighterWraper">
    <button><a href='fighters'><img src="images/botonBack.png" alt="Volver"></a></button>
    <div class="listWraper">
        <ul>
            <img src="images/fightersImg/<?php echo $_smarty_tpl->tpl_vars['fighter']->value->id_fighter;?>
.png" alt="foto:<?php echo $_smarty_tpl->tpl_vars['fighter']->value->name;?>
">
            <li>Nombre: <?php echo $_smarty_tpl->tpl_vars['fighter']->value->name;?>
</li>
            <li>Apodo: <?php echo $_smarty_tpl->tpl_vars['fighter']->value->nickname;?>
</li>
            <li>Categoria: <?php echo $_smarty_tpl->tpl_vars['fighter']->value->weightClassName;?>
</li>
            <li>Nacionalidad: <?php echo $_smarty_tpl->tpl_vars['fighter']->value->nationality;?>
</li>
            <li>Edad: <?php echo $_smarty_tpl->tpl_vars['fighter']->value->age;?>
</li>
            <li>Record: <?php echo $_smarty_tpl->tpl_vars['fighter']->value->record;?>
</li>
            <li>Altura (cm): <?php echo $_smarty_tpl->tpl_vars['fighter']->value->height;?>
</li>
            <li>Peso (kg): <?php echo $_smarty_tpl->tpl_vars['fighter']->value->weight;?>
</li>
        </ul>
    </div>
</div><?php }
}
