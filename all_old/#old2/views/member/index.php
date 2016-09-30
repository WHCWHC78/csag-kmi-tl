<?php echo lang("member.index.hi"); ?> <?php echo $row->nick_name; ?><br/><br/>
<div>
  <center><h3>ผลคะแนนของน้อง</h3></center>
  <?php
    echo '<table class="table table-hover"><tr class ="info">';
	echo '<td>คะแนน Network </td><td>คะแนน System</td><td>คะแนน Web</td></tr><tr class="warning">';
	echo '<td>'.$row->miniAdminNWScore.'</td><td>'.$row->miniAdminWBScore.'</td><td>'.$row->miniAdminSSScore.'</td></tr>';
	echo '</tr></table>';
	if($row->isInterview == 1){
      echo '<br /><div class="alert alert-success">
	        <center><h4>ยินดีด้วยครับน้อง น้องมีสิทธิ์เข้าสัมภาษณ์</h4></center>
	        <table class="table table-bordered"><tr class ="warning">
	        <td> วันเวลาการสัมภาษณ์ครั้งที่ 1 </td><td> วันเวลาการสัมภาษณ์ครั้งที่ 2 </td>
			</tr><tr class = "info">
			<td> '.$row->interview1.' </td><td> '.$row->interview2.'</td>
			</tr></table>
	        </div>';   	
	}else{
	  echo '<br /><div class="alert alert-error"><center><h4>เสียใจด้วยครับ น้องไม่ติดสัมภาษณ์ </h4> <br />แต่อย่างไรก็ตามน้องสามารถเข้ามาพูดคุยกับพี่ๆได้ที่ <a href="https://www.facebook.com/groups/csagcommunity/">csag community</a></h3> นะคับ</center></div>';
	}
  ?>
</div>
<h4>ดาวน์โหลดสื่อการสอนของโครงการอบรมเชิงปฏิบัติการ Mini Admin ครั้งที่ 3</h4>
<p>Part Network</p>
<ul>
    <li><a href="<?php echo base_url("downloads/csag_network.pdf"); ?>" target="_blank">Download</a> | Introduction to network by P'บีม (ครั้งที่ 3)</li>
    <li><a href="<?php echo base_url("downloads/csag_network_answer.pdf"); ?>" target="_blank">Download</a> | เฉลยแบบฝึกหัด Network by P'บีม (ครั้งที่ 3)</li>
    <li><a href="<?php echo base_url("downloads/csag_test1.pka"); ?>" target="_blank">Download</a> | แบบฝึกหัด Cisco packet tracer<br/>(ทำให้ทุกเครื่องส่งจดหมายหากันได้ IP ทุกที่ตั้งค่าไว้ถูกต้องแล้วยกเว้นเครื่อง StaffLaptop ต้องเซ็ต IP Address, Subnetmask, Default gateway เอง) by P'คิว (ครั้งที่ 3)</li>
</ul>
<p>Part System</p>
<ul>
    <li><a href="http://neno.kmi.tl/?p=59" target="_blank">Link</a> | Install Ubuntu Desktop on VirtualBox by P'โน่ (ครั้งที่ 3)</li>
    <li><a href="https://docs.google.com/presentation/d/1igaC0FO08-8ihYFJ1LX5u4R3zooWm_8kr4M0EdV0lVo/edit#slide=id.p" target="_blank">Link</a> | Introduction to linux system by P'โน่ (ครั้งที่ 3)</li>
    <li><a href="https://docs.google.com/presentation/d/19EtlQZpzvh5-5wUtwCop_e9N9qPpbdGpjvP2kooIO6c/edit#slide=id.p" target="_blank">Link</a> | Permission command & User command & LAMP by P'ตั๊ก (ครั้งที่ 3)</li>
</ul>
<p>Part Web</p>
<ul>
    <li><a href="http://nutsu.kmi.tl/doc/" target="_blank">Link</a> | World wide web Documentation by P'นัด (ครั้งที่ 3)</li>
    <li><a href="https://docs.google.com/file/d/0B_NRr9cRfY_LOU1mMmU4NHVveVU/edit" target="_blank">Link</a> | MySQL with PHP by P'โก้ (ครั้งที่ 3)</li>
    <li><a href="http://ziko.kmi.tl/doc" target="_blank">Link</a> | Database system by P'โก้ (ครั้งที่ 3)</li>
    <li><a href="http://xenon.kmitl.net/IntroDB/" target="_blank">Link</a> | Introduction to database by P'แฟกซ์ (ครั้งที่ 2)</li>
</ul>