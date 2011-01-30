<?php use_stylesheet('jobs.css') ?>
<h1>Jobeetjobs List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Category</th>
      <th>Type</th>
      <th>Company</th>
      <th>Logo</th>
      <th>Url</th>
      <th>Position</th>
      <th>Location</th>
      <th>Description</th>
      <th>How to apply</th>
      <th>Token</th>
      <th>Is public</th>
      <th>Is activated</th>
      <th>Email</th>
      <th>Expires at</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($jobeetjobs as $jobeetjob): ?>
    <tr>
      <td><a href="<?php echo url_for('job/show?id='.$jobeetjob->getId()) ?>"><?php echo $jobeetjob->getId() ?></a></td>
      <td><?php echo $jobeetjob->getCategoryId() ?></td>
      <td><?php echo $jobeetjob->getType() ?></td>
      <td><?php echo $jobeetjob->getCompany() ?></td>
      <td><?php echo $jobeetjob->getLogo() ?></td>
      <td><?php echo $jobeetjob->getUrl() ?></td>
      <td><?php echo $jobeetjob->getPosition() ?></td>
      <td><?php echo $jobeetjob->getLocation() ?></td>
      <td><?php echo $jobeetjob->getDescription() ?></td>
      <td><?php echo $jobeetjob->getHowToApply() ?></td>
      <td><?php echo $jobeetjob->getToken() ?></td>
      <td><?php echo $jobeetjob->getIsPublic() ?></td>
      <td><?php echo $jobeetjob->getIsActivated() ?></td>
      <td><?php echo $jobeetjob->getEmail() ?></td>
      <td><?php echo $jobeetjob->getExpiresAt() ?></td>
      <td><?php echo $jobeetjob->getCreatedAt() ?></td>
      <td><?php echo $jobeetjob->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('job/new') ?>">New</a>
