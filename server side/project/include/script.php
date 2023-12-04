<script>
function FormAjaxSubmit(formID, btnId ,url,OutpuId) {

 let SubmitBtn = document.querySelector(btnId); //button selector

 SubmitBtn.addEventListener("click", function(event) {

  event.preventDefault(); // event stop

  let form = document.querySelector(formID); // form selector

  let FormValue = new FormData(form) // get Values of form 

  // console.log([...FormValue.entries()]) //to check value is exist or not

  ajax(FormValue,url,OutpuId)
  
 })

}


async function ajax(formValue,File_URL,OutpuId){

 // console.log([...formValue.entries])
url=File_URL
// fetch options 
options={

 method:"POST",
//  headers: {
// 'Content-Type': 'application/json',
// },
 body:formValue

}

 let response = await fetch(url,options);

 let  data = await response.json();


 SHowMsg(OutpuId ,data)


}

function SHowMsg(OutputId,result){

console.log(OutputId)

 let html =document.querySelector(OutputId);

 html.innerHTML="";

 for (let index = 0; index < result.msg.length; index++) {
 
  html.innerHTML += result.msg[index]
 
 }

 setTimeout(function(){
  html.innerHTML=""
 },2000)

}

</script>