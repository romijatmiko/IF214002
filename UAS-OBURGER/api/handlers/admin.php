<?php
require_once "connection.php";

   function admin()
   {
      global $conn;      
      $query = $conn->query("SELECT * FROM u_admin");            
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

   function admin_id()
   {
      global $conn;
      if (!empty($_GET["id"])) {
         $id = $_GET["id"];      
      }            
      $query ="SELECT * FROM u_admin WHERE id_admin = $id";      
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

   function tambah_admin()
   {
      global $conn;   
      $check = array('id_admin' => '', 'username' => '', 'password' => '','email' => '');
      $check_match = count(array_intersect_key($_POST, $check));
      if($check_match == count($check)){
      
            $result = mysqli_query($conn, "INSERT INTO u_user SET
            id = '$_POST[id]',
            username = '$_POST[username]',
            password = '$_POST[password]',
            email = '$_POST[email]'");
            
            if($result)
            {
               $response=array(
                  'status' => 100,
                  'message' =>'Anjasss-Berhasil-Cuy Tambah User'
               );
            }
            else
            {
               $response=array(
                  'status' => 0,
                  'message' =>'Insert Failed.'
               );
            }
      }else{
         $response=array(
                  'status' => 0,
                  'message' =>'Wrong Parameter'
               );
      }
      header('Content-Type: application/json');
      echo json_encode($response);
   }
function edit_admin()
   {
      global $conn;
      if (!empty($_GET["id"])) {
      $id = $_GET["id"];      
   }   
   $check = array('username' => '', 'password' => '', 'email' => '');
      $check_match = count(array_intersect_key($_POST, $check));         
      if($check_match == count($check)){
      
           $result = mysqli_query($conn, "UPDATE u_admin SET               
            username = '$_POST[username]',
            password = '$_POST[password]',
            email = '$_POST[email]' WHERE id_admin = $id");
      
         if($result)
         {
            $response=array(
               'status' => 1,
               'message' =>'Anjasss-Berhasil-Cuy Edit User'                  
            );
         }
         else
         {
            $response=array(
               'status' => 0,
               'message' =>'Update Failed'                  
            );
         }
      }else{
         $response=array(
                  'status' => 0,
                  'message' =>'Wrong Parameter',
                  'data'=> $id
               );
      }
      header('Content-Type: application/json');
      echo json_encode($response);
   }
function delete_admin()
{
   global $conn;
   $id = $_GET['id'];
   $query = "DELETE FROM u_admin WHERE id_admin=".$id;
   if(mysqli_query($conn, $query))
   {
      $response=array(
         'status' => 100,
         'message' =>' Anjasss-Berhasil-Cuy Delete Success'
      );
   }
   else
   {
      $response=array(
         'status' => 0,
         'message' =>'Delete Fail.'
      );
   }
   header('Content-Type: application/json');
   echo json_encode($response);
}

   ?>