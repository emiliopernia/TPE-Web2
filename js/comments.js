"use strict";

document.addEventListener("DOMContentLoaded", function(){
    const url= "api/comments";

    document.querySelector('#btn-addComment').addEventListener('click',sendComment);
    function start(){
    document.querySelector('#selectScore').addEventListener('change',getCommentsByScore);
}
let form = document.querySelector("#API_comment");


    let app = new Vue({
        el : "#comments",
        data:{
            comments: [],
            user:""
        },
        methods: {
            deleteComment: function (e) {//para usar veu,y no mezclar en js, declaro la funcion en tpl
                deleteComment(e.target.id)
            }
        }
    });

    function getUserType(){
        let commentsForm=document.querySelector('#commentFormWrapper');
        app.user=commentsForm.dataset.user;
    }

    async function getCommentsByScore(){//filtro para el opcional #10
        let selectedScore= document.querySelector('#selectScore').value;
        let idFighter=document.querySelector("#idFighterInput").value;
        
        if(selectedScore!=0){
            try{
                let response = await fetch(`${url}/${idFighter}/${selectedScore}`);
            
                if(response.status===200){
                    let comments = await response.json();
                    app.comments= comments;
                }
                else if (response.status === 404){
                    console.log("no existen comentarios para peleador id = "+idFighter)
                    app.comments=[];
                }
                
            }catch(e){
                console.log(e);
            }
        }else{
            getComments()
        }
        
    }
    

    async function getComments(){
        let idFighter=document.querySelector("#idFighterInput").value;
        try{
            let response = await fetch(`${url}/${idFighter}`);
            if(response.status===200){
                let comments = await response.json();
                app.comments= comments;
            }
            else if (response.status === 404){
                console.log("no existen comentarios para peleador id = "+idFighter)
                app.comments=[];
            }
            
        }catch(e){
            console.log(e);
        }
        
    }

    function getNewCommentData(e){
        //agarrar los datos
        let formData = new FormData(form);
        let comment=formData.get('commentIput');
        let score=Number(formData.get('score'));
        let user_id=Number(formData.get('id'));
        let id_fighter=Number(formData.get('id_fighter'));
        if (score!=0 && comment!=""){
            let newComment = {
            "comment": comment,
            "score": score,
            "user_id": user_id,
            "id_fighter": id_fighter,
            }
            form.reset();
            return newComment;
        }else{
            return null;
        }
    }

    async function sendComment(e){
        e.preventDefault();
        let userComment= getNewCommentData();
        if(userComment!=null){
            try {
            let res = await fetch(url,{
                "method": "POST",
                "headers":{"Content-type":"application/json"},
                "body":JSON.stringify(userComment)
            });
            if(res.status===201){
                console.log("Comentario creado: "+userComment);  
            }
        } catch (error) {
            console.log(error);}  
        }else{
            alert("Complete todos los datos para poder enviar el commenteario");
        }
        
            
        getComments();
    }

    /*function getButtonsId(){

            let btnDelete = document.querySelectorAll(".btn_delete");

            for (let i = 0; i < btnDelete.length; i++) {
                btnDelete[i].addEventListener("click", function (e) {
                    console.log("click"+btnDelete[i]);
                    let deletTargetComment = this;
                    let comment_id = deletTargetComment.comment_id;
                    deleteComment(comment_id);
                });
            }
    
    }*/

    async function deleteComment(idSelectedComment){
        let id=idSelectedComment;
        try {
            let res = await fetch(`${url}/${id}`,{
                "method": "DELETE"
            });
            if(res.status===200){
                alert("Eliminado con éxito mensaje con id= "+id)
                console.log("eliminado");
            }
        } catch (error) {
            console.log(error);        
        }
        getComments();
    }

    window.addEventListener("load", start, false);
    
    
    getComments();
    getUserType();
    

    
    

    
});


