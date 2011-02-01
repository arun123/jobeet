<h1>Jobeet categorys List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($jobeet_categorys as $jobeet_category): ?>
    <tr>
      <td><a href="<?php echo url_for('category/show?id='.$jobeet_category->getId()) ?>"><?php echo $jobeet_category->getId() ?></a></td>
      <td><?php echo $jobeet_category->getName() ?></td>
      <td><?php echo $jobeet_category->getCreatedAt() ?></td>
      <td><?php echo $jobeet_category->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('category/new') ?>">New</a>
