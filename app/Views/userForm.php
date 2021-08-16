<?php
    if(isset($userdata)){

        $actionURL='public/prawit/saveUser/'.$userdata->id;

    }else{
        $actionURL='public/prawit/addUser';
    }
?>

<form method="post" 
action="<?php print site_url($actionURL); ?>">
ชื่อผู้ใช้ <input name="username" type="text" value="<?php isset($userdata)?print $userdata->username:''; ?>"> <br>
รหัสผ่าน <input name="password" type="password"><br>
ยืนยันรหัสผ่าน <input name="confirmPassword" type="password"><br>
ชื่อ <input name="name" type="text" value="<?php isset($userdata)?print $userdata->name:''; ?>"><br>
สกุล <input name="surname" type="text" value="<?php isset($userdata)?print $userdata->surname:''; ?>"><br>
อีเมล <input name="email" type="email" value="<?php isset($userdata)?print $userdata->email:''; ?>"><br>
<button>บันทึก</button>
</form>