<div class= "weightclassWraper">
    
    {foreach from=$weightclasses item=weightclass}
    <div class= "tableWeightclass"> 
    <h3>{$weightclass->weightClassName}</h3>      
        <table>
            <tbody>
                {foreach from=$fighters item=fighter} 
                {if $fighter->weightClassName==$weightclass->weightClassName}   
                    <tr>
                    <td>{$fighter->name} - Nº{$fighter->weightClassRank}</td>
                    <td>"{$fighter->nickname}"</td>
                    <td>{$fighter->record}</td>
                    
                </tr> 
                {/if}
                {/foreach}            
            </tbody>
    
        </table>
    </div> 
    {/foreach}
</div>