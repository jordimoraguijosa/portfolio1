var selectorLanguage = "es";
var values;

window.onload = function () {  
    this.recoverLanguage(null);
}

function recoverLanguage(lang) {
    if(lang!=null){
        selectorLanguage = lang;
    }
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            setTimeout('smallCharger(false)',500);
            $(".se-pre-con").fadeOut("slow");
            values = JSON.parse(this.responseText);
            changeLanguage();
        }else{
            $(".se-pre-con").fadeIn("slow");
            smallCharger(true);
        }
    };
    xhttp.open("POST", "i18n/" + selectorLanguage + ".json", true);
    xhttp.send();
}

function changeLanguage() {
    var elements = document.getElementsByTagName("*");
    for(var i=0; i<elements.length; i++){
        if(elements[i].classList.value.substr(0,5) == "i18n>"){
            var key = elements[i].classList[0];
            elements[i].innerHTML = this.values[key];
        }
    };
}

function smallCharger(check){
    var smallCharger = document.getElementById("spinner-button-i18n")
    if(check){
        smallCharger.style.display = '';
    }else{
        smallCharger.style.display = 'none';
    }
    
}

//function changeLanguage(values) {
    /*var tagLang = document.querySelectorAll(".lang");
    tagLang.forEach(element => {
        console.log(element.className.split(" ")[0].split("_")[1]);
    });*/
    /*values = JSON.parse(values);
    //i = key
    //values = valor
    for(var i in values){
        if(document.getElementsByClassName(i)[0] != undefined){
            document.getElementsByClassName(i)[0].innerHTML = values[i];
        }
        
    }
}*/

