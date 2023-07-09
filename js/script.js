var pd = document.querySelector('#pd_check')
pd.addEventListener("change", () => {
    if (pd.checked) {
        document.getElementById('pd').removeAttribute("disabled")
    } else {
        document.getElementById('pd').value = "";
        document.getElementById('pd').setAttribute("disabled", true);
    }
})
var jg = document.querySelector('#jg_check')
jg.addEventListener("change", () => {
    if (jg.checked) {
        document.getElementById('jg').removeAttribute("disabled")
    } else {
        document.getElementById('jg').value = "";
        document.getElementById('jg').setAttribute("disabled", true);
    }
})
var cb = document.querySelector('#cb_check')
cb.addEventListener("change", () => {
    if (cb.checked) {
        document.getElementById('cb').removeAttribute("disabled")
    } else {
        document.getElementById('cb').value = "";
        document.getElementById('cb').setAttribute("disabled", true);
    }
})
var sg = document.querySelector('#sg_check')
sg.addEventListener("change", () => {
    if (sg.checked) {
        document.getElementById('sg').removeAttribute("disabled")
    } else {
        document.getElementById('sg').value = "";
        document.getElementById('sg').setAttribute("disabled", true);
    }
})
var sm = document.querySelector('#sm_check')
sm.addEventListener("change", () => {
    if (sm.checked) {
        document.getElementById('sm').removeAttribute("disabled")
    } else {
        document.getElementById('sm').value = "";
        document.getElementById('sm').setAttribute("disabled", true);
    }
})
