<!-- load file layout.php -->

<?php 
	$this->layoutPath = "Layout.php";
 ?>
 <div class="container">
 	<div class="row">
 		<div class="col-md-12">  
		    <div class="panel panel-primary">
		        <div class="panel-heading bg-primary" style="margin: auto;text-align: center;font-size: 25px ; font-weight: bold;border: 1px solid #cccccc; width: 500px;padding: 15px;margin: 20px auto ; color: white; border-radius: 5px;">Thêm sửa phương tiện</div>
		        <div class="panel-body">
		        <form method="post" action="<?php echo $action; ?>">
		            <!-- rows -->
		            <div class="row" style="margin-top:5px;">
		                <div class="col-md-2"  style="font-weight: bold;">Biển số</div>
		                <div class="col-md-10">
		                    <input type="text" name="bienso" value="<?php echo isset($record->bienso)?$record->bienso:''; ?>" class="form-control" required>
		                </div>
		            </div>
		            <!-- end rows -->
		            <!-- rows -->
		            <div class="row" style="margin-top:5px;">
		                <div class="col-md-2" style="font-weight: bold;">Loại xe</div>
		                <div class="col-md-10">
		                    <input type="text" value="<?php echo isset($record->type)?$record->type:''; ?>" name="type" required class="form-control">
		                </div>
		            </div>
		            <!-- end rows -->
		            <!-- rows -->
		            <div class="row" style="margin-top:5px;">
		                <div class="col-md-2" style="font-weight: bold;">Lỗi vi phạm</div>
		                <div class="col-md-10">
		                    <input type="text" name="mistake" value="<?php echo isset($record->mistake)?$record->mistake:''; ?>" class="form-control" required>
		                </div>
		            </div>
		            <!-- end rows -->
		            <!-- rows -->
		            <div class="row" style="margin-top:5px;">
		                <div class="col-md-2" style="font-weight: bold;">Thời gian</div>
		                <div class="col-md-10">
						<input type="text" name="time" value="<?php echo isset($record->time)?$record->time:''; ?>" class="form-control" required>
		                </div>
		            </div>
		            <!-- end rows -->
					<!-- rows -->
		            <div class="row" style="margin-top:5px;">
		                <div class="col-md-2" style="font-weight: bold;">Địa điểm</div>
		                <div class="col-md-10">
						<input type="text" name="location" value="<?php echo isset($record->location)?$record->location:''; ?>" class="form-control" required>
		                </div>
		            </div>
		            <!-- end rows -->
					<!-- rows -->
		            <div class="row" style="margin-top:5px;">
		                <div class="col-md-2" style="font-weight: bold;">Chi phí</div>
		                <div class="col-md-10">
		                    <input type="text" name="cost" value="<?php echo isset($record->cost)?$record->cost:''; ?>" class="form-control" required>
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