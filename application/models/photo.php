<?php

class Photo extends MainModel
{

    private $id;
    private $user_id;
    private $post_id;
    private $photoName;


    protected $tableName = "photo";

    public function insertPhoto($user_id, $post_id, $photo_name ,$tmp_name)
    {

        $data = array(
            'user_id'     => (int) $this->escape($user_id),
            'post_id'       => (int) $this->escape($post_id),
            'photo_name' => $this->escape($photo_name)
        );

        $insert =  $this->insert($data);

        if($insert) {
            move_uploaded_file($tmp_name,"public/imgs/posts/".$photo_name);
        }
    }



    public function updatePost($comment,$id)
    {

        $data = array(
            'comment' => $comment
        );

        $where = array(
            'id' => (int) $id
        );

        $this->basicUpdate($data, $where);

        if ($this->rowCount() > 0) {
            return true;
        } else {
            return false;
        }

    }

    public function deletePost($id)
    {

        $id = (int)$id;
        $this->prepare("DELETE FROM comment WHERE id=:id");
        $this->bindParam(":id", $id);
        $this->execute();

        if ($this->rowCount() > 0) {
            return true;
        } else {
            return false;
        }

    }

}