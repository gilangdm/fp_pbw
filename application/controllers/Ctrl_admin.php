<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ctrl_admin extends CI_Controller {
  function __construct()
  {
    parent::__construct();
    $this->load->model('MyModel');

    if (!$this->session->userdata('username')) {
      redirect('Admin');
    }
  }

	public function index()
	{
    $data = $this-> MyModel -> GetPesanan();
		$this ->load->view('admin_pesanan', array('data' => $data));
	}

  public function menu()
  {
    $data = $this-> MyModel -> GetMenu();
		$this ->load->view('admin_menu', array('data' => $data));
  }

   public function feedback()
  {
    $data = $this-> MyModel -> GetFeedback();
		$this ->load->view('admin_feedback', array('data' => $data));
  }

  public function change_password()
  {
    $this->load->view('admin_changepass');
  }

  public function update_pass()
  {
    $user = $this->session->userdata('username');
    $old_pass = $this->input->post('old_pass');
    $newpass = $this->input->post('password');
    $konf_newpass = $this->input->post('konf_newpass');

    $bolehGanti = $this->MyModel->authentication($user, $old_pass);

    if ($bolehGanti == true) {
        if ($newpass == $konf_newpass) {
          $user = $this->session->userdata('username');
          $newpass = $_POST['password'];
          $data_pass = array(
            'username' => $user,
            'password' => $newpass
          );
          $where = array('username' => $user);
          $res = $this->MyModel->updateData('Admin', $data_pass, $where);
          if ($res>=1) {
            // echo var_dump($data_pass);
            redirect('Ctrl_admin');

          } else {
            echo "<h2>Data gagal untuk diupdate</h2>";
          }
        }
        else{
            redirect('Ctrl_admin/change_password');
        }
    }
    else{
        redirect('Ctrl_admin/change_password');
    }


  }

  public function add_menu()
  {
    $data = $this-> MyModel -> GetMenu();
		$this ->load->view('admin_addmenu', array('data' => $data));
  }

  public function form_add(){
    $id_menu = $_POST['id_menu'];
    $nama_menu = $_POST['nama_menu'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $target_dir = "gambar/";
		$target_file = $target_dir . basename($_FILES["gambar"]["name"]);
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["gambar"]["name"]). " has been uploaded.";
    }	 else {
        echo "Sorry, there was an error uploading your file.";
    }
		$gambar = basename( $_FILES["gambar"]["name"]);

    $menu_kumpul = array(
      'id_menu' => $id_menu,
      'nama_menu' => $nama_menu,
      'gambar' => $gambar,
      'deskripsi' => $deskripsi,
      'harga' => $harga,
      'timestamp' => time()
			);
		$res = $this->MyModel->InsertData('menu',$menu_kumpul);
    if ($res>=1) {
    	redirect('Ctrl_admin/menu');
    } else {
    	echo "<h2>Data gagal untuk ditambahkan</h2>";
    }
	}

  public function edit_menu($id_menu)
  {
    $menu = $this-> MyModel -> GetMenu("where id_menu = '$id_menu'");
		$data = array(
			"id_menu" => $menu[0]['id_menu'],
			"nama_menu" => $menu[0]['nama_menu'],
      "gambar" => $menu[0]['gambar'],
			"deskripsi" => $menu[0]['deskripsi'],
			"harga" => $menu[0]['harga']
		);
		$this -> load -> view('admin_editmenu', $data);
  }

  public function form_edit()
  {
    $id_menu = $_POST['id_menu'];
    $nama_menu = $_POST['nama_menu'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];

    if ($_FILES['gambar']['size'] == 0 && $_FILES['gambar']['error'] == 0)
    {
      $gambar = null;
    }
    else {
      $target_dir = "gambar/";
  		$target_file = $target_dir . basename($_FILES["gambar"]["name"]);
  		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
  		if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
          echo "The file ". basename( $_FILES["gambar"]["name"]). " has been uploaded.";
      }	 else {
          echo "Sorry, there was an error uploading your file.";
      }
      $gambar = basename( $_FILES["gambar"]["name"]);
    }

    $data_kumpul = null;

    if($gambar == null) {
      $data_kumpul = array(
        'id_menu' => $id_menu,
        'nama_menu' => $nama_menu,
        'deskripsi' => $deskripsi,
        'harga' => $harga,
        'timestamp' => time()
  			);
    } else {
      $data_kumpul = array(
        'id_menu' => $id_menu,
        'nama_menu' => $nama_menu,
        'gambar' => $gambar,
        'deskripsi' => $deskripsi,
        'harga' => $harga,
        'timestamp' => time()
  			);
    }
		$where = array('id_menu' => $id_menu);
		$res = $this->MyModel->updateData('menu', $data_kumpul, $where);
    if ($res>=1) {
    	redirect('Ctrl_admin/menu');
    } else {
    	echo "<h2>Data gagal untuk ditambahkan</h2>";
    }
  }

  public function delete_menu($id_menu)
  {
    $where = array('id_menu' => $id_menu);
		$res = $this->MyModel->deleteData('menu', $where);
		if ($res>=1) {
			redirect('Ctrl_admin/menu');
		} else {
			echo "<h2>Data gagal untuk dihapus</h2>";
		}
  }

  public function logout()
  {
    $this->session->unset_userdata('username');
    $this->session->sess_destroy();
    redirect('Admin');
  }
}
