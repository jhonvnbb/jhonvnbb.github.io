<?php
    $nama = $_POST['Nama'];
    $email = $_POST['Email'];
    $nophone = $_POST['No_HP'];

    //DB 
    $conn = new mysqli('localhost', 'jhonvnababan', 'jaqsibala19', 'portofolio');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    } else{
        $insert  = $conn->prepare("INSERT INTO dbportfolio (Nama, Email, No_HP) VALUES (?, ?, ?)");
        $insert->bind_param("ssi", $nama, $email, $nophone);
        $insert->execute();
        echo "Your message has been successfully sent, I will contact you soon..";
        $insert->close();
        $conn->close();
    }
    header("Location: success.html");
    exit()
?>