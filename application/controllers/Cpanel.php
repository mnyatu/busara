<?php

class Cpanel extends CI_Controller{
    
    
    public function index(){
        
        $this->load->view('includes/header_view');
        $this->load->view('backend/add_news');
        $this->load->view('includes/footer_view');
    }
    
    public function news(){
         
        $this->load->model("news");
        
        $data_message['message'] = "";
        
        if($_POST){
            
            $image_handle = "news_image";
            
            $config['upload_path']          = 'api/images/';
            $config['allowed_types']        = 'jpg|png';
            $config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;

            $this->load->library('upload', $config);
            

            if ( ! $this->upload->do_upload($image_handle)){

                    $error = array('error' => $this->upload->display_errors());
            } else {

                $upload_data = $this->upload->data();
                
                $image_name = $upload_data['file_name']; 
                
                $config1['image_library'] = 'gd2';
                $config1['source_image'] = 'api/images/'.$image_name;
                $config1['new_image'] = 'api/images/thumbnails/'.$image_name;
                $config1['create_thumb'] = TRUE;
                $config1['maintain_ratio'] = TRUE;
                $config1['width'] = 96;
                $config1['height'] = 96;

                $this->load->library('image_lib', $config1);
                $this->image_lib->resize();
                
                $thumbnail_name = $upload_data['raw_name']."_thumb".$upload_data['file_ext'];
                    
                $post_data = array(
                    'title' => $_POST['title'],
                    'news_thumbnail' => $thumbnail_name,
                    'news_image' => $image_name,
                    'body' => $_POST['news_body']
                );
                
                $this->news->add_entry($post_data);
            }
            
        }
        
        $this->load->view('includes/header_view');
        $this->load->view('backend/add_news');
        $this->load->view('includes/footer_view');
    }
    
    public function product(){
         
        $this->load->model("product");
        
        $data_message['message'] = "";
        
        if($_POST){
            
            $image_handle = "product_image";
            
            $config['upload_path']          = 'api/images/';
            $config['allowed_types']        = 'jpg|png';
            $config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;

            $this->load->library('upload', $config);
            

            if ( ! $this->upload->do_upload($image_handle)){

                    $error = array('error' => $this->upload->display_errors());
            } else {

                $upload_data = $this->upload->data();
                
                $image_name = $upload_data['file_name']; 
                
                $config1['image_library'] = 'gd2';
                $config1['source_image'] = 'api/images/'.$image_name;
                $config1['new_image'] = 'api/images/thumbnails/'.$image_name;
                $config1['create_thumb'] = TRUE;
                $config1['maintain_ratio'] = TRUE;
                $config1['width'] = 96;
                $config1['height'] = 96;

                $this->load->library('image_lib', $config1);
                $this->image_lib->resize();
                
                $thumbnail_name = $upload_data['raw_name']."_thumb".$upload_data['file_ext'];
                    
                $post_data = array(
                    'name' => $_POST['name'],
                    'category' => $_POST['category'],
                    'product_serial' => uniqid(time()),
                    'color' => $_POST['color'],
                    'price' => $_POST['price'],
                    'thumbnail_name' => $thumbnail_name,
                    'image_name' => $image_name,
                    'description' => $_POST['description']
                );
                
                $this->product->add_entry($post_data);
            }
            
        }
        
        $this->load->view('includes/header_view');
        $this->load->view('backend/add_products');
        $this->load->view('includes/footer_view');
    }
    
    public function player(){
        
        $this->load->model("player");
        
        $data_message['message'] = "";
        
        if($_POST){
            
            $image_handle = "player_image";
            
            $config['upload_path']          = 'api/images/';
            $config['allowed_types']        = 'jpg|png';
            $config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;

            $this->load->library('upload', $config);
            

            if ( ! $this->upload->do_upload($image_handle)){

                    $error = array('error' => $this->upload->display_errors());
            } else {

                $upload_data = $this->upload->data();
                
                $image_name = $upload_data['file_name']; 
                
                $config1['image_library'] = 'gd2';
                $config1['source_image'] = 'api/images/'.$image_name;
                $config1['new_image'] = 'api/images/thumbnails/'.$image_name;
                $config1['create_thumb'] = TRUE;
                $config1['maintain_ratio'] = TRUE;
                $config1['width'] = 96;
                $config1['height'] = 96;

                $this->load->library('image_lib', $config1);
                $this->image_lib->resize();
                
                $thumbnail_name = $upload_data['raw_name']."_thumb".$upload_data['file_ext'];
                    
                $post_data = array(
                    'name' => $_POST['name'],
                    'player_postion' => $_POST['player_position'],
                    'total_goals' => $_POST['total_goals'],
                    'appearances' => $_POST['appearances'],
                    'games_played' => $_POST['games_played'],
                    'player_thumbnail' => $thumbnail_name,
                    'player_image' => $image_name,
                    'description' => $_POST['desription']
                );
                
                $this->player->add_entry($post_data);
            }
            
        }
        
        $this->load->view('includes/header_view');
        $this->load->view('backend/add_player');
        $this->load->view('includes/footer_view');
    }
    
    public function legend(){
         
        $this->load->model("legend");
        
        $data_message['message'] = "";
        
        if($_POST){
            
            $image_handle = "legend_image";
            
            $config['upload_path']          = 'api/images/';
            $config['allowed_types']        = 'jpg|png';
            $config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;

            $this->load->library('upload', $config);
            

            if ( ! $this->upload->do_upload($image_handle)){

                    $error = array('error' => $this->upload->display_errors());
            } else {

                $upload_data = $this->upload->data();
                
                $image_name = $upload_data['file_name']; 
                
                $config1['image_library'] = 'gd2';
                $config1['source_image'] = 'api/images/'.$image_name;
                $config1['new_image'] = 'api/images/thumbnails/'.$image_name;
                $config1['create_thumb'] = TRUE;
                $config1['maintain_ratio'] = TRUE;
                $config1['width'] = 96;
                $config1['height'] = 96;

                $this->load->library('image_lib', $config1);
                $this->image_lib->resize();
                
                $thumbnail_name = $upload_data['raw_name']."_thumb".$upload_data['file_ext'];
                    
                $post_data = array(
                    'name' => $_POST['name'],
                    'player_position' => $_POST['player_position'],
                    'total_goals' => $_POST['total_goals'],
                    'appearances' => $_POST['appearances'],
                    'games_played' => $_POST['games_played'],
                    'legend_thumbnail' => $thumbnail_name,
                    'legend_image' => $image_name,
                    'description' => $_POST['description'],
                    'joined_on' => $_POST['joined_on'],
                    'last_game_date' => $_POST['last_game_date']
                );
                
                $this->legend->add_entry($post_data);
            }
            
        }
        
        $this->load->view('includes/header_view');
        $this->load->view('backend/add_legend');
        $this->load->view('includes/footer_view');
    }
    
    public function coach(){
         
        $this->load->model("coach");
        
        $data_message['message'] = "";
        
        if($_POST){
            
            $image_handle = "coach_image";
            
            $config['upload_path']          = 'api/images/';
            $config['allowed_types']        = 'jpg|png';
            $config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;

            $this->load->library('upload', $config);
            

            if ( ! $this->upload->do_upload($image_handle)){

                    $error = array('error' => $this->upload->display_errors());
            } else {

                $upload_data = $this->upload->data();
                
                $image_name = $upload_data['file_name']; 
                
                $config1['image_library'] = 'gd2';
                $config1['source_image'] = 'api/images/'.$image_name;
                $config1['new_image'] = 'api/images/thumbnails/'.$image_name;
                $config1['create_thumb'] = TRUE;
                $config1['maintain_ratio'] = TRUE;
                $config1['width'] = 96;
                $config1['height'] = 96;

                $this->load->library('image_lib', $config1);
                $this->image_lib->resize();
                
                $thumbnail_name = $upload_data['raw_name']."_thumb".$upload_data['file_ext'];
                    
                $post_data = array(
                    'full_name' => $_POST['full_name'],
                    'dob' => $_POST['dob'],
                    'country_of_birth' => $_POST['country_of_birth'],
                    'contract_date' => $_POST['contact_date'],
                    'resign_date' => $_POST['resign_date'],
                    'coach_thumbnail' => $thumbnail_name,
                    'coach_image' => $image_name,
                    'games_coached' => $_POST['games_coached']
                );
                
                $this->coach->add_entry($post_data);
            }
            
        }
        
        $this->load->view('includes/header_view');
        $this->load->view('backend/add_coach');
        $this->load->view('includes/footer_view');
    }
    
    public function fixture(){
        
         
        $this->load->model("fixture");
        
        $data_message['message'] = "";
        
        if($_POST){
            
            $image_handle1 = "team_a_img";
            $image_handle2 = "team_b_img";
            
            $config['upload_path']          = 'api/images/';
            $config['allowed_types']        = 'jpg|png';
            $config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;

            $this->load->library('upload', $config);
            

            if ( ! $this->upload->do_upload($image_handle1) ){

                    $error = array('error' => $this->upload->display_errors());
            } else {

                $upload_data = $this->upload->data();
                
                var_dump($upload_data);
                exit();
                
                $team_a_img = $upload_data['file_name']; 
                    
                $post_data = array(
                    'team_a_name' => $_POST['team_a_name'],
                    'team_b_name' => $_POST['team_b_name'],
                    'legue_name' => $_POST['legue_name'],
                    'team_a_img' => $team_a_img,
                    'team_b_img' => $team_a_img,
                    'time_of_game' => $_POST['time_of_game']
                );
                
                $this->fixture->add_entry($post_data);
            }
            
        }
        
        $this->load->view('includes/header_view');
        $this->load->view('backend/add_fixtures');
        $this->load->view('includes/footer_view');
    }
    
    public function leguetable(){
         
        $this->load->model("leguetable");
        
        $data_message['message'] = "";
        
        if($_POST){
             
            $post_data = array(
                'team' => $_POST['name'],
                'P' => $_POST['P'],
                'W' => $_POST['W'],
                'D' => $_POST['D'],
                'L' => $_POST['L'],
                'GF' => $_POST['GF'],
                'GA' => $_POST['GA'],
                'GD' => $_POST['GD'],
                'Pts' => $_POST['pts']
            );

            $this->leguetable->add_entry($post_data);
            
        }
        
        $this->load->view('includes/header_view');
        $this->load->view('backend/add_legue_table');
        $this->load->view('includes/footer_view');
    }
    
    public function forum(){
         
        $this->load->model("forum");
        
        $data_message['message'] = "";
        
        if($_POST){
            
            $post_data = array(
                'topic_title' => $_POST['topic_title'],
                'created_by' => $_POST['created_by']
            );

            $this->forum->add_entry($post_data);
            
        }
        
        $this->load->view('includes/header_view');
        $this->load->view('backend/add_forum');
        $this->load->view('includes/footer_view');
    }
    
    public function discussion(){
         
        $this->load->model("player");
        
        $data_message['message'] = "";
        
        if($_POST){
            
            $image_handle = "player_image";
            
            $config['upload_path']          = 'api/images/';
            $config['allowed_types']        = 'jpg|png';
            $config['max_size']             = 100;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;

            $this->load->library('upload', $config);
            

            if ( ! $this->upload->do_upload($image_handle)){

                    $error = array('error' => $this->upload->display_errors());
            } else {

                $upload_data = $this->upload->data();
                
                $image_name = $upload_data['file_name']; 
                
                $config1['image_library'] = 'gd2';
                $config1['source_image'] = 'api/images/'.$image_name;
                $config1['new_image'] = 'api/images/thumbnails/'.$image_name;
                $config1['create_thumb'] = TRUE;
                $config1['maintain_ratio'] = TRUE;
                $config1['width'] = 96;
                $config1['height'] = 96;

                $this->load->library('image_lib', $config1);
                $this->image_lib->resize();
                
                $thumbnail_name = $upload_data['raw_name']."_thumb".$upload_data['file_ext'];
                    
                $post_data = array(
                    'name' => $_POST['name'],
                    'player_postion' => $_POST['player_position'],
                    'total_goals' => $_POST['total_goals'],
                    'appearances' => $_POST['appearances'],
                    'games_played' => $_POST['games_played'],
                    'player_thumbnail' => $thumbnail_name,
                    'player_image' => $image_name,
                    'description' => $_POST['desription']
                );
                
                $this->player->add_entry($post_data);
            }
            
        }
        
        $this->load->view('includes/header_view');
        $this->load->view('backend/add_discussion');
        $this->load->view('includes/footer_view');
    }
    
}

