# Get thumbnail from YT video

- Add in your project the class GetThumbnail
- set URL 

Example

```php

$video = new GetThumbnail;
$video->url="https://www.youtube.com/watch?v=nCB1gEkRZ1g&t=20956s";
$video->get_thumbnail();
```


```html
<img src="<?=$video->thumbnail?>">
```
