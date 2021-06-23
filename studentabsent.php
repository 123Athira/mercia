
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
<br><br><br><br>
<div style="margin-top:150px; margin-bottom:100px;">
  <?php  if($this->session->userdata('role') != 'USER'){?>
 
  <div style="float: right"><a id="oo" href="#" onclick="printDiv('printableArea')"><strong>Print</strong></a></div><?php } ?>
   <div  id="printableArea">
 <table id="d" width="100%" border="0" class="w3-table-all">
  <tr><th colspan="4" style="text-align:center"><strong>Absent List</strong></th></tr>
  <tr>

  <th>Sl.No.</th>
  <th>Student</th>
  <th>Absent Date </th>
  <?php  if($this->session->userdata('role') == 'FACULTY'){?><th>Action</th><?php } ?>
  

  </tr>
    <?php $k=1; 
    foreach($absents as $key => $val){ ?>
    <tr>
<td><?php echo $k;?></td>
<td><?php echo $val['fname']." ".$val['lname']."<br/>Sem: ".$val['sem']; ?></td>
<td><?php echo $val['absent_date']; ?></td>
     <?php  if($this->session->userdata('role') == 'FACULTY'){?><td>
  
      <a href="<?php echo base_url('student/deleteabsent'); ?>?i=<?php echo $val['Id'];?>&t=<?php echo $val['student'];?>"> <span style="color:green"><u>Delete</u></span></a>

      
    </td><?php } ?>
    
    </tr>
   <?php $k=$k+1; } ?>
  </table>
</div>
</center>

 </div>
