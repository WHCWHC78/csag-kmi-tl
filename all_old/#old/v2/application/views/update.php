<?php
$id = $this->session->userdata('id');
$this->db->select('facebook');
$query = $this->db->get_where('register', array('student_id' => $id));
?>
<script type="text/javascript" language="javascript">
    $(document).ready(function(){
        Cufon.replace('.nfont');
    });
</script>
<h1 class="nfont">โปรดระบุ Facebook ของน้อง เพื่อเข้าสู่ระบบสมาชิก</h1>
<form method="post" accept-charset="utf-8" action="<?php echo base_url("member/updatedata"); ?>" class="form-horizontal">
    <fieldset>
        <div class="control-group">
            <label class="control-label" for="facebook">Facebook</label>
            <div class="controls">
                <input value="" maxlength="255" placeholder="Facebook" id="facebook" name="facebook" type="text" />
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-large offset2">ขั้นตอนต่อไป</buton>
    </fieldset>
</form>