<?php
require_once "connection.php";
  
      
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

   function tambah_menu()
      {
         global $conn;   
         $check = array('id_menu' => '', 'nama_menu' => '', 'image' => '', 'kategori' => '', 'deskripsi' => '',
         'harga' => '','stock' => '');
         $check_match = count(array_intersect_key($_POST, $check));
         if($check_match == count($check)){
         
               $result = mysqli_query($conn, "INSERT INTO menu SET
               id_menu = '$_POST[id_menu]',
               nama_menu = '$_POST[nama_menu]',
               image = '$_POST[image]',
               kategori = '$_POST[kategori]',
               deskripsi = '$_POST[deskripsi]',
               harga = '$_POST[harga]',
               stock = '$_POST[stock]'");
               
               if($result)
               {
                  $response=array(
                     'status' => 100,
                     'message' =>'Anjasss-Berhasil-Cuy Tambah Product'
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
   function edit_menu()
      {
         global $conn;
         if (!empty($_GET["id"])) {
         $id = $_GET["id"];      
      }   
      $check = array('nama_product' => '', 'image' => '', 'kategori' => '', 'deskripsi' => '',
         'harga' => '','stock' => '');
         $check_match = count(array_intersect_key($_POST, $check));         
         if($check_match == count($check)){
         
              $result = mysqli_query($conn, "UPDATE menu SET               
                   id = '$_POST[id]',
               nama_menu = '$_POST[nama_menu]',
               image = '$_POST[image]',
               kategori = '$_POST[kategori]',
               deskripsi = '$_POST[deskripsi]',
               harga = '$_POST[harga]',
               stock = '$_POST[stock]' WHERE id_menu = $id");
         
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
      $query = "DELETE FROM u_user WHERE id_product=".$id;
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