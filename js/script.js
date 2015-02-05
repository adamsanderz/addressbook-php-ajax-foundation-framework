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
		$(document).on('click','#deleteContact',function(){
		//Show Loader Image
		$('#loaderImage').show();

		//Define variables postdata, that will be submitted as post variable
		var postData = {};
		//Loop through all the data-elements when we don't know no of attributes
		//$.each($(this).data(), function(k,v) {
		//    postData[k] = v;
		//});
		postData[cid] = $(this).data('cid');
        $.ajax({
        	//crossDomain: true,
        	//cache: false,
            type: 'POST',
            url: 'delete_contact.php',
            data: postData,
            //data: {"cid":cid}, 
            //contentType:"application/json; charset=utf-8",
            //dataType: "json",
            success: function (data) {
                console.log(data); //data comming from echo of delete_contact
                showContacts();
            },
            error: function (xhr, reason, ex) {
				var err = $.parseJSON(xhr.responseText);
				if (err != null && xhr.status.toString() != "0") {
					showerror('Error Code : ' + xhr.status + "\nError Message :" + xhr.statusText);
				}
			}
        });
	});
});

//Show Contacts function
function showContacts(){
	console.log('Showing contacts...');
	setTimeout("$('#pageContent').load('contacts.php',function(){$('loaderImage').hide();})",1000);
}