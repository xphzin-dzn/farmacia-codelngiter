<?php

namespace App\Models;

use CodeIgniter\Model;

class FarmaciaModel extends Model
{
    protected $table            = 'remedios';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nome', 'laboratorio', 'preco', 'quantidade'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    // Custom Methods
    public function getRemedioMaisCaro() {
        return $this->orderBy('preco', 'DESC')->first();
    }

    public function getRemedioMaiorQuantidade() {
        return $this->orderBy('quantidade', 'DESC')->first();
    }

    public function searchRemediosPorNome($nome) {
        return $this->like('nome', $nome)->findAll();
    }
}
?>
