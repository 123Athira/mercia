

<?php  if($this->session->userdata('role') != 'STUDENT'){?>
  <br/>
  <br/>
  <br/>
  <br/>

  <form action="<?php echo base_url('exam/newexam'); ?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
 <center>

  <div style="margin-top:60px; margin-bottom:100px;">
  <table width="100%" border="0">
    <tr><td colspan="6"><center><h3>New Exam Details</h3></center></td></tr>
    <tr>
      <td width="10%">Title</td>
      <td width="20%"><input type="text" name="title" id="txtfname" required="required" title="Title" autocomplete="off" placeholder="Enter Title" /></td>
      <td width="10%">Exam Date</td>
      <td width="20%"><input type="text" name="date" id="txtfname" required="required" title="Date" autocomplete="off" placeholder="Enter Exam Date" /></td>
      <td width="10%">Exam Time</td>
      <td width="20%"><input type="text" name="time" id="txtfname" required="required" title="Time" autocomplete="off" placeholder="Enter Exam Time" /></td>
    </tr>
    <tr>
      <td width="10%">Subject</td>
      <td width="20%">
<select name="subject">
   <?php foreach($subjects as $key => $val){ ?>
  <option value="<?php echo $val['id']; ?>"><?php echo $val['name']; ?></option>
    <?php
  }
  ?>
</select>
      </td>
      <td width="10%">Exam Duration</td>
      <td width="20%"><input type="text" name="duration" id="txtfname" required="required" title="Duration" autocomplete="off" placeholder="Enter Exam Duration" /></td>
     
      <td width="10%">Exam Portion</td>
      <td width="50%"><textarea name="portion" id="txtfname" required="required" title="Exam Portion" autocomplete="off" placeholder="Enter Exam Portion" ></textarea></td>
    </tr>
    
    <tr><center>
    <td></td>
      <td><input type="submit" name="btnsignup" id="btnsave" value="Save" /></td>
      <td><input type="submit" name="btncancel" id="btncancel" value="Cancel" /></td>
   <td></td>
   </center> </tr>
  </table>
</form>
<?php } ?>


 <div style="margin-top:60px; margin-bottom:100px;">
  <center><strong><h2>EXAM LIST</h2></strong></center><br>
   <form name="ddd" action="<?php echo base_url('exam'); ?>" method="post">
    <table id="d" width="auto" border="0" class="w3-table-all">
    <tr>
      <td colspan="3"></td>
      <td colspan="2">
        <center>
       
      Course :     <select name="course">
   <?php foreach($courses as $key => $val){ ?>
  <option value="<?php echo $val['id']; ?>"><?php echo $val['name']; ?></option>
    <?php
  }
  ?>
</select>
        
        
      </center>
    </td>
    <td colspan="2"><input type="submit" name="sbmt" value="Filter"/></td>
    </tr>
  </table></form>
  <br>
 <table id="d" width="100%" border="0" class="w3-table-all">
  <tr>

  <th width="15%">Title </th>
  <th width="10%">Exam Date & Time </th>
  <th width="10%">Duration </th>  
  <th width="10%">Subject </th>
  <th width="10%">Portion </th>
<?php  if($this->session->userdata('role') == 'ADMIN'){?>
  <th width="10%">Action</th>
  
<?php } ?>
  </tr>
    <?php foreach($exam as $key => $val){ ?>
    <tr>

<td><?php echo $val['title']; ?></td>
<td><?php echo $val['exam_date']; ?>&nbsp; & <?php echo $val['exam_time']; ?></td>
<td><?php echo $val['duration']; ?></td>
<td><?php echo $val['subject_name']; ?></td>
<td><?php echo $val['portion']; ?></td>
   <?php  if($this->session->userdata('role') == 'ADMIN'){?>  <td>
   
      <form name="fg" action="<?php echo base_url('exam/deleteexam'); ?>" method="post">
<input type="hidden" name="i" value="<?php echo $val['id'];?>"/>
<input type="submit" name="ss" value="Delete"/>
      </form>
      
    </td><?php } ?>
    
    </tr>
   <?php } ?>
  </table></center>

 </div>
