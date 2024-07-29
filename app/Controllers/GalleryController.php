<?php

namespace App\Controllers;

use App\Models\Gallery;
use Exception;

class GalleryController extends Controller
{
    public function index()
    {
        $model = new Gallery;


        $gallery = $model->paginate(6);
        

        return $this->view('gallery.index', compact('gallery'));
    }

    public function create()
    {
        try {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $file = $_FILES['image'];

                if ($file['error'] !== UPLOAD_ERR_OK) {
                    throw new Exception('Error al subir la imagen.');
                }

                $tmpName = $file['tmp_name'];
                $fileName = $file['name'];
                $typeFile = $file['type'];
                $size = $file['size'];
                $targetPath = __DIR__ . "/../../public/img/uploads/$fileName";

                if (!move_uploaded_file($tmpName, $targetPath)) {
                    throw new Exception('Error al subir la imagen.');
                }

                $data = [
                    'name' => $fileName,
                    'description' => '',
                    'size' => $size,
                    'type' => $typeFile,
                    'file_dir' => "public/img/$fileName",
                    'created_at' => date('Y-m-d H:i:s')
                ];

                $model = new Gallery;
                $model->create($data);

                return $this->redirect('/gallery');
            }
        } catch (Exception $e) {

            echo $e->getMessage();

        }
    }

    public function store()
    {
        //Retornar parametros del formulario
        $data = $_POST;
        $model = new Gallery;
        $model->create($data);

        return $this->redirect('/gallery');
    }

    public function show($id)
    {

        $model = new Gallery;
        $contact = $model->find($id);

        return $this->view('gallery.show', compact('gallery'));
    }

    public function edit($id)
    {
        $model = new Gallery;
        $contact = $model->find($id);

        return $this->view('gallery.edit', compact('gallery'));
    }

    public function update($id)
    {

        $data = $_POST;

        $model = new Gallery;

        $model->update($id, $data);

        return $this->redirect("/gallery/{$id}");
    }

    public function destroy($id)
    {
        $model = new Gallery;

        $model->delete($id);

        return $this->redirect("/gallery");
    }
}
