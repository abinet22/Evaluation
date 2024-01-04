<?php
include 'dbcon.php';
if (isset($_GET['id'])) {
	$qry = $conn->query("SELECT * FROM content where content_id = " . $_GET['id'])->fetch_array();
	foreach ($qry as $k => $v) {
		$$k = $v;
	}
}
function ordinal_suffix($num)
{
	$num = $num % 100; // protect against large numbers
	if ($num < 11 || $num > 13) {
		switch ($num % 10) {
			case 1:
				return $num . 'st';
			case 2:
				return $num . 'nd';
			case 3:
				return $num . 'rd';
		}
	}
	return $num . 'th';
}
?>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="col-md-8">
			<div class="card card-outline card-info">
				<div class="card-body">
					<fieldset class="border border-info p-2 w-100">
						<legend class="w-auto">የደረጃ አሰጣጥ</legend>
						<p>5 = በጣም እስማማለሁ, 4 = እስማማለሁ, 3 = እርግጠኛ አይደለሁም, 2 = አልስማማም, 1 = በጣም አልስማማም</p>
					</fieldset>
				</div>
			</div>
			<form id="order-question">
				<div class="clear-fix mt-2"></div>

				<table class="table table-condensed" style="width:100%">

					<tbody class="tr-sortable">
						<?php
						$questions = $conn->query("SELECT * FROM question_list");
						while ($row = $questions->fetch_assoc()) :
							$q_arr[$row['question']] = $row;
						?>
							<thead>
								<tr class="bg-gradient-secondary">
									<th colspan="2" class=" p-1"><b><?php echo $row['description'] ?></b></th>
									<th class="text-center">5</th>
									<th class="text-center">4</th>
									<th class="text-center">3</th>
									<th class="text-center">2</th>
									<th class="text-center">1</th>
									<th class="text-center">ክብደት</th>
									<th class="text-center">ያገኘው ነጥብ</th>
								</tr>
							</thead>
							<tr class="bg-white">
								<td style="width:3%;background:#8d14049e;color:white;">=></td>
								<td class="p-1" width="40%">
									<?php echo $row['question'] ?>
									<input type="hidden" name="qid[]" value="<?php echo $row['question_ID'] ?>">
									<!-- <input type="text" value="<?php echo $row['description'] ?>"> -->
								</td>
								<!-- ክብደት	ያገኘው ነጥብ -->
								<?php for ($c = 0; $c < 5; $c++) : ?>
									<td class="text-center">
										<div class="icheck-success d-inline">
											<input type="radio" name="qid[<?php echo $row['question_ID'] ?>][]" id="qradio<?php echo $row['question_ID'] . '_' . $c ?>">
											<label for="qradio<?php echo $row['question'] . '_' . $c ?>">
											</label>
										</div>
									</td>
								<?php endfor; ?>
								<!-- end of ክብደት	ያገኘው ነጥብ -->

								<td colspan="1" class=" p-1" style="background:#05c588;font-size:27px;padding:20px;"><b><?php echo $row['weight'] ?></b></td>
								<td colspan="2" class=" p-1" style="background:#039715;width:50px;"><b><?php echo $row['result_point'] ?></b></td>

							</tr>
						<?php endwhile; ?>
					</tbody>
				</table>

			</form>
		</div>
	</div>
</div>

<script>
	$(document).ready(function() {
		$('.select2').select2({
			placeholder: "Please select here",
			width: "100%"
		});
	})
	$('.edit_question').click(function() {
		var id = $(this).attr('data-id')
		var question = <?php echo json_encode($q_arr) ?>;
		$('#manage-question').find("[name='id']").val(question[id].id)
		$('#manage-question').find("[name='question']").val(question[id].question)
		$('#manage-question').find("[name='criteria_id']").val(question[id].criteria_id).trigger('change')
	})
	$('.delete_question').click(function() {
		_conf("Are you sure to delete this question?", "delete_question", [$(this).attr('data-id')])
	})
	$('#eval_restrict').click(function() {
		uni_modal("Manage Evaluation Restrictions", "<?php echo $_SESSION['login_view_folder'] ?>manage_restriction.php?id=<?php echo $id ?>", "mid-large")
	})
	$('.tr-sortable').sortable()
	$('#manage-question').on('reset', function() {
		$(this).find('input[name="id"]').val('')
		$('#manage-question').find("[name='criteria_id']").val('').trigger('change')
	})
	$('#manage-question').submit(function(e) {
		e.preventDefault()
		start_load()
		if ($('#question').val() == '') {
			alert_toast("Please fill the question description first", 'error');
			end_load();
			return false;
		}
		$.ajax({
			url: 'ajax.php?action=save_question',
			data: new FormData($(this)[0]),
			cache: false,
			contentType: false,
			processData: false,
			method: 'POST',
			type: 'POST',
			success: function(resp) {
				if (resp == 1) {
					alert_toast('Data successfully saved', "success");
					setTimeout(function() {
						location.reload()
					}, 1500)
				}
			}
		})
	})
	$('#order-question').submit(function(e) {
		e.preventDefault()
		start_load()
		$.ajax({
			url: 'ajax.php?action=save_question_order',
			data: new FormData($(this)[0]),
			cache: false,
			contentType: false,
			processData: false,
			method: 'POST',
			type: 'POST',
			success: function(resp) {
				if (resp == 1) {
					alert_toast('Order successfully saved', "success");
					end_load()
				}
			}
		})
	})

	function delete_question($id) {
		start_load()
		$.ajax({
			url: 'ajax.php?action=delete_question',
			method: 'POST',
			data: {
				id: $id
			},
			success: function(resp) {
				if (resp == 1) {
					alert_toast("Data successfully deleted", 'success')
					setTimeout(function() {
						location.reload()
					}, 1500)

				}
			}
		})
	}
</script>