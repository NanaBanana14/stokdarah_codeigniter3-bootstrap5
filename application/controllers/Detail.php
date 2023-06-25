<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Detail extends CI_Controller
{
   /*
 $view berfungsi untuk membaca file view seperti read.php, create.php
 dan edit.php dengan lokasi folder views/backend/v_admin/
 */
   private $view = "backend/v_detail/";
   //memanggil control Admin/index dalam keadaan refresh
   private $redirect = "Detail";
   public function __construct()
   {
      parent::__construct();
      //control Admin menghubungkan model M_admin
      $this->load->model('M_detail');
      $this->load->model('M_stok');
   }
   function index()
   {
      //memanggil model M_admin dengan function GetAll
      $read = $this->M_detail->GetAll();
      $data = array(
         //'read' variabel yang akan dipanggil pada view read.php
         'read' => $read
      );
      /*
 dengan $this->view artinya memanggil private $view="backend/v_admin/"
 dilanjutkan dengan 'read' untuk memanggil read.php
 */
      $this->load->view($this->view . 'read', $data);
   }
   public function create()
   {
      //untuk create tidak memangil model, langsung ke view dengan data baru
      $data = array(
         'stok_darah' => $this->M_stok->GetAll(),
         'create' => ''
      );
      $this->load->view($this->view . 'create', $data);
   }
   public function save()
   {
      $data = array(
         'id_detailstok' => $this->input->post('id_detailstok'),
         'id_stok' => $this->input->post('id_stok'),
         'kadaluarsa' => $this->input->post('kadaluarsa'),
         'suhu' => $this->input->post('suhu'),
         'keterangan_stok' => $this->input->post('keterangan_stok')
      );
      $this->M_detail->save($data);
      //dengan $this->redirect artinya memanggil private $redirect = "Admin"
      redirect($this->redirect, 'refresh');
   }
   public function edit()
   {
      /*
 segment 1 adalah control, segment 2 adalah function, segment 2 adalah PK,
 data yang akan ditambilkan hanya yang dipilih saja sesuai PK yang dipilih
 */
      $kd = $this->uri->segment(3);
      $data = array(
         //'edit' variabel yang akan dipanggil pada view edit.php
         'stok_darah' => $this->M_stok->GetAll(),
         'edit' => $this->M_detail->edit($kd)
      );
      $this->load->view($this->view . 'edit', $data);
   }
   public function update()
   {
      $kd = $this->uri->segment(3);
      $data = array(
         /*
    'nama_admin' =nama yang diambil dari fild pada tabel
    $this->input->post('nama_admin') =nama yang diambil dari form
    */
         'id_detailstok' => $this->input->post('id_detailstok'),
         'id_stok' => $this->input->post('id_stok'),
         'suhu' => $this->input->post('suhu'),
         'kadaluarsa' => $this->input->post('kadaluarsa'),
         'keterangan_stok' => $this->input->post('keterangan_stok')

      );
      $this->M_detail->update($kd, $data);
      redirect($this->redirect, 'refresh');
   }
   public function delete()
   {
      $kd = $this->uri->segment(3);
      $data = array(
         //data akan dihapus sesuai uri->segment(3) yang dipilih
         'id_detailstok' => $kd
      );
      $this->M_detail->delete($data);
      redirect($this->redirect, 'refresh');
   }
   public function export()
   {
      $data['read'] = $this->M_detail->GetAll(); 
      $this->load->view('backend/v_detail/export', $data);
   }
}
