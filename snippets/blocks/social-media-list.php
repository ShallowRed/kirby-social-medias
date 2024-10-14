<div class="social-media-list">
<?php
foreach ($block->content()->socialmedialist()->toStructure() as $socialMediaItem) :
    snippet('social-media-link', ['socialMediaItem' => $socialMediaItem]);
endforeach;
?>
</div>
