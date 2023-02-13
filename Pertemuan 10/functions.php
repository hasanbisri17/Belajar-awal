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
    $gambar = htmlspecialchars($data["gambar"]) ;

    $query = "INSERT INTO mahasiswa 
                VALUES
            ('', '$nrp', '$nama', '$email', '$jurusan', '$semester', '$gambar')
            ";
        mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}

?>