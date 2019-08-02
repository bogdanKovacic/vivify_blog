


var btn = document.querySelector("#myBtn");

var comm = document.querySelector("#allComments");

btn.addEventListener('click', function(){
    btn.innerText = 'Show comments';

    if(comm.style.display === 'none'){
        comm.style.display = 'block';
        btn.innerText = 'Hide comments';
        comm.classList.add('hidden');

    } else {
        comm.style.display = 'none';
        comm.classList.remove('hidden');
    }
});


function commentForm() {
    var author = document.forms['firstFrom']['formName'].value;
                                                                     
                                                                    
    var comment = document.forms['firstFrom']['comment'].value;
    if (author == '' || comment == '') { 
        alert('Both fields are required!');
        return false;
    }

    return true;
}


function createPostRequire() {
    var author = document.forms['newPost']['author'].value;
    var title = document.forms['newPost']['title'].value;
    var bodyText = document.forms['newPost']['bodyText'].value;

    if(author == '' || title == '' || bodyText == '') {
        alert('All fields are required!');
        return false;
    }
    return true;
}


document.getElementById('delete-post').addEventListener("click", function(event){
event.preventDefault();
if(window.confirm("Do you really want to delete this post?")) {
    document.deletePost.submit();
}
});
        

    