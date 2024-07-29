<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grades</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <?php
    $names = $_POST['names'];
    $scores = $_POST['scores'];

    $students = [];
    $errors = [];

    for ($i = 0; $i < count($names); $i++) {
        if (empty($names[$i])) {
            $errors[] = "Tên học sinh thứ " . ($i + 1) . " không được để trống.";
        }
        if (!is_numeric($scores[$i]) || $scores[$i] < 0 || $scores[$i] > 10) {
            $errors[] = "Điểm của học sinh thứ " . ($i + 1) . " không hợp lệ (0-10).";
        }
    }

    if (count($errors) > 0) {
        echo '<div class="error">';
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
        echo '</div>';
        echo '<a href="index.html">Quay lại</a>';
    } else {
        for ($i = 0; $i < count($names); $i++) {
            $students[] = [
                'name' => $names[$i],
                'score' => $scores[$i]
            ];
        }

        usort($students, function($a, $b) {
            return $b['score'] - $a['score'];
        });

        $grades = [];
        foreach ($students as $student) {
            if ($student['score'] >= 8) {
                $grades[] = 'Xuất sắc';
            } elseif ($student['score'] >= 6.5) {
                $grades[] = 'Khá';
            } elseif ($student['score'] >= 5) {
                $grades[] = 'Trung bình';
            } else {
                $grades[] = 'Yếu';
            }
        }

        echo '<table>';
        echo '<tr><th>Tên</th><th>Điểm</th><th>Xếp loại</th></tr>';
        for ($i = 0; $i < count($students); $i++) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($students[$i]['name']) . '</td>';
            echo '<td>' . htmlspecialchars($students[$i]['score']) . '</td>';
            echo '<td>' . htmlspecialchars($grades[$i]) . '</td>';
            echo '</tr>';
        }
        echo '</table>';

    }
    ?>
</body>
</html>
