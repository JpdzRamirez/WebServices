
$(window).on("load", function () {
  //Activate data table
  $('#userList').DataTable();

  	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});

} );

//LISTENER FOR DELETE BUTTON
/*if(deleteButton.addEventListener){
    deleteButton.addEventListener("click", eliminar,false);
}*/





