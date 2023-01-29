<?php
include_once 'class.met.php';

$book = new book();

if (isset($_POST["save"])) {
    $bookget[]=$_POST['ISBN'];
    $bookget[]= $_POST['name'];
    $bookget[]= $_POST['type'];
    $bookget[]= $_POST['price'];
    $bookget[] = $_POST['qty'];
    
    $book->addnewbook($bookget);

   
    $bookdata = new book();
    $bookdata->selectallrow();

    header( "refresh:1;url=view.php" );

}
else if (isset($_GET['id'])){
    $bookdel = new book();
    $bookdel->removebook($_GET['id']);
    header( "refresh:1;url=view.php" );

}
else if (isset($_GET['updateid'])){
    $book_item=$book->getbookid($_GET['updateid']);
}
else if (isset($_POST['editbook'])){
    $updateid=$_POST['updateid'];
    $bookups[]=$_POST['ISBN'];
    $bookups[]= $_POST['name'];
    $bookups[]= $_POST['type'];
    $bookups[]= $_POST['price'];
    $bookups[] = $_POST['qty'];

    $book_set=$book->update($updateid,$bookups);
    header( "refresh:3;url=view.php" );
    print_r( $updateid);
    print_r( $bookups);
  
}
