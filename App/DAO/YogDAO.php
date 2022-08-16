<?php


class YogDAO
{
    
    private $conexao;


    public function __construct()
    {
       
        $dsn = "mysql:host=localhost:3307;dbname=db_mvc";

        
        $this->conexao = new PDO($dsn, 'root', 'etecjau');
    }


  
    public function insert(YogModel $model)
    {
       
        $sql = "INSERT INTO Yog (nome, senha, pin) VALUES (?, ?, ?) ";


       
        $stmt = $this->conexao->prepare($sql);


  
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->senha);
        $stmt->bindValue(3, $model->pin);

         
        $stmt->execute();
    }


   
    public function update(YogModel $model)
    {
        $sql = "UPDATE Yog SET nome=?, senha=?, pin=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->senha);
        $stmt->bindValue(3, $model->pin);
        $stmt->bindValue(4, $model->id);
        $stmt->execute();
    }


    
    public function select()
    {
        $sql = "SELECT * FROM Yog ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);        
    }


    
    public function selectById(int $id)
    {
        include_once 'Model/YogModel.php';

        $sql = "SELECT * FROM Yog WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("YogModel"); 
    }


   
    public function delete(int $id)
    {
        $sql = "DELETE FROM Yog WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}