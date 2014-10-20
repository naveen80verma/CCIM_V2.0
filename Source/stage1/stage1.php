 <!DOCTYPE HTML>
<html>

<link type="text/css" rel="stylesheet" href="folderCSS/stage1New.css" />
<script type="text/javascript" src="jquery-2.0.1.js"></script>

<head>
<title>Business Excellence Awards</title>
<script type="text/javascript">

 $.noConflict();

<?php
$username = $_GET['username'];
$choicePass['choicePass']="choicePass";
?>

var checkName = "<?php Print($username); ?>";
checkName = checkName.toLowerCase();

jQuery(document).ready(function(){
	if(checkName == 'tparry'){  //tParry
	
		jQuery('#categoryTwo').show();
		document.getElementById('description').innerHTML = "<h2>Investment Broker of the Year Specifications</h2><br /><ul><li>Total dollar value of lease and sale (considerations) from November 1, 2012 to November 1, 2013 (1 year) (50%)</li><li>Expertise, client commitment, professionalism, ethics, etc. based on the applicant's submittal and testimonials (25%)</li><li>Depth of Community Service (20%)</li><li>Quality of Application (5%)</li></ul>";
		jQuery('#categoryOne').hide();	
	}
	
	else{ document.getElementById('description').innerHTML = "<h2>Industrial Broker of the Year Specifications</h2><br /><ul><li>Total dollar value of lease and sale (considerations) from November 1, 2012 to November 1, 2013 (1 year) (50%)</li><li>Expertise, client commitment, professionalism, ethics, etc. based on the applicant's submittal and testimonials (25%)</li><li>Depth of Community Service (20%)</li><li>Quality of Application (5%)</li>";
	}
	
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
	var storeChoice11 = ['','',''];
	var choicePass;


//***
//***END functions for storeChoice
//***


//***
//HIDE CATEGORIES
//***
if(checkName == 'tparry'){//tParry
	jQuery('#categoryTwo').show();
}//tParry
else{
	jQuery('#categoryTwo').hide();
	}

jQuery('#categoryThree').hide();
jQuery('#categoryFour').hide();
jQuery('#categoryFive').hide();
jQuery('#categorySix').hide();
jQuery('#categorySeven').hide();
jQuery('#categoryEight').hide();
jQuery('#categoryNine').hide();
jQuery('#categoryTen').hide();
jQuery('#categoryEleven').hide();
jQuery('#buttonSave').hide();							

jQuery('#buttonSave').prop("disabled",false);
jQuery("#next2").attr("disabled",true);
jQuery("#next3").attr("disabled",true);
jQuery("#next4").attr("disabled",true);
jQuery("#next5").attr("disabled",true);
jQuery("#next6").attr("disabled",true);
jQuery("#next7").attr("disabled",true);
jQuery("#next8").attr("disabled",true);
jQuery("#next9").attr("disabled",true);
jQuery("#next10").attr("disabled",true);
jQuery("#next11").attr("disabled",true);

jQuery(".category1Button").click(function(){
		butName = jQuery(this).attr('name');
		
	if((butName != storeChoice[0])&&(butName != storeChoice[1])&&(butName != storeChoice[2])){
	storeChoice[2] = storeChoice[1];
	storeChoice[1] = storeChoice[0];
	storeChoice[0] = butName;
	}
	
	var Onea = document.getElementById("FieldCat1a");
	var Oneb = document.getElementById("FieldCat1b");
	var Onec = document.getElementById("FieldCat1c");
	
		Onea.value = storeChoice[0];
		Oneb.value = storeChoice[1];
		Onec.value = storeChoice[2];
	
		 //for storeChoise array
		//popStoreChoice1();
});

jQuery(".category2Button").click(function(){
		butName2 = jQuery(this).attr('name');
		
	if((butName2 != storeChoice2[0])&&(butName2 != storeChoice2[1])&&(butName2 != storeChoice2[2])){
	storeChoice2[2] = storeChoice2[1];
	storeChoice2[1] = storeChoice2[0];
	storeChoice2[0] = butName2;
	}
		
	var Twoa = document.getElementById("FieldCat2a");
	var Twob = document.getElementById("FieldCat2b");
	var Twoc = document.getElementById("FieldCat2c");
	
		Twoa.value = storeChoice2[0];
		Twob.value = storeChoice2[1];
		Twoc.value = storeChoice2[2];	
		
		//popStoreChoice2();
});

jQuery(".category3Button").click(function(){
		butName = jQuery(this).attr('name');
		
	if((butName != storeChoice3[0])&&(butName != storeChoice3[1])&&(butName != storeChoice3[2])){
	storeChoice3[2] = storeChoice3[1];
	storeChoice3[1] = storeChoice3[0];
	storeChoice3[0] = butName;
	}
		
	var Threea = document.getElementById("FieldCat3a");
	var Threeb = document.getElementById("FieldCat3b");
	var Threec = document.getElementById("FieldCat3c");
	
		Threea.value = storeChoice3[0];
		Threeb.value = storeChoice3[1];
		Threec.value = storeChoice3[2];	
		
		//popStoreChoice3();
});

jQuery(".category4Button").click(function(){
		butName = jQuery(this).attr('name'); //for storeChoise array
		
	if((butName != storeChoice4[0])&&(butName != storeChoice4[1])&&(butName != storeChoice4[2])){
	storeChoice4[2] = storeChoice4[1];
	storeChoice4[1] = storeChoice4[0];
	storeChoice4[0] = butName;
	}
		
	var Foura = document.getElementById("FieldCat4a");
	var Fourb = document.getElementById("FieldCat4b");
	var Fourc = document.getElementById("FieldCat4c");
	
		Foura.value = storeChoice4[0];
		Fourb.value = storeChoice4[1];
		Fourc.value = storeChoice4[2];
		
		//popStoreChoice4();
});

jQuery(".category5Button").click(function(){
		butName = jQuery(this).attr('name');
		
	if((butName != storeChoice5[0])&&(butName != storeChoice5[1])&&(butName != storeChoice5[2])){
	storeChoice5[2] = storeChoice5[1];
	storeChoice5[1] = storeChoice5[0];
	storeChoice5[0] = butName;
	}
		
	var Fivea = document.getElementById("FieldCat5a");
	var Fiveb = document.getElementById("FieldCat5b");
	var Fivec = document.getElementById("FieldCat5c");
	
		Fivea.value = storeChoice5[0];
		Fiveb.value = storeChoice5[1];
		Fivec.value = storeChoice5[2];
		
		//popStoreChoice5();
});

jQuery(".category6Button").click(function(){
		butName = jQuery(this).attr('name');
		
	if((butName != storeChoice6[0])&&(butName != storeChoice6[1])&&(butName != storeChoice6[2])){
	storeChoice6[2] = storeChoice6[1];
	storeChoice6[1] = storeChoice6[0];
	storeChoice6[0] = butName;
	}
		
	var Sixa = document.getElementById("FieldCat6a");
	var Sixb = document.getElementById("FieldCat6b");
	var Sixc = document.getElementById("FieldCat6c");
	
		Sixa.value = storeChoice6[0];
		Sixb.value = storeChoice6[1];
		Sixc.value = storeChoice6[2];
		
		//popStoreChoice6();
});

jQuery(".category7Button").click(function(){
		butName = jQuery(this).attr('name'); //for storeChoise array
		
	if((butName != storeChoice7[0])&&(butName != storeChoice7[1])&&(butName != storeChoice7[2])){
	storeChoice7[2] = storeChoice7[1];
	storeChoice7[1] = storeChoice7[0];
	storeChoice7[0] = butName;
	}
		
	var Sevena = document.getElementById("FieldCat7a");
	var Sevenb = document.getElementById("FieldCat7b");
	var Sevenc = document.getElementById("FieldCat7c");
	
		Sevena.value = storeChoice7[0];
		Sevenb.value = storeChoice7[1];
		Sevenc.value = storeChoice7[2];
		
		//popStoreChoice7();
});

jQuery(".category8Button").click(function(){
		butName = jQuery(this).attr('name');
		
	if((butName != storeChoice8[0])&&(butName != storeChoice8[1])&&(butName != storeChoice8[2])){
	storeChoice8[2] = storeChoice8[1];
	storeChoice8[1] = storeChoice8[0];
	storeChoice8[0] = butName;
	}
		
	var Eighta = document.getElementById("FieldCat8a");
	var Eightb = document.getElementById("FieldCat8b");
	var Eightc = document.getElementById("FieldCat8c");
	
		Eighta.value = storeChoice8[0];
		Eightb.value = storeChoice8[1];
		Eightc.value = storeChoice8[2];
		
		//popStoreChoice8();
});

jQuery(".category9Button").click(function(){
		butName = jQuery(this).attr('name');
		
	if((butName != storeChoice9[0])&&(butName != storeChoice9[1])&&(butName != storeChoice9[2])){
	storeChoice9[2] = storeChoice9[1];
	storeChoice9[1] = storeChoice9[0];
	storeChoice9[0] = butName;
	}
		
	var Ninea = document.getElementById("FieldCat9a");
	var Nineb = document.getElementById("FieldCat9b");
	var Ninec = document.getElementById("FieldCat9c");
	
		Ninea.value = storeChoice9[0];
		Nineb.value = storeChoice9[1];
		Ninec.value = storeChoice9[2];
		
		//popStoreChoice9();
});

jQuery(".category10Button").click(function(){
		butName = jQuery(this).attr('name');
		
	if((butName != storeChoice10[0])&&(butName != storeChoice10[1])&&(butName != storeChoice10[2])){
	storeChoice10[2] = storeChoice10[1];
	storeChoice10[1] = storeChoice10[0];
	storeChoice10[0] = butName;
	}
		
	var Tena = document.getElementById("FieldCat10a");
	var Tenb = document.getElementById("FieldCat10b");
	var Tenc = document.getElementById("FieldCat10c");
	
		Tena.value = storeChoice10[0];
		Tenb.value = storeChoice10[1];
		Tenc.value = storeChoice10[2];
		
		
		//popStoreChoice10();
});

jQuery(".category11Button").click(function(){
		butName = jQuery(this).attr('name');
		
	if((butName != storeChoice11[0])&&(butName != storeChoice11[1])&&(butName != storeChoice11[2])){
	storeChoice11[2] = storeChoice11[1];
	storeChoice11[1] = storeChoice11[0];
	storeChoice11[0] = butName;
	}
		
	var Elevena = document.getElementById("FieldCat11a");
	var Elevenb = document.getElementById("FieldCat11b");
	var Elevenc = document.getElementById("FieldCat11c");
	
		Elevena.value = storeChoice11[0];
		Elevenb.value = storeChoice11[1];
		Elevenc.value = storeChoice11[2];
		
		//popStoreChoice11();
});
	
//***
//end toggle for selection
//***
  
  //****
  //***button navigation***
  //****
  //forward
	jQuery('#next2').on('click',function(){
		if(checkName == 'jsmith'){ //jSmith
			jQuery('#categoryFour').show();
		document.getElementById('description').innerHTML = "<h2>Office Broker of the Year Specification</h2><br /><ul><li>Total dollar value of lease and sale (considerations) from November 1, 2012 to November 1, 2013 (1 year) (50%)</li><li>Expertise, client commitment, professionalism, ethics, etc. based on the applicant's submittal and testimonials (25%)</li><li>Depth of Community Service (20%)</li><li>Quality of Application (5%)</li></ul>";
		jQuery('#categoryOne').hide();
		}
						
		else{
				jQuery('#categoryTwo').show();
		document.getElementById('description').innerHTML = "<h2>Investment Broker of the Year Specifications</h2><br /><ul><li>Total dollar value of lease and sale (considerations) from November 1, 2012 to November 1, 2013 (1 year) (50%)</li><li>Expertise, client commitment, professionalism, ethics, etc. based on the applicant's submittal and testimonials (25%)</li><li>Depth of Community Service (20%)</li><li>Quality of Application (5%)</li></ul>";
		jQuery('#categoryOne').hide();
		}
	});

	jQuery('#next3').on('click',function(){
		jQuery('#categoryThree').show();
		document.getElementById('description').innerHTML = "<h2>Retail Broker of the Year Specification</h2><br /><ul><li>Total dollar value of lease and sale (considerations) from November 1, 2012 to November 1, 2013 (1 year) (50%)</li><li>Expertise, client commitment, professionalism, ethics, etc. based on the applicant's submittal and testimonials (25%)</li><li>Depth of Community Service (20%)</li><li>Quality of Application (5%)</li></ul>";
		jQuery('#categoryTwo').hide();	
	});
	
	jQuery('#next4').on('click',function(){
		if (checkName == 'esmith'){  //eSmith
			jQuery('#categoryFive').show();
		document.getElementById('description').innerHTML = "<h2>Architectural Firm of the Year Specification</h2><br /><ul<li>Design: Judge this firm's portfolio on the overall aethetics and appeal of its designs (30%)</li><li>Innovation, Creativity, and Use of Materials: Judge this firm's portfolio on its innovation and creativity, and any other design features. This could include<br /> sustainability, use of materials, etc. (30%)</li><li>Impact on Community: Judge the firm on the impact of its projects on the community and on its reputation and commitment to its clients. Use the submittal and testimonial(s) and your overall knowledge of the community in which the project(s) reside(s). (35%)</li><li>Quality of Application (5%)</li></ul>";
		jQuery('#categoryThree').hide();
		}
		else{
			jQuery('#categoryFour').show();
		document.getElementById('description').innerHTML = "<h2>Office Broker of the Year Specification</h2><br /><ul><li>Total dollar value of lease and sale (considerations) from November 1, 2012 to November 1, 2013 (1 year) (50%)</li><li>Expertise, client commitment, professionalism, ethics, etc. based on the applicant's submittal and testimonials (25%)</li><li>Depth of Community Service (20%)</li><li>Quality of Application (5%)</li></ul>";
		jQuery('#categoryThree').hide();
		}
	});
	
	jQuery('#next5').on('click',function(){
		if (checkName =='jsmith'){ //jSmith
			jQuery('#categoryEleven').show();
		document.getElementById('description').innerHTML = "<h2>Mid Market Real Estate Banker of the Year Specifications</h2><br /><ul><li>Largest Loan: The candidate will be judged on the overall size of your largest loan (25%)</li><li>Number of Loans: How many loans did the candidate close and what was the total amount (25%)</li><li>Written Testimonials: Between one and three testimonials from clients describing how this loan helped them and the Utah economy (15%)</li><li>Community Service: What has the candidate done in the past three years in giving back to the community (20%)</li><li>Quality of the Application: The candidate will be judges on the pictures, project details and overall look and feel of the application (10%)</li><li>Testimonial from a Client or Peer: A one page testimonial from a coworker or similar professional attesting to why the candidate should receive the award should also be submitted (5%)</li></ul>";
		jQuery('#categoryFour').hide();
		}
		else{
		jQuery('#categoryFive').show();
		document.getElementById('description').innerHTML = "<h2>Architectural Firm of the Year Specification</h2><br /><ul<li>Design: Judge this firm's portfolio on the overall aethetics and appeal of its designs (30%)</li><li>Innovation, Creativity, and Use of Materials: Judge this firm's portfolio on its innovation and creativity, and any other design features. This could include<br /> sustainability, use of materials, etc. (30%)</li><li>Impact on Community: Judge the firm on the impact of its projects on the community and on its reputation and commitment to its clients. Use the submittal and testimonial(s) and your overall knowledge of the community in which the project(s) reside(s). (35%)</li><li>Quality of Application (5%)</li></ul>";
		jQuery('#categoryFour').hide();	
		}
	});
	
	jQuery('#next6').on('click',function(){
		jQuery('#categorySix').show();
		document.getElementById('description').innerHTML = "<h2>Contractor of the Year Specification</h2><br /><ul><li>Quality of projects (35%)</li><li>Customer Commitment based on application and testimonial (20%)</li><li>Impact on Community from project(s) (20%)</li><li>Engineering News Record Ranking(/'ENR/') for 2013 (10%)</li><li>Safety Rating (E-MOD) for 2013 (10%)</li><li>Quality of Application (5%)</li></ul>";
		jQuery('#categoryFive').hide();	
	});
	
	jQuery('#next7').on('click',function(){
		jQuery('#categorySeven').show();
		document.getElementById('description').innerHTML = "<h2>Developer of the Year Specification</h2><br /><ul><li>Vision of the Project and Impact on Community: Judge the project on its overall impact on the community (e.g. how does it impact and foster community growth, vitality, longevity, and stability) (25%)</li><li>Innovative Design: Judge the project on its design characteristics (e.g. creativity, sustainability, construction quality, etc.) (25%)</li><li>Highest and Best Use for the Site: Judge the project on its use(s). Score it based on your opinion of whether this project is the right use for this site and whether it isa good fit for the location and neighborhood. Though not a determinant, economic feasibility is also a factor in this criteria and the applicant should discuss it. However, there is no expectation of disclosing confidential information. (25%)</li><li>Reputation: Judge the developer on its repuation based on the submittal and testimonial(s) (20%)</li><li>Quality of Application (5%)</li></ul>."
		jQuery('#categorySix').hide();	
	});
	
	jQuery('#next8').on('click',function(){
		jQuery('#categoryEight').show();
		document.getElementById('description').innerHTML = "<h2>Property Manager of the Year Specifications</h2><br /><ul><li>Competitive Advantage: The recipient should demonstrate how it gives its clients' properties a competitive advantage (25%)</li><li>Subject Matter and Market Expertise: The recipient should demonstrate its expertise on the property type(s) and submarket (25%)</li><li>Sound Processes and Reputation: The recipient should demonstrate how its processes help make it a good fiduciary of its clients and tenants and how this, in turn, fosters its reputation amongst its peers and clients (25%)</li><li>Technological Advances: The recipient should demonstrate how it uses technology to drive success for its clients (20%)</li><li>Quality of the Application (5%)</li></ul>";
		jQuery('#categorySeven').hide();	
	});
	
	jQuery('#next9').on('click',function(){
		jQuery('#categoryNine').show();
		document.getElementById('description').innerHTML = "<h2>Real Estate Attorney of the Year Specifications</h2><br /><ul><li>Complexity of Case Work: The condidate should demonstrate his/her ability to handle complex real estate cases and transactions (40%)</li><li>Gravity of Case Work: Judge the candidate on the impact of the cases and transactions. (i.e. how major are the cases based on their impact on the industry and on the client) (30%)</li><li>Leadership and Civility: Based on the candidates' testimonials and application, judge his/her reputation of civility and professionalism and leadership experience within the firm (25%)</li><li>Quality of the Application (5%)</li></ul>";
		jQuery('#categoryEight').hide();	
	});
	
	jQuery('#next10').on('click',function(){
		jQuery('#categoryTen').show();
		document.getElementById('description').innerHTML = "<h2>Commercial Real Estate Banker of the Year Specifications</h2><br /><ul><li>Largest Loan: You will be judged on the overall size of your largest loan (25%)</li><li>Number of Loans: How many loans did you close and what was the total amount (25%)</li><li>Written Testimonials: Between one and three testimonials from clients, peers, co-workers, or similar professionals describing how the loan helped them and the Utah economy and/or attesting to why you should receive the award(25%)</li><li>Community Service: What have you  done in the past three years in giving back to the community (20%)</li><li>Quality of the Application: The candidate will be judges on the pictures, project details and overall look and feel of the application (5%)</li></ul>";
		jQuery('#categoryNine').hide();
	});
	
	jQuery('#next11').on('click',function(){
		if (checkName =='jhilton') { //jHilton{
			alert("The next categpry is for Mid Market Banker of the Year. Since you have been nominated fo this category (Congratulations!), you are not eligible to vote in that particular category.");
		}
		else{
			jQuery('#categoryEleven').show();
		document.getElementById('description').innerHTML = "<h2>Mid Market Real Estate Banker of the Year Specifications</h2><br /><ul><li>Largest Loan: You will be judged on the overall size of your largest loan (25%)</li><li>Number of Loans: How many loans did you close and what was the total amount (25%)</li><li>Written Testimonials: Between one and three testimonials from clients, peers, co-workers, or similar professionals describing how the loan helped them and the Utah economy and/or attesting to why you should receive the award(25%)</li><li>Community Service: What have you  done in the past three years in giving back to the community (20%)</li><li>Quality of the Application: The candidate will be judges on the pictures, project details and overall look and feel of the application (5%)</li></ul>";
		jQuery('#categoryTen').hide();
		jQuery('#buttonSave').prop("disabled",false);
		//jQuery('#buttonSave').css("background-image","url(Images/buttons/submit.png)");
		jQuery('#sideAlert').css("background-image","url(Images/alertImg.png)");	
		}
	});

	//backward
	
	jQuery('#previous10').on('click',function(){
		
	if (checkName =='jsmith'){ //jSmith
		jQuery('#categoryFour').show();
		document.getElementById('description').innerHTML = "<h2>Office Broker of the Year Specification</h2><br /><ul><li>Total dollar value of lease and sale (considerations) from November 1, 2012 to November 1, 2013 (1 year) (50%)</li><li>Expertise, client commitment, professionalism, ethics, etc. based on the applicant's submittal and testimonials (25%)</li><li>Depth of Community Service (20%)</li><li>Quality of Application (5%)</li></ul>";
		jQuery('#categoryEleven').hide();
		jQuery('#buttonSave').hide();
	}
		else{
			jQuery('#categoryTen').show();
		document.getElementById('description').innerHTML = "<h2>Commercial Real Estate Banker of the Year Specifications</h2><br /><ul><li>Largest Loan: You will be judged on the overall size of your largest loan (25%)</li><li>Number of Loans: How many loans did you close and what was the total amount (25%)</li><li>Written Testimonials: Between one and three testimonials from clients, peers, co-workers, or similar professionals describing how the loan helped them and the Utah economy and/or attesting to why you should receive the award(25%)</li><li>Community Service: What have you  done in the past three years in giving back to the community (20%)</li><li>Quality of the Application: The candidate will be judges on the pictures, project details and overall look and feel of the application (5%)</li></ul>";
		jQuery('#categoryEleven').hide();
		jQuery('#buttonSave').hide();
		}
	});
	
	jQuery('#previous9').on('click',function(){
		jQuery('#categoryNine').show();
		document.getElementById('description').innerHTML = "<h2>Real Estate Attorney of the Year Specifications</h2><br /><ul><li>Complexity of Case Work: The condidate should demonstrate his/her ability to handle complex real estate cases and transactions (40%)</li><li>Gravity of Case Work: Judge the candidate on the impact of the cases and transactions. (i.e. how major are the cases based on their impact on the industry and on the client) (30%)</li><li>Leadership and Civility: Based on the candidates' testimonials and application, judge his/her reputation of civility and professionalism and leadership experience within the firm (25%)</li><li>Quality of the Application (5%)</li></ul>";
		jQuery('#categoryTen').hide();
			
	});
	
	jQuery('#previous8').on('click',function(){
		jQuery('#categoryEight').show();
		document.getElementById('description').innerHTML = "<h2>Property Manager of the Year Specifications</h2><br /><ul><li>Competitive Advantage: The recipient should demonstrate how it gives its clients' properties a competitive advantage (25%)</li><li>Subject Matter and Market Expertise: The recipient should demonstrate its expertise on the property type(s) and submarket (25%)</li><li>Sound Processes and Reputation: The recipient should demonstrate how its processes help make it a good fiduciary of its clients and tenants and how this, in turn, fosters its reputation amongst its peers and clients (25%)</li><li>Technological Advances: The recipient should demonstrate how it uses technology to drive success for its clients (20%)</li><li>Quality of the Application (5%)</li></ul>";
		jQuery('#categoryNine').hide();
			
	});
	
	jQuery('#previous7').on('click',function(){
		jQuery('#categorySeven').show();
		document.getElementById('description').innerHTML = "<h2>Developer of the Year Specification</h2><br /><ul><li>Vision of the Project and Impact on Community: Judge the project on its overall impact on the community (e.g. how does it impact and foster community growth, vitality, longevity, and stability) (25%)</li><li>Innovative Design: Judge the project on its design characteristics (e.g. creativity, sustainability, construction quality, etc.) (25%)</li><li>Highest and Best Use for the Site: Judge the project on its use(s). Score it based on your opinion of whether this project is the right use for this site and whether it isa good fit for the location and neighborhood. Though not a determinant, economic feasibility is also a factor in this criteria and the applicant should discuss it. However, there is no expectation of disclosing confidential information. (25%)</li><li>Reputation: Judge the developer on its repuation based on the submittal and testimonial(s) (20%)</li><li>Quality of Application (5%)</li></ul>.";
		jQuery('#categoryEight').hide();
			
	});
	
	jQuery('#previous6').on('click',function(){
		jQuery('#categorySix').show();
		document.getElementById('description').innerHTML = "<h2>Contractor of the Year Specification</h2><br /><ul><li>Quality of projects (35%)</li><li>Customer Commitment based on application and testimonial (20%)</li><li>Impact on Community from project(s) (20%)</li><li>Engineering News Record Ranking(/'ENR/') for 2013 (10%)</li><li>Safety Rating (E-MOD) for 2013 (10%)</li><li>Quality of Application (5%)</li></ul>";
		jQuery('#categorySeven').hide();
			
	});
	
	jQuery('#previous5').on('click',function(){
		jQuery('#categoryFive').show();
		document.getElementById('description').innerHTML = "<h2>Architectural Firm of the Year Specification</h2><br /><ul><li>Design: Judge this firm's portfolio on the overall aethetics and appeal of its designs (30%)</li><li>Innovation, Creativity, and Use of Materials: Judge this firm's portfolio on its innovation and creativity, and any other design features. This could include<br /> sustainability, use of materials, etc. (30%)</li><li>Impact on Community: Judge the firm on the impact of its projects on the community and on its reputation and commitment to its clients. Use the submittal and testimonial(s) and your overall knowledge of the community in which the project(s) reside(s). (35%)</li><li>Quality of Application (5%)</li></ul>";
		jQuery('#categorySix').hide();
			
	});
	
	jQuery('#previous4').on('click',function(){
		if (checkName == 'esmith'){ //eSmith
			jQuery('#categoryThree').show();
		document.getElementById('description').innerHTML = "<h2>Retail Broker of the Year Specification</h2><br /><ul><li>Total dollar value of lease and sale (considerations) from November 1, 2012 to November 1, 2013 (1 year) (50%)</li><li>Expertise, client commitment, professionalism, ethics, etc. based on the applicant's submittal and testimonials (25%)</li><li>Depth of Community Service (20%)</li><li>Quality of Application (5%)</li></ul>";
		jQuery('#categoryFive').hide();
		}
		else{
			jQuery('#categoryFour').show();
		document.getElementById('description').innerHTML = "<h2>Office Broker of the Year Specification</h2><br /><ul><li>Total dollar value of lease and sale (considerations) from November 1, 2012 to November 1, 2013 (1 year) (50%)</li><li>Expertise, client commitment, professionalism, ethics, etc. based on the applicant's submittal and testimonials (25%)</li><li>Depth of Community Service (20%)</li><li>Quality of Application (5%)</li></ul>";
		jQuery('#categoryFive').hide();
		}
			
	});
	
	jQuery('#previous3').on('click',function(){
		if (checkName =='jsmith'){//jSmith
			jQuery('#categoryOne').show();
		document.getElementById('description').innerHTML = "<h2>Industrial Broker of the Year Specifications</h2><br /><ul><li>Total dollar value of lease and sale (considerations) from November 1, 2012 to November 1, 2013 (1 year) (50%)</li><li>Expertise, client commitment, professionalism, ethics, etc. based on the applicant's submittal and testimonials (25%)</li><li>Depth of Community Service (20%)</li><li>Quality of Application (5%)</li></ul>";
		jQuery('#categoryFour').hide();
		}
		
		else{
			jQuery('#categoryThree').show();
		document.getElementById('description').innerHTML = "<h2>Retail Broker of the Year Specification</h2><br /><ul><li>Total dollar value of lease and sale (considerations) from November 1, 2012 to November 1, 2013 (1 year) (50%)</li><li>Expertise, client commitment, professionalism, ethics, etc. based on the applicant's submittal and testimonials (25%)</li><li>Depth of Community Service (20%)</li><li>Quality of Application (5%)</li></ul>";
		jQuery('#categoryFour').hide();
		}
			
	});
	
	jQuery('#previous2').on('click',function(){
		jQuery('#categoryTwo').show();
		document.getElementById('description').innerHTML = "<h2>Investment Broker of the Year Specifications</h2><br /><ul><li>Total dollar value of lease and sale (considerations) from November 1, 2012 to November 1, 2013 (1 year) (50%)</li><li>Expertise, client commitment, professionalism, ethics, etc. based on the applicant's submittal and testimonials (25%)</li><li>Depth of Community Service (20%)</li><li>Quality of Application (5%)</li></ul>";
		jQuery('#categoryThree').hide();
				
	});
	
	jQuery('#previous1').on('click',function(){
		
		if(checkName == 'tparry'){  //tParry
		alert("The previous categpry is for Industrial Borker of the year. Since you have been nominated fo this category (Congratulations!), you are not eligible to vote in that particular category.");
	}
	
		else{
			jQuery('#categoryOne').show();
		document.getElementById('description').innerHTML = "<h2>Industrial Broker of the Year Specifications</h2><br /><ul><li>Total dollar value of lease and sale (considerations) from November 1, 2012 to November 1, 2013 (1 year) (50%)</li><li>Expertise, client commitment, professionalism, ethics, etc. based on the applicant's submittal and testimonials (25%)</li><li>Depth of Community Service (20%)</li><li>Quality of Application (5%)</li></ul>";
		jQuery('#categoryTwo').hide();
		}
		
	});
	
//***
//***end button navigation***
//***

	jQuery('#buttonSave').on('click',function(){
		//for(i=0;i<voteArray.length; i++){			
		//}
		
	});
});

function popitup(url) {
	newwindow=window.open(url,'name','height=800,width=1100');
	if (window.focus) {newwindow.focus()}
	return false;
}

</script>

</head>
<body>
<h5><a href="mailto:mattgq2@gmail.com" style="color: #aaaaaa;">Help center</a></h5>
<center>
<div id="categoryOne">

<h1>Industrial Broker of the Year</h1>
<p>Please choose three from the choices below</p>
<table border = "0">
	<tr><td><div id="toggle5"><input type="checkbox" id="FieldCat1E" class="category1Button" name="Zach Anderson"><a href="viewPage.html" onclick="return popitup('popPages/zAnderson.html')"><h3><u>Zach Anderson with Newmark Grubb ACRES</u></h3></a></div></td></tr>
	<tr><td><div id="toggle2"><input type="checkbox" id="FieldCat1B" class="category1Button" name="Tom Dishman"><a href="viewPage.html" onclick="return popitup('popPages/tDishman.html')"><h3><u>Tom Dishman with CBRE, Inc.</u></h3></a></div></td></tr>
    <tr><td><div id="toggle1"><input type="checkbox" id="FieldCat1A" class="category1Button" name="Jeff Heaton"><a href="viewPage.html" onclick="return popitup('popPages/jHeaton.html')"><h3><u>Jeff Heaton with Newmark Grubb ACRES</u></h3></a></div></td></tr>
    <tr><td><div id="toggle6"><input type="checkbox" id="FieldCat1F" class="category1Button" name="Travis J. Parry"><a href="viewPage.html" onclick="return popitup('popPages/tjParry.html')"><h3><u>Travis J. Parry, CCIM with Cushman & Wakefield|Commerce</u></h3></a></td></tr>
    <tr><td><div id="toggle3"><input type="checkbox" id="FieldCat1C" class="category1Button" name="Jeff Richards"><a href="viewPage.html" onclick="return popitup('popPages/jRichards.html')"><h3><u>Jeff Richards with CBRE, Inc.</u></h3></a></div></td></tr>
    <tr><td><div id="toggle4"><input type="checkbox" id="FieldCat1D" class="category1Button" name="Kyle Roberts"><a href="viewPage.html" onclick="return popitup('popPages/kRoberts.html')"><h3><u>Kyle Roberts with Newmark Grubb ACRES</u></h3></a></div></td></tr>
   
    </table>
    <div style="background-color:#cccccc; width: 700px; height: 50px;"><img src="images/downArrow.gif" /><p style="vertical-align:top; margin-left: 8px; display:inline-block;">Please see the specifications for the voting criteria below&nbsp; &nbsp;</p><img src="images/downArrow.gif" /></div>
    <div id="buttonContainer">
   <input type="submit" class="buttonForward" id="next2" value="Next Category >>" />
   </div>
   
    </div>

<script>
jQuery("input.category1Button:checkbox").click(function() {
    var count = jQuery("input.category1Button[type=checkbox]:checked").length >= 3;     
    jQuery("input.category1Button:checkbox").not(":checked").attr("disabled",count);
	//document.getElementById("next2").disabled = !count;
	document.getElementById("next2").disabled = !count;
});
</script>

   
</div>

<div id="categoryTwo">
<h1>Investment Broker of the Year</h1>   
<p>Please choose three from the choices below</p>
<table border = "0">	
   	<tr><td><div id="toggle23"><input type="checkbox" id="FieldCat2C" class="category2Button" name="Greg Barratt"><a href="viewPage.html" onclick="return popitup('popPages/gBarratt.html')"><h3><u>Greg Barratt with Hendricks Berkadia</u></h3></div></td></tr>
    <tr><td><div id="toggle21"><input type="checkbox" id="FieldCat2A" class="category2Button" name="Bryce Blanchard"><a href="viewPage.html" onclick="return popitup('popPages/bBlanchard.html')"><h3><u>Bryce Blanchard with Newmark Grubb ACRES</u></h3></div></td></tr>
    <tr><td><div id="toggle22"><input type="checkbox" id="FieldCat2B" class="category2Button" name="Kip Paul"><a href="viewPage.html" onclick="return popitup('popPages/kPaul.html')"><h3><u>Kip Paul with Cushman & Wakefield|Commerce</u></h3></div></td></tr>
   	<tr><td><div id="toggle25"><input type="checkbox" id="FieldCat2E" class="category2Button" name="Danny Shin"><a href="viewPage.html" onclick="return popitup('popPages/dShin.html')"><h3><u>Danny Shin with Marcus & Millichap</u></h3></div></td></tr>
    <tr><td><div id="toggle24"><input type="checkbox" id="FieldCat2D" class="category2Button" name="Brandon Wood"><a href="viewPage.html" onclick="return popitup('popPages/bWood.html')"><h3><u>Brandon Wood with Newmark Grubb ACRES</u></h3></div></td></tr>
   

</table>
<script>

jQuery("input.category2Button:checkbox").click(function() {
    var count2 = jQuery("input.category2Button[type=checkbox]:checked").length >= 3;     
    jQuery("input.category2Button:checkbox").not(":checked").attr("disabled",count2);
	document.getElementById("next3").disabled = !count2;
});
</script>

   <div id="buttonContainer">
   <input type="submit" id="previous1" class="buttonBack" value="<< Previous Category"/>
   
   <input type="submit" id="next3" class="buttonForward" value="Next Category  >>" />
   </div>
</div>

<div id="categoryThree">
<h1>Retail Broker of the Year</h1>   
<p>Please choose three from the choices below</p>
<table border = "0">
	<tr><td><div id="toggle44"><input type="checkbox" id="FieldCat3D" class="category3Button" name="Heather Bogden"><a href="viewPage.html" onclick="return popitup('popPages/hBogden.html')"><h3><u>Heather Bogden with Coldwell Banker Commercial Intermountain</u></h3></div></td></tr>   
    <tr><td><div id="toggle43"><input type="checkbox" id="FieldCat3C" class="category3Button" name="Chris Hatch"><a href="viewPage.html" onclick="return popitup('popPages/cHatch.html')"><h3><u>Chris Hatch with Mountain West Retail/Investment Commercial Real Estate</u></h3></div></td></tr>
    <tr><td><div id="toggle41"><input type="checkbox" id="FieldCat2A" class="category3Button" name="Rob Moore"><a href="viewPage.html" onclick="return popitup('popPages/rMoore.html')"><h3><u>Rob Moore, CCIM with Coldwell Banker Commercial Intermountain</u></h3></div></td></tr>
    <tr><td><div id="toggle42"><input type="checkbox" id="FieldCat3B" class="category3Button" name="Tim Simonsen"><a href="viewPage.html" onclick="return popitup('popPages/tSimonsen.html')"><h3><u>Tim Simonsen with Coldwell Banker Commercial Intermountain</u></h3></div></td></tr>   
    <tr><td><div id="toggle45"><input type="checkbox" id="FieldCat3E" class="category3Button" name="Stuart Thain"><a href="viewPage.html" onclick="return popitup('popPages/sThain.html')"><h3><u>Stuart Thain with Coldwell Banker Commercial Intermountain</u></h3></div></td></tr>

</table>
<script>
jQuery("input.category3Button:checkbox").click(function() {
    var count3 = jQuery("input.category3Button[type=checkbox]:checked").length >= 3;     
    jQuery("input.category3Button:checkbox").not(":checked").attr("disabled",count3);
	document.getElementById("next4").disabled = !count3;
});
</script>

   <div id="buttonContainer">
   <input type="submit" id="previous2" class="buttonBack" value="<< Previous Category"/>

   <input type="submit" id="next4" class="buttonForward" value="Next Category >>" />
   </div>
</div>
   
<div id="categoryFour">
<h1>Office Broker of the Year</h1>   
<p>Please choose three from the choices below</p>
<table border = "0">
	<tr><td><div id="toggle62"><input type="checkbox" id="FieldCat4B" class="category4Button" name="Brandon Fugal"><a href="viewPage.html" onclick="return popitup('popPages/bFugal.html')"><h3><u>Brandon Fugal with Coldwell Banker Commerical</u></h3></div></td></tr>
    <tr><td><div id="toggle63"><input type="checkbox" id="FieldCat4C" class="category4Button" name="Collin Perkins"><a href="viewPage.html" onclick="return popitup('popPages/cPerkins.html')"><h3><u>Collin Perkins with Newmark Grubb ACRES</u></h3></div></td></tr
    ><tr><td><div id="toggle61"><input type="checkbox" id="FieldCat4A" class="category4Button" name="Eric Smith"><a href="viewPage.html" onclick="return popitup('popPages/eSmith.html')"><h3><u>Eric Smith with CBRE, Inc.</u></h3></div></td></tr>
   
 </table> 
  <script>
jQuery("input.category4Button:checkbox").click(function() {
    var count4 = jQuery("input.category4Button[type=checkbox]:checked").length >= 3;     
    jQuery("input.category4Button:checkbox").not(":checked").attr("disabled",count4);
	document.getElementById("next5").disabled = !count4;
});
</script>

   <div id="buttonContainer">
     <input type="submit" id="previous3" class="buttonBack" value="<< Previous Category"/>

   <input type="submit" id="next5" class="buttonForward" value="Next Category >>" />
   </div>
</div>   
<div id="categoryFive">
<h1>Architectural Firm of the Year</h1>   
<p>Please choose three from the choices below</p>
<table border = "0">	
    <tr><td><div id="toggle83"><input type="checkbox" id="FieldCat5C" class="category5Button" name="EDA Architects"><a href="viewPage.html" onclick="return popitup('popPages/sRay.html')"><h3><u>EDA Architects</u></h3></div></td></tr>
    <tr><td><div id="toggle82"><input type="checkbox" id="FieldCat5B" class="category5Button" name="FFKR Architects"><a href="viewPage.html" onclick="return popitup('popPages/lReddington.html')"><h3><u>FFKR Architects</u></h3></div></td></tr>
    <tr><td><div id="toggle81"><input type="checkbox" id="FieldCat5A" class="category5Button" name="MHTN Architects"><a href="viewPage.html" onclick="return popitup('popPages/aMcIntyre.html')"><h3><u>MHTN Architects</u></h3></div></td></tr>

</table>
<script>
jQuery("input.category5Button:checkbox").click(function() {
    var count5 = jQuery("input.category5Button[type=checkbox]:checked").length >= 3;     
    jQuery("input.category5Button:checkbox").not(":checked").attr("disabled",count5);
	document.getElementById("next6").disabled = !count5;
});
</script>

   <div id="buttonContainer">
     <input type="submit" id="previous4" class="buttonBack" value="<< Previous Category"/>

   <input type="submit" id="next6" class="buttonForward" value="Next Category >>" />
   </div>
</div> 
<div id="categorySix">
<h1>Contractor of the Year</h1>   
<p>Please choose three from the choices below</p>
<table border = "0">
    <tr><td><div id="toggle101"><input type="checkbox" id="FieldCat6A" class="category6Button" name="Big-D Construction"><a href="viewPage.html" onclick="return popitup('popPages/bigD.html')"><h3><u>Big-D Construction</u></h3></div></td></tr>
    <tr><td><div id="toggle102"><input type="checkbox" id="FieldCat6B" class="category6Button" name="Layton Construction"><a href="viewPage.html" onclick="return popitup('popPages/laytonConst.html')"><h3><u>Layton Construction Company</u></h3></div></td></tr>
    <tr><td><div id="toggle103"><input type="checkbox" id="FieldCat6C" class="category6Button" name="Okland Construction"><a href="viewPage.html" onclick="return popitup('popPages/oakland.html')"><h3><u>Okland Construction Company</u></h3></div></td></tr>

</table>
<script>
jQuery("input.category6Button:checkbox").click(function() {
    var count6 = jQuery("input.category6Button[type=checkbox]:checked").length >= 3;     
    jQuery("input.category6Button:checkbox").not(":checked").attr("disabled",count6);
	document.getElementById("next7").disabled = !count6;
});
</script>

   <div id="buttonContainer">
     <input type="submit" id="previous5" class="buttonBack" value="<< Previous Category"/>

   <input type="submit" id="next7" class="buttonForward" value="Next Category >>" />
   </div>
</div>   
<div id="categorySeven">
<h1>Developer of the Year</h1>   
<p>Please choose two from the choices below</p>
<table border = "0">
	<tr><td><div id="toggle122"><input type="checkbox" id="FieldCat7B" class="category7Button" name="Freeport West Industrial Properties"><a href="viewPage.html" onclick="return popitup('popPages/freeport.html')"><h3><u>Freeport West Industrial Properties</u></h3></div></td></tr>
    <tr><td><div id="toggle121"><input type="checkbox" id="FieldCat7A" class="category7Button" name="Miller Development Company"><a href="viewPage.html" onclick="return popitup('popPages/miller.html')"><h3><u>Miller Development Company</u></h3></div></td></tr>
    
</table>
<script>
jQuery("input.category7Button:checkbox").click(function() {
    var count7 = jQuery("input.category7Button[type=checkbox]:checked").length >= 2;     
    jQuery("input.category7Button:checkbox").not(":checked").attr("disabled",count7);
	document.getElementById("next8").disabled = !count7;
});
</script>

   <div id="buttonContainer">
     <input type="submit" id="previous6" class="buttonBack" value="<< Previous Category"/>

   <input type="submit" id="next8" class="buttonForward" value="Next Category >>" />
   </div>
</div>  
<div id="categoryEight">
<h1>Property Manager of the Year</h1>   
<p>Please choose one from below</p>
<table border = "0">	
    <tr><td><div id="toggle141"><input type="checkbox" id="FieldCat8A" class="category8Button" name="Scott Bennion"><a href="viewPage.html" onclick="return popitup('popPages/sBennion.html')"><h3><u>Scott Bennion RiverPark Corporate Center</u></h3></div></td></tr>

 </table>
 <script>
jQuery("input.category8Button:checkbox").click(function() {
    var count8 = jQuery("input.category8Button[type=checkbox]:checked").length >= 1;     
    jQuery("input.category8Button:checkbox").not(":checked").attr("disabled",count8);
	document.getElementById("next9").disabled = !count8;
});
</script>

   <div id="buttonContainer">
     <input type="submit" id="previous7" class="buttonBack" value="<< Previous Category"/>

   <input type="submit" id="next9" class="buttonForward" value="Next Category >>" />
   </div>
</div> 
<div id="categoryNine">
<h1>Real Estate Attorney of the Year</h1>   
<p>Please choose three from the choices below</p>
<table border = "0">	
	<tr><td><div id="toggle167"><input type="checkbox" id="FieldCat9C" class="category9Button" name="Loyal Hulme"><a href="viewPage.html" onclick="return popitup('popPages/lHulme.html')"><h3><u>Loyal Hulme with Kirton McConkie</u></h3></div></td></tr>
    <tr><td><div id="toggle165"><input type="checkbox" id="FieldCat9A" class="category9Button" name="Scott Sabey"><a href="viewPage.html" onclick="return popitup('popPages/sSabey.html')"><h3><u>Scott Sabey with Fabian Law</u></h3></div></td></tr>
    <tr><td><div id="toggle166"><input type="checkbox" id="FieldCat9B" class="category9Button" name="Victor Taylor"><a href="viewPage.html" onclick="return popitup('popPages/vTaylor.html')"><h3><u>Victor Taylor with Parr Brown Gee & Loveless</u></h3></div></td></tr>
     
 </table>
 <script>
jQuery("input.category9Button:checkbox").click(function() {
    var count9 = jQuery("input.category9Button[type=checkbox]:checked").length >= 3;     
    jQuery("input.category9Button:checkbox").not(":checked").attr("disabled",count9);
	document.getElementById("next10").disabled = !count9;
});
</script>

   <div id="buttonContainer">
     <input type="submit" id="previous8" class="buttonBack" value="<< Previous Category"/>

   <input type="submit" id="next10" class="buttonForward" value="Next Category >>" />
   </div>
</div>  
<div id="categoryTen">
<h1>Commercial Real Estate Banker of the Year</h1>   
<p>Please choose three from the choices below</p>
<table border = "0">
	<tr><td><div id="toggle184"><input type="checkbox" id="FieldCat10E" class="category10Button" name="Brandon Duke"><a href="viewPage.html" onclick="return popitup('popPages/bDuke.html')"><h3><u>Brandon Duke with Zions Bank</u></h3></div></td></tr>
    <tr><td><div id="toggle183"><input type="checkbox" id="FieldCat10C" class="category10Button" name="Jeffrey Holt"><a href="viewPage.html" onclick="return popitup('popPages/jHolt.html')"><h3><u>Jeffrey Holt with Zions Bank</u></h3></div></td></tr>	
    <tr><td><div id="toggle182"><input type="checkbox" id="FieldCat10B" class="category10Button" name="John R. Montgomery"><a href="viewPage.html" onclick="return popitup('popPages/jMontgomery.html')"><h3><u>John R. Montgomery with US Bank</u></h3></div></td></tr>
    <tr><td><div id="toggle185"><input type="checkbox" id="FieldCat10F" class="category10Button" name="Michelle Pearce"><a href="viewPage.html" onclick="return popitup('popPages/mPearce.html')"><h3><u>Michelle Pearce with US Bank</u></h3></div></td></tr>
    <tr><td><div id="toggle181"><input type="checkbox" id="FieldCat10A" class="category10Button" name="Todd Thompson"><a href="viewPage.html" onclick="return popitup('popPages/tThompson.html')"><h3><u>Todd Thompson with Wells Fargo Bank</u></h3></div></td></tr>

</table>
<script>
jQuery("input.category10Button:checkbox").click(function() {
    var count10 = jQuery("input.category10Button[type=checkbox]:checked").length >= 3;     
    jQuery("input.category10Button:checkbox").not(":checked").attr("disabled",count10);
	document.getElementById("next11").disabled = !count10;
	
	if(checkName == 'jhilton'){  //jHilton
	jQuery('#buttonSave').show();
	document.getElementById("buttonSave").disabled = !count10;		
	}
});
</script>

   <div id="buttonContainer">
     <input type="submit" id="previous9" class="buttonBack" value="<< Previous Category"/>
     
     <input type="submit" id="next11" class="buttonForward" value="To the Last Category>>" />
 
   </div>
</div>
 
<div id="categoryEleven">
<h1>Mid Market Real Estate Banker of the Year</h1>   
<p>Please choose three from the choices below</p>
<table border = "0">
	<tr><td><div id="toggle208"><input type="checkbox" id="FieldCat11I" class="category11Button" name="Tom Green"><a href="viewPage.html" onclick="return popitup('popPages/tGreen.html')"><h3><u>Tom Green with Celtic Bank</u></h3></div></td></tr>
    <tr><td><div id="toggle207"><input type="checkbox" id="FieldCat11H" class="category11Button" name="James Hilton"><a href="viewPage.html" onclick="return popitup('popPages/jHilton.html')"><h3><u>James Hilton with Wells Fargo Bank</u></h3></div></td></tr>		
    <tr><td><div id="toggle202"><input type="checkbox" id="FieldCat11B" class="category11Button" name="John Mastakas"><a href="viewPage.html" onclick="return popitup('popPages/jMastakas.html')"><h3><u>John Mastakas with Metro Commercial Finance</u></h3></div></td></tr>
    <tr><td><div id="toggle204"><input type="checkbox" id="FieldCat11E" class="category11Button" name="Sean McCarty"><a href="viewPage.html" onclick="return popitup('popPages/sMcCarty.html')"><h3><u>Sean McCarty with Zions Bank</u></h3></div></td></tr>
    <tr><td><div id="toggle205"><input type="checkbox" id="FieldCat11F" class="category11Button" name="Colton Smith"><a href="viewPage.html" onclick="return popitup('popPages/cSmith.html')"><h3><u>Colton Smith with Marcus & Millichap Capital Corp.</u></h3></div></td></tr>
    <tr><td><div id="toggle203"><input type="checkbox" id="FieldCat11C" class="category11Button" name="David Snow"><a href="viewPage.html" onclick="return popitup('popPages/dSnow.html')"><h3><u>David Snow with Bank of Utah</u></h3></div></td></tr>
    <tr><td><div id="toggle201"><input type="checkbox" id="FieldCat11A" class="category11Button" name="Ryan Speirs"><a href="viewPage.html" onclick="return popitup('popPages/rSpeirs.html')"><h3><u>Ryan Speirs with Zions Bank</u></h3></div></td></tr>  
   
</table>
<script>
jQuery("input.category11Button:checkbox").click(function() {
    var count11 = jQuery("input.category11Button[type=checkbox]:checked").length >= 3;     
    jQuery("input.category11Button:checkbox").not(":checked").attr("disabled",count11);
	jQuery('#buttonSave').show();
	document.getElementById("buttonSave").disabled = !count11;
});
</script>

   <div id="buttonContainer">
     <input type="submit" id="previous10" class="buttonBack" value="<< Previous Category"/>
     
   </div>
</div>   

<div id="voteTally">

<form id="myform" action="stage1Database2.php" method="post">

<input type="hidden" name="userName" value= "<?php echo $username; ?>"

<!--<img src="Images/check.png" width="60" height="60" alt="checkbox">

<input type="submit" id="buttonSave" value="Submit my choices"></br>
<div id="description"></div>
<div id="desc1">
<!--<h3>Category 1 Group</h3>-->
<input type="hidden" id="FieldCat1a" class="btnTextField" name="t1a" size="6">
<input type="hidden" id="FieldCat1b" class="btnTextField" name="t1b" size="6">
<input type="hidden" id="FieldCat1c" class="btnTextField" name="t1c" size="6">
</div>
<div id="desc2">
<!--<h3>Category 2 Group</h3>-->
<input type="hidden" id="FieldCat2a" class="btnTextField" name="t2a" size="6">
<input type="hidden" id="FieldCat2b" class="btnTextField" name="t2b" size="6">
<input type="hidden" id="FieldCat2c" class="btnTextField" name="t2c" size="6">
</div>
<div id="desc3">
<!--<h3>Category 3 Group</h3>-->
<input type="hidden" id="FieldCat3a" class="btnTextField" name="t3a" size="6">
<input type="hidden" id="FieldCat3b" class="btnTextField" name="t3b" size="6">
<input type="hidden" id="FieldCat3c" class="btnTextField" name="t3c" size="6">
</div>

<div id="desc4">
<!--<h3>Category 4 Group</h3>-->
<input type="hidden" id="FieldCat4a" class="btnTextField" name="t4a" size="6">
<input type="hidden" id="FieldCat4b" class="btnTextField" name="t4b" size="6">
<input type="hidden" id="FieldCat4c" class="btnTextField" name="t4c" size="6">
</div>
<div id="desc5">
<!--<h3>Category 5 Group</h3>-->
<input type="hidden" id="FieldCat5a" class="btnTextField" name="t5a" size="6">
<input type="hidden" id="FieldCat5b" class="btnTextField" name="t5b" size="6">
<input type="hidden" id="FieldCat5c" class="btnTextField" name="t5c" size="6">
</div>
<div id="desc6">
<!--<h3>Category 6 Group</h3>-->
<input type="hidden" id="FieldCat6a" class="btnTextField" name="t6a" size="6">
<input type="hidden" id="FieldCat6b" class="btnTextField" name="t6b" size="6">
<input type="hidden" id="FieldCat6c" class="btnTextField" name="t6c" size="6">
</div>
<div id="desc7">
<!--<h3>Category 7 Group</h3>-->
<input type="hidden" id="FieldCat7a" class="btnTextField" name="t7a" size="6">
<input type="hidden" id="FieldCat7b" class="btnTextField" name="t7b" size="6">
<input type="hidden" id="FieldCat7c" class="btnTextField" name="t7c" size="6">
</div>
<div id="desc8">
<!--<h3>Category 8 Group</h3>-->
<input type="hidden" id="FieldCat8a" class="btnTextField" name="t8a" size="6">
<input type="hidden" id="FieldCat8b" class="btnTextField" name="t8b" size="6">
<input type="hidden" id="FieldCat8c" class="btnTextField" name="t8c" size="6">
</div>
<div id="desc9">
<!--<h3>Category 9 Group</h3>-->
<input type="hidden" id="FieldCat9a" class="btnTextField" name="t9a" size="6">
<input type="hidden" id="FieldCat9b" class="btnTextField" name="t9b" size="6">
<input type="hidden" id="FieldCat9c" class="btnTextField" name="t9c" size="6">
</div>
<div id="desc10">
<!--<h3>Category 10 Group</h3>-->
<input type="hidden" id="FieldCat10a" class="btnTextField" name="t10a" size="6">
<input type="hidden" id="FieldCat10b" class="btnTextField" name="t10b" size="6">
<input type="hidden" id="FieldCat10c" class="btnTextField" name="t10c" size="6">
</div>
<div id="desc11">
<!--<h3>Category 11 Group</h3>-->
<input type="hidden" id="FieldCat11a" class="btnTextField" name="t11a" size="6">
<input type="hidden" id="FieldCat11b" class="btnTextField" name="t11b" size="6">
<input type="hidden" id="FieldCat11c" class="btnTextField" name="t11c" size="6">
</div>

</form>
</div>

<div id="sideAlert">
</div>

</center>

</body>
</html>
