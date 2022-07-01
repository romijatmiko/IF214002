<?php
require_once "./handlers/connection.php";
   if(function_exists($_GET['api'])) {
         $_GET['api']();}

   function user()
      {
         global $conn;   
         $check = array('id_user' => '', 'username' => '', 'password' => '', 'email' => '');
         $check_match = count(array_intersect_key($_POST, $check));
         if($check_match == count($check)){
         
               $result = mysqli_query($conn, "INSERT INTO u_user SET
               id_user = '$_POST[id_user]',
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
   function edit_user()
      {
         global $conn;
         if (!empty($_GET["id"])) {
         $id = $_GET["id"];      
      }   
      $check = array('username' => '', 'password' => '', 'email' => '');
         $check_match = count(array_intersect_key($_POST, $check));         
         if($check_match == count($check)){
         
              $result = mysqli_query($conn, "UPDATE u_user SET               
                   id = '$_POST[id]',
               username = '$_POST[username]',
               password = '$_POST[password]',
               email = '$_POST[email]' WHERE id_user = $id");
         
            if($result)
            {
               $response=array(
                  'status' => 1,
                  'message' =>'Anjasss-Berhasil-Cuy Edit Product'                  
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
   function delete_menu()
   {
      global $conn;
      $id = $_GET['id'];
      $query = "DELETE FROM u_user WHERE id_user=".$id;
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