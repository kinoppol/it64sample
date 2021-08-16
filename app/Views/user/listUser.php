<table border=1>
    <thead>
            <tr>
                <th>
                    Username
                </th>
                <th>
                    อีเมล
                </th>
                <th>
                    จัดการ
                </th>
            </tr>
    </thead>
    <tbody>
        <?php
            foreach($userdata as $row){

                print "<tr>";
                    print "<td>".$row->username."</td>";
                    print "<td>".$row->email."</td>";
                    print "<td>
                    <a href=\"".site_url('public/prawit/editUser/'.$row->id)."\">แก้ไข</a> 
                    <a href=\"".site_url('public/prawit/deleteUser/'.$row->id)."\" onClick=\"return confirm('ลบผู้ใช้ชื่อ ".$row->username."?')\">ลบ</a></td>";
                print "</tr>";

            }
        ?>
    </tbody>
</table>