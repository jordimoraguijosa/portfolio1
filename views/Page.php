<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="resource/ico/favicon.ico" type="image/ico" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/loader.css" rel="stylesheet">
    <link href="assets/css/sidebar.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/linked.rrss.js"></script>
    <script src="assets/js/viewPdf.js"></script>
    <script src="assets/js/contact.js"></script>
    <title class="i18n>tab"></title>
</head>

<body>
    <div id="btn-box">
        <i class="bi bi-list btn-box-icon" style="font-size: 1.7rem;"></i>
    </div>
    <div id="sidebar" class="bg-dark">
        <div id="sidebar-btn-box" class="mt-3">
            <i class="bi bi-list" style="font-size: 1.7rem;"></i>
        </div>
        <hr>
        <div class="sidebar-icons mt-3">
            <i class="bi bi-person-circle mb-3 sidebar-icon" onclick="linkedSidebar('aboutme')" style="font-size: 1.7rem;"></i>
            <i class="bi bi-book mb-3 sidebar-icon" onclick="linkedSidebar('knowledge')" style="font-size: 1.7rem;"></i>
            <i class="bi bi-briefcase mb-3 sidebar-icon" onclick="linkedSidebar('projects')" style="font-size: 1.7rem;"></i>
            <i class="bi bi-file-earmark-person mb-3 sidebar-icon" onclick="linkedSidebar('cv')" style="font-size: 1.7rem;"></i>
            <i class="bi bi-envelope mb-3 sidebar-icon" onclick="linkedSidebar('contact')" style="font-size: 1.7rem;"></i>
            <i class="bi bi-rss sidebar-icon" onclick="linkedSidebar('rrss')" style="font-size: 1.7rem;"></i>
        </div>
    </div>
    <div class="se-pre-con"></div>
    <div class="go-top-container" onclick="up()">
        <div class="go-top-button">
            <i class="bi bi-arrow-up-circle" style="font-size: 2rem; color: white;"></i>
        </div>
    </div>
    <div id="aboutme" class="btn-group position-absolute top-0 end-0" role="group">
        <span id="spinner-button-i18n" class="spinner-border spinner-border-sm mt-auto mb-auto mx-2" role="status" aria-hidden="true" style="display: none; width: 25px; height: 25px;"></span>
        <button id="btnGroupDrop1" style="opacity: 0.9;" type="button" class="i18n>select-lang btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        </button>
        <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
            <li><a class="i18n>lang-spanish dropdown-item" onclick="recoverLanguage('es')"></a></li>
            <li><a class="i18n>lang-catalan dropdown-item" onclick="recoverLanguage('ca')"></a></li>
            <li><a class="i18n>lang-english dropdown-item" onclick="recoverLanguage('en')"></a></li>
        </ul>
    </div>
    <div id="cont" class="margin mt-5">
        <div class="inner">
            <img src="resource/png/jordi.png" alt="Imagen de Jordi Mora Guijosa">
            <h1 class="mt-2 mb-4 title">Jordi Mora Guijosa</h1>
        </div>
        <div class="p-responsive mt-5">
            <p id="about-me" class="i18n>about-me fs-5 inner"></p>
            <p class="i18n>about-me-description inner-content" style="text-align: justify;"></p>
        </div>
        <hr class="mt-5 mb-5">
        <div>
            <p id="knowledge" class="i18n>knowledge fs-5 inner"></p>
            <ul class="inner-content list-group">
                <li class="i18n>list-one"></li>
                <li class="i18n>list-two"></li>
                <li class="i18n>list-three"></li>
                <li class="i18n>list-four"></li>
                <li class="i18n>list-five"></li>
                <li class="i18n>list-six"></li>
                <li class="i18n>list-seven"></li>
            </ul>
        </div>
        <hr class="mt-5 mb-5">
        <div>
            <p id="training" class="i18n>training fs-5 inner"></p>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="i18n>engineering-degree accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="i18n>collapseOne accordion-body"></div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="i18n>top-grade-web accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="i18n>collapseTwo accordion-body"></div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="i18n>cross-platform-top-grade accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="i18n>collapseThree accordion-body"></div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="i18n>middle-grade-administration accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                        <div class="i18n>collapseFour accordion-body"></div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="mt-5 mb-5">
        <div>
            <p id="projects" class="i18n>fulfilled-projects fs-5 inner"></p>
            <div class="card margin mb-4" style="width: 22rem;">
                <img src="resource/jpeg/installer.jpg" class="card-img-top" alt="Foto del autor Anthony Fomin bajo la licencia de Unsplash donde se visualiza un instalador">
                <div class="card-body inner">
                    <h5 class="card-title">Dic Instal·lacions</h5>
                    <a href="https://www.dicinstal.com" class="i18n>view btn btn-dark stretched-link"></a>
                </div>
            </div>
            <div class="card margin mb-4" style="width: 22rem;">
                <img src="resource/jpeg/develop.jpg" class="card-img-top" alt="Foto del autor Karl Pawlowicz bajo la licencia de Unsplash donde se visualiza un monitor junto a una taza de café">
                <div class="card-body inner">
                    <h5 class="card-title">CV digital</h5>
                    <a href="#" class="i18n>view btn btn-dark stretched-link"></a>
                </div>
            </div>
        </div>
        <hr class="mt-5 mb-5">
        <div>
            <p id="cv" class="i18n>my-cv fs-5 inner"></p>
            <div class="card margin" style="width: 22rem;">
                <img src="resource/png/img-cv.png" class="card-img-top" alt="Imagen donde se visualiza un sobre">
                <div class="card-body inner">
                    <h5 class="i18n>download-cv card-title"></h5>
                    <!--<a href="resource/pdf/cv.pdf" class="i18n>download btn btn-dark stretched-link"></a>-->
                    <button class="i18n>view btn btn-dark" onclick="viewPDF('resource/pdf/cv.pdf')"></button>
                </div>
            </div>
        </div>
        <hr class="mt-5 mb-5">
        <div>
            <p id="contact" class="i18n>contact fs-5 inner"></p>
            <div class="p-responsive">
            <p class="i18n>contact-me inner-content"></p>
            <form id="contact-form">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="i18n>email-address form-label"></label>
                    <input type="email" class="form-control" id="inputEmail" name="inputEmail" maxlength="50">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="i18n>message form-label"></label>
                    <textarea id="inputMessage" name="inputMessage" class="form-control" maxlength="300" rows="10"></textarea>
                </div>
            </form>
            <button class="i18n>send btn btn-dark" onclick="formContact()" style="width: 100px;">
            </div>
        </div>
        <hr id="rrss" class="mt-5 mb-5">
        <div class="inner rrss mb-5">
            <i class="bi bi-instagram mx-2" id="instagram" onclick="rrss('instagram')" style="font-size: 18px;"></i>
            <i class="bi bi-facebook mx-2" id="facebook" onclick="rrss('facebook')" style="font-size: 18px;"></i>
            <i class="bi bi-linkedin mx-2" id="linkedin" onclick="rrss('linkedin')" style="font-size: 18px;"></i>
            <i class="bi bi-envelope mx-2" id="email" onclick="rrss('email')" style="font-size: 18px;"></i>
        </div>
    </div>
    <div class="anchor"></div>
    <script src="assets/js/sidebar.js"></script>
    <script src="assets/js/top.js"></script>
    <?php
    require_once "modals/ModalContactError.php";
    require_once "modals/ModalContactConfirmation.php";
    require_once "modals/ModalViewPdf.php";
    require_once "modals/ModalLoading.php";
    require_once "modals/ModalError500.php";
    ?>
</body>

</html>