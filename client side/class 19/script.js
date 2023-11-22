/*
1. Variable 
2. DataType
3. If Statement
4. If Else statement
5. If else IF statement 
6. logical operators
7. Assignment Operators
8. conditional OPerators
9. Functions 
10. Concatination
11. Arrays
*/


// Find the last element of an array with giving a hard-coded index.

// 2. Check whether the first or the last index of an array has a specified value, let's say 5.


//  index array 
// let x = [7,5,6,4,3]   // length :5 range [0-4]
//       0,1,2,3,4

// console.log(typeof x)

// // x=7;

// if (Array.isArray(x)) {
//  console.log("Is Array")

// }
// else{
//  console.log("Not an Array")
// }

let x = [7, 5, 6, 4, 3, 89, 100, 99]   // length :8 range [0-7]
// console.log(`Before remove Value : ${x}`)

// x.push(89) //  insert at end in array 
// x.unshift(89) // insert at start in an array 

// x.pop()// remove at end in an array  
// x.shift() // start remove  in an array 
console.log( x.join(" ") )
// console.log(`After removing Value : ${x}`)
let range = (x.length - 1) //6
let length = x.length; // 7
console.log(length)
console.log(x[range]) //x[6]

let start = 0;
let ending = (length - 1);

let mid = Math.floor(((start + ending) / 2));




// (()=>{
// document.write("<h1> Welcome </h1>")
// }
// )()

// setInterval(Welcome,1000)

// function Welcome(){
//  alert("Welcome")
// }

// setInterval(function(){


// },1000)

