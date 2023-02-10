<?php require_once('header.php'); ?>

<main>
    <br>
    Belajar ngoding di di sekolah koding,
    belajar koding online
    <br>
    <h2> Implode dan explode </h2>
    
        <?php 
        // mengubah array menjadi string
        $pekerjaan = [ "programmer", "designer", "manager"];
        echo implode(" | ",$pekerjaan);

        echo "<br>";
        // mengubah string menjadi array
        $pelajaran = "html css javascript php";
        print_r(explode(" ", $pelajaran ) );
        ?>
            <br>
            <h2> Fungsi date </h2>
            <?php  
            echo date('d-M-Y');
            ?>

                <h2>Trim & Strip Tags</h2>

                <?php 
                $text = " ini adalah input user ";
                echo "sebelum" . $text . "disini;";
                echo "<br>";
                echo "sesudah" . trim($text) . "trim disini";
                echo "<br>";
                echo "sesudah" . ltrim($text) . "ltrim disini";
                echo "<br>";
                echo "sesudah" . rtrim($text) . "rtrim disini";

        $text2 = "<script>alert('halo semuanya!')</script>";
        $text3 = "<b> Halo </b> semuanya";
        echo "<br>";
        echo $text3;
        echo "<br>";
        echo strip_tags ($text3);
        echo "<br>";
        echo strip_tags ($text3, '<b>');
                ?>

</main>
</body>
<?php require_once('footer.php'); ?>
