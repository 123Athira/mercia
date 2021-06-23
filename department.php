

<?php  if($this->session->userdata('role') == 'ADMIN'){?>
  <br><br><br><br><br>
  <center><h4>New Department Details</h4></center>>
  <form action="<?php echo base_url('department/newdepartment'); ?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
 <center>

  <div style="margin-top:60px; margin-bottom:100px;">
  <table width="420" border="0">
    <tr>
      <td width="140">Department</td>
      <td width="270"><input type="text" name="name" id="txtfname" required="required" title="Department Name" autocomplete="off" placeholder="Enter Department Name" /></td>
    </tr>
    
    <tr><center>
    
      <td><input type="submit" name="btnsignup" id="btnsave" value="Save" /></td>
      <td><input type="submit" name="btncancel" id="btncancel" value="Cancel" /></td>
   
   </center> </tr>
  </table>
</form>
<?php } ?>


 <div style="margin-top:60px; margin-bottom:100px;">
  <center><strong>DEPARTMENT LIST</strong></center><br><br>
 <table id="d" width="100%" border="0" class="w3-table-all">
  <tr>
 
  <th>Department </th>
  <th>Action</th>
  

  </tr>
    <?php foreach($department as $key => $val){ ?>
    <tr>

<td><?php echo $val['name']; ?></td>
     <td>
  <?php  if($this->session->userdata('role') == 'ADMIN'){?>
      <form name="fg" action="<?php echo base_url('department/deletedepartment'); ?>" method="post">
<input type="hidden" name="i" value="<?php echo $val['id'];?>"/>
<input type="submit" name="ss" value="Delete"/>
      </form>
      <?php } ?>
    </td>
    
    </tr>
   <?php } ?>
  </table></center>

 </div>
