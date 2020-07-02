<?php


namespace App\Repositories\User;


use App\User;

class UserEloquentRepository implements UserRepositoryInterface
{

    public function getAllData(int $perPage)
    {
        $limit = isset($perPage) ? $perPage : 10;
        return User::all()->splice($limit);
    }

    public function getPaginatedData(int $perPage)
    {
        $limit = isset($perPage) ? $perPage : 10;
        return User::paginate($limit);
    }

    public function createData(array $request)
    {
        return User::create($request);
    }

    public function findById(int $id)
    {
        return User::findById($id);
    }

    public function findByKeyNdId(string $key, string $val)
    {
        // TODO: Implement findByKeyNdId() method.
    }

    public function updateData(int $id, array $request)
    {
        $data = $this->findById($id);
        $data->update($request);
        return $data;
    }

    public function deleteData(int $id)
    {
        $data = $this->findById($id);
        $data->delete();
        return true;
    }
}
