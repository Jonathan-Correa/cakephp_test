<table class="table">
    <thead class="table-dark">
        <tr>
            <th>username</th>
            <th>password</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($users as $user): ?>
            <tr>
                <td> <?php echo $user["User"]["username"] ?> </td>
                <td> <?php echo $user["User"]["password"] ?> </td>
        <?php endforeach; ?>
    </tbody>
</table>