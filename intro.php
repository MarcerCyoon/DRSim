<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>A Danganronpa Simulator</title>
  </head>

  <body>
    <nav class="navbar navbar-expand-xl navbar-dark bg-dark">
      <a class="navbar-brand">DR Simulator</a>

      <ul class="navbar-nav mr-auto">
        <li class="nav-item mr-md-3">
          <a class="navbar-link" href="about.html" style="color: white;">About</a>
        </li>

        <li class="nav-item mr-md-3">
          <a class="navbar-link" href="index.html" style="color: white;">Reset</a>
        </li>

      </ul>
        <span class="navbar-text">MarcerCyoon</span>
    </nav>

    <div class="mt-2"></div>

    <div class="container">

      <p>The 16 of you discovered yourselves in a school, locked and barred from the outside. During your search for an exit, an announcement comes over the PA system, telling you to gather in the gym. When you arrive, a bear appears... calling himself Monokuma. He declares that everyone will now be living inside the school, hidden from the outside, forever. There is one ticket to the outside, though: murdering another student. Instantly, you all look at each other.
      </p>
      <p style="color:red;">And so the Killing Game begins...</p>

      <p>Welcome <?php echo $_POST["charName1"]; ?> </p>

      <button type="button" class="btn btn-danger">Continue...</button>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
