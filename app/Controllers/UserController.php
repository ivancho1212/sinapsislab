<?php

namespace App\Controllers;

use App\Models\User;
use CodeIgniter\RESTful\ResourceController;

class UserController extends ResourceController
{
    protected $modelName = 'App\Models\User';
    protected $format    = 'json';

    // Get all users
    public function index()
    {
        return $this->respond($this->model->findAll());
    }

    // Get a single user
    public function show($id = null)
    {
        $data = $this->model->find($id);
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('User not found');
        }
    }

    // Create a new user
    public function create()
    {
        $data = $this->request->getPost();
        if ($this->model->insert($data)) {
            return $this->respondCreated($data);
        } else {
            return $this->failValidationErrors($this->model->validation->getErrors());
        }
    }

    // Update an existing user
    public function update($id = null)
    {
        $data = $this->request->getRawInput();
        if ($this->model->update($id, $data)) {
            return $this->respond($data);
        } else {
            return $this->failValidationErrors($this->model->validation->getErrors());
        }
    }

    // Delete a user
    public function delete($id = null)
    {
        if ($this->model->delete($id)) {
            return $this->respondDeleted(['User_id' => $id]);
        } else {
            return $this->failNotFound('User not found');
        }
    }
}
