function linkedSidebar(param) {
    switch (param) {
        case "aboutme":
            window.location.href = "#aboutme";
            break;
        case "knowledge":
            window.location.href = "#knowledge";
            break;
        case "projects":
            window.location.href = "#projects";
            break;
        case "cv":
            window.location.href = "#cv";
            break;
        case "contact":
            window.location.href = "#contact";
            break;
        case "rrss":
            window.location.href = "#rrss"
            break;
    }
}

var icons = document.querySelectorAll(".sidebar-icon"),
anchor = document.querySelector(".anchor"),
heigthScreen = (window.screen.height * 85)/100;
icons[0].style.color = 'white';
anchor.style.height = heigthScreen+"px";

//is mobile?
if (window.screen.width > 560) {
    var sidebar = document.getElementById("sidebar"),
        btnBox = document.getElementById("btn-box");
    sidebar.classList.add("active");
    $("#btn-box").fadeOut("slow");
}else{
    document.onclick = function(evt){
        var sidebar = document.getElementById("sidebar"),
        btnBox = document.querySelector(".btn-box-icon");
        if(evt.target != btnBox && evt.target != sidebar && sidebar.classList.contains("active")){
            sidebar.classList.remove("active");
            setTimeout(console.log.bind(null, ''), 10000);
            $("#btn-box").fadeIn("slow");
        }
    }
}

document.querySelector("#btn-box").onclick = function () {
    var sidebar = document.getElementById("sidebar");
    sidebar.classList.add("active");
    $("#btn-box").fadeOut("slow");
}

document.querySelector("#sidebar-btn-box").onclick = function () {
    var sidebar = document.getElementById("sidebar");
    sidebar.classList.remove("active");
    setTimeout(console.log.bind(null, ''), 10000);
    $("#btn-box").fadeIn("slow");
}

window.onscroll = function () {
    //console.log(document.body.scrollTop);
    if (document.body.scrollTop < 681) {
        icons[0].style.color = 'white';
    } else {
        icons[0].style.color = '#6c757d';
    }
    if (document.body.scrollTop >= 681 && document.body.scrollTop < 1488) {
        icons[1].style.color = 'white';
    } else {
        icons[1].style.color = '#6c757d';
    }
    if (document.body.scrollTop >= 1488 && document.body.scrollTop < 2534) {
        icons[2].style.color = 'white';
    } else {
        icons[2].style.color = '#6c757d';
    }
    if (document.body.scrollTop >= 2534 && document.body.scrollTop < 2962) {
        icons[3].style.color = 'white';
    } else {
        icons[3].style.color = '#6c757d';
    }
    if (document.body.scrollTop >= 2962 && document.body.scrollTop < 3522) {
        icons[4].style.color = 'white';
    } else {
        icons[4].style.color = '#6c757d';
    }
    if (document.body.scrollTop >= 3522) {
        icons[5].style.color = 'white';
    } else {
        icons[5].style.color = '#6c757d';
    }
}