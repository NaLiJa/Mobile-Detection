This plugin comes with the most common devices and os systems for modern mobile web developers. It's inspired by html5boilerplate (it's using ie classes for the html tag) and jquery's  $.browser extension.

### Detect retina displays
You can detect if your device has a display with a double pixel ratio (Like Apple's retina).

+ $.mob.retinaHD(); // returns boolean (devicePixelRation == 3)
+ $.mob.retina(); // returns boolean (devicePixelRation == 2)
+ $.mob.halfretina(); // returns boolean (devicePixelRation > 1 && < 2)

### Detect standalone web applications
Detect if your web application is running in standalone mode or in safari

+ $.mob.standalone();  // returns boolean

### Detect orientation
You can detect the orientation of your device.

+ $.mob.orientation(); // returns 'portrait' or 'landscape' as string
+ $.mob.portrait(); // returns boolean
+ $.mob.landscape(); // returns boolean

### Detect your device
You can detect several devices. All detections returns a boolean. All functions are added to the 'mob' object.
You can detect the following devices:

+ iPhone 			: $.mob.iphone();
+ iPad  			: $.mob.ipad();
+ iPod 				: $.mob.ipod();
+ Nokia				: $.mob.nokia();
+ Google Nexus 		: $.mob.nexus();
+ HTC 				: $.mob.htc();
+ Samsung			: $.mob.samsung();
+ Blackberry		: $.mob.blackberry();
+ HTC				: $.mob.htc();
+ Acer				: $.mob.acer();
+ Sony				: $.mob.sony();
+ Motorola			: $.mob.motorola();
+ LG				: $.mob.LG();
+ Lenovo			: $.mob.lenovo();
+ Huawei			: $.mob.huawei();

### Detect your OS
You can detect several Operating systems. All detections returns a boolean. All functions are added to the 'mob' object. Android and iOS subversions are no longer seperate functions.
You can detect the following Operating systems:

+ iOs (all)			: $.mob.ios();
+ iOs 5				: $.mob.ios('5');
+ iOs 6				: $.mob.ios('6');
+ iOs 7				: $.mob.ios('7');
+ iOs 8				: $.mob.ios('8');
+ Android (all)		: $.mob.android();
+ Android 2         : $.mob.android('2.1');
+ Android 3			: $.mob.android('3');
+ Android 4			: $.mob.android('4');
+ Android 4			: $.mob.android('5');
+ Windows Phone 7	: $.mob.windowsphone7();
+ Windows Phone 8	: $.mob.windowsphone8();

### Detect your mobile browser
You can detect several Mobile browsers. All detections returns a boolean. All functions are added to the 'mob' object.
You can detect the following Browsers:

+ Opera Mini		: $.mob.operamini();
+ Webkit			: $.mob.webkit();
+ Firefox			: $.mob.firefox();
+ IE Mobile			: $.mob.iemobile();
+ IE Mobile	9		: $.mob.iemobile9();
+ IE Mobile	10		: $.mob.iemobile10();
+ IE Mobile	11		: $.mob.iemobile11();

### Detect basics
You can detect almost everything but if you're only interested in the function to check if a user uses a touch device or a smartphone you can use this:

+ Any SmartPhone	: $.mob.anysmartphone();
+ Touch				: $.mob.touchdevice();

### Add your device, browser and os classes
Like in html5boilerplate where you get extra classes for the classic IE browsers you can add classes for mobile devices and operating systems into your html tag
It's done with just one extra line of code.

+ $.mob.addClasses(); 

### add browser, OS & Device classes but also a class called "retina" (when you have a retina display) to your html tag and a class standalone (when in fullscreen mode on ios).
$.mob.addClasses(); 

### add OS class(es)
$.mob.addOSClass();

### add Device class(es)
$.mob.addDeviceClass();

### add Browser class(es)
$.mob.addBrowserClass();

### There is also a php class with the major checks

<pre>
	
	// phpcode

	$mobile = new MobileDetection();
	if($mobile -> ios(7)) :
		// do iOS 7 stuff
	else :
		// do other or old iOS stuff;
	endif;
	
</pre>

### The WordPress plugin

The WordPress plugin automatic instantiates the class.

<pre>
	
	// phpcode
	
	// in your theme use:
	global $mobile;
	
	if($mobile -> ios(7)) :
		// do iOS 7 stuff
	else :
		// do other or old iOS stuff;
	endif;
	
</pre>

### php methods
+ $mobile -> iPad(); // returns boolean
+ $mobile -> iPhone(); // returns boolean
+ $mobile -> iPod(); // returns boolean
+ $mobile -> iOS($version); // param $version = 5,6,7 or 8 (not mandatory) - returns boolean 
+ $mobile -> android($version); // param $version = 2, 3 or 4 (not mandatory) - returns boolean
+ $mobile -> blackberry(); // returns boolean
+ $mobile -> windowsPhone7(); // returns boolean
+ $mobile -> windowsPhone8(); // returns boolean
+ $mobile -> ieMobile9(); // returns boolean
+ $mobile -> ieMobile10(); // returns boolean
+ $mobile -> ieMobile11(); // returns boolean
+ $mobile -> operaMini(); // returns boolean
+ $mobile -> firefox(); // returns boolean
+ $mobile -> webkit(); // returns boolean
+ $mobile -> retinaHD(); // returns boolean  | true when devicePixelRation == 3
+ $mobile -> retina(); // returns boolean  | true when devicePixelRation == 2
+ $mobile -> halfretina(); // returns boolean  | true when devicePixelRation > 1 && < 2

### Native javascript version

<pre>
	
	// js script

	var mobile = new MobileDetection();
	if(mobile.ios('7')) {
		// do iOS 7 stuff	
	} else {
		// do other or old iOS stuff;
	}

</pre>
