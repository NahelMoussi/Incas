<?php

class Projects
{
    public $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    //ALL PROJECTS - PAGINATION
        public function pagination_proj($page)
    {
        $query = $this->db->query('SELECT * FROM projects LIMIT '.(($page-1)*3).', 3');
        $projects = $query->fetchAll();

        return $projects;

    }



    //3 First Projects
    public function get_all()
    {
        $query = $this->db->query('select * from projects LIMIT 3');
        $projects = $query->fetchAll();

        return $projects;
    }

    //JUST ONE PROJECT
    public function get_proj($id)
    {
        $query = $this->db->query('select * from projects where id='.$id);
        $projects = $query->fetchAll();

        return $projects;
    }

    //project + 1
    public function get_proj_more($id)
    {
        $more_id = $id + 1;


        $query = $this->db->query('select count(*) from projects');
        $count = $query->fetchAll();
        if($more_id < $count ){
            $query = $this->db->query('select * from projects where id='.$more_id);
            $more_project = $query->fetchAll();
        }
        else{
            $query = $this->db->query('select * from projects where id= '. 1);
            $more_project = $query->fetchAll();
        }
        return $more_project;
        
    }

    //project - 1
    public function get_proj_less($id)
    {
        $less_id = $id - 1;


        if($less_id > 0 ){
            $query = $this->db->query('select * from projects where id='.$less_id);
            $less_project = $query->fetchAll();
        }
        else{
            $query = $this->db->query('select * from projects where id= '. 7);
            $less_project = $query->fetchAll();
        }
        return $less_project;
        
    }

}