
// let value = document.getElementById('display');

function search() {
    var searchh = document.getElementById('submit');
    var links = document.querySelectorAll('a');
    let display = document.getElementById('display');
    for (link of links) {
        console.log(link.href)
        display.innerHTML += "<p>"+link.href + "</p>"
    }

}
    // search();
