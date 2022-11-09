<div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h2>Danh sach san pham</h2>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>ten mon an</th>
                            <th>chi tiet mon an</th>
                            <th>so tien</th>
                            <th>hinh anh</th>
                            <th>sua</th>
                            <th>xoa</th>

                        </tr>
                        <tbody>
                            <?php
                            $i =1;
                                while($row = mysqli_fetch_assoc($query)){?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['tenmonan']; ?></td>
                                        <td><?php echo $row ['mota'];  ?></td>
                                        <td><?php echo $row ['tien']; ?></td>

                                        <td>
                                            <img style="width:100px;" src="./shopping_img/<?php echo $row['hinhanh'] ?>" alt="">
                                            
                                        </td>

                                        <td>
                                            <a href="quanly.php?page_layout=sua&id=<?php $row['id']; ?>">sua</a>
                                        </td>
                                        <td>
                                            <a href="quanly.php?page_layout=xoa&id=<?php $row['id']; ?>">xoa</a>

                                        </td>
                                    </tr>
                            <?php } ?>

                            
                        </tbody>
                    </thead>
                </table>
                <a class="btn btn-primary" href="quanly.php?page_layout=them">Them moi</a>
            </div>
        </div>
    </div>