<?php 
    $this->layoutPath = "Layout.php";
 ?>

  <main style="margin-top: 30px; ">
        <div class="container" style="text-align: center;">
            <ul class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.php">Trang chủ </a></li>
                <li class="breadcrumb-item">
                    <a href="index.php?controller=hotline">Đường dây nóng</a> </li>
            </ul>
            <!-- title -->
            <h1>Danh sách Cơ quan Công an tiếp nhận, giải quyết tố giác, tin báo về tội phạm và kiến nghị khởi tố tại TP Hà Nội</h1>
            <div class="detail" style="width: 100%; height: auto;">
                <div style="margin-left: 60px; margin-top: 30px; margin-bottom: 30px;">
                    <!-- table -->
                    <table data-toolbar="#toolbar" data-toggle="table" class="table table-striped table-hover table-bordered">
						<thead class="thead-dark">
							<tr>
								<th>
									STT
								</th>
								<th>
									TÊN CƠ QUAN
								</th>
								<th>
									ĐỊA CHỈ
								</th>
								<th>
									SỐ ĐIỆN THOẠI
								</th>
								
							</tr>
						</thead>
						<tbody>
							<?php foreach($data as $rows): ?>
							<tr>
								<td>
                                    <?php echo $rows->id; ?>
                                </td>
								<td><?php echo $rows->name; ?></td>
								<td><?php echo $rows->address; ?></td>
								<td><?php echo $rows->phone; ?></td>
							</tr>
							<?php endforeach ?>
						</tbody>
					</table>
                    <!-- end-table -->
                </div>
            </div>
        </div>
    </main>

 