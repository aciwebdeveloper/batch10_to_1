/*
 4-5 kinds of functiion

 1. default function/ normal function with no return 
 2. parametrize/argument function with no return
 3. parametrize/argument function with  return
 4. default function/ normal function with  return 
 5. anonymous function or arrow function


*/
//  1. default function/ normal function with no return 
// function SUM(){

//  let a = 5;
//  let b= 7;
//  console.log(a+b)

// }

// SUM() //calling function , invoke function 

// SUM()

// 2. parametrize/argument function with no return
// global variable , local variable
// let z;

// function SUM(num1,num2){

//  z= 9;

//  let a = num1;
//  let b= num2;
//  console.log("SUM : "+ (a+b))
//  console.log("MUltiply: " + (a*b))
// }






// SUM(6,7)

// console.log(z)

// 3.parametrize/argument function with  return


function PAymentAdd(num1, num2) {


 let a = num1;
 let b = num2;

 let payment = a + b;

 return payment;
}




// console.log( PAymentAdd(1000,1000) )



// 4. default function/ normal function with  return 
let payment = PAymentAdd(4000, 2000);

function TAXCalculate() {

 let tax = (payment * (12 / 100));

 // console.log(tax)
 return tax;
}

payment = payment - TAXCalculate()

// console.log(payment)

// with no return but use parametrize function
// Find the area of a rectangle where the length is 5 and the width is 8. 
function AreaOfrectangle(length, width) {
 let l = length;
 let w = width;
 let area = l * w;

 console.log("Area of rectangle : " + area)

}
// AreaOfrectangle(5, 8)

// AreaOfrectangle(10, 8)

// with return and parameterize function
// Find the area of a triangle where the base is 4 and the height is 3.

function AreaOfTriangle(base, height) {

 let b = base;
 let h = height;

 let area = ((base * height) * (1 / 2));

 return area;

}


// console.log("Area Of traingle : " + AreaOfTriangle(4, 3))
// console.log("Area Of traingle : " + AreaOfTriangle(10, 8))


// with return and parameterize function
// Find the area of a circle where the radius is 3.






// Check whether a given number is even or odd.

function EVENoDD(number) {

 if ( (number % 2 == 0) && number !== 0) {
  return "EVEN";
 }
 else if (number == 0) {
  return "Neutral Number";
 }
 else {
  return "ODD";
 }
}

console.log(EVENoDD(45))
console.log(EVENoDD(100))
console.log(EVENoDD(0))
   
// Check whether a given positive number is a multiple of 3.

// Determine whether a given year is a leap year.

// Check two given numbers and return true if one of the numbers is 50 or if their sum is 50.

// Check from the given integer, whether it is positive or negative.

if (( (year % 4 ==0) || ( year % 400 ==0 ) ) && (year % 100 !== 0) ) {
 // leap year
}
else{
 // not a leap year
}

// arrow function research work 
