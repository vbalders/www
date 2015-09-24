$(document).ready(function () {
	
	document.getElementById("form-container").style.display = "none";
	var $name=document.getElementById("name");
	$name.onkeyup = function(){
		//console.log($name.value);
		localStorage.setItem('name', $name.value);
		
	}
	var $date=document.getElementById("date");
	$date.onkeyup = function(){
		//console.log($date.value);
		localStorage.setItem('date', $date.value);
		
	}
	var $company=document.getElementById("company");
	$company.onkeyup = function(){
		//console.log($company.value);
		localStorage.setItem('company', $company.value);
		
	}
	if(localStorage.name){
		//console.log("working");
		var $name=document.getElementById("name");
		$name.value = localStorage.name;
		
	}
	if(localStorage.date){
		//console.log("working");
		var $date=document.getElementById("date");
		$date.value = localStorage.date;
		
	}
	if(localStorage.company){
		//console.log("working");
		var $company=document.getElementById("company");
		$company.value = localStorage.company;
		
	}
		
});

function toggle_function(id) {
   var $form=document.getElementById(id);

   if($form.style.display === 'block'){
       $form.style.display = 'none';
   }else{
       $form.style.display = 'block';
   }
      
}
function save_data(){
	var $data_name=document.getElementById("name").value;
	var $data_date=document.getElementById("date").value;
	var $data_company=document.getElementById("company").value;
	//Grab All the data form the fields
	var my_data={
		name : $data_name,
	    date : $data_date,
	    company : $data_company
	};
	//Array
	var json_data=[];
	
	//Check if localstorage exist
	if(localStorage.myjson_data){
		//Grab the old data
		json_data=JSON.parse(localStorage.myjson_data);
	}
	//Push old/new data into the Array
	json_data.push(my_data);
	
	//Format propertly the json
	localStorage.myjson_data= JSON.stringify(json_data);

	//Update the table content
	print_results();
}

function print_results(){
	var $table = document.getElementById("data_table");
	$table.innerHTML ="";
	//Parse the local storage
	if(localStorage.myjson_data){
		var obj = JSON.parse(localStorage.myjson_data);
		//Loop the content(Objects)
		for (var i = 0; i < obj.length; i++){
		    //add Contetn to the table
		    $table.innerHTML += '<tr><td>'+obj[i].name+'</td>'+'<td>'+obj[i].date+'</td>'+'<td>'+obj[i].company+'</td></tr>';
		  
		}
		
	}
	
	
}
function sort_name(){
	event.preventDefault()
	if(localStorage.myjson_data){
		//Grab the old data
		json_data=JSON.parse(localStorage.myjson_data);
	}
	
	json_data.sort(function(a, b) {
		//setup variable of of the ofbejct name 
    	var nameA=a.name.toLowerCase(), nameB=b.name.toLowerCase();
    	//comper to string values to check which one nned to go first
		 if (nameA < nameB){ 
			  return -1 
			 } 
		 
		 if (nameA > nameB){
			  return 1
		 }
		 
		 return 0 //default return value (no sorting)
	});
	console.log(json_data);
	localStorage.myjson_data= JSON.stringify(json_data);
	var $table=document.getElementById("data_table");
	//Parse the local storage
	$table.innerHTML ="";
	var obj = JSON.parse(localStorage.myjson_data);
	//Loop the content(Objects)
	for (var i = 0; i < obj.length; i++){
	    //add Contetn to the table
	    $table.innerHTML += '<tr><td>'+obj[i].name+'</td>'+'<td>'+obj[i].date+'</td>'+'<td>'+obj[i].company+'</td></tr>';
	  
	}
}
function sort_date(){
	event.preventDefault();
	if(localStorage.myjson_data){
		//Grab the old data
		json_data=JSON.parse(localStorage.myjson_data);
	}
	
	json_data.sort(function(a, b) {
		//setup variable of of the ofbejct name 
		var dateA=new Date(a.date), dateB=new Date(b.date)
		return dateA-dateB
	});
	console.log(json_data);
	localStorage.myjson_data= JSON.stringify(json_data);
	var $table=document.getElementById("data_table");
	//Parse the local storage
	$table.innerHTML ="";
	var obj = JSON.parse(localStorage.myjson_data);
	//Loop the content(Objects)
	for (var i = 0; i < obj.length; i++){
	    //add Contetn to the table
	    $table.innerHTML += '<tr><td>'+obj[i].name+'</td>'+'<td>'+obj[i].date+'</td>'+'<td>'+obj[i].company+'</td></tr>';
	  
	}
}
    //console.log(localStorage.myjson_data);
function save_data_array(){
	var data_lab=[];
	var obj = JSON.parse(localStorage.myjson_data);
	//Loop the content(Objects)
	for (var i = 0; i < obj.length; i++){
	    //add Contetn to the table
	    data_lab.push({
		  id: i,
		  name: obj[i].name,
		  date: obj[i].date,
		  company: obj[i].company
		});
	   //document.getElementById("placeholder").innerHTML=data.users[0].firstName + " " + data.users[0].lastName+" "+ data.users[0].joined;
	   console.log(obj[i].name);
	   console.log(obj[i].date);
	   console.log(obj[i].company);
	  
	}
	jsonTestList = JSON.stringify(data_lab);
	//console.log(jsonTestList);
}
function getValues(){
             $.ajax({
                url: 'data.json',
                type: 'get',
                dataType: 'json',
                cache: false,
                async:true,
                 success: function( resp ) {
	                 localStorage.myjson_data= JSON.stringify(resp);
	                 var obj = JSON.parse(localStorage.myjson_data);
	                 //print_results();
				     console.log(obj);
				  }
                });
               
 };
//Wati to the html elemnts are ready
setTimeout(function() {
		
        print_results();// Print the content inside the table
    }, 1000);
    
setInterval(function(){
    getValues(); // this will run after every 5 seconds
}, 5000);

save_data_array();
getValues();


        