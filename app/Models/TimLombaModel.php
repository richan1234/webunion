<?php

namespace App\Models;

use CodeIgniter\Model;
use Ramsey\Uuid\Uuid;

class TimLomba extends Model
{
    protected $table = 'tim_lomba';
    protected $primaryKey = 'tim_lomba_id';

    protected $beforeInsert = ['beforeInsert'];
    protected $beforeUpdate = ['beforeUpdate'];

    protected function beforeInsert(array $data): array
    {
        $data['data']['tim_lomba_id'] = Uuid::uuid4()->toString();
        return $data;
    }

    protected function beforeUpdate(array $data): array
    {
        $data['data']['tim_lomba_id'] = Uuid::uuid4()->toString();
        return $data;
    }
    protected $allowedFields = [
        'lomba_id',
        'nama_tim',
        'status',
    ];
}
