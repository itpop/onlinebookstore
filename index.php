<!-- Home page -->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Online Book Store</title>
        <link href="style/style.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://www.payfirma.com/payfirma-card-encryption-min.js"></script>
        <script type="text/javascript">
            function validate() {
                var total = parseInt($('#price').val());
                if (total > 0) {
                    $('#hint').val();
                    return true;
                }
                
                $('#hint').html('<span class=hint>Please select items to checkout!</span>');
                return false;
            }
        </script>
    </head>
  
    <body>
        <form id="frmBook" method="post" action="receipt.php" onsubmit="return validate();">
            <div class="div_body_m" style="margin-top:3px;">
                <div class="list_m">
                    <table width="100%" border="0" align="center" cellpadding="1" cellspacing="1">
                        <tr align="center" class="topbg">  
                            <td colspan="4">
                                <div class="wrap_m"><strong>Online Book Store</strong></div>
                            </td>
                        </tr>
                        <tr align="center" class="title"> 
                            <td width="12%" class='headerclr'>ITEM</td>
                            <td width="25%" class='headerclr'>ISBN</td>
                            <td width="48%" class='headerclr'>TITLE</td>
                            <td width="15%" class='headerclr'>PRICE($)</td>
                        </tr>
                        <tr class="tdbg" align="center">
                            <td><input type="checkbox" value="59.99"></td>
                            <td>0-7654-54321</td>
                            <td>Advanced Java Programming</td>
                            <td class="priceclr">59.99</td>
                        </tr>
                        <tr class="tdbg" align="center">
                            <td><input type="checkbox" value="49.99"></td>
                            <td>0-7654-54322</td>
                            <td>C++ Programming</td>
                            <td class="priceclr">49.99</td>
                        </tr>
                        <tr class="tdbg" align="center">
                            <td><input type="checkbox" value="39.99"></td>
                            <td>0-7654-54323</td>
                            <td>Database Fundamentals</td>
                            <td class="priceclr">39.99</td>
                        </tr>
                        <tr class="tdbg" align="center">
                            <td><input type="checkbox" value="79.99"></td>
                            <td>0-7654-54324</td>
                            <td>Object Oriented Analysis & Design</td>
                            <td class="priceclr">79.99</td>
                        </tr>
                        <tr class="tdbg" align="center">
                            <td><input type="checkbox" value="69.99"></td>
                            <td>0-7654-54325</td>
                            <td>Essential Skills for Computing</td>
                            <td class="priceclr">69.99</td>
                        </tr>
                        <tr class="tdbg" align="center">
                            <td><input type="checkbox" value="39.99"></td>
                            <td>0-7654-54326</td>
                            <td>Introduction to Web Development</td>
                            <td class="priceclr">39.99</td>
                        </tr>
                        <tr class="tdbg" align="center">
                            <td><input type="checkbox" value="19.50"></td>
                            <td>0-7654-54327</td>
                            <td>Applied Mathematics</td>
                            <td class="priceclr">19.50</td>
                        </tr>
                        <tr class="tdbg" align="center">
                            <td><input type="checkbox" value="19.50"></td>
                            <td>0-7654-54328</td>
                            <td>Discrete Mathematics</td>
                            <td class="priceclr">19.50</td>
                        </tr>
                        <tr class="tdbg" align="center">
                            <td><input type="checkbox" value="89.99"></td>
                            <td>0-7654-54329</td>
                            <td>Mobile Appln Dev with Android</td>
                            <td class="priceclr">89.99</td>
                        </tr>
                        <tr class="tdbg" align="center">
                            <td><input type="checkbox" value="39.99"></td>
                            <td>0-7654-54330</td>
                            <td>Python Programming</td>
                            <td class="priceclr">39.99</td>
                        </tr>
                        <tr class="tdbg" align="center">
                            <td><input type="checkbox" value="29.99"></td>
                            <td>0-7654-54331</td>
                            <td>Computer Graphics</td>
                            <td class="priceclr">29.99</td>
                        </tr>
                        <tr class="tdbg" align="center">
                            <td><input type="checkbox" value="39.99"></td>
                            <td>0-7654-54332</td>
                            <td>Business Communication 1</td>
                            <td class="priceclr">39.99</td>
                        </tr>
                        <tr class="tdbg" align="center">
                            <td><input type="checkbox" value="39.99"></td>
                            <td>0-7654-54333</td>
                            <td>Business Communication 2</td>
                            <td class="priceclr">39.99</td>
                        </tr>
                        <tr class="tdbg" align="center">
                            <td><input type="checkbox" value="19.99"></td>
                            <td>0-7654-54334</td>
                            <td>CST Program Fundamentals</td>
                            <td class="priceclr">19.99</td>
                        </tr>
                        <tr class="tdbg" align="center">
                            <td><input type="checkbox" value="29.99"></td>
                            <td>0-7654-54335</td>
                            <td>Computer & Law</td>
                            <td class="priceclr">29.99</td>
                        </tr>
                        <tr class="tdbg" align="center">
                            <td class="totalstyle">TOTAL($)</td>
                            <td class="totalstyle" colspan="3"><input type="text" id="price" name="price" value="" /></td>
                        </tr>
                    </table>
                </div>
                <div class="btnpad">
                    <button type="submit" class="btn">Checkout</button>
                </div>
                <div id="hint"></div>
            </div>
        </form>
    </body>
    <script src="js/jquery-item.js"></script>
</html>
