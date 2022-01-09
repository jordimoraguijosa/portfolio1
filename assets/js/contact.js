function formContact() {
  var name = document.getElementById("inputEmail").value;
  var message = document.getElementById("inputMessage").value;
  var check = true;
  if (name == null || name.length == 0) {
    check = false;
  }
  if (message == null || message.length == 0) {
    check = false;
  }
  if (check) {
    sendContact();
  } else {
    $("#modalContactError").modal("show");
  }
}


function sendContact() {
  var xhttp = new XMLHttpRequest();
  var formData = new FormData(document.getElementById('contact-form'));
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      setTimeout(function () { $("#modalLoading").modal("hide"); }, 1000);
      if(this.responseText == "true"){
        setTimeout(function () { $("#modalContactConfirmation").modal("show"); }, 1000);
      }else{
        setTimeout(function () { $("#modalError500").modal("show"); }, 1000);
      }
    } else if (this.status == 500) {
      setTimeout(function () { $("#modalLoading").modal("hide"); }, 1000);
      $("#modalError500").modal("show");
    } else {
      $("#modalLoading").modal({ backdrop: 'static', keyboard: false });
      $("#modalLoading").modal("show");
    }
  };
  xhttp.open("POST", "assets/php/contact.php", true);
  xhttp.send(formData);
}