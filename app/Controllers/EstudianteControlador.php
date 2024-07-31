<?php

namespace App\Controllers;

use App\Models\EstudianteModelo;

class EstudianteControlador extends BaseController
{
    public function inicio()
    {
        return view('estudiantes/index');
    }

    public function index()
    {
        return view('estudiantes/listar');
    }

    public function listar()
    {
        $model = new EstudianteModelo();
        $data['estudiantes'] = $model->findAll();

        return view('estudiantes/listar', $data);
    }

    public function crear()
    {
        return view('estudiantes/crear');
    }

    public function guardar()
    {
        $model = new EstudianteModelo();

        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'matricula' => $this->request->getPost('matricula'),
            'curso' => $this->request->getPost('curso'),
            'calificacion' => $this->request->getPost('calificacion'),
        ];

        $model->save($data);
        return redirect()->to('estudiantes/listar');
    }

    public function editar($id)
    {
        $model = new EstudianteModelo();
        $data['estudiante'] = $model->find($id);

        return view('estudiantes/editar', $data);
    }

    public function actualizar($id)
    {
        $model = new EstudianteModelo();

        $data = [
            'id' => $id,
            'nombre' => $this->request->getPost('nombre'),
            'matricula' => $this->request->getPost('matricula'),
            'curso' => $this->request->getPost('curso'),
            'calificacion' => $this->request->getPost('calificacion'),
        ];

        $model->save($data);
        return redirect()->to('estudiantes/listar');
    }

    public function eliminar($id)
    {
        $model = new EstudianteModelo();
        $model->delete($id);

        return redirect()->to('estudiantes/listar');
    }
}
