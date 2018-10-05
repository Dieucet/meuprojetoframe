<div class="container">
    <div class="row">
        <!--Responsive para emartphone, tablet, e pc-->
        <div class="col-xs-1 col-sm-1 col-lg-3"></div>
        <div class="col-xs10-6 col-sm-10 col-lg-6">
            <?php
            // put your code here
            echo $acronico;

            echo "<br>";
//        echo $completo;
            echo "<p>";
            ?>
            <h2>Usuario</h2>
            <?php echo form_open('usuario/atualizar'); ?>
            <div class="form-group">
                <label for="nomeUsuario">Nome Usuario</label>
                <input class="form-control" type="hidden" id="idusuario" name="idusuario" value="<?php echo $usuarioEditar[0]->idusuario; ?>">
                <input class="form-control" type="text" id="nomeUsuario" name="nomeUsuario" value="<?php echo $usuarioEditar[0]->nomeUsuario; ?>" required>
            </div>
            <div class="form-group">
                <label for="user">Usuario</label>
                <input class="form-control" type="text" id="user" name="user" value="<?php echo $usuarioEditar[0]->User; ?>" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input class="form-control" type="password" id="senha" name="senha" required>
            </div>
            <div class="form-group">
                <label for="perfilAcesso">Perfil</label>
                <select class="form-control" required="required" name="perfilAcesso" id="perfilAcesso">
                    <option value="=="></option>
                    <option value="ADM">Administrador</option>
                    <option value="USER">Usuário</option>
                </select>
            <p></p>
            </div>
            <input class="btn btn-success" type="submit" value="salvar"/>
            <input class="btn btn-secondary" type="reset" value="limpado"/>


            <?php form_close(); ?>
            <p></p>
            
            <div class="col-sm-3"></div>
            <a class="btn btn-primary" href="<?php echo base_url() . 'home'; ?>">voltar</a>
        </div>
    </div>


