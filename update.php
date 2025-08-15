 <?php 
                 include 'init.koneksi.db.php'; 
                 $sql = "SELECT judul, keterangan FROM web1;";
                 $data = $conn->query($sql);

                 if ($data->num_rows > 0) {
                     while($row = $data->fetch_assoc()) {
                         echo "<h1>" . $row["judul"]. "</h1>";
                         echo "<p>" . $row["keterangan"]. "</p>";
                     }
                 }
                    $conn->close();
              ?>