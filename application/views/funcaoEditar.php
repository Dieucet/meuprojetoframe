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
        <h2>Editar Função</h2>
        <?php echo form_open('funcao/atualizar'); ?> 
        
        <div class="form-group">
            <input type="hidden" name="idfuncao" id="idfuncao" value="<?php echo $funcaoEditar[0]->idfuncao; ?>">
            <label for="nomefuncao">funcao</label>
            <input class="form-control" id="nomefuncao" name="nomefuncao" type="text" value="<?php echo $funcaoEditar[0]->nomefuncao; ?>" required/>
        </div>
            <p></p>
            <input class="btn btn-success" type="submit" value="Salvar"/>
        <?php form_close(); ?>
        <p></p>
        <a class="btn btn-primary" href="<?php echo base_url() . 'funcao'; ?>">Cancela</a>
   </div>
        <div class="col-sm-3"></div>
    </div>
</div>