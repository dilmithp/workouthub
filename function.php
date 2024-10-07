<?php
require_once'conn.php';
function uidExists($conn, $email)
{
  $sql = "SELECT * FROM signup WHERE email=?;";
  $stmt = mysqli_stmt_init($conn);

  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location:signup.php?error=stmtfailed");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "s", $email);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
  mysqli_stmt_close($stmt);
  if ($row = mysqli_fetch_assoc($result)) {
    return $row;
  } else {
    return false;
  }
}
function login($conn, $email, $pwd)
{
  $uidExists = uidExists($conn, $email);
  if ($uidExists === false) {
    header("location: sign.php?error=noUserSignUP");
    exit();
  }
  $dbpwd = $uidExists["newPassword"];
  if ($pwd === $dbpwd) {
    $checkPwd = true;
  } else {
    $checkPwd = false;
  }
  if ($checkPwd === false) {
    header("location:sign.php?error=wrongPassword");
    exit();
  } else if ($checkPwd === true) {
    session_start();
    $_SESSION['id'] = $uidExists['id'];
    $_SESSION['firstName'] = $uidExists['firstName'];
    $_SESSION['lastName'] = $uidExists['lastName'];
    $_SESSION['age'] = $uidExists['age'];
    header("location: index.php");
    exit();
  }
}
function adminuidExists($conn, $email)
{
  $sql = "SELECT * FROM admin_users WHERE username=?;";
  $stmt = mysqli_stmt_init($conn);

  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location:signup.php?error=stmtfailed");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "s", $email);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
  mysqli_stmt_close($stmt);
  if ($row = mysqli_fetch_assoc($result)) {
    return $row;
  } else {
    return false;
  }
}
function adminlogin($conn, $email, $pwd)
{
  $uidExists = adminuidExists($conn, $email);
  if ($uidExists === false) {
    header("location: sign.php?error=noUserSignUP");
    exit();
  }
  $dbpwd = $uidExists["password"];
  if ($pwd === $dbpwd) {
    $checkPwd = true;
  } else {
    $checkPwd = false;
  }
  if ($checkPwd === false) {
    header("location:sign.php?error=wrongAdminPassword");
    exit();
  } else if ($checkPwd === true) {
    session_start();
    $_SESSION['id'] = $adminuidExists['id'];
    $_SESSION['username'] = $adminuidExists['username'];
    header("location: admin/adminDashboard.php");
    exit();
  }
}
  ?>