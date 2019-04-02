<?php
/*** 
  This file to show a sample invocation of a REST service using HTTP GET
  Pre-requisites
  This file requires
  1. The bookstore app
  2. Tibco Studio Books service, Get all books operation
 */

require_once 'include/common.php';
require_once 'include/protect.php';

// Replace this serviceURL to yours
$serviceURL = "http://DESKTOP-QFRUS2D:8080/books";

// Service invocation via GET
$json = file_get_contents($serviceURL);

// parsing the String in JSON format to objects so we can manipulate it by
// looping etc
$data = json_decode($json, TRUE);

// as the data is wrapped in an array with 1 element Book, we have to extract
// the Book, in order to get the list of Books
$bookList= $data['Book'];

?>

<html>
    <body>
        <?php include 'include/header.php' ; ?>
        
        <h1>Book Listing</h1>
        <div class="col-md-6">
          <table class='table table-striped' id='book-list' border='1'>
              <tr>
                  <th>Title</th>
                  <th>ISBN 13</th>
                  <th>Price</th>
                  <th>Option</th>
              </tr>
<?php            
    
          foreach($bookList as $book) {
            echo '
              <tr>
                  <td>'                             . $book['title']  . '</td>
                  <td>'                             . $book['isbn13'] . '</td>
                  <td>'                             . $book['price']  . '</td>
                  <td><a href="add-to-cart.php?id=' . $book['isbn13'] . '">add to cart</a></td>
              </tr>
            ';
              
          } // foreach 
?>
          </table>
        </div>
    </body>
</html>


