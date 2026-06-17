<?php session_start();
?>
<?php
					$_SESSION['response'] = $fb->get('/{user-id}/picture','{access-token}'); 
                    ?>


<script>
    window.location.href='https://ar.edodwaja.com/index.php';
    </script>