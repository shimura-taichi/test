var myoji=["高木","田中","山本"];
document.write(myoji);

var color=["赤","白","黒"];
document.write(color);

var color=["赤","白","黒"];
document.write(color[0]);
document.write(color[1]);
document.write(color[2]);

var color=["No1","No2","No3"];
delete color[0];
document.write(color);

var pre1=["東京","神奈川","埼玉"];
pre1[3]="千葉";
document.write(pre1);

var pre2=["東京","神奈川","埼玉"];
delete pre2[0]; pre2[0]="千葉";
document.write(pre2);

var month =["1月","2月","3月"];
month[2]="誕生日";
document.write(month);
document.write(month[2]);

var myoji ={"A組":"田中","B組":"高橋","C組":"斎藤"};
document.write(myoji["A組"]);

var number ={"1番":"佐藤","2番":"山田","3番":"斎藤"};
document.write(number["1番"]);