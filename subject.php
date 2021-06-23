

<?php  if($this->session->userdata('role') == 'ADMIN'){?>
  <form action="<?php echo base_url('subject/newsubject'); ?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
 <center>

  <div style="margin-top:60px; margin-bottom:100px;">
  <table width="420" border="0">
    <tr>
      <td width="140">Subject</td>
      <td width="270"><input type="text" name="name" id="txtfname" required="required" title="Course" autocomplete="off" placeholder="Enter Course" /></td>
    </tr>
    <tr>
      <td width="140">Course</td>
      <td width="270">
<select name="course">
   <?php foreach($courses as $key => $val){ ?>
  <option value="<?php echo $val['id']; ?>"><?php echo $val['name']; ?></option>
    <?php
  }
  ?>
</select>
      </td>
    </tr>
    
    <tr><center>
    
      <td><input type="submit" name="btnsignup" id="btnsave" value="Save" /></td>
      <td><input type="submit" name="btncancel" id="btncancel" value="Cancel" /></td>
   
   </center> </tr>
  </table>
</form>
<?php } ?>


 <div style="margin-top:60px; margin-bottom:100px;">
  <center><strong>SUBJECT LIST</strong></center><br><br>
  <table id="d" width="100%" border="0" class="w3-table-all">
  <tr>
  <th>Subject </th>
  <th>Course </th>
  <?php  if($this->session->userdata('role') == 'ADMIN'){?>
  <th>Action</th>
<?php } ?>
  

  </tr>
    <?php foreach($subjects as $key => $val){ ?>
    <tr>

<td><?php echo $val['name']; ?></td>
<td><?php echo $val['course_name']; ?></td>
     <?php  if($this->session->userdata('role') == 'ADMIN'){?><td>
      <form name="fg" action="<?php echo base_url('subject/deletesubject'); ?>" method="post">
<input type="hidden" name="i" value="<?php echo $val['id'];?>"/>
<input type="submit" name="ss" value="Delete"/>
      </form>
     
    </td> <?php } ?>
    
    </tr>
   <?php } ?>
  </table></center>

 </div>
