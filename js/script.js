document.getElementById("currentYear").innerHTML = new Date().getFullYear();

function showNav(){
    var content = document.getElementById("navContent");
    content.classList.toggle("open");
}

document.getElementById('nav-mobile-button').addEventListener('click',()=>{
    showNav();
});

function showModal(){
    $('#modal').modal('show');
}

