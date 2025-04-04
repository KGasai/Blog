<div class="row">
    <div class="col-1"></div>
    <div class="col-10">
        <h2 class="text-center">Авторизация</h2>
        <form action="main/selectAdmin" method="post" style="width:400px;" class="ms-auto me-auto">
            <div class="mb-3">
                <label for="form-control">Логин:</label>
                <input type="text" name="login" id="form-control" class="form-control">
            </div>
            <div class="mb-3">
                <label for="form-control">Пароль:</label>
                <input type="text" name="password" id="form-control" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Войти</button> 
            <p class="mt-3">
                <?=
                $this ->session-> userdata('error_auth');
                $this->session->unset_userdata('error_auth');
             ?></p>
        </form>
    </div>
    <div class="col-1"></div>
</div>