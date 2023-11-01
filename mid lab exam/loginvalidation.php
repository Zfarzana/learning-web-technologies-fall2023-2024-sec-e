
$sql = "SELECT * FROM info WHERE id = '$id' AND password = '$password'";
$status = mysqli_query($con, $sql);

if ($status && mysqli_num_rows($status) > 0) {
    //$user = ['password' => trim($password), 'id' => trim($id)];
    $row = mysqli_fetch_assoc($status);
    $user = $row;
    $_SESSION['user'] = $user;
    if ($row['role'] === 'admin') {
        setcookie('status', 'true', time() + 3600, '/');
        header('Location: adminhome.php');
        exit();
    } else {
        setcookie('status', 'true', time() + 3600, '/');
        header('Location: userhome.php');
        exit();
    }
} else {
    header('Location: login.php?error=invalid');
    exit();
}

mysqli_close($con);
?>