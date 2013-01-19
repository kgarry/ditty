/**
* #Desc declare weak globals
**/


/**
* @Desc loader/controller
* @Param  parts     An array of content chunks to grab
* @Param  parentID  An HTML DOM id to place returned payload into
* @Todo   Protect against recursion, Error handling
**/
function paintWires(part, parentId) {
	var target = "http://ditty.iocurve.com/parts/" + part;
	var clnPart = part.replace(".", "_");

//if (args == '') { }
//var argsArr = 

//var key = argsArr[0];
//var val = argsArr[1];
//var argsFin = {key: val};


	$("#" + parentId).empty();
	$("#" + parentId).append("<div class='" + clnPart + "' id='" + clnPart + "'></div>");

	$("#" + clnPart).load(target);//, argsFin);
} // end - func paintWires
