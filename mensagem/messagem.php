<?php
if(isset($_SESSION['mensagem'])):

 ?>
<script>
    //mensagem de erro
    window.onload =  function() {
      M.toast({html: '<?php echo $_SESSION['mensagem']; ?>'});
    };
</script>
<?php
endif;



?>
