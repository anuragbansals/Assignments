
document.getElementById('submit').onclick = function () {
    let text1  = document.getElementById('comment1');
    let text2  = document.getElementById('comment2');
    let value1 = text1.value;
    let value2 = text2.value;

    text1.value = value2;
    text2.value = value1;
    console.log(value2);
    console.log(value1);
}