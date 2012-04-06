<?php

$data = array(
    array('10.6.132.122', array(
        'adr-rack', 'adr-rack.rackspace.corp'
    )),
);


header("Content-type: application/json");
echo json_encode($data);
