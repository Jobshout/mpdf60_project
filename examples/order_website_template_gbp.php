<?php
$watermarkTxt='Website: Tenthmatrix Order';

$html = '
<style>
body {
	font-family: arial;
	font-size: 8pt;
	padding :0; margin: 0;
}
.row{
	clear:both;
	overflow:hidden;
}

.col1, .col2, .col3, .col4, .col5, .col6{
	float:left;
	width:40%
}
h1, h2, h3, h4, h5, h6 {
padding: 0;
margin : 0;
}
.floatleft{
	float:left;
}

.floatright{
	float:right;
}
.main_heading { 
	position: absolute; 
	color: #666666;
	overflow: visible; 
	left: 55; 
	top: 40; 
	padding-bottom: 10px; 
	font-family:sans; 
	font-size: 26px;
	margin: 0;
}
.billtodetails{
	padding-top: 1em;
	padding-left:1em; margin-bottom: 0pt; width: 40%;
	border:1pt solid #000; 
	background-color: #EEEEEE;
}

td { vertical-align: top; }
.items td {
    border-left: 0.1mm solid #000000;
    border-right: 0.1mm solid #000000;
}

table thead td { background-color: #EEEEEE;
    text-align: center;
    border: 0.1mm solid #000000;
}
.items td.blanktotal {
    background-color: #FFFFFF;
    border: 0mm none #000000;
    border-top: 0.1mm solid #000000;
    border-right: 0.1mm solid #000000;
}
.items td.totals {
    text-align: right;
    
    border: 0.1mm solid #333333;
}
.bankDetails
{
	background-color: #FFF;
	border-collapse: collapse; 
	border: 1px solid #827F85;
	margin: 4pt 0pt 0pt 0pt;
}
.bankDetails td 
{
     border: 1px solid #827F85;
}
.bankDetails thead td 
{ 
	background-color: #00A3D3;
	text-align: center;
	color:#FFF;
	font-size: 12pt;
	text-align: center;
	font-family:Verdana, Geneva, sans-serif;
}
</style>

<body>
<div class="row">
<div class="col1">
<div class="main_heading">Estimated upgrade costs (Interspire MySQL fails)</div>
</div>
<div class="col2 floatright">
<img src="jobshout.png" width="190" /><br><h4>Tenthmatrix Information Systems Ltd.</h4>
The Coach House, 77A Marlowes, Hemel Hempstead<br />Herts, HP1 1LF<br />Tel: 44 1442 384 149<br />Email: billing@tenthmatrix.co.uk</div>
</div>

<htmlpagefooter name="myfooter">
<div style="border-top: 1px solid #333333; font-size: 9pt; text-align: center; padding-top: 1mm; ">
Page {PAGENO} of {nb}
</div>
</htmlpagefooter>

<sethtmlpageheader name="myheader" value="on" show-this-page="1" />
<sethtmlpagefooter name="myfooter" value="on" />

<div class="row" style="margin-top:10pt;">
<div class="col1 billtodetails">
<h4><b>Bill To:</b></h4>
Client Name here<br /> Accounts Payable<br />1 Blue Street<br />London, post code<br /><br />
</div>

<div class="col2 floatright">
<table width="100%" style="border-collapse: collapse; font-family: sans; border: 1px solid #333333;" cellpadding="8">
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Order#</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">0009-001028</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Account No</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">0009</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Sales person</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">Balinder Walia</td>
</tr>

<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Order Date</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">29/04/2017</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Estimated Delivery Date</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">00/00/00</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;">Project</td>
<td style="text-align: center;border-bottom: 1px solid #333333;">WEBSITE</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;">Ordered by</td>
<td style="text-align: center;border-bottom: 1px solid #333333;">Matt Iveson</td>
</tr>

</table>
</div></div>

<table class="items" width="100%" style="font-size: 7pt; border-collapse: collapse;margin-top: 10pt;" cellpadding="8">
<thead>
<tr>
<td width="7%"><b>ITEM</b></td>
<td width="10%"><b>UNIT</b></td>
<td width="45%"><b>DESCRIPTION</b></td>
<td width="13%"><b>UNIT PRICE</b></td>
<td width="10%"><b>DISCOUNT</b></td>
<td width="15%"><b>AMOUNT</b></td>
</tr>
</thead>
<tbody>

<!-- ITEMS HERE -->
<tr>

<td align="center">1</td>
<td align="center">2</td>
<td>MySQL Master DB upgrade by Rackspace but Bal on standby and testing</td>
<td align="right">75.00</td>
<td align="right">0%</td>
<td align="right">&#163;150.00</td>
</tr>
<tr style="background-color: #EEEEEE; border-top: 1px solid #333333;border-bottom: 1px solid #333333;">

<td align="center">2</td>
<td align="center">1</td>
<td>Upgrade MySQL and then change search code to use FTS everywhere specially where we match tags and radius search and whereever keyword matching is required. Dev environment and deployed in testing environment for all sites and then pushed to production server.</td>
<td align="right">400.00</td>
<td align="right">0%</td>
<td align="right">&#163;400.00</td>
</tr>
<tr>

<td align="center">3</td>
<td align="center">4</td>
<td>Regenerate all microsites and 4 sites MRA, DRA, ARA, ITREC and use FTS and new  search code when pages are generated based on location. </td>
<td align="right">75.00</td>
<td align="right">0%</td>
<td align="right">&#163;300.00</td>
</tr>
<tr style="background-color: #EEEEEE; border-top: 1px solid #333333;border-bottom: 1px solid #333333;">

<td align="center">4</td>
<td align="center">4</td>
<td>Migration of the CVScren main site mirror server.</td>
<td align="right">75.00</td>
<td align="right">0%</td>
<td align="right">&#163;300.00</td>
</tr>
<tr>

<td align="center">5</td>
<td align="center">1</td>
<td>Testing of main site CVScreen is covered by Jobshout monthly agreement so all CVScreen MySQL PHP code updates and testing is covered.</td>
<td align="right">300.00</td>
<td align="right">100%</td>
<td align="right"></td>
</tr>
<tr style="background-color: #EEEEEE; border-top: 1px solid #333333;border-bottom: 1px solid #333333;">

<td align="center">6</td>
<td align="center">1</td>
<td>Any other issues arising from upgrade not covered will be discussed with Matt Iveson while testing and if it takes longer we will let him now.</td>
<td align="right">300.00</td>
<td align="right">100%</td>
<td align="right"></td>
</tr>
<tr>

<td align="center">7</td>
<td align="center">1</td>
<td>Load balancer updates covered by Jobshout contract.</td>
<td align="right">300.00</td>
<td align="right">100%</td>
<td align="right"></td>
</tr>

<!-- END ITEMS HERE -->

<tr>
<td class="blanktotal" colspan="4" rowspan="6"></td>
<td class="totals">Subtotal:</td>
<td class="totals">&#163;1150.00</td>
</tr>
<tr>
<td class="totals">VAT:</td>
<td class="totals">230.00</td>
</tr>
<tr>
<td class="totals">Delivery:</td>
<td class="totals">Electronic</td>
</tr>
<tr>
<td class="totals"><b>TOTAL:</b></td>
<td class="totals"><b>&#163;1380.00</b></td>
</tr>
<tr>
<td class="totals"><b>Balance due:</b></td>
<td class="totals"><b>&#163;1380.00</b></td>
</tr>
</tbody>
</table>
';

$termsHTML = '
<h4><u>Click on the link below to Accept/Decline/Comment online:</u></h4>
<p><a href="http://192.168.1.19:8181/order-status.shtml?order=8c6cc1bb0901ae1a8ad44e0512fcdf9e&auth_email=">http://192.168.1.19:8181/order-status.shtml?order=8c6cc1bb0901ae1a8ad44e0512fcdf9e&auth_email=</a></p>



<h3>Thank you for your business.</h3>

<div>
<h4><u>Order Authorisation</u></h4>
<h4>To confirm the order please sign it below, scan it and email it back to Tenthmatrix Sales:</h4>
<table class="bankDetails" cellpadding="8" cellspacing="0"  style="width: 100%">
<tbody>
<tr>
<td><b>Name</b></td>
</tr>
<tr>
<td><b>Position</b></td>
</tr>
<tr>
<td><b>Signed Date</b></td>
</tr>
<tr>
<td><b>Telephone</b></td>
</tr>
<tr>
<td><b>Your PO reference (If known)</b></td>
</tr>
<tr>
<td><b>Signature(s)</b></td>
</tr>

</tbody>
</table>

<br>
<br>
<table class="bankDetails" cellpadding="8" cellspacing="0"  style="width: 50%">
<tbody>
<tr>
<td>Order Ref</td>
<td><b>0009-001028</b></td>
</tr>
<tr>
<td>Order Currency Code</td>
<td><b>GBP</b></td>
</tr>
</tbody>
</table>
</div>

<img class="partnerlogo" src="adobe-technology-partner.jpg" width="188" />
<img class="partnerlogo" src="partner-silver.png" width="120" />

<p>Please note that this is not a tax Invoice.</p>
<h5>VAT number: GB 972985556</h5>
<h5><u>Terms of business</u></h5>
<p><a href="http://www.tenthmatrix.co.uk/terms-of-business.html">http://www.tenthmatrix.co.uk/terms-of-business.html</a></p>
<p>Tenthmatrix Information Systems Ltd. also trading as Tenthmatrix, is a registered company number: 06597469. VAT number: GB 972 9855 56. Registered in England and Wales. Registered office address: The Coach House, 77A Marlowes, Hemel Hempstead, Herts, United Kingdom, HP1 1LF. Correspondence office address: 608 Hamilton House, 111 Marlowes, Hemel Hempstead, Herts, United Kingdom, HP1 1BB.</p>
<p>Note: This Order was generated by Tenthmatrix CRM, Sales Order Processing and Invoicing system automatically.</p>
<p>Date: 29/04/2017, Time: 23:28:14</p>
<p align="right">E&OE</p>
</body>';

//==============================================================
//==============================================================
//==============================================================
include("../mpdf.php");

$mpdf=new mPDF('utf-8','A4','','',15,14,10,20,10,10); 

$mpdf->SetWatermarkText($watermarkTxt,0.05);
$mpdf->watermark_font = 'DejaVuSansCondensed';
$mpdf->showWatermarkText = true;

$mpdf->SetDisplayMode('fullpage');

$mpdf->WriteHTML($html . $termsHTML);	// Separate Paragraphs  defined by font

//$mpdf->Output('Order-44-831.pdf','F');
$mpdf->Output();
exit;

//==============================================================
//==============================================================
//==============================================================

?>