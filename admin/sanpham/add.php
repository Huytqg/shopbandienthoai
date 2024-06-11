<div class="raw">
    <div class="raw forntitle">
        <h1>Thêm mới sản phẩm</h1>
    </div>
    <div class="raw forncontent">
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
            <div class="raw mb10">Danh mục<br>
            <select name="iddanhmuc">
                <?php
                foreach($listdanhmuc as $danhmuc){
                    extract($danhmuc);
                    echo '<option value='.$id.'>'.$name.'</option>';
                }
                ?>
            </select>
        </div>
            <div class="raw mb10">Tên sản phẩm<br><input type="text" name="tensanpham"></div>
            <div class="raw mb10">Giá sản phẩm<br><input type="text" name="giasanpham"></div>
            <div class="raw mb10">Hình sản phẩm<br>
                <input type="file" name="hinhsanpham">
            </div>
            <div class="raw mb10">Mô tả sản phẩm<br>
                <textarea name="motasanpham" cols="30" rows="10"></textarea>
            </div>
            <div class="raw mb10">
                <input type="submit" name="themmoi" value="Thêm mới">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listsp"><input type="button" value="Danh sách"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>
        </form>
    </div>
</div>
</div>