<?php
$listName = $table[0];


?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><?= $headTitle; ?></h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <?php foreach ($listName as $key => $value) {
                        if ($key != 'id'){?>
                        <th><?= ucfirst($key); ?></th>
                    <?php } } ?>
                    <?php foreach ($listFunc as $funcTable) { ?>
                        <th><?= ucfirst($funcTable); ?></th>
                    <?php } ?>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <?php foreach ($listName as $key => $value) {
                    if ($key != 'id'){?>
                        <th><?= ucfirst($key); ?></th>
                    <?php } } ?>
                    <?php foreach ($listFunc as $funcTable) { ?>
                        <th><?= ucfirst($funcTable); ?></th>
                    <?php } ?>
                </tr>
                </tfoot>
                <tbody>
                <?php foreach ($table as $list){ ?>
                <tr>
                <?php foreach ($list as $key => $value){
                if ($key != 'id'){?>
                    <th><?= $value;?></th>
                <?php } } ?>
                    <?php foreach ($listFunc as $funcTable) {
                        if ($funcTable == 'supprimer'){ $funcName = 'delete'; $funcIcon = 'fas fa-trash-alt';}
                        if ($funcTable == 'modifier'){ $funcName = 'update'; $funcIcon = 'fas fa-edit';}
                        if ($funcTable == 'marquer lu'){ $funcName = 'read'; $funcIcon = 'fas fa-check-square';}
                        if ($funcTable == 'publier'){ $funcName = 'publish'; $funcIcon = 'fas fa-paper-plane';}
                        ?>
                        <th class="btn-<?= $funcName; ?>">
                            <div class="my-2"></div>
                            <a href="<?= $funcName; ?>.php?table=<?= $tableName?>&id=<?php echo $list['id']; ?>" class="btn btn-info" <?php if($funcName == 'delete') { echo 'onclick="return confirm(\'Voulez vous vraiment effacer cet article ?\')" ';} ;?>>
                    <span class="icon text-white-50">
                      <i class="<?= $funcIcon; ?>"></i>
                    </span>
                            </a>

                        </th>
                    <?php } ?>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <?php if (!empty($add)) { ?>
        <a href="add.php?table=<?= $tableName?>" class="btn btn-secondary btn-icon-split">
          <span class="icon text-white-50">
           <i class="fas fa-plus"></i>
          </span>
            <span class="text"><?= $add; ?></span>
        </a>
        <?php } ?>
    </div>