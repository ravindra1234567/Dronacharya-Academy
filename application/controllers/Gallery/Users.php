<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends CI_Controller
{
    function  __construct() {
        parent::__construct();
        $this->load->model('user');
        $this->controller = 'Users'; 
    }
    
    function index(){
        if($this->input->post('userSubmit')){

            //Check whether user upload picture
            if(!empty($_FILES['picture']['name'])){
                $config['upload_path'] = 'uploads/images/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['picture']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('picture')){
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
                }else{
                    $picture = '';
                }
            }else{
                $picture = '';
            }
            
            //Prepare array of user data
            $userData = array(
                'title' => $this->input->post('title'),
                'picture' => $picture
            );
            
            //Pass user data to model
            $insertUserData = $this->user->insert($userData);
            
            //Storing insertion status message.
            if($insertUserData){
                $this->session->set_flashdata('success_msg', 'Image have been Uploaded successfully. <button type="button" class="close" data-dismiss="alert">&times;</button>');
                // $this->load->view("gallery/gallery_manage");
                redirect('Gallery/Users/galleryManage');

            }else{
                $this->session->set_flashdata('error_msg', 'Some problems occured, please try again.<button type="button" class="close" data-dismiss="alert">&times;</button>');
                redirect('Gallery/Users/galleryManage');
            }
        }
        //Form for adding user data
        $this->load->view('gallery/add');
    }
    public function galleryManage(){
        $data['imageData'] = $this->user->select();
        $this->load->view("gallery/gallery_manage",$data);
    }

    public function view($id){ 
        $data = array(); 

        // Check whether id is not empty 
        if(!empty($id)){ 
            $con = array('id' => $id); 
            $data['image'] = $this->user->getRows($con); 
            $data['title'] = $data['image']['title']; 

            // Load the details page view 
            $this->load->view('include/student/header', $data); 
            $this->load->view('gallery/view', $data); 
            // $this->load->view('templates/footer'); 
        }else{ 
            redirect($this->controller); 
        } 
    }

    public function edit($id){ 
        $data = $imgData = array(); 

        // Get image data 
        $con = array('id' => $id); 
        $imgData = $this->user->getRows($con); 
        $prevImage = $imgData['picture']; 

        // If update request is submitted 
        if($this->input->post('imgSubmit')){ 
            // Form field validation rules 
            $this->form_validation->set_rules('title', 'gallery title', 'required'); 

            // Prepare gallery data 
            $imgData = array( 
                'title' => $this->input->post('title') 
            ); 

            // Validate submitted form data 
            if($this->form_validation->run() == true){ 
                // Upload image file to the server 
                if(!empty($_FILES['image']['name'])){ 
                    $imageName = $_FILES['image']['name']; 

                    // File upload configuration 
                    $config['upload_path'] = $this->uploadPath; 
                    $config['allowed_types'] = 'jpg|jpeg|png|gif'; 

                    // Load and initialize upload library 
                    $this->load->library('upload', $config); 
                    $this->upload->initialize($config); 

                    // Upload file to server 
                    if($this->upload->do_upload('image')){ 
                        // Uploaded file data 
                        $fileData = $this->upload->data(); 
                        $imgData['file_name'] = $fileData['file_name']; 

                        // Remove old file from the server  
                        if(!empty($prevImage)){ 
                            @unlink($this->uploadPath.$prevImage);  
                        } 
                    }else{ 
                        $error = $this->upload->display_errors();  
                    } 
                } 

                if(empty($error)){ 
                    // Update image data 
                    $update = $this->user->update($imgData, $id); 

                    if($update){ 
                        $this->session->set_userdata('success_msg', 'Image has been updated successfully.'); 
                        redirect($this->controller); 
                    }else{ 
                        $error = 'Some problems occurred, please try again.'; 
                    } 
                } 

                $data['error_msg'] = $error; 
            } 
        } 


        $data['image'] = $imgData; 
        $data['title'] = 'Update Image'; 
        $data['action'] = 'Edit'; 

        // Load the edit page view 
        // $this->load->view('include/student/header', $data); 
        $this->load->view('gallery/add', $data); 
        // $this->load->view('templates/footer'); 
    } 



     public function delete($id){ 
        // Check whether id is not empty 
        if($id){ 
            $con = array('id' => $id); 
            $imgData = $this->user->getRows($con); 
             
            // Delete gallery data 
            $delete = $this->user->delete($id); 
             
            if($delete){ 
                // Remove file from the server  
                if(!empty($imgData['picture'])){ 
                    @unlink($this->uploadPath.$imgData['picture']);  
                }  
                 
                $this->session->set_flashdata('success_msg', 'Image has been removed successfully.  <button type="button" class="close" data-dismiss="alert">&times;</button>'); 
            }else{ 
                $this->session->set_flashdata('error_msg', 'Some problems occurred, please try again.  <button type="button" class="close" data-dismiss="alert">&times;</button>'); 
            } 
        } 
 
      redirect('Gallery/Users/galleryManage');  
    }
    public function block($id){ 
        // Check whether id is not empty 
        if($id){ 
            // Update image status 
            $data = array('status' => 0); 
            $update = $this->user->update($data, $id); 

            if($update){ 
               $this->session->set_flashdata('success_msg', 'Image has been blocked successfully.  <button type="button" class="close" data-dismiss="alert">&times;</button>'); 
           }else{ 
               $this->session->set_flashdata('error_msg', 'Some problems occurred, please try again.  <button type="button" class="close" data-dismiss="alert">&times;</button>'); 
           } 
       } 

        // redirect($this->controller);
       redirect('Gallery/Users/galleryManage'); 
   } 

   public function unblock($id){ 
        // Check whether is not empty 
    if($id){ 
            // Update image status 
        $data = array('status' => 1); 
        $update = $this->user->update($data, $id); 

        if($update){ 
           $this->session->set_flashdata('success_msg', 'Image has been activated successfully.  <button type="button" class="close" data-dismiss="alert">&times;</button>'); 
       }else{ 
           $this->session->set_flashdata('error_msg', 'Some problems occurred, please try again.  <button type="button" class="close" data-dismiss="alert">&times;</button>'); 
       } 
   } 

        // redirect($this->controller); 
   redirect('Gallery/Users/galleryManage');
} 
}