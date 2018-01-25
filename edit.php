<?php
while (($result = $row->fetch_assoc() ) != false) {
$title = $result["title"];
$small_text = $result["small_text"];
$text = $result["text"];
$date = $result["date"];
$id = $result["id"];
echo "
                <div class='col-lg-12'>

                    <div class='panel panel-default'>
                        <div class='panel-heading'>
                            <i class='fa fa-bar-chart-o fa-fw'></i><h1> $title </h1><small class='pull-right'>$date</small>
                            <div class='pull-right'>
                                <div class='btn-group'>

                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class='panel-body'>
						$small_text
						<form action = '/index.php' method = 'GET'>
						<input type = 'hidden' name='page' value='full'>
						<input type = 'hidden' name='news' value='".$id."'>
						<button type='submit' class='btn btn-info pull-right'>Прочитать полностью</button>
						</form>
                        </div>				
                        <!-- /.panel-body -->
                    </div>

				
                    <!-- /.panel -->
			


                </div>";
}
?>