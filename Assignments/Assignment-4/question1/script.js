function myColor()
{
    circle = document.getElementsByClassName('circle')[0];
    let color = change()
    circle.style.background = color;
}

function change()
{
    let r = Math.floor(Math.random()*256);
    let g = Math.floor(Math.random()*256);
    let b = Math.floor(Math.random()*256);
    return "rgb("+r+", "+g+", "+b+")";
}

myColor();