<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($users as $user): ?>
        <tr>
            <th scope="row"><?= $user->id ?></th>
            <td><?= $user->name ?></td>
            <td><?= $user->email?></td>
            <td><a href="/user/edit?id=<?= $user->id ?>" class="btn btn-primary">Update</a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>