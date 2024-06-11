<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "header.php";
//controler

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            //kiểm tra xem người dùng có click vào nút add hong
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao = "Thêm thành công";
            }
            include "danhmuc/add.php";
            break;
        case 'listdm':
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'xoadanhmuc':
            if (isset($_GET['id']) && ($_GET['id']) > 0) {
                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'suadanhmuc':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $danhmuc = loadone_danhmuc($_GET['id']);
            }
            include "danhmuc/update.php";
            break;
        case 'updatedanhmuc':
            if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                update_danhmuc($id, $tenloai);
                $thongbao = "Cập nhập thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;

            /*Controller cho sản phẩm*/
        case 'addsp':
            //kiểm tra xem người dùng có click vào nút add hong
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddanhmuc = $_POST['iddanhmuc'];
                $tensanpham = $_POST['tensanpham'];
                $giasanpham = $_POST['giasanpham'];
                $motasanpham = $_POST['motasanpham'];
                $hinhsanpham = $_FILES['hinhsanpham']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinhsanpham"]["name"]);
                if (move_uploaded_file($_FILES["hinhsanpham"]["tmp_name"], $target_file)) {
                    // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                insert_sanpham($tensanpham,$giasanpham,$hinhsanpham,$motasanpham,$iddanhmuc);
                $thongbao = "Thêm thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            //var_dump($listdanhmuc);
            include "sanpham/add.php";
            break;
        case 'listsp':
            if (isset($_POST['listtatca']) && ($_POST['listtatca'])) {
                $keywords = $_POST['keywords'];
                $iddanhmuc = $_POST['iddanhmuc'];
            }else{
                $keywords = '';
                $iddanhmuc = 0;
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham($iddanhmuc,$keywords);
            include "sanpham/list.php";
            break;
        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id']) > 0) {
                delete_sanpham($_GET['id']);
            }
            $listsanpham = loadall_sanpham("",0);
            include "sanpham/list.php";
            break;
        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sanpham = loadone_sanpham($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/update.php";
            break;
        case 'updatesp':
            if (isset($_POST['capnhap']) && ($_POST['capnhap'])) {
                $id = $_POST['id'];
                $iddanhmuc = $_POST['iddanhmuc'];
                $tensanpham = $_POST['tensanpham'];
                $giasanpham = $_POST['giasanpham'];
                $motasanpham = $_POST['motasanpham'];
                $hinhsanpham = $_FILES['hinhsanpham']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinhsanpham"]["name"]);
                if (move_uploaded_file($_FILES["hinhsanpham"]["tmp_name"], $target_file)) {
                    // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                update_sanpham($id,$iddanhmuc, $tensanpham, $giasanpham, $motasanpham, $hinhsanpham);
                $thongbao = "Cập nhập thành công";
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham();
            // var_dump($giasanpham);
            include "sanpham/list.php";
            break;
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}

include "footer.php";
