<?php
/* Smarty version 3.1.39, created on 2021-11-25 01:34:47
  from 'C:\xampp\htdocs\Web2\TpePernia\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_619eda276620f9_65569266',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9634f7392da707d6273ea6b4d1e4c322ea74b61' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\TpePernia\\templates\\header.tpl',
      1 => 1637800355,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619eda276620f9_65569266 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL;?>
"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/ufc.ico">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fighters.css">
    <link rel="stylesheet" href="css/fighter.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/weightclass.css">
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"><?php echo '</script'; ?>
>


    <title>UFC All Access</title>
</head>
<body>
<div class="pageHeader">
        <header>
            <div>
                <h1>UFC</h1>
                <h2>All Access</h2>
                <?php if ((isset($_SESSION['email']))) {?>
                    <p>Hola: <?php echo $_SESSION['userName'];?>
</p>
                <?php } else { ?>
                    <p><a href="loginForm">Login</a></p>
                <?php }?>
            </div>
            <button id="btn-scroll-menu">MENU</button>
        </header>
        <nav class="nav-hidden">
            <ul>
                <li><a href="home">INICIO</a></li>
                <li><a href="rankings">RANKINGS</a></li>
                <li><a href="fighters">PELEADORES</a></li>
                <li><a href="loginForm">REGISTRARSE</a></li>
                <?php ob_start();
echo $_SESSION['addmin'];
$_prefixVariable1 = ob_get_clean();
if (($_prefixVariable1) == "1") {?>
                <li><a href="showEditUsers">USUARIOS</a></li>
                <?php }?>
            </ul>
        </nav>
</div>
        <?php }
}
