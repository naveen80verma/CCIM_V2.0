// JavaScript Document

<!--CALC
function plus(a, b, c, d, e) {
     return (a + b + c + d + e);
 }
 
function plus6(a, b, c, d, e, f) {
     return (a + b + c + d + e + f);
 }

function plus4(a, b, c, d) {
     return (a + b + c + d);
 }
 
//category 1
 function calc() {
     var aa = parseFloat( document.getElementById("oper1a").value );
     var ab = parseFloat( document.getElementById("oper1b").value );
	 var ac = parseFloat( document.getElementById("oper1c").value );
     var ad = parseFloat( document.getElementById("oper1d").value );

w = plus4(aa, ab, ac, ad); 

	if(!w){
		w = 0;
	}

     document.getElementById("resul1").value = w;
//****	 
//****	
     var ba = parseFloat( document.getElementById("oper2a").value );
     var bb = parseFloat( document.getElementById("oper2b").value );
	 var bc = parseFloat( document.getElementById("oper2c").value );
     var bd = parseFloat( document.getElementById("oper2d").value );

x = plus4(ba, bb, bc, bd); 

	if(!x){
		x = 0;
	}

     document.getElementById("resul2").value = x;
//****	 
//****	
	 var ca = parseFloat( document.getElementById("oper3a").value );
     var cb = parseFloat( document.getElementById("oper3b").value );
	 var cc = parseFloat( document.getElementById("oper3c").value );
     var cd = parseFloat( document.getElementById("oper3d").value );


y = plus4(ca, cb, cc, cd); 

	if(!y){
		y = 0;
	}

     document.getElementById("resul3").value = y;
 }
 
 //category 2
 function calc2() {
     var aa1 = parseFloat( document.getElementById("1oper1a").value );
     var ab1 = parseFloat( document.getElementById("1oper1b").value );
	 var ac1 = parseFloat( document.getElementById("1oper1c").value );
     var ad1 = parseFloat( document.getElementById("1oper1d").value );
	

w1 = plus4(aa1, ab1, ac1, ad1); 

	if(!w1){
		w1 = 0;
	}

     document.getElementById("1resul1").value = w1;
//****	 
//****	
     var ba1 = parseFloat( document.getElementById("1oper2a").value );
     var bb1 = parseFloat( document.getElementById("1oper2b").value );
	 var bc1 = parseFloat( document.getElementById("1oper2c").value );
     var bd1 = parseFloat( document.getElementById("1oper2d").value );
	

x1 = plus4(ba1, bb1, bc1, bd1); 

	if(!x1){
		x1 = 0;
	}

     document.getElementById("1resul2").value = x1;
//****	 
//****	
	 var ca1 = parseFloat( document.getElementById("1oper3a").value );
     var cb1 = parseFloat( document.getElementById("1oper3b").value );
	 var cc1 = parseFloat( document.getElementById("1oper3c").value );
     var cd1 = parseFloat( document.getElementById("1oper3d").value );
	

y1 = plus4(ca1, cb1, cc1, cd1); 

	if(!y1){
		y1 = 0;
	}

     document.getElementById("1resul3").value = y1;
 }
 
 //category 3
 function calc3() {
     var aa2 = parseFloat( document.getElementById("2oper1a").value );
     var ab2 = parseFloat( document.getElementById("2oper1b").value );
	 var ac2 = parseFloat( document.getElementById("2oper1c").value );
     var ad2 = parseFloat( document.getElementById("2oper1d").value );


w2 = plus4(aa2, ab2, ac2, ad2); 

	if(!w2){
		w2 = 0;
	}

     document.getElementById("2resul1").value = w2;
//****	 
//****	
     var ba2 = parseFloat( document.getElementById("2oper2a").value );
     var bb2 = parseFloat( document.getElementById("2oper2b").value );
	 var bc2 = parseFloat( document.getElementById("2oper2c").value );
     var bd2 = parseFloat( document.getElementById("2oper2d").value );


x2 = plus4(ba2, bb2, bc2, bd2); 

	if(!x2){
		x2 = 0;
	}

     document.getElementById("2resul2").value = x2;
//****	 
//****	
	 var ca2 = parseFloat( document.getElementById("2oper3a").value );
     var cb2 = parseFloat( document.getElementById("2oper3b").value );
	 var cc2 = parseFloat( document.getElementById("2oper3c").value );
     var cd2 = parseFloat( document.getElementById("2oper3d").value );


y2 = plus4(ca2, cb2, cc2, cd2); 

	if(!y2){
		y2 = 0;
	}

     document.getElementById("2resul3").value = y2;
 }
 
  //category 4
 function calc4() {
     var aa3 = parseFloat( document.getElementById("3oper1a").value );
     var ab3 = parseFloat( document.getElementById("3oper1b").value );
	 var ac3 = parseFloat( document.getElementById("3oper1c").value );
     var ad3 = parseFloat( document.getElementById("3oper1d").value );
	

w3 = plus4(aa3, ab3, ac3, ad3);

	if(!w3){
		w3 = 0;
	} 

     document.getElementById("3resul1").value = w3;
//****	 
//****	
     var ba3 = parseFloat( document.getElementById("3oper2a").value );
     var bb3 = parseFloat( document.getElementById("3oper2b").value );
	 var bc3 = parseFloat( document.getElementById("3oper2c").value );
     var bd3 = parseFloat( document.getElementById("3oper2d").value );
	

x3 = plus4(ba3, bb3, bc3, bd3); 

	if(!x3){
		x3 = 0;
	}

     document.getElementById("3resul2").value = x3;
//****	 
//****	
	 var ca3 = parseFloat( document.getElementById("3oper3a").value );
     var cb3 = parseFloat( document.getElementById("3oper3b").value );
	 var cc3 = parseFloat( document.getElementById("3oper3c").value );
     var cd3 = parseFloat( document.getElementById("3oper3d").value );
	

y3 = plus4(ca3, cb3, cc3, cd3);

	if(!y3){
		y3 = 0;
	} 

     document.getElementById("3resul3").value = y3;
 }
 
  //category 5
 function calc5() {
     var aa4 = parseFloat( document.getElementById("4oper1a").value );
     var ab4 = parseFloat( document.getElementById("4oper1b").value );
	 var ac4 = parseFloat( document.getElementById("4oper1c").value );
     var ad4 = parseFloat( document.getElementById("4oper1d").value );

w4 = plus4(aa4, ab4, ac4, ad4);

	if(!w4){
		w4 = 0;
	} 

     document.getElementById("4resul1").value = w4;
//****	 
//****	
     var ba4 = parseFloat( document.getElementById("4oper2a").value );
     var bb4 = parseFloat( document.getElementById("4oper2b").value );
	 var bc4 = parseFloat( document.getElementById("4oper2c").value );
     var bd4 = parseFloat( document.getElementById("4oper2d").value );

x4 = plus4(ba4, bb4, bc4, bd4);

	if(!x4){
		x4 = 0;
	} 

     document.getElementById("4resul2").value = x4;
//****	 
//****	
	 var ca4 = parseFloat( document.getElementById("4oper3a").value );
     var cb4 = parseFloat( document.getElementById("4oper3b").value );
	 var cc4 = parseFloat( document.getElementById("4oper3c").value );
     var cd4 = parseFloat( document.getElementById("4oper3d").value );

y4 = plus4(ca4, cb4, cc4, cd4); 

	if(!y4){
		y4 = 0;
	}

     document.getElementById("4resul3").value = y4;
 }
 
   //category 6
 function calc6() {
     var aa5 = parseFloat( document.getElementById("5oper1a").value );
     var ab5 = parseFloat( document.getElementById("5oper1b").value );
	 var ac5 = parseFloat( document.getElementById("5oper1c").value );
     var ad5 = parseFloat( document.getElementById("5oper1d").value );
	 var ae5 = parseFloat( document.getElementById("5oper1e").value );
	 var af5 = parseFloat( document.getElementById("5oper1f").value );

w5 = plus6(aa5, ab5, ac5, ad5, ae5, af5);

	if(!w5){
		w5 = 0;
	} 

     document.getElementById("5resul1").value = w5;
//****	 
//****	
     var ba5 = parseFloat( document.getElementById("5oper2a").value );
     var bb5 = parseFloat( document.getElementById("5oper2b").value );
	 var bc5 = parseFloat( document.getElementById("5oper2c").value );
     var bd5 = parseFloat( document.getElementById("5oper2d").value );
	 var be5 = parseFloat( document.getElementById("5oper2e").value );
	 var bf5 = parseFloat( document.getElementById("5oper2f").value );

x5 = plus6(ba5, bb5, bc5, bd5, be5, bf5);

	if(!x5){
		x5 = 0;
	} 

     document.getElementById("5resul2").value = x5;
//****	 
//****	
	 var ca5 = parseFloat( document.getElementById("5oper3a").value );
     var cb5 = parseFloat( document.getElementById("5oper3b").value );
	 var cc5 = parseFloat( document.getElementById("5oper3c").value );
     var cd5 = parseFloat( document.getElementById("5oper3d").value );
	 var ce5 = parseFloat( document.getElementById("5oper3e").value );
	 var cf5 = parseFloat( document.getElementById("5oper3f").value );

y5 = plus6(ca5, cb5, cc5, cd5, ce5, cf5); 

	if(!y5){
		y5 = 0;
	}

     document.getElementById("5resul3").value = y5;
 }
 
   //category 7
 function calc7() {
     var aa6 = parseFloat( document.getElementById("6oper1a").value );
     var ab6 = parseFloat( document.getElementById("6oper1b").value );
	 var ac6 = parseFloat( document.getElementById("6oper1c").value );
     var ad6 = parseFloat( document.getElementById("6oper1d").value );
	 var ae6 = parseFloat( document.getElementById("6oper1e").value );

w6 = plus(aa6, ab6, ac6, ad6, ae6);

	if(!w6){
		w6 = 0;
	} 

     document.getElementById("6resul1").value = w6;
//****	 
//****	
     var ba6 = parseFloat( document.getElementById("6oper2a").value );
     var bb6 = parseFloat( document.getElementById("6oper2b").value );
	 var bc6 = parseFloat( document.getElementById("6oper2c").value );
     var bd6 = parseFloat( document.getElementById("6oper2d").value );
	 var be6 = parseFloat( document.getElementById("6oper2e").value );

x6 = plus(ba6, bb6, bc6, bd6, be6);

	if(!x6){
		x6 = 0;
	} 

     document.getElementById("6resul2").value = x6;
//****	 
//****	
	 var ca6 = parseFloat( document.getElementById("6oper3a").value );
     var cb6 = parseFloat( document.getElementById("6oper3b").value );
	 var cc6 = parseFloat( document.getElementById("6oper3c").value );
     var cd6 = parseFloat( document.getElementById("6oper3d").value );
	 var ce6 = parseFloat( document.getElementById("6oper3e").value );

y6 = plus(ca6, cb6, cc6, cd6, ce6);

	if(!y6){
		y6 = 0;
	} 

     document.getElementById("6resul3").value = y6;
 }
 
 //category 8 is solo
 
 //category 9
 function calc9() {
     var aa8 = parseFloat( document.getElementById("8oper1a").value );
     var ab8 = parseFloat( document.getElementById("8oper1b").value );
	 var ac8 = parseFloat( document.getElementById("8oper1c").value );
     var ad8 = parseFloat( document.getElementById("8oper1d").value );
	 

w8 = plus4(aa8, ab8, ac8, ad8); 

	if(!w8){
		w8 = 0;
	}

     document.getElementById("8resul1").value = w8;
//****	 
//****	
     var ba8 = parseFloat( document.getElementById("8oper2a").value );
     var bb8 = parseFloat( document.getElementById("8oper2b").value );
	 var bc8 = parseFloat( document.getElementById("8oper2c").value );
     var bd8 = parseFloat( document.getElementById("8oper2d").value );
	

x8 = plus4(ba8, bb8, bc8, bd8); 

	if(!x8){
		x8 = 0;
	}

     document.getElementById("8resul2").value = x8;
//****	 
//****	
	 var ca8 = parseFloat( document.getElementById("8oper3a").value );
     var cb8 = parseFloat( document.getElementById("8oper3b").value );
	 var cc8 = parseFloat( document.getElementById("8oper3c").value );
     var cd8 = parseFloat( document.getElementById("8oper3d").value );
	

y8 = plus4(ca8, cb8, cc8, cd8);

	if(!y8){
		y8 = 0;
	} 

     document.getElementById("8resul3").value = y8;
 }
 
 //category 10
 function calc10() {
     var aa9 = parseFloat( document.getElementById("9oper1a").value );
     var ab9 = parseFloat( document.getElementById("9oper1b").value );
	 var ac9 = parseFloat( document.getElementById("9oper1c").value );
     var ad9 = parseFloat( document.getElementById("9oper1d").value );
	 var ae9 = parseFloat( document.getElementById("9oper1e").value );

w9 = plus(aa9, ab9, ac9, ad9, ae9);

	if(!w9){
		w9 = 0;
	} 

     document.getElementById("9resul1").value = w9;
//****	 
//****	
     var ba9 = parseFloat( document.getElementById("9oper2a").value );
     var bb9 = parseFloat( document.getElementById("9oper2b").value );
	 var bc9 = parseFloat( document.getElementById("9oper2c").value );
     var bd9 = parseFloat( document.getElementById("9oper2d").value );
	 var be9 = parseFloat( document.getElementById("9oper2e").value );

x9 = plus(ba9, bb9, bc9, bd9, be9);

	if(!x9){
		x9 = 0;
	} 

     document.getElementById("9resul2").value = x9;
//****	 
//****	
	 var ca9 = parseFloat( document.getElementById("9oper3a").value );
     var cb9 = parseFloat( document.getElementById("9oper3b").value );
	 var cc9 = parseFloat( document.getElementById("9oper3c").value );
     var cd9 = parseFloat( document.getElementById("9oper3d").value );
	 var ce9 = parseFloat( document.getElementById("9oper3e").value );

y9 = plus(ca9, cb9, cc9, cd9, ce9); 

	if(!y9){
		y9 = 0;
	}

     document.getElementById("9resul3").value = y9;
 }
 
 //category 11
 function calc11() {
     var aa10 = parseFloat( document.getElementById("10oper1a").value );
     var ab10 = parseFloat( document.getElementById("10oper1b").value );
	 var ac10 = parseFloat( document.getElementById("10oper1c").value );
     var ad10 = parseFloat( document.getElementById("10oper1d").value );
	 var ae10 = parseFloat( document.getElementById("10oper1e").value );

w10 = plus(aa10, ab10, ac10, ad10, ae10);

	if(!w10){
		w10 = 0;
	} 

     document.getElementById("10resul1").value = w10;
//****	 
//****	
     var ba10 = parseFloat( document.getElementById("10oper2a").value );
     var bb10 = parseFloat( document.getElementById("10oper2b").value );
	 var bc10 = parseFloat( document.getElementById("10oper2c").value );
     var bd10 = parseFloat( document.getElementById("10oper2d").value );
	 var be10 = parseFloat( document.getElementById("10oper2e").value );

x10 = plus(ba10, bb10, bc10, bd10, be10); 

	if(!x10){
		x10 = 0;
	}

     document.getElementById("10resul2").value = x10;
//****	 
//****	
	 var ca10 = parseFloat( document.getElementById("10oper3a").value );
     var cb10 = parseFloat( document.getElementById("10oper3b").value );
	 var cc10 = parseFloat( document.getElementById("10oper3c").value );
     var cd10 = parseFloat( document.getElementById("10oper3d").value );
	 var ce10 = parseFloat( document.getElementById("10oper3e").value );

y10 = plus(ca10, cb10, cc10, cd10, ce10); 

	if(!y10){
		y10 = 0;
	}

     document.getElementById("10resul3").value = y10;
 }
 
 function checkVal50(x,y){
	if(x > 50){
		alert("Please enter an amount no more than 50");
		document.getElementById(y).focus();
		document.getElementById(y).select();
	}
	
 } 
 
 function checkVal25(x,y){
	if(x > 25){
		alert("Please enter an amount no more than 25");
		document.getElementById(y).focus();
		document.getElementById(y).select();
	}
 } 
 
 function checkVal20(x,y){
	if(x > 20){
		alert("Please enter an amount no more than 20");
		document.getElementById(y).focus();
		document.getElementById(y).select();
	}
 } 
 
 function checkVal5(x,y){
	if(x > 5){
		alert("Please enter an amount no more than 5");
		document.getElementById(y).focus();
		document.getElementById(y).select();
	}
 } 
 
 function checkVal30(x,y){
	if(x > 30){
		alert("Please enter an amount no more than 30");
		document.getElementById(y).focus();
		document.getElementById(y).select();
	}
 } 
 
 function checkVal35(x,y){
	if(x > 35){
		alert("Please enter an amount no more than 35");
		document.getElementById(y).focus();
		document.getElementById(y).select();
	}
 } 
 
 function checkVal10(x,y){
	if(x > 10){
		alert("Please enter an amount no more than 10");
		document.getElementById(y).focus();
		document.getElementById(y).select();
	}
 } 
 
 function checkVal40(x,y){
	if(x > 40){
		alert("Please enter an amount no more than 40");
		document.getElementById(y).focus();
		document.getElementById(y).select();
	}
 } 
 

<!--CALC 