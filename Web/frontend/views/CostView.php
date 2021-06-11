<?php 
    $this->layoutPath = "Layout.php";
 ?>

<main style="margin-top: 30px; margin-bottom: 30px;">
        <div class="container" style="margin-bottom: 50px;">
            <ul class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.php">Trang chủ </a></li>
                <li class="breadcrumb-item">
                    <a href="index.php?controller=cost">Mức xử phạt vi phạm giao thông</a> </li>
            </ul>
            <h1 style="margin-top: 40px; text-align: center;">
                Mức xử phạt
            </h1>
        </div>
        <div class="container">
        	<table data-toolbar="#toolbar" data-toggle="table" class="table table-striped table-hover table-bordered">
			<thead class="thead-dark">
				<tr>
					<th>
						STT
					</th>
					<th>
						Lỗi vi phạm
					</th>
					<th>
						Với xe máy
					</th>
					<th>
						Với ô tô
					</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($data as $rows): ?>
                <tr>
                	<td><?php echo $rows->id; ?></td>
                	<td><?php echo $rows->mistake; ?></td>
                	<td><?php echo $rows->xemay; ?></td>
                	<td><?php echo $rows->oto; ?></td>
                </tr>
            	<?php endforeach; ?>
         	</tbody>
         </table>
         </div>
        </form>
        </div>
        <br>
        <br>
    </main>