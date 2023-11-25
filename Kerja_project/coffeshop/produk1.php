<?php include("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>

<body>
    <header>
       <h3 align="center">Haloo, Selamat Datang Admin</h3>
       <h5 align="center">Selama Anda Pergi Berikut Adalah hasil laporan pengunjung yang</h5>
       <h5 align="center">memberikan saran dan masukkan kepada anda.</h5><br><br>
     </header>
     <table class="table table-striped">
       <thead>
         <tr>
            <th>No</th>
            <th>Date</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Action</th>
         </tr>
       </thead>
   <tbody>
 <?php
 $sql = "SELECT * FROM feedback ";
 $query = mysqli_query($db, $sql);
 while($feedback = mysqli_fetch_array($query)){
    echo "<tr>";
    echo "<td>".$feedback['id']."</td>";
    echo "<td>".$feedback['date']."</td>";
    echo "<td>".$feedback['name']."</td>";
    echo "<td>".$feedback['email']."</td>";
    echo "<td>".$feedback['message']."</td>";
    echo "<td>";
    echo "<a href='../hapus.php?id=".$feedback['id']."' class='btn btn-danger' onclick='return confirmDelete();'>Hapus</a>";
    echo "</td>";
    echo "</tr>";
    }
       
    ?>
    </tbody>
    </table>
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    <script>
    function confirmDelete() {
        return confirm("Apakah Anda yakin ingin menghapus?");
    }
</script>

    </body>
   </html>