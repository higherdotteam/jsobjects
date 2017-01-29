<?php

$arr = array(
    'foo' => 'foo',
    'bar' => array(
        'baz' => 'baz',
        'candy' => 'candy',
        'vegetable' => array(
            'carrot' => 'carrot',
        )
    ),
    'vegetable' => array(
        'carrot' => 'carrot2',
    ),
    'fruits' => 'fruits',
);

$data = $arr;
header('Content-Type: application/json');
echo json_encode($data);
?>