<?php require_once APPROOT . '/views/inc/header.php'; ?>
<div class="row">
        <div class="col-md-6 mx-auto">
            <h2 class="text-center">Зміна паролю по e-mail</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="margin card card-body bg-light mt-3">

                <form action="<?php echo URLROOT?>/users/restoreemail" method="post">
                    <div class="form-group">
                        <label for="phone">Телефон: <sup>*</sup></label>
                        <input type="number" name="phone" id="phone" class="form-control form-control-lg <?php echo (!empty($data['phone_error'])) ? 'is-invalid' : ''?>"
                               value="<?php echo $data['phone']; ?>">
                        <span class="invalid-feedback"><?php echo $data['phone_error']; ?></span>
                    </div>
                    <div class="form-group group">
                    <div class="row">
                        <div class="col">
                            <input type="submit" value="Змінити" class="btn btn-success btn-block">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


<?php require APPROOT . '/views/inc/footer.php'; ?>
