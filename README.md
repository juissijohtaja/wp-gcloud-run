# Wordpress custom theme and cloud deployment

I made a custom Wordpress theme from scratch and deployed the app to Google Cloud. 

The theme uses Bootstrap for styling and has templates for front page, blog, posts and pages. It also has widget placements for footer and promo content on the front page. The theme uses many functions and some additional css styling for customization.

Wordpress CMS and the website using my theme have been deployed to Google Cloud Run using a Docker container and it uses Google Cloud SQL for MySql-database. Uploaded images are stored in Google Cloud Storage bucket using WP Offload Media Lite plugin.

I also used Docker Compose for local development. The setup is running Wordpress, phpMyAdmin and mySql containers in a local network.

## Updates

- Wordpress is now updated to the latest version 5.7.

## More info
- [Wordpress](https://wordpress.org/)
- [Google Cloud Run](https://www.google.com)
- [Google Cloud SQL](https://cloud.google.com/sql)
- [Docker](https://www.docker.com/)
- [Bootstrap](https://getbootstrap.com/)

