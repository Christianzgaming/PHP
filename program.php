<?php
// Sample data array (you would normally fetch this data from a database)
$programs = [
    ['id' => 1, 'date' => 'July 3, 2023', 'activity' => 'Enrolment', 'responsible' => 'Enrolling Officer'],
    ['id' => 2, 'date' => 'July 17, 2023', 'activity' => 'Hiring and Recruitment', 'responsible' => 'HR and Principal'],
    ['id' => 3, 'date' => 'August 1 to 10, 2023', 'activity' => 'INSET/Training', 'responsible' => 'HR and DEPARTMENT HEADS'],
    // Add more data as necessary
];

// Filter logic if month is selected
$selectedMonth = isset($_GET['month']) ? $_GET['month'] : '';

if ($selectedMonth) {
    $programs = array_filter($programs, function ($program) use ($selectedMonth) {
        return strpos($program['date'], $selectedMonth) !== false;
    });
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program List</title>
    <link rel="stylesheet" href="table.css">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
        form {
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <h1>Program List</h1>

    <!-- Month selection form -->
    <form method="GET">
        <label for="month">Select Month:</label>
        <select name="month" id="month">
            <option value="">All Months</option>
            <option value='01' <?php echo $selectedMonth == '01' ? 'selected' : ''; ?>>January</option>
            <option value='02' <?php echo $selectedMonth == '02' ? 'selected' : ''; ?>>February</option>
            <option value='03' <?php echo $selectedMonth == '03' ? 'selected' : ''; ?>>March</option>
            <option value='04' <?php echo $selectedMonth == '04' ? 'selected' : ''; ?>>April</option>
            <option value='05' <?php echo $selectedMonth == '05' ? 'selected' : ''; ?>>May</option>
            <option value='06' <?php echo $selectedMonth == '06' ? 'selected' : ''; ?>>June</option>
            <option value='07' <?php echo $selectedMonth == '07' ? 'selected' : ''; ?>>July</option>
            <option value='08' <?php echo $selectedMonth == '08' ? 'selected' : ''; ?>>August</option>
            <option value='09' <?php echo $selectedMonth == '09' ? 'selected' : ''; ?>>September</option>
            <option value='10' <?php echo $selectedMonth == '10' ? 'selected' : ''; ?>>October</option>
            <option value='11' <?php echo $selectedMonth == '11' ? 'selected' : ''; ?>>November</option>
            <option value='12' <?php echo $selectedMonth == '12' ? 'selected' : ''; ?>>December</option>
        </select>
        <input type="submit" value="Filter">
    </form>

    <!-- Display program data in a table -->
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Date</th>
                <th>Activity</th>
                <th>Responsible</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($programs)): ?>
                <tr>
                    <td colspan="4" style="text-align: center;">No programs found for the selected month.</td>
                </tr>
            <?php else: ?>
                <?php foreach ($programs as $index => $program): ?>
                    <tr>
                        <td><?php echo $index + 1; ?></td>
                        <td><?php echo $program['date']; ?></td>
                        <td><?php echo $program['activity']; ?></td>
                        <td><?php echo $program['responsible']; ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
