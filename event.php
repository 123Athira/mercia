

<?php  if($this->session->userdata('role') == 'ADMIN'){?>
  <br/>
  <br/>
  <strong>New Event</strong>
  <form action="<?php echo base_url('event/newevent'); ?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
 <center>

  <div style="margin-top:60px; margin-bottom:100px;">
  <table width="420" border="0">
    <tr>
      <td width="140">Title</td>
      <td width="270"><input type="text" name="title" id="txtfname" required="required" title="Event Title" autocomplete="off" placeholder="Enter Title" /></td>
    </tr>
    <tr>
      <td width="140">Event Date</td>
      <td width="270"><input type="date" name="edate" id="txtfname" required="required" title="Event Date" autocomplete="off" placeholder="Enter Date" /></td>
    </tr>
    <tr>
      <td width="140">Event Time</td>
      <td width="270"><input type="time" name="etime" id="txtfname" required="required" title="Event Time" autocomplete="off" placeholder="Enter Time" /></td>
    </tr>
    <tr>
      <td width="140">Details</td>
      <td width="270"><input type="text" name="details" id="txtfname" required="required" title="Event Details" autocomplete="off" placeholder="Enter Details" /></td>
    </tr>
    <tr><center>
    
      <td><input type="submit" name="btnsignup" id="btnsave" value="Save" /></td>
      <td><input type="submit" name="btncancel" id="btncancel" value="Cancel" /></td>
   
   </center> </tr>
  </table>
</form>
<?php } ?>


 <div style="margin-top:60px; margin-bottom:100px;">
  <center><strong>Event LIST</strong></center><br><br>
 <table id="d" width="100%" border="0" class="w3-table-all">
  <tr>
 
  <th>Title </th>
  <th>Date </th>
  <th>Time </th>
  <th>Details </th>
  <?php  if($this->session->userdata('role') == 'ADMIN'){?><th>Action</th><?php } ?>
  

  </tr>
    <?php foreach($event as $key => $val){ ?>
    <tr>

<td><?php echo $val['title']; ?></td>
<td><?php echo $val['event_date']; ?></td>
<td><?php echo $val['event_time']; ?></td>
<td><?php echo $val['details']; ?></td>
    <?php  if($this->session->userdata('role') == 'ADMIN'){?> <td>
  
      <form name="fg" action="<?php echo base_url('event/deleteevent'); ?>" method="post">
<input type="hidden" name="i" value="<?php echo $val['id'];?>"/>
<input type="submit" name="ss" value="Delete"/>
      </form>
     
    </td> <?php } ?>
    
    </tr>
   <?php } ?>
  </table></center>

 </div>
