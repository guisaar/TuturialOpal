// Etec/2º%20Ano/1º%20Bimestre/BD_II/Tuturial_MySql/index.HTML#openModal
// Etec/2º%20Ano/1º%20Bimestre/BD_II/Tuturial_MySql/index.HTML
function scrollBanner() {
  scrollPos = window.scrollY;
  var headerText = document.querySelector('.header-paralax')
  headerText.style.marginTop = -(scrollPos/3)+"px";
  headerText.style.opacity = 1-(scrollPos/480);
}
   document.getElementById("openModal").addEventListener("load", Readly());
window.addEventListener('scroll', scrollBanner);
function Readly() {
var url_atual = window.location.href

if (url_atual == "file:///E:/Etec/2%C2%BA%20Ano/1%C2%BA%20Bimestre/BD_II/Tuturial_MySql/index.HTML#openModal") {
       document.getElementById("openModal").addEventListener("load", Xampp());
    }
	setTimeout(Readly(), 2)
	}

function Xampp(){
	window.location="#close"; 
 var Xampp = document.querySelector('#body2')
 var MySql = document.querySelector('#body3')
 var XamppTexto = document.querySelector('#Xampp')
 var MySqlTexto = document.querySelector('#MySql')
 
 var header = document.querySelector('.header-paralax')
 
 Xampp.style.display = "block"
 MySql.style.display = "block"	

document.documentElement.style.setProperty('--ladoheader', '100%');

document.documentElement.style.setProperty('--marginbody2', '200%');

document.documentElement.style.setProperty('--floatbodyone', 'right');


setTimeout(XamppChegando, 2000)

function XamppChegando() {
 
Xampp.style.display = "none"
 MySqlTexto.style.display = "none"	
 XamppTexto.style.display = "block"
document.documentElement.style.setProperty('--marginbody3', '0%');	
document.documentElement.style.setProperty('--ladoheader', ' var(--widthbody2)');
document.documentElement.style.setProperty('--floatbodyone', 'right');
document.documentElement.style.setProperty('--header', ' var(--Colorheader2)');
document.documentElement.style.setProperty('--Titulo', 'var(--colorTitulo2)');
}


}

 function MySql() {

 var Xampp = document.querySelector('#body2')
 var MySql = document.querySelector('#body3')
 var XamppTexto = document.querySelector('#Xampp')
 var MySqlTexto = document.querySelector('#MySql')
 
 var header = document.querySelector('.header-paralax')
 
 Xampp.style.display = "block"
 MySql.style.display = "block"	
 
document.documentElement.style.setProperty('--ladoheader', '100%');

document.documentElement.style.setProperty('--marginbody3', '-100%');

document.documentElement.style.setProperty('--floatbodyone', 'right');


setTimeout(MySqlChegando, 2000)

function MySqlChegando() {
	
MySql.style.display = "none"
XamppTexto.style.display = "none"
MySqlTexto.style.display = "block"	
document.documentElement.style.setProperty('--marginbody2', 'var(--larguraite)');	
document.documentElement.style.setProperty('--ladoheader', ' 0%');
document.documentElement.style.setProperty('--floatbodyone', 'left');
document.documentElement.style.setProperty('--header', ' var(--Colorheader1)');
document.documentElement.style.setProperty('--Titulo', 'var(--colorTitulo1)');
}

	
}