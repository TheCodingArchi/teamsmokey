 
 var pwrd = document.getElementById("psswd").value;
 var confPwrd = document.getElementById("conf_psswd").value; 
 var input = document.getElementsByClassName("firname")[0];
 var input2 = document.getElementsByClassName("surname")[0];
 var input3 = document.getElementsByClassName("email")[0];
 var input4 = document.getElementsByClassName("password")[0];
 var input5 = document.getElementsByClassName("conpassword")[0];
 var modalss = document.getElementById('mymodal');
 var modalss2 = document.getElementById('mymodal2');
 var span = document.getElementsByClassName('close-button')[0];
 var span2 = document.getElementsByClassName('close-button2')[0];
 var checkBox = document.getElementsByClassName('use')[0];

function clearInputs() {
  input.value="";
  input2.value="";
  input3.value="";
  input4.value="";
  input5.value="";
}

// function check() {
//   if (checkBox.addEventListener('click', function() {
//     alert('hello')
//   })
// }
// check();
function verifyName() {
  return input.value.length;
}
function verifyName2() {
  return input2.value.length;
}

function verifyPass() {
  return input4.value.length;
}
function verifyPass2() {
  return input5.value.length;
}
 function popUp() {
  modalss.style.display = 'block';
  span.onclick = function() {
    modalss.style.display = "none"; 
  }
}

function successPopUp() {
  modalss2.style.display = 'block';
  span2.onclick = function() {
    modalss2.style.display = "none"; 
  }
}

 //script-of-verificate-password 
  function validate() {
  
   if (pwrd!=confPwrd) {
    alert("passwords do not match.");
    
  }
  else if(verifyName() < 4 || verifyName2() < 4 || verifyPass() < 4 || verifyPass2() < 4){
    popUp();
     
    
    //Back-end can redirect the link to login page after collect the information
     //document.valid_psswd.submit();
  } else {
    successPopUp();
    clearInputs();
  }
}