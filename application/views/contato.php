<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
            <p></p>
            <input class="btn btn-success" type="submit" value="salvar"/>
            <input class="btn btn-secondary" type="reset" value="limpado"/>
            <a class="btn btn-primary" href="<?php echo base_url() . 'home'; ?>">voltar</a>

            <?php form_close(); ?>
            <p></p>
            <div>
                <table class="table">
                    <caption>contatos</caption>
                    <thead>
                        <tr>
                            <th class="table-dark" >Nome</th>
                            <th class="table-dark" >e-email</th>
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
    </div>
</div>