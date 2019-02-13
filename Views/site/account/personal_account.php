<?php
include ROOT.'/Views/layout/header.php';?>
<div class="intro_account">   <h2>Управление Акаунтом</h2>
<h3>Привет <?php echo $user["name"]; ?></h3>
</div>
<ul>
    <li><a href="/cabinet/edit">Изменить личную информацию</a></li>
    <li><a>Посмотреть список покупок</a></li>
    <li><a>Выйти из кабинета</a></li>
</ul>
<?php include ROOT.'/Views/layout/footer.php'; ?>

?>