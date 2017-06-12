<?php

$watermarkTxt='STATEMENT';

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
	padding-left:1em; margin-bottom: 0pt; 
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
}</style>

<body>
<div class="row">
<div class="col1">
<img src="Jobshout_logo.jpg" width="190" />
<div class="main_heading">STATEMENT</div>
</div>

<div class="col2 floatright">
<h4>Tenthmatrix Information Systems Ltd.</h4>
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
<h4><b>Attn:</b></h4>';

$addressStr = 'Client name Ltd<br /> Accounts Payable<br />1 Blue Street<br />London, Greater London Post code<br /><br />';

$html .= $addressStr;

$html .= '</div>

<div class="col2 floatright">
<table width="100%" style="border-collapse: collapse; font-family: sans; border: 1px solid #333333;" cellpadding="8">
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Statement#</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">4120-201714</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Statement Date</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">04/01/2017</td>
</tr>

<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;">Customer No</td>
<td style="text-align: center;border-bottom: 1px solid #333333;">4120</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;">Contact name</td>
<td style="text-align: center;border-bottom: 1px solid #333333;">Sandeep Sareeen</td>
</tr>
</table>
</div>
</div>

<table class="items" width="100%" style="font-size: 7pt; border-collapse: collapse;margin-top: 10pt;" cellpadding="8">
<thead>
<tr>
<td width="10%"><b>INVOICE#</b></td>
<td width="10%"><b>AGE</b></td>
<td width="20%"><b>PROJECT</b></td>
<td width="20%"><b>TERMS</b></td>
<td width="15%"><b>STATUS</b></td>
<td width="10%"><b>DATE</b></td>
<td width="15%"><b>AMOUNT</b></td>
</tr>
</thead>
<tbody>

<!-- ITEMS HERE -->
<tr>

<td align="center">1094</td>
<td>> 90</td>
<td align="right">WEBSITE</td>
<td align="right">OVERDUE</td>
<td align="right">Invoiced</td>
<td align="right">04/02/2016</td>
<td align="right">&#163;30.00</td>
</tr>

<!-- PAYMENTS STARTS HERE --><!-- PAYMENTS END HERE -->


<tr style="background-color: #EEEEEE; border-top: 1px solid #000000;border-bottom: 1px solid #333333;">

<td align="center">1109</td>
<td>> 90</td>
<td align="right">WEBSITE</td>
<td align="right">OVERDUE</td>
<td align="right">Invoiced</td>
<td align="right">02/03/2016</td>
<td align="right">&#163;30.00</td>
</tr>

<!-- PAYMENTS STARTS HERE --><!-- PAYMENTS END HERE -->


<tr>

<td align="center">1121</td>
<td>> 90</td>
<td align="right">WEBSITE</td>
<td align="right">OVERDUE</td>
<td align="right">Invoiced</td>
<td align="right">12/04/2016</td>
<td align="right">&#163;30.00</td>
</tr>

<!-- PAYMENTS STARTS HERE --><!-- PAYMENTS END HERE -->


<tr style="background-color: #EEEEEE; border-top: 1px solid #000000;border-bottom: 1px solid #333333;">

<td align="center">1129</td>
<td>> 90</td>
<td align="right">DOMAINS</td>
<td align="right">OVERDUE</td>
<td align="right">Invoiced</td>
<td align="right">05/05/2016</td>
<td align="right">&#163;14.40</td>
</tr>

<!-- PAYMENTS STARTS HERE --><!-- PAYMENTS END HERE -->


<tr>

<td align="center">1139</td>
<td>> 90</td>
<td align="right">DOMAINS</td>
<td align="right">OVERDUE</td>
<td align="right">Invoiced</td>
<td align="right">02/06/2016</td>
<td align="right">&#163;14.40</td>
</tr>

<!-- PAYMENTS STARTS HERE --><!-- PAYMENTS END HERE -->


<tr style="background-color: #EEEEEE; border-top: 1px solid #000000;border-bottom: 1px solid #333333;">

<td align="center">1147</td>
<td>> 90</td>
<td align="right">DOMAINS</td>
<td align="right">OVERDUE</td>
<td align="right">Invoiced</td>
<td align="right">06/07/2016</td>
<td align="right">&#163;14.40</td>
</tr>

<!-- PAYMENTS STARTS HERE --><!-- PAYMENTS END HERE -->


<tr>

<td align="center">1157</td>
<td>> 90</td>
<td align="right">DOMAINS</td>
<td align="right">OVERDUE</td>
<td align="right">Invoiced</td>
<td align="right">04/08/2016</td>
<td align="right">&#163;14.40</td>
</tr>

<!-- PAYMENTS STARTS HERE --><!-- PAYMENTS END HERE -->


<tr style="background-color: #EEEEEE; border-top: 1px solid #000000;border-bottom: 1px solid #333333;">

<td align="center">1166</td>
<td>> 90</td>
<td align="right">DOMAINS</td>
<td align="right">OVERDUE</td>
<td align="right">Invoiced</td>
<td align="right">02/09/2016</td>
<td align="right">&#163;14.40</td>
</tr>

<!-- PAYMENTS STARTS HERE --><!-- PAYMENTS END HERE -->


<tr>

<td align="center">1172</td>
<td>> 60</td>
<td align="right">DOMAINS</td>
<td align="right">OVERDUE</td>
<td align="right">Invoiced</td>
<td align="right">07/10/2016</td>
<td align="right">&#163;14.40</td>
</tr>

<!-- PAYMENTS STARTS HERE --><!-- PAYMENTS END HERE -->


<tr style="background-color: #EEEEEE; border-top: 1px solid #000000;border-bottom: 1px solid #333333;">

<td align="center">1178</td>
<td>> 30</td>
<td align="right">DOMAINS</td>
<td align="right">OVERDUE</td>
<td align="right">Invoiced</td>
<td align="right">07/11/2016</td>
<td align="right">&#163;14.40</td>
</tr>

<!-- PAYMENTS STARTS HERE --><!-- PAYMENTS END HERE -->


<tr>

<td align="center">1186</td>
<td>> 30</td>
<td align="right">DOMAINS</td>
<td align="right">OVERDUE</td>
<td align="right">Invoiced</td>
<td align="right">01/12/2016</td>
<td align="right">&#163;14.40</td>
</tr>

<!-- PAYMENTS STARTS HERE --><!-- PAYMENTS END HERE -->


<tr style="background-color: #EEEEEE; border-top: 1px solid #000000;border-bottom: 1px solid #333333;">

<td align="center">1189</td>
<td>Due Now</td>
<td align="right">DOMAINS</td>
<td align="right">UPON RECEIPT</td>
<td align="right">Invoiced</td>
<td align="right">02/01/2017</td>
<td align="right">&#163;14.40</td>
</tr>

<!-- PAYMENTS STARTS HERE --><!-- PAYMENTS END HERE -->


<!-- END ITEMS HERE -->

<tr>
<td class="blanktotal" colspan="5" rowspan="6"></td>
<td class="totals">Sub Total:</td>
<td class="totals">&#163;183.00</td>
</tr>

<tr>
<td class="totals">Tax:</td>
<td class="totals">&#163;36.60</td>
</tr>


<tr>
<td class="totals">Total Invoiced:</td>
<td class="totals">&#163;219.60</td>
</tr>

<tr>
<td class="totals"><b>Balance:</b></td>
<td class="totals"><b>&#163;219.60</b></td>
</tr>
</tbody>
</table>


';

$termsHTML = '<h3>Thank you for your business.</h3>
<h5><u>Terms of business</u></h5>
<p><a href="http://www.tenthmatrix.co.uk/terms-of-business.html">http://www.tenthmatrix.co.uk/terms-of-business.html</a></p>
<p>Please note that our payment terms for the Invoices are written on Invoice itself. Interest will be charged on all Invoice that are not paid on time.</p>


<h4><u>Paying online</u></h4>
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
<td>DOMAINS-4120</td>
</tr>
</tbody>
</table>

<h4 style="margin-top:10pt;">For International bank transfers:</h4>
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

<h4 style="margin-top:10pt;">To make payment, you simply need to contact your bank with the above bank details. They can advise you if you should use the SWIFT Code or BIC code depending on the payment originating country.</h4>

<p>Tenthmatrix Information Systems Ltd. also trading as Tenthmatrix, is a registered company number: 06597469. VAT number: GB 972 9855 56. Registered in England and Wales. Registered office address: The Coach House, 77A The Marlowes, Hemel Hempstead, Herts, HP1 1LF, United Kingdom. Correspondence office address: Suite 608, Hamilton House, 111 Marlowes, Hemel Hempstead, Hertfordshire, HP1 1BB, United Kingdom.</p>

<p>Note: This Statement was generated by Tenthmatrix CRM and Invoicing system automatically.</p>
<p>Date: 04/01/2017, Time: 14:43:27</p>
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

//$mpdf->Output('statement_template.pdf','F');
$mpdf->Output();
exit;

//==============================================================
//==============================================================
//==============================================================

?>
