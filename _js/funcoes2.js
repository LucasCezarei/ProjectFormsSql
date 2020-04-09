// Estrelas Grau de Satisfação Geral
function Avaliar(estrela2) {
   var url = window.location;
   url = url.toString()
   url = url.split("index.php");
   url = url[0];
  
   var s11 = document.getElementById("s11").src;
   var s12 = document.getElementById("s12").src;
   var s13 = document.getElementById("s13").src;
   var s14 = document.getElementById("s14").src;
   var s15 = document.getElementById("s15").src;
   var s16 = document.getElementById("s16").src;
   var s17 = document.getElementById("s17").src;
   var s18 = document.getElementById("s18").src;
   var s19 = document.getElementById("s19").src;
   var s20 = document.getElementById("s20").src;
   var avaliacao = 0;
   
  
  //ESTRELA 10
  if (estrela2 == 20){ 
      if (s15 == url + "img/star0.png") {
      } else {
      document.getElementById("s11").src = "img/star3.png";
      document.getElementById("s12").src = "img/star3.png";
      document.getElementById("s13").src = "img/star3.png";
      document.getElementById("s14").src = "img/star3.png";
      document.getElementById("s15").src = "img/star3.png";
      document.getElementById("s16").src = "img/star3.png";
      document.getElementById("s17").src = "img/star3.png";
      document.getElementById("s18").src = "img/star3.png";
      document.getElementById("s19").src = "img/star3.png";
      document.getElementById("s20").src = "img/star3.png";
      avaliacao = 20;
     }
  }
  
  //ESTRELA 9
  if (estrela2 == 19){ 
      if (s15 == url + "img/star0.png") {
      } else {
      document.getElementById("s11").src = "img/star3.png";
      document.getElementById("s3").src = "img/star3.png";
      document.getElementById("s14").src = "img/star3.png";
      document.getElementById("s15").src = "img/star3.png";
      document.getElementById("s16").src = "img/star3.png";
      document.getElementById("s17").src = "img/star3.png";
      document.getElementById("s18").src = "img/star3.png";
      document.getElementById("s19").src = "img/star3.png";
      document.getElementById("s20").src = "img/star0.png";
      avaliacao = 19;
     }
  }
  
  //ESTRELA 8
  if (estrela2 == 18){ 
      if (s15 == url + "img/star0.png") {
      } else {
      document.getElementById("s11").src = "img/star3.png";
      document.getElementById("s12").src = "img/star3.png";
      document.getElementById("s13").src = "img/star3.png";
      document.getElementById("s14").src = "img/star3.png";
      document.getElementById("s15").src = "img/star3.png";
      document.getElementById("s16").src = "img/star3.png";
      document.getElementById("s17").src = "img/star3.png";
      document.getElementById("s18").src = "img/star3.png";
      document.getElementById("s19").src = "img/star0.png";
      document.getElementById("s20").src = "img/star0.png";
      avaliacao = 18;
     }
  }
  
  //ESTRELA 7
  if (estrela2 == 17){ 
      if (s15 == url + "img/star0.png") {
      } else {
      document.getElementById("s11").src = "img/star3.png";
      document.getElementById("s12").src = "img/star3.png";
      document.getElementById("s13").src = "img/star3.png";
      document.getElementById("s14").src = "img/star3.png";
      document.getElementById("s15").src = "img/star3.png";
      document.getElementById("s16").src = "img/star3.png";
      document.getElementById("s17").src = "img/star3.png";
      document.getElementById("s18").src = "img/star0.png";
      document.getElementById("s19").src = "img/star0.png";
      document.getElementById("s20").src = "img/star0.png";
      avaliacao = 17;
     }
  }
  
   //ESTRELA 6
   if (estrela2 == 16){ 
      if (s15 == url + "img/star0.png") {
      } else {
      document.getElementById("s11").src = "img/star3.png";
      document.getElementById("s12").src = "img/star3.png";
      document.getElementById("s13").src = "img/star3.png";
      document.getElementById("s14").src = "img/star3.png";
      document.getElementById("s15").src = "img/star3.png";
      document.getElementById("s16").src = "img/star3.png";
      document.getElementById("s17").src = "img/star0.png";
      document.getElementById("s18").src = "img/star0.png";
      document.getElementById("s19").src = "img/star0.png";
      document.getElementById("s20").src = "img/star0.png";
      avaliacao = 16;
     }
  }
  
     //ESTRELA 5
     if (estrela2 == 15){ 
      if (s15 == url + "img/star0.png") {
      } else {
      document.getElementById("s11").src = "img/star3.png";
      document.getElementById("s12").src = "img/star3.png";
      document.getElementById("s13").src = "img/star3.png";
      document.getElementById("s14").src = "img/star3.png";
      document.getElementById("s15").src = "img/star3.png";
      document.getElementById("s16").src = "img/star0.png";
      document.getElementById("s17").src = "img/star0.png";
      document.getElementById("s18").src = "img/star0.png";
      document.getElementById("s19").src = "img/star0.png";
      document.getElementById("s20").src = "img/star0.png";
      avaliacao = 15;
     }
  }
  
      //ESTRELA 4
      if (estrela2 == 14){ 
          if (s15 == url + "img/star0.png") {
          } else {
          document.getElementById("s11").src = "img/star3.png";
          document.getElementById("s12").src = "img/star3.png";
          document.getElementById("s13").src = "img/star3.png";
          document.getElementById("s14").src = "img/star3.png";
          document.getElementById("s15").src = "img/star0.png";
          document.getElementById("s16").src = "img/star0.png";
          document.getElementById("s17").src = "img/star0.png";
          document.getElementById("s18").src = "img/star0.png";
          document.getElementById("s19").src = "img/star0.png";
          document.getElementById("s20").src = "img/star0.png";
          avaliacao = 14;
         }
      }
   
   //ESTRELA 3
   if (estrela2 == 13){ 
      if (s15 == url + "img/star0.png") {
      } else {
      document.getElementById("s11").src = "img/star3.png";
      document.getElementById("s12").src = "img/star3.png";
      document.getElementById("s13").src = "img/star3.png";
      document.getElementById("s14").src = "img/star0.png";
      document.getElementById("s15").src = "img/star0.png";
      document.getElementById("s16").src = "img/star0.png";
      document.getElementById("s17").src = "img/star0.png";
      document.getElementById("s18").src = "img/star0.png";
      document.getElementById("s19").src = "img/star0.png";
      document.getElementById("s20").src = "img/star0.png";
      avaliacao = 13;
     }
  }
  
  //ESTRELA 2
  if (estrela2 == 12){ 
      if (s15 == url + "img/star0.png") {
      } else {
      document.getElementById("s11").src = "img/star3.png";
      document.getElementById("s12").src = "img/star3.png";
      document.getElementById("s13").src = "img/star0.png";
      document.getElementById("s14").src = "img/star0.png";
      document.getElementById("s15").src = "img/star0.png";
      document.getElementById("s16").src = "img/star0.png";
      document.getElementById("s17").src = "img/star0.png";
      document.getElementById("s18").src = "img/star0.png";
      document.getElementById("s19").src = "img/star0.png";
      document.getElementById("s20").src = "img/star0.png";
      avaliacao = 12;
     }
  }
   
  //ESTRELA 1
  if (estrela2 == 11){ 
      if (s15 == url + "img/star0.png") {
      } else {
      document.getElementById("s11").src = "img/star3.png";
      document.getElementById("s12").src = "img/star0.png";
      document.getElementById("s13").src = "img/star0.png";
      document.getElementById("s14").src = "img/star0.png";
      document.getElementById("s15").src = "img/star0.png";
      document.getElementById("s16").src = "img/star0.png";
      document.getElementById("s17").src = "img/star0.png";
      document.getElementById("s18").src = "img/star0.png";
      document.getElementById("s19").src = "img/star0.png";
      document.getElementById("s20").src = "img/star0.png";
      avaliacao = 11;
     }
  }
   document.getElementById('rating').innerHTML = avaliacao;
   
  }

//Funções de criação de legenda da nota Grau de Satis Geral ao clicar na estrela
function Legenda11() {
   document.getElementById("legenda2").innerHTML = "1 - Muito insatisfeito";
}
function Legenda12() {
   document.getElementById("legenda2").innerHTML = "2 - Muito insatisfeito";
}
function Legenda13() {
   document.getElementById("legenda2").innerHTML = "3 - Insatisfeito";
}
function Legenda14() {
   document.getElementById("legenda2").innerHTML = "4 - Insatisfeito";
}
function Legenda15() {
   document.getElementById("legenda2").innerHTML = "5 - Pouco Satisfeito";
}
function Legenda16() {
   document.getElementById("legenda2").innerHTML = "6 - Pouco Satisfeito";
}
function Legenda17() {
   document.getElementById("legenda2").innerHTML = "7 - Satisfeito";
}
function Legenda18() {
   document.getElementById("legenda2").innerHTML = "8 - Satisfeito";
}
function Legenda19() {
   document.getElementById("legenda2").innerHTML = "9 - Muito Satisfeito";
}
function Legenda20() {
   document.getElementById("legenda2").innerHTML = "10 - Muito Satisfeito";
}
