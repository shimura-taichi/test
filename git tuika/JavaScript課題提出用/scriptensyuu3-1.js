//問1
for(var star1 =1; star1 <= 5; star1++){
  document.write("★");
}
document.write("<br>");
document.write("<br>");

//問2
for(var star1 =1; star1 <= 2; star1++){
  for(var star2 =1; star2 <= 3; star2++){
    document.write("★");
  }
  document.write("<br>");
}
document.write("<br>");
document.write("<br>");

//問3
for(var star1 =1; star1 <= 2; star1++){
  for(var star2 =1; star2 <= 5; star2++){
    document.write("☆");
  }
  document.write("<br>");
}

document.write("<br>");
document.write("<br>");

//問4
for(var star1 =1; star1 <= 4; star1++){
  for(var star2 =1; star2 <= 5; star2++){
    document.write("★");
  }
  document.write("<br>");
}
document.write("<br>");
document.write("<br>");

//問5
for(var star1 =1; star1 <= 4; star1++){
  for(var star2 =1; star2 <= 3; star2++){
    document.write("★");
  }
  document.write("<br>");
}
document.write("<br>");
document.write("<br>");

//問6
for(var no1 =0; no1< 3; no1++){
  for(var no2 =0; no2< 3; no2++){
    if(no2 % 2 ==0) {
      document.write("★");
    }else{
      document.write("☆");
    }
  }
  document.write("<br>");
}
document.write("<br>");
document.write("<br>");

//問7
for(var no1 = 0; no1 < 4; no1++){
  for(var no2 = 0; no2 < 5; no2++){
    if(no2 % 2 ==0) {
      document.write("★");
    }else{
      document.write("☆");
    }
  }
  document.write("<br>");
}

document.write("<br>");
document.write("<br>");

//問8 

for(var star1 =1; star1 < 6; star1++){
  for(var star2 =0; star2 < star1; star2++){
    document.write("★");
  }
  document.write("<br>");
}

