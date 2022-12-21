

  <section>
    <div class="container mb-5">
    <center><h2>Backup and Restore</h2></center>
    </div>
</section>

<section>
    <div class="container mb-5">
      <h3>Menu Backup</h3>
      <br>
    <a href="<?= base_url('backup/backup1'); ?>" title="Backup Database" class="btn btn-primary">Klik Untuk Backup Database</a>

  <br>
<br>
  <h3>Menu Restore</h3>
      <br>

      <br>
      <form action="<?= base_url('backup/restore'); ?>" method="POST" enctype="multipart/form-data">
    
        <input type="file" name="datafile" title="Pilih File">
        <br>
        <input class="btn btn-primary mt-3" type="submit" value="Klik Untuk Restore">

      </form>

    </div>
</section>