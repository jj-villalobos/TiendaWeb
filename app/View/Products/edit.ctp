<!DOCTYPE html>
<html>
<body>

    <?php include("header.ctp");?>

    <h5>Editar producto</h5>

    <?php
    echo $this->Form->create('Product');
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->input('name');
    echo $this->Form->input('genre');
    echo $this->Form->input('console');
    echo $this->Form->input('release_year', array(
						        'type' => 'date',
						        'dateFormat' => 'Y',
						        'minYear' => 2000,
						        'maxYear' => date('Y'),
						        'name' => 'data[Products][release_year]', ));
    echo $this->Form->input('price', array('label'=>'Price in dollars'));
    echo $this->Form->input('description', array('rows' => '3'));
    echo $this->Form->input('amount', array('label'=>'Amount of product (units):'));
    echo $this->Form->input('image', array('rows' => '1', 'label'=>'Image link'));
    echo $this->Form->input('video', array('rows' => '1', 'label'=>'Video link'));

    echo $this->Form->end('Guardar cambios');
    ?>

</body>
</html>