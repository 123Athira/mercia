
<script type="text/javascript">

 (function($) {
    $.fn.invisible = function() {
        return this.each(function() {
            $(this).css("visibility", "hidden");
        });
    };
    $.fn.visible = function() {
        return this.each(function() {
            $(this).css("visibility", "visible");
        });
    };
}(jQuery));



  function printDiv(divName) {

    var originalContents = document.body.innerHTML;


    //document.getElementById('testclass').style.visibility=do_show?"":"collapse";
//$('#d th:nth-child(2)').hide();
//$('#st').hide();
//alert($('$up').text));

     var printContents = document.getElementById(divName).innerHTML;
     

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
<?php  if($this->session->userdata('role') == 'STUDENT'){?>
  <br/>
  <br/><br/>
  <br/><br/>
  <br/>
  <center><h4>Leave Request</h4></center>
  <form action="<?php echo base_url('user/leaverequest_student'); ?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
 <center>

  <div style="margin-top:60px; margin-bottom:100px;">
  <table width="420" border="0">
    <tr>
      <td width="140">Leave Date</td>
      <td width="270"><input type="date" name="leave_date" id="txtfname" required="required" title="Leave Date" autocomplete="off" placeholder="Enter Leave Date " /></td>
    </tr>
    <tr>
      <td width="140">Leave Reason</td>
      <td width="270"><input type="text" name="reason" id="txtfname" required="required" title="Reason for Leave" autocomplete="off" placeholder="Enter Reason For Leave" /></td>
    </tr>
    
    <tr><center>
    <td></td>
   
      <td><input type="submit" name="btnsignup" id="btnsave" value="Request" /></td>
      
   </center> </tr>
  </table>
</form>
<?php } ?>


 <div style="margin-top:60px; margin-bottom:100px;">
  <center><strong>Leave Requests</strong></center><br>
  <table id="d" width="100%" border="0" class="w3-table-all">
    <tr>
      <td colspan="7">
        <center>
        <form name="ddd" action="<?php echo base_url('user/leaverequest_student'); ?>" method="post">
        Date :   <input length="35" type="date" name="leave_date_filter" required="required"/><input type="submit" name="sbmt" value="Filter"/>
        
      </form></center>
    </td>
    </tr>
  </table><br>
  <?php  if($this->session->userdata('role') != 'STUDENT'){?>
 
  <div style="float: right"><a id="oo" href="#" onclick="printDiv('printableArea')"><strong>Print</strong></a></div><?php } ?>
   <div  id="printableArea">
 <table  id="someTable" width="100%" border="0" class="w3-table-all">
  <thead><tr>
<th data-name="AM">Sl.No. </th>
  <th data-name="A">User Info </th>
  <th data-name="AR">Date </th>
  <th data-name="AQ">Reason </th>
  <th data-name="AD">Status </th>
  <th data-name="E">Request Date </th>
  <th data-name="AA" class="phone">Action</th>
  

  </tr>
</thead>
  <tbody>  <?php 
    $i =1;
    foreach($leave as $key => $val){ ?>
    <tr>
<td><?php echo $i++; ?></td>
<td><?php echo $val['fname']." ".$val['lname']; ?>
  <p><?php echo $val['course_name']." ".$val['sem']; ?></p>
</td>
<td><?php echo $val['leave_date']; ?></td>
<td><?php echo $val['reason']; ?></td>
<td><?php echo $val['status']; ?></td>
<td><?php echo $val['request_date']; ?></td>
     <td id="testclass">

  <?php  if($this->session->userdata('role') == 'STUDENT'){
    if($val['status'] == 'Requested'){
    ?>
      <form name="fg" action="<?php echo base_url('user/leaverequest_student'); ?>" method="post">
<input type="hidden" name="i" value="<?php echo $val['Id'];?>"/>
<input type="submit" name="ss" value="Delete"/>
      </form>
      <?php } } 
      if($this->session->userdata('role') == 'ADMIN'){
        if($val['status'] == 'Requested'){
        ?>
<div id="dd">
        <form name="fg" action="<?php echo base_url('user/leaverequest_student'); ?>" method="post">
          <input id="st" type="text" name="status" placeholder="Update Status" />
<input type="hidden" name="id" value="<?php echo $val['Id'];?>"/>
<input id="up" type="submit" name="ss" value="Update"/>
</form>
</div>
        <?php 
      }
    }
      ?>
    </td>
    
    </tr>
   <?php } ?>
 </tbody>
  </table>
</div></center>

 </div>
