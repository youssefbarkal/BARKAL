function facebook(){
    let img = document.getElementsByTagName('img')[1];
    img.addEventListner('click',function(){window.location.href = 'https://www.facebook.com/youssef.barkal.2025?locale=fr_FR'});
}
function Dark(){
    let body = document.getElementsByTagName('body')[0];
    body.style = 'background-color: black';
    let h1 = document.getElementsByTagName('h4')[0];
    h1.style = 'color: white';
    let span = document.getElementsByTagName('span')[0];
    h1.style = 'background-color: white';
}