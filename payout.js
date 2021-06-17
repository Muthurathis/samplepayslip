function myfunction(){


var date=document.getElementById("date1").innerText;
val=date.split("-");
document.getElementById("date1").innerText=val[0]+"-"+val[2]+"-"+val[1];



var num1=document.querySelector(".uniq").innerText;

var num2=document.getElementById("d2").innerText;
var num3=document.getElementById("d3").innerText;
var num4=document.getElementById("d4").innerText;
var num5=document.getElementById("d5").innerText;
var num6=document.getElementById("d6").innerText;
var num7=document.getElementById("d7").innerText;
var num8=document.getElementById("d8").innerText;
var num9=document.getElementById("d9").innerText;
var num10=document.getElementById("d10").innerText;
var num11=document.getElementById("d11").innerText;
var num12=document.getElementById("d12").innerText;

var cur1=indian(num1);
var cur2=indian(num2);
var cur3=indian(num3);
var cur4=indian(num4);
var cur5=indian(num5);
var cur6=indian(num6);
var cur7=indian(num7);
var cur8=indian(num8);
var cur9=indian(num9);
var cur10=indian(num10);
var cur11=indian(num11);
var cur12=indian(num12);


document.querySelector(".uniq").innerText=cur1;
document.getElementById("d2").innerText=cur2;
document.getElementById("d3").innerText=cur3;
document.getElementById("d4").innerText=cur4;
document.getElementById("d5").innerText=cur5;
document.getElementById("d6").innerText=cur6;
document.getElementById("d7").innerText=cur7;
document.getElementById("d8").innerText=cur8;
document.getElementById("d9").innerText=cur9;
document.getElementById("d10").innerText=cur10;
document.getElementById("d11").innerText=cur11;

document.getElementById("d12").innerText=cur12;



                    function indian(num){
                        n=new Number(num);
                        let cur=n.toLocaleString('en-IN',{
                                style:'currency',
                                currency:'INR'
                            });
                            return cur; 
                            }



                        }