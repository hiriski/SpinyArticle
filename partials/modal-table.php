<?php $conn = mysqli_connect("localhost", "root", "", "spinygox"); ?>

<!-- Modal Table -->
<div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
  <div class="modal-spinner modal-dialog modal-xl modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Table data_spinner</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
				<div class="overflow-auto">
					<?php
							$sqlSelect = "SELECT * FROM data_spinner";
							$result = mysqli_query($conn, $sqlSelect);
							
							if (mysqli_num_rows($result) > 0) {
						?>
							<table id='userTable' class="table table-border">
							<thead>
									<tr class="table thead-dark">
											<th>ID</th>
											<th>Keyword</th>
											<th>Nama Klien</th>
											<th>No. File</th>
									</tr>
							</thead>
								<?php
									
									while ($row = mysqli_fetch_array($result)) {
											?>
											
									<tbody>
									<tr>
											<td><?php  echo $row['id']; ?></td>
											<td><?php  echo $row['keyword']; ?></td>
											<td><?php  echo $row['namaklien']; ?></td>
											<td><?php  echo $row['no_file']; ?></td>
									</tr>
											<?php
									}
									?>
									</tbody>
					</table>
					<?php } ?>
				</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>