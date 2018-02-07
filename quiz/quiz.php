<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Quiz</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="title">
      <h1>Addiction Quiz</h1>
    </div>
    <div class="question">

    <?php
      require_once ("CSV.class.php");

      // quiz.php?q=1
      // quiz.php
      if (isset($_GET["q"])) {
        $question_id = $_GET["q"];
      }
      else {
        $question_id = 1;
      }
      if ($question_id == 0) {
        echo "there is something wrong";
      }
      else if ($question_id < 0) {
        echo "You are addicted to your topic!";
      }
      if ($question_id > 10) {
        echo "You are not addicted to your topic!";
      }
      else {

        $csv = new CSV("list.csv");

        $question = $csv->get_cell($question_id, 1);
        $id_yes = $csv->get_cell($question_id, 2);
        $id_no = $csv->get_cell($question_id, 3);
        $id_dunno = $csv->get_cell($question_id, 4);

        echo "<h1>$question</h1>";
        echo "<a href=\"quiz.php?q=$id_yes\">Yes<a/><br>";
        echo "<a href=\"quiz.php?q=$id_no\">No<a/><br>";
        echo "<a href=\"quiz.php?q=$id_dunno\">I dont know<a/><br>";
      }
    ?>

  </div>
  <footer>
    <div class="bottomline">
    </div>
  </footer>
  </body>
</html>
