<style>
  .jumbotron {
    background-color: #222121;
    color: white;
    padding: 10px 10px;
  }
  </style>
<div class="jumbotron text-center">
  <h1>Híreink</h1> 
  <p>Itt olvashatják a pizzéria híreit, valamint közzétehetnek Önök is.</p>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>Sorszáma</th>
      <th>Hír</th>
      <th>Közzétevő</th>
      <th>Dátum</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach(get_messages() as $message): ?>
    <tr>
      <th><?php echo $message['id']; ?></th>
      <td><?php echo $message['uzenet']; ?></td>
      <td><?php echo $message['nev']; ?></td>
      <td><?php echo $message['datum']; ?></td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
<?php
$max_character_count = 2000;

if ($_POST) {
  $message = $_POST['uzenet'];
  if ((strlen($message) <= $max_character_count)) {
    send_message($message);
    redirect('hirek');
  }
}
?>
  <div class="jumbotron text-center">
    
    <form action="?oldal=hirek" method="post">
      <div class="form-group">
        <label for="uzenet">
          Hír amit meg szeretne osztani (<span id="karakterek">0</span> / <?php echo $max_character_count; ?> karakter)
        </label>
        <textarea class="form-control" id="uzenet" name="uzenet" rows="10"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Küldés</button>
    </form>


<script>
    $(() => {
        $("#uzenet").on('keyup', function(){
            let character_count = $(this).val().length;
            $("#karakterek").text(character_count);
            if (character_count > <?php echo $max_character_count; ?>) {
                $('form button[type="submit"]').prop('disabled', true);
            } else {
                $('form button[type="submit"]').prop('disabled', false);
            }
        });
    });
</script>
