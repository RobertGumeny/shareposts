<?php 
  class Pages extends Controller {
    public function __construct(){
    }

    public function index(){
      if(isLoggedIn()){
        redirect('posts');
      }

      $data = [
        'title' => 'SharePosts',
        'description' => 'Welcome to SharePosts. A simple social network built on the GumenyMVC PHP Framework.'
      ];
      $this->view('pages/index', $data);
    }
    public function about(){
      $data = [
        'title' => 'About Us',
        'description' => 'Use this app to share posts with other users!'
      ];
      $this->view('pages/about', $data);
    }
  }
?>