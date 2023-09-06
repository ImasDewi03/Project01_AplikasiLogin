<?php
session_start();
if(!isset($_SESSION['IS_LOGIN'])){
?>
<script>
window.location.href='index.php';
</script>
<?php
}else{
echo "Selamat Datang di Websiteku";
}
?> || 
<a href="logout.php">Logout</a>