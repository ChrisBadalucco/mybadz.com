// JavaScript Document

function checkSearch(){
	var option = document.getElementById('example');
	var x;
	var flag = false;
	
	if(option.value != ""){
		for ( x in arr ){
			if (option.value == arr[x]){
				getLink( x );
				flag = true;
				break;	
			}
		}
		if(!flag){
			getLink( 1 );
		}
	}
	else {
		alert("Would you please enter some text?");
	}
}


function onEnter(e){
	if(e.keyCode == 13){
		checkSearch();	
	}
}


function pause(millis){
	var date = new Date();
	var curDate = null;
	do { curDate = new Date(); }
	while(curDate-date < millis)
}


function getLink( value ){
	var index = value;
	var url = "";
	if(index == 1){
		url = "img/ninja.jpg";
	}
	else if ((index > 0) && (index < 15)){	
		url = "img/premed.jpg";
	}
	else if ((index > 14) && (index < 30)){
		url = "img/business.jpg";
	}
	else if (( index > 29 ) && ( index < 45 )){
		url = "img/prelaw.jpg";
	}
	else if (( index > 44 ) && ( index < 60 )){
		url = "img/vet.jpg";
	}
	else if (( index > 59 ) && ( index < 75 )){
		url = "img/communications.jpg";
	}
	else if (( index > 74 ) && ( index < 91 )){
		url = "img/creativearts.jpg";
	}
	else if (( index > 90 ) && ( index < 105 )){
		url = "img/cjustice.jpg";
	}
	else if (( index > 105 ) && ( index < 121 )){
		url = "img/physicaltherapy.jpg";
	}
	else if (( index > 120 ) && ( index < 136 )){
		url = "img/pharmacy.jpg";
	}
	else if ( index > 135 ){
		url = "img/ninja.jpg";
	}


	
	$("#searchbutton").attr("onClick", "");
	document.form.example.disabled=true;
	$('#major').fadeOut(2000, function(){
		document.getElementById('img_dis').src=url;
	});
	$('#major').fadeIn(2000, function(){
		$("#searchbutton").attr("onClick", "checkSearch()");
		document.form.example.disabled=false;
	});
		
}
	