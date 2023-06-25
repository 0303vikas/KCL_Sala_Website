<section class="comments_box">
	              <form class="clearfix" action="Accommodation.php" method="post" id="comment_form">
					<textarea name="comment_text" id="comment_text" class="form-control" cols="30" rows="3" required></textarea>
					<button class="" id="submit_comment" type="submit">Submit comment</button>
				</form>
				<div class="get-comment-wrapper">
				<button id="get_comments" style="">See Comments</button>

</div>
<div class="hide-comment-wrapper">
<button id="hide_comments" style="display: none;margin-bottom: 15px;">Hide Comments</button><br>

</div>

				<div id="comment_div" style="display: none;overflow-y: scroll;overflow-x: scroll;height: 300px;width:50%;margin-left:20px;margin-bottom: 10px;"> 



					<?php 
					for ($i=$max_id; $i>=1; $i--) { 
						 echo "<div id=".$i." style=''><span style='margin:0px 50px 0px 20px;padding:20px 0px 20px 0px;'><b>".$comment_user_name[$i]."   |</b></span>".$comment[$i]."</div><hr>" ;
					}
				    ?>
				</div>
				

				
		<script>    if( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}</script>		

        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<script type="text/javascript" src="comments.js"></script>	

</section>
