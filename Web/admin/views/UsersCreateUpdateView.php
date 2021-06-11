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
		                <div class="col-md-2" style="font-weight: bold;">Họ và tên</div>
		                <div class="col-md-10">
		                    <input type="text" name="name" value="<?php echo isset($record->name)?$record->name:''; ?>" class="form-control" required>
		                </div>
		            </div>
		            <!-- end rows -->
		            <!-- rows -->
		            <div class="row" style="margin-top:5px;">
		                <div class="col-md-2" style="font-weight: bold;">Email</div>
		                <div class="col-md-10">
		                    <input type="email" value="<?php echo isset($record->email)?$record->email:''; ?>" name="email" required class="form-control">
		                </div>
		            </div>
		            <!-- end rows -->
		            <!-- rows -->
		            <div class="row" style="margin-top:5px;">
		                <div class="col-md-2" style="font-weight: bold;">Điện thoại</div>
		                <div class="col-md-10">
		                    <input type="text" name="phone" value="<?php echo isset($record->phone)?$record->phone:''; ?>" class="form-control" required>
		                </div>
		            </div>
		            <!-- end rows -->
		            <!-- rows -->
		            <div class="row" style="margin-top:5px;">
		                <div class="col-md-2" style="font-weight: bold;">Mật khẩu</div>
		                <div class="col-md-10">
		                    <input type="password" name="password" <?php if(isset($record->password)): ?>  placeholder="Không đổi mật khẩu thì không nhập thông tin vào ô textbox này" <?php else: ?> required <?php endif; ?> class="form-control" >
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
