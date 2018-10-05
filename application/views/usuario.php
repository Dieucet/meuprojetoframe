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
            <?php echo form_open('usuario/inserir'); ?>
            <div class="form-group">
                <label for="nomeUsuario">Nome Usuario</label>
                <input class="form-control" type="text" id="nomeUsuario" name="nomeUsuario" required>
            </div>
            <div class="form-group">
                <label for="user">Usuario</label>
                <input class="form-control" type="text" id="user" name="user" required>
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
            <input class="btn btn-secondary" id="btn-lista" value="Listar Contatos"/>


            <?php form_close(); ?>
            <p></p>
            <div id="div-lista" class="hide">
                <div id="div-lista" class="hide">
                    <table id="contatos" class="table table-striped table-bordered" style="width:100%">
                        <!--<caption>contatos</caption>-->
                        <thead>
                            <tr>
                                <th class="table-dark" >Usuario</th>
                                <th class="table-dark" >User</th>
                                <th class="table-dark" >Função</th>
                            </tr>
                        </thead>
                        <tbody>
                                                <?php if ($usuario == False): ?>
                                <tr><td>Nenhum contato encontrado!</td></tr>
                            <?php else: ?>
                                <?php foreach ($usuario as $row): ?>
                                    <tr>
                                        <td><?php echo $row->nomeUsuario; ?></td>
                                        <td><?php echo $row->User; ?></td>
                                        <td>
                                            <a href="<?php echo base_url() . 'usuario/editar/' . $row->idusuario; ?>">Editar</a>
                                            |
                                            <a href="<?php echo base_url() . 'usuario/excluir/' . $row->idusuario; ?>">Excluir</a>

                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif ?>
                        </tbody>
                    </table>
                </div>
                <p></p>
            </div>
            <div class="col-sm-3"></div>
            <a class="btn btn-primary" href="<?php echo base_url() . 'home'; ?>">voltar</a>
        </div>
    </div>
    <script type="text/javascript">
        $("#btn-lista").click(function () {
            $("#div-lista").toggleClass("hide");
        });
        $(document).ready(function () {
            $('#contatos').DataTable({
                language: {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.12/i18n/Portuguese-Brasil.json"
                },
                idisplaylength: 10,
                dom: 'Bfrtip',
                buttons: [
                    'copy',
                    'excel',
                    'pdf',
                    'print'
                ]
            });
        });

    </script>

