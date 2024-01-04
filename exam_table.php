	<?php include('dbcon.php'); ?>
	<form action="delete_assigned.php" method="post">
	<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
	<a data-toggle="modal" href="#assigned_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
	<?php include('modal_delete.php'); ?>
	<h1>የደረጃ አሰጣጥ</h1>
        <p class="">
5 = በጣም እስማማለሁ, 4 = እስማማለሁ, 3 = እርግጠኛ አይደለሁም, 2 = አልስማማም, 1 = በጣም አልስማማም</p>
	<table>
		<tr>

					<th>ተራ/ቁጥር</th>
					<th>[5]</th>
					<th>[4]</th>
					<th>[3]</th>
					<th>[2]</th>
					<th>[1]</th>
		</tr>
		
		<tbody>
		<tr>
		<td><?php echo $row['question']; ?></td>
		<td><input type="radio" value="none" name="front" /></td>	
        <td><input type="radio" value="none" name="front" /></td>		
		<td><input type="radio" name="qid[24][]" id="qradio24_0"></td> 
		<td><input type="radio" name="qid[24][]" id="qradio24_0"></td>
		<td><input type="radio" name="qid[24][]" id="qradio24_0"></td>
		 
	
		</tr>  
	
		</tbody>
	</table>
	</form>