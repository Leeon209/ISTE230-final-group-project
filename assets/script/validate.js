
// Init all validate
function validateForm() {
    var IsName = validateName();
    var IsComment1 = validateComment1();
    var IsComment2 = validateComment2();
    
    return IsName && IsComment1 && IsComment2;
}

// validate name
function validateName() {
    var name = document.getElementById('name').value;

    if (name == '') {
        document.getElementById('name').style.borderColor = "red";
        document.getElementById('nameErrMsg').innerHTML = "* Please enter your name. *";
        document.getElementById('nameErrMsg').style.color = "red";
        document.getElementById('name').focus();
        return false;
    } else {
        document.getElementById('name').style = null;
        return true;
    }
}

function validateComment1(){

	var comment = document.getElementById('comment1').value.length;
	
    if(comment == 0){
    document.getElementById('comment1').style.borderColor = "red";
        document.getElementById('commentErrMsg1').innerHTML = "* Please enter your comment. *";
        document.getElementById('commentErrMsg1').style.color = "red";
        document.getElementById('comment1').focus();
        return false;
    } else {
        document.getElementById('comment1').style = null;
        return true;
    }
}

function validateComment2(){

	var comment = document.getElementById('comment2').value.length;
	
    if(comment == 0){
    document.getElementById('comment2').style.borderColor = "red";
        document.getElementById('commentErrMsg2').innerHTML = "* Please enter your comment. *";
        document.getElementById('commentErrMsg2').style.color = "red";
        document.getElementById('comment2').focus();
        return false;
    } else {
        document.getElementById('comment2').style = null;
        return true;
    }
}
