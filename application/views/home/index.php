<div>
	<?php if (isset($error)): ?>
		<div><?php echo $error; ?></div>
	<?php endif; ?>
	<?php if ($this->session->flashdata('success') == TRUE): ?>
		<div><?php echo $this->session->flashdata('success'); ?></div>
	<?php endif; ?>

	<form method="post" action="<?=base_url('import')?>" enctype="multipart/form-data">
		<div>
			<label>Select CSV file to import data:</label>
				<input type="file" name="csvfile"/>
		</div>

		<input type="submit" value="Import" class="btn btn-success" />
	</form>
</div>