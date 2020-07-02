<?php

namespace App\Repositories\User;


interface UserRepositoryInterface
{
    public function getAllData(int $perPage);

    public function getPaginatedData(int $perPage);

    public function createData(array $data);

    public function findById(int $id);

    public function findByKeyNdId(string $key, string $val);

    public function updateData(int $id, array $data);

    public function deleteData(int $id);

}
