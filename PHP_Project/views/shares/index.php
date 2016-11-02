<div>
     <a href="<?php echo ROOT_PATH; ?>shares/add" class="btn btn-success btn-share">Share something!</a>
     <?php foreach($viewModel as $item): ?>
     <div class="well">
          <h3><?php echo $item['title']; ?> </h3>
          <small> <?php echo $item['create_date']; ?> </small>
          <hr/>
          <p>
               <?php echo $item['body']; ?>
          </p>
          <br />
          <a class="btn btn-default" href="<?php echo $item['link']; ?>" target="_blank">Go to website!</a>
     </div>
     <?php endforeach; ?>
</div>
