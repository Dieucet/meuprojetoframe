<!DOCTYPE html>

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
        <h2>Editar Contato</h2>
        <?php echo form_open('contato/atualizar'); ?> 
        
        <div class="form-group">
            <input type="hidden" name="id" id="id" value="<?php echo $contatoEditar[0]->id; ?>">
            <label for="nome">Nome</label>
            <input class="form-control" id="nome" name="nome" type="text" value="<?php echo $contatoEditar[0]->nome; ?>" required/>
        </div>
        <div class="form-group"> 
            <label for="email">e-mail</label>
            <input class="form-control" id="email" name="email" type="email" value="<?php echo $contatoEditar[0]->email; ?>" required/>
          </div>
          <p></p>
            <input class="btn btn-success" type="submit" value="Salvar"/>
        <?php form_close(); ?>
        <p></p>
        <a class="btn btn-primary" href="<?php echo base_url() . 'contato'; ?>">Cancela</a>
   </div>
        <div class="col-sm-3"></div>
    </div>
</div>