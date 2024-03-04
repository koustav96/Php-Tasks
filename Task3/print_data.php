<?php
function show_data(string $full_name, mixed $image, string $marks): void {
    ?>
    <h1>Hello
    <?= $full_name ?>
    </h1>
    <img src="<?= $image ?>" height='200px'>
    <h2>Subject Marks</h2>
    <table border='1px'>
        <tr>
            <th>Subject</th>
            <th>Mark</th>
        </tr>
        <?php
            $marks = explode("\n", $marks);
            foreach ($marks as $mark) {
                $subject_mark = explode("|", $mark);
                $subject = isset($subject_mark[0]) ? trim($subject_mark[0]) : '';
                $mark = isset($subject_mark[1]) ? trim($subject_mark[1]) : '';
            ?>
            <tr>
                <td>
                    <?= $subject ?>
                </td>
                <td>
                    <?= $mark ?>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <?php
}
