
// let abc = [23, 54, 65, 765, 9876, 5432, 432];
// let h1 = document.getElementById("abc");
let h1 = document.getElementById("abc");
// // 3 x 3 = 9

// let length = abc.length;
// let range = (length - 1);


let assoc = {
 "name": "XYZ",
 "Address": 3213783921739821798
}

// for (const iterator of abc) {

//  console.log(iterator)

// }

// for (const index in assoc) {

// console.log(assoc[index])

// }


// let i = 1;
// do {

//  console.log(i)
//  i++;
// } while (i < 1);

// let i = 0;

// while (i <= range) {

//  console.log(abc[i])

//  i++;
// }

// abc.forEach(function(value){

//  console.log(`${abc.indexOf(value)} : ${value}`)

//  h1.innerHTML += (abc.indexOf(value)+1) + ":"+  value +"<br>";
// })



// for (let start = 0; start <= range; start++) {


// a=a+1
// h1.innerHTML =    h1.innerHTML + start + ":"+  abc[start] +"<br>";
// a++
//  h1.innerHTML += (start+1) + ":"+  abc[start] +"<br>";

// }

let table = "";

let TableOf = 11;

for (let start = 1; start <= 10; start++) {

 table += `${TableOf} x ${start} = ${TableOf * start} <br>`

}

h1.innerHTML = table;





let abc = [23, 54, 65, 765, 9876, 5432, 432];


// 3 x 3 = 9

let length = abc.length;
let range = (length - 1);
let reverse = [];
console.log(abc)
for (let index = range; index >= 0; index--) {
 
 console.log(abc[index])

 // reverse.push(abc[index])
}

console.log(reverse)



let qwert= [10,15];

let length2=qwert.length;
let range2=(length2 -1);

let result=0;

for(let index=0; index<= range2; index++){

 result +=  qwert[index];

}

// console.log(result)
