document.body.style.zoom="80%";
/* Slideshow */
var index = 1;
var slides = 4;

//Show First Image

//Responsive Navbar
function showList()
{
	document.getElementById('list').classList.toggle('respons-ul');
}

setInterval(function salefSlide()
{
    
    if(index === slides)
		index = 1;

	showDiv(index);
	index ++;
},1500);

function next()
{	

	if(index === slides)
		index = 1;

	showDiv(index);
	index ++;
	
}

function back()
{
	if(index === 1)
		index = 4;

	index --;
	showDiv(index);
}

function showDiv(index)
{
	   	window.slide.src="images/slider/"+index+".jpg";
}
//Scroll Top Button
window.onscroll = function()
{
	if(document.body.scrollTop >=30)
	{
		document.getElementById('scrolltop').style.display = "block";
	}
	else
	{
		document.getElementById('scrolltop').style.display = "none";
	}

}
function topFunction() {
    document.body.scrollTop = 0; // For Chrome, Safari and Opera
}

  function dlgcancel()
{
    var white = window.whitebord;
    var dlg = window.dlgbox;
    white.style.display= "none";
    dlg.style.display = "none";
}
  function dlgshow()
{
    var white = window.whitebord;
    var dlg = window.dlgbox;
    white.style.display= "block";
    dlg.style.display = "block";
    var winwidth= window.innerWidth;
    var winheight= window.innerHeight;
    dlg.style.left = (winwidth/2) - 480/2 + "px" ;
    dlg.style.top = "150px";
}