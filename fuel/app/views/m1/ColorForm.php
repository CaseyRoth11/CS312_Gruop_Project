<body>
    <div>
        <?php
    if (isset($failure_view)) {
        echo $failure_view;
    }
    ?>
    </div>
<main>
    <?php
        echo Form::open(array(
            "action" => "index/m1/colorcoordinate",
            "method" => "post",
            "id" => "fuel_form"
        ));
        echo Form::label('Table Size:&nbsp');
        echo Form::input('tableSize', '', array('type' => 'text'))."</br>";
        echo Form::label('Number of Colors:&nbsp');
        echo Form::input('numberColors', '', array('type' => 'text'))."</br>";
        echo Form::input('submit', 'Submit', array('type' => 'submit'));
        echo Form::close();
    ?>
</main>
</body>
