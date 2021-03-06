
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
            <h2>Contato</h2>
            <?php echo form_open('contato/inserir'); ?>
            <div class="form-group">
                <label for="nome">Nome</label>
                <input class="form-control" type="text" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" id="email" name="email" type="email" required/>
            </div>
            <div class="form-group">
                <label for="idfuncao">Função</label>
                <select class="form-control" required="required" name="idfuncao" id="idfuncao">
                    <option value="" ></option>
                    <?php foreach ($funcao as $funcao): ?>
                        <option value="<?php echo $funcao->idfuncao; ?>"><?php echo $funcao->nomefuncao; ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <p></p>
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
                                <th class="table-dark" >Nome</th>
                                <th class="table-dark" >e-email</th>
                                <th class="table-dark" >Função</th>
                                <th class="table-dark" >funções</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if ($contatos == FALSE): ?>
                                <tr><td>Nenhum contato encontrado!</td></tr>
                            <?php else: ?>
                                <?php foreach ($contatos as $row): ?>
                                    <tr>
                                        <td><?php echo $row->nome; ?></td>
                                        <td><?php echo $row->email; ?></td>
                                        <td><?php echo $row->nomefuncao; ?></td>
                                        <td>
                                            <a href="<?php echo base_url() . 'contato/editar/' . $row->id; ?>">Editar</a>
                                            |
                                            <a href="<?php echo base_url() . 'contato/excluir/' . $row->id; ?>">Excluir</a>

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
