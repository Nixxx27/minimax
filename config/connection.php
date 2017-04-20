<?php
class connection{
   public function dbConnect(){
        try {
            return $handler = new PDO ('mysql:host=localhost;dbname=payroll','root','nikkoz06');
            $handler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo $e->getMessage();
            die('Sorry Database Problem.');
            }
    }

	public function hrDbConnect(){
        try {
            return $handler = new PDO ('mysql:host=localhost;dbname=slpi','root','nikkoz06');
            $handler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo $e->getMessage();
            die('Sorry Database Problem.');
            }
    }
}//EndClass

?>