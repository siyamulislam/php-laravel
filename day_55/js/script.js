
 var reset= document.getElementById('reset');

 var divi= document.getElementById('divi');
 var multi= document.getElementById('multi');
 var sub= document.getElementById('sub');
 var add= document.getElementById('add');

 divi.onclick = ()=>calculator('/');
 multi.onclick = ()=>calculator('*');
 sub.onclick = ()=>calculator('-');
 add.onclick = ()=>calculator('+');


 reset.onclick=()=>resetCal();
 function calculator(op){
    var fn= Number(document.getElementById('firstNumber').value);
    var ln= Number(document.getElementById('lastNumber').value);
    var result=0;
    switch(op){
        case '+':result=fn+ln; break;
        case '-':result=fn-ln;break;
        case '*':result=fn*ln;break;
        case '/':result=fn/ln;break;
    } 
    document.getElementById('result').value=result;
 }

 function resetCal(){
  document.getElementById('firstNumber').value='';
  document.getElementById('lastNumber').value='';
  document.getElementById('result').value='';
  document.getElementById('divi').checked = false;
  document.getElementById('multi').checked = false;
  document.getElementById('sub').checked = false;
  document.getElementById('add').checked = false; 

 }