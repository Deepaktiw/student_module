var i = 0;
var txt = 'Teaching is the one profession that creates all other professions.';
var speed = 50;
var pass=document.getElementById('pass');
var submitBtn=document.getElementById('submit');
function typeWriter() {
  if (i < txt.length) {
    document.getElementById("demo").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}
function chkpass(btn)
{ // checking password
    if(pass.value == 11223344) {
		submitBtn.innerHTML ='<i class="material-icons loading" style="font-size: 1.8em;">cached</i>'>;
	}
}
