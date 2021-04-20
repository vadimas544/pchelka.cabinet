<?php require APPROOT . '/views/inc/header.php'; ?>


<div class="big-flex">   
<div class="flex-wrap center-flex">
        <div class="login-left">
            <img src="../img/logo-log.svg" alt="">
            <div class="line"></div>
            <p>Дякуємо<br>
що обрали нас</p>
        </div>
        <div class="login-right">
            <?php
//            var_dump($_SESSION);
            flash('register_success');?>
            <h2>Авторизація</h2>
<!--            .<p>Пожалуйста введите ваши данные</p>-->
            <form action="<?php echo URLROOT?>/users/login" method="post">
                <div class="form-group">
                    <label for="phone">Телефон: <sup style="color: red;">*</sup></label>
                    <input type="tel" name="phone" placeholder="380*********" id="phone" class="form-control form-control-lg <?php echo (!empty($data['phone_error'])) ? 'is-invalid' : ''?>"
                           value="<?php echo $data['phone']; ?>">
                    <span class="invalid-feedback"><?php echo $data['phone_error']; ?></span>
                </div>
                <div class="form-group group">
                    <label for="password">Пароль: <sup style="color: red;">*</sup></label>
                    <input type="password" name="password" class="form-control form-control-lg password <?php echo (!empty($data['password_error'])) ? 'is-invalid' : ''?>"
                           value="<?php echo $data['password']; ?>">
                    <input type="checkbox" class="password-show">Показати пароль<br /><br />
                    <span class="invalid-feedback"><?php echo $data['password_error']; ?></span>
                    <span>Забули пароль? - </span><a href="<?php echo URLROOT?>/users/recovery">Відновлення паролю</a>
                </div>

                <div class="log-btns">
                        <input type="submit" value="Увійти" class="btn-log">
                        <a href="<?php echo URLROOT;?>/users/register " class="btn-log-a">Зареєструватися</a>
                </div>
            </form>
        </div>
</div>
<!--<div class="footer">
    <div class="company"><p>© 2018 ТОВ "ЛЕГІОН" 2020</p></div>
    <div class="menu-foot">
        <a href="https://citymarket.in.ua/programa-lojalnosti/">Програма лояльності</a>
        <a href="https://citymarket.in.ua/kariera/zvorotnij-zvjazok/">Зворотній зв’язок</a>
        <a href="https://citymarket.in.ua/vakancii/">Вакансії</a>
    </div>
</div>-->
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
