<script src="assets/js/i18n.js"></script>
<?php

    require_once "core/routes.php";

    
    if(isset($_GET['start'])){

    }else{
        $controller = newController('Page');
    }