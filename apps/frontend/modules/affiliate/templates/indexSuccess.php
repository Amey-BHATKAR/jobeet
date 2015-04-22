<h1>Jobeet affiliates List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Url</th>
      <th>Email</th>
      <th>Token</th>
      <th>Is active</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($jobeet_affiliates as $jobeet_affiliate): ?>
    <tr>
      <td><a href="<?php echo url_for('affiliate/edit?
Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in E:\dev\sfproject\jobeet\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362

Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in E:\dev\sfproject\jobeet\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362
id='.$jobeet_affiliate->getId()) ?>"><?php echo $jobeet_affiliate->get
Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in E:\dev\sfproject\jobeet\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362

Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in E:\dev\sfproject\jobeet\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362
Id() ?></a></td>
      <td><?php echo $jobeet_affiliate->get
Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in E:\dev\sfproject\jobeet\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362

Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in E:\dev\sfproject\jobeet\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362
Url() ?></td>
      <td><?php echo $jobeet_affiliate->get
Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in E:\dev\sfproject\jobeet\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362

Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in E:\dev\sfproject\jobeet\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362
Email() ?></td>
      <td><?php echo $jobeet_affiliate->get
Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in E:\dev\sfproject\jobeet\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362

Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in E:\dev\sfproject\jobeet\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362
Token() ?></td>
      <td><?php echo $jobeet_affiliate->get
Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in E:\dev\sfproject\jobeet\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362

Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in E:\dev\sfproject\jobeet\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362
IsActive() ?></td>
      <td><?php echo $jobeet_affiliate->get
Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in E:\dev\sfproject\jobeet\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362

Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in E:\dev\sfproject\jobeet\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362
CreatedAt() ?></td>
      <td><?php echo $jobeet_affiliate->get
Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in E:\dev\sfproject\jobeet\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362

Deprecated: preg_replace(): The /e modifier is deprecated, use preg_replace_callback instead in E:\dev\sfproject\jobeet\lib\vendor\symfony\lib\util\sfToolkit.class.php on line 362
UpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('affiliate/new') ?>">New</a>
