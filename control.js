function logOut() {

	var del_cookie = confirm('Are you sure want to log out');

	if(del_cookie) {

		document.cookie = "user=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
		window.location = 'http://localhost/Ecommerce%20website%20--%20doSoDeal/index.php';
		document.cookie.split(";").forEach(function(c) {
			document.cookie = c.replace(/^ +/, "").replace(/=.*/, "=;expires=" + new Date().toUTCString() + ";path=/"); 
		});
	}
}

if (window.location.search.indexOf('valid=invalid') > -1) {
	alert('invalid Email id or Password');
	window.location = '/Ecommerce%20website%20--%20doSoDeal/index.php';
}

$(document).ready(function() {

	$('#plus').click(function() {
		var countingNo = $('#noOfProducts').val();
		$('#productCount').html('('+countingNo+')');

		var price = $('#hidden_price').html();


		var iprice = price * countingNo;

		var nf = new Intl.NumberFormat();
		nf.format(iprice);
		// iprice.toLocaleString();
		// numberWithCommas(iprice);
		// alert(iprice);

		$('#price').html(iprice);
		function numberWithCommas(x) {
			var parts = x.toString().split(".");
			parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
			return parts.join(".");
		}
	});

});

//side navigation bar

$(document).ready(function () {

	$("#sidebar").mCustomScrollbar({
		theme: "minimal"
	});

	$('#dismiss, .overlay').on('click', function () {
		$('#sidebar').removeClass('active');
		$('.overlay').removeClass('active');
	});

	$('#sidebarCollapse').on('click', function () {
		$('#sidebar').addClass('active');
		$('.overlay').addClass('active');
		$('.collapse.in').toggleClass('in');
		$('a[aria-expanded=true]').attr('aria-expanded', 'false');
	});
});

function createAccount() {

	$('#signUp').click();
	$('#loginClose').click();

}

function validate() {

	var pswd1 = $('#inputPassword1').val();
	var pswd2 = $('#inputPassword2').val();

	if(pswd1 != pswd2) {
		alert('Password is not matched');
		return false;
	}
	else {
		return true;
	}

}

// place order

function placeOrder() {

	var productDataD = getCookie('user');

	if(productDataD != '') {

		var unique_order_id = Date.now();

		window.location = 'payment.php?order_id='+unique_order_id;
	}

	else {

		$('#logInBtn').click();
	}
}


function getCookie(cname) {

	var name = cname + "=";
	var decodedCookie = decodeURIComponent(document.cookie);
	var ca = decodedCookie.split(';');

	for(var i = 0; i < ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0) == ' ') {
			c = c.substring(1);
		}
		if (c.indexOf(name) == 0) {
			return c.substring(name.length, c.length);
		}
	}

	return "";
}

// delete product

var currentCartValue = parseInt(getCookie('currentCartValue'));

function removeProduct(Cid,Ccat) {

	var del_cookie = confirm('Are you sure want remove product');

	if(del_cookie) {

		document.cookie = "PidAndCartName["+Cid+"f"+Ccat+"]=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
		
		currentCartValue--;

		document.cookie = 'currentCartValue=' + currentCartValue + ';' + ';path=/';
		
		window.location = '';

	}
}

var cookieRegistry = [];

function listenCookieChange(cookieName, callback) {
    setInterval(function() {
        if (cookieRegistry[cookieName]) {
            if (readCookie(cookieName) != cookieRegistry[cookieName]) {
                // update registry so we dont get triggered again
                cookieRegistry[cookieName] = readCookie(cookieName);
                return callback();
            }
        } else {
            cookieRegistry[cookieName] = readCookie(cookieName);
        }
    }, 100);
}


function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

listenCookieChange('cookiename', function() {
    Location.reload();
});

window.onload = '';