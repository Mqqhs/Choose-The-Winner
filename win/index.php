<?php
include './inc/zi.php';
include './inc/form.php';
include './inc/select.php';
include './inc/zi_close.php';

?>

<?php include_once './parts/header.php'; ?>

<div class="container">


<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
        <img src="images/p1-win.jpg" class="img-fluid" alt="Responsive image">
      <h1 class="display-4 fw-normal">اربح معنا</h1>
      <p class="lead fw-normal">باقي على فتح التسجيل</p>
      <h3 id="countdown"></h3>
      <p class="lead fw-normal">للسحب لربح نسخة مجانية</p>
      <a class="btn btn-outline-secondary" href="#">Coming soon</a>
    </div>
  </div>

  <ul class="list-group list-group-flush">
  <li class="list-group-item">جوائز يومية</li>
  <li class="list-group-item">اختيار فائز واحد يوميا</li>
  <li class="list-group-item">نسخة مجانية من البرنامج</li>
  <li class="list-group-item">تسجيل مفتوح للجميع</li>
  <li class="list-group-item">لايوجد شروط للمتسابقين</li>
</ul>

<div class="position-relative text-right bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
    <h3>ادخل بياناتك</h3>
  <div class="mb-3">
    <label for="firstName" class="form-label">الاسم الاول</label>
    <input type="text" name="firstName" class="form-control" id="firstName" value="<?php echo $firstName ?>">
    <div class="form-text error"><?php echo $errors['firstNameError'] ?></div>
  </div>
  
  <div class="mb-3">
    <label for="lastName" class="form-label">الاسم الاخير</label>
    <input type="text" name="lastName" class="form-control" id="lastName" value="<?php echo $lastName ?>">
    <div class="form-text error"><?php echo $errors['lastNameError'] ?></div>
  </div>

  <div class="mb-3">
    <label for="Email" class="form-label">البريد الالكتروني</label>
    <input type="text" name="email" class="form-control" id="Email" value="<?php echo $email ?>">
    <div class="form-text error"><?php echo $errors['emailError'] ?></div>
  </div>

<button type="submit" name="submit" class="btn btn-primary">ارسال المعلومات</button>
</form>
</div>
</div>


<!-- Button trigger modal -->
<div class="d-grid gap-2 col-6 mx-auto my-5">
<button type="button" id="winner" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  اختيار الرابح
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-centered" >
    <div class="modal-content">
      <div class="modal-header">
      <?php foreach ($users as $user) : ?>
        <h5 class="modal-title" id="exampleModalLabel">الرابح بالمسابقة</h5>
        <?php endforeach ?>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach ($users as $user) : ?>
        <h1 class=" display-3 text-center modal-title" id="exampleModalLabel"><?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName']) . ' ' . htmlspecialchars($user['email'])?></h1>
        <?php endforeach ?>
      </div>

    </div>
  </div>
</div>


<div  id="cards" class="row mb-5 pb-5">
<div class="col-sm-6">
<div class="card my-2 bg-light">
<div class="card-body">
<h5 class="card-title"></h5>
<p class="card-text"><?php echo htmlspecialchars($user['email']) ?></p>
</div>
</div>

</div>

<?php include_once './parts/footer.php'; ?>
