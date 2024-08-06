<?php

namespace App\Controllers;

use App\Models\Company;
use CodeIgniter\RESTful\ResourceController;

class CompanyController extends ResourceController
{
    protected $modelName = 'App\Models\Company';
    protected $format    = 'json';

    // Get all companies
    public function index()
    {
        return $this->respond($this->model->findAll());
    }

    // Get a single company
    public function show($id = null)
    {
        $data = $this->model->find($id);
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Company not found');
        }
    }

    // Create a new company
    public function create()
    {
        $data = $this->request->getPost();
        if ($this->model->insert($data)) {
            return $this->respondCreated($data);
        } else {
            return $this->failValidationErrors($this->model->validation->getErrors());
        }
    }

    // Update an existing company
    public function update($id = null)
    {
        $data = $this->request->getRawInput();
        if ($this->model->update($id, $data)) {
            return $this->respond($data);
        } else {
            return $this->failValidationErrors($this->model->validation->getErrors());
        }
    }

    // Delete a company
    public function delete($id = null)
    {
        if ($this->model->delete($id)) {
            return $this->respondDeleted(['Company_id' => $id]);
        } else {
            return $this->failNotFound('Company not found');
        }
    }
}
