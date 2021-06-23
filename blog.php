



<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>

<?php  if($this->session->userdata('role') == 'ADMIN'){?>
  <form action="<?php echo base_url('blog/newblog'); ?>" method="post" enctype="multipart/form-data" name="form1" id="form1">
 <center>

  <div style="margin-top:60px; margin-bottom:100px;">
  <table width="100%" border="0" class="w3-table-all">
    <tr>
      <td >Title</td>
      <td ><input type="text" name="title" id="txtfname" size="35" required="required" title="Title" autocomplete="off" placeholder="Enter Title" /></td></tr>
      <tr>
      <td >Details</td>
      <td ><textarea name="details" id="txtfname" maxlength="150" required="required" title="Details" autocomplete="off" placeholder="Enter Details" ></textarea></td>
      </tr>
      <tr><td >Image</td>
      <td ><input type="file" name="pimage" id="txtfname" required="required" title="Pic" autocomplete="off" placeholder="Enter Pic" /></td>
    </tr>
    
    <tr><center>
    
      <td></td>
      <td>
        <input type="submit" name="btnsignup" id="btnsave" value="Save" />
        <input type="submit" name="btncancel" id="btncancel" value="Cancel" /></td>
   
   </center> </tr>
  </table>
</form>
<?php } ?>


 <div style="margin-top:60px; margin-bottom:100px;">
  
  <table width="auto" border="0"  class="w3-table-all">
  <tr>
 <center><b>Blogs</b></center><br><br>
  </tr>

    <?php foreach($blog as $key => $val){ ?>
    <tr>

<td><p><h3><?php echo $val['title']; ?></h3></p>
  <p><?php echo $val['details']; ?></p>

  <p><img src="<?php echo base_url().'/'.$val['pic']; ?>" width="auto%" height="50%"/>
  <div style="float: right;"> <?php echo $val['up_date'];?></div></p>

  
    </td>
    <?php  if($this->session->userdata('role') == 'ADMIN'){?>
      <td>
     <div style="float: right;"> <form name="fg" action="<?php echo base_url('blog/deleteblog'); ?>" method="post">
<input type="hidden" name="i" value="<?php echo $val['Id'];?>"/>
<input type="submit" name="ss" value="Delete"/>
      </form></div></td>
      <?php } ?>
    
    </tr>
   <?php } ?>
  </table></center>

 </div>
