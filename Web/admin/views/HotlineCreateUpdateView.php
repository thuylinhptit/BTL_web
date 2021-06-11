<!-- load file layout.php -->

<?php 
	$this->layoutPath = "Layout.php";
 ?>
 <div class="container">
 	<div class="row">
 		<div class="col-md-12">  
		    <div class="panel panel-primary">
		        <div class="panel-heading bg-primary" style="margin: auto;text-align: center;font-size: 25px ; font-weight: bold;border: 1px solid #cccccc; width: 500px;padding: 15px;margin: 20px auto ; color: white; border-radius: 5px;">Thêm sửa thành viên</div>
		        <div class="panel-body">
		        <form method="post" action="<?php echo $action; ?>">
		            <!-- rows -->
		            <div class="row" style="margin-top:5px;">
		                <div class="col-md-2" style="font-weight: bold">Tên cơ quan</div>
		                <div class="col-md-10">
		                    <input type="text" name="name" value="<?php echo isset($record->name)?$record->name:''; ?>" class="form-control" required>
		                </div>
		            </div>
		            <!-- end rows -->
		            <!-- rows -->
		            <div class="row" style="margin-top:5px;">
		                <div class="col-md-2" style="font-weight: bold" >Địa chỉ</div>
		                <div class="col-md-10">
		                    <input type="text" value="<?php echo isset($record->address)?$record->address:''; ?>" name="address" required class="form-control">
		                </div>
		            </div>
		            <!-- end rows -->
		            <!-- rows -->
		            <div class="row" style="margin-top:5px;">
		                <div class="col-md-2" style="font-weight: bold" >Số điện thoại</div>
		                <div class="col-md-10">
		                    <input type="text" name="phone" value="<?php echo isset($record->phone)?$record->phone:''; ?>" class="form-control" required>
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