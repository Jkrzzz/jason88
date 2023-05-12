function showQRModal() {
  var showModal = document.getElementById("show-modal");
  showModal.classList.remove("d-none");
}
function hideQRModal() {
  var showModal = document.getElementById("show-modal");
  showModal.classList.add("d-none");
}
function checkDigit(val) {
  if (String(+val).charAt(0) == val) {
    val = "0" + val;
  }
  return val;
}
setInterval(() => {
  var now = new Date();
  var year = now.getFullYear();
  var month = now.getMonth() + 1;
  var hour = now.getHours();
  var mins = now.getMinutes();
  var sec = now.getSeconds();

  month = checkDigit(month);

  hour = checkDigit(hour);
  mins = checkDigit(mins);
  sec = checkDigit(sec);
  var day = now.getDate();
  day = checkDigit(day);
  var date = document.getElementById("date");
  var time = document.getElementById("time");
  date.innerHTML = month + "/" + day + "/" + year;
  time.innerHTML = hour + ":" + mins + ":" + sec;
}, 1000);

var gameClose = document.getElementById("game-gif");
function hideGame() {
  gameClose.classList.add("d-none");
}
