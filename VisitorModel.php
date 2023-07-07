<?php

namespace App\Models;

use CodeIgniter\Model;

class VisitorModel extends Model {

    protected $table = 'list_orders';

    protected $primaryKey = 'id';

    protected $returnType = 'array';

    protected $allowedFields = ['product'];

}

?>