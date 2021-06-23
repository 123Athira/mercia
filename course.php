

<?php  if($this->session->userdata('role') == 'ADMIN'){?>
  <br/>
  <br/><br/>
  <br/><br/>
  <br/>
  <center><h4>New Course Details</h4></center>
  <form action="<?php echo base_url('course/newcourse'); ?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
 <center>

  <div style="margin-top:60px; margin-bottom:100px;">
  <table width="420" border="0">
    <tr>
      <td width="140">Course Code</td>
      <td width="270"><input type="text" name="code" id="txtfname" required="required" title="Course Code" autocomplete="off" placeholder="Enter Course Code" /></td>
    </tr>
    <tr>
      <td width="140">Course Name</td>
      <td width="270"><input type="text" name="name" id="txtfname" required="required" title="Course" autocomplete="off" placeholder="Enter Course" /></td>
    </tr>
    
    <tr><center>
    
      <td><input type="submit" name="btnsignup" id="btnsave" value="Save" /></td>
      <td><input type="submit" name="btncancel" id="btncancel" value="Cancel" /></td>
   
   </center> </tr>
  </table>
</form>
<?php } ?>


 <div style="margin-top:60px; margin-bottom:100px;">
  <center><strong>COURSE LIST</strong></center><br><br>
 <table id="d" width="100%" border="0" class="w3-table-all">
  <tr>
<th>Code </th>
  <th>Course </th>
  <th>Action</th>
  

  </tr>
    <?php foreach($courses as $key => $val){ ?>
    <tr>
<td><?php echo $val['code']; ?></td>
<td><?php echo $val['name']; ?></td>
     <td>
  <?php  if($this->session->userdata('role') == 'ADMIN'){?>
      <form name="fg" action="<?php echo base_url('course/deletecourse'); ?>" method="post">
<input type="hidden" name="i" value="<?php echo $val['id'];?>"/>
<input type="submit" name="ss" value="Delete"/>
      </form>
      <?php } ?>
    </td>
    
    </tr>
   <?php } ?>
  </table></center>

 </div>
