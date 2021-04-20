<?php require_once APPROOT . '/views/inc/header.php'; ?>
<div class="flex-wrap recovery-flex"> 
        <div class="flex-wrap">
            <h2>
                Шановний клієнт, ви зробили запит на відновлення пароля на нашому сайті, щоб отримати новий пароль, вам необхідно вибрати зручний для вас спосіб відновлення

            </h2>
        </div>


                    <div class="btn-reg">
                        <a href="<?php echo URLROOT;?>/users/restoresms">Відновити по СМС</a>
                    </div>
		
                    <div class="btn-reg brn">
                        <a href="<?php echo URLROOT;?>/users/restoreemail">Відновити по E-mail</a>
                    </div>

	

    <div class="flex-wrap">
        <p>Ми сгенеруємо вам код підтвердження, і відправимо його зручним для вас способом. Після того як введете код підтвердження, у вас з'явиться можливість змінити пароль на новий, який ви будете використовувати для входу в Особистий кабінет. Також змінити пароль можна в Особистому кабінеті, з повагою CITY market.</p>

    </div>

</div>
<?php require_once APPROOT . '/views/inc/footer.php'; ?>
