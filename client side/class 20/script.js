
let array = [34, 54, 76, 87, 543, 324, 546, 67]; // length 8 range[0-7]

let start = 0;

let ending = array.length;

let range = ending - 1;

let mid = Math.floor(((start + ending) / 2))


let array2 = ["abc1", "dmsa", "j;lksa"];
// ... (spread Operators)
// let concat = [...array, ...array2];
let concat = array.concat(array2)

//  index array
let array234 = ["abc1", "dmsa", "j;lksa"];
// associative Array 
let Assoc= {
  "name":"XYZ",
  "Address":"YIUYUW"
}
// object
let Objects= {
 name:"XYZ",
 Address:"YIUYUW"
}


console.log(Assoc)

let val = "XYZ";
console.log(Assoc)

if (Assoc.includes(val)) {

 console.log(Assoc.indexOf(val))

}
else {

 console.log("Not existed value")

}

// let index = array.indexOf("dsanjdsa");

// delete array[5]

// console.log(index)
// array.splice(2,0)

// console.log(array)
// array.splice(Specific index ,How many element you want to remove , optinal param to add element)

// let s=start+2;

// let end= (array.length - 4)

// console.log(array.slice(s, end))



// slice()
// splice()

// remove()
// delete
// indexOf
// lastIndexOf

