document.querySelector('.saibamais_bt1').style.display = 'none'; 
document.querySelector('.saibamais_bt2').style.display = 'none'; 
document.querySelector('.saibamais_bt3').style.display = 'none'; 
document.querySelector('.saibamais_bt4').style.display = 'none'; 
document.querySelector('.tradicional').addEventListener('click', showBtnTradicional); 
document.querySelector('.chocolate').addEventListener('click', showBtnChocolate); 
document.querySelector('.avela').addEventListener('click', showBtnAvela); 
document.querySelector('.sortidos').addEventListener('click', showBtnSortidos); 

function showBtnTradicional(e) { 
document.querySelector('.saibamais_bt1').style.display = 'inline-block';
document.querySelector('.saibamais_bt2').style.display = 'none'; 
document.querySelector('.saibamais_bt3').style.display = 'none'; 
document.querySelector('.saibamais_bt4').style.display = 'none';  
e.preventDefault(); 
}

function showBtnChocolate(e) { 
document.querySelector('.saibamais_bt2').style.display = 'inline-block';
document.querySelector('.saibamais_bt1').style.display = 'none'; 
document.querySelector('.saibamais_bt3').style.display = 'none'; 
document.querySelector('.saibamais_bt4').style.display = 'none';  
e.preventDefault(); 
}

function showBtnAvela(e) { 
document.querySelector('.saibamais_bt3').style.display = 'inline-block';
document.querySelector('.saibamais_bt1').style.display = 'none'; 
document.querySelector('.saibamais_bt2').style.display = 'none'; 
document.querySelector('.saibamais_bt4').style.display = 'none';  
e.preventDefault(); 
}

function showBtnSortidos(e) { 
document.querySelector('.saibamais_bt4').style.display = 'inline-block';
document.querySelector('.saibamais_bt1').style.display = 'none'; 
document.querySelector('.saibamais_bt2').style.display = 'none'; 
document.querySelector('.saibamais_bt3').style.display = 'none';  
e.preventDefault(); 
}

function imgSlider(anything){
    document.querySelector('.cookie').src = anything;
}
  
function changeCircleColor(color){
    const circle = document.querySelector('.circle');
    circle.style.background = color;
}


function changeButtonColor1(color){
    const saibamais_bt = document.querySelector('.saibamais_bt1');
    saibamais_bt.style.background = color;
}

function changeButtonColor2(color){
    const saibamais_bt = document.querySelector('.saibamais_bt2');
    saibamais_bt.style.background = color;
}

function changeButtonColor3(color){
    const saibamais_bt = document.querySelector('.saibamais_bt3');
    saibamais_bt.style.background = color;
}

function changeButtonColor4(color){
    const saibamais_bt = document.querySelector('.saibamais_bt4');
    saibamais_bt.style.background = color;
}

function changeCookieColor(color){
    const cookie = document.querySelector('.cookieColor');
    cookie.style.color = color;
}

function changeTextTradicional(text){
    document.getElementById("cookieText").innerHTML = "Cookie Tradicional";
}

function changeTextChocolate(text){
    document.getElementById("cookieText").innerHTML = "Cookie de Chocolate";
}

function changeTextAvela(text){
    document.getElementById("cookieText").innerHTML = "Cookie de Avelã";
}

function changeTextSortidos(text){
    document.getElementById("cookieText").innerHTML = "Cookies Sortidos";
}

