const menuToggle = document.querySelector (`.menu-toggle input`);
const nav = document.querySelector (`nav ul`);

menuToggle.addEventListener(`click`, function() {
    nav.classList.toggle(`slide`);
})

function order() {
    var txt;
    if (confirm("Apakah data sudah benar ?")) {
      txt = "Terima kasih telah memilih myHIUm";
    } else {
      txt = "Reservasi dibatalkan";
    }
    document.getElementById("text-order").innerHTML = txt;
  }