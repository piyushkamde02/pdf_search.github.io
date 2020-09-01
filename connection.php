<?php
     $keyword = $_post['keyword'];

     $dbUsername = 'root';
     $dbPassword = '';
     $dbname = 'register';

     $con = mysqli_connect('localhost',$dbUsername,$dbPassword,$dbname);
     if($con)
     {
        echo "Great work";
     }
     $sql="insert into pdf_search(keyword)values($keyword)";
     $query=mysqli_query($con,$sql);
     if($query)
     	echo 'data inserted successfully';
  ?>