<?php 
    $this->layoutPath = "Layout.php";
//     echo '<pre>';
//     print_r($data);
// echo '</pre>';
 ?>

<main style="margin-top: 30px; margin-bottom: 30px;">
        <div class="container" style="margin-bottom: 50px;">
            <ul class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">Trang chủ </a></li>
                <li class="breadcrumb-item">
                    <a href="">Tra cứu vi phạm giao thông</a> </li>
            </ul>
            <h1 style="margin-top: 40px; text-align: center;">
                Tra cứu vi phạm giao thông
            </h1>
            
             <!-- form -->
            <form class="was-validated" method="get" action="">
                <div style="margin-left: 31%">
                    <div class="form-group" style="width: 55%;">
                        <input type="hidden" name="controller" value="search">
                        <input type="hidden" name="action" value="search">
                        <label for="uname" style="font-weight: bold;">Biển kiểm soát</label>
                        <input type="text" class="form-control" id="uname" placeholder="VD 90B136229" name="bienso" required>

                        <div class="invalid-feedback">Vui lòng nhập đúng định dạng biển số xe </div>
                        <!-- <label for="uname" style="font-weight: bold;">Tên phương tiện</label>
                        <input type="text" class="form-control" id="uname" placeholder="Nhập biển kiểm soát" name="ten" required> -->

                        <!-- <div class="invalid-feedback">Vui lòng nhập đủ thông tin</div> -->
                    </div>
                    <br>
                    
                </div>
                <!-- button -->
                <div style="margin-left: 47%;">
                    <button type="submit" class="btn btn-default btn-color">Tra cứu</button>
                </div>


            </form>
        </div>
        <div class="container">
        	<table data-toolbar="#toolbar" data-toggle="table" class="table table-striped table-hover table-bordered">
			<thead class="thead-dark">
				<tr>
					<th>
						Biển số
					</th>
					<th>
						Loại phương tiện
					</th>
					<th>
						Lỗi vi phạm
					</th>
					<th>
						Thời gian
					</th>
					<th>
						Địa điểm
					</th>
					<th>
						Tiền phạt
					</th>
				</tr>
			</thead>
                <?php if(isset($data)): ?>
			<tbody>
                <?php
                        foreach($data as $rows): 
                ?>
		        <?php 
//                    if($rows->bienso != ""){
                        echo   '<tr>
                                  <td>' .$rows->bienso.'</td>
                                  <td>' .$rows->type.'</td>
                                  <td>' .$rows->mistake.'</td>
                                  <td>' .$rows->time.'</td>
                                  <td>' .$rows->location.'</td>
                                  <td>' .$rows->cost.'</td>
                                </tr>';
//                    }
//                    else echo "Không tìm thấy phương tiện";
                 ?>  
                <?php 
                        endforeach;
                 ?>
         	</tbody>
                <?php endif; ?>
         </table>
         </div>
        </form>
        </div>
        <br>
        <br>
        <div class="container">
            <div style="color: rgb(208, 206, 206); text-align: center; ">
                <h3 style="border-bottom: 1px solid;"></h3>
            </div>
            <br>
            <div style="color:  rgb(208, 206, 206); text-align: center; ">
                <h3 style="border-bottom: 1px solid; "></h3>
            </div>
            <div id="texttracuu">
                <p>Tra cứu, nộp phạt quyết định xử phạt vi phạm hành chính trong lĩnh vực giao thông đường bộ: </p>
                <p>1. Thuộc thẩm quyền: Cục Cảnh sát giao thông, các đơn vị trực thuộc Cục Cảnh sát giao thông; Phòng Cảnh sát giao thông và các đơn vị đội/trạm thuộc Phòng Cảnh sát giao thông (theo danh sách Đội/Trạm).</p>
                <p>2. Thuộc thẩm quyền của thanh tra giao thông đường bộ.</p>
            </div>
            <br>
        </div>
    </main>