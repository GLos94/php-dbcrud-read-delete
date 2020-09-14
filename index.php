<!-- SELECT -->
<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "dbhotel3";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn && $conn->connect_error) {
        echo "Connection failed: " . $conn->connect_error;
        return;
    }
    $sql = "

        SELECT *
        FROM pagamenti

    ";
    $result = $conn->query($sql);
    if ($result && $result->num_rows > 0) {

        echo '<ul>';

        while( $row = $result->fetch_assoc() ) {
          if($row['id'] == 7) {
            echo '<li style="font-weight: bold;">';
          } else {
            echo '<li>';
          }

          echo $row['id'] ." - " .$row['status'] ." - " .$row['price'];
          echo '</li>';
        }

        echo '</ul>';
      }

      else {
        print_r($result);
      }





$conn->close();

?>


<!-- DELETE -->
<?php
// db comunication
  $servername = "localhost";
  $user = "root";
  $password = "root";
  $db_name = "dbhotel3";

// db check db situation
    $connection = new mysqli($servername, $user, "root", $db_name);

    if( $connection && $connection->connect_error ) {
      echo 'error?' . $connection->connect_error;
      print_r( $connection );

      return;

    } else {
      echo 'ok<BR><BR>';
    }


    $sql = "
      DELETE
      FROM pagamenti
      WHERE id = 8
    ";

    // while on result
    $result = $connection->query($sql);

    if( $result === TRUE ) {
      echo 'deleted.';
      print_r($result); // num of row affected
    } else {
      echo 'Error with deletion';
      print_r($result); // 0
    }


    $connection->close();

?>



<!-- elimina dalla tabella pagamenti la riga con pagante_id = 6 e con status = rejected -->
<?php
// db comunication
  $servername = "localhost";
  $user = "root";
  $password = "root";
  $db_name = "dbhotel3";

// db check db situation
    $connection = new mysqli($servername, $user, "root", $db_name);

    if( $connection && $connection->connect_error ) {
      echo 'error?' . $connection->connect_error;
      print_r( $connection );

      return;

    } else {
      echo 'ok<BR><BR>';
    }


    $sql = "
      DELETE
      FROM pagamenti
      WHERE pagante_id = 6
      AND status LIKE 'rejected'
    ";

    // while on result
    $result = $connection->query($sql);

    if( $result === TRUE ) {
      echo 'deleted.';
      print_r($result); // num of row affected
    } else {
      echo 'Error with deletion';
      print_r($result); // 0
    }


    $connection->close();

?>


<!-- seleziona dalla tabella pagamenti le colonne id, status e price di tutti i pagamenti con price superiore a 600, stampa il risultato in una lista non ordinata -->
<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "dbhotel3";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn && $conn->connect_error) {
        echo "Connection failed: " . $conn->connect_error;
        return;
    }
    $sql = "

        SELECT id, status, price
        FROM pagamenti
        WHERE price > 600

    ";
    $result = $conn->query($sql);
    if ($result && $result->num_rows > 0) {

        echo '<ul>';

        while( $row = $result->fetch_assoc() ) {


          echo '<li>' . $row['id'] ." - " .$row['status'] ." - " .$row['price'] .  '</li>';

        }

        echo '</ul>';
      }

      else {
        print_r($result);
      }



$conn->close();

?>
