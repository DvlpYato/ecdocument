<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            test department
            <small></small>
        </h1>
    </section>
    <?php echo $test?>
    <!-- Top menu -->
    <!-- Main content -->
    <section class="content">
        <!-- Your Page Content Here -->
        <div class="box">
        <h1>Hello word</h1>
        <div class="form-group">
						<label for="exampleInputEmail1">
							หมวดหมู่เอกสาร
						</label> <?php echo $this->session->flashdata('err_categorie_id'); ?>
						<select class="form-control" name="categorie_id">
							<option value="">
								เลือกข้อมูล
							</option>
							<?php
							foreach($results as $result){
								?>
								<option value="<?php echo $result->id; ?>" <?php if($result->id==$doc->categorie_id){echo "selected"; } ?>>
									<?php echo $result->name; ?>
								</option>
								<?php
							} ?>
						</select>
					</div>
        </div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->