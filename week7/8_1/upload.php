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
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Name</th>";
        echo "<th>Email</th>";
        echo "<th>Phone</th>";
        echo "<th>Salary</th>";
        echo "<th>tex</th>";
        echo "<th>status</th>";

        while (($line = fgetcsv($csv)) !== FALSE) {

            foreach ($line as $cell) {

                echo "<td>" . $cell . "</td>";
            }
            if (array_key_exists(4, $line)) {

                if ($line[4] <= 150000) {
                    echo "<td>" . $tax = $line[4] - $line[4] . "</td>";
                    echo "<td>" . "ไม่เสีย" . "</td>";
                } else if ($line[4] <= 300000) {
                    $tax = ($line[4] - 150000);
                    $tax = (0.05*$tax)+0;
                    echo "<td>" . $tax. "</td>";
                    echo "<td>" . "เสียภาษี" . "</td>";
                } else if ($line[4] <= 500000) {
                    $tax = ($line[4] - 300000);
                    $tax = ($tax * 0.10)+7500;
                    echo "<td>" . $tax. "</td>";
                    echo "<td>" . "เสียภาษี" . "</td>";
                }
                else if ($line[4] <= 750000) {
                    $tax = ($line[4] - 500000);
                    $tax = ($tax * 0.15)+20000;
                    echo "<td>" . $tax. "</td>";
                    echo "<td>" . "เสียภาษี" . "</td>";
                }
                else if ($line[4] <= 1000000) {
                    $tax = ($line[4] - 750000);
                    $tax = ($tax * 0.20)+37500;
                    echo "<td>" . $tax. "</td>";
                    echo "<td>" . "เสียภาษี" . "</td>";
                }
                else if ($line[4] <= 2000000) {
                    $tax = ($line[4] - 1000000);
                    $tax = ($tax * 0.25)+50000;
                    echo "<td>" . $tax. "</td>";
                    echo "<td>" . "เสียภาษี" . "</td>";
                }
                else if ($line[4] <= 5000000) {
                    $tax = ($line[4] - 2000000);
                    $tax = ($tax * 0.30)+250000;
                    echo "<td>" . $tax. "</td>";
                    echo "<td>" . "เสียภาษี" . "</td>";
                }
                else if ($line[4] >=+ 8000000) {
                    $tax = ($line[4] - 5000000);
                    $tax = ($tax * 0.35)+0;
                    echo "<td>" . $tax. "</td>";
                    echo "<td>" . "เสียภาษี" . "</td>";
                }
            }

            echo "</tr>";
        }


        echo "</table>";
    }
    fclose($csv);
} else {
    echo "<script>goto('upload.html')</script>";
}


?>