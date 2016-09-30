<?php if(0){ ?>
<style>
    .registed_list {
        border-collapse:collapse;
        width:400px;
        margin:0 auto 20px auto;
    }

    .registed_list th {
        border:1px solid #CCC;
        background-color:#EEE;
        padding:5px 10px 5px 10px;
    }

    .registed_list td {
        border:1px solid #CCC;
        padding:5px 10px 5px 10px;
    }

    .registed_list tr:hover {
        background-color:#FFC;
    }

</style>

<div class="space"></div>
<div class="page">

    <h1 style="color:#F70; ">รายชื่อผู้สมัคร</h1><br/>
    <table class="registed_list">
        <tr>
            <th>No.</th>
            <th>ชื่อ - นามสกุล</th>
            <th>รหัสนักศึกษา</th>
        </tr>
        <?php
        $query = $this->db->get('members');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                echo "<tr><td align=\"center\">$row->id</td>";
                echo "<td align=\"left\">$row->first_name $row->last_name</td>";
                echo "<td align=\"center\">$row->student_id</td></tr>";
            }
        } else {
            echo '<tr><td colspan="3" align="center">ยังไม่พบคนที่ลงทะเบียนสมัคร</td></tr>';
        }
        ?>
    </table>
    <?php /*
	      $query = $this->db->get('members');
		foreach ($query->result() as $r) {
			echo "array(\"".$r->nick_name."\",\"".$r->email."\"),<br />";
		} */
	?>
</div>
<?php } ?>