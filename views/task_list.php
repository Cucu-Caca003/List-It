<?php require 'views/header.php'; ?>

<form action="index.php?action=add" method="post">
    <input type="text" name="task" placeholder="New task" required>
    <button type="submit">Add Task</button>
</form>


<ul>
    <?php foreach ($tasks as $task): ?>
        <li>
            <?php echo htmlspecialchars($task['description']); ?>
            <?php if (!$task['completed']): ?>
                <a href="index.php?action=complete&id=<?php echo $task['id']; ?>"><i class="fa-regular fa-square-check"></i></a>
            <?php else: ?>
                <span><i class="fa-solid fa-square-check"></i></span>
            <?php endif; ?>
            <a href="index.php?action=delete&id=<?php echo $task['id']; ?>"><i class="fa-regular fa-trash-can"></i></a>
        </li>
    <?php endforeach; ?>
</ul>

<?php require 'views/footer.php'; ?>
