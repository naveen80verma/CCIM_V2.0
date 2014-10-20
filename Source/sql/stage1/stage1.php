 <!DOCTYPE HTML>
<html>

<link type="text/css" rel="stylesheet" href="../folderCSS/stage1.css" />
<script type="text/javascript" src="jquery-2.0.1.js"></script>
  
<head>
<script type="text/javascript">

<?php
session_start();
$username = $_GET['username'];
$choicePass['choicePass']="choicePass";
?>

$(document).ready(function(){
	document.getElementById('description').innerHTML = "<h2>Category 1 Specifications</h2><br />Description of the category which will outline the requirements and specific areas that the example piece addressed in a manner superior to the other submissions.";
	function preload(arrayOfImages){
		jQuery(arrayOfImages).each(function(){
			jQuery('<img/>')[0].src = this;
		});
	}

for(i=1; i< 200; i++){
	preload([
		'Images/letter'+i+'_off.gif',
		'Images/letter'+i+'_on.gif'
]);
}

	var idName;		//for tracking buttons in storeChoice array
	var butName;	//to populate storeChoice array one by one
	var storeChoice = ['','',''];//to track the three selections
	var storeChoice2 = ['','',''];
	var storeChoice3 = ['','',''];
	var storeChoice4 = ['','',''];
	var storeChoice5 = ['','',''];
	var storeChoice6 = ['','',''];
	var storeChoice7 = ['','',''];
	var storeChoice8 = ['','',''];
	var storeChoice9 = ['','',''];
	var storeChoice10 = ['','',''];
	var choicePass;

function popStoreChoice1()  //there are multiples of this functions to accomodate the multiple categories
{
	
	if((butName != storeChoice[0])&&(butName != storeChoice[1])&&(butName != storeChoice[2])){
	storeChoice[2] = storeChoice[1];
	storeChoice[1] = storeChoice[0];
	storeChoice[0] = butName;
	}
	
	for(i=1; i<21; i++){

		idName = 'toggle';
		
		idName = idName + i;
		
		//alert(idName);
		if((idName == storeChoice[0])||(idName == storeChoice[1])||(idName == storeChoice[2])){
			//alert("In Array");
			$("#toggle"+i).children('img').attr('src', "../Images/letter"+i+"_on.gif");
		}
		if((idName != storeChoice[0])&&(idName != storeChoice[1])&&(idName != storeChoice[2])){
		$("#toggle"+i).children('img').attr('src', "../Images/letter"+i+"_off.gif");
		}
	var textFieldCat1 = document.getElementById("textFieldCat1");
	
		textFieldCat1a.value = storeChoice[0];
		textFieldCat1b.value = storeChoice[1];
		textFieldCat1c.value = storeChoice[2];
		
	}	//alert(storeChoice[0]+storeChoice[1]+storeChoice[2]);
}

function popStoreChoice2()  //there are multiples of this functions to accomodate the multiple categories
{
	
	if((butName != storeChoice2[0])&&(butName != storeChoice2[1])&&(butName != storeChoice2[2])){
	storeChoice2[2] = storeChoice2[1];
	storeChoice2[1] = storeChoice2[0];
	storeChoice2[0] = butName;
	}
	
	for(i=21; i<41; i++){

		idName = 'toggle';
		
		idName = idName + i;
		
		//alert(idName2);
		if((idName == storeChoice2[0])||(idName == storeChoice2[1])||(idName == storeChoice2[2])){
			//alert(storeChoice[0]);
			$("#toggle"+i).children('img').attr('src', "../Images/letter"+i+"_on.gif");
		}
		if((idName != storeChoice2[0])&&(idName != storeChoice2[1])&&(idName != storeChoice2[2])){
		$("#toggle"+i).children('img').attr('src', "../Images/letter"+i+"_off.gif");
		}
		
	var textFieldCat2 = document.getElementById("textFieldCat2");
	textFieldCat2a.value = storeChoice2[0];
	textFieldCat2b.value = storeChoice2[1];
	textFieldCat2c.value = storeChoice2[2];
	}	//alert(storeChoice[0]+storeChoice[1]+storeChoice[2]);
}

function popStoreChoice3()  //there are multiples of this functions to accomodate the multiple categories
{
	if((butName != storeChoice3[0])&&(butName != storeChoice3[1])&&(butName != storeChoice3[2])){
	storeChoice3[2] = storeChoice3[1];
	storeChoice3[1] = storeChoice3[0];
	storeChoice3[0] = butName;
	}
	
	for(i=41; i<61; i++){
		
		idName = 'toggle';
		
		idName = idName + i;
		
		//alert(idName);
		if((idName == storeChoice3[0])||(idName == storeChoice3[1])||(idName == storeChoice3[2])){
			//alert("In Array");
			$("#toggle"+i).children('img').attr('src', "../Images/letter"+i+"_on.gif");
		}
		if((idName != storeChoice3[0])&&(idName != storeChoice3[1])&&(idName != storeChoice3[2])){
		$("#toggle"+i).children('img').attr('src', "../Images/letter"+i+"_off.gif");
		}
	var textFieldCat3 = document.getElementById("textFieldCat3");
	textFieldCat3a.value = storeChoice3[0];
	textFieldCat3b.value = storeChoice3[1];
	textFieldCat3c.value = storeChoice3[2];
	}	//alert(storeChoice[0]+storeChoice[1]+storeChoice[2]);
}

function popStoreChoice4()  //there are multiples of this functions to accomodate the multiple categories
{
	if((butName != storeChoice4[0])&&(butName != storeChoice4[1])&&(butName != storeChoice4[2])){
	storeChoice4[2] = storeChoice4[1];
	storeChoice4[1] = storeChoice4[0];
	storeChoice4[0] = butName;
	}
	
	for(i=61; i<81; i++){

		idName = 'toggle';
		
		idName = idName + i;
		
		//alert(idName);
		if((idName == storeChoice4[0])||(idName == storeChoice4[1])||(idName == storeChoice4[2])){
			//alert("In Array");
			$("#toggle"+i).children('img').attr('src', "Images/letter"+i+"_on.gif");
		}
		if((idName != storeChoice4[0])&&(idName != storeChoice4[1])&&(idName != storeChoice4[2])){
		$("#toggle"+i).children('img').attr('src', "Images/letter"+i+"_off.gif");
		}
	var textFieldCat4 = document.getElementById("textFieldCat4");
	textFieldCat4a.value = storeChoice4[0];
	textFieldCat4b.value = storeChoice4[1];
	textFieldCat4c.value = storeChoice4[2];
	
	}	//alert(storeChoice[0]+storeChoice[1]+storeChoice[2]);
}

function popStoreChoice5()  //there are multiples of this functions to accomodate the multiple categories
{
	
	if((butName != storeChoice5[0])&&(butName != storeChoice5[1])&&(butName != storeChoice5[2])){
	storeChoice5[2] = storeChoice5[1];
	storeChoice5[1] = storeChoice5[0];
	storeChoice5[0] = butName;
	}
	
	for(i=81; i<101; i++){

		idName = 'toggle';
		
		idName = idName + i;
		
		//alert(idName2);
		if((idName == storeChoice5[0])||(idName == storeChoice5[1])||(idName == storeChoice5[2])){
			//alert(storeChoice[0]);
			$("#toggle"+i).children('img').attr('src', "Images/letter"+i+"_on.gif");
		}
		if((idName != storeChoice5[0])&&(idName != storeChoice5[1])&&(idName != storeChoice5[2])){
		$("#toggle"+i).children('img').attr('src', "Images/letter"+i+"_off.gif");
		}
		
	var textFieldCat5 = document.getElementById("textFieldCat5");
	textFieldCat5a.value = storeChoice5[0];
	textFieldCat5b.value = storeChoice5[1];
	textFieldCat5c.value = storeChoice5[2];
	}	//alert(storeChoice[0]+storeChoice[1]+storeChoice[2]);
}

function popStoreChoice6()  //there are multiples of this functions to accomodate the multiple categories
{
	
	if((butName != storeChoice6[0])&&(butName != storeChoice6[1])&&(butName != storeChoice6[2])){
	storeChoice6[2] = storeChoice6[1];
	storeChoice6[1] = storeChoice6[0];
	storeChoice6[0] = butName;
	}
	
	for(i=101; i<121; i++){
		
		idName = 'toggle';
		
		idName = idName + i;
		
		//alert(idName);
		if((idName == storeChoice6[0])||(idName == storeChoice6[1])||(idName == storeChoice6[2])){
			//alert("In Array");
			$("#toggle"+i).children('img').attr('src', "Images/letter"+i+"_on.gif");
		}
		if((idName != storeChoice6[0])&&(idName != storeChoice6[1])&&(idName != storeChoice6[2])){
		$("#toggle"+i).children('img').attr('src', "Images/letter"+i+"_off.gif");
		}
	var textFieldCat6 = document.getElementById("textFieldCat6");
	textFieldCat6a.value = storeChoice6[0];
	textFieldCat6b.value = storeChoice6[1];
	textFieldCat6c.value = storeChoice6[2];
	}	//alert(storeChoice[0]+storeChoice[1]+storeChoice[2]);
}

function popStoreChoice7()  //there are multiples of this functions to accomodate the multiple categories
{
	if((butName != storeChoice7[0])&&(butName != storeChoice7[1])&&(butName != storeChoice7[2])){
	storeChoice7[2] = storeChoice7[1];
	storeChoice7[1] = storeChoice7[0];
	storeChoice7[0] = butName;
	}
	
	for(i=121; i<141; i++){

		idName = 'toggle';
		
		idName = idName + i;
		
		//alert(idName);
		if((idName == storeChoice7[0])||(idName == storeChoice7[1])||(idName == storeChoice7[2])){
			//alert("In Array");
			$("#toggle"+i).children('img').attr('src', "Images/letter"+i+"_on.gif");
		}
		if((idName != storeChoice7[0])&&(idName != storeChoice7[1])&&(idName != storeChoice7[2])){
		$("#toggle"+i).children('img').attr('src', "Images/letter"+i+"_off.gif");
		}
	var textFieldCat7 = document.getElementById("textFieldCat7");
	textFieldCat7a.value = storeChoice7[0];
	textFieldCat7b.value = storeChoice7[1];
	textFieldCat7c.value = storeChoice7[2];
	
	}	//alert(storeChoice[0]+storeChoice[1]+storeChoice[2]);
}

function popStoreChoice8()  //there are multiples of this functions to accomodate the multiple categories
{
	
	if((butName != storeChoice8[0])&&(butName != storeChoice8[1])&&(butName != storeChoice8[2])){
	storeChoice8[2] = storeChoice8[1];
	storeChoice8[1] = storeChoice8[0];
	storeChoice8[0] = butName;
	}
	
	for(i=141; i<161; i++){

		idName = 'toggle';
		
		idName = idName + i;
		
		//alert(idName2);
		if((idName == storeChoice8[0])||(idName == storeChoice8[1])||(idName == storeChoice8[2])){
			//alert(storeChoice[0]);
			$("#toggle"+i).children('img').attr('src', "Images/letter"+i+"_on.gif");
		}
		if((idName != storeChoice8[0])&&(idName != storeChoice8[1])&&(idName != storeChoice8[2])){
		$("#toggle"+i).children('img').attr('src', "Images/letter"+i+"_off.gif");
		}
		
	var textFieldCat8 = document.getElementById("textFieldCat8");
	textFieldCat8a.value = storeChoice8[0];
	textFieldCat8b.value = storeChoice8[1];
	textFieldCat8c.value = storeChoice8[2];
	}	//alert(storeChoice[0]+storeChoice[1]+storeChoice[2]);
}

function popStoreChoice9()  //there are multiples of this functions to accomodate the multiple categories
{
	if((butName != storeChoice9[0])&&(butName != storeChoice9[1])&&(butName != storeChoice9[2])){
	storeChoice9[2] = storeChoice9[1];
	storeChoice9[1] = storeChoice9[0];
	storeChoice9[0] = butName;
	}
	
	for(i=161; i<181; i++){
		
		idName = 'toggle';
		
		idName = idName + i;
		
		//alert(idName);
		if((idName == storeChoice9[0])||(idName == storeChoice9[1])||(idName == storeChoice9[2])){
			//alert("In Array");
			$("#toggle"+i).children('img').attr('src', "Images/letter"+i+"_on.gif");
		}
		if((idName != storeChoice9[0])&&(idName != storeChoice9[1])&&(idName != storeChoice9[2])){
		$("#toggle"+i).children('img').attr('src', "Images/letter"+i+"_off.gif");
		}
	var textFieldCat9 = document.getElementById("textFieldCat9");
	textFieldCat9a.value = storeChoice9[0];
	textFieldCat9b.value = storeChoice9[1];
	textFieldCat9c.value = storeChoice9[2];
	}	//alert(storeChoice[0]+storeChoice[1]+storeChoice[2]);
}

function popStoreChoice10()  //there are multiples of this functions to accomodate the multiple categories
{
	if((butName != storeChoice10[0])&&(butName != storeChoice10[1])&&(butName != storeChoice10[2])){
	storeChoice10[2] = storeChoice10[1];
	storeChoice10[1] = storeChoice10[0];
	storeChoice10[0] = butName;
	}
	
	for(i=181; i<201; i++){
		
		idName = 'toggle';
		
		idName = idName + i;
		
		//alert(idName);
		if((idName == storeChoice10[0])||(idName == storeChoice10[1])||(idName == storeChoice10[2])){
			//alert("In Array");
			$("#toggle"+i).children('img').attr('src', "Images/letter"+i+"_on.gif");
		}
		if((idName != storeChoice10[0])&&(idName != storeChoice10[1])&&(idName != storeChoice10[2])){
		$("#toggle"+i).children('img').attr('src', "Images/letter"+i+"_off.gif");
		}
	var textFieldCat10 = document.getElementById("textFieldCat10");
	textFieldCat10a.value = storeChoice10[0];
	textFieldCat10b.value = storeChoice10[1];
	textFieldCat10c.value = storeChoice10[2];
	}	//alert(storeChoice[0]+storeChoice[1]+storeChoice[2]);
}
//***
//***END functions for storeChoice
//***


//***
//HIDE CATEGORIES
//***

$('#categoryTwo').hide();
$('#categoryThree').hide();
$('#categoryFour').hide();
$('#categoryFive').hide();
$('#categorySix').hide();
$('#categorySeven').hide();
$('#categoryEight').hide();
$('#categoryNine').hide();
$('#categoryTen').hide();

$('#buttonSave').prop("disabled",true);
$("#next2").attr("disabled",true);
$("#next3").attr("disabled",true);
$("#next4").attr("disabled",true);
$("#next5").attr("disabled",true);
$("#next6").attr("disabled",true);
$("#next7").attr("disabled",true);
$("#next8").attr("disabled",true);
$("#next9").attr("disabled",true);
$("#next10").attr("disabled",true);

$(".category1Button").click(function(){
		butName = $(this).attr('name'); //for storeChoise array
		popStoreChoice1();
});

$(".category2Button").click(function(){
		butName = $(this).attr('name');
		popStoreChoice2();
});

$(".category3Button").click(function(){
		butName = $(this).attr('name');
		popStoreChoice3();
});

$(".category4Button").click(function(){
		butName = $(this).attr('name'); //for storeChoise array
		popStoreChoice4();
});

$(".category5Button").click(function(){
		butName = $(this).attr('name');
		popStoreChoice5();
});

$(".category6Button").click(function(){
		butName = $(this).attr('name');
		popStoreChoice6();
});

$(".category7Button").click(function(){
		butName = $(this).attr('name'); //for storeChoise array
		popStoreChoice7();
});

$(".category8Button").click(function(){
		butName = $(this).attr('name');
		popStoreChoice8();
});

$(".category9Button").click(function(){
		butName = $(this).attr('name');
		popStoreChoice9();
});

$(".category10Button").click(function(){
		butName = $(this).attr('name');
		popStoreChoice10();
});
	
//***
//end toggle for selection
//***
  
  //****
  //***button navigation***
  //****
  //forward
	$('#next2').on('click',function(){
		$('#categoryTwo').show();
		document.getElementById('description').innerHTML = "<h2>Category 2 Specifications</h2><br />Description of the category which will outline the requirements and specific areas that the example piece addressed in a manner superior to the other submissions.";
		$('#categoryOne').hide();	
	});

	$('#next3').on('click',function(){
		$('#categoryThree').show();
		document.getElementById('description').innerHTML = "<h2>Category 3 Specifications</h2><br />Description of the category which will outline the requirements and specific areas that the example piece addressed in a manner superior to the other submissions.";
		$('#categoryTwo').hide();	
	});
	
	$('#next4').on('click',function(){
		$('#categoryFour').show();
		document.getElementById('description').innerHTML = "<h2>Category 4 Specifications</h2><br />Description of the category which will outline the requirements and specific areas that the example piece addressed in a manner superior to the other submissions.";
		$('#categoryThree').hide();	
	});
	
	$('#next5').on('click',function(){
		$('#categoryFive').show();
		document.getElementById('description').innerHTML = "<h2>Category 5 Specifications</h2><br />Description of the category which will outline the requirements and specific areas that the example piece addressed in a manner superior to the other submissions.";
		$('#categoryFour').hide();	
	});
	
	$('#next6').on('click',function(){
		$('#categorySix').show();
		document.getElementById('description').innerHTML = "<h2>Category 6 Specifications</h2><br />Description of the category which will outline the requirements and specific areas that the example piece addressed in a manner superior to the other submissions.";
		$('#categoryFive').hide();	
	});
	
	$('#next7').on('click',function(){
		$('#categorySeven').show();
		document.getElementById('description').innerHTML = "<h2>Category 7 Specifications</h2><br />Description of the category which will outline the requirements and specific areas that the example piece addressed in a manner superior to the other submissions.";
		$('#categorySix').hide();	
	});
	
	$('#next8').on('click',function(){
		$('#categoryEight').show();
		document.getElementById('description').innerHTML = "<h2>Category 8 Specifications</h2><br />Description of the category which will outline the requirements and specific areas that the example piece addressed in a manner superior to the other submissions.";
		$('#categorySeven').hide();	
	});
	
	$('#next9').on('click',function(){
		$('#categoryNine').show();
		document.getElementById('description').innerHTML = "<h2>Category 9 Specifications</h2><br />Description of the category which will outline the requirements and specific areas that the example piece addressed in a manner superior to the other submissions.";
		$('#categoryEight').hide();	
	});
	
	$('#next10').on('click',function(){
		$('#categoryTen').show();
		document.getElementById('description').innerHTML = "<h2>Category 10 Specifications</h2><br />Description of the category which will outline the requirements and specific areas that the example piece addressed in a manner superior to the other submissions.";
		$('#categoryNine').hide();
		$('#buttonSave').prop("disabled",false);
		$('#buttonSave').css("background-image","url(Images/buttons/submit.png)");
		$('#sideAlert').css("background-image","url(Images/alertImg.png)");
		
	});

	//backward
	$('#previous9').on('click',function(){
		$('#categoryNine').show();
		document.getElementById('description').innerHTML = "<h2>Category 9 Specifications</h2><br />Description of the category which will outline the requirements and specific areas that the example piece addressed in a manner superior to the other submissions.";
		$('#categoryTen').hide();
		$('#buttonSave').prop("disabled",true);
		$('#buttonSave').css("background-image","url(Images/buttons/submitOff.png)");
		$('#sideAlert').css("background-image","url(Images/alertIm.png)");
			
	});
	
	$('#previous8').on('click',function(){
		$('#categoryEight').show();
		document.getElementById('description').innerHTML = "<h2>Category 8 Specifications</h2><br />Description of the category which will outline the requirements and specific areas that the example piece addressed in a manner superior to the other submissions.";
		$('#categoryNine').hide();
			
	});
	
	$('#previous7').on('click',function(){
		$('#categorySeven').show();
		document.getElementById('description').innerHTML = "<h2>Category 7 Specifications</h2><br />Description of the category which will outline the requirements and specific areas that the example piece addressed in a manner superior to the other submissions."
		$('#categoryEight').hide();
			
	});
	
	$('#previous6').on('click',function(){
		$('#categorySix').show();
		document.getElementById('description').innerHTML = "<h2>Category 6 Specifications</h2><br />Description of the category which will outline the requirements and specific areas that the example piece addressed in a manner superior to the other submissions.";
		$('#categorySeven').hide();
			
	});
	
	$('#previous5').on('click',function(){
		$('#categoryFive').show();
		document.getElementById('description').innerHTML = "<h2>Category 5 Specifications</h2><br />Description of the category which will outline the requirements and specific areas that the example piece addressed in a manner superior to the other submissions.";
		$('#categorySix').hide();
			
	});
	
	$('#previous4').on('click',function(){
		$('#categoryFour').show();
		document.getElementById('description').innerHTML = "<h2>Category 4 Specifications</h2><br />Description of the category which will outline the requirements and specific areas that the example piece addressed in a manner superior to the other submissions.";
		$('#categoryFive').hide();
			
	});
	
	$('#previous3').on('click',function(){
		$('#categoryThree').show();
		document.getElementById('description').innerHTML = "<h2>Category 3 Specifications</h2><br />Description of the category which will outline the requirements and specific areas that the example piece addressed in a manner superior to the other submissions.";
		$('#categoryFour').hide();
			
	});
	
	$('#previous2').on('click',function(){
		$('#categoryTwo').show();
		document.getElementById('description').innerHTML = "<h2>Category 2 Specifications</h2><br />Description of the category which will outline the requirements and specific areas that the example piece addressed in a manner superior to the other submissions.";
		$('#categoryThree').hide();
				
	});
	
	$('#previous1').on('click',function(){
		$('#categoryOne').show();
		document.getElementById('description').innerHTML = "<h2>Category 1 Specifications</h2><br />Description of the category which will outline the requirements and specific areas that the example piece addressed in a manner superior to the other submissions."
		$('#categoryTwo').hide();
		
	});
	
//***
//***end button navigation***
//***

	$('#buttonSave').on('click',function(){
		for(i=0;i<voteArray.length; i++){			
		}
	});
});

</script>

</head>
<body>

<center>
<div id="categoryOne">

<h1>CATEGORY 1</h1>
<p>Please choose three from the choices below</p>

    <div id="toggle1"><a href="bookTemplate.pdf" target="_blank"><h3><u>Nominee Number 1</u></h3></a><input type="checkbox" id="textFieldCat1A" class="category1Button" name="nominee 1"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle2"><h3>Nominee Number 2</h3><input type="checkbox" id="textFieldCat1B" class="category1Button" name="nominee 2"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle3"><h3>Nominee Number 3</h3><input type="checkbox" id="textFieldCat1C" class="category1Button" name="nominee 3"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle4"><h3>Nominee Number 4</h3><input type="checkbox" id="textFieldCat1D" class="category1Button" name="nominee 4"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle5"><h3>Nominee Number 5</h3><input type="checkbox" id="textFieldCat1E" class="category1Button" name="nominee 5"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle6"><h3>Nominee Number 6</h3><input type="checkbox" id="textFieldCat1F" class="category1Button" name="nominee 6"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle7"><h3>Nominee Number 7</h3><input type="checkbox" id="textFieldCat1G" class="category1Button" name="nominee 7"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle8"><h3>Nominee Number 8</h3><input type="checkbox" id="textFieldCat1H" class="category1Button" name="nominee 8"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle9"><h3>Nominee Number 9</h3><input type="checkbox" id="textFieldCat1I" class="category1Button" name="nominee 9"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle10"><h3>Nominee Number 10</h3><input type="checkbox" id="textFieldCat1J" class="category1Button" name="nominee 10"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<!--  <div class="enPhotos">  <a href="images/testEnlarged.jpg" data-lightbox="image-1" title="Image title"><p id="picText" class="enlarge1"><u>Enlarge image one</u></p></a><a href="images/testEnlarged.jpg" data-lightbox="image-1" title="Image title"><p id="picText" class="enlarge2"><u>Enlarge image two</u></p></a><a href="images/testEnlarged.jpg" data-lightbox="image-1" title="Image title"><p id="picText" class="enlarge3"><u>Enlarge image three</u></p></a><a href="images/testEnlarged.jpg" data-lightbox="image-1" title="Image title"><p id="picText" class="enlarge4"><u>Enlarge image four</u></p></a><a href="images/testEnlarged.jpg" data-lightbox="image-1" title="Image title"><p id="picText" class="enlarge5"><u>Enlarge image five</u></p></a><a href="images/testEnlarged.jpg" data-lightbox="image-1" title="Image title"><p id="picText" class="enlarge6"><u>Enlarge image six</u></p></a><a href="images/testEnlarged.jpg" data-lightbox="image-1" title="Image title"><p id="picText" class="enlarge7"><u>Enlarge image seven</u></p></a><a href="images/testEnlarged.jpg" data-lightbox="image-1" title="Image title"><p id="picText" class="enlarge8"><u>Enlarge image eight</u></p></a><a href="images/testEnlarged.jpg" data-lightbox="image-1" title="Image title"><p id="picText" class="enlarge9"><u>Enlarge image nine</u></p></a><a href="images/testEnlarged.jpg" data-lightbox="image-1" title="Image title"><p id="picText" class="enlarge10"><u>Enlarge image ten</u></p></a></div>-->
   
    <div id="toggle11"><h3>Nominee Number 11</h3><input type="checkbox" id="textFieldCat1K" class="category1Button" name="nominee 11"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle12"><h3>Nominee Number 12</h3><input type="checkbox" id="textFieldCat1L" class="category1Button" name="nominee 12"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle13"><h3>Nominee Number 13</h3><input type="checkbox" id="textFieldCat1M" class="category1Button" name="nominee 13"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle14"><h3>Nominee Number 14</h3><input type="checkbox" id="textFieldCat1N" class="category1Button" name="nominee 14"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle15"><h3>Nominee Number 15</h3><input type="checkbox" id="textFieldCat1O" class="category1Button" name="nominee 15"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle16"><h3>Nominee Number 16</h3><input type="checkbox" id="textFieldCat1P" class="category1Button" name="nominee 16"></div>&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle17"><h3>Nominee Number 17</h3><input type="checkbox" id="textFieldCat1Q" class="category1Button" name="nominee 17"></div>&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle18"><h3>Nominee Number 18</h3><input type="checkbox" id="textFieldCat1R" class="category1Button" name="nominee 18"></div>&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle19"><h3>Nominee Number 19</h3><input type="checkbox" id="textFieldCat1S" class="category1Button" name="nominee 19"></div>&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle20"><h3>Nominee Number 20</h3><input type="checkbox" id="textFieldCat1T" class="category1Button" name="nominee 20"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
<!--    <div class="enPhotos">  <a href="images/testEnlarged.jpg" data-lightbox="image-1" title="Image title"><p id="picText" class="enlarge1"><u>Enlarge image one</u></p></a><a href="images/testEnlarged.jpg" data-lightbox="image-1" title="Image title"><p id="picText" class="enlarge2"><u>Enlarge image two</u></p></a><a href="images/testEnlarged.jpg" data-lightbox="image-1" title="Image title"><p id="picText" class="enlarge3"><u>Enlarge image three</u></p></a><a href="images/testEnlarged.jpg" data-lightbox="image-1" title="Image title"><p id="picText" class="enlarge4"><u>Enlarge image four</u></p></a><a href="images/testEnlarged.jpg" data-lightbox="image-1" title="Image title"><p id="picText" class="enlarge5"><u>Enlarge image five</u></p></a><a href="images/testEnlarged.jpg" data-lightbox="image-1" title="Image title"><p id="picText" class="enlarge6"><u>Enlarge image six</u></p></a><a href="images/testEnlarged.jpg" data-lightbox="image-1" title="Image title"><p id="picText" class="enlarge7"><u>Enlarge image seven</u></p></a><a href="images/testEnlarged.jpg" data-lightbox="image-1" title="Image title"><p id="picText" class="enlarge8"><u>Enlarge image eight</u></p></a><a href="images/testEnlarged.jpg" data-lightbox="image-1" title="Image title"><p id="picText" class="enlarge9"><u>Enlarge image nine</u></p></a><a href="images/testEnlarged.jpg" data-lightbox="image-1" title="Image title"><p id="picText" class="enlarge10"><u>Enlarge image ten</u></p></a></div>-->

<script>
$("input.category1Button:checkbox").click(function() {
    var count = $("input.category1Button[type=checkbox]:checked").length >= 3;     
    $("input.category1Button:checkbox").not(":checked").attr("disabled",count);
	//document.getElementById("next2").disabled = !count;
	document.getElementById("next2").disabled = !count;
});
</script>

   <div id="buttonContainer">
   <button id="next2" class="buttonForward"></button>
  
   </div>

</div>

<div id="categoryTwo">
<h1>CATEGORY 2</h1>   
<p>Please choose three from the choices below</p>
	
   
    <div id="toggle21"><h3>Nominee Number 1</h3><input type="checkbox" id="textFieldCat2A" class="category2Button" name="nominee 21"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle22"><h3>Nominee Number 2</h3><input type="checkbox" id="textFieldCat2B" class="category2Button" name="nominee 22"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle23"><h3>Nominee Number 3</h3><input type="checkbox" id="textFieldCat2C" class="category2Button" name="nominee 23"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle24"><h3>Nominee Number 4</h3><input type="checkbox" id="textFieldCat2D" class="category2Button" name="nominee 24"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle25"><h3>Nominee Number 5</h3><input type="checkbox" id="textFieldCat2E" class="category2Button" name="nominee 25"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle26"><h3>Nominee Number 6</h3><input type="checkbox" id="textFieldCat2F" class="category2Button" name="nominee 26"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle27"><h3>Nominee Number 7</h3><input type="checkbox" id="textFieldCat2G" class="category2Button" name="nominee 27"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle28"><h3>Nominee Number 8</h3><input type="checkbox" id="textFieldCat2H" class="category2Button" name="nominee 28"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle29"><h3>Nominee Number 9</h3><input type="checkbox" id="textFieldCat2I" class="category2Button" name="nominee 29"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle30"><h3>Nominee Number 10</h3><input type="checkbox" id="textFieldCat2J" class="category2Button" name="nominee 30"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<!--  <div class="enPhotos">  <a href="images/testEnlarged.jpg" data-lightbox="image-1" title="Image title"><p id="picText" class="enlarge1"><u>Enlarge image one</u></p></a><a href="images/testEnlarged.jpg" data-lightbox="image-1" title="Image title"><p id="picText" class="enlarge2"><u>Enlarge image two</u></p></a><a href="images/testEnlarged.jpg" data-lightbox="image-1" title="Image title"><p id="picText" class="enlarge3"><u>Enlarge image three</u></p></a><a href="images/testEnlarged.jpg" data-lightbox="image-1" title="Image title"><p id="picText" class="enlarge4"><u>Enlarge image four</u></p></a><a href="images/testEnlarged.jpg" data-lightbox="image-1" title="Image title"><p id="picText" class="enlarge5"><u>Enlarge image five</u></p></a><a href="images/testEnlarged.jpg" data-lightbox="image-1" title="Image title"><p id="picText" class="enlarge6"><u>Enlarge image six</u></p></a><a href="images/testEnlarged.jpg" data-lightbox="image-1" title="Image title"><p id="picText" class="enlarge7"><u>Enlarge image seven</u></p></a><a href="images/testEnlarged.jpg" data-lightbox="image-1" title="Image title"><p id="picText" class="enlarge8"><u>Enlarge image eight</u></p></a><a href="images/testEnlarged.jpg" data-lightbox="image-1" title="Image title"><p id="picText" class="enlarge9"><u>Enlarge image nine</u></p></a><a href="images/testEnlarged.jpg" data-lightbox="image-1" title="Image title"><p id="picText" class="enlarge10"><u>Enlarge image ten</u></p></a></div>-->
   
 <!--   <div id="toggle11"><h3>Nominee Number 11</h3><input type="checkbox" id="textFieldCat1K" class="category1Button" name="nominee 11"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle12"><h3>Nominee Number 12</h3><input type="checkbox" id="textFieldCat1L" class="category1Button" name="nominee 12"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle13"><h3>Nominee Number 13</h3><input type="checkbox" id="textFieldCat1M" class="category1Button" name="nominee 13"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle14"><h3>Nominee Number 14</h3><input type="checkbox" id="textFieldCat1N" class="category1Button" name="nominee 14"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle15"><h3>Nominee Number 15</h3><input type="checkbox" id="textFieldCat1O" class="category1Button" name="nominee 15"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle16"><h3>Nominee Number 16</h3><input type="checkbox" id="textFieldCat1P" class="category1Button" name="nominee 16"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle17"><h3>Nominee Number 17</h3><input type="checkbox" id="textFieldCat1Q" class="category1Button" name="nominee 17"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle18"><h3>Nominee Number 18</h3><input type="checkbox" id="textFieldCat1R" class="category1Button" name="nominee 18"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle19"><h3>Nominee Number 19</h3><input type="checkbox" id="textFieldCat1S" class="category1Button" name="nominee 19"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle20"><h3>Nominee Number 20</h3><input type="checkbox" id="textFieldCat1T" class="category1Button" name="nominee 20"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
-->

<script>
$("input.category2Button:checkbox").click(function() {
    var count2 = $("input.category2Button[type=checkbox]:checked").length >= 3;     
    $("input.category2Button:checkbox").not(":checked").attr("disabled",count2);
	document.getElementById("next3").disabled = !count2;
});
</script>

   <div id="buttonContainer">
   <button id="previous1" class="buttonBack"></button>
   
   <button id="next3" class="buttonForward"></button>
   </div>
</div>

<div id="categoryThree">
<h1>CATEGORY 3</h1>   
<p>Please choose three from the choices below</p>
	
    <div id="toggle41"><h3>Nominee Number 1</h3><input type="checkbox" id="textFieldCat2A" class="category3Button" name="nominee 41"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle42"><h3>Nominee Number 2</h3><input type="checkbox" id="textFieldCat3B" class="category3Button" name="nominee 42"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle43"><h3>Nominee Number 3</h3><input type="checkbox" id="textFieldCat3C" class="category3Button" name="nominee 43"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle44"><h3>Nominee Number 4</h3><input type="checkbox" id="textFieldCat3D" class="category3Button" name="nominee 44"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle45"><h3>Nominee Number 5</h3><input type="checkbox" id="textFieldCat3E" class="category3Button" name="nominee 45"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle46"><h3>Nominee Number 6</h3><input type="checkbox" id="textFieldCat3F" class="category3Button" name="nominee 46"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle47"><h3>Nominee Number 7</h3><input type="checkbox" id="textFieldCat3G" class="category3Button" name="nominee 47"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle48"><h3>Nominee Number 8</h3><input type="checkbox" id="textFieldCat3H" class="category3Button" name="nominee 48"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle49"><h3>Nominee Number 9</h3><input type="checkbox" id="textFieldCat3I" class="category3Button" name="nominee 49"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle50"><h3>Nominee Number 10</h3><input type="checkbox" id="textFieldCat3J" class="category3Button" name="nominee 50"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
 <!--  <div id="toggle51"><h3>Nominee Number 11</h3><input type="checkbox" id="textFieldCat3K" class="category3Button" name="nominee 51"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle52"><h3>Nominee Number 12</h3><input type="checkbox" id="textFieldCat3L" class="category3Button" name="nominee 52"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle53"><h3>Nominee Number 13</h3><input type="checkbox" id="textFieldCat3M" class="category3Button" name="nominee 53"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle54"><h3>Nominee Number 14</h3><input type="checkbox" id="textFieldCat3N" class="category3Button" name="nominee 54"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle55"><h3>Nominee Number 15</h3><input type="checkbox" id="textFieldCat3O" class="category3Button" name="nominee 55"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle56"><h3>Nominee Number 16</h3><input type="checkbox" id="textFieldCat3P" class="category3Button" name="nominee 56"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle57"><h3>Nominee Number 17</h3><input type="checkbox" id="textFieldCat3Q" class="category3Button" name="nominee 57"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle58"><h3>Nominee Number 18</h3><input type="checkbox" id="textFieldCat3R" class="category3Button" name="nominee 58"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle59"><h3>Nominee Number 19</h3><input type="checkbox" id="textFieldCat3S" class="category3Button" name="nominee 59"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle60"><h3>Nominee Number 20</h3><input type="checkbox" id="textFieldCat3T" class="category3Button" name="nominee 60"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
-->

<script>
$("input.category3Button:checkbox").click(function() {
    var count3 = $("input.category3Button[type=checkbox]:checked").length >= 3;     
    $("input.category3Button:checkbox").not(":checked").attr("disabled",count3);
	document.getElementById("next4").disabled = !count3;
});
</script>

   <div id="buttonContainer">
   <button id="previous2" class="buttonBack"></button>

   <button id="next4" class="buttonForward"></button>
   </div>
</div>
   
<div id="categoryFour">
<h1>CATEGORY 4</h1>   
<p>Please choose three from the choices below</p>
	
    <div id="toggle61"><h3>Nominee Number 1</h3><input type="checkbox" id="textFieldCat4A" class="category4Button" name="nominee 61"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle62"><h3>Nominee Number 2</h3><input type="checkbox" id="textFieldCat4B" class="category4Button" name="nominee 62"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle63"><h3>Nominee Number 3</h3><input type="checkbox" id="textFieldCat4C" class="category4Button" name="nominee 63"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle64"><h3>Nominee Number 4</h3><input type="checkbox" id="textFieldCat4D" class="category4Button" name="nominee 64"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle65"><h3>Nominee Number 5</h3><input type="checkbox" id="textFieldCat4E" class="category4Button" name="nominee 65"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle66"><h3>Nominee Number 6</h3><input type="checkbox" id="textFieldCat4F" class="category4Button" name="nominee 66"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle67"><h3>Nominee Number 7</h3><input type="checkbox" id="textFieldCat4G" class="category4Button" name="nominee 67"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle68"><h3>Nominee Number 8</h3><input type="checkbox" id="textFieldCat4H" class="category4Button" name="nominee 68"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle69"><h3>Nominee Number 9</h3><input type="checkbox" id="textFieldCat4I" class="category4Button" name="nominee 69"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle70"><h3>Nominee Number 10</h3><input type="checkbox" id="textFieldCat4J" class="category4Button" name="nominee 70"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<!--    
    <div id="toggle71"><img src="Images/letter11_off.gif" name='toggle71' class="category4Button"/></div>
    <div id="toggle72"><img src="Images/letter12_off.gif" name='toggle72' class="category4Button"/></div>
    <div id="toggle73"><img src="Images/letter13_off.gif" name='toggle73' class="category4Button"/></div>
    <div id="toggle74"><img src="Images/letter14_off.gif" name='toggle74' class="category4Button"/></div>
    <div id="toggle75"><img src="Images/letter15_off.gif" name='toggle75' class="category4Button"/></div>
    <div id="toggle76"><img src="Images/letter16_off.gif" name='toggle76' class="category4Button"/></div>
    <div id="toggle77"><img src="Images/letter17_off.gif" name='toggle77' class="category4Button"/></div>
    <div id="toggle78"><img src="Images/letter18_off.gif" name='toggle78' class="category4Button"/></div>
    <div id="toggle79"><img src="Images/letter19_off.gif" name='toggle79' class="category4Button"/></div>
    <div id="toggle80"><img src="Images/letter20_off.gif" name='toggle80' class="category4Button"/></div>
  -->  
  
  <script>
$("input.category4Button:checkbox").click(function() {
    var count4 = $("input[type=checkbox]:checked").length >= 3;     
    $("input.category4Button:checkbox").not(":checked").attr("disabled",count4);
	document.getElementById("next5").disabled = !count4;
});
</script>

   <div id="buttonContainer">
   <button id="previous3" class="buttonBack"></button>

   <button id="next5" class="buttonForward"></button>
   </div>
</div>   
<div id="categoryFive">
<h1>CATEGORY 5</h1>   
<p>Please choose three from the choices below</p>
	
    <div id="toggle81"><h3>Nominee Number 1</h3><input type="checkbox" id="textFieldCat5A" class="category5Button" name="nominee 81"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle82"><h3>Nominee Number 2</h3><input type="checkbox" id="textFieldCat5B" class="category5Button" name="nominee 82"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle83"><h3>Nominee Number 3</h3><input type="checkbox" id="textFieldCat5C" class="category5Button" name="nominee 83"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle84"><h3>Nominee Number 4</h3><input type="checkbox" id="textFieldCat5D" class="category5Button" name="nominee 84"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle85"><h3>Nominee Number 5</h3><input type="checkbox" id="textFieldCat5E" class="category5Button" name="nominee 85"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle86"><h3>Nominee Number 6</h3><input type="checkbox" id="textFieldCat5F" class="category5Button" name="nominee 86"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle87"><h3>Nominee Number 7</h3><input type="checkbox" id="textFieldCat5G" class="category5Button" name="nominee 87"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle88"><h3>Nominee Number 8</h3><input type="checkbox" id="textFieldCat5H" class="category5Button" name="nominee 88"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle89"><h3>Nominee Number 9</h3><input type="checkbox" id="textFieldCat5I" class="category5Button" name="nominee 89"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle90"><h3>Nominee Number 10</h3><input type="checkbox" id="textFieldCat5J" class="category5Button" name="nominee 90"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
<!--    <div id="toggle91"><img src="Images/letter11_off.gif" name='toggle91' class="category5Button"/></div>
    <div id="toggle92"><img src="Images/letter12_off.gif" name='toggle92' class="category5Button"/></div>
    <div id="toggle93"><img src="Images/letter13_off.gif" name='toggle93' class="category5Button"/></div>
    <div id="toggle94"><img src="Images/letter14_off.gif" name='toggle94' class="category5Button"/></div>
    <div id="toggle95"><img src="Images/letter15_off.gif" name='toggle95' class="category5Button"/></div>
    <div id="toggle96"><img src="Images/letter16_off.gif" name='toggle96' class="category5Button"/></div>
    <div id="toggle97"><img src="Images/letter17_off.gif" name='toggle97' class="category5Button"/></div>
    <div id="toggle98"><img src="Images/letter18_off.gif" name='toggle98' class="category5Button"/></div>
    <div id="toggle99"><img src="Images/letter19_off.gif" name='toggle99' class="category5Button"/></div>
    <div id="toggle100"><img src="Images/letter20_off.gif" name='toggle100' class="category5Button"/></div>
-->

<script>
$("input.category5Button:checkbox").click(function() {
    var count5 = $("input.category5Button[type=checkbox]:checked").length >= 3;     
    $("input.category5Button:checkbox").not(":checked").attr("disabled",count5);
	document.getElementById("next6").disabled = !count5;
});
</script>

   <div id="buttonContainer">
   <button id="previous4" class="buttonBack"></button>

   <button id="next6" class="buttonForward"></button>
   </div>
</div> 
<div id="categorySix">
<h1>CATEGORY 6</h1>   
<p>Please choose three from the choices below</p>

    <div id="toggle101"><h3>Nominee Number 1</h3><input type="checkbox" id="textFieldCat6A" class="category6Button" name="nominee 101"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle102"><h3>Nominee Number 2</h3><input type="checkbox" id="textFieldCat6B" class="category6Button" name="nominee 102"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle103"><h3>Nominee Number 3</h3><input type="checkbox" id="textFieldCat6C" class="category6Button" name="nominee 103"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle104"><h3>Nominee Number 4</h3><input type="checkbox" id="textFieldCat6D" class="category6Button" name="nominee 104"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle105"><h3>Nominee Number 5</h3><input type="checkbox" id="textFieldCat6E" class="category6Button" name="nominee 105"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle106"><h3>Nominee Number 6</h3><input type="checkbox" id="textFieldCat6F" class="category6Button" name="nominee 106"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle107"><h3>Nominee Number 7</h3><input type="checkbox" id="textFieldCat6G" class="category6Button" name="nominee 107"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle108"><h3>Nominee Number 8</h3><input type="checkbox" id="textFieldCat6H" class="category6Button" name="nominee 108"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle109"><h3>Nominee Number 9</h3><input type="checkbox" id="textFieldCat6I" class="category6Button" name="nominee 109"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle110"><h3>Nominee Number 10</h3><input type="checkbox" id="textFieldCat6J" class="category6Button" name="nominee 110"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
 <!--   <div id="toggle111"><img src="Images/letter11_off.gif" name='toggle111' class="category6Button"/></div>
    <div id="toggle112"><img src="Images/letter12_off.gif" name='toggle112' class="category6Button"/></div>
    <div id="toggle113"><img src="Images/letter13_off.gif" name='toggle113' class="category6Button"/></div>
    <div id="toggle114"><img src="Images/letter14_off.gif" name='toggle114' class="category6Button"/></div>
    <div id="toggle115"><img src="Images/letter15_off.gif" name='toggle115' class="category6Button"/></div>
    <div id="toggle116"><img src="Images/letter16_off.gif" name='toggle116' class="category6Button"/></div>
    <div id="toggle117"><img src="Images/letter17_off.gif" name='toggle117' class="category6Button"/></div>
    <div id="toggle118"><img src="Images/letter18_off.gif" name='toggle118' class="category6Button"/></div>
    <div id="toggle119"><img src="Images/letter19_off.gif" name='toggle119' class="category6Button"/></div>
    <div id="toggle120"><img src="Images/letter20_off.gif" name='toggle120' class="category6Button"/></div>
-->

<script>
$("input.category6Button:checkbox").click(function() {
    var count6 = $("input.category6Button[type=checkbox]:checked").length >= 3;     
    $("input.category6Button:checkbox").not(":checked").attr("disabled",count6);
	document.getElementById("next7").disabled = !count6;
});
</script>

   <div id="buttonContainer">
   <button id="previous5" class="buttonBack"></button>

   <button id="next7" class="buttonForward"></button>
   </div>
</div>   
<div id="categorySeven">
<h1>CATEGORY 7</h1>   
<p>Please choose three from the choices below</p>
	
    <div id="toggle121"><h3>Nominee Number 1</h3><input type="checkbox" id="textFieldCat7A" class="category7Button" name="nominee 121"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle122"><h3>Nominee Number 2</h3><input type="checkbox" id="textFieldCat7B" class="category7Button" name="nominee 122"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle123"><h3>Nominee Number 3</h3><input type="checkbox" id="textFieldCat7C" class="category7Button" name="nominee 123"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle124"><h3>Nominee Number 4</h3><input type="checkbox" id="textFieldCat7D" class="category7Button" name="nominee 124"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle125"><h3>Nominee Number 5</h3><input type="checkbox" id="textFieldCat7E" class="category7Button" name="nominee 125"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle126"><h3>Nominee Number 6</h3><input type="checkbox" id="textFieldCat7F" class="category7Button" name="nominee 126"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle127"><h3>Nominee Number 7</h3><input type="checkbox" id="textFieldCat7G" class="category7Button" name="nominee 127"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle128"><h3>Nominee Number 8</h3><input type="checkbox" id="textFieldCat7H" class="category7Button" name="nominee 128"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle129"><h3>Nominee Number 9</h3><input type="checkbox" id="textFieldCat7I" class="category7Button" name="nominee 129"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle130"><h3>Nominee Number 10</h3><input type="checkbox" id="textFieldCat7K" class="category7Button" name="nominee 130"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
<!--    <div id="toggle131"><img src="Images/letter11_off.gif" name='toggle131' class="category7Button"/></div>
    <div id="toggle132"><img src="Images/letter12_off.gif" name='toggle132' class="category7Button"/></div>
    <div id="toggle133"><img src="Images/letter13_off.gif" name='toggle133' class="category7Button"/></div>
    <div id="toggle134"><img src="Images/letter14_off.gif" name='toggle134' class="category7Button"/></div>
    <div id="toggle135"><img src="Images/letter15_off.gif" name='toggle135' class="category7Button"/></div>
    <div id="toggle136"><img src="Images/letter16_off.gif" name='toggle136' class="category7Button"/></div>
    <div id="toggle137"><img src="Images/letter17_off.gif" name='toggle137' class="category7Button"/></div>
    <div id="toggle138"><img src="Images/letter18_off.gif" name='toggle138' class="category7Button"/></div>
    <div id="toggle139"><img src="Images/letter19_off.gif" name='toggle139' class="category7Button"/></div>
    <div id="toggle140"><img src="Images/letter20_off.gif" name='toggle140' class="category7Button"/></div>
-->

<script>
$("input.category7Button:checkbox").click(function() {
    var count7 = $("input.category7Button[type=checkbox]:checked").length >= 3;     
    $("input.category7Button:checkbox").not(":checked").attr("disabled",count7);
	document.getElementById("next8").disabled = !count7;
});
</script>

   <div id="buttonContainer">
   <button id="previous6" class="buttonBack"></button>

   <button id="next8" class="buttonForward"></button>
   </div>
</div>  
<div id="categoryEight">
<h1>CATEGORY 8</h1>   
<p>Please choose three from the choices below</p>
	
    <div id="toggle141"><h3>Nominee Number 1</h3><input type="checkbox" id="textFieldCat8A" class="category8Button" name="nominee 141"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle142"><h3>Nominee Number 2</h3><input type="checkbox" id="textFieldCat8B" class="category8Button" name="nominee 142"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle143"><h3>Nominee Number 3</h3><input type="checkbox" id="textFieldCat8C" class="category8Button" name="nominee 143"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle144"><h3>Nominee Number 4</h3><input type="checkbox" id="textFieldCat8D" class="category8Button" name="nominee 144"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle145"><h3>Nominee Number 5</h3><input type="checkbox" id="textFieldCat8E" class="category8Button" name="nominee 145"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle146"><h3>Nominee Number 6</h3><input type="checkbox" id="textFieldCat8F" class="category8Button" name="nominee 146"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle147"><h3>Nominee Number 7</h3><input type="checkbox" id="textFieldCat8G" class="category8Button" name="nominee 147"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle148"><h3>Nominee Number 8</h3><input type="checkbox" id="textFieldCat8H" class="category8Button" name="nominee 148"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle149"><h3>Nominee Number 9</h3><input type="checkbox" id="textFieldCat8I" class="category8Button" name="nominee 149"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle150"><h3>Nominee Number 10</h3><input type="checkbox" id="textFieldCat8J" class="category8Button" name="nominee 150"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
<!--    <div id="toggle151"><img src="Images/letter11_off.gif" name='toggle151' class="category8Button"/></div>
    <div id="toggle152"><img src="Images/letter12_off.gif" name='toggle152' class="category8Button"/></div>
    <div id="toggle153"><img src="Images/letter13_off.gif" name='toggle153' class="category8Button"/></div>
    <div id="toggle154"><img src="Images/letter14_off.gif" name='toggle154' class="category8Button"/></div>
    <div id="toggle155"><img src="Images/letter15_off.gif" name='toggle155' class="category8Button"/></div>
    <div id="toggle156"><img src="Images/letter16_off.gif" name='toggle156' class="category8Button"/></div>
    <div id="toggle157"><img src="Images/letter17_off.gif" name='toggle157' class="category8Button"/></div>
    <div id="toggle158"><img src="Images/letter18_off.gif" name='toggle158' class="category8Button"/></div>
    <div id="toggle159"><img src="Images/letter19_off.gif" name='toggle159' class="category8Button"/></div>
    <div id="toggle160"><img src="Images/letter20_off.gif" name='toggle160' class="category8Button"/></div>
 -->  
 
 <script>
$("input.category8Button:checkbox").click(function() {
    var count8 = $("input.category8Button[type=checkbox]:checked").length >= 3;     
    $("input.category8Button:checkbox").not(":checked").attr("disabled",count8);
	document.getElementById("next9").disabled = !count8;
});
</script>

   <div id="buttonContainer">
   <button id="previous7" class="buttonBack"></button>

   <button id="next9" class="buttonForward"></button>
   </div>
</div> 
<div id="categoryNine">
<h1>CATEGORY 9</h1>   
<p>Please choose three from the choices below</p>
	
    <div id="toggle165"><h3>Nominee Number 1</h3><input type="checkbox" id="textFieldCat9A" class="category9Button" name="nominee 165"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle166"><h3>Nominee Number 2</h3><input type="checkbox" id="textFieldCat9B" class="category9Button" name="nominee 166"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle167"><h3>Nominee Number 3</h3><input type="checkbox" id="textFieldCat9C" class="category9Button" name="nominee 167"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle168"><h3>Nominee Number 4</h3><input type="checkbox" id="textFieldCat9D" class="category9Button" name="nominee 168"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle169"><h3>Nominee Number 5</h3><input type="checkbox" id="textFieldCat9E" class="category9Button" name="nominee 169"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle166"><h3>Nominee Number 6</h3><input type="checkbox" id="textFieldCat9F" class="category9Button" name="nominee 166"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle167"><h3>Nominee Number 7</h3><input type="checkbox" id="textFieldCat9G" class="category9Button" name="nominee 167"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle168"><h3>Nominee Number 8</h3><input type="checkbox" id="textFieldCat9H" class="category9Button" name="nominee 168"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle169"><h3>Nominee Number 9</h3><input type="checkbox" id="textFieldCat9I" class="category9Button" name="nominee 169"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle170"><h3>Nominee Number 10</h3><input type="checkbox" id="textFieldCat9J" class="category9Button" name="nominee 170"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
 <!--   <div id="toggle171"><img src="Images/letter11_off.gif" name='toggle171' class="category9Button"/></div>
    <div id="toggle172"><img src="Images/letter12_off.gif" name='toggle172' class="category9Button"/></div>
    <div id="toggle173"><img src="Images/letter13_off.gif" name='toggle173' class="category9Button"/></div>
    <div id="toggle174"><img src="Images/letter14_off.gif" name='toggle174' class="category9Button"/></div>
    <div id="toggle175"><img src="Images/letter15_off.gif" name='toggle175' class="category9Button"/></div>
    <div id="toggle176"><img src="Images/letter16_off.gif" name='toggle176' class="category9Button"/></div>
    <div id="toggle177"><img src="Images/letter17_off.gif" name='toggle177' class="category9Button"/></div>
    <div id="toggle178"><img src="Images/letter18_off.gif" name='toggle178' class="category9Button"/></div>
    <div id="toggle179"><img src="Images/letter19_off.gif" name='toggle179' class="category9Button"/></div>
    <div id="toggle180"><img src="Images/letter20_off.gif" name='toggle180' class="category9Button"/></div>
 -->   
 
 <script>
$("input.category9Button:checkbox").click(function() {
    var count9 = $("input.category9Button[type=checkbox]:checked").length >= 3;     
    $("input.category9Button:checkbox").not(":checked").attr("disabled",count9);
	document.getElementById("next10").disabled = !count9;
});
</script>

   <div id="buttonContainer">
   <button id="previous8" class="buttonBack"></button>

   <button id="next10" class="buttonForward"></button>
   </div>
</div>  
<div id="categoryTen">
<h1>CATEGORY 10</h1>   
<p>Please choose three from the choices below</p>
	
    <div id="toggle181"><h3>Nominee Number 1</h3><input type="checkbox" id="textFieldCat10A" class="category10Button" name="nominee 181"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle182"><h3>Nominee Number 2</h3><input type="checkbox" id="textFieldCat10B" class="category10Button" name="nominee 182"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle183"><h3>Nominee Number 3</h3><input type="checkbox" id="textFieldCat10C" class="category10Button" name="nominee 183"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle184"><h3>Nominee Number 4</h3><input type="checkbox" id="textFieldCat10E" class="category10Button" name="nominee 184"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle185"><h3>Nominee Number 5</h3><input type="checkbox" id="textFieldCat10F" class="category10Button" name="nominee 185"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle186"><h3>Nominee Number 6</h3><input type="checkbox" id="textFieldCat10G" class="category10Button" name="nominee 186"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle187"><h3>Nominee Number 7</h3><input type="checkbox" id="textFieldCat10H" class="category10Button" name="nominee 187"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle188"><h3>Nominee Number 8</h3><input type="checkbox" id="textFieldCat10I" class="category10Button" name="nominee 188"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle189"><h3>Nominee Number 9</h3><input type="checkbox" id="textFieldCat10J" class="category10Button" name="nominee 189"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div id="toggle190"><h3>Nominee Number 10</h3><input type="checkbox" id="textFieldCat10K" class="category10Button" name="nominee 190"></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    
<!--    <div id="toggle191"><img src="Images/letter11_off.gif" name='toggle191' class="category10Button"/></div>
    <div id="toggle192"><img src="Images/letter12_off.gif" name='toggle192' class="category10Button"/></div>
    <div id="toggle193"><img src="Images/letter13_off.gif" name='toggle193' class="category10Button"/></div>
    <div id="toggle194"><img src="Images/letter14_off.gif" name='toggle194' class="category10Button"/></div>
    <div id="toggle195"><img src="Images/letter15_off.gif" name='toggle195' class="category10Button"/></div>
    <div id="toggle196"><img src="Images/letter16_off.gif" name='toggle196' class="category10Button"/></div>
    <div id="toggle197"><img src="Images/letter17_off.gif" name='toggle197' class="category10Button"/></div>
    <div id="toggle198"><img src="Images/letter18_off.gif" name='toggle198' class="category10Button"/></div>
    <div id="toggle199"><img src="Images/letter19_off.gif" name='toggle199' class="category10Button"/></div>
    <div id="toggle200"><img src="Images/letter20_off.gif" name='toggle200' class="category10Button"/></div>
-->

<script>
$("input.category10Button:checkbox").click(function() {
    var count10 = $("input.category10Button[type=checkbox]:checked").length >= 3;     
    $("input.category10Button:checkbox").not(":checked").attr("disabled",count10);
});
</script>

   <div id="buttonContainer">
   <button id="previous9" class="buttonBack"></button>
 
   </div>
</div>
 
    

<div id="voteTally">

<form id="myform" action="stage1Database.php" method="post">

<input type="hidden" name="userName" value= "<?php echo $username; ?>">

<!--<img src="Images/check.png" width="60" height="60" alt="checkbox">-->

<input type="submit" id="buttonSave" value="View and submit my choices"></br>
<div id="description"></div>
<div id="desc1">
<!--<h3>Category 1 Group</h3>-->
<input type="hidden" id="textFieldCat1a" class="btnTextField" name="category1A" size="6" readonly>
<input type="hidden" id="textFieldCat1b" class="btnTextField" name="category1B" size="6" readonly>
<input type="hidden" id="textFieldCat1c" class="btnTextField" name="category1C" size="6" readonly>
</div>
<div id="desc2">
<!--<h3>Category 2 Group</h3>-->
<input type="hidden" id="textFieldCat2a" class="btnTextField" name="category2A" size="6" readonly>
<input type="hidden" id="textFieldCat2b" class="btnTextField" name="category2B" size="6" readonly>
<input type="hidden" id="textFieldCat2c" class="btnTextField" name="category2C" size="6" readonly>
</div>
<div id="desc3">
<!--<h3>Category 3 Group</h3>-->
<input type="hidden" id="textFieldCat3a" class="btnTextField" name="category3A" size="6" readonly>
<input type="hidden" id="textFieldCat3b" class="btnTextField" name="category3B" size="6" readonly>
<input type="hidden" id="textFieldCat3c" class="btnTextField" name="category3C" size="6" readonly>
</div>


<div class="rButtons">
<!--<h3>Category 4 Group</h3>-->
<input type="hidden" id="textFieldCat4a" class="btnTextField" name="category4A" size="6" readonly>
<input type="hidden" id="textFieldCat4b" class="btnTextField" name="category4B" size="6" readonly>
<input type="hidden" id="textFieldCat4c" class="btnTextField" name="category4C" size="6" readonly>
</div>
<div class="rButtons">
<!--<h3>Category 5 Group</h3>-->
<input type="hidden" id="textFieldCat5a" class="btnTextField" name="category5A" size="6" readonly>
<input type="hidden" id="textFieldCat5b" class="btnTextField" name="category5B" size="6" readonly>
<input type="hidden" id="textFieldCat5c" class="btnTextField" name="category5C" size="6" readonly>
</div>
<div class="rButtons">
<!--<h3>Category 6 Group</h3>-->
<input type="hidden" id="textFieldCat6a" class="btnTextField" name="category6A" size="6" readonly>
<input type="hidden" id="textFieldCat6b" class="btnTextField" name="category6B" size="6" readonly>
<input type="hidden" id="textFieldCat6c" class="btnTextField" name="category6C" size="6" readonly>
</div>
<div class="rButtons">
<!--<h3>Category 7 Group</h3>-->
<input type="hidden" id="textFieldCat7a" class="btnTextField" name="category7A" size="6" readonly>
<input type="hidden" id="textFieldCat7b" class="btnTextField" name="category7B" size="6" readonly>
<input type="hidden" id="textFieldCat7c" class="btnTextField" name="category7C" size="6" readonly>
</div>
<div class="rButtons">
<!--<h3>Category 8 Group</h3>-->
<input type="hidden" id="textFieldCat8a" class="btnTextField" name="category8A" size="6" readonly>
<input type="hidden" id="textFieldCat8b" class="btnTextField" name="category8B" size="6" readonly>
<input type="hidden" id="textFieldCat8c" class="btnTextField" name="category8C" size="6" readonly>
</div>
<div class="rButtons">
<!--<h3>Category 9 Group</h3>-->
<input type="hidden" id="textFieldCat9a" class="btnTextField" name="category9A" size="6" readonly>
<input type="hidden"id="textFieldCat9b" class="btnTextField" name="category9B" size="6" readonly>
<input type="hidden" id="textFieldCat9c" class="btnTextField" name="category9C" size="6" readonly>
</div>
<div class="rButtons">
<!--<h3>Category 10 Group</h3>-->
<input type="hidden" id="textFieldCat10a" class="btnTextField" name="category10A" size="6" readonly>
<input type="hidden" id="textFieldCat10b" class="btnTextField" name="category10B" size="6" readonly>
<input type="hidden" id="textFieldCat10c" class="btnTextField" name="category10C" size="6" readonly>
</div>

</form>
</div>

<div id="sideAlert">
</div>

</center>
</body>
</html>
