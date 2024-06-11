<?php
if(is_array($danhmuc)){
    extract($danhmuc);
}
?>
<div class="raw">
            <div class="raw forntitle"><h1>Cập nhập loại hàng hoá</h1></div>
            <div class="raw forncontent">
                <form action="index.php?act=updatedanhmuc" method="post">
                    <div class="raw mb10">Mã loại<br><input type="text" name="maloai" disabled></div>
                    <div class="raw mb10">Tên loại<br><input type="text" name="tenloai" value="<?php if(isset($name)&&($name!=""))echo $name;?>"></div>
                    <div class="raw mb10">
                        <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0))echo $id;?>">
                        <input type="submit" name="capnhap" value="Cập nhập ">
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