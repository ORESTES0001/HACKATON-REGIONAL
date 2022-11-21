<?php headerAdmin($data);
$this->conexion = new Conexion();
$this->conexion = $this->conexion->conect();
?>
<div class="prueba">
    <?php debug($data) ?>
</div>
<?php footerAdmin($data)?>