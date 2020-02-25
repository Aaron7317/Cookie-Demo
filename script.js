function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
  
function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i <ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function showJSCookie() {
  document.getElementById("demo-1-reveal").innerHTML = "Clicks: " + getCookie("clicks");
}

function deleteJSCookie() {
  var d = new Date();
  setCookie("clicks", 0, d.getTime() - 1);
}

window.onload = function() {
  document.getElementById("demo-1-button").onclick = function addClick() {
    if (isNaN(getCookie("clicks"))) {
      setCookie("clicks", "0", 1);
    }
    setCookie("clicks", parseInt(getCookie("clicks")) + 1, 1);
  }
}