function viewPDF(src) {
    var checkObject = document.getElementById("objectPdf");
    if (checkObject) {
        var dad = checkObject.parentElement;
        dad.removeChild(checkObject);
    }
    var object = document.createElement("object");
    object.setAttribute("data", src);
    object.setAttribute("id", "objectPdf");
    object.setAttribute("type", "application/pdf");
    object.setAttribute("style", "width: 100%; height: 600px;");
    var p = document.createElement("p");
    p.innerHTML = this.values["i18n>not-support-pdf"];
    var link = document.createElement("a");
    link.setAttribute("href", src);
    link.innerHTML = this.values["i18n>download"];
    link.setAttribute("class", "btn-secondary");
    object.appendChild(p);
    object.appendChild(link);
    document.getElementById("containerObjectPdf").appendChild(object);
    $("#modalViewPdf").modal("show");
}