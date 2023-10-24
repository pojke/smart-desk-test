# SmartDesk - Recruitment site

A dummy repository for new joiners to hone and learn how to develop for WordPress.

## Local Requirements

If starting from scratch you'll need at least:

1. GIT
2. LocalWP (local development environment for WordPress)
3. Composer
4. NPM/Node

This guide doesn't go into how to install these on your native OS. If you need assistance, please reach out.

## Local setup

1. Create a new [LocalWP](https://localwp.com/) website
1. Navigate to the {site_name}/app/public/ directory and remove the existing `wp-content` folder with `rm -rf wp-content`
1. Run `git clone --recursive https://github.com/pojke/smart-desk.git wp-content`
1. Change directory to `wp-content` with `cd wp-content`
1. Run `bash .build.sh`
1. Login to WP admin and change theme to `SmartDesk - Recruitment site` theme

Build.sh will run composer install on the root directory. For any other build tasks, these will need to run within their repsective folders.
