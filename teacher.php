

<?php  if($this->session->userdata('role') == 'ADMIN'){?>
  <form action="<?php echo base_url('teacher/newteacher'); ?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
 <center>

  <div style="margin-top:60px; margin-bottom:100px;">
  <table width="420" border="0">
    <tr>
      <td colspan="2" align="center"><strong>New Teacher</strong></td>

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
        <td width="140">Course :<select name="course">
   <?php foreach($courses as $key => $val){ ?>
  <option value="<?php echo $val['id']; ?>"><?php echo $val['name']; ?></option>
    <?php
  }
  ?>
</select></td>
    </tr>
    <tr>
      <td width="140">Qualification:<input type="text" name="qualification" id="txtfname" required="required" title="Qualification" autocomplete="off" placeholder="Enter Qualification" /></td>
        <td width="140">Password :<input type="password" name="password" id="txtlname" required="required" title="Password" autocomplete="off" placeholder="Enter Password" /></td>
    </tr>
    <tr><center>
    
      <td><input type="submit" name="btnsignup" id="btnsave" value="Save" /></td>
      <td><input type="submit" name="btncancel" id="btncancel" value="Cancel" /></td>
   
   </center> </tr>
  </table>
</form>
<?php } ?>


 <div style="margin-top:60px; margin-bottom:100px;">
    <table width="100%" border="0" class="w3-table-all">
    <tr>
  <td colspan="6"><div style="text-align: center;"><center><strong><h2>Teachers List</h2></strong></center></div></td>
  <td colspan="3"><div style="text-align: right;"><a href="<?php echo base_url('student/'); ?>" ><h5><span style="color:black"><u>View Students</u></span></h5></a> </div></td></tr>
  <tr>

  <th>Name </th>
  <th>Address</th>
   <th>Email </th>
  <th>ContactNo</th>
   <th>DOB </th>
  <th>Gender</th>
  <th>Course</th>
   <th>Qualification </th>
   <th>Action</th>
  </tr>
    <?php foreach($teachers as $key => $val){ ?>
    <tr>

<td width="10%"><?php echo $val['fname']; ?>&nbsp;<?php echo $val['lname']; ?></td>
<td width="10%"><?php echo $val['address']; ?></td>
<td width="10%"><?php echo $val['email']; ?></td>
<td width="10%"><?php echo $val['contact']; ?></td>
<td width="10%"><?php echo $val['dob']; ?></td>
<td width="10%"><?php echo $val['gender']; ?></td>
<td width="10%"><?php echo $val['course']; ?></td>
<td width="10%"><?php echo $val['qualification']; ?></td>
     <td width="10%">
  <?php  if($this->session->userdata('role') == 'ADMIN'){?>
     <a href="<?php echo base_url('teacher/deleteteacher'); ?>?i=<?php echo $val['userid'];?>"> <span style="color:green"><u>Delete</u></span></a>
      
      <br/>
      <a href="<?php echo base_url('teacher/markabsent'); ?>?i=<?php echo $val['userid'];?>"> <span style="color:green"><u>Mark Absent</u></span></a>

      <br/>  
      <a href="<?php echo base_url('subject/faculty_subject'); ?>?faculty=<?php echo $val['userid'];?>"> <span style="color:green"><u>Subjects</u></span></a>
      
    <?php } ?>
        <?php  if($this->session->userdata('role') == 'FACULTY'  ){
          if($this->session->userdata('user_id') == $val['userid'] ){?>
      <a href="<?php echo base_url('teacher/viewabsent'); ?>?i=<?php echo $val['userid'];?>"> <span style="color:green"><u>View Absent</u></span></a>
      <br/>  
      <a href="<?php echo base_url('subject/faculty_subject'); ?>?faculty=<?php echo $val['userid'];?>"> <span style="color:green"><u>Subjects</u></span></a>
      <?php } } ?>
      <?php  if($this->session->userdata('role') == 'ADMIN'  ){
        ?>
      <a href="<?php echo base_url('teacher/viewabsent'); ?>?i=<?php echo $val['userid'];?>"> <span style="color:green"><u>View Absent</u></span></a>
      
      <?php }  ?>
    </td>
    
    </tr>
   <?php } ?>
  </table></center>

 </div>
