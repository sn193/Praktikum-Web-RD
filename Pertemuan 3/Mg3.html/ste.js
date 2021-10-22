function theme(){
    var anyColors=document.getElementById("color");
    if (anyColors.value == "white"){
        document.body.style.background = "white";
        document.getElementById("body").style.color = "black";
    }
    else {
    
        document.body.style.background = "black";
        document.getElementById("body").style.color = "white";
    }
}
function weather(){
    var anyWeather=document.getElementById("weather");

    if(anyWeather.value == "Sunny"){
        var words = document.getElementById("word");
        words.innerText = "It is nice and sunny outside today. Wear shorts! Go to the beach, or the park, and get an ice cream";
    }
    else{
        var words = document.getElementById("word");
        words.innerText = "Rain is falling outside, take a rain coat and a brolly, and don't stay out for too long.";
    }
}
function factorial (){
    var getFactorial = document.getElementById("factorial");
    let result =  1;
    if (getFactorial.value == 0){
        result = 0;
    }
    else if (getFactorial.value == 1){
        result = 1;
    }
    else{
        for(var i = getFactorial.value; i >=1; i--){
            result = result * i;
        }
    }
    var getResult = document.getElementById("result");
        getResult.innerText = "The Factorial of " + getFactorial.value + " is " + result;
}