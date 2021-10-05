<div class= "rankings-wraper">
    
    {foreach from=$weightclasses item=weightclass}
    <div class="weightclass-table-wraper">       
        <table>
            <h3>{$weightclass->weightClassName}</h3>
            <thead>
                <th>Nombre</th>
                <th>Apodo</th>
                <th>Record</th>
                <th>Ranking</th>
            </thead>
            <tbody>
                {foreach from=$fighters item=fighter} 
                {if $fighter->weightClassName==$weightclass->weightClassName}   
                    <tr>
                    <td>{$fighter->name}</td>
                    <td>{$fighter->nickname}</td>
                    <td>{$fighter->record}</td>
                    <td>{$fighter->weightClassRank}</td>
                </tr> 
                {/if}
                {/foreach}            
        </tbody>
        </table>
    </div> 
    {/foreach}
</div>