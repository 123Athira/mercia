

<?php  if($this->session->userdata('role') == 'ADMIN'){?>
  <br/>
  <br/>
  
  <form action="<?php echo base_url('fee/newfee'); ?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
 <center>

  <div style="margin-top:60px; margin-bottom:100px;">
    <p>
      <center><strong>New Fee</strong></center>
  </p>
  <table width="420" border="0">
    <tr>
      <td width="140">Title</td>
      <td width="270"><input type="text" name="title" id="txtfname" required="required" title="Event Title" autocomplete="off" placeholder="Enter Title" /></td>
    </tr>
    <tr>
      <td width="140">Last Date</td>
      <td width="270"><input type="date" name="edate" id="txtfname" required="required" title="Last Date" autocomplete="off" placeholder="Enter Date" /></td>
    </tr>
    <tr>
      <td width="140">Amount</td>
      <td width="270"><input type="number" name="fee" id="txtfname" required="required" title="fee Amount" autocomplete="off" placeholder="Enter Amount" /></td>
    </tr>
   
    <tr><center>
    
      <td><input type="submit" name="btnsignup" id="btnsave" value="Save" /></td>
      <td><input type="submit" name="btncancel" id="btncancel" value="Cancel" /></td>
   
   </center> </tr>
  </table>
</form>
<?php } ?>


 <div style="margin-top:60px; margin-bottom:100px;">
  <center><strong>Fee LIST</strong></center><br><br>
  <center><strong><?php echo $m;?></strong></center><br><br>
 <table id="d" width="100%" border="0" class="w3-table-all">
  <tr>
 <th> Sl.No.</th>
  <th>Title </th>
  <th>Last Date </th>
  <th>Fee </th>
  <?php  if($this->session->userdata('role') == 'ADMIN'){?><th>Action</th><?php } ?>
  <?php  if($this->session->userdata('role') == 'STUDENT'){?><th>Action</th><?php } ?>

  </tr>
    <?php $i=1; 
    foreach($fees as $key => $val){ ?>
    <tr>
<td><?php echo $i++; ?></td>
<td><?php echo $val['title']; ?></td>
<td><?php echo $val['last_date']; ?></td>
<td><?php echo $val['amount']; ?></td>
    <?php  if($this->session->userdata('role') == 'ADMIN'){?> <td>
  
      <form name="fg" action="<?php echo base_url('fee/deletefee'); ?>" method="post">
<input type="hidden" name="i" value="<?php echo $val['Id'];?>"/>
<input type="submit" name="ss" value="Delete"/>
      </form>
     
    </td> <?php } ?>
    <?php  if($this->session->userdata('role') == 'STUDENT'){?> <td>
  <?php if($val['paid']==0){?>
      <form name="fg" action="<?php echo base_url('fee/pay'); ?>" method="post">
<input type="hidden" name="fee_id" value="<?php echo $val['Id'];?>"/>
<input type="hidden" name="fee" value="<?php echo $val['amount'];?>"/>
<input type="hidden" name="title" value="<?php echo $val['title'];?>"/>
<input type="submit" name="ss" value="PAY"/>
      </form>
     <?php } else {echo "Already Paid";  }?>
    </td> <?php } ?>
    
    </tr>
   <?php } ?>
  </table></center>

 </div>
