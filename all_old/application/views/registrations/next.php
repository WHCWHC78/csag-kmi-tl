<section class="csag-main">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <h3><b>One more step</b></h3>
        <p class="csag-announce">โปรดเลือกกิจกรรมที่จะเข้าร่วม</p>
        <?= form_open('attendances/create'); ?>
          <label class="checkbox">
            <input class="custom-checkbox" type="checkbox" data-toggle="checkbox" name="events[]" value="cmat_4">Mini Admin Training
            <span class="icons"><span class="icon-unchecked"></span><span class="icon-checked"></span></span>
          </label>
          <label class="checkbox">
            <input class="custom-checkbox" type="checkbox" data-toggle="checkbox" name="events[]" value="crecruit_7">Mini Admin Exam
            <span class="icons"><span class="icon-unchecked"></span><span class="icon-checked"></span></span>
          </label>
          <button type="submit" class="btn btn-danger">Submit</button>
        </form>
      </div>
    </div>
  </div>
</section>
