var checkResponsive = false;

function responsiveMenu(){
    
    if(checkResponsive == false){
        document.getElementsByClassName('side-menu')[0].style.marginLeft = '0%';
        checkResponsive == true;
        alert('Check state: ' + checkResponsive);
    }
    if(checkResponsive == true){
        alert('oxi');
        document.getElementsByClassName('side-menu')[0].style.marginLeft = '-100%';
        checkResponsive == false;
    }

}