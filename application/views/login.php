
<div class="content">
    <div class="row">
        <div class="col-xs-1 col-sm-1 col-lg-3"></div>
        <div class="col-xs10-6 col-sm-10 col-lg-6">
            <h2>Login</h2>
            <?php echo form_open('login/autenticar'); ?>
            <div class="form-group">
                <label for="usuario">Usuário</label>
                <input class="form-control" type="text" required="required" name="user" id="usuario">
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input class="form-control" type="password" required="required" name="senha" id="senha">
            </div>
            </br>
            <input type="submit" name="acao" value="Entrar" class="btn btn-success"/>
            <input type="reset" class="btn btn-primary"/>
            <?php form_close(); ?>  
        </div>
        <div class="col-xs-1 col-sm-1 col-lg-3"></div>
    </div>
</div>
