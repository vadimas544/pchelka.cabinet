<?php require_once APPROOT . '/views/inc/header.php'; ?>
<div class="row">
        <div class="col-md-6 mx-auto">
            <h2>Зміна паролю</h2>
            <form action="<?php echo URLROOT?>/users/passchange" method="post">

		<div class="form-group group">
                        <label for="password">Пароль: <sup>*</sup></label>
                        <input type="password" name="password" id="password" class="form-control form-control-lg password <?php echo (!empty($data['password_error'])) ? 'is-invalid' : ''?>"
                               value="<?php echo $data['password']; ?>">
                        <input type="checkbox" class="password-show">Показати пароль
                        <span class="invalid-feedback"><?php echo $data['password_error']; ?></span>
                    </div>
                    <div class="form-group group">
                        <label for="confirm password">Повторіть введений пароль: <sup>*</sup></label>
                        <input type="password" name="password_confirm" class="form-control form-control-lg password <?php echo (!empty($data['password_confirm_error'])) ? 'is-invalid' : ''?>"
                               value="<?php echo $data['password_confirm']; ?>">
                        <input type="checkbox" class="password-show">Показати пароль
                        <span class="invalid-feedback"><?php echo $data['password_confirm_error']; ?></span>
                    </div>
			<div class="form-group"> 
				<input type="submit" value="Змінити" class="btn btn-success btn-block">
			</div>	
            </form>
        </div>
    </div>

<?php require APPROOT . '/views/inc/footer.php'; ?>
