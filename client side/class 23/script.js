
let array = [3212321321321, 321, 654, 765, 432, 432432, 6543, 6754];
let length = array.length;

let range = (length - 1)
let max = "";




// for (select = 0; select < length; select++) {

//  let greater = true;


//  for (check = 0; check <= range; check++) {
//   //      array[2] < array[0]   &&   0   !== 0 
//   if (array[select] < array[check] && select !== check) {

//    greater = false;
//    break;
//   }

//  }


//  if (greater) {
//   max = array[select];
//  }



// }


// console.log(max)


// create Element
let body = document.querySelector("#body");

let h2 = document.querySelector("h2");
let ToggleBtn = document.querySelector("#toggle");
// h2.className="JS"
ToggleBtn.addEventListener("click", function () {

 h2.classList.toggle("hdjksa")

})


for (let index = 1; index <= 3; index++) {

 let h1 = document.createElement("h1");
 h1.innerHTML = "Written by js"
 body.prepend(h1)

 let p = document.createElement("p");
 p.innerHTML = "paragraph written By JS";

 h1.after(p)

 let button = document.createElement("button");
 button.type = "button";
 button.classList.add("remove");
 button.innerHTML = "x"
 p.appendChild(button)



}


let SelectBTN = document.querySelectorAll(".remove");
console.log(SelectBTN)

for (let index = 0; index < SelectBTN.length; index++) {

 SelectBTN[index].addEventListener("click", function () {

  let parent = SelectBTN[index].parentElement;

  let input = document.createElement("input");
  input.type = "text";
  input.value = "Write by JS";
  // h4.innerHTML="H4 Tag by JS";

  parent.after(input)
 })

}

