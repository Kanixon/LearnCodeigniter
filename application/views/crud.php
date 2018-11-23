<body>
  <br>
  <table class="table">
    <thead class="thead-light">
      <tr>
        <th scope="col">#</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Address</th>
        <th scope="col">Function</th>
      </tr>
    </thead>
    <tbody>
      <?php if (count($posts)): ?>
        <?php
        foreach ($posts as $post) {
          ?>
          <tr>
            <th scope="row">1</th>
            <td><?php echo $post->namaDepan; ?></td>
            <td><?php echo $post->namaBelakang; ?></td>
            <td><?php echo $post->alamat; ?></td>
            <td>
              <?php
              echo anchor('welcome','Edit',['class'=>'btn btn-primary btn-sm']);
              ?>
              <?php
              echo anchor('controller','Delete',['class'=>'btn btn-danger btn-sm']);
              ?>
            </td>
          </tr>
        <?php } ?>
      <?php else: ?>
        <tr>
          <td>No Record Found</td>
        </tr>
      <?php endif; ?>
    </tbody>
  </table>
  <?php
  echo anchor('controller/function','Add Data',['class'=>'btn btn-primary']);
  //todo :
  //tampilkan modal add data.
  ?>
</body>
