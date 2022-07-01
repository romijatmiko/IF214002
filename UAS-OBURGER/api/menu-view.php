<?php
require_once "./handlers/connection.php";
   if(function_exists($_GET['api'])) {
         $_GET['api']();
      }   
      
   function menu()
   {
      global $conn;      
      $query = $conn->query("SELECT * FROM menu");            
      while($row=mysqli_fetch_object($query))
      {
         $data[] =$row;
      }
      $response=array(
                     'status' => 100,
                     'message' =>'Anjasss-Berhasil-Cuy',
                     'data' => $data
                  );
      header('Content-Type: application/json');
      echo json_encode($response);
   }   

   function menu_id()
   {
      global $conn;
      if (!empty($_GET["id"])) {
         $id = $_GET["id"];      
      }            
      $query ="SELECT * FROM menu WHERE id_menu = $id";      
      $result = $conn->query($query);
      while($row = mysqli_fetch_object($result))
      {
         $data[] = $row;
      }            
      if($data)
      {
      $response = array(
                     'status' => 100,
                     'message' =>'Anjasss-Berhasil-Cuy',
                     'data' => $data
                  );               
      }else {
         $response=array(
                     'status' => 0,
                     'message' =>'No Data Found'
                  );
      }
   
      
      header('Content-Type: application/json');
      echo json_encode($response);
   }

   ?>