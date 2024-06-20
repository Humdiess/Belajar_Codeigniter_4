<?php

namespace App\Controllers;

use App\Models\ItemModel;
use CodeIgniter\Controller;

class ItemController extends Controller
{
    public function index()
    {
        $model = new ItemModel();
        $data['items'] = $model->findAll();
        return view('items/index', $data);
    }

    public function create()
    {
        return view('items/create');
    }

    public function store()
    {
        $model = new ItemModel();

        $data = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'price' => $this->request->getPost('price'),
        ];

        $model->save($data);
        return redirect()->to('/items');
    }

    public function edit($id)
    {
        $model = new ItemModel();
        $data['item'] = $model->find($id);
        return view('items/edit', $data);
    }

    public function update($id)
    {
        $model = new ItemModel();

        $data = [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
            'price' => $this->request->getPost('price'),
        ];

        $model->update($id, $data);
        return redirect()->to('/items');
    }

    public function delete($id)
    {
        $model = new ItemModel();
        $model->delete($id);
        return redirect()->to('/items');
    }
}
