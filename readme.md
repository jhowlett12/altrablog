# Custom Taxonomies

There are a few WordPress functions for custom taxonomies. 


    echo altrablog_get_athlete_from_post( get_the_id() );

The above will build a link to a single athlete on the page.

    echo altrablog_get_athletes_list_from_post( get_the_id() );

This will build an unordered list of all athletes attached to the post.