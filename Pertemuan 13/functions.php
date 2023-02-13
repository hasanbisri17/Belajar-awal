<?php 
// Koneksi database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");


// ambil dara dari table mahasiswa
// $result = mysqli_query($conn, "SELECT * FROM mahasiswa");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]) ;
    $email = htmlspecialchars($data["email"]) ;
    $jurusan = htmlspecialchars($data["jurusan"]) ;
    $semester = htmlspecialchars($data["semester"]) ;

    // Upload Gambar
    $gambar = upload();
    if ( !$gambar ){
        return false;
    }

    $query = "INSERT INTO mahasiswa 
                VALUES
            ('', '$nrp', '$nama', '$email', '$jurusan', '$semester', '$gambar')
            ";
        mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload(){
    
    $namafile = $_FILES["gambar"]["name"];
    $ukuranfile = $_FILES["gambar"]["size"];
    $error = $_FILES["gambar"]["error"];
    $tmpName = $_FILES["gambar"]["tmp_name"];


    // Cek apakah tidak ada gambar yg di upload
    if ( $error === 4 ) {
        echo "<script>
                alert('Pilih Gambar terlebih dahulu!!')
            </script>";
        return false;
    }

    // Yang boleh di upload hanya file gambar
    $ekstensiGambarValid = ['jpg', 'png', 'jpeg'];
    $ekstensiGambar = explode('.', $namafile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if ( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
        echo "<script>
                alert('Yang anda upload bukan gambar!!')
            </script>";
        return false;
    }

    // Cek jika ukuran terlalu besar
    if ( $ukuranfile > 1000000 ){
        echo "<script>
                alert('Ukuran gambar terlalu besar!!')
            </script>";
        return false;
    }

    // Lolos pengecekan gambar siap di upload ke folder
    // Generate nama gambar baru

    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;



    move_uploaded_file($tmpName, 'img/'. $namaFileBaru);

    return $namaFileBaru;
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;
    $id = $data["id"];
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]) ;
    $email = htmlspecialchars($data["email"]) ;
    $jurusan = htmlspecialchars($data["jurusan"]) ;
    $semester = htmlspecialchars($data["semester"]) ;
    $gambarLama = htmlspecialchars($data["gambarLama"]) ;

    // cek apakah user upload gambar baru
    if ( $_FILES['gambar']['error'] === 4 ) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }    

    $query = "UPDATE mahasiswa SET
                nrp = '$nrp',
                nama = '$nama',
                email = '$email',
                jurusan = '$jurusan',
                semester = '$semester',
                gambar = '$gambar'
                WHERE id = $id
            ";
        mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}
function cari($keyword){
    global $conn;
    $query = "SELECT * FROM mahasiswa
                WHERE
            nama LIKE '%$keyword%' OR 
            nrp LIKE '%$keyword%' OR 
            email LIKE '%$keyword%' OR 
            jurusan LIKE '%$keyword%' OR 
            semester LIKE '%$keyword%'
            ";
        return query($query);
}

?>