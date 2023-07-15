var pd = document.querySelector('#pd_check')
pd.addEventListener("change", () => {
    if (pd.checked) {
        document.getElementById('pd').removeAttribute("disabled");
        document.getElementById('pd').classList.remove('input-disabled');
        document.getElementById('pd').classList.add('input');
        } else {
        document.getElementById('pd').classList.remove('input');
        document.getElementById('pd').classList.add('input-disabled');
        document.getElementById('pd').value = "";
        document.getElementById('pd').setAttribute("disabled", true);
    }
})

var jg = document.querySelector('#jg_check')
jg.addEventListener("change", () => {
    if (jg.checked) {
        document.getElementById('jg').removeAttribute("disabled");
        document.getElementById('jg').classList.remove('input-disabled');
        document.getElementById('jg').classList.add('input');
    } else {
        document.getElementById('jg').classList.remove('input');
        document.getElementById('jg').classList.add('input-disabled');
        document.getElementById('jg').value = "";
        document.getElementById('jg').setAttribute("disabled", true);
    }
})
var cb = document.querySelector('#cb_check')
cb.addEventListener("change", () => {
    if (cb.checked) {
        document.getElementById('cb').removeAttribute("disabled");
        document.getElementById('cb').classList.remove('input-disabled');
        document.getElementById('cb').classList.add('input');
    } else {
        document.getElementById('cb').classList.remove('input');
        document.getElementById('cb').classList.add('input-disabled');
        document.getElementById('cb').value = "";
        document.getElementById('cb').setAttribute("disabled", true);
    }
})
var sg = document.querySelector('#sg_check')
sg.addEventListener("change", () => {
    if (sg.checked) {
        document.getElementById('sg').removeAttribute("disabled");
        document.getElementById('sg').classList.remove('input-disabled');
        document.getElementById('sg').classList.add('input');
    } else {
        document.getElementById('sg').classList.remove('input');
        document.getElementById('sg').classList.add('input-disabled');
        document.getElementById('sg').value = "";
        document.getElementById('sg').setAttribute("disabled", true);
    }
})
var sm = document.querySelector('#sm_check')
sm.addEventListener("change", () => {
    if (sm.checked) {
        document.getElementById('sm').removeAttribute("disabled");
        document.getElementById('sm').classList.remove('input-disabled');
        document.getElementById('sm').classList.add('input');
    } else {
        document.getElementById('sm').classList.remove('input');
        document.getElementById('sm').classList.add('input-disabled');
        document.getElementById('sm').value = "";
        document.getElementById('sm').setAttribute("disabled", true);
    }
})

var profil = document.getElementById('profil');
var menu = document.getElementById('menu');
// console.log(profil)
profil.addEventListener('click' , () => {
    menu.style.opacity = '100%';
    menu.style.marginTop = '58vh';
})
profil.addEventListener('dblclick' , () => {
    menu.style.opacity = '0';
    menu.style.marginTop = '80vh';
    // profil.style.backgroundColor = 'blue';
})

console.log("terbaru")