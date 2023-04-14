<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    const SORT = [
        'default' => 'No sort',
        'name-asc' => 'By name A-Z',
        'name-desc' => 'By name Z-A',
        'surname-asc' => 'By surname A-Z',
        'surname-desc' => 'By surname Z-A',
    ];

    const FILTER = [
        'default' => 'Show all',
        'tt' => 'Tik Tok users',
        'fb' => 'FB users',
    ];

    const PER = [
        '8' => '8 pp',
        '11' => '11 pp',
        '19' => '19 pp',
    ];

    public function order()
    {
        return $this->hasMany(Order::class);
    }
}

