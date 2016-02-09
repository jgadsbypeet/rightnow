<?php include 'header.php';?>    
<?php include 'analytics.php'; ?>

<?php $date = $_POST['nowdate']; ?>
<?php $newDateDay = date("d", strtotime($date)); ?>
<?php $newDateMonth = date("M", strtotime($date)); ?>
<?php $content = $_POST['nowcontent']; ?>
<?php $CTA = $_POST['nowCTA']; ?>

<?php 
function ordinal($number) {
    $ends = array('<span class="ord">th</span>','<span class="ord">st</span>','<span class="ord">nd</span>','<span class="ord">rd</span>','<span class="ord">th</span>','<span class="ord">th</span>','<span class="ord">th</span>','<span class="ord">th</span>','<span class="ord">th</span>','<span class="ord">th</span>');
    if ((($number % 100) >= 11) && (($number%100) <= 13))
        return $number. '<span class="ord">th</span>';
    else
        return $number. $ends[$number % 10];
}?>
<?php $newDateDayPrint = ordinal($newDateDay);?>

<div class="container">
    <div class="date">
    <?php echo $newDateDayPrint;?>
    <?php echo htmlspecialchars($newDateMonth) ;?><br/>
        Right Now
        </div>
    <div class="now-content">
        <?php echo htmlspecialchars($content) ;?>.<span class="pink">/</span>
        </div>
    <div class="now-circle-container">
    <p><?php echo htmlspecialchars($CTA) ;?></p>        
    <img src="right-now-circle.png" width="180px">
        </div>
    <div class="footer-words">
    <img src="CRUK_Pos_RGB-01.svg" alt="Cancer Research UK logo" width="180px" class="logo-bottom">
        <p>LET’S BEAT CANCER <span class="pink">SOONER</span></p>
    </div>
    

    </div>
</div>
<a href="http://www.jamesgadsby.co.uk/"><p>By James Gadsby Peet</p></a>

</body>
</html>