
<br><br><br><br>
<div style="margin-top:150px; margin-bottom:100px;">
  <table id="d" width="100%" border="0" class="w3-table-all">
  <tr><th colspan="3" style="text-align:center"><strong>Absent List</strong></th></tr>
  <tr>

  <th>Sl.No.</th>
  <th>Absent Date </th>
  <th>Action</th>
  

  </tr>
    <?php $k=1; 
    foreach($absents as $key => $val){ ?>
    <tr>
<td><?php echo $k;?></td>
<td><?php echo $val['absent_date']; ?></td>
     <td>
  <?php  if($this->session->userdata('role') == 'ADMIN'){?>
      <a href="<?php echo base_url('teacher/deleteabsent'); ?>?i=<?php echo $val['Id'];?>&t=<?php echo $val['faculty'];?>"> <span style="color:green"><u>Delete</u></span></a>

      <?php } ?>
    </td>
    
    </tr>
   <?php $k=$k+1; } ?>
  </table></center>

 </div>
