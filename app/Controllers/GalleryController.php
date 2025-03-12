<?php

namespace App\Controllers;

use App\Models\Gallery;
use Exception;

class GalleryController extends Controller
{

    public $messages = [];

    public function index($messages = [])
    {
        $model = new Gallery;

        $gallery["data"] = $model->query("SELECT * FROM gallery")->get();

        return $this->view('gallery.index', compact('gallery', 'messages'));
    }

    public function create()
    {
        try {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $file = $_FILES['image'];

                if ($file['error'] !== UPLOAD_ERR_OK) {
                    $this->messages[] = 'Error uploading image.';
                    return $this->index($this->messages);
                }

                $tmpName = $file['tmp_name'];
                $fileName = $file['name'];
                $typeFile = $file['type'];
                $size = $file['size'];
                $targetPath = __DIR__ . "/../../public/uploads/img/$fileName";

                $imageSize = getimagesize($tmpName);
                $width = $imageSize[0];
                $height = $imageSize[1];

                if ($width < 640 || $height < 360) {
                    $this->messages[] = 'The image must be at least 854x480 pixels in size.';
                    return $this->index($this->messages);
                }

                if (!move_uploaded_file($tmpName, $targetPath)) {
                    $this->messages[] = 'Error uploading image.';
                    return $this->index($this->messages);
                }

                $this->messages[] = [];

                $data = [
                    'name' => $fileName,
                    'description' => '',
                    'size' => $size,
                    'type' => $typeFile,
                    'file_dir' => "public/uploads/img/$fileName",
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

    public function show($id, $messages = [])
    {
        $model = new Gallery;
        $gallery = $model->find($id);

        return $this->view('gallery.show', compact('gallery', 'messages'));
    }

    public function update($id)
    {
        $model = new Gallery;

        $model->update($id, $_POST);

        $this->messages[] = 'Image description updated successfully';

        return $this->show($id, $this->messages);

    }

    public function destroy($id)
    {
        $model = new Gallery;
        $gallery = $model->find($id);

        $filepath = __DIR__ . "/../../public/uploads/img/".$gallery['name'];

        if (file_exists($filepath)) {
            unlink($filepath);
        }

        $model->delete($id);

        return $this->redirect("/gallery");
    }
}
