<?php


class YogModel
{
    
    public $id, $nome, $senha, $pin;


    public $rows;


    public function save()
    {
        include 'DAO/YogDAO.php'; 

        
        $dao = new YogDAO(); 

        
        if(empty($this->id))
        {
           
            $dao->insert($this);

        } else {

            $dao->update($this); 
        }        
    }


   
    public function getAllRows()
    {
        include 'DAO/YogDAO.php'; 
        
     
        $dao = new YogDAO();

        
        $this->rows = $dao->select();
    }


   
    public function getById(int $id)
    {
        include 'DAO/YogDAO.php'; 

        $dao = new YogDAO();

        $obj = $dao->selectById($id); 

        
        return ($obj) ? $obj : new YogDAO(); 
       
    }


   
    public function delete(int $id)
    {
        include 'DAO/YogDAO.php';

        $dao = new YogDAO();

        $dao->delete($id);
    }
}