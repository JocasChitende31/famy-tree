<?php

namespace App\Interfaces;

interface BaseRespositoriesInterface
{
    public function all();
    public function find($id);
    public function store(array $data);
    public function update(array $data);
    public function delete($id);
}