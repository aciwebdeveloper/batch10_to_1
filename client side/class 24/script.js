
let form = document.forms["form"];

let user_name = document.forms["form"]["user_name"];
// let user_name=document.querySelector("#user_name");


let submitBTN = document.querySelector("#submit");
let error = document.querySelector("#error");

let password = document.querySelector("#password");
let cnfrm_password = document.querySelector("#cnfrm_password");
let Check = document.querySelector("#Check");
let passwordArray = [];

// password.addEventListener("keyup", function (evnt) {

//  var passw = new RegExp("/^[A-Za-z]\w{7,14}$/"); //regular expression

//  // if (passw.test(password.value)) {

//   if (evnt.key == "Backspace" ) {
//    passwordArray.pop()
//   } else if( evnt.key !== "Shift" && evnt.key !== "Control" && evnt.key !=="Enter") {
//    passwordArray.push(evnt.key)
//   }

//  // }


//  console.log(passwordArray)
// })
let reveal = document.querySelector("#reveal");

reveal.addEventListener("click", function () {

 let passwordAttr = password.getAttribute("type");
 console.log(passwordAttr)

 // if(reveal.className="fa-eye"){
 //  reveal.classList.remove("fa-eye")
 //  reveal.classList.add("fa-eye-slash")
 // }else{
 //  reveal.classList.remove("fa-eye-slash")
 //  reveal.classList.add("fa-eye")
 // }
 

 if (passwordAttr == "password") {

  password.setAttribute("type", "text");

  cnfrm_password.setAttribute("type", "text")


  reveal.innerHTML = "HIDE"

 } else {

  password.setAttribute("type", "password")
  
  cnfrm_password.setAttribute("type", "password")

  reveal.innerHTML = "SHOW"
 
 }

})


cnfrm_password.addEventListener("keyup", function (evnt) {

 if (password.value == cnfrm_password.value) {
  Check.style.color = "green"
  cnfrm_password.style.border = "1px solid green"
  Check.innerHTML = "Password Matched"
 } else {
  Check.style.color = "red"
  cnfrm_password.style.border = "1px solid red"
  Check.innerHTML = "Password not Match"
 }

})




form.addEventListener("submit", function (event) {

 let user_nameValue = user_name.value;

 if (user_nameValue == "") {
  event.preventDefault();
  error.style.color = "white";
  error.style.fontWeight = "bolder";
  error.style.backgroundColor = "red"
  // error.classList.add("error")
  error.innerHTML = "Please Fill the Field";
 }
 else {
  event.preventDefault();
  // if(error.className == "error"){
  //  error.classList.remove("error")
  // }
  // error.classList.toggle("error")
  error.style.color = "black";
  error.style.fontWeight = "lighter";
  error.style.backgroundColor = "white";

  error.innerHTML = user_nameValue;

 }


})