function toggle() {
    var tombol = document.getElementById('dropbtn');
    var page = document.getElementById('info');
    page.style = "height: 230px";
    tombol.style = "transform: rotateZ(180deg)";
    tombol.setAttribute('onclick', 'toggles()');
}

function toggles() {
    var tombol = document.getElementById('dropbtn');
    var page = document.getElementById('info');
    page.style = "height: 30px";
    tombol.style = "transform: rotateZ(0deg)";
    tombol.setAttribute('onclick', 'toggle()');
}