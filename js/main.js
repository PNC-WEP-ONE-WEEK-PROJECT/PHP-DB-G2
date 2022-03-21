
// Delete & Update Post--------------------------------------->
const updatebtn = document.querySelectorAll("#update");
let postNumber = 0;
var isClick = true;
let postNumbers = document.querySelectorAll(".form-d");
for(let btnup of updatebtn){
    let dis_form = postNumbers[postNumber]
    btnup.onclick = function (){
        if(isClick){
            dis_form.style.display = "block";
            isClick = false;
        }else{
            dis_form.style.display = "none";
            isClick = true;
        }
    }
    postNumber += 1;
}
// Display comments -------------------------------------->
const commentids = document.querySelectorAll("#comment");
var commentorsOfcomment = 0;
var numberOfCommentors = 0;
var commmentors = document.querySelectorAll("#write-comment");
var displayComments = document.querySelectorAll(".numberOfComment");
for(let comment of commentids){
    let commentor = commmentors[commentorsOfcomment];
    let commentDisplay = displayComments[commentorsOfcomment];
    comment.onclick = function() {
        commentor.style.display = "block";
        numberOfCommentors+=1
        commentDisplay.textContent = numberOfCommentors;
    }
    commentorsOfcomment +=1;
}

// Comment Input or Add comment -------------------------------------->
const $myInput = document.getElementById('myid');
$myInput.onkeydown = function(event){
    if(event.key === 'Enter') {
        $myInput.style.display = "none";  
    }
}

// View comment Up and Down------------------->
const btn_views = document.querySelectorAll(".view_comments");
const commentviews = document.querySelectorAll("#view_id");
function deletedComment() {
    for(let cosnt of commentviews){
        cosnt.style.display = "block";
    }
}

let closed = 0;
for(let view of btn_views){
    view.onclick = function () {
        // if(closed = 0){
            deletedComment()
            closed = 1
        // }else{
        //     UndeletedComment()
        //     closed = 0
        // }
    }
    
}




const commentviewss = document.querySelectorAll(".comment_views");
function UndeletedComment() {
    for(let cosnts of commentviews){
        cosnts.style.display = "none";
    }
}
// Delete comment -------------------------------------->
const d_comments = document.querySelectorAll(".dl-comment");
let commentNumber = 0;
let dl_comments = document.querySelectorAll("#commentID");
for(let d_comment of d_comments){
    let dl_comment = dl_comments[commentNumber];
    d_comment.onclick = function (){
        dl_comment.style.display = "block";
        d_comment.style.display = "none";
    }
    commentNumber += 1;
 }
