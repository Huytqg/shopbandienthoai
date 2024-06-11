<div class="raw">
    <div class="raw forntitle">
        <h1>Danh sách loại hàng hoá</h1>
    </div>
    <div class="raw forncontent">
        <div class="raw mb10 forndanhsachloaihang">
            <table>
                <tr id="mauloai">
                    <th></th>
                    <th>Mã loại</th>
                    <th>Tên loại</th>
                    <th></th>
                </tr>
                <?php
                foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    $suadanhmuc="index.php?act=suadanhmuc&id=".$id;
                    $xoadanhmuc="index.php?act=xoadanhmuc&id=".$id;
                    echo '
                <tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>'.$id.'</td>
                    <td>'.$name.'</td>
                    <td><a href="'.$suadanhmuc.'"><input type="button" value="Sửa"></a> <a href="'.$xoadanhmuc.'"><input type="button" value="Xoá"></a></td>
                </tr>';
                }
                ?>
            </table>
        </div>
        <div class="raw mb10">
            <input type="submit" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type="button" value="Xoá các mục đã chọn">
            <a href="index.php?act=adddm"><input type="button" value="Nhập thêm"></a>
        </div>
    </div>
</div>
