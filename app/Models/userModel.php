<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    public function getUsers($data=array()){
        $db = \Config\Database::connect(); //เชื่อมต่อฐานข้อมูล
        $builder=$db->table('user'); //ระบุชื่อตารางในฐานข้อมูล
        $builder->where('id',$data['id']); //ระบุเงื่อนไขในการเลือกข้อมูล
        $result = $builder->get()->getResult(); //ประมวลผลคำสั่ง SQL
	    //print $db->getLastQuery(); //แสดงคำสั่ง SQL
        return isset($result[0])?$result[0]:false; //ส่งค่าผลลัพธ์กลับ
    }
    public function listUsers($data=array()){//ดึงข้อมูลผู้ใช้ทั้งหมด
        $db = \Config\Database::connect(); //เชื่อมต่อฐานข้อมูล
        $builder=$db->table('user'); //ระบุชื่อตารางในฐานข้อมูล
        $result = $builder->get()->getResult(); //ประมวลผลคำสั่ง SQL
        return $result; //ส่งค่าผลลัพธ์กลับ
    }
    public function addUser($data=array()){
        $data['password']=md5($data['password']);
        $db = \Config\Database::connect(); //เชื่อมต่อฐานข้อมูล
        $builder=$db->table('user'); //ระบุชื่อตารางในฐานข้อมูล
        $result=$builder->insert($data);
        return $result;
    }
    public function deleteUser($data=array()){
        $db = \Config\Database::connect(); //เชื่อมต่อฐานข้อมูล
        $builder=$db->table('user'); //ระบุชื่อตารางในฐานข้อมูล
        $result=$builder->delete($data);
        return $result;
    }
    public function updateUser($id,$data=array()){
        if(isset($data['password']))$data['password']=md5($data['password']);
        $db = \Config\Database::connect(); //เชื่อมต่อฐานข้อมูล
        $builder=$db->table('user'); //ระบุชื่อตารางในฐานข้อมูล
        $builder->where('id',$id); //ระบุเงื่อนไขในการเลือกข้อมูล
        $result=$builder->update($data);
        return $result;
    }

}