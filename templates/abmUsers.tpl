{include file="header.tpl" }
    <h1 class="users-title">Usuarios</h1>
    <table class="table">
        <thead>
            <th>Nombre</th>
            <th>Rol</th>
        </thead>
        <tbody>
            {foreach from=$users item=user}    
                <tr>
                <td>{$user->userName}</td>
                <td>{$user->admin}</td>
                <td><a href="deleteUser/{$user->user_id}"><img src="images/bin.png" alt="Borrar"></a></td>
                <td><a href="changeRol/{$user->admin}"><img src="images/edit.png" alt="Editar"></a></td>           
            </tr> 
            {/foreach}

        </tbody>
    </table>

{include file="footer.tpl" }