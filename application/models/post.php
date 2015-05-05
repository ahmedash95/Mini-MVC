<?php

class Post extends MainModel
{

    private $id;
    private $user_id;
    private $title;
    private $description;
    private $body;

    protected $tableName = "post";

    public function insertPost($user_id, $title, $description, $body)
    {

        $data = array(
            'user_id' => $this->escape($user_id),
            'title' => $this->escape($title),
            'description' => $this->escape($description),
            'body' => $this->escape($body)
        );

        $this->insert($data);
    }

    public function updatePost($title, $description, $body, $id)
    {

        $data = array(
            'title' => $this->escape($title),
            'description' => $this->escape($description),
            'body' => $this->escape($body)
        );

        $where = array(
            'id' => $id
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
        $this->prepare("DELETE FROM post WHERE id=:id");
        $this->bindParam(":id", $id);
        $this->execute();

        if ($this->rowCount() > 0) {
            return true;
        } else {
            return false;
        }

    }

}