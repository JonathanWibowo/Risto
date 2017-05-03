<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
        <title>Blank App</title>
    </head>
    <body>
        <script type="text/javascript" src="cordova.js"></script>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript">
			$(document).ready(function()
			{
					$("#insert").click(function(){
					var name=$("#name").val();
					var restid=$("#restid").val();
					var img=$("#img").val();
					var dataString="name="+name+"&restid="+restid+"&img="+img+"&insert=";
					if($.trim(title).length>0 & $.trim(duration).length>0 & $.trim(price).length>0)
					{
						$.ajax({
							type: "POST",
							url:"http://localhost/resto/insertNewFood.php",
							data: dataString,
							crossDomain: true,
							cache: false,
							beforeSend: function(){ $("#insert").val('Connecting...');},
								success: function(data){
									if(data=="success")
									{
										alert("inserted");
										$("#insert").val('submit');
									}
									else if(data=="error")
									{
										alert("error");
									}
								}
						});
					}return false;
				});
			});
		</script>
		
		<div class="bar bar-header bar-positive" style="margin-bottom:80px;">
			<h1 class="title">Insert Database</h1>
			<a class="button button-clear" href="readjson.html">Read JSON</a>
			</div><br/><br/>
			<div class="list">
			<input type="hidden" id="id" value=""/>
			<div class="item">
				<label>name</label>
				<input type="text" id="name" value=""/>
			</div>
			<div class="item">
				<label>restid</label>
				<input type="text" id="restid" value=""/>
			</div>
			<div class="item">
				<label>img</label>
				<input type="text" id="img" value=""/>
			</div>
			<div class="item">
				<input type="button" id="insert" class="button button-block" value="Insert"/>
			</div>
		</div>
		
    </body>
</html>