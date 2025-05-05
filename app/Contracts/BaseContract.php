<?php

namespace App\Contract;

use Illuminate\Database\Eloquent\Model;

interface BaseContract
{
    public function toCreate(array $data);
    public function toUpdate($id, array $data): Model;
    public function toDelete($id): Model;
    public function toGetById(int|string $id): Model|null;
    public function toGetAll();
}