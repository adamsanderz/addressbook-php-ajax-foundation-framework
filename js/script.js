$(document).ready(function(){
	//Show Loader Image
	$('#loaderImage').show();

	//show Contacts on page load
	showContacts();
});

//Show Contacts function
function showContacts(){
	console.log('Showing contacts...');
	setTimeout("$('#pageContent').load('contacts.php',function(){$('loaderImage').hide();})",1000);
}