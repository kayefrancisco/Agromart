<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../assets/css/receipt/css.css">
         <link rel="stylesheet" type="text/css" href="../assets/css/receipt/css2.css">
        <script src="../assets/js/receipt/myscripts.js"></script>
        <title>Agromart-Invoice-Receipt</title>
        <meta name="description" content="Use this simple, page saving invoice template to create beautiful invoices online or offline. Layout Optimized for print &amp; pdf">
         <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <style type="text/css">
        @import "https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap";
* {
  margin: 0 auto;
  padding: 0 auto;
  user-select: none;
}

body {
  padding: 20px;
  font-family: "Inter", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
  -webkit-font-smoothing: antialiased;
  background-color: #dcdcdc;
  overflow: scroll; /* Show scrollbars */
}

.wrapper-invoice {
  display: flex;
  justify-content: center;
}
.wrapper-invoice .invoice {
  height: auto;
  background: #fff;
  padding: 5vh;
  margin-top: 5vh;
  max-width: 110vh;
  width: 100%;
  box-sizing: border-box;
  border: 1px solid #dcdcdc;
}
.wrapper-invoice .invoice .invoice-information {
  float: right;
  text-align: right;
}
.wrapper-invoice .invoice .invoice-information b {
  color: "#0F172A";
}
.wrapper-invoice .invoice .invoice-information p {
  font-size: 2vh;
  color: gray;
}
.wrapper-invoice .invoice .invoice-logo-brand h2 {
  text-transform: uppercase;
  font-family: "Inter", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
  font-size: 2.9vh;
  color: "#0F172A";
}
.wrapper-invoice .invoice .invoice-logo-brand img {
  max-width: 100px;
  width: 100%;
  object-fit: fill;
}
.wrapper-invoice .invoice .invoice-head {
  display: flex;
  margin-top: 8vh;
}
.wrapper-invoice .invoice .invoice-head .head {
  width: 100%;
  box-sizing: border-box;
}
.wrapper-invoice .invoice .invoice-head .client-info {
  text-align: left;
}
.wrapper-invoice .invoice .invoice-head .client-info h2 {
  font-weight: 500;
  letter-spacing: 0.3px;
  font-size: 2vh;
  color: "#0F172A";
}
.wrapper-invoice .invoice .invoice-head .client-info p {
  font-size: 2vh;
  color: gray;
}
.wrapper-invoice .invoice .invoice-head .client-data {
  text-align: right;
}
.wrapper-invoice .invoice .invoice-head .client-data h2 {
  font-weight: 500;
  letter-spacing: 0.3px;
  font-size: 2vh;
  color: "#0F172A";
}
.wrapper-invoice .invoice .invoice-head .client-data p {
  font-size: 2vh;
  color: gray;
}
.wrapper-invoice .invoice .invoice-body {
  margin-top: 8vh;
}
.wrapper-invoice .invoice .invoice-body .table {
  border-collapse: collapse;
  width: 100%;
}
.wrapper-invoice .invoice .invoice-body .table thead tr th {
  font-size: 2vh;
  border: 1px solid #dcdcdc;
  text-align: left;
  padding: 1vh;
  background-color: #eeeeee;
}
.wrapper-invoice .invoice .invoice-body .table tbody tr td {
  font-size: 2vh;
  border: 1px solid #dcdcdc;
  text-align: left;
  padding: 1vh;
  background-color: #fff;
}
.wrapper-invoice .invoice .invoice-body .table tbody tr td:nth-child(2) {
  text-align: right;
}
.wrapper-invoice .invoice .invoice-body .flex-table {
  display: flex;
}
.wrapper-invoice .invoice .invoice-body .flex-table .flex-column {
  width: 100%;
  box-sizing: border-box;
}
.wrapper-invoice .invoice .invoice-body .flex-table .flex-column .table-subtotal {
  border-collapse: collapse;
  box-sizing: border-box;
  width: 100%;
  margin-top: 2vh;
}
.wrapper-invoice .invoice .invoice-body .flex-table .flex-column .table-subtotal tbody tr td {
  font-size: 2vh;
  border-bottom: 1px solid #dcdcdc;
  text-align: left;
  padding: 1vh;
  background-color: #fff;
}
.wrapper-invoice .invoice .invoice-body .flex-table .flex-column .table-subtotal tbody tr td:nth-child(2) {
  text-align: right;
}
.wrapper-invoice .invoice .invoice-body .invoice-total-amount {
  margin-top: 1rem;
}
.wrapper-invoice .invoice .invoice-body .invoice-total-amount p {
  font-weight: bold;
  color: "#0F172A";
  text-align: right;
  font-size: 2vh;
}
.wrapper-invoice .invoice .invoice-footer {
  margin-top: 4vh;
}
.wrapper-invoice .invoice .invoice-footer p {
  font-size: 1.7vh;
  color: gray;
}

.copyright {
  margin-top: 2rem;
  text-align: center;
}
.copyright p {
  color: gray;
  font-size: 1.8vh;
}

@media print {
  .table thead tr th {
    -webkit-print-color-adjust: exact;
    background-color: #eeeeee !important;
  }

  .copyright {
    display: none;
  }
}
.rtl {
  direction: rtl;
  font-family: "Inter", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
}
.rtl .invoice-information {
  float: left !important;
  text-align: left !important;
}
.rtl .invoice-head .client-info {
  text-align: right !important;
}
.rtl .invoice-head .client-data {
  text-align: left !important;
}
.rtl .invoice-body .table thead tr th {
  text-align: right !important;
}
.rtl .invoice-body .table tbody tr td {
  text-align: right !important;
}
.rtl .invoice-body .table tbody tr td:nth-child(2) {
  text-align: left !important;
}
.rtl .invoice-body .flex-table .flex-column .table-subtotal tbody tr td {
  text-align: right !important;
}
.rtl .invoice-body .flex-table .flex-column .table-subtotal tbody tr td:nth-child(2) {
  text-align: left !important;
}
.rtl .invoice-body .invoice-total-amount p {
  text-align: left !important;
}
#settings_pane{
  width: 100%;
}

/*# sourceMappingURL=invoice.css.map */
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,800,300italic,400italic,600italic);
 body{
  font-family:'Courier', 'Open Sans', 'Trebuchet MS', 'Lucida Sans Unicode';
  color:#4F5155;font-size:11px;
}
 table{
  text-align:justify;
}
 input{
  padding:3px;
  margin:3px;
  width:45%;
} 
 .input_large{
  width:94%;
}
 .input_small{
  width:20%
}
 #invoice_pane{
  position:fixed;
  top:0;
  left:0;
  width:750px;
  height:100%;
}
#settings_pane{
  position:absolute;
  top:0;
  left:770px;
  width:65%;
  height:auto;
  border-left:2px solid #d8d8d8;
  font-size: 12px;
  padding:5px;
}
#page_end_msg{
  position:absolute;
  bottom:20px;
  left:210px;
  width:300px;
  height:auto;
  background-color:rgba(18,18,18,0.85);
  border-radius:25px;
  padding:15px;
  font-size:12px;
}
#page_end_msg .heading{
  display:block;
  color:#fff;
  padding-bottom:5px;
  font-weight:600;
}
#page_end_msg .text{
  display:block;
  color:#999;
}
#page_end_msg .links{
  display:block;
  color:#fff;
  padding-top:5px;
}
#page_end_msg .links a{
  color:#fff;
}
@media print{.do_not_print {
  display:none;
}
}
    </style>
    </head>
    <body>
        <div id="invoice_pane"><section class="wrapper-invoice">
      <!-- switch mode rtl by adding class rtl on invoice class -->
      <div class="invoice">
        <div class="invoice-information">
          <p ><b >Invoice #</b> <span id="invoice_number_D"></span></p>
          <p><b > Date </b >: <span id="invoice_date_D" ></span> </p>
        </div>
        <!-- logo brand invoice -->
        <div class="invoice-logo-brand">
          <!-- <h2>Tampsh.</h2> -->
          <img src="./assets/image/mart.png" alt="" />
        </div>
        <!-- invoice head -->
        <div class="invoice-head">
          <div class="head client-info">
            <p><b>Agromart-Invoice-Receipt</b></p>
            <p id="vendor_name_D"> </p>
            <p  id="vendor_address_D"> </p>
            <p id="vendor_city_D"> </p>
          </div>
          <div class="head client-data">
            <p><b>To Recipient</b> </p>
            <p id="customer_name_D"> </p>
            <p id="customer_address_D"> </p>
            <p id="customer_city_D"> </p>
          </div>
        </div>
        <!-- invoice body-->
        <div class="invoice-body">
          <table width="650" border="1" cellspacing="0" cellpadding="0">
                <td valign="top" align="left" width="65%">
                    <table border="1" width="100%" cellspacing="0" cellpadding="0">
                        <tbody id="order_items_D">
                            <tr align="center">
                                <th>Sl.</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Units</th>
                                <th>Cost</th>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td align="center">
                    <table width="85%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td align="left" width="50%"><b>Total Units</b></td>
                            <td align="left" width="5%">:</td>
                            <td align="left"><b><span id="total_units_D"></b></td>
                        </tr>
                        <tr><td colspan="3">&nbsp;</td></tr>
                        <tr>
                            <td align="left"><b>Sub Total</b>(+)</td>
                            <td align="left">:</td>
                            <td align="left"><b><span id="sub_total_D"></span></b></td>
                        </tr>
                        <tr id="tax_row">
                            <td align="left">Tax@<span id="tax_rate_D"></span>%(+)</td>
                            <td align="left">:</td>
                            <td align="left"><span id="tax_amount_D"></span></td>
                        </tr>
                        <tr>
                            <td align="left">Others(+)</td>
                            <td align="left">:</td>
                            <td align="left"><span id="other_charges_D"></span></td>
                        </tr>
                        <tr>
                            <td align="left">Discount(-)</td>
                            <td align="left">:</td>
                            <td align="left"><span id="discount_D"></span></td>
                        </tr>
                        <tr><td colspan="3">&nbsp;</td></tr>
                        <tr>
                            <td align="left"><b>GRAND TOTAL</b>(=)</td>
                            <td align="left">:</td>
                            <td align="left"><b><big><span id="currency_D"></span><span id="grand_total_D"></span></big></b></td>
                        </tr>
                    </table>
                </td>
            </table>
             
          <br>
            <span id="final_note_D"></span><br>
            <svg id="bar_code_container"></svg>
            <span class="do_not_print">
                <br><br><br><button onclick="javascript: window.print();">Print Invoice</button>
            </span>
        </div>

     <div id="settings_pane" class="do_not_print" style="margin:4px, 4px;
                padding:4px;
                width: 500px;
                height: 600px;
                overflow-x: hidden;
                overflow-y: auto;
                text-align:justify;" >
            <center><big><b>Invoice Generator</b></big><br>Change details below &amp; check left pane for updates as you type</center><br><br>
            
            <b>Seller Information</b><br>
            <input class="input_large" type="text" id="vendor_name" placeholder="Seller / Busines Name">
            <input class="input_large" type="text" id="vendor_address" placeholder="Address">
            <input type="text" id="vendor_city" placeholder="Contact number"><br><br>
            <b>Customer Information</b><br>
            <input type="text" id="customer_name" placeholder="Customer Name">
            <input class="input_large" type="text" id="customer_address" placeholder="Address">
            <input type="text" id="customer_city" placeholder="Contact number"><br><br>
            <b>Receipt Information</b><br>
            <input type="text" id="invoice_date" hidden="hidden" placeholder="Enter Date Manually"> 
            <input type="text" id="invoice_number"  hidden="hidden" placeholder="Enter Invoice # Manually">
            <input type="text" id="tax_rate" hidden="hidden" placeholder="% Tax on Sub Total"> Tax Rate: Leave Blank to Remove<br>
            <input type="text" id="currency" hidden="hidden" placeholder="Currency Symbol"><br>
            <input type="text" id="other_charges" placeholder="Other Charges"> Shipping Fee<br>
            <input type="text" id="discount" placeholder="Discount Amount"> Discount Amount<br>
            <input hidden="hidden" class="input_large" type="text" id="final_note" placeholder="Final Note" value="This is a computer generated invoice and needs no signature"><br><br>
            <b>ITEMS</b>&nbsp;&nbsp;&nbsp;&nbsp;<button style="background-color: darkgray;" id="add_new_item_button"><u>Add Another Item</u></button><br>
            <span id="order_items"></span><br><br>
        </div>

        <script src="https://cdn.jsdelivr.net/jsbarcode/3.3.7/barcodes/JsBarcode.code128.min.js"></script>

       <script type="text/javascript">
           
            var sl = 0;

            //get element by id alias
            var $$ = function(id){
                return document.getElementById(id);
            }

            var bind = function(src, dest, e){
                try{
                    $$(dest).innerHTML = src.value;
                }
                catch(e){
                    console.log(e, src, dest);
                }
                src.addEventListener(e, function(){
                    try{
                        $$(dest).innerHTML = src.value;
                    }catch(e){};
                });
            };

            var register = function(ele, e, func){
                $$(ele).addEventListener(e,function(){window[func]();});
            }

            function bind_all_text_boxes(){
                var items = document.getElementsByTagName('INPUT');
                for(var i = items.length - 1; i >= 0; i--){
                    var item = items[i];
                    var destination_field = item.id + '_D';
                    bind(item, destination_field, 'keyup');
                }
            }

            function add_line_item_binds(){
                for (var i=1; i<=sl; i++){
                    register('item_rate_'+i, 'keyup', 'update_totals');
                    register('item_units_'+i, 'keyup', 'update_totals');
                }
            }

            function update_totals(){
                total_no_of_units = 0;
                sub_total = 0;
                grand_total = 0;
                for (var i=1; i<=sl; i++){
                    var no_of_units = parseFloat($$('item_units_'+i).value);
                    var unit_rate = parseFloat($$('item_rate_'+i).value);
                    var cost = no_of_units * unit_rate;

                    $$('item_total_'+i+'_D').innerHTML = cost;

                    total_no_of_units = total_no_of_units + no_of_units;
                    sub_total = sub_total + cost;
                }

                $$('total_units_D').innerHTML = total_no_of_units;
                $$('sub_total_D').innerHTML = sub_total;

                grand_total = sub_total + tax_amount + parseFloat($$('other_charges').value) - parseFloat($$('discount').value);
                $$('grand_total_D').innerHTML = grand_total;
            }

            function observe_tax_changes(){
                if($$('tax_rate').value){
                    if($$('tax_row').innerHTML == ''){
                        $$('tax_row').innerHTML = '<td align="left">Tax@<span id="tax_rate_D"></span>% (+)</td><td align="left">:</td><td align="left"><span id="currency_D">$ </span></span><span id="tax_amount_D"></span></td>';
                    }
                    tax_amount = sub_total * parseFloat($$('tax_rate').value) / 100;
                    $$('tax_amount_D').innerHTML = tax_amount;
                }
                else{
                    tax_amount = 0;
                    $$('tax_row').innerHTML = '';
                }
                update_totals();
            }

            function add_a_line_item(){
                var order_items = $$('order_items');
                var order_items_D = $$('order_items_D');

                sl = sl + 1;
                var input = document.createElement('input');
                input.type = 'text';
                input.id = 'item_desc_'+sl;
                input.placeholder = 'Description';
                input.value = '';
                order_items.appendChild(input);

                input = document.createElement('input');
                input.type = 'text';
                input.classList = ['input_small'];
                input.id = 'item_rate_'+sl;
                input.min = 1;
                input.placeholder = 'Price per Unit';
                input.value = '';
                order_items.appendChild(input);

                input = document.createElement('input');
                input.type = 'text';
                input.classList = ['input_small'];
                input.id = 'item_units_'+sl;
                input.min = 1;
                input.placeholder = 'No. of Units';
                input.value = '';
                order_items.appendChild(input);

                order_items_D.innerHTML = order_items_D.innerHTML + '<tr align="center"><td id="item_sl_'+sl+'_D">'+sl+'</td><td id="item_desc_'+sl+'_D"></td><td id="item_rate_'+sl+'_D"></td><td id="item_units_'+sl+'_D"></td><td id="item_total_'+sl+'_D"></td></tr>';

                bind_all_text_boxes();
                update_totals();
                add_line_item_binds();
            }

            function set_defaults(){
                var now = new Date();

                //set date
                var month = now.getMonth() + 1;
                var date = now.getDate();
                var hour = now.getHours();
                now.mm = month<10 ? '0'+month : month;
                now.dd = date<10 ? '0'+date : date;
                now.hh = hour<10 ? '0'+hour : hour;
                $$('invoice_date').value = now.toDateString();
                
                //set invoice number
                invoice_number = '' + now.getFullYear() + now.mm + now.dd + now.hh + '-' + now.getMinutes();
                $$('invoice_number').value = invoice_number;

                //bind add_item_button
                register('add_new_item_button', 'click', 'add_a_line_item');

                //bind tax_rate observer
                tax_amount = 0;
                register('tax_rate', 'keyup', 'observe_tax_changes');

                //bind other charges and discount to update totals
                register('other_charges', 'keyup', 'update_totals');
                register('discount', 'keyup', 'update_totals');
            }

            set_defaults();
            add_a_line_item(); //binding of text boxes happens inside this func
            observe_tax_changes();
            update_totals();

            JsBarcode("#bar_code_container", invoice_number, {
                height: 40,
                displayValue: false
            });

       </script>

        </script>
    </body>
</html>