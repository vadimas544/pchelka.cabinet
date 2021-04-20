<?php require_once  APPROOT . '/views/inc/header.php'; ?>

<div class="flex-wrap flex-mobile">
    <div class="flex-wrap flex-mobile-table">
            <div class="cab-info">
                <h4>Особисті дані</h4>
                <table class="table-cab">

                    <tr><td class="cab-info-left">Ім'я</td><tr>
                    <tr><td class="cab-info-right"><?= $data['response']['client']['name'] ?></td><tr>
                    <tr><td>
                               <div class="edit">
				 <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel2">Зміна імені</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body" id="user_detail">
						<form>
                                                    <div class="form-group">
                                                        <label for="password" class="col-form-label">Введіть новий пароль:</label>
                                                        <input type="password" name="password" id="password"/>
                                                    </div>
                                                    <div class="form-group">
                                                        <button class="btn btn-primary save_pass" name="save_pass" id="save_pass">Зберегти</button>
                                                    </div>

                                                </form>
					 </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

			
				<div class="modal fade" id="changepass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    					<div class="modal-dialog" role="document">
        				<div class="modal-cab modal-content">
            				<div class="modal-header">
                				<h5 class="modal-title" id="exampleModalLabel">Зміна паролю</h5>
                					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    					<span aria-hidden="true">&times;</span>
                					</button>
            				</div>
                			<form method="post" >
                    				<div class="form-group modal-cab-pol group">
                        				<label for="password" class="col-form-label">Введіть новий пароль:</label>
                        			<input type="password" class="password" name="password" id="pass">
							<br />
                        				<input type="checkbox" class="password-show">Показати пароль
                    				</div>
                    				<div class="form-group modal-cab-pol group">
                        				<label for="password_confirm" class="col-form-label">Підтвердіть новий пароль:</label>
                        				<input type="password" name="password" class="password" id="pass_confirm">
							<br />
                        				<input type="checkbox" class="password-show">Показати пароль
                    				</div>
                    				<div class="form-group">
                        			<button class="modal-cab-btn save_pass" name="save_pass" id="save_pass">Зберегти</button>
                    				</div>
                			</form>
        				</div>
    					</div>
				</div>
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-cab modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Редагування даних</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body" id="user_detail">
                                                <form>
                                                    <div class="form-group">
                                                        <input type="hidden" name="id" id="id" value="<?= $data['response']['client']['code_client']?>"/>
                                                    </div>
                                                    <div class="form-group modal-cab-pol">
                                                        <label for="name" class="col-form-label">Редагувати ім'я:</label>
                                                        <input type="text" name="name" id="name"/>
                                                    </div>
                                                    <div class="form-group modal-cab-pol">
                                                        <label for="surname" class="col-form-label">Редагувати прізвище:</label>
                                                        <input type="text" name="surname" id="surname"/>
                                                    </div>
                                                    <div class="form-group modal-cab-pol">
                                                        <label for="patronymic" class="col-form-label">Редагувати по-батькові:</label>
                                                        <input type="text" name="patronymic" id="patronymic"/>
                                                    </div>
							
                                                    <div class="form-group modal-cab-pol">
                                                        <label for="date_birth" class="col-form-label">Редагувати дату народження:</label>
                                                        <input type="date" name="date_birth" id="date_birth"/>
                                                    </div>
							
                                                    <div class="form-group">
                                                        <label for="phone" class="col-form-label">Телефон:</label>
                                                        <input type="text" name="phone" id="phone" disabled/>
							<label for="phone" class="col-form-label" style="color: red;">Дане поле не можна змінювати</label>
                                                    </div>
					
                                                    <div class="form-group modal-cab-pol">
                                                        <label for="email" class="col-form-label">Редагувати e-mail:</label>
                                                        <input type="text" name="email" id="email"/>
                                                    </div>
                                                    <div class="form-group">
                                                        <button class=" modal-cab-btn save_data" name="save_data" id="save_data">Зберегти</button>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </td>
                    </tr>
                    <tr><td class="cab-info-left">Прізвище</td></tr>
                    <tr><td class="cab-info-right"><?= $data['response']['client']['surname'] ?></td></tr>
                    <tr><td class="cab-info-left">По-батькові</td></tr>
                    <tr><td class="cab-info-right"><?= $data['response']['client']['patronymic'] ?></td></tr>
                    <tr><td class="cab-info-left">Дата народження</td></tr>
                    <tr><td class="cab-info-right"> <?= $data['response']['client']['date_birth'] ?></td></tr>
                    <tr><td class="cab-info-left">Телефон</td></tr>
                    <tr><td class="cab-info-right"><?= $data['response']['client']['phone'] ?></td></tr>
                    <tr><td class="cab-info-left">E-mail</td></tr>
                    <tr><td class="cab-info-right"><?= $data['response']['client']['email'] ?></td></tr>
                    <tr><td class="cab-info-left">Дата реєстрації</td></tr>
                    <tr><td class="cab-info-right"><?= $data['response']['client']['regdate'] ?></td></tr>
                    <tr>
                        <td >
                            <div class="text-left">
			<td/>
                    </tr>
		<tr>
                        <!--<td >
                            <div class="text-left">
                                <button type="button" class="btn btn-secondary btn-lg btn-block edit_pass" name="edit_pass" id="edit_pass" data-toggle="modal2" data-target="#exampleModal2">
                                    Змінити пароль
                        <td/>-->
                    </tr>
                </table>
		<button type="button" class="btn-cab change_pass" name="change_pass" data-toggle="modal" data-target="#changepass">Змінити пароль</button>
         <button type="button" class="btn-cab edit_data" name="edit" id="<?= $data['response']['client']['code_client'] ?>" data-toggle="modal" data-target="#exampleModal">
                                    Редагувати дані</button>
        </div>
    </div>
	 <div class="flex-wrap bottom-flex">
        <div class="card-main up-card">
                <div class="card-wrapper">
                    <div class="card-front">
                        <div class="card-head">
                        <img class="card-logo" src="../img/card-logo.svg">
                        <h4 class="card-text">Картка лояльності</h4>
                        <p>BONUS</p>
                        </div>
                        <p id="card-number"><?= $data['response']['client']['barcode'][0]['barcode'] ?></p>
                        <h4 class="card-text-bottom">Номер картки</h4>
                    </div>
                </div>
                <div class="hide-logo"><img src="../img/hide-logo.png" alt=""></div>
        </div>
        <div id="save" class="card-main save">
            <div class="card-wrapper">
                <div class="card-front">
                        <div class="card-head">
                        <img class="card-logo" src="../img/card-logo.svg">
                        <h4 class="card-text">Картка лояльності</h4>
                        <p>BARCODE</p>
                        </div>
                        <div class="flex-wrap">
                        <div class="barcode">
                            <?php
                            echo  generateBarcode($data['response']['client']['barcode'][0]['barcode']);
                            ?>
                            <div class="text-barcode">
                                <?php echo $data['response']['client']['barcode'][0]['barcode']; ?>
                            </div>
                        </div>
                        <div class="bonus">
                            <div class="flex-wrap down">
                                <h4 class="card-text non-center">Бонуси:</h4>
                                <div class="text-bonus">
                                    <?php
                                    echo $data['response']['client']['account'][0]['sum_account'] .' грн';
                                    ?>
                                </div>
                            </div>
                            <div class="flex-wrap down">
                                <h4 class="card-text non-center">Бонуси:</h4>
                                <div class="text-bonus green">
                                    <?php
					 echo $data['response']['client']['discount'] . ' %';
                                    ?>
                                </div>
                            </div>
                        </div>
                        </div>
                </div>
            </div>
        </div>
        <!--<button onclick="saveCanvas()">save</button>-->
    </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>
