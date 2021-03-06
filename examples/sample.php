<?php
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
<div class="row" style="margin-top:1pt;">
<div class="col1 billtodetails">
<h4><b>Bill To:</b></h4>
Client Name here<br /> Accounts Payable<br />1 Blue Street<br />London, post code<br /><br />
</div>

<div class="col2 floatright">

<table width="100%" style="border-collapse: collapse; font-family: sans; border: 1pt solid #333333;" cellpadding="8">
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Invoice#</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">1275-001184</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Invoice Date</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">01/12/2016</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;"><b>Due Date</b></td>
<td style="text-align: center;border-bottom: 1px solid #333333;">01/12/2016</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;">Project</td>
<td style="text-align: center;border-bottom: 1px solid #333333;">WEBSITE</td>
</tr>
<tr>
<td style="background-color: #EEEEEE; border-right: 1px solid #333333;border-bottom: 1px solid #333333;">Ordered by</td>
<td style="text-align: center;border-bottom: 1px solid #333333;">Joe Blogg</td>
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

<td align="center">2150</td>
<td align="center">1</td>
<td>Description will come here</td>
<td align="right">&#163;591.00</td>
<td align="right">&#163;591.00</td>
</tr>

<!-- END ITEMS HERE -->

<tr>
<td class="blanktotal" colspan="3" rowspan="6"></td>
<td class="totals">Subtotal:</td>
<td class="totals">&#163;591.00</td>
</tr>
<tr>
<td class="totals">VAT:</td>
<td class="totals">118.20</td>
</tr>
<tr>
<td class="totals">Shipping:</td>
<td class="totals">&mdash;<!--#4DENDIF--></td>
</tr>
<tr>
<td class="totals"><b>TOTAL:</b></td>
<td class="totals"><b>&#163;709.20</b></td>
</tr>

<tr>
<td class="totals"><b>Balance due:</b></td>
<td class="totals"><b>&#163;709.20</b></td>
</tr>
</tbody>
</table>


';

$termsHTML = '<h3>Thank you for your business.</h3>

<h5>VAT number: GB 1234567</h5>
<h5><u>Terms of business</u></h5>
<p><a href="http://www.yourdomain.co.uk/terms-of-business.html">http://www.yourdomain.co.uk/terms-of-business.html</a></p>
<p>Please note that our payment terms for this Invoice are UPON RECEIPT days from the date of Invoice. Interest will be charged on all Invoice that are not paid on time.</p>
<h4><u>Notes</u></h4>
<p>AWS EC2 dedicated web server with firewall and two texin-electric.com mailboxes.<br /> For period: 01/12/2016 to 01/01/2017 (END OF CONTRACT, LAST INVOICE AS WEBSITE IS MOVED TO ANOTHER SUPPLIER BY EUROPA)</p>


<h4><u>PAYING BY DEBIT OR CREDIT CARD</u></h4>
<h4>Click on this link <a href="https://www.yourdomain.co.uk/index.shtml?pay=XXX">https://www.yourdomain.co.uk/index.shtml?pay=XXX</a> to Pay this Invoice now.</h4>
<h4>Invoice PIN: 1466</h4>

<h5><u>Refunds Policy</u></h5>
<p><a href="http://www.yourdomain.co.uk/terms-of-business.html#refund_policy">http://www.yourdomain.co.uk/terms-of-business.html#refund_policy</a></p>

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
<td>xx-xx-xx</td>
</tr>
<tr>
<td>Account number</td>
<td>bank-account-number</td>
</tr>
<tr>
<td>Please use reference</td>
<td>WEBSITE-xxxx</td>
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
<td>XXXXXX22</td>
</tr>

<tr>
<td>Hemel Hempstead Branch (UK) Branch BIC code</td>
<td>xxxx2115F</td>
</tr>

</tbody>
</table>

<h4 style="padding-top:10pt;">To make payment via Internet Banking, you simply need to contact your bank with the above bank details. They can advise you if you should use the SWIFT Code or BIC code depending on the payment originating country.</h4>

<p>Describe your company information</p>
<p>Note: This Invoice was generated by YOUR COMPANY CRM and Invoicing system automatically.</p>
<p>Date: 01/12/2016, Time: 19:41:48</p>
<p align="right">E&OE</p>
</body>';

//==============================================================
//==============================================================
//==============================================================

define('_MPDF_PATH','../');
include("../mpdf.php");

$mpdf=new mPDF('c','A4','8','arial',20,15,32,25,10,10); 
$mpdf->SetProtection(array('print'));
$mpdf->SetTitle("Your Company Name Co. - Invoice");
$mpdf->SetAuthor("Your Company Name Co.");
$mpdf->SetWatermarkText("Paid");
$mpdf->showWatermarkText = true;
$mpdf->watermark_font = 'DejaVuSansCondensed';
$mpdf->watermarkTextAlpha = 0.1;
$mpdf->SetDisplayMode('fullpage');
$header = '
<table width="100%"><tr>
<td width="50%"><img src="jobshout.png" width="180"/><div style="color: #666666;font-family:sans; font-size: 16pt;">INVOICE</div></td>
<td width="50%" style="text-align: right;"><h4>Demo by Jobshout Ltd.</h4>
Mention your address<br />Tel: 07515 356146<br />Email: bookkeeper@yourdomain.com</td>
</tr></table>
';
$mpdf->SetHTMLHeader($header);
$footer='<div style="border-top: 1px solid #000000; text-align: center; padding-top: 3mm; ">
Page {PAGENO} of {nb}
</div>';
$mpdf->SetHTMLFooter($footer);

$mpdf->WriteHTML($html . $termsHTML);	// Separate Paragraphs  defined by font
$mpdf->Output(); exit;
?>