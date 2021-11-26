<?php
/* Smarty version 3.1.39, created on 2021-11-25 11:41:31
  from 'C:\xampp\htdocs\Web2\TpePernia\templates\fighterInfoPage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619f685b99bb90_39378770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e0a88f5fa6e4f5b6eecaa2ea3e591b0a5c872e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\TpePernia\\templates\\fighterInfoPage.tpl',
      1 => 1637836608,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:vue/commentsList.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_619f685b99bb90_39378770 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="fighterWraper">
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
        <div id="commentFormWrapper" data-user="<?php echo $_smarty_tpl->tpl_vars['user']->value["user"];?>
"<?php if ($_smarty_tpl->tpl_vars['user']->value["user"] == null) {?>class="hide"<?php }?>>
            <form id="API_comment">
        
                <textarea name="commentIput" rows="5" cols="110" placeholder="Escribir comentario (max 400 caracteres)"></textarea>
                <div class="commentsScoreWrapper">  
                    <label for="score">Puntaje</label>
                    <select name="score">
                        <option value="0">seleccionar</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <input id="idFighterInput" type="hidden" name="id_fighter" value="<?php echo $_smarty_tpl->tpl_vars['fighter']->value->id_fighter;?>
">
                    <input id="idUserInput" type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['user']->value["id"];?>
">
                    <input type="submit" value="Enviar" id="btn-addComment">
                </div>
    
            </form>
        </div>
        <div id= "comments" class="listOfCommentsWrapper">
        <table>
            <thead>
                <tr>
                    <th>Comentario</th>
                    <th>Puntaje<?php if ((isset($_SESSION['email']))) {?><select id= "selectScore" name="selectScore">
                        <option value="0"></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select><?php }?></th>
                </tr>
            </thead>

            <tbody class="commentsBody">
                    <?php $_smarty_tpl->_subTemplateRender("file:vue/commentsList.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </tbody>
        </table>
        <button><a href='fighters'><img src="images/botonBack.png" alt="Volver"></a></button>
    </div>
</div>

<?php echo '<script'; ?>
 src= "./js/comments.js"><?php echo '</script'; ?>
> 
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
