<?php require APPROOT . '/views/inc/header.php'; ?>
    <div class="backg-light"></div>
    <div class="flex-wrap flex-mobile" style="max-width: 1024px;margin:0 auto;">
        <div class="city-reg">
            <img src="../img/LOGO.svg" alt="">
            <h1>Реєстрація</h1>
            <p>Особистого кабінету</p>
            <span class="line"></span>
            <a href="https://citymarket.in.ua/"><span>←</span>Повернутися на головну</a>
        </div>
        <div class="">
            <div class="card card-body bg-light mt-5">
                <h2>Стань учасником<br> Програми лояльності</h2>
                <!--<p>Будь-ласка введіть ваші дані:</p>-->
                <form action="<?php echo URLROOT?>/users/register" method="post">
                    <div class="form-group">
                        <label for="phone">Телефон: <sup>*</sup></label>
                        <input type="number" id="phone" placeholder="380***********" name="phone" class="form-control form-control-lg <?php echo (!empty($data['phone_error'])) ? 'is-invalid' : ''?>"
                               value="<?php echo $data['phone']; ?>">
                        <span class="invalid-feedback"><?php echo $data['phone_error']; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="name">Ім'я: <sup>*</sup></label>
                        <input type="text" name="name" class="form-control form-control-lg <?php echo (!empty($data['name_error'])) ? 'is-invalid' : ''?>"
                               value="<?php echo $data['name']; ?>">
                        <span class="invalid-feedback"><?php echo $data['name_error']; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="surname">Прізвище: </label>
                        <input type="text" name="surname" class="form-control form-control-lg <?php echo (!empty($data['surname_error'])) ? 'is-invalid' : ''?>"
                               value="<?php echo $data['surname']; ?>">
                        <span class="invalid-feedback"><?php echo $data['surname_error']; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="patronymic">По-батькові: </label>
                        <input type="text" name="patronymic" class="form-control form-control-lg <?php echo (!empty($data['patronymic_error'])) ? 'is-invalid' : ''?>"
                               value="<?php echo $data['patronymic']; ?>">
                        <span class="invalid-feedback"><?php echo $data['patronymic_error']; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="birthday">Дата народження: </label>
                        <input type="date" name="birthday" class="form-control form-control-lg <?php echo (!empty($data['birthday_error'])) ? 'is-invalid' : ''?>"
                               value="<?php echo $data['birthday']; ?>">
                        <span class="invalid-feedback"><?php echo $data['birthday_error']; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="email">Email: </label>
                        <input type="text" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_error'])) ? 'is-invalid' : ''?>"
                               value="<?php echo $data['email']; ?>">
                        <span class="invalid-feedback"><?php echo $data['email_error']; ?></span>
                    </div>
                    <div class="form-group group">
                        <label for="password">Пароль: <sup>*</sup></label>
                        <input type="password" name="password" id="password" class="form-control form-control-lg password <?php echo (!empty($data['password_error'])) ? 'is-invalid' : ''?>"
                               value="<?php echo $data['password']; ?>">
                        <input type="checkbox" class="password-show">Показати пароль
                        <span class="invalid-feedback"><?php echo $data['password_error']; ?></span>
                    </div>
                    <div class="form-group group">
                        <label for="confirm password">Повторіть введений пароль: <sup>*</sup></label>
                        <input type="password" name="confirm_password" class="form-control form-control-lg password <?php echo (!empty($data['confirm_password_error'])) ? 'is-invalid' : ''?>"
                               value="<?php echo $data['confirm_password']; ?>">
                        <input type="checkbox" class="password-show">Показати пароль
                        <span class="invalid-feedback"><?php echo $data['confirm_password_error']; ?></span>
                    </div>

                    <div class="form-group group">
                        <input type="checkbox" name="rules"> Ви даєте згоду на обробку персональних даних і ознайомлені з <a target="_blank" href="https://citymarket.in.ua/programa_loyalnosti/pravila_programi.pdf">правилами</a> програми лояльності.
                        <span class="invalid-feedback"><?php echo $data['rules_error']; ?></span>
                    </div>

                    <div class="form-foot">
                        <div class="btn-reg">
                            <input type="submit" value="Зареєструватися" class="">
                        </div>
                        <div class="btn-log">
                            <a href="<?php echo URLROOT;?>/users/login " class="btn-reg-out">Вже зареєстровані? - <span style="color: cornflowerblue">Увійдіть в особистий кабінет</span></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


<?php require APPROOT . '/views/inc/footer.php'; ?>
