function ubah_warna(value){
    if (value=="black")
    {   
        document.body.style.backgroundColor = value;
        document.body.style.color = "white"
    }
    else
    {
        document.body.style.backgroundColor = value;
        document.body.style.color = "black"
    }
}

function ubah_cuaca(value){
    switch(value){
        case "sunny" : 
            document.getElementById("Kalimat").innerHTML = "It's " + value + ", go outside and play with your friends."
        break;
        case "rainy" :
            document.getElementById("Kalimat").innerHTML = "It's " + value + ", go outside and play with your friends."
        break;
        case "cloudy" :
            document.getElementById("Kalimat").innerHTML = "It's " + value + ", go outside and play with your friends."
        break; 
        case "winter": 
            document.getElementById("Kalimat").innerHTML = "It's " + value + ", go outside and play with your friends."
        break;    
    }
}

function faktorial(number){
    var a = number
    for (let i = 1; i <a; i++) {
        number = number * (i)
    }
    document.getElementById("answer").innerHTML = "the faktorial is " + number
}