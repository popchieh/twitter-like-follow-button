function follow_add(author_id) {
	$.post('follow_add.php', {Author_id:author_id}, function(data) {
		if(data === ' success') {
			follow_get(author_id);
		} else {
			alert('error: '+data);
		}
	});
}

function follow_get(author_id) {
	$('#follow').text("following");
	$('#follow').attr("onclick", "follow_cancel("+author_id+");");
	$('#follow').attr("onmouseover", "mouseover();");
	$('#follow').attr("onmouseout", "mouseout();");		
	$("#follow").attr('class', 'btn btn-success');
}

function follow_cancel(author_id) {
	$.post('follow_cancel.php', {Author_id:author_id}, function(data) {
		if(data === ' success') {
			follow_get_cancel(author_id);
		} else {
			alert('error: '+data);
		}
	});
}

function follow_get_cancel(author_id) {
	$('#follow').text("follow");
	$('#follow').attr("onclick", "follow_add("+author_id+");");
	$('#follow').attr("onmouseover", "");
	$('#follow').attr("onmouseout", "");
	$("#follow").attr('class', 'btn btn-info');
}

function mouseover() {
$("#follow").text("unfollow");
$("#follow").attr('class', 'btn btn-danger');
}
function mouseout() {
$("#follow").text("following");
$("#follow").attr('class', 'btn btn-success');
} 