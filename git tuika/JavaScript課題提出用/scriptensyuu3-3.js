//問1
function area(radius){
  return(radius*radius*3.14+"㎠");
}
//5*5*3.14=78.5
document.write(area(5)+"<br>");
//7*7*3.14=153.86
document.write(area(7)+"<br>");
//10*10*3.14=314
document.write(area(10)+"<br>");

document.write("<br>");

//問2

//Aグループの合計金額は(2*500)+(4*200)=1800円です。
//Bグループの合計金額は(1*500)+(5*200)=1500円です。
//Cグループの合計金額は(3*500)+(7*200)=2900円です。

function Price(group,o,k){
  return (group+"グループの合計金額は"+((o*500)+(k*200))+"円です。");
}

document.write(Price("A",2,4,));
document.write("<br>");
document.write(Price("B",1,5));
document.write("<br>");
document.write(Price("C",3,7));