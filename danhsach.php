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
                        <tbody >
                            <?php
                            $i =1;
                                while($row = mysqli_fetch_assoc($query)){?>
                                    <tr >
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['tenmonan']; ?></td>
                                        <td><?php echo $row ['mota'];  ?></td>
                                        <td><?php echo $row ['tien']; ?></td>

                                        <td>
                                            <img style="width:100px;" src="./shopping_img/<?php echo $row['hinhanh'] ?>" alt="">
                                            
                                        </td>

                                        <td>
                                            <a class="btn btn-success" href="quanly.php?page_layout=sua&id=<?php echo $row['id']; ?>">sua</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-danger" onclick ="return Del('<?php echo $row['id']; ?>')" href="quanly.php?page_layout=xoa&id=<?php echo $row['id']; ?>">xoa</a>

                                        </td>
                                    </tr>
                            <?php } ?>

                            
                        </tbody>
                    </thead>
                </table>
                <div class="container mt-5">
                    <div class="row justify-content-between">
                        <a class="btn btn-primary" href="quanly.php?page_layout=them">Them moi</a>
                        <a class="btn btn-primary" href="quanly.php?page_layout=shopping">Luu</a>
                        
                    </div>

                </div>
                
            </div>
        </div>
    </div>

    <script>
        function Del(name){
            return confirm("ban co chac muon xoa san pham " + name +"?");
        }
    </script>