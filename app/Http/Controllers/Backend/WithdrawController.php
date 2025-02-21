<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\WithdrawMethodDataTable;
use App\DataTables\WithdrawRequestDataTable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WithdrawController extends Controller
{

    function index(WithdrawRequestDataTable $dataTable) {
        return $dataTable->render('admin.withdraw.index');
    }

}
