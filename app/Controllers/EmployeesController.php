<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Hermawan\DataTables\DataTable;

class EmployeesController extends BaseController
{
    private $db, $table;

    public function __construct() {
        $this->db = db_connect();
    }
    public function getEmployeesList(){
        $builder = $this->db->table('employees')->select('emp_id, emp_fname, emp_lname, emp_position, emp_office, emp_start_date, emp_salary');
        return DataTable::of($builder)->toJson();

    }
}
