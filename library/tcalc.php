<?php


function tcalc() {
	return <<<HTML
<!--Begin Calculators Script-->
<!--Begin Speed Bump-->
<script language="JavaScript" type="text/javascript">
function SiteMigrationAlert(TVSURL)
{
 var Notice = "This website provides these links as a convenience. ";
 Notice += "This website has no control over the linked websites or the content therein. ";
 Notice += "As such, This website has no liability arising out of linking to these websites ";
 Notice += "and the existence of such links does not constitute endorsement by this website.";

 if (confirm(Notice)) {window.open(TVSURL);}
 else {return false;}
}
</script>
<!--End Speed Bump-->


<!--Begin Send To Friend-->
<a href="mailto:?subject=financial calculators" id="tvcMailToLinkId">
	<img src="https://www.timevaluecalculators.com/timevaluecalculators/images/email_icon.png" title="Email this to a friend" alt="Email page" />
</a>
<script language="JavaScript" type="text/javascript">
	var tvcMailToSubject;
	var tvcMailToBody; 
	var tvcQueryString = unescape(document.location.search);
	var tvcMailToLinkElement = document.getElementById('tvcMailToLinkId');
	if (tvcMailToLinkElement) {
		if (tvcQueryString.indexOf("CALCULATORID") == -1)		/* If we are displaying the list of calculators, just put the current location in the body. */
		{
			tvcMailToSubject = 'financial calculators';
			tvcMailToBody = 'Hello,%0A%0ATake a look at these online financial calculators.%0A%0A' + escape(document.location.href + '\n\n');
		}
		else		/* If we are displaying a calculator, add the actual calculation to the body. */
		{
			tvcMailToSubject = 'financial calculation';
			tvcMailToBody = 'Hello,%0A%0ATake a look at this online financial calculation.%0A%0A' + escape(document.location.href + '\n\n');
		}
		tvcMailToLinkElement.href = 'mailto:?subject=' + tvcMailToSubject + '&body=' + tvcMailToBody;
	}
</script>
<!--End Send To Friend-->

<!--Begin Print This-->
<a href="javascript:window.print();" id="tvcPrintThisLinkId">
<img src="https://www.timevaluecalculators.com/timevaluecalculators/images/print_icon.png" title="Print this page"  alt="Print page" />
</a>
<!--End Print This-->
<!--Begin Calculators Main Content-->
<link rel="StyleSheet" type="text/css" href="https://www.TimeValueCalculators.com/timevaluecalculators/Includes/tvcDefaultStyles.css" />
<script language="JavaScript" src="https://www.TimeValueCalculators.com/timevaluecalculators/Includes/tvcClientSideFunctions.js" type="text/javascript"></script>
<div id="tvcMainCalculatorDivId" class="cTimeValue">
	<script type="text/javascript" language="JavaScript">
		TEMPLATE_ID = "WWW.CUTTINGEDGEFCU.ORG_1";
		CALCULATORID = "";
		PASSTHROUGH = "";
		/* If you need to modify our calculator HTML after it has loaded, define a function and assign it to tvcAfterCalculatorsHaveLoadedFnc.  */
		/* For example: tvcAfterCalculatorsHaveLoadedFnc = yourCallbackFnc() { var ele = document.getElementById('tvcPC01TitleId'); if (ele !== null) {ele.innerHTML = "How much can I afford?"; }} */

		var tvcScriptElement = document.createElement('script');
		var tvcCalculatorHtml = "";
		var tvcHttp;
		if (document.location.href.substring(0, 5) == "https") { tvcHttp = "https://"; } else { tvcHttp = "http://"; }
		tvcScriptElement.src = tvcHttp + "www.TimeValueCalculators.com/timevaluecalculators/Calculator2.aspx?version=" + Math.random() + "&" + createQueryString();
		tvcScriptElement.onload = tvcOnceLoaded;
		document.getElementById('tvcMainCalculatorDivId').appendChild(tvcScriptElement);
	</script>
</div>
<!--End Calculators Main Content-->
<!--End Calculators Script-->
HTML;
}
add_shortcode( 'tcalc', 'tcalc' );

