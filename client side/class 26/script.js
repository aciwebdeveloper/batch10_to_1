
let todo = document.querySelector("#todo");
let todo_input = document.querySelector("#todo_input");

let todo_btn = document.querySelector("#todo_btn")
 ;
let ol_tag = document.querySelector("#todo_list");


todo_input.addEventListener("keyup",function(event){
console.log(event.key)

if (event.key == "Enter") {
 

 let todo_value = todo_input.value;


 let li = document.createElement("li");
 li.classList.add("list-group-item")
 li.innerHTML = `<span onclick="LineThroungh(this)"> ${todo_value} </span>`;

 ol_tag.appendChild(li)

 todo_input.value = ""

 let button = document.createElement("button");
 button.type = "button";
 button.innerHTML = "x";

 button.onclick = (() => {
  removeLi(button)
 })

 li.appendChild(button)


}


})



todo_btn.addEventListener("click", function () {

 let todo_value = todo_input.value;


 let li = document.createElement("li");

 li.innerHTML = `<span onclick="LineThroungh(this)"> ${todo_value} </span>`;
 li.classList.add("list-group-item")
 ol_tag.appendChild(li)

 todo_input.value = ""

 let button = document.createElement("button");
 button.type = "button";
 button.innerHTML = "x";

 button.onclick = (() => {
  removeLi(button)
 })

 li.appendChild(button)

})


function removeLi(btn) {
 // console.log(btn)
 let parent = btn.parentElement;

 parent.style.backgroundColor = "red";
 parent.style.color = "white";
 parent.style.fontWeight = "bolder";
 parent.style.transition = "opacity 0.75s ease-in-out";

 setTimeout(function () {
  parent.style.opacity = "0";

  setTimeout(function () {
   parent.remove()
  }, 1000)

 }, 1000)






}

function LineThroungh(e) {
 // let abc= e.target;

 e.classList.toggle("lineThrough")

 // e.className="lineThrough"
 // if(){

 // }


 // target.classlist.toggle("lineThrough")

}
