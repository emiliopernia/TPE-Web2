{literal}
    <tr v-for="comment in comments">
        <td>{{comment.comment}}</td>
        <td>{{comment.score}}</td>
        <td v-if="user == 'admin'"><button v-on:click="deleteComment" class="btn_delete" v-bind:id="`${comment.id_comment}`">Borrar</button></td>   
    </tr>
{/literal}