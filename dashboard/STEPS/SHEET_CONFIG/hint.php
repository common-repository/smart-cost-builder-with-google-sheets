
<div class="sgsc-input-container sgsc-hide" sheet-msg="1">
<p class="sgsc-gsheet-error red-error">
	Please adjust the sharing settings of your Google Sheet to <br><br>
	"<b>Anyone with the link can edit</b>" <br><br> 
    so the plugin can access it.
</p>

<center><img class="sgsc-hint-img sgsc-pointer" onclick="window.open('<?php echo $share_image; ?>','_blank')" src="<?php echo $share_image; ?>"></center>
</div>




<div class="sgsc-input-container sgsc-hide" sheet-msg="2">
<p class="sgsc-gsheet-error red-error">
	The "<b><span style="color: red;">sgsc-link</span></b>" tab was not found in your spreadsheet <span sgsc="sheet-title"></span>. Please ensure that the tab exists and is correctly named.

    <br><br>
	The "sgsc-link" tab facilitates communication between the plugin and your Google Sheet, allowing it to send user-entered inputs and receive calculated outputs for display on the calculator.
</p>


<center><img class="sgsc-hint-img sgsc-pointer" onclick="window.open('<?php echo $sgsc_link; ?>','_blank')" src="<?php echo $sgsc_link; ?>"></center>
</div>






<div class="sgsc-input-container sgsc-hide" sheet-msg="3">
<p class="sgsc-gsheet-error red-error">
	We are unable to verify edit access. Please adjust the sharing settings of your Google Sheet to <br><br>
	"<b>Anyone with the link can <span style="color:red;">edit</span></b>" <br><br> 
    so the plugin can access it.
</p>

<center><img class="sgsc-hint-img sgsc-pointer" onclick="window.open('<?php echo $share_image; ?>','_blank')" src="<?php echo $share_image; ?>"></center>
</div>






<div class="sgsc-input-container sgsc-hide" sheet-msg="0">
<p class="sgsc-gsheet-error green-error">
	Connection Successfull!
</p>

<center><img class="sgsc-hint-img" style="width:300px;" src="<?php echo $success_img; ?>"></center>
</div>