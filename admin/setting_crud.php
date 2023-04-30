<?php 

require("alert.php");
require("db_config.php");
adminLogin();

if(isset($_POST['get_general']))
{
    $q = "SELECT * FROM `setting` WHERE `sr_no`=?";
    $values = [5];
    $res = select($q, $values,"i");
    $data = mysqli_fetch_assoc($res);
    $json_data = json_encode($data);
    echo $json_data;
}


if(isset($_POST['upd_general']))
{
    $frm_data = filteration($_POST);

    $q = "UPDATE `setting` SET `site_title`=?,`site_name`=?,`site_about`=?  WHERE `sr_no`=?";
    $values = [$frm_data['site_title'],$frm_data['site_name'],$frm_data['site_about'],5];
    $res = update($q,$values,'sssi');
    echo $res;

}


if(isset($_POST['get_contacts']))
{
    $q = "SELECT * FROM `contact_details` WHERE `sr_no`=?";
    $values = [2];
    $res = select($q, $values,"i");
    $data = mysqli_fetch_assoc($res);
    $json_data = json_encode($data);
    echo $json_data;
}

if(isset($_POST['upd_contacts']))
{
    $frm_data = filteration($_POST);

    $q = "UPDATE `contact_details` SET `address`=?,`pn1`=?,`email`=?,`fb`=?,`insta`=?,`tw`=?,`discord`=? WHERE `sr_no`=?";
    $values = [$frm_data['address'],$frm_data['pn1'],$frm_data['email'],$frm_data['fb'],$frm_data['insta'],$frm_data['tw'],$frm_data['discord'],2];
    $res = update($q,$values,'sssssssi');
    echo $res;

}


?>