<?php

class Main extends MainController{

    public  $post;
    public  $user;
    public  $comment;
    public  $photo;

    public function __construct () {
        
        parent::__construct();
        $this->post = $this->model("post");
        $this->user = $this->model('user');
        $this->comment = $this->model('comment');
        $this->photo = $this->model('photo');
    }

    function index () {

        switch($_SESSION['permission']) {

            case 'admin':
                $link = '<a href="'.URL.'manageusers">Manage Users</a>';
                break;

            case 'moderator':
                $link = '<a href="'.URL.'displayusers">Display Users</a>';
                break;
            default:
                $link = null;
        }

        $users = $this->user->basicSelect();
        $posts = $this->post->basicSelect();

        $data = array(
            'link' => $link,
            'users' => $users,
            'posts' => $posts
        );



        $this->view('main',$data);

    }

    public  function addPost () {

        if(isset($_POST['submit'])) {

            $user_id = $_SESSION['id'];
            $title = $_POST['title'];
            $description = $_POST['description'];
            $body = $_POST['body'];

            $this->post->insertPost($user_id,$title,$description,$body);

            $post_id = $this->post->lastInsertId();

            foreach($_FILES as $file) {

                if($file['error'] == 0) {
                    $photo_name = $file['name'];
                    $tmp_name = $file['tmp_name'];

                    $this->photo->insertPhoto ($user_id,$post_id,$photo_name,$tmp_name);
                }
            }


            header("Location: ".URL."main");

        }

        $this->view("new_post");

    }

    public function post ($id) {

        $post_id = (int) $id;
        $user_id = $_SESSION['id'];

        $data = array(
            'id' => $post_id
        );

        if(isset($_POST['submit'])) {

            $comment = $_POST['comment'];

            $this->comment->insertComment($user_id, $post_id, $comment);

        }

        $post = $this->post->basicSelect($data,1);
        $comments = $this->comment->basicSelect(array('post_id'=>$post_id));
        $users = $this->user->basicSelect();
        $photos = $this->photo->basicSelect(array('post_id'=>$post_id));

        $data = array(
            'post' => $post,
            'comments' => $comments,
            'users' => $users,
            'photos' => $photos
        );

        $this->view('display_post',$data);

    }
    
}