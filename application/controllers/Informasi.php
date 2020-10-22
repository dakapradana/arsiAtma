<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class Informasi extends CI_Controller 
{
    public function __construct(){
        parent :: __construct();
        $this->load->model('Minformasi_hima');
        $this->load->model("Makun");
    }

    public function index(){
        // $data['css']="viewArticle/VviewArticle_css.php";
        $data['header']="template/template_header.php";
        $data['css']="informasi/vinformasi_css.php";
        $data['content']="informasi/vinformasi.php";
        $data['asidebar']="informasi/vasidebar_informasi.php";
        $data['footer']="template/template_footer.php";
        $this->load->view('template/vtemplate',$data);
    }

    function informasi_hima(){
        
        

        $data['type_akun'] = $this->session->userdata('type_akun');            
		$data['id'] = $this->session->userdata('id'); 
        $data['username'] = $this->session->userdata('username'); 
    //     $data['notif'] = "<div class='toast' role='alert' aria-live='assertive' aria-atomic='true' data-animation='true' data-delay='5000' data-autohide='false'>
    //     <div class='toast-header'>
    //         <span class='rounded mr-2 bg-primary' style='width: 15px;height: 15px'></span>

    //         <strong class='mr-auto'>Notifikasi</strong>
    //         <small>1 menit yang lalu</small>
    //         <button type='button' class='ml-2 mb-1 close' data-dismiss='toast' aria-label='Close'>
    //             <span aria-hidden='true'>&times;</span>
    //         </button>
    //     </div>
    //     <div class='toast-body'>
    //         Halo, ini pesan notifikasi toast.
    //         <br/>
    //         www.malasngoding.com
    //     </div>
    // </div>";
        $data['fav'] = $this->Minformasi_hima->getFav($this->session->userdata('id'));
        // print_r($data['fav']);die;
        $data['page'] = "Tentang Hima";
        $data['informasi'] = $this->Minformasi_hima->getAll();        
        $data['header']="template/template_header.php";
        $data['css']="informasi/vinformasi_css.php";
        $data['js'] = 'informasi/vinformasi_js.php'; 
        $data['content']="informasi/vinformasi.php";
        $data['asidebar']="informasi/vasidebar_informasi.php";
        $data['footer']="template/template_footer.php";
        $this->load->view('template/vtemplate',$data);
    }

    function informasi_detail($id){                     
        $data['cek_fav'] = $this->Minformasi_hima->cekfav($id,$this->session->userdata('id'));
        // print_r($data);die;
        $data['informasi'] = $this->Minformasi_hima->getArtikel($id);          
        $data['type_akun'] = $this->session->userdata('type_akun');            
        $data['id'] = $this->session->userdata('id'); 
        $data['username'] = $this->session->userdata('username'); 
        $data['css']="informasi/vinformasi_css.php";
        $data['js'] = 'informasi/vinformasi_js.php'; 
        $data['header']="template/template_header.php";            
        $data['content']="informasi/vDetailInformasi.php";
        $data['asidebar']="portofolio/vasidebar_portofolio.php";
        $data['footer']="template/template_footer.php";                
        $this->load->view('template/vtemplate',$data);
    }

    function formhima(){                     
            $input = $this->input->post(NULL,TRUE);
            extract($input);           
            
            if ($this->input->post('submit')) {
                // print_r($input);die;
            
            $foto111=$_FILES['foto1'];
            $foto222=$_FILES['foto2'];
            $foto333=$_FILES['foto3'];
            $foto444=$_FILES['foto4'];
            $foto555=$_FILES['foto5'];
            
            $foto1_name="foto1";
            $foto2_name="foto2";
            $foto3_name="foto3";
            $foto4_name="foto4";
            $foto5_name="foto5";

            $akun= $this->Makun->get_by_id($creator);
            // print_r($akun);die;
            if(null == $foto111 && $foto111 && $foto111 ){
                $this->session->set_userdata('typeNotif', "gagalUpload");
                // redirect('article');
            } else {
                            $foto11=$this->_upload($foto111,$foto1_name,$id_info);
                            $foto22=$this->_upload($foto222,$foto2_name,$id_info);
                            $foto33=$this->_upload($foto333,$foto3_name,$id_info);
                            $foto44=$this->_upload($foto444,$foto4_name,$id_info);
                            $foto55=$this->_upload($foto555,$foto5_name,$id_info);

                            $data=[
                                'judul_hima'=>$this->input->post('judul'),                               
                                'foto4_hima'=>$foto44,
                                'foto5_hima'=>$foto55,
                                'deskripsi_hima'=>$this->input->post('essay'),
                                'foto1_hima'=>$foto11,
                                'foto2_hima'=>$foto22,
                                'foto3_hima'=>$foto33,
                                'nama_penulis' => $akun->nama_lengkap,
                                'status' => 1
                            ];
                            // print_r($data);die;
                        $this->Minformasi_hima->insert($data,$id_info);
                        redirect('Informasi/informasi_hima');
                        // $this->getArtikel($jenis_artikel);
                    }
                    
                }else{
                    $obj = new stdClass();            
                    $obj->judul_hima = '';
                    $obj->id_informasi_hima  = '';
                    $obj->deskripsi_hima = '';
                    $obj->foto4_hima = '';
                    $obj->foto5_hima = '';
                    $obj->foto1_hima = '';
                    $obj->foto2_hima = '';
                    $obj->foto3_hima = '';
                    // $obj->jenis_artikel = "0";
                    $data['data'] = $obj;
                    $data['informasi'] = "hima";                   
                    $data['js'] = 'informasi/vinformasi_js.php'; 
                    $data['css'] = 'informasi/vinformasi_css';      
                    $data['type_akun'] = $this->session->userdata('type_akun');            
                    $data['id'] = $this->session->userdata('id'); 
                    $data['username'] = $this->session->userdata('username'); 
                    $data['header']="template/template_header.php";            
                    $data['content'] = 'informasi/vform.php';    
                    $data['asidebar']="portofolio/vasidebar_portofolio.php";
                    $data['footer']="template/template_footer.php";          
                    $this->load->view('template/vtemplate', $data);
                }
        

    }

    function _upload($foto,$ft,$id){
        $data['page']="articlePage";
                $data = $this->Minformasi_hima->getArtikel($id);
                
                $config['upload_path']='./assets/img/informasiHima/';
                $config['allowed_types']='jpg|png|jpeg';
                $this->load->library('upload',$config);
                if($ft=="foto1"){
                    if(!$this->upload->do_upload('foto1')){
                        if($data->foto1_hima){
                            return $data->foto1_hima;
                        }else {
                            return "";
                            $this->session->set_userdata('typeNotif', "gagalUpload1");
                        }
                    }
                    else{
                        return $this->upload->data('file_name');
                    }   
                }elseif($ft=="foto2"){
                    if(!$this->upload->do_upload('foto2')){
                        if($data->foto2_hima){
                            return $data->foto2_hima;
                        }else {
                            return "";
                            $this->session->set_userdata('typeNotif', "gagalUpload2");
                        }
                    } else{
                        return $this->upload->data('file_name');
                    }  
                }elseif($ft=="foto3"){
                    if(!$this->upload->do_upload('foto3')){
                        if($data->foto3_hima){
                            return $data->foto3_hima;
                        }else {
                            return "";
                            $this->session->set_userdata('typeNotif', "gagalUpload3");
                        }
                    }else{
                        return $this->upload->data('file_name');
                    }  

                }elseif($ft=="foto4"){
                    if(!$this->upload->do_upload('foto4')){
                        if($data->foto4_hima){
                            return $data->foto4_hima;
                        }else {
                            return "";
                            $this->session->set_userdata('typeNotif', "gagalUpload3");
                        }
                    }else{
                        return $this->upload->data('file_name');
                    }  

                }elseif($ft=="foto5"){
                    if(!$this->upload->do_upload('foto5')){
                        if($data->foto5_hima){
                            return $data->foto5_hima;
                        }else {
                            return "";
                            $this->session->set_userdata('typeNotif', "gagalUpload3");
                        }
                    }else{
                        return $this->upload->data('file_name');
                    }  

                }
    }

    function updatehima($id){

        $data['data'] = $this->Minformasi_hima->getArtikel($id);
        // print_r($data['data']);die;
        $data['informasi'] = "hima";                   
        $data['js'] = 'informasi/vinformasi_js.php'; 
        $data['css'] = 'informasi/vinformasi_css';      
        $data['type_akun'] = $this->session->userdata('type_akun');            
        $data['id'] = $this->session->userdata('id'); 
        $data['username'] = $this->session->userdata('username'); 
        $data['header']="template/template_header.php";            
        $data['content'] = 'informasi/vform.php';    
        $data['asidebar']="portofolio/vasidebar_portofolio.php";
        $data['footer']="template/template_footer.php";          
        $this->load->view('template/vtemplate', $data);
    }


    function delete($id){
        $dataInf = $this->Minformasi_hima->getArtikel($id);
        $data=[
            'judul_hima'=>$dataInf->judul_hima,                               
            'foto4_hima'=>$dataInf->foto4_hima,
            'foto5_hima'=>$dataInf->foto5_hima,
            'deskripsi_hima'=>$dataInf->deskripsi_hima,
            'foto1_hima'=>$dataInf->foto1_hima,
            'foto2_hima'=>$dataInf->foto2_hima,
            'foto3_hima'=>$dataInf->foto3_hima,
            'nama_penulis' => $dataInf->nama_penulis,
            'status' => 0
        ];
        $this->Minformasi_hima->insert($data,$id);
        redirect("Informasi/informasi_hima");

    }

    function saveinformasi($id_info){
        
        $data=[
            'fk_akun'=>$this->session->userdata('id'),                               
            'fk_informasi_hima '=>$id_info
        ];
        $this->Minformasi_hima->saveinf($data);
        redirect("Informasi/informasi_detail/".$id_info);
    }

    function hapusfav($id_info){
        $this->Minformasi_hima->hapusfav($id_info,$this->session->userdata('id'));
        redirect("Informasi/informasi_detail/".$id_info);
    }

}

?>