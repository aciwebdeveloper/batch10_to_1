
// https://api.openweathermap.org/data/2.5/weather?q=London,uk&APPID=51d95f8f63de587ffeeab1f1c803dc3f
let div = document.querySelector("#result");
// async , sync 

let input = document.querySelector("#input")
let search = document.querySelector("#search")

search.addEventListener("click", function () {

 FindWeather()

})

async function FindWeather() {

 let locations = input.value;
 let APiKey = "0e821024f4dedd7798713a44174becff"

 let Apiurl = `https://api.openweathermap.org/data/2.5/weather?q=${locations}&APPID=${APiKey}`;



 let response = await fetch(Apiurl);

 let data = await response.json();

 console.log(data)
 console.log(data.weather[0].main)
let img =document.querySelector("#image");

 if (data.weather[0].main == "Haze") {
  img.src="https://cdn.dribbble.com/users/3382605/screenshots/7992837/media/87a54b194006387d28fa0c6dd09aae5a.png?resize=400x0"
 }
 let output = "";



 for (const key in data) {

  if (typeof data[key] == "object") {
 
   for (const CHildkey in data[key]) {

    if (typeof data[key][CHildkey] == "object") {

     for (const ChildCildKey in data[key][CHildkey]) {
      output += ChildCildKey + ": " + data[key][CHildkey][ChildCildKey] + "<br>"
     }

    } else {
     output += CHildkey + ": " + data[key][CHildkey] + "<br>"
    }
   }
  } else {
   output += key + ": " + data[key] + "<br>";
  }
 }


 div.innerHTML = output;

}


//node
