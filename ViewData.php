<!DOCTYPE html>
<html>
  <head>
  	<style>

      body
{
    min-width: 1200px;
}
  		.zoom{
            zoom: 90%;
          }

.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: grey;
  border: none;
  border-radius: 15px;

}

.button:hover {background-color: green}

.button:active {
  background-color: #3e8e41;
  transform: translateY(4px);
}
  #button1{
    width: 300px;
    height: 40px;
}
#button2{
    width: 300px;
    height: 40px;
}
#container{
    text-align: center;

}


  	</style>
    <title>View Data</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/placeholder-loading/dist/css/placeholder-loading.min.css">
  </head>
  <body style="background-color: #62FF9C">
  	<div style="text-align: left; border: 0px solid">
    <img src="korostejj.png" width="200" height="50" ></div>
  	
    <br />
    <div class="container" style="">
      <br />
      <div class="card" style="width:1400px; height:630px; margin-top: -50px ; margin-left: -150px"  >
        <div class="card-body" style=" height:100px;" >
          <div class="form-group">
            <input type="text" name="search_box" id="search_box" class="form-control" placeholder="Search By ID" />
          </div>
          <div class="table-responsive" id="dynamic_content">
            
          </div>
        </div>
      </div>
      <div id="container">
      <button type="cancel" class="button" onclick="javascript:window.location='index.html';">Back to Home Page</button>
                                        </div>
    </div>

  </body>
</html>
<script>
  $(document).ready(function(){

    load_data(1);

    function load_data(page, query = '')
    {
      $.ajax({
        url:"fetch.php",
        method:"POST",
        data:{page:page, query:query},
        success:function(data)
        {
          $('#dynamic_content').html(data);
        }
      });
    }

    $(document).on('click', '.page-link', function(){
      var page = $(this).data('page_number');
      var query = $('#search_box').val();
      load_data(page, query);
    });

    $('#search_box').keyup(function(){
      var query = $('#search_box').val();
      load_data(1, query);
    });

  });
</script>