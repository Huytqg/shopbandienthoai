<div class="raw">
    <div class="raw forntitle mb">
        <h1>Danh sách loại hàng hoá</h1>
    </div>
    <form action="index.php?act=listsp" method="post">
                <input type="text" name="keywords">
                <select name="iddanhmuc">
                    <option value="0"selected>Tất cả</option>
                <?php
                foreach($listdanhmuc as $danhmuc){
                    extract($danhmuc);
                    echo '<option value='.$id.'>'.$name.'</option>';
                }
                ?>
            </select>
            <input type="submit"name="listtatca" value="Lọc">
    </form>
    <div class="raw forncontent">
        <div class="raw mb10 forndanhsachloaihang">
            <table>
                <tr id="mauloai">
                    <th></th>
                    <th>Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá sản phẩm</th>
                    <th>Hình sản phẩm</th>
                    <th>Lượt xem sản phẩm</th>
                    <th></th>
                </tr>
                <?php
                foreach ($listsanpham as $sanpham) {
                    extract($sanpham);
                    $suasanpham="index.php?act=suasp&id=".$id;
                    $xoasanpham="index.php?act=xoasp&id=".$id;
                    $hinhpath="../upload/".$img;
                    if(is_file($hinhpath)){
                        $hinhsanpham = "<img src='".$hinhpath."'height='80'>";
                    }else{
                        $hinhsanpham = "Khong co hinh";
                    }
                    echo '
                <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>'.$id.'</td>
                    <td>'.$name.'</td>
                    <td>'.$price.'</td>
                    <td>'.$hinhsanpham.'</td>
                    <td>'.$luotxem.'</td>
                    <td><a href="'.$suasanpham.'"><input type="button" value="Sửa"></a> <a href="'.$xoasanpham.'"><input type="button" value="Xoá"></a></td>
                </tr>';
                }
                ?>
            </table>
        </div>
        <div class="raw mb10">
            <input type="submit" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xoá các mục đã chọn">
            <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
        </div>
    </div>
</div>