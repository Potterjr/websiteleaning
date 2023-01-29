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
        echo "<table border='1'>";
        while (($line = fgetcsv($csv)) !== FALSE) {
            echo '<tr >';
            foreach ($line as $cell) {
                echo '<td>' . $cell . '</td>';
            }
            if ($line[4] == 15000) {
                $salary = $line[4] - 12000;
                print_r('<td>' . $salary . '</td>');
                print_r('<td>' . "ไม่เสียภาษี" . '</td>');
            }
            else if ($line[4] == 20000) {
                $salary = $line[4] - 17500;
                print_r('<td>' . $salary . '</td>');
                print_r('<td>' . "เสียภาษี" . '</td>');
            }
            else if ($line[4] == 25000) {
                $salary = $line[4] - 23000;
                print_r('<td>' . $salary . '</td>');
                print_r('<td>' . "เสียภาษี" . '</td>');
            }
            

            echo '</tr>';
        }

        echo '</table>';
    }
} else {
    echo "<script>goto('upload.html')</script>";
}


?>