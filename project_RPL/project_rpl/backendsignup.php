<?php
include 'koneksi.php';
    
    $email = $_POST['email'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $country = $_POST['country'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    // Query untuk memasukkan data ke dalam tabel account
    $sql = "INSERT INTO account VALUES ('$email', '$firstName', '$lastName', '$country', '$password', '$confirmPassword')";
              
    $query	= mysqli_query($connect, $sql) or die (mysqli_error($connect));

    if($query) 
	{
		header("location:login_page.php");
	} else {
		header("location:signup_page.php");
	}

    // Persiapkan statement untuk query
    // $stmt = $connect->prepare($query);

     // Bind parameter ke statement
    // $stmt->bind_param("ssssss", $email, $firstName, $lastName, $country, $password, $confirmPassword);

     // Eksekusi statement
    // if ($stmt->execute()) {
    //     // Jika berhasil ditambahkan, kirimkan respons JSON
    //     $response = [
    //         'status' => 'success'
    //     ];
    //     echo json_encode($response);
    //     exit;
    // } else {
    //     // Jika terjadi error saat menjalankan query
    //     $response = [
    //         'status' => 'error',
    //         'message' => 'Error: ' . $stmt->error
    //     ];
    //     echo json_encode($response);
    //     exit;
    // }

     // Tutup statement
    // $stmt->close();

?>