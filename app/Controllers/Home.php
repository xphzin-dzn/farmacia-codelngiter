<?php

namespace App\Controllers;
use App\Models\FarmaciaModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('form');
    }

    public function receba()
    {
        $data = [
            'nome' => $this->request->getVar('nome'),
            'laboratorio' => $this->request->getVar('laboratorio'),
            'quantidade' => $this->request->getVar('quantidade'),
            'preco' => $this->request->getVar('preco')
        ];

        $my_model = new FarmaciaModel();
        $my_model->insert($data);

        return redirect()->to('/showForm');
    }

    public function showForm(): string
    {
        $my_model = new FarmaciaModel();
        $dados['resultado'] = $my_model->findAll();
        return view('showForm', $dados);
    }

    public function edit($id)
    {
        $model = new FarmaciaModel();
        $data['remedio'] = $model->find($id);

        if (!$data['remedio']) {
            return redirect()->to('/remedios')->with('error', 'Remédio não encontrado.');
        }

        return view('/edit', $data);
    }

    public function update($id)
    {
        $model = new FarmaciaModel();

        $data = [
            'nome' => $this->request->getPost('nome'),
            'laboratorio' => $this->request->getPost('laboratorio'),
            'preco' => $this->request->getPost('preco'),
            'quantidade' => $this->request->getPost('quantidade'),
        ];

        $model->update($id, $data);

        return redirect()->to('/showForm')->with('success', 'Remédio atualizado com sucesso.');
    }
    public function delete($id)
    {
        $my_model = new FarmaciaModel();
        $my_model->delete($id);

        return redirect()->to('/showForm');
    }

    public function maisCaro(): string
    {
        $my_model = new FarmaciaModel();
        $dados['remedio'] = $my_model->getRemedioMaisCaro();

        return view('mais_caro', $dados);
    }

    public function maiorQuantidade(): string
    {
        $my_model = new FarmaciaModel();
        $dados['remedio'] = $my_model->getRemedioMaiorQuantidade();

        return view('maior_quantidade', $dados);
    }

    public function search(): string
    {
        $my_model = new FarmaciaModel();
        $nome = $this->request->getVar('nome');
        $dados['resultado'] = $my_model->searchRemediosPorNome($nome);

        return view('showForm', $dados);
    }
}
