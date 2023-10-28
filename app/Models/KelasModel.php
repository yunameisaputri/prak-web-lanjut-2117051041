<?php

namespace App\Models;

use CodeIgniter\Model;

class KelasModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'kelas';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama_kelas', 'kapasitas', 'created_at', 'update_at', 'deleted_at'];

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

    public function saveKelas($data){
        $this->insert($data);
    }

    public function getKelas($id = null)
    {
        if ($id != null) {
            return $this->select('kelas.*')
                ->find($id);
        }
        return $this->findAll();
    }
    public function getAnggotaKelas($id = null)
    {
        return $this->select('kelas.*, user.nama')
            ->join('user', 'user.id_kelas = kelas.id')
            ->where('kelas.id', $id)
            ->findAll();
    }
    public function updateKelas($data, $id)
    {
        return $this->update($id, $data);
    }
    public function deleteKelas($id)
    {
        try {
            return $this->delete($id);
        } catch (mysqli_sql_exception $e) {
            if (str_starts_with($e->getMessage(), "Data too long for column")) {
                // handle the error
            } else {
                throw $e;
            }
        }
    }
}


