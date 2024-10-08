<?php

test('example', function () {
    $response = $this->get('/roles');

    $response->assertStatus(200);
});
