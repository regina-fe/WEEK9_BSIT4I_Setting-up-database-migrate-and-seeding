<?php

namespace App\Controllers;

use App\Models\VisitorModel;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function dashboard()
    {
        return view('dashboard_view');
    }

    public function fetchUniqueVisitor() {
        //Get the value of unique visitor (database)

        $visitorModel = new VisitorModel();
        $unique_visitor_count = count($visitorModel->select('product')->findAll());

        // Prepare data for response

        $data = [
            'success' => true,
            'unique_visitor' => $unique_visitor_count

        ];

        // Return data in JSON format

        return $this->response->setJSON($data);
    }
    
    
}