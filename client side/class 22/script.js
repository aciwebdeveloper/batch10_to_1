let h1 = document.querySelector("#abc");
// *
// **
// ***
// ****
// *****
// ******

// *****
// ****
// ***
// **
// *


// let output = "";

// for (let row = 6; row >= 1; row--) {

//  for (let col = 1; col <= row; col++) {
//   output += "*";
//  }

//  output += "<br>";
// }

// h1.innerHTML = output;




let array =
 
  [

   ["First", 6543, 654, 432, 1324, 543, 654, 765, 875],
   ["second", 654, 765, 876, 432, 534, 6, 54765, 876, 432]

  ]
 

// console.log(array)
// // console.log(array[row][col])


let RowArrayLength = array.length // parent Array 

// // // console.log(parentArrayLength)

for (let row = 0; row < RowArrayLength; row++) {

 // console.log(array[row].length)
 for (let col = 0; col < array[row].length; col++) {
 
   console.log(array[row][col])
 
 }

}


// Find the largest number in an array by using a loop.

let test=  [7438, 6543, 654, 432, 1324, 543, 654, 765, 875];