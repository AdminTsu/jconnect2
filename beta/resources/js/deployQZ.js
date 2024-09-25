/*
http://kimci2.kemas.co.ferdian/assembly/barcode
*/

deployQZ();
//alert(getPath());
				
function getPath() {
	var path = window.location.href;
	return path.substring(0, path.lastIndexOf("/")) + "/";
}

function deployQZ() {
	var attributes = {id: "qz", code:'qz.PrintApplet.class', 
		archive:'/qz-print.jar', width:1, height:1};
	var parameters = {jnlp_href: '/java/qz-print_jnlp.jnlp', 
		cache_option:'plugin', disable_logging:'false', 
		initial_focus:'false'};
		//alert(deployJava.versionCheck("1.7+"));
	if (deployJava.versionCheck("1.7+") == true) {}
	else if (deployJava.versionCheck("1.6+") == true) {
		attributes['archive'] = '/java/jre6/qz-print.jar';
		parameters['jnlp_href'] = '/java/jre6/qz-print_jnlp.jnlp';
	}
	deployJava.runApplet(attributes, parameters, '1.5');
}
	
//* Automatically gets called when applet has loaded.
function qzReady() {
	// Setup our global qz object
	window["qz"] = document.getElementById('qz');
	var title = document.getElementById("title");
	if (qz) {
		try {
			alert('applet version : ' + qz.getVersion());
			//title.innerHTML = title.innerHTML + " " + qz.getVersion();
			//document.getElementById("content").style.background = "#F0F0F0";
		} catch(err) { // LiveConnect error, display a detailed meesage
			//document.getElementById("content").style.background = "#F5A9A9";
			alert("ERROR:  \nThe applet did not load correctly.  Communication to the " + 
				"applet has failed, likely caused by Java Security Settings.  \n\n" + 
				"CAUSE:  \nJava 7 update 25 and higher block LiveConnect calls " + 
				"once Oracle has marked that version as outdated, which " + 
				"is likely the cause.  \n\nSOLUTION:  \n  1. Update Java to the latest " + 
				"Java version \n          (or)\n  2. Lower the security " + 
				"settings from the Java Control Panel.");
	  }
  }
}
	
function notReady() {
	// If applet is not loaded, display an error
	if (!isLoaded()) {
		return true;
	}
	// If a printer hasn't been selected, display a message.
	else if (!qz.getPrinter()) {
		alert('Please select a printer first by using the Detect Printer button.');
		return true;
	}
	return false;
}

//window.onload=jvCetak();

function isLoaded() {
	if (!qz) {
		alert('Error:\n\n\tPrint plugin is NOT loaded!');
		return false;
	} else {
		try {
			if (!qz.isActive()) {
				alert('Error:\n\n\tPrint plugin is loaded but NOT active!');
				return false;
			}
		} catch (err) {
			alert('Error:\n\n\tPrint plugin is NOT loaded properly!');
			return false;
		}
	}
	return true;
}

