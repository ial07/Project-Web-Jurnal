<?php

session_destroy();

echo "<script>
alert('You have successfully logged out');
window.location='?page=home'
</script>";
