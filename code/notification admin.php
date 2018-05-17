 <?php
session_start();
require 'config.php';
?>
 <!DOCTYPE html>
 <html>
 
 <body>
 

 <form method="post" id="comment_form">
 
   <div class="form-group">
 
    <label>Enter Subject</label>
 
    <input type="text" name="subject" id="subject" class="form-control">
 
   </div>
 
   <div class="form-group">
 
    <label>Enter Comment</label>
 
    <textarea name="comment" id="comment" class="form-control" rows="5"></textarea>
 
   </div>
 
   <div class="form-group">
 
    <input type="submit" name="submit" id="post" class="btn btn-info" value="Post" />
 
   </div>
   <?php
   if(isset($_POST['submit'])){
    $mail=$_SESSION['usrname'];
    $sub=$_POST['subject'];
    $com=$_POST['comment'];
    $query="INSERT INTO `comments`(`comment_subject`, `comment_text`) VALUES ('$sub','$com')";
    $query_run = mysqli_query($con,$query);
   }
   ?>
 
  </form>
   </body>
 </html>
 <script>
 
$(document).ready(function(){
 
// updating the view with notifications using ajax
 
function load_unseen_notification(view = '')
 
{
 
 $.ajax({
 
  url:"fetch.php",
  method:"POST",
  data:{view:view},
  dataType:"json",
  success:function(data)
 
  {
 
   $('.dropdown-menu').html(data.notification);
 
   if(data.unseen_notification > 0)
   {
    $('.count').html(data.unseen_notification);
   }
 
  }
 
 });
 
}
 
load_unseen_notification();
 
// submit form and get new records
 
$('#comment_form').on('submit', function(event){
 event.preventDefault();
 
 if($('#subject').val() != '' && $('#comment').val() != '')
 
 {
 
  var form_data = $(this).serialize();
 
  $.ajax({
 
   url:"insert.php",
   method:"POST",
   data:form_data,
   success:function(data)
 
   {
 
    $('#comment_form')[0].reset();
    load_unseen_notification();
 
   }
 
  });
 
 }
 
 else
 
 {
  alert("Both Fields are Required");
 }
 
});
 
// load new notifications
 
$(document).on('click', '.dropdown-toggle', function(){
 
 $('.count').html('');
 
 load_unseen_notification('yes');
 
});
 
setInterval(function(){
 
 load_unseen_notification();;
 
}, 5000);
 
});
 
</script>