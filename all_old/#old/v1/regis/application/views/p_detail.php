<style>
	.table1 th {
		background-color: #F98300;
		color: #FFF;
	}
	.table1 td {
		text-align: center;
	}
</style>
<?php
$query = @$this->db->get_where('members', array('student_id' => $this->session->userdata('id')));
if ($query->num_rows() == 0)
    echo "Error on trying to connect data [by csag]"; else {
    $r = $query->row_array();
?>
<h1>ข้อมูลส่วนบุคคล</h1>
<table width="400" border="0" align="center" cellpadding="2" cellspacing="2">
	<tr bgcolor="#FFFF99">
		<td width="110" align="center">เลขประจำตัว</td>
		<td width="276" align="left"><?php
		if (0)
			echo str_pad($r['id'], 3, 0, STR_PAD_LEFT);
		else
			echo 'ยังไม่ระบุ จะแจ้งให้ทราบภายหลัง';
		?></td>
	</tr>
	<tr>
		<td align="center">รหัสนักศึกษา</td>
		<td align="left"><?php echo $r['student_id'];?></td>
	</tr>
	<tr bgcolor="#FFFF99">
		<td align="center">ชื่อ - สกุล</td>
		<td align="left"><?php echo $r['first_name'] . " " . $r['last_name'];?></td>
	</tr>
	<tr>
		<td align="center">ชื่อเล่น</td>
		<td align="left"><?php echo $r['nick_name'];?></td>
	</tr>
	<tr bgcolor="#FFFF99">
		<td align="center">เบอร์โทรศัพท์</td>
		<td align="left"><?php echo $r['telephone'];?></td>
	</tr>
	<tr>
		<td align="center">E-Mail</td>
		<td align="left"><?php echo $r['email'];?></td>
	</tr>
	<tr bgcolor="#FFFF99">
		<td align="center" bgcolor="#FFFF33">อีเมล์ @kmi.tl</td>
		<td align="left" bgcolor="#FFFF33">
		<form action="<?php echo site_url("account/email");?>" method="POST" target="_self" id="emailRequest">
			<input type="text" name="email" value="<?php echo $r['email_kmitl'];?>" />
			@kmi.tl
			[<font onclick="alert('เงื่อนไขการตั้งชื่อ\n1.ห้ามเป็นชื่อสงวนเช่น admin root ...\n2.ใช้ตัวอักษรได้แค่ 0-9a-zA-Z_ เท่านั้น\n3.ขอสงวนสิทธิ์ในการไม่อนุญาตตั้งชื่อนั้นๆ ถึงแม้จะถูกทั้งข้อ 1,2 ก็ตาม\n');" color="#0000FF">การตั้งชื่อ คลิก</font>]
			<input type="submit" value="Request" class="buttonq" />
			<?php
				if (!empty($error))
					echo '<font color="red">' . $errormsg . '</font> Try again';
			?>
		</form></td>
	</tr>
	<tr bgcolor="#FFFF99">
		<td align="center" bgcolor="#FFFFFF">ลงทะเบียน</td>
		<td align="left" bgcolor="#FFFFFF"><?php
		switch ($r['regis_type']) {
			case 1 :
				echo 'สมัครเข้าร่วมการอบรมเชิงปฏิบัติการ';
				break;
			case 3 :
				echo 'สมัครเข้าร่วมการอบรมเชิงปฏิบัติการ<br>';
			case 2 :
				echo 'สมัครสอบเข้าร่วมการเป็นสมาชิกของ CSAG ';
				break;
			default :
				echo 'Error!';
				break;
		}

		function show1($x) {
			if ($x == 1) {
				echo "มา";
			} else if ($x == 2) {
				echo "ลา";
			} else {
				echo "ขาด";
			}
		}

		function show2($x) {
			if ($x == 1) {
				echo "ส่งแล้ว";
			} else {
				echo "ยังไม่ส่ง";
			}
		}
		?></td>
	</tr>
</table>
<h1>ข้อมูลการเข้าอบรมและแบบฝึกหัด</h1>
<table border="0" align="center" cellpadding="2" cellspacing="2" class="table1">
	<tr>
		<th width="70">27 เช้า</th>
		<th width="70">27 บ่าย</th>
		<th width="70">28 เช้า</th>
		<th width="70">28 บ่าย</th>
		<th width="70">3 เช้า</th>
		<th width="70">3 บ่าย</th>
		<th rowspan="3">ได้รับอีเมล์
		<br />
		@kmi.tl</th>
	</tr>
	<tr>
		<td bgcolor="#FFFFCC"><?php show1($r['p1']);?></td>
		<td bgcolor="#FFFFCC"><?php show1($r['p2']);?></td>
		<td bgcolor="#FFFFCC"><?php show1($r['p3']);?></td>
		<td bgcolor="#FFFFCC"><?php show1($r['p4']);?></td>
		<td bgcolor="#FFFFCC"><?php show1($r['p5']);?></td>
		<td bgcolor="#FFFFCC"><?php show1($r['p6']);?></td>
	</tr>
	<tr>
		<th colspan="2">System</th>
		<th colspan="2">Network</th>
		<th colspan="2">Web Programming</th>
	</tr>
	<tr>
		<td colspan="2" bgcolor="#FFFFCC"><?php show2($r['r1']);?></td>
		<td colspan="2" bgcolor="#FFFFCC"><?php show2($r['r2']);?></td>
		<td colspan="2" bgcolor="#FFFFCC"><?php show2($r['r3']);?></td>
		<td bgcolor="#FFFFCC"><?php
		echo "ได้รับ";
		//if(($r['p1']!=0&&$r['p2']!=0&&$r['p3']!=0&&$r['p4']!=0&&$r['p5']!=0&&$r['p6']!=0)&&($r['r1']+$r['r2']+$r['r3']==3)) echo "ได้รับ"; else echo "ไม่ได้รับ";
		?></td>
	</tr>
	<tr>
		<th colspan="7" align="left" valign="top" bgcolor="#FFFFCC"><font size="1">สามารถส่งแบบฝึกหัดได้เรื่อยๆ</font></th>
	</tr>
</table>
<h1>ข้อมูลคะแนน</h1>
<table width="600" border="0" align="center" cellpadding="2" cellspacing="2" class="table1">
	<tr>
		<th width="120">System
		<br />
		(50)</th>
		<th width="120">Network
		<br />
		(51)</th>
		<th width="120">Programming
		<br />
		(51)</th>
		<th width="120">Total
		<br />
		(152)</th>
		<th>ได้รับ
		<br />
		ประกาศนียบัตร</th>
	</tr>
	<tr>
		<td bgcolor="#FFFFCC"><?php echo $r['score_p1'];?></td>
		<td bgcolor="#FFFFCC"><?php echo $r['score_p2'];?></td>
		<td bgcolor="#FFFFCC"><?php echo $r['score_p3'];?></td>
		<td bgcolor="#FFFFCC"><?php echo $r['score_total'];?></td>
		<td rowspan="2" bgcolor="#FFFF99"><?php
		if ($r['score_total'] != 0)
			echo "ได้รับ";
		else
			echo "ไม่ได้รับ";
		?></td>
	</tr>
	<tr>
		<td bgcolor="#FFFFCC">คิดเป็น</td>
		<td bgcolor="#FFFFCC"><?php echo substr(($r['score_total'] * 100 / 152), 0, 5);?>%</td>
		<td colspan="2" bgcolor="#FFFFCC">ได้รับสิทธิ์สัมภาษณ์ : <?php
		$ok = 1;
		if ($ok) {
			if ($r['is_interview']) {
				echo "ใช่";
			} else {
				echo "ไม่";
			}
		} else {
			echo "ยังไม่ประกาศ";
		}
		?></td>
	</tr>
	<tr>
		<td bgcolor="#FFFFCC">วันและเวลา สัมภาษณ์</td>
		<td colspan="4" bgcolor="#FFFFCC"><?php
		if ($ok) {
			if ($r['is_interview']) {
				echo "รอบที่ 1 : วันเสาร์ที่ 10 ก.ย. 2554 เวลา " . $r['interview1'] . "<br>";
				echo "รอบที่ 2 : วันอาทิตย์ที่ 11 ก.ย. 2554 เวลา " . $r['interview2'];
			} else {
				echo "ไม่ได้รับสิทธิ์สัมภาษณ์";
			}
		} else {
			echo "ยังไม่ประกาศ";
		}
		?></td>
	</tr>
	<tr>
		<th colspan="5" align="left" valign="top" bgcolor="#FFFFCC"><font size="1">- ผู้ที่ได้รับสิทธิ์สัมภาษณ์ต้องมาสัมภาษณ์ทั้งสองรอบ
			<br />
			- </font><font size="1">สามารถขอดูคะแนนได้โดยแจ้งมาทาง csag@kmi.tl
			<br />
			- วันและเวลารับประกาศนียบัตร จะแจ้งให้ทราบภายหลัง</font></th>
	</tr>
</table>
<h1>เอกสารประกอบการอบรม</h1>
<table width="600" border="0" align="center" cellpadding="2" cellspacing="2" class="table1">
	<tr>
		<th width="82">วัน/เวลา</th>
		<th width="292">หัวข้อ</th>
		<th width="52">เอกสาร</th>
		<th width="67">โปรแกรม</th>
		<th width="75">แบบฝึกหัด</th>
	</tr>
	<tr bgcolor="#FFFF99">
		<td>27 ส.ค. 2554</td>
		<td>การติดตั้งระบบปฏิบัติการ Ubuntu
		<br />
		และคำสั่งการใช้งานเบื้องต้น</td>
		<td><a href="http://tranquilo.kmitl.net/report/Part 1.pptx" target="_blank"><img src="http://bmdpu.com/img/icon-download.png" width="32" border="0" /></a></td>
		<td><a href="http://tranquilo.kmitl.net/report" target="_blank"><img src="http://bmdpu.com/img/icon-download.png" width="32" border="0" /></a></td>
		<td rowspan="2"><a href="http://csag.kmi.tl/regis/home/assignment" target="_blank"><img src="http://bmdpu.com/img/icon-download.png" width="32" border="0" /></a></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>การติดตั้ง WebServer บน Ubuntu</td>
		<td><a href="http://csag.kmi.tl/documents/lamp.pptx" target="_blank"><img src="http://bmdpu.com/img/icon-download.png" width="32" border="0" /></a></td>
		<td>-</td>
	</tr>
	<tr bgcolor="#FFFF99">
		<td>28 ส.ค. 2554</td>
		<td>ระบบเครือข่าย (Network) Part I</td>
		<td><a href="http://csag.kmi.tl/documents/network1.pptx" target="_blank"><img src="http://bmdpu.com/img/icon-download.png" width="32" border="0" /></a></td>
		<td>-</td>
		<td rowspan="2"><a href="http://csag.kmi.tl/regis/home/assignment" target="_blank"><img src="http://bmdpu.com/img/icon-download.png" width="32" border="0" /></a></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>ระบบเครือข่าย (Network) Part II</td>
		<td>-</td>
		<td>-</td>
	</tr>
	<tr bgcolor="#FFFF99">
		<td>3 ส.ค. 2554</td>
		<td>การเขียน HTML เบื้องต้น
		<br />
		การเขียน PHP Part I</td>
		<td><a href="http://kanin.kmi.tl/Tool/(Arm)Web_Programming.pptx" target="_blank"><img src="http://bmdpu.com/img/icon-download.png" width="32" border="0" /></a></td>
		<td><a href="http://kanin.kmi.tl/Tool" target="_blank"><img src="http://bmdpu.com/img/icon-download.png" width="32" border="0" /></a></td>
		<td rowspan="2"><a href="http://csag.kmi.tl/regis/home/assignment" target="_blank"><img src="http://bmdpu.com/img/icon-download.png" width="32" border="0" /></a></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td>การเขียน PHP Part II</td>
		<td><a href="http://aikkew.kmi.tl/php/(Q)%20Web%20Programming%20Part%20II.pptx" target="_blank"><img src="http://bmdpu.com/img/icon-download.png" width="32" border="0" /></a></td>
		<td><a href="http://aikkew.kmi.tl/php" target="_blank"><img src="http://bmdpu.com/img/icon-download.png" width="32" border="0" /></a></td>
	</tr>
	<tr>
		<th colspan="5" align="left" valign="top"><font size="1">&nbsp;</font></th>
	</tr>
</table>
<?php }?>