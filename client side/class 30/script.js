let main_button = document.querySelector("#main_button");
let AllBtn = ["+", "-", "*", "/", "%", 1, 2, 3, 4, 5, 6, 7, 8, 9, 0, "^", "Sqr()", "=", "DEL", "AC"];
let result = document.querySelector("#result");
let Errors = document.querySelector("#Error");

function displayBtn() {
 for (let i = 0; i < AllBtn.length; i++) {

  let btn = document.createElement("button");
  btn.setAttribute("type", "button");

  btn.onclick = (() => {
   printValue(btn)
  })


  btn.classList.add("item" + i)
  btn.innerHTML = AllBtn[i];

  main_button.appendChild(btn)

 }

}

displayBtn()

function printValue(btn) {
 let value = btn.innerText;

 if (result.value == "" || result.value == undefined) {
  Errors.style.color = "red";
  // Errors.innerHTML= error
  Errors.innerHTML = "Please Fill the field"
 }


 if (value == "AC") {
  result.value = ""
 }


 if (value == "DEL") {
  backspace()
 }


 //  this if statement is used to print innertext of btn except (DEL,AC,=)
 if (((value !== "DEL" && value !== "AC") && value !== "=") && value !== "Sqr()") {

  if (result.value == "Error" || result.value == "undefined") {

   Errors.innerHTML = "";
   result.value = ""
   result.value += value
  }
  else {

   Errors.innerHTML = "";
   result.value += value

  }

 }


 if (value == "Sqr()") {
  // result.value =result.value*result.value; 
  // result.value =Math.pow(result.value,2); 
  let find = new String(result.value);

  let TOIndex = find.indexOf("^")
  let TOfind = find.includes("^");
  if (TOfind) {
   let Toleft = find.slice(0, TOIndex)
   let ToRight = find.slice((TOIndex + 1), find.length)

   // console.log(Toleft)
   result.value = Math.pow(Toleft, ToRight)
  }
  else {
   result.value = Math.pow(result.value, 2)
  }

 }
 // this if statement is used to perform calculation and print that caculation in to result value
 if (value == "=") {
  // console.log(result.value)
  // console.log(eval(result.value))
  // eval()

  // error handling 
  try {
   result.value = eval(result.value);

  } catch (error) {
   Errors.style.color = "red";
   // Errors.innerHTML= error
   Errors.innerHTML = "SYNTAX ERROR"

   result.value = "Error"
   // document.write(error)
  }

 }

}

function backspace() {
 let value = new String(result.value); // value has been converted into string

 let StringVal = value.toString();

 let range = StringVal.length - 1; // find total length convert into range 

 result.value = StringVal.slice(0, range) // to fetch specific portion from string array
}
