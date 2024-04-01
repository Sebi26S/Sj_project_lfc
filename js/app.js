/* Accordion */

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("activ");

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}






/*cookies */
setCookie =(cName,cValue,expDays)=>{
  let date = new Date();
  date.setTime(date.getTime()+(2*60*60*1000));
  const expires="expires="+date.toUTCString();
  document.cookie = cName +"=" + cValue +";" + expires + "; path=/";
}

getCookie = (cName)=>{
  const name = cName +"=";
  const cDecoded = decodeURIComponent(document.cookie);
  const cArr = cDecoded.split("; ");
  let value;
  cArr.forEach(val=>{
    if(val.indexOf(name)==0) value =val.substring(name.length);

  })

  return value;
}
document.querySelector("#cookies-btn").addEventListener("click",()=>{document.querySelector("#cookies").style.display="none";
setCookie("cookie",true,30)

})

cookieMessage=()=>{
  if(!getCookie("cookie"))
  document.querySelector("#cookies").style.display="block"
}
window.addEventListener("load",cookieMessage);
