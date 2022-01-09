function actionGoTop(){
    if(document.body.scrollTop > 100) {
        document.querySelector('.go-top-container').classList.add('show');
    }else{
        document.querySelector('.go-top-container').classList.remove('show');
    }
}

function up() {
    window.scrollTo({
        top: 0,
        behaivor: 'smooth'
    });
}