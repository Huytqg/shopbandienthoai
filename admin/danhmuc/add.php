<div class="raw">
            <div class="raw forntitle"><h1>Thêm mới loại hàng hoá</h1></div>
            <div class="raw forncontent">
                <form action="index.php?act=adddm" method="post">
                    <div class="raw mb10">Mã loại<br><input type="text" name="maloai" disabled></div>
                    <div class="raw mb10">Tên loại<br><input type="text" name="tenloai"></div>
                    <div class="raw mb10">
                        <input type="submit" name="themmoi" value="Thêm mới">
                        <input type="reset" value="Nhập lại">
                        <a href="index.php?act=listdm"><input type="button" value="Danh sách"></a>
                    </div>
                    <?php
                    if(isset($thongbao)&&($thongbao!=""))echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>