

<?php  if($this->session->userdata('role') == 'ADMIN'){?>
  <form action="<?php echo base_url('student/newstudent'); ?>" method="post"  name="form1" id="form1">
 <center>

  <div style="margin-top:60px; margin-bottom:100px;">
  <table width="520" border="0">
      <tr>
      <td colspan="2" align="center"><strong>New Student</strong></td>

    </tr>
       <tr>
      <td width="140">Fist Name :<input type="text" name="fname" id="txtfname" required="required" title="First Name" autocomplete="off" placeholder="Enter First Name" /></td>
        <td width="140">Last Name :<input type="text" name="lname" id="txtlname" required="required" title="Last Name" autocomplete="off" placeholder="Enter Last Name" /></td>
    </tr>
          <tr>
      <td width="140">Address :<input type="text" name="address" id="a" required="required" title="Address" autocomplete="off" placeholder="Enter Address" /></td>
        <td width="140">Email :<input type="email" name="email" id="txtlname" required="required" title="Email" autocomplete="off" placeholder="Enter Email" /></td>
    </tr>
          <tr>
      <td width="140">Contact Number:<input type="Number" name="contact" id="txtfname" required="required" title="Contact Number" autocomplete="off" placeholder="Enter Contact Number" /></td>
        <td width="140">Date of Birth :<input type="date" name="dob" id="txtlname" required="required" title="DOB" autocomplete="off" placeholder="Enter DOB" /></td>
    </tr>
          <tr>
      <td width="140">Gender :<input type="radio" name="gender" id="txtfname" required="required" checked="checked" value="Male"/>Male <input type="radio" name="gender" id="txtfname" required="required" value="FeMale"/>Female</td>
        <td width="140">Course :<select name="course2">
   <?php $str=''; foreach($courses as $key => $val){ $str .= ', '.$val['id'];?>
  <option value="<?php echo $val['id']; ?>"><?php echo $val['name']; ?></option>
    <?php
  }
  ?>
</select></td>
    </tr>
    <tr>
      <td width="140">Semester:<select name="sem">
        <option>Sem 1</option>
        <option>Sem 2</option>
        <option>Sem 3</option>
        <option>Sem 4</option>
        <option>Sem 5</option>
        <option>Sem 6</option>

      </select></td>
        <td width="140">Password :<input type="password" name="password" id="txtlname" required="required" title="Password" autocomplete="off" placeholder="Enter Password" /></td>
    </tr>
    <tr><center>
    
      <td><input type="submit" name="btnsignup" id="btnsave" value="Save" /></td>
      <td><input type="reset" name="btncancel" id="btncancel" value="Cancel" /></td>
   
   </center> </tr>
  </table>
</form>
<?php } ?>


 <div style="margin-top:60px; margin-bottom:100px;">
  <br><br>
  <table id="d" width="100%" border="0" class="w3-table-all">

<tr>
  <td colspan="6"><div style="text-align: center;"><center><strong><h2>Students List</h2></strong></center></div></td>
  <td colspan="3"><div style="text-align: right;"><a href="<?php echo base_url('teacher/'); ?>" ><h5><span style="color:black"><u>View Teachers</u></span></h5></a> </div></td></tr>
  <tr>
    <td colspan="2"></td>
    <td colspan="5"><select name="course" id="courseid">
      <option value="-1">All</option>
   <?php foreach($courses as $key => $val){ ?>
  <option value="<?php echo $val['id']; ?>"><?php echo $val['name']; ?></option>
    <?php
  }
  ?>
</select></td>
<td colspan="2"></td>
  </tr>
  <tr>
  <th>Name </th>
  <th>Address</th>
   <th>Email </th>
  <th>ContactNo</th>
   <th>DOB </th>
  <th>Gender</th>
  <th>Course</th>
   <th>Sem </th>
   <th>Action</th>
  </tr>
</table>
<div id="students">
  <table id="d" width="100%" border="0" class="w3-table-all">
    <?php foreach($students as $key => $val){ ?>
    <tr>

<td width="10%"><?php echo $val['fname']; ?>&nbsp;<?php echo $val['lname']; ?></td>
<td width="10%"><?php echo $val['address']; ?></td>
<td width="10%"><?php echo $val['email']; ?></td>
<td width="10%"><?php echo $val['contact']; ?></td>
<td width="10%"><?php echo $val['dob']; ?></td>
<td width="10%"><?php echo $val['gender']; ?></td>
<td width="10%"><?php echo $val['course']; ?></td>
<td width="10%"><?php echo $val['sem']; ?></td>
     <td width="10%">
  <?php  if($this->session->userdata('role') == 'ADMIN'){?>
    <a href="<?php echo base_url('student/deletestudent'); ?>?i=<?php echo $val['userid'];?>"> <span style="color:green"><u>Delete</u></span></a>
   <br/>
    
            <?php } else{?>
            <?php  if($this->session->userdata('role') == 'FACULTY'){ ?>
    <a href="<?php echo base_url('student/markabsent'); ?>?i=<?php echo $val['userid'];?>"> <span style="color:green"><u>Mark Absent</u></span></a>
   <br/>
    
    
            <?php } ?>
            <a href="<?php echo base_url('student/internalmark'); ?>?i=<?php echo $val['userid'];?>&ci=<?php echo $val['course'];?>"> <span style="color:green"><u>Internal Mark</u></span></a>
            <br/>
            <a href="<?php echo base_url('student/viewabsent'); ?>?i=<?php echo $val['userid'];?>"> <span style="color:green"><u>View Absent</u></span></a>
          <?php } ?>
    </td>
    
    </tr>
   <?php } ?>
  </table></div></center>

 </div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
 $('#courseid').change(function(){
  var course_id = $('#courseid').val();
  if(course_id != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>student/fetch_student",
    method:"POST",
    data:{course_id:course_id},
    success:function(data)
    {
     $('#students').html(data);
     
    }
   });
  }
  else
  {
   $('#students').html('<tr><td colspan="9">No Data</td></tr>');
  }
 });

 
 
});
</script>
