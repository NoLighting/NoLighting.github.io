<?php
$row = $mysqli->query ("SELECT * FROM `news` WHERE `id` =  '".$_GET['news']."' ORDER BY id ASC");
while (($result = $row->fetch_assoc() ) != false) {
$title = $result["title"];
$small_text = $result["small_text"];
$text = $result["text"];
$date = $result["date"];
echo "
                <div class='col-lg-12'>

                    <div class='panel panel-default'>
                        <div class='panel-heading'>
                            <i class='fa fa-bar-chart-o fa-fw'></i> $title <small class='pull-right'>$date</small>
                            <div class='pull-right'>
                                <div class='btn-group'>

                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class='panel-body'>
						$text
						<form action = 'index.php' method = 'GET'>
						<input type = 'hidden' name = 'page' value = 'index'>
						<button type='submit' class='btn btn-info pull-right'>Назад</button>
						</form>	
                        </div>					
                        <!-- /.panel-body -->
                    </div>


				
                    <!-- /.panel -->
			


                </div>";
}

?>