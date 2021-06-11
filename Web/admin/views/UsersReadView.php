<!-- load file layout.php -->

<?php 
	$this->layoutPath = "Layout.php";
 ?>
 <div class="content-header">
	<div class="content-header-title">Danh sách người dùng</div>
	<div class="content-header-link">
		<span><a href="index.php"><i class="fas fa-home"></i>&nbsp;Home </a> ></span>
		<span>Danh sách người dùng</span>
	</div>
</div>
<div class="content-main"></div>
	<div class="content-main-header">
		<div class="content-main-header-title">
			Danh sách
		</div>
		<div class="search">
			<form method="get" action="">
				<div class="search-form">
					<form action="index.php?controller=users&action=search" method="POST">
						<input type="text" name="search" placeholder="Bạn cần tìm..." style="color: #ed5807;">
						<input type="submit" value="Tìm" style="background-color: #53a75b ;">
					</form>
					<button style="background-color: #52c0ef;"><a href="index.php?controller=users&action=create">Thêm mới</a></button>
				</div>
			</form>
		</div>
	</div>

	<div class="list">
		<table data-toolbar="#toolbar" data-toggle="table" class="table table-striped table-hover table-bordered">
			<thead class="thead-dark">
				<tr>
					<th>
						ID
					</th>
					<th>
						Họ & tên
					</th>
					<th>
						Email
					</th>
					<th>
						SĐT
					</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($data as $rows): ?>
				<tr>
					<td><?php echo $rows->id; ?></td>
					<td><?php echo $rows->name; ?></td>
					<td><?php echo $rows->email; ?></td>
					<td><?php echo $rows->phone; ?></td>
					<td>
						<button id="fix"><a href="index.php?controller=users&action=update&id=<?php echo $rows->id; ?>"><i class="fas fa-pen"></i></a></button>
						<button id="delete"><a href="index.php?controller=users&action=delete&id=<?php echo $rows->id; ?>"><i class="fas fa-trash-alt"></i></a></button>
					</td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
	<div class="content-footer">
		<ul class="pagination">
			<?php for($i = 1 ; $i <= $numPage ; $i++): ?>
            <li class="page-item">
            	<a class="page-link" href="index.php?controller=users&p=<?php echo $i; ?>">
            		<?php echo $i; ?>
            	</a>
            </li>
        	<?php endfor; ?>
        </ul>
	</div>
</div>