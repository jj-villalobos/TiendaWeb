<!DOCTYPE html>
<html>
<body>

    <?php include("header.ctp");?>

    <div class="users form">
        <?php echo $this->Session->flash('auth'); ?>
        <?php echo $this->Form->create('User'); ?>
        <fieldset>
        <legend><?php echo __('Por favor ingrese nombre de usuario y contraseña'); ?></legend>
        <?php   echo $this->Form->input('username');
                echo $this->Form->input('password');
        ?>
        </fieldset>

        <?php echo $this->Form->end(__('Ingresar')); ?>
    </div>

</body>
</html>