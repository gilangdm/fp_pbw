<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyController extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('My_Model');
		$this->load->helper(array('form', 'url'));
        $this->load->library('email');
	}

	function index() {
		$data = $this-> My_Model -> GetYummyEatery();
		$this ->load->view('yummy', array('data' => $data));
	}

    function yummyabout(){
        $this->load->view('yummyabout');
    }

    function yummytim() {
        $this->load->view('yummyteam');
    }

    function yummytestim() {
        $this->load->view('yummytestim');
    }

    function yummypesan($id_menu) {
				$menu = $this-> My_Model -> GetYummyEatery("where id_menu = '$id_menu'");
				$data = array(
					"id_menu" => $menu[0]['id_menu'],
					"nama_menu" => $menu[0]['nama_menu'],
					"gambar" => $menu[0]['gambar'],
					"deskripsi" => $menu[0]['deskripsi'],
					"harga" => $menu[0]['harga']
				);
				$this -> load -> view('yummypesan', $data);
    }

    function yummysukses($id_menu) {
			$menu = $this-> My_Model -> GetYummyEatery("where id_menu = '$id_menu'");


			$nama_pemesan = $_POST['nama_pemesan'];
			$no_telp = $_POST['no_telp'];
			$alamat = $_POST['alamat'];
			$jumlah = $_POST['jumlah'];
			$total_harga = $jumlah * $menu[0]['harga'];

			$data_pemesan = array(
	      'id_pesanan' => time(),
	      'nama_pemesan' => $nama_pemesan,
	      'no_telp' => $no_telp,
	      'alamat' => $alamat,
				'menu' => $menu[0]['nama_menu'],
	      'jumlah' => $jumlah,
				'total_harga' => $total_harga
				);
			$res = $this->My_Model->InsertData('pesanan',$data_pemesan);
	    if ($res>=1) {
	    	$this->load->view('yummysukses');
	    } else {
	    	echo "<h2>Data gagal untuk ditambahkan</h2>";
	    }
    }

	function create() {
		$data = array(
			'id' => $this->input->post('id'),
			'gambar_makanan' => $this->input->post('gambar_makanan'),
			'nama_makanan' => $this->input->post('nama_makanan'),
			'desc_makanan' => $this->input->post('desc_makanan'),
			'harga_makanan' => $this->input->post('harga_makanan')
			);

		$this->My_Model->addData($data);
	}

	function readData() {
		$data = $this->My_Model->getData();
		$this->load->view('view', array('data' => $data));
	}

    function edit_data($kode_barang){
        $makan = $this->My_Model->get_makan("where id = $id");
        $data = array(
            "id" => $barang[0]['id'],
            "nama_makanan" => $barang[0]['nama_makanan'],
            "desc_makanan" => $barang[0]['desc_makanan'],
            "harga" => $barang[0]['harga']
             );
        $this->load->view('form_edit',$data);

    }

	function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('pass');

		$isLogin = $this->My_Model->login_authen($username, $password);
		$i = $this->My_Model->authen_user($username);

		if ($isLogin == true) {
			$this->home();
		}
		else{
            $data['err_message'] = "GAGAL LOGIN";
            $this->load->view('login', $data);
		}
	}

//	function home(){
//		$this->load->view('home');
//	}

	function delete_barang(){
		$delete = $this->input->post('yummyeatery');
		$this->My_Model->delete_item($delete);
		$this->readData();
	}

	public function do_upload() {
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;

        //$this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ( ! $this->upload->do_upload('userfile')) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('form_upload', $error);
        } else {
                $db = mysqli_connect("localhost", "root", "", "yummy_db");

                $imagename = $_FILES["userfile"]["name"];
                //$imagetmp = $_FILES['userfile']['name'];
                $sql = "INSERT INTO yummyeatery (gambar_makanan) VALUES('{$imagename}')";
                mysqli_query($db, $sql);

                $data = array('upload_data' => $this->upload->data());
                $this->load->view('upload_success', $data);
        }
    }

    public function insert_feedback(){
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$pesan = $_POST['pesan'];

    	//Config emaill
    	$config['protocol'] = "smtp";
		$config['smtp_host'] = "ssl://smtp.gmail.com";
		$config['smtp_port'] = "465";
		//$config['smtp_timeout'] = ‘7’;
		$config['smtp_user'] = "mfauzanp@gmail.com";
		$config['smtp_pass'] = "resep1415dokter";
		$config['charset'] = "utf-8";
		$config['mailtype'] = "html";
		$config['newline'] = "\r\n";
		$config['validation'] = TRUE;
		$this->email->initialize($config);

		//Kirim Email
		$this->email->to($email);
		$this->email->from('mfauzanp@gmail.com','ADMIN');
		$this->email->subject('Thanks from Yummy Eatery');
		$this->email->message('Terimakasih atas feedback yang anda berikan. Kepuasan Anda membuat kami puas :)');
		$this->email->send();

        $data_insert = array(
			'timestamp' => time(),
            'nama' => $nama,
			"email" => $email,
			"pesan" => $pesan
			);
        var_dump($email);
		$res = $this->My_Model->InsertData('feedback',$data_insert);
		if($res>=1){
			redirect('MyController/index');
        }
		else{
			echo "<h2> GAGAL</h2>";
		}
    }
}
?>
