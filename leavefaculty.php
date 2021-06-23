

<?php  if($this->session->userdata('role') != 'ADMIN'){?>
  <br/>
  <br/><br/>
  <br/><br/>
  <br/>
  <center><h4>Leave Request</h4></center>
  <form action="<?php echo base_url('user/leaverequest_faculty'); ?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
 <center>

  <div style="margin-top:60px; margin-bottom:100px;">
  <table width="420" border="0">
    <tr>
      <td width="140">Leave Date</td>
      <td width="270"><input type="date" name="leave_date" id="txtfname" required="required" title="Leave Date" autocomplete="off" placeholder="Enter Leave Date " /></td>
    </tr>
    <tr>
      <td width="140">Leave Reason</td>
      <td width="270"><input type="text" name="reason" id="txtfname" required="required" title="Reason for Leave" autocomplete="off" placeholder="Enter Reason For Leave" /></td>
    </tr>
    
    <tr><center>
    <td></td>
   
      <td><input type="submit" name="btnsignup" id="btnsave" value="Request" /></td>
      
   </center> </tr>
  </table>
</form>
<?php } ?>


 <div style="margin-top:60px; margin-bottom:100px;">
  <center><strong>Leave Requests</strong></center><br>
  <table id="d" width="100%" border="0" class="w3-table-all">
    <tr>
      <td colspan="7">
        <center>
        <form name="ddd" action="<?php echo base_url('user/leaverequest_faculty'); ?>" method="post">
        Date :   <input length="35" type="date" name="leave_date_filter" required="required"/><input type="submit" name="sbmt" value="Filter"/>
        
      </form></center>
    </td>
    </tr>
  </table>
  <br>
 <table id="d" width="100%" border="0" class="w3-table-all">
  <tr>
<th>Sl.No. </th>
  <th>User Info </th>
  <th>Date </th>
  <th>Reason </th>
  <th>Status </th>
  <th>Request Date </th>
  <th>Action</th>
  

  </tr>
    <?php 
    $i =1;
    foreach($leave as $key => $val){ ?>
    <tr>
<td><?php echo $i++; ?></td>
<td><?php echo $val['fname']." ".$val['lname']; ?>
  <p><?php echo $val['course_name']." ".$val['qualification']; ?></p>
</td>
<td><?php echo $val['leave_date']; ?></td>
<td><?php echo $val['reason']; ?></td>
<td><?php echo $val['status']; ?></td>
<td><?php echo $val['request_date']; ?></td>
     <td>
  <?php  if($this->session->userdata('role') != 'ADMIN'){
    if($val['status'] == 'Requested'){
    ?>
      <form name="fg" action="<?php echo base_url('user/leaverequest_faculty'); ?>" method="post">
<input type="hidden" name="i" value="<?php echo $val['Id'];?>"/>
<input type="submit" name="ss" value="Delete"/>
      </form>
      <?php } } else{
        if($val['status'] == 'Requested'){
        ?>

        <form name="fg" action="<?php echo base_url('user/leaverequest_faculty'); ?>" method="post">
          <input type="text" name="status" placeholder="Update Status" />
<input type="hidden" name="id" value="<?php echo $val['Id'];?>"/>
<input type="submit" name="ss" value="Update"/>


        <?php 
      }
      }
      ?>
    </td>
    
    </tr>
   <?php } ?>
  </table></center>

 </div>
