<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Using mail</title>
</head>
<body><?php if(0){
require_once('class.phpmailer.php');
$email_real=array(
	array("ฟาร์ม","farmers999@gmail.com"),
	array("แจ๊ค","naijack_kub@hotmail.com"),
	array("เจ","dek_the_brain@hotmail.com"),
	array("วิน","winner55_ice@hotmail.com"),
	array("จูน","croc_armoni@hotmail.com"),
	array("นัท","kulnwnut@gmail.com"),
	array("เนียร์","junior555toto@gmail.com"),
	array("อู๋","pathom.p@hotmail.com"),
	array("นิว","pukunjen@hotmail.com"),
	array("โค้ก","coke22768@hotmail.com"),
	array("บอล","pyxzure@gmail.com"),
	array("เอ","spicy-spiky@hotmail.com"),
	array("อาร์ท","natartnat@hotmail.com"),
	array("หรั่ง","six6six6six6six@hotmail.com"),
	array("แบงค์","jockaremamekamarangzab@hotmail.com"),
	array("เพลง","doraemon_plang@hotmail.com"),
	array("นัด","Natrbo@hotmail.com"),
	array("วัฒน์","iqzero-eqlovehigh@hotmail.com"),
	array("ป๊อป","eric_popzzz@hotmail.com"),
	array("ออฟ","off_konloor@hotmail.com"),
	array("ภัทร","patpat1993@hotmail.com"),
	array("โดน","done_d-1@hotmail.com"),
	array("คูก้า","kkuga5121@hotmail.com"),
	array("เอิร์ท","touchdown_earth@hotmail.com"),
	array("นกยูง","i.amhottest@hotmail.com"),
	array("แบงค์","zexus.wolf@gmail.com"),
	array("ออม","thanaporn8@hotmail.com"),
	array("เบลล์","maybell3335@hotmail.com"),
	array("เชน","dungsri_6@hotmail.com"),
	array("แตน","boranwuttu@hotmail.com"),
	array("โก้","ko.pang@hotmail.com"),
	array("ต้า","resident_evil26556@hotmail.com"),
	array("เมท","astronic_discz@hotmail.com"),
	array("ต้า","ta_u_aey@hotmail.com"),
	array("โค้ก","cokezaatom.kl@hotmail.com"),
	array("โต้ง","drooping_me@live.com"),
	array("ท๊อป","top.collection.engineering@gmail.com"),
	array("บีม","bb_e_i@hotmail.com"),
	array("เต้","thekop_anfield_te@hotmail.com"),
	array("ไว","noppakormc@hotmail.com"),
	array("โอ","somsin.to@hotmail.com"),
	array("ภัทร","am_pro_terapaht1234@hotmail.com"),
	array("ซีอิ๊ว","onesalmon@gmail.com"),
	array("เท่ห์","tae_holy@hotmail.com"),
	array("ทิว","ti_ew_1992@hotmail.com"),
	array("อาร์ท","danupat_5555@hotmail.com"),
	array("ก้านตอง","gantong_ysp@hotmail.com"),
	array("ปิง","whalefrog@hotmail.com"),
	array("แฟกซ์","deoxen0n2@gmail.com"),
	array("มิลค์","milky_chocolatez@hotmail.com"),
	array("พ๊อต","potion_512@hotmail.com"),
	array("เคน","caine_organization@hotmail.com"),
	array("ออม","soul-destiny_virus@live.com"),
	array("บัว","matsujunz@yahoo.com"),
	array("บรีส","anon_266@hotmail.com"),
	array("เจด","s4010244@kmilt.ac.th"),
	array("เบน","buff_m_an@hotmail.com"),
	array("ต้น","ryoma_ton@hotmail.com"),
	array("แอน","ann_dekdee_17@hotmail.com"),
	array("ฮั้ว","cadet4@hotmail.com"),
	array("บิว","smell-biwbiw_one@hotmail.com"),
	array("เต้ย","teynakopha@hotmail.com"),
	array("แชมป์","champ_alone_always@hotmail.com"),
	array("ปังปอนด์","pachara_18999@hotmail.com"),
	array("มิ้น","better-november@hotmail.com"),
	array("แบงค์","bnb_kasin@hotmail.com"),
	array("ภัทร","s4050101@kmitl.ac.th"),
	array("วี","veewolfs@hotmail.com"),
	array("อิคคิว","aikkew@kmi.tl")
);
$email_test=array(
	array("อิคคิว","aikkew@kmi.tl")
);
foreach($email_real as $i=>$v){
	$mail = new PHPMailer();
	$mail->IsHTML(true); // กำหนดให้ ส่งเป็น html
	$mail->IsSMTP();
	$mail->SMTPAuth = true; // enable SMTP authentication
	// $mail->SMTPSecure = "ssl"; // sets the prefix to the servier
	// $mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
	// $mail->Port = 465; // set the SMTP port for the GMAIL server
	$mail->Host = 'pod51012.outlook.com'; // รวมเป็น ตัวแปลเดียวแบบนี้ก็ได้
	$mail->SMTPSecure = "tls";
	$mail->Port = 587;
	$mail->Username = "csag@kmi.tl"; // GMAIL username
	$mail->Password = "w,ji^hgs,nvodyo"; // GMAIL password
	$mail->From = "csag@kmi.tl"; // "name@yourdomain.com";
	$mail->FromName = "[CSAG] Computer System Administrator Group";
	$mail->Subject = "[CSAG] แจ้งสถานที่อบรมโครงการ Mini Admin";
	$mail->Body = "สวัสดีครับน้อง ".$v[0]."<br /><br />สำหรับน้องที่ลงทะเบียนอบรมเชิงฏิบัติการ Mini Admin ตอนนี้ทาง CSAG ได้ประกาศสถานที่สำหรับวันที่ 27 ส.ค. 2554 แล้ว คือสำนักหอสมุดกลาง ห้องอินเตอร์เน็ต ชั้น 2<br />** ให้น้องนำบัตรนักศึกษามาด้วย **<br />ซึ่งน้องสามารถเข้าไปดูรายละเอียดเพิ่มเติมได้ที่ <a href=\"http://csag.kmi.tl/regis\">http://csag.kmi.tl/regis</a><br /><br /><br />ขอบคุณ ณ โอกาสนี้<br />CSAG Team";
	$mail->CharSet = "utf-8";
	$mail->AddAddress($v[1], "น้อง ".$v[0]); // ใส่ email ผู้รับอย่างเดียวก็ได้
	$result=$mail->Send(); // ส่งเมลออก
	if(!$result){
		echo $v[1]." [error found]<br />";
	}else{
		echo $v[1]." [send]<br />";
	}
} }?>
</body>
</html>