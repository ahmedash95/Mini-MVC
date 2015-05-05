<?php

class Comment extends MainModel
{

    private $id;
    private $user_id;
    private $post_id;
    private $comment;


    protected $tableName = "comment";

    public function insertComment($user_id, $post_id, $comment)
    {

        $data = array(
            'user_id'     => (int) $this->escape($user_id),
            'post_id'       => (int) $this->escape($post_id),
            'comment' => $this->escape($comment)
        );

        $this->insert($data);
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