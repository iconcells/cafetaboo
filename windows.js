var Windows = window.Windows;


// Check for the Windows namespace
if(Windows) {

	console.log("Success: Windows namespace is detected");

	// Create references to Windows namespaces
	var appLifecycle = Windows.UI.WebUI.WebUIApplication,
		notifications = Windows.UI.Notifications,
		// Create references toast object
		template = notifications.ToastTemplateType.toastImageAndText01,
		toastXml = notifications.ToastNotificationManager.getTemplateContent(template),
		toastTextElements = toastXml.getElementsByTagName("text"),
		toastImageElements = toastXml.getElementsByTagName("image"),
		toastNode = toastXml.selectSingleNode("/toast"),
		launchAttribute = toastXml.createAttribute("launch"),
		// Application variables
		isLaunchedFromToast;

	// Set toast options
	toastTextElements[0].appendChild(toastXml.createTextNode("Free beer at 5pm!!"));
	toastImageElements[0].setAttribute("src", "http://104.131.129.91/logo.png");
	toastImageElements[0].setAttribute("alt", "notification graphic");
	toastNode.setAttribute("duration", "long");
	toastNode.attributes.setNamedItem(launchAttribute);
	launchAttribute.value = "{\"toast\":\"12345\"}";
	// https://msdn.microsoft.com/en-us/library/windows/apps/hh761468.aspx - activate from toast
	// https://msdn.microsoft.com/en-us/library/windows/apps/hh465448.aspx - create toast

	// App container is suspending
	appLifecycle.addEventListener("suspending", function(/*args*/){
		//Show a notification on exit
		if(!isLaunchedFromToast) {
			showToast();
		} else {
			
		}
	});

	// App container is activated
	appLifecycle.addEventListener("activated", function(args){
		//Respond to notification activation
		console.log("App Activated");
		console.log("isLaunchedFromToast?: " + args.arguments.indexOf("toast"));
		//document.write(launchString);
		if(args.kind === Windows.ApplicationModel.Activation.ActivationKind.launch) {
			//Check for launch data

			if(args.arguments.indexOf("toast") !== -1) {
				isLaunchedFromToast = true;
			} else {
				isLaunchedFromToast = false;
			}
		}
	});


} else {
	console.log("Error: Windows namespace is NOT detected");
}

// Show the toast notification on Windows
function showToast(){ // jshint ignore:line
	var currentTime = new Date();
	var startTime = new Date(currentTime.getTime() + 3 * 1000);

	var scheduledToast = new Windows.UI.Notifications.ScheduledToastNotification(toastXml, startTime);
	var toastNotifier = Windows.UI.Notifications.ToastNotificationManager.createToastNotifier();
	toastNotifier.addToSchedule(scheduledToast);
}