<section class="csag-main">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h3 align="center"><b></b></h3>
        <h4 align="center"><b>Computer System Administrator Group</b></h4>
        <p class="csag-announce">
        <div class="col-md-10 col-md-offset-1 announcement-card">
        	<p>กลับมากันอีกครั้งแล้วกับการรับสมาชิกใหม่ เพื่อเข้าร่วมเป็นส่วนหนึ่งของทีมของเรา สำหรับน้องๆคนไหนที่อยากรู้ว่าเราคือใครและมีผลงานอะไรบ้าง
			    <br />
          <div class="text-center">
            <div class="benefit-card">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/UjG4YPct1Wc"></iframe>
              </div>
            </div>
            <br/>
            <a class="btn btn-info" href="<?= site_url('about') ?>">csag คืออะไร ?</a>
            <a class="btn btn-info" href="<?= site_url('products') ?>"> ผลงานของเรา </a>
            <a class="btn btn-info" href="<?= site_url('experiences') ?>"> รางวัลที่สมาชิกได้รับ </a>
          </div>
          <br />
        	 น้องๆที่ได้รับคัดเลือกจะได้รับสิทธิพิเศษดังนี้</p>
           <!-- logo icon -->
         <div class="row text-center">
           <div class="col-md-4 col-xs-10">
            <div class="benefit-card">
              <div class="benefit-img text-center" >
               <i class="fa fa-envelope fa-5x"></i>
             </div>
              ได้อีเมลล์ @kmi.tl ชื่อสถาบันสุดเท่ ไปใช้งาน ใครๆก็รู้ว่าเรามาจาก kmitl
            </div>
           </div>
           <div class="col-md-4 col-xs-10 ">
            <div class="benefit-card">           
              <div class="benefit-img text-center">
                <i class="fa fa-windows fa-5x"></i>
              </div>
              ได้รับสิทธิในการใช้ office 365 และ software ลิขสิทธิ์อื่นๆจาก microsoft ฟรี        
            </div>
           </div>
           <div class="col-md-4 col-xs-10">
            <div class="benefit-card">
              <div class="benefit-img text-center">
                <i class="fa fa-code fa-5x"></i>
              </div>
              ได้ domain name yourname.kmi.tl และ host เพื่อสร้างสรรค์เว็บไซต์ของน้องตามต้องการ            
            </div>
           </div>
         </div>
         <div class="col-md-6 col-md-offset-3 text-center">
         <br />
          <!-- <a class="btn btn-lg btn-inverse" href="<?= site_url('events/cmat') ?>">Learn more</a> -->
          หรือติดตามสาระหน้ารู้ทางเทคโนโลยีจากพวกเราได้ที่ ...
          <a class="btn btn-lg btn-default btn-info btn-csagc" href="https://www.facebook.com/csag.kmitl"><i class="fa fa-facebook-square"></i> CSAG Fanpage</a>
        </div>
        </div>
        <br/>
        <!-- <p class="csag-announce">รอประกาศข่าวดีเร็วๆ นี้นะจ้ะ :D</p> -->
      </div>
      <div class="col-md-4 register-box" >
        <?php if (!$logged_in): ?>
          <h3 align="center"><b> สมัครเลย !</b></h3>
          <?= form_open('registrations/create'); ?>
            <div class="form-group">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Email" name="email" style="height: 40px;">
                <div class="input-group-addon">@kmitl.ac.th</div>
              </div>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" placeholder="Password" name="password" style="height: 40px;">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" placeholder="Password Confirmation" name="password_confirmation" style="height: 40px;">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Fullname" name="fullname" style="height: 40px;">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Phone" name="phone" style="height: 40px;">
            </div>
            <button type="submit" class="btn btn-danger" style="width:100%;  font-size:100%;">ยืนยัน</button>
          </form>
        <?php else: ?>
          <h3 align="center"><b>Agenda</b></h3>
            <div class="benefit-card">
              <div class="benefit-img text-center">
                <i class="fa fa-calendar fa-5x"></i>
              </div>
              อดทนรออีกนิดเดียวครับน้องๆ กำหนดการจะตามมาในเร็วนี้แน่นอน พี่สัญญา :)
            </div>
          <!--
          <table id="mini-admin-agenda" class="table table-hover">
            <thead>
              <th>วันที่</th>
              <th>กิจกรรม</th>
            </thead>
            <tbody>
              <tr>
                <td>1 กุมภาพันธ์</td>
                <td>Mini Admin Training วันที่ 1</td>
              </tr>
              <tr>
                <td>7 กุมภาพันธ์</td>
                <td>Mini Admin Training วันที่ 2</td>
              </tr>
              <tr>
                <td>8 กุมภาพันธ์</td>
                <td>Mini Admin Exam</td>
              </tr>
              <tr>
                <td><strong><em>To be announced</em></strong></td>
                <td>ประกาศผู้ติดสัมภาษณ์</td>
              </tr>
              <tr>
                <td><strong><em>To be announced</em></strong></td>
                <td>สัมภาษณ์รับสมาชิกใหม่</td>
              </tr>
              <tr>
                <td><strong><em>To be announced</em></strong></td>
                <td>ประกาศผู้ผ่านการเข้าร่วมเป็นสมาชิก</td>
              </tr>
            </tbody>
          </table>
          -->
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<div class="modal fade" id="learn-more-modal" tabindex="-1" role="dialog" aria-labelledby="learn-more-modal-title" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="learn-more-modal-title">Learn more</h4>
      </div>
      <div class="modal-body thai" style="padding-left:9%; padding-right:9%;">
        <h4><i class="fa fa-hand-o-right"></i> ขั้นตอนการลงทะเบียน</h4>
        <p>1.น้องสามารถลงทะเบียนได้ผ่านทางหน้าเว็บไซต์ของ csag โดยสมัครที่แถบ Registration</br>
        2.น้องๆกรอกข้อมูลต่างๆ และทำตามขั้นตอนในการรับสมัคร</br>
        3.น้องๆสามารถสมัครกิจกรรมอบรมเชิงปฏิบัติการ Mini admin และ/หรือ กิจกรรมการรับสมัครสมาชิกใหม่</p>
        <hr>
          <h6> <i class="fa fa-user"></i> หากน้องๆได้เป็นสมาชิกของ CSAG สิทธิพิเศษที่น้องๆจะได้รับมีดังนี้ </h6>
        <p>1. เครื่อง Server สำหรับทดลองและพัฒนาระบบคอมพิวเตอร์ต่างๆ</br>
        2. ที่นั่งทำงานส่วนตัว (แอร์ฟรี  เปิด 24 ชม)</br>
        3. Hi-Speed Internet ความเร็วดาวน์โหลดมากกว่า 100 Mbps อัพโหลดมากกว่า 70 Mbps</br>
        4. หนังสือ ไฟล์วิดีโอความรู้ต่างๆ และการอบรมแนะนำโดยพี่ๆ</br>
        5. ได้รับ E-Mail@kmi.tl ของ Live@edu จากทาง Microsoft</br>
        6. มีโอกาสในการได้รับสิทธิ์ดูแลเครื่องเซิฟเวอร์ ของ CSAG </br>
        7. ได้รับการดูแล อบรมในฐานะ Mini Admin </br>
        8. ได้รับการบ่มเพาะใน  Technology ต่างๆที่น้องสนใจ</br>
        9. ถูกปลูกฝังความรู้และแนวคิดของวัฒนธรรมองค์กร พร้อมสำหรับการก้าวไปสู่ผู้นำ trend ของ Technology </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
