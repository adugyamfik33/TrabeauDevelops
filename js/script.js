document.getElementById("currentYear").innerHTML = new Date().getFullYear();
const loader = document.getElementById('loader');
const error_icon = `
<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-exclamation-circle" width="28" height="28" viewBox="0 0 24 24" stroke-width="2" stroke="#ff2825" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
  <path d="M12 9v4" />
  <path d="M12 16v.01" />
</svg>`;
const success_icon = `
<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-circle-check" width="28" height="28" viewBox="0 0 24 24" stroke-width="2" stroke="#00b341" fill="none" stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
  <path d="M9 12l2 2l4 -4" />
</svg>`;
function showNav(){
    var content = document.getElementById("navContent");
    content.classList.toggle("open");
}

document.getElementById('nav-mobile-button').addEventListener('click',()=>{
    showNav();
});

function showModal(){
    $('.modal').modal('show');
}

const hire_me_form = document.getElementById('hire-me-form');

hire_me_form.addEventListener('submit',(e)=>{
    e.preventDefault();
    document.getElementById('email-btn').setAttribute('disabled','disabled');
    loader.style.display = 'block';
    let formData = new FormData(hire_me_form);
    emailjs.send("service_ewbj65w","template_9nezlac",{
        name: formData.get('name'),
        message: formData.get('message'),
        phone_number: formData.get('phone-number'),
        from_name: formData.get('email')
        })                    
        .then(() => {
            loader.style.display = 'none';
            document.getElementById('email-btn').removeAttribute('disabled');
            launch_toast('Email Sent Successfully!',200);
            hire_me_form.reset()
        }, (error) => {
            console.log('FAILED...', error);
            loader.style.display = 'none';
            document.getElementById('email-btn').removeAttribute('disabled');
            launch_toast('Failed to send Email.',400);
        });
});

function launch_toast(message,code) {
    var x = document.getElementById("toast")
    var desc = document.getElementById("desc");
    var icon = document.getElementById('img');
    desc.innerHTML = message;
    icon.innerHTML = (code == 200) ? success_icon : error_icon;
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000);
}
(function(){
    emailjs.init({
      publicKey: "N8CSI_bvxbYOUu2wi",
    });
 })();