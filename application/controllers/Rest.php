<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Rest extends RestController
{

    public function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('rest_model', 'rst');
    }

    public function index_get()
    {
        $id = $this->get('id');
        if ($id === null) {
            $p = $this->get('page');
            $p = (empty($p) ? 1 : $p);
            $total_data = $this->rst->count();
            $total_page = ceil($total_data / 5);
            $start = ($p - 1) * 5;
            $list = $this->rst->get(null, 5, $start);
            if ($list) {
                $data = [
                    'status' => true,
                    'page' => $p,
                    'total_data' => $total_data,
                    'total_page' => $total_page,
                    'data' => $list,
                ];
            } else {
                $data = [
                    'status' => false,
                    'msg' => 'Data tidak ditemukan'
                ];
            };
            $this->response($data, RestController::HTTP_OK);
        } else {
            $data = $this->rst->get($id);
            if ($data) {
                $this->response(['status' => true, 'data' => $data], RestController::HTTP_OK);
            } else {
                $this->response(['status' => false, 'msg' => $id . ' tidak ditemukan'], RestController::HTTP_NOT_FOUND);
            }
        }
    }

    public function index_post()
    {
        $data = [
            'id' => $this->post('id'),
            'jawaban_satu' => $this->post('jawaban_satu'),
            'jawaban_dua' => $this->post('jawaban_dua'),
            'jawaban_tiga' => $this->post('jawaban_tiga'),
            'jawaban_empat' => $this->post('jawaban_empat'),
            'jawaban_lima' => $this->post('jawaban_lima')
        ];
        $simpan = $this->rst->add($data);
        if ($simpan['status']) {
            $this->response(['status' => true, 'msg' => $simpan['data'] . ' Data telah disimpan'], RestController::HTTP_CREATED);
        } else {
            $this->response(['status' => false, 'msg' => $simpan['msg']], RestController::HTTP_INTERNAL_ERROR);
        }
    }

    public function index_put()
    {
        $data = [
            'id' => $this->put('id'),
            'jawaban_satu' => $this->put('jawaban_satu'),
            'jawaban_dua' => $this->put('jawaban_dua'),
            'jawaban_tiga' => $this->put('jawaban_tiga'),
            'jawaban_empat' => $this->put('jawaban_empat'),
            'jawaban_lima' => $this->put('jawaban_lima')
        ];
        $id = $this->put('id');
        if ($id === NULL) {
            $this->response(['status' => false, 'msg' => 'Masukan ID yang akan dirubah'], RestController::HTTP_BAD_REQUEST);
        }
        $simpan = $this->rst->update($id, $data);

        if ($simpan['status']) {
            $status = (int)$simpan['data'];
            if ($status > 0) {
                $this->response(['status' => true, 'msg' => $simpan['data'] . ' Data telah di rubah'], RestController::HTTP_OK);
            } else {
                $this->response(['status' => false, 'msg' => 'Tidak ada data yang dirubah'], RestController::HTTP_BAD_REQUEST);
            }
        } else {
            $this->response(['status' => false, 'msg' => $simpan['msg']], RestController::HTTP_INTERNAL_ERROR);
        }
    }

    public function index_delete()
    {
        $id = $this->delete('id');
        if ($id === NULL) {
            $this->response(['status' => false, 'msg' => 'Masukan ID yang akan dihapus'], RestController::HTTP_BAD_REQUEST);
        }
        $delete = $this->rst->delete($id);

        if ($delete['status']) {
            $status = (int)$delete['data'];
            if ($status > 0) {
                $this->response(['status' => true, 'msg' => 'ID ' . $id . '. Data telah di hapus'], RestController::HTTP_OK);
            } else {
                $this->response(['status' => false, 'msg' => 'Tidak ada data yang dihapus'], RestController::HTTP_BAD_REQUEST);
            }
        } else {
            $this->response(['status' => false, 'msg' => $delete['msg']], RestController::HTTP_INTERNAL_ERROR);
        }
    }
}
