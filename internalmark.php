<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<script type="text/javascript">
  function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
<style>
#oo:link, #oo:visited {
  background-color: white;
  color: #53A493;
  border: 2px solid #53A493;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

#oo:hover, #oo:active {
  background-color: #53A493;
  color: white;
}
</style>

<?php  if($this->session->userdata('role') == 'FACULTY'){?>
  <br/>
  <br/>
  <br/>
  <br/>

  <form action="<?php echo base_url('student/internalmark'); ?>?i=<?php echo $student;?>&ci=<?php echo $course;?>" method="post"  name="form1" id="form1">
 <center>

  <div style="margin-top:60px; margin-bottom:100px;">
  <table width="100%" border="0">
    <tr><td colspan="6"><center><h3>Internal Mark Details</h3></center></td></tr>
    
    <tr>
      <td width="10%">Subject</td>
      <td width="20%">
<select name="subj">
   <?php foreach($subjects as $key => $val){ ?>
  <option value="<?php echo $val['id']; ?>"><?php echo $val['name']; ?></option>
    <?php
  }
  ?>
</select>
      </td>
      <td width="10%">Mark</td>
      <td width="20%"><input type="number" name="mark" id="txtfname" required="required" title="Mark" autocomplete="off" placeholder="Enter Exam Mark" /></td>
     
      
    </tr>
    
    <tr><center>
    <td></td>
      <td>
      <input type="hidden" name="pr" id="btnsave" value="new" />
        <input type="submit" name="btnsignup" id="btnsave" value="Save" /></td>
      <td><input type="submit" name="btncancel" id="btncancel" value="Cancel" /></td>
   <td></td>
   </center> </tr>
  </table>
</form>
<?php } ?>

<br><br><br><br>
<div style="margin-top:150px; margin-bottom:100px;">
  <?php  if($this->session->userdata('role') != 'USER'){?>
 
  <div style="float: right"><a id="oo" href="#" onclick="printDiv('printableArea')"><strong>Print</strong></a></div><?php } ?>
   <div  id="printableArea">
  <table id="d" width="100%" border="0" class="w3-table-all">
  <tr><th colspan="5" style="text-align:center"><strong>Internal Mark List</strong></th></tr>
  <tr>

  <th>Sl.No.</th>
  <th>Student</th>
  <th>Subject </th>
  <th>Mark </th>
  <?php  if($this->session->userdata('role') == 'FACULTY'){?><th>Action</th><?php } ?>
  

  </tr>
    <?php $k=1; 
    foreach($marks as $key => $val){ ?>
    <tr>
<td><?php echo $k;?></td>
<td><?php echo $val['fname']." ".$val['lname']."<br/>Sem: ".$val['sem']; ?></td>
<td><?php echo $val['subject_name']; ?> - <?php echo $val['course_name']; ?></td>
<td><?php echo $val['mark']; ?></td>
  <?php  if($this->session->userdata('role') == 'FACULTY'){?>   <td>
  
      <a href="<?php echo base_url('student/deletemark'); ?>?id=<?php echo $val['Id'];?>&i=<?php echo $val['student'];?>&ci=<?php echo $course;?>"> <span style="color:green"><u>Delete</u></span></a>

      
    </td><?php } ?>
    
    </tr>
   <?php $k=$k+1; } ?>
  </table>
</div>
</center>

 </div>
