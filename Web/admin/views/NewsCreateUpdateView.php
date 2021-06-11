<!-- load file layout.php -->

<?php
$this->layoutPath = "Layout.php";
?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading bg-primary" style="margin: auto;text-align: center;font-size: 25px ; font-weight: bold;border: 1px solid #cccccc; width: 500px;padding: 15px;margin: 20px auto ; color: white; border-radius: 5px;">Thêm sửa tin tức</div>
				<div class="panel-body">
					<form method="post" enctype="multipart/form-data" action="<?php echo $action; ?> ">

						<!-- rows -->
						<div class="row" style="margin-top:5px;">
							<div class="col-md-2" style="font-weight: bold;">Tiêu đề</div>
							<div class="col-md-10">
								<input type="text" value="<?php echo isset($record->title) ? $record->title : ''; ?>" name="title" required class="form-control">
							</div>
						</div>
						<!-- end rows -->
						<!-- rows -->
						<div class="row" style="margin-top:5px;">
							<div class="col-md-2" style="font-weight: bold;">Thời gian</div>
							<div class="col-md-10">
								<input type="text" name="time" value="<?php echo isset($record->time) ? $record->time : ''; ?>" class="form-control" required>
							</div>
						</div>
						<!-- end rows -->
						<!-- rows -->
						<div class="row" style="margin-top:5px;">
							<div class="col-md-2" style="font-weight: bold;">Nội dung</div>

							<div class="col-md-10">
								<textarea name="content">
                    	<?php echo isset($record->content) ? $record->content : ''; ?>
                    </textarea>
								<script type="text/javascript">
									CKEDITOR.replace("content");
								</script>
							</div>
						</div>
						<!-- end rows -->
						<!-- rows -->
						<div class="row" style="margin-top:5px;">
							<div class="col-md-2" style="font-weight: bold;">Ảnh</div>
							<div class="col-md-10">
								<input type="file" name="photo">
							</div>
						</div>
						<!-- end rows -->
						<br>
						<!-- rows -->
						<div class="row" style="margin-top:5px;">
							<div class="col-md-2"></div>
							<div class="col-md-10">
								<input type="submit" value="Hoàn thành" class="btn btn-primary">
							</div>
						</div>
						<!-- end rows -->
					</form>
				</div>
			</div>
		</div>
	</div>
</div>