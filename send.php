    <?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['gender']) && isset($_POST['position']) && isset($_POST['status'])) {
    include 'function.php';

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name = validate($_POST['name']);
    $email = validate($_POST['email']);
    $address = validate($_POST['address']);
    $gender = validate($_POST['gender']);
    $position = validate($_POST['position']);
    $status = validate($_POST['status']);

    if (empty($name) || empty($email) || empty($address) || empty($gender) || empty($position) || empty($status)) {
        header("Location: index.php");
    } else {
        $sql = "INSERT INTO karyawan(name, email, address, gender, position, status) VALUES('$name', '$email', '$address', '$gender', '$position', '$status')";
        $res = mysqli_query($conn, $sql);

        if ($res) {
            header("Location: index.php");
        }
    }
} else {
    header("Location: index.php");
}
