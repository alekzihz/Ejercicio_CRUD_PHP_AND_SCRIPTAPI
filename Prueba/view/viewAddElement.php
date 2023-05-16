<!DOCTYPE html>
<head>
  <link rel ="stylesheet" href="../css/formAddElements.css">
</head>
<div class="wrapper">
  <div style="width: 30%;">
    <form class="formAddElements" method="post" action="./insert">
      <br>
      <label for="name">Name</label><br>
      <input type="text" id="name" name="name" required><br>

      <label for="model">Model</label><br>
      <input type="text" id="model" name="model" required><br>

      <label for="manufacturer">Manufacturer</label><br>
      <input type="text" id="manufacturer" name="manufacturer" required><br>

      <label for="cost_in_credits">Cost in Credits</label><br>
      <input type="number" id="cost_in_credits" name="cost_in_credits" required><br>

      <label for="length">Length</label><br>
      <input type="number" id="length" name="length" required></br>

      <label for="max_atmosphering_speed">Max Atmosphering Speed</label></br>
      <input type="number" id="max_atmosphering_speed" name="max_atmosphering_speed" required><br>
    
      <label for="crew">Crew</label><br>
      <input type="text" id="crew" name="crew" required><br>

      <label for="passengers">Passengers</label><br>
      <input type="number" id="passengers" name="passengers" required>

      <button type="submit">Submit</button>
  </div>
  <div style="width: 30%;">
      <br>
      <label for="cargo_capacity">Cargo Capacity</label><br>
      <input type="number" id="cargo_capacity" name="cargo_capacity" required><br>

      <label for="consumables">Consumables</label><br>
      <input type="text" id="consumables" name="consumables" required><br>

      <label for="hyperdrive_rating">Hyperdrive Rating</label><br>
      <input type="text" id="hyperdrive_rating" name="hyperdrive_rating" required><br>

      <label for="MGLT">MGLT</label><br>
      <input type="number" id="MGLT" name="MGLT" required><br>

      <label for="starship_class">Starship Class</label><br>
      <input type="text" id="starship_class" name="starship_class" required><br>

      <label for="created">Created</label><br>
      <input type="datetime-local" id="created" name="created" required><br>

      <label for="edited">Edited</label><br>
      <input type="datetime-local" id="edited" name="edited"><br>

      <label for="url">URL</label><br>
      <input type="url" id="url" name="url" required><br>
      <button  onclick="window.location.href='./../viewList'">Back</button>
    </form>
  </div>
</div>