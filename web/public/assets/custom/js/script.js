$(function(){
	
	var note = $('#note'),
		ts = new Date("01 20 2020 00:00:00"),
		newYear = false;
	
	if((new Date()) > ts){
		// The new year is here! Count towards something else.
		// Notice the *1000 at the end - time must be in milliseconds
		ts = (new Date()).getTime() + 10*24*60*60*1000;
		newYear = true;
	}
		
	$('#countdown').countdown({
		timestamp	: ts,
		callback	: function(days, hours, minutes, seconds){
			
			var message = "";
			
			message += days + " дней" + ( days==1 ? '':' ' ) + " ";
			message += hours + " часов" + ( hours==1 ? '':' ' ) + " ";
			message += minutes + " минуты" + ( minutes==1 ? '':' ' ) + " и ";
			message += seconds + " секунд" + ( seconds==1 ? '':' ' ) + " <br />";

			note.html(message);
		}
	});
	
});
