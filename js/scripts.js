var target_user_id = 0;
/*delete modal popup on list page*/
function delete_user_popup(user_id){
	console.log(user_id);
	//set the target user id
	target_user_id = user_id;
	//get the modal
	var delete_user_modal = $('#delete-user-modal');
	delete_user_modal.modal();

}

/*delete user*/
function delete_user(){
	//load the page
	window.location = "delete.php?id="+ target_user_id;
}