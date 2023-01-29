<?php
include_once('member.php');
?>
<script>
    function goto(url) {
        document.write("กำลังเข้าสู่หน้า upload รอแปป");
        setTimeout(() => {
            window.location.href = url;
        }, 1000);
    }
</script>

<?php

if (isset($_POST['submit'])) {

    $csv = fopen($_FILES['fileupload']['tmp_name'], 'r');
    if ($csv !== false) {
        $member_controler = new member();
        $counter = 0;
        $total = 0;
        while ($data = fgetcsv($csv, 150, ',')) {
            $counter = $counter + $member_controler->add_member(
                $data[0],
                $data[1],
                $data[2],
                $data[3],
                $data[4],
            );
            echo"insert new {$counter}"."<br>";
        }
    }
} else {
    echo "<script>goto('upload.html')</script>";
}


?>