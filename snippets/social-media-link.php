<?php
echo Html::a(
    $socialMediaItem->url(),
    [Html::span('', ['class' => $socialMediaItem->icon()])],
    [
        "class" => "social-media-link",
        "target" => "_blank",
        "rel" => "noopener noreferrer",
        "aria-label" => $socialMediaItem->name(),
    ]
);
