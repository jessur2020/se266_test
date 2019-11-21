<html>
<head>
<title>Vote for your favorite Disney Character</title>
<style type="text/css">
    .main {margin-left: 100px; margin-top: 100px;}
    .character {float: left; margin-right: 10px; border: 10px solid black; padding: 0px 10px 0px 0px; width: 300px;}
    .results {float: left; margin-right: 10px; border: 1px solid black; width: 400px; margin-top: 100px;}
    .button-size {width: 200px; height: 50px;}
    .button-div {margin: 10px 0px 10px 30px;}
    h2, h3 {margin-left: 50px;}
   
</style>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
  
</head>
<body>

    <div class="main"><h1>Vote for your favorite Disney Character</h1>
                <div class="character">
            <h3>Donald Duck</h3>
            <img src="./images/donald.png ">
            <div class="button-div">
            <input type="button" 
                   class="btn btn-success button-size" 
                   data-character-id="1"
                   value="Vote for Donald Duck">
            </div>
         </div>
        
                <div class="character">
            <h3>Goofy</h3>
            <img src="./images/goofy.png ">
            <div class="button-div">
            <input type="button" 
                   class="btn btn-success button-size" 
                   data-character-id="3"
                   value="Vote for Goofy">
            </div>
         </div>
        
                <div class="character">
            <h3>Mickey Mouse</h3>
            <img src="./images/mickey.png ">
            <div class="button-div">
            <input type="button" 
                   class="btn btn-success button-size" 
                   data-character-id="2"
                   value="Vote for Mickey Mouse">
            </div>
         </div>
        
                <div class="results">
            <h2>Voting Results</h2>
            <canvas id="myChart"></canvas>
        </div>
    </div>
</body>
</html>

<script>
    function displayChart () {
        $.get ("vote.php", function (data) {
            votes = JSON.parse (data);
            
            new Chart(document.getElementById("myChart"), {
                type: 'bar',
                data: {
                  labels: votes[0],
                  datasets: [
                    {
                      label: "Number of Votes",
                      backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f"],
                      data: votes[1],
                      borderWidth: 10
                    }
                  ]
                },
                options: {
                  legend: { display: false },
                  title: {
                    display: false,
                    text: 'Number of Votes By Disney Character'
                  },
                  scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    }
                }
            });
        })
    }
    $(document).ready (function (e) {
        displayChart ();
        $(".btn").click (function (e) {
            
            $.post ("vote.php", {characterId: $(this).data("characterId")}, function (data) {
               displayChart ();
            })
        });
    })
</script>