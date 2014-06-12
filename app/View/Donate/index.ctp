<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($donates as $donate): ?>
    <tr>
        <td><?php echo $donate['Donate']['id']; ?></td>
        <td>
            <?php echo $donate['Donate']['name']; ?>
        </td>
        <td><?php echo $donate['Donate']['email']; ?></td>

    </tr>
    <?php endforeach; ?>
    <?php unset($post); ?>
    </table>



