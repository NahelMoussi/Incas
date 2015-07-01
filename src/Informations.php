<?php

class Informations
{
    public $db;

    public function __construct($db)
    {
        $this->db = $db;
    }



    //JUST ONE PROJECT
    public function get_all($id)
    {
        $query = $this->db->query('select * from before_action where id='.$id);
        $projects = $query->fetchAll();

        return $projects;
    }
}
