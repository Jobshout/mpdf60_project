<?php
$watermarkTxt='DUE NOW';

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
<img src="jobshout_logo.jpg" width="180" />
<div class="main_heading">INVOICE</div>
</div>
<div class="col2 floatright">
<img src="Jobshout_logo.jpg" width="190" /><br><h4>Tenthmatrix Information Systems Ltd.</h4>
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
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Invoice#</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">0009-001202</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Invoice Date</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">03/04/2017</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Due Date</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">03/04/2017</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;">Project</td>
<td style="text-align: center;border-bottom: 1px solid #333333;">JOBSHOUT</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Ordered by</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">Matt Iveson</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;">Your ref, PO number</td>
<td style="text-align: center;"></td>
</tr>
</table>
</div>
</div>

<table class="items" width="100%" style="font-size: 7pt; border-collapse: collapse;margin-top: 10pt;" cellpadding="8">
<thead>
<tr>
<td width="10%"><b>ITEM</b></td>
<td width="10%"><b>QUANTITY</b></td>
<td width="50%"><b>DESCRIPTION</b></td>
<td width="15%"><b>UNIT PRICE</b></td>
<td width="15%"><b>AMOUNT</b></td>
</tr>
</thead>
<tbody>

<!-- ITEMS HERE -->
<tr>

<td align="center">2199</td>
<td align="center">1</td>
<td>Product: Jobshout<br \/>Jobshout monthly maintenance charges for April 2017.<br \/>Domains:<br \/>www.cvscreen.co.uk<br \/>itjobs.cvscreen.co.uk<br \/>regardingjobs.co.uk<br \/>marketingjobsintheuk.com<br \/>accountancyworkjobs.co.uk<br \/>phpjobsuk.co.uk<br \/>Upto 10 job board micro-sites and 181 IT recruitment and regarding recruitment domains<br \/>CVScreen static site with load balancing<br \/>CV Screen BLOG<br \/>200 new static Recruitment and IT Recruitment Sites</td>
<td align="right">&#163;250.00</td>
<td align="right">&#163;250.00</td>
</tr>
<tr style="background-color: #EEEEEE; border-top: 1px solid #333333;border-bottom: 1px solid #333333;">

<td align="center">2201</td>
<td align="center">5</td>
<td>Troubleshooting downtimes 500 errors and re-syncing LCN mirror server with production server.</td>
<td align="right">&#163;75.00</td>
<td align="right">&#163;300.00</td>
</tr>
<tr>

<td align="center">2202</td>
<td align="center">1</td>
<td>Post code and radius search migration to MRA, DRA, ARA, ITRA</td>
<td align="right">&#163;200.00</td>
<td align="right">&#163;200.00</td>
</tr>

<!-- END ITEMS HERE -->

<tr>
<td class="blanktotal" colspan="3" rowspan="6"></td>
<td class="totals">Subtotal:</td>
<td class="totals">&#163;750.00</td>
</tr>
<tr>
<td class="totals">VAT:</td>
<td class="totals">150.00</td>
</tr>
<tr>
<td class="totals">Shipping:</td>
<td class="totals">&mdash;<!--#4DENDIF--></td>
</tr>
<tr>
<td class="totals"><b>TOTAL:</b></td>
<td class="totals"><b>&#163;900.00</b></td>
</tr>

<tr>
<td class="totals"><b>Balance due:</b></td>
<td class="totals"><b>&#163;900.00</b></td>
</tr>
</tbody>
</table>


';

$termsHTML = '<h3>Thank you for your business.</h3>

<h5>VAT number: GB 972985556</h5>
<h5><u>Terms of business</u></h5>
<p><a href="http://www.tenthmatrix.co.uk/terms-of-business.html">http://www.tenthmatrix.co.uk/terms-of-business.html</a></p>
<p>Please note that our payment terms for this Invoice are DUE NOW days from the date of Invoice. Interest will be charged on all Invoice that are not paid on time.</p>
<h4><u>Notes</u></h4>
<p>Jobshout monthly billing contract. Checked by BW&#33;<br /> For period: 01/04/2017 to 01/05/2017</p>


<h4><u>PAYING BY DIRECT DEBIT OR STANDING ORDER</u></h4>
<h4>If you pay by direct debit or standing order, this invoice is for reference only - you do not need to make an additional payment.</h4>
<h4><u>PAYING BY DEBIT OR CREDIT CARD</u></h4>
<h4>Click on this link <a href="https://crm.tenthmatrix.co.uk/index.shtml?pay=836f81c0c4adc891ee7ac87177983e4f">https://crm.tenthmatrix.co.uk/index.shtml?pay=836f81c0c4adc891ee7ac87177983e4f</a> to Pay this Invoice now.</h4>
<h4>Invoice PIN: 4973</h4>

<h5><u>Refunds Policy</u></h5>
<p><a href="http://www.tenthmatrix.co.uk/terms-of-business.html#refund_policy">http://www.tenthmatrix.co.uk/terms-of-business.html#refund_policy</a></p>

<h4><u>Paying online by BACS or Internet Banking</u></h4>
<h4>Please make payment by electronic transfer to:</h4>
<table class="bankDetails" cellpadding="8" cellspacing="0"  style="width: 50%">
<tbody>
<tr>
<td>BACS Bank details</td>
<td>HSBC Hemel Hempstead Branch (UK)</td>
</tr>
<tr>
<td>Account name</td>
<td>Tenthmatrix</td>
</tr>
<tr>
<td>Sort code</td>
<td>40-24-07</td>
</tr>
<tr>
<td>Account number</td>
<td>bank-account-number</td>
</tr>
<tr>
<td>Please use reference</td>
<td>JOBSHOUT-1202</td>
</tr>
</tbody>
</table>

<table class="bankDetails" cellpadding="8" cellspacing="0"  style="width: 50%">
<tbody>
<tr>
<td>IBAN</td>
<td>IBAN-Number</td>
</tr>
<tr>
<td>HSBC International SWIFT Code</td>
<td>MIDLGB22</td>
</tr>

<tr>
<td>Hemel Hempstead Branch (UK) Branch BIC code</td>
<td>MIDLGB2115F</td>
</tr>

</tbody>
</table>

<h4 style="padding-top:10pt;">To make payment via Internet Banking, you simply need to contact your bank with the above bank details. They can advise you if you should use the SWIFT Code or BIC code depending on the payment originating country.</h4>

<p>Tenthmatrix Information Systems Ltd. also trading as Tenthmatrix, is a registered company number: 06597469. VAT number: GB 972 9855 56. Registered in England and Wales. Registered office address: The Coach House, 77A Marlowes, Hemel Hempstead, Herts, United Kingdom, HP1 1LF. Correspondence office address: 608 Hamilton House, 111 Marlowes, Hemel Hempstead, Herts, United Kingdom, HP1 1BB.</p>
<p>Note: This Invoice was generated by Tenthmatrix CRM and Invoicing system automatically.</p>
<p>Date: 29/04/2017, Time: 23:16:20</p>

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

//$mpdf->Output('Invoice-1275-1184.pdf','F');
$mpdf->Output();
exit;

//==============================================================
//==============================================================
//==============================================================

?>
