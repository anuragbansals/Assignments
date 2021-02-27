function change()
{
  if(document.getElementById('bulb2').style.visibility==='hidden'){
      document.getElementById('bulb2').style.visibility = 'visible';
      document.getElementById('bulb1').style.visibility = 'hidden';
      document.getElementById('btn').innerHTML = "Off";
  }else{
    document.getElementById('bulb1').style.visibility = 'visible';
    document.getElementById('bulb2').style.visibility = 'hidden';
    document.getElementById('btn').innerHTML = "On";
  }
}