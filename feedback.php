

<?php  if($this->session->userdata('role') == 'STUDENT'){?>
  <br/>
  <br/>
  <br/>
  <br/>

  <form action="<?php echo base_url('student/feedback'); ?>" method="post"  name="form1" id="form1">
 <center>

  <div style="margin-top:60px; margin-bottom:100px;">
  <table width="100%" border="0">
    <tr><td colspan="6"><center><h3>Post Feedback Here</h3></center></td></tr>
    
    <tr>
      
      <td width="10%">Feedback</td>
      <td width="20%"><input type="text" name="feedback" id="txtfname" required="required" title="Feedback" autocomplete="off" placeholder="Enter Feedback" /></td>
     
      
    </tr>
    
    <tr><center>
    <td></td>
      <td>
     <input type="hidden" name="pr" id="btnsave" value="1" />
        <input type="submit" name="btnsignup" id="btnsave" value="Save" /></td>
      <td><input type="submit" name="btncancel" id="btncancel" value="Cancel" /></td>
   <td></td>
   </center> </tr>
  </table>
</form>
<?php } ?>

<br><br><br><br>
<div style="margin-top:150px; margin-bottom:100px;">
  <table width="100%" border="0" class="w3-table-all">
  <tr><th colspan="5" style="text-align:center"><strong> Feedbacks</strong></th></tr>
  <tr>

  <th>Sl.No.</th>
  <th>Student</th>
  <th>Feedback </th>
  <th>Reply </th>
  <?php  if($this->session->userdata('role') == 'STUDENT'){?><th>Action</th><?php } ?>
  

  </tr>
    <?php $k=1; 
    foreach($feedbacks as $key => $val){ ?>
    <tr>
<td><?php echo $k;?></td>
<td><?php echo $val['fname']." ".$val['lname']."<br/>Sem: ".$val['sem']; ?></td>
<td><?php echo $val['feedback']." <br/>On: ".$val['feedback_date']; ?></td>
<td>
<?php  if($val['reply'] == '--'){ 
  if($this->session->userdata('role') == 'ADMIN'){?>
    <form action="<?php echo base_url('student/feedback'); ?>" method="post"  name="form1" id="form1">
      <input type="text" name="reply" id="btnsave" placeholder="Reply Here" />
      <input type="hidden" name="pr" id="btnsave" value="2" />
      <input type="hidden" name="id" id="btnsave" value="<?php echo $val['id'];?>" />
      <input type="submit" name="btnsignup" id="btnsave" value="Post" />
    </form>
  <?php }else{ echo "--" ; } 
}else{
  echo $val['reply']."<br/>On: ".$val['reply_date'];
}?>
</td>
  <?php  if($this->session->userdata('role') == 'STUDENT'){?>   <td>
  
      <a href="<?php echo base_url('student/feedback'); ?>?id=<?php echo $val['id'];?>&pr=3"> <span style="color:green"><u>Delete</u></span></a>

      
    </td><?php } ?>
    
    </tr>
   <?php $k=$k+1; } ?>
  </table></center>

 </div>
