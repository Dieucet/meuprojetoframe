<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> <?php echo $completo; ?> </title>
    </head>
    <body>
        <?php
        // put your code here
        echo $acronico;
        
       echo "<br>";
//        echo $completo;
        echo "<p>";
        ?>
        <h2>Contato</h2>
        <?php echo form_open('contatos/inserir'); ?>
            <label>Nome</label>
            <input name="nome" type="text" required/>
            <p></p>
            <label>e-email</label>
            <input name="email" type="email" required/>
            <p></p>
            <input class="btn" type="submit" value="salvar"/>
            <input class="btn" type="reset" value="limpado"/>
        <?php form_close(); ?>
        <p></p>
        <div>
            <table>
                <caption>contatos</caption>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>e-email</th>
                        <th>funções</th>
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
                            <a href="<?php
                            echo base_url() . 'contato/editar/' . $row->id; ?>">Editar</a>
                            |
                            <a href="<?php
                            echo base_url() .  'contato/excluir/' . $row->id; ?>">Excluir</a>
                            
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    <?php endif ?>
                </tbody>
            </table>
        </div>
        <p></p>
         <a href="<?php echo base_url() . 'home'; ?>">voltar</a>
    </body>
</html>
