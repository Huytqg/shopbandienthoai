<?php
if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpath = "../upload/" . $img;
if (is_file($hinhpath)) {
    $hinhsanpham = "<img src='" . $hinhpath . "'height='80'>";
} else {
    $hinhsanpham = "Khong co hinh";
}
?>
<div class="raw">
    <div class="raw forntitle">
        <h1>Cập nhập sản phẩm</h1>
    </div>
    <div class="raw forncontent">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="raw mb10">
                <select name="iddanhmuc">
                    <option value="0" selected>Tất cả</option>
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        if ($iddanhmuc == $id) $s = "selected";
                        else $s = "";
                        echo '<option value="' . $id . '"' . $s . '>' . $name . '</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="raw mb10">Tên sản phẩm<br><input type="text" name="tensanpham" value="<?= $name ?>"></div>
            <div class="raw mb10">Giá sản phẩm<br><input type="text" name="giasanpham" value="<?= $price ?>"></div>
            <div class="raw mb10">Hình sản phẩm<br>
                <input type="file" name="hinhsanpham">
                <?= $hinhsanpham ?>
            </div>
            <div class="raw mb10">Mô tả sản phẩm<br>
                <textarea name="motasanpham" cols="30" rows="10"><?= $mota ?></textarea>
            </div>
            <div class="raw mb10">
                <input type="hidden" name="id" value="<?=$id?>">
                <input type="submit" name="capnhap" value="Cập nhập">
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