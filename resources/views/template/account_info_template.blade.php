<div class="container mt-3">
    <h3>Chỉnh sửa thông tin</h3>
    <!--Form nhập thông tin cá nhân-->
<form>
    <!--Tên-->
<div class="mb-3">
    <label class="form-label">Họ Tên<p5 class="must-input">*</p5>:</label>
    <input type="text" class="form-control" id="account_name">
  </div>
  <!--Giới tính-->
  <label  class="form-label">Giới tính<p5 class="must-input">*</p5>:</label>
  <!--Check giới tính nam-->
  <div class="mt-2 form-check">
  <input class="form-check-input" type="radio" name="account_gender_male" id="account_gender_male">
  <label class="form-check-label" for="flexRadioDefault1">
    Nam
  </label>
</div>
<!--Check giới tính nữ-->
<div class="mt-2 form-check">
  <input class="form-check-input" type="radio" name="account_gender_male" id="account_gender_male" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Nữ
  </label>
</div>
 <!--Email-->
  <div class="mb-3 mt-3">
    <label  class="form-label">Email<p5 class="must-input">*</p5>:</label>
    <input type="email" class="form-control" id="account_email">
  </div>
<!--Số điện thoại-->
  <div class="mb-3">
    <label  class="form-label">Số điện thoại:</label>
    <input type="number" class="form-control" id="account_phone_number">
  </div>
  <!--Submit form-->
  <button type="submit" class="mt-2 btn btn-primary sab-submit-button">Lưu</button>
</form>
</div>
