{include file="header.tpl" }

<div class="div-content-user">
    {if !empty($params)}
        <div class="state">
            <h3>{$params}</h3>
        </div>
    {/if}
        
    
    {if $params!='Logueado'}
        
      {if $params!="Registro exitoso"}
          <div class="div-login">
            <form action="register" method=POST>
                <h3>Registrarse</h3>
                <label for="name">Nombre</label>
                <input type="text" name="name" placeholder="Nombre" required>
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Email" required>               
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Minimo 6 caracteres" minlength="6" required>
                <button id="btn-send">Enviar</button>
            </form>
        </div>
      {/if}
        
    <div class="div-login">
        <form action="login" method=POST>
            <h3>Ingresar</h3>
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Email" required>               
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Minimo 6 caracteres" minlength="6" required>
            <button id="btn-send">Enviar</button>
        </form>
    </div>
    {else}
        
    <div class="div-login">
        <h3>Desloguearse</h3>
        <button><a href="logout">Enviar</a></button>
    </div>

    {/if}
    
</div>

{include file="footer.tpl" }