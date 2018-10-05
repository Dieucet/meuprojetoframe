<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/jszip-2.5.0/dt-1.10.18/af-2.3.0/b-1.5.2/b-flash-1.5.2/b-html5-1.5.2/b-print-1.5.2/r-2.2.2/datatables.min.js"></script>
    
<script type="text/javascript" src="https://cdn.datatables.net/plug-ins/1.10.16/i18n/Portuguese-Brasil.json"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-growl/1.0.0/jquery.bootstrap-growl.js"></script>

<?php if ($this->session->flashdata('sucesso')) { ?>
<script>
    $.bootstrapGrowl("Cadastro realizado com sucesso!", {
  ele: 'body', // which element to append to
  type: 'success', // (null, 'info', 'danger', 'success')
  offset: {from: 'top', amount: 20}, // 'top', or 'bottom'
  align: 'right', // ('left', 'right', or 'center')
  width: 250, // (integer, or 'auto')
  delay: 4000, // Time while the message will be displayed. It's not equivalent to the *demo* timeOut!
  allow_dismiss: true, // If true then will display a cross to close the popup.
  stackup_spacing: 10 // spacing between consecutively stacked growls.
});
</script>
<?php } elseif ($this->session->flashdata('falha')) { ?>
<script>
    $.bootstrapGrowl("Erro ao cadastrar!", {
  ele: 'body', // which element to append to
  type: 'danger', // (null, 'info', 'danger', 'success')
  offset: {from: 'top', amount: 20}, // 'top', or 'bottom'
  align: 'right', // ('left', 'right', or 'center')
  width: 250, // (integer, or 'auto')
  delay: 4000, // Time while the message will be displayed. It's not equivalent to the *demo* timeOut!
  allow_dismiss: true, // If true then will display a cross to close the popup.
  stackup_spacing: 10 // spacing between consecutively stacked growls.
});
</script>
<?php } elseif ($this->session->flashdata('sucessoA')) { ?>
<script>
    $.bootstrapGrowl("Cadastro atualizado com sucesso!", {
  ele: 'body', // which element to append to
  type: 'success', // (null, 'info', 'danger', 'success')
  offset: {from: 'top', amount: 20}, // 'top', or 'bottom'
  align: 'right', // ('left', 'right', or 'center')
  width: 250, // (integer, or 'auto')
  delay: 4000, // Time while the message will be displayed. It's not equivalent to the *demo* timeOut!
  allow_dismiss: true, // If true then will display a cross to close the popup.
  stackup_spacing: 10 // spacing between consecutively stacked growls.
});
</script>
<?php } elseif ($this->session->flashdata('falhaA')) { ?>
<script>
    $.bootstrapGrowl("erro ao excluir cadastrar!", {
  ele: 'body', // which element to append to
  type: 'danger', // (null, 'info', 'danger', 'success')
  offset: {from: 'top', amount: 20}, // 'top', or 'bottom'
  align: 'right', // ('left', 'right', or 'center')
  width: 250, // (integer, or 'auto')
  delay: 4000, // Time while the message will be displayed. It's not equivalent to the *demo* timeOut!
  allow_dismiss: true, // If true then will display a cross to close the popup.
  stackup_spacing: 10 // spacing between consecutively stacked growls.
});
</script>
<?php }elseif ($this->session->flashdata('excluirS')) { ?>
<script>
    $.bootstrapGrowl("Cadastro excluído com sucesso!", {
  ele: 'body', // which element to append to
  type: 'success', // (null, 'info', 'danger', 'success')
  offset: {from: 'top', amount: 20}, // 'top', or 'bottom'
  align: 'right', // ('left', 'right', or 'center')
  width: 250, // (integer, or 'auto')
  delay: 4000, // Time while the message will be displayed. It's not equivalent to the *demo* timeOut!
  allow_dismiss: true, // If true then will display a cross to close the popup.
  stackup_spacing: 10 // spacing between consecutively stacked growls.
});
</script>
<?php }elseif ($this->session->flashdata('excluirF')) { ?>
<script>
    $.bootstrapGrowl("erro ao excluir cadastro!", {
  ele: 'body', // which element to append to
  type: 'danger', // (null, 'info', 'danger', 'success')
  offset: {from: 'top', amount: 20}, // 'top', or 'bottom'
  align: 'right', // ('left', 'right', or 'center')
  width: 250, // (integer, or 'auto')
  delay: 4000, // Time while the message will be displayed. It's not equivalent to the *demo* timeOut!
  allow_dismiss: true, // If true then will display a cross to close the popup.
  stackup_spacing: 10 // spacing between consecutively stacked growls.
});
</script>

<?php }elseif ($this->session->flashdata('atualizarerro')) { ?>
<script>
    $.bootstrapGrowl("Erro ao atualizar cadastro!", {
  ele: 'body', // which element to append to
  type: 'danger', // (null, 'info', 'danger', 'success')
  offset: {from: 'top', amount: 20}, // 'top', or 'bottom'
  align: 'right', // ('left', 'right', or 'center')
  width: 250, // (integer, or 'auto')
  delay: 4000, // Time while the message will be displayed. It's not equivalent to the *demo* timeOut!
  allow_dismiss: true, // If true then will display a cross to close the popup.
  stackup_spacing: 10 // spacing between consecutively stacked growls.
});
</script>
<?php } ?>

</body> 
</html>







