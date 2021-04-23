<html>

<head>
  <title> Implementasi Pemograman Terstruktur</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>
  <div class="container">         
  <table class="table table-dark">
    <thead>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>" ; 
  
  <table>
    
        <h2>Kalkulator Sederhana</h2>
        <td> Membuat Kalkulator Matematika Pemgoraman Sederhana </td> 
        <tr>
        <td>========================================= </td>
        </tr>
         <br>
    <tr>
      <td>Bilangan 1 = <input type="text" name="bil1"></td>
    </tr>
    <br>
    <tr>
      <td>Bilangan 2 = <input type="text" name="bil2"></td>
    </tr>
    <br>
    <tr>
      <td><input type="submit" value="Hasil" name="kirim"></td>
    </tr>
    <br>
    </table>
  </form>

  <?php


  //Menginput ketika di klik hasil
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $bil1     = $_POST["bil1"];
    $bil2     = $_POST["bil2"];

    // Menampilkan  isi dari variabel bilangan
    echo "Bilangan 1: " . $bil1 . "<br>";
    echo "Bilangan 2: " . $bil2 . "<br>";

    // Ini function tambah
    function tambah($bil1, $bil2)
    {
      return $bil1 + $bil2;
    }

    //Ini function kurang
    function kurang($bil1, $bil2)
    {
      return      $bil1 - $bil2;
    }

    // Ini function kali
    function kali($bil1, $bil2)
    {
      return  $bil1 * $bil2;;
    }

    //Ini function bagi
    function bagi($bil1, $bil2)
    {
      return  $bil1 / $bil2;
    }

    echo  "Hasil penjumlahan adalah " . tambah($bil1, $bil2) . "<br>"; //Memamnggil fungsi tambah
    echo  "Hasil pengurangan adalah " . kurang($bil1, $bil2) . "<br>"; //Memamnggil fungsi kurang
    echo  "Hasil perkalian adalah " . kali($bil1, $bil2) . "<br>"; //Memamnggil fungsi kali
    echo  "Hasil pembagian adalah " . bagi($bil1, $bil2) . "<br>"; //Memamnggil fungsi bagi
  }
  ?>
    </tbody>
  </table>
</div>
 
</body>
</html>