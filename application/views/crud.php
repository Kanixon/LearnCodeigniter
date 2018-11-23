<body>
  <br>
  <table class="table">
    <thead class="thead-light">
      <tr>
        <!-- <th scope="col">#</th> !-->
        <th scope="col">Employee Number</th>
        <th scope="col">birth Date</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Gender</th>
        <th scope="col">Hire Date</th>
        <th scope="col">Fungsi</th>
      </tr>
    </thead>
    <tbody>
      <!--Fetch data dari database-->
      <?php foreach ($data->result() as $hasil) :?>
        <tr>
          <!-- <th scope="row">1</th> -->
          <td><?php echo $hasil->emp_no; ?></td>
          <td><?php echo $hasil->birth_date; ?></td>
          <td><?php echo $hasil->first_name; ?></td>
          <td><?php echo $hasil->last_name; ?></td>
          <td><?php echo $hasil->gender; ?></td>
          <td><?php echo $hasil->hire_date; ?></td>
          <td>
            <?php
            echo anchor('welcome','Edit',['class'=>'btn btn-primary btn-sm']);
            ?>
            <?php
            echo anchor('controller','Delete',['class'=>'btn btn-danger btn-sm']);
            ?>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <div class="row">
    <div class="col">
      <!--Tampilkan pagination-->
      <?php echo $pagination; ?>
      <?php echo "test" ?>
    </div>
  </div>
  <?php
  echo anchor('controller/function','Add Data',['class'=>'btn btn-primary']);
  //todo :
  //tampilkan modal add data.
  ?>
</body>
