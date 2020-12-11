<?php
// session
session_start();
if(isset($_SESSION['msg'])): ?>

<script>
    // Toast msg js
    window.onload = function() {
        M.toast({html: '<?php echo $_SESSION['msg']; ?>' });
    }
</script>

<?php
endif;
session_unset();
?>