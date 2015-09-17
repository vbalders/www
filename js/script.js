$(document).ready(function () {
	
	document.getElementById("form-container").style.display = "none";
	
	
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
	var $table=document.getElementById("data_table");
	//Parse the local storage
	var obj = JSON.parse(localStorage.myjson_data);
	//Loop the content(Objects)
	for (var i = 0; i < obj.length; i++){
	    //add Contetn to the table
	    $table.innerHTML += '<tr><td>'+obj[i].name+'</td>'+'<td>'+obj[i].date+'</td>'+'<td>'+obj[i].company+'</td></tr>';
	  
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
//Wati to the html elemnts are ready
setTimeout(function() {
		// Print the content inside the table
        print_results();
    }, 1000);
    
    //console.log(localStorage.myjson_data);
