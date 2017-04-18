<style>
        
 #contact_form form label { width: 150px; }
        
</style>

<div class="">
   <h1>Shopping Cart</h1>
   <div id="contact_form" style="width:600px;">
           <form name="form1" method="post">

                <input type="hidden" name="pid" />

                <input type="hidden" name="command" />

             <table width="700px" cellspacing="0" cellpadding="5" id="shoppingcarttable">

                        

                        <thead>

                          <tr bgcolor="#ddd">

                            <th width="170" align="left">Image </th> 

                            <th width="125" align="left">Shoes Name </th> 

                            <th width="80" align="center">Quantity </th> 

                            <th width="90" align="right">Price </th> 

                            <th width="89" align="right">Total </th> 

                            <th width="84"> </th>

                            

                          </tr>

                        </thead>

                        <tbody>

                         <tr>
                                <td><img width="100" src=""></td>
                                <td></td>
                                <td align="right"><input type="text" id="qty" value="" style="width:30px;text-align:right;"></td>
                                <td align="right">Rp.&nbsp;</td>
                                <td align="right">
                                  
                                </td>
                                <td>
                                 &nbsp;&nbsp;&nbsp;&nbsp;
                                 <a href="javascript:" class="editcart" shoes-id=""><img src="<?php echo $base_url; ?>/images/edit.png" width="20"></a>
                                 &nbsp;
                                 <a href="javascript:" class="removecart" shoes-id=""><img src="<?php echo $base_url; ?>images/remove_x.gif" width="20"></a>
                                </td>
                              </tr> 
                              
                             <tr>
                              <td colspan="4" align="right"><strong>Total</strong>&nbsp;</td>
                              <td><strong>Rp.&nbsp;<?php echo number_format($total,2,",","."); ?></strong></td>
                              <td></td> 
                             </tr> 
                          

                         </tbody>

                </table>

                </form>



                <div style="float:right; margin-top: 20px;">

                  <p><a href="javascript:" id="clearcart">Clear the Cart </a></p>
                    
                  <p><a href="javascript:" id="updateallcart">Update All the Cart</a></p>
                 
                  <p><a href="javascript:location.href = 'index.php?products' ">Continue shopping</a></p>

                  <p><a href="index.php?checkout">Proceed to checkout</a></p>

                </div>

                   
                </div>

</div>