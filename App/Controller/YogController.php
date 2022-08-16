<?php


class YogController 
{
    
    public static function index()
    {
        include 'Model/YogModel.php';
        
        $model = new YogModel(); 
        $model->getAllRows();

        include 'View/modules/Yog/ListaYog.php'; 
    }


    
    public static function form()
    {
        include 'Model/YogModel.php'; 
        $model = new YogModel();

        if(isset($_GET['id'])) 
            $model = $model->getById( (int) $_GET['id']); 
           

        include 'View/modules/Yog/FormYog.php'; 
    }


    public static function save()
    {
       include 'Model/YogModel.php'; 

      
       $model = new YogModel();

       $model->id =  $_POST['id'];
       $model->nome = $_POST['nome'];
       $model->senha = $_POST['senha'];
       $model->pin = $_POST['pin'];

       $model->save(); 

       header("Location: /Yog"); 
    }


  
    public static function delete()
    {
        include 'Model/YogModel.php'; 

        $model = new YogModel();

        $model->delete( (int) $_GET['id'] ); 

        header("Location: /Yog"); 
    }
}