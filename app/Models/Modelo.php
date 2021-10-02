<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'users';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['TB_CLIENTE_NOME', 'TB_CLIENTE_TEL', '	TB_CLIENTE_SEXO', 'TB_CLIENTE_EMAIL', '	TB_CLIENTE_SENHA', 'TB_CLIENTE_ENDERECO', '	TB_CLIENTE_COMPLEMENTO', '	TB_CLIENTE_BAIRRO', '	TB_CLIENTE_CIDADE', 'TB_CLIENTE_UF', 'TB_CLIENTE_DT_NASC', 'now()'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}