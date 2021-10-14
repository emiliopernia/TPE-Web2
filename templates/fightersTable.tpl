<h1 class="fighters-title">Peleadores</h1>
<div class="filter">
    <form action="showFightersByWeightclass" method=POST>
        <select name= "input_weightclass">
            {foreach from=$weightclasses item=weightclass}
                <option value='{$weightclass->weightClass_id}'>{$weightclass->weightClassName}</option>
            {/foreach}
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
        {foreach from=$fighters item=fighter}    
            <tr>
            <td>{$fighter->name}</td>
            <td>{$fighter->nickname}</td>
            <td>{$fighter->weightClassName}</td>
            <td><a href="showFighter/{$fighter->id_fighter}"><img src="images/boton.png" alt="Ver mas"></a></td>
        </tr> 
        {/foreach}
        
    </tbody>
</table>
