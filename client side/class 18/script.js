
const qwer=(function (a,b) {
 console.log("ok")
});


qwer(43,76);

 // ARRAYS

(function (a,b) {
 console.log("ok")
})(12,4);

let count = 1;
// let Date = new date()
let h1 = document.getElementById("abc")
// qwer(21,4)


setInterval(()=> {

 // count =count -1
 // count *= 2
 // count = count * 2  
 // increament operator 
 // document.getElementById("abc").innerHTML= document.getElementById("abc").innerHTML + count;
 // document.getElementById("abc").innerHTML += `${count} <br>`; //backtick 

 const date = new Date();
let hour = date.getHours();

let min= date.getMinutes();
let sec= date.getSeconds();

let hourPrint;

if (hour >= 13) {

 hourPrint = hour - 12

}
else {
 hourPrint = hour
}


 h1.innerHTML = `${hour} : ${min} : ${sec}`
 // count++
 // console.log(count)
 // document.write(count)
}, 1000)

