<?php


namespace App\Repositories\Osc;


use App\Models\Osc\Osc;
use Illuminate\Database\Eloquent\Model;

interface OscRepositoryInterface
{
    public function __construct(Osc $_dados_gerais);

    public function getAll();

    public function get($id);

    public function store(array $data);

    public function update($id, array $data);

    public function destroy($id);
}