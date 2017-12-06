<aside class="col-lg-4 pt-4 pt-lg-0">
  <div class="sidebar business-hours p-3">
    <h2 class="text-center text-uppercase">Business Hours</h2>
    <?php dynamic_sidebar('sidebar_widget_1'); ?>
    <p class="text-center mt-5">
      <?php the_field('business_hours_text'); ?>
    </p>
    <?php 
      $table = get_field('business_hours');
      if($table):
    ?>
      <table class="table table-hover text-center mt-5">
        <thead class="table-danger">
          <tr>
            <?php foreach($table['header'] as $th): ?>
              <th class="text-center"><?php echo $th['c'] ?></th>
            <?php endforeach; ?>
          </tr>
        </thead>
        <tbody>
        <?php foreach($table['body'] as $tr): ?>
          <tr>
          <?php foreach($tr as $td): ?>  
            <td><?php echo $td['c'] ?></td>
          <?php endforeach; ?>  
          </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
    <?php endif; ?>
  </div>
</aside>