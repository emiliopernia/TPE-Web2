<?php
/* Smarty version 3.1.39, created on 2021-11-25 01:42:29
  from 'C:\xampp\htdocs\Web2\TpePernia\templates\fightersTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619edbf5249c46_43538887',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0a16119d75d6fbc11a540b8dbda489688b400bc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\TpePernia\\templates\\fightersTable.tpl',
      1 => 1637800932,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_619edbf5249c46_43538887 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 class="table-title">Peleadores</h1>
<div class="filter">
    <form action="fighters" method=POST>
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
            <?php if ((isset($_SESSION['email']))) {?>
                <td><a href="deleteFighter/<?php echo $_smarty_tpl->tpl_vars['fighter']->value->id_fighter;?>
"><img src="images/bin.png" alt="Borrar"></a></td>
                <td><a href="editFighterPage/<?php echo $_smarty_tpl->tpl_vars['fighter']->value->id_fighter;?>
"><img src="images/edit.png" alt="Editar"></a></td>
            <?php }?>
        </tr> 
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        
    </tbody>
</table>

<?php if ((isset($_SESSION['email']))) {?>

    <div class="formsWrapper">
        <div class="formEdit">
            <form action="addFighter" method=POST>
                <h2>Agregar Peleadores</h2>
                <label>Nombre y Apellido</label>
                <input name="name" type="text" placeholder="Nombre y Apellido..." required>
                <label>Apodo</label>
                <input name="nickname" type="text" placeholder="Apodo..." required>
                <label>Nacionalidad</label>
                <input name="nationality" type="text" placeholder="Nacionalidad..." required>
                <label>Edad</label>
                <input name="age" type="number" placeholder="Edad..." required>
                <label>Record</label>
                <input name="record" type="text" placeholder="0/0/0" required>
                <label>Altura</label>
                <input name="height" type="number" placeholder="Altura en cm..." required>
                <label>Peso</label>
                <input name="weight" type="number" placeholder="Peso en kg..." required>
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
                <input name="rank" type="number" placeholder="ranking..." required>

                <button>CARGAR</button>        
            </form>   
        </div>

        <div class="formEdit">
            <form action="createWeightclass" method=POST>
                <h2>Crear Categoria</h2>
                <label>Categoria</label>
                <input name="weightclass" type="text" placeholder="Categoria..." required>
                <label>Peso Maximo</label>
                <input name="maxWeight" type="number" placeholder="Peso Maximo..." required>
                <label>Peso Minimo</label>
                <input name="minWeight" type="number" placeholder="Peso Minimo..." required>
                <button>ENVIAR</button>
            </form>
            
            <form action="editWeightclass" method=POST>
                <h2>Editar Categoria</h2>
                <select name= "id">
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
                <label>Categoria</label>
                <input name="weightclass" type="text" placeholder="Categoria..." required>
                <label>Peso Maximo</label>
                <input name="maxWeight" type="number" placeholder="Peso Maximo..." required>
                <label>Peso Minimo</label>
                <input name="minWeight" type="number" placeholder="Peso Minimo..." required>
                <button>ENVIAR</button>
            </form>
            
            <form action="deleteWeightclass" method=POST>
                <h2>Borrar Categoria</h2>
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
                <button>ENVIAR</button>
            </form>
        </div>
    </div>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
