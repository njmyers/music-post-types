# WP Custom Post Types for Musicians

Includes wp-json endpoints for the following

```
/wp-json/wp/v2/shows
/wp-json/wp/v2/venues
/wp-json/wp/v2/bands
/wp-json/wp/v2/videos
/wp-json/wp/v2/tracks

```

The shows endpoint includes custom filtering by dates and by venues so you can build your query like so

```
/shows?before_date=2018-01-10T19:36:21.232Z&
/shows?after_date=2018-01-10T19:36:21.232Z&
/shows?venue=5
```

Install this plugin from packagist using composer

`composer install njmyers/music-post-types`

Enjoy!