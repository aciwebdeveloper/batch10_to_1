let quizBOX = document.querySelector("#quizBox");
let question = document.querySelector("#question");
let options = document.querySelector("#options");

let input =document.querySelectorAll(".input")
let label =document.querySelectorAll(".label")

// console.log()
// console.log(input[0])
// // 0   1
// [23, 16]
// copy_element = 23
// array[0] = array[1]  // [16,16]
// array[1] = copy_element; //[16,23]



let quizDetail =
 [
  {
   question: "Which is the most widely spoken language in the world?",
   option: ["Spanish", "Mandarin", "English", "German"],
   correct: "Mandarin",
  },
  {
   question: "Which is the only continent in the world without a desert?",
   option: ["North America", "Asia", "Africa", "Europe"],
   correct: "Europe",
  },
  {
   question: "Who invented Computer?",
   option: ["Charles Babbage", "Henry Luce", "Henry Babbage", "Charles Luce"],
   correct: "Charles Babbage",
  }
 ];


let index = 0;
let score = 0;
let WrongAnswer = [];

function Shuffle(array) {
  // length :7 range: 6
          for (let x = (array.length - 1); x >= 0; x--) {
  
  
                  let j = Math.floor(Math.random() * (x+1)); //3
  
                  temp = array[x];
  
                  array[x] = array[j];
  
                  array[j] = temp;
          }
  
  
  
  }
  
  

function DisplayQuiz() {
//  Shuffle(quizDetail)
//  Shuffle(quizDetail[index].option)

 question = document.querySelector("#question");
 options = document.querySelector("#options");

 let currentMCQ = quizDetail[index]

 // console.log(currentMCQ)
 question.innerHTML = currentMCQ.question;


 // console.log(currentMCQ.option)
 options.innerHTML = ""
 currentMCQ.option.forEach(function (val) {

  // console.log(val)

  let input = document.createElement("input");
  input.type = "radio";
  input.value = val;
  input.name = "quiz"
  input.classList.add("OPT")
  // input.onclick=(()=>{
  //  CheckAns()
  // })
  input.id = val + "_quiz"
  options.appendChild(input)

  let lable = document.createElement("label");
  // lable.for=val+"_quiz";
  lable.setAttribute("for", val + "_quiz")
  lable.innerHTML = val
  input.after(lable)

  // console.log(input)
 })


 if (document.querySelector("#NEXT")) {
  document.querySelector("#NEXT").remove();

  let button = document.createElement("button");
  button.type = "button";
  // let content=document.createTextNode("NEXT")
  // button.appendChild(content)
  button.id = "NEXT";

  button.innerHTML = "NEXT";
  button.onclick = (() => {
   CheckAns()
  })
  options.after(button)

 } else {
  let button = document.createElement("button");
  button.type = "button";
  // let content=document.createTextNode("NEXT")
  // button.appendChild(content)
  button.id = "NEXT";

  button.innerHTML = "NEXT";
  button.onclick = (() => {
   CheckAns()
  })
  options.after(button)

 }
}

DisplayQuiz()

function CheckAns() {
 let GetAllOPT = document.querySelectorAll(".OPT");
 // console.log(GetAllOPT)

 let currentMCQ = quizDetail[index];



 let Error = document.querySelector("#Error");
 let CorrectAns = currentMCQ.correct;
 for (let i = 0; i < GetAllOPT.length; i++) {

  if (GetAllOPT[i].checked == true) {
   Error.innerHTML = "";

   console.log(GetAllOPT[i].value)


   if (GetAllOPT[i].value == CorrectAns) {
    score++;

   } else {

    WrongAnswer.push(
     {
      question: currentMCQ.question,
      UserSelect: GetAllOPT[i].value,
      Correct: currentMCQ.correct
     }
    )
   }
   break;
  }
  else {
   Error.style.color = "red"
   Error.innerHTML = "Kindly Select Any ONe"
  }

 }

 if (Error.innerHTML == "") {
  index++;

  if (index < quizDetail.length) {

   console.log(index)

   DisplayQuiz()

  }
  else {

   let BTNSUbmit=document.querySelector("#NEXT");
   BTNSUbmit.innerHTML="SUBMIT";
   BTNSUbmit.addEventListener("click",function(){
Result()

   })
     }

 }

}


function Result() {
 question.innerHTML = "";
 options.innerHTML = "";

 if (document.querySelector("#NEXT")) {
  document.querySelector("#NEXT").remove()
 }

 quizBOX.innerHTML += `<div id="score">
  Your Score is : ${score}
 </div>
 <button type="button" id="restart" onclick="Restart()"> 
 Restart
 </button>`
 let WrngBTN = "";
 if (WrongAnswer.length > 0) {
  WrngBTN += ` <button type="button" id="ShowWrong" onclick="ShowWrong()"> 
Show Wrong Answer
</button>`;
 } else {
  WrngBTN += "<div id='won'>Congratulation! YOu Won</div> ";
 }
 quizBOX.innerHTML += WrngBTN;

 console.log(WrongAnswer)
}

function Restart() {
 // alert("ok")
 // console.log("Function called")
 index = 0;
 score = 0;
 WrongAnswer = [];
 let btn = document.querySelector("#restart");
 let Score = document.querySelector("#score");


 if (document.querySelector("#ShowWrong")) {
  let ShowWrong = document.querySelector("#ShowWrong");
  ShowWrong.remove()
 }

 if (document.querySelector("#won")) {
  let ShowWrong = document.querySelector("#won");
  ShowWrong.remove()
 }

 btn.remove()
 Score.remove()

 DisplayQuiz();
}

function ShowWrong() {
 let options = document.querySelector("#options");

 let WrngAns = "";

 for (let j = 0; j < WrongAnswer.length; j++) {

  WrngAns += `
        <hr>
        Question : ${WrongAnswer[j].question} <br>
        Your Seleted OPtion : <span style="color:red">${WrongAnswer[j].UserSelect} </span> <br>
        Correct Answer: ${WrongAnswer[j].Correct} <br>
        <hr>
  `;
 }

 options.innerHTML = WrngAns

}