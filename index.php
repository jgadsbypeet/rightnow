<?php include 'header.php';?>    
<?php include 'analytics.php'; ?>

<div class="container">
    <h1>Make your own Right Now poster</h1>
    <form action="output.php" method="post" enctype="multipart/form-data">
        <input type="date" name="nowdate"><br/> Choose your date<br/>        <br/>
        <textarea id="textarea" cols="50" rows="7" name="nowcontent" maxlength="80"></textarea> <br/>
        Write your message
        <div id="textarea_feedback" class="pink"></div><br/>
        <select name="nowCTA"><br/>
        <option value="donate">Donate</option>
        <option value="sign  up">Sign up</option>    
        </select>
        Choose your CTA <br/><br/>
        <input type="submit" name="submit" value="submit >">
    </form>
    <img src="screenshot.jpg" class="screenshot">
    </div>
</div>
    <a href="http://www.jamesgadsby.co.uk/"><p>By James Gadsby Peet</p></a>
<script>
$(document).ready(function() {
    var text_max = 80;
    $('#textarea_feedback').html(text_max + ' characters remaining');

    $('#textarea').keyup(function() {
        var text_length = $('#textarea').val().length;
        var text_remaining = text_max - text_length;

        $('#textarea_feedback').html(text_remaining + ' characters remaining');
    });
});</script>
</body>
</html>