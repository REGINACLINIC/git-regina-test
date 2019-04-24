/**********************************************************************
AMN : xxxxxxxxxxxxxx [ popup.js ]

2007.05.24
***********************************************************************
a variable : -
a function : open_xxxx
**********************************************************************/

/*=============================================
 open_popup()
=============================================*/
function open_popup(vstrUrl,vstrName,vintWid,vintHgt) {
	var strOpt = 'toolbar=no,location=no,directories=no,status=no,scrollbars=no,menubar=no,resizable=yes,width=' + vintWid + ',height=' + vintHgt;
	var objWin = window.open(vstrUrl, vstrName, strOpt);
	objWin.focus();
}

/*=============================================
 open_blank()
=============================================*/
function open_blank(vstrUrl) {
	var strOpt = 'toolbar=yes,location=yes,directories=yes,status=yes,scrollbars=yes,menubar=yes,resizable=yes';
	var objWin = window.open(vstrUrl, '_blank', strOpt);
	objWin.focus();
}

/*********************************************************************/

