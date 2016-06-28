// app.js
(function () {


function storageAvailable(type) {
	try {
		var storage = window[type],
			x = '__storage_test__';
		storage.setItem(x, x);
		storage.removeItem(x);
		return true;
	}
	catch(e) {
		return false;
	}
}

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length,c.length);
        }
    }
    return "";
}

function getLastVisitDate() {
	var date = moment().format("MM-DD-YYYY HH:mm:ss");
	var retDate = null;
	if (storageAvailable('localStorage')) { // use localstorage
		var storage = window['localStorage'];
		var lastVisit = storage.getItem("lastVisit");
		if (lastVisit === null) {
			// first visit to the site
			storage.setItem("lastVisit", date);
			return "";
		} else {
			// grab and return the last visited date
			retDate = lastVisit;
			// update the date stored in localstorage to now
			storage.setItem("lastVisit", date);
			return retDate;
		}
	} else { // use cookies
		var lastVisit = getCookie("lastVisit");
		if (lastVisit == "") {
			// first visit
			setCookie("lastVisit", date, 365); // lasts for 1 year
			return "";
		} else {
			// grab and return last visited date
			retDate = lastVisit;
			// update the date stored in cookie to now
			setCookie("lastVisit", date);
			return retDate;
		}
	}
}

function getRSS() {
	// ajax request for RSS feeds
	// ! insert all stories into one data structure !
	// sort Stories by publish date, descending
	
}

function loginSuccess() {
	$("#signin_modal").hide();
	$("#createaccount_modal").hide();
	$(".rss").show();
}

$(document).ready(function() {

	// show/hide the last visited date
	if (getLastVisitDate() !== "") {
		$("#dateFooter").append("Your last visit was on " + getLastVisitDate());
	}

	// show/hide control for login.
	$(".signin").click(function() {
		$("#initial_modal").hide();
		$("#createaccount_modal").hide();
		$("#signin_modal").show();
	});

	// show/hide control for account create.
	$(".createacc").click(function() {
		$("#initial_modal").hide();
		$("#signin_modal").hide();
		$("#createaccount_modal").show();
	});

	// Handle signing in
	$("#signinForm").submit(function(event) {
		var form_data = $(this).serialize();
		var req = $.post("login.php", form_data, function(data) {
			console.log(data);
			if (data.success == true) {
				alert(data.message);
				loginSuccess();
			} else {
				alert(data.message);
			}
		});
		event.preventDefault();
	});

	// Handle account creation
	$("#createaccForm").submit(function(event) {
		var form_data = $(this).serialize();
		var req = $.post("create_account.php", form_data, function(data) {
			console.log(data);
			if (data.success == true) {
				alert(data.message);
				loginSuccess();
			} else {
				alert(data.message);
			}
		});
		event.preventDefault();
	});
});

})();