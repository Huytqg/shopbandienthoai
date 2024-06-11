<?php
function insert_sanpham($tensanpham, $giasanpham, $hinhsanpham, $motasanpham, $iddanhmuc){
    $sql = "insert into sanpham(name,price,img,mota,iddanhmuc) values('$tensanpham','$giasanpham','$hinhsanpham','$motasanpham','$iddanhmuc')";
    pdo_execute($sql);
}
function delete_sanpham($id){
    $sql = "delete from sanpham where id=".$_GET['id'];
    pdo_execute($sql);
}
function loadall_sanpham($iddanhmuc=0,$keywords=""){
    $sql = "select * from sanpham where 1";
    if($keywords=""){
        $sql.= " and name like '%".$keywords."%'";
    }
    if($iddanhmuc>0){
        $sql.= " and iddanhmuc = '".$iddanhmuc."'";
    }
    $sql.= " order by id desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadone_sanpham($id){
    $sql="select * from sanpham where id=".$id;
    $danhmuc=pdo_query_one($sql);
    return $danhmuc;
}
function update_sanpham($id,$iddanhmuc, $tensanpham, $giasanpham, $motasanpham, $hinhsanpham){
    if($hinhsanpham!="")
        $sql = "update sanpham set iddanhmuc ='".$iddanhmuc."',name ='".$tensanpham."',price ='".$giasanpham."',mota ='".$motasanpham."',img ='".$hinhsanpham."' where id=".$id;
    else
        $sql = "update sanpham set iddanhmuc ='".$iddanhmuc."',name ='".$tensanpham."',price ='".$giasanpham."',mota ='".$motasanpham."'where id=".$id;
    pdo_execute($sql);
}

?>