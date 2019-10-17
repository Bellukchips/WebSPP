    <?php
    if (isset($_SESSION['lastAct'])) {
        if ($_SESSION['lastAct'] + 120*120 < time()) {
            echo "<script>alert('Waktu sesi anda habis silahkan login kembali')</script>";
        echo "<meta http-equiv='refresh' content='1 url=form_login.php'>";
        }
    }

    ?>