$(document).ready(function(){
	//Show Loader Image
	$('#loaderImage').show();

	//show Contacts on page load
	showContacts();

	//Add contacts
	$(document).on('submit','#addContact',function(){
		//Show Loader Image
		$('#loaderImage').show();

		//post data from form
		$.post('add_contact.php',$(this).serialize())
			.done(function(data){
				console.log(data);
				$('#addModal').foundation('reveal','close');
				showContacts();
			});
			return false;
	});

	//Edit contact
	$(document).on('submit','#editContact',function(){
		//Show Loader Image
		$('#loaderImage').show();

		//Post data from form
		$.post("edit_contact.php",$(this).serialize())
			.done(function(data){
				console.log(data);
				$('.editModal').foundation('reveal','close');
				showContacts();
			});
			return false;
	});

	//Delete contact
		//Edit contact
	$(document).on('click','#deleteContact',function(){
		//Show Loader Image
		$('#loaderImage').show();

		//Define variables
		var link = $("#deleteRecord");
		var formData = new FormData();
    
	    // perform validations
    
    	// append to formData
		formData.append("contact_id", link.attr("data-contact-id");

		//Post data from form
		$.post("delete_contact.php",formData.serialize())
			.done(function(data){
				console.log(data);
				showContacts();
			});
			return false;
	});
});

//Show Contacts function
function showContacts(){
	console.log('Showing contacts...');
	setTimeout("$('#pageContent').load('contacts.php',function(){$('loaderImage').hide();})",1000);
}