
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Ocean of games </title>
	<meta name="description" content="Wiredwiki App">
	<!-- Latest compiled and minified CSS -->
	 <!-- Latest compiled and minified CSS -->
   <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	<style>
	body{
		padding-top: 40px;
	}
   ul {
    list-style-type: none;
    padding: 50px;
    margin: 0px;
}

ul li {
    
    
    padding-left: 50px;
}
	</style>
</head>


	

<body>
   
  <div class="container">
      <ul class="nav nav-pills nav-justified">
        <li class="active"><a href="#home" data-toggle="tab">New Release</a></li>
        <li ><a href="#top" data-toggle="tab">Top-seller</a></li>
        <li ><a href="#free" data-toggle="tab">Free Games</a></li>
      </ul>
    
  </div>
  <div class="tab-content">
      <div class="tab-pane fade in active" id="home">
                    <ul class="ul">
                   
                           <?php foreach ($res as $item) { ?>

                         
                            <li><?php echo $item['id']; ?></li>
                           
                            <li><?php echo $item['name']; ?></li>
                            <li><?php echo $item['price']; ?></li>                           
                            <li><button value="<?php echo $item['id']; ?>" onclick="myFunction(this.value)">Buy</button></li>


                         
    
                          <?php   }  ?>

                      
                    </ul>
      </div>
       <div class="tab-pane fade" id="top"><p>second</p></div>
        <div class="tab-pane fade" id="free">
                   <ul>
                
                   </ul>
        </div>
    
  </div>

<script type="text/javascript">
function myFunction(data) {

    
     $.ajax({
        url   :     'ajaxpart/top',
        type  :     'post',
        data  :     {'id':data},
        success :     function(res){
          console.log(res);
        }
      });
}
  
</script>
	
 
</body>	
</html>
