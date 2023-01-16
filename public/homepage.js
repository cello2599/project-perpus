const poster = document.getElementById("beranda");

var beranda = [
    {
        poster:"image/bg-Book1.jpg"
    },
    {
        poster:"image/bg-Book2.jpg"
    },
    {
        poster:"image/bg-Book3.png"
    },
]

var berandaIndex = 0;


function changeberanda() { 
    console.log(berandaIndex);
    poster.style.backgroundImage = "url(" + beranda[berandaIndex].poster + ")";

    berandaIndex++;
    if (berandaIndex >= beranda.length) {
        berandaIndex = 0;
    }
}

setInterval(changeberanda, 3000);

