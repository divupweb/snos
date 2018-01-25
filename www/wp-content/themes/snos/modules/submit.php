<?php
 session_start();
 $data = array();
 if( isset( $_GET['uploadfiles'] ) )
 {
  $error = false;
  $files = array();
  $uploaddir = './uploads/';
  if( ! is_dir( $uploaddir ) ) mkdir( $uploaddir, 0755 );
  foreach( $_FILES as $file )
  {
   if ($file['size']<50000000)
    if ($file['type']=='image/jpg' || $file['type']=='image/png' || $file['type']=='image/jpeg' || $file['type']=='image/bmp' || $file['type']=='image/gif') 
     if( move_uploaded_file( $file['tmp_name'], $uploaddir . basename($file['name']) ) )
     {
      $files[] = realpath( $uploaddir . $file['name'] );
      $_SESSION['path_download']= realpath( $uploaddir . $file['name'] );
     }
     else
     {
      $error = true;
     }
    else  
     $error = true;
  }
  $data = $error ? array('error' => 'Ошибка загрузки файлов.') : array('files' => $files );
  echo json_encode( $data );
 }